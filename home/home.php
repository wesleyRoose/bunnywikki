<link rel="stylesheet" href="../css/parts/home.css">
<link rel="script" href="../js/home.js">

<br>
<!-- slide show -->
<div class="slideshow-container">

<div class="mySlides fade">
  <img src="images/konijn1.jpg" class="images"  style="width:100%">
  <div class="text">Caption Text</div>
</div>
<div class="mySlides fade">
  <img src="images/konijn1.jpg" class="images" style="width:100%">
  <div class="text">Caption Two</div>
</div>
<div class="mySlides fade">
  <img src="images/konijn1.jpg" class="images" style="width:100% ">
  <div class="text">Caption Three</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
<br>
<br>
<!-- grid box -->
<div class="grid-container">
  <div class="item1">
  <img src="images/konijn1.jpg" class="grid_images">
      <h6>Naam product</h6>
      <br>
      <p>Beschrijving product</p>
      <br>
      <p>Status</p>
      <br>
      <button class="button button1">Green</button>
  </div>
  <div class="item3">
      <img src="images/konijn1.jpg" class="grid_images">
      <h6>Naam product</h6>
      <br>
      <p>Beschrijving product</p>
      <br>
      <p>Status</p>
      <br>
      <button class="button button1">Green</button>
  </div>  
  <div class="item4">
      <img src="images/konijn1.jpg" class="grid_images">
      <h6>Naam product</h6>
      <br>
      <p>Beschrijving product</p>
      <br>
      <p>Status</p>
      <br>
      <button class="button button1">Green</button>
</div>

</div>

<br>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

