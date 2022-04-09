<div class="clearfix"></div>
                            <div class="sidebar-nav">
                                <ul>
                                    <li class="active">
                                        <a href="{{ route('admin.admin.dashboard') }}"><img src="{{ asset('img/sidemenu/dashboard.svg')}}" /><span>Dashboard</span></a>
                                    </li>
                                     <li>
                                        <a href="{{ route('admin.form-setup') }}"><img src="{{ asset('img/sidemenu/dashboard.svg')}}" /><span>Form Setup</span></a>
                                    </li>
                                  
                                    <li>
                                        <a href="{{ route('admin.logout') }}"><img src="{{asset('img/sidemenu/power.svg')}}" /><span>Log Out</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
        <div class="col-md-10 main-page">
            <div class="header greycard">
                         <div class="admin">
                                <h6>@if(Auth::user()) {{ Auth::user()->name }}@endif </h6>
                                <span></span>
                            </div>
 @if(session()->has('successMessage'))
    <div class="alert alert-success">
        {{ session()->get('successMessage') }}
    </div>
@endif
@if(session()->has('errorMessage'))
    <div class="alert alert-danger">
        {{ session()->get('errorMessage') }}
    </div>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                        </div>                                         