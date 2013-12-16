<?php
/*
  Template Name: evets-page
 */
get_header();
?>
<div id="page-content-container" class="wrap">
    <div id="main" role="main">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
                    <?php the_content('Read the rest of this entry &raquo;'); ?>
                </article>
                <?php
            endwhile;
        else:
            ?>
            <p>Sorry, no posts matched your criteria.</p>
        <?php endif; ?>

        <div id="events-tabs">
            <ul class="navigation">
                <li><a href="#tabs-1" title="">North America</a></li>
                <li><a href="#tabs-2" title="">Europe</a></li>
                <li><a href="#tabs-3" title="">Middle East</a></li>
                <li><a href="#tabs-4" title="">Asia Pacific</a></li>
                <li id="event-calendar"><a id="all-events-link" href="<?php echo get_site_url(); ?>/?page_id=259">View Event Calendar</a></li>
            </ul>
            <div id="tabs_container">
                <div id="tabs-1">
                    <?php
                    $folio_loop = new WP_Query(array(
                        'post_type' => 'himms_events',
                        'cat' => 4,
                        'posts_per_page' => -1,
                        'meta_query' => array(
                            'relation' => 'OR',
                            array(
                                'key' => 'meta_key',
                                'compare' => 'NOT EXISTS' // doesn't work
                            ),
                            array(
                                'key' => 'meta_key',
                                'value' => 'start_date2'
                            )
                        ),
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

                <div id="tabs-2">
                    <?php
                    $folio_loop2 = new WP_Query(array(
                        'post_type' => 'himms_events',
                        'cat' => 5,
                        'posts_per_page' => -1,
                        'meta_query' => array(
                            'relation' => 'OR',
                            array(
                                'key' => 'meta_key',
                                'compare' => 'NOT EXISTS' // doesn't work
                            ),
                            array(
                                'key' => 'meta_key',
                                'value' => 'start_date2'
                            )
                        ),
                    ));
                    ?>
                    <span style="display: block; height: 30px; clear: both"></span>
                    <?php while ($folio_loop2->have_posts()) : $folio_loop2->the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                            <section class="event-thubnail">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail(); ?>
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/Europe.png">
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
                <div id="tabs-3">
                    <?php
                    $folio_loop2 = new WP_Query(array(
                        'post_type' => 'himms_events',
                        'cat' => 6,
                        'posts_per_page' => -1,
                        'meta_query' => array(
                            'relation' => 'OR',
                            array(
                                'key' => 'meta_key',
                                'compare' => 'NOT EXISTS' // doesn't work
                            ),
                            array(
                                'key' => 'meta_key',
                                'value' => 'start_date2'
                            )
                        ),
                    ));
                    ?>
                    <span style="display: block; height: 30px; clear: both"></span>
                    <?php while ($folio_loop2->have_posts()) : $folio_loop2->the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                            <section class="event-thubnail">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail(); ?>
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/Middle_East.png">
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
                        </article>
                        <span style="display: block; height: 30px; clear: both"></span>
                    <?php endwhile; ?>

                </div>
                <div id="tabs-4">
                    <?php
                    $folio_loop4 = new WP_Query(array(
                        'post_type' => 'himms_events',
                        'cat' => 7,
                        'posts_per_page' => -1,
                        'meta_query' => array(
                            'relation' => 'OR',
                            array(
                                'key' => 'meta_key',
                                'compare' => 'NOT EXISTS' // doesn't work
                            ),
                            array(
                                'key' => 'meta_key',
                                'value' => 'start_date2'
                            )
                        ),
                    ));
                    ?>
                    <span style="display: block; height: 30px; clear: both"></span>
                    <?php while ($folio_loop4->have_posts()) : $folio_loop4->the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                            <section class="event-thubnail">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail(); ?>
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/Asia_Pacific.png">
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
                                        echo $date->format('F j, Y');
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





            </div><!--End tabs container-->
        </div>



    </div>
</div>
<?php get_footer(); ?>
