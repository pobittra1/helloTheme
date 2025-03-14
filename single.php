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
                        <div class="about-author text-muted mt-4">
                            <h5 class="card-subtitle mb-2 text-center">About the Author</h5>
                            <div class="author-image">
                                <img src="<?php echo get_avatar_url(get_the_author_meta('ID'), ['size' => '64']); ?>" class="img-fluid rounded-circle" alt="<?php the_author(); ?>">
                            </div>
                            <span>Posted by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> on <?php the_date(); ?></span>
                            <p><?php the_author_meta('description'); ?></p>
                        </div>
                        <div class="card-footer mt-4">
                            <h5 class="card-subtitle mb-2 text-center">Comments</h5>
                            <?php
                            if (comments_open() || get_comments_number()) :
                                comments_template();
                            else :
                                echo '<p class="text-center">Comments are closed.</p>';
                            endif;
                            ?>
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