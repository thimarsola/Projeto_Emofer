<!--header-->
<?php get_header('error'); ?>
<!--end of header-->



<main id="main">

    <div class="container">
        <div class="content">
            <img src="<?= get_template_directory_uri(); ?>/_cdn/img/vt-error.svg" alt="Erro 404">
            <div class="text">
                <p>A página que você está procurando não existe. Você pode ter digitado o endereço errado ou a página pode ter sido removida.</p>
            </div>
            <a href="<?= get_home_url(); ?>" class="btn btn-color1">Voltar ao início</a>
        </div>
    </div>

</main>

<!--footer-->
<?php get_footer(); ?>
<!--end of footer-->