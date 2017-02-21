<?php
/**
 * The template for displaying the footer.
 *
 */
?>
	</div><!-- #main .wrapper -->
	<div id="footer">
		<div class="site-info">
            <p>
				<?php the_field('footer_info' , 'option');  ?>
            </p>
		</div><!-- .site-info -->
	</div><!-- #footer -->


<?php wp_footer(); ?>

<?php the_field('google_analytics','option'); ?>
</body>
</html>