<!doctype html>
<html class="no-js" lang="en">

    <head>
        <!-- meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

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
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!--responsive.css-->
        <link rel="stylesheet" href="assets/css/responsive.css">



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





		<!--explore start -->
		<section id="explore" class="explore">
			<div class="container">
				<div class="section-header">
					<h2>explore</h2>
					<p>Explore New place, food, culture around the world and many more</p>
				</div><!--/.section-header-->


								


<?php


echo '<h2>Activités</h2>';

$wilaya1 = $_POST['location'];
$categorie1 = $_POST['type'];

$host = 'localhost';
$dbname = 'weshderna';
$username = 'root';
$password = '';

try {

	$count = 0;
	$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$stmt = $pdo->prepare("SELECT * FROM activité WHERE wilaya = :wilaya AND categorie = :categorie");
	$stmt->bindParam(':wilaya', $wilaya1);
	$stmt->bindParam(':categorie', $categorie1);

	$stmt->execute();

	// Afficher les résultats
	while ($row = $stmt->fetch()) {
		$titre = $row['titre'];
		$prix = $row['prix'];
		$description = $row['description'];
		$image = $row['image'];
		$date = $row['date'];
		$adresse = $row['adresse'];
		$wilaya = $row['wilaya'];
		$categorie = $row['categorie'];
		$note = $row['note'];
		$createur = $row['createur'];
		$tel = $row['tel'];
		$activité_id = $row['activité_id'];
		

?>

<a href="activite.php">
<div class="explore-content">
	
	<div class="row">
		<div class="col-md-4 col-sm-6">
			<div class="single-explore-item">
				<div class="single-explore-img">
					<img src="<?php echo $image; ?>" alt="explore image">
					<div class="single-explore-img-info">
					
					<form action="activite.php" method="get">
  <input type="hidden" name="id" value="<?php echo $activité_id; ?>">
  <input type="submit" value="Consulter">
</form>
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
				<div class="single-explore-txt bg-theme-1">
					<h2><a href="activite.php"><?php echo $titre; ?></a></h2>
					<p class="explore-rating-price">
						<span class="explore-rating"><?php echo $note; ?></span>
						<a href="#"> 10 ratings</a>
						<span class="explore-price-box">
							
							<span class="explore-price"><?php echo $prix; ?></span>
						</span>
						<a href="#"><?php echo $categorie; ?></a>
					</p>
					<div class="explore-person">
						<div class="row">
							<div class="col-sm-2">
								<div class="explore-person-img">
									<a href="#">
										<img src="assets/images/explore/person.png" alt="explore person">
									</a>
								</div>
							</div>
							<div class="col-sm-10">
								<p>
								<?php echo $description; ?>
							</p>
							</div>
						</div>
					</div>
					<div class="explore-open-close-part">
						<div class="row">
							<div class="col-sm-5">
								<button class="close-btn" onclick="window.location.href='#'">close now</button>
							</div>
							<div class="col-sm-7">
								<div class="explore-map-icon">
									<a href="#"><i data-feather="map-pin"></i></a>
									<a href="#"><i data-feather="upload"></i></a>
									<a href="#"><i data-feather="heart"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</a>
</div>


<?php
	if($count == 2) {
		echo '</br>';
		$count = 0;
	}
}
} catch(PDOException $e) {
	echo "Erreur : " . $e->getMessage();
}


?>




<!--footer start-->
<footer id="footer" class="footer">
	<div class="container">
		<div class="footer-menu">
			<div class="row">
				<div class="col-sm-3">
					<div class="navbar-header">
						<a class="navbar-brand" href="index.php">wesh<span>derna</span></a>
					</div><!--/.navbar-header-->
				</div>
			</div>
		</div>


	</div>
</footer>









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

