<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Publications;
use App\Models\Genre;
use App\Models\Country;
use App\Models\ArticleType;

class PublicationController extends Controller
{
    public function allpublications(){
        $publications = Publications::all();
        $genres = Genre::all();
        $countries = Country::all();
        $articles = ArticleType::all();
        return view('front.all-publication',compact('publications','genres','countries','articles'));
    }
    
    public function publicationName(Request $request){
        $name = $request->name;
        $publications = Publications::where('title','LIKE',$name.'%')->with('articleType','country')->get();
        // dd($publications);
        $publication = [];
        foreach($publications as $data){
            $genres = json_decode($data->genres);
            $genress = [];
            foreach($genres as $gen){
                $genre = Genre::where('id','=',$gen)->first();
                array_push($genress,$genre);
            }
            array_push($publication,$genress);
        }
        $array = array($publications,$publication);
        return response()->json($array);
        
    }
}
