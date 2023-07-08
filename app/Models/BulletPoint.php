<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BulletPoint extends Model
{
    use HasFactory;

    protected $table = 'bullet_points';
    protected $fillable = [
        'title',
    ];

    const PATH = 'uploads/bullet_points/';
}
