@extends('admin_layout.master')

@section('content')

<div class="nk-content">
    <div class="nk-block nk-block-lg">
        <div class="card card-bordered">
            <div class="card-inner">
                <div class="card-head">
                    <h5 class="card-title">Press Release</h5>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success col-lg-6">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                </div>
                @if(isset($pressRelease))
                    <form action="{{ url('admin-dashboard/updatepressrelease') }}" method="POST" class="gy-3">
                    @csrf
                @else
                    <form action="{{ url('admin-dashboard/createpressrelease') }}" method="POST" class="gy-3">
                @endif
                    @csrf
                    <div class="row g-3 align-center">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="price">Price</label>
                                <span class="form-note">Specify the price of your Press Release.</span>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="price" name="price" value="{{ $pressRelease->price ?? '' }}" placeholder="Enter price here">
                                </div>
                                @error('price')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row g-3 align-center">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="description">Description</label>
                                <span class="form-note">Specify the description of your Press Release.</span>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <textarea class="form-control" id="description" name="description" placeholder="Enter description here">{{ $pressRelease->description ?? '' }}</textarea>
                                </div>
                                @error('description')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="id" id="id" value="{{ $pressRelease->id ?? '' }}">
                    <div class="row g-3">
                        <div class="col-lg-7 offset-lg-5">
                            <div class="form-group mt-2">
                            @if(isset($pressRelease))
                                <button type="submit" class="btn btn-lg btn-primary">Update Press Release</button>
                            @else
                                <button type="submit" class="btn btn-lg btn-primary">Add Press Release</button>
                            @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection