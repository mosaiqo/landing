<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title> Mosaiqo | {!! trans("page.head.title") !!} </title>
    <meta name="description" content="{!! trans("page.head.description") !!}">
    
    <link rel="canonical" href="{{$locales[$alternate]}}">
    @foreach ($locales as $locale => $domain) 
        @if($locale != $alternate)
            <link rel="alternate" href="{{$domain}}" hreflang="{{$locale}}">
        @endif
    @endforeach
    
    <link rel="shortcut icon" href="/img/favicon.ico">
    <link rel="apple-touch-icon" href="/img/apple-touch-icon.jpg">
    <link rel="apple-touch-icon" sizes="72x72" href="/img/apple-touch-icon-72x72.jpg">
    <link rel="apple-touch-icon" sizes="114x114" href="/img/apple-touch-icon-114x114.jpg">
   
    <link rel="stylesheet" type="text/css" href="/css/all.css" />
   
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!--[if lt IE 9]>
        <script src="/js/html5shiv.js"></script>
        <script src="/js/respond.min.js"></script>
    <![endif]-->
    @if(App::environment("production"))
         {{-- Hotjar Tracking Code for mosaiqo.com --}}
         <script>
            (function(h,o,t,j,a,r){
                h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
                h._hjSettings={hjid:{{$hotjar}},hjsv:5};
                a=o.getElementsByTagName('head')[0];
                r=o.createElement('script');r.async=1;
                r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
                a.appendChild(r);
            })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
              (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', {{$google}}, 'auto');
            ga('send', 'pageview');

        </script>
    @endif
</head>

<body id="landing-page" class="landing-page">
    <!-- Preloader -->
    <div class="preloader-mask">
        <div class="preloader"><div class="spin base_clr_brd"><div class="clip left"><div class="circle"></div></div><div class="gap"><div class="circle"></div></div><div class="clip right"><div class="circle"></div></div></div></div>
    </div>

    <!-- Header -->
    @include("layouts.header")

    @include("sections.hero")
    {{-- @include("sections.clients") --}}
    @include("sections.about")
    {{-- @include("sections.process") --}}
    @include("sections.newsletter")
    @include("sections.features")
    {{-- @include("sections.prices") --}}
    {{-- @include("sections.awards") --}}
    {{-- @include("sections.feedback") --}}
    @include("sections.team")
    @include("sections.guarantee")
    @include("layouts.footer")
    @include("layouts.cookies")

    <div class="back-to-top"><i class="fa fa-angle-up fa-3x"></i></div>

    <!--[if lt IE 9]>
        <script type="text/javascript" src="/js/jquery-1.11.3.min.js?ver=1"></script>
    <![endif]-->
    <!--[if (gte IE 9) | (!IE)]><!-->
        <script type="text/javascript" src="/js/jquery-2.1.4.min.js?ver=1"></script>
    <!--<![endif]-->
    <script type="text/javascript" src="/js/all.js"></script>

</body>
</html>
