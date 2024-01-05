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
        $publications = Publications::where('title','LIKE',$name.'%')->get();
       
        // foreach($publications as $data){
        //     $article = json_decode($data->article_type);
            
        //     $articleType = ArticleType::where('id','=',$article)->first();

        //     print_r($articleType->article_type);
        // }
        

        return response()->json($publications);
        
    }
}
