    <!-- Ouverture de la page -->
    <?php get_header(); ?>


 <!-- Contenu de la page -->
    <main class="contact">
        <h2 class="animated bounceInRight">Contactez moi</h2>

        <ul>
            <?php

                    $args = array(
                    'post_type' => 'contact'
                    );
                $contact = new WP_query($args);
                if ( $contact->have_posts() ) :
                    while ( $contact->have_posts() ) : $contact->the_post();
                ?>

            <li>
                <?php the_content();?>
                <h3><?php the_title();?></h3>
            </li>
            

            <?php endwhile; endif; wp_reset_query();  ?>

        </ul>
        <p>Un bonjour, un projet, une question ?</p>

        <?php
                if (have_posts() ) :
                    while ( have_posts() ) : the_post();
        ?>
        <?php the_content();?>

        <?php endwhile; endif; ?>
        
        <?php echo do_shortcode('[contact-form-7 id="6" title="Contact"]'); ?>
    </main>

    <?php get_footer(); ?>

    

