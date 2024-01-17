<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publications extends Model
{
    use HasFactory;

    public function genre(){
        return $this->hasMany(Genre::class,'status','status');
    } 

    public function articleType(){
        return $this->hasOne(ArticleType::class,'id','article_type');
    }

    public function country(){
        return $this->hasOne(Country::class,'id','country');
    }
}
