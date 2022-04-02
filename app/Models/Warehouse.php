<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'address','total_space','storage_space','phone','cost'];
    public function  showrooms(){
        return $this->morphToMany(Showroom::class,'warehouse_showroom');
    }
}
