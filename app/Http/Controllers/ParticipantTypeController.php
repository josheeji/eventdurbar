<?php

namespace App\Http\Controllers;

use App\Http\Requests\ParticipationTypeStore;
use App\Http\Requests\ParticipationTypeUpdate;
use App\Models\ParticipantType;
use Illuminate\Http\Request;

class ParticipantTypeController extends Controller
{

    public function index()
    {
        $participantTypes = ParticipantType::all();
        return view('pages.backend.participantType.index', compact('participantTypes'));
    }


    public function create()
    {
        return view('pages.backend.participantType.create');
    }


    public function store(ParticipationTypeStore $request)
    {
        $input = $request->only('name');
        $participantType = ParticipantType::create($input);
        $participantType->save();
        return redirect('admin/participant-types')->with('message', 'Participant Created Successfully..');
    }

    public function edit(Request $request, $id)
    {
        $participantType= ParticipantType::findOrFail($id);
        return view('pages.backend.participantType.edit', compact('participantType'));
    }


    public function update(ParticipationTypeUpdate $request, $id)
    {
        $participantType= ParticipantType::findOrFail($id);
        $participantType->name = $request->name;
        $participantType->update();
        return redirect('admin/participant-types')->with('message', 'Participant Type Updated Successfully..');
       
    }


    public function destroy($id)
    {
        $participantType= ParticipantType::findOrFail($id);
        $participantType->delete();
        return redirect('admin/participant-types')->with('message', 'Participant Type Deleted Successfully..');

    }
}
