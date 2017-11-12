<!DOCTYPE html>

<?php

    $args = array(
        'post_type' => 'page',
        'p' => 5
    );
    $bg_query = new WP_query($args);
    if ( $bg_query->have_posts() ) :
        while ( $bg_query->have_posts() ) : $bg_query->the_post();
?>

<html lang="fr" style="background-image: url(<?php echo get_field('fond_page_accueil'); ?>);"> <!-- Affiche background -->

<?php endwhile; endif; wp_reset_query(); ?>

<head>
    <meta charset="UTF-8">
    <!--Configurer la page en Responsive Design-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Portfolio - Version Wordpress</title>
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/style.css">

    <?php wp_head(); ?> <!-- Rattacher les fichiers  -->
</head>

<body>
    <!-- Ouverture de la page -->
    <header>

        <h1>Hello ! My name is Nadia</h1>
        <p>Développeur FrontEnd</p>
        
        <!-- La navigation principale de la page -->
        <nav>
            <!--Integrer l'icone burger menu-->
            <i class="fa fa-bars" aria-hidden="true"></i>

            <?php wp_nav_menu( array(
                    'theme_location' => 'mainmenu'
                )); ?>
        </nav>
    </header>

    <span class="chevron-bottom"></span>