<?php get_header(); ?>
<div class="container">
    <div class="row">
        <?php
        $i = 1;
        while (have_posts()) : the_post(); ?>
            <div class="col-md-12">
                <div class="card" style="width: auto">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title();?></h5>
                        <p class="card-text"><?php the_content(''); ?></p>
                    </div>
                </div>
            </div>
        <?php endwhile;?>
    </div>
</div>
<?php get_footer(); ?>