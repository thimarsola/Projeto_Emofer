<!--header-->
<?php get_header('page'); ?>
<!--end of header-->

<main id="main">
    <!--product-->
    <section id="main_product">
        <div class="main_product_header">
            <div class="container">
                <header class="main_product_content_header">
                    <h1>Lâmina Raiada</h1>
                </header>
            </div>
        </div>

        <div class="container">
            <!--row-->
            <div class="main_product_row">
                <!--content-->
                <div class="main_product_content">
                    <!-- text -->
                    <div class="main_product_content_text">
                        <!-- card -->
                        <div class="card">
                            <h2>Lâmina Raiada Normal de #24 à #26</h2>
                            <img src="<?= get_template_directory_uri(); ?>/_cdn/img/img-lamina-raiada-normal.jpg" alt="Lâmina Raiada - Lojas Emofer">
                        </div>
                        <!-- card -->
                        <div class="card">
                            <h2>Lâmina Meia Cana com Micro Furo Esp. #22</h2>
                            <img src="<?= get_template_directory_uri(); ?>/_cdn/img/img-lamina-meia-cana-raiada.jpg" alt="Lâmina Meia Cana com Micro Furo - Lojas Emofer">
                            <p><small>(Para portas de enrolar automática)</small></p>
                        </div>
                        <!-- card -->
                        <div class="card">
                            <h2>Lâmina Meia Cana Cega Esp. #22</h2>
                            <img src="<?= get_template_directory_uri(); ?>/_cdn/img/img-lamina-meia-cana-cega.jpg" alt="Lâmina Meia Cana Cega - Lojas Emofer">
                            <p><small>(Para portas de enrolar automática)</small></p>
                        </div>
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
    </section>
    <!--end of product-->

    <!--payment-->
    <?php get_template_part('template-parts/content', 'payment'); ?>
    <!--end of payment-->
</main>

<!--footer-->
<?php get_footer(); ?>
<!--end of footer-->