<?php get_header();?>

<main>
    
        <h2 class="page-heading">All Projects</h2>
    

    <section>

        <?php 

        while (have_posts()) {
               the_post();
        ?>

        <div class="card">
            <div class="card-image">
                <a href="<?php echo the_permalink();?>">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>" alt="Card Image">
                </a>
            </div>

            <div class="card-description">
                <a href="<?php the_permalink();?>">
                    <h3><?php the_title();?></h3>
                </a>
                <p>
                    <?php echo wp_trim_words(get_the_excerpt(), 20);?>
                </p>
                <a href="<?php the_permalink();?>" class="btn-readmore">Read more</a>
            </div>
        </div>

        <?php 
        }
        wp_reset_query();
        ?>
    </section>
    <div class="pagination">
        <?php echo paginate_links();?>
    </div>

<?php get_footer(); ?>
