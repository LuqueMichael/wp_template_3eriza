<?php
/*
Template Name: Responsabilidad Page
*/
?>

<?php

get_header();

?>
<main class="page-blog">
    <!-- HEADING -->
    <?php $img_bg = (get_the_post_thumbnail_url()) ? get_the_post_thumbnail_url() : 'https://preview.uideck.com/items/essence/img/bg/hero-area-2.jpg'; ?>
    <div class="post-heading-cover position-relative mb-0" style="z-index: 1050;background-image: url(<?= $img_bg ?>)">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 text-center m-auto">
                    <div class="section-heading m-0 my-2">
                        <h1>Responsabilidad social empresarial</h1>
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
                        <h4>Qué hacemos por nuestra sociedad </h4>
                        <div class="line-dec m-auto"></div>
                    </div>
                </div>
                <div class="col-lg-9 m-auto">
                    <p class="text text-center mb-5 mt-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                        Queremos devolver a la sociedad todo lo que nos aporta, por ello venimos trabajando prácticas de responsabilidad social para generar bienestar a diferentes comunidades.

                    </p>
                </div>
                <div class="col-xxl-9 col-lg-12 m-auto">
                    
                </div>
            </div>
        </div>
    </div>


    <div id="branding" class="section bg-util-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="section-heading text-center mb-2 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h4>Causas que apoyamos</h4>
                        <div class="line-dec m-auto"></div>
                    </div>
                </div>
                <div class="col-xxl-9 col-lg-12 m-auto">
                   <div class="ong">
                       <div class="ong-yaqua wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s"></div>
                       <div class="ong-kallpachay wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s"></div>
                       <div class="ong-peruchamps wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s"></div>
                       <div class="ong-emprendedora wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s"></div>
                       <div class="ong-serpar wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.2s"></div>
                       <div class="ong-aldeas wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.4s"></div>
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
                        <h6>Ayúdanos a llevar agua a más peruanos de la mano de Yaqua </h6>
                        <h4>Salud y Bienestar</h4>
                        <div class="line-dec m-auto"></div>
                    </div>
                </div>
                <div class="col-lg-9 m-auto">
                    <p class="text text-center mb-5 mt-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                        3eriza se encarga de manejar parte de los procesos operativos de Yaqua, varios de nuestros colaboradores son voluntarios y cubrimos mensualmente una parte de sus costos fijos.
                    </p>
                </div>
                <div class="col-xxl-9 col-lg-12 m-auto">

                </div>
            </div>
        </div>
    </div>

    <div id="backoffice" class="section staffing">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="section-heading text-center mb-2 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h4>Educación</h4>
                        <div class="line-dec m-auto"></div>
                    </div>
                </div>
                <div class="col-lg-9 m-auto">
                    <p class="text text-center mb-5 mt-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                        La educación es el arma más poderosa para TRIUNFAR
                    </p>
                </div>
                <div class="col-xxl-9 col-lg-12 m-auto">
                    <p><b>Kallpachay:</b> Durante la pandemia, hemos colaborado en el refuerzo de las clases escolares virtuales.Este 2022, continuaremos reforzando conocimientos y consolidando el aprendizaje de más alumnos peruanos.</p>
                    <p><b>PerúChamps:</b> Patrocinamos las becas de niños de bajos recursos con alto nivel académico, deportivo o artístico, con la finalidad de transformar sus vidas a través de una mejor educación en la red de colegios Innova School</p>
                </div>
            </div>
        </div>
    </div>


</main>


<?php get_footer(); ?>