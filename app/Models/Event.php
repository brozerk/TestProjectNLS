<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'camera_id',
        'event_type_id',
        'frame_url',
    ];

    public function camera()
    {
        return $this->belongsTo(Camera::class);
    }

    public function eventType()
    {
        return $this->belongsTo(EventType::class);
    }
}
