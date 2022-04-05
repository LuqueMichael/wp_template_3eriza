<?php
/*
Template Name: ClienteIncognito Page
*/
?>

<?php

get_header();

$one_post = get_posts(array('numberposts' => 1))[0];
$tree_posts = get_posts(array('numberposts' => 3));

?>
<main class="page-blog page-incognito">
    <!-- HEADING -->
    <div class="post-heading-cover position-relative mb-0" style="z-index: 1050;background-image: url(<?= get_template_directory_uri()?>/assets/images/incognito/principal-bg.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 text-center m-auto">
                    <div class="section-heading m-0 my-2">
                        <img src="<?= get_template_directory_uri()?>/assets/images/logo-incognito.png" style="width: 80px;margin-bottom: 1rem" alt="">
                        <h1>Cliente Incógnito &#174;</h1>
                        <p class="text-white mt-5 ">Descubre qué piensan tus clientes y ofrece experiencias únicas</p>
                    </div>
                    <div class="arrow-down-icon active">
                        <a class="page-scroll" href="#quehacemos"><i class="fa fa-chevron-down"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="quehacemos" class="section staffing">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="section-heading text-center mb-2 wow fadeInDown" data-wow-duration="1s" data-wow-delay=".6s">
                        <h4>¿Qué Hacemos?</h4>
                        <div class="line-dec m-auto"></div>
                    </div>
                </div>
                <div class="col-lg-9 m-auto">
                    <p class="text text-center mb-5 mt-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                        Te brindamos información relevante de la experiencia de tus clientes a través de evaluaciones de CLIENTE INCÓGNITO®. Llevamos a cabo evaluaciones de la experiencia de servicio en cada uno de los procesos de atención de tu negocio y por los diversos canales que tienes a disposición de tu público. Elaboramos un informe ejecutivo con análisis de los resultados, conclusiones y recomendaciones para que tu marca inicie, refuerce o redireccione sus estrategias de la experiencia del cliente.
                    </p>
                </div>
                <div class="col-lg-8 m-auto">
                    <div class="card shadow-lg rounded  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s"">
                        <iframe width="100%" height="480px" src="https://www.youtube.com/embed/J7CvVNPnpag" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="call-action-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-9">
                    <div class="inner-content">
                        <h2 class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s"">Ofrece una mejor <br>experiencia a tus clientes</h2>
                        <p class=" wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.7s"">
                            Evalua la experiencia de servicio de tus clientes.
                        </p>
                        <div class="border-first-button m-auto mt-4  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.9s">
                            <a href="http://localhost/apps/3eriza/industrias">Contactanos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto mb-5">
                    <div class="section-heading text-center mb-2 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h4>Descubre nuestras dos modalidades</h4>
                        <div class="line-dec m-auto"></div>
                    </div>
                </div>
                <div class="col-lg-10 m-auto">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card modality shadow-lg shadow-blue position-relative  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.6s"">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/incognito-01.png" alt="" class="card-img rounded">
                                <div class="card-img-overlay">
                                    <div class="icon"><img src="<?= get_template_directory_uri() ?>/assets/images/logo-incognito.png" alt=""></div>
                                    <div class="text"><em>Cliente</em> Incógnito <h3>Presencial</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card modality shadow-lg shadow-blue position-relative  wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.6s"">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/incognito-02.png" alt="" class="card-img rounded">
                                <div class="card-img-overlay">
                                    <div class="icon"><img src="<?= get_template_directory_uri() ?>/assets/images/logo-incognito.png" alt=""></div>
                                    <div class="text"><em>Cliente</em> Incógnito <h3>Presencial</h3>
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
                <div class="col-lg-6 m-auto">
                    <div class="section-heading text-center mb-2 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h4>¿Cómo Funciona?</h4>
                        <div class="line-dec m-auto"></div>
                    </div>
                </div>
                <div class="col-lg-9 m-auto">
                    <p class="text text-center mb-5 mt-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                        Organizamos las evaluaciones documentadas (video, audio o foto) de acuerdo al perfil de clientes de la marca, las llevamos a cabo en los canales de atención definidos y vamos entregando los resultados individuales a través de una plataforma web que se actualiza conforme las evaluaciones se realicen.
                    </p>
                </div>
                <div class="col-lg-10 m-auto text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s"">
                    <img src="<?= get_template_directory_uri() ?>/assets/images/3eriza-soluciones-cliente-incognito.png" alt="">
                </div>
            </div>
        </div>
    </div>


    <div class="our-portfolio section">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-6 m-auto mb-5">
                    <div class="section-heading text-center mb-2 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h4>¿Cómo puede ayudarte Cliente Incógnito® ?</h4>
                        <div class="line-dec m-auto"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-11 col-lg-12 m-auto">
                    <div class="loop-incognito owl-carousel  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s"" style="z-index: 1000">
                        <div class="item">
                            <a href="#">
                                <div class="portfolio-item">
                                    <div class="thumb">
                                        <img src="<?= get_template_directory_uri() ?>/assets/images/incognito/experiencia.png" alt="">
                                    </div>
                                    <div class="down-content">
                                        <h4 class="fs-6">Experiencia</h4>
                                        <div class="text">Más de 5 años brindando el servicio de Cliente Incógnito®</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <div class="portfolio-item">
                                    <div class="thumb">
                                        <img src="<?= get_template_directory_uri() ?>/assets/images/incognito/3eriza-cliente-incognito-tecnologia.jpg" alt="">
                                    </div>
                                    <div class="down-content">
                                        <h4 class="fs-6">Tecnología</h4>
                                        <div class="text">Contamos con un software de experiencia del cliente a través de la cual podrás acceder a tus informes y tus evaluaciones en tiempo real</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <div class="portfolio-item">
                                    <div class="thumb">
                                        <img src="<?= get_template_directory_uri() ?>/assets/images/incognito/3eriza-cliente-incognito-profesionalismo.jpg" alt="">
                                    </div>
                                    <div class="down-content">
                                        <h4 class="fs-6">Profesionalismo</h4>
                                        <div class="text">Nuestro equipo profesional de evaluadores que nos permite ofrecerte un servicio de primera y entregar resultados con rapidez y precisión</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <div class="portfolio-item">
                                    <div class="thumb">
                                        <img src="<?= get_template_directory_uri() ?>/assets/images/incognito/3eriza-cliente-incognito-respaldo.jpg" alt="">
                                    </div>
                                    <div class="down-content">
                                        <h4 class="fs-6">Respaldo</h4>
                                        <div class="text">Formamos parte del grupo 3eriza, especializado en outsourcing orientado a generar ingresos.</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <section class="call-action-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="inner-content text-start  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s"">
                        <h2 class="m-0">¿Quieres contactar a un asesor?</h2>
                    </div>
                </div>
                <div class="col-lg-2 ml-auto">
                    <div class="border-first-button m-auto  wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s"">
                        <a href="http://localhost/apps/3eriza/industrias">Contactanos</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="section staffing">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="section-heading text-center mb-5 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h4>¿Porqué deberías evaluar la experiencia de tu público?</h4>
                        <div class="line-dec m-auto"></div>
                    </div>
                </div>
                <div class="col-lg-10 m-auto">
                    <div class="row section-items">
                        <div class="col-6">
                            <div class="box-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s"">
                                <div class="icon"><i class="lni lni-revenue"></i></div>
                                <div class="text">
                                    <h4>Incrementa tus ingresos</h4>
                                    <p>Podemos identificar oportunidades de mejora que servirán para fidelizar a tus clientes actuales, obtener recomendaciones y atraer a nuevos clientes.</p>
                                </div>
                            </div>
                            <div class="box-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s" ">
                                <div class="icon"><i class="lni lni-consulting"></i></div>
                                <div class="text">
                                    <h4>Feedback constante</h4>
                                    <p>Contamos con un equipo multidisciplinario que revisará tus resultados ofreciendo un reporte completo de tu negocio: atención al cliente, claridad de la comunicación, infraestructura e instalaciones, entre otros aspectos.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="box-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s" ">
                                <div class="icon"><i class="lni lni-dashboard"></i></div>
                                <div class="text">
                                    <h4>Anticípate a las contingencias</h4>
                                    <p>Conociendo el movimiento real de tu negocio podrás identificar situaciones eventuales o repetitivas que estén dañando o que podrían dañar tu reputación e ingresos.</p>
                                </div>
                            </div>
                            <div class="box-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s" ">
                                <div class="icon"><i class="lni lni-graph"></i></div>
                                <div class="text">
                                    <h4>Mejora tu desempeño</h4>
                                    <p>Al tener identificadas las oportunidades de mejora, podrás ofrecer un servicio superior a tus clientes, agilizar tiempos de servicio y tener más clientes satisfechos.</p>
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
                <div class="col-lg-10 m-auto">
                    <div class="section-heading text-center mb-5 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h4>¡Suscríbete a nuestro blog!</h4>
                        <div class="line-dec m-auto"></div>
                    </div>
                </div>
                <div class="col-lg-12 m-auto">
                    <div class="row">
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
        </div>
    </div>


    <section class="call-action-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="inner-content text-start">
                        <h2 class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s"">¿Tienes preguntas de cómo podemos ayudar al crecimiento de tu empresa?</h2>
                        <p class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s"">
                            Ponerte en contacto con nosotros y agenda una reunión.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 ml-auto d-flex align-items-center">
                    <div class="border-first-button m-auto  wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.6s"">
                        <a href="https://share.hsforms.com/1cqXvqr9wQ9-iZqhdC5uQ3w2xri0" target="_blank">Agenda una reunión</a>
                    </div>
                </div>
            </div>
        </div>
    </section>



</main>


<?php get_footer(); ?>