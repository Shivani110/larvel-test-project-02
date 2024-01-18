@extends('admin_layout.master')

@section('content')

<div class="nk-content">
    <div class="nk-block nk-block-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="title nk-block-title">Change Password</h4>
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
                <form action="{{ url('admin-password/changepassword') }}" method="post" id="myform">
                    @csrf
                    <div class="col-lg-7">
                        <div class="form-group">
                            <label class="form-label" for="old_password">Old Password</label>
                            <input type="password" class="form-control" id="old_password" name="old_password" value="">
                            @error('old_password')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="form-group">
                            <label class="form-label" for="new_password">New Password</label>
                            <input type="password" class="form-control" id="new_password" name="new_password" value="">
                            @error('new_password')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="form-group">
                            <label class="form-label" for="confirm_password">Confirm Password</label>
                            <input type="password" class="form-control" id="confirm_password" name="confirm_password" value="">
                            @error('confirm_password')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <input type="submit" value="Save" class="btn btn-primary mt-2" id="submit">
                </form>
            </div>
        </div>
    </div>
</div>


@endsection