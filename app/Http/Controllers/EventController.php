<?php

namespace App\Http\Controllers;

use App\Models\event;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateeventRequest;
use App\Models\Categorie;
use App\Models\localisation;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
  

     public function index()
     {
         $events = event::all()->where('org_id', auth()->id());
         return view('organisateur.event', compact('events'));
     }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categorie::all();
        $localisations = Localisation::all();
        return view('organisateur.event-creat', compact('categories', 'localisations'));
    }

    /**
     * Store a newly created resource in storage.
     */
   

    public function store(StoreeventRequest $request)
    {
        // dd($request);
        $request->validate([
            'titre' => 'required|unique:events', 
            'descreption' => 'required',
            'overture' => 'required',
            'fermeture' => 'required',
            'available_seats'=>'required',
            'categorie_id' => 'required',
            'location_id' => 'required',
        
        ]);
//  dd(auth()->id());
        $org_id = auth()->id();
        
        $imgPath = $request->file('img')->store('uploads', 'public');

        $event =event::create([
            'titre' => $request->titre,
            'descreption' => $request->descreption,
            'overture' => $request->overture,
            'fermeture' => $request->fermeture,
            'available_seats' => $request->available_seats,
            'statue' => 0,
            'categorie_id' => $request->categorie_id,
            'localisation_id' => $request->location_id,
            'img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'img' => $imgPath,
            'org_id' => $org_id,
           ]);
//        $event->save();
    
        return redirect()->route('event.index')->with('success', 'Event created successfully!');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        return view('organisateur.event-show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        $categories = Categorie::all();
        $localisations = Localisation::all();

        return view('organisateur.event-edit', compact('event', 'categories', 'localisations'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventRequest $request, Event $event)
    {
        $event->update($request->validated());

        return redirect()->route('event.index')->with('success', 'Event updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $event->delete();

        return redirect()->route('event.index')->with('success', 'Event deleted successfully!');
    }



     public function accept($id){
        // dd($id);
        $event = event::find($id);
        //dd($event->statue);
       if ($event) {
        $event->statue=1;
        $event->save();
        //dd($event->statue);
        return redirect()->route('events.valider');
    }
    return null; 
     }

     public function reject($id){
        // dd($id);
        $event = event::find($id);
        //dd($event->statue);
       if ($event) {
        $event->delete();
        return redirect()->route('events.valider');
    }
    return null; 
     }

     public function valider()
     {
         //  $events = Event::with('categorie:titre,id', 'location:ville,id')->get();
         $events= Event::all();
    
 
        // dd($events[0]->categorie->titre);
       //dd($events[0]->localisation->ville);
         return view('admin.event-statue',compact('events'));
     }

}
