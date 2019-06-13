<div class="section" id="experience">
  <div class="container cc-experience">
    <div class="h4 text-center mb-4 title"><?php echo $lang['titles']['work_experience']; ?></div>
    <?php foreach($lang['experience'] as $key_ex => $experience){ ?>
    <div class="card">
      <div class="row">
        <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body cc-experience-header">
            <p><?php echo $experience['year']; ?></p>
            <div class="h5"><?php echo $experience['company']; ?></div>
          </div>
        </div>
        <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body">
            <div class="h5"><?php echo $experience['title']; ?></div>
            <p><?php echo $experience['commentary']; ?></p>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>
  </div>
</div>
