    <footer class="footer contenedor">
        <hr>

        <div class="contenido-footer">
                    <?php
                        $args = array(
                            'theme-location' => 'menu-principal',
                            'container' => 'nav',
                            'container_class' => 'menu-principal'
                        );
                        wp_nav_menu($args); //funcion para mostrar un menu

                    ?>
                    <p class="copyright">Todos los derechos reservados. GymFitness <?php echo get_bloginfo('name') . " ". date('Y'); ?></p>
        </div>
        

    </footer>

    <?php wp_footer(); ?>

</body>
</html>