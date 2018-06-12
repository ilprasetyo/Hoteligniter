
<!DOCTYPE html>
<html>

<!-- Head -->
<head>

	<title>Silahkan Login</title>

	<!-- For-Mobile-Apps -->
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Flat Login & Register Forms Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //For-Mobile-Apps -->

	<!-- Style --> <link rel="stylesheet" href="<?php echo base_url()?>web/css/style.css" type="text/css" media="all" />

	<!-- Web-Fonts -->
		<link href='//fonts.googleapis.com/css?family=Raleway:400,500,600,700,800' rel='stylesheet' type='text/css'>
		<link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
	<!-- //Web-Fonts -->

</head>
<!-- //Head -->

<!-- Body -->
<body>

	<h1> Silahkan Login </h1>

	<div class="container w3layouts agileits">

		<div class="login w3layouts">
			<form action="" method="post">
				<label>Username</label>
				<input type="text" class="user" placeholder="Username" required="">
				<label>Password</label>
				<input type="password" class="pass" placeholder="Password" required="">
			<ul>
				<li>
					<input type="checkbox" id="brand1" value="">
					<label for="brand1"><span></span>Remember me</label>
				</li>
			</ul>
			<input type="submit" value="LOGIN"></form>
			<div class="clear"></div>
		</div>

		<!--<div class="social agileits">
			<h5>Or Login with</h5>
			<ul class="social-icons">
				<li><a href="#" class="facebook" title="Go to Our Facebook Page"></a></li>
				<li><a href="#" class="twitter" title="Go to Our Twitter Account"></a></li>
				<li><a href="#" class="googleplus" title="Go to Our Google Plus Account"></a></li>
			</ul>
			<div class="clear"></div>
		</div>-->

		<div class="reg w3l aits">

			<h3>Not a member?</h3>
			<a class="popup-with-zoom-anim hvr-underline-from-left" href="#small-dialog">Register Here</a>
			<div class="clear"></div>

			<!-- Popup-Box -->
			<div id="popup w3l">
				<div id="small-dialog" class="mfp-hide aits">
					<div class="pop_up agileits">
						<div class="register w3layouts">
							<form action="#" method="post">
								<label>Nama Lengkap</label>
								<input type="text" Name="Nama Lengkap" placeholder="Nama Lengkap" required="">
								<label>No. Telp</label>
								<input type="text" Name="No. Telp" placeholder="No. Telp" required="">
								<label>No. KTP</label>
								<input type="text" Name="No. KTP" placeholder="No. KTP" required="">
								<label>Alamat</label>
								<input type="text" Name="Alamat" placeholder="Alamat" required="">
								<label>Email</label>
								<input type="text" Name="Email" placeholder="Email" required="">
								<label>Username</label>
								<input type="text" Name="Username" placeholder="Username" required="">
								<label>Password</label>
								<input type="password" Name="Password" placeholder="Password" required="">
								<div class="send-button">
								<input type="submit" value="REGISTER">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<button title="Close (Esc)" type="button" class="mfp-close w3layouts">×</button>
			<!-- //Popup-Box -->

		</div>

	</div>

	<div class="footer">
		<p> &copy; 2016 Flat Login & Register Forms. All Rights Reserved | Design by <a href="http://w3layouts.com" target="_blank">W3layouts</a></p>
	</div>

	<!-- Custom-JavaScript-File-Links -->
		<script src="<?php echo base_url()?>web/js/jquery-2.1.4.min.js"></script>
		<!-- pop-up-box -->
			<script src="<?php echo base_url()?>web/js/jquery.magnific-popup.js" type="text/javascript"></script>
			<script>
				$(document).ready(function() {
					$('.popup-with-zoom-anim').magnificPopup({
						type: 'inline',
						fixedContentPos: false,
						fixedBgPos: true,
						overflowY: 'auto',
						closeBtnInside: true,
						preloader: false,
						midClick: true,
						removalDelay: 300,
						mainClass: 'my-mfp-zoom-in'
					});
				});
			</script>
		<!--//pop-up-box -->
	<!-- //Custom-JavaScript-File-Links -->

</body>
<!-- //Body -->

</html>