<?php
/*
Template Name: Nosotros Page
*/

?>
<?php

$arrTeam = [
    ['imgUrl' => get_template_directory_uri() . '/assets/images/team/luis-chavez-team.png', 'name' => 'Luis Chavez', 'position' => 'Director'],
    ['imgUrl' => get_template_directory_uri() . '/assets/images/team/miguel-roman-team.png', 'name' => 'Miguel Román', 'position' => 'Gerente General'],
    ['imgUrl' => get_template_directory_uri() . '/assets/images/team/miguel-bocanegra-team.png', 'name' => 'Miguel Bocanegra', 'position' => 'Gerente de Operaciones'],
    ['imgUrl' => get_template_directory_uri() . '/assets/images/team/javier-medina-team.png', 'name' => 'Javier Medina', 'position' => 'Gerente de Soporte a la Operación'],
    ['imgUrl' => get_template_directory_uri() . '/assets/images/team/danter-pardo-team.png', 'name' => 'Danter Pardo', 'position' => 'Gerente de Proyectos'],
    ['imgUrl' => get_template_directory_uri() . '/assets/images/team/rocio-rodriguez-team.png', 'name' => 'Rocío Rodriguez', 'position' => 'Gerente de Gestión del Talento'],
    ['imgUrl' => get_template_directory_uri() . '/assets/images/team/yudig-zenteno-team.png', 'name' => 'Yudig Zenteno', 'position' => 'Gerente de Administración y Finanzas'],
    ['imgUrl' => get_template_directory_uri() . '/assets/images/team/jesus-ibarra-team.png', 'name' => 'Jesus Ibarra', 'position' => 'Gerente de Negocio'],
    ['imgUrl' => get_template_directory_uri() . '/assets/images/team/franz-palma-team.png', 'name' => 'Franz Palma', 'position' => 'Gerente de Planeamiento y Control'],
    ['imgUrl' => get_template_directory_uri() . '/assets/images/team/edwin-cueva-team.png', 'name' => 'Edwin Cueva', 'position' => 'Gerente de Soluciones Tecnológicas'],
];

