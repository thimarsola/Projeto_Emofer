<!--header-->
<?php get_header('page'); ?>
<!--end of header-->

<main id="main">
    <!--product-->
    <section id="main_product">
        <div class="main_product_header">
            <div class="container">
                <header class="main_product_content_header">
                    <h1>Perfis W</h1>
                </header>
            </div>
        </div>
        <!--container-->
        <div class="container">
            <p>Confira nossa tabela de referência para perfis W nos diversos tipos que trabalhamos.</p>
            <p>Caso necessite de mais informações, entre em contato, estamos de prontidão para atendê-lo.</p>
            <!--row-->
            <div class="main_product_row">
                <!--content-->
                <div class="main_product_content">
                    <a href="<?= get_template_directory_uri(); ?>/perfisw.pdf" class="btn btn-color1" target="_blank">Ver PDF expandido</a>
                    <!-- text -->
                    <div class="main_product_content_text">
                        <iframe src="<?= get_template_directory_uri(); ?>/perfisw.pdf"></iframe>
                    </div>
                </div>
                <!--end of content-->

                <!--aside-->
                <aside class="main_product_aside">
                    <!-- menu -->
                    <div class="main_product_aside_menu">
                        <!-- logo -->
                        <div class="main_product_aside_menu_logo">
                            <img src="<?= get_template_directory_uri(); ?>/_cdn/img/logo.svg" alt="Logo Lojas Emofer">
                        </div>
                        <!-- header -->
                        <header class="main_product_aside_menu_header">
                            <h2>Conheça os nossos Produtos</h2>
                        </header>
                        <!-- list -->
                        <div class="main_product_aside_menu_list">
                            <!--products list-->
                            <?php get_template_part('template-parts/content', 'products-list'); ?>
                            <!--end of product list-->
                        </div>
                    </div>
                    <!-- contact -->
                    <div class="main_product_aside_contact">
                        <!-- header -->
                        <header class="main_product_aside_contact_header">
                            <h2>Fale conosco</h2>
                        </header>
                        <!-- content -->
                        <div class="main_product_aside_contact_content">
                            <a href="tel:1136026440">(11) 3602-6440</a>
                        </div>
                    </div>
                </aside>
                <!--end of aside-->
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <!--end of product-->

    <!--payment-->
    <?php get_template_part('template-parts/content', 'payment'); ?>
    <!--end of payment-->
</main>

<!--footer-->
<?php get_footer(); ?>
<!--end of footer-->