<?php get_header(); ?>

	<div class="md:flex min-h-screen">
		<div class="w-full md:w-1/2 flex items-center justify-center">
			<div class="max-w-sm m-8">
				<div class="text-5xl md:text-15xl text-gray-800 border-primary border-b">404</div>
				<div class="w-16 h-1 bg-purple-light my-3 md:my-6"></div>
				<p class="text-gray-800 text-2xl md:text-3xl font-light mb-8"><?php _e( 'Disculpe, esta página no a sido encontrada', 'tailpress' ); ?></p>
				<a href="<?php echo get_bloginfo( 'url' ); ?>" class="bg-primary px-4 py-2 rounded text-white">
					<?php _e( 'Inicio', 'tailpress' ); ?>
				</a>
			</div>
		</div>
	</div>
<?php get_footer(); ?>