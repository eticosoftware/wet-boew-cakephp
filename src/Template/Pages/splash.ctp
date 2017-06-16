<?php $this->layout = false ?>
<!DOCTYPE html><!--[if lt IE 9]><html class="no-js lt-ie9" lang="en"><![endif]--><!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<!-- Web Experience Toolkit (WET) / Boîte à outils de l'expérience Web (BOEW)
		wet-boew.github.io/wet-boew/License-en.html / wet-boew.github.io/wet-boew/Licence-fr.html -->
<title>AppName</title>
<meta content="width=device-width,initial-scale=1" name="viewport">
<!-- Meta data -->
<meta name="description" content="Web Experience Toolkit (WET) includes reusable components for building and maintaining innovative Web sites that are accessible, usable, and interoperable. These reusable components are open source software and free for use by departments and external Web communities">
<?= $this->Html->meta('icon') ?>
<!-- Meta data-->
<!--[if gte IE 9 | !IE ]><!-->
<?= $this->Html->css('wet/theme.min.css') ?>
<?= $this->Html->script('jquery-3.2.1.min.js') ?>
<script>$(function() {
	$('.language-button').on('click', function(e) {
		e.preventDefault();
		var language = $(this).attr('data-language');
		$.ajax({
			url: 'users/change-language/' + language,
			success: function(data){ 
				window.location.href = 'pages/index';       
			}
		});
	});
});</script>
<!--<![endif]-->
<!--[if lt IE 9]>
		<link href="./theme-gc-intranet/assets/favicon.ico" rel="shortcut icon" />
		<link rel="stylesheet" href="./theme-gc-intranet/css/ie8-theme.min.css" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="./wet-boew/js/ie8-wet-boew.min.js"></script>
		<![endif]-->
<noscript><?= $this->Html->css('wet/noscript.min.css') ?></noscript>
</head>
<body vocab="http://schema.org/" typeof="WebPage">
<header role="banner" id="wb-bnr">
<div class="container">
<div class="row mrgn-tp-lg mrgn-bttm-lg">
<div class="col-md-8 col-md-offset-2">
<object type="image/svg+xml" tabindex="-1" role="img" data="<?= $this->Url->image('wet/logo.svg') ?>" aria-label="Web Experience Toolkit"></object>
</div>
</div>
</div>
</header>
<main role="main" property="mainContentOfPage" class="container">
<div class="row mrgn-tp-lg">
<div class="col-md-12">
<h1 class="wb-inv">Language selection - Government of Canada Intranet theme - Web Experience Toolkit / <span lang="fr">Sélection de la langue - Thème du gouvernement du Canada pour les sites intranet - Boîte à outils de l’expérience Web</span></h1>
<section class="col-md-6">
<h2 class="h3 text-center">App Name Here</h2>
<ul class="list-unstyled">
<li><a class="btn btn-lg btn-primary btn-block language-button" href="#" data-language="en">English</a></li>
<li><a class="btn btn-lg btn-default btn-block mrgn-tp-sm" href="../../License-en.html" rel="license">Terms and conditions of use</a></li>
</ul>
</section>
<section class="col-md-6" lang="fr">
<h2 class="h3 text-center">Nom de l'application ici</h2>
<ul class="list-unstyled">
<li><a class="btn btn-lg btn-primary btn-block language-button" href="#" data-language="fr">Français</a></li>
<li><a class="btn btn-lg btn-default btn-block mrgn-tp-sm" href="../../Licence-fr.html" rel="license">Conditions régissant l'utilisation</a></li>
</ul>
</section>
</div>
</div>
</main>
<!--[if gte IE 9 | !IE ]><!-->
<?= $this->Html->script('wet/wet-boew.min.js') ?>

<!--<![endif]-->
<!--[if lt IE 9]>
		<script src="./wet-boew/js/ie8-wet-boew2.min.js"></script>
		
		<![endif]-->
<?= $this->Html->script('wet/theme.min.js') ?>
</body>
</html>