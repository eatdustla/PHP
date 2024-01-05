<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Furniture</title>
  <link rel="stylesheet" href="../htdocs/css/style.css">
</head>
<body>
  <section>
    <div class="circle"></div>
    <header>
      <a href="#" class="logo"><img src="../htdocs/images/logo.png"></a>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li class="dropdown">
          <a href="#">Category</a>
          <div class="dropdown-content">
            <a href="#">Living Room</a>
            <a href="#">Bedroom</a>
            <a href="#">Dining Room</a></li>
        <li><a href="#">Cart</a></li>
        <li><a href="aboutUs.html">About Us</a></li>
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
        <img src="../htdocs/images/img1.png" class="furniture">
      </div>
    </div>
  <ul class="thumb">
      <li><img src="../htdocs/images/thumb1.png" onclick="imgSlider('../htdocs/images/img1.png')"></li>
      <li><img src="../htdocs/images/thumb2.png" onclick="imgSlider('../htdocs/images/img2.png')"></li>
      <li><img src="../htdocs/images/thumb3.png" onclick="imgSlider('../htdocs/images/img3.png')"></li>
    </ul>
    <ul class="sci">
      <li><a href="#"><img src="../htdocs/images/facebook.png"></a></li>
      <li><a href="#"><img src="../htdocs/images/instagram.png"></a></li>
      <li><a href="#"><img src="../htdocs/images/twitter.png"></a></li>
    </ul>
  </section>

  <script type="text/javascript">
    function imgSlider(anything){
      document.querySelector('.furniture').src = anything;
    }
  </script>
  
</body>
</html>
