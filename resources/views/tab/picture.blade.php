<div id="picture" class="tabcontent">
    <!-- Grid row -->
<div class="row">

  <!-- Grid column -->
  <div class="col-md-12 d-flex justify-content-center mb-5">

    <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="all">All</button>
    <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="1"><a href="https://web.facebook.com/profile.php?id=100009972404597&lst=100012272147224%3A100009972404597%3A1571913513&sk=photos"target="_blank" style="text-decoration: none;color:black;">Facebook</a>
    </button>
    <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="2">Famous</button>

  </div>
  <!-- Grid column -->

</div>
<!-- Grid row -->
<div class="gallery" id="gallery">

  <!-- Grid column -->
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="./public/images/img1.jpg">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 1">
    <img class="img-fluid" src="./public/images/img2.jpg">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 1">
    <img class="img-fluid" src="./public/images/img3.jpg">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="./public/images/img4.jpg">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="./public/images/img5.jpg" alt="Card image cap">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 1">
    <img class="img-fluid" src="./public/images/img6.jpg" alt="Card image cap">
  </div>
  <!-- Grid column -->
  <!-- Grid column -->
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="./public/images/img7.jpg">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 1">
    <img class="img-fluid" src="./public/images/img8.jpg">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 1">
    <img class="img-fluid" src="./public/images/img9.jpg">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="./public/images/img10.jpg">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="./public/images/img11.jpg" alt="Card image cap">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 1">
    <img class="img-fluid" src="./public/images/img12.jpg" alt="Card image cap">
  </div>

</div>
<!-- Grid row -->
</div>
<script type="text/javascript">
$(function() {
var selectedClass = "";
$(".filter").click(function(){
selectedClass = $(this).attr("data-rel");
$("#gallery").fadeTo(100, 0.1);
$("#gallery div").not("."+selectedClass).fadeOut().removeClass('animation');
setTimeout(function() {
$("."+selectedClass).fadeIn().addClass('animation');
$("#gallery").fadeTo(300, 1);
}, 300);
});
});</script>