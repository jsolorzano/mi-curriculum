<div class="section">
  <div class="container cc-education">
    <div class="h4 text-center mb-4 title"><?php echo $lang['titles']['education']; ?></div>
    <?php foreach($lang['education'] as $key_ed => $education){ ?>
    <div class="card">
      <div class="row">
        <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body cc-education-header">
            <p><?php echo $education['year']; ?></p>
            <div class="h5"><?php echo $education['level']; ?></div>
          </div>
        </div>
        <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body">
            <div class="h5"><?php echo $education['title']; ?></div>
            <p class="category"><?php echo $education['school']; ?></p>
            <p><?php echo $education['commentary']; ?></p>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>
  </div>
</div>
