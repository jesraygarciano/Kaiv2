<?php get_header(); ?>

		<div class="gtco-container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="owl-carousel owl-carousel-fullwidth">
						<div class="item">
								<img src="<?php echo get_bloginfo('template_directory'); ?>/images/hero_2.jpg" alt="Kai made for adventure apparel">
						</div>
						<div class="item">
								<img src="<?php echo get_bloginfo('template_directory'); ?>/images/hero_3.jpg" alt="Kai made for adventure apparel">
						</div>
						<div class="item">
								<img src="<?php echo get_bloginfo('template_directory'); ?>/images/hero_1.jpg" alt="Kai made for adventure apparel">
						</div>
						<div class="item">
								<img src="<?php echo get_bloginfo('template_directory'); ?>/images/hero_4.jpg" alt="Kai made for adventure apparel">
						</div>						
					</div>
				</div>
			</div>
		</div>

		<div class="gtco-section">
			<div class="gtco-container-fluid">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 gtco-heading text-center">
						<h2 class="animate-box">WEAR YOUR PASSION FOR ADVENTURE</h2>
						<p class="animate-box">Be proud of yourself for being an avid adventurer. Show to the world that you are living life on your own terms and that you are a steward for Mother Nature. One of the best ways to do that is to wear cool, high-quality, and comfortable shirts that speak high volumes of your passion. And wearing locally made Kai shirts will definitely proclaim your love for the outdoors and your search for great adventures.</p>
					</div>
				</div>
			</div>
		</div>
		<!-- END Work -->

		<div class="gtco-section">
			<div class="gtco-container-fluid">
				<div class="row animate-box">
					<!-- START OF TESTIMONIALS -->
					<div class="col-md-5 gtco-testimonials">
						<a href=""><h2>Testimonials</h2></a>
						<hr />

							<div class="row">
								<div class="col-xs-4">
									<div class="gtco-testimony animate-box">
										<img src="<?php echo get_bloginfo('template_directory'); ?>/images/testi_4.jpg" />
									</div>
								</div>
									<div class="col-xs-8 animate-box">
										<blockquote>
											<p>&ldquo;
												We bought our green Kai shirts, and used them for our climb up Mt. Guiting-guiting, one of the most technically difficult mountains in the Philippines. Oh, boy, our shirts were very comfortable. And it becomes even more comfy at the summit of the mountain where the temperature dropped drastically. Our Kai shirts are also quite fashionable; we wear them to the office and mall as well!
											&ldquo;</p>
											<p class="author"><cite>&mdash; Gian Carlo Jubela (Adrenaline Romance)</cite></p>
										</blockquote>									
									</div>
							</div>

							<div class="row">
								<div class="col-xs-4">
									<div class="gtco-testimony animate-box">
										<img src="<?php echo get_bloginfo('template_directory'); ?>/images/testi_2.jpg" />
									</div>									
								</div>

								<div class="col-xs-8 animate-box">
									<blockquote>
										<p>&ldquo;An Apparel that made for adventurous individual, a very trusted brand! Sooo I highly recommend everyone to use KAI for your outdoor activities and adventures.
										&ldquo;</p>
										<p class="author"><cite>&mdash; Edmund Lazarte</cite></p>
									</blockquote>
								</div>
							</div>

							<div class="row">
								<div class="col-xs-4">
									<div class="gtco-testimony animate-box">
										<img src="<?php echo get_bloginfo('template_directory'); ?>/images/testi_3.jpg" />
									</div>									
								</div>

								<div class="col-xs-8 animate-box">
									<blockquote>
										<p>&ldquo;i just love my KAI shirt! made of quality material, so comfortable for outdoor adventures and the design is unique and classy. I highly recommend this brand.
										&ldquo;</p>
										<p class="author"><cite>&mdash; Ana Cristina</cite></p>
									</blockquote>
								</div>
							</div>
						</div>
						<!-- END OF TESTIMONIALS -->

						<!-- START OF NEWS -->
					<div class="col-md-7 gtco-news">
						<a href="#"><h2>News</h2></a>	
						<hr />						
							<div class="row">
								<div class="col-md-6 animate-box">
									<img src="<?php echo get_bloginfo('template_directory'); ?>/images/event_4.jpg" />									
								</div>
								<div class="col-md-6 animate-box">
									<img src="<?php echo get_bloginfo('template_directory'); ?>/images/event_1.jpg" />									
								</div>								
							</div>

							<div class="row">
								<div class="col-md-6 animate-box">
									<img src="<?php echo get_bloginfo('template_directory'); ?>/images/event_3.jpg" />									
								</div>
								<div class="col-md-6 animate-box">
									<img src="<?php echo get_bloginfo('template_directory'); ?>/images/event_2.jpg" />									
								</div>								
							</div>

						<p><a href="#" class="btn btn-sm btn-special">More News</a></p>
					</div>
					<!-- END OF NEWS -->

				</div>
			</div>
		</div>
		<!-- END  -->

<div class="container">
      <div class="row">

        <div class="col-sm-8 blog-main">

        	<?php if(have_posts()) : ?>
        		<?php while(have_posts()) : the_post(); ?>
		          <div class="blog-post">
		            <h2 class="blog-post-title">Sample blog post</h2>
		            <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>

		            <p>This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>
		            <hr>
		            <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
		            <blockquote>
		              <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
		            </blockquote>
		            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
		            <h2>Heading</h2>
		            <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
		            <h3>Sub-heading</h3>
		            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
		            <pre><code>Example code block</code></pre>
		            <p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
		            <h3>Sub-heading</h3>
		            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
		            <ul>
		              <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
		              <li>Donec id elit non mi porta gravida at eget metus.</li>
		              <li>Nulla vitae elit libero, a pharetra augue.</li>
		            </ul>
		            <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
		            <ol>
		              <li>Vestibulum id ligula porta felis euismod semper.</li>
		              <li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>
		              <li>Maecenas sed diam eget risus varius blandit sit amet non magna.</li>
		            </ol>
		            <p>Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.</p>
		          </div><!-- /.blog-post -->
      	<?php endwhile; ?>
      <?php else : ?>
      	<p><?php __('No Posts Found'); ?></p>
      <?php endif; ?>

        </div><!-- /.blog-main -->

        <div class="col-sm-3 offset-sm-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div>
          <div class="sidebar-module">
            <h4>Archives</h4>
            <ol class="list-unstyled">
              <li><a href="#">March 2014</a></li>
              <li><a href="#">February 2014</a></li>
              <li><a href="#">January 2014</a></li>
              <li><a href="#">December 2013</a></li>
              <li><a href="#">November 2013</a></li>
              <li><a href="#">October 2013</a></li>
              <li><a href="#">September 2013</a></li>
              <li><a href="#">August 2013</a></li>
              <li><a href="#">July 2013</a></li>
              <li><a href="#">June 2013</a></li>
              <li><a href="#">May 2013</a></li>
              <li><a href="#">April 2013</a></li>
            </ol>
          </div>
          <div class="sidebar-module">
            <h4>Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->
</div> <!-- /.container -->

<?php get_footer(); ?>
