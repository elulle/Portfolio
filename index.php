<?php include('header.php') ?>

<body>
	<img src='https://pixabay.com/static/uploads/photo/2013/11/28/10/36/road-220058_960_720.jpg' id='landing-pg-img'>
	<div class="content-wrap middle">
		<div class="custom-button button-click-hide">
			<p style = "font-size:34px; line-height: 1em">Lets talk</p>
		</div>
		<form action="/contact" class="contact-form button-click-show hidden" name="advice">
			<div class="response">&nbsp;</div>
			<input type="text" name="name" id = "name" placeholder="Your name">
			<textarea type="text" name="share" id = "share" placeholder="How can I share my travels with you?"></textarea>
			<textarea type="text" name="advice" id="advice" placeholder="Any tips/advice? Or something fun to read?"></textarea>
			<div id="ButtonSubmit" onclick="postContactToGoogle()" type="button" class="custom-button" style = "width:100%">
				<p>Send</p>
			</div>
		<form>
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
function postContactToGoogle() {
    var name = $('#name').val();
    var share = $('#share').val();
    var advice = $('#advice').val();

    $.ajax({
        url: "https://docs.google.com/forms/d/e/1FAIpQLSdEoLefYBYuVuZGP1GbyCnO9tLvSQf-i1gBaCoOlir5mphv9Q/formResponse",
        data: {"entry.1471486817": name, "entry.1891396694": share, "entry.623392099": advice },
        type: "POST",
        dataType: "xml"
    });
}
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-81244521-1', 'auto');
  ga('send', 'pageview');

</script>