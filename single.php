<!--header-->
<?php get_header('page'); ?>
<!--end of header-->
<main id="main">
    <!--information-->
    <section id="main_information">
        <!--header-->
        <div class="main_information_header">
            <div class="container">
                <header class="main_informations_content_header">
                    <h1><?php the_title(); ?></h1>
                </header>
            </div>
        </div>
        <!--end of header-->
        
        <!--container-->
        <div class="container">
            <!--row-->
            <div class="main_information_row">
                <!--content-->
                <div class="main_information_content">
                    <!-- banner -->
                    <div class="main_information_content_banner">
                        <img src="<?= the_post_thumbnail_url(); ?>" alt="Informações Lojas Emofer">
                    </div>
                    <!-- text -->
                    <div class="main_information_content_text">
                        <?php the_content(); ?>
                    </div>
                    <!-- contact -->
                    <div class="main_information_content_contact">
                        <h2>Quer saber mais sobre <?php the_title(); ?></h2>
                        <p>Ligue para <strong><a href="tel:1136026440">(11) 3602-6440</a></strong> ou <strong><a href="mailto:emofer@emofer.com.br">clique aqui</a></strong> e entre em contato por e-mail.</p>
                    </div>
                </div>
                <!--end of content-->
                
                <!--aside-->
                <aside class="main_information_aside">
                    <!-- menu -->
                    <div class="main_information_aside_menu">
                        <!-- logo -->
                        <div class="main_information_aside_menu_logo">
                            <img src="<?= get_template_directory_uri(); ?>/_cdn/img/logo.svg" alt="Logo Lojas Emofer">
                        </div>
                        <!-- header -->
                        <header class="main_information_aside_menu_header">
                            <h2>Nossas Informações</h2>
                        </header>
                        <!-- list -->
                        <div class="main_information_aside_menu_list">
                            <!--information list-->
                            <?php get_template_part('template-parts/content', 'information-list'); ?>
                            <!--end of information list-->
                        </div>
                    </div>
                    <!-- contact -->
                    <div class="main_information_aside_contact">
                        <!-- header -->
                        <header class="main_information_aside_contact_header">
                            <h2>Fale conosco</h2>
                        </header>
                        <!-- content -->
                        <div class="main_information_aside_contact_content">
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
    <!--end of information-->

    <!--payment-->
    <?php get_template_part('template-parts/content', 'payment'); ?>
    <!--end of payment-->
</main>

<!--footer-->
<?php get_footer(); ?>
<!--end of footer-->