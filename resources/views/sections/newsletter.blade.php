<section id="newsletter" class="long-block newsletter-section light-text">
    <div class="container align-center">
        <div class="col-sm-12 col-lg-5 animated" data-animation="fadeInLeft" data-duration="500">
            <article>
                <h2>{!! trans("page.register.title") !!}</h2>
                 <p class="">{!! trans("page.register.sub-title") !!}</p>
            </article>
        </div>
        <div class="col-sm-12 col-lg-7 animated" data-animation="fadeInRight" data-duration="500">
            <form class="form mailchimp-form subscribe-form" style="padding-top: 10px;" action="" method="post">
                <div class="form-group form-inline">
                    <input size="15" type="text" class="form-control required" name="fullname" 
                        placeholder="{!! trans("page.register.form.name") !!}" />
                    <input size="25" type="email" class="form-control required" name="email" 
                        placeholder="{!! trans("page.register.form.mail") !!}" />
                    <input type="submit" class="btn btn-outline" value="{!! trans("page.register.form.button") !!}" />
                    <span class="response"></span>
                </div>
            </form>
        </div>
    </div>
</section>