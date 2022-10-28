<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkPlaceID extends Model
{
    use HasFactory;

    public function employee(){
        return $this->hasMany(employee::class);
    }
}