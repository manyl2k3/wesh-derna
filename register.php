<!doctype html>
<html lang="en">
  <head>
  	<title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
	<a href="index.php"> back</a>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Register</h2>
					
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center"></h3>
		      	<form action="control_register.php" method="get" class="register-form">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="username" id='username' name='username' required>
                    </div>
                    <div class="form-group">
		      			<input type="text" class="form-control" placeholder="Email" id='email' name='email' required>
		      		</div>
					  <div id="emailError" style="color: red;"></div>
	            <div class="form-group">
	              <input id="password-field" type="password" class="form-control" id="pwd" name="pwd" placeholder="Password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
				<div id="passwordError" style="color: red;"></div>

	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-secondary submit px-3" id='btn-lgn'>Register</button>
	            </div>
	          </form>
	          </div>
				</div>
			</div>
		</div>
	</section>
	<script>
        $(document).ready(function () {
            $("#btn-lgn").on("click", function () {
                // Reset error messages
                $("#emailError").text("");
                $("#passwordError").text("");

                var email = $("#email").val();
                var password = $("#pwd").val();

                // Validate email using regular expression
                var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(email)) {
                    $("#emailError").text("Invalid email address");
                    return;
                }

                // Check if password is empty
                if (password === '') {
                    $("#passwordError").text("Password cannot be empty");
                    return;
                }

                // Perform additional client-side logic or submit the form if needed
                $("#result").html("Form submitted successfully");
            });
        });
    </script>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>