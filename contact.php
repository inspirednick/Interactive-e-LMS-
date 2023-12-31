
<?php

	// Watch Code From Video
?>
		<!-- ======================Page Title======================== -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Contact</h1>
				<span>Get in Touch with Us</span>
				
			</div>

		</section><!-- #page-title end -->

		<!-- Page Sub Menu
		============================================= -->
		<div id="page-menu">

			<div id="page-menu-wrap">

			</div>

		</div><!-- #page-menu end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Postcontent
					============================================= -->
					<div class="postcontent nobottommargin">

						<?php 

							if(isset($message_error) || isset($name_error) || isset($phone_error) || isset($mail_error) || isset($send_error) ){

								echo "<div class='alert alert-danger'>";
                            
                            	echo "Please fill the form carefully and correctly<br>";

                            	echo "<a type='button' class='btn btn-default btn-sm' data-dismiss='alert'>Cancel</a>
                            	</div>";
							}else if(isset($success)){

								if(isset($success)) echo $success;
							}

						?>

						<h3>Send us an Email</h3>

							<form class="nobottommargin" id="template-contactform" name="template-contactform" action="" method="post">

								<div class="form-process"></div>

								<div class="col_one_third">
									<label for="template-contactform-name">Name <small>*</small></label>
									<input type="text" placeholder="Name" id="template-contactform-name" name="name" class="sm-form-control required" />
								<?php if(isset($name_error)) echo $name_error; ?>
								</div>

								<div class="col_one_third">
									<label for="template-contactform-email">Email <small>*</small></label>
									<input type="email" id="template-contactform-email" placeholder="Email" name="email" class="required email sm-form-control" />
									<?php if(isset($mail_error)) echo $mail_error; ?>
								</div>

								<div class="col_one_third col_last">
									<label for="template-contactform-phone">Phone</label>
									<input type="text" id="template-contactform-phone" placeholder="Only Digits" name="phone" value="" class="sm-form-control" />
									<?php if(isset($phone_error)) echo $phone_error; ?>
								</div>

								<div class="clear"></div>
								<div class="clear"></div>

								<div class="col_full">
									<label for="template-contactform-message">Message <small>*</small></label>
									<textarea placeholder="Message" class="required sm-form-control" id="template-contactform-message" name="msg" rows="6" cols="30"></textarea>
									<?php if(isset($message_error)) echo $message_error; ?>
								</div>
								
								<div class="col_full">
									<button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="submit" value="submit">Send Message</button>
								</div>

							</form>
						
					</div><!-- .postcontent end -->

					<!-- Sidebar
					============================================= -->
					<div class="sidebar col_last nobottommargin">

						<address>
							<strong>Office:</strong><br>
							Multan, Pakistan<br>
						</address>

						<abbr title="Phone Number"><strong>Phone:</strong></abbr> 1234-1234567<br>
						<abbr title="Email Address"><strong>Email:</strong></abbr> exceptionalprogrammers@gmail.com

					
						<div class="widget noborder notoppadding">

							<a target="_blank" href="https://www.facebook.com/ExceptionalProgrammers" class="social-icon si-small si-dark si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a target="_blank" href="https://twitter.com/exceptionalprog" class="social-icon si-small si-dark si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>

							<a target="_blank" href="https://www.youtube.com/channel/UCnckIffIs_irwEwIjyoFCtQ" class="social-icon si-small si-dark si-youtube">
								<i class="icon-youtube-play"></i>
								<i class="icon-youtube-play"></i>
							</a>

							<a target="_blank" href="https://plus.google.com/u/0/111814927807344564394" class="social-icon si-small si-dark si-gplus">
								<i class="icon-gplus"></i>
								<i class="icon-gplus"></i>
							</a>

							<a target="_blank" href="https://www.dropbox.com/sh/xlbicsv6kp21yhx/AAB2_IhXaStVBNdDxDnEpKQXa?dl=0" class="social-icon si-small si-dark si-dropbox">
								<i class="icon-dropbox2"></i>
								<i class="icon-dropbox2"></i>
							</a>

							<a target="_blank" href="https://github.com/exceptionalprogrammers" class="social-icon si-small si-dark si-github">
								<i class="icon-github"></i>
								<i class="icon-github"></i>
							</a>

						</div>

					</div><!-- .sidebar end -->

				</div>

			</div>

		</section><!-- #content end -->

<?php include("footer.php"); ?>