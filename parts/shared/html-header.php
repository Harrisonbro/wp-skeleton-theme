<!DOCTYPE HTML>
<!--[if IEMobile 7 ]><html class="no-js iem7" manifest="default.appcache?v=1"><![endif]--> 
<!--[if lt IE 7 ]><html class="no-js ie6" lang="en"><![endif]--> 
<!--[if IE 7 ]><html class="no-js ie7" lang="en"><![endif]--> 
<!--[if IE 8 ]><html class="no-js ie8" lang="en"><![endif]--> 
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
    
  <title><?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?></title>
  
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- Remove if you're not building a responsive site. (But then why would you do such a thing?) -->
  
  <!-- Apple touch icons. See http://mathiasbynens.be/notes/touch-icons -->
  <link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/img/apple-touch-icon-152x152-precomposed.png">
  <!-- Favicons. See http://www.jonathantneal.com/blog/understand-the-favicon/ -->
  <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.png">
  <!--[if IE]>
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico"/>
  <![endif]-->
  <meta name="msapplication-TileColor" content="#D83434">
  <meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri(); ?>/img/tileicon.png">
  
  <!-- Prevent some browsers (eg. Chrome) attempting to pre-fetch all URLs on your page -->
  <!-- See: http://www.buyog.com/code/?id=53 -->
  <meta http-equiv="x-dns-prefetch-control" content="off">
  
  <!-- Pre-fetch domains of assets requested later in the document -->
  <!-- See http://davidwalsh.name/html5-prefetch -->
  <!-- <link rel="dns-prefetch" href="//example.tld"> -->
  <!-- Pre-fetch assets globally-used assets (but *not* JavaScript) -->
  <!-- <link rel="prefetch" href="asset.ext"> -->

  <!-- Inline critical, blocking javascripts to reduce HTTP requests -->
  <script>
    <?php require(THEME_JS_PATH.'/modernizr.custom.js'); ?>
  </script>
  
  <?php wp_head(); ?>
    
</head>
<body <?php body_class(); ?>>
