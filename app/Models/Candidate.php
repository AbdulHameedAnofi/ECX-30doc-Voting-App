<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [
        'name',
        'profile_picture',
        'details'
    ];
}
