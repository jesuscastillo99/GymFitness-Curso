<?php
    get_header(); //esta funcion incluye el archivo header.php que tengas guardado
?>
    <main class="seccion contenedor">
        <ul class="listado-grid">

            <?php
                while ( have_posts()): the_post();
                    get_template_part('template-parts/blog');
                endwhile;
            ?>
        </ul>
        <?php
            the_posts_pagination();
        ?>
    </main>

<?php
    get_footer();
?>