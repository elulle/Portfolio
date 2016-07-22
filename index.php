<?php include('header.php') ?>

<body>
	<img src='https://pixabay.com/static/uploads/photo/2013/11/28/10/36/road-220058_960_720.jpg' id='landing-pg-img'>
	<div class="content-wrap middle">
		<div class="custom-button button-click-hide">
			<p style = "font-size:34px; line-height: 1em">Lets talk</p>
		</div>
		<form action="/contact" class="contact-form button-click-show hidden" name="advice">
			<div class="response">&nbsp;</div>
			<textarea type="text" name="share" placeholder="How can I share my travels with you?"></textarea>
			<textarea type="text" name="advice" placeholder="Any tips/advice? Or something fun to read?"></textarea>
			<div id = "advice-submit" class="custom-button" style = "width:100%">
				<p>Submit</p>
			</div>
		</form>
	</div>
	<div id='thank-you' class = 'hidden comming-soon'>
		<h1> Thank you ! </h1>
		<h3> Keep an eye on this site, I will be updating my travels soon =] </h3>
	</div>
</body>