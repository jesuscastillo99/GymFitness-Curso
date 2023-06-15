<?php
    get_header(); //esta funcion incluye el archivo header.php que tengas guardado
?>
    <main class="seccion contenedor">
        <?php
            $categoria = get_queried_object();
        ?>
        <h2 class="text-primary text-center">Categoria: <?php echo $categoria->name; ?></h2>
        <ul class="listado-grid">

            <?php
                while ( have_posts()): the_post();
                    get_template_part('template-parts/blog');
                endwhile;
            ?>
        </ul>
    </main>

<?php
    get_footer();
?>