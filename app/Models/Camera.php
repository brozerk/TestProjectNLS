<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camera extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'address',
        'long',
        'lat',
    ];

    public function events()
    {
        return $this->hasMany(Event::class);
    }
}
