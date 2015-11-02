<section id="newsletter" class="long-block newsletter-section light-text">
    <div class="container align-center">
        <div class="col-sm-12 col-lg-5 animated" data-animation="fadeInLeft" data-duration="500">
            <article>
                <h2>REGISTRESE YA!</h2>
                 <p class="">Sea uno de los primero en tener 30 dias gratuitos,<br> en cuanto abramos la beta al public general!</p>
            </article>
        </div>
        <div class="col-sm-12 col-lg-7 animated" data-animation="fadeInRight" data-duration="500">
            <form class="form mailchimp-form subscribe-form" style="padding-top: 10px;" action="" method="post">
                <div class="form-group form-inline">
                    <input size="15" type="text" class="form-control required" name="FULLNAME" placeholder="Tu nombre" />
                    <input size="25" type="email" class="form-control required" name="EMAIL" placeholder="tu@email.com" />
                    <input type="submit" class="btn btn-outline" value="Suscribete" />
                    <span class="response"><? require_once('assets/mailchimp/inc/store-address.php'); if($_GET['submit']){ echo storeAddress(); } ?></span>
                </div>
            </form>
        </div>
    </div>
</section>