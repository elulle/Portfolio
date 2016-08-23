<?php include('header.php') ?>

<body>	
	<div class="content-wrap bt-mrg-50 top-pd-50">
		<h1>Send me a personal message</h1>
		<p>It would be great to here from you during my travels, whether its about your life, a casual catch up or some improvements for the website - Everthing is welcome </p>
		<form action="/contact-me" class="contact-form" name="contact-me">
			<div class="input-error hidden">
				<p>Please fill in all fields</p>
			</div>
			<div class="response">&nbsp;</div>
			
			<textarea  type="text" name="wise" id = "wise" placeholder="You wise words go here ..." required></textarea>
			<textarea type="text" name="bugs" id="bugs" placeholder="Improvements / bugs go here ..." required></textarea>
			<input  type="text" name="name" id = "name" placeholder="Your name" required>
			<input  type="email" name="email" id = "email" placeholder="E-mail (So I can reply to you)" required>
			<div id="contactMe" type="submit" class="custom-button" style = "width:100%")>
				<p>Send</p>
			</div>
		</form>
	</div>
	<div class='contact'>
		<div id='thank-you' class = 'hidden'>
			<div>
				<h2> Thank you, This means a lot.</h2>
				<p>I will try reply as soon as I can!</p>
				<p>Back to home page <a href="../">elulle.com</a></p>
			</div>
		</div>
	</div>
</body>


<?php include('footer.php') ?>