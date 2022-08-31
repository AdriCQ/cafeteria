<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $table = 'offers';
    protected $guarded = ['id'];
    protected $casts = ['active' => 'bool', 'special' => 'bool'];
}
