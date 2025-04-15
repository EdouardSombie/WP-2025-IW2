<?php
// Template pour afficher les articles seuls
// Par défaut WP crée une variable $post qui corresond au post courant : utilisons la...
get_header();
?>

<main>

    <h1><?= $post->post_title ?></h1>
    <h1><?php the_title() ?></h1>
    <div class="post-meta">
        <div class="author-meta">
            <?php
            // récuperer l'id de l'auteur 
            // ap partir de cet ID, afficher le nickname de l'auteur (dans ses meta-données)
            echo the_author();
            ?>
        </div>
        <time>
            <?= wp_date('j F Y', strtotime($post->post_date)); // la variable $post est automatiquement créée par WP 
            ?>
        </time>
    </div>
    <div>
        <?php the_post_thumbnail(); ?>
    </div>
    <div>
        <?= the_content() ?>
    </div>
</main>


<?php get_footer() ?>