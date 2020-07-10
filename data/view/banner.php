<link rel="stylesheet" href="http://localhost/CODEGYM/caseStudy2/css/style_banner.css">
<div class="banner">
    <div class="slideshow-container">

        <div class="mySlides fade">
            <div class="numbertext"></div>
            <img src="http://localhost/CODEGYM/caseStudy2/images/banner/1.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <div class="numbertext"></div>
            <img src="http://localhost/CODEGYM/caseStudy2/images/banner/2.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <div class="numbertext"></div>
            <img src="http://localhost/CODEGYM/caseStudy2/images/banner/3.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <div class="numbertext"></div>
            <img src="http://localhost/CODEGYM/caseStudy2/images/banner/4.jpg" style="width:100%">
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

    </div>
</div>

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
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slides[slideIndex - 1].style.display = "block";
    }
    setInterval(function(){ plusSlides(1); }, 3000);
</script>