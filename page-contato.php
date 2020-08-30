<!--header-->
<?php get_header('page'); ?>
<!--end of header-->

        <main id="main">
            
            <!--title-->
            <section id="main_title">
                <div class="container">
                    <header class="main_title_header">
                        <h1>Contato</h1>
                    </header>
                </div>
            </section>
            <!--end of title-->

            <!--map-->
            <div id="main_map">
                <div class="container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.797438687325!2d-46.7724614852081!3d-23.503804465354023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cefeebd670975b%3A0x36f2f213a21f1f39!2sLojas%20Emofer%20Ferros%20e%20Ferragens!5e0!3m2!1spt-BR!2sbr!4v1598376071824!5m2!1spt-BR!2sbr"></iframe>
                </div>
            </div>
            <!--end of map-->
            
            <!--form-->
            <section id="main_form">
                <!--container-->
                <div class="container">
                    <!-- information -->
                    <div class="main_form_information">
                        <img src="<?= get_template_directory_uri(); ?>/_cdn/img/logo-form.svg" alt="Logo Lojas Emofer">
                        <p>Atuamos intensamente no mercado de aços planos e laminados desde o ano de 1991. Somos parceiros das melhores e maiores usinas do Brasil, como Gerdau, CSN, Usiminas, Arcelormittal, Ciafal e Barra Mansa.</p>
                        <br>
                        <p><img src="<?= get_template_directory_uri(); ?>/_cdn/img/vt-target.svg" alt="Endereço Lojas Emofer">Av Pres. Médici, 2090 - Jd. Mutinga - Osasco-SP<br>CEP: 06273-000</p>
                        <br>
                        <a href="tel:1136026440">
                            <img src="<?= get_template_directory_uri(); ?>/_cdn/img/vt-phone-green.svg" alt="Telefone Lojas Emofer">(11) 3602-6440
                        </a>
                        <br>
                        <a href="mailto:emofer@emofer.com.br">
                            <img src="<?= get_template_directory_uri(); ?>/_cdn/img/vt-mail-green.svg" alt="E-mail Lojas Emofer">emofer@emofer.com.br
                        </a>
                    </div>
                    <!--end of information-->
                    
                    <!-- form -->
                    <div class="main_form_form">
                        <!-- header -->
                        <header class="main_form_form_header">
                            <h1>Entre em contato conosco</h1>
                        </header>
                        <!-- form -->
                        <form action="<?= get_template_directory_uri() ?>/_cdn/php/send-mail.php" method="POST">
                            <!-- name -->
                            <div class="form-group">
                                <input name="name" type="text" placeholder="Nome">
                            </div>
                            <!-- mail -->
                            <div class="form-group">
                                <input name="mail" type="email" placeholder="E-mail">
                            </div>
                            <!-- row -->
                            <div class="form_group_row">
                                <!-- phone -->
                                <div class="form-group_col">
                                    <input name="phone" type="text" placeholder="Telefone">
                                </div>
                                <!-- mobile -->
                                <div class="form-group_col">
                                    <input name="mobile" type="text" placeholder="Celular">
                                </div>
                            </div>
                             <!-- subject -->
                            <div class="form-group">
                                <input name="subject" type="text" placeholder="Assunto">
                            </div>
                            <!-- message -->
                            <textarea name="message" rows="4" placeholder="Mensagem"></textarea>
                            <!-- button -->
                            <div class="main_form_form_button">
                                <button type="submit" class="btn btn-color1">Enviar mensagem</button>
                            </div>
                        </form>
                    </div>
                    <!--end of form-->
                </div>
                <!--end of container-->
            </section>
            <!--end of form-->
            
            <!--payment-->
            <?php get_template_part('template-parts/content', 'payment'); ?>
            <!--end of payment-->
        </main>

<!--footer-->
<?php get_footer(); ?>
<!--end of footer-->
