
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>romoz</title>
    <link rel="icon" type="image/png" href="{{asset('romoz_design')}}/assets/images/fav.svg">
    @if(LaravelLocalization::getCurrentLocale() == 'ar')
        <link rel="stylesheet" href="{{asset('romoz_design')}}/assets/css/bootstrap.rtl.min.css">
    @else
        <link rel="stylesheet" href="{{asset('romoz_design')}}/assets/css/bootstrap.min.css">
    @endif
    <link rel="stylesheet" href="{{asset('romoz_design')}}/assets/css/animate.min.css">
    <link rel="stylesheet" href="{{asset('romoz_design')}}/assets/css/meanmenu.css">
    <link rel="stylesheet" href="{{asset('romoz_design')}}/assets/css/remixicon.css">
    <link rel="stylesheet" href="{{asset('romoz_design')}}/assets/css/font.awesome.css">
    <link rel="stylesheet" href="{{asset('romoz_design')}}/assets/css/odometer.min.css">
    <link rel="stylesheet" href="{{asset('romoz_design')}}/assets/css/nice-select.min.css">
    <link rel="stylesheet" href="{{asset('romoz_design')}}/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('romoz_design')}}/assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{asset('romoz_design')}}/assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="{{asset('romoz_design')}}/assets/css/fancybox.min.css">

    @if(LaravelLocalization::getCurrentLocale() == 'ar')
        <link rel="stylesheet" href="{{asset('romoz_design')}}/assets/css/style.css">
    @else
        <link rel="stylesheet" href="{{asset('romoz_design')}}/assets/css/styleEN.css">
    @endif

    <link rel="stylesheet" href="{{asset('romoz_design')}}/assets/css/responsive.css">

    @if(LaravelLocalization::getCurrentLocale() == 'ar')
    @else
    @endif


</head>
