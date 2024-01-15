@extends('admin_layout.master')

@section('content')

<div class="nk-content">
    <h4 class="title nk-block-title">Site Meta List</h4>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1; ?>
            @foreach( $site as $data)
            <tr id="site{{ $data->id }}">
                <th scope="row">{{ $i++ }}</th>
                <td>{{ $data->title }}</td>
                <td>{{ $data->description }}</td>
                <td>
                    <a href="{{ url('admin-dashboard/sitemeta/'.$data->id) }}" class="btn btn-primary">Edit</a>
                    <button type="button" class="btn btn-danger" onclick="removeSiteMeta({{ $data->id }})">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    function removeSiteMeta(id){
        var data={
            id: id,
            _token: "{{ csrf_token() }}",
        }
        $.ajax({
            url: "{{ url('admin-dashboard/deletesitemeta') }}",
            type: "POST",
            data: data,
            dataType: "JSON",
            success: function(response){
                if(response){
                    NioApp.Toast("Site Meta Deleted",'error',{position:'top-right'});
                    id = data.id;
                    $('#site'+id).html('');
                }
            }
        });
    }
</script>

@endsection