<?php
// Check if the post is password protected
if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php if (have_comments()) : ?>
        <h2 class="comments-title">
            <?php
            $comments_number = get_comments_number();
            if (1 === $comments_number) {
                printf(_x('One Reply to &ldquo;%s&rdquo;', 'comments title', 'helloTheme'), get_the_title());
            } else {
                printf(
                    _nx(
                        '%1$s Reply to &ldquo;%2$s&rdquo;',
                        '%1$s Replies to &ldquo;%2$s&rdquo;',
                        $comments_number,
                        'comments title',
                        'helloTheme'
                    ),
                    number_format_i18n($comments_number),
                    get_the_title()
                );
            }
            ?>
        </h2>

        <ol class="comment-list">
            <?php
            wp_list_comments(array(
                'style'      => 'ol',
                'short_ping' => true,
            ));
            ?>
        </ol>

        <?php the_comments_navigation(); ?>


        <?php
        // Check for comment pagination
        if (get_comment_pages_count() > 1 && get_option('page_comments')) :
        ?>
            <nav class="comment-navigation" role="navigation">
                <h2 class="screen-reader-text"><?php _e('Comment navigation', 'helloTheme'); ?></h2>
                <div class="nav-links">
                    <?php
                    if ($prev_link = get_previous_comments_link(__('&larr; Older Comments', 'helloTheme'))) :
                        printf('<div class="nav-previous">%s previous</div>', $prev_link);
                    endif;

                    if ($next_link = get_next_comments_link(__('Newer Comments &rarr;', 'helloTheme'))) :
                        printf('<div class="nav-next">%s next</div>', $next_link);
                    endif;
                    ?>
                </div><!-- .nav-links -->
            </nav><!-- .comment-navigation -->
        <?php endif; ?>

        <?php if (!comments_open()) : ?>
            <p class="no-comments"><?php _e('Comments are closed.', 'helloTheme'); ?></p>
        <?php endif; ?>

    <?php endif; ?>

    <?php comment_form(); ?>

</div><!-- #comments -->