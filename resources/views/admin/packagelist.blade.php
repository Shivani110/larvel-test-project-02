@extends('admin_layout.master')

@section('content')

<div class="nk-content">
    <h4 class="title nk-block-title">Package Bundle List</h4>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Price</th>
                <th scope="col">Retail Price</th>
                <th scope="col">Category</th>
                <th scope="col">Publications</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1; ?>
            @foreach($package as $data)
            <tr id="pkg{{ $data->id }}">
                <th scope="row">{{ $i++ }}</th>
                <td>{{ $data->title }}</td>
                <td>${{ number_format($data->price, 2) }}</td>
                <td>${{ number_format($data->retail_price, 2) }}</td>
                <td>
                <?php
                    if($data->category != null){
                        $ctId = $data->category;
                        $categories = (App\Models\Category::where('id','=',$ctId)->first());
                        print_r($categories->category_name);
                    }
                ?>
                </td>
                <td>
                <?php
                    if($data->publications){
                        $pId = json_decode($data->publications); ?>
                        <ul>
                <?php   foreach($pId as $pid){
                            $publication = (App\Models\publications::where('id','=',$pid)->first()); ?>
                            <li>{{ $publication->title }}</li>
                <?php   }
                       
                    }
                ?>   
                </td>
                <td>
                    <a class="btn btn-primary" href="{{ url('admin-dashboard/packagebundle/'.$data->id) }}">Edit</a>
                    <a class="btn btn-danger" onclick="deletePackage({{ $data->id }})">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    function deletePackage(id){
        var data={
            id: id,
            _token: "{{ csrf_token() }}"
        }
        $.ajax({
            url: "{{ url('admin-dashboard/deletebundle') }}",
            type: "POST",
            data: data,
            dataType: "JSON",
            success:function(response){
                if(response){
                    NioApp.Toast("PackageBundle Deleted..","error",{position:'top-right'});
                    id = data.id;
                    $('#pkg'+id).remove();
                }
            }
        });
    }
</script>

@endsection