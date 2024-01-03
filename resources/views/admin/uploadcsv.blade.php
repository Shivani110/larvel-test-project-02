@extends('admin_layout.master')

@section('content')

<div class = "nk-content">
    @if ($message = Session::get('success'))
        <div class="alert alert-success col-lg-6">
            <p>{{ $message }}</p>
        </div>
    @elseif ($message = Session::get('error'))
        <div class="alert alert-danger col-lg-6">
            <p>{{ $message }}</p>
        </div>
    @endif
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

@endsection