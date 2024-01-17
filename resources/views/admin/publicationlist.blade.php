@extends('admin_layout.master');

@section('content')

<div class="nk-content">
    <h4 class="title nk-block-title">Publications List</h4>
    <div class="card card-bordered">
        <div class="card-inner-group">
            <div class="card-inner p-0">
                <div class="nk-tb-list">
                    <div class="nk-tb-item nk-tb-head">
                        <div class="nk-tb-col nk-tb-col-check">
                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                <input type="checkbox" class="custom-control-input" id="pId">
                                <label class="custom-control-label" for="pId"></label>
                            </div>
                        </div>
                        <div class="nk-tb-col tb-col-sm"><span>Image</span></div>
                        <div class="nk-tb-col tb-col-sm"><span>Title</span></div>
                        <div class="nk-tb-col"><span>Price</span></div>
                        <div class="nk-tb-col"><span>Domain Authority</span></div>
                        <div class="nk-tb-col"><span>TAT</span></div>
                        <div class="nk-tb-col tb-col-md"><span>Genre</span></div>
                        <div class="nk-tb-col tb-col-md"><span>Article Type</span></div>
                        <div class="nk-tb-col tb-col-md"><span>Country/Region</span></div>
                        <div class="nk-tb-col tb-col-md"><span>Action</span></div>
                    </div>
                    @foreach($publication as $data)
                        @if($data->mostpopular == '1')
                        <div class="nk-tb-item">
                            <div class="nk-tb-col nk-tb-col-check">
                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                    <input type="checkbox" class="custom-control-input checkpubl" name="publication[]" id="pid{{ $data->id ?? '' }}" value="{{ $data->id }}" checked>
                                    <label class="custom-control-label" for="pid{{ $data->id ?? '' }}"></label>
                                </div>
                            </div>
                            <div class="nk-tb-col tb-col-sm">
                                <span class="tb-product">
                                    <img src="{{ $data->image }}">
                                </span>
                            </div>
                            <div class="nk-tb-col tb-col-sm">
                                <span class="tb-product">
                                    <span class="title">{{ $data->title }}</span>
                                </span>
                            </div>
                            <div class="nk-tb-col">
                                <?php
                                    if($data->price == 0){
                                        print_r("ASK");
                                    }else{ ?>
                                        ${{ number_format($data->price,2) }}
                            <?php   }
                                ?>
                            </div>
                            <div class="nk-tb-col">
                                <span class="tb-lead">{{ $data->domain_authority }}</span>
                            </div>
                            <div class="nk-tb-col">
                                <span class="tb-sub">{{ $data->turn_around_time }}</span>
                            </div>
                            <div class="nk-tb-col tb-col-md">
                                <?php 
                                    if($data->genres ?? ''){
                                        $genres = json_decode($data->genres);
                                        foreach($genres as $val){
                                            $genre = (App\Models\Genre::where('id','=',$val)->first()); ?>
                                            <ul>
                                                <li>{{ $genre->genre_name }}</li>
                                            </ul>
                                <?php   }
                                    }
                                ?>
                            </div>
                            <div class="nk-tb-col tb-col-md">
                                <?php 
                                    if($data->article_type ?? ''){
                                        $article_type = $data->article_type;
                                        $article = (App\Models\ArticleType::where('id','=',$article_type)->first());
                                        print_r($article->article_type);   
                                    }
                                ?>
                            </div>
                            <div class="nk-tb-col tb-col-md">
                                <?php 
                                    if($data->country ?? ''){
                                        $id = $data->country;
                                        $country = (App\Models\Country::where('id','=',$id)->first());
                                        print_r($country->country_name);
                                    }
                                ?>
                            </div>
                            <div class="nk-tb-col tb-col-md">
                                <a href="{{ url('/admin-dashboard/insertpublication/'.$data->id) }}" class="btn btn-primary">Edit</a>
                                <button type="button" class="btn btn-danger" onclick="deletePublication({{ $data->id }})">Delete</button>
                            </div>
                        </div>
                        @else
                        <div class="nk-tb-item">
                            <div class="nk-tb-col nk-tb-col-check">
                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                    <input type="checkbox" class="custom-control-input checkpubl" name="publication[]" id="pid{{ $data->id ?? '' }}" value="{{ $data->id }}">
                                    <label class="custom-control-label" for="pid{{ $data->id ?? '' }}"></label>
                                </div>
                            </div>
                            <div class="nk-tb-col tb-col-sm">
                                <span class="tb-product">
                                    <img src="{{ $data->image }}">
                                </span>
                            </div>
                            <div class="nk-tb-col tb-col-sm">
                                <span class="tb-product">
                                    <span class="title">{{ $data->title }}</span>
                                </span>
                            </div>
                            <div class="nk-tb-col">
                                <?php
                                    if($data->price == 0){
                                        print_r("ASK");
                                    }else{ ?>
                                        ${{ number_format($data->price,2) }}
                            <?php   }
                                ?>
                            </div>
                            <div class="nk-tb-col">
                                <span class="tb-lead">{{ $data->domain_authority }}</span>
                            </div>
                            <div class="nk-tb-col">
                                <span class="tb-sub">{{ $data->turn_around_time }}</span>
                            </div>
                            <div class="nk-tb-col tb-col-md">
                                <?php 
                                    if($data->genres ?? ''){
                                        $genres = json_decode($data->genres);
                                        foreach($genres as $val){
                                            $genre = (App\Models\Genre::where('id','=',$val)->first()); ?>
                                            <ul>
                                                <li>{{ $genre->genre_name }}</li>
                                            </ul>
                                <?php   }
                                    }
                                ?>
                            </div>
                            <div class="nk-tb-col tb-col-md">
                                <?php 
                                    if($data->article_type ?? ''){
                                        $article_type = $data->article_type;
                                        $article = (App\Models\ArticleType::where('id','=',$article_type)->first());
                                        print_r($article->article_type);   
                                    }
                                ?>
                            </div>
                            <div class="nk-tb-col tb-col-md">
                                <?php 
                                    if($data->country ?? ''){
                                        $id = $data->country;
                                        $country = (App\Models\Country::where('id','=',$id)->first());
                                        print_r($country->country_name);
                                    }
                                ?>
                            </div>
                            <div class="nk-tb-col tb-col-md">
                                <a href="{{ url('/admin-dashboard/insertpublication/'.$data->id) }}" class="btn btn-primary">Edit</a>
                                <button type="button" class="btn btn-danger" onclick="deletePublication({{ $data->id }})">Delete</button>
                            </div>
                        </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    $(document).ready(function(){
        id = '';
        $('.checkpubl').change(function(){
            if(this.checked){
                pID = $(this).val();
                id = pID;
                popular(id);
            }
        });

        function popular(id){
            var data={
                id: id,
                _token: "{{ csrf_token() }}"
            }
            $.ajax({
                url: "{{ url('admin-dashboard/popular') }}",
                type: "POST",
                data: data,
                dataType: "JSON",
                success: function(response){
                    NioApp.Toast('Status updated..','success',{position:'top-right'});
                }
            });
        }
    });

    function deletePublication(id){
        var data={
            id: id,
            _token: "{{ csrf_token() }}"
        }
        $.ajax({
            url: "{{ url('admin-dashboard/deletepublication') }}",
            type: "POST",
            data: data,
            dataType: "JSON",
            success: function(response){
                if(response){
                    NioApp.Toast("Publications Deleted..","error",{position:'top-right'});
                    id = data.id;
                    $('#pbl'+id).html('');
                }
            }
        });
    }
</script>

@endsection