@extends('admin_layout.master')

@section('content')

<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block">
                    <div class="card card-bordered">
                        <div class="card-aside-wrap">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head nk-block-head-lg">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h4 class="nk-block-title">Change Personal Information</h4>
                                        </div>
                                    </div>
                                </div><!-- .nk-block-head -->
                                <div class="nk-block card card-bordered">
                                    <div class="card-inner">
                                        <div class="card-head">
                                            @if ($message = Session::get('success'))
                                                <div class="alert alert-success col-lg-8">
                                                    <p>{{ $message }}</p>
                                                </div>
                                            @endif
                                        </div>
                                        <form action="{{ url('admin-dashboard/updateprofile') }}" method="post">
                                            @csrf
                                            <div class="col-lg-8">
                                                <div class="form-group">
                                                    <label class="form-label" for="name">Full Name</label>
                                                    <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name ?? '' }}">
                                                    @error('name')
                                                    {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="form-group">
                                                    <label class="form-label" for="phone">Phone number</label>
                                                    <?php 
                                                        if(Auth::user()->phone_number != null){ ?>
                                                            <input type="text" class="form-control" id="phone" name="phone" value="{{ Auth::user()->phone_number ?? '' }}">
                                                <?php   }else{ ?>
                                                            <input type="text" class="form-control" id="phone" name="phone" value="Not add yet">
                                                <?php   }
                                                ?>
                                                @error('phone')
                                                {{ $message }}
                                                @enderror
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <input type="submit" value="Save Changes" name="submit" class="btn btn-primary">
                                            </div>
                                        </form>
                                    </div><!-- .card-inner -->
                                </div><!-- .nk-block card -->
                            </div>
                            <div class="card-aside card-aside-left user-aside toggle-slide toggle-slide-left toggle-break-lg" data-toggle-body="true" data-content="userAside" data-toggle-screen="lg" data-toggle-overlay="true">
                                <div class="card-inner-group" data-simplebar>
                                    <div class="card-inner">
                                        <div class="user-card">
                                            <div class="user-avatar bg-primary">
                                                <span>Admin</span>
                                            </div>
                                            <div class="user-info">
                                                <span class="lead-text">{{ Auth::user()->name }}</span>
                                                <span class="sub-text">{{ Auth::user()->email }}</span>
                                            </div>
                                            <div class="user-action">
                                                <div class="dropdown">
                                                    <a class="btn btn-icon btn-trigger me-n2" data-bs-toggle="dropdown" href="#"><em class="icon ni ni-more-v"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><em class="icon ni ni-camera-fill"></em><span>Change Photo</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-edit-fill"></em><span>Update Profile</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .user-card -->
                                    </div><!-- .card-inner -->
                                    <div class="card-inner p-0">
                                        <ul class="link-list-menu">
                                            <li><a class="active" href="{{ url('admin-dashboard/userprofile') }}"><em class="icon ni ni-user-fill-c"></em><span>Personal Infomation</span></a></li>
                                            <li><a href="{{ url('admin-dashboard/loginactivity') }}"><em class="icon ni ni-activity-round-fill"></em><span>Account Activity</span></a></li>
                                            <li><a href="{{ url('admin-dashboard/accountsetting') }}"><em class="icon ni ni-lock-alt-fill"></em><span>Security Settings</span></a></li>
                                            <li><a href="{{ url('admin-dashboard/useraccess') }}"><em class="icon ni ni-grid-add-fill-c"></em><span>User-Access</span></a></li>
                                        </ul>
                                    </div><!-- .card-inner -->
                                </div><!-- .card-inner-group -->
                            </div><!-- card-aside -->
                        </div><!-- .card-aside-wrap -->
                    </div><!-- .card -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>

@endsection