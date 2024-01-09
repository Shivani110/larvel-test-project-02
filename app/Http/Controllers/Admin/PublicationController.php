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

        $query = Publications::with('articleType','country');
        $countryid = $request->country;

        if($countryid !== null){
            $query->whereHas('country',function($countryQuery) use ($countryid){
                $countryQuery->whereIn('id',$countryid);
            });
        }
        
        $publicationName = $request->name;
        if($publicationName !== null){
            $query->where('title','like',$publicationName.'%');
        }

        $genreid = $request->genre;
        if ($genreid !== null) {
            $genreids = $request->genre;
            return $genreids;
            foreach ($genreids as $genreI_d) {
                $query->where(function ($query) use ($genreI_d) {
                    $query->whereJsonContains('genre', $genreI_d);
                });
            }
        }

        $articletypeid = $request->articletype;
        if($articletypeid !== null){
            $query->whereHas('article_type',function($articleQuery) use ($articletypeid){
                $articleQuery->whereIn('id',$articletypeid);
            });
        }

        $sortedVal = $request->price;
        if($sortedVal === "DESC"){
            $query->orderBy('price','desc');
        }elseif($sortedVal === "ASC"){
            $query->orderBy('price','asc');
        }

        $minval = $request->minprice;
        $maxval = $request->maxprice;
        
        if($minval !== null && $maxval !== null){
            print_r($minval);
            print_r($maxval);
        }

        $results = $query->get();
        return response()->json($results);
        die();
    }
        // if(gettype($name) == 'array'){
        //     $country = $name;
        //     foreach($country as $cid){
        //         $pubcountry = Publications::where('country','LIKE',$cid.'%')->with('articleType','country')->get();
        //         $cntry = [];
        //         foreach($pubcountry as $pcnt){
        //             $genre = json_decode($pcnt->genres);
        //             $genres = [];
        //             foreach($genre as $gen){
        //                 $genress = Genre::where('id','=',$gen)->first();
        //                 array_push($genres,$genress);
        //             }
        //             array_push($cntry,$genres);
        //         }
        //         $p_array = array($pubcountry,$cntry);
        //     }
           
        // }else{

        //     if($name == "ASC"){
        //         $ascPrice = Publications::orderBy('price', 'ASC')->with('articleType','country')->get();
        //         $pricegenre = [];
        //         foreach($ascPrice as $asc){
        //             $genre = json_decode($asc->genres);
        //             $genres = [];
        //             foreach($genre as $gen){
        //                 $genress = Genre::where('id','=',$gen)->first();
        //                 array_push($genres,$genress);
        //             }
        //             array_push($pricegenre,$genres);
        //         }
        //         $p_array = array($ascPrice,$pricegenre);
    
        //     }else if($name == "DESC"){
        //         $dscPrice = Publications::orderBy('price','DESC')->with('articleType','country')->get();
        //         $pricegenre = [];
        //         foreach($dscPrice as $dsc){
        //             $genre = json_decode($dsc->genres);
        //             $genres = [];
        //             foreach($genre as $gen){
        //                 $genress = Genre::where('id','=',$gen)->first();
        //                 array_push($genres,$genress);
        //             }
        //             array_push($pricegenre,$genres);
        //         }
        //         $p_array = array($dscPrice,$pricegenre);
    
        //     }else{
        //         $publications = Publications::where('title','LIKE',$name.'%')->with('articleType','country')->get();
        //     // dd($publications);
        //         $publication = [];
        //         foreach($publications as $data){
        //             $genres = json_decode($data->genres);
        //             $genress = [];
        //             foreach($genres as $gen){
        //                 $genre = Genre::where('id','=',$gen)->first();
        //                 array_push($genress,$genre);
        //             }
        //             array_push($publication,$genress);
        //         }
        //         $p_array = array($publications,$publication);
        //     }
            
        // }
        // return response()->json($p_array);
    // }
}
