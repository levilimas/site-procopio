<?php 
    get_header();
?>
    
    <!-- slider_area_começo -->

    <div class="slider_area">
        <div class="slider_text">
            <h3>Energia Solar Residencial e Comercial</h3>
            <h3><span style="font-size: 25px; text-transform: none; font-family: Source Sans Pro, sans-serif"> Economize até 95% na sua conta de energia.</span></h3>
            <p></p>
            <a href="#test-form" data-toggle="modal" data-target="#calculadoraModal" data-whatever="@getbootstrap" class="boxed-btn3" id="travabotao">FAÇA AGORA SEU ORÇAMENTO GRATUITO</a>
        </div>

        <div class="slider_active owl-carousel">
            <?php
                $query = new WP_Query( array( 'post_type' => 'banners' ) );
                 
                // O Loop
                if ( $query->have_posts() ) {
                    while ( $query->have_posts() ) {
                        $query->the_post();
            ?>
                        <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1 overlay" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8 col-md-8">
                                    </div>
                                </div>
                            </div>
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
    <!-- slider_area_fim-->

    <!-- área sobre inicio -->
    <div id="sobre" class="about_area ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="about_thumbs">
                        <div class="large_img_1">
                            <img src="<?php echo home_url(); ?>/wp-content/themes/site-procopio/img/sobre/Sobre-Maior2.jpg" alt="">
                        </div>
                        <div class="small_img_1 vertical">
                            <img src="<?php echo home_url(); ?>/wp-content/themes/site-procopio/img/sobre/Sobre-Menor2.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="about_info">
                        <div class="section_title mb-20px">
                            <h3>Sobre Nós</h3>
                            <p>A Procópio Engenharia é uma empresa, focada em sistemas fotovoltáicos e projetos de automação residenciais e comerciais. Nossa equipe é composta por engenheiros e técnicos engajados em melhor atender nossos clientes e mudar a forma como o mundo interage com as energias renováveis e as novas tecnologias de automação residencial e comercial.</p>
                        </div>
                        <p class="opening_hour">
                            <span>ATENDIMENTO PERSONALIZADO!</span>
                        </p>
                        <a href="#" class="boxed-btn3">CONHEÇA MAIS</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- área sobre fim -->

    <div id="servicos" class="service_area">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-6 col-md-10">
                    <div class="section_title text-center mb-55">
                        <h3>Nossos Serviços</h3>
                        <p>Disponilizamos de uma gama de serviços com melhor qualidade do mercado e com o objetivo de dar a você cliente, mais comodidade e mais economia.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single_service">
                        <div class="service_thumb">
                            <img src="<?php echo home_url(); ?>/wp-content/themes/site-procopio/img/automation/automation2.jpg" alt="">
                        </div>
                        <div class="service_content text-center">
                            <div class="icon">
                                <i class="fa fa-home"></i>
                            </div>
                            <h3>Automação Residencial</h3>
                            <p>Sua casa inteligente e com maior comodidade em todas as horas, garantindo mais conforto e facilidade de gerir equipamentos e ambientes a qualquer distância.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service">
                        <div class="service_thumb">
                            <img src="<?php echo home_url(); ?>/wp-content/themes/site-procopio/img/servicos/service4.jpg" alt="">
                        </div>
                        <div class="service_content text-center">
                            <div class="icon">
                                <i class="fas fa-bolt"></i>
                            </div>
                            <h3>Projetos e Soluções Elétricas</h3>
                            <p>Projetos de toda sua planta elétrica e adequação das suas instalações de acordo com o padrão nacional, reduzindo nriscos de descarga elétrica e mais economia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service">
                        <div class="service_thumb">
                            <img src="<?php echo home_url(); ?>/wp-content/themes/site-procopio/img/servicos/service2.jpg" alt="">
                        </div>
                        <div class="service_content text-center">
                            <div class="icon">
                                <i class="fas fa-solar-panel"></i>
                            </div>
                            <h3>Energia Solar</h3>
                            <p>Projetos e instalação de sistemas fotovoltáicos, garantindo o preço justo e a economia na sua conta de energia em até 95%, com as tecnologias mais inovadoras do mercado.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   

    <!-- area dos clientes  -->
    <div id="depoimentos" class="testimonial_area  ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-40 text-center">
                        <h3>
                            Depoimento de clientes
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                         <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 col-md-10">
                                    <div class="single_testmonial text-center ">
                                        <p>Após ter feito meu projeto e implementação de energia fotovoltaica com a Procópio Engenharia, reduzi em mais de 90% o valor que pagava antes.</p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                <img src="<?php echo home_url(); ?>/wp-content/themes/site-procopio/img/depoimentos-clientes/1.png" alt="">
                                            </div>
                                            <h3>Antônio José, comerciante.</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 col-md-10">
                                    <div class="single_testmonial text-center">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                <img src="img/testmonial/1.png" alt="">
                                            </div>
                                            <h3>Watson, web developer</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 col-md-10">
                                    <div class="single_testmonial text-center">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                <img src="img/testmonial/1.png" alt="">
                                            </div>
                                            <h3>Watson, web developer</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- area dos clientes  -->

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
                        <form action="#">
                            <div class="single_field">
                                <input type="text" placeholder="Nome">
                            </div>
                            <div class="single_field">
                                <input type="text" placeholder="Email">
                            </div>
                            <div class="single_field m-0">
                                <textarea id="" cols="30" rows="10" placeholder="Mensagem"></textarea>
                            </div>
                            <p>Estou interessado e quero receber mais notícias sobre a empresa!</p>
                            <div class="form_btn">
                                <button class="boxed-btn3" type="submit">ENVIAR</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1">
                    <div class="appointMent_info">
                        <div class="single_appontment">
                            <h4>Visite nossa sede em</h4>
                            <p> Av. Senador Virgílio Távora N°11 - Sala 2 - Centro, Varjota - CE 62265-000</p>
                        </div>
                        <div class="single_appontment">
                            <h4>Envie-nos uma mensagem</h4>
                            <p><a href="#">procopioengenharia@gmail.com</a><br> +55 (88)99806-4853</p>
                        </div>
                        <div class="single_appontment">
                            <h4>Horário de funcionamento</h4>
                            <p class="d-flex justify-content-between">
                                <span>Segunda - Sexta</span>
                                <span>08:00hs - 18:00hs</span>
                            </p>
                            <p class="d-flex justify-content-between">
                                <span>Sábados</span>
                                <span>08:00hs - 17:00hs</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fim do formulário de contato -->
<?php 
    get_footer();


?>