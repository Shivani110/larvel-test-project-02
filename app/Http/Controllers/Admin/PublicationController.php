<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Publications;
use App\Models\Genre;
use App\Models\Country;
use App\Models\ArticleType;
use App\Models\PackageBundle;
use App\Models\Category;
use App\Models\ReleaseCategory;
use App\Models\PressRelease;
use App\Models\ServicesCategory;
use App\Models\OtherService;
use App\Models\SiteMeta;

class PublicationController extends Controller
{
    public function allpublications(){
        $publications = Publications::all();
        $genres = Genre::all();
        $countries = Country::all();
        $articles = ArticleType::all();
        $category = Category::all();
        $releaseCategory = ReleaseCategory::all();
        $servicecategory = ServicesCategory::all();
        $sitemeta = SiteMeta::all();
        $popular = Publications::where('mostpopular','=','1')->get();

        return view('front.allPublications',compact('publications','genres','countries','articles','category','releaseCategory','servicecategory','sitemeta','popular'));
    }
    
    public function publicationName(Request $request){
        $query = Publications::with('articleType','country','genre');
        
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
       
        $publications = Publications::all();
        $total = count($publications);

        $array = array($results,$total);

        return response()->json($array);
    }

    public function download(){
        $file = SiteMeta::first()->questionnaire;
        $path = public_path('files/'.$file);
        $extension = File::extension(public_path('files/'.$file));

        $filename = time().'.'.$extension;
        return response()->download($path,$filename);
    }

    public function reset(Request $request){
        $publications = Publications::all();
        $genres = Genre::all();
        $countries = Country::all();
        $articles = ArticleType::all();
        $sitemeta = SiteMeta::all();

        return response()->json([$publications,$genres,$countries,$articles,$sitemeta]);
    }
}
