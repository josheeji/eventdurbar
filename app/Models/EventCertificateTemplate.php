<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventCertificateTemplate extends Model
{
    use HasFactory;

    protected $fillable = [
        'url', 'custom_field', 'template_name', 'template_width',
        'template_height', 'participantType_id',
        'event_id'
    ];

    
    public function events()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }

    

    public function participantType()
    {
        return $this->belongsTo(ParticipantType::class, 'participantType_id');
    }

}
