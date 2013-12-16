<?php
/*
  Template Name: home-page
 */

get_header();
?>


<div class="wrap cf">

    <div class="home-page-slider">
        <?php echo do_shortcode('[camera slideshow ="my-first-slideshow"]'); ?>                        
    </div> 


    <div id="main" role="main">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>

                <?php the_content('Read the rest of this entry &raquo;'); ?>

            <?php endwhile; ?>


        <?php else : ?>

            <h2>Not Found</h2>
            <p>Sorry, but you are looking for something that isn't here.</p>
            <?php get_search_form(); ?>

        <?php endif; ?>
    </div>
</div>
<div class="horizontal-line-right"><div></div></div>
<div class="wrap cf">
    <div class="three-main-blocks cf">

        <div class="one-third-box">
            <a href="/?page_id=6"><img src="<?php bloginfo('template_directory'); ?>/img/membership-icon.png"/></a>
            <h3>Membership</h3>
            <div>

                <span class="blue">MOVE YOUR COMPANY,<br/>
                    YOUR  CAUSE, </span>
                <span class="light-blue">YOUR <br/> CAREER FORWARD</span>
            </div>
        </div>

        <div class="one-third-box">
            <a href="/?page_id=8"><img src="<?php bloginfo('template_directory'); ?>/img/marketing-icon.png"/></a>
            <h3>Marketing</h3>
            <div>

                <span class="blue">ENGAGE THE INDUSTRY   <br/>
                    WITH</span> <span class="light-blue">POWERFUL <br/>
                    OPPORTUNITIES</span>
            </div>
        </div>

        <div class="one-third-box">
            <a href="/?page_id=191"><img src="<?php bloginfo('template_directory'); ?>/img/audience-icon.png"/></a>
            <h3>Audience</h3>
            <div>

                <span class="blue">MEET THE COMMUNITY <br/> THAT'S </span>
                <span class="light-blue">DRIVING <br/> TRANSFORMATION</span>
            </div>
        </div>

    </div>
</div>


<?php get_footer(); ?>


