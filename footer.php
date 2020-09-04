<footer id="footer">
    <div class="footer_company">
        <div class="container">
            <!-- About us -->
            <div class="footer_about">
                <!-- header -->
                <div class="footer_company_about_header">
                    <p>Sobre nós</p>
                    <hr>
                </div>
                <!-- content -->
                <div class="footer_company_about_content">
                    <img src="<?= get_template_directory_uri(); ?>/_cdn/img/logo-footer.svg" alt="Lojas Emofer">
                    <p>Atuamos intensamente no mercado de aços planos e laminados desde o ano de 1991. Somos parceiros das melhores e maiores usinas do Brasil, como Gerdau, CSN, Usiminas, Arcelormittal, Ciafal e Simec, dentre outros.</p>
                </div>
            </div>
            <!-- Sitemap -->
            <div class="footer_company_sitemap">
                <!-- header -->
                <div class="footer_company_sitemap_header">
                    <p>Mapa do Site</p>
                    <hr>
                </div>
                <!-- content -->
                <div class="footer_company_sitemap_content">
                    <?php wp_nav_menu(array('theme_location' => 'footer-menu', 'container_class' => '')); ?>
                </div>
            </div>
            <!-- contact -->
            <div class="footer_company_contact">
                <!-- header -->
                <div class="footer_company_contact_header">
                    <p>Contato</p>
                    <hr>
                </div>
                <!-- content -->
                <div class="footer_company_contact_content">
                    <p><strong>Endereço:</strong> Av Pres. Médici, 2090 - Jd. Mutinga<br>Osasco-SP - CEP: 06273-000</p>
                    <br>
                    <p><strong>Telefone:</strong> <a href="tel:1136026440" title="Telefone Lojas Emofer">(11) 3602-6440</a></p>
                    <br>
                    <p><strong>E-mail:</strong> <a href="mailto:emofer@emofer.com.br" title="E-mail Lojas Emofer">emofer@emofer.com.br</a></p>
                    <br>
                    <div class="footer_company_contact_content_socialMedia">
                        <a href="https://www.facebook.com/lojasemofer" title="Facebook Lojas Emofer" target="_blank">
                            <img src="<?= get_template_directory_uri(); ?>/_cdn/img/vt-facebook-footer.svg" alt="Facebook Lojas Emofer">
                        </a>
                        <a href="https://www.instagram.com/lojas_emofer/?hl=pt-br" title="Instagram Lojas Emofer" target="_blank">
                            <img src="<?= get_template_directory_uri(); ?>/_cdn/img/vt-instagram-footer.svg" alt="Instagram Lojas Emofer">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- developer -->
    <div class="footer_developer">
        <div class="container">

            <!--url-->
            <?php
            if (is_home()) {
                $urlSite = get_home_url();
            } else {
                $urlSite = get_permalink();
            }
            ?>

            <p>Desenvolvido por <a href="https://goognet.com.br" title="Agência Especializada em Marketing Digital" target="_blank">Goognet Solução Digital</a></p>
            <p>
                <img src="<?= get_template_directory_uri(); ?>/_cdn/img/vt-w3c.svg" alt="Validador W3C">
                <a href="https://validator.w3.org/nu/?showsource=yes&showoutline=yes&showimagereport=yes&doc=<?= $urlSite; ?>" target="_blank">W3C Validator</a>
            </p>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>