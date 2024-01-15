@extends('admin_layout.master')

@section('content')

<div class="nk-content">
    <h4 class="title nk-block-title">Other Service List</h4>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Category</th>
                <th scope="col">Publication</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1; ?>
            @foreach($service as $data)
            <tr id="srvc{{ $data->id }}">
                <th scope="row">{{ $i++ }}</th>
                <td>{{ $data->title }}</td>
                <td>
                    @if($data->category ?? '')
                        <?php 
                            $ct_id = $data->category;
                            $serviceCategory = (App\Models\ServicesCategory::where('id','=',$ct_id)->first());

                            print_r($serviceCategory->category_name);
                        ?>
                    @endif
                </td>
                <td>
                    @if($data->publication ?? '')
                        <?php
                            $p_id = json_decode($data->publication); ?>
                            <ul> 
                        <?php    foreach($p_id as $pid){
                                $publication = (App\Models\publications::where('id','=',$pid)->first()); ?>
                                <li>{{ $publication->title }}</li>
                            <?php   }
                        ?>
                            </ul> 
                    @endif
                </td>
                <td>
                    <a href="{{ url('admin-dashboard/otherservices/'.$data->id) }}" class="btn btn-primary">Edit</a>
                    <button type="button" class="btn btn-danger" onclick="deleteServices({{ $data->id }})">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    function deleteServices(id){
        var data={
            id: id,
            _token: "{{ csrf_token() }}"
        }
        $.ajax({
            url: "{{ url('admin-dashboard/deleteservices') }}",
            type: "POST",
            data: data,
            dataType: "JSON",
            success: function(response){
                if(response){
                    NioApp.Toast("Other Services Deleted..","error",{position:'top-right'});
                    id = data.id;
                    $('#srvc'+id).remove();
                }
            }
        });
    }

</script>

@endsection