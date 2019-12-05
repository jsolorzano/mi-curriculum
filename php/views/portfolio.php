<?php
// Construcción de los elementos de pestaña
$pestañas = array();
foreach($lang['portfolio'] as $clave => $portafolio){
	if(!in_array($clave, $pestañas)){
		if($clave == "web-development"){
			//~ $fa = "fa-laptop";
			$fa = array("fa-laptop", "systems");
		}else if($clave == "graphic-design"){
			//~ $fa = "fa-picture-o";
			$fa = array("fa-picture-o", "pages");
		}else{
			//~ $fa = "fa-camera";
			$fa = array("fa-stack-overflow", "fullstack");
		}
		$pestañas[$clave] = $fa;
	}
}
?>
<div class="section" id="portfolio">
  <div class="container">
	<!-- Impresión de pestañas -->
    <div class="row">
      <div class="col-md-6 ml-auto mr-auto">
        <div class="h4 text-center mb-4 title"><?php echo $lang['titles']['portfolio']; ?></div>
        <div class="h5 text-center mb-4 title"><?php echo $lang['titles']['subtitle']; ?></div>
        <div class="nav-align-center">
          <ul class="nav nav-pills nav-pills-primary" role="tablist" id="ul_tabs">
			<?php $i = 0; ?>
			<?php foreach($pestañas as $key => $fa){ ?>
				<li class="nav-item"><a class="nav-link <?php if($i == 0){ echo "active"; }?>" data-toggle="tab" href="#<?php echo $key; ?>" role="tablist" title="<?php echo $lang['titles'][$fa[1]]; ?>"><i class="fa <?php echo $fa[0]; ?>" aria-hidden="true"></i></a></li>
            <?php $i++; ?>
            <?php } ?>
          </ul>
        </div>
      </div>
    </div>
    <!-- Impresión de pestañas -->
    
    <div class="tab-content gallery mt-5">
	<?php $i = 0; ?>
	<?php foreach($pestañas as $key => $fa){ ?>
	  <!-- Impresión de páneles -->
      <div class="tab-pane <?php if($i == 0){ echo "active"; } ?>" id="<?php echo $key; ?>" <?php echo 'role="tabpanel"'; ?>>
        <div class="ml-auto mr-auto">
          
          <style>
		  /* Make the image fully responsive */
		  .carousel-inner img {
			  width: 100%;
			  height: 100%;
		  }
		  </style>
		
		<div id="demo_<?php echo $key; ?>" class="carousel slide" data-ride="carousel">
		  
		  <!-- Indicators -->
		  <ul class="carousel-indicators">
			<?php $j = 0; ?>
		    <?php foreach($lang['portfolio'][$key] as $project){ ?>
				<?php if($j == 0){ ?>
				<li data-target="#demo_<?php echo $key; ?>" data-slide-to="<?php echo $j; ?>" class="active"></li>
				<?php }else{ ?>
				<li data-target="#demo_<?php echo $key; ?>" data-slide-to="<?php echo $j; ?>"></li>
				<?php } ?>
			<?php $j++; ?>
			<?php } ?>
		  </ul>
		  
		  <!-- The slideshow -->
		  <div class="carousel-inner">
			<?php $j = 0; ?>
		    <?php foreach($lang['portfolio'][$key] as $project){ ?>
				<?php if($j == 0){ ?>
				<div class="carousel-item active">
					<div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom" style="width:1100px;height:500px;">
					<a href="#<?php echo $key; ?>">
					  <figure class="cc-effect"><img src="<?php echo $project['image']; ?>" alt="Image"/>
						<figcaption>
						  <div class="h4"><?php echo $project['title']; ?></div>
						  <p><?php echo $project['subtitle']; ?></p>
						</figcaption>
					  </figure>
					</a>
					</div>
				  <!--<img src="<?php echo $project['image']; ?>" alt="Imagen" style="width:1100px;height:500px;">-->
				</div>
				<?php }else{ ?>
				<div class="carousel-item">
					<div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom" style="width:1100px;height:500px;">
					<a href="#<?php echo $key; ?>">
					  <figure class="cc-effect"><img src="<?php echo $project['image']; ?>" alt="Image"/>
						<figcaption>
						  <div class="h4"><?php echo $project['title']; ?></div>
						  <p><?php echo $project['subtitle']; ?></p>
						</figcaption>
					  </figure>
					</a>
					</div>
				  <!--<img src="<?php echo $project['image']; ?>" alt="Imagen" style="width:1100px;height:500px;">-->
				</div>
				<?php } ?>
			<?php $j++; ?>
			<?php } ?>
		  </div>
		  
		  <!-- Left and right controls -->
		  <a class="carousel-control-prev" href="#demo_<?php echo $key; ?>" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		  </a>
		  <a class="carousel-control-next" href="#demo_<?php echo $key; ?>" data-slide="next">
			<span class="carousel-control-next-icon"></span>
		  </a>
		
		</div>
		
        </div>
      </div>
      <!-- Impresión de páneles -->
    <?php $i++; ?>
    <?php } ?>
    </div>
    
  </div>
</div>
<script>
// Script para hacer visibles o invisibles los carruseles correspondientes
$(document).ready(function(){
	
	// Con esto añadimos la clase 'active' sólo al tab-pane correspondiente y removiéndola de los que no están siendo enfocados. 
	// Hacemos lo mismo colocando en 'true' el atributo aria-expanded del tab-pane que corresponda y en 'false' a los que no están siendo enfocados.
	$("ul#ul_tabs").on('click', 'a.nav-link', function (e) {
	
		var ul_a_href = $(this).attr('href').substring(1);
		
		$("div.tab-content div.tab-pane").each(function (index){
			
			if($(this).attr('id') == ul_a_href){
			
				$(this).addClass('active');
				$(this).attr("aria-expanded", true);
				
				$(this).find('div.carousel-item').removeClass('active');
				$(this).find('div.carousel-item').eq(0).addClass('active');
			
			}else{
			
				$(this).removeClass('active');
				$(this).attr("aria-expanded", false);
			
			}
		
		});
	
	});
	
});
</script>
