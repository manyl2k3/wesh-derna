<!DOCTYPE html>
<html lang="en">
<head>

    <?php session_start(); ?>

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


       <link rel="stylesheet" href="activité.css">

       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       <script src="envoie_comment.js"></script>
       <script src="incr_rep.js"></script>
       <script src="note.js"></script>


</head>
<body>
    <?php

if(isset($_SESSION['id'])){
    echo $_SESSION['id'];
}
else{
    echo "no";
}
?>



    <!--header-top start -->

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


    <?php
$host = 'localhost';
$dbname = 'weshderna';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $id = $_GET['id'];
    echo $id;

    // Le reste de votre code ici...


    

    $stmt = $pdo->prepare("SELECT * FROM activité WHERE activité_id = :id");
    $stmt->bindParam(':id', $id);
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
		
    }
} catch(PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>



    
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
			                  
                            <li class=" scroll active">
                                
                                <form action="recherche.php" method = "POST">
                                <input type="hidden" id="type" name="type" value="<?php echo $categorie; ?>" />
                                <input type="hidden" id="location" name="location" value="<?php echo $wilaya; ?>"/>
                                <input type="submit" id="search" name="search" value="back" />
                                </form>
                            </li>
                                <li class=" scroll active"><a href="index.php">home</a></li>
			                   
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






      
<div class="titre" style="position: relative;">
    <?php echo $titre; ?>
    <div class="prix" style="position: absolute; top: 0; right: 0;">
        prix: <?php echo $prix; ?>da
    </div>
</div>  

<h4>
    nombre de signalements:
</h4>

<div id="nb_report" >

<?php
    $stmt = $pdo->prepare("SELECT report FROM activité WHERE activité_id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    // Afficher les résultats
    while ($row = $stmt->fetch()) {
        $report = $row['report'];
        echo $report;
    }
    ?>
</div>

   <form  id="signal">
 <input type="hidden" id="id" value="<?php echo $id; ?>">
 <input type="submit" name="report" class="btn btn-danger" name="signaler">
</form>

<div class="images">


        <div class="explore-content">
					<div class="row">
						<div class=" col-md-4 col-sm-6">
							<div class="single-explore-item">
								<div class="single-explore-img">
									<img src="<?php echo $image; ?>" alt="explore image">
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
            <p1>
            <?php echo $description; ?></p1>          
 
</div> 



<div class="date" >
    date: <?php echo $date; ?>
    </div>



<div class="categorie" >
    categorie: <?php echo $categorie; ?>
</div>


<div class="note" >
<?php

$full_stars = floor($note);
$half_star = round($note * 2) % 2;
$empty_stars = 5 - $full_stars - $half_star;

echo str_repeat('★', $full_stars) . str_repeat('½', $half_star) . str_repeat('☆', $empty_stars) ;
?>


   <form  id="noter">
 <input type="hidden" id="id" value="<?php echo $id; ?>">
 <input type="text" id="note">


 <script>
$(document).ready(function() {
    $('#note').on('input', function() {
        var note = $(this).val();
       
        
        if (((note>=0 && note<=5) )) {
            $(this).css('border-color', 'green');

           
            
   
        } else {
            $(this).css('border-color', 'red');
            alert('la note doit etre entre 0 et 5');
        }
    });
});

</script>



 <input type="submit" name="noter" class="btn btn-danger" >
</form>

<div id="nvnote">
</div>


</div>



<div class="tel" >
    tel:<?php echo $tel; ?>
</div>

<div class="adresse" >
    adresse: <?php echo $adresse; ?>
</div>
     
<div class="wilaya" >
    wilaya: <?php echo $wilaya; ?>


    
<div class="adresse">
    adresse: <?php echo $adresse; ?>



    <div class="commentaires" style="position: absolute; right: 80px; bottom:-350px">


    <div class="nouveau-commentaire">
            <h4>
    </br>
                ajouter un commentaire
            
            </h4>

            

            <form id="comment-form">
            <input type="text" id="comment" name="message" placeholder="Votre commentaire">
            

            <input type="hidden" id="user_id" value="<?php echo $_SESSION["id"] ?>">
            <input type="hidden" id="annonce_id" value="<?php echo $id; ?>">
            <input type="submit" style="border: 1px solid black;">

            </form>
            </br>
            <h3>Commentaires</h3>
            
            <div class="comment" style="border: 1px solid black; padding= 10px">
            <div class="pseudo" style="font-weight: bold;"> <?php echo $_SESSION["username"]?>: </div>
            <div id="message-container" ></div>
            </div>




        </div>


    <br>
    

        <?php
        $stmt = $pdo->prepare("SELECT * FROM commentaire WHERE activité_id = :id ORDER BY com_id DESC");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $count=0;

        // Afficher les résultats
        while ($row = $stmt->fetch()) {
            $text = $row['text'];
            $user = $row['user_id'];

            $stmt_user = $pdo->prepare("SELECT pseudo FROM utilisateur WHERE user_id = :id");
            $stmt_user->bindParam(':id', $user);
            $stmt_user->execute();
            $row_user = $stmt_user->fetch();
            $pseudo = $row_user['pseudo'];
        ?>
            <div class="comment" style="border: 1px solid black; padding= 10px">
                <div class="pseudo" style="font-weight: bold;"> <?php echo $pseudo; ?>: </div>
                <div class="text"><?php echo $text; ?></div>
            </div>
        <?php
        $count++;
        if($count==5){
            break;
        }
        }
        ?>
        

        
    </div>

    </div>


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