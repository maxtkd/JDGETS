﻿<!doctype html>

<html lang="en-US">
	
<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>JDGETS - Jeux de Génie de l'ÉTS</title>
		<meta name="description" content="JDGETS - Jeux de Génie de l'ÉTS">
		<meta name="keywords" content="HTML5, Bootsrtrap, One Page, Responsive, Template, Portfolio" />

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Google Fonts  -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'> <!-- Body font -->
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'> <!-- Navbar font -->

		<!-- Libs and Plugins CSS -->
		<link rel="stylesheet" href="inc/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="inc/animations/css/animate.min.css">
		<link rel="stylesheet" href="inc/font-awesome/css/font-awesome.min.css"> <!-- Font Icons -->
		<link rel="stylesheet" href="inc/owl-carousel/css/owl.carousel.css">
		<link rel="stylesheet" href="inc/owl-carousel/css/owl.theme.css">

		<!-- Theme CSS -->
        <link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/mobile.css">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="css/skin/cool-gray.css">
        <link rel="alternate stylesheet" media="screen" title="ice-blue" href="css/skin/ice-blue.css"> 
        <link rel="alternate stylesheet" media="screen" title="summer-orange" href="css/skin/summer-orange.css">
        <link rel="alternate stylesheet" media="screen" title="fresh-lime" href="css/skin/fresh-lime.css">
        <link rel="alternate stylesheet" media="screen" title="night-purple" href="css/skin/night-purple.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>

    <body data-spy="scroll" data-target="#main-navbar">
        <div class="page-loader"></div>  <!-- Display loading image while page loads -->
    	<div class="body">
        
            <!--========== BEGIN HEADER ==========-->
            <header id="header" class="header-main">

                <!-- Begin Navbar -->
                <nav id="main-navbar" class="navbar navbar-default navbar-fixed-top" role="navigation"> <!-- Classes: navbar-default, navbar-inverse, navbar-fixed-top, navbar-fixed-bottom, navbar-transparent. Note: If you use non-transparent navbar, set "height: 98px;" to #header -->

                  <div class="container">

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand page-scroll" href="index.html">JDGÉTS</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a class="page-scroll" href="#about-section">À propos</a></li>
                            <li><a class="page-scroll" href="#delegation-section">Délégation</a></li>
                            <li><a class="page-scroll" href="#portfolio-section">Portfolio</a></li>
                            <li><a class="page-scroll" href="#event-section">Résultats</a></li>                            
                            <li><a class="page-scroll" href="#doc-section">Documents</a></li>
                            <li><a class="page-scroll" href="#social-section">Social</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container -->
                </nav>
                <!-- End Navbar -->

            </header>
            <!-- ========= END HEADER =========-->
            
            
            
            
        	<!-- Begin text carousel intro section -->
			<section id="text-carousel-intro-section" class="parallax" data-stellar-background-ratio="0.5" style="background-image: url(img/slider-bg.jpg);">
				
				<div class="container">
					<div class="caption text-center text-white" data-stellar-ratio="0.7">

						<div id="owl-intro-text" class="owl-carousel">

							<div class="item">
								<h1>Jeux de Génie</h1>
								<p>École de technologie supérieure</p>
								<div class="extra-space-l"></div>
								
							</div>
						</div>

					</div> <!-- /.caption -->
				</div> <!-- /.container -->

			</section>
			<!-- End text carousel intro section -->
                
            <!-- Begin partners -->
            <section id="partners-section">
                <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2>Nos partenaires</h2>
                            <div class="devider"></div>
                            <p class="subtitle"></p>
                        </div>
                    </div>
                </div>
                <!-- End page header-->
				
                <div class="container">
                    <div id="owl-partners" class="owl-carousel">
					<?php 
					foreach(glob("img/partners/".'*') as $filename){
						echo "<img src='$filename' alt='img' width='150'>";
					} ?>
                        

                    </div>
                </div>
            </section>
            <!-- End partners -->  
			  
           <!-- Begin about section -->
			<section id="about-section" class="page bg-style1">
                <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">
                            <h2>À Propos</h2>
                            <div class="devider"></div>
                            <p class="subtitle">Qu'est-ce que les jeux ?</p>
                        </div>
                    </div>
                </div>
                <!-- End page header-->

                <!-- Begin rotate box-1 -->
                <div class="rotate-box-1-wrapper">
                    <div class="container">
                        <div class="row">
                            
                            <p  style="text-align:justify;">    Fondés en 1990, les Jeux de Génie (JDG) sont une compétition d’envergure provinciale où toutes les facultés de génie à travers le Québec  s’affrontent dans diverses épreuves pour déterminer un grand vainqueur. Chaque année, plus de 400 futurs ingénieurs  répartis dans 12 délégations relèvent cet unique défi. Sur une période de près de 100 heures, les participants doivent démontrer leur habileté intellectuelle, manuelle, sportive et sociale. Dans ce marathon de compétition, plusieurs personnes voient leur limite mise à rude épreuve. Impossible de s’arrêter. L’adrénaline,  les moments inoubliables et les émotions prennent le dessus. Dans une atmosphère unique, cet évènement favorise grandement les échanges entre étudiants en génie, le dépassement de soi et permet d’élargir son réseau de contact professionnel.