$arrProgress = [
    [
        'anio' => '2021', 'data' => [
            ['month' => 'Julio', 'content' => 'Se inicia proceso de transformación cultural a nivel de toda la organización con nuestro modelo 3BU 3eriza.']
        ]
    ],
    [
        'anio' => '2020', 'data' => [
            ['month' => 'Julio', 'content' => 'Se consolida el modelo de operación remota con un 80% de posiciones trabajando en home office.'],
            ['month' => 'Abril', 'content' => 'Se lanzan nuevas líneas de servicios: Conversión de leads, 3ERIZA BOX, Counter virtual.<br>Y se inician operaciones en modalidad remota.']
        ]
    ],
    [
        'anio' => '2019', 'data' => [
            ['month' => 'Enero', 'content' => 'Se lanzan nuevos productos entre ellos: MAO, Helpy, Voca y Talent QR.']
        ]
    ],
    [
        'anio' => '2018', 'data' => [
            ['month' => 'Setiembre', 'content' => 'Se constituye Solgesper S.A.C., dedicada exclusivamente a la intermediación laboral, por la solicitud de algunos clientes para atenderlos con servicios en esta modalidad.'],
            ['month' => 'Agosto', 'content' => 'Inserter SAC empresa del Grupo 3ERIZA obtuvo la certificación ISO 9001:2015 en “Interacción con clientes de manera presencial, ejecutando procesos de venta, atención y soporte”.'],
        ]
    ],
    [
        'anio' => '2017', 'data' => [
            ['month' => 'Junio', 'content' => 'Se incrementa considerablemente la línea de servicios al sector retail, como reposición, mercaderismo y otros.'],
            ['month' => 'Diciembre', 'content' => 'Se trasladan las oficinas de Surquillo a un nuevo local dentro del mismo distrito, con mayores espacios y ambientes adicionales.'],
        ]
    ],
    [
        'anio' => '2016', 'data' => [
            ['month' => 'Enero', 'content' => 'Dada la expansión de la línea de servicios de call center se implementa un segundo local en El Agustino, con 320 posiciones dedicadas en su mayoría a campañas de Televentas que se ocuparían en los siguientes 6 meses según plan de crecimiento. Para la provisión de estos servicios de utiliza la razón social Terceriza Perú S.R.L, y la marca 3eriza, y se incorporan 60 colaboradores más al grupo, con lo cual la familia crece a casi 300 colaboradores.'],
            ['month' => 'Mayo', 'content' => 'Se inicia proyecto de tercerización de centros de atención de una empresa de telecomunicaciones, para lo cual inicia operaciones la empresa Inserter S.A.C., con la marca 3eriza.'],
            ['month' => 'Octumbre', 'content' => 'Se completa el 100% de la capacidad instalada del call center ubicado en El Agustino y el grupo llega a superar los 1,000 colaboradores, con operaciones y oficinas en Lima y Provincias.'],
            ['month' => 'Agosto', 'content' => 'El grupo crea la empresa Seis Grados S.A.C., dedicada a la implementación de tecnologías para automatizar procesos de las demás empresas del grupo y de terceros. Se inicia desarrollo de Qnex, solución propia de gestión de colas para automatizar nuestros procesos de atención presencial.'],
            ['month' => 'Diciembre', 'content' => 'Se reestructura el grupo para consolidar en todas las empresas el uso de la marca 3eriza. Se crea la empresa Celerity S.A.C., dedicada a las funciones de back office para las demás empresas del grupo.'],
        ]
    ],
    [
        'anio' => '2015', 'data' => [
            ['month' => 'Enero', 'content' => 'Se amplía el local del Surquillo para contar con 100 posiciones de call center. La empresa contaba con 225 colaboradores.']
        ]
    ],
    [
        'anio' => '2014', 'data' => [
            ['month' => 'Marzo', 'content' => 'Se implementa nuevo local ubicado en Surquillo, con un ambiente adicional para operaciones de call center (50 posiciones).'],
            ['month' => 'Abril', 'content' => 'Se inician operaciones de campañas de call center para la venta de productos y servicios de una empresa de telecomunicaciones. La empresa ya tenía 100 colaboradores.'],
            ['month' => 'Junio', 'content' => 'Se completa el proceso de tercerización de la atención presencial de personas con la compañía de seguros, quedando 10 posiciones de su oficina principal tercerizadas con BPO Group.'],
            ['month' => 'Setiembre', 'content' => 'Inicia operaciones la línea de servicios de back office, con la implementación de un proyecto de revisión documentaria para una empresa de telecomunicaciones, el cual se amplía a provincias en los siguientes 3 meses.']
        ]
    ],
    [
        'anio' => '2013', 'data' => [
            ['month' => 'Diciembre', 'content' => 'El servicio de atención presencial para la compañía de seguros se amplía para la atención de personas naturales, con 6 posiciones inicialmente dedicadas exclusivamente a esto.']
        ]
    ],
    [
        'anio' => '2012', 'data' => [
            ['month' => 'Octubre', 'content' => 'Expansión del servicio de impulsación de productos de belleza a 16 tiendas en Lima y 4 tiendas de provincia (Piura, Chiclayo, Trujillo y Chimbote). Eran 40 los colaboradores que formaban parte de la empresa.']
        ]
    ],
    [
        'anio' => '2011', 'data' => [
            ['month' => 'Setiembre', 'content' => 'Nace la idea de crear una empresa dedicada a la consultoría especializada en Outsourcing, con el objetivo de ayudar a otras empresas a tercerizar sus procesos y a proveedores a concebirse como alternativas para tomar estos servicios.'],
            ['month' => 'Noviembre', 'content' => 'Se crea la marca “3eriza”, cuyo nombre buscaba invitar a las empresas a tercerizar y en este mismo mes empieza a operar la empresa Terceriza Perú S.R.L., dedicada exclusivamente a la consultoría.']
        ]
    ],
];

