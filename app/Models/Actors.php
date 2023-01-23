<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actors extends Model
{
    use HasFactory;

    protected $fillable = [
        'actor_id',
        'actorname',
        'realname',
        'picurl',
        'birthyear',
        'birthplace',
        'bio',
        'trademarks'
    ];    
    public $timestamps = true;

    public function movies()
    {
        return $this->belongsToMany(Movies::class, 'movie_id');
    }
}
