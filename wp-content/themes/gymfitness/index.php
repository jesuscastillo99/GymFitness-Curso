<?php
    get_header(); //esta funcion incluye el archivo header.php que tengas guardado
?>

    <main>
        <?php
            while ( have_posts()): the_post();
                the_title();
                the_content();
            endwhile;
        ?>
    </main>

<?php
    get_footer();
?>