<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

        <!-- CSRF Token -->
        <!--<meta name="csrf-token" content="{{ csrf_token() }}">-->
        <input type="hidden" id="token" value="{{ csrf_token() }}">
        <link rel="shortcut icon" type="image/png" href="{{asset("logo/yg_logo.png")}}"/>
        <title>{{ config('app.name', 'Your Garage') }}</title>
        <!-- Tell the browser to be responsive to screen width -->


	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{asset("/css/animate.css") }}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{asset("css/icomoon.css") }}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{asset("css/bootstrap.css") }}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{asset("css/magnific-popup.css") }}">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="{{asset("css/owl.carousel.min.css") }}">
	<link rel="stylesheet" href="{{asset("css/owl.theme.default.min.css") }}">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{asset("css/flexslider.css") }}">

	<!-- Pricing -->
	<link rel="stylesheet" href="{{asset("css/pricing.css") }}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{asset("css/style.css") }}">

	<!-- Modernizr JS -->
	<script src="{{asset("js/modernizr-2.6.2.min.js") }}"></script>
        <style>
            .nav-tabs {
    margin-bottom: 15px;
}
.sign-with {
    margin-top: 25px;
    padding: 20px;
}
div#OR {
    height: 30px;
    width: 30px;
    border: 1px solid #C2C2C2;
    border-radius: 50%;
    font-weight: bold;
    line-height: 28px;
    text-align: center;
    font-size: 12px;
    float: right;
    position: absolute;
    right: -16px;
    top: 40%;
    z-index: 1;
    background: #DFDFDF;
}
        </style>
    <script>
        window.Laravel = {!! json_encode([

            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    
    @yield('javascript')
    
</head>
<body>
       <div class="fh5co-loader"></div>
       <div id="page">
           
            @include('layout.menubar')
            <div id="signupmodal"></div>
<!--            @include('layout.header')-->

            @yield('content')

            @include('layout.footer')
        
        </div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
        <!-- jQuery -->
	<script src="{{asset("js/jquery.min.js") }}"></script>
	<!-- jQuery Easing -->
	<script src="{{asset("js/jquery.easing.1.3.js") }}"></script>
	<!-- Bootstrap -->
	<script src="{{asset("js/bootstrap.min.js")}}"></script>
	<!-- Waypoints -->
	<script src="{{asset("js/jquery.waypoints.min.js") }}"></script>
	<!-- Stellar Parallax -->
	<script src="{{asset("js/jquery.stellar.min.js") }}"></script>
	<!-- Carousel -->
	<script src="{{asset("js/owl.carousel.min.js") }}"></script>
	<!-- Flexslider -->
	<script src="{{asset("js/jquery.flexslider-min.js") }}"></script>
	<!-- countTo -->
	<script src="{{asset("js/jquery.countTo.js") }}"></script>
	<!-- Magnific Popup -->
	<script src="{{asset("js/jquery.magnific-popup.min.js") }}"></script>
	<script src="{{asset("js/magnific-popup-options.js") }}"></script>
	<!-- Count Down -->
	<script src="{{asset("js/simplyCountdown.js") }}"></script>
	<!-- Main -->
	<script src="{{asset("js/main.js") }}"></script>
	<script>
    var d = new Date(new Date().getTime() + 1000 * 120 * 120 * 2000);

    // default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });

    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });
        $('#signinmodal').on('click',function(){
                $.ajax({
               type:'POST',
               url:'signin',
               data:{_token:$('#token').val()},
               success:function(data){
                  $('#signupmodal').append(data);
                  $('#myModal').modal('show');
               }
            });
        });
	</script>
</body>
</html>


