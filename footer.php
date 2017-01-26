<?php if(!is_front_page()) : ?>
	<footer>
		<div class="container-fluid footer">
			<div class="row">

				<!-- WIDGET SLOT 1 -->
				<?php if(is_active_sidebar('slot1')) : ?>
					<div class="col-md-3">	
						<?php dynamic_sidebar('slot1'); ?>
					</div>
				<?php endif; ?>

				<!-- WIDGET SLOT 2 -->
				<?php if(is_active_sidebar('slot2')) : ?>
					<div class="col-md-3">	
						<?php dynamic_sidebar('slot2'); ?>
					</div>
				<?php endif; ?>

				<!-- WIDGET SLOT 3 -->
				<?php if(is_active_sidebar('slot3')) : ?>
					<div class="col-md-3">	
						<?php dynamic_sidebar('slot3'); ?>
					</div>
				<?php endif; ?>

				<!-- WIDGET SLOT 4 -->
				<?php if(is_active_sidebar('slot4')) : ?>
					<div class="col-md-3">	
						<?php dynamic_sidebar('slot4'); ?>
					</div>
				<?php endif; ?>

			</div>
			<div class="row copyright-row">
				<div class="col-xs-12 text-center">
					<p>&copy; <?php echo Date('Y'); ?> - <?php  echo get_theme_mod('banner_logo', 'Johnathon Doe');  ?></p>
				</div>
			</div>
		</div>
	</footer>
<?php endif; ?>

	<?php wp_footer(); ?>
</body>
</html>