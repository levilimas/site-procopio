<?php
  /**
   * Template Name: Página com timeline
   */
  get_header();
?>
<!-- Timeline -->
<div class="internal-pages">
  <section class="template services">
    <div class="container-fluid">
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
      <div class="row">
        <div class="col-md-12">
          <div class="main-timeline9">
            <div class="timeline">
              <div class="timeline-content">
                <?php
                  $step_one_content = get_field('step_one');
                ?>
                <div class="circle">
                  <span>
                    <img class="img-fluid" src="<?php echo esc_url($step_one_content['image']); ?>" alt="<?php echo esc_url($step_one_content['title']); ?>">
                  </span>
                </div>
                <div class="content">
                  <span class="year">PASSO 1</span>
                  <h4 class="title"><?php echo esc_html($step_one_content['title']); ?></h4>
                  <p class="description">
                    <h4 style="font-family: Creo Light; color: #666">
                      <?php echo esc_html($step_one_content['description']); ?>
                    </h4>
                  </p>
                  <div class="icon">
                    <span></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="timeline">
              <div class="timeline-content">
                <?php
                  $step_two_content = get_field('step_two');
                ?>
                <div class="circle">
                  <span>
                    <img class="img-fluid" src="<?php echo esc_url($step_two_content['image']); ?>" alt="<?php echo esc_url($step_two_content['title']); ?>">
                  </span>
                </div>
                <div class="content">
                  <span class="year">PASSO 2</span>
                  <h4 class="title"><?php echo esc_html($step_two_content['title']); ?></h4>
                  <p class="description">
                    <h4 style="font-family: Creo Light; color: #666">
                      <?php echo esc_html($step_two_content['description']); ?>
                    </h4>
                  </p>
                  <div class="icon">
                    <span></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="timeline">
              <div class="timeline-content">
                <?php
                  $step_three_content = get_field('step_three');
                ?>
                <div class="circle">
                  <span>
                    <img class="img-fluid" src="<?php echo esc_url($step_three_content['image']); ?>" alt="<?php echo esc_url($step_three_content['title']); ?>">
                  </span>
                </div>
                <div class="content">
                  <span class="year">PASSO 3</span>
                  <h4 class="title"><?php echo esc_html($step_three_content['title']); ?></h4>
                  <p class="description">
                    <h4 style="font-family: Creo Light; color: #666">
                      <?php echo esc_html($step_three_content['description']); ?>
                    </h4>
                  </p>
                  <div class="icon">
                    <span></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="timeline">
              <div class="timeline-content">
                <?php
                  $step_four_content = get_field('step_four');
                ?>
                <div class="circle">
                  <span>
                    <img class="img-fluid" src="<?php echo esc_url($step_four_content['image']); ?>" alt="<?php echo esc_url($step_four_content['title']); ?>">
                  </span>
                </div>
                <div class="content">
                  <span class="year">PASSO 4</span>
                  <h4 class="title"><?php echo esc_html($step_four_content['title']); ?></h4>
                  <p class="description">
                    <h4 style="font-family: Creo Light; color: #666">
                      <?php echo esc_html($step_four_content['description']); ?>
                    </h4>
                  </p>
                  <div class="icon">
                    <span></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="timeline">
              <div class="timeline-content">
                <?php
                  $step_five_content = get_field('step_five');
                ?>
                <div class="circle">
                  <span>
                    <img class="img-fluid" src="<?php echo esc_url($step_five_content['image']); ?>" alt="<?php echo esc_url($step_five_content['title']); ?>">
                  </span>
                </div>
                <div class="content">
                  <span class="year">PASSO 5</span>
                  <h4 class="title"><?php echo esc_html($step_five_content['title']); ?></h4>
                  <p class="description">
                    <h4 style="font-family: Creo Light; color: #666">
                      <?php echo esc_html($step_five_content['description']); ?>
                    </h4>
                  </p>
                  <div class="icon">
                    <span></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      <div class="about_area" style="text-align: center;">
        <h1 class="display-4 container-fluid" style="margin-top: 30px; font-size: 50px;">Por que a Energia Fotovoltáica vale tanto a pena ?</h1>
        <p class="lead container-fluid">A energia pode lhe ajudar a economizar até 95% no valor de sua conta de energia, fazendo com que dentro de um tempo determinado, haja a recuperação do investimento, valorização do imóvel e mesmo a contribuição com a preservação do meio ambiente. </p>
        <p>Para mais informações, entre em contato conosco e faça um orçamento.</p>
        <br>
        <a class="boxed-btn3 scrollSuave" href="#formulario" role="button">CONTATE-NOS</a>
      </div>
  </section>   
</div>
<?php get_footer(); ?>