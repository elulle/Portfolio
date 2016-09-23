<?php include('header.php'); ?> 
<!doctype html>
<body>
	<div class="header-wrapper section-margin">
		<div class="header" id="first">
			<div class="header-text">
				<h1><?php echo $title; ?></h1>
			</div>
		</div>
	</div>
	<div class="section-margin">
		<div class="content-wrap blog-wrapper">
			<?php echo $content; ?>
			<!-- //IF ALERT NOT EMPTY -->
			<div class="alert">
				<?php echo $alert; ?>
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
			<div>
				<a href="index.php"><div class="blue-button"> <p>Home</p></div></a>
			</div>
		</div>
	</div>
</body>
<?php include('footer.php'); ?>