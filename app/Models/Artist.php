<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'about', 'type', 'gender'];
    public $timestamps = true;
}
