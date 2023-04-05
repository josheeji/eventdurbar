<?php

namespace App\Http\Controllers;

use App\Models\EventType;
use Illuminate\Http\Request;

class EventTypeController extends Controller
{
    public function index()
    {
        $eventTypes = EventType::all();
        // $eventType = EventType::find($eventTypeId);


        return view('pages.backend.eventType.index', compact('eventTypes'));
    }

    public function create()
    {

        return view('pages.backend.eventType.create');
    }

    public function store(Request $request)
    {


        $input = $request->only('name');
        $eventType = EventType::create($input);
        $data = [
            'label' => request('label'),
            'event_type_name' => request('name'),
            'input_field' => request('input_field'),
            'mandatory' => request('mandatory') ? true : false,
            'tags' => explode(',', request('tags')),
        ];
        $eventType->event_custom_field = $data;

        $eventType->save();

        // $input = $request->only([
        //     'label' => $request->input('label'),
        //     'input_field' => $request->input('input_field'),
        //     'name' => $request->input('name'),
        //     'placeholder' => $request->input('placeholder'),
        //     'id' => $request->input('id'),
        // ]);
        // $eventType->inputs()->save($input);


        return redirect('admin/event-types')->with('message', 'Event Type created successfully..');
    }
    public function edit(Request $request, $id)
    {
        $eventType = EventType::findOrFail($id);
        return view('pages.backend.eventType.edit', compact('eventType'));
        // return redirect('admin/event-types', compact('eventType'))->with('message', 'Event Type created successfully..');
    }
    public function update(Request $request, $id)
    {
        $eventType = EventType::findOrFail($id);
        $eventType->name = $request->name;
        $eventType->update();
        return redirect('admin/event-types')
            ->with('message', 'Event Type Updated successfully..');
    }
    public function destroy($id)
    {
        $eventType = EventType::findOrFail($id);
        $eventType->delete();

        return redirect('admin/event-types')
            ->with('message', 'Event Type Deleted successfully..');;
    }
}
