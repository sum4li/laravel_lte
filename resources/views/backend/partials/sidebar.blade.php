<aside class="main-sidebar sidebar-dark-primary elevation-4">
    {{-- Brand Logo --}}
    <a href="#" class="brand-link bg-primary">      
        <span class="logo-lg">
            <b>Bed</b>
        </span>
    </a>

    {{-- Sidebar --}}
    <div class="sidebar">
        {{-- Sidebar User --}}
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('backend/img/user.png')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{Auth::user()->name}}</a>
            </div>
        </div>

        {{-- Sidebar Menu --}}
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">            
                   
                {{-- <li class="nav-item has-treeview {{active(['bahan_pokok.*','akun.*','produk.*','customer.*','suplier.*','karyawan.*','counter.*','lokasi.*','harga_jual.*','harga_beli.*'],'menu-open')}}">
                    <a href="#" class="nav-link {{active(['bahan_pokok.*','akun.*','produk.*','customer.*','suplier.*','karyawan.*','counter.*','lokasi.*','harga_jual.*','harga_beli.*'],'active')}}">
                    <i class="nav-icon fa fa-bars"></i>
                    <p>
                        Master Data
                        <i class="right fas fa-angle-left"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('bahan_pokok.index')}}" class="nav-link {{active(['bahan_pokok.*'],'active')}}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Bahan Pokok</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('akun.index')}}" class="nav-link {{active(['akun.*'],'active')}}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Akun</p>
                            </a>
                        </li>
                    </ul>
                </li>             --}}
                <li class="nav-header">
                    Master Data
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.dashboard')}}" class="nav-link {{active(['index'],'active')}}">
                        <i class="nav-icon fa fa-chart-line"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>    
                
            </ul>
        </nav>
        
    </div>
</aside>