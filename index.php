<?php include('header.php') ?>

<body>
	<img src='http://hqpictures.net/wp-content/uploads/2015/08/Phi-Phi-Island-Pictures.jpg' id='landing-pg-img'>
	<div class="content-wrap middle">
		<div class="custom-button button-click-hide">
			<p  class="lets-talk">Lets talk</p>
		</div>
	</div>
	<div class="content-wrap middle form hidden button-click-show">
		<form action="/contact" class="contact-form" name="advice">
			<div class="input-error hidden">
				<p>Please fill in all fields</p>
			</div>
			<div class="response">&nbsp;</div>
			<input  type="text" name="name" id = "name" placeholder="Your name" required>
			<textarea  type="text" name="share" id = "share" placeholder="How can I share my travels with you?" required></textarea>
			<textarea type="text" name="advice" id="advice" placeholder="Any tips/advice? Or something fun to read?" required></textarea>
			<div id="adviceSendInfo" type="submit" class="custom-button" style = "width:100%">
				<p>Send</p>
			</div>
			<p style="width:100%; color: black; font-weight: 700; background-color: rgba(255,255,255,0.6);padding:15px; margin-top:10px;">There's a video on submission </p>
		</form>
	</div>
	<div id='thank-you' class = 'hidden'>
		<div>
			<h1> Thank you ! </h1>
			
		
			<h3>Here's a random video just for you:<h3>
			<p> We found a bee hive, created a makeshift box and then my grandparents re-homed it. </p>
			<div class="videowrapper">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/AOYJXQIGg4M" frameborder="0" allowfullscreen></iframe>
			</div>
			<p>23/07/2016, Latvia</p>
			<p> Keep an eye on this site, I will be updating my travels soon =] </p>
		</div>
	</div>
</body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-81244521-1', 'auto');
  ga('send', 'pageview');

</script>