<section id="features" class="section features-section align-center inverted">
    <div class="container">
        <div class="section-content">
            <div class="featured-tab">
                <ul class="list-unstyled">
                    <li class="active">
                        <a href="#home" data-toggle="tab">
                            <div class="tab-info">
                                <div class="tab-title">{!! trans("page.features.tabs.first.title") !!}</div>
                                <div class="tab-desc">{!! trans("page.features.tabs.first.sub-title") !!}</div>
                            </div>
                            <!--<div class="tab-icon"><span class="icon icon-multimedia-20"></span></div>-->
                        </a>
                    </li>
                    <li>
                        <a href="#profile" data-toggle="tab">
                            <div class="tab-info">
                                <div class="tab-title">{!! trans("page.features.tabs.second.title") !!}</div>
                                <div class="tab-desc">{!! trans("page.features.tabs.second.sub-title") !!}</div>
                            </div>
                            <!--<div class="tab-icon"><span class="icon icon-seo-icons-27"></span></div>-->
                        </a>
                    </li>
                    <li>
                        <a href="#messages" data-toggle="tab">
                            <div class="tab-info">
                                <div class="tab-title">{!! trans("page.features.tabs.third.title") !!}</div>
                                <div class="tab-desc">{!! trans("page.features.tabs.third.sub-title") !!}</div>
                            </div>
                            <!-- <div class="tab-icon"><span class="icon icon-seo-icons-28"></span></div>-->
                        </a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane in active" id="home">
                        <img src="{!! trans("page.features.tabs.first.image.src") !!}" 
                            class="img-responsive animated" data-duration="900" 
                            data-animation="flip3dInTop" 
                            alt="{!! trans("page.features.tabs.first.image.alt") !!}" />
                    </div>
                    <div class="tab-pane" id="profile">
                        <img src="{!! trans("page.features.tabs.second.image.src") !!}"  
                            class="img-responsive animated" data-duration="900" 
                            data-animation="roll3dInLeft" 
                            alt="{!! trans("page.features.tabs.second.image.alt") !!}" />
                        </div>
                    <div class="tab-pane" id="messages">
                        <img src="{!! trans("page.features.tabs.second.image.src") !!}"  
                            class="img-responsive animated" data-duration="900" 
                            data-animation="fadeInRight" 
                            alt="{!! trans("page.features.tabs.third.image.alt") !!}" />
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="features-list" class="section features-list-section align-center dark-text">
    <div class="container">
        <div class="clearfix animated" data-duration="500" data-animation="fadeInRight">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <article class="align-center">
                    <i class="icon icon-badges-votes-16 highlight"></i>
                    <span class="heading">{!! trans("page.feature-list.first.label") !!}</span>
                    <p class="">{!! trans("page.feature-list.first.text") !!}</p>
                </article>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <article class="align-center">
                    <i class="icon icon-office-44 highlight"></i>
                    <span class="heading">{!! trans("page.feature-list.second.label") !!}</span>
                    <p class="">{!! trans("page.feature-list.second.text") !!}</p>
                </article>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <article class="align-center">
                    <i class="icon icon-shopping-18 highlight"></i>
                    <span class="heading">{!! trans("page.feature-list.third.label") !!}</span>
                    <p class="">{!! trans("page.feature-list.third.text") !!}</p>
                </article>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <article class="align-center">
                    <i class="icon icon-seo-icons-27 highlight"></i>
                    <span class="heading">{!! trans("page.feature-list.fourth.label") !!}</span>
                    <p class="">{!! trans("page.feature-list.fourth.text") !!} </p>
                </article>
            </div>
           
        </div>
        <div class="clearfix animated" data-duration="500" data-delay="500" data-animation="fadeInLeft">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <article class="align-center">
                    <i class="icon icon-graphic-design-13 highlight"></i>
                    <span class="heading">{!! trans("page.feature-list.fifth.label") !!}</span>
                    <p class="">{!! trans("page.feature-list.fifth.text") !!}</p>
                </article>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <article class="align-center">
                    <i class="icon icon-arrows-37 highlight"></i>
                    <span class="heading">{!! trans("page.feature-list.sixt.label") !!}</span>
                    <p class="">{!! trans("page.feature-list.sixt.text") !!}</p>
                </article>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <article class="align-center">
                    <i class="icon icon-badges-votes-14 highlight"></i>
                    <span class="heading">{!! trans("page.feature-list.seventh.label") !!}</span>
                    <p class="">{!! trans("page.feature-list.seventh.text") !!}</p>
                </article>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <article class="align-center">
                    <i class="icon icon-office-24 highlight"></i>
                    <span class="heading">{!! trans("page.feature-list.eight.label") !!}</span>
                    <p class="">{!! trans("page.feature-list.eight.text") !!}</p>
                </article>
            </div>
        </div>
    </div>
</section>