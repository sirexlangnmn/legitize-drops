<div id="gtco-contact" data-section="contact" class="gtco-section animate-box">
	<div class="overlay"></div>
	<div id="gtco-container">
			<div class="row animate-box">
				<div class="container">
					<!-- <div class="col-md-8 col-md-offset-2 text-center gtco-heading"> -->
					<div class="col-xl-12 col-md-12 col-sm-12 col-xs-12 text-center gtco-heading" style="margin-bottom: -10px">
						<h2>Contact Us</h2>
						<p style="margin-bottom: 30px">We want to hear you.
						</p>
					</div>
				</div>
			</div>
			<?php include("app/functions.php"); ?>			
			<div class="container">
				<div class="row">
				<div class="col-md-6 col-md-push-6 animate-box">
					<form action="app/classes/handler.php" method="POST">
						<input type="hidden" name="message_action" value="<?php echo isset( $get_message ) ? 'update_message' : 'create_message' ?>">
						<div class="form-group">
							<label for="name" class="sr-only">Name</label>
							<input type="text" name="name" class="form-control" placeholder="Name">
						</div>
						<div class="form-group">
							<label for="email" class="sr-only">Email</label>
							<input type="email" name="email" class="form-control" placeholder="Email">
						</div>
						<div class="form-group">
							<label for="message" class="sr-only">Message</label>
							<textarea name="message" name="message" class="form-control" cols="30" rows="7" placeholder="Message"></textarea>
						</div>
						
						<button type="submit" class="btn btn-primary btn-lg" onclick="return confirm('Message Sent')">Submit Message</button>
						
					</form>
				</div>
				<div class="col-md-4 col-md-pull-6 animate-box">
					<div class="gtco-contact-info">
						<ul>
							<li><a href="#"><i class="icon-phone" style="margin-left: -30px; margin-right: 10px"></i>+63 909 820 2040</a></li>
							<li><a href="#"><i class="icon-mail2" style="margin-left: -30px; margin-right: 10px"></i>Legitized.drops@gmail.com</a></li>
							<li><a href="#"><i class="icon-paper-plane" style="margin-left: -30px; margin-right: 10px"></i>telegram/legitize_drops</a></li>
							<li><a href="https://www.facebook.com/Legitizedrops" target="_blank">
								<i class="icon-facebook" style="margin-left: -30px; margin-right: 10px"></i>Facebook</a></li>
							<li><a href="http://twitter.com/Legitize_drops" target="_blank">
								<i class="icon-twitter" style="margin-left: -30px; margin-right: 10px"></i>Twitter</a></li>
							<li><a href="https://www.linkedin.com/in/legitize-drops-816801165/" target="_blank">
								<i class="icon-linkedin" style="margin-left: -30px; margin-right: 10px"></i>Linkedin</a></li>
							<li><a href="https://medium.com/@legitized.drops" target="_blank">
								<img src="view/modules/pages_admin/images/icon/medium.png" style="height: 20px; width: 20px; margin-left: -30px; margin-right: 10px">
								<i class="fa fa-medium"></i>Medium</a></li>
							<li><img src="view/modules/pages_admin/images/icon/reddit.png" style="height: 20px; width: 20px; margin-left: -30px; margin-right: 10px">
								<a href="https://www.reddit.com/user/LegitizeDrops/" target="_blank">
								<i class="icon-reddit"></i>Reddit</a>
							</li>
							<!-- <li class="icon-reddit">
								<img src="assets/images/icon/reddit.png" style="height: 20px; width: 20px; margin-left: -50px; margin-right: 20px">
								<a href="https://www.reddit.com/user/LegitizeDrops/">Reddit</a>
							</li> -->
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>