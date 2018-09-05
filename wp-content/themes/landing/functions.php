<?php 
	//Aqui van todas las funcionalidades adicionales del template

	function cargar_estilos(){
		//que estilos se van a cargar
		wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css');
		wp_enqueue_style('styles', get_template_directory_uri() . '/style.css', null, '1.1');
	}
// escucha esta accion y agrega
	add_action('wp_enqueue_scripts', 'cargar_estilos');




 ?>