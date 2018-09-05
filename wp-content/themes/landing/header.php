<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo(); ?></title>
	
	<link rel="stylesheet" href="styles.css">
	
	<?php wp_head(); ?>
</head>
<body>
	
	<header>
		<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-trans">
			<a class="navbar-brand" href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/latam_logo.png" height=40px alt=""></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">Equipo<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Blog</a>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled" href="#">Contacto</a>
					</li>
				</ul>
			</div>
		</nav>
	</header>