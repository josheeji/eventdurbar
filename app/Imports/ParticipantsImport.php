<?php

namespace App\Imports;

use App\Models\Participant;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class ParticipantsImport implements ToCollection, WithHeadingRow
{
    /**
     * @param Collection $collection
     */
    public $eventId;
    public $participantTypeId;

    public function __construct($eventId, $participantTypeId)
    {
        // dd($participantTypeId);
        $this->eventId = $eventId;
        $this->participantTypeId = $participantTypeId;
    }

    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            Participant::create([
                'event_id' => $this->eventId,
                'participantType_id' => $this->participantTypeId,

                'name' => $row['name'],

                'affilated_institute' => $row['affilated_institute'],

                'post' => $row['post']
            ]);
        }
    }
}
