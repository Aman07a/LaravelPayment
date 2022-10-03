<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    public $primaryKey = 'iso';
    public $incrementing = false;
    protected $fillable = [
        'iso',
    ];
}
