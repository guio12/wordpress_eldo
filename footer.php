<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to finish 
	/* rendering the page and display the footer area/content
	/*-----------------------------------------------------------------------------------*/
?>

</main><!-- / end page container, begun in the header -->

<footer class="footer">

	<div class="backToTop">
	<a id="back-to-top" href="#" class="btn btn-faded btn-lg back-to-top" role="button" title="Haut de la page" data-toggle="tooltip" data-placement="left">
		<i class="fas fa-angle-up"></i>
	</a>
	</div>
	<div class="site-info container">
		
		<p><a href="#" rel="linkedIn"><i class="fab fa-linkedin"></i></a> 
			<a href="#" rel="facebook"><i class="fab fa-facebook-square"></i></a> 
			<a href="#" rel="twitter"><i class="fab fa-twitter-square"></i></a>
		</p>
		
	</div><!-- .site-info -->
</footer><!-- #colophon .site-footer -->

<?php wp_footer(); 
// This fxn allows plugins to insert themselves/scripts/css/files (right here) into the footer of your website. 
// Removing this fxn call will disable all kinds of plugins. 
// Move it if you like, but keep it around.
?>

</body>
</html>
