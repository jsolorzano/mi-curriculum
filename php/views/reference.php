<div class="section" id="reference">
  <div class="container cc-reference">
    <div class="h4 mb-4 text-center title"><?php echo $lang['titles']['references']; ?></div>
    <div class="card" data-aos="zoom-in">
      <div class="carousel slide" id="cc-Indicators" data-ride="carousel">
        <ol class="carousel-indicators">
		  <?php $num_r = 0; ?>
		  <?php foreach($lang['reference'] as $key_ref => $reference){ ?>
			  <?php if($num_r == 0){ ?>
			  <li class="active" data-target="#cc-Indicators" data-slide-to="<?php echo $num_r; ?>"></li>
			  <?php } else { ?>
			  <li data-target="#cc-Indicators" data-slide-to="<?php echo $num_r; ?>"></li>
			  <?php } ?>
		  <?php $num_r++; ?>
		  <?php } ?>
        </ol>
        <div class="carousel-inner">
		  <?php $num_r = 0; ?>
		  <?php foreach($lang['reference'] as $key_ref => $reference){ ?>
		  <?php if($num_r == 0){ ?>
          <div class="carousel-item active">
		  <?php } else { ?>
		  <div class="carousel-item">
		  <?php } ?>
            <div class="row">
              <div class="col-lg-2 col-md-3 cc-reference-header"><img src="images/reference-image-<?php echo $num_r+1; ?>.jpg" alt="Image"/>
                <div class="h5 pt-2"><?php echo $reference['name']; ?></div>
                <p class="category"><?php echo $reference['position']; ?></p>
              </div>
              <div class="col-lg-10 col-md-9">
                <p><?php echo $reference['commentary']; ?></p>
              </div>
            </div>
          </div>
          <?php $num_r++ ?>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>
