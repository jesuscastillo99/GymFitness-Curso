<?php
    get_header();
?> 


    <main class="contenedor seccion con-sidebar">
        <section class="contenido-principal">
            <?php
                get_template_part('template-parts/clase'); //codigo para consultar una página
            ?>
        </section>

        <?php
            get_sidebar('clases');
        ?>
        
    </main>
<?php
    get_footer();
?>