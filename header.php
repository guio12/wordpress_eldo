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

<body 
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

<header id="masthead" class="site-header">
  <nav class="navbar navbar-expand-md fixed-top">
    <div id="logo" class="mr-auto border-eldo">
      <span><a class="navbar-brand js-scrollTo" href="http://localhost/wordpress">
        <?php bloginfo('name'); ?>
      </a></span>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    </button>
    <?php
      wp_nav_menu([
        'menu'            => 'menu_eldo', 
        'theme_location'  => 'primary-menu',
        'container'       => 'div',
        'container_id'    => 'navbarCollapse',
        'container_class' => 'collapse navbar-collapse',
        'menu_id'         => false,
        'menu_class'      => 'navbar-nav ml-auto mx-auto',
        'depth'           => 0,
        'fallback_cb'     => 'WP_Bootstrap_navwalker::fallback',
        'walker'          => new WP_Bootstrap_navwalker()
      ]);
    ?>
  </nav>
    
  <div class="container partie-image">
    <div class="row">
      <div class="col-md-4">
        <div class="image-header">
          <img src="http://lorempixel.com/output/cats-q-c-640-480-1.jpg" alt="img-eldo" class="rounded-circle">
        </div>
      </div>
      <div class="col-md-8">
        <div class="text-header text-center">
          <p>fpjzpfjqzofjfpjqfoqjfosjfosfjoqfjqodfji</p>
        </div>
      </div>
    </div>
  </div>

  </div>
</header><!-- #masthead .site-header -->

<main class="main-fluid"><!-- start the page containter -->
