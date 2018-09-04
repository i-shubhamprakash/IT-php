<!-- header section from header.php -->
<?php
	include("header.php");
?>

<!-- Home page main content -->
<div class="container">
  <header class="header-section">
    <h1 class="header-text text-center">Department of Information Technology</h1>
  </header>

  <div class="home-about">
    <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt ex repellat assumenda fugit nisi distinctio,
      amet soluta perferendis, laudantium ratione similique doloremque dolore tempore velit.
      Architecto porro aliquid voluptatum labore? Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas,
      provident. Quod vero eius quo voluptates
      sint, eligendi odio natus, provident possimus doloremque debitis dolores et temporibus laboriosam earum
      odit quisquam?
    </p>
  </div>

  <div class="photo-slider">
    <div id="carousel-slider" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-slider" data-slide-to="1"></li>
        <li data-target="#carousel-slider" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner">
        <div class="item active">
          <a href="#"><img src="http://placekitten.com/1600/600" /></a>
          <!-- image resolution=600*1600 -->
          <div class="carousel-caption">
            <p>Just Kitten Around</p>
          </div>
        </div>
        <div class="item">
          <a href="#"><img src="http://placekitten.com/1600/600" /></a>
          <div class="carousel-caption">
            <p>Just Kitten Around</p>
          </div>
        </div>
        <div class="item">
          <a href="#"><img src="http://placekitten.com/1600/600" /></a>
          <div class="carousel-caption">
            <p>Just Kitten Around</p>
          </div>
        </div>
      </div>

      <a class="left carousel-control" href="#carousel-slider" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#carousel-slider" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </div>
  </div>
</div>
</body>

</html>