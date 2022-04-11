<?php
/*
Template Name: Staffing Page
*/
?>

<?php

get_header();

?>
<main class="page-blog">
    <!-- HEADING -->
    <div class="post-heading-cover position-relative mb-0" style="z-index: 1050;background-image: url(https://preview.uideck.com/items/essence/img/bg/hero-area-2.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 text-center m-auto">
                    <div class="section-heading m-0 my-2">
                        <h1>Provisión de personal Staffing</h1>
                        <p class="text-white mt-5 ">Tenemos la solución que necesitas en función a tus necesidades.</p>
                    </div>
                    <div class="arrow-down-icon active">
                        <a class="page-scroll" href="#frontoffice"><i class="fa fa-chevron-down"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="frontoffice" class="section staffing">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="section-heading text-center mb-2 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h4>Staffing</h4>
                        <div class="line-dec m-auto"></div>
                    </div>
                </div>
                <div class="col-lg-9 m-auto">
                    <p class="text text-center mb-5 mt-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                        A través de nuestra solución de Staffing, ayudamos a nuestros clientes a contar contar con talento humano especifico alineado a sus necesidades, respetando siempre el marco legal.
                    </p>
                </div>
                <div class="col-xxl-9 col-lg-12 m-auto">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 d-flex align-items-center">
                            <div class="service-image shadow wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                                <img src="https://3eriza.pe/wp-content/uploads/2021/10/provicion-personal-500x971.png" alt="" class="img-fluid rounded-3">
                            </div>
                        </div>
                        <div class="col-lg-8 d-flex align-items-center">
                            <div class="section-items">
                                <div class="box-item d-flex  wow fadeInRight" data-wow-duration="1s" data-wow-delay=".8s">
                                    <div class="flex-fill icon"> <i class="lni lni-timer"></i></div>
                                    <div class="flex-fill text">
                                        <h4>Temporal</h4>
                                        <p>Este servicio te permite tener personal calificado en el momento que se requiera y por el tiempo que la empresa lo necesite.</p>
                                    </div>

                                </div>
                                <div class="box-item d-flex  wow fadeInRight" data-wow-duration="1s" data-wow-delay="1s">
                                    <div class="flex-fill icon"><i class="lni lni-grid-alt"></i></div>
                                    <div class="flex-fill text">
                                        <h4>Complementario</h4>
                                        <p>Es una actividad no vinculada a la principal, su ausencia no interrumpe operaciones del negocio.</p>
                                    </div>
                                </div>
                                <div class="box-item d-flex  wow fadeInRight" data-wow-duration="1s" data-wow-delay="1.2s">
                                    <div class="flex-fill icon"><i class="lni lni-target"></i></div>
                                    <div class="flex-fill text">
                                        <h4>Especializado</h4>
                                        <p>Son actividades secundarias no vinculadas a la actividad principal, que exigen un alto nivel de conocimiento técnico, científico o particularmente calificado.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section bg-util-gray staffing">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="section-heading text-center mb-2 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h4>Posiciones</h4>
                        <div class="line-dec m-auto"></div>
                    </div>
                </div>
                <div class="col-lg-9 m-auto">
                    <p class="text text-center mb-5 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                        Nos enfocamos en gestionar las ventas y atención de tus clientes.
                    </p>
                </div>
                <div class="col-lg-9 m-auto">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 mb-sm-5">
                            <div class="box-shadow wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s"">
                                <p class=" box-title">Personal Eventual</p>
                                <img src="<?= get_template_directory_uri() ?>/assets/images/staffing-01.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 mb-sm-5">
                            <div class="box-shadow wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s"">
                                <p class=" box-title">Recepcionista</p>
                                <img src="<?= get_template_directory_uri() ?>/assets/images/staffing-02.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 mb-sm-5">
                            <div class="box-shadow wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s"">
                                <p class=" box-title">Mercaderista / Reponedores</p>
                                <img src="<?= get_template_directory_uri() ?>/assets/images/staffing-03.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?= get_template_part('template-parts/content','section-industrias')?>

    <!-- FORM CONTACTO -->
    <section id="contacto" class="section contact-section position-relative decoration-util-1">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 m-auto">
                    <div class="row contact-form-wrapper wow fadeInUp border-0 shadow-util" data-wow-duration="1s" data-wow-delay=".5s">
                        <div class="col-12">
                            <div class="section-title text-center">
                                <h2>¿Tienes preguntas de cómo podemos ayudar al crecimiento de tu empresa?</h2>
                                <p>Ponerte en contacto con nosotros y agenda una reunión.</p>
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


</main>


<?php get_footer(); ?>