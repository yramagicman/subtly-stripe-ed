<?php  ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html <?php language_attributes(); ?>  class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html <?php language_attributes(); ?> class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo('charset'); ?>"/>
<title>
<?php wp_title();?>
</title>
<script src="helium/helium.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
	window.addEventListener('load', function(){
		
    // helium.init();

	}, false);
</script>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<a href="#content" class="visuallyHidden">Skip To Content</a>
<div id="container" class="container">
  <header class="col span12-no-margin">
    <hgroup class="head-text">
      <h1 id="blogTitle" class="blogTitle">
        <a href="<?php echo home_url(); ?>"><?php bloginfo('name');?></a>
      </h1>
      <h1 id="tagLine" class="tagLine">
        <?php bloginfo('description');?>
      </h1>
    </hgroup>
  </header>
<nav id="nav"><?php wpHTML5_header_menu(); ?></nav>
  <a href="#nav" class="mobileOnly shownav">Show Navigation</a>
  <a href="#sidebar" class="mobileOnly shownav">Sidebar</a>