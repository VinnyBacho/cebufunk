<?php
include('header.php');
include('functions.php');
session_start();
?>
    <div class="row">
      
      <div class="col-xl-8 offset-xl-2 py-5">
      <?php notification(); ?>
        <h1>Contact Cebu!</h1>
        <p class="lead">
          Want to book Cebu for an event or get him to gig with you? Reach out
          to him here!
        </p>
        <form
          id="contact-form"
          method="post"
          action="contact-handler.php"
          role="form"
        >
          <div class="messages"></div>
          <div class="controls">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="form_name">First Name *</label>
                  <input
                    id="form_name"
                    type="text"
                    name="name"
                    class="form-control"
                    placeholder="Please enter your first name"
                    required="required"
                    data-error="Firstname is required."
                  />
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="form_lastname">Last Name *</label>
                  <input
                    id="form_lastname"
                    type="text"
                    name="surname"
                    class="form-control"
                    placeholder="Please enter your last name"
                    required="required"
                    data-error="Lastname is required."
                  />
                  <div class="help-block with-errors"></div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="form_email">Email *</label>
                  <input
                    id="form_email"
                    type="email"
                    name="email"
                    class="form-control"
                    placeholder="Please enter your email"
                    required="required"
                    data-error="Valid email is required."
                  />
                  <div class="help-block with-errors"></div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="form_message">Message *</label>
                  <textarea
                    id="form_message"
                    name="message"
                    class="form-control"
                    placeholder="Message for Cebu"
                    rows="4"
                    required="required"
                    data-error="Please, leave us a message."
                  ></textarea>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="col-md-12">
                <input
                  type="submit"
                  class="btn btn-success btn-send"
                  value="Send Message"
                />
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <p class="text-muted">
                  <strong>*</strong> These fields are required.
                </p>
              </div>
            </div>
          </div>
          <div class="container">
        </form>
      </div>
    </div>
  </div>
</body>
</html>
