<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Singer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image_path'
    ];

    public function song()
    {
        return $this->belongsToMany(Song::class)->using(SingerSong::class);
    }
}
