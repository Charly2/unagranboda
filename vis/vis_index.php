<style>
    @media (max-width: 767px) {
        .carousel-inner>.item>a>img, .carousel-inner>.item>img{
            max-width: 210%!important;
        }
    }
</style>

<!-- Header Section -->
<!-- Slider Section -->
<section id="header-slider" class="section">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active"> <img src="img/wide-1.jpg" alt="Chania">
                <div class="carousel-caption">
                    <p>Las mejores invitaciones para</p>
                    <h3>Tu Gran Boda</h3>
                </div>
            </div>
            <div class="item"> <img src="img/wide-3.jpg" alt="Chania">
                <div class="carousel-caption">
                    <p>Tenemos las mejores</p>
                    <h3>Promociones para ti</h3>
                </div>
            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span></a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span></a></div>
</section>
<!-- Slider Section -->


<!-- portfolio grid section -->
<section id="portfolios" class="section portfolios">
    <div class="container-fluid">
        <h3 class="text-center">Conoce nuestros nuevos productos</h3>
        <div class="row">
            <? foreach ($_DATOS as $p){ ?>
                <div class="col-sm-2 portfolio-item">
                    <a href="productodetalle?id=<?=$p['id']?>" class="portfolio-link">
                        <img src="img/<?=$p['img']?>" style="margin: auto" class="img-responsive" alt="">
                    </a>
                </div>

            <? } ?>
        </div>
    </div>
</section>
<!-- portfolio grid section -->

<!-- Testimonials section -->
<section id="testimonials" class="section testimonials no-padding">
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <div class="col-md-12">
                            <blockquote>
                                <h1>Muchas gracias!! Me encantó su trabajo y muy buena atención al cliente, gracias</h1>
                                <p>Alejandro Aldaco</p>
                            </blockquote>
                        </div>
                    </li>
                    <li>
                        <div class="col-md-12">
                            <blockquote>
                                <h1>Muchas gracias excelente trabajo de mucha calidad y muy buen precio...el envío llego a Caborca, Sonora en tiempo...Super recomendada mucha seriedad y profesionalismo... Muchísimas gracias...</h1>
                                <p>Jose López </p>
                            </blockquote>
                        </div>
                    </li>
                    <li>
                        <div class="col-md-12">
                            <blockquote>
                                <h1>Me encanto que pudieron partir de la idea que yo tenía sobre cómo quería mi invitación e incluso crearon un "encaje, adorno o garig gol que no tenían". Tomaron el tiempo y dedicación para mi invitación como si fuera la de ellas </h1>
                                <p>Myrna Garza </p>
                            </blockquote>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</section>