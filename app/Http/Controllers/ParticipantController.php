<?php

namespace App\Http\Controllers;

use App\Exports\ParticipantExport;
use App\Http\Requests\ParticipationStore;
use App\Http\Requests\ParticipationUpdate;
use App\Imports\ParticipantsImport;
use Illuminate\Support\Facades\Response;

use App\Models\Event;
use App\Models\Participant;
use App\Models\ParticipantType;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade as PDF;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Dompdf\Options;
use Illuminate\Support\Facades\App;
use PhpOffice\PhpSpreadsheet\Writer\Pdf as WriterPdf;
use SebastianBergmann\Template\Template;

class ParticipantController extends Controller
{

    public function index(Request $request)
    {
        // $participantTypes = ParticipantType::all();
        $events = Event::all();
        $participants = Participant::where('event_id', $request->event_id)
            // ->with('participantType')
            ->get();
        return view('pages.backend.participant.index', compact('participants', 'events'));
    }
    public function create(Request $request)
    {
        $events = Event::all();
        $participantTypes = ParticipantType::all();

        return view('pages.backend.participant.create', compact('events', 'participantTypes'));
    }

    public function store(ParticipationStore $request)
    {
        $input = $request->only('name', 'affilated_institute', 'post', 'event_id', 'participantType_id');
        $participant = Participant::create($input);
        $participant->save();

        return redirect('/admin/participants')->with('message', 'Participant created Successfully..');
    }

    public function edit(Request $request, $id)
    {
        $events = Event::all();
        $participantTypes = ParticipantType::all();


        $participant = Participant::findOrFail($id);
        return view('pages.backend.participant.edit', compact('participant', 'events', 'participantTypes'));
    }

    public function update(ParticipationUpdate $request, $id)
    {
        $participant = Participant::findOrFail($id);
        $participant->name = $request->name;
        $participant->affilated_institute = $request->affilated_institute;
        $participant->post = $request->post;
        $participant->event_id = $request->event_id;
        $participant->participantType_id = $request->participantType_id;

        $participant->update();

        return redirect('/admin/participants')->with('message', 'Participant Updated Successfully..');
    }


    public function destroy($id)
    {
        $participant=Participant::findOrFail($id);
        $participant->delete();

        return redirect('/admin/participants')->with('message', 'Participant Deleted Successfully..');
    }


    public function importExcel()
    {
        $events = Event::all();
        $participantTypes= ParticipantType::all();

        return view('pages.backend.participant.import', compact('events', 'participantTypes'));
    }



    public function storeExcel(Request $request)
    {
        $eventId = $request->input('event_id');
        $participantTypeId = $request->input('participantType_id');

        $file = $request->file('excel_file');        
        Excel::import(new ParticipantsImport($eventId, $participantTypeId), $file);
        return redirect('/admin/participants')->with('message', 'File Uploaded Successfully');
    }

    public function generatePdf(Request $request, $id)
    {
        $participant = Participant::findOrFail($id);
        // dd($participant);
        $template = $participant->participantType;
        // dd($template);


        $resourcePath = public_path('/backend_assets/images/eventTemplates/' .  $template->id . '/');

        $height = $template->template_height;
        $widht = $template->template_width;
        $customPaper = array(0, 0, $height ?: 667.00, $widht ?: 954.80);
        // $customPaper = array(0, 0, 667.00, 954.80);

        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('eventTemplates.' . $template->id . '.index', compact('participant', 'resourcePath'))
            ->setPaper($customPaper, 'potrait');
        // ->setPaper('A4', 'portrait');
        // return $pdf->stream('certificate.pdf');
        return $pdf->download('certificate.pdf');    
    }
}
