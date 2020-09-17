<!DOCTYPE html>
<html lang="en">
<head>
   <!-- page title, description & meta-->
   <title> <?php wp_title( '|', true,'right' ); bloginfo( 'name' ); ?></title>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!--- IF is post : author name, tags, categories, SEO -->


   <?php wp_head(  ) ;?>

   <!-- BOOTSTRAP -->
   <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel='stylesheet' type='text/css' href='<?php echo get_theme_file_uri( );?>/assets/styles/style.php'/>

</head>