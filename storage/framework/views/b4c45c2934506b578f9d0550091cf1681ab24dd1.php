<?php $__env->startSection('content'); ?>

<div class="jumbotron text-center" style="margin: 0px;">
    <h1>Company</h1>
    <p>Blablablablablablablablabla</p>
    <a class="btn btn-default page-scroll" href="#next"><span class="glyphicon glyphicon-chevron-down"></span></a>
</div>

<div id="next" class="container-fluid bg-grey">
    <div class="row">
        <div class="col-sm-8">
            <h1>Why Join Pepsi?</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><br>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <div class="col-sm-4 sidep slide">
            <img class="img-responsive slideanim" src="/img/1.png" alt="pic">
        </div>
    </div>
</div>

<div id="section" class="container-fluid">
    <div class="row">
        <div class="col-sm-4">
            <img class="img-responsive slideanim" src="/img/1.png" alt="pic">
        </div>
        <div class="col-sm-8">
            <h1>Our Company</h1>
            <p>Pepsi-Cola Products Philippines Inc. is the exclusive bottler of PepsiCo beverages in the Philippines, with a relationship spanning 66 years. Lotte Chilsung, one of the biggest beverage companies in South Korea, is the lead shareholder of PCPPI as an independently-listed company and co-manages it with PepsiCo. PCPPI manufactures and sells well-known brands such as Pepsi-Cola, Mountain Dew, 7-Up, Mirinda, Mug, Gatorade, Tropicana, Lipton, Sting, and Premier. It has established manufacturing facilities across the country, serving at least 500,000 outlets and providing employment through its extensive distribution network.</p>
        </div>
    </div>
</div>
<div id="section" class="container-fluid text-center bg-grey">
    <h1>Careers</h1>
    <br />
    <div class="row text-center sideanim">
        <div class="col-sm-4 col-sm-offset-2 slideanim">
            <a href="#" style="text-decoration: none;">
            <div class="thumbnail">
                <img class="img-responsive" src="/img/professionals.jpg" alt="professionals" width="400" height="300">
                <h2>Professionals</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            </a>
        </div>
        <div class="col-sm-4 slideanim">
            <a href="#" style="text-decoration: none;">
            <div class="thumbnail">
                <img class="img-responsive" src="/img/professionals.jpg" alt="professionals" width="400" height="300">
                <h2>Intership</h2>
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