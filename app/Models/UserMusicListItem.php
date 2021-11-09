<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMusicListItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_music_list_id',
        'song_id'
    ];
}
