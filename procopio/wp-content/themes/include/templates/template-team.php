<?php
  /**
   * Template Name: Página com carrosel da equipe
   */
  get_header();
?>

<!-- Início da página Sobre -->
<div class="internal-pages">
	<section class="template about">
    <!-- Início seção Sobre Nós -->

    <div class="about-section">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="content">
              <h1>Saiba como funciona</h1>
              <div class="text">
                <?php echo get_the_content(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Fim seção Sobre Nós -->
    
    <!-- Início seção equipe -->
    <div class="team-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="content team-list">
              <h3>Nosso time</h3>
              <div class="carousel team_active owl-carousel">
                <?php
                  $team = new WP_Query([
                    'post_type' => 'team',
                  ]);
                  if ($team->have_posts()) :
                    while ($team->have_posts()) :
                      $team->the_post();
                ?>
                  <div class="member equal-hight">
                    <img src="<?php echo esc_url(get_field("image")['url']); ?>" style="width: 250px; height: 250px; object-fit: cover; border-radius: 100%;" class="img-fluid" alt="<?php echo esc_attr(get_field("image")['alt']); ?>">
                    <h3><?php echo esc_html(get_the_title()); ?></h3>
                    <p><?php echo esc_html(get_field('role')); ?></p>
                    <ul class="follow-us clearfix">
                      <!-- Facebook -->
                      <?php if (get_field("social")['facebook']) : ?>
                        <li>
                          <a href="<?php echo esc_url(get_field("social")['facebook']); ?>" target="_blank">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                          </a>
                        </li>
                      <?php endif; ?>
                      <!-- Fim Facebook -->
                      <!-- Twitter -->
                      <?php if (get_field("social")['twitter']) : ?>
                        <li>
                          <a href="<?php echo esc_url(get_field("social")['twitter']); ?>" target="_blank">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                          </a>
                        </li>
                      <?php endif; ?>
                      <!-- Fim Twitter -->
                      <!-- LinkedIn -->
                      <?php if (get_field("social")['linkedin']) : ?>
                        <li>
                          <a href="<?php echo esc_url(get_field("social")['linkedin']); ?>" target="_blank">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                          </a>
                        </li>
                      <?php endif; ?>
                      <!-- Fim LinkedIn -->
                    </ul>
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
    </div>
    <!-- Fim seção Equipe -->
	</section>
</div>
     
        
         
        
    <!-- <div id="depoimentos" class="testimonial_area  ">
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
        Fim seção equipe -->

<?php get_footer();?>