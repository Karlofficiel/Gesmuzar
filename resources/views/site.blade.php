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

		<link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet">
        
        <!-- title of site -->
        <title>fred-muzar</title>

        <!-- For favicon png -->
		<link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png"/>
       
        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

        <!--linear icon css-->
		<link rel="stylesheet" href="{{asset('css/linearicons.css')}}">

        <!--flaticon.css-->
		<link rel="stylesheet" href="{{asset('css/flaticon.css')}}">

		<!--animate.css-->
        <link rel="stylesheet" href="{{asset('css/animate.css')}}">

        <!--owl.carousel.css-->
        <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">

		<link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
		
        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
		
		<!-- bootsnav -->
		<link rel="stylesheet" href="{{asset('css/bootsnav.css')}}" >	
        
        <!--style.css-->
        <link rel="stylesheet" href="{{asset('css/stylee.css')}}">
        
        <!--responsive.css-->
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}">

    </head>
	
	<body>


	<style>
	
	</style>
		<!--page de bien venu -->
		<section id="home" class="welcome-hero" >

			<!-- pres commence -->
			<div class="top-area">
				<div class="header-area">
					<!-- Start Navigation -->
				   

				        <div class="menu" style="display:flex; position:relative;">

				            <!-- Start Header Navigation -->
				            <div class="navbar-header" >
								

				            </div><!--/.navbar-header-->
				            <!-- End Header Navigation -->

				            <!-- Collect the nav links, forms, and other content for toggling -->
				          <nav  style="position:absolute; display:flex; background:#000; width:2000px; ;height:50px; padding:35px;"  >
						      <img class="imgtitre" src="assets/images/titre/fred.png" width="80" height="80" ><p class="titre" style="margin-left:60px; position:absolute; top:0; color:#fff; margin-bottom:10px;">fred-muzar</p>
						         
						         <ul class="menu1">
				                    <li class=" scroll active"><a href="#home" >Acceuil</a></li>
				                    <li class="scroll"><a href="#service">services</a></li>
				                    <li class="scroll" ><a href="#featured-cars" >facturation</a></li>
				                    <li class="scroll"><a href="#new-cars" >nouveautés</a></li>
				                    <li class="scroll"><a href="#brand" >partenaires</a></li>
									<li class="scroll"><a href="/inscription">s'inscrire</a></li>
				                </ul>
						  </nav>
				               
				            </div><!-- /.navbar-collapse -->
				        </div><!--/.container-->
				    <!-- End Navigation -->
				</div><!--/.header-area-->
			   

			</div><!-- /.top-area-->

		
	<div class="acceuil" style="margin-top:122px;">
		<div>
		  <img src="assets/images/titre/ncm2.png" width="500" height="300" style="position:absolute;left:940px;">
		</div>
		<h1>
			 solutions <span> Pour paliés </span><br>a nos problèmes de <br> déplacement
		</h1>

		<p>
			vente et location de voiture de qualite . meilleurs prix et offres spéciales  <br> chez nous trouver votre voiture ideal
		</p>

		<nav>
			<a href="/connexion"><button class="but1">achats</button></a>
			<a href="/connexion"><button>location</button></a>
		</nav>
	</div>

			<div class="container" style="position:relative; margin-top:600px;">
				<div class="row">
					<div class="col-md-12" style="margin-left:none; width:100px;">
						<div class="model-search-content">
						<div style="position:relative;left:100px;">		
							<div class="row">
								<div class="col-md-offset-1 col-md-2 col-sm-12">
									<div class="single-model-search" id="ss">
										<h2>selectionner l'année</h2>
										<div class="model-select-icon" style="margin:5px;">
											<select class="form-control" >

											  	<option value="default">année</option><!--/option-->
											  	
											  	<option value="2016">2015</option><!-- /.option-->
											  	<option value="2016">2014</option><!-- /.option-->
											  	<option value="2016">2013</option><!-- /.option-->
											  	<option value="2016">2012</option><!-- /.option-->
											  	<option value="2016">2011</option><!-- /.option-->
											  	<option value="2016">2010</option><!-- /.option-->
											  	<option value="2016">2009</option><!-- /.option-->
											  	<option value="2016">2008</option><!-- /.option-->
											  	<option value="2016">2007</option><!-- /.option-->
											  	<option value="2016">2006</option><!-- /.option-->
											  	<option value="2016">2005</option><!-- /.option-->
											  	<option value="2016">2004</option><!-- /.option-->
											  	<option value="2016">2003</option><!-- /.option-->
											  	<option value="2016">2002</option><!-- /.option-->
											  	<option value="2016">2001</option><!-- /.option-->
											  	<option value="2016">2000</option><!-- /.option-->

											</select><!-- /.select-->
										</div><!-- /.model-select-icon -->
									</div>
									<div class="single-model-search" id="ss">
										<h2>choisir le style </h2>
										<div class="model-select-icon" style="margin:5px;">
											<select class="form-control">

											  	<option value="default">style</option><!-- /.option-->

											  	<option value="sedan">sedan</option><!-- /.option-->

											  	<option value="van">van</option><!-- /.option-->
											  	<option value="roadster">roadster</option><!-- /.option-->

											</select><!-- /.select-->
										</div><!-- /.model-select-icon -->
									</div>
								</div>
								<div class="col-md-offset-1 col-md-2 col-sm-12">
									<div class="single-model-search" id="ss">
										<h2>selectionner la marque</h2>
										<div class="model-select-icon" style="margin:5px;">
											<select class="form-control">

											  	<option value="default">marque</option><!-- /.option-->

											  	<option value="toyota">toyota</option><!-- /.option-->

											  	<option value="holden">honda</option><!-- /.option-->
											  	<option value="maecedes-benz">FERRARI</option><!-- /.option-->
											  	<option value="maecedes-benz">BENTLEY</option><!-- /.option-->
											  	<option value="maecedes-benz">BMW</option><!-- /.option-->
											  	<option value="maecedes-benz">PORCHE</option><!-- /.option-->
											  	<option value="maecedes-benz">maecedes-benz.</option><!-- /.option-->
										

											</select><!-- /.select-->
										</div><!-- /.model-select-icon -->
									</div>
									<div class="single-model-search" id="ss">
										<h2> conditions</h2>
										<div class="model-select-icon" style="margin:5px;">
											<select class="form-control">

											  	<option value="default">condition</option><!-- /.option-->

											  	<option value="something">revente</option><!-- /.option-->

											  	<option value="something">location</option><!-- /.option-->
											  	<option value="something">deuxieme main</option><!-- /.option-->
											  	<option value="something">renover</option><!-- /.option-->
											  	<option value="something">promotion</option><!-- /.option-->

											</select><!-- /.select-->
										</div><!-- /.model-select-icon -->
									</div>
								</div>
								<div class="col-md-offset-1 col-md-2 col-sm-12">
									<div class="single-model-search" id="ss">
										<h2>selectionner le model</h2>
										<div class="model-select-icon" style="margin:5px;">
											<select class="form-control">

											  	<option value="default">model</option><!-- /.option-->

											  	<option value="kia-rio">kia-rio</option><!-- /.option-->

											  	<option value="mitsubishi">mitsubishi</option><!-- /.option-->
											  	<option value="ford">ford</option><!-- /.option-->
											  	<option value="ford">ford</option><!-- /.option-->
											  	<option value="ford">ford</option><!-- /.option-->

											</select><!-- /.select-->
										</div><!-- /.model-select-icon -->
									</div>
									<div class="single-model-search">
										<h2>selectionner le prix </h2>
										<div class="model-select-icon" style="margin:5px;">
											<select class="form-control">

											  	<option value="default">prix</option><!-- /.option-->

											  	<option value="$0.00">700  -  1000000 FCFA</option><!-- /.option-->

											  	<option value="$0.00">2000000  -  3000000 FCFA</option><!-- /.option-->
											  	<option value="$0.00">4000000 FCFA-plus</option><!-- /.option-->

											</select><!-- /.select-->
										</div><!-- /.model-select-icon -->

                    </div>

									</div>
								</div>
								<div class="col-md-2 col-sm-12">
									<div class="single-model-search text-center">
										<a href="/connexion"><button class="welcome-btn model-search-btn" style="position:absolute;right:260px;bottom:100px;">
										 rechercher
										</button></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</section><!--/.welcome-hero-->
		<!--welcome-hero end -->

		<!--service start -->
		<section id="service" class="service">
			<div class="container">
				<div class="service-content">
					<div class="row">
						<div class="col-md-4 col-sm-6">
							<div class="single-service-item" id="leun">
								<div class="single-service-icon">
									<i class="flaticon-car"></i>
								</div>
								<h2><a href="#">ambition <span> de</span> leadership</a></h2>
								<p>
									nous avons pour projet d'etre l'entreprise a la tete de la vente eta revente de voiture de tout le cameroun 
								</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="single-service-item">
								<div class="single-service-icon">
									<i class="flaticon-car-repair"></i>
								</div>
								<h2><a href="#">garantie de réparation illimitée</a></h2>
								<p>
									fred-muzar offres une garantie qui couvre les réparations nécessaire pour une voiture acheté et sans limite
								</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="single-service-item">
								<div class="single-service-icon">
									<i class="flaticon-car-1"></i>
								</div>
								<h2><a href="#">support d'assurence</a></h2>
								<p>
									Nous offrons également un soutien pour les questions d'assurance telles que la recherche d'une assurance
								</p>
							</div>
						</div>
					</div>
				</div>
			</div><!--/.container-->

		</section><!--/.service-->
		<!--service end-->

		<!--new-cars start -->
		<section id="new-cars" class="new-cars">
			<div class="container">
				<div class="section-header">
					<p> visiter <span>nos </span> dernieres voitures</p>
					<h2>nouvelles mise a jour</h2>
				</div><!--/.section-header-->
				<div class="new-cars-content">
					<div class="owl-carousel owl-theme" id="new-cars-carousel">
						<div class="new-cars-item">
							<div class="single-new-cars-item">
								<div class="row">
									<div class="col-md-7 col-sm-12">
										<div class="new-cars-img">
											<img src="assets/images/new-cars-model/ncm1.png" alt="img"/>
										</div><!--/.new-cars-img-->
									</div>
									<div class="col-md-5 col-sm-12">
										<div class="new-cars-txt">
											<h2><a href="#">chevrolet camaro <span> za100</span></a></h2>
											<p>
												intérieur tres élégant et confortable ,avec un moteur puissant et réactif ,la trasmission est tres fluide et précise ,les freins sont tres efficaces et progressifs ,l'écran tactile est vraiment intuitif a utiliser ,le systeme de navigartion est tres précis 
											</p>
											<p class="new-cars-para2">
												les sieges chauffants et ventilles sont un vrai plus 
											</p>
											<button class="welcome-btn new-cars-btn" onclick="window.location.href='#'">
												voir les détails
											</button>
										</div><!--/.new-cars-txt-->	
									</div><!--/.col-->
								</div><!--/.row-->
							</div><!--/.single-new-cars-item-->
						</div><!--/.new-cars-item-->
						<div class="new-cars-item">
							<div class="single-new-cars-item">
								<div class="row">
									<div class="col-md-7 col-sm-12">
										<div class="new-cars-img">
											<img src="assets/images/new-cars-model/ncm2.png" alt="img"/>
										</div><!--/.new-cars-img-->
									</div>
									<div class="col-md-5 col-sm-12">
										<div class="new-cars-txt">
											<h2><a href="#">BMW series-3 wagon</a></h2>
											<p>
												la voitures est très silensieuse,avec un moteur puissant et réactif ,la trasmission est tres fluide et précise ,les freins sont tres efficaces et progressifs ,l'écran tactile est vraiment intuitif a utiliser ,le systeme de navigartion est tres précis 
										
											</p>
											<p class="new-cars-para2">
												la consommation de carburant est vraiment résonnable
											</p>
											<button class="welcome-btn new-cars-btn" onclick="window.location.href='#'">
												voir les détails
											</button>
										</div><!--/.new-cars-txt-->	
									</div><!--/.col-->
								</div><!--/.row-->	
							</div><!--/.single-new-cars-item-->
						</div><!--/.new-cars-item-->
						<div class="new-cars-item">
							<div class="single-new-cars-item">
								<div class="row">
									<div class="col-md-7 col-sm-12">
										<div class="new-cars-img">
											<img src="assets/images/new-cars-model/ncm1.jpg" alt="img"/>
										</div><!--/.new-cars-img-->
									</div>
									<div class="col-md-5 col-sm-12">
										<div class="new-cars-txt">
											<h2><a href="#">ferrari 488 superfast</a></h2>
											<p>
												le moteur est tres puissant et réactif ,la trasmission est tres fluide et précise ,les freins sont tres efficaces et progressifs ,l'écran tactile est vraiment intuitif a utiliser ,le systeme de navigartion est tres précis 
									
											</p>
											<p class="new-cars-para2">
											les emissions de co2 sont trés faibles 
											</p>
											<button class="welcome-btn new-cars-btn" onclick="window.location.href='#'">
												voir les détails
											</button>
										</div><!--/.new-cars-txt-->	
									</div><!--/.col-->
								</div><!--/.row-->
							</div><!--/.single-new-cars-item-->
						</div><!--/.new-cars-item-->
					</div><!--/#new-cars-carousel-->
				</div><!--/.new-cars-content-->
			</div><!--/.container-->

		</section><!--/.new-cars-->
		<!--new-cars end -->

		<!--featured-cars start -->
		<section id="featured-cars" class="featured-cars">
			<div class="container">
				<div class="section-header">
					<p>consulte  <span>la</span> les informatios de ta voiture</p>
					<h2>exemples de produits</h2>
				</div><!--/.section-header-->
				<div class="featured-cars-content">
					<div class="row">
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="single-featured-cars">
								<div class="featured-img-box">
									<div class="featured-cars-img">
										<img src="assets/images/featured-cars/fc1.png" alt="cars">
									</div>
									<div class="featured-model-info">
										<p>
											model: 2017
											<span class="featured-mi-span"> 3100 mi</span> 
											<span class="featured-hp-span"> 240HP</span>
											 automatic
										</p>
									</div>
								</div>
								<div class="featured-cars-txt">
									<h2><a href="#">BMW 6-series gran coupe</a></h2>
									<h3>2000000 FCFA</h3>
									<p>
										la bmw est l'une des voitures la plus populaire de notres collection et est encore dispo en quantité
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="single-featured-cars">
								<div class="featured-img-box">
									<div class="featured-cars-img">
										<img src="assets/images/featured-cars/fc2.png" alt="cars">
									</div>
									<div class="featured-model-info">
										<p>
											model: 2017
											<span class="featured-mi-span"> 3100 mi</span> 
											<span class="featured-hp-span"> 240HP</span>
											 automatic
										</p>
									</div>
								</div>
								<div class="featured-cars-txt">
									<h2><a href="#">chevrolet camaro <span>wmv20</span></a></h2>
									<h3>20000000 FCFA</h3>
									<p>
										le chevrolet est tres rares dans notres collection et est encore dispo en édition limité 
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="single-featured-cars">
								<div class="featured-img-box">
									<div class="featured-cars-img">
										<img src="assets/images/featured-cars/fc3.png" alt="cars">
									</div>
									<div class="featured-model-info">
										<p>
											model: 2017
											<span class="featured-mi-span"> 3100 mi</span> 
											<span class="featured-hp-span"> 240HP</span>
											 automatic
										</p>
									</div>
								</div>
								<div class="featured-cars-txt">
									<h2><a href="#">lamborghini <span>v520</span></a></h2>
									<h3>22 000000 FCFA</h3>
									<p>
										la lamborghini  est egalement tres rares dans notres collection et est encore dispo en édition limité  
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="single-featured-cars">
								<div class="featured-img-box">
									<div class="featured-cars-img">
										<img src="assets/images/featured-cars/fc4.png" alt="cars">
									</div>
									<div class="featured-model-info">
										<p>
											model: 2017
											<span class="featured-mi-span"> 3100 mi</span> 
											<span class="featured-hp-span"> 240HP</span>
											 automatic
										</p>
									</div>
								</div>
								<div class="featured-cars-txt">
									<h2><a href="#">audi <span> a3</span> sedan</a></h2>
									<h3>1500000 FCFA</h3>
									<p>
										les audi sont aussi des voitures tres populaire de notres collection et est encore dispo en quantité 
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="single-featured-cars">
								<div class="featured-img-box">
									<div class="featured-cars-img">
										<img src="assets/images/featured-cars/fc4.png" alt="cars">
									</div>
									<div class="featured-model-info">
										<p>
											model: 2017
											<span class="featured-mi-span"> 3100 mi</span> 
											<span class="featured-hp-span"> 240HP</span>
											 automatic
										</p>
									</div>
								</div>
								<div class="featured-cars-txt">
									<h2><a href="#">peugeot <span>z5</span></a></h2>
									<h3>2000000 FCFA</h3>
									<p>
										la peugeot  est egalement tres rares dans notres collection et est encore dispo en édition limité  
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="single-featured-cars">
								<div class="featured-img-box">
									<div class="featured-cars-img">
										<img src="assets/images/featured-cars/fc5.png" alt="cars">
									</div>
									<div class="featured-model-info">
										<p>
											model: 2017
											<span class="featured-mi-span"> 3100 mi</span> 
											<span class="featured-hp-span"> 240HP</span>
											 automatic
										</p>
									</div>
								</div>
								<div class="featured-cars-txt">
									<h2><a href="#">porsche <span>718</span> cayman</a></h2>
									<h3>450000 FCFA</h3>
									<p>
										les porches sont présente mais souvent rares dans notres collection et est encore dispo en édition limité   
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="single-featured-cars">
								<div class="featured-img-box">
									<div class="featured-cars-img">
										<img src="assets/images/featured-cars/fc7.png" alt="cars">
									</div>
									<div class="featured-model-info">
										<p>
											model: 2017
											<span class="featured-mi-span"> 3100 mi</span> 
											<span class="featured-hp-span"> 240HP</span>
											 automatic
										</p>
									</div>
								</div>
								<div class="featured-cars-txt">
									<h2><a href="#"><span>toyota 2008-</span>series coupe</a></h2>
									<h3>2300000 FCFA</h3>
									<p>
										la toyota est l'une des voitures la plus populaire de notres collection et est encore dispo en quantité
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="single-featured-cars">
								<div class="featured-img-box">
									<div class="featured-cars-img">
										<img src="assets/images/featured-cars/fc8.png" alt="cars">
									</div>
									<div class="featured-model-info">
										<p>
											model: 2017
											<span class="featured-mi-span"> 3100 mi</span> 
											<span class="featured-hp-span"> 240HP</span>
											 automatic
										</p>
									</div>
								</div>
								<div class="featured-cars-txt">
									<h2><a href="#">BMW <span> x</span>series-6</a></h2>
									<h3>6000000 FCFA</h3>
									<p>
										la bmw est l'une des voitures la plus populaire de notres collection et est encore dispo en quantité
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!--/.container-->

		</section><!--/.featured-cars-->
		<!--featured-cars end -->

		<!-- clients-say strat -->
		<section id="clients-say"  class="clients-say">
			<div class="container">
				<div class="section-header">
					<h2>témoignage des cliens satisfaits</h2>
				</div><!--/.section-header-->
				<div class="row">
					<div class="owl-carousel testimonial-carousel">
						<div class="col-sm-3 col-xs-12">
							<div class="single-testimonial-box">
								<div class="testimonial-description">
									<div class="testimonial-info">
										<div class="testimonial-img">
											<img src="assets/images/clients/c1.png" alt="image of clients person" />
										</div><!--/.testimonial-img-->
									</div><!--/.testimonial-info-->
									<div class="testimonial-comment">
										<p>
										je suis absolument ravie de mon experience d'achat chez FRED-MUZAR CAR l'equipe a étés extrèmement professionnelle et m'a aider a trouver la voiture parfaite pour moi .
										</p>
									</div><!--/.testimonial-comment-->
									<div class="testimonial-person" style="margin-right:10px;">
										<h2><a href="https://web.facebook.com/Karlofficiel237" target="_blank">karl evans</a></h2>
										<h4></h4>
									</div><!--/.testimonial-person-->
								</div><!--/.testimonial-description-->
							</div><!--/.single-testimonial-box-->
						</div><!--/.col-->
						<div class="col-sm-3 col-xs-12">
							<div class="single-testimonial-box">
								<div class="testimonial-description">
									<div class="testimonial-info">
										<div class="testimonial-img">
											<img src="assets/images/clients/c2.png" alt="image of clients person" />
										</div><!--/.testimonial-img-->
									</div><!--/.testimonial-info-->
									<div class="testimonial-comment">
										<p>
											Je recommande vivement FRED-MUZAR à quiconque cherche à acheter une voiture. Leur service client est exceptionnel et leur sélection de voitures est très large.

										</p>
									</div><!--/.testimonial-comment-->
									<div class="testimonial-person">
										<h2><a href="#">romi rain</a></h2>
										<h4>london</h4>
									</div><!--/.testimonial-person-->
								</div><!--/.testimonial-description-->
							</div><!--/.single-testimonial-box-->
						</div><!--/.col-->
						<div class="col-sm-3 col-xs-12">
							<div class="single-testimonial-box">
								<div class="testimonial-description">
									<div class="testimonial-info">
										<div class="testimonial-img">
											<img src="assets/images/clients/c3.png" alt="image of clients person" />
										</div><!--/.testimonial-img-->
									</div><!--/.testimonial-info-->
									<div class="testimonial-comment">
										<p>

