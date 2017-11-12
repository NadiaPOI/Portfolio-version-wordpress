
    <!-- Ouverture de la page -->
    <?php get_header(); ?>


    <?php
        $language = get_field('language');
    ?>

    <!-- Contenu de la page -->
    <main>        
        <section class="presentation">
            <h2 class="animated bounceInRight">Présentation</h2>
            <?php echo get_field('presentation');?>
            <!--  Affiche champs paragraphe presentation -->

            <ul> <!-- loupe 1 contenu presentation -->
                <?php

                    $args = array(
                    'post_type' => 'competences'
                    );
                $icones_presentation = new WP_query($args);
                if ( $icones_presentation->have_posts() ) :
                    while ( $icones_presentation->have_posts() ) : $icones_presentation->the_post();
                ?>

                <li>
                    <?php the_content();?>
                    <h3><?php the_title();?></h3>
                </li>
                
                <?php endwhile; endif; ?>
            </ul>       
                        
        </section>     
        
        <span class="chevron-bottom"></span>

        <section class="competences">
            <h2 class="animated bounceInRight">Mes compétences</h2>
            <article class="icones">
                <ul> <!-- loupe 2 contenu langages -->
                    <?php

                    $args = array(
                    'post_type' => 'languages'
                    );
                $icones_languages = new WP_query($args);
                if ( $icones_languages->have_posts() ) :
                    while ( $icones_languages->have_posts() ) : $icones_languages->the_post();
                ?>

                <li>
                    <?php the_content();?>
                    <h3><?php the_title();?></h3>
                </li>
                
                <?php endwhile; endif; ?>
                   
                </ul>
            </article>
            <aside class="description">

                <?php echo $language; ?>
                <!-- Affiche champ paragraphe languages -->
            </aside>
            
        </section>
        
    </main>

    <?php get_footer(); ?>

    

