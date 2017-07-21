<?php $__env->startSection('content'); ?>

<header class="w3-display-container w3-content w3-center" style="max-width: 1500px;">
  <img class="w3-image" src="/img/HOMEbg-1.jpg" alt="header-img" width="1500" height="400">
  <div class="w3-display-bottommiddle w3-hide-small w3-hide-medium">
    <a id="page-scroll" class="page-scroll" href="#next">
    <span id="arrow"></span></a>
  </div>
</header>

<div id="next" class="container-fluid bg-grey">
    <div class="row">
        <div class="col-sm-8">
            <h1 class="">Why Join Pepsi?</h1><br />
            <p>We believe that our people drive the success of the company, and at the heart of our business stratey is the continuous effort to provide a nurturing work environment and a culture of continuous development for our people.</p>
            <p>
            We are high-spirited, engaged individuals who are committed to the values of passion, excellence, professionalism, service, and integrity and are deeply involved in building and helping our company and our communities grow. We are Team PCPPI.
            </p>
        </div>
        <div class="col-sm-4 slideanim slide">
            <img class="img-responsive slideanim" src="/img/1.png" alt="pic">
        </div>
    </div>
</div>
<div id="section" class="container-fluid text-center bg-grey">
    <h1 style="font-weight: bold">Careers</h1>
    <div class="row text-center sideanim">
        <div class="col-sm-4 col-sm-offset-2 col-xs-6 slideanim">
            <a href="careers-map" style="text-decoration: none;">
            <div class="thumbnail">
                <img class="img-responsive" src="/img/professionals.jpg" alt="professionals" width="400" height="300">
                <h2>Professionals</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            </a>
        </div>
        <div class="col-sm-4 col-xs-6 slideanim">
            <a href="careers-internform" style="text-decoration: none;">
            <div class="thumbnail">
                <img class="img-responsive" src="/img/professionals.jpg" alt="professionals" width="400" height="300">
                <h2>Internship</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            </a>
        </div>
      </div>
</div>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>