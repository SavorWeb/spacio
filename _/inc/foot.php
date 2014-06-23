
<div class="row" id="contact">
	<form id="contact" action="contact-submit.php" method="post">
		<fieldset>	
			<div class="colspan12-6 colspan6-6 colspan2-2 as-grid formblock">
				<label for="name">Name</label>
				<input required type="text" name="name" placeholder="Full Name" title="Enter your name" class="required">
			</div>

			<div class="colspan12-6 colspan6-6 colspan2-2 as-grid with-gutter formblock">
				<label for="phone">Phone</label>
				<input type="tel" name="phone" placeholder="ex. (555) 555-5555">
			</div>

			<div class="formblock clear">
				<label for="email">E-mail</label>
				<input required type="email" name="email" placeholder="yourname@domain.com" title="Enter your e-mail address" class="required email">
			</div>
			
			<div class="formblock clear">
				<label for="message">Message</label>
				<textarea required name="message" placeholder="Your message" ></textarea>
			</div>
			
			<input type="submit" name="submit" class="button btn" id="submit" value="Send Message" />
		</fieldset>
	</form>	
</div>




<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="_/js/responsive-nav.min.js"></script>
<script src="_/js/responsive-accordion.min.js"></script>
<script src="_/js/swipe.min.js"></script>
<script type="text/javascript">
	var navigation = responsiveNav(".nav-collapse", {
		customToggle: "#nav-toggle"
	});

	var elem = document.getElementById('slider');
	
	window.mySwipe = Swipe(elem, {
		auto: 6000,
	});
</script>

<script src="_/js/jquery.validate.min.js"></script>
<script src="_/js/jquery.placeholder.min.js"></script>
<script src="_/js/jquery.form.min.js"></script>
<script>
	$(function(){
		$('#contact').validate({
			submitHandler: function(form) {
				$(form).ajaxSubmit({
					url: 'contact-submit.php',
					success: function() {
						$('#contact').hide();
						$('#contact-form').append("<p class='thanks'>Thanks! Your request has been sent.</p>")
					}
				});
			}
		});         
	});
</script>

<!-- Add fancyBox -->
<link rel="stylesheet" href="_/plugins/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="_/plugins/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

<!-- Optionally add helpers - button, thumbnail and/or media -->
<link rel="stylesheet" href="_/plugins/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
<script type="text/javascript" src="_/plugins/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="_/plugins/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

<link rel="stylesheet" href="_/plugins/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
<script type="text/javascript" src="_/plugins/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

<script src="_/js/masonry.min.js"></script>
<script src="_/js/imagesloaded.min.js"></script>
<script>
	$(document).ready( function() {
			    // Don't execute if we're in the Live Editor
			    if( !window.isCMS ) {
			        // Group images by gallery using `data-fancybox-group` attributes
			        var galleryId = 1;
			        $('.editable-gallery').each( function() {
			        	$(this).find('a').attr('data-fancybox-group', 'gallery-' + galleryId++);
			        });
			        // Initialize Fancybox
			        $('.editable-gallery a').fancybox({
			            // Use the `alt` attribute for captions per http://fancyapps.com/fancybox/#useful
			            beforeShow: function() {
			            	var alt = this.element.find('img').attr('alt');
			            	this.inner.find('img').attr('alt', alt);
			            	this.title = alt;
			            }
			        });
			    }
			});
</script>
<script>

	$("#gallery").imagesLoaded(function() {
		var container = document.querySelector('#gallery');
		
		var msnry = new Masonry( container, {
			columnWidth: 55,
			itemSelector: '.fancybox'
		});
		
		console.log("Ran ImagesLoaded");
	});
	
</script>


<script src="_/js/script.min.js"></script>

</body>

</html>