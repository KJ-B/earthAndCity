<h1>This is header.php</h1>
<?php
/*
Header
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php wp_head(); ?>
  </head>

    <body <?php body_class(); ?>>
    <div id="page" class="hfeed site">
      <a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>


      <header class="banner navbar navbar-default navbar-static-top" role="banner">

        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>

      <header id="masthead" class="site-header" role="banner">
        <div class="site-branding">


          <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true">"h3ehkjr"</span>


          <a href="#" class="socialMediaIcons"><i class="fa fa-facebook-square">&#160;&#160;</i></a>
                      <a href="#" class="socialMediaIcons"><i class="fa fa-twitter-square">&#160;&#160;</i></a>
                      <a href="#" class="socialMediaIcons"><i class="fa fa-google-plus-square"></i></a>

          <div>
            <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>

          </div>

          <a href="https://www.facebook.com/earthandcity/"><img src="/assets/images/Icons/facebook-logo-button.svg" alt="Facebook Link" width="42" height="42" border="0"></a>
          <a href="https://www.instagram.com/earthandcity/?hl=en"><img src="/assets/images/Icons/instagram.svg" alt="Instagram Link" width="42" height="42" border="0"></a>
          <a href="https://twitter.com/earthandcity?lang=en"><img src="/assets/images/Icons/twitter-logo-button.svg" alt="Twitter Link" width="42" height="42" border="0"></a>
          <a href="mailto:info@earthandcity.ca"><img src="/assets/images/Icons/email.svg" alt="Email Link" width="42" height="42" border="0"></a>
          <a href="https://www.youtube.com/channel/UCu9u-ve4f4zDlMLMxtpYqbQ"><img src="/assets/images/Icons/youtube-symbol.svg" alt="Youtube Link" width="42" height="42" border="0"></a>
          
          <div class="flex">
            <!-- Logo image that only loads when not mobile -->
            <div class="hidden-sm-down logoIcon">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class="logoIcon" alt="Earth + City Logo" src="<?php echo get_bloginfo("stylesheet_directory")?>/assets/images/Logo/logocircle.svg"></a>
            </div> 
           <!--  get post info - for banner image
            get thumbnail - for logo, social media links -->
            
            <nav id="site-navigation" class=" navbar-collapse main-navigation" role="navigation">
              <?php
              wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker()
                ));
              ?>
            </nav>
          </div>

          <nav id="site-navigation" class=" navbar-collapse main-navigation hidden-sm-down" role="navigation">
              <?php
              wp_nav_menu( array(
                'menu'              => 'mobile',
                'theme_location'    => 'mobile',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker()
                ));
              ?>
            </nav>
      </header>

              <!-- <div id="dropDownOverride" class="dropdown show">
                <a class="btn btn-secondary dropdown-toggle" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Our Impact</a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="#">Zero Waste</a>
                  <a class="dropdown-item" href="#">Local Food Procurement</a>
                  <a class="dropdown-item" href="#">Systems Thinking</a>
                </div>
              </div> -->

    </div>

