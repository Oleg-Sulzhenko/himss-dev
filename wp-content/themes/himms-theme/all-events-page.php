<?php
/*
  Template Name: all-evets-page
 */
get_header();
?>
<div id="page-content-container" class="wrap">
    <div id="main" role="main" class="all-events-page">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
                    <?php the_content('Read the rest of this entry &raquo;'); ?>
                </article>
                <span><a href="<?php echo get_page_link(10); ?>">&larr; View Events by Region</a></span>
                <?php
            endwhile;
        else:
            ?>
            <p>Sorry, no posts matched your criteria.</p>
        <?php endif; ?>

        <?php
        $folio_loop = new WP_Query(array(
            'post_type' => 'himms_events',
            'posts_per_page' => -1
        ));
        ?>
        <span style="display: block; height: 30px; clear: both"></span>
        <?php while ($folio_loop->have_posts()) : $folio_loop->the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <section class="event-thubnail">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail(); ?>
                    <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/North_America.png">
                    <?php endif; ?>
                </section>
                <section class="event-entry-box">
                    <h1><a href="<?php the_permalink(); ?>"><span class="blue"><?php the_title(); ?></span></a></h1>
                    <strong>
                        <?php
                        if (get_field('start_date2')) {
                            $date = DateTime::createFromFormat('Ymd', get_field('start_date2'));
                            echo $date->format('F j, Y');
                        }
                        ?> 
                        <?php
                        if (get_field('end_date2')) {
                            $date = DateTime::createFromFormat('Ymd', get_field('end_date2'));
                            echo $date->format('- F j, Y');
                        }
                        ?>
                    </strong>

                    <section class="entry-content">
                        <p><?php
                            $words = explode(" ", strip_tags(get_the_content()));
                            $content = implode(" ", array_splice($words, 0, 40));
                            echo $content;
                            ?> ...</p>
                        <span class="read_more blue">
                            <a href="<?php the_field("read_more_link"); ?>">Find out more &rarr;</a>
                        </span>
                    </section>
                </section>
            </article>
            <span style="display: block; height: 30px; clear: both"></span>
        <?php endwhile; ?>

    </div>
</div>
<?php get_footer(); ?>
