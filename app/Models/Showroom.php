<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Showroom extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'name','address','phone','total_space','storage_space'];
    public function  warehouses(){
        return $this->morphToMany(Warehouse::class,'warehouse_showroom');
    }
    public function displaySamples(){
        return $this->hasMany(DisplaySample::class);
    }
}
