<?php
/*
Template Name: Home Page
*/

$one_post = get_posts(array('numberposts' => 1))[0];
$tree_posts = get_posts(array('numberposts' => 3));

?>
<?= get_header() ?>

<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h6>OUTSOURCING</h6>
                                    <h2>SOLUCIONES A MEDIDA DE NUESTROS CLIENTES</h2>
                                    <p>Contamos con experiencia comprobada y el conocimiento para entregarte <span class="fw-bold">resultados tangibles</span></p>
                                </div>
                                <div class="col-lg-12">
                                    <div class="border-first-button scroll-to-section">
                                        <a href="<?= home_url('/contacto') ?>" target="_blank">Contáctanos</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/slider.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="about" class="about section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-left-image  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/que-es-3eriza.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-center  wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="about-right-content">
                            <div class="section-heading">
                                <h6>Nosotros</h6>
                                <h4>Que es <em>3Eriza</em></h4>
                                <div class="line-dec"></div>
                            </div>
                            <p>Somos una empresa tercerizadora de servicios profesionales, que brinda soluciones enfocadas a negocios, a través de la gestión de procesos, empleando capital humano especializado y tecnología.</p>
                            <div class="row">
                                <div class="col-lg-4 col-sm-4">
                                    <div class="skill-item first-skill-item wow fadeIn animated" data-wow-duration="1s" data-wow-delay="0s" style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;-webkit-animation-delay: 0s; -moz-animation-delay: 0s; animation-delay: 0s;">
                                        <div class="progress" data-percentage="100">
                                            <span class="progress-left">
                                                <span class="progress-bar"></span>
                                            </span>
                                            <span class="progress-right">
                                                <span class="progress-bar"></span>
                                            </span>
                                            <div class="progress-value">
                                                <div>
                                                    <dll class="counter">8</dll>+<br>
                                                    <span>CIUDADES</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="skill-item second-skill-item wow fadeIn animated" data-wow-duration="1s" data-wow-delay="0s" style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;-webkit-animation-delay: 0s; -moz-animation-delay: 0s; animation-delay: 0s;">
                                        <div class="progress" data-percentage="100">
                                            <span class="progress-left">
                                                <span class="progress-bar"></span>
                                            </span>
                                            <span class="progress-right">
                                                <span class="progress-bar"></span>
                                            </span>
                                            <div class="progress-value">
                                                <div>
                                                    <dll class="counter">1100</dll>+<br>
                                                    <span style="font-size: 14px">COLABORADORES</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="skill-item third-skill-item wow fadeIn animated" data-wow-duration="1s" data-wow-delay="0s" style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;-webkit-animation-delay: 0s; -moz-animation-delay: 0s; animation-delay: 0s;">
                                        <div class="progress" data-percentage="100">
                                            <span class="progress-left">
                                                <span class="progress-bar"></span>
                                            </span>
                                            <span class="progress-right">
                                                <span class="progress-bar"></span>
                                            </span>
                                            <div class="progress-value">
                                                <div>
                                                    <dll class="counter">75</dll>+<br>
                                                    <span>SERVICIOS</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-util-gray py-5">
    <div class="container">
        <div class="row">
            <ul class="industrias-bar home">
                <li class="wow bounceIn" data-wow-duration="1s" data-wow-delay="0.5s">
                    <div class="icon"><i class="lni lni-stats-up"></i></div>
                    <a>Resultados esperados</a>
                    <p class="text">Nuestra meta es tu crecimiento. Encuentra en nosotros un socio estratégico para el logro de objetivos.</p>
                </li>
                <li class="wow bounceIn" data-wow-duration="1s" data-wow-delay="0.8s">
                    <div class="icon"><i class="lni lni-consulting"></i></div>
                    <a>Especialistas en tus procesos</a>
                    <p class="text">Contamos con el conocimiento y experiencia para implementar soluciones a la medida de nuestros clientes, con resultados tangibles.</p>
                </li>
                <li class="wow bounceIn" data-wow-duration="1s" data-wow-delay="1s">
                    <div class="icon"><i class="lni lni-handshake"></i></div>
                    <a>Concéntrate en tu Core Business</a>
                    <p class="text">Optimiza tus recursos, dejando tus procesos no clave en manos de un especialista.</p>
                </li>
            </ul>
        </div>
    </div>
</div>