</p> <div class="extra-space-l" style="text-align:justify;"></div>

<div class="col-md-3 col-sm-6" style="text-align:justify;"><h3>Compétition de la machine</h3>

La compétition de la machine est l’épreuve maîtresse de la compétition des Jeux de Génie. Elle consiste en un défi commun lancé trois mois avant la compétition. Le défi : fabriquer une machine autonome et intelligente qui utilisera un bon nombre de capteurs et de senseurs afin de surmonter les diverses épreuves du parcours donné. La fabrication de cette machine nécessite la formation d’équipes multidisciplinaires qui devront investir beaucoup de temps afin d’en arriver à un produit des plus compétitifs.

Les équipes machines de chacune des délégations devront œuvrer d’ingéniosité, de créativité en plus de développer la synergie nécessaire afin d’en arriver à une machine qui sera en mesure de correspondre parfaitement aux devis. Les participants de la compétition de la machine doivent donc mettre à profit leurs connaissances et leurs compétences en ingénierie afin de pouvoir administrer leur budget consacré à l’achat des ressources matérielles et les transformations nécessaires à apporter afin de faire de leurs idées une réalité.

La compétition est un évènement fortement médiatisé et fait la fierté des participants et des organisateurs.

</div>
<div class="col-md-3 col-sm-6" style="text-align:justify;"><h3>Compétition académiques</h3>

Chaque épreuve académique se déroule sur une période de quatre heures durant laquelle les équipes doivent répondre à un questionnaire théorique et réaliser une épreuve pratique qui prend la forme d’un montage, d’une expérience de laboratoire ou d’une mise en situation reliée à un domaine spécifique de l’ingénierie. Pour ce faire, chaque délégation fait la composition d’équipes en fonction des spécialités d’ingénierie proposées pour les différentes épreuves académiques de la compétition. Pour les participants, ces compétitions sont l’équivalent d’un examen final récapitulatif de l’ensemble de leur formation. Un vrai défi à la hauteur de la relève de demain en ingénierie!

Il est également possible pour le partenaire d’un concours académique de définir la tâche à accomplir par les participants. Le commanditaire pourra ainsi jouir d’une visibilité accrue auprès des futurs ingénieurs appartenant au domaine d’activité évalué.

</div>
<div class="col-md-3 col-sm-6" style="text-align:justify;"><h3>Compétitions sportives</h3>

C’est en s’inspirant de l’adage « un esprit sain dans un corps sain » que les compétitions sportives se sont frayées une place au sein du programme de la compétition. Bien que les participants aux Jeux de Génie soient reconnus pour leurs habilités académiques, les concours sportifs leur permettent aussi de démontrer leur polyvalence. Les compétitions seront non seulement axées sur les habiletés athlétiques individuelles mais, également, sur l’esprit d’équipe et l’effort d’équipe, deux des valeurs les plus importantes de la compétition.

</div><div class="col-md-3 col-sm-6" style="text-align:justify;"><h3>Débats oratoires</h3>

