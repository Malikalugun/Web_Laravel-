<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSlider extends Model
{
    use HasFactory;
    // protected $guarded = [];
    //OR QRM MODEL
    protected $fillable = [
        'title',
        'short_title',
        'home_slider',
        // 'video_url',

    ];
}
