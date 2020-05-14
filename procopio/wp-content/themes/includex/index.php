<?php get_header(); ?>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v5.0"></script>
<div class="main">
	<section class="content-sections">
	 	<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-lg-8">
					<div class="ult-noticias">
						<h1 <?php echo 'style="border-bottom-color: '. get_option('ult_noticias_border') .'"'; ?>><span>Últimas Notícias</span></h1>
						<div class="cards-noticias">
							<div class="main-notice">
								<?php
									$noticias = new WP_Query([
										'post_type' 			=>	'post',
										'post_status' 		=>	'publish',
										'posts_per_page' 	=> 	1,
									]);
									if ($noticias->have_posts()) : 
										while ($noticias->have_posts()) : 
											$noticias->the_post();
								?>
									<a href="<?php the_permalink(); ?>">
										<div class="card">
											<img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="<?php echo get_the_title(); ?>">
											<div class="card-img-overlay">
												<h5 class="card-title"><?php echo get_the_title(); ?></h5>
												<p class="card-text"><?php echo wp_trim_words(get_the_content(), 15, "... "); ?></p>
											</div>
										</div>
									</a>
								<?php endwhile; endif; ?>
								<?php wp_reset_postdata(); ?>
							</div>
							<?php
								$sec_noticias = new WP_Query([
									'post_type' 			=> 	'post',
									'post_status' 		=> 	'publish',
									'posts_per_page' 	=> 	2,
									'offset' 					=> 	1
								]);
								if ($sec_noticias->have_posts()) :
							?>
							<div class="second-notices">
								<?php
									$sec_notices_class = ($sec_noticias->post_count == 1) ? 'only-one-post' : '';
									while ($sec_noticias->have_posts()) :
										$sec_noticias->the_post();
								?>
									<a href="<?php the_permalink(); ?>" title="<?php echo get_the_title(); ?>" class="<?php echo $sec_notices_class; ?>">
										<div class="card">
											<img src="<?php the_post_thumbnail_url(); ?>" class="card-img" alt="<?php echo get_the_title(); ?>">
											<div class="card-img-overlay">
												<h5 class="card-title"><?php echo wp_trim_words(get_the_title(), 8, "... "); ?></h5>
												<p class="card-text"><?php echo wp_trim_words(get_the_content(), 10, "... "); ?></p>
											</div>
										</div>
									</a>
								<?php endwhile; ?>
							</div>
							<?php
								endif;
								wp_reset_postdata();
							?>
						</div>
						<div class="promo-noticias">
							<div class="owl-carousel owl-theme banners-promo">
								<?php
									$banners = new WP_Query($banners_args = [
										'post_type' 			=> 	'bannerss',
										'post_status' 		=> 	'publish',
										'posts_per_page' 	=> 	-1,
									]);
									if ($banners->have_posts()) : 
										while ($banners->have_posts()) : 
											$banners->the_post();
											if (get_field('posicao') == 'in_header') :
												$link = get_field('link');
												$target = $link['target'] ? $link['target'] : '_self';
								?>
									<div class="item">
										<a href="<?php echo $link['url']; ?>" target="<?php echo $target; ?>">
											<img src="<?php echo get_field('banner_horizontal'); ?>" alt="<?php echo get_the_title(); ?>" class="img-fluid">
										</a>
									</div>
								<?php endif; endwhile; endif; ?>
							</div>
						</div>
					</div>
					<div class="destaques">
						<h1 <?php echo 'style="border-bottom-color: '. get_option('destaques_border') .'"'; ?>>Destaques</h1>
						<div class="cards-destaques">
							<?php
								$destaques = new WP_Query([
									'category_name' 	=> 	'destaques',
									'post_type' 			=> 	'post',
									'post_status' 		=> 	'publish',
									'posts_per_page' 	=> 	6,
								]);
								if ($destaques->have_posts()) : 
									while ($destaques->have_posts()) : 
										$destaques->the_post();
							?>
								<a href="<?php the_permalink(); ?>">
									<div class="card">
										<img src="<?php the_post_thumbnail_url(); ?>" class="card-img" alt="<?php echo get_the_title(); ?>">
										<div class="card-img-overlay">
											<h5 class="card-title"><?php echo wp_trim_words(get_the_title(), 8, '...'); ?></h5>
										</div>
									</div>
								</a>
							<?php endwhile; endif; ?>
							<?php wp_reset_postdata(); ?>
						</div>
						<div class="promo-destaques">
							<div class="owl-carousel owl-theme banners-promo">
								<?php
									$banners = new WP_Query($banners_args);
									if ($banners->have_posts()) : 
										while ($banners->have_posts()) : 
											$banners->the_post();
											if (get_field('posicao') == 'in_dest') :
												$link = get_field('link');
												$target = $link['target'] ? $link['target'] : '_self';
								?>
									<div class="item">
										<a href="<?php echo $link['url']; ?>" target="<?php echo $target; ?>">
											<img src="<?php echo get_field('banner_horizontal'); ?>" alt="<?php echo get_the_title(); ?>" class="img-fluid">
										</a>
									</div>
								<?php endif; endwhile; endif; ?>
								<?php wp_reset_postdata(); ?>
							</div>
						</div>
					</div>
					<div class="eventos">
						<h1 <?php echo 'style="border-bottom-color: '. get_option('eventos_border') .'"'; ?>>Eventos</h1>
						<div class="cards-eventos">
							<?php 
								$eventos = new WP_Query([
									'post_type' 			=> 	'eventoss', 
									'post_status' 		=> 	'publish',
									'posts_per_page' 	=> 	-1,
								]);
							?>
							<?php if ($eventos->have_posts()) : ?>
								<div class="owl-carousel owl-theme">
									<?php 
										while ($eventos->have_posts()) : 
											$eventos->the_post(); 
									?>
										<div class="item">
											<a href="<?php the_permalink(); ?>">
												<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>" class="img-fluid">
											</a>
										</div>
									<?php endwhile; ?>
								</div>
							<?php endif; ?>
							<?php wp_reset_postdata(); ?>
						</div>
						<div class="promo-eventos">
							<div class="owl-carousel owl-theme banners-promo">
								<?php
										$banners = new WP_Query(array('post_type' => 'bannerss', 'post_status' => 'publish'));
										if ($banners->have_posts()) : 
											while ($banners->have_posts()) : 
												$banners->the_post();
												if (get_field('posicao') == 'in_events') :
													$link = get_field('link');
													$target = $link['target'] ? $link['target'] : '_self';
									?>
										<div class="item">
											<a href="<?php echo $link['url']; ?>" target="<?php echo $target; ?>">
												<img src="<?php echo get_field('banner_horizontal'); ?>" alt="<?php echo get_the_title(); ?>" class="img-fluid">
											</a>
										</div>
									<?php endif; endwhile; endif; ?>
									<?php wp_reset_postdata(); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-4">
					<div class="live-stream">
						<h1><?php echo bloginfo('name'); ?> <span>Online <i class="fas fa-globe-americas blink"></i></span></h1>
						<h2>Nossa rádio</h2>
						<div class="radio-player">
							<script type="text/javascript" src="https://hosted.muses.org/mrp.js"></script>
							<script type="text/javascript">
								MRP.insert({
								'url':'http://stm22.conectastm.com:7332/;',
								'codec':'mp3',
								'volume':100,
								'autoplay':true,
								'forceHTML5':true,
								'jsevents':false,
								'buffering':0,
								'title':'TV Nativa de Russas',
								'wmode':'transparent',
								'skin':'eastanbul',
								'width':'100%',
								'height':26
								});
							</script>
						</div>
						<h2>Transmissão mais recente</h2>
						<div class="on-live">
							<?php
								$live = new WP_Query([
									'post_type' 			=> 	'transmissoess',
									'posts_status' 		=> 	'publish',
									'posts_per_page' 	=> 	1,
								]);
								if (!$live->have_posts()) :
							?>
								<div class="no-video">
									<p>Não há nenhuma tranmissão no momento.</p>
								</div>
							<?php
								else : 
									while ($live->have_posts()) : 
										$live->the_post();
										echo get_field('embed');
									endwhile;
								endif;
								wp_reset_postdata();
							?>
						</div>
						<h2>Outras transmissões</h2>
						<div class="saved-streams">
							<?php
								$streams = new WP_Query([
									'post_type' 			=> 	'transmissoess',
									'post_status' 		=> 	'publish',
									'posts_per_page' 	=> 	1,
									'offset' 					=> 	1,
								]);
								if (!$streams->have_posts()) :
							?>
								<div class="no-video">
									<p>Não existem outras transmissões salvas.</p>
								</div>
							<?php
								else :
									while ($streams->have_posts()) :
										$streams->the_post();
										echo get_field('embed');
									endwhile;
								endif;
							?>
						</div>
						<a href="<?php echo get_post_type_archive_link('transmissoess'); ?>" title="Ver mais" class="btn btn-primary">Ver mais</a>
					</div>
					<div class="side-promo">
						<div class="owl-carousel owl-theme">
							<?php
								$banners = new WP_Query(array('post_type' => 'bannerss', 'post_status' => 'publish'));
								if ($banners->have_posts()) : 
									while ($banners->have_posts()) : 
										$banners->the_post();
										if (get_field('posicao') == 'in_side') :
											$link = get_field('link');
											$target = $link['target'] ? $link['target'] : '_self';
							?>
								<div class="item">
									<a href="<?php echo $link['url']; ?>" target="<?php echo $target; ?>">
										<img src="<?php echo get_field('banner_vertical'); ?>" alt="<?php echo get_the_title(); ?>" class="img-fluid">
									</a>
								</div>
							<?php endif; endwhile; endif; ?>
							<?php wp_reset_postdata(); ?>
						</div>
					</div>
					<?php if (get_option('fb_widget')) : ?>
						<div class="facebook-widget">
							<h1 <?php echo 'style="border-bottom-color: '. get_option('fb_widget_border') .'"'; ?>>Nossa página:</h1>
							<div class="fb-page" 
								data-href="<?php echo get_option('fb_widget'); ?>" 
								data-tabs="<?php echo get_option('fb_widget_tabs') ? get_option('fb_widget_tabs') : 'timeline'; ?>" 
								data-width="290" 
								data-height="180"></div>
							</div>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
</div>
<?php get_footer(); ?>