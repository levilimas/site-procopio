
<?php //Template Name: pagina-sobre
 get_header();?>

<!-- Início da página Sobre -->
    <div class="page-servicos" style="margin-top: 180px; margin-bottom: 30px">
        <!-- Início seção Sobre Nós -->
        <section class="page">
            <div class="container-fluid">
                <h1 class="container-fluid" style="text-align: center;">
                    Sobre Nós
                </h1> 
                <h3 class="container-fluid" style="margin-top:30px; font-family: Creo-Light; text-align: justify; ">
                    <?php echo get_the_content(); ?>
                </h3>
            </div>
        <section>          
    </div>
     
        <!-- Fim seção Sobre Nós -->
         
        <!-- Início seção equipe -->
    <div id="depoimentos" class="testimonial_area  ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-40 text-center">
                        <h3>
                            Nosso time
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 justify-content-center">
                    <div class="page-sobre owl-carousel text-center">
                        <?php
                            $query = new WP_Query( array( 'post_type' => 'team' ) ); 
                             
                            // O Loop
                            if ( $query->have_posts() ) {
                                while ( $query->have_posts() ) {
                                    $query->the_post();
                        ?>
                                <div class="cnt-block equal-hight">
                                    <img src="<?php echo get_field("imagem"); ?>" style="width: 250px; height: 250px; object-fit: cover; border-radius: 100%;" class="img-fluid" alt="">
                                    <h3><a><?php echo get_the_title(); ?></a></h3>
                                    <p><?php echo get_the_excerpt(); ?></p>
                                    <ul class="follow-us clearfix">
                                        <?php if(get_field("facebook")) : ?>
                                            <li><a href="<?php echo get_field('facebook'); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <?php endif; ?>
                                        <?php if(get_field("twitter")) : ?>
                                        <li><a href="<?php echo get_field('instagram'); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <?php endif; ?>
                                        <?php if(get_field("linkedin")) : ?>
                                        <li><a href="<?php echo get_field("linkedin"); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                        <?php 
                                }
                            } else {
                                // no posts found
                            }
                            /* Restore original Post Data */
                            wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Fim seção equipe -->

        <!-- formulário de contato -->
        <div id="formulario" class="make_apppointment_area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section_title pl-68">
                                    <h3>Fale conosco</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="appoint_ment_form pl-68">
                                    <?php echo do_shortcode('[contact-form-7 id="35" title="Formulário de Contato"]'); ?>
                                </div>
                            </div>
                            <div class="col-lg-4 offset-lg-1">
                                <div class="appointMent_info">
                                    <div class="single_appontment">
                                        <h4>Visite nossa sede em</h4>
                                        <p><?php echo get_option("endereco_footer");?></p>
                                    </div>
                                    <div class="single_appontment">
                                        <h4>Envie-nos uma mensagem</h4>
                                        <p><a href="<?php echo get_option("email_footer");?>"><?php echo get_option("email_footer");?></a><br> +55 <?php echo get_option("tel_footer");?></p>
                                    </div>
                                    <div class="single_appontment">
                                        <h4>Horário de funcionamento</h4>
                                        <p class="d-flex justify-content-between">
                                            <span>Segunda - Sexta</span>
                                            <span><?php echo get_option("horario_footer_1");?></span>
                                        </p>
                                        <p class="d-flex justify-content-between">
                                            <span>Sábados</span>
                                            <span><?php echo get_option("horario_footer_2");?></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- fim do formulário de contato -->
        </section>
    </div>

<?php get_footer();?>