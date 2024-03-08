<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Categorie;

class StatistiqueController extends Controller
{
    public function index()
    {
        $categorie = $this->categorie();
        dd($categorie);
        $eventSeats = $this->eventSeats();
        $organiEvents = $this->organiEvents();

        return view('admin.statistique', compact('categorie', 'eventSeats', 'organiEvents'));
    }

    public function categorie()
    {
        return Categorie::withCount('events')->orderByDesc('events_count')->first();
    }

    public function eventSeats()
    {
        return Event::orderByDesc('number_of_seats')->first();
    }

    public function organiEvents()
    {
        return Event::withCount('organizer')->orderByDesc('organizer_count')->first();
    }
}
