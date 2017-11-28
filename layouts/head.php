<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Encoding type -->
  <meta charset="UTF-8">
  <title><?= $title ?></title>
  <!-- Viewport for RWD -->
  <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
  <link rel="shortcut icon" href="<?= ASSET_DIRECTORY.'img/static/favicon.ico' ?>" sizes="32x32">

  <!--[if lt IE 10]>-->
      <link rel="stylesheet" href="<?= ASSET_DIRECTORY.'css/estilos-ie.css' ?>" type='text/css'>
  <!--[endif]-->

	<!-- Meta SEO -->
  <meta name="description" content="<?= $description ?>">
	<meta name="robots" content="index,follow">

	<!-- twitter card -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="">
  <meta name="twitter:title" content="<?= $title ?>">
  <meta name="twitter:description" content="<?= $description ?>">
  <meta name="twitter:image" content="<?= ASSET_DIRECTORY ?>img/isotipo.jpg">    
  
	<!-- Facebook Open Graph -->
  <meta property="og:type" content="website" />
  <meta property="og:title" content="<?= $title ?>"/>
  <meta property="og:description" content="<?= $description ?>"/>
  <meta property="og:url" content="<?= $url_Canonical ?>"/>
  <meta property="og:image" content="<?= ASSET_DIRECTORY ?>img/isotipo.jpg"/>
  
</head>
<body id="top" style="display:none; opacity:0">
<!-- <body> -->
<!--[if lt IE 10]> <div class="browsehappy"> <img src="<?=ASSET_DIRECTORY ?>img/static/favico.ico" alt="" class="icon"><p>Usted está utilizando un navegador obsoleto. Por favor, <a href="http://browsehappy.com/" target="_blank" class="link"> actualizar su navegador </a> para mejorar su experiencia y poder brindarle un mejor servicio en la navegación del sitio.</p> </div> <![endif]-->	

