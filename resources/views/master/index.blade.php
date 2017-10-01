<!DOCTYPE html>
<html lang="en" class=" js no-touch">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ URL::asset('client/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('client/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('client/css/slick-team-slider.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('client/css/style.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,600|Raleway:600,300|Josefin+Slab:400,700,600italic,600,400italic' rel='stylesheet' type='text/css'>
    @yield('css')
</head>
<body>
<!--HEADER START-->

@include('essential.header')

<!--HEADER END-->

<!--BANNER START-->

@include('essential.banner_top')

<!--BANNER END-->

<!--CTA1 START-->
<div class="cta-1">
    <div class="container">
        <div class="row text-center white">
            <h1 class="cta-title">Say Hey to Ani Motors!!</h1>
            <p class="cta-sub-title">Full Responsive HTML5 Bootstrap Template.</p>
        </div>
    </div>
</div>
<!--CTA1 END-->

<!--SERVICE START-->

@include('essential.service')


<!--SERVICE END-->

<!--PORTFOLIO START-->

@include('essential.portfolio')

<!--PORTFOLIO END-->

<!--TEAM START-->

@include('essential.team')

<!--TEAM END-->

<!--CTA2 START-->
<div class="cta2">
    <div class="container">
        <div class="row white text-center">
            <h3 class="wd75 fnt-24">“Every Thing is designed. Few Things are Designed well.” - Brian Reed</h3>
            <p class="cta-sub-title"></p>
            <a href="#" class="btn btn-default">Request A Quote</a>
        </div>
    </div>
</div>
<!--CTA2 END-->

<!--CONTACT START-->

@include('essential.contact')

<!--CONTACT END-->

<!--FOOTER START-->

@include('essential.footer')

<!--FOOTER END-->
<div class="footer-bottom">
    <div class="container">
        <div style="visibility: visible; animation-name: zoomIn;" class="col-md-12 text-center wow zoomIn">
            <div class="footer_copyright">
                <p> © Copyright, All Rights Reserved.</p>
                <div class="credits">
                    <!--
                        All the links in the footer should remain intact.
                        You can delete the links only if you purchased the pro version.
                        Licensing information: https://bootstrapmade.com/license/
                        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Ani Motors
                    -->
                    Designed by <a href="https://bootstrapmade.com/">Bootstrap Themes</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ URL::asset('client/js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('client/js/jquery.easing.min.js') }}"></script>
<script src="{{ URL::asset('client/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('client/js/jquery.mixitup.js') }}" type="text/javascript"></script>
<script type="text/javascript" src="{{ URL::asset('client/js/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('client/js/custom.js') }}"></script>
@yield('js')

</body>
</html>