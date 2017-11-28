<!-- Fonts & Stylesheet -->
<!-- <link rel="stylesheet" href="<?= ASSET_DIRECTORY.'css/styles.css' ?>"> -->

<!-- Scripts -->
<script>
  var baseURL = '<?= URL ?>';
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?= ASSET_DIRECTORY ?>js/vendor/jquery-2.1.4.min.js"><\/script>')</script>
<script type='text/javascript'>
	setTimeout(function(){
	  $('#top').fadeIn().animate({'opacity':'1'});
	}, 1000);
</script>
<script  async type='text/javascript'  src="<?= ASSET_DIRECTORY.'js/main.js?=0.3' ?>"></script>

<?php include_once("analyticstracking.php") ?>


</body>
</html>