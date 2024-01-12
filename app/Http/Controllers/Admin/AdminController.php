<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Genre;
use App\Models\Country;
use App\Models\ArticleType;
use App\Models\Publications;
use App\Models\User;
use App\Models\Category;
use App\Models\PackageBundle;
use App\Models\ReleaseCategory;
use Hash;

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
            'title' => 'required',
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
            $imagepath = asset('/image/'.$imageName);        
            $image->move(public_path('image'), $imageName);
        }

        if($request->genres != null){
            $genre = json_encode($request->genres);
        }

        if($request->article != null){
            $article = $request->article;
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
        $publications->image = $imagepath;
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
            $imagepath = asset('/image/'.$imageName);
            $image->move(public_path('image'),imageName);

        }else{
            $imagepath = $publication->image;
        }

        if($request->genres){
            $genres = json_encode($request->genres);
        }else{
            $genres = $publication->genres;
        }

        if($request->article){
            $article = $request->article;
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
        $publications->image = $imagepath;
        $publications->update();

        return redirect('/admin-dashboard/insertpublication/'.$publications->id)->with("success","Publications updated successfully..");
    }

    public function deletePublications(Request $request){
        $id = $request->id;
        $publication = Publications::where('id','=',$id)->delete();

        return response()->json($publication);
    }

    public function userAccess(){
        return view('admin.useraccess');
    }

    public function userLogin(Request $request){
        $request->validate([
            'password' => 'required',
            'confirm_password' => 'required'
        ]);
        $password = Hash::make($request->password);
        $confirm = $request->confirm_password;

        if($request->password == $confirm){
            $user = User::where('email','=','prpartner@gmail.com')->first();

            if($user != null){
                $user->password = $password;
                $user->update();

                return back()->with('success','Changed Password');
            }else{
                $users = new User;
                $users->name = 'prpartner';
                $users->email = 'prpartner@gmail.com';
                $users->password = $password;
                $users->role = '2';
                $users->save();

                return back()->with('success','Saved Password');
            }
        }else{
            return back()->with('error','The password confirmation not matched !!');
        }
    }

    public function fileupload(){
        return view('admin.uploadcsv');
    }

    public function importfile(Request $request){
        $request->validate([
            'csv' => 'required',
        ]);

        if($request->hasFile('csv')){
            $file = $request->file('csv');
            $filename = 'pricingsheet' .'.csv';
            $file->move(public_path('files'), $filename);

            $path = public_path('files/'.$filename);
            $fileopen = fopen($path,"r");
            $data = fgetcsv($fileopen);
            $pricing = array();

            while (($data = fgetcsv($fileopen)) !== false) {
               array_push($pricing,$data);
            
               foreach($pricing as $row){
                    echo '<pre>';
                    $images = $row[0];
                    $title = $row[1];
                    $domainAuthority = $row[3];
                    $tat = $row[4];
                    $url = $row[8];
               }
               $genre_arr = explode(' / ',$row[5]);
               $gen_id = [];

               foreach($genre_arr as $genre){
                    $genres = Genre::where('genre_name','=',$genre)->first();
                    if($genres){
                        $genre_id = "$genres->id";
                        array_push($gen_id,$genre_id);
                    }else{
                        $gen_name = trim($genre);
                        $slug = trim($genre);
                        $slug= preg_replace('/[^a-zA-Z0-9 -]/','',$slug);
                        $slug= str_replace('','-', $slug);
                        $slug= strtolower($slug);

                        $genreS = new Genre;
                        $genreS->genre_name = $gen_name;
                        $genreS->genre_slug = $slug;
                        $genreS->save();
                        $genreSid = "$genreS->id";
                        array_push($gen_id,$genreSid); 
                    }
                }
                $g_id = json_encode($gen_id);

                $article = $row[6];
                $articleType = ArticleType::where('article_type','=',$article)->first();

                if($articleType){
                    $art_id = $articleType->id;
                }else{
                    $artType = new ArticleType;
                    $artType->article_type = $article;
                    $artType->save();
                    $art_id = $artType->id;
                }
                $country = $row[7];
                $countries = Country::where('country_name','=',$country)->first();

                if($countries){
                    $c_id = $countries->id;
                }else{
                    $contry = new Country;
                    $contry->country_name = $country;
                    $contry->country_code = strtoupper($country);
                    $contry->save();
                    $c_id = $contry->id; 
                }
                
                $price = $row[2];
                if($price == "ASK"){
                    $price = 0;
                }else{
                    $price = $row[2];
                }

                $publications = new Publications;
                $publications->title = $title;
                $publications->url = $url;
                $publications->price = $price;
                $publications->domain_authority = $domainAuthority;
                $publications->turn_around_time = $tat;
                $publications->genres = $g_id;
                $publications->article_type = $art_id;
                $publications->country = $c_id;
                $publications->image = $images;
                $publications->save();
            }
            
            fclose($fileopen);

            return back()->with("success","File Uploaded Successfully");
        }

    }

    public function accountSetting(){
        return view('admin.accountsetting');
    }

    public function changePassword(Request $request){
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required',
        ]);

        if(Hash::check($request->old_password, Auth()->user()->password)){
            if($request->new_password == $request->confirm_password){
                $password = Hash::make($request->new_password);
                $user = User::where('id','=',Auth::user()->id)->first();
                $user->password = $password;
                $user->update();
            
                return back()->with('success','Password Changed Successfully');
            }else{
                return back()->with('error','Password confirmation not matched');
            }
        }else{
            return back()->with('error','Old Password is not matched');
        }
    }

    public function bundleCategory(){
        $category = Category::all();
        return view('admin.bundlecategory',compact('category'));
    }

    public function category(Request $request){
        if($request->id){
            $request->validate([
                'categoryname' => 'required',
            ]);
    
            $name = $request->categoryname;
            $slug = trim($name);
            $slug= preg_replace('/[^a-zA-Z0-9 -]/','',$slug);
            $slug= str_replace(' ','-', $slug);
            $slug= strtolower($slug);
           
            $category = Category::where('id','=',$request->id)->first();
            $category->category_name = $name;
            $category->slug = $slug;
            $category->update();

            $status = "edit";
        }else{
            $request->validate([
                'categoryname' => 'required|unique:categories,category_name',
            ]);
    
            $name = $request->categoryname;
            $slug = trim($name);
            $slug= preg_replace('/[^a-zA-Z0-9 -]/','',$slug );
            $slug= str_replace(' ','-', $slug);
            $slug= strtolower($slug);
           
            $category = new Category;
            $category->category_name = $name;
            $category->slug = $slug;
            $category->save();
    
            $status = "add";
        }
        
        return response()->json([$category,$status]);
    }

    public function deletecategory(Request $request){
        $id = $request->id;
        $category = Category::where('id','=',$id)->delete();
        $package = PackageBundle::where('category','=',$id)->delete();

        return response()->json($category);
    }

    public function bundle(){
        $category = Category::all();
        $publications = Publications::all();
        return view('admin.packagebundle',compact('category','publications'));
    }

    public function createBundle(Request $request){
        $request->validate([
           'title' => 'required',
           'price' => 'required',
           'retail_price' => 'required',
           'category' => 'required',
           'publication' => 'required'
        ]);

        $package = new PackageBundle;
        $package->title = $request->title;
        $package->price = $request->price;
        $package->retail_price = $request->retail_price;
        $package->category = $request->category;
        $package->publications = json_encode($request->publication);
        $package->save();

        return back()->with("success","Package Bundle Added Successfully");
    }

    public function getPublication(Request $request){
        $id = $request->id;
        $publications = Publications::where('id','=',$id)->first();

        return response()->json($publications);
    }

    public function getPackage(){
        $package = PackageBundle::all();

        return view('admin.packagelist',compact('package'));
    }

    public function editbundle($id){
        $packageBundle = PackageBundle::where('id','=',$id)->first();
        $category = Category::all();
        $publications = Publications::all();
        return view('admin.packagebundle',compact('packageBundle','category','publications'));
    }

    public function updateBundle(Request $request){
        $request->validate([
            'title' => 'required',
            'price' => 'required',
            'retail_price' => 'required',
            'category' => 'required',
            'publication' => 'required'
        ]);
        
        $id = $request->id;
       
        $package = PackageBundle::where('id','=',$id)->first();
        $package->title = $request->title;
        $package->price = $request->price;
        $package->retail_price = $request->retail_price;
        $package->category = $request->category;
        $package->publications = $request->publication;
        $package->save();

        return back()->with("success","Package Bundle Updated Successfully");
    }

    public function deletePackage(Request $request){
        $package = PackageBundle::where('id','=',$request->id)->delete();

        return response()->json($package);
    }

    public function releaseCategory(){
        $category = ReleaseCategory::all();
        return view('admin.releaseCategory',compact('category'));
    }

    public function createCategory(Request $request){
        if($request->id){
            $request->validate([
                'categoryname' => 'required',
            ]);
    
            $name = $request->categoryname;
            $slug = trim($name);
            $slug= preg_replace('/[^a-zA-Z0-9 -]/','',$slug);
            $slug= str_replace(' ','-', $slug);
            $slug= strtolower($slug);
           
            $category = ReleaseCategory::where('id','=',$request->id)->first();
            $category->category_name = $name;
            $category->slug = $slug;
            $category->update();

            $status = "edit";
        }else{
            $request->validate([
                'categoryname' => 'required|unique:categories,category_name',
            ]);

            $name = $request->categoryname;
            $slug = trim($name);
            $slug= preg_replace('/[^a-zA-Z0-9 -]/','',$slug );
            $slug= str_replace(' ','-', $slug);
            $slug= strtolower($slug);

            $category = new ReleaseCategory;
            $category->category_name = $name;
            $category->slug = $slug;
            $category->save();
            $status = "add";
        }
        return response()->json([$category,$status]);
    }
}
