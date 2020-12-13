<?php
require_once('config.php');
?>

<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Stay Bookings</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,900" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="staybooking.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<div class="booking-cta">
							<h1>Make your reservation</h1>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate laboriosam numquam at</p>
						</div>
					</div>
					<div class="col-md-6 col-md-offset-1">
						<div class="booking-form">
							<form action="staybooking.php" method="POST">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input class="form-control" type="text" id="name" requires>
											<span class="form-label">Name</span>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input class="form-control" type="email" id="email" required>
											<span class="form-label">Email</span>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input class="form-control" type="tel" id="phone" required
											<span class="form-label">Phone</span>
										</div>
									</div>
									<div class="col-md-3 col-sm-6">
										<div class="form-group">
										<input class="form-control" type="text" id="rooms" placeholder="Rooms" required>
										</div>
									</div>
									<div class="col-md-3 col-sm-6">
										<div class="form-group">
										<input class="form-control" type="text" id="guest" placeholder="guests" required>
											
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input class="form-control" type="date" id="checkin" required
											<span class="form-label">Check In</span>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input class="form-control" type="date" id="checkout" required>
											<span class="form-label">Check Out</span>
										</div>
									</div>
								</div>
								<div class="form-btn">
									<button class="submit-btn" id="register">Book Now</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="js/jquery.min.js"></script>
	<script>
		$('.form-control').each(function () {
			floatedLabel($(this));
		});

		$('.form-control').on('input', function () {
			floatedLabel($(this));
		});

		function floatedLabel(input) {
			var $field = input.closest('.form-group');
			if (input.val()) {
				$field.addClass('input-not-empty');
			} else {
				$field.removeClass('input-not-empty');
			}
		}
	</script>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

<script type="text/javascript">
$(function(){
$('#register').click(function(e){

	var valid = this.form.checkValidity();

	if(valid){

	var name 	    = $('#name').val();
	var email 	    = $('#email').val();
	var phone 	    = $('#phone').val();
	var rooms 	    = $('#rooms').val();
	var guest 	    = $('#guest').val();
	var checkin 	    = $('#checkin').val();
	var checkout 	    = $('#checkout').val();
	

		e.preventDefault();	

		$.ajax({
			type: 'POST',
			url: 'process1.php',
			data: {name : name,email : email,phone : phone,rooms : rooms,guest : guest,checkin : checkin,checkout : checkout},
			success: function(data){
			Swal.fire({
						'title': 'Click Ok to proceed for booking',
						'text': data,
						'type': 'success'
						}).then(ok=> {
if (ok) {
window.location.href = "payment.php";
}
});
					
			},
			error: function(data){
				Swal.fire({
						'title': 'Errors',
						'text': 'There were errors while saving the data.',
						'type': 'error'
						})
			}
		});

		
	}else{
		
	}

	



});		


});
</script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>