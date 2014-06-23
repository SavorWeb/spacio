This boilerplate is the starting point assembled by Ryan Maskell on April 21st 2014.

It uses the following technologies and plugins and bows to their greatness, they were developed by people like me, for people like us. Developers.

#Technologies

+ Framework: [Sassaparilla](http://sass.fffunction.co)
+ Preprocessing: [Mixture.io](http://mixture.io)

#Plugins

+ [Responsive Nav](http://www.responsive-nav.com)
+ [Transformicons](http://sarasoueidan.com/blog/navicon-transformicons/)
+ [Swipe.js](http://www.swipejs.com)

--
--- general script ---
--

<script type="text/javascript">
			var navigation = responsiveNav(".nav-collapse", {
			customToggle: "#nav-toggle"
		});

		var elem = document.getElementById('slider');
		
		window.mySwipe = Swipe(elem, {
		  	auto: 6000,
		});
</script>

### accordian

<script src="_/js/responsive-accordion.min.js"></script>

	<ul class="acc">
		<li>
			<div class="acc-head">Thing 1<i class="fa fa-chevron-down acc-plus fa-fw"></i><i class="fa fa-chevron-up acc-minus fa-fw"></i></div>
			<div class="acc-panel">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam, eveniet, eaque, autem beatae amet mollitia saepe minus fugit odit minima maxime harum explicabo ipsa natus est similique ab reprehenderit totam!</p>
			</div>
		</li>
		<li>
			<div class="acc-head">Thing 2<i class="fa fa-chevron-down acc-plus fa-fw"></i><i class="fa fa-chevron-up acc-minus fa-fw"></i></div>
			<div class="acc-panel">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, incidunt, maxime nostrum dolore eum dolores cum sunt ducimus debitis reiciendis praesentium molestias? Soluta, fugit, nisi odit nostrum at tempore architecto.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, repellat adipisci eius magni necessitatibus non soluta amet eligendi. Optio, consequuntur hic cumque dolorum ipsam doloribus repellendus harum unde consequatur odio?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, nobis, tenetur nihil quod itaque molestiae assumenda quam rem dolore quisquam facilis ea necessitatibus officiis praesentium labore doloribus voluptas consequuntur deserunt.</p>
			</div>
		</li>
		<li>
			<div class="acc-head">Thing 3<i class="fa fa-chevron-down acc-plus fa-fw"></i><i class="fa fa-chevron-up acc-minus fa-fw"></i></div>
			<div class="acc-panel">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, alias nemo ab modi porro quam ex temporibus animi ipsam laborum aperiam excepturi doloremque! Quia, fugiat culpa corporis obcaecati laborum atque.</p>
			</div>
		</li>
	</ul>


### slider

<script src="_/js/swipe.min.js"></script>
<script type="text/javascript">
		
		var elem = document.getElementById('slider');
		
		window.mySwipe = Swipe(elem, {
		  	auto: 6000,
		});

</script>

		<div id='slider' class='swipe'>
	  <div id="slider-pictures" class='swipe-wrap editable'>
	    <div class="repeatable"><img src="http://www.placehold.it/1000x300" alt=""></div>
	    <div class="repeatable"><img src="http://www.placehold.it/1000x300" alt=""></div>
	    <div class="repeatable"><img src="http://www.placehold.it/1000x300" alt=""></div>
	  </div>
	</div>

### contact


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

<?php
// Get Data 
$name = strip_tags($_POST['name']);
$email = strip_tags($_POST['email']);
$phone = strip_tags($_POST['phone']);

$message = strip_tags($_POST['message']);

// Send Message
$success = mail( "maskellryan@gmail.com", "Webmail",
"Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message\n",
"From: $name <$email>" );

// redirect to success page 
if ($success){
  header ("Location: thanks.php");
  exit;
}
else{
  header ("Location: error.php");
  exit;
}
?>

?>

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