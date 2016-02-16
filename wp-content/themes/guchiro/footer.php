			<!-- footer -->
			<footer class="" role="contentinfo">
				<div id="contact" class="row">
					<div id="hours"class="col-md-4">
						<a href="#">
							<i class="fa fa-clock-o hours"></i>
						</a>
						<a href="#"><h1>Check our Hours!</h1></a>
					</div>
					<div class="col-md-4">
						<img
						src="<?php echo get_template_directory_uri(); ?>/img/contact/office.jpg"
						alt=""
						class="office-pic"/>
					</div>
					<div class="col-md-4"><h1>Google Map</h1></div>
				</div>

				<!-- copyright -->
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'html5blank'); ?>
					<a href="//html5blank.com" title="HTML5 Blank">Alian Technologies</a>.
				</p>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
