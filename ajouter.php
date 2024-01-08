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
       <link rel="stylesheet" href="css\ajouter.css">
       
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
<div class='wrapper'>
<form action="" method = "POST">

<div class="mb-3">
  <label for="title" class="form-label">Titre</label>
  <input type="text" class="form-control" name="title" id="title" placeholder="Titre">
</div>
<div class="mb-3" style="margin:10px 0 10px 0;">
<div class="custom-file">
    
  <label class="custom-file-label" for="customFile">Choisir une image</label>
  <input type="file" class="custom-file-input" id="image" name="image">
</div>

</div>


		<!-- img -->
<div class="mb-3">
  <label for="desc" class="form-label">Description</label>
  <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
</div>
<div class="mb-3">
  <label for="price" class="form-label">Prix</label>
  <input type="text" class="form-control" name="price" id="price" placeholder="¨Prix">
</div>

<div class="mb-3">
  <label for="date" class="form-label">Date</label>
  <input type="text" class="form-control" name="date" id="date" placeholder="¨Date">
</div>

<div class="mb-3">
  <label for="tel" class="form-label">Telephone</label>
  <input type="text" class="form-control" name="tel" id="tel" placeholder="Telephone">
</div>

<div class="mb-3">
  <label for="ad" class="form-label">Adresse</label>
  <input type="text" class="form-control" name="adresse" id="adresse" placeholder="">
</div>

<div class="mb-3">
  <label for="cat" class="form-label">categorie</label>

    <select class="form-control" id="categorie" name="categorie">
        <option value="fete">Fête</option>
        <option value="sport">Sport</option>
        <option value="culture">Culture</option>
        <option value="autre">Autre</option>
    </select>

 
</div>


<div class="mb-3">
  <label for="wil" class="form-label">wilaya</label>

    <select class="form-control" id="wilaya" name="wilaya">
        <option value="Alger">Alger</option>
        <option value="Oran">Oran</option>
        <option value="Bejaia">Bejaia</option>
        <option value="autre">Autre *preciser dans l'adresse</option>
    </select>

 
</div>

    <script>
$(document).ready(function() {
    $('#date').on('input', function() {
        var dateInput = $(this).val();
        var dateRegex = /^\d{4}\/\d{2}\/\d{2}$/;
        
        if (dateRegex.test(dateInput)) {
            $(this).css('border-color', 'green');
        } else {
            $(this).css('border-color', 'red');
        }
    });
});

</script>


<div class="ajout">
<input class="btn btn-primary " type="submit" value="Ajouter" name="ajouter" id="ajouter">
</div>



<script>
$(document).ready(function() {
    // Function to validate the form inputs
    function validateForm() {

        var titre = $('#title').val();
        var desc = $('#desc').val();
        var price = $('#price').val();
        var date = $('#date').val();
        var tel = $('#tel').val();
        var adresse = $('#adresse').val();
        var image = $('#image').val();
        var categorie = $('#categorie').val();
        var wilaya = $('#wilaya').val();


        if (title==='' || desc === '' || price === '' || date === '' || tel === '' || adresse === '' || image === '' || categorie === '' || wilaya === '') {
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

<?php
include_once 'act.php';
if (isset($_POST['title']) && isset($_POST['desc']) && isset($_POST['price']) && isset($_POST['date']) && isset($_POST['tel']) && isset($_POST['adresse']) && isset($_POST['image']) && isset($_POST['categorie']) && isset($_POST['wilaya'])) {
    $titre = $_POST['title'];
    $desc = $_POST['desc'];
    $price = $_POST['price'];
    $date = $_POST['date'];
    $tel = $_POST['tel'];
    $adresse = $_POST['adresse'];
    $image = $_POST['image'];
    $categorie = $_POST['categorie'];
    $wilaya = $_POST['wilaya'];
    $activite = new Activite($titre, $price, $date, $tel, $adresse, $wilaya, $categorie, $image, $desc, $_SESSION['id']);
    $activite->save();
}
?>

</form>

</div>

	<!--footer start-->
	<footer id="footer"  class="footer">
			<div class="container">
				<div class="footer-menu">
		           	<div class="row">
			           	<div class="col-sm-3">
			           		 <div class="navbar-header">
				                <a class="navbar-brand" href="index.php">wesh<span>derna</span></a>
				            </div><!--/.navbar-header-->
			           	</div>
			           	<div class="col-sm-9">
			           		<ul class="footer-menu-item">
			                    <li class="scroll"><a href="#works">how it works</a></li>
			                    <li class="scroll"><a href="#explore">explore</a></li>
			                    <li class="scroll"><a href="#reviews">review</a></li>
			                    <li class="scroll"><a href="#blog">blog</a></li>
			                    <li class="scroll"><a href="#contact">contact</a></li>
			                    <li class=" scroll"><a href="#contact">my account</a></li>
			                </ul><!--/.nav -->
			           	</div>
		           </div>
				</div>
				<div class="hm-footer-copyright">
					<div class="row">
						<div class="col-sm-5">
							<p>
								&copy;copyright. designed and developed by <a href="https://www.themesine.com/">themesine</a>
							</p><!--/p-->
						</div>
						<div class="col-sm-7">
							<div class="footer-social">
								<span><i class="fa fa-phone"> +1  (222) 777 8888</i></span>
								<a href="#"><i class="fa fa-facebook"></i></a>	
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
								<a href="#"><i class="fa fa-google-plus"></i></a>
							</div>
						</div>
					</div>
				
				</div><!--/.hm-footer-copyright-->
			</div><!--/.container-->

			<div id="scroll-Top">
				<div class="return-to-top">
					<i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
				</div>
				
			</div><!--/.scroll-Top-->
			
        </footer><!--/.footer-->
		<!--footer end-->





</body>
</html>







	