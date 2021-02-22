<!DOCTYPE html>
<html lang="en">
<head>
	<title><?= $title; ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="<?= base_url(); ?>assets/images/icons/favicon.ico"/>

	<!-- LOAD THIRD PARTY LIBRARY -->

	<!-- LOAD ATOMIC CSS -->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/index.css">

	<!-- LOAD CUSTOMIZE CSS -->

</head>
<body>
	
	<main>
		<?php render($view, $data) ?>
	</main>
	
	<!-- LOAD THIRD PARTY LIBRARY -->

	<!-- LOAD SCRIPT -->
	<script
		src="node_modules/@webcomponents/webcomponentsjs/webcomponents-loader.js"
		defer
	></script>

	<script type="module">
		WebComponents.waitFor(() => {
			return import('<?= base_url(); ?>script/index.js');
		});
	</script>
</body>
</html>
