<?php
	/**
	 * Incluindo classe de dropdown dinâmico com bootstrap e retirando a Admin Bar do site
	 */
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
	add_filter('show_admin_bar', '__return_false');
	
	/**
	 * Limpeza do header
	 */
	function clean_header() {
		remove_action('wp_head', 'wlwmanifest_link');
		remove_action('wp_head', 'wp_generator');
		remove_action('wp_head', 'rsd_link');
		remove_action('wp_head', 'wlwmanifest_link');
	}
	add_action('init', 'clean_header');

	/**
	 * Configurações do tema
	 */
	// Definiciões básicas: adiciona suporte ao título da aba, imagens destacadas e registra menus
	function theme_config() {
		add_theme_support('title-tag');
		add_theme_support('post-thumbnails');
		register_nav_menus(array(
			'header_menu' => __('Cabeçalho/Topo', 'include'),
			'info_menu' => __('Rodapé - Informação', 'include'),
			'services_menu' => __('Rodapé - Serviços', 'include'),
			'social_menu' => __('Rodapé - Social', 'include'),
		));
	}
	add_action('after_setup_theme', 'theme_config');

	// Defini a cor da borda inferior de cada item no menu principal 
	function custom_wp_nav_menu_objects($items, $args) {
		foreach ($items as $item) {
			$icon = get_field('social_icon', $item);

			if ($icon) {
				$menu_item = $icon . ' ' . $item->title;
				$item->title = $menu_item;
			}
		}
		return $items;
	}
	add_filter('wp_nav_menu_objects', 'custom_wp_nav_menu_objects', 10, 2);

	// Limita o tamanho de upload de imagens a 2 KB
	function limit_image_size($file) {
		$image_size = $file['size'] / 1024;
		$limit = 2048;
		$is_image = strpos($file['type'], 'image');
		if (( $image_size > $limit ) && ($is_image !== false))
			$file['error'] = 'Your picture is too large. It has to be smaller than '. $limit .'KB';
		return $file;
	}
	add_filter('wp_handle_upload_prefilter', 'limit_image_size');

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

	/**
	 * Custom Theme Configs
	 */
	// Adicionando página ao menu
	function options_page() {
		$page_title = 'Confirugações do Tema';
		$menu_title = 'Configurações do Tema';
		$capability = 'manage_options';
		$menu_slug = 'theme-config';
		$function = 'theme_options_page';
		$icon = 'dashicons-layout';
		$position = 79;
		add_menu_page($page_title, $menu_title, $capability, $menu_slug, $function, $icon, $position);
		add_submenu_page($menu_slug, 'Cabeçalho', 'Cabeçalho', $capability, $menu_slug, $function);
		add_submenu_page($menu_slug, 'Contato', 'Contato', $capability, 'theme-config&tab=contact_options', $function);
		add_submenu_page($menu_slug, 'Rodapé', 'Rodapé', $capability, 'theme-config&tab=footer_options', $function);
		add_submenu_page($menu_slug, 'Sobre', 'Sobre', $capability, 'theme-config&tab=about_options', $function);
	}
	add_action('admin_menu', 'options_page');
		
	// Incluindo página de opções
	function theme_options_page() {
		require(dirname( __FILE__ ) . '/theme-options/theme-options.php');
	}

	// Registrando opções
	function register_theme_options() {
		// Header Options
		register_setting('header_options', 'header_logo');
		// Contact Options
		register_setting('contact_options', 'contact_form');
		register_setting('contact_options', 'contact_address');
		register_setting('contact_options', 'contact_email');
		register_setting('contact_options', 'contact_phone');
		register_setting('contact_options', 'contact_opening_hour_week');
		register_setting('contact_options', 'contact_opening_hour_weekend');
		// Footer Options
		register_setting('footer_options', 'footer_logo');
		register_setting('footer_options', 'footer_text');
	}
	add_action('admin_init', 'register_theme_options'); 
		
	// Função de carregar a funcionalidade de salvar as imagens
	function header_logo_upload() {
		if (function_exists('wp_enqueue_media')) {
			wp_enqueue_media();
		} else {
			wp_enqueue_style('thickbox');
			wp_enqueue_script('media-upload');
			wp_enqueue_script('thickbox');
		}
	}
	add_action('admin_init', 'header_logo_upload');

	/**
	 * Scripts
	 */
	// Adicionar scripts no painel
	function add_admin_scripts($hook) {
		if (is_admin()) {
			if ('edit.php' == $hook) {
				return;
			}
			wp_enqueue_style('dashicons');
			wp_enqueue_style('wp-color-picker');
			wp_enqueue_script("masked-input", get_template_directory_uri() . "/js/jquery.maskedinput.js", null, true);
			wp_enqueue_script("admin-script", get_template_directory_uri() . "/js/admin.js", array( 'wp-color-picker' ), null, true);
		}
	}
	add_action('admin_enqueue_scripts', 'add_admin_scripts');

	// Adicionar scripts no tema
	function add_theme_scripts() {
		wp_enqueue_style("main-style", get_stylesheet_uri(), false, null);
		wp_enqueue_style("font-awesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css", false, null);

		// Scripts
		wp_enqueue_script("theme-jquery", get_template_directory_uri() . "/js/vendor/jquery-3.5.1.min.js", false, null, true);
		wp_enqueue_script("modernizr", get_template_directory_uri() . "/js/vendor/modernizr-3.5.0.min.js", false, null, true);
		wp_enqueue_script("bootstrap", get_template_directory_uri() . "/js/bootstrap.min.js", false, null, true);
		wp_enqueue_script("owl-carousel", get_template_directory_uri() . "/js/owl.carousel.min.js", false, null, true);
		wp_enqueue_script("isotope", get_template_directory_uri() . "/js/isotope.pkgd.min.js", false, null, true);
		wp_enqueue_script("ajax-form", get_template_directory_uri() . "/js/ajax-form.js", false, null, true);
		wp_enqueue_script("waypoints", get_template_directory_uri() . "/js/waypoints.min.js", false, null, true);
		wp_enqueue_script("jquery-counterup", get_template_directory_uri() . "/js/jquery.counterup.min.js", false, null, true);
		wp_enqueue_script("images-loaded", get_template_directory_uri() . "/js/imagesloaded.pkgd.min.js", false, null, true);
		wp_enqueue_script("scrollit", get_template_directory_uri() . "/js/scrollIt.js", false, null, true);
		wp_enqueue_script("jquery-scrollup", get_template_directory_uri() . "/js/jquery.scrollUp.min.js", false, null, true);
		wp_enqueue_script("wow", get_template_directory_uri() . "/js/wow.min.js", false, null, true);
		wp_enqueue_script("nice-select", get_template_directory_uri() . "/js/nice-select.min.js", false, null, true);
		wp_enqueue_script("jquery-slicknav", get_template_directory_uri() . "/js/jquery.slicknav.min.js", false, null, true);
		wp_enqueue_script("plugins", get_template_directory_uri() . "/js/plugins.js", false, null, true);
		wp_enqueue_script("gijgo", get_template_directory_uri() . "/js/gijgo.min.js", false, null, true);
		wp_enqueue_script("contact", get_template_directory_uri() . "/js/contact.js", false, null, true);
		wp_enqueue_script("jquery-ajaxchimp", get_template_directory_uri() . "/js/jquery.ajaxchimp.min.js", false, null, true);
		wp_enqueue_script("jquery-form", get_template_directory_uri() . "/js/jquery.form.js", false, null, true);
		wp_enqueue_script("jquery-validate", get_template_directory_uri() . "/js/jquery.validate.min.js", false, null, true);
		wp_enqueue_script("jquery-maskmoney", get_template_directory_uri() . "/js/jquery.maskMoney.min.js", false, null, true);
		wp_enqueue_script("main-script", get_template_directory_uri() . "/js/main.js", false, null, true);
		
	}
	add_action('wp_enqueue_scripts', "add_theme_scripts");