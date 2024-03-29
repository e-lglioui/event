<?php

namespace App\Http\Controllers;

use App\Models\tickit;
use App\Http\Requests\StoretickitRequest;
use App\Http\Requests\UpdatetickitRequest;
use App\Models\event;
use Illuminate\Http\Request;
class TickitController extends Controller  
{
    /**
     * Display a listing of the resource.
     */
    public function affiche(Request $request)
     {   $tickits = tickit::where('event_id', $request->event)->get();
       
        return view('organisateur.tickit', compact('tickits'));
     }

    /**
     * Show the form for creating a new resource.
     */
    public function create(event $event)
    {    
        return view ('organisateur.tickit-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoretickitRequest $request)
    {
        // // dd($request->event);
        // $tickits = tickit::where('event_id', $request->event)->get();
       
        // return view('organisateur.tickit', compact('tickits'));
    }

    /**
     * Display the specified resource.
     */
    public function show(tickit $tickit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tickit $tickit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatetickitRequest $request, tickit $tickit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tickit $tickit)
    {
        //
    }
}
