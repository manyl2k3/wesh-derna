<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    
        <!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
       

       <!-- For favicon png -->
       <link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png"/>
       <!-- For favicon png -->
       <link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png"/>


       <title>Document</title>


        <!-- For favicon png -->
       <link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png"/>
      
       <!--font-awesome.min.css-->
       <link rel="stylesheet" href="assets/css/font-awesome.min.css">

       <!--linear icon css-->
       <link rel="stylesheet" href="assets/css/linearicons.css">

       <!--animate.css-->
       <link rel="stylesheet" href="assets/css/animate.css">

       <!--flaticon.css-->
       <link rel="stylesheet" href="assets/css/flaticon.css">

       <!--slick.css-->
       <link rel="stylesheet" href="assets/css/slick.css">
       <link rel="stylesheet" href="assets/css/slick-theme.css">
       
       <!--bootstrap.min.css-->
       <link rel="stylesheet" href="assets/css/bootstrap.min.css">
       
       <!-- bootsnav -->
       <link rel="stylesheet" href="assets/css/bootsnav.css" >	
       
       <!--style.css-->
       <link rel="stylesheet" href="assets/css/style-explore.css">
       
       <!--responsive.css-->
       <link rel="stylesheet" href="assets/css/responsive.css">


       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">

</script>
</head>
<body>
    


<header id="header-top" class="header-top">
        <ul>
            <li>
                <div class="header-top-left">
                    <ul>
                        
                        <li class="select-opt">
                        
                        <li class="select-opt">
                            
                        </li>
                    </ul>
                </div>
            </li>
            <li class="head-responsive-right pull-right">
                <div class="header-top-right">
                    <ul>
                        
                        <li class="header-top-contact">
                            <a href="login.php">sign in</a>
                        </li>
                        <li class="header-top-contact">
                            <a href="login.php">register</a>
                        </li>
                        <li class="header-top-contact">
                            <a href="index.php">home</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
                
    </header><!--/.header-top-->
    <!--header-top end -->




     
    <!-- top-area Start -->
    <section class="top-area">
        <div class="header-area">
            <!-- Start Navigation -->
            <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"  data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

                <div class="container">

                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="index.php">wesh<span>derna</span></a>

                    </div><!--/.navbar-header-->
                    <!-- End Header Navigation -->


			            <!-- Collect the nav links, forms, and other content for toggling -->
			            <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
			                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
			                  
                                <li class=" scroll active"><a href="index.php">home</a></li>
			                    <li class="scroll"><a href="#blog">blog</a></li>
			                    <li class="scroll"><a href="#contact">contact</a></li>
			                </ul><!--/.nav -->
			            </div><!-- /.navbar-collapse -->
			        </div><!--/.container-->
			    </nav><!--/nav-->
			    <!-- End Navigation -->
			</div><!--/.header-area-->
		    <div class="clearfix"></div>

		</section><!-- /.top-area-->
		<!-- top-area End -->

<form action="">
        <div class= titre>
                    titre
                    <input type="text" name="title" id="title">
                </div>

<div class="images">

<h2>image:</h2>

        <div class="explore-content">
					<div class="row">
						<div class=" col-md-4 col-sm-6">
							<div class="single-explore-item">
								<div class="single-explore-img">
									<img src="assets\images\welcome-hero\Design sans titre.pdf" alt="explore image">
									<div class="single-explore-img-info">
										
										<div class="single-explore-image-icon-box">
											<ul>
												<li>
													<div class="single-explore-image-icon">
														<i class="fa fa-arrows-alt"></i>
													</div>
												</li>
												<li>
													<div class="single-explore-image-icon">
														<i class="fa fa-bookmark-o"></i>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
                            </div>
						</div>
					</div>
                </div>

                </div>
                               
          <div class= "description" >
            <h1>  description:</h1>
         
          <input type="text" name="desc" id="desc">
 

</div>      
        


<div class="prix">
prix: 
<input type="text" name="price" id="price">

</div>

<div class="date">
    date: j/m/a
    <input type="text" name="date" id="date">

    <script>
$(document).ready(function() {
    $('#date').on('input', function() {
        var dateInput = $(this).val();
        var dateRegex = /^(?:(?:31([\/\.-])(?:0?[13578]|1[02]))\1|(?:(?:29|30)([\/\.-])(?:0?[13-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29([\/\.-])0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])([\/\.-])(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$/
;
        
        if (dateRegex.test(dateInput)) {
            $(this).css('border-color', 'green');
        } else {
            $(this).css('border-color', 'red');
        }
    });
});

</script>

</div>

<div class="tel" >
    tel: 
    <input type="text" name="tel" id="tel">
</div>

<div class="adresse" >
    adresse:
    <input type="text" name="adresse" id="adresse">
</div>
     

<div id="button">
<button>
    <input type="submit" value="ajouter" name="ajouter" id="ajouter">
</button>
</div>


<script>
$(document).ready(function() {
    // Function to validate the form inputs
    function validateForm() {

        var titre = $('#titre').val();
        var desc = $('#desc').val();
        var price = $('#price').val();
        var date = $('#date').val();
        var tel = $('#tel').val();
        var adresse = $('#adresse').val();

        if (titre==='' || desc === '' || price === '' || date === '' || tel === '' || adresse === '') {
            alert('Please complete all the inputs');
            return false;
        }

        return true;
    }

    // Attach the form validation to the submit button
    $('#ajouter').click(function() {
        return validateForm();
    });
});
</script>
</form>
</body>
</html>

*






		     

</body>
</html>