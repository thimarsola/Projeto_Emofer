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
                            <p>Hoje em dia sabemos que a preocupação com a segurança é fundamental em qualquer negócio. Pensando nisso, a Loja Emofer vem oferecer mais um serviço reconhecido por sua qualidade. Possuímos vasta experiência na fabricação e execução de portas de enrolar automáticas, o que nos permite oferecer um preço justo, qualidade e garantia do serviço prestado.</p>
                            <br>
                            <p>Trabalhamos com os modelos meia cana, micro perfurada ou meia cana cega galvanizada. Nosso processo de pintura eletrostática a pó nos possibilita pintar as portas na cor que o cliente desejar.</p>
                            <br>
                            <p>Com tantos anos no mercado, atendemos clientes diversificados com os quais estabelecemos uma relação de confiança, assim como Lojas Renner, Jedal Redentor, Caedu, Paqueta Calçados, Divolto, Construpoli, Preçolandia, Riachuelo, Pernambucanas, Tecnisa, Etna, C&A, TokStok, Vivara e Lojas Marisa.</p>
                            <br>
                            <p><strong>Nosso processo de fabricação é composto por:</strong></p>
                            <ul>
                                <li>Cortina de Lâminas Meia Cana</li>
                                <li>Eixo de Sustentação compatível com o peso da porta</li>
                                <li>Guias laterais embutidas na parede ou na coluna com com protetor anti-ruído</li>
                                <li>Motor elétrico para acionamento da porta compatível com o peso da mesma</li>
                                <li>Soleira emborrachada para não danificar o piso do cliente;</li>
                                <li>Central eletrônica com dois controles remotos para acionamento a distância;</li>
                                <li>Botoeira interna para acionamento manual do motor;</li>
                                <li>Portinhola instalada na porta (caso necessário) para saída dos clientes e para possibilitar também maior segurança no fechamento diário da loja;</li>
                                <li>Nobreak para prevenção de queda de energia (opcional, cobrado a parte)</li>
                                <li>Treinamento sobre o uso dos equipamentos e como solucionar pequenos problemas (como falta de energia) no dia da instalação.</li>
                                <li>Garantia de Fábrica de um ano sobre os motores e a central eletrônica (Garantia prevista para defeitos de fabricação)</li>
                                <li>Garantia de 2 anos sobre a parte metálica da mesma (sem cobertura para mau uso)</li>
                            </ul>
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