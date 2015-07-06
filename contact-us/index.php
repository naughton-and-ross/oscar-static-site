<!DOCTYPE html>
<html>
	<head>
		<title>The (AppName) Platform</title>
		<?php include('../file/php/head.php'); ?>
		<link rel="stylesheet" href="file/css/contact-us.css"/>
		<script>
			$(function() {
			    $('.banner').unslider({
					speed: 600,               //  The speed to animate each slide (in milliseconds)
					delay: 4000,              //  The delay between slide animations (in milliseconds)
					complete: function() {},  //  A function that gets called after every slide animation
					keys: true,               //  Enable keyboard (left, right) arrow shortcuts
					dots: true,               //  Display dot navigation
					fluid: true              //  Support responsive design. May break non-responsive designs
				});
			});
		</script>
		<script>

			function slider() {
			    if (document.body.scrollTop > 80) //Show the slider after scrolling down 100px
			        $('.sliding-nav').stop().fadeIn(150);
			    else
			        $('.sliding-nav').stop().fadeOut(150); //200 matches the width of the slider
			}

			$(window).scroll(function () {
			    slider();
			});

			$( document ).ready(function() {
			    $('.intro').backstretch("./file/img/intro-bg/contact.jpg");
			    $('.sliding-nav').hide();
			    $('#flog').hide();
			    slider();
			    contWidth = $('.wrapper').width();
			    $('.sliding-nav').width(contWidth);
			});

			$(window).resize(function() {
				contWidth = $('.wrapper').width();
			    $('.sliding-nav').width(contWidth);
			});

		</script>
		<script>
		  $(function(){
		      $(".typed").typed({
		        strings: ["Dedicated Support", "Transparent Performance Information", "No Hidden Fees"],
		        typeSpeed: 10,
		        backDelay: 800,
		        loop: true,
		        cursorChar: ""
		      });
		  });
		</script>
	</head>
	<body>
		<div class="pure-g">
			<div class="pure-u-1 pure-u-l-2-24 pure-u-xl-5-24"></div>
			<div class="pure-u-1 pure-u-l-20-24 pure-u-xl-14-24 wrapper">
				<?php include('../file/php/header.php'); ?>
				<div class="pure-u-1 text-hero get-started">
					<div class="l-box">
						<p>Get in touch, commitment-free.</p>
					</div>
				</div>
				<div class="pure-u-1 thirds cta-form">
					<div class="pure-g">
						<div class="pure-u-1 pure-u-md-8-24">
							<div class="l-box">
							<img class="pure-img" src="file/img/hero9.jpg"/>
							</div>
						</div>
						<div class="pure-u-1 pure-u-md-8-24">
							<div class="l-box">
								<h1>Your key to a more efficient and modern work-cycle.</h1>
								<p>(AppName) is ready to make a difference in your school. Make an inquiry and be taken directly to our quote tool to receive a free quote.</p>
								<p>Fill out the form to make a request for a callback, or an information package by either email or post.</p>
								<!--div class="pure-g">
									<div class="pure-u-1-2">
										<p><i class="fa fa-life-ring"></i> Dedicated Support</p>
										<p><i class="fa fa-clock-o"></i> Trial period</p>
									</div>
									<div class="pure-u-1-2">
										<p><i class="fa fa-life-ring"></i> Dedicated Support</p>
										<p><i class="fa fa-clock-o"></i> Trial period</p>
									</div>
								</div-->
							</div>
						</div>
						<div class="pure-u-1 pure-u-md-8-24 form">
							<div class="l-box">
								<form class="pure-form" method="post" action="contact-us/form.handler.php">
									<fieldset class="pure-group">
								        <input type="text" class="pure-input-1" name="name" placeholder="Name">
								        <input type="number" class="pure-input-1" name="phone" placeholder="Contact number"/>
								        <input type="email" class="pure-input-1" name="email" placeholder="Email">
								    </fieldset>
								    <fieldset class="pure-group">
								        <input type="text" class="pure-input-1" name="schoolName" placeholder="School name">
								        <input type="number" class="pure-input-1" name="schoolPop" placeholder="Approx. no. of students">
								        <input type="text" class="pure-input-1" name="schoolLoc" placeholder="School address (optional)">
								    </fieldset>
								    <fieldset class="pure-group">
									    <label for="person-type">I am a...</label>
									    <select id="person-type" name="personType" class="pure-input-1">
										    <option value="teach">Teacher</option>
										    <option value="leadTeach">Leading Teacher</option>
										    <option value="elearn">eLearning Leader</option>
										    <option value="assPric">Assistant Principal</option>
										    <option value="princ">Principal</option>
										    <option value="genPub">General Public</option>
									    </select>
								    </fieldset>
								    <fieldset class="pure-group">
									    <label for="state">My school is in...</label>
									    <select id="state" name="state" class="pure-input-1">
											<option value="ACT">Australian Capital Territory</option>
											<option value="NSW">New South Wales</option>
											<option value="NT">Northern Territory</option>
											<option value="QLD">Queensland</option>
											<option value="SA">South Australia</option>
											<option value="TAS">Tasmania</option>
											<option value="VIC">Victoria</option>
											<option value="WA">Western Australia</option>
									    </select>
								    </fieldset>
								    <fieldset class="pure-group">
									    <label for="contact-type">I would like a...</label>
									    <select id="contact-type" name="actionReq" class="pure-input-1">
										    <option value="call">Callback</option>
										    <option value="infoEmail">Information package by email</option>
										    <option value="infoPost" id="package-post">Information package by post</option>
										    <option value="quote">Quote</option>
									    </select>
								    </fieldset>
								    <fieldset class="pure-group">
								    	<input type="submit" class="pure-button" value="Submit" disabled/>
								    </fieldset>
								</form>
							</div>
						</div>
						<div class="pure-u-1 pure-u-md-8-24">
							<div class="l-box">
								<h1>Be a part of making (AppName) even better.</h1>
								<p>Using (AppName) in your school means more than just the benefits of the service. You'll have the opportunity to be deeply involved in the development of the service over time.</p>
							</div>
						</div>
						<div class="pure-u-1 pure-u-md-8-24">
							<div class="l-box">
								<h1>Take your classwork everywhere.</h1>
								<p>Lugging piles of classwork grows tiresome fairly quickly, no? Data online isn't completely weightless, but the entire internet only weighs about as much as a grain of sand. Much easier on your back.</p>
							</div>
						</div>
						<div class="pure-u-1 pure-u-md-8-24">
							<div class="l-box">
								<h1>Questions?</h1>
								<p>If you have any questions or comments, please feel free to get in touch through any of the methods below:</p>
								<p><i class="fa fa-envelope-o"></i> sales@n-r.co</p>
								<p><i class="fa fa-phone-square"></i> 03 9718 0107</p>
							</div>
						</div>
					</div>
				</div>
				<div class="pure-u-1 footer">
					<p>Hosted on: <?php echo(gethostname()); ?></p>
				</div>
			</div>
			<div class="pure-u-1 pure-u-l-2-24 pure-u-xl-5-24"></div>
		</div>
	</body>
</html>
