<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class division extends Model
{
    use HasFactory;
    protected $table='division';
    public function unit(){
        return $this->hasOne(unit::class);
    }
    public function company(){
        return $this->hasOne(company::class);
    }
}