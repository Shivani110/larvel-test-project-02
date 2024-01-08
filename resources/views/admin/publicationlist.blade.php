@extends('admin_layout.master');

@section('content')

<div class="nk-content">
    <h4 class="title nk-block-title">Publications List</h4>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Title</th>
                <th scope="col">URL</th>
                <th scope="col">Price</th>
                <th scope="col">Domain</th>
                <th scope="col">TAT</th>
                <th scope="col">Genres</th>
                <th scope="col">Article Type</th>
                <th scope="col">Country</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1 ;?>
            @foreach($publication as $data)
            <tr id="pbl{{ $data->id }}">
                <th scope="row">{{ $i++ }}</th>
                <td><img src="{{ $data->image }}"></td>
                <td>{{ $data->title }}</td>
                <td>{{ $data->url }}</td>
                <td>{{ $data->price }}</td>
                <td>{{ $data->domain_authority }}</td>
                <td>{{ $data->turn_around_time }}</td>
                <td>
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
                </td>
                <td>
                    <?php 
                        if($data->article_type ?? ''){
                            $article_type = $data->article_type;
                            $article = (App\Models\ArticleType::where('id','=',$article_type)->first());
                            print_r($article->article_type);   
                        }
                    
                    ?>
                </td>
                <td>
                    <?php 
                        if($data->country ?? ''){
                            $id = $data->country;
                            $country = (App\Models\Country::where('id','=',$id)->first());
                            print_r($country->country_name);
                        }
                    ?>
                </td>
                <td>
                    <a href="{{ url('/admin-dashboard/insertpublication/'.$data->id) }}" class="btn btn-primary">Edit</a>
                    <button type="button" class="btn btn-danger" onclick="deletePublication({{ $data->id }})">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
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