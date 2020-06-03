<!DOCTYPE html>
<html lang="en">
<head>
	<title>Taxify Single Page Form</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!-- Font awesome CSS -->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!-- Animate CSS -->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!-- Hamburgers CSS -->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.css">
	<!-- Select2 CSS -->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!-- Utils CSS -->
	<link rel="stylesheet" type="text/css" href="css/utils.css">
	<!-- Stylesheet -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
</head>
<body>
	<div class="toggle menu">
        <button class="nav">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
	<div class="sidebar hide-sidebar">
		<ul class="centered">
			<li><i class="fa fa-home" aria-hidden="true"></i> Home</li>
			<li><i class="fa fa-info-circle" aria-hidden="true"></i> About</li>
			<li><i class="fa fa-folder" aria-hidden="true"></i> Projects</li>
			<li><i class="fa fa-paper-plane" aria-hidden="true"></i> Contact</li>
		</ul>
		<div class="sidebar-logo js-tilt ml-3" data-tilt>
			<img src="images/logo.png" alt="taxify">
		</div>
	</div>

	<div class="contact1">
		<div class="container-contact1">
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="images/img-01.png" alt="taxify">
			</div>

			<form class="contact1-form validate-form" method="POST">
				<span class="contact1-form-title">
					Get in touch
				</span>

				<div class="wrap-input1 validate-input" data-validate = "Name is required">
					<input class="input1" type="text" name="name" id="name" placeholder="Name">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Phone No.[xxxxxxxxxx]">
					<input class="input1" type="tel" name="phonenumber" id="phonenumber" placeholder="Phone Number">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Please Select the Date">
					<input class="input1" type="date" name="date" id="date" placeholder="Date">
					<span class="shadow-input1"></span>
				</div>
	
				<div class="wrap-input1 validate-input" data-validate = "Valid email is required: name@mail.com">
					<input class="input1" type="text" name="email" id="email" placeholder="Email">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input ml-3" data-validate = "Select the checkbox">
					<label class="checkbox_container">
						<input class="custom_checkbox" type="checkbox" name="checkbox"> Subscribe to the newsletter. <a href="javascript:void(0);">View terms</a>
						<span class="checkmark"></span>
					</label>
					<span class="shadow-input1"></span>
				</div>

				<div class="container-contact1-form-btn">
					<button class="contact1-form-btn" id="submit_btn">
						<span>
							Send Us
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>
	
	<!-- jQuery CDN – Latest Stable Versions -->
	<script src="vendor/jquery/jquery-3.5.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
	<!-- Popper - Tooltip & Popover Positioning Engine -->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<!-- Bootstrap to get the compiled CSS and JavaScript -->
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>	
	<!-- Select2 is a jQuery based replacement for select boxes -->
	<script src="vendor/select2/select2.min.js"></script>
	<!-- Lightweight parallax hover tilt effect for jQuery -->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<!--Main Scripts JS -->
<script src="js/imgPath.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>
