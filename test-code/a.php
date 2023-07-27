<!DOCTYPE html>
<html>
<head>
    <title>About Page</title>
    <link rel="stylesheet" type="text/css" href="about.css">
</head>
<body>
    <header>
        <h1>About Page</h1>
    </header>
    <main>
        <div class="slideshow-container">
        <div class="mySlides fade">
        <div class="numbertext"></div>
            <img src="/myweb/E-book Final/test-code/ebook.webp" style="width:100%">
            <div class="text">Welcome to our eBook website! We are passionate about books and aim to provide a wide selection of digital publications to our readers. Whether you're an avid reader or just starting to explore the world of eBooks, we have something for you. Our team works hard to curate the best titles across various genres, and we hope you enjoy exploring our collection. Happy reading!</div>
        </div>
        </div>
    </main>
<br>
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
  let dots = document.getElementsByClassName("dot");
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

<!-- About video -->
<?php
// YouTube video ID
$video_id = "YOUR_YOUTUBE_VIDEO_ID"; // Replace this with your actual YouTube video ID
// Replace "your_location_url" with the actual URL you want to link to
$youtubeURL = "https://www.youtube.com/embed/IShFFDhPh3s";

// Replace "icon_class" with the desired Font Awesome icon class
// You can find the icon classes on the Font Awesome website: https://fontawesome.com/icons
$iconClass = "fa fa-youtube-play";

// The text to display next to the icon (optional)
$linkText = "YouTube Website";

// Create the link with the icon and text
$linkWithIcon = '<a href="' . $youtubeURL . '"><i class="' . $iconClass . '"></i> ' . $linkText . '</a>';
?>
  <div>
    <?php echo $linkWithIcon; ?>
  </div>

  </body>
</html>
