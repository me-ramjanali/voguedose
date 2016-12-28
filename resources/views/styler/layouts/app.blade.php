<!-- includes header file -->
@include('styler.parts.header')
<!-- includes navigation file -->
@include('styler.parts.navigation')
<!-- Main Body content starts here -->
<div id="wrapper">
    <!-- includes sidebar file -->
    @include('styler.parts.sidebar')
    @yield('content')
</div>
<!-- # wrapper -->
<!-- includes footer file -->
@include('styler.parts.footer')