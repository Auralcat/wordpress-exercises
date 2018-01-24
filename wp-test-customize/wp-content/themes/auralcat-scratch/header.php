<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
      <title><?php wp_title(); ?></title>
      <link href="<?php bloginfo( 'stylesheet_url' ); ?>" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

      <?php wp_head(); ?>
  </head>
  <body>
      <header>
        <div class="wrap">
          <h1><a href="<?php echo site_url(); ?>" title="<?php bloginfo('name'); ?>"> AURALCAT</a></h1>
        </div>
      </header>
