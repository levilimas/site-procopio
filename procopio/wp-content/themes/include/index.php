<?php get_header(); ?>
  
<!-- slider_area_começo -->
<div class="slider_area">
  <?php
    $banners_section = new WP_Query([
      'pagename' => 'pagina-inicial',
    ]);
    if ($banners_section->have_posts()) :
      while ($banners_section->have_posts()) :
        $banners_section->the_post();
  ?>
    <div class="slider_text">
      <h3><?php echo esc_html(get_field('banners_title')); ?></h3>
      <h3>
        <span style="font-size: 25px; text-transform: none; font-family: Source Sans Pro, sans-serif">
         <?php echo esc_html(get_field('banners_subtitle')); ?>
        </span>
      </h3>
      <p></p>
      <?php
        $banners_cta = get_field('banners_cta');
        if ($banners_cta['action'] !== 'disabled') :
          if ($banners_cta['action'] === 'modal') :
      ?>
        <a href="#!" data-toggle="modal" data-target="#calculadoraModal" data-whatever="@getbootstrap" class="boxed-btn3" id="travabotao" >
          <?php echo esc_html($banners_cta['btn_text']); ?>
        </a>
      <?php else : ?>
        <a href="<?php echo esc_url($banners_cta['link']['url']); ?>" class="boxed-btn3">
          <?php echo esc_html($banners_cta['link']['title']); ?>
        </a>
      <?php endif; endif; ?>
    </div>
  <?php
    endwhile; endif;
    wp_reset_postdata();
  ?>

  <div class="slider_active owl-carousel">
    <?php
      $banners = new WP_Query([
        'post_type' => 'banners',
      ]);
      if ($banners->have_posts()) :
        while ($banners->have_posts()) :
          $banners->the_post();
    ?>
      <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1 overlay" style="background-image: url(<?php echo esc_url(get_field('post_thumbnail')); ?>)">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-8"></div>
          </div>
        </div>
      </div>
    <?php
        endwhile;
      else :
        // no posts found
    ?>
      <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1 overlay" style="background-image: url(<?php echo home_url() ?>/wp-content/themes/site-procopio/img/banner/Banner-2.jpg)">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-8"></div>
          </div>
        </div>
      </div>
    <?php
      endif;
      wp_reset_postdata();
    ?>
  </div>
</div>
<!-- slider_area_fim-->

<!-- área sobre inicio -->
<div id="sobre" class="about_area">
  <div class="container">
    <div class="row align-items-center">
      <?php
        $about_section = new WP_Query([
          'pagename' => 'pagina-inicial'
        ]);
        if ($about_section->have_posts()) :
          while ($about_section->have_posts()) :
            $about_section->the_post();
      ?>
        <div class="col-xl-6 col-lg-6 col-md-6">
          <div class="about_thumbs">
            <div class="large_img_1">
              <img src="<?php echo esc_url(get_field('about_left_image')['url']); ?>" alt="<?php echo esc_attr(get_field('about_left_image')['alt']); ?>">
            </div>
            <div class="small_img_1 vertical">
              <img src="<?php echo esc_url(get_field('about_right_image')['url']); ?>" alt="<?php echo esc_attr(get_field('about_right_image')['alt']); ?>">
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6">
          <div class="about_info">
            <div class="section_title mb-20px">
              <h3>Sobre Nós</h3>
              <p><?php echo esc_html(get_field('about_description')); ?></p>
            </div>
            <p class="opening_hour">
              <span></span>
            </p>
            <?php
              $about_cta = get_field('about_cta');
              if ($about_cta['action'] === 'activated') :
            ?>
              <a href="<?php echo esc_url($about_cta['link']['url']); ?>" class="boxed-btn3">
               <?php echo esc_html($about_cta['link']['title']); ?>
              </a>
            <?php endif;?>
          </div>
        </div>
      <?php
        endwhile; endif;
        wp_reset_postdata();
      ?>
    </div>
  </div>
</div>
<!-- área sobre fim -->

<!-- área Serviços início -->
<div id="servicos" class="service_area">
  <div class="container">
    <div class="row justify-content-center ">
      <div class="col-lg-6 col-md-10">
        <?php
          $services_section = new WP_Query([
            'pagename' => 'pagina-inicial'
          ]);
          if ($services_section->have_posts()) :
            while ($services_section->have_posts()) :
              $services_section->the_post();
        ?>
          <div class="section_title text-center mb-55">
            <h3>Nossos Serviços</h3>
            <p><?php echo esc_html(get_field('services_description')); ?></p>
          </div>
        <?php
          endwhile; endif;
          wp_reset_postdata();
        ?>
      </div>
    </div>
    <div class="row justify-content-center">
      <?php
        $services = new WP_Query([
          'post_type' => 'services',
        ]);
        if ($services->have_posts()) :
          while ($services->have_posts()) :
            $services->the_post();
      ?>
        <div class="col-lg-4 col-md-6">
          <div class="single_service">
            <div class="service_thumb">
              <img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
            </div>
            <div class="service_content text-center">
              <div class="icon">
                <i class="<?php echo get_field("icon"); ?>"></i>
              </div>
              <h3>
                <?php echo esc_html(get_the_title()); ?>
              </h3>
              <p><?php echo esc_html(get_the_excerpt()); ?></p>
            </div>
          </div>
        </div> 
      <?php
        endwhile; endif;
        wp_reset_postdata();
      ?>
    </div>
  </div>
</div>
<!-- área Serviços fim -->

<!-- area dos clientes  -->
<div id="depoimentos" class="testimonial_area  ">
  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <div class="section_title mb-40 text-center">
          <h3>
            Depoimentos de clientes
          </h3>
        </div>
      </div>
    </div>
      <div class="row">
        <div class="col-xl-12">
          <div class="testmonial_active owl-carousel">
            <?php
              $testimonials = new WP_Query([
                'post_type' => 'testimonials',
              ]);
              if ($testimonials->have_posts()) :
                while ($testimonials->have_posts()) :
                  $testimonials->the_post();
            ?>
              <div class="single_carousel">
                <div class="row justify-content-center">
                  <div class="col-lg-7 col-md-10">
                    <div class="single_testmonial text-center ">
                      <p><?php echo get_the_content(); ?></p>
                      <div class="testmonial_author">
                        <div class="thumb">
                          <img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                        </div>
                        <h3><?php echo esc_html(get_the_title()); ?></h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php
              endwhile; endif;
              wp_reset_postdata();
            ?>
          </div>
        </div>
      </div>
  </div>
</div>
<!-- area dos clientes  -->

<?php get_footer(); ?>