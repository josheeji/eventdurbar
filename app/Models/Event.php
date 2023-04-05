<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'organizer_name', 
        'eventType_id', 'start_date',
        'end_date', 'description', 'location',
        'event_time', 'image'
    ];

    public function eventType()
    {
        return $this->belongsTo(EventType::class, 'eventType_id');
    }

    // public function eventTemplate()
    // {
    //     return $this->belongsTo(EventCertificateTemplate::class, 'template_id');
    // }

}
