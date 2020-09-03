<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <!-- CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/contact-form.css">
  <link href="https://fonts.googleapis.com/css?family=Nixie+One" rel="stylesheet">
  <title><?php wp_title ( '|', true, 'right' ); ?><?php bloginfo('name'); ?></title>
  <!-- jQuery-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!--site-top背景部-->
  <?php wp_head(); ?>
</head>

<body>
  <!-- ヘッダー部分------------------------------------------------->
  <!--------------------------------------------------------------->
  <header class="site-header flex flex--bet">
    <div class="site-logo">
      <img src="<?php echo get_template_directory_uri(); ?>/img/hurugi.png" alt="logo">
    </div>
    <div class="botton-header">
      <nav>
        <?php
          $args = array(
          'menu_class' => 'nav navbar-nav',
          'container' => false,
          );
          wp_nav_menu($args);
          ?>

      </nav>
    </div>
  </header>
