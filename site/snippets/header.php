<!DOCTYPE html>
<html lang="en">
<head>
  
  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta charset="utf-8" />
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="shortcut icon" type="image/x-icon"  href="<?php echo url('assets/images/favicon.ico') ?>">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo url('assets/images/apple-touch-icon-72x72.png') ?>" />
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo url('assets/images/apple-touch-icon-114x114.png') ?>" />
  <link rel="stylesheet" href="<?php echo url('assets/styles/icons.css') ?>" />
  <link rel="alternate" type="application/rss+xml" href="<?php echo url('feed') ?>" title="Feed | <?php echo html($site->title()) ?>" />

  <?php echo css('assets/styles/normalize.css') ?>
  <?php echo css('assets/styles/styles.css') ?>
  	<!--[if IE]>
	   <?php echo css('assets/styles/ie.css') ?>
	<![endif]-->

	<!--[if IE]>
		<?php echo js('assets/javascript/html5shiv.js') ?>
	<![endif]-->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <?php echo js('assets/javascript/responsiveslides.min.js') ?>
  <?php echo js('assets/javascript/jquery.fitvids.min.js') ?>
</head>

<body <?php if (isset($error)) echo 'class="error"' ?>>

  <header class="site">
  	<div class="grid">
	  	<div class="grid-unit-a">
	  		<div class="logo">
	   		<a href="<?php echo url() ?>">jerome arfouche</a>
	  		</div>
	  	</div>
	  	<div class="grid-unit-b">
	  	<?php snippet('primary-nav') ?>
	  	</div>
  	</div>
    
  </header>
