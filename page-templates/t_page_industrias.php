<?php
/*
Template Name: Industrias Page
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
                        <h1>Industrias en las que nos especializamos</h1>
                        <p class="text-white mt-5 ">Somos firmes creyentes de que la especialización es el camino al éxito, por eso contamos con una gran variedad de servicios de soporte para que nuestros clientes se enfoquen en el core de su negocio. Nuestra amplia experiencia nos ha proporcionado la capacidad de cubrir las necesidades de nuestros clientes, independientemente del sector en el que operen, desde empresas de telecomunicaciones hasta compañías de seguros, la lista de soluciones brindadas es extensa.</p>
                    </div>
                    <div class="arrow-down-icon active">
                        <a class="page-scroll" href="#telecomunicaciones"><i class="fa fa-chevron-down"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="bg-util-gray py-5">
        <div class="container">
            <div class="row">
                <ul class="industrias-bar">
                    <li class=" wow bounceIn" data-wow-duration="1s" data-wow-delay="0.5s"><img src="<?= get_template_directory_uri() ?>/assets/images/industrias-01.png" alt=""><a href="#telecomunicaciones">Telco</a></li>
                    <li class=" wow bounceIn" data-wow-duration="1s" data-wow-delay="0.6s"><img src="<?= get_template_directory_uri() ?>/assets/images/industrias-02.png" alt=""><a href="#distribucion">Distribución y retail</a></li>
                    <li class=" wow bounceIn" data-wow-duration="1s" data-wow-delay="0.7s"><img src="<?= get_template_directory_uri() ?>/assets/images/industrias-03.png" alt=""><a href="#educacion">Educación</a></li>
                    <li class=" wow bounceIn" data-wow-duration="1s" data-wow-delay="0.8s"><img src="<?= get_template_directory_uri() ?>/assets/images/industrias-04.png" alt=""><a href="#seguros">Seguros</a></li>
                    <li class=" wow bounceIn" data-wow-duration="1s" data-wow-delay="0.9s"><img src="<?= get_template_directory_uri() ?>/assets/images/industrias-05.png" alt=""><a href="#automotriz">Automotriz</a></li>
                    <li class=" wow bounceIn" data-wow-duration="1s" data-wow-delay="1s"><img src="<?= get_template_directory_uri() ?>/assets/images/industrias-06.png" alt=""><a href="#salud">Salud</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- INDUSTRIAS ICONOS -->
    <div id="telecomunicaciones" class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="section-heading text-center mb-5 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h4>Telecomunicaciones</h4>
                        <div class="line-dec m-auto"></div>
                    </div>
                </div>
                <div class="col-lg-10 m-auto">
                    <p class="text text-center  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                        Este es un mercado muy grande con diversos campos especializados. En cuanto a la telefonía celular, todas las compañías requieren un manejo de procesos efectivo y eficiente para lograr competitividad sostenible en el entorno de rápido crecimiento de las telecomunicaciones. En esta industria, las actividades core del negocio son la implementación y mantenimiento de redes, marketing, cadenas de distribución, etc.; pero también están los otros procesos que pueden ser tercerizados y delegados a 3ERIZA.
                    </p>
                </div>
                <div class="col-lg-12 col-xxl-10 m-auto">
                    <div class="row">
                        <div class="col-lg-8 m-auto ">
                            <div class="section-title text-center">
                                <h4 class="fs-5 wow fadeInDown" data-wow-duration="1s" data-wow-delay="1s">¿CÓMO TE PODEMOS AYUDAR?</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="section-items left p-0">
                                <div class="box-item d-flex mt-5 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                                    <div class="flex-fill text text-end">
                                        <h4>Ventas</h4>
                                        <p>Portabilidad, altas nuevas, renovaciones y migraciones, vía contact center (Televentas) o de manera presencial (Puntos de Venta)</p>
                                    </div>
                                    <div class="flex-fill icon"> <i class="lni lni-rocket"></i></div>
                                </div>
                                <div class="box-item d-flex   wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1.2s">
                                    <div class="flex-fill text text-end">
                                        <h4>Atención al cliente</h4>
                                        <p>Atención presencial (Centros de Atención) y telefónica (Contact Center)</p>
                                    </div>
                                    <div class="flex-fill icon"><i class="lni lni-headphone-alt"></i></div>
                                </div>
                                <div class="box-item d-flex  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1.4s">
                                    <div class="flex-fill text text-end">
                                        <h4>Soporte</h4>
                                        <p>Soporte a distintos procesos como gestión de reclamos, revisión documentaria, activaciones, reposiciones, despachos</p>
                                    </div>
                                    <div class="flex-fill icon"> <i class="lni lni-flag-alt"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 d-flex align-items-center">
                            <div class="service-image  wow fadeInRight" data-wow-duration="1s" data-wow-delay="1s">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/industrias/TELECOMUNICACIONES.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="distribucion" class="section bg-util-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="section-heading text-center mb-5 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h4>Distribución y Retail</h4>
                        <div class="line-dec m-auto"></div>
                    </div>
                </div>
                <div class="col-lg-9 m-auto">
                    <p class="text text-center mb-5 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                        El sector ha pasado por muchos cambios a lo largo de estos últimos años que han implicado el subir los estándares de servicio y la competitividad entre compañías. Por este motivo, es esencial crear una marca estable y construir lazos de lealtad con los clientes, para lo cual 3ERIZA es un aliado estratégico.
                    </p>
                </div>
                <div class="col-lg-12 col-xxl-10 m-auto">
                    <div class="row">
                        <div class="col-lg-8 m-auto mb-2">
                            <div class="section-title text-center">
                                <h4 class="fs-5 wow fadeInDown" data-wow-duration="1s" data-wow-delay="1s">¿CÓMO TE PODEMOS AYUDAR?</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 d-flex align-items-center p-0">
                            <div class="service-image  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/industrias/RETAIL.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="section-items order1">
                                        <div class="box-item d-flex wow fadeInRight" data-wow-duration="1s" data-wow-delay="1s">
                                            <div class="icon"> <i class="lni lni-rocket"></i></div>
                                            <div class="flex-grow-1 text">
                                                <h4>Soporte</h4>
                                                <p>Impulsación de productos por categoría o marcas</p>
                                            </div>
                                        </div>
                                        <div class="box-item d-flex  wow fadeInRight" data-wow-duration="1s" data-wow-delay="1.2s">
                                            <div class="icon"><i class="lni lni-headphone-alt"></i></div>
                                            <div class="flex-grow-1 text">
                                                <h4>Soporte</h4>
                                                <p>Reposición y labores de soporte logístico</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="section-items order1">
                                        <div class="box-item d-flex wow fadeInRight" data-wow-duration="1s" data-wow-delay="1.6s">
                                            <div class="icon"> <i class="lni lni-flag-alt"></i></div>
                                            <div class="flex-grow-1 text">
                                                <h4>Soporte</h4>
                                                <p>Mediciones diversas: precios, existencias en góndolas, control de planogramas</p>
                                            </div>
                                        </div>
                                        <div class="box-item d-flex wow fadeInRight" data-wow-duration="1s" data-wow-delay="1.8s">
                                            <div class="icon"> <i class="lni lni-flag-alt"></i></div>
                                            <div class="flex-grow-1 text">
                                                <h4>Soporte</h4>
                                                <p>Operación de cajas</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 m-auto">
                                    <div class="section-items order1 p-0" style="margin-top: -3rem;">
                                        <div class="box-item d-flex wow fadeInRight" data-wow-duration="1s" data-wow-delay="1.4s">
                                            <div class="icon"> <i class="lni lni-flag-alt"></i></div>
                                            <div class="flex-grow-1 text">
                                                <h4>Soporte</h4>
                                                <p>Atención al cliente presencial (Centros de Atención) y telefónica (Contact Center)</p>
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

    <div id="educacion" class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="section-heading text-center mb-5 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h4>Educación</h4>
                        <div class="line-dec m-auto"></div>
                    </div>
                </div>
                <div class="col-lg-9 m-auto">
                    <p class="text text-center mb-5 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                        Este sector está experimentando un crecimiento de la competencia, lo que demanda a las instituciones a concentrar sus energías en incrementar las inscripciones y entregar una educación de calidad mediante los contenidos y conocimientos impartidos, personal e infraestructura. En lo que respecta a actividades que no son core de la industria, 3ERIZA cuenta con soluciones y servicios de outsourcing que contribuirán al cumplimiento de las metas de la institución.
                    </p>
                </div>
                <div class="col-lg-12 col-xxl-10 m-auto">
                    <div class="row">
                        <div class="col-lg-8 m-auto">
                            <div class="section-title text-center">
                                <h4 class="fs-5 wow fadeInDown" data-wow-duration="1s" data-wow-delay="1s">¿CÓMO TE PODEMOS AYUDAR?</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="section-items order1">
                                        <div class="box-item d-flex wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                            <div class="icon"> <i class="lni lni-rocket"></i></div>
                                            <div class="flex-grow-1 text">
                                                <h4>Soporte</h4>
                                                <p>Gestión de citas para visitas a campus o charlas a interesados</p>
                                            </div>
                                        </div>
                                        <div class="box-item d-flex wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                                            <div class="icon"> <i class="lni lni-flag-alt"></i></div>
                                            <div class="flex-grow-1 text">
                                                <h4>Soporte</h4>
                                                <p>Atención de centrales telefónicas</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="section-items order1">
                                        <div class="box-item d-flex wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">
                                            <div class="icon"> <i class="lni lni-flag-alt"></i></div>
                                            <div class="flex-grow-1 text">
                                                <h4>Soporte</h4>
                                                <p>Atención al cliente presencial</p>
                                            </div>
                                        </div>
                                        <div class="box-item d-flex wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.2s">
                                            <div class="icon"> <i class="lni lni-flag-alt"></i></div>
                                            <div class="flex-grow-1 text">
                                                <h4>Soporte</h4>
                                                <p>Reclutamiento y selección del personal administrativo</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 m-auto">
                                    <div class="section-items order1 p-0" style="margin-top: -3rem;">
                                        <div class="box-item d-flex wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.4s">
                                            <div class="icon"><i class="lni lni-headphone-alt"></i></div>
                                            <div class="flex-grow-1 text">
                                                <h4>Soporte</h4>
                                                <p>Venta de cursos y programas y Seguimiento a inscripciones</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex align-items-center">
                            <div class="service-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="1s">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/industrias/EDUCACION.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="seguros" class="section bg-util-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="section-heading text-center mb-5 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h4>Seguros</h4>
                        <div class="line-dec m-auto"></div>
                    </div>
                </div>
                <div class="col-lg-9 m-auto">
                    <p class="text text-center mb-5 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                        El mercado de seguros tiene muchas oportunidades para crecer en el Perú y lo viene haciendo a ritmo importante. Es un mercado altamente competitivo en el que cada compañía de seguros se diferencia por ofrecer productos innovadores y cada vez mejor servicio. 3ERIZA ofrece distintas herramientas y metodologías que nutren las estrategias competitivas de su compañía.
                    </p>
                </div>
                <div class="col-lg-12 m-auto">
                    <div class="row">
                        <div class="col-lg-8 m-auto mb-5">
                            <div class="section-title text-center">
                                <h4 class="fs-5 wow fadeInDown" data-wow-duration="1s" data-wow-delay="1s">¿CÓMO TE PODEMOS AYUDAR?</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 p-0">
                            <div class="service-image wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/industrias/SEGUROS.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-6 p-0">
                                    <div class="section-items order1">
                                        <div class="box-item d-flex wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                            <div class="icon"> <i class="lni lni-flag-alt"></i></div>
                                            <div class="flex-grow-1 text">
                                                <h4>Soporte</h4>
                                                <p>Soporte en procesos de emisión o siniestros</p>
                                            </div>
                                        </div>
                                        <div class="box-item d-flex wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                                            <div class="icon"> <i class="lni lni-flag-alt"></i></div>
                                            <div class="flex-grow-1 text">
                                                <h4>Soporte</h4>
                                                <p>Implementación de soluciones de automatización de colas en plataformas presenciales</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-0">
                                    <div class="section-items order1">
                                        <div class="box-item d-flex wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">
                                            <div class="icon"> <i class="lni lni-rocket"></i></div>
                                            <div class="flex-grow-1 text">
                                                <h4>Soporte</h4>
                                                <p>Operación de puntos de venta</p>
                                            </div>
                                        </div>
                                        <div class="box-item d-flex wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.2s">
                                            <div class="icon"><i class="lni lni-headphone-alt"></i></div>
                                            <div class="flex-grow-1 text">
                                                <h4>Soporte</h4>
                                                <p>Servicios de soporte a brokers</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 p-0 m-auto">
                                    <div class="section-items order1" style="margin-top: -3rem;">
                                        <div class="box-item d-flex wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.4s">
                                            <div class="icon"> <i class="lni lni-flag-alt"></i></div>
                                            <div class="flex-grow-1 text">
                                                <h4>Soporte</h4>
                                                <p>Atención al cliente presencial (Centros de Atención) y telefónica (Contact Center)</p>
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


    <div id="automotriz" class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="section-heading text-center mb-5 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h4>Automotriz</h4>
                        <div class="line-dec m-auto"></div>
                    </div>
                </div>
                <div class="col-lg-9 m-auto">
                    <p class="text text-center mb-5 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                        Con casi medio millón de vehículos vendidos en el 2019*, esta dinámica industria requiere velocidad de respuesta para atender la primera línea de prospectos interesados en alguna unidad, así como eficiencia en sus procesos de postventa, siendo una estrategia interesante para conseguir ambos objetivos el encargarle a un tercero especializado en interacción con clientes parte de estas actividades.
                    </p>
                </div>
                <div class="col-lg-12 col-xxl-10 m-auto">
                    <div class="row">
                        <div class="col-lg-8 m-auto mb-5">
                            <div class="section-title text-center">
                                <h4 class="fs-5 wow fadeInDown" data-wow-duration="1s" data-wow-delay="1s">¿CÓMO TE PODEMOS AYUDAR?</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-6 m-auto">
                                    <div class="section-items order1">
                                        <div class="box-item d-flex wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                            <div class="icon"> <i class="lni lni-rocket"></i></div>
                                            <div class="flex-grow-1 text">
                                                <h4>Soporte</h4>
                                                <p>Encuestas de satisfacción, desde mediciones puntuales y recurrentes, hasta estudios completos.</p>
                                            </div>
                                        </div>
                                        <div class="box-item d-flex wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                                            <div class="icon"><i class="lni lni-headphone-alt"></i></div>
                                            <div class="flex-grow-1 text">
                                                <h4>Soporte</h4>
                                                <p>Atención de centrales de citas, informes o soporte</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 m-auto">
                                    <div class="section-items order1">
                                        <div class="box-item d-flex wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">
                                            <div class="icon"> <i class="lni lni-flag-alt"></i></div>
                                            <div class="flex-grow-1 text">
                                                <h4>Soporte</h4>
                                                <p>Soporte en procesos de emisión o siniestros</p>
                                            </div>
                                        </div>
                                        <div class="box-item d-flex wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.2s">
                                            <div class="icon"> <i class="lni lni-flag-alt"></i></div>
                                            <div class="flex-grow-1 text">
                                                <h4>Soporte</h4>
                                                <p>Implementación de soluciones de automatización de colas en plataformas presenciales</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 m-auto m-auto" style="margin-top: -3rem;">
                                    <div class="section-items order1">
                                        <div class="box-item d-flex wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.4s">
                                            <div class="icon"> <i class="lni lni-flag-alt"></i></div>
                                            <div class="flex-grow-1 text">
                                                <h4>Soporte Comercial</h4>
                                                <p>Atención de leads, agendamiento de citas para pruebas de manejo, envío de cotizaciones</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 p-0 m-auto d-flex align-items-center">
                            <div class="service-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="1s">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/industrias/AUTOMOTRIZ.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="salud" class="section bg-util-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="section-heading text-center mb-5 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h4>Salud</h4>
                        <div class="line-dec m-auto"></div>
                    </div>
                </div>
                <div class="col-lg-9 m-auto">
                    <p class="text text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                        Este sector es uno de los que más exigencias viene enfrentado en los últimos años producto de la crisis sanitaria del Covid-19, en la que se vio envuelta el mundo entero. Por ello, la demanda de una ágil y eficiente atención al cliente se ha vuelto el principal desafío de las clínicas, hospitales y demás centros de salud. En 3ERIZA, contamos con una solución especialmente diseñada para optimizar la atención a pacientes.
                    </p>
                </div>
                <div class="col-lg-12 col-xxl-10 m-auto">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="service-image wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/industrias/SALUD.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-5 d-flex align-items-center">
                            <div class="section-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                                <h4 class="fs-5">¿CÓMO TE PODEMOS AYUDAR?</h4>
                                <p class="text mb-2">
                                    Qnext Salud: un producto de Qnext Plus, diseñado para permitirle a tus pacientes realizar los procesos de programación de cita médica, consulta virtual y visualización del resumen de su atención en una misma plataforma.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="section-title text-center my-5">
                                <h4 class="fs-5 wow fadeInDown" data-wow-duration="1s" data-wow-delay="1s">Optimizar la experiencia de tus pacientes te permitirá:</h4>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="section-items d-flex ">
                                <div class="box-item d-flex flex-fill wow fadeInDown" data-wow-duration="1s" data-wow-delay="1s">
                                    <div class="icon"> <i class="lni lni-rocket"></i></div>
                                    <div class="flex-grow-1 text">
                                        <h4>Soporte</h4>
                                        <p>Aumentar la satisfacción del paciente</p>
                                    </div>
                                </div>
                                <div class="box-item d-flex flex-fill wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.2s">
                                    <div class="icon"><i class="lni lni-headphone-alt"></i></div>
                                    <div class="flex-grow-1 text">
                                        <h4>Soporte</h4>
                                        <p>Fidelizar al paciente</p>
                                    </div>
                                </div>
                                <div class="box-item d-flex flex-fill wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.4s">
                                    <div class="icon"> <i class="lni lni-flag-alt"></i></div>
                                    <div class="flex-grow-1 text">
                                        <h4>Soporte Comercial</h4>
                                        <p>Incrementar el número de atenciones</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</main>


<?php get_footer(); ?>