La communication est sans conteste une aptitude essentielle que doit posséder tout ingénieur en industrie. Ainsi, la compétition des débats oratoires est une occasion en or pour les experts en rhétorique de mesurer leurs capacités d'élocution devant un public formé des délégations et des partenaires de la compétition. Les thèmes des débats portent sur l'éthique ainsi que sur le rôle que les ingénieurs auront à jouer dans les enjeux de l’heure.

                            
                
                
          </section>
          <!-- End about section -->

             
              
              
              
            <!-- Begin testimonials -->
            <section id="delegation-section">
                <div id="testimonial-trigger" class="testimonial text-white parallax" data-stellar-background-ratio="0.5" style="background-image: url(img/testimonial-bg.jpg);">
                    <div class="cover"></div>
                   <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2>Délégation <?php echo date('Y', strtotime('+1 year')); ?></h2>
                            <div class="devider"></div>
                            <p class="subtitle">Exécutif</p>
                        </div>
                    </div>
                </div>
                <!-- End page header-->
                <div class="container">
                    <div class="row">
                        <div class="team-items">
						<?php 

							$handle = fopen("team/Configuration.txt", "r");
							$line = fgets($handle); // Read the coment Line
							$year = explode(":", fgets($handle))[1];
								while (($line = fgets($handle)) !== false) {
									// process the line read.
									$pieces = explode(":", $line);
									
									if(!empty($pieces[0]) && !empty($pieces[1]))
									{
										echo "<div class='col-md-2'>
											<div class='team-container wow bounceIn' data-wow-delay='0.2s'>
												<div class='team-item'>
													<div class='team-triangle'>
														<div class='content'>
															<img src='team/$year/$pieces[0].jpg' alt='title'/>
															<div class='team-hover text-center'>
																<p>" . $pieces[0] . "</p>
																<small>" . $pieces[1] . "</small>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>";
									}
								}
								fclose($handle);
							 						
							
						 ?>
                            
                            
                            <div class="clearfix"></div>
                        </div>  
                    </div>
                </div>

            </section>
            <!-- End testimonials -->
                

                
                
            <!-- Begin Portfolio -->
            <section id="portfolio-section" class="page bg-style1">
            	<div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="portfolio">
                                <!-- Begin page header-->
                                <div class="page-header-wrapper">
                                    <div class="container">
                                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                                            <h2>Portfolio</h2>
                                            <div class="devider"></div>
                                            <p class="subtitle">Ce dont on est fier</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End page header-->
								<div id="overlay"></div>
								<div id="overlayContent">
									<img id="imgBig" src="" alt="" width="800" />
								</div>

                                <div class="portfoloi_content_area" >
                                    <div class="portfolio_menu" id="filters">
                                        <ul>
                                            <li class="active_prot_menu"><a href="#porfolio_menu" data-filter="*">Tout</a></li>
                                            <li><a href="#porfolio_menu" data-filter=".Machine">Machine</a></li>
                                            <li><a href="#porfolio_menu" data-filter=".Sports" >Sports</a></li>
                                            <li><a href="#porfolio_menu" data-filter=".Improvisation">Improvisation</a></li>
                                            <li><a href="#porfolio_menu" data-filter=".Débat">Débat</a></li>
                                        </ul>
                                    </div>
                                    <div class="portfolio_content">
                                        <div class="row"  id="portfolio">
											<?php 
											foreach(glob("img/portfolio/Debat/".'*') as $filename){
												echo 	"<div class='col-xs-12 col-sm-4 Débat'>
															<div class='portfolio_single_content'>
																<img class='imgSmall' src='$filename' alt='title'/>
															</div>
														</div>";
											}  
											foreach(glob("img/portfolio/Sports/".'*') as $filename){
												echo 	"<div class='col-xs-12 col-sm-4 Sports'>
															<div class='portfolio_single_content'>
																<img class='imgSmall' src='$filename' alt='title'/>
															</div>
														</div>";
											} 
											foreach(glob("img/portfolio/Impro/".'*') as $filename){
												echo 	"<div class='col-xs-12 col-sm-4 Improvisation'>
															<div class='portfolio_single_content'>
																<img class='imgSmall' src='$filename' alt='title'/>
															</div>
														</div>";
											} 
											foreach(glob("img/portfolio/Machine/".'*') as $filename){
												echo 	"<div class='col-xs-12 col-sm-4 Machine'>
															<div class='portfolio_single_content'>
																<img class='imgSmall' src='$filename' alt='title'/>
															</div>
														</div>";
											} ?>
										
                                        </div>
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End portfolio -->
            
                
                
                 <!-- Begin Services -->
            <section id="event-section" class="page text-center">
                <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2>Résultats</h2>
                            <div class="devider"></div>
                            <p class="subtitle">Nos victoires</p>
                        </div>
                    </div>
                </div>
                <!-- End page header-->
            
                <!-- Begin roatet box-2 -->
                <div class="rotate-box-2-wrapper">
                    <div class="container">
                        <div class="row">
						
							<div class="col-md-3 col-sm-6" align="left">
                                <h4 style="margin-left: 40px">2018</h4>
                                <br><img src ="./img/icon/firstPlace.png"> <b>Génie Conseil</b>
								<br><img src ="./img/icon/firstPlace.png"> <b>Soirée Culturelle</b>
								<br><img src ="./img/icon/secondPlace.png"> <b>Machine</b>
								<br><img src ="./img/icon/thirdPlace.png"> <b>Génie Civil</b>
								<br><img src ="./img/icon/thirdPlace.png"> <b>Génie Industriel</b>
								<br><img src ="./img/icon/thirdPlace.png"> <b>Débat Oratoires</b>
                            </div>
							
							 <div class="col-md-3 col-sm-6" align="left">
                                <h4 style="margin-left: 40px">2017</h4>
								<br><img src ="./img/icon/thirdPlace.png"> <b>Classement Général</b>
								<br>
								<br><img src ="./img/icon/firstPlace.png"> <b>Soirée Culturelle</b>
                                <br><img src ="./img/icon/firstPlace.png"> <b>Esprit d'équipe</b>
								<br><img src ="./img/icon/firstPlace.png"> <b>Sport Pokéball</b>
								<br><img src ="./img/icon/secondPlace.png"> <b>Improvisation</b>
								<br><img src ="./img/icon/thirdPlace.png"> <b>Débats oratoires</b>
								<br><img src ="./img/icon/thirdPlace.png"> <b>Génie Informatique</b>
								<br><img src ="./img/icon/thirdPlace.png"> <b>Participation</b>
                            </div>
							
							<div class="col-md-3 col-sm-6" align="left">
                                <h4 style="margin-left: 40px">2016</h4>
                                <br><img src ="./img/icon/firstPlace.png"> <b>Génie Informatique</b>
								<br><img src ="./img/icon/firstPlace.png"> <b>Génie Industriel</b>
								<br><img src ="./img/icon/firstPlace.png"> <b>Animation Dégrise</b>
								<br><img src ="./img/icon/secondPlace.png"> <b>Génie Civil</b>
								<br><img src ="./img/icon/secondPlace.png"> <b>Improvisation</b>
								<br><img src ="./img/icon/secondPlace.png"> <b>Majeure</b>
								<br><img src ="./img/icon/secondPlace.png"> <b>Participation</b>
								<br><img src ="./img/icon/secondPlace.png"> <b>Compétition Parrains</b>
								<br><img src ="./img/icon/thirdPlace.png"> <b>Génie Conseil</b>
								<br><img src ="./img/icon/thirdPlace.png"> <b>Soirée Culturelle</b>
								<br><img src ="./img/icon/thirdPlace.png"> <b>Sport</b>
                            </div>
							
							<div class="col-md-3 col-sm-6" align="left">
                                <h4 style="margin-left: 40px">2015</h4>
                                <br><img src ="./img/icon/firstPlace.png"> <b>Génie Informatique</b>
								<br><img src ="./img/icon/firstPlace.png"> <b>Sport</b>
								<br><img src ="./img/icon/firstPlace.png"> <b>Débats oratoires</b>
								<br><img src ="./img/icon/firstPlace.png"> <b>Animation Dégrise</b>
								<br><img src ="./img/icon/secondPlace.png"> <b>Génie Conseil</b>
								<br><img src ="./img/icon/secondPlace.png"> <b>Majeure</b>
								<br><img src ="./img/icon/secondPlace.png"> <b>Esprit d'équipe</b>
								<br><img src ="./img/icon/thirdPlace.png"> <b>Génie Industriel</b>
                            </div>
							                            
                        </div> <!-- /.row -->
                    </div> <!-- /.container -->        
                </div>
                <!-- End rotate-box-2 -->
            </section>
            <!-- End Services -->
            
            <!-- Begin prices section -->
			<section id="doc-section" class="page">

                <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2>Documents</h2>
                            <div class="devider"></div>
                            <p class="subtitle">Documents Utiles</p>
                        </div>
                    </div>
                </div>
                <!-- End page header-->

				<div class="extra-space-l"></div>

				<!-- Begin prices -->
				<div class="prices">
					<div class="container">
						<div class="row">
							
							<div class="price-box col-sm-6 col-md-3 wow flipInY" data-wow-delay="0.3s">
								<div class="panel panel-default">
									<div class="panel-heading text-center">
										<img src = "./img/icon/sponserIcon.png">
										<h3>Document Commandite FR</h3>
									</div>
									<div class="panel-footer text-center">
										<a class="btn btn-default" href="./Document/DocumentCommanditeFR.pdf">Télécharger</a>
									</div>
								</div>										
							</div>

							<div class="price-box col-sm-6 col-md-3 wow flipInY" data-wow-delay="0.5s">
								<div class="panel panel-default">
									<div class="panel-heading text-center">
										<img src = "./img/icon/sponserIcon.png">
										<h3>Sponsorship Document EN</h3>
									</div>
									<div class="panel-footer text-center">
										<a class="btn btn-default" href="./Document/SponsorshipDocumentEN.pdf">Download</a>
									</div>
								</div>										
							</div>
							
							<div class="price-box col-sm-6 col-md-3 wow flipInY" data-wow-delay="0.7s">
								<div class="panel panel-default">
									<div class="panel-heading text-center">
										<img src = "./img/icon/machine.png">
										<h3>Document Machine FR</h3>
									</div>
									<div class="panel-footer text-center">
										<a class="btn btn-default" href="./Document/MachineFR.pdf">Télécharger</a>
									</div>
								</div>										
							</div>
							
							<div class="price-box col-sm-6 col-md-3 wow flipInY" data-wow-delay="0.7s">
								<div class="panel panel-default">
									<div class="panel-heading text-center">
										<img src = "./img/icon/machine.png">
										<h3>Document Machine EN</h3>
									</div>
									<div class="panel-footer text-center">
										<a class="btn btn-default" href="./Document/MachineEN.pdf">Download</a>
									</div>
								</div>										
							</div>
							
						</div> <!-- /.row -->
					</div> <!-- /.container -->
				</div>
				<!-- End prices -->
				<div class="extra-space-l"></div>
			</section>
			<!-- End prices section -->
                
                
                
                
            <!-- Begin social section -->
			<section id="social-section">
            
                 <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2>Social</h2>
                            <div class="devider"></div>
                            <p class="subtitle">Suivez-nous sur Facebook</p>
                        </div>
                    </div>
                </div>
                <!-- End page header-->
                
                <div class="container">
                	<ul class="social-list">
                		<li> <a href="https://www.facebook.com/jdgets/" class="rotate-box-1 square-icon text-center wow zoomIn" data-wow-delay="0.3s"><span class="rotate-box-icon"><i class="fa fa-facebook"></i></span></a></li>
                    </ul>
                </div>
                
            </section>
            <!-- End social section -->
                
                
                
                
           
                
                

                
            <!-- Begin footer -->
            <footer class="text-off-white">
            
                <div class="footer-top">
                	<div class="container">
                    	<div class="row wow bounceInLeft" data-wow-delay="0.4s">

                            <div class="col-sm-6 col-md-4">
                            	<h4>Liens utile</h4>
                                <ul class="imp-links">
                                	<li><a href="http://jeuxdegenie.qc.ca/">Jeux de Génie (Site Officiel)</a></li>
                                	<li><a href="http://www.jdg.aep.polymtl.ca/">Polytechnique</a></li>
                                	<li><a href="http://www.jdglaval.com/">Université Laval</a></li>
                                	<li><a href="http://jdgsherbrooke.com/">Université de Sherbrooke</a></li>
                                	<li><a href="http://aeg.uqac.ca/jdguqac/">Université du Québec à Chicoutimi</a></li>
                                	<li><a href="http://uqo.ca/">Université du Québec en Outaouais</a></li>
									<li><a href="http://seegat.uqat.ca/">Université du Québec en Abitibi-Témiscamingue</a></li>
									<li><a href="http://www.uqar.ca/">Université du Québec à Rimouski</a></li>
									<li><a href="http://enggames.mcgilleus.ca/">Université McGill</a></li>
									<li><a href="http://enggames.ecaconcordia.ca/">Université Concordia</a></li>
									<li><a href="http://www.jdgitr.ca/">Université du Québec à Trois-Rivière</a></li>
                                </ul>
                            </div>
                        
							<div class="col-sm-6 col-md-4">
                                
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <img src="./img/jdgets.png">
                            </div>
                            
                        </div> <!-- /.row -->
                    </div> <!-- /.container -->
                </div>
                
                <div class="footer">
                    <div class="container text-center wow fadeIn" data-wow-delay="0.4s">
                        <p class="copyright">Copyright &copy; 2016 - Developed by <a href="https://www.facebook.com/zMaxPelletier" class="theme-author">Maxime Pelletier</a></p>
                    </div>
                </div>

            </footer>
            <!-- End footer -->

            <a href="#" class="scrolltotop"><i class="fa fa-arrow-up"></i></a> <!-- Scroll to top button -->
                                              
        </div><!-- body ends -->
        
        
        
        
        <!-- Plugins JS -->
		<script src="inc/jquery/jquery-1.11.1.min.js"></script>
		<script src="inc/bootstrap/js/bootstrap.min.js"></script>
		<script src="inc/owl-carousel/js/owl.carousel.min.js"></script>
		<script src="inc/stellar/js/jquery.stellar.min.js"></script>
		<script src="inc/animations/js/wow.min.js"></script>
        <script src="inc/waypoints.min.js"></script>
		<script src="inc/isotope.pkgd.min.js"></script>
		<script src="inc/classie.js"></script>
		<script src="inc/jquery.easing.min.js"></script>
		<script src="inc/jquery.counterup.min.js"></script>
		<script src="inc/smoothscroll.js"></script>
        <script src="inc/styleswitch.js"></script>

		<!-- Theme JS -->
		<script src="js/theme.js"></script>



        <!--================================================================================
        ///// Begin Stylesheet Switcher /////
        ================================================================================ -->
        <!--<div class="switcher-wrapper hidden-sm hidden-xs">
            <div class="switcher pull-left">
                <p>Color Scheme</p>
                <a class="switcher-box default" href="javascript:chooseStyle('none', 60)"></a>
                <a class="switcher-box blue" href="javascript:chooseStyle('ice-blue', 60)"></a>
                <a class="switcher-box lime" href="javascript:chooseStyle('fresh-lime', 60)"></a>
                <a class="switcher-box orange" href="javascript:chooseStyle('summer-orange', 60)"></a>
                <a class="switcher-box purple" href="javascript:chooseStyle('night-purple', 60)"></a>
            </div>
            <div class="switcher-btn pull-right"><i class="fa fa-paint-brush"></i></div>
        </div>-->

        <script type="text/javascript">
        $(function(){

            $(".switcher-btn").on("click", function(e) {
                e.preventDefault();
                var div = $(".switcher-wrapper");
                if (div.css("left") === "-160px") {
                    $(".switcher-wrapper").animate({
                        left: "0px"
                    });
                } else {
                    $(".switcher-wrapper").animate({
                        left: "-160px"
                    });
                }
            });

        });
		$(".imgSmall").click(function(){	
		var src = event.target.src;

		$("#imgBig").attr("src",src);
		$("#overlay").show();
		$("#overlayContent").show();
	});

	$("#imgBig").click(function(){
		$("#imgBig").attr("src", "");
		$("#overlay").hide();
		$("#overlayContent").hide();
	});
        </script>
		
        <!--==============================================================================
        ///// End Stylesheet Switcher /////
        ============================================================================== -->

    </body> 
        
            
</html>
