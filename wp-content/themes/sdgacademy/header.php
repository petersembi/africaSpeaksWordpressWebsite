<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AfricaSpeaks
 */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Link to custom CSS -->
    <link rel="stylesheet" href="assets/css/main.css">

    <!-- jQUERY CDN -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
   
    <!-- CYCLE 2 PLUGIN (FOR HEADER) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.cycle2/2.1.6/jquery.cycle2.min.js" integrity="sha512-lvcHFfj/075LnEasZKOkj1MF6aLlWtmpFEyd/Kc+waRnlulG5er/2fEBA5DBff4BZrcwfvnft0PiAv4cIpkjpw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- GSAP CDN AND PLUGINS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/Draggable.min.js"></script>
    <title>SDG ACADEMY</title>
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' )?>/style.css">
</head>
<body>
<div class="container-fluid m-0 p-0" >










   <!-- NAVBAR -->
   <nav class="navbar navbar-expand-lg fixed-top ">
    <div class="container-fluid">
        <a class="navbar-brand navBrand colorWhite" href="#">
        <img src="<?php bloginfo('stylesheet_directory') ?>/assets/images/SDG-logo.png" height="90" alt="CoolBrand">
        THE GLOBAL GOALS
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse headerNavigationUl" id="navbarSupportedContent">
        
                  <?php
                  wp_nav_menu(array(
                      'theme_location' => 'main-menu',
                      'container' => false,
                      'menu_class' => '',
                      'fallback_cb' => '__return_false',
                      // 'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                        'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-lg-0 %2$s">%3$s</ul>',

                //       'items_wrap' => '<ul id="%1$s" class="navbar-nav ms-auto mb-2 mb-lg-0 </ul>',
                      'depth' => 2,
                      'walker' => new bootstrap_5_wp_nav_menu_walker()
                  ));
                  ?>
                </div>
       
   
    </div>
    </nav>

<div class="collapse navbar-collapse navbarNavcollapsed   " id="main-menu">
                  <?php
                  wp_nav_menu(array(
                      'theme_location' => 'main-menu',
                      'container' => false,
                      'menu_class' => '',
                      'fallback_cb' => '__return_false',
                      // 'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                      'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-lg-0 text-white text-decoration-none header_ul header_ul_carousel header_ul_about_us %2$s">%3$s</ul>',
                      'depth' => 2,
                      'walker' => new bootstrap_5_wp_nav_menu_walker()
                  ));
                  ?>
                </div>