 <header>
    <nav class="navigation navigation-header">
        <div class="container">
            <div class="navigation-brand">
                <div class="brand-logo">
                    <a href="/" class="logo"></a>
                    <a href="/" class="logo logo-alt"></a>
                </div>
            </div>
            <button class="navigation-toggle">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="navigation-navbar collapsed">
                <ul class="navigation-bar navigation-bar-right">
                    <li><a href="#hero">{{ trans("page.menu.home") }}</a></li>
                    <li><a href="#about">{{ trans("page.menu.product") }}</a></li>
                    <li><a href="#features">{{ trans("page.menu.features") }}</a></li>
                    {{-- <li><a href="#product">Prices</a></li> --}}
                    {{-- <li><a href="#feedback">Feedback</a></li> --}}
                    <li><a href="#team">{{ trans("page.menu.team") }}</a></li>
                    <li><a href="#guarantee">{{ trans("page.menu.contact") }}</a></li>
                    <li>
                        <div class="dropdown">
                            <a class="dropdown-toggle"  id="languageSelector" data-toggle="dropdown"> 
                                <i class="fa fa-globe"></i> {{ $languages[$alternate] }}
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="languageSelector">
                                <li class="dropdown-header"> {!! trans("page.menu.language.label") !!}</li>
                                 @foreach ($languages as $locale => $language) 
                                    @if($locale!= $alternate)
                                        <li><a href="{{$locales[$locale]}}">{{$language}}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </li>
                </ul>
                {{-- <ul class="navigation-bar navigation-bar-right">
                    <li><a href="register.html">Login</a></li>
                    <li class="featured"><a class="btn btn-sm btn-outline-color" href="register.html">Sign up</a></li>
                </ul> --}}
            </div>
        </div>
    </nav>
</header>