<div id="services" class="services section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                    <h6>Nuestros Servicios</h6>
                    <h4>Lo que ofrece <em>3Eriza</em></h4>
                    <div class="line-dec"></div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="naccs">
                    <div class="grid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="menu">
                                    <div class="first-thumb active">
                                        <div class="thumb">
                                            <span class="icon"><img src="<?= get_template_directory_uri() ?>/assets/images/service-frontoffice.png" alt=""></span>
                                            Front Office
                                        </div>
                                    </div>
                                    <div>
                                        <div class="thumb">
                                            <span class="icon"><img src="<?= get_template_directory_uri() ?>/assets/images/service-staff.png" alt=""></span>
                                            Staffing
                                        </div>
                                    </div>
                                    <div>
                                        <div class="thumb">
                                            <span class="icon"><img src="<?= get_template_directory_uri() ?>/assets/images/service-back.png" alt=""></span>
                                            Back Office
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <ul class="nacc">
                                    <li class="active">
                                        <div>
                                            <div class="thumb">
                                                <div class="row">
                                                    <div class="col-lg-6 align-self-center">
                                                        <div class="left-text">
                                                            <h4>Interacción con clientes </h4>
                                                            <p> Gestionamos la interacción con sus clientes por cualquier canal de contacto.</p>
                                                            <div class="ticks-list">
                                                                <span><i class="fa fa-check"></i> Ventas</span> <span><i class="fa fa-check"></i> Atención presencial</span> <span><i class="fa fa-check"></i> Contact Center</span>
                                                            </div>
                                                            <p>Nos enfocamos en gestionar las ventas y atención de tus clientes.</p>
                                                            <div class="border-first-button"><a href="<?= get_home_url() ?>/interaccion-con-clientes-front-office/">Ver más</a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 align-self-center">
                                                        <div class="right-image">
                                                            <img src="<?= get_template_directory_uri() ?>/assets/images/service-1.png" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <div class="thumb">
                                                <div class="row">
                                                    <div class="col-lg-6 align-self-center">
                                                        <div class="left-text">
                                                            <h4>Provisión de personal</h4>
                                                            <p>Te ayudamos a ti y a tu empresa a cubrir necesidades de personal.</p>
                                                            <div class="ticks-list">
                                                                <span><i class="fa fa-check"></i> Reponedores</span> <span><i class="fa fa-check"></i> Impulsadores</span> <span><i class="fa fa-check"></i> Mercaderistas</span>
                                                            </div>
                                                            <p>Ayudamos a nuestros clientes a contar con talento humano especifico alineado a sus necesidades</p>
                                                            <div class="border-first-button"><a href="<?= get_home_url() ?>/provision-de-personal-staffing/">Ver más</a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 align-self-center">
                                                        <div class="right-image">
                                                            <img src="<?= get_template_directory_uri() ?>/assets/images/service-2.png" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <div class="thumb">
                                                <div class="row">
                                                    <div class="col-lg-6 align-self-center">
                                                        <div class="left-text">
                                                            <h4>Soporte al negocio</h4>
                                                            <p>Nos encargamos de tus procesos de soporte, para que te ocupes del core de tu negocio.</p>
                                                            <div class="ticks-list">
                                                                <span><i class="fa fa-check"></i> RRHH</span> <span><i class="fa fa-check"></i> Administración</span> <span><i class="fa fa-check"></i> Finanzas</span>
                                                                <span><i class="fa fa-check"></i> TI</span>
                                                            </div>
                                                            <p>Nuestros servicios de soporte para empresas ayudan a hacer mas eficientes sus costos fijos operativos.</p>
                                                            <div class="border-first-button"><a href="<?= get_home_url() ?>/soporte-al-negocio-back-office/">Ver más</a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 align-self-center">
                                                        <div class="right-image">
                                                            <img src="<?= get_template_directory_uri() ?>/assets/images/service-3.png" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="suscribe" class="suscribe">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                    <h4>Suscríbete ahora</h4>
                    <p class="text-white mb-3">Suscríbete al blog de 3ERIZA y recibe directamente en tu correo electrónico, los últimos tips y consejos para mejorar tu negocio.</p>
                    <div class="line-dec"></div>
                </div>
            </div>
            <div class="col-lg-8 offset-lg-2  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                <form id="search" action="#" method="GET">
                    <div class="row">
                        <div class="col-lg-8 col-sm-8">
                            <fieldset>
                                <input type="address" name="address" class="email" placeholder="Correo..." autocomplete="on" required>
                            </fieldset>
                        </div>
                        <div class="col-lg-4 col-sm-4">
                            <fieldset>
                                <button type="submit" class="main-button">Suscribirse</button>
                            </fieldset>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div id="portfolio" class="our-portfolio section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                    <h6>-</h6>
                    <h4>Nuestras <em>Soluciones</em></h4>
                    <div class="line-dec"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="loop owl-carousel" style="z-index: 1000">
                    <div class="item">
                        <a href="#">
                            <div class="portfolio-item">
                                <div class="thumb">
                                    <img src="<?= get_template_directory_uri() ?>/assets/images/s-qnextplus.png" alt="">
                                </div>
                                <div class="down-content">
                                    <h4 class="fs-6">QnextPLUS</h4>
                                    <span>Marketing</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <div class="portfolio-item">
                                <div class="thumb">
                                    <img src="<?= get_template_directory_uri() ?>/assets/images/s-talentqr.png" alt="">
                                </div>
                                <div class="down-content">
                                    <h4 class="fs-6">TelentQR</h4>
                                    <span>Marketing</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <div class="portfolio-item">
                                <div class="thumb">
                                    <img src="<?= get_template_directory_uri() ?>/assets/images/s-ebox.png" alt="">
                                </div>
                                <div class="down-content">
                                    <h4 class="fs-6">EBOX</h4>
                                    <span>Marketing</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <div class="portfolio-item">
                                <div class="thumb">
                                    <img src="<?= get_template_directory_uri() ?>/assets/images/s-helpy.png" alt="">
                                </div>
                                <div class="down-content">
                                    <h4 class="fs-6">Helpy</h4>
                                    <span>Marketing</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <div class="portfolio-item">
                                <div class="thumb">
                                    <img src="<?= get_template_directory_uri() ?>/assets/images/s-clienteincog.png" alt="">
                                </div>
                                <div class="down-content">
                                    <h4 class="fs-6">CLIENTE INCOGNITO</h4>
                                    <span>Marketing</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<div id="blog" class="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
                <div class="section-heading">
                    <h6>Entradas del Blog</h6>
                    <h4>Utimas <em>Publicaciones</em></h4>
                    <div class="line-dec"></div>
                </div>
            </div>
            <div class="col-lg-6 show-up wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                <div class="blog-post">
                    <div class="thumb">
                        <a href="<?= get_permalink($one_post->ID) ?>"><img src="<?= get_the_post_thumbnail_url($one_post->ID) ?>" alt=""></a>
                    </div>
                    <div class="down-content">
                        <?php $tagsPost = get_the_category($one_post->ID); ?>
                        <span class="category"><?= $tagsPost[0]->name ?></span>
                        <?php $dateData = date_create($last_post[0]->post_date) ?>
                        <span class="date"><?= get_the_date('j F, Y', $last_post[0]->ID); ?></span>
                        <a href="<?= get_permalink($one_post->ID) ?>">
                            <h4><?= $one_post->post_title ?></h4>
                        </a>
                        <p><?= get_the_excerpt($one_post->ID) ?></p>
                        <span class="author"><img src="<?= get_avatar_url($one_post->post_author) ?>" alt="">Por: <?= get_the_author_meta('display_name', $one_post->post_author) ?></span>
                        <div class="border-first-button"><a href="<?= get_permalink($one_post->ID) ?>">Leer mas..</a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                <div class="blog-posts">
                    <div class="row">
                        <?php foreach ($tree_posts as $post) : ?>
                            <div class="col-lg-12">
                                <div class="post-item">
                                    <?php
                                    $urlThumbPost = get_the_post_thumbnail_url(get_the_ID());
                                    if (empty($urlThumbPost)) {
                                        $urlThumbPost = get_template_directory_uri() . '/assets/images/no-image.jpg';
                                    }
                                    ?>
                                    <div class="thumb" style="background-image: url(<?= $urlThumbPost ?>);">

                                    </div>
                                    <div class="right-content">
                                        <?php $tagsPost = get_the_category($post->ID); ?>
                                        <span class="category"><?= $tagsPost[0]->name ?></span>
                                        <span class="date"><?= get_the_date() ?></span>
                                        <a href="<?= the_permalink() ?>">
                                            <?php $tag = (strlen(get_the_title()) >= 50) ? 'h5' : 'h4' ?>
                                            <<?= $tag ?>><?= get_the_title() ?></<?= $tag ?>>
                                        </a>
                                        <p class="excerpt"><?= get_the_excerpt() ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="industrias" class="industrias">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="section-heading  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                    <h4>Industrias en las que nos especializamos</h4>
                    <div class="line-dec"></div>
                </div>
            </div>
            <div class="col-lg-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                <div class="fill-form p-0">
                    <div class="row">
                        <div class="col-12 col-sm-4 col-md-6 col-lg-3 col-xl-2">
                            <div class="info-post">
                                <div class="icon">
                                    <img src="<?= get_template_directory_uri() ?>/assets/images/industrias-01.png" alt="">
                                    <a href="#">Telco</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4 col-md-6 col-lg-3 col-xl-2">
                            <div class="info-post">
                                <div class="icon">
                                    <img src="<?= get_template_directory_uri() ?>/assets/images/industrias-02.png" alt="">
                                    <a href="#">Distribución y retail</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4 col-md-6 col-lg-3 col-xl-2">
                            <div class="info-post">
                                <div class="icon">
                                    <img src="<?= get_template_directory_uri() ?>/assets/images/industrias-03.png" alt="">
                                    <a href="#">Educación</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4 col-md-6 col-lg-3 col-xl-2">
                            <div class="info-post">
                                <div class="icon">
                                    <img src="<?= get_template_directory_uri() ?>/assets/images/industrias-04.png" alt="">
                                    <a href="#">Seguros</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4 col-md-6 col-lg-3 col-xl-2">
                            <div class="info-post">
                                <div class="icon">
                                    <img src="<?= get_template_directory_uri() ?>/assets/images/industrias-05.png" alt="">
                                    <a href="#">Automotriz</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4 col-md-6 col-lg-3 col-xl-2">
                            <div class="info-post">
                                <div class="icon">
                                    <img src="<?= get_template_directory_uri() ?>/assets/images/industrias-06.png" alt="">
                                    <a href="#">Salud</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 pt-5">
                            <div class="border-first-button m-auto"><a href="<?= home_url() ?>/industrias">Ver Más</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.counterup/1.0/jquery.counterup.min.js"></script>


<?php get_footer() ?>