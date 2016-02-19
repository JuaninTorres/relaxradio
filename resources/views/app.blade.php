<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie9" xmlns="http://www.w3.org/1999/xhtml" lang="en-US"> <![endif]-->
<!--[if (gte IE 10)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
<!--<![endif]-->
@include('partials.layout.headpage')
<body id="fluidGridSystem">
<div id="layout" class="full">
    @include('partials.popuplogin')
    @include('partials.layout.header')
    @include('partials.widgets.slider')
    <div class="page-content">
        @yield('content')
    </div><!-- end page content -->
    @include('partials.layout.footer')
</div><!-- end layout -->
@include('partials.layout.footerpage')
</body>
</html>