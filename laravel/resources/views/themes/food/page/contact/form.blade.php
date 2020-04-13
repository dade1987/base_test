@php
    
    $parz=$params;
    $parz['_act']='send_msg';
    $form_action=route('container0.show',$parz);
@endphp
<form id="contact-form" method="post" action="contact.php" class="form">
              <div class="controls">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="name" class="form-label">Your firstname *</label>
                      <input type="text" name="name" id="name" placeholder="Enter your firstname" required="required" class="form-control">
                    </div> 
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="surname" class="form-label">Your lastname *</label>
                      <input type="text" name="surname" id="surname" placeholder="Enter your  lastname" required="required" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="email" class="form-label">Your email *</label>
                  <input type="email" name="email" id="email" placeholder="Enter your  email" required="required" class="form-control">
                </div>
                <div class="form-group">
                  <label for="message" class="form-label">Your message for us *</label>
                  <textarea rows="4" name="message" id="message" placeholder="Enter your message" required="required" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-outline-primary">Send message</button>
              </div>
</form>