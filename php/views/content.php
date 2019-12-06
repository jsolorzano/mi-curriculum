<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Creative CV</title>
    <meta name="description" content="Creative CV is a HTML resume template for professionals. Built with Bootstrap 4, Now UI Kit and FontAwesome, this modern and responsive design template is perfect to showcase your portfolio, skils and experience."/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/aos.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="styles/main.css" rel="stylesheet">
    <link href="styles/alternative.css" rel="stylesheet">
    <script src="js/core/jquery.3.2.1.min.js"></script>
    <script src="js/core/popper.min.js"></script>
    <script src="js/core/bootstrap.min.js"></script>
    <script src="js/now-ui-kit.js?v=1.1.0"></script>
    <script src="js/aos.js"></script>
    <script src="scripts/main.js"></script>
    <script src="js/email.js"></script>
    <script>
		// Script para descargar la síntesis curricular en pdf
		$(document).ready(function(){
			
			// Al hacer click sobre el botón ''
			$("a#download_cv").on('click', function (e) {
			
				$("form[name=download_cv]").submit();
			
			});
			
		});
    </script>
  </head>
  <body id="top">
    <header>
      <div class="profile-page sidebar-collapse">
        <nav class="navbar navbar-expand-lg fixed-top navbar-transparent bg-primary" color-on-scroll="400">
          <div class="container">
            <div class="navbar-translate"><a class="navbar-brand" href="#" rel="tooltip">Creative CV</a>
              <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-bar bar1"></span><span class="navbar-toggler-bar bar2"></span><span class="navbar-toggler-bar bar3"></span></button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
			  <!-- Inclusión del menú -->
			  <?php 
			  if($config['config']['menu']['active'] == 1){
				  
				include "menu.php";
				
              } 
              ?>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <div class="page-content">
      <div>
	<div class="profile-page">
	  <div class="wrapper">
		<div class="page-header page-header-small" filter-color="green">
		  <div class="page-header-image" data-parallax="true" style="background-image: url('images/cc-bg-1.jpg');"></div>
		  <div class="container">
			<div class="content-center">
			  <div class="cc-profile-image"><a href="#"><img src="images/yo.jpeg" alt="Image"/></a></div>
			  <div class="h2 title">José Solorzano</div>
			  <form method="post" name="download_cv">
			  <input type="hidden" name="download_cv">
			  <p class="category text-white"><?php echo $lang['basic']['title']; ?></p><a class="btn btn-primary smooth-scroll mr-2" href="#contact" data-aos="zoom-in" data-aos-anchor="data-aos-anchor"><?php echo $lang['basic']['hire_me']; ?></a><a class="btn btn-primary" id="download_cv" href="#" data-aos="zoom-in" data-aos-anchor="data-aos-anchor"><?php echo $lang['basic']['download']; ?></a>
			  </form>
			</div>
		  </div>
		  <div class="section">
			<div class="container">
			  <div class="button-container"><a class="btn btn-default btn-round btn-lg btn-icon" href="https://www.facebook.com/jose.solorzano.9849" rel="tooltip" title="<?php echo $lang['icons']['home_facebook']; ?>"><i class="fa fa-facebook"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href="https://twitter.com/jsolorzano18" rel="tooltip" title="<?php echo $lang['icons']['home_twitter']; ?>"><i class="fa fa-twitter"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href="https://www.linkedin.com/in/jose-solorzano-4307b372/" rel="tooltip" title="<?php echo $lang['icons']['home_linkedin']; ?>"><i class="fa fa-linkedin"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href="https://github.com/jsolorzano" rel="tooltip" title="<?php echo $lang['icons']['home_github']; ?>"><i class="fa fa-github"></i></a></div>
			</div>
		  </div>
		</div>
	  </div>
	</div>

	<!-- Inclusión de la sección 'about' -->
	<?php 
	if($config['config']['about']['active'] == 1){
	  
		include "about.php";

	} 
	?>

	<!-- Inclusión de la sección 'skill' -->
	<?php 
	if($config['config']['skill']['active'] == 1){
	  
		include "skill.php";

	} 
	?>

	<!-- Inclusión de la sección 'portfolio' -->
	<?php 
	if($config['config']['portfolio']['active'] == 1){
	  
		include "portfolio.php";

	} 
	?>

	<!-- Inclusión de la sección 'experience' -->
	<?php 
	if($config['config']['experience']['active'] == 1){
	  
		include "experience.php";

	} 
	?>

	<!-- Inclusión de la sección 'education' -->
	<?php 
	if($config['config']['education']['active'] == 1){
	  
		include "education.php";

	} 
	?>

	<!-- Inclusión de la sección 'reference' -->
	<?php 
	if($config['config']['reference']['active'] == 1){
	  
		include "reference.php";

	} 
	?>

	<!-- Inclusión de la sección 'contact' -->
	<?php 
	if($config['config']['contact']['active'] == 1){
	  
		include "contact.php";

	} 
	?>
    <!-- Inclusión del footer -->
	<?php 
	if($config['config']['footer']['active'] == 1){
	  
		include "footer.php";

	} 
	?>
  </body>
</html>
