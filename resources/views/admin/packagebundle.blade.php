@extends('admin_layout.master')

@section('content')

<div class="nk-content">
    <div class="nk-block nk-block-lg">
        <div class="card card-bordered">
            <div class="card-inner">
                <div class="card-head">
                    <h5 class="card-title">Package Bundle</h5>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success col-lg-6">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                </div>
                <form action="{{ url('admin-dashboard/createbundle') }}" method="POST" class="gy-3" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-3 align-center">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="title">Title</label>
                                <span class="form-note">Specify the title of your Package Bundle.</span>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="title" name="title" value="" placeholder="Enter title here">
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
                                <label class="form-label" for="price">Price</label>
                                <span class="form-note">Specify the price of your Package Bundle.</span>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="price" name="price" value="" placeholder="Enter price here">
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
                                <label class="form-label" for="retail_price">Retail Price</label>
                                <span class="form-note">Specify the retail price of your Package Bundle.</span>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="retail_price" name="retail_price" value="" placeholder="Enter retail price here">
                                </div>
                                @error('retail_price')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row g-3 align-center">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label">Category</label>
                                <span class="form-note">Please select the Category for your Package Bundle.</span>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            @foreach($category as $catg)
                            <div class="custom-control custom-control-sm custom-radio">
                                <input type="radio" class="custom-control-input" name="category" id="category{{ $catg->id ?? ''}}" value="{{ $catg->id ?? ''}}">
                                <label class="custom-control-label" for="category{{ $catg->id ?? ''}}">{{ $catg->category_name ?? ''}}</label>
                            </div>
                            @endforeach

                            @error('category')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="row g-3 align-center">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label">Publications</label>
                                <span class="form-note">Please select the Publications for your Package Bundle.</span>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <button type="button" class="btn btn-md btn-primary" data-bs-toggle="modal" data-bs-target="#modalDefault">Select Publications</button>
                            <div id="p-title"></div>
                            @error('publication')
                            {{ $message }}
                            @enderror
                            <div class="modal fade" tabindex="-1" id="modalDefault">
                                <div class="modal-dialog modal-xl" role="document">
                                    <div class="modal-content">
                                        <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <em class="icon ni ni-cross"></em>
                                        </a>
                                        <div class="modal-header">
                                            <h5 class="modal-title">Select Publications</h5>
                                        </div>
                                        <div class="modal-body">
                                            <div class="nk-block">
                                                <div class="card card-bordered">
                                                    <div class="card-inner-group">
                                                        <div class="card-inner p-0">
                                                            <div class="nk-tb-list">
                                                                <div class="nk-tb-item nk-tb-head">
                                                                    <div class="nk-tb-col nk-tb-col-check">
                                                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                            <input type="checkbox" class="custom-control-input" id="pid">
                                                                            <label class="custom-control-label" for="pid"></label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="nk-tb-col tb-col-sm"><span>Title</span></div>
                                                                    <div class="nk-tb-col"><span>Price</span></div>
                                                                    <div class="nk-tb-col"><span>Domain Authority</span></div>
                                                                    <div class="nk-tb-col"><span>TAT</span></div>
                                                                    <div class="nk-tb-col tb-col-md"><span>Genre</span></div>
                                                                    <div class="nk-tb-col tb-col-md"><span>Article Type</span></div>
                                                                    <div class="nk-tb-col tb-col-md"><span>Country/Region</span></div>
                                                                </div><!-- .nk-tb-item nk-tb-head-->
                                                                @foreach($publications as $data)
                                                                <div class="nk-tb-item">
                                                                    <div class="nk-tb-col nk-tb-col-check">
                                                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                            <input type="checkbox" class="custom-control-input addpublication" name="publication[]" id="pid{{ $data->id ?? '' }}" value="{{ $data->id }}">
                                                                            <label class="custom-control-label" for="pid{{ $data->id ?? '' }}"></label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="nk-tb-col tb-col-sm">
                                                                        <span class="tb-product">
                                                                            <span class="title">{{ $data->title }}</span>
                                                                        </span>
                                                                    </div>
                                                                    <div class="nk-tb-col">
                                                                        <?php 
                                                                            if($data->price == 0){ ?>
                                                                                <span class="tb-sub">{{ $data->price }}</span>
                                                                     <?php  }else{ ?>
                                                                                <span class="tb-sub">${{ number_format($data->price, 2) }}</span>
                                                                    <?php   } ?>
                                                                    </div>
                                                                    <div class="nk-tb-col">
                                                                        <span class="tb-lead">{{ $data->domain_authority }}</span>
                                                                    </div>
                                                                    <div class="nk-tb-col">
                                                                        <span class="tb-sub">{{ $data->turn_around_time }}</span>
                                                                    </div>
                                                                    <div class="nk-tb-col tb-col-md">
                                                                        <?php 
                                                                            if($data->genres){
                                                                                $gen = json_decode($data->genres);
                                                                                foreach($gen as $gid){
                                                                                    $genre = (App\Models\Genre::where('id','=',$gid)->first()); ?>
                                                                                    <span class="tb-sub">{{ $genre->genre_name }} /</span>
                                                                        <?php   }
                                                                            }
                                                                        ?>
                                                                    </div>
                                                                    <div class="nk-tb-col tb-col-md">
                                                                        <?php
                                                                            if($data->article_type){
                                                                                $atype = $data->article_type;
                                                                                $articleType = (App\Models\ArticleType::where('id','=',$atype)->first()); ?>
                                                                                <span class="tb-sub">{{ $articleType->article_type }}</span>
                                                                    <?php   }
                                                                        ?>
                                                                    </div>
                                                                    <div class="nk-tb-col tb-col-md">
                                                                        <?php
                                                                            if($data->country){
                                                                                $cntry = $data->country;
                                                                                $countries = (App\Models\Country::where('id','=',$cntry)->first()); ?>
                                                                                <span class="tb-sub">{{ $countries->country_name }}</span>
                                                                    <?php   }
                                                                        ?>
                                                                    </div>
                                                                </div><!-- .nk-tb-item -->
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer bg-light">
                                            <button type="button" class="btn btn-primary" id="butn" name="butn">Done</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="id" id="id" value="">
                        <div class="row g-3">
                            <div class="col-lg-7 offset-lg-5">
                                <div class="form-group mt-2">
                                    <button type="submit" class="btn btn-lg btn-primary">Add Package Bundle</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- card -->
    </div><!-- .nk-block -->
</div>

<script>
    $(document).ready(function(){
        id = [];
        $('.addpublication').change(function(){
            if(this.checked){
                publicationid = $(this).val();
                id.push(publicationid);
            }
        });

        $('#butn').click(function(){
            pid = id;
            var data={
                id: pid,
                _token: "{{ csrf_token() }}"
            }
            $.ajax({
                url:"{{ url('admin-dashboard/getpublication') }}",
                type: "POST",
                data: data,
                dataType:"JSON",
                success:function(response){
                    if(response){
                        publication = response;
                        $.each(publication,function(key,val){
                            title = val.title;
                            $('#p-title').append('<div id="pub'+val.id+'"><input type="text" name="pname" id="pname'+val.id+'" value="'+title+'"><button type="button" onclick="remove(id='+val.id+')">X</button></div>');
                        });
                    }
                }
            });
        });
    });

    function remove(id){
        $('#pub'+id).remove();
    }

</script>

@endsection