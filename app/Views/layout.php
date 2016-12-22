<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<meta http-equiv="Access-Control-Allow-Origin" content="*"/>
	<title><?php echo $w_site_name; ?> - <?= $this->e($title) ?></title>

	<!-- Loading CSS librairies -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Loading App CSS Styles -->
	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('libs/font-awesome/css/font-awesome.min.css') ?>">
	<?= $this->section('css') ?>
</head>
<body>

	<header>
		<?= $this->insert('partials/nav') ?>
	</header>

	<main class="container">
		<?= $this->section('main_content') ?>
	</main>
	
	<footer>
		<p>
			<small>© AKA Optics SAS 2012-2016 | All Rights Reserved – Please use the contact information to report any problem with this web site.</small>
		</p>
	</footer>

	<!-- Loading JS librairies -->
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<!-- Loading Javascript Files -->
	<?= $this->section('js') ?>
	<script src="<?= $this->assetUrl('js/main.js') ?>"></script>

</body>
</html>