<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main container mx-auto">

        <?php if (have_posts()) : ?>

            <div class="row">

                <?php while (have_posts()) : the_post(); ?>
                    <div class="col-md-4 mb-4 ">
                        <div id="post-<?php the_ID(); ?>" <?php post_class('card'); ?>>
                            <div class="card-body">
                                <header class="card-header">
                                    <?php the_title('<h2 class="card-title">', '</h2>'); ?>
                                </header><!-- .card-header -->

                                <div class="card-content">
                                    <?php the_excerpt(); ?>
                                </div><!-- .card-content -->

                                <footer class="card-footer">
                                    <a href="<?php the_permalink(); ?>" class="btn btn-primary"><?php _e('Read More', 'helloTheme'); ?></a>
                                    <?php edit_post_link(__('Edit', 'helloTheme'), '<span class="edit-link">', '</span>'); ?>
                                </footer><!-- .card-footer -->
                            </div><!-- .card-body -->
                        </div><!-- #post-## -->
                    </div><!-- .col-md-4 -->
                <?php endwhile; ?>
            </div><!-- .row -->
            <div class="col-12">
                <?php
                the_posts_pagination(array(
                    'mid_size'  => 2,
                    'prev_text' => __('« Previous', 'helloTheme') . ' <i class="fas fa-arrow-left"></i>',
                    'next_text' => '<i class="fas fa-arrow-right"></i> ' . __('Next »', 'helloTheme'),
                ));
                ?>
            </div>

            <?php the_posts_navigation(); ?>

        <?php else : ?>

            <article class="no-posts">
                <header class="entry-header">
                    <h1 class="entry-title"><?php _e('Nothing Found', 'helloTheme'); ?></h1>
                </header><!-- .entry-header -->

                <div class="entry-content">
                    <p><?php _e('It seems we can’t find what you’re looking for. Perhaps searching can help.', 'helloTheme'); ?></p>
                    <?php get_search_form(); ?>
                </div><!-- .entry-content -->
            </article><!-- .no-posts -->

        <?php endif; ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>