<?php 
	
	$tileID = $_GET['tile_id'];
	
	$img = null;
	$span = null;
	
	switch ($tileID) {
		case "task-mgmt":
			$title = "Task management";
			$body = "Task management is the core of ClassFox. It's a tool to manage all of your classwork in one place, for every student, during the entire task life-cycle. From drafting and refining tasks with other teachers, to issuing them and making sure your students are aware of it, to taking submissions for that task and issuing assessments.</p><p>Get detailed analytics about your task and every student's engagement for that task.";
			break;
		case "collab":
			$title = "Collaboration tools";
			$body = "ClassFox is a place to collaborate with other teachers when creating tasks for your classes. Use ClassFox to draft, refine and eventually issue tasks to your classes. Create your own groups of different teachers for your KLA or faculty.</p><p>ClassFox also allows you to share files and resources with each other, and associate them with tasks, or keep them within your group as common files.</p><p>ClassFox also makes sure that it's easy to tend to students anywhere, not just the classroom. A student may pose a question, visible either to you or the entire class, for you to answer. This allows students to engage in a classroom-like dialogue within ClassFox at any time.";
			break;
		case "task-structures":
			$title = "Multiple task structures";
			$body = "It's important that ClassFox works exactly the way you need it to, and not every task is the same. ClassFox allows you to define exactly what kind of task you're creating. Whether it be a single submission task which students are immediately assessed on, or a more complex task that requires students to first submit a draft before their final. When a draft is submitted, you can review the submission and submit feedback for the student, before they submit a final.</p><ul><li>'Mark as complete' task &#8212; This is when a student is not required to make any submission, but instead simply indicates that the task is complete. This is ideal for small tasks such as worksheets and revision work that can take place outside of ClassFox.</li><li>Single submission task &#8212; A task that requires a single work submission by each student, which they are graded on.</li><li>'Draft or Final' task &#8212; This is a task structure that allows for both draft submissions, and final submissions. A student is not required to submit a draft before their final. The key difference between a draft submission and a final submission is that a draft submission cannot be graded upon. Instead, feedback is submitted to the student.</li><li>'Draft then Final' task &#8212; This task structure ensures that all students first submit a draft before they are able to submit a final. This means that every student must have their draft seen by their teacher, and feedback issued, before final submissions are open to that student.</li></ul>";
			break;
		case "reports":
			$title = "Report generation";
			$body = "ClassFox is an extremely powerful tool that works to save you time when compiling student reports.</p><p>When it comes to report-writing time, all of a students academic performance data will already be stored in ClassFox, as long as all major tasks have been run and assessed through the tool. From here, reports for each student can automatically be compiled and generated based on aggregated assessment data.</p><p>ClassFox is extremely intelligent and will generate natural-language paragraphs of text that describe a students performance, as well as displaying performance data in raw forms; Effectively putting to work both qualitative, and quantitate data form to create a student's reports.";
			break;
		case "sharing":
			$title = "Resource sharing";
			$body = "ClassFox let's teachers define their own working groups, whether they want to collaborate with their KLA, or specific teachers that they specify. Of course, a teacher has control over both who they wish to be in their groups, but also to decide whether they want to be a part of a group they've been invited to or not.</p><p>Resource sharing is a great tool to cut down on cluttered and unorganised emails, and provides a place to work together on creating classwork with your colleagues easily, from anywhere.";
			$span = "Collaboration tools";
			break;
		case "parents":
			$title = "Parental access";
			$body = "ClassFox is big on transparency on every level, and allowing parents to see their child's performance is no exception. ClassFox provides a place for parents to log in and see all of their child's performance, as well as all of their active tasks and when those tasks are due. Great for parents that want to keep an eye on their child's workload, and exactly how their child is going in every class, task-by-task.";
			break;
		case "smart":
			$title = "Smart overviews";
			$body = "Services other than ClassFox often heap notifications and actions onto the user and expect them to decrypt them themselves, which takes time and often leaves details missed. ClassFox intelligently groups your notifications and required actions into streamlined, natural-language overviews which allow you to fully and easily understand everything you need to do to get caught up with all of your set tasks.";
			break;
		case "multi-scheme":
			$title = "Multiple marking schemes";
			$body = "Not all set tasks are alike, and some require different marking schemes than others to properly convey exactly how a student performed. We work with teachers to build the most effective methods of assessment for tasks. Currently, there are three major kinds of assessment which you can specify when you create a task. They are:</p><ul><li>'X out of Y' Marking &#8212; This is one of the most common forms of task assessment. You specify the total possible marks (100 by default), and assess each student with a number of those marks. <i>eg. 86/100.</i></li><li>Letter-based marking &#8212; A more traditional form of marking, this marking structure is simple letter-based representation of a student's performance. <i>eg. A+, B-, etc.</i></li><li>Word-based marking &#8212; This popular type of marking scheme is popular for Australian schools and works off-of a tier-based system. <i>eg. \"Excellent\", \"Very Good\", etc.</i></li></ul>";
			break;
		case "emails":
			$title = "Smart e-mailing";
			$body = "Often, TMS and LMS systems will abuse your email inbox and send excessive amounts of unnecessary email, cluttering your inbox and often not working to help you achieve anything meaningful with their service.</p><p>ClassFox is different, and intelligently groups notifications and other information that might otherwise be sent in separate emails, and places them together to make sure that your inbox isn't assulted with different messages, and you can act on all of your notifications from one place.";
			break;
		case "mobile":
			$title = "Mobile-friendly";
			$body = "ClassFox is built for use both on your desktop and laptop computers, as well as tablets and your mobile phones. For this reason, there is no separate app needed for ClassFox, and everything can happen on the web.";
			break;
		case "analytics":
			$title = "Task and student analytics";
			$body = "We collect lots of data about how and when students interact with tasks. Teachers have access to this information to see exactly who has accessed the task, who has downloaded the resources, and who is yet to see it.</p><p>We can use this information to create deeply insightful information about the learning habits of students, such as by calculation the average time it takes a particular student to initially engage with the task, and the amount of time between a student first engaging with a task, and their submission time.";
			break;
		case "always":
			$title = "Always up";
			$body = "ClassFox has continuous backup systems all around the world. If ClassFox is down, it'll be back very soon. Guaranteed.";
			break;
		case "fast":
			$title = "Fast";
			$body = "ClassFox is built on a dynamic, scalable cloud network, meaning that if the capacity of our servers are reached, instead of going down for some users, we can immediately deploy more computers to allow us to sustain that traffic. The result is far less downtime due to traffic than any other similar service.";
			break;
		case "signup":
			$title = "No sign-up needed";
			$body = "ClassFox uses your existing school admin data to operate from. Namely, CASES21 data is used to populate our system with your school's students, teachers, class-lists and class information. That's all we need to get started.";
			break;
		case "data":
			$title = "Data-rich";
			$body = "ClassFox is built to be data-efficient, meaning that we provide you with as much information as possible per screen, without feeling overwhelmed. Instead of clicking through menus, finding hidden information and losing yourself within our system, all relevant and important data is right there in front of you to see as quickly as possible.";
			break;
		case "ready":
			$title = "Ready for your school";
			$body = "Just get in touch.";
			break;
		default:
			$title = null;
			$body = "Something went wrong!";
			break;
	}
	
?>
<script>
	$("h1.expand-close").click(function() {
		var currentExpand = $(this).closest('.block-expand-wrap');
		$(this).closest('.block-expand-wrap').slideUp();
	});
</script>
<div class="pure-g">
	<div class="pure-u-1 pure-u-md-1-2">
		<div class="l-box">
			<h1><?php echo($title); ?></h1>
			<?php if ($span !== null) { ?><span><i class="fa fa-info-circle"></i> Related Topic: <?php echo($span); ?>.</span><?php } ?>
			<p><?php echo($body); ?></p>
		</div>
	</div>
	<div class="pure-u-1 pure-u-md-1-2">
		<div class="l-box">
			<h1 class="expand-close">X</h1>
			<?php if ($img !== null) { ?> <img class="pure-img" src="file/img/tile-details/<?php echo($img); ?>"/><?php } ?>
		</div>
	</div>
</div>

