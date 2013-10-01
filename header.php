<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>One Month Rails</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="canonical" href="http://blog.onemonthrails.com/">
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.png" rel="shortcut icon">

    <?php
      if ( is_singular() && get_option( 'thread_comments' ) )
        wp_enqueue_script( 'comment-reply' );
      wp_head();
    ?>
  
  <link href="<?php echo get_template_directory_uri(); ?>/style.css" media="screen, projection" rel="stylesheet" type="text/css" />
  <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-btn.css" media="screen, projection" rel="stylesheet" type="text/css" />



  <!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700' rel='stylesheet' type='text/css'>
  <!--Fonts from Google"s Web font directory at http://google.com/webfonts -->
<link href="http://fonts.googleapis.com/css?family=PT+Serif:regular,italic,bold,bolditalic" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=PT+Sans:regular,italic,bold,bolditalic" rel="stylesheet" type="text/css">


</head>

<body <?php body_class(); ?>> 
  

  <div class="container">







