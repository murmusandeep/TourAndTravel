<?php
require_once('config.php');
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Register</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
            
        <link rel="stylesheet" href="register.css">
            
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body class="container-fluid">
        <div class="row">
            <div class="col-sm-9" style="background-color:lavenderblush;">
                <img  src="image/py.jpg" alt="Norway" style="width:1000px">
            </div>
            <div class="col-sm-3" style="background-color:lavender;">
                <form action="signup.php" method="POST">
                <h1>Sign Up</h1>

                    <label for="name">Full Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Name..." name="name" required>
                
                
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email address..." required>
                

                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" placeholder="Name..."  name="username" required>

                
                
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password"   placeholder="********" required>
 
                
                
                    <label for="phonenumber">Phone Number</label>
                    <input type="password" class="form-control" id="phonenumber"  name="phonenumber" placeholder="Phone Number" required>
               
                    <hr class="nb-3">
                    <input type="checkbox" required >I agree to the Terms of User & Condition
               
                <br> 
                <hr class="nb-3">
                <input class="btn btn-primary" type="submit" id="register" name="Create" value="Signup">
                </form>
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
            var email 	= $('#email').val();
			var username	= $('#username').val();
			var password 	= $('#password').val();
            var phonenumber 	= $('#phonenumber').val();
			

				e.preventDefault();	

				$.ajax({
					type: 'POST',
					url: 'process.php',
					data: {name : name,email : email,username : username,password : password,phonenumber : phonenumber },
                    success: function(data){
					Swal.fire({
								'title': 'Successful',
								'text': data,
								'type': 'success'
								}).then(ok=> {
   if (ok) {
    window.location.href = "http://localhost:3000/login.php";
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
    </body>
</html>