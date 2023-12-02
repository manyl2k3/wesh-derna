<!doctype html>
<html lang="en">
  <head>
    <title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    </head>
    <body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
    <a href="index.php"> back</a>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Login #10</h2>
                    
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                <h3 class="mb-4 text-center">Have an account?</h3>
                <form  class="signin-form">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email" id="email" >
                          <div id="emailError" style="color: red;"></div>

                    </div>
                <div class="form-group">
                  <input id="password-field" type="password" class="form-control pd"  placeholder="Password" >
                  <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                  <div id="passwordError" style="color: red;"></div>

                </div>

                <div class="form-group">
                    <button type="submit" class="form-control btn btn-primary submit px-3" id='btn-lgn'>Sign In</button>
                </div>
                <div class="form-group d-md-flex">
                    <div class="w-50">
                        <label class="checkbox-wrap checkbox-primary">Remember Me
                                      <input type="checkbox" checked>
                                      <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="w-50 text-md-right">
                                    <a href="#" style="color: #fff">Forgot Password</a>
                                </div>
                </div>
              </form>
                  <div id="result"></div>

              <p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>
              <div class="social d-flex text-center">
                <a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>
                <a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a>
              </div>
              </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        $(document).ready(function () {
            $("#btn-lgn").on("click", function () {
                $("#emailError").text("");
                $("#passwordError").text("");

                var email = $("#email").val();
                var password = $(".pd").val();

                var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(email)) {
                    alert('Email non valide')
                    return;
                }
                
		
  				var passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/;

					if (!passwordRegex.test(password)) {
						alert('mot de passe non valide, doit contenir au moins une majuscule, une minuscule, un chiffre et 8 caractères')
                    	return;
						}


                if  (password === '') {
                    alert('le mot de passe devrait pas etre vide')
                    console.log("le mot de passe devrait pas etre vide")
                    return;
                }

				if  (email === '') {
                    alert("l'email ne devrait pas etre vide")
                    console.log("l'email ne devrait pas etre vide")
                    return;
                }

			

                
                window.open("index.php", "_blank");

                

             
            });
        });
    </script>

    <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

    </body>
</html>