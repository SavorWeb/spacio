
$(function() {

	function filterPath(string) {
		return string
		.replace(/^\//,'')
		.replace(/(index|default).[a-zA-Z]{3,4}$/,'')
		.replace(/\/$/,'');
	}

	var locationPath = filterPath(location.pathname);
	var scrollElem = scrollableElement('html', 'body');

	// Any links with hash tags in them (can't do ^= because of fully qualified URL potential)
	$('a[href*=#]').each(function() {

		// Ensure it's a same-page link
		var thisPath = filterPath(this.pathname) || locationPath;
		if (  locationPath == thisPath
			&& (location.hostname == this.hostname || !this.hostname)
			&& this.hash.replace(/#/,'') ) {

				// Ensure target exists
				var $target = $(this.hash), target = this.hash;
				if (target) {

					// Find location of target
					var targetOffset = $target.offset().top;
					$(this).click(function(event) {

						// Prevent jump-down
						event.preventDefault();

						// Animate to target
						$(scrollElem).animate({scrollTop: targetOffset}, 400, function() {

							// Set hash in URL after animation successful
							location.hash = target;

						});
					});
				}
		}

	});

	// Use the first element that is "scrollable"  (cross-browser fix?)
	function scrollableElement(els) {
		for (var i = 0, argLength = arguments.length; i <argLength; i++) {
			var el = arguments[i],
			$scrollElement = $(el);
			if ($scrollElement.scrollTop()> 0) {
				return el;
			} else {
				$scrollElement.scrollTop(1);
				var isScrollable = $scrollElement.scrollTop()> 0;
				$scrollElement.scrollTop(0);
				if (isScrollable) {
					return el;
				}
			}
		}
		return [];
	}

});

/*******

  *** Anchor Slider by Cedric Dugas   ***
  *** Http://www.position-absolute.com ***
  
  Never have an anchor jumping your content, slide it.

  Don't forget to put an id to your anchor !
  You can use and modify this script for any project you want, but please leave this comment as credit.
  
*****/
    

jQuery(function ($) {
	/* You can safely use $ in this code block to reference jQuery */
	
$(document).ready(function() {
  $("a.anchorLink").anchorAnimate();
});

jQuery.fn.anchorAnimate = function(settings) {

  settings = jQuery.extend({
    speed : 1100
  }, settings); 
  
  return this.each(function(){
    var caller = this
    $(caller).click(function (event) {  
      event.preventDefault()
      var locationHref = window.location.href
      var elementClick = $(caller).attr("href")
      
      var destination = $(elementClick).offset().top;
      $("html:not(:animated),body:not(:animated)").animate({ scrollTop: destination}, settings.speed, function() {
        window.location.hash = elementClick
      });
        return false;
    })
  })
}
});
		