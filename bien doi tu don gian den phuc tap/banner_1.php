<?php

$tv="select id, hinh_anh from san_pham where level = '999'";
$tv_1= mysql_query($tv);
while ($tv_2=mysql_fetch_array($tv_1))
{ 
	echo " <div class='main-visual'>";
	$link_anh="images/tours/".$tv_2['hinh_anh'];
	 //$link_anh="images/tours/t2_1.jpg";
     /*echo "<img src='$link_anh'>";*/
     echo "<img src='$link_anh' width='100%' height='900px' >";

	    /*echo '<img src="images/tours/t2_1.jpg">';*/
	 echo "</div>";
}
?>


<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("main-visual");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>