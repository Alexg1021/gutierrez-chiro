			<!-- footer -->
			<footer class="" role="contentinfo">
				<div id="contact" class="row">
					<div id="hours"class="col-md-6">
						<a href="#">
							<i class="fa fa-clock-o hours"></i>
						</a>
						<a href="#"><h1>Check our Hours!</h1></a>
						<table class="table table-condensed">
							<thead>
								<tr>
									<th>
										Day
									</th>
									<th>
										Open
									</th>
									<th>
										Close
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										Monday
									</td>
									<td>
										5:00pm
									</td>
									<td>
										9:30pm
									</td>
								</tr>
								<tr>
									<td>
										Tuesday
									</td>
									<td>
										Closed
									</td>
									<td>
										Closed
									</td>
								</tr>
								<tr>
									<td>
										Wednesday
									</td>
									<td>
										5:00pm
									</td>
									<td>
										9:30pm
									</td>
								</tr>
								<tr>
									<td>
										Thursday
									</td>
									<td>
										Closed
									</td>
									<td>
										Closed
									</td>
								</tr>
								<tr>
									<td>
										Friday
									</td>
									<td>
										5:00pm
									</td>
									<td>
										9:30pm
									</td>
								</tr>
								<tr>
									<td>
										Saturday
									</td>
									<td>
										9:00am
									</td>
									<td>
										1:00pm
									</td>
								</tr>
								<tr>
									<td>
										Sunday
									</td>
									<td>
										Closed
									</td>
									<td>
										Closed
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-md-6">
						<h2 class="contact-header">Come by and visit us soon!</h2>
						<img
						src="<?php echo get_template_directory_uri(); ?>/img/contact/office.jpg"
						alt=""
						class="office-pic"/>
					</div>
				</div>

				<!-- copyright -->
				<div id="copyright">
					<div class="row">
						<div class="col-md-4">
							<div class="contact-info">
								<ul>
									<li>609 O Street, Sanger, CA 93657</li>
									<li>P: (559) 875-4569 | F: (559) 358-2514</li>
									<li><a href="#">info@gutierrez-chiropractic.com</a></li>
								</ul>
							</div>
							<div class="sm-icons">
								<a class="sm-tw-icon" href="#"><i class="fa fa-twitter"></i></a>
								<a class="sm-fb-icon" href="#"><i class="fa fa-facebook"></i></a>
							</div>
						</div>
						<div class="col-md-6 col-md-offset-2">
							<p class="copyright">
								&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'html5blank'); ?>
								<a href="//html5blank.com" title="HTML5 Blank">Gutierrez Tech</a>.
							</p>
						</div>
					</div>

				</div>
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
