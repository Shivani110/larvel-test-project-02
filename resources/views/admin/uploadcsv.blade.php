@extends('admin_layout.master')

@section('content')

<div class = "nk-content">
    <div class="nk-block nk-block-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="title nk-block-title">CSV File Upload</h4>
            </div>
        </div>
        <div class="card card-bordered">
            <div class="card-inner">
                <div class="card-head">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success col-lg-6">
                            <p>{{ $message }}</p>
                        </div>
                    @elseif ($message = Session::get('error'))
                        <div class="alert alert-danger col-lg-6">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                </div>
                <form action="{{ url('admin-dashboard/csvupload') }}" method="post" id="myform" enctype="multipart/form-data">
                @csrf
                    <div class="col-lg-6">
                        <div class="form-group">
                                <label class="form-label" for="csv">File Upload</label>
                                <input type="file" class="form-control" id="csv" name="csv" value="">
                            
                            @error('csv')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <input type="submit" value="Upload" class="btn btn-primary mt-2" id="submit">
                </form>
            </div>
        </div>
    </div>
</div>

@endsection