<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to begin 
	/* rendering the page and display the header/nav
	/*-----------------------------------------------------------------------------------*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>
	<?php bloginfo('name'); // show the blog name, from settings ?> | 
	<?php is_front_page() ? bloginfo('description') : wp_title(''); // if we're on the home page, show the description, from the site's settings - otherwise, show the title of the post or page ?>
</title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // We are loading our theme directory style.css by queuing scripts in our functions.php file, 
	// so if you want to load other stylesheets,
	// I would load them with an @import call in your style.css
?>

<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); 
// This fxn allows plugins, and Wordpress itself, to insert themselves/scripts/css/files
// (right here) into the head of your website. 
// Removing this fxn call will disable all kinds of plugins and Wordpress default insertions. 
// Move it if you like, but I would keep it around.
?>

</head>

<body data-spy="scroll" data-target="#scroll-spy" data-offset="0"
	<?php body_class(); 
	// This will display a class specific to whatever is being loaded by Wordpress
	// i.e. on a home page, it will return [class="home"]
	// on a single post, it will return [class="single postid-{ID}"]
	// and the list goes on. Look it up if you want more.
	?>
>

<div class="loader text-center">
  <i class="fas fa-spinner fa-spin fa-10x"></i>
</div>

<header id="masthead" class="container-fluid site-header">
  <nav id="scroll-spy" class="navbar navbar-expand-lg fixed-top">
    <div id="logo" class="mr-auto border-eldo">
      <span><a class="navbar-brand js-scrollTo" href="http://localhost/wordpress">
        <h1><?php bloginfo('name'); ?></h1>
      </a></span>
    </div>
    <button class="navbar-toggler collapsed" type="button" data-toggle="slide-collapse" data-target="#slide-navbar-collapse" aria-controls="slide-collapse" aria-expanded="false" aria-label="Toggle navigation">
    <i class="burger fas fa-bars fa-3x"></i>
    </button>
    <?php
      wp_nav_menu([
        'menu'            => 'menu_eldo', 
        'theme_location'  => 'primary-menu',
        'container'       => 'div',
        'container_id'    => 'slide-navbar-collapse',
        'container_class' => 'collapse navbar-collapse',
        'menu_id'         => false,
        'menu_class'      => 'navbar-nav ml-auto menu-hover',
        'depth'           => 0,
        'fallback_cb'     => 'WP_Bootstrap_navwalker::fallback',
        'walker'          => new WP_Bootstrap_navwalker(),
      ]);
    ?>
  </nav>
  <div class="menu-overlay"></div>

  <div class="container partie-image">
    <div class="row mx-auto">
      <div class="col-lg-5 ">
        <div class="image-header text-center">
          <img src="http://lorempixel.com/output/people-q-c-300-300-1.jpg" alt="img-eldo" class="rounded-circle">
        </div>
      </div>
      <div class="col-lg-7">
        <div class="text-header text-center">
          <h2>Éléonore Lovillo</h2>
          <p>Traductrice indépendante</p>
          <p>Anglais -> Français</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center to-section">
          <a href="#prestations"><i class="fas fa-angle-down fa-5x js-scrollTo"></i></a>
      </div>
    </div>
  </div>

  </div>
</header><!-- #masthead .site-header -->

<main class="main-fluid"><!-- start the page containter -->
