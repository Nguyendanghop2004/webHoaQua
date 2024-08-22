<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang=""> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ela Admin - HTML5 Admin Template</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- css --}}
    @include('admins.layouts.partials.css')
    {{-- end css --}}
    @yield('style')
    
</head>

<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        @include('admins.layouts.partials.navbar')

    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">

            {{-- top-left --}}
            @include('admins.layouts.partials.headerTopLeft')
            {{-- end top-left --}}
            {{-- top-right --}}
            @include('admins.layouts.partials.headerTopRight')
            {{-- end top-right --}}
        </header>
        <!-- /#header -->
        <!-- Content -->
        @yield('content')
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        @include('admins.layouts.partials.footer')
       
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    @include('admins.layouts.partials.script')
    

    <!--Local Stuff-->
    @yield('script')
   
</body>

</html>
