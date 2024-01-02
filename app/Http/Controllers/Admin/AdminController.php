<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Genre;
use App\Models\Country;
use App\Models\ArticleType;
use App\Models\Publications;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function genres(){
        $genre = Genre::all();
        return view('admin.genres',compact('genre'));
    }

    public function createGenres(Request $request){
        if($request->id){
            $request->validate([
                'name' => 'required',
                'slug' => 'unique:genres,genre_slug'
            ]);
            $id = $request->id;
            $name = $request->name;
            $slug = trim($name);
            $slug= preg_replace('/[^a-zA-Z0-9 -]/','',$slug );
            $slug= str_replace(' ','-', $slug);
            $slug= strtolower($slug);

            $genre = Genre::where('id','=',$id)->first();
            $genre->genre_name = $name;
            $genre->genre_slug = $slug;
            $genre->update();
            $status = 'edit';

        }else{
            $request->validate([
                'name' => 'required|unique:genres,genre_name',
                'slug' => 'unique:genres,genre_slug'
            ]);
    
            $name = $request->name;
            $slug = trim($name);
            $slug= preg_replace('/[^a-zA-Z0-9 -]/','',$slug );
            $slug= str_replace(' ','-', $slug);
            $slug= strtolower($slug);
    
            $genre = new Genre;
            $genre->genre_name = $name;
            $genre->genre_slug = $slug;
            $genre->save();
            $status = 'add';
        }
       
        return response()->json([$genre,$status]);
    }

    public function deleteGenres(Request $request){
        $genre = Genre::where('id','=',$request->id)->delete();

        return response()->json($genre);
    }

    public function country(){
        $country = Country::all();
        return view('admin.country',compact('country'));
    }

    public function createCountry(Request $request){
        if($request->id){
            $request->validate([
                'name' => 'required',
                'code' => 'required',
            ]);
            $id = $request->id;
            $country = Country::where('id','=',$id)->first();
            $country->country_name = $request->name;
            $country->country_code = $request->code;
            $country->update();
            $status = 'edit';

        }else{
            $request->validate([
                'name' => 'required|unique:countries,country_name',
                'code' => 'required|unique:countries,country_code'
            ]);
    
            $country = new Country;
            $country->country_name = $request->name;
            $country->country_code = $request->code;
            $country->save();
            $status = 'add';
        }
        
        return response()->json([$country,$status]);
    }

    public function deleteCountry(Request $request){
        $id = $request->id;
        $country = Country::where('id','=',$id)->delete();

        return response()->json($country);
    }

    public function article(){
        $article = ArticleType::all();
        return view('admin.articletype',compact('article'));
    }

    public function createArticle(Request $request){
        if($request->id){
            $request->validate([
                'type' => 'required',
            ]);
            $article = ArticleType::where('id','=',$request->id)->first();
            $article->article_type = $request->type;
            $article->update();
            $status = "edit";

        }else{
            $request->validate([
                'type' => 'required|unique:article_types,article_type',
            ]);
            $article = new ArticleType;
            $article->article_type = $request->type;
            $article->save();
            $status = "add";
        }

        return response()->json([$article,$status]);
    }

    public function deleteArticle(Request $request){
        $id = $request->id;
        $article = ArticleType::where('id','=',$id)->delete();
        return response()->json($article);
    }

    public function publication(){
        $genres = Genre::all();
        $article = ArticleType::all();
        $country = Country::all();
        return view('admin.publications',compact('genres','article','country'));
    }

    public function createPublications(Request $request){
        $request->validate([
            'title' => 'required|unique:publications,title',
            'url' => 'required',
            'price' => 'required',
            'domain' => 'required',
            'tat' => 'required',
            'image' => 'required',
        ]);

        if($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $imageName = 'pro' . rand(0, 1000) . time() . '.' . $extension;
            $image->move(public_path('image'), $imageName);
        }

        if($request->genres != null){
            $genre = json_encode($request->genres);
        }

        if($request->article != null){
            $article = json_encode($request->article);
        }

        
        if($request->country != null){
            $country = $request->country;
        }
        $publications = new Publications;
        $publications->title = $request->title;
        $publications->url = $request->url;
        $publications->price = $request->price;
        $publications->domain_authority = $request->domain;
        $publications->turn_around_time = $request->tat;
        $publications->genres = $genre;
        $publications->article_type = $article;
        $publications->country = $country;
        $publications->image = $imageName;
        $publications->save();

        return redirect('/admin-dashboard/insertpublication')->with('success','Production inserted successfully..');
    }

    public function publicationlist(){
        $publication = Publications::all();
        return view('admin.publicationlist',compact('publication'));
    }

    public function editpublications($id){
        $publication = Publications::where('id','=',$id)->first();
        $genres = Genre::all();
        $article = ArticleType::all();
        $country = Country::all();

        return view('admin.publications',compact('publication','genres','article','country'));
    }

    public function updatepublications(Request $request){
        $id = $request->id;
        $publication = Publications::where('id','=',$id)->first();

        if($request->hasFile('image')){
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $imageName = 'pro' . rand(0, 1000) . time() . '.' .$extension;
            $image->move(public_path('image'),imageName);
        }else{
            $imageName = $publication->image;
        }

        if($request->genres){
            $genres = json_encode($request->genres);
        }else{
            $genres = $publication->genres;
        }

        if($request->article){
            $article = json_encode($request->article);
        }else{
            $article = $publication->article;
        }

        if($request->country){
            $country = $request->country;
        }else{
            $country = $publication->country;
        }

        $publications = Publications::where('id','=',$id)->first();
        $publications->title = $request->title;
        $publications->url = $request->url;
        $publications->price = $request->price;
        $publications->domain_authority = $request->domain;
        $publications->turn_around_time = $request->tat;
        $publications->genres = $genres;
        $publications->article_type = $article;
        $publications->country = $country;
        $publications->image = $imageName;
        $publications->update();

        return redirect('/admin-dashboard/insertpublication/'.$publications->id)->with("success","Publications updated successfully..");
    }

    public function deletePublications(Request $request){
        $id = $request->id;
        $publication = Publications::where('id','=',$id)->delete();

        return response()->json($publication);
    }
}
