<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DisplaySample extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'type', 'name', 'image', 'brand'];
}
