<?php get_header(); ?>

<!-- Contenu de la page -->
    <main class="pagePortfolio">
        <h2 class="animated bounceInRight">Portfolio</h2>
        <p class=" animated bounceInLeft">Découvrez mes réalisations</p>
        <section>

        	<?php
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post();
            ?>

        	<div class="modal">
                <div>
                    <i class="fa fa-times" aria-hidden="true"></i>
                    <h3><?php the_title();?></h3>'
                   	<img src="<?php echo get_field('fond-contenu'); ?>" alt="Image"> <!-- Renvoi le champ image du projet -->
                    <p><?php the_content();?></p>
                    <a href="<?php echo get_field('lien_url'); ?>" target="_blank">Voir le projet </a> <!-- Renvoi les champs liens du projet -->
                </div>
	        </div>


            <article>
                <div>
                    <h3><?php the_title();?></h3>
                    <button>Voir le projet</button>
                </div>
                <span style="background: url(<?php echo get_field('fond_projet'); ?>) no-repeat center center fixed; background-size:cover; min-height:100%"></span>
            </article>

            <?php endwhile; endif; wp_reset_query(); ?>
            
        </section>
    </main>

<?php get_footer(); ?>
