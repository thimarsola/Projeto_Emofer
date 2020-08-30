<!doctype html>
<html lang="pt-BR" itemscope itemtype="https://schema.org/WebSite">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- SCHEMA.ORG -->
        <meta itemprop="name" content="Lojas Emofer | <?php the_title(); ?>">
        <meta itemprop="description" content="<?= get_the_excerpt(); ?>">
        <meta itemprop="image" content="<?= get_home_url(); ?>/_cdn/img/post.jpg">
        <meta itemprop="url" content="http://www.emofer.com.br/">
        <!-- OPEN GRAPH -->
        <meta property="og:locale" content="pt_BR" />
        <meta property="og:region" content="Brasil">
        <meta property="og:url" content="<?= get_permalink(); ?>">
        <meta property="og:title" content="Lojas Emofer | <?php the_title(); ?>">
        <meta property="og:site_name" content="Lojas Emofer">
        <meta property="og:description" content="<?= get_the_excerpt(); ?>">
        <meta property="og:image" content="<?= get_home_url(); ?>">
        <meta property="og:image:type" content="image/jpeg">
        <meta property="og:image:width" content="800">
        <meta property="og:image:height" content="600">
        <meta property="og:type" content="website">
        <!-- DESCRIPTION -->
        <meta name="description" content="<?= get_the_excerpt(); ?>">
        <!-- ROBOTS -->
        <meta name="robots" content="index, follow">
        <meta name="googlebot" content="index, follow">
        <!-- AUTHOR -->
        <meta name="author" content="Goognet Solução Digital - http://www.goognet.com.br">
        <!-- FACEBOOK -->
        <meta property="og:url" content="<?= get_home_url(); ?>" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="Lojas Emofer | <?php the_title(); ?>" />
        <meta property="og:description" content="<?= get_the_excerpt(); ?>" />
        <meta property="og:image" content="<?= get_home_url(); ?>/_cdn/img/post.jpg" />
        <meta property="og:image:width" content="1200" />
        <meta property="og:image:height" content="630" />
        <meta property="og:locale" content="pt_BR" />
        <meta property="article:author" content="https://www.facebook.com/goognetsolucao/" />
        <meta property="article:publisher" content="https://www.facebook.com/goognetsolucao/" />
        <!-- TWITTER -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:domain" content="<?= get_home_url(); ?>" />
        <meta name="twitter:title" content="<?= get_the_excerpt(); ?>" />
        <meta name="twitter:description" content="Lojas Emofer | <?php the_title(); ?>" />
        <meta name="twitter:image" content="<?= get_home_url(); ?>/_cdn/img/post.jpg" />
        <meta name="twitter:url" content="h<?= get_home_url(); ?>" />
        <!-- REGION -->
        <meta name="geo.region" content="BR-SP" />
        <meta name="geo.placename" content="S&atilde;o Paulo" />
        <meta name="geo.position" content="-23.60626;-46.627191" />
        <meta name="ICBM" content="-23.60626, -46.627191" />
        <!-- FAVICON -->
        <link rel="shortcut icon" href="<?= get_template_directory_uri(); ?>/_cdn/img/favicon/favicon.ico" />
        <link rel="apple-touch-icon" sizes="57x57" href="<?= get_template_directory_uri(); ?>/_cdn/img/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?= get_template_directory_uri(); ?>/_cdn/img/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?= get_template_directory_uri(); ?>/_cdn/img/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?= get_template_directory_uri(); ?>/_cdn/img/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?= get_template_directory_uri(); ?>/_cdn/img/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?= get_template_directory_uri(); ?>/_cdn/img/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?= get_template_directory_uri(); ?>/_cdn/img/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?= get_template_directory_uri(); ?>/_cdn/img/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?= get_template_directory_uri(); ?>/_cdn/img/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192" href="<?= get_template_directory_uri(); ?>/_cdn/img/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?= get_template_directory_uri(); ?>/_cdn/img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?= get_template_directory_uri(); ?>/_cdn/img/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?= get_template_directory_uri(); ?>/_cdn/img/favicon/favicon-16x16.png">
        <link rel="manifest" href="<?= get_template_directory_uri(); ?>/_cdn/img/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="<?= get_template_directory_uri(); ?>/_cdn/img/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <!--TITLE-->
        <title>Lojas Emofer | <?php the_title(); ?></title>
        <?php wp_head(); ?>
    </head>
    <body id="home">

        <!--header-->
        <header id="header">
            <!--menu information-->
            <div class="header_contact">
                <div class="container">
                    <div class="header_contact_content">
                        <!-- facebook -->
                        <div class="header_contact_content_socialMedia">
                            <a href="https://www.facebook.com/lojasemofer" title="Facebook Lojas Emofer" target="_blank">
                                <img src="<?= get_template_directory_uri(); ?>/_cdn/img/vt-facebook.svg" alt="Facebook Lojas Emofer">
                            </a>
                        </div>
                        <!-- Contact -->
                        <div class="header_contact_content_contact">
                            <!-- phone -->
                            <a href="tel:1136026440" title="Telefone Lojas Emofer">
                                <img src="<?= get_template_directory_uri(); ?>/_cdn/img/vt-phone.svg" alt="Telefone Lojas Emofer">(11) 3602-6440
                            </a>
                            <!-- mail -->
                            <a href="mailto:emofer@emofer.com.br" title="E-mail Lojas Emofer">
                                <img src="<?= get_template_directory_uri(); ?>/_cdn/img/vt-mail.svg" alt="E-mail Lojas Emofer">emofer@emofer.com.br
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end of menu information-->

            <!--menu-->
            <div class="header_navbar">
                <div class="container">
                    <!-- brand -->
                    <a href="<?= get_home_url(); ?>">
                        <img src="<?= get_template_directory_uri(); ?>/_cdn/img/logo.svg" alt="Logo Lojas Emofer">
                    </a>

                    <!-- toggle -->
                    <div class="header_menu_section">
                        <div class="header_menu_section_toggle">
                            <div class="header_menu_section_toggle_bar"></div>
                            <div class="header_menu_section_toggle_bar"></div>
                            <div class="header_menu_section_toggle_bar"></div>
                        </div>
                        <!-- nav -->
                        <nav class="header_navbar_nav">
                            <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => '')); ?>
                        </nav>
                        <!--end of navbar-->
                    </div>
                </div>
            </div>
            <!--end of menu-->
        </header>
        <!--end of header-->