<?php get_header(); ?>
<div class="internal-pages">
	<section class="page">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="content">
						<h1><?php echo get_the_title(); ?></h1>
						<div class="text">
							<?php echo get_the_content(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<?php get_footer(); ?>