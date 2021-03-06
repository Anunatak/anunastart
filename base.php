<?php
/**
 * Base Template File
 *
 * @package anunastart
 */
?>

<?php get_template_part( 'templates/head' ); ?>

<body <?php body_class(); ?>>

	<a href="#content" class="skip"><?php _e( 'Skip to content', 'roots' ) ?></a>

	<!--[if lt IE 8]>
		<div class="alert-box warning">
			<?php _e( 'You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots' ); ?>
		</div>
	<![endif]-->

	<div class="main-wrapper">

		<?php
		// Header
		do_action( 'get_header' );
		get_template_part( 'templates/header' );
		?>

	  	<div id="content" class="content" role="document">
			<main id="main" class="main <?php roots_main_class() ?>" role="main">
			  	<?php include roots_template_path(); ?>
			</main><!-- /.main -->
			<?php if ( roots_display_sidebar() ) : ?>
			  	<aside id="sidebar" class="sidebar" role="complementary">
					<?php include roots_sidebar_path(); ?>
			  	</aside><!-- /.sidebar -->
			<?php endif; ?>
		</div><!-- /.content -->

  		<?php get_template_part( 'templates/footer' ); ?>


  	</div>

</body>
</html>
