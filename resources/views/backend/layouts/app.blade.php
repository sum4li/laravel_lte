<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>@yield('title') | Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('backend.partials._css')
</head>
<body class="hold-transition sidebar-mini layout-fixed text-sm">
<div class="wrapper">
    @include('backend.partials.header')
    @include('backend.partials.sidebar')
    <div class="content-wrapper pt-2">
        <!-- Content Header (Page header) -->
        {{-- <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">@yield('title')</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div> --}}
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        @include('backend.partials.success')
                        @include('backend.partials.error')
                    </div>
                    @yield('content')
                </div>
            </div>
        </section>
    </div>
    @include('backend.partials.footer')
</div>
@include('backend.partials._js')
</body>
</html>
