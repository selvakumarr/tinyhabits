
    <footer class="footer">
    	<div class="container">
	        <?php if (ENVIRONMENT == 'development') :?>
				<p style="float: right; margin-right: 80px;">Page rendered in {elapsed_time} seconds, using {memory_usage}.</p>
			<?php endif; ?>
	
			
		</div>
	</footer>
	
	<?php echo theme_view('parts/modal_login'); ?>

  <script>window.jQuery || document.write('<script src="<?php echo js_path(); ?>jquery-1.7.2.min.js"><\/script>')</script>

  <!-- This would be a good place to use a CDN version of jQueryUI if needed -->
	<?php echo Assets::js(); ?>

</body>
</html>
