<?php
/*
Template Name: Empleos Page
*/
?>

<?php

get_header();

?>
<main class="page-blog">


    <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2>¡Únete a la 3Bu 3eriza!</h2>
                                        <p>En nuestra 3Bu no solo encontrarás oportunidades para crecer profesionalmente con grandes líderes, sino podrás desarrollarte personal y profesionalmente</p>
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

    <section class="section testimonials bg-util-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="section-heading text-center mb-5 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h4>Se parte de la 3Bu 3eriza</h4>
                        <div class="line-dec m-auto"></div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div id="empleos" class="owl-carousel wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s"">
                        <div class=" item">
                        <div class="shadow-effect">
                            <a class="play-btn" href="!#" data-video-d="9nfWDIh_qm8" data-video-m="LrSHhRlQTws"></a>
                            <img class="img-circle" src="<?= get_template_directory_uri() ?>/assets/images/empleo/video_1.png" alt="">
                        </div>
                        <div class="testimonial-name">CALL CENTER</div>
                    </div>
                    <div class="item">
                        <div class="shadow-effect">
                            <a class="play-btn" href="!#" data-video-d="r079JXKifhg" data-video-m="47Lo6RehYNI"></a>
                            <img class="img-circle" src="<?= get_template_directory_uri() ?>/assets/images/empleo/video_2.png" alt="">
                        </div>
                        <div class="testimonial-name">CALL CENTER</div>
                    </div>
                    <div class="item">
                        <div class="shadow-effect">
                            <a class="play-btn" href="!#" data-video-d="KeEpPWJxwr0" data-video-m="JZrCE70Q4NU"></a>
                            <img class="img-circle" src="<?= get_template_directory_uri() ?>/assets/images/empleo/video_3.png" alt="">
                        </div>
                        <div class="testimonial-name">CALL CENTER</div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Modal -->
    <div class="modal fade" id="mediaModal" tabindex="-1" aria-labelledby="mediaModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content position-relative shadow-lg">
                <a href="!#" data-bs-dismiss="modal" class="btn btn-secondary close-btn-modal"><i class="lni lni-close"></i></a>
                <div id="player"></div>

            </div>
        </div>
    </div>

</main>

<script>
    // 2. This code loads the IFrame Player API code asynchronously.
    var tag = document.createElement('script');

    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    // 3. This function creates an <iframe> (and YouTube player)
    //    after the API code downloads.
    var player, video_id

    function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
            height: '640',
            width: '100%',
            videoId: video_id,
            events: {
                'onReady': onPlayerReady
            }
        });
    }

    // 4. The API will call this function when the video player is ready.
    function onPlayerReady(event) {
        event.target.playVideo();
    }

    function stopVideo() {
        player.stopVideo();
    }

    document.querySelector('#empleos').addEventListener('click', (e) => {
        if (e.target.classList.contains('play-btn')) {
            if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) || document.body.clientWidth < 992) {
                video_id = e.target.getAttribute('data-video-m')
            } else {
                video_id = e.target.getAttribute('data-video-d')
            }           

            player.loadVideoById(video_id, 0, "large")
        }
    })
    var mediaModal = document.getElementById('mediaModal')
    mediaModal.addEventListener('hidden.bs.modal', function(event) {
        stopVideo()
    })
</script>

<?php get_footer(); ?>