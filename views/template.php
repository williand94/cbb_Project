<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title><?= COMPANY ?></title>
	<?php include "./views/inc/Link.php";?>
</head>
<body>
	<?php 
		$ajaxRequest = false;
		require_once "./controllers/viewsController.php";
		$IV = new ViewsControllers();

		$views = $IV->get_views_controller();

		if ($views == "login" || $views == "404") {
			require_once "./views/content/".$views."-view.php";
		}else{
	?>
	<!-- Main container -->
	<main class="full-box main-container">
		<!-- Nav lateral -->
		<?php include "./views/inc/NavLateral.php";?>

		<!-- Page content -->
		<section class="full-box page-content">
		    <?php 
				include "./views/inc/NavBar.php";
				include $views;
			?>
		</section>
	</main>
    <?php
		} 
		include "./views/inc/Script.php";
	?>
</body>
</html>