	<footer>
	    <small class="h-centred v-centred copyright">&copy; Copyright &nbsp;<span id="year">1989</span> &nbsp; Aimee Johanan</small>
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
