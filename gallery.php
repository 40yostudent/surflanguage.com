<?php include("first.php"); ?>

<main>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <div id="gallery">

        <?php include("header.php"); ?>
        
        <div class="block">
            <h1 style="text-align:center;"><?php echo $strings["gallery-maintitle"]; ?></h1>
            
        <!-- Images used to open the lightbox -->
<div class="row-gallery">
  <div class="column-gallery">
    <img src="./images/gallery/France11.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
  </div>
  <div class="column-gallery">
    <img src="./images/gallery/France12.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
  </div>
  <div class="column-gallery">
    <img src="./images/gallery/Galles7.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
  </div>
    <div class="column-gallery">
    <img src="./images/gallery/Galles8.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
    </div>
</div>

<div class="row-gallery">
  <div class="column-gallery">
    <img src="./images/gallery/Spain13.jpg" style="width:100%" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
  </div>
  <div class="column-gallery">
    <img src="./images/gallery/Spain14.jpg" style="width:100%" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
  </div>
  <div class="column-gallery">
    <img src="./images/gallery/France13.jpg" style="width:100%" onclick="openModal();currentSlide(7)" class="hover-shadow cursor">
  </div>
    <div class="column-gallery">
    <img src="./images/gallery/France15.jpg" style="width:100%" onclick="openModal();currentSlide(8)" class="hover-shadow cursor">
    </div>
</div>
            
<div class="row-gallery">
  <div class="column-gallery">
    <img src="./images/gallery/France5.jpg" style="width:100%" onclick="openModal();currentSlide(9)" class="hover-shadow cursor">
  </div>
  <div class="column-gallery">
    <img src="./images/gallery/France6.jpg" style="width:100%" onclick="openModal();currentSlide(10)" class="hover-shadow cursor">
  </div>
  <div class="column-gallery">
    <img src="./images/gallery/France7.jpg" style="width:100%" onclick="openModal();currentSlide(11)" class="hover-shadow cursor">
  </div>
    <div class="column-gallery">
    <img src="./images/gallery/France8.jpg" style="width:100%" onclick="openModal();currentSlide(12)" class="hover-shadow cursor">
    </div>
</div>
            
<div class="row-gallery">
  <div class="column-gallery">
    <img src="./images/gallery/France9.jpg" style="width:100%" onclick="openModal();currentSlide(13)" class="hover-shadow cursor">
  </div>
  <div class="column-gallery">
    <img src="./images/gallery/France10.jpg" style="width:100%" onclick="openModal();currentSlide(14)" class="hover-shadow cursor">
  </div>
  <div class="column-gallery">
    <img src="./images/gallery/Spain1.jpg" style="width:100%" onclick="openModal();currentSlide(15)" class="hover-shadow cursor">
  </div>
    <div class="column-gallery">
    <img src="./images/gallery/Spain2.jpg" style="width:100%" onclick="openModal();currentSlide(16)" class="hover-shadow cursor">
    </div>
</div>
            
<div class="row-gallery">
  <div class="column-gallery">
    <img src="./images/gallery/Spain3.jpg" style="width:100%" onclick="openModal();currentSlide(17)" class="hover-shadow cursor">
  </div>
  <div class="column-gallery">
    <img src="./images/gallery/Spain4.jpg" style="width:100%" onclick="openModal();currentSlide(18)" class="hover-shadow cursor">
  </div>
  <div class="column-gallery">
    <img src="./images/gallery/Spain5.jpg" style="width:100%" onclick="openModal();currentSlide(19)" class="hover-shadow cursor">
  </div>
    <div class="column-gallery">
    <img src="./images/gallery/Spain6.jpg" style="width:100%" onclick="openModal();currentSlide(20)" class="hover-shadow cursor">
    </div>
</div>

<div class="row-gallery">
  <div class="column-gallery">
    <img src="./images/gallery/Spain7.jpg" style="width:100%" onclick="openModal();currentSlide(21)" class="hover-shadow cursor">
  </div>
  <div class="column-gallery">
    <img src="./images/gallery/Hawaii1.jpg" style="width:100%" onclick="openModal();currentSlide(22)" class="hover-shadow cursor">
  </div>
  <div class="column-gallery">
    <img src="./images/gallery/Hawaii2.jpg" style="width:100%" onclick="openModal();currentSlide(23)" class="hover-shadow cursor">
  </div>
    <div class="column-gallery">
    <img src="./images/gallery/Surfing2.jpg" style="width:100%" onclick="openModal();currentSlide(24)" class="hover-shadow cursor">
    </div>
