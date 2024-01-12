<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Publications;
use App\Models\Genre;
use App\Models\Country;
use App\Models\ArticleType;
use App\Models\PackageBundle;
use App\Models\Category;

class PublicationController extends Controller
{
    public function allpublications(){
        $publications = Publications::all();
        $genres = Genre::all();
        $countries = Country::all();
        $articles = ArticleType::all();
        $category = Category::all();
        
        return view('front.allPublications',compact('publications','genres','countries','articles','category'));
    }
    
    public function publicationName(Request $request){
        $query = Publications::with('articleType','country');
        $publicationName = $request->name;

        if($publicationName !== null){
           $query->where('title','like',$publicationName.'%');
        }

        $price = $request->price;
        if($price !== null){
            if($price == 'ASC'){
                $query->orderBy('price','ASC');
            }elseif($price == 'DESC'){
                $query->orderBy('price','DESC');
            }
        }

        $countryid = $request->country;
        if($countryid !== null){
            $query->whereHas('country',function($countryQuery) use ($countryid){
                $countryQuery->whereIn('id',$countryid);
            });
        }

        $genreid = $request->genre;
        if($genreid !== null){
            foreach($genreid as $gid){
               $query->where(function ($query) use ($gid) {
                    $query->whereJsonContains('genres', $gid);
               });
            }
        }

        $articleid = $request->articletype;
        if($articleid !== null){
            $query->whereHas('articleType',function($articleQuery) use ($articleid) {
                $articleQuery->whereIn('id',$articleid);
            });
        }

        $minprice = $request->minprice;
        $maxprice = $request->maxprice;
        
        if($minprice !== null && $maxprice !== null){
            $query->whereBetween('price',[$minprice,$maxprice]);
        }elseif($minprice !== null){
            $query->where('price','>=',$minprice);
        }elseif($maxprice !== null){
            $query->where('price','<=',$maxprice);
        }

        $results = $query->get();

        $publication = [];

        foreach($results as $data){
            $genres = json_decode($data->genres);
            $genresdata = [];
            foreach($genres as $gen){
                $genreS = Genre::where('id','=',$gen)->first();
                array_push($genresdata,$genreS);
            }
            array_push($publication,$genresdata);
        }

        $publications = Publications::all();
        $total = count($publications);

        $array = array($results,$publication,$total);

        return response()->json($array);
    }
}
