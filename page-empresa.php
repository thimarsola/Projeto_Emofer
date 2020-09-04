<!--header-->
<?php get_header('page'); ?>
<!--end of header-->


<main id="main">
    <!--main title-->
    <section id="main_title">
        <div class="container">
            <header class="main_title_header">
                <h1>Quem somos</h1>
            </header>
        </div>
    </section>
    <!--end of main title-->

    <!--text description-->
    <div id="main_content">
        <div class="container">
            <!-- text -->
            <div class="main_content_text">
                <p>Atuamos intensamente no mercado de aços planos e laminados desde o ano de 1991. Somos parceiros das melhores e maiores usinas do Brasil, como Gerdau, CSN, Usiminas, Arcelormittal, Ciafal e Simec, dentre outros.</p>
                <br>
                <p>Dispomos de modernos e eficientes equipamentos de corte e dobra de chapa e um diversificado leque de ferros laminados. Fazemos corte e dobra de chapa sob medida no menor tempo e com a melhor qualidade do mercado.</p>
                <br>
                <p>Temos a pronta-entrega Perfil W, Cantoneira, Tee, Chato, Redondo, Tubo Redondo, Quadrado, Retangular, Perfil U, Painel Wall.</p>
                <br>
                <p>Nossos colaboradores possuem experiência para atender nossos clientes com qualidade e rapidez.</p>
            </div>
            <!-- image -->
            <div class="main_content_image">
                <img src="<?= get_template_directory_uri(); ?>/_cdn/img/logo-destaque.svg" alt="Lojas Emofer - Aços Planos e Laminados">
            </div>
        </div>
    </div>
    <!--end of text description-->
    
    <!--values-->
    <div id="main_values">
        <div class="container">
            <!-- card -->
            <div class="main_values_card">
                <!-- header -->
                <div class="main_values_card_header">
                    <img src="<?= get_template_directory_uri(); ?>/_cdn/img/vt-missao.svg" alt="Lojas Emofer - Missão">
                    <p>Missão</p>
                </div>
                <!-- content -->
                <div class="main_values_card_content">
                    <p>Em união com grandes fornecedores e colaboradores, desejamos fornecer uma linha cada vez mais ampla de produtos e serviços de qualidade, e assim, obter o reconhecimento dos nossos clientes pela excelência no trabalho executado, preço justo e rapidez.</p>
                </div>
            </div>
            <!-- card -->
            <div class="main_values_card">
                <!-- header -->
                <div class="main_values_card_header">
                    <img src="<?= get_template_directory_uri(); ?>/_cdn/img/vt-visao.svg" alt="Lojas Emofer - Visão">
                    <p>Visão</p>
                </div>
                <!-- content -->
                <div class="main_values_card_content">
                    <p>Tornar-se referência na distribuição de Pergil W e aços em geral no Brasil, com foco no crescimento, rentabilidade e responsabilidade.</p>
                </div>
            </div>
            <!-- card -->
            <div class="main_values_card">
                <!-- header -->
                <div class="main_values_card_header">
                    <img src="<?= get_template_directory_uri(); ?>/_cdn/img/vt-valores.svg" alt="Lojas Emofer - Valores">
                    <p>Valores</p>
                </div>
                <!-- content -->
                <div class="main_values_card_content">
                    <ul>
                        <li>Trabalho em equipe</li>
                        <li>Compromisso com o cliente e com o crescimento rentável e contínuo da organização</li>
                        <li>Respeito ao colaborador</li>
                        <li>Ética</li>
                        <li>Inovação</li>
                        <li>Qualidade</li>
                        <li>Foco em resultados</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--end of values-->

    
    <!--budget-->
    <section id="main_pageBudget">
        <div class="container">
            <!-- header -->
            <header class="main_pageBudget_header">
                <h1>Especialistas em Aços Planos e Laminados <span>desde 1991</span></h1>
            </header>
            <!-- content -->
            <div class="main_pageBudget_content">
                <a href="<?= get_permalink(get_page_by_title('contato')); ?>" class="btn btn-color1" title="Botão para orçamento">Solicitar orçamento</a>
            </div>
        </div>
    </section>
    <!--end of budget-->


    <!--payment-->
    <?php get_template_part('template-parts/content', 'payment'); ?>
    <!--end of payment-->
</main>


<!--footer-->
<?php get_footer(); ?>
<!--end of footer-->