<!--header-->
<?php get_header('page'); ?>
<!--end of header-->

<main id="main">
    <!--products-->
    <section id="main_products">
        
        <!-- header -->
        <header class="main_products_header">
            <div class="container">
                <h1>Nossos Produtos</h1>
            </div>
        </header>
        <!--end of header-->
        
        <!-- content -->
        <div class="main_products_content">
            <div class="container">
                <p>Disponibilizamos a pronta entrega, Perfil W, cantoneira, Ferro Tee, Ferro Chato, Ferro Redondo, Tubo Redondo, Tubo Quadrado, Tubo retangular, Perfil U e Painel Wall. Possuímos também um diversificado acervo de ferros laminados. Entre em contato conosco para conhecer nossas condições de entrega.</p>
                <!-- grid -->
                <div class="main_products_content_grid">
                    <!-- products card -->
                    <article class="main_products_content_grid_card">
                        <img src="<?= get_template_directory_uri(); ?>/_cdn/img/img-produto-chapas.jpg" alt="Lojas Emofer - Chapas">
                        <h2>Chapas</h2>
                        <a href="<?= get_permalink(get_page_by_title('chapas')); ?>" class="btn btn-color1" title="Lojas Emofer - Chapas" target="_blank">Saiba mais</a>
                    </article>
                    <!-- products card -->
                    <article class="main_products_content_grid_card">
                        <img src="<?= get_template_directory_uri(); ?>/_cdn/img/img-produto-cantoneiras.jpg" alt="Lojas Emofer - Cantoneiras">
                        <h2>Cantoneiras</h2>
                        <a href="<?= get_permalink(get_page_by_title('cantoneiras')); ?>" class="btn btn-color1" title="Lojas Emofer - Cantoneiras" target="_blank">Saiba mais</a>
                    </article>
                    <!-- products card -->
                    <article class="main_products_content_grid_card">
                        <img src="<?= get_template_directory_uri(); ?>/_cdn/img/img-produto-barras.jpg" alt="Lojas Emofer - Barras">
                        <h2>Barras</h2>
                        <a href="<?= get_permalink(get_page_by_title('barras')); ?>" class="btn btn-color1" title="Lojas Emofer - Barras" target="_blank">Saiba mais</a>
                    </article>
                    <!-- products card -->
                    <article class="main_products_content_grid_card">
                        <img src="<?= get_template_directory_uri(); ?>/_cdn/img/img-produto-tubos-industriais.jpg" alt="Lojas Emofer - Tubos Industriais">
                        <h2>Tubos Industriais</h2>
                        <a href="<?= get_permalink(get_page_by_title('tubos industriais')); ?>" class="btn btn-color1" title="Lojas Emofer - Tubos Industriais" target="_blank">Saiba mais</a>
                    </article>
                    <!-- products card -->
                    <article class="main_products_content_grid_card">
                        <img src="<?= get_template_directory_uri(); ?>/_cdn/img/img-produto-vigas.jpg" alt="Lojas Emofer - Vigas">
                        <h2>Vigas</h2>
                        <a href="<?= get_permalink(get_page_by_title('vigas')); ?>" class="btn btn-color1" title="Lojas Emofer - Vigas" target="_blank">Saiba mais</a>
                    </article>
                    <!-- products card -->
                    <article class="main_products_content_grid_card">
                        <img src="<?= get_template_directory_uri(); ?>/_cdn/img/img-produto-perfis-w.jpg" alt="Lojas Emofer - Perfis W">
                        <h2>Perfis W</h2>
                        <a href="<?= get_permalink(get_page_by_title('perfis w')); ?>" class="btn btn-color1" title="Lojas Emofer - Perfis W" target="_blank">Saiba mais</a>
                    </article>
                    <!-- products card -->
                    <article class="main_products_content_grid_card">
                        <img src="<?= get_template_directory_uri(); ?>/_cdn/img/img-produto-lamina-raiada.jpg" alt="Lojas Emofer - Lâmina Raiada">
                        <h2>Lâmina Raiada</h2>
                        <a href="<?= get_permalink(get_page_by_title('lamina raiada')); ?>" class="btn btn-color1" title="Lojas Emofer - Lâmina Raiada" target="_blank">Saiba mais</a>
                    </article>
                    <!-- products card -->
                    <article class="main_products_content_grid_card">
                        <img src="<?= get_template_directory_uri(); ?>/_cdn/img/img-produto-porta-de-enrolar-automatica.jpg" alt="Lojas Emofer - Porta de Enrolar Automática">
                        <h2>Porta de Enrolar Automática</h2>
                        <a href="<?= get_permalink(get_page_by_title('porta de enrolar automatica')); ?>" class="btn btn-color1" title="Lojas Emofer - Porta de Enrolar Automática" target="_blank">Saiba mais</a>
                    </article>
                    <!-- products card -->
                    <article class="main_products_content_grid_card">
                        <img src="<?= get_template_directory_uri(); ?>/_cdn/img/img-produto-acessorios-para-serralheria.jpg" alt="Lojas Emofer - Acessórios para Serralheria">
                        <h2>Acessórios para Serralheria</h2>
                        <a href="<?= get_permalink(get_page_by_title('acessorios para serralheria')); ?>" class="btn btn-color1" title="Lojas Emofer - Acessórios para Serralheria" target="_blank">Saiba mais</a>
                    </article>
                </div>
            </div>
        </div>
        <!--end of content-->
    </section>
    <!--end of products-->
    
    <!--payment-->
    <?php get_template_part('template-parts/content', 'payment'); ?>
    <!--end of payment-->
</main>
<!--end of main-->

<!--footer-->
<?php get_footer(); ?>
<!--end of footer-->