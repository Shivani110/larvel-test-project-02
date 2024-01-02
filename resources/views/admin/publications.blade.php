@extends('admin_layout.master')

@section('content')

<div class="nk-content">
    <div class="nk-block nk-block-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                @if(isset($publication))
                    <h4 class="title nk-block-title">Update Publications</h4>
                    <div class="nk-block-des">
                        <p>You can update your publications here.</p>
                    </div>
                @else
                    <h4 class="title nk-block-title">Insert Publications</h4>
                    <div class="nk-block-des">
                        <p>You can insert your publications here.</p>
                    </div>
                @endif
            </div>
        </div>
        <div class="card card-bordered">
            <div class="card-inner">
                <div class="card-head">
                    <h5 class="card-title">Publication Form</h5>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success col-lg-6">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                </div>
                @if(isset($publication))
                    <form action="{{ url('/admin-dashboard/updatepublication') }}" method="POST" class="gy-3" enctype="multipart/form-data">
                    @csrf
                @else
                    <form action="{{ url('/admin-dashboard/publications') }}" method="POST" class="gy-3" enctype="multipart/form-data">
                @endif    
                    @csrf
                    <div class="row g-3 align-center">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="title">Title</label>
                                <span class="form-note">Specify the title of your publication.</span>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="title" name="title" value="{{ $publication->title ?? '' }}" placeholder="Enter title here">
                                </div>
                                @error('title')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row g-3 align-center">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="url">Url</label>
                                <span class="form-note">Specify the url of your publication.</span>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="url" name="url" value="{{ $publication->url ?? ''}}" placeholder="Enter url here">
                                </div>
                                @error('url')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row g-3 align-center">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="price">Price</label>
                                <span class="form-note">Specify the price of your publication.</span>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="price" name="price" value="{{ $publication->price ?? ''}}" placeholder="Enter price here">
                                </div>
                                @error('price')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row g-3 align-center">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="domain">Domain Authority</label>
                                <span class="form-note">Specify the domain authority of your publication.</span>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="domain" name="domain" value="{{ $publication->domain_authority ?? ''}}" placeholder="Enter number of domain authority ">
                                </div>
                                @error('domain')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row g-3 align-center">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="tat">TAT(Turn Around Time)(in weeks)</label>
                                <span class="form-note">Specify the turn around time of your publication.</span>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="tat" name="tat" value="{{ $publication->turn_around_time ?? ''}}" placeholder="Enter turn around time">
                                </div>
                                @error('tat')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row g-3 align-center">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="image">Image</label>
                                <span class="form-note">Please select image for your publication.</span>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            @if($publication->image ?? '')
                            <img src="{{ asset('/image/'.$publication->image) }}">
                            @endif
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <input type="file" class="form-control" id="image" name="image" value="">
                                </div>
                                @error('image')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row g-3 align-center">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="tat">Genres</label>
                                <span class="form-note">Please select generes for your publication.</span>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            @foreach($genres as $data)
                            <div class="custom-control custom-control-sm custom-checkbox">
                                <?php 
                                    if($publication->genres ?? ''){
                                        $gen = json_decode($publication->genres); 
                                        if(in_array($data->id,$gen)){ ?>
                                            <input type="checkbox" class="custom-control-input" name="genres[]" id="genres{{ $data->id ?? '' }}" value="{{ $data->id }}" checked>
                                 <?php  } ?>
                                        <input type="checkbox" class="custom-control-input" name="genres[]" id="genres{{ $data->id ?? '' }}" value="{{ $data->id }}">
                                        <label class="custom-control-label" for="genres{{ $data->id ?? ''}}">{{ $data->genre_name }}</label> 
                                    <?php   
                                    }else{ ?>
                                        <input type="checkbox" class="custom-control-input" name="genres[]" id="genres{{ $data->id ?? '' }}" value="{{ $data->id }}">
                                        <label class="custom-control-label" for="genres{{ $data->id ?? ''}}">{{ $data->genre_name }}</label> 
                                <?php
                                    }
                                ?>
                                   
                                @error('genres')
                                {{ $message }}
                                @enderror
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="row g-3 align-center">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label">Article Type</label>
                                <span class="form-note">Please select the article type for your publication.</span>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            @foreach($article as $a_type)
                            <div class="custom-control custom-control-sm custom-radio">
                                <?php 
                                    if($publication->article_type ?? ''){ 
                                        $art = json_decode($publication->article_type);
                                        if(in_array($a_type->id,$art)){ ?>
                                            <input type="checkbox" class="custom-control-input" name="article[]" id="article{{ $a_type->id ?? '' }}" value="{{ $a_type->id }}" checked>
                                            <label class="custom-control-label" for="article{{ $a_type->id ?? '' }}">{{ $a_type->article_type }}</label>
                                <?php   }else{ ?>
                                            <input type="checkbox" class="custom-control-input" name="article[]" id="article{{ $a_type->id ?? '' }}" value="{{ $a_type->id }}">
                                            <label class="custom-control-label" for="article{{ $a_type->id ?? '' }}">{{ $a_type->article_type }}</label>
                                <?php   }
                                    }else{ ?>
                                        <input type="checkbox" class="custom-control-input" name="article[]" id="article{{ $a_type->id ?? '' }}" value="{{ $a_type->id }}">
                                        <label class="custom-control-label" for="article{{ $a_type->id ?? '' }}">{{ $a_type->article_type }}</label>
                                <?php   
                                    }
                                ?>
                                @error('article')
                                {{ $message }}
                                @enderror
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="row g-3 align-center">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label">Country/Religion</label>
                                <span class="form-note">Please select country or religion for your publication.</span>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            @foreach($country as $cnt)
                            <div class="custom-control custom-control-sm custom-radio">
                                <?php 
                                    if($publication->country ?? ''){
                                        $cntry = $publication->country;
                                        if($cntry == $cnt->id){ ?>
                                            <input type="radio" class="custom-control-input" name="country" id="country{{ $cnt->id ?? '' }}" value="{{ $cnt->id }}" checked>
                                            <label class="custom-control-label" for="country{{ $cnt->id ?? '' }}">{{ $cnt->country_name }}</label>
                                <?php   }else{ ?>
                                            <input type="radio" class="custom-control-input" name="country" id="country{{ $cnt->id ?? '' }}" value="{{ $cnt->id }}">
                                            <label class="custom-control-label" for="country{{ $cnt->id ?? '' }}">{{ $cnt->country_name }}</label>
                                <?php   } 
                                    }else{  ?>
                                        <input type="radio" class="custom-control-input" name="country" id="country{{ $cnt->id ?? '' }}" value="{{ $cnt->id }}">
                                        <label class="custom-control-label" for="country{{ $cnt->id ?? '' }}">{{ $cnt->country_name }}</label>
                                <?php    
                                    }
                                ?>
                                @error('country')
                                {{ $message }}
                                @enderror
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <input type="hidden" name="id" id="id" value="{{ $publication->id ?? ''}}">
                    <div class="row g-3">
                        <div class="col-lg-7 offset-lg-5">
                            <div class="form-group mt-2">
                                <button type="submit" class="btn btn-lg btn-primary">Add Publications</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- card -->
    </div><!-- .nk-block -->
</div>

@endsection