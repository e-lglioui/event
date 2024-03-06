<?php

namespace App\Http\Controllers;

use App\Models\event;
use App\Http\Requests\StoreeventRequest;
use App\Http\Requests\UpdateeventRequest;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //  $events = Event::with('categorie:titre,id', 'location:ville,id')->get();
        $events= Event::all();
        // dd($events);

       // dd($events[0]->categorie->titre);
    //    dd($events[0]->localisation->ville);
        return view('admin.event-statue',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreeventRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateeventRequest $request, event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(event $event)
    {
        //
    }
     public function accept($id){
        // dd($id);
        $event = event::find($id);
        //dd($event->statue);
       if ($event) {
        $event->statue=1;
        $event->save();
        //dd($event->statue);
        return redirect()->route('events.index');
    }
    return null; 
     }

     public function reject($id){
        // dd($id);
        $event = event::find($id);
        //dd($event->statue);
       if ($event) {
        $event->delete();
        return redirect()->route('events.index');
    }
    return null; 
     }

}
