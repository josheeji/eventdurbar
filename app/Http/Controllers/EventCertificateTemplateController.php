<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventCertificateTemplate;
use App\Models\Participant;
use App\Models\ParticipantType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;
use App\Providers\PDFServiceProvider;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Storage;
use php;



class EventCertificateTemplateController extends Controller
{

    public function index()
    {
        $events = Event::all();

        $participantTypes = ParticipantType::all();
        $eventTemplates = EventCertificateTemplate::all();
        return view('pages.backend.eventTemplate.index', compact('eventTemplates', 'events', 'eventTemplates'));
    }
    public function create()
    {
        $events = Event::all();
        $eventTemplate = EventCertificateTemplate::all();
        $participantTypes = ParticipantType::all();
        return view('pages.backend.eventTemplate.create', compact('eventTemplate', 'events', 'participantTypes'));
    }
    public function store(Request $request)
    {
        $input = $request->only(
            'custom_field',
            'template_name',
            'template_width',
            'template_height',
            'participantType_id',
            'event_id'
        );

        $file = $request->file('url');
        $filename = 'index.blade.php';
        $input['url'] = $filename;

        $eventTemplate = EventCertificateTemplate::create($input);
        $eventTemplate->save();

        $id = $eventTemplate->id;
        $file->move(resource_path('/views/eventTemplates/' . $id), $filename);

        if ($request->hasFile('template_files')) {
            foreach ($request->file('template_files') as $file) {
                $filename = $file->getClientOriginalName();
                $file->move(public_path('/backend_assets/images/eventTemplates/' . $id), $filename);
                $input['template_files'] = $filename;
            }
        }
        return redirect('/admin/event-templates')->with('message', 'Template created Successfully..');
    }


    public function edit(Request $request, $id)
    {
        $events = Event::all();
        $participantTypes = ParticipantType::all();

        $eventTemplate = EventCertificateTemplate::findOrFail($id);
        return view('pages.backend.eventTemplate.edit', compact('eventTemplate', 'events', 'participantTypes'));
    }


    public function update(Request $request, $id)
    {
        $eventTemplate = EventCertificateTemplate::findOrFail($id);

        $eventTemplate->template_name = $request->template_name;
        // $eventTemplate->custom_field = $request->custom_field;
        $eventTemplate->template_height = $request->template_height;
        $eventTemplate->template_width = $request->template_width;
        $eventTemplate->participantType_id = $request->participantType_id;
        $eventTemplate->event_id = $request->event_id;

        if ($request->hasFile('url')) {
            $destination = '/views/eventTemplate/' . $eventTemplate->url;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('url');
            $filename = 'index.blade.php';
            $file->move(resource_path('/views/eventTemplates/' . $id), $filename);

            $eventTemplate->url = $filename;
        }

        if ($request->hasFile('template_files')) {           
            foreach ($request->file('template_files') as $file) {
                $destination = '/backend_assets/images/eventTemplates/' . $eventTemplate->template_files;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $filename = $file->getClientOriginalName();
                $file->move(public_path('/backend_assets/images/eventTemplates/' . $id), $filename);
                $input['template_files'] = $filename;
            }
        }
        $eventTemplate->update();

        return redirect('/admin/event-templates')->with('message', 'Certificate Template Updated Successfully..');
    }
    public function destroy($id)
    {
        $template = EventCertificateTemplate::findOrFail($id);
        $template->delete();
        return redirect('/admin/event-templates')->with('message', 'Certificate Template Deleted Successfully..');
    }
}
