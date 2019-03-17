<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package buis
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site page">
	<!--
      ========================================================
      							HEADER
      ========================================================
      
      
      -->
      <header>
        <div class="container">
          <div class="brand">
          	<?php if (is_front_page() or is_home()): ?>
          		<h1 class="brand_name"><?php bloginfo('name') ?></h1>
          	<?php else: ?>
          		<div class="brand_name"><a href="<?php echo home_url() ?>"><?php bloginfo('name') ?></a></div>
            <?php endif ?>
            <?php if (ot_get_option('desc_on_off') != 'off'): ?>
            	<p class="brand_slogan"><?php bloginfo( 'description' ) ?></p>
            <?php endif ?>
            
          </div>
          <?php if (ot_get_option('phone_number')): ?>
          	<a href="callto:#" class="fa-phone"><?php echo ot_get_option('phone_number') ?></a>
          <?php endif ?>
          
          <?php if (ot_get_option('work_time')): ?>
          	<p><?php echo ot_get_option('work_time') ?></p>
          <?php endif ?>
        </div>
        <div id="stuck_container" class="stuck_container">
          <div class="container">
            <nav class="nav">
              <ul data-type="navbar" class="sf-menu">
                <li><a href="./">Home</a>
                </li>
                <li class="active"><a href="index-1.html">About</a>
                  <ul>
                    <li><a href="#">Lorem ipsum dolor</a></li>
                    <li><a href="#">Conse ctetur adipisicing</a></li>
                    <li><a href="#">Elit sed do eiusmod
                        <ul>
                          <li><a href="#">Lorem ipsum</a></li>
                          <li><a href="#">Conse adipisicing</a></li>
                          <li><a href="#">Sit amet dolore</a></li>
                        </ul></a></li>
                    <li><a href="#">Incididunt ut labore</a></li>
                    <li><a href="#">Et dolore magna</a></li>
                    <li><a href="#">Ut enim ad minim</a></li>
                  </ul>
                </li>
                <li><a href="index-2.html">Services</a>
                </li>
                <li><a href="index-3.html">FAQS</a>
                </li>
                <li><a href="index-4.html">Contacts</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </header>
