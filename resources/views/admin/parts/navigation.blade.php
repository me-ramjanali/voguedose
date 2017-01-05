<!-- Fixed navbar -->
<nav class="navbar navbar-fixed-top notification navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="{{ URL::to('admin') }}" class="navbar-brand">
                <img src="{{ URL::asset('images/logo.png') }}" class="img-responsive" alt=" admin logo">
                <span class="csk-brand">
                    <img src="{{ URL::asset('images/logo-icon.png') }}" class="img-responsive" alt="mobile logo" >
                </span>
            </a>
        </div>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li><a href="{{ URL::to('admin/dashboard') }}">Home</a></li>
                <li class="user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::guard('admin')->user()->name }}</a>
                    <ul class="dropdown-menu">
                        <!-- The user image in the menu -->
                        <li class="user-header">
                            @if(Auth::guard('admin')->user()->picture == '')
                                <img src="{{ URL::asset('images/avatars/captain-avatar.png') }}" class="user-image" alt="User Image">
                            @else
                                <img src="{{ URL::asset('uploads/admin_picture/'.Auth::guard('admin')->user()->picture) }}" class="user-image" alt="User Image">
                            @endif
                            <p>
                                {{ Auth::guard('admin')->user()->name }}<small>Admin</small>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <a href="{{ URL::to('admin/logout') }}" class="btn btn-danger">Sign out</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- # navbar-custom-menu -->
    </div>
    <!-- # container-fluid -->
</nav>