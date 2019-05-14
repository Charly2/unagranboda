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
            <div class="item active"> <img src="img/wide-1.png" alt="Chania">
                <div class="carousel-caption">
                    <p>Las mejores invitaciones para</p>
                    <h3>Tu Gran Boda</h3>
                </div>
            </div>
            <div class="item"> <img src="img/wide-2.png" alt="Chania">
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
            <?$i = 0; foreach ($_DATOS as $p){ $i++; if ($i==7){break;}?>
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
                                <h1>"Muchas gracias!! Me encantó su trabajo y muy buena atención al cliente, gracias"</h1>
                                <p>Alejandro Aldaco</p>
                            </blockquote>
                        </div>
                    </li>
                    <li>
                        <div class="col-md-12">
                            <blockquote>
                                <h1>"Muchas gracias excelente trabajo de mucha calidad y muy buen precio...el envío llego a Caborca, Sonora en tiempo...Super recomendada mucha seriedad y profesionalismo... Muchísimas gracias..."</h1>
                                <p>Jose López </p>
                            </blockquote>
                        </div>
                    </li>
                    <li>
                        <div class="col-md-12">
                            <blockquote>
                                <h1>"Me encanto que pudieron partir de la idea que yo tenía sobre cómo quería mi invitación e incluso crearon un "encaje, adorno o garig gol que no tenían". Tomaron el tiempo y dedicación para mi invitación como si fuera la de ellas "</h1>
                                <p>Myrna Garza </p>
                            </blockquote>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</section>

<link rel="stylesheet" href="css/style.css">

<section class="section">
    <div class="container-fluid">
        <h3 class="text-center">Contacto</h3>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="contact-form-widget">
                    <div class="form">
                        <form name="contact-form" id="formC" method="post" action="contacto">
                            <div class="nama">
                                <i class="fa fa-user"></i> Nombre:
                            </div>
                                <input autocomplete="off" class="contact-form-name r1" id="ContactForm1_contact-form-name" name="name" size="30" type="text" value="" />
                            <br><br>
                            <div class="email">
                                <i class="fa fa-envelope-o"></i> E-mail:
                            </div>
                                <input autocomplete="off" class="contact-form-email r2" id="ContactForm1_contact-form-email" name="email" size="30" type="text" value="" />
                            <br><br>
                            <div class="email">
                                <i class="fa fa-phone"></i> Teléfono:
                            </div>
                                <input autocomplete="off" class="contact-form-email" id="ContactForm1_contact-form-email" name="tele" size="30" type="text" value="" />
                            <br><br>
                            <div class="pesan">
                                <i class="fa fa-pencil-square-o"></i> Mensaje:
                            </div>
                            <textarea autocomplete="off" class="contact-form-email-message r3" cols="30" id="ContactForm1_contact-form-email-message" name="message" rows="5"></textarea>
                            <br>
                            <input class="contact-form-button contact-form-button-submit fa-user" id="enviar" type="button" value="Enviar" />
                            <div class="contact-form-error-message" id="ContactForm1_contact-form-error-message"></div>
                            <div class="contact-form-success-message" id="ContactForm1_contact-form-success-message">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<script>
    $(document).ready(function (e) {
        $('#enviar').click(function (e) {



            $('.r1').val();
            if ($('.r1').val().length && $('.r2').val().length && $('.r3').val().length){
                $('#formC').submit();
            } else{
                $('#ContactForm1_contact-form-error-message').html("Completa todos los datos");
            }
        });
    });
</script>