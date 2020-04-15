<?php
	/* Incluindo classe de dropdown dinâmico com bootstrap e retirando a Admin Bar do site */ 
		require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
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
				'info_menu' => __('Menu de informações', 'include'),
				'services_menu' => __('Menu de serviços', 'include'),
				'midias_menu' => __('Menu de mídias sociais', 'include'),
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

	/* Página de Opções */
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
			add_submenu_page( $menu_slug, 'Cabeçalho', 'Cabeçalho', $capability, $menu_slug, $function);
			add_submenu_page( $menu_slug, 'Página Inicial', 'Página Inicial', $capability, 'theme-config&tab=home_options', $function);
			add_submenu_page( $menu_slug, 'Rodapé', 'Rodapé', $capability, 'theme-config&tab=footer_options', $function);
			add_submenu_page( $menu_slug, 'Sobre', 'Sobre', $capability, 'theme-config&tab=about_options', $function);
    	}
		add_action('admin_menu', 'options_page');
		
		// Incluindo páginas de opções
		function theme_options_page() {
			require(dirname( __FILE__ ) . '/theme-options/theme-options.php');
		}

		// Registrando opções
		function register_theme_options() {
			// Header Options
			register_setting('header_options', 'header_logo');
			// Contact Options
			register_setting('home_options', 'tel_footer');
			register_setting('home_options', 'email_footer');
			register_setting('home_options', 'endereco_footer');
			register_setting('home_options', 'horario_footer_1');
			register_setting('home_options', 'horario_footer_2');
			// Footer Options
			register_setting('footer_options', 'footer_logo');
			register_setting('footer_options', 'text_footer');
		}
		add_action('admin_init', 'register_theme_options');
		
		// Função de carregar a funcionalidade de salvar as imagens
		function header_logo_upload() {
			if (function_exists( 'wp_enqueue_media' )){
				wp_enqueue_media();
			}else{
				wp_enqueue_style('thickbox');
				wp_enqueue_script('media-upload');
				wp_enqueue_script('thickbox');
			}
		}
		add_action('admin_init', 'header_logo_upload');



	/* Scripts */

	// Adicionar scripts no painel
		function add_back_scripts($hook) {
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
		add_action('admin_enqueue_scripts', 'add_back_scripts');

		// Adicionar scripts no front-end
		function add_scripts() {
			wp_enqueue_style("main-style", get_stylesheet_uri(), false, null);
			wp_enqueue_style("font-awesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css", false, null);

		}
		add_action('wp_enqueue_scripts', "add_scripts");



	/* Colocar o ícone das mídias digitais */
	add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);

		function my_wp_nav_menu_objects( $items, $args ) {
			
			// loop
			foreach( $items as &$item ) {
				
				// vars
				$icon = get_field('icone', $item);
				
				
				// append icon
				if( $icon ) {
					$icone = '<i class="fa fa-'.$icon.'"></i> '. $item->title;	
					$item->title = $icone;
					
				}
				
			}
			
			
			// return
			return $items;
			
		}

