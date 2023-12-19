<?php get_header(); ?>
<div class="container">
    <div class="row">
        <?php
        $i = 1;
        if (have_posts()) : the_posts_pagination(array(
                'show_all' => false,
                'end_size' => 1,
                'mid_size' => 2,
                'prev_next' => true,
                'prev_text' => __('<<'),
                'next_text' => __('>>'),
                'type' => 'list',
            ));
            while (have_posts()) : the_post(); ?>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                            </div>
                            <div class="card-body">
                                <?php if (has_post_thumbnail()) :
                                    the_post_thumbnail('thumbnail', array('class' => 'rounded float-start me-3 mt-1 p-0'));
                                else : ?>
                                    <img class="rounded float-start me-3 mt-1 p-0" width="150" height="150" src="https://w.forfun.com/fetch/43/43a27bd5da0b58a62ffe0de6daf6add5.jpeg" alt="lorem photos">
                                <?php endif; ?>
                                <p class="card-text m-0 p-0"><?php the_excerpt() /* the_content('') */; ?></p>
                                <div class="card-footer">
                                    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Перейти</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <?php endwhile;
            the_posts_pagination(array(
                'show_all' => false,
                'end_size' => 1,
                'mid_size' => 2,
                'prev_next' => true,
                'prev_text' => __('<<'),
                'next_text' => __('>>'),
                'type' => 'list',
            ));
        endif; ?>

    </div>
</div>
<?php get_footer(); ?>