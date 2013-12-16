<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
get_header();
?>
<div id="page-content-container" class="wrap">
    <div id="main" class="single-event-page" role="main">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">

                        <!-- Display featured image in right-aligned floating div -->
                        <div class="thumbnail">
                            <?php the_post_thumbnail(); ?>
                        </div>

                        <h1><span class="blue"><?php the_title(); ?></span></h1>

                        <!-- Display Title and Author Name -->
                        <strong>
                            <?php
                            if (get_field('start_date2')) {
                                $date = DateTime::createFromFormat('Ymd', get_field('start_date2'));
                                echo $date->format('F j, Y');
                            }
                            ?> 
                            -
                            <?php
                            if (get_field('end_date2')) {
                                $date = DateTime::createFromFormat('Ymd', get_field('start_date2'));
                                echo $date->format('F j, Y');
                            }
                            ?>
                        </strong>


                    </header>

                    <!-- Display movie review contents -->
                    <div class="entry-content"><?php the_content(); ?></div>
                </article>

                <?php
            endwhile;
        else:
            ?>

            <p>Sorry, no posts matched your criteria.</p>

        <?php endif; ?>

    </div>
</div>

<?php get_footer(); ?>