get_header();

?>

<div id="blog" class="nosotros-page">

    <!-- MISION/VISION -->
    <section id="misionvision" class="section bg-util-yellow">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto text-center">
                    <div class="section-heading wow fadeInDown animated" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h6 class="mb-0">Nuestro Propósito</h6>
                        <h1 class="fw-bold lh-base">Mejores personas, mejores negocios</h1>
                        <div class="line-dec m-auto mt-2"></div>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center text-center mt-5">
                <div class="col-md-4 col-lg-4 mb-4 wow fadeInUp animated" data-wow-duration="1s" data-wow-delay="0.5s">
                    <div class="py-4"><img class="img-fluid" src="<?= get_template_directory_uri() ?>/assets/images/mision-icon.png" width="90" alt=""></div>
                    <h5 class="fw-bold text-danger">Nuestra Misión</h5>
                    <p class="mt-2 mb-0">Implementamos soluciones prácticas con resultados tangibles que resuelven los problemas de enfoque, crecimiento, eficiencia y transformación de las empresas, a partir de un equipo humano comprometido y en constante preparación.</p>
                </div>
                <div class="col-md-4 col-lg-4 offset-lg-1 mb-4 wow fadeInUp animated" data-wow-duration="1s" data-wow-delay="0.5s">
                    <div class="py-4"><img class="img-fluid" src="<?= get_template_directory_uri() ?>/assets/images/vision-icon.png" width="90" alt=""></div>
                    <h5 class="fw-bold text-warning">Nuestra Visión</h5>
                    <p class="mt-2 mb-0">Ser una organización referente en servicio, sabiendo que servimos a clientes, colaboradores y a la sociedad.</p>
                </div>
            </div>
        </div><!-- end of .container-->
    </section>


    <!--- OUR TEAM --->

    <section id="equipo" class="team section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6 m-auto">
                    <div class="section-heading wow fadeInDown animated" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h6 class="mb-0">Nuestro Equipo</h6>
                        <h1 class="fw-bold lh-base">Nuestro Equipo</h1>
                        <p class="help-text">Entendemos tus necesidades, por eso tenemos un líder para ayudarte con las soluciones que tu empresa requiere</p>
                        <div class="line-dec m-auto mt-2"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach ($arrTeam as $key => $team) : ?>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="team-item  wow fadeInUp animated" data-wow-duration="1s" data-wow-delay="0.<?= $key + 2 ?>s">
                            <figure> <img src="<?= $team['imgUrl'] ?>" alt="">
                                <figcaption>
                                    <div class="info">
                                        <h3><?= $team['name'] ?></h3>
                                        <p><?= $team['position'] ?></p>
                                    </div>
                                    <div class="social">
                                        <a href="#" class="twitter" data-abc="true"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>




    <!--- TIMELINE ---->
    <section id="trayectoria" class="section bg-util-yellow">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6 m-auto text-center">
                    <div class="section-heading wow fadeInDown animated" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h6 class="mb-0">NUESTRA</h6>
                        <h1 class="fw-bold lh-base">TRAYECTORIA</h1>
                        <div class="line-dec m-auto mt-2"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline timeline-centered">
                        <?php foreach ($arrProgress as $item) : ?>
                            <?php foreach ($item['data'] as $key => $data) : ?>
                                <li class="timeline-item wow fadeInUp animated" data-wow-duration="1s" data-wow-delay="0.<?= $key + 2 ?>s">
                                    <div class="timeline-info">
                                        <span><?= $item['anio'] ?></span>
                                    </div>
                                    <div class="timeline-marker"></div>
                                    <div class="timeline-content">
                                        <h3 class="timeline-title mb-3"><?= $data['month'] ?>, <?= $item['anio'] ?></h3>
                                        <p><?= $data['content'] ?></p>
                                    </div>
                                </li>
                            <?php endforeach ?>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>

        </div>
    </section>

</div>


<?php get_footer(); ?>