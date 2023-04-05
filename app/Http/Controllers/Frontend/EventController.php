<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventCertificateTemplate;
use App\Models\EventType;
use App\Models\Participant;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index($id)
    {
        // $events = Event::findOrFail($id);

        // $participants = Participant::where('participant_id', '=', $id)->get();

        // return view('pages.frontend.event.index', compact('events', 'participants'));
    }
    // $banner = Banner::findOrFail($id);

    //     $bannerItem = BannerItem::where('banner_id', '=', $id)->get();

   
}
