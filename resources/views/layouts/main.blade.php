@include('layouts.header')
@include('layouts.left_side_bar')
@yield('content')
@include('layouts.right_side_bar')
@include("layouts.footer")
@yield("page-script")