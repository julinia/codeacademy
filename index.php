<!DOCTYPE html>
<html lang="en">
<head>
<!-- <link rel="stylesheet" href="../pannel/docregis.css"> -->
    <link rel="stylesheet" href="common.css">
    <!-- <link rel="stylesheet" href="search.css"> -->


    <title>Document</title>
    <style>
     .header{
       height: 18vh;
       width:100%;
     }

     .container{

      height:82vh;
      width:100%;
     }

    </style>
</head>
<body>
<div class="header">

<?php

include'main2.php';

?></div>

<div class="container">
<?php

include'search.php';

?>

</div>




   </div>

    <!-- <section>
  <img class="mySlides" src="picture/login.jpg" style="width:100%; height: 85vh;">
  <img class="mySlides" src="picture/login2.jpg" style="width:100%; height: 85vh;">
  <img class="mySlides" src="picture/jpg4.jpg" style="width:100%; height: 85vh;">



</section>
 -->


<!-- <script>
// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 3000);
}
</script> -->
</body>
</html>
