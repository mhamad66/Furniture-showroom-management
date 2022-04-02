<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Showroom extends Model
{
    use HasFactory;
    public function  warehouses(){
        return $this->morphToMany(Warehouse::class,'warehouse_showroom');
    }
}
