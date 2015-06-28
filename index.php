<!DOCTYPE html>
<html>
	<head>
		<title>The (AppName) Platform</title>
		<?php include('file/php/head.php'); ?>
		<script>
			$(function() {
			    $('.banner').unslider({
					speed: 600,               //  The speed to animate each slide (in milliseconds)
					delay: 4000,              //  The delay between slide animations (in milliseconds)
					complete: function() {},  //  A function that gets called after every slide animation
					keys: false,               //  Enable keyboard (left, right) arrow shortcuts
					dots: true,               //  Display dot navigation
					fluid: true              //  Support responsive design. May break non-responsive designs
				});
			});
		</script>
		<?php $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
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
			    $('.intro').backstretch("<?php echo($actual_link); ?>file/img/intro-bg/2.jpg");
			    $('.sliding-nav').hide();
			    slider();
			    contWidth = $('.wrapper').width();
			    $('.sliding-nav').width(contWidth);
			});

			$(window).resize(function() {
				contWidth = $('.wrapper').width();
			    $('.sliding-nav').width(contWidth);
			});

		</script>
	</head>
	<body>
		<div class="pure-g">
			<div class="pure-u-1 pure-u-xl-5-24"></div>
			<div class="pure-u-1 pure-u-xl-14-24 wrapper">
				<?php include('file/php/header.php'); ?>
				<div class="pure-u-1 text-hero all-you-need">
					<div class="l-box">
						<p>All you need to take your classwork everywhere.</p>
					</div>
				</div>
				<div class="pure-u-1 blocks">
					<div class="pure-g">
						<div class="pure-u-1 pure-u-md-1-2 pure-u-xl-6-24 block-item">
							<div class="l-box">
								<span><i class="fa fa-tasks"></i></span>
								<p>Task management</p>
								<p>(AppName) is built for management every task, for every class. Whether they be large, multi-submission assignments, or smaller worksheet and single-submission tasks.</p>
							</div>
						</div>
						<div class="pure-u-1 pure-u-md-1-2 pure-u-xl-6-24 block-item">
							<div class="l-box">
								<span><i class="fa fa-users"></i></span>
								<p>Collaboration tools</p>
								<p>(AppName) works off your existing school infrastructure. Using every user's existing credentials. No complicated sign-up process is required.</p>
							</div>
						</div>
						<div class="pure-u-1 pure-u-md-1-2 pure-u-xl-6-24 block-item">
							<div class="l-box">
								<span><i class="fa fa-list-ul"></i></span>
								<p>Multiple marking schemes</p>
								<p>(AppName) is focused on providing meaningful and insightful information in the simplest ways possible, and works to put that information to the best use that it can be.</p>
							</div>
						</div>
						<div class="pure-u-1 pure-u-md-1-2 pure-u-xl-6-24 block-item">
							<div class="l-box">
								<span><i class="fa fa-file-text"></i></span>
								<p>Report generation</p>
								<p>(AppName) operates with constant contingency backup systems on 3 continents. 99.9% uptime guaranteed.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="pure-u-1 blocks">
					<div class="pure-g">
						<div class="pure-u-1 pure-u-md-1-2 pure-u-xl-6-24 block-item">
							<div class="l-box">
								<span><i class="fa fa-share-square-o"></i></span>
								<p>Resource sharing</p>
								<p>(AppName) is built for speed, and uses some of the fastest databasing software available.</p>
							</div>
						</div>
						<div class="pure-u-1 pure-u-md-1-2 pure-u-xl-6-24 block-item">
							<div class="l-box">
								<span><i class="fa fa-sign-out"></i></span>
								<p>Parental access</p>
								<p>(AppName) works off your existing school infrastructure. Using every user's existing credentials. No complicated sign-up process is required.</p>
							</div>
						</div>
						<div class="pure-u-1 pure-u-md-1-2 pure-u-xl-6-24 block-item">
							<div class="l-box">
								<span><i class="fa fa-cubes"></i></span>
								<p>Smart overviews</p>
								<p>(AppName) is focused on providing meaningful and insightful information in the simplest ways possible, and works to put that information to the best use that it can be.</p>
							</div>
						</div>
						<div class="pure-u-1 pure-u-md-1-2 pure-u-xl-6-24 block-item">
							<div class="l-box">
								<span><i class="fa fa-mobile"></i></span>
								<p>Mobile-friendly</p>
								<p>(AppName) is responsive, meaning that that is changes dynamically depending on whether you're on mobile,  a tablet, or a laptop or desktop computer without the need for a separate app.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="pure-u-1 slider screens">
					<div class="banner">
					    <ul>
					        <li><img class="pure-img" src="file/img/hero1.jpg"/></li>
					        <li><img class="pure-img" src="file/img/hero7.jpg"/></li>
					        <li><img class="pure-img" src="file/img/hero8.jpg"/></li>
					    </ul>
					</div>
				</div>
				<div class="pure-u-1 blocks">
					<div class="pure-g">
						<div class="pure-u-1 pure-u-md-1-2 pure-u-xl-6-24 block-item">
							<div class="l-box">
								<span><i class="fa fa-envelope-o"></i></span>
								<p>Smart e-mailing</p>
								<p>(AppName)'s email notification system is fully-featured and customisable to receive more or less depending on what you prefer.</p>
							</div>
						</div>
						<div class="pure-u-1 pure-u-md-1-2 pure-u-xl-6-24 block-item">
							<div class="l-box">
								<span><i class="fa fa-list-alt"></i></span>
								<p>Multiple tasks structures</p>
								<p>Whether your task requires a drafting process, multiple submissions, or it's smaller single-submission or checklist task, (AppName) is build to accommodate them all.</p>
							</div>
						</div>
						<div class="pure-u-1 pure-u-md-1-2 pure-u-xl-6-24 block-item">
							<div class="l-box">
								<span><i class="fa fa-bar-chart"></i></span>
								<p>Task Analytics</p>
								<p>(AppName) keeps track of detailed analytics about each task, including student exposure, engagement and smart notifications.</p>
							</div>
						</div>
						<div class="pure-u-1 pure-u-md-1-2 pure-u-xl-6-24 block-item">
							<div class="l-box">
								<span><i class="fa fa-globe"></i></span>
								<p>Always up</p>
								<p>(AppName) operates with constant contingency backup systems on 3 continents. 99.9% uptime guaranteed.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="pure-u-1 blocks">
					<div class="pure-g">
						<div class="pure-u-1 pure-u-md-1-2 pure-u-xl-6-24 block-item">
							<div class="l-box">
								<span><i class="fa fa-fighter-jet"></i></span>
								<p>Fast</p>
								<p>(AppName) is built for speed, and uses some of the fastest databasing software available.</p>
							</div>
						</div>
						<div class="pure-u-1 pure-u-md-1-2 pure-u-xl-6-24 block-item">
							<div class="l-box">
								<span><i class="fa fa-clipboard"></i></span>
								<p>No sign-up needed</p>
								<p>(AppName) works off your existing school infrastructure. Using every user's existing credentials. No complicated sign-up process is required.</p>
							</div>
						</div>
						<div class="pure-u-1 pure-u-md-1-2 pure-u-xl-6-24 block-item">
							<div class="l-box">
								<span><i class="fa fa-files-o"></i></span>
								<p>Data-rich</p>
								<p>(AppName) is focused on providing meaningful and insightful information in the simplest ways possible, and works to put that information to the best use that it can be.</p>
							</div>
						</div>
						<div class="pure-u-1 pure-u-md-1-2 pure-u-xl-6-24 block-item">
							<div class="l-box">
								<span><i class="fa fa-check-circle"></i></span>
								<p>Ready for your school</p>
								<p>Get in touch with us now to begin the process, and have (AppName) up-and-running in your school in 96 hours.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="pure-u-1 text-hero roadmap">
					<div class="l-box">
						<p>This is just the beginning. Look at our roadmap.</p>
					</div>
				</div>
				<div class="pure-u-1 halves no-signup">
					<div class="pure-g">
						<div class="pure-u-1 pure-u-lg-1-2 half-item">
							<img class="pure-img" src="file/img/hero4.jpg"/>
						</div>
						<div class="pure-u-1 pure-u-lg-1-2 half-item text">
							<div class="l-box">
								<h1>Everyone's already online.</h1>
								<p>While some other services rely on individual teachers and students signing up, (AppName) is a centralised system that works off your existing school network, so there's no set-up required of each user.</p>
								<p>If your school is on CASES21, then we can set you up, and have you up-and-running, almost immediately. If your school does not operate on CASES, it by no means excludes you from the (AppName) platform. We can work with you to develop custom solutions to retrieve the data we need.</p>
								<div class="pure-g">
									<div class="pure-u-2-24">
										<p class="qa">Q</p>
									</div>
									<div class="pure-u-20-24">
										<p>What CASES data does (AppName) need access to?</p>
									</div>
								</div>
								<div class="pure-g">
									<div class="pure-u-2-24">
										<p class="qa">A</p>
									</div>
									<div class="pure-u-20-24">
										<p>(AppName) needs access to student records and teacher records, including photos. As well as that, we need basic timetable data in order to generate a student's (and teacher's) class-list &#8212; but the time class schedule isn't required. That's it! We do the rest.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="pure-u-1 halves uptime">
					<div class="pure-g">
						<div class="pure-u-1 pure-u-lg-1-2 half-item text">
							<div class="l-box">
								<h1>Our systems work. All the time.</h1>
								<p>While some other services rely on individual teachers and students signing up, (AppName) is a centralised system that works off your existing school network, so there's no set-up required of each user.</p>
								<p>As well as that, we push major system updates and improvements <i>at least</i> once a month, and send a complete change-log to system administrators, APs, and anyone you nominate.</p>
								<div class="pure-g">
									<div class="pure-u-2-24">
										<p class="qa">Q</p>
									</div>
									<div class="pure-u-20-24">
										<p>How often does (AppName) 'go down'?</p>
									</div>
								</div>
								<div class="pure-g">
									<div class="pure-u-2-24">
										<p class="qa">A</p>
									</div>
									<div class="pure-u-20-24">
										<p>Global backup systems prevent almost all down-time. To date, we have never had an unscheduled shutdown of services.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="pure-u-1 pure-u-lg-1-2 half-item">
							<img class="pure-img" src="file/img/hero2.jpg"/>
						</div>
					</div>
				</div>
				<div class="pure-u-1 halves package">
					<div class="pure-g">
						<div class="pure-u-1 pure-u-lg-1-2 half-item">
							<img class="pure-img" src="file/img/hero3.jpg"/>
						</div>
						<div class="pure-u-1 pure-u-lg-1-2 half-item text">
							<div class="l-box">
								<h1>All-inclusive. No hidden fees.</h1>
								<p>(AppName) is not a package-for-pay application, and we don't offer additional functionalities that come at a hidden extra cost. We are completely transparent when it comes to pricing. </p>
								<p>We also guarantee that the per-student price of (AppName) will not rise for the first 36 months of your service. <i>Plus</i>, you'll be eligible for discounts if you sign your school up to beta programs, where we can test new and upcoming features from the (AppName) platform before they are released to everyone.</p>
								<div class="pure-g">
									<div class="pure-u-2-24">
										<p class="qa">Q</p>
									</div>
									<div class="pure-u-20-24">
										<p>How much does (AppName) cost?</p>
									</div>
								</div>
								<div class="pure-g">
									<div class="pure-u-2-24">
										<p class="qa">A</p>
									</div>
									<div class="pure-u-20-24">
										<p>(AppName) is sold at  a per-student price. (Teachers are always free). Get in touch for an instant quote.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="pure-u-1 halves improving">
					<div class="pure-g">
						<div class="pure-u-1 pure-u-lg-1-2 half-item text">
							<div class="l-box">
								<h1>Never finished. Always improving.</h1>
								<p>Developing, expanding and improving (AppName) is something that happens 24/7, literally. If it's not us doing the work, it's our automated systems that are working to identify bottlenecks and bugs for us to seek and destroy.</p>
								<p>We are always adding new features, building the (AppName) roadmap, and improving your end-product.</p>
								<div class="pure-g">
									<div class="pure-u-2-24">
										<p class="qa">Q</p>
									</div>
									<div class="pure-u-20-24">
										<p>What CASES data does (AppName) need access to?</p>
									</div>
								</div>
								<div class="pure-g">
									<div class="pure-u-2-24">
										<p class="qa">A</p>
									</div>
									<div class="pure-u-20-24">
										<p>(AppName) needs access to student records and teacher records, including photos. That's it! We do the rest.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="pure-u-1 pure-u-lg-1-2 half-item">
							<img class="pure-img" src="file/img/hero6.jpg"/>
						</div>
					</div>
				</div>
				<div class="pure-u-1 halves pretty">
					<div class="pure-g">
						<div class="pure-u-1 pure-u-lg-1-2 half-item">
							<img class="pure-img" src="file/img/hero5.jpg"/>
						</div>
						<div class="pure-u-1 pure-u-lg-1-2 half-item text">
							<div class="l-box">
								<h1>A site for sore eyes.</h1>
								<p>Through the devastatingly ugly landscape of educational software, (AppName) is a pleasant surprise among them. (AppNames)'s design is not only exceptionally functional, but also a much-needed sight for sore eyes, compared to its competitors.</p>
								<p>If your school is on CASES21, then we can set you up, and have you up-and-running, almost immediately. If your school does not operate on CASES, it by no means excludes you from the (AppName) platform. We can work with you to develop custom solutions to retrieve the data we need.</p>
								<div class="pure-g">
									<div class="pure-u-2-24">
										<p class="qa">Q</p>
									</div>
									<div class="pure-u-20-24">
										<p>What CASES data does (AppName) need access to?</p>
									</div>
								</div>
								<div class="pure-g">
									<div class="pure-u-2-24">
										<p class="qa">A</p>
									</div>
									<div class="pure-u-20-24">
										<p>(AppName) needs access to student records and teacher records, including photos. That's it! We do the rest.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="pure-u-1 text-hero cta">
					<div class="l-box">
						<p>Ready to start? You'll be up-and-running in no time. Get in touch now &rarr;</p>
					</div>
				</div>
				<div class="pure-u-1 footer"></div>
			</div>
			<div class="pure-u-1 pure-u-xl-5-24"></div>
		</div>
	</body>
</html>
