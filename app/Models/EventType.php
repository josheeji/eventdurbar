<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventType extends Model
{
    use HasFactory;
    protected $cast = [
        'event_custom_field' => 'object',
        'participant_custom_field' => 'object'
    ];
    protected $fillable = [
        'name',
        'event_custom_field',
        'participant_custom_field'
    ];
    

    public function events()
    {
        return $this->hasMany(Event::class, 'event_id');
    }
}
