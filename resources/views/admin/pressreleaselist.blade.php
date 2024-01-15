@extends('admin_layout.master');

@section('content')

<div class="nk-content">
    <h4 class="title nk-block-title">Press Release List</h4>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1 ;?>
            @foreach($pressRelease as $data)
            <tr id="prl{{ $data->id }}">
                <td>{{ $i++ }}</td>
                <td>{{ $data->description }}</td>
                <td>${{ number_format($data->price,2) }}</td>
                <td>
                    <a href="{{ url('admin-dashboard/pressrelease/'.$data->id) }}" class="btn btn-primary">Edit</a>
                    <button type="button" class="btn btn-danger" onclick="deletePress({{$data->id}})">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    function deletePress(id){
        var data={
            id: id,
            _token: "{{ csrf_token() }}"
        }
        $.ajax({
            url: "{{ url('admin-dashboard/deletepressrelease') }}", 
            type: "POST",
            data: data,
            dataType: "JSON",
            success: function(response){
                if(response){
                    NioApp.Toast("Press Release Deleted..","error",{position:'top-right'});
                    id = data.id;
                    $('#prl'+id).html('');
                }
            }
        })
    }
</script>

@endsection