</div>

<div class="row-gallery">
  <div class="column-gallery">
    <img src="./images/gallery/Surfing3.jpg" style="width:100%" onclick="openModal();currentSlide(25)" class="hover-shadow cursor">
  </div>
  <div class="column-gallery">
    <img src="./images/gallery/Surfing4.jpg" style="width:100%" onclick="openModal();currentSlide(26)" class="hover-shadow cursor">
  </div>
  <div class="column-gallery">
    <img src="./images/gallery/Surfing5.jpg" style="width:100%" onclick="openModal();currentSlide(27)" class="hover-shadow cursor">
  </div>
    <div class="column-gallery">
    <img src="./images/gallery/Surfing1.jpg" style="width:100%" onclick="openModal();currentSlide(28)" class="hover-shadow cursor">
    </div>
</div>
            
<!-- Lightbox -->

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <img src="./images/gallery/France11.jpg" style="width:100%">
      </div>
    <div class="mySlides">
      <img src="./images/gallery/France12.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="./images/gallery/Galles7.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="./images/gallery/Galles8.jpg" style="width:100%">
    </div>
      <div class="mySlides">
      <img src="./images/gallery/Spain13.jpg" style="width:100%">
      </div>
    <div class="mySlides">
      <img src="./images/gallery/Spain14.jpg" style="width:100%">
    </div>
      <div class="mySlides">
      <img src="./images/gallery/France13.jpg" style="width:100%">
      </div>
    <div class="mySlides">
      <img src="./images/gallery/France15.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="./images/gallery/France5.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="./images/gallery/France6.jpg" style="width:100%">
    </div>
      <div class="mySlides">
      <img src="./images/gallery/France7.jpg" style="width:100%">
      </div>
    <div class="mySlides">
      <img src="./images/gallery/France8.jpg" style="width:100%">
    </div>
       <div class="mySlides">
      <img src="./images/gallery/France9.jpg" style="width:100%">
      </div>
    <div class="mySlides">
      <img src="./images/gallery/France10.jpg" style="width:100%">
    </div>
      <div class="mySlides">
       <img src="./images/gallery/Spain1.jpg" style="width:100%">
      </div>
    <div class="mySlides">
      <img src="./images/gallery/Spain2.jpg" style="width:100%">
    </div>
       <div class="mySlides">
      <img src="./images/gallery/Spain3.jpg" style="width:100%">
      </div>
    <div class="mySlides">
      <img src="./images/gallery/Spain4.jpg" style="width:100%">
    </div>
      <div class="mySlides">
       <img src="./images/gallery/Spain5.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="./images/gallery/Spain6.jpg" style="width:100%">
      </div>
    <div class="mySlides">
      <img src="./images/gallery/Spain7.jpg" style="width:100%">
    </div>
    <div class="mySlides">
       <img src="./images/gallery/Hawaii1.jpg" style="width:100%">
      </div>
    <div class="mySlides">
      <img src="./images/gallery/Hawaii2.jpg" style="width:100%">
    </div>
       <div class="mySlides">
      <img src="./images/gallery/Surfing2.jpg" style="width:100%">
      </div>
    <div class="mySlides">
      <img src="./images/gallery/Surfing3.jpg" style="width:100%">
    </div>
      <div class="mySlides">
       <img src="./images/gallery/Surfing4.jpg" style="width:100%">
    </div>
       <div class="mySlides">
      <img src="./images/gallery/Surfing5.jpg" style="width:100%">
      </div>
    <div class="mySlides">
      <img src="./images/gallery/Surfing1.jpg" style="width:100%">
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">&lang;  </a>
    <a class="next" onclick="plusSlides(1)">&rang;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>

    </div>
        
        </div>
 
        </div>
        <hr class="line desktop-only">
                <div class="nav-arrow" >
                    <h6><a class="button" href="../<?= ($_GET['lang'] ? $_GET['lang'] : 'en' ) ?>/gallery2.php"><?php echo $strings["arrow-nav-next"]; ?></a></h6>
                </div>
        
</div>
    
<!-- Script Lightbox -->
   <script>
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

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
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
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

</main>

<?php include("footer.php"); ?>