<!--header-->
<?php get_header(); ?>
<!--end of header-->

<main id="main">
    <!--cta-->
    <section id="main_cta">
        <div class="container">
            <!-- header -->
            <header class="main_cta_header">
                <p>Bem-vindo a Emofer</p>
                <h1>Aços Planos e Laminados</h1>
            </header>
            <!-- content -->
            <div class="main_cta_content">
                <a href="#main_about" class="btn btn-color1" title="Botão saiba mais">Saiba mais</a>
            </div>
            <!-- scroll -->
            <div class="main_cta_scroll">
                <a href="#main_budget">
                    <span></span>
                </a>
            </div>
        </div>
    </section>
    <!--end of cta-->

    <!--budget-->
    <section id="main_budget">
        <div class="container">
            <!-- header -->
            <header class="main_budget_header">
                <h1>Especialistas em Aços Planos e Laminados desde 1991</h1>
            </header>
            <!-- content -->
            <div class="main_budget_content">
                <a href="<?= get_permalink(get_page_by_title('contato')); ?>" class="btn btn-color3" title="Botão para orçamento">Solicitar orçamento</a>
            </div>
        </div>
    </section>
    <!--end of budget-->

    <!--about us-->
    <section id="main_about">
        <div class="container">
            <!-- content -->
            <div class="main_about_content">
                <!-- header -->
                <header class="main_about_content_header">
                    <h1>Emofer - Aços Planos e Laminados</h1>
                    <hr>
                </header>
                <!-- text -->
                <div class="main_about_content_text">
                    <p>Atuamos intensamente no mercado de aços planos e laminados desde o ano de 1991. Somos parceiros das melhores e maiores usinas do Brasil, como Gerdau, CSN, Usiminas, Arcelormittal, Ciafal e Barra Mansa.</p>
                    <br>
                    <p>Dispomos de modernos e eficientes equipamentos de corte e dobra de chapa e um diversificado leque de ferros laminados. Fazemos corte e dobra de chapa sob medida no menor tempo e com a melhor qualidade do mercado.</p>
                    <br>
                    <p>Temos a pronta-entrega Perfil W, Cantoneira, Tee, Chato, Redondo, Tubo Redondo, Quadrado, Retangular, Perfil U, Painel Wall.</p>
                    <br>
                    <p>Nossos colaboradores possuem experiência para atender nossos clientes com qualidade e rapidez.</p>
                </div>
            </div>
            <!-- image -->
            <div class="main_about_image">
                <img src="<?= get_template_directory_uri(); ?>/_cdn/img/img-about.jpg" alt="Lojas Emofer - Aços Planos e Laminados" title="Lojas Emofer - Aços Planos e Laminados">
            </div>
        </div>
    </section>
    <!--end of about us-->


    <!--featured product-->
    <section id="main_featured">
        <div class="container">
            <!-- header -->
            <header class="main_featured_header">
                <h1>Produtos em destaque</h1>
                <hr>
            </header>
            <!-- content -->
            <div class="main_featured_content">
                <!-- featured card -->
                <article class="main_featured_content_card">
                    <img src="<?= get_template_directory_uri(); ?>/_cdn/img/img-viga-laminada.png" alt="Lojas Emofer - Viga Laminada">
                    <h2>
                        <a href="<?= get_permalink(get_post(429)); ?>" title="Lojas Emofer - Viga Laminada" target="_blank">Viga Laminada</a>
                    </h2>
                </article>
                <!-- featured card -->
                <article class="main_featured_content_card">
                    <img src="<?= get_template_directory_uri(); ?>/_cdn/img/img-tubo-ferro-retangular-galvanizado.png" alt="Lojas Emofer - ubo de Ferro Retangular Galvanizado">
                    <h2>
                        <a href="<?= get_permalink(get_post(433)); ?>" title="Lojas Emofer - Tubo de Ferro Retangular Galvanizado" target="_blank">Tubo de Ferro Retangular Galvanizado</a>
                    </h2>
                </article>
                <!-- featured card -->
                <article class="main_featured_content_card">
                    <img src="<?= get_template_directory_uri(); ?>/_cdn/img/img-tubo-galvanizado.png" alt="Lojas Emofer - Tubo Galvanizado">
                    <h2>
                        <a href="<?= get_permalink(get_post(377)); ?>" title="Lojas Emofer - Tubo Galvanizado" target="_blank">Tubo Galvanizado</a>
                    </h2>
                </article>
            </div>
        </div>
    </section>

    <!--end of featured product-->

    <!--most viewed products-->
    <section id="main_viewed">
        <div class="container">
            <!-- header -->
            <header class="main_viewed_header">
                <h1>Produtos mais vistos</h1>
                <hr>
            </header>
            <!-- content -->
            <div class="main_viewed_content">
                <!-- viewed card -->
                <article class="main_viewed_content_card">
                    <img src="<?= get_template_directory_uri(); ?>/_cdn/img/img-tubo-industrial-quadrado.jpg" alt="Lojas Emofer - Tubo Industrial Quadrado">
                    <h2>Tubo Industrial Quadrado</h2>
                    <a href="<?= get_permalink(get_post(387)); ?>" class="btn btn-color1" title="Lojas Emofer - Tubo Industrial Quadrado" target="_blank">Saiba mais</a>
                </article>
                <!-- viewed card -->
                <article class="main_viewed_content_card">
                    <img src="<?= get_template_directory_uri(); ?>/_cdn/img/img-viga-u-enrijecida.jpg" alt="Lojas Emofer - Viga U Enrijecida">
                    <h2>Viga U Enrijecida</h2>
                    <a href="<?= get_permalink(get_post(418)); ?>" class="btn btn-color1" title="Lojas Emofer - Viga U Enrijecida" target="_blank">Saiba mais</a>
                </article>
                <!-- viewed card -->
                <article class="main_viewed_content_card">
                    <img src="<?= get_template_directory_uri(); ?>/_cdn/img/img-viga-i-laminada.jpg" alt="Lojas Emofer - Viga I Laminada">
                    <h2>Viga I Laminada</h2>
                    <a href="<?= get_permalink(get_post(406)); ?>" class="btn btn-color1" title="Lojas Emofer - Viga I Laminda" target="_blank">Saiba mais</a>
                </article>
            </div>
        </div>
    </section>
    <!--most viewed products-->


    <!--banner-->
    <div id="main_banner">
        <img src="<?= get_template_directory_uri(); ?>/_cdn/img/logo-white.svg" alt="Lojas Emofer - Aços Planos e Laminados">
    </div>
    <!--end of Banner-->

    <!--partners-->
    <section id="main_partners">
        <div class="container">
            <!-- header -->
            <header class="main_partners_header">
                <h1>Nossos Parceiros</h1>
                <hr>
            </header>
            <!-- content -->
            <div class="main_partners_content">
                <!-- partner -->
                <div class="main_partners_content_card">
                    <img src="<?= get_template_directory_uri(); ?>/_cdn/img/img-anglo-americana.png" alt="Parceiro Lojas Emofer - Anglo Americana">
                </div>
                <!-- partner -->
                <div class="main_partners_content_card">
                    <img src="<?= get_template_directory_uri(); ?>/_cdn/img/img-arcelor-mittal.png" alt="Parceiro Lojas Emofer - Arcelor Mittal">
                </div>
                <!-- partner -->
                <div class="main_partners_content_card">
                    <img src="<?= get_template_directory_uri(); ?>/_cdn/img/img-ciafal.png" alt="Parceiro Lojas Emofer - Ciafal">
                </div>
                <!-- partner -->
                <div class="main_partners_content_card">
                    <img src="<?= get_template_directory_uri(); ?>/_cdn/img/img-cipalam.png" alt="Parceiro Lojas Emofer - Cipalam">
                </div>
                <!-- partner -->
                <div class="main_partners_content_card">
                    <img src="<?= get_template_directory_uri(); ?>/_cdn/img/img-eternit.png" alt="Parceiro Lojas Emofer - Eternit">
                </div>
                <!-- partner -->
                <div class="main_partners_content_card">
                    <img src="<?= get_template_directory_uri(); ?>/_cdn/img/img-gerdau.png" alt="Parceiro Lojas Emofer - Gerdau">
                </div>
                <!-- partner -->
                <div class="main_partners_content_card">
                    <img src="<?= get_template_directory_uri(); ?>/_cdn/img/img-lapefer.png" alt="Parceiro Lojas Emofer - Lapefer">
                </div>
                <!-- partner -->
                <div class="main_partners_content_card">
                    <img src="<?= get_template_directory_uri(); ?>/_cdn/img/img-meincol.png" alt="Parceiro Lojas Emofer - Meincol">
                </div>
                <!-- partner -->
                <div class="main_partners_content_card">
                    <img src="<?= get_template_directory_uri(); ?>/_cdn/img/img-perfilados-rio-doce-sa.png" alt="Parceiro Lojas Emofer - Perfilados Rio Doce S.A.">
                </div>
                <!-- partner -->
                <div class="main_partners_content_card">
                    <img src="<?= get_template_directory_uri(); ?>/_cdn/img/img-solfer.png" alt="Parceiro Lojas Emofer - Solfer">
                </div>
                <!-- partner -->
                <div class="main_partners_content_card">
                    <img src="<?= get_template_directory_uri(); ?>/_cdn/img/img-usiminas.png" alt="Parceiro Lojas Emofer - Usiminas">
                </div>
                <!-- partner -->
                <div class="main_partners_content_card">
                    <img src="<?= get_template_directory_uri(); ?>/_cdn/img/img-votorantim.png" alt="Parceiro Lojas Emofer - Votorantim">
                </div>
            </div>
        </div>
    </section>

    <!--end of partners-->


    <!--payment-->
    <?php get_template_part('template-parts/content', 'payment'); ?>
    <!--end of payment-->

</main>

<!--footer-->
<?php get_footer(); ?>
<!--end of footer-->