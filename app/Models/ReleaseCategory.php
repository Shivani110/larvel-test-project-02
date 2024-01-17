<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReleaseCategory extends Model
{
    use HasFactory;

    public function pressrelease(){
        return $this->hasMany(PressRelease::class,'category','id');
    }
}
