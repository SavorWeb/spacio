</div>
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
		disableScroll: false,
		stopPropagation: true,
	});
	var current1 = new Swipe(document.getElementById('current1'), {
		// auto: 19000,
		disableScroll: false,
		stopPropagation: true,
	});
	var current2 = new Swipe(document.getElementById('current2'), {
		// auto: 15000,
		disableScroll: false,
		stopPropagation: true,
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

<script type="text/javascript" src="_/js/headhesive.min.js"></script>

<script>
	

        // Set options
        var options = {
            offset: '#showHere',
            classes: {
                clone:   'banner--clone',
                stick:   'banner--stick',
                unstick: 'banner--unstick'
            }
        };

        // Initialise with options
        var banner = new Headhesive('.banner', options);

        // Headhesive destroy
        // banner.destroy();
    
</script>

<script src="_/js/jquery.scrolly.min.js"></script>
<script type="text/javascript">

$(document).ready(function () {

	$('.dropdown').hide();

	$('.menu-btn').on('click', function(){
		$('.dropdown').slideToggle();
	});

	    // Don't execute if we're in the Live Editor
    if ( window.isCMS ) {

    } else {
    	$(window).load(function(){
			if ($(window).width() > 1100) {
				$('.parallax').scrolly({bgParallax: true});
				$('.parallax-item').scrolly();
			}
    	});
    }
});
</script>
<script>
	$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
</script>
<script src="_/js/script.min.js"></script>

</body>

</html>