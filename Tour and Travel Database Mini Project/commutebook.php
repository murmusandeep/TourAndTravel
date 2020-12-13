<?php
require_once('config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Commute Booking</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="commutebook.css" />

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
					<div class="booking-form">
						<div class="form-header">
							<h1>Book a car</h1>
						</div>
						<form action="commutebook.php" method="POST">
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Name</span>
										<input class="form-control" type="text" placeholder="Enter your name" id="name">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Email</span>
										<input class="form-control" type="email" placeholder="Enter your email" id="email">
									</div>
								</div>
							</div>
							<div class="form-group">
								<span class="form-label">Phone</span>
								<input class="form-control" type="tel" placeholder="Enter your phone number" id="phone">
							</div>
							<div class="form-group">
								<span class="form-label">Pickup Location</span>
								<input class="form-control" type="text" placeholder="Enter ZIP/Location" id="pickup">
							</div>
							<div class="form-group">
								<span class="form-label">Destination</span>
								<input class="form-control" type="text" placeholder="Enter ZIP/Location" id="dropl">
							</div>
							<div class="row">
								<div class="col-sm-5">
									<div class="form-group">
										<span class="form-label">Pickup Date</span>
										<input class="form-control" type="date" id="date" required>
									</div>
								</div>
								<div class="col-sm-7">
									<div class="row">
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">Hour</span>
												<input class="form-control" type="text" placeholder="hours" id="hour">
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">Min</span>
												<input class="form-control" type="text" placeholder="mins" id="min">
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">AM/PM</span>
												<input class="form-control" type="text" placeholder="am/pm" id="am">
											</div>
										</div>
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
		var pickup 	    = $('#pickup').val();
		var dropl 	    = $('#dropl').val();
		var date 	    = $('#date').val();
		var hour 	    = $('#hour').val();
		var min 	    = $('#min').val();
		var am 	    = $('#am').val();
		
	
			e.preventDefault();	
	
			$.ajax({
				type: 'POST',
				url: 'process2.php',
				data: {name : name,email : email,phone : phone,pickup : pickup,dropl : dropl,date : date,hour : hour,min : min,am : am},
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