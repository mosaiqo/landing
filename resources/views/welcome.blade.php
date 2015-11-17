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
        </script>
          {{-- GoogleAnalytics Code--}}
        <script>
          
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
              (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', '{{$globalGoogle}}', 'auto');
            ga('create', '{{$google}}', 'auto');
            ga('send', 'pageview');

        </script>
        <!-- Facebook Conversion Code for Clientes potenciales - mosaiqo.cat -->
        <script>(function() {
          var _fbq = window._fbq || (window._fbq = []);
          if (!_fbq.loaded) {
            var fbds = document.createElement('script');
            fbds.async = true;
            fbds.src = '//connect.facebook.net/en_US/fbds.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(fbds, s);
            _fbq.loaded = true;
          }
        })();
        window._fbq = window._fbq || [];
        window._fbq.push(['track', '{{$facebookPotencial}}', {'value':'0.00','currency':'EUR'}]);
        </script>
        <noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev={{$facebookPotencial}}&amp;cd[value]=0.00&amp;cd[currency]=EUR&amp;noscript=1" /></noscript>
        <!-- Start of Woopra Code -->
        <script>
        (function(){
                var t,i,e,n=window,o=document,a=arguments,s="script",r=["config","track","identify","visit","push","call","trackForm","trackClick"],c=function(){var t,i=this;for(i._e=[],t=0;r.length>t;t++)(function(t){i[t]=function(){return i._e.push([t].concat(Array.prototype.slice.call(arguments,0))),i}})(r[t])};for(n._w=n._w||{},t=0;a.length>t;t++)n._w[a[t]]=n[a[t]]=n[a[t]]||new c;i=o.createElement(s),i.async=1,i.src="//static.woopra.com/js/w.js",e=o.getElementsByTagName(s)[0],e.parentNode.insertBefore(i,e)
        })("woopra");

        woopra.config({
            domain: 'mosaiqo.com'
        });
        woopra.track();
        </script>
        <!-- End of Woopra Code -->

        <!-- start Mixpanel -->
        <script type="text/javascript">(function(e,b){if(!b.__SV){var a,f,i,g;window.mixpanel=b;b._i=[];b.init=function(a,e,d){function f(b,h){var a=h.split(".");2==a.length&&(b=b[a[0]],h=a[1]);b[h]=function(){b.push([h].concat(Array.prototype.slice.call(arguments,0)))}}var c=b;"undefined"!==typeof d?c=b[d]=[]:d="mixpanel";c.people=c.people||[];c.toString=function(b){var a="mixpanel";"mixpanel"!==d&&(a+="."+d);b||(a+=" (stub)");return a};c.people.toString=function(){return c.toString(1)+".people (stub)"};i="disable time_event track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config people.set people.set_once people.increment people.append people.union people.track_charge people.clear_charges people.delete_user".split(" ");
            for(g=0;g<i.length;g++)f(c,i[g]);b._i.push([a,e,d])};b.__SV=1.2;a=e.createElement("script");a.type="text/javascript";a.async=!0;a.src="undefined"!==typeof MIXPANEL_CUSTOM_LIB_URL?MIXPANEL_CUSTOM_LIB_URL:"file:"===e.location.protocol&&"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js".match(/^\/\//)?"https://cdn.mxpnl.com/libs/mixpanel-2-latest.min.js":"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js";f=e.getElementsByTagName("script")[0];f.parentNode.insertBefore(a,f)}})(document,window.mixpanel||[]);
            mixpanel.init("{{$mixpanel}}");

            mixpanel.track("$visited");
        </script>
        <!-- end Mixpanel -->
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
    @if(App::environment("production"))
         <script type="text/javascript">
             $(".mailchimp-form").on('suscribed', function(event){
                woopra.track("suscribed", { email : event.email, name: event.name });
                woopra.identify({
                    email: event.email,
                    name: event.name ,
                });

                mixpanel.track("$suscribed", {
                    email: event.email,
                    name: event.name
                });

                // The identify code should be added before the "track()" function
                woopra.track();
                ga('send', 'event', 'button', 'click', 'suscribed');

                window._fbq.push(['track', '{{$facebookRegistered}}', {'value':'0.00','currency':'EUR'}]);
            });

        </script>
    @endif
</body>
</html>
