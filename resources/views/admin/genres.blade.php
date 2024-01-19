@extends('admin_layout.master')

@section('content')

<div class="nk-content">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="components-preview wide-md mx-auto">
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h4 class="title nk-block-title">Genres</h4>
                            </div>
                        </div>
                        <div class="card card-bordered card-preview">
                            <div class="card-inner">
                                <div class="preview-block">
                                    <form id="myform" method="POST">
                                        <div class="row gy-4">
                                            <div class="col-lg-8">
                                                <div class="form-group">
                                                    <label class="form-label" for="name">Genre Name</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" id="name" name="name">
                                                    </div>
                                                </div>
                                                <input type="hidden" id="g_id" name="g_id" value=""> 
                                                <input type="submit" name="submit" value="Save" class="btn btn-primary">
                                                <br>
                                                <br>
                                                <div id="addNew" style="display:none">
                                                    <button type="button" class="btn btn-gray">+Add New</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <br>
                            <table class="table table-tranx" id="table">
                                <thead>
                                    <tr class="tb-tnx-head">
                                        <th class="tb-tnx-id"><span class="">#</span></th>
                                        <th class="tb-tnx-info">
                                            <span class="tb-tnx-desc d-none d-sm-inline-block">
                                                <span>Genre Name</span>
                                            </span>
                                        </th>
                                        <th class="tb-tnx-action">
                                            <span>Action</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody> 
                                    <?php $i=1; ?>
                                    @foreach($genre as $data)             
                                    <tr class="tb-tnx-item" id="genre{{ $data->id }}">
                                        <td class="tb-tnx-id">
                                            <a href="#"><span>{{ $i++ }}</span></a>
                                        </td>
                                        <td class="tb-tnx-info g-name{{ $data->id }}">
                                            <div class="tb-tnx-desc">
                                                <input type="text" data-id="{{ $data->id }}" class="" value="{{ $data->genre_name }}" disabled="" style="border: none; background: transparent;">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="dropdown drop"><a class="text-soft=" dropdown-toggle="" btn="" btn-icon="" btn-trigger="" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em>
                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                    <ul class="link-list-plain">
                                                        <li><a data-id="{{ $data->id }}" data-name="{{ $data->genre_name }}" data-slug="" class="edit-category">Edit</a></li>
                                                        <li><a data-id="{{ $data->id }}" class="remove-category">Remove</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody> 
                            </table>
                        </div><!-- .card-preview -->
                    </div><!-- .nk-block -->
                </div><!-- .components-preview -->
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        var i = parseInt({{ $i }});
        $('#myform').submit(function(e){
            e.preventDefault();
            var data={
                id: $('#g_id').val(),
                name: $('#name').val(),
                _token: "{{ csrf_token() }}"
            }
            $.ajax({
                url: "{{ url('admin-dashboard/creategenres') }}",
                data: data,
                type: "POST",
                dataType: "JSON",
                success: function(response){
                    $('#myform')[0].reset();
                    if(response[1] == 'edit'){
                        var html = '<input type="text" data-id="'+response[0].id+'" class="" value="'+response[0].genre_name+'" disabled="" style="border: none; background: transparent;">';
                        $('.g-name'+response[0].id).html(html);
                        var targetDiv = $("#genre"+response[0].id);
                        $('html, body').animate({
                            scrollTop: targetDiv.offset().top
                        }, 0);
                        $('#g_id').val('');
                        $('#addNew').hide();
                    }

                    if(response[1] == 'add'){
                        var row = $('<tr class="tb-tnx-item" id="genre'+response[0].id+'"><td class="tb-tnx-id"><a href="#"><span>'+i+'</span></a></td><td class="tb-tnx-info g-name'+response[0].id+'"><div class="tb-tnx-desc"><input type="text" data-id="'+response[0].id+'" class="" value="'+response[0].genre_name+'" disabled="" style="border: none; background: transparent;"></div></td><td><div class="dropdown drop"><a class="text-soft=" dropdown-toggle="" btn="" btn-icon="" btn-trigger="" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em><div class="dropdown-menu dropdown-menu-end dropdown-menu-xs"><ul class="link-list-plain"><li><a data-id="'+response[0].id+'" data-name="'+response[0].genre_name+'" data-slug="" class="edit-category">Edit</a></li><li><a data-id="'+response[0].id+'" class="remove-category">Remove</a></li></ul></div></div></td></tr>');
                        $("tbody").append(row);
                        i = i+1;
                        var targetDiv = $("#genre"+response[0].id);
                        $('html, body').animate({
                            scrollTop: targetDiv.offset().top
                        }, 0);
                        $('#addNew').hide();
                    }
                },
                error: function(errors){
                    var message = errors.responseJSON.message;
                    NioApp.Toast(message, 'error' ,{position:'top-right'});
                }
            });
        });
    });

    $('body').delegate('.edit-category','click',function(){
        window.scrollTo(0, 0);
        $('#addNew').show();
        var dataname = $(this).attr('data-name');
        var dataid = $(this).attr('data-id');
        var name = $('#name').val(dataname);
        var id = $('#g_id').val(dataid);
    });

    $('body').delegate('.remove-category','click',function(){
        var name = $('#name').val('');
        var id = $('#g_id').val('');
        $('#addNew').hide();
        
        var id = $(this).attr('data-id');
        var data={
            id: id,
            _token: "{{ csrf_token() }}"
        }
        $.ajax({
            url: "{{ url('admin-dashboard/deletegenres') }}",
            type: "POST",
            data: data,
            dataType: "json",
            success: function(response){
                NioApp.Toast('Deleted', 'error', {position: 'top-right'});
                id = data.id;
                $('#genre'+id).html('');
            }
        });
    });

    $('#addNew').click(function(){
        $('#name').val('');
        $('#g_id').val('');
    });

</script>


@endsection