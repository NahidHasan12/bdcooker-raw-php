<style>
body {
  font-family: Arial;
  margin: 0;
}

* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 45%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 122px;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
    background-color: #222;
    color: white;
    height: 27px;
    margin-bottom: 1px;
}
.caption-container #caption{
   text-align: center;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
.pack{
    height: 540px;
    width: 100%;
    margin: -23px auto;
}
@media only screen and (max-width: 1170px){
  .next {
    right: 106px;
    border-radius: 3px 0 0 3px;
  }
}
@media only screen and (max-width: 1010px){
  .next {
    right: 92px;
    border-radius: 3px 0 0 3px;
  }
}
@media only screen and (max-width: 991px){
  .next {
    right: 19px;
    border-radius: 3px 0 0 3px;
  }
}

</style>

<!-- shopping cart/ slider  -->


<section class="home">

<div class="slides-container">

 
  <div class="pack">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="image/sliderImg/aaa.jpg" style="width:100%; height: 400px;">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="image/sliderImg/bbb.jpg" style="width:100%; height: 400px;">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="image/sliderImg/ccc.jpg" style="width:100%; height: 400px;">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="image/sliderImg/ddd.jpg" style="width:100%; height: 400px;">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="image/sliderImg/eee.jpg" style="width:100%; height: 400px;">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="image/sliderImg/fff.jpg" style="width:100%; height: 400px;">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="image/sliderImg/aaa.jpg" style="width:100%; height:100px" onclick="currentSlide(1)" alt="This dish is very popular">
    </div>
    <div class="column">
      <img class="demo cursor" src="image/sliderImg/bbb.jpg" style="width:100%; height:100px" onclick="currentSlide(2)" alt="This is a popular shrimp soup">
    </div>
    <div class="column">
      <img class="demo cursor" src="image/sliderImg/ccc.jpg" style="width:100%; height:100px" onclick="currentSlide(3)" alt="Mushroom Kale Cucumber Salad">
    </div>
    <div class="column">
      <img class="demo cursor" src="image/sliderImg/ddd.jpg" style="width:100%; height:100px" onclick="currentSlide(4)" alt="This is another delicious recipe">
    </div>
    <div class="column">
      <img class="demo cursor" src="image/sliderImg/eee.jpg" style="width:100%; height:100px" onclick="currentSlide(5)" alt="Fish rolls and hand rolls are delicious items">
    </div>    
    <div class="column">
      <img class="demo cursor" src="image/sliderImg/fff.jpg" style="width:100%; height:100px" onclick="currentSlide(6)" alt="Fast food recipes">
    </div>
 
  </div>
</div>

    </div>



</section>



<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
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
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>