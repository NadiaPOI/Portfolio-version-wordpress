<!-- Ouverture de la page -->
    <?php get_header(); ?>

<!-- Contenu de la page -->
    <main>
    <?php
        if (have_posts() ) :
            while ( have_posts() ) : the_post();
    ?>
       

        
        <section class="profil">
            <h2 class="animated bounceInRight">Mon profil</h2>
            <?php echo get_field('paragraphe_profil');?>
        </section>

        <span class="chevron-bottom"></span>
        
        <section class="experience">
            <h2 class="animated bounceInRight">Mon expérience</h2>
            <ul>
                <?php echo get_field('liste_experience');?>
            </ul>
        </section>
        <?php endwhile; endif; ?>
    </main>

    <?php get_footer(); ?>
