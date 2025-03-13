<?php get_header() ?>

<div class="page-banner bg-success" style="min-height: 400px; padding-top: 200px; text-align: center; color: white;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2><?php the_title() ?></h2>
            </div>
        </div>
    </div>
</div>


<?php
while (have_posts()) :
    the_post();

    get_template_part('template-parts/page/content', 'page');

    // Display comments if they are open or if there is at least one comment
    if (comments_open() || get_comments_number()) :
        comments_template();
    endif;

endwhile;
?>

</main>
</div>

<?php get_footer() ?>