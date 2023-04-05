<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'affilated_institute', 'post', 'event_id', 'participantType_id'
    ];



    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }


    public function template()
    {
        return $this->belongsTo(EventCertificateTemplate::class, 'template_id');
    }

    public function participantType()
    {
        return $this->belongsTo(ParticipantType::class, 'participantType_id');
    }
    
}
