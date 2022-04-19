<?php
/*
Template Name: FrontOffice Page
*/
?>

<?php

get_header();

?>
<main class="page-blog">
    <?php $img_bg = (get_the_post_thumbnail_url()) ? get_the_post_thumbnail_url() : 'https://preview.uideck.com/items/essence/img/bg/hero-area-2.jpg'; ?>
    <!-- HEADING -->
    <div class="post-heading-cover position-relative mb-0" style="z-index: 1050;background-image: url(<?=$img_bg?>)">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 text-center m-auto">
                    <div class="section-heading m-0 my-2">
                        <h1>Interacción Con Clientes Front Office</h1>
                        <p class="text-white mt-5 ">Tenemos la solución que necesitas en función a tus necesidades.</p>
                    </div>
                    <div class="arrow-down-icon active">
                        <a class="page-scroll" href="#frontoffice"><i class="fa fa-chevron-down"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="frontoffice" class="section frontoffice">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="section-heading text-center mb-2 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h4>FRONT OFFICE</h4>
                        <div class="line-dec m-auto"></div>
                    </div>
                </div>
                <div class="col-lg-9 m-auto">
                    <p class="text text-center mb-5 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                        A través de nuestra solución de Staffing, ayudamos a nuestros clientes a contar contar con talento humano especifico alineado a sus necesidades, respetando siempre el marco legal.
                    </p>
                </div>
                <div class="col-xxl-9 col-lg-12 m-auto">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="section-title text-end mt-2 mb-4  text-secondary wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                                <h6 class="fs-5">Captación</h6>
                                <div class="line mt-2 ml-auto"></div>
                            </div>
                            <div class="section-items left">
                                <div class="box-item d-flex  wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".8s">
                                    <div class="flex-fill text text-end">
                                        <h4>Ventas</h4>
                                        <p>Contacto, prospección, evaluación, cierre y seguimiento a venta de productos y servicios.</p>
                                    </div>
                                    <div class="flex-fill icon"> <i class="lni lni-rocket"></i></div>
                                </div>
                                <div class="box-item d-flex  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                                    <div class="flex-fill text text-end">
                                        <h4>CITAS</h4>
                                        <p>Contacto, ofrecimiento, agendamiento y recordatorio de citas comerciales.</p>
                                    </div>
                                    <div class="flex-fill icon"><i class="lni lni-ticket-alt"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="service-image shadow wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                                <img src="https://3eriza.pe/wp-content/uploads/2021/10/interaccion-clientes-500x971.png" alt="" class="img-fluid rounded-3">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="section-title mt-2 mb-4 text-secondary wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s">
                                <h6 class="fs-5">Mantenimiento</h6>
                                <div class="line mt-2 mr-auto"></div>
                            </div>
                            <div class="section-items right">
                                <div class="box-item d-flex  wow fadeInRight" data-wow-duration="1s" data-wow-delay=".8s">
                                    <div class="flex-fill icon"><i class="lni lni-headphone-alt"></i></div>
                                    <div class="flex-fill text">
                                        <h4>SERVICIO DE ATENCIÓN / SOPORTE AL CLIENTE</h4>
                                        <p>Atención de solicitudes informativas, pedidos y reclamos de clientes o prospectos.</p>
                                    </div>
                                </div>
                                <div class="box-item d-flex  wow fadeInRight" data-wow-duration="1s" data-wow-delay="1s">
                                    <div class="flex-fill icon"><i class="lni lni-checkmark-circle"></i></div>
                                    <div class="flex-fill text">
                                        <h4>ENCUESTAS / ACTUALIZACIÓN DATOS</h4>
                                        <p>Contacto y captura de información de clientes.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section bg-util-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="section-heading text-center mb-2 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h4>¿Cómo interactuamos con tus clientes?</h4>
                        <div class="line-dec m-auto"></div>
                    </div>
                </div>
                <div class="col-xxl-9 col-lg-11 m-auto">
                    <p class="text text-center mb-5 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                        Nos enfocamos en gestionar las ventas y atención de tus clientes.
                    </p>
                </div>
                <div class="col-xxl-9 col-lg-11 m-auto">
                    <div class="row mb-5">
                        <div class="col-lg-6 col-md-12 col-sm-12 d-flex align-items-center">
                            <div class="img-thumb wow fadeInLeft animated" data-wow-delay="0.3s" style="visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
                                <img class="img-fluid shadow rounded-3" src="https://3eriza.pe/wp-content/uploads/2021/10/atencion-presencial.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="text-wrapper mt-md-5 wow fadeInRight animated" data-wow-delay="0.6s" style="visibility: visible;-webkit-animation-delay: 0.6s; -moz-animation-delay: 0.6s; animation-delay: 0.6s;">
                                <div>
                                    <p class="btn btn-subtitle">Atención</p>
                                    <h3>Servicio al cliente presencial</h3>
                                    <p>Contamos con un equipo con experiencia en el servicio de atención al cliente/comercial capaces de gestionar con eficiencia todo el sistema interno, la excelencia en el trato, así como realizar acciones comerciales de venta de cara a tus clientes y todo ello con un estándar de calidad determinado y unos objetivos comerciales definidos.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-lg-6 col-md-12 col-sm-12 mt-5">
                            <div class="text-wrapper mb-md-5 wow fadeInLeft animated" data-wow-delay="0.6s" style="visibility: visible;-webkit-animation-delay: 0.6s; -moz-animation-delay: 0.6s; animation-delay: 0.6s;">
                                <div class="text-end">
                                    <p class="btn btn-subtitle">Contacto</p>
                                    <h3>Contact Center</h3>
                                    <p>Manejamos diferentes tipo de comunicaciones con sus clientes tales como ventas, atención al cliente, seguimiento, procesamiento de pedidos y utilizamos diferentes canales de comunicación además del teléfono (chat, videollamadas, email, redes sociales).</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 d-flex align-items-center">
                            <div class="img-thumb wow fadeInRight animated" data-wow-delay="0.3s" style="visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
                                <img class="img-fluid shadow rounded-3" src="https://3eriza.pe/wp-content/uploads/2021/10/contact-center-1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?= get_template_part('template-parts/content', 'section-industrias') ?>

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