Je suis très heureux de mon achat et je suis sûr que je reviendrai chez FRED-MUZAR pour mes futures besoins en matière de voiture."

										</p>
									</div><!--/.testimonial-comment-->
									<div class="testimonial-person">
										<h2><a href="#">john doe</a></h2>
										<h4>washington</h4>
									</div><!--/.testimonial-person-->
								</div><!--/.testimonial-description-->
							</div><!--/.single-testimonial-box-->
						</div><!--/.col-->
					</div><!--/.testimonial-carousel-->
				</div><!--/.row-->
			</div><!--/.container-->

		</section><!--/.clients-say-->	
		
		<!-- clients-say end -->

		<!--brand strat -->
		<section id="brand"  class="brand">
			<div class="container">
				<div class="brand-area">
					<div class="owl-carousel owl-theme brand-item">
						<div class="item">
							<a href="#">
								<img src="assets/images/brand/br1.png" alt="brand-image" />
							</a>
						</div><!--/.item-->
						<div class="item">
							<a href="#">
								<img src="assets/images/brand/br2.png" alt="brand-image" />
							</a>
						</div><!--/.item-->
						<div class="item">
							<a href="#">
								<img src="assets/images/brand/br3.png" alt="brand-image" />
							</a>
						</div><!--/.item-->
						<div class="item">
							<a href="#">
								<img src="assets/images/brand/br4.png" alt="brand-image" />
							</a>
						</div><!--/.item-->

						<div class="item">
							<a href="#">
								<img src="assets/images/brand/br5.png" alt="brand-image" />
							</a>
						</div><!--/.item-->

						<div class="item">
							<a href="#">
								<img src="assets/images/brand/br6.png" alt="brand-image" />
							</a>
						</div><!--/.item-->
					</div><!--/.owl-carousel-->
				</div><!--/.clients-area-->

			</div><!--/.container-->

		</section><!--/brand-->	
		<!--brand end -->

		<!--blog start -->
		<section id="blog" class="blog"></section><!--/.blog-->
		<!--blog end -->

		<!--contact start-->
		<footer id="contact"  class="contact">
			<div class="container">
				<div class="footer-top">
					<div class="row">
						<div class="col-md-3 col-sm-6">
							<div class="single-footer-widget">
								<div class="footer-logo">
									<a href="index.html">fred-muzar</a>
								</div>
								<p>
									les bons comptes font des bons amis et les bons rendements attirent les bons partenaires tel notre dévise
								</p>
								<div class="footer-contact">
									<p>info@themesine.com</p>
									<p>+237 6538585221 / +237 6843105954</p>
								</div>
							</div>
						</div>
						<div class="col-md-2 col-sm-6">
							<div class="single-footer-widget">
								<h2>concernant la gestion</h2>
								<ul>
									<li><a href="#">about us</a></li>
									<li><a href="#">career</a></li>
									<li><a href="#">terms <span> of service</span></a></li>
									<li><a href="#">privacy policy</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3 col-xs-12">
							<div class="single-footer-widget">
								<h2>nos produits</h2>
								<div class="row">
									<div class="col-md-7 col-xs-6">
										<ul>
											<li><a href="#">BMW</a></li>
											<li><a href="#">lamborghini</a></li>
											<li><a href="#">camaro</a></li>
											<li><a href="#">audi</a></li>
											<li><a href="#">infiniti</a></li>
											<li><a href="#">nissan</a></li>
										</ul>
									</div>
									<div class="col-md-5 col-xs-6">
										<ul>
											<li><a href="#">ferrari</a></li>
											<li><a href="#">porsche</a></li>
											<li><a href="#">land rover</a></li>
											<li><a href="#">aston martin</a></li>
											<li><a href="#">mersedes</a></li>
											<li><a href="#">opel</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-offset-1 col-md-3 col-sm-6">
							<div class="single-footer-widget">
								<h2>adresse Email</h2>
								<div class="footer-newsletter">
									<p>
										souscrire pour avoir les dernieres mises a jour
									</p>
								</div>
								<div class="hm-foot-email">
									<div class="foot-email-box">
										<input type="text" class="form-control" placeholder="Add Email" >
									</div><!--/.foot-email-box-->
									<div class="foot-email-subscribe">
										<span><i class="fa fa-arrow-right"></i></span>
									</div><!--/.foot-email-icon-->
								</div><!--/.hm-foot-email-->
							</div>
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="row">
						<div class="col-sm-6">
							<p>
								&copy; Copyright.developper et améliorer par les étudiants de Polytechnique Douala  <a href="https://www.themesine.com/">profils</a>.
							</p><!--/p-->
						</div>
						<div class="col-sm-6">
							<div class="footer-social">
								<a href="#"><i class="fa fa-facebook"></i></a>	
								<a href="#"><i class="fa fa-instagram"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
								<a href="#"><i class="fa fa-pinterest-p"></i></a>
								<a href="#"><i class="fa fa-behance"></i></a>	
							</div>
						</div>
					</div>
				</div><!--/.footer-copyright-->
			</div><!--/.container-->

			<div id="scroll-Top">
				<div class="return-to-top">
					<i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
				</div>
				
			</div><!--/.scroll-Top-->
			
        </footer><!--/.contact-->
		<!--contact end-->


		
		<!-- Include all js compiled plugins (below), or include individual files as needed -->

		<script src="assets/js/jquery.js"></script>
        
        <!--modernizr.min.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		
		<!--bootstrap.min.js-->
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- bootsnav js -->
		<script src="assets/js/bootsnav.js"></script>

		<!--owl.carousel.js-->
        <script src="assets/js/owl.carousel.min.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

        <!--Custom JS-->
        <script src="assets/js/custom.js"></script>
        
    </body>
	
</html>