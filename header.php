<!DOCTYPE html>
<html lang="en">
<head>


  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
  <meta name="author" content="">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimum-scale=1, maximum-scale=1">


  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="<?php theActiveThemeDirectory(); ?>css/normalize.css">
  <link rel="stylesheet" href="<?php theActiveThemeDirectory(); ?>css/skeleton.css">
  <link rel="stylesheet" href="<?php theActiveThemeDirectory(); ?>css/MyFontsWebfontsKit.css">
  <link rel="stylesheet" href="<?php theActiveThemeDirectory(); ?>css/main.css">

  <meta name="p:domain_verify" content="5042b53bad534bc7b45473cfeb487e0c"/>
 
 <!-- MYFONTS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <!--
/**
 * @license
 * MyFonts Webfont Build ID 3386915, 2017-05-10T09:51:13-0400
 * 
 * The fonts listed in this notice are subject to the End User License
 * Agreement(s) entered into by the website owner. All other parties are 
 * explicitly restricted from using the Licensed Webfonts(s).
 * 
 * You may obtain a valid license at the URLs below.
 * 
 * 
 * Webfont: FrontageCondensed-Line by Juri Zaech
 * URL: https://www.myfonts.com/fonts/jurizaech/frontage-condensed/line/
 * 
 * Webfont: FrontageCondensed-Bold by Juri Zaech
 * URL: https://www.myfonts.com/fonts/jurizaech/frontage-condensed/bold/
 * 
 * Webfont: FrontageCondensed-Inline by Juri Zaech
 * URL: https://www.myfonts.com/fonts/jurizaech/frontage-condensed/inline/
 * 
 * Webfont: FrontageCondensed-3D by Juri Zaech
 * URL: https://www.myfonts.com/fonts/jurizaech/frontage-condensed/3d/
 * 
 * Webfont: FrontageCondensed-Outline by Juri Zaech
 * URL: https://www.myfonts.com/fonts/jurizaech/frontage-condensed/outline/
 * 
 * Webfont: FrontageCondensed-Regular by Juri Zaech
 * URL: https://www.myfonts.com/fonts/jurizaech/frontage-condensed/regular/
 * 
 * 
 * 
 * License: https://www.myfonts.com/viewlicense?type=web&buildid=3386915
 * Licensed pageviews: 10,000
 * Webfonts copyright: Copyright &#x00A9; 2016 by Juri Zaech. All rights reserved.
 * 
 * © 2017 MyFonts Inc
*/

-->
  

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <!-- <link rel="icon" type="image/png" href="images/favicon.png"> -->


  <!-- Open graph metas for article rich pins
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta property="og:type" content="blog" />
    <meta property="og:title" content="<?php the_title(); ?>" />
    <meta property="og:url" content="<?php the_permalink() ?>" />
    <meta property="og:site_name" content="Aimee Today" />
    <meta property="article:author" content="Aimee Johanan" />

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
  <?php include_once("analyticstracking.php") ?>

  <header class="nav-bar">
      <div class="container">
        <div class="row">
          <div class="three columns">
            <!-- <div class="logo">
              <a href="<?php echo site_url(); ?>" id="logo-link"></a>
            </div>-->
            <!-- <div id="home-link">
              <a href="<?php echo site_url(); ?>">Home</a>
            </div> --> 
          </div>
          <nav class="twelve columns">
            <input class="trigger" type="checkbox" id="nav-button">
            <label class="hamburger" for="nav-button" onclick>+</label>
            <ul class="u-pull-right">
              <?php
                // get all the pages from 'main' category
                $main_pages = get_posts( array( 'post_type' => 'page', 'order' => 'ASC', 'orderby' => 'menu_order', 'category_name' => 'main', 'posts_per_page' => 200 ) );

                foreach($main_pages as $main_page) // for each school within schools
                {

                  $main_URL = get_page_link($main_page->ID);
                  $main_name = $main_page->post_title;
                  // showMeTheGoods($school_name);
                  echo '<li><a href="' . $main_URL . '">' . $main_name . '</a></li>';
                }
              ?>
              <li><a href="https://www.etsy.com/uk/shop/AimeeToday">Printable Shop</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
    <div class="LogoHeader">
        <div id="logo">
          <a href="<?php echo site_url(); ?>"><img src="<?php theActiveThemeDirectory(); ?>images/AimeeDotTodayLogo_2.1black.svg"></a>
        </div>
        <!-- <div id="headerImage">
            <img alt="Aimee Today. You can do it! Friendly reminders to help you be brave and take your next step! Plus printables and other tools to make every day amazing." src="<?php theActiveThemeDirectory(); ?>images/AimeeToday_Header_4.jpg">
        </div> -->
    </div>