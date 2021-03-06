jQuery(document).ready(function ($) {
	/* Inicialização do Color Picker e Masked Input */
	$('.color-field').wpColorPicker();
	$('.contact_phone').mask('(99) 99999-9999');
	$('.contact_opening_hour_week').mask('99:99hrs - 99:99hrs');
	$('.contact_opening_hour_weekend').mask('99:99hrs - 99:99hrs');

	/* Seletor de imagens para as logos */
	// Logo do header
	$('.header_logo_upload').click(function (e) {
		e.preventDefault();
		var custom_uploader = wp
			.media({
				title: 'Logo do Cabeçalho',
				button: {
					text: 'Enviar Imagem',
				},
				multiple: false, // Coloque em true para permitir selecionar múltiplos arquivos
			})
			.on('select', function () {
				var attachment = custom_uploader
					.state()
					.get('selection')
					.first()
					.toJSON();
				$('.header_logo').val(attachment.url);
			})
			.open();
	});

	// Logo do footer
	$('.footer_logo_upload').click(function (e) {
		e.preventDefault();
		var custom_uploader = wp
			.media({
				title: 'Logo do Footer',
				button: {
					text: 'Enviar Imagem',
				},
				multiple: false, // Coloque em true para permitir selecionar múltiplos arquivos
			})
			.on('select', function () {
				var attachment = custom_uploader
					.state()
					.get('selection')
					.first()
					.toJSON();
				$('.footer_logo').val(attachment.url);
			})
			.open();
	});
});
