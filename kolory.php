<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title( '|', true, 'right' );?></title>
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() );?>" type="text/css">
    <?php wp_head();?>
</head>
<body <?php body_class();?>>
<?php wp_body_open();?>
    <h3>test</h3>
    <?php 
    function greet($name, $color) {
        echo "<p>Hallo, my name is $name my favorite color is $color.</p>";
    }

    greet('John', 'blue');
    greet('Jane', 'green');
    greet('Antek', 'piwny');
    greet('Piotr', 'zielony');
    greet('Halina', 'niebieski');

    ?>
<!--
<p>Hallo, my is John my favorite color is blue.</p>
<p>Hallo, my is John my favorite color is green.</p>
-->

<h1><?php bloginfo('name');?></h1>
<p><?php bloginfo('description');?></p>



</body>
</html>