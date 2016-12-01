<div class="row">
	<div class="featured-slider">

		<div class="featured-slider-container columns">
			<?php $slider = new WP_Query('post_type=portfolio', 'posts_per_page=4'); while($slider->have_posts() ): $slider->the_post(); ?>
			<div class="columns">
				<a href=" <?php the_permalink(); ?> ">
					<?php the_post_thumbnail(); ?>
					<div>
						<h3 class="featured-slider-caption text-center">
							<?php the_title(); ?>
						</h3>
					</div>
				</a>
			</div>
			<?php endwhile ?>
		</div>

	</div>
</div>