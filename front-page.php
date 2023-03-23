<html lang="en"> 
<head>
    <title>Castaar</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Castaar agency theme">  
    <link rel="shortcut icon" href="images/logo.png"> 
    
	<?php
        wp_head();
    ?>
</head> 

<body>
    <?php include_once("components/header.php"); ?>
    <?php the_content(); ?>
    <?php include_once("components/footer.php"); ?>
    <?php wp_footer(); ?>
</body>
</html> 