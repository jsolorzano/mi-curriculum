<div class="section" id="contact">
  <div class="cc-contact-information" style="background-image: url('images/staticmap.png');">
    <div class="container">
      <div class="cc-contact">
        <div class="row">
          <div class="col-md-9">
            <div class="card mb-0" data-aos="zoom-in">
              <div class="h4 text-center title"><?php echo $lang['titles']['contact']; ?></div>
              <div class="row">
                <div class="col-md-6">
                  <div class="card-body">
                    <form action="https://formspree.io/your@email.com" method="POST">
                      <div class="p pb-3"><strong><?php echo $lang['contact']['subtitle']; ?> </strong></div>
                      <div class="row mb-3">
                        <div class="col">
                          <div class="input-group"><span class="input-group-addon"><i class="fa fa-user-circle"></i></span>
                            <input class="form-control" type="text" name="name" placeholder="<?php echo $lang['contact']['your_name']; ?>" required="required"/>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col">
                          <div class="input-group"><span class="input-group-addon"><i class="fa fa-file-text"></i></span>
                            <input class="form-control" type="text" name="Subject" placeholder="<?php echo $lang['contact']['your_subject']; ?>" required="required"/>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col">
                          <div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input class="form-control" type="email" name="_replyto" placeholder="<?php echo $lang['contact']['your_email']; ?>" required="required"/>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col">
                          <div class="form-group">
                            <textarea class="form-control" name="message" placeholder="<?php echo $lang['contact']['your_message']; ?>" required="required"></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <button class="btn btn-primary" type="submit"><?php echo $lang['contact']['send']; ?></button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card-body">
                    <p class="mb-0"><strong><?php echo $lang['contact']['my_address']; ?> </strong></p>
                    <p class="pb-2">Maracay, Venezuela</p>
                    <p class="mb-0"><strong><?php echo $lang['contact']['my_phone']; ?></strong></p>
                    <p class="pb-2">+58-414-0474741</p>
                    <p class="mb-0"><strong><?php echo $lang['contact']['my_email']; ?></strong></p>
                    <p>solorzano202009@gmail.com</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
