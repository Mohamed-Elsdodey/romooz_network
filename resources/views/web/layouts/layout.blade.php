<!doctype html>
<html>

@include('web.inc._css')
@yield('style')
<body>
<!-- header -->
@include('web.inc._header')
<!-- main-banner-area  -->
<!-- start content -->
@yield('content')
<!-- end content -->
<!-- footer -->
@include('web.inc._footer')
<!--
    //////////////////////////
    //////////////////////////
    //////////////////////////
    //////////////////////////
    script
    //////////////////////////
    //////////////////////////
    //////////////////////////
    //////////////////////////
-->

@include('web.inc._js')
@yield('js')
</body>

</html>
