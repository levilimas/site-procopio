<?php
	/* Incluindo classe de dropdown dinâmico com bootstrap e retirando a Admin Bar do site */
		add_filter('show_admin_bar', '__return_false');
	
	/* Limpeza do Header */
		function clearHeader() {
			remove_action('wp_head', 'wlwmanifest_link');
			remove_action('wp_head', 'wp_generator');
			remove_action('wp_head', 'rsd_link');
			remove_action('wp_head', 'wlwmanifest_link');
		}
		add_action('init', 'clearHeader');

	
	/* Configurações do tema */
		// Definiciões básicas: adiciona suporte ao título da aba, imagens destacadas e registra menus
		function theme_config() {
			add_theme_support('title-tag');
			add_theme_support('post-thumbnails');
			register_nav_menus(array(
				'header_menu' => __('Menu Principal (topo/cabeçalho)', 'include'),
				'footer_menu' => __('Mapa do Site', 'include'),
			));
		}
		add_action('after_setup_theme', 'theme_config');

		// Retorna os argumentos para criar os menus
		function get_menu_args($theme) {
			$args = [
				'theme_location'  => $theme,
				'depth'	          => 2,
				'container'       => '',
				'container_class' => '',
				'container_id'    => '',
				'menu_class'      => '',
				'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
				'walker'          => new WP_Bootstrap_Navwalker(),
			];
			return $args;
		}

	/* Scripts */

		// Adicionar scripts no front-end
		function add_scripts() {
			wp_enqueue_style("main-style", get_stylesheet_uri(), false, null);
			wp_enqueue_style("font-awesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css", false, null);
		}
		add_action('wp_enqueue_scripts', "add_scripts");

	/* Css */


