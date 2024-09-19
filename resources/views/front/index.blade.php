<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Element</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{asset('fronte/css/bootstrap.min.css')}}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{asset('fronte/css/style.css')}}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{asset('fronte/css/responsive.css')}}">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{asset('fronte/css/jquery.mCustomScrollbar.min.css')}}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="{{asset('fronte/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('fronte/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

</head>
<body>
<!--header section start -->
@include('front.header')
<!--header section end -->
<!--banner section start -->
<div class="banner_section layout_padding">
    <div class="container">
        <h1 class="banner_taital">Web eLements Templates</h1>
        <h2 class="free_text">Free Multipurpose Responsive
            Landing Page </h2>
        <div class="read_bt">
            <div class="read_text"><a href="#">Read More</a></div>
        </div>
    </div>
</div>
<!--banner section end -->
<!--bg_main section start -->
<div class="container">
</div>
<!--bg_main section end -->
<!--about section start -->
<div class="about_section">
    <div class="container">
        <h1 class="about_text">about web elements</h1>
        <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore </p>
        <div class="about_bg"><img src="{{asset('fronte/images/about-bg.png')}}"></div>
        <p class="lorem_text">orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit</p>
        <div class="read_bt_main">
            <div class="read_text_2"><a href="#">Read More</a></div>
        </div>
    </div>
</div>
<!--about section end -->
<!--service section start -->
@include('front.nowbar')
<!--service section end -->
<!--contact section start -->
@include('front.content')
<!--contact section end -->
<!--client section start -->
<div class="client_section layout_padding">
    <div class="container">
        <h1 class="about_text">what is say clients</h1>
        <p class="ipsum_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliq</p>
        <div class="client_section_2 layout_padding">
            <h1 class="client_text">Consectetur adipiscing </h1>
            <p class="ipsum_text_2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim</p>
            <div class="icon_4"><img src="{{asset('fronte/images/icon-4.png')}}"></div>
        </div>
    </div>
</div>
<!--client section end -->
<!--footer section start -->
@include('front.footer')
<!--footer section end -->
<!--copyright section start -->
<div class="copyright_section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <p class="copyright_text">2024 All Rights Reserved Design by <a href="https://html.design/"></a> Free Html Templates</p>
            </div>
        </div>
    </div>
</div>
<!--copyright section end -->
<!-- Javascript files-->
<script src="{{asset('fronte/js/jquery.min.js')}}"></script>
<script src="{{asset('fronte/js/popper.min.js')}}}"></script>
<script src="{{asset('fronte/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('fronte/js/jquery-3.0.0.min.js')}}"></script>
<script src="{{asset('fronte/js/plugin.js')}}"></script>
<!-- sidebar -->
<script src="{{asset('fronte/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('fronte/js/custom.js')}}"></script>
<!-- javascript -->
<script src="{{asset('fronte/js/owl.carousel.js')}}"></script>
<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script>

</script>
</body>
</html>
