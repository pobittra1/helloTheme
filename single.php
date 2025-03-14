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
                            <div class="share-icons">
                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" target="_blank">
                                    <i class="fab fa-facebook-f"></i>facebook
                                </a>
                                <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>" target="_blank">
                                    <i class="fab fa-twitter"></i>twitter
                                </a>
                                <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode(get_permalink()); ?>" target="_blank">
                                    <i class="fab fa-linkedin-in"></i>linkedin
                                </a>
                            </div>
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