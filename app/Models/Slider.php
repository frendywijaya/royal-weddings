<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $table = 'sliders';
    protected $fillable = [
        'title',
        'subtitle',
        'image',
        'button_text',
        'button_link',
    ];

    const PATH = 'uploads/sliders/';
}
