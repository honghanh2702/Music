<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'song_path',
        'view',
        'rate',
        'release_date',
        'category_id',
        'user_id',
        'image_path'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsToMany(User::class)->using(Comment::class);
    }

    public function singer()
    {
        return $this->belongsToMany(Singer::class)->using(SingerSong::class);
    }

    public function userMusicList()
    {
        return $this->belongsToMany(UserMusicList::class)->using(UserMusicListItem::class);
    }


    
}
