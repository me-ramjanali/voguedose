<!-- includes header file -->
@include('admin.parts.header')
<!-- includes navigation file -->
@include('admin.parts.navigation')
<!-- Main Body content starts here -->
<div id="wrapper">
    <!-- includes sidebar file -->
    @include('admin.parts.sidebar')
    @yield('content')
</div>
<!-- # wrapper -->
<!-- includes footer file -->
@include('admin.parts.footer')