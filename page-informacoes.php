<!--header-->
<?php get_header('page'); ?>
<!--end of header-->

<main id="main">

    <!--information-->
    <section id="main_information">
        <!-- header -->
        <header class="main_information_header">
            <div class="container">
                <h1>Informações</h1>
            </div>
        </header>
        <!-- content -->
        <div class="main_information_content">
            <div class="container">
                <p>Conheça todas as informações da Emofer</p>

                <!-- grid -->
                <div class="main_information_content_grid">
                    <?php
                    $args = [
                        'post_per_page' => -1
                    ];

                    //the_query
                    $the_query = new WP_Query($args);
                    ?>

                    <?php if ($the_query->have_posts()) : ?>
                    
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    
                        <?php get_template_part('template-parts/content', 'card'); ?>
                    
                    <?php endwhile; ?>
                    
                    <?php wp_reset_postdata(); ?>
                    
                    <?php else : ?>
                        <p><?php _e('Não existe conteúdo cadastrado do momento.'); ?></p>
                    <?php endif; ?>
                </div>
                <!--end of grid-->
                
            </div>
        </div>
    </section>
    <!--end of information-->

    <!--payment-->
    <?php get_template_part('template-parts/content', 'payment'); ?>
    <!--end of payment-->
    
</main>

<!--footer-->
<?php get_footer(); ?>
<!--end of footer-->