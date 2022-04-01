<hr class="my-5">
<section class="comments">
    <h5 class="mb-5"> <?php comments_number('No existen comentarios.', 'Un comentario', '% Comentarios'); ?></h5>
 
    <?php
    wp_list_comments(array(
        'callback' => function ($comment, $args, $depth) { ?>

        <div class="d-flex comments">
            <div class="flex-shrink-0 image">
                <?php
                if ($args['avatar_size'] != 0) {
                    echo get_avatar($comment, $args['avatar_size']);
                }
                ?>
            </div>
            <div class="flex-grow-1 ms-3 data">
                <h5 class="mt-0 mb-2">
                    <?php
                    printf(__('%s'), get_comment_author());
                    ?>
                </h5>
                <?php
                if ($comment->comment_approved == '0') { ?>
                    <em><?php _e('Comentario en espera de aprobación'); ?></em><br /><?php
                                                                                    } ?>

                <?php comment_text(); ?>

                <span>
                    <?php
                    comment_reply_link(
                        array_merge(
                            $args,
                            array(
                                'reply_text' => 'Responder',
                                'depth'     => $depth,
                                'max_depth' => $args['max_depth']
                            )
                        )
                    ); ?>
                </span>

                <span>
                    <?php
                    edit_comment_link(__('Editar'), '  ', ''); ?>
                </span>
            </div>
        </div>
    <?php }
    ));
    ?>

    
<?php comment_form(); ?>
    </sectiion>