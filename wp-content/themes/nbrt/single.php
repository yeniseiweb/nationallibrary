<?php get_header(); ?>
<div class="container">
    <div class="row">
        <?php
        $i = 1;
        while (have_posts()) : the_post(); ?>
            <div class="col-md-12">
                <div class="card" style="width: auto">
                    <?php if (has_post_thumbnail()) : the_post_thumbnail();
                    else : ?>
                        <img src="https://w.forfun.com/fetch/43/43a27bd5da0b58a62ffe0de6daf6add5.jpeg" alt="lorem photos">
                    <?php endif; ?>
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <p class="card-text"><?php the_content(''); ?></p>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>
<?php get_footer(); ?>