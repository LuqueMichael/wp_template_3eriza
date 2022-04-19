<?php

/**
 * @package WordPress
 * @subpackage 3ERIZA
 * @since 3ERIZA
 */
?>
<?php get_header(); ?>

<div id="blog" class="page-blog">
    <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
        <?php $img_bg = (get_the_post_thumbnail_url()) ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/assets/images/default-bg.jpg'; ?>
            <div class="post-heading-cover position-relative" style="z-index: 1050;background-image: url(<?= $img_bg ?>)">
                <div class="container">
                    <div class="row">
                        <!--<div class="col-lg-12">
                            <nav class="breadcrumb">
                                <?php $tagsPost = get_the_category($last_post[0]->ID); ?>
                                <a class="breadcrumb-item" href="<?= home_url() ?>" title="<?= get_bloginfo('name') ?>">Home</a>                                
                                <span class="breadcrumb-item active"><?php the_title() ?></span>
                            </nav>
                        </div>-->
                        
                        <div class="col-lg-8 m-auto">
                            <div class="section-heading m-0 my-2">
                                <h1><?php the_title() ?></h1>
                            </div>
                        </div>  
                        <div class="col-lg-8 m-auto">
                            <span class="meta">
                                Publicado por <a href="#"><?= get_the_author_meta(the_author()) ?></a>
                                en <?= the_time('d F Y'); ?>
                            </span>                            
                        </div>                   
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 m-auto mb-5">
                        <!-- POST -->
                        <article>                            
                            <?= the_content() ?>
                        </article>
                    </div>

                    <div class="col-lg-12 mb-5">
                        <span class="tags"></span>

                    </div>
                </div>
            </div>        
    <?php endwhile;
    endif; ?>
</div>



<?php get_footer(); ?>