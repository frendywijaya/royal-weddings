<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    // table
    protected $table = 'teams';
    // fillable
    protected $fillable = [
        'image',
        'name',
        'position',
        'facebook',
        'linkedin',
    ];

    // set image path
    const PATH = 'uploads/team/';
}
