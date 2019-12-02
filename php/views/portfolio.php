<?php
// Construcción de los elementos de pestaña
$pestañas = array();
foreach($lang['portfolio'] as $clave => $portafolio){
	if(!in_array($clave, $pestañas)){
		if($clave == "web-development"){
			//~ $fa = "fa-laptop";
			$fa = array("fa-laptop", "backend");
		}else if($clave == "graphic-design"){
			//~ $fa = "fa-picture-o";
			$fa = array("fa-picture-o", "frontend");
		}else{
			//~ $fa = "fa-camera";
			$fa = array("fa-camera", "fullstack");
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
          <ul class="nav nav-pills nav-pills-primary" role="tablist">
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
      <div class="tab-pane <?php if($i == 0){ echo "active"; } ?>" id="<?php echo $key; ?>" <?php if($i > 0){ echo 'role="tabpanel"'; } ?>>
        <div class="ml-auto mr-auto">
          <div class="row">
		    <?php $j = 0; ?>
			<?php foreach($lang['portfolio'][$key] as $project){ ?>
				<!-- Impresión de proyectos del panel -->
				<?php if(($j+1)%2 != 0){ ?>
				<div class="col-md-6">
				<?php } ?>
				<div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#<?php echo $key; ?>">
                  <figure class="cc-effect"><img src="<?php echo $project['image']; ?>" alt="Image"/>
                    <figcaption>
                      <div class="h4"><?php echo $project['title']; ?></div>
                      <p><?php echo $project['subtitle']; ?></p>
                    </figcaption>
                  </figure></a>
				</div>
				<?php if(($j+1)%2 == 0){ ?>
				</div>
				<?php } ?>
				<!-- Impresión de proyectos del panel -->
			<?php $j++; ?>
            <?php } ?>
          </div>
        </div>
      </div>
      <!-- Impresión de páneles -->
    <?php $i++; ?>
    <?php } ?>
    </div>
    
  </div>
</div>
