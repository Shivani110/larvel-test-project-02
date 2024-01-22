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
                                            <h4 class="nk-block-title">Login Activity</h4>
                                            <div class="nk-block-des">
                                                <?php $total = count($visitor); ?>
                                                <p>Here is your last {{ $total }} login activities log. <span class="text-soft"><em class="icon ni ni-info"></em></span></p>
                                            </div>
                                        </div>
                                        <div class="nk-block-head-content align-self-start d-lg-none">
                                            <a href="#" class="toggle btn btn-icon btn-trigger mt-n1" data-target="userAside"><em class="icon ni ni-menu-alt-r"></em></a>
                                        </div>
                                    </div>
                                </div><!-- .nk-block-head -->
                                <div class="nk-block card card-bordered">
                                    <table class="table table-ulogs">
                                        <thead class="table-light">
                                            <tr>
                                                <th class="tb-col-ip"><span class="overline-title">IP</span></th>
                                                <th class="tb-col-date"><span class="overline-title">Date</span></th>
                                                <th class="tb-col-time"><span class="overline-title">Time</span></th>  
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($visitor as $data)
                                            <tr>
                                                <td class="tb-col-ip"><span class="sub-text">{{ $data->ip_address}}</span></td>
                                                <td class="tb-col-date"><span class="sub-text">{{ $data->created_at->format('d/m/Y') }}</span></td>
                                                <td class="tb-col-time"><span class="sub-text">{{ $data->created_at->format('H:m:s') }}</span></td>  
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div><!-- .nk-block-head -->
                            </div><!-- .card-inner -->
                            <div class="card-aside card-aside-left user-aside toggle-slide toggle-slide-left toggle-break-lg" data-toggle-body="true" data-content="userAside" data-toggle-screen="lg" data-toggle-overlay="true">
                                <div class="card-inner-group">
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
                                            <li><a href="{{ url('admin-dashboard/userprofile') }}"><em class="icon ni ni-user-fill-c"></em><span>Personal Infomation</span></a></li>
                                            <li><a class="active" href="{{ url('admin-dashboard/loginactivity') }}"><em class="icon ni ni-activity-round-fill"></em><span>Account Activity</span></a></li>
                                            <li><a href="{{ url('admin-dashboard/accountsetting') }}"><em class="icon ni ni-lock-alt-fill"></em><span>Security Settings</span></a></li>
                                            <li><a href="{{ url('admin-dashboard/useraccess') }}"><em class="icon ni ni-grid-add-fill-c"></em><span>User-Access</span></a></li>
                                        </ul>
                                    </div><!-- .card-inner -->
                                </div><!-- .card-inner-group -->
                            </div><!-- card-aside -->
                        </div><!-- card-aside-wrap -->
                    </div><!-- .card -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>

@endsection