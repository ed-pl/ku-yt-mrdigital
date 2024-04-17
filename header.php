<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title( '|', true, 'right' );?></title>
    <!--
    <link rel="stylesheet" href="<//?php echo esc_url( get_stylesheet_uri() );?>" type="text/css">
    --->
    <?php wp_head();?>
</head>
<body <?php body_class();?>>

<?php wp_body_open();?>

<h3>Das ist der header.php</h3>