<!-- Fixed navbar -->
<nav class="navbar navbar-fixed-top notification navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="{{ URL::to('styler/dashboard') }}" class="navbar-brand">
                <img src="{{ URL::asset('images/logo.png') }}" class="img-responsive" alt=" styler logo">
                <span class="csk-brand">
                    <img src="{{ URL::asset('images/logo-icon.png') }}" class="img-responsive" alt="mobile logo" >
                </span>
            </a>
        </div>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li><a href="{{ URL::to('styler/dashboard') }}">Home</a></li>
                <li class="user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::guard('styler')->user()->name }}</a>
                    <ul class="dropdown-menu">
                        <!-- The user image in the menu -->
                        <li class="user-header">
                            @if(Auth::guard('styler')->user()->picture == '')
                                <img src="{{ URL::asset('images/avatars/captain-avatar.png') }}" class="user-image" alt="User Image">
                            @else
                                <img src="{{ URL::asset('uploads/styler_picture/'.Auth::guard('styler')->user()->picture) }}" class="user-image" alt="User Image">
                            @endif
                            <p>
                                {{ Auth::guard('styler')->user()->name }}<small>Styler</small>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <a href="{{ URL::to('styler/logout') }}" class="btn btn-danger">Sign out</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- # navbar-custom-menu -->
    </div>
    <!-- # container-fluid -->
</nav>