<nav class="main-header navbar navbar-expand navbar-white navbar-light bg-primary">    
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <img src="{{asset('backend/img/user.png')}}" class="user-image img-circle elevation-2" alt="User Image">
                <span class="d-none d-md-inline">{{Auth::user()->name ?? '-'}}</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                {{-- USER IMAGE --}}
                <li class="user-header bg-primary">
                    <img src="{{asset('backend/img/user.png')}}" class="img-circle elevation-2" alt="User Image">
                    <p>
                        {{Auth::user()->name}}
                        <small>{{Auth::user()->email}}</small>
                    </p>
                </li>
                
                <li class="user-footer">
                    <a href="{{route('logout')}}" class="btn btn-default btn-flat float-right">Sign out</a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
