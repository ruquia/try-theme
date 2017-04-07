m<?php
/*
Template Name: Contact
*/
?>

<?php

$nameError="";
$emailError="";
$commentError="";

if(isset($_POST['submitted'])) {
	if(trim($_POST['contactName']) === '') {
		$nameError = 'Please enter your name.';
		$hasError = true;
	} else {
		$name = trim($_POST['contactName']);
	}

	if(trim($_POST['email']) === '')  {
		$emailError = 'Please enter your email address.';
		$hasError = true;
	} else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+.[a-z]{2,4}$/i", trim($_POST['email']))) {
		$emailError = 'You entered an invalid email address.';
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}

	if(trim($_POST['comments']) === '') {
		$commentError = 'Please enter a message.';
		$hasError = true;
	} else {
		if(function_exists('stripslashes')) {
			$comments = stripslashes(trim($_POST['comments']));
		} else {
			$comments = trim($_POST['comments']);
		}
	}

	if(!isset($hasError)) {
		$emailTo = get_option('tz_email');
		if (!isset($emailTo) || ($emailTo == '') ){
			$emailTo = get_option('admin_email');
		}
		$subject = '[PHP Snippets] From '.$name;
		$body = "Name: $name nnEmail: $email nnComments: $comments";
		$headers = 'From: '.$name.' <'.$emailTo.'>' . "rn" . 'Reply-To: ' . $email;

		wp_mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}
}
?>
<?php get_header(); ?>

	<article class="page with-featured-image">
		 <div class="featured-image" style="background-image: url(<?php the_post_thumbnail_url('page-featured-image'); ?>);">
		 	
		 </div>
		 	<div class="container">
		 		<div class="row">
		 			<div class="col-md-10 offset-md-1">
		 				<main class="the_content">
		 					<?php the_content(); ?>
		 				
		 				</main>
		 			</div>
		 		</div>
		 	</div>	
		</div>
	</article>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="container">
		<div class="contact-title">
			<h1><?php the_title(); ?></h1>
		</div>
		<div class="row">
			<div class="col-md-2">
				<div class="contact">
					<?php the_content(); ?>
				</div>
			</div>
			<div class="col-md-4">
				<div class="contact">
				
					<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
					<div>
						<?php if(isset($emailSent) && $emailSent == true) { ?>
							<div>
								<p>Thanks, your email was sent successfully.</p>
							</div>
						<?php } else { ?>
							<?php if(isset($hasError) || isset($captchaError)) { ?>
								<p>Sorry, an error occured.<p>
							<?php } ?>

							<form action="<?php the_permalink(); ?>" id="contactForm" method="post">
								<ul>
									<li>
										<label for="contactName">Name:</label>
										<input type="text" name="contactName" id="contactName" value="<?php if(isset($_POST['contactName'])) echo $_POST['contactName'];?>" />
										<?php if($nameError != '') { ?>
											<span><?=$nameError;?></span>
										<?php } ?>
									</li>

									<li>
										<label for="email">Email: </label>
										<input type="text" name="email" id="email" value="<?php if(isset($_POST['email']))  echo $_POST['email'];?>" />
										<?php if($emailError != '') { ?>
											<span><?=$emailError;?></span>
										<?php } ?>
									</li>

									<li><label for="commentsText"></label>
										<textarea name="comments" id="commentsText" rows="20″ cols="30″><?php if(isset($_POST['comments'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['comments']); } else { echo $_POST['comments']; } } ?></textarea>
										<?php if($commentError != '') { ?>
											<span><?=$commentError;?></span>
										<?php } ?>
									</li>

									<li>
										<input type="submit">Send email</input>
									</li>
								</ul>
								<input type="hidden" name="submitted" id="submitted" value="true" />
							</form>
						<?php } ?>
						</div><!-- .entry-content -->
					</div><!-- .post -->
				</div>
			</div><!-- .contact -->

			<div class="col-md-5 map">
				<div class="contact">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2253.479061277813!2d12.995785815324531!3d55.611079510381835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4653a3f905cc4b55%3A0xea8a9d6d092d25d8!2sMedieinstitutet+Malm%C3%B6!5e0!3m2!1sen!2sse!4v1491380865377" width="400" height="300" frameborder="0" style="border:0" allowfullscreen>
					</iframe>
				</div>
			</div>
		</div><!-- .row -->
</div><!-- .container -->

<?php endwhile; endif; ?>

<?php get_footer(); ?>
