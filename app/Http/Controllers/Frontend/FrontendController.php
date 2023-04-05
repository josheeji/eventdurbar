<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Participant;
use Illuminate\Http\Request;

class frontendController extends Controller
{
    public function index()
    {
        $events = Event::all();

        return view('pages.frontend.home', compact('events'));
    }

    public function downloadPdf($id)
    {
        $events = Event::findOrFail($id);
        $participants = Participant::where('event_id', '=', $id)->get();
        
        return view('pages.frontend.event.index', compact('events', 'participants'));

    }
    public function detail($id)
    {
        $events = Event::findOrFail($id);
        $participants = Participant::where('event_id', '=', $id)->get();
        
        return view('pages.frontend.event.detail', compact('events', 'participants'));

    }

   
}
