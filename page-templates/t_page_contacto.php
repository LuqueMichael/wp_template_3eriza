<?php
/*
Template Name: Contacto Page
*/
?>

<?php

get_header();

?>
<main class="page-blog">
    <!-- HEADING -->
    <?php $img_bg = (get_the_post_thumbnail_url()) ? get_the_post_thumbnail_url() : 'https://preview.uideck.com/items/essence/img/bg/hero-area-2.jpg'; ?>
    <div class="post-heading-cover position-relative mb-0" style="z-index: 1050;background-image: url(<?= $img_bg?>)">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 text-center m-auto">
                    <div class="section-heading m-0 my-2">
                        <h1>Contacto</h1>
                    </div>
                    <div class="arrow-down-icon active">
                        <a class="page-scroll" href="#contacto"><i class="fa fa-chevron-down"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FORM CONTACTO -->
    <section id="contacto" class="section contact-section mt-3 pt-5 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <div class="d-flex contact-item">
                        <div class="flex-shrink-0">
                            <div class="contact-icon">
                                <i class="lni lni-phone"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h4>Contacto</h4>
                            <p>(01) 5003577</p>
                            <p>contacto@3eriza.pe</p>
                        </div>
                    </div>
                    <div class="d-flex contact-item">
                        <div class="flex-shrink-0">
                            <div class="contact-icon">
                                <i class="lni lni-map-marker"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h4>Dirección</h4>
                            <p>Calle Los Halcones 102 Surquillo</p>
                            <p>Lima - Perú</p>
                        </div>
                    </div>
                    <div class="d-flex contact-item">
                        <div class="flex-shrink-0">
                            <div class="contact-icon">
                                <i class="lni lni-alarm-clock"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3 mb-3">
                            <h4>Atencion</h4>
                            <p>Horario de Oficina: 9:00 AM - 6:00 PM</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="row contact-form-wrapper">
                        <div class="col-12">
                            <div class="section-title text-center ">
                                <h2>¿Cómo Podemos Ayudarte?</h2>
                                <p>Ponemos a tu disposición este canal para que puedas enviarnos cualquier duda, comentario o sugerencia que tengas con respecto a nuestros servicios.</p>
                            </div>
                        </div>
                        <div class="col-lg-8 m-auto">
                            <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/shell.js"></script>
                            <script>
                                hbspt.forms.create({
                                    portalId: "4934520",
                                    formId: "2e432d5d-0169-48aa-a0b5-5414a663ff39"
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- --<div class="contact-form-wrapper wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s"">
                        <div class=" row">
            <div class="col-xl-10 col-lg-8 mx-auto">

            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 m-auto">

            </div>
        </div>-->

    <section class="map-section pb-0">
        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3187.0218565415385!2d-77.02208325421014!3d-12.106308090034332!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x94ab359ca60de6f2!2sGRUPO%203ERIZA!5e0!3m2!1ses!2spe!4v1648659986616!5m2!1ses!2spe" width="100%" height="550" style="border:0;margin:0; padding: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>


</main>


<?php get_footer(); ?>