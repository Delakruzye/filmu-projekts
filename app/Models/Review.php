<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    
    protected $table = 'review';

    protected $fillable = 
    [
        'Film_Title',
        'Review_Title',
        'picurl',
        'filmyear',
        'rating',
        'description'
    ];

    protected $casts = 
    [
        'filmyear' => 'integer',
        'rating' => 'integer'
    ];

    public $timestamps = true;
}
