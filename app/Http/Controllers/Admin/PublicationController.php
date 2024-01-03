<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Publications;

class PublicationController extends Controller
{
    public function allpublications(){
        return view('front.all-publication');
    }
    
}
