<?php get_header(); ?>
<div class="container">
    <div class="row">
        <?php
        $i = 1;
        if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="col-md-12">
                <div class="card" style="width: auto">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h5>
                        <p class="card-text"><?php the_excerpt('Читать далее...') /* the_content('') */;?></p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Перейти</a>
                    </div>
                </div>
            </div>
        <?php endwhile;
        endif; ?>
    </div>
</div>
<?php get_footer(); ?>