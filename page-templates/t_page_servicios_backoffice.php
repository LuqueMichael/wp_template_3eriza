<?php
/*
Template Name: Backoffice Page
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
                        <h1>Soporte al negocio - <em>Back Office</em></h1>
                        <p class="text-white mt-5 ">Tenemos la solución que necesitas en función a tus necesidades.</p>
                    </div>
                    <div class="arrow-down-icon active">
                        <a class="page-scroll" href="#backoffice"><i class="fa fa-chevron-down"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="backoffice" class="section staffing">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="section-heading text-center mb-2 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h4>Back Office</h4>
                        <div class="line-dec m-auto"></div>
                    </div>
                </div>
                <div class="col-lg-9 m-auto">
                    <p class="text text-center mb-5 mt-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                        Ayudamos a externalizar procesos de negocio apoyándonos en tecnología innovadora, equipo con años de experiencia garantizando seguridad y confidencialidad, nuestros servicios de soporte para empresas ayudan a hacer mas eficientes sus costos fijos operativos, optimizar en personas y mejorar su capacidad de respuesta productiva.
                    </p>
                </div>
                <div class="col-xxl-9 col-lg-12 m-auto">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 d-flex align-items-center">
                            <div class="section-items">
                                <div class="box-item d-flex right  wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".8s">
                                    <div class="flex-fill text text-end">
                                        <h4>Digitación</h4>
                                        <p>Adaptamos la información de acuerdo a sus necesidades, en los formatos y programas requeridos. Desde documentos o sistemas obsoletos a bases de datos o nuevas aplicaciones.</p>
                                    </div>
                                    <div class="flex-fill icon"><i class="lni lni-keyboard"></i></div>
                                </div>
                                <div class="box-item d-flex right  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                                    <div class="flex-fill text text-end">
                                        <h4>Registro y procesamiento de información y documentación</h4>
                                        <p>Recopilamos datos y los convertimos en información utilizable, a través de los procesos de investigación, preparación, procesamiento, interpretación y almacenamiento.</p>
                                    </div>
                                    <div class="flex-fill icon"><i class="lni lni-stats-up"></i></div>
                                </div>
                                <div class="box-item d-flex right  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1.2s">
                                    <div class="flex-fill text text-end">
                                        <h4>Análisis de información</h4>
                                        <p>Disponemos de un servicio estadístico profesional y personalizado de análisis de datos para empresas y proyectos de investigación. Esto incluye tabulación de datos, redacción de informes para la toma de decisiones, preparación de presentaciones de resultados, etc.</p>
                                    </div>
                                    <div class="flex-fill icon"><i class="lni lni-keyword-research"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex align-items-center">
                            <div class="service-image m-auto shadow wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s">
                                <img src="https://3eriza.pe/wp-content/uploads/2021/10/backoffice-500x1024.jpg" alt="" class="img-fluid rounded-3">
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