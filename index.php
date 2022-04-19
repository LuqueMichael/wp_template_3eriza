<?php
get_header();
$last_post = get_posts(array('numberposts' => 1));
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

?>

<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
  
<div id="blog" class="page-blog blog">
    <div class="post-heading-cover position-relative" style="z-index: 1050;background-image: url(<?= get_template_directory_uri() ?>/assets/images/quote-bg.png)">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="section-heading">
                        <h1>Utimas Publicaciones</h1>
                        <div class="line-dec"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">

            </div>
            <div class="col-lg-12 show-up wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                <div class="blog-posts m-0">
                    <div class="row position-relative">
                        <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
                                <div class="col-lg-6">
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
                                            <?php $tagsPost = get_the_category(); ?>
                                            <span class="category"><?= $tagsPost[0]->name ?></span>
                                            <span class="date"><?= get_the_date() ?></span>
                                            <a href="<?= the_permalink() ?>">
                                                <h4><?= the_title() ?></h4>
                                            </a>
                                            <div class="excerpt"><?= the_excerpt() ?></div>
                                        </div>
                                    </div>
                                </div>
                        <?php endwhile;
                        endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 show-up wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                <nav class="blog-pagination py-5 d-flex justify-content-center" aria-label="Pagination">
                    <?php get_template_part("template-parts/content", "pagination"); ?>
                </nav>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>