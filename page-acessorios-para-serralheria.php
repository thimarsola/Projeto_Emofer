<!--header-->
<?php get_header('page'); ?>
<!--end of header-->

<main id="main">
    <!--product-->            
    <section id="main_product">
        <div class="main_product_header">
            <div class="container">
                <header class="main_product_content_header">
                    <h1>Porta de Enrolar Automática</h1>
                </header>
            </div>
        </div>
        <!--container-->
        <div class="container">
            <!--row-->
            <div class="main_product_row">
                <!--content-->
                <div class="main_product_content">
                    <!-- text -->
                    <div class="main_product_content_text">
                        <div class="main_product_content_text_content">
                            <p>Trabalhamos com acessórios diversos para serralheria além de ferramentas elétricas de fabricantes reconhecidos como Bosh, Pado, Stanley, Estilofer, Eletrimer entre outras. Confira o nosso acervo:</p>
                            <br>
                            <p><strong>Confira o nosso acervo:</strong></p>
                            <ul>
                                <li>Mola de Aço</li>
                                <li>Lança Colonial</li>
                                <li>Zarcão</li>
                                <li>Rodízio</li>
                                <li>Trinco Zincado</li>
                                <li>Parafuso</li>
                                <li>Ferrolho</li>
                                <li>Luva Raspa Punho</li>
                                <li>Roldana</li>
                                <li>Galvanitex</li>
                                <li>Botina Bico Aço</li>
                                <li>Mola Aérea</li>
                                <li>Fechaduras</li>
                                <li>Eletrodo</li>
                                <li>Trena</li>
                                <li>Furadeira</li>
                                <li>Gonzo</li>
                                <li>Disco de corte</li>
                                <li>Trava Lateral</li>
                                <li>Esmerilhadeira</li>
                                <li>Máscara escurecimento automático</li>
                                <li>Chumbador</li>
                                <li>Inversora c/ Cabo</li>
                                <li>Broca</li>
                                <li>Morsa Bancada</li>
                                <li>Equipamentos de Segurança</li>
                                <li>Dobradiça</li>
                                <li>Veda calha tubo</li>
                                <li>Protetor perimetral</li>
                                <li>Porta eletrodo</li>
                                <li>Serra corte</li>
                                <li>Esquadro cabo alumínio</li>
                                <li>No Break</li>
                                <li>Compressor</li>
                                <li>Motor para porta automática</li>
                            </ul>
                            <br>
                            <p>E muito mais: contate-nos!</p>
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