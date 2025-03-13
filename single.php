<?php get_header(); ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post(); ?>
                    <div class="card mb-4">
                        <div class="card-body">
                            <h1 class="card-title"><?php the_title(); ?></h1>
                            <p class="card-text"><?php the_content(); ?></p>
                        </div>
                    </div>
                <?php endwhile;
            else : ?>
                <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>