<?php
  include('header.php');
?>


  <section class="banner-pages">
      <div class="container">
          <div class="row">
              <div class="col-xs-12 text-center">
                  <div id="banner-title">
                      <h1>Jillian Docherty Cain</h1>
                  </div>
                  <div id="sub-title">
                      <h2>Contact</h2>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <section id="contact-form">
    <div class="container">
      <form method="POST" action="http://formspree.io/jillian.d.cain@gmail.com">

        <div class="row">
          <div class="col-xs-12 col-md-8 col-md-offset-2">
            <input class="form-control" type="input" name="name" placeholder="Your Name">
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-md-8 col-md-offset-2">
            <input class="form-control" type="input" name="email" placeholder="Your Email">
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-md-8 col-md-offset-2">
            <textarea class="form-control" name="message">Message</textarea>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-md-8 col-md-offset-2">
            <input type="submit" value="Submit" class="btn btn-primary btn-lg btn-block">
          </div>
        </div>

      </form>
    </div>
  </section>

        
<?php
  include('footer.php');
?>    
