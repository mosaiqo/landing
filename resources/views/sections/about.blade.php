<section id="about" class="section about-section align-center dark-text">
    <div class="container">

        <ul class="nav nav-tabs alt">
            <li class="active">
                <a href="#first-tab-alt" data-toggle="tab">{!! trans("page.product.tabs.first.label") !!}</a>
            </li>
            <li>
                <a href="#second-tab-alt" data-toggle="tab">{!! trans("page.product.tabs.second.label") !!}</a>
            </li>
            <li>
                <a href="#third-tab-alt" data-toggle="tab">{!! trans("page.product.tabs.third.label") !!}</a>
            </li>
        </ul>

        <div class="tab-content alt">
            <div class="tab-pane active" id="first-tab-alt">
                <div class="section-content row">
                    <div class="col-sm-6 animated" data-delay="200" data-duration="700" data-animation="fadeInLeft">
                        <img src="{!! trans("page.product.tabs.first.content.image.src") !!}" 
                             class="img-responsive" 
                             alt="{!! trans("page.product.tabs.first.content.image.alt") !!}" />
                    </div>
                    <div class="col-sm-6 animated" data-delay="200" data-duration="700" data-animation="fadeInRight">
                        <br/>
                        <article class="align-center">
                            <h3>{!! trans("page.product.tabs.first.content.title") !!}</h3>
                            <p class="sub-title">{!! trans("page.product.tabs.first.content.sub-title") !!}</p>
                            <p>{!! trans("page.product.tabs.first.content.text") !!}</p>
                            <br/>
                        </article>
                    </div>
                </div>
            </div>

            <div class="tab-pane" id="second-tab-alt">
                <div class="section-content row">
                    <div class="col-sm-6 pull-right animated" data-delay="200" data-duration="700" data-animation="fadeInRight">
                        <img src="{!! trans("page.product.tabs.second.content.image.src") !!}"  
                             class="img-responsive pull-right" 
                             alt="{!! trans("page.product.tabs.second.content.image.src") !!}" />
                    </div>
                    <div class="col-sm-6 animated" data-delay="200" data-duration="700" data-animation="fadeInLeft">
                        <br/><br/>
                        <article class="align-center">
                            <h3>{!! trans("page.product.tabs.second.content.title") !!}</h3>
                            <h5 class="sub-title">{!! trans("page.product.tabs.second.content.sub-title") !!}</h5>
                            <p>{!! trans("page.product.tabs.second.content.text") !!}</p>
                        </article>
                    </div>
                </div>
            </div>

            <div class="tab-pane" id="third-tab-alt">
                <div class="section-header align-center">
                    <h2>{!! trans("page.product.tabs.third.content.title") !!}</h2>
                    <p class="sub-header animated" data-duration="700" data-animation="zoomIn">
                        {!! trans("page.product.tabs.third.content.sub-title") !!}
                    </p>
                </div>
                <div class="section-content row animated" data-duration="700" data-delay="200" 
                    data-animation="fadeInDown">
                    <div class="col-sm-4">
                        <article class="align-center">
                            <i class="howitworks icon icon-faces-users-03 highlight"></i>
                            <span class="heading">{!! trans("page.product.tabs.third.content.steps.one.title") !!}</span>
                            <p class="thin" >{!! trans("page.product.tabs.third.content.steps.one.text") !!}</p>
                        </article>
                        {{-- <span class="icon icon-arrows-04"></span> --}}
                    </div>
                    <div class="col-sm-4">
                        <article class="align-center">
                            <i class="howitworks icon icon-seo-icons-03 highlight"></i>
                            <span class="heading">{!! trans("page.product.tabs.third.content.steps.two.title") !!}</span>
                            <p class="thin" >{!! trans("page.product.tabs.third.content.steps.two.text") !!}</p>
                        </article>
                        <!--<span class="icon icon-arrows-04"></span>-->
                    </div>
                    <div class="col-sm-4">
                        <article class="align-center">
                            <i class="howitworks icon icon-seo-icons-01 highlight"></i>
                            <span class="heading">
                                {!! trans("page.product.tabs.third.content.steps.three.title") !!}
                            </span>
                            <p class="thin" >
                                {!! trans("page.product.tabs.third.content.steps.three.text") !!}
                            </p>
                        </article>
                    </div>
                </div>
                <br/>
                <br/>
            </div>
        </div>
    </div>
</section>