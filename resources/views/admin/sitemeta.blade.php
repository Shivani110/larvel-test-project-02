@extends('admin_layout.master')

@section('content')

<div class="nk-content">
    <div class="nk-block nk-block-lg">
        <div class="card card-bordered">
            <div class="card-inner">
                <div class="card-head">
                    <h5 class="card-title">Site Meta</h5>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success col-lg-6">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                </div>
                @if(isset($sitemeta))
                    <form action="{{ url('admin-dashboard/updatesitemeta') }}" method="POST" class="gy-3" enctype="multipart/form-data">
                    @csrf
                @else
                    <form action="{{ url('admin-dashboard/createsite') }}" method="POST" class="gy-3" enctype="multipart/form-data">
                @endif
                    @csrf
                    <div class="row g-3 align-center">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="title">Title</label>
                                <span class="form-note">Specify the title of your Site.</span>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="title" name="title" value="{{ $sitemeta->title ?? '' }}" placeholder="Enter title here">
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
                                <label class="form-label" for="description">Description</label>
                                <span class="form-note">Specify the description of your Site.</span>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <textarea class="form-control" id="description" name="description" placeholder="Enter description here">{{ $sitemeta->description ?? '' }}</textarea>
                                </div>
                                @error('description')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row g-3 align-center">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="file">File Upload</label>
                                <span class="form-note">Please upload the Questionnaire of your Site.</span>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    @if($sitemeta->questionnaire ?? '')
                                        {{ $sitemeta->questionnaire }}
                                    @endif
                                    <input type="file" class="form-control" id="file" name="file">
                                </div>
                                @error('file')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="id" id="id" value="{{ $sitemeta->id ?? '' }}">
                    <div class="row g-3">
                        <div class="col-lg-7 offset-lg-5">
                            <div class="form-group mt-2">
                                <button type="submit" class="btn btn-lg btn-primary">Update Site Meta</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    ClassicEditor.create( document.querySelector( '#description' ) ); 
</script>

@endsection