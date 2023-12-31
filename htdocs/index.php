<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Furniture</title>
  <link rel="stylesheet" href="../PHP_project/css/style.css">
</head>
<body>
  <section>
    <div class="circle"></div>
    <header>
      <a href="#" class="logo"><img src="../PHP_project/images/logo.png"></a>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Menu</a></li>
        <li><a href="#">New</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </header>
    <div class="content">
      <div class="textBox"><br>
        <h2>It's.......Chair<br>It's <span>Furniture</span></h2>
        <p>Enjoy designer furniture that captures the essence of Nordic design.<br> 
          From functional home furniture to statement pieces, explore our online 
          store for a range of modern furniture</p>
        <a href="#">Learn More</a>
      </div>
      <div class="imgBox">
        <img src="../PHP_project/images/img1.png" class="furniture">
      </div>
    </div>
  <ul class="thumb">
      <li><img src="../PHP_project/images/thumb1.png" onclick="imgSlider('../PHP_project/images/img1.png')"></li>
      <li><img src="../PHP_project/images/thumb2.png" onclick="imgSlider('../PHP_project/images/img2.png')"></li>
      <li><img src="../PHP_project/images/thumb3.png" onclick="imgSlider('../PHP_project/images/img3.png')"></li>
    </ul>
    <ul class="sci">
      <li><a href="#"><img src="../PHP_project/images/facebook.png"></a></li>
      <li><a href="#"><img src="../PHP_project/images/instagram.png"></a></li>
      <li><a href="#"><img src="../PHP_project/images/twitter.png"></a></li>
    </ul>
  </section>

  <script type="text/javascript">
    function imgSlider(anything){
      document.querySelector('.furniture').src = anything;
    }
  </script>
</body>
</html>