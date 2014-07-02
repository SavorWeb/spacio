
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="_/js/responsive-nav.min.js"></script>
<script src="_/js/responsive-accordion.min.js"></script>
<script src="_/js/swipe.min.js"></script>
<script type="text/javascript">
	var navigation = responsiveNav(".nav-collapse", {
		customToggle: "#nav-toggle"
	});

	// var elem = document.getElementById('slider');
	
	// window.mySwipe = Swipe(elem, {
	// 	auto: 6000,
	// });
	window.mySwipe = $('.swipe').Swipe().data('Swipe');
	var portfolio = new Swipe(document.getElementById('portfolio'), {
		auto: 10000,
	});
	var current1 = new Swipe(document.getElementById('current1'), {
		auto: 6000,
	});
	var current2 = new Swipe(document.getElementById('current2'), {
		auto: 8000,
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

<script type="text/javascript" src="_/js/jquery.remodal.min.js"></script>

<script src="_/js/jquery.scrolly.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
	if ($(window).width() > 960) {
		$('.parallax').scrolly({bgParallax: true});
		$('.parallax-item').scrolly();
	}
});
</script>

<script src="_/js/script.min.js"></script>

</body>

</html>