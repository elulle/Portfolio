<?php include('header.php') ?> 
<!doctype html>
<body>
	<div class="header-wrapper section-margin">
		<div class="header" id="palm">
			<div class="where">
				<div class='custom-button button-click-hide' id='revealLocation'>
					<p>Where is Elina?</p>
				</div>
				<div class='hidden button-click-show' id='actual-info'>
					<div id="actual-location"></div>
					<div id="actual-text"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="map content-wrap section-margin google-maps">
		<iframe src="https://www.google.com/maps/d/embed?mid=1zxh1CqOZ9lJNjOwRTC9ZZ2yvaDg" width="980" height="600"></iframe>
	</div>
	<div class="content-wrap section-margin key">
		<img src="resources/img/key.png" alt="key">
	</div>
	<div class="hidden">
		<h1>Travel Blog</h1>
		<h2>South East Asia Back packers Travel Blog</h2>
		<h3>This is my Journey through South East Asia; India, Thailand, Malaysia, Borneo, Singapore, Brunei, Philippines, Vietnam, Cambodia, Laos, Australia, New Zeland</h3>
		<h1>Travel tips</h1>
		<h2>Transport / transportation in South East Asia</h2>
		<h2>Accomadation / home stay / hostels in South East Asia</h2>
		<h2>Best tourist attractions in South East Asia </h2>
		<h2>Experience the Locals in South East Asia </h2>
	</div>
	<div class="sponsor yellow section-margin">
		<div class="content-wrap">
			<!-- <div class="overlay">
				<div class="comming-soon">
					<h1>Coming soon</h1>
				</div>
			</div> -->
			<h1>My blogs</h1>
			<div class="circle-img">
				<div class="circle">
					<a href="blog_template.php">
						<img src="resources/img/first.jpg">
					</a>
				</div>
				<div class="circle disable">
					<!-- <a href="#"> -->
						<h2>Coming Soon</h2>
						<img src="resources/img/riga.jpg">
					<!-- </a> -->
				</div>
				<div class="circle disable">
					<!-- <a href="#"> -->
						<h2>Coming Soon</h2>
						<img src="resources/img/test.jpg">
					<!-- </a> -->
				</div>
			</div>
			<div class="three-wrapper">
				<div class="three-text click">
					<a href="blog_template.php"> 
						<h3>My First Blog</h3>
						<p>I'm not much of a writer. I don't really share much about my holidays / travels apart from sharing an album or two on Facebook.</p>
					</a>
				</div>
				<div class="three-text">
					<!-- <a href="#"> -->
						<h3>Europe</h3>
						<!-- <p></p> -->
					<!-- </a> -->
				</div>
				<div class="three-text">
					<!-- <a href="#"> -->
						<h3>India</h3>
						<!-- <p></p> -->
					<!-- </a> -->

				</div>
			</div>
		</div>
	</div>
</body>
<?php include('footer.php') ?>