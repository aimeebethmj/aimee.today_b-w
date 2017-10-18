	<footer class="">
		<!-- <div class="row">
	      	<div class="twelve columns h-centred">
	      		<h3 class="">
	      			<a href="<?php echo site_url(); ?>/about">
		            <span>Hello lovely!</span> 
		            <span>I’m Aimee. I’m on a journey to</span>
		            <span>share my gifts,</span> 
		            <span>be <i>braver</i>, more <i>creative</i> and</span> 
		            <span>enjoy every moment...</span>
		            <span>Oh hey, you too? :)</span>
		            </a>
	          	</h3>
	      	</div>
	    </div> -->
	  <div class="footer-content">  
		  <!-- <div class="row" id="todayMessage">
	          <div class="twelve columns h-centred v-centred">
	            <a href="<?php echo site_url(); ?>"><img alt="Today's inspiration: Do that thing!" src="<?php theActiveThemeDirectory(); ?>images/AimeeTodayLogoHandwriting_sea.svg"></a>
	          </div>
	      </div> -->
		    <div class="row">
		    	<div class="twelve columns h-centred">
		    		<!-- Begin MailChimp Signup Form -->
						<!-- <div id="mc_embed_signup">
							<form action="//studio.us9.list-manage.com/subscribe/post?u=74f223cf5f56ca86880fe146f&amp;id=93ad4d6aa7" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
							    <div id="mc_embed_signup_scroll">
								<h2>Need a push to get moving on that dream of yours?</h2>
								<h3>Get your free 1-Step-a-day printable to start making real progress today</h3>
							<div class="mc-field-group">
								<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
								<label for="mce-EMAIL">Email --> <!-- <span class="asterisk">*</span> -->
							<!-- </label>
							</div>
							<div class="mc-field-group">
								<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
								<label for="mce-FNAME">Name</label>
							</div>
								<div id="mce-responses" class="clear">
									<div class="response" id="mce-error-response" style="display:none"></div>
									<div class="response" id="mce-success-response" style="display:none"></div>
								</div> -->    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
							    <!-- <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_74f223cf5f56ca86880fe146f_93ad4d6aa7" tabindex="-1" value=""></div>
							    <div class="clear"><input type="submit" value="Yes! Send it to me" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
							    </div>
							</form>
						</div> -->

						<!--End mc_embed_signup-->
		    	</div>
		    </div>
	    </div>
	    <!-- <div class="row">
	    	<img src="<?php theActiveThemeDirectory(); ?>images/AimeeToday_FREE_DREAMS_PROGRESS_PRINTABLE.jpg">
	    </div> -->
	    <small class="h-centred v-centred">&copy; Copyright &nbsp; <span id="year">1989</span>, Aimee Johanan</small>
	</footer>

	<?php wp_footer(); ?>

	<script src="<?php theActiveThemeDirectory(); ?>js/jquery-3.2.0.slim.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() 
		{
			if (jQuery) 
			{  
	          	// jQuery is loaded  
	          	// console.log("jQuery yas")
	        
				$(window).scroll( function()
				{
					// console.log('scrolling')
					var scrollTop = $(this).scrollTop()
					var opacity = '1'
					var translucent = '0.8'
					if (scrollTop < 20) opacity = '0' 
					$('#home-link').css({'opacity': opacity})
				})
	        } 
	        else 
	        {
	          	// jQuery is not loaded
	          	console.log("jQuery nope")
	        }
		})

			var today = new Date()
			var year = today.getFullYear()
			var span = document.getElementById("year")
			span.innerHTML = year

	</script>
	<!--<script type="text/javascript" async defer src="//assets.pinterest.com/js/pinit.js"></script>-->
</body>
</html>