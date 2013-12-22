<!--#include virtual="/includes/header.shtml"-->

<?php
        $name = $_POST['name'];
        $email = $_POST['email'];
        $comment = $_POST['comment'];

        $to = 'alex@frostnova.ca';
        $subject = 'Insert Subject here';
        $msg = "From: " . $name . "</br>" . $comment;

        mail($to, $subject, $msg, 'From: ' . $email);
?>


<div class="main">
	<section class="main_content">		
		<article>
			<header>
				<h1>Contact Information</h1>
			</header>
			
			<address>
				<ul>
					<li>Our Address:<br></li>
					<li>Unit 209 - 20062 Fraser Hwy.<br></li>
					<li>British Columbia, Canada<br></li>
					<li>V3A 0E6<br></li>
					<li>Phone: 1-(780) 722-6523<br><br></li>
					<li>You can also contact us by using the form located to the right which will send an email directly to us.</li>
				</ul>
			<address>
		</article>

		<article class="form_field">
			<div id="form-main">
				<div id="form-div">
					<form method="post" action="sent.php">
					
						<p class="name">
						<input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" name="name" placeholder="Name" id="name" />
						</p>

						<p class="email">
						<input name="email" type="text" class="validate[required,custom[email]] feedback-input" name="email" id="email" placeholder="Email" />
						</p>

						<p class="text">
						<textarea name="text" class="validate[required,length[6,300]] feedback-input" name="comment" id="comment" placeholder="Comment"></textarea>
						</p>

						<div class="submit">
							<input type="submit" value="Send">
							<div class="ease"></div>
						</div>
					</form>
				</div>
				<!-- end form-div -->
			</div>
		</article>
	</section>
</div><!--
			
		<div id="mid_content">
			
			<div class="container">
				<div class="mid_content_info">
					<h1>Your Email Has Been Sent</h1>	
				</div>
			</div>
				
		</div> -->
		
	
<!--#include virtual="/includes/footer.shtml"-->