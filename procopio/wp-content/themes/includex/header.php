<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<?php wp_head(); ?>
	</head>
	<body>
		<header class="social-header">
			<div class="container">
				<div class="row justify-content-between align-items-center">
					<div class="col-6">
						<div class="social-header-notices">
							<?php
								$destaques = new WP_Query([
									'category_name'     => 'destaques',
									'post_type'         => 'post',
									'posts_per_page'    => -1,
								]);
							?>
							<div class="owl-carousel owl-theme owl-loaded">
								<div class="owl-stage-outer">
									<div class="owl-stage">
										<?php
											if ($destaques->have_posts()) :
												while ($destaques->have_posts()) : 
													$destaques->the_post(); 
										?>
											<div class="owl-item">
												<a href="<?php the_permalink(); ?>" title="<?php echo get_the_title(); ?>"><?php echo wp_trim_words(get_the_title(), 8, '...'); ?></a>
											</div>
										<?php endwhile; endif; ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-6">
						<ul class="social">
							<?php if (get_option('social_fb')) : ?>
								<li>
									<a href="<?php echo get_option('social_fb'); ?>" target="_blank" title="Facebook">
										<i class="fab fa-facebook-square"></i>
									</a>
								</li>
							<?php endif; ?>
							<?php if (get_option('social_insta')) : ?>
								<li>
									<a href="<?php echo get_option('social_insta'); ?>" target="_blank" title="Instagram">
										<i class="fab fa-instagram"></i>
									</a>
								</li>
							<?php endif; ?>
							<?php if (get_option('social_yt')) : ?>
								<li>
									<a href="<?php echo get_option('social_yt'); ?>" target="_blank" title="YouTube">
										<i class="fab fa-youtube-square"></i>
									</a>
								</li>
							<?php endif; ?>
							<?php if (is_user_logged_in()) : ?>
								<li>
									<a href="<?php echo esc_url(wp_logout_url(esc_url(home_url()))); ?>" title="Sair">
										<i class="fas fa-sign-out-alt"></i>
									</a>
								</li>
							<?php else : ?>
								<li>
									<a href="<?php echo esc_url(wp_login_url()); ?>" title="Entrar">
										<i class="far fa-user-circle"></i>
									</a>
								</li>
							<?php endif; ?>
						</ul>
					</div>
				</div>
			</div>
		</header>
		<header class="desk-header <?php echo (is_single()) ? 'header-interna' : ''; ?>">
			<div class="container">
				<div class="row justify-content-center align-items-center">
					<div class="col-6 col-lg-3">
						<div class="header-logo">
							<a href="<?php echo home_url(); ?>" title="Logo <?php echo get_bloginfo('name'); ?>">
								<img src="<?php echo get_option('header_logo'); ?>" class="img-fluid" alt="Logo <?php echo get_bloginfo('name'); ?>">
							</a>
						</div>
					</div>
					<div class="col-12 col-lg-9">
						<div class="header-promo">
							<div class="owl-carousel owl-theme banners-promo">
								<?php
									$banners = new WP_Query(['post_type' => 'bannerss']);
									if ($banners->have_posts()) : 
										while ($banners->have_posts()) : 
											$banners->the_post();
											if (get_field('posicao') == 'in_header') :
												$link = get_field('link');
												$target = $link['target'] ? $link['target'] : '_self';
								?>
									<div class="item">
										<a href="<?php echo $link['url']; ?>" target="<?php echo $target; ?>" title="<?php echo get_the_title(); ?>">
											<img src="<?php echo get_field('banner_horizontal'); ?>" alt="<?php echo get_the_title(); ?>" class="img-fluid">
										</a>
									</div>
								<?php endif; endwhile; endif;?>
								<?php wp_reset_postdata(); ?>
							</div>
						</div>
						<nav class="header-nav">
							<?php
								$args = get_menu_args('header_menu');
								wp_nav_menu($args);
							?>
						</nav>
					</div>
				</div>
			</div>
		</header>
		<header class="mob-header" id="fix-mob-header">
			<div class="container-fluid">
				<div class="row justify-content-between align-items-center">
					<div class="col-3">
						<div class="mob-menu">
							<a href="#!" class="open-menu" title="Menu">
								<i class="fas fa-bars" aria-hidden="true"></i>
							</a>
						</div>
					</div>
					<div class="col-6">
						<div class="mob-logo">
							<a href="<?php echo esc_url(home_url()); ?>" title="Logo <?php echo bloginfo('name'); ?>">
								<img src="<?php echo get_option('header_logo_mb'); ?>" class="img-fluid" alt="Logo <?php echo bloginfo('name'); ?>">
							</a>
						</div>
					</div>
					<div class="col-3">
						<div class="mob-search">
							<a href="#!" class="open-search" title="Pesquisar">
								<i class="fas fa-search" aria-hidden="true"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div class="mob-sidemenu" id="mob-header-sidemenu">
			<div class="mob-sidemenu-header">
				<div class="mob-sidemenu-close">
					<a href="#!" class="close-menu" title="Fechar">
						<i class="fas fa-arrow-left" aria-hidden="true"></i>
					</a>
				</div>
				<div class="mob-sidemenu-logo">
					<a href="<?php echo esc_url(home_url()); ?>" title="Logo <?php echo bloginfo('name'); ?>">
						<img src="<?php echo get_option('header_logo_mb'); ?>" class="img-fluid mob-sidemenu-logo" alt="Logo <?php echo bloginfo('name'); ?>">
					</a>
				</div>
				<div class="mob-sidemenu-account">
					<?php if (is_user_logged_in()) : ?>
						<li>
							<a href="<?php echo esc_url(wp_logout_url(esc_url(home_url()))); ?>" title="Sair">
								<i class="fas fa-sign-out-alt"></i>
							</a>
						</li>
					<?php else : ?>
						<li>
							<a href="<?php echo esc_url(wp_login_url()); ?>" title="Entrar">
								<i class="far fa-user-circle"></i>
							</a>
						</li>
					<?php endif; ?>
				</div>
			</div>
			<nav>
				<?php
					$args = get_menu_args('header_menu');
					wp_nav_menu($args);
				?>
			</nav>
		</div>
		<div class="mob-bottomsearch" id="mob-header-bottomsearch">
			<?php get_search_form(); ?>
		</div>