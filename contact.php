<!DOCTYPE HTML>

<html>
	<head>
		<title>Contact | Lux Trim Mouldings and Interior Design | GTA</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body class="contact">
		<div id="page-wrapper">

            <?php include 'shared/header.php';?>
			<div style="height:6em"></div>
            <div style="height:2em; background-color:#f5efdf"></div>
            <!-- Main -->
            <article id="main" class="contact">
                <section class="wrapper style4 special container 100%">
                    <h1>CONTACT US</h1>
						<h3 style="text-align:left;width:40%;display:inline-block">
							Lux Trim<br>
							info@luxtrim.com<br>
							T:(416)277-7659<br>
							F:(905)915-0466)
						</h3>

						<h3 style="text-align:right;width:40%;display:inline-block">
							<span class="bold" style="color:#dcc484">Improve Canada</span><br>
							Unit #16-18<br>
							7250 Keele St.<br>
							Vaughan, ON L4K 1Z8
						</h3>
					<div class="map-holder">
						<div id="map_canvas" class="map-canvas" style="height: 360px;"></div>
					</div>
					<div style="height:50px"></div>

					<!-- Content -->
					<div class="content">
						<form name="contactform" method="post" action="send_form_email.php">
							<div class="row 50%">
								<div class="6u 12u(mobile)">
									<input type="text" name="name" placeholder="*Name" />
								</div>
								<div class="6u 12u(mobile)">
									<input type="text" name="email" placeholder="*Email" />
								</div>
							</div>
							<div class="row 50%">
								<div class="12u">
									<input type="text" name="phone" placeholder="Phone" />
								</div>
							</div>
							<div class="row 50%">
								<div class="12u">
									<textarea name="message" placeholder="*Message" rows="7"></textarea>
								</div>
							</div>
							<div class="row">
								<div class="12u">
									<ul class="buttons">
										<li><input type="submit" class="special" value="Send Message" /></li>
									</ul>
								</div>
							</div>
						</form>
					</div>
				</section>
			</article>
            <div style="height:10em; background-color:#f5efdf; text-align:center;padding:5px">
				<div class="container">
					<img src="assets/images/envelope.png" height="120px">
					<h3>E-MAIL US TO BOOK YOUR FREE DESIGN CONSULTATION</h3>
				</div>
			</div>
			<?php include 'shared/footer.php';?>
		</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.dropotron.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/jquery.scrollgress.min.js"></script>
	<script src="assets/js/skel.min.js"></script>
	<script src="assets/js/util.js"></script>
	<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
	<script src="js/vendor/jquery-1.10.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<!-- Google Map -->
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="js/jquery.gmap3.min.js"></script>

	<!-- Google Map Init-->
	<script type="text/javascript">
		jQuery(function($){
			$('#map_canvas').gmap3({
				marker:{
					address: '43.7888469,-79.4966593'
				},
					map:{
					options:{
					zoom: 15,
					scrollwheel: false,
					streetViewControl : true
					}
				}
			});
		});
	</script>

	</body>
</html>
