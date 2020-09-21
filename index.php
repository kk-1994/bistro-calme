<?php get_header(); ?>

<h2 class="pageTitle">最新情報<span>NEWS</span></h2>

<main class="main">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-9">
                <h2 class="main_title"><?php wp_title(''); ?></h2>
                <div class="row">

                    <?php if ( have_posts() ); ?>
                        <?php while ( have_posts() ) : the_posts(); ?>
                            <div class="col-md-4">
                                <?php get_template_part('template_parts/loop', 'news'); ?>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
            </div>

            <div class="col-12 col-md-3">
                <?php get_sidebar('categories'); ?>
                <?php get_sidebar('archives'); ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>

