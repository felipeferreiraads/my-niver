    <section class="contact" id="contato">
        <div class="container">
            <div class="info">
                <h2 class="title white left border-green">Entre em contato</h2>
                <div class="social">
                    <a href="#" target="_blank">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="#" target="_blank">
                        <i class="fa fa-linkedin"></i>
                    </a>
                    <a href="#" target="_blank">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="#" target="_blank">
                        <i class="fa fa-instagram"></i>
                    </a>
                </div>
            </div>
            <div class="form">
                <form class="form-contact js-form" action="<?php echo admin_url('admin-ajax.php') ?>" method="post" data-form-ajax="true">
                    <input type="hidden" name="action" value="form_contact">
                    <input type="text" name="name" placeholder="Nome" required>
                    <input type="email" name="email" placeholder="E-mail" required>
                    <textarea name="message" placeholder="Digite sua mensagem"></textarea>
                    <button type="submit" class="button green">Enviar</button>
                </form>
            </div>
        </div>
    </section>

    <footer>
        &copy; Copyright My Niver <?php echo date('Y'); ?> - Todos os direitos reservados
    </footer>

    <?php wp_footer(); ?>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bundle.min.js"></script>
</body>

</html>