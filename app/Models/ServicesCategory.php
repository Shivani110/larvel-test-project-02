<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicesCategory extends Model
{
    use HasFactory;

    public function otherservice(){
        return $this->hasMany(OtherService::class,'category','id');
    }
}
