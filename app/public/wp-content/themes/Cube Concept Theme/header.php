<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cube Concept</title>
    <?php wp_head(); ?>
</head>
<body class="header-body">
    <nav id="main-menu">

        <div class="logo-header">
            <?php  echo logo_image(); ?>
        </div>
<div>
        <?php wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'menu_id' => 'primary-menu',
            )
        );
        ?>
        <div class="top-bar"></div>
</div>
    </nav>
</body>
</html>

