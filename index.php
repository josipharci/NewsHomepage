<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-32x32.png">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/media-query.css">
	<title>NewsHomepage</title>
</head>
<body>
 <header>
  <nav class="navbar">
  <a class="navbar-brand" href="#"><img src="assets/images/logo.svg" alt="logo"></a>
  <div id="navbarNav">
    <ul class="nav justify-content-end">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">New</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Popular</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Trending</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Categories</a>
      </li>
    </ul>
  </div>
</nav>
</header>
<div class="container content">
  <div class="row">
    <div class="col-8">
      <img src="assets/images/image-web-3-desktop.jpg" alt="border-img">
      <div class="d-flex justify-content-between content_text">
          <div id="heading">
             <h2>The Bright Future of <br>Web 3.0?</h2>
          </div>
          <div id="text-line">
             <p>We dive into the next evolution of the web that claims to put the power of the platforms back into the hands of the people. 
             But is it really fulfilling its promise?</p>
             <a class="btn btn-read" href="#">Read more</a>
          </div>
        </div>
    </div>
    <div class="col-4">
        <h3>New</h3>
        <div class="col">
          <a href="#">Hydrogen VS Electric Cars</a>
          <p>Will hydrogen-fueled cars ever catch up to EVs?</p>
        </div>
        <div class="col">
          <a href="#">The Downsides of AI Artistry</a>
          <p>What are the possible adverse effects of on-demand AI image generation?</p>
        </div>
        <div class="col">
          <a href="#">Is VC Funding Drying Up?</a>
          <p>Private funding by VC firms is down 50% YOY. We take a look at what that means.</p>
        </div>
    </div>
  </div>
</div>
<div class="container post">
  <div class="row">
    <div class="col">
      <img src="assets/images/image-retro-pcs.jpg" alt="img-post">
     <div class="content_post">
       <p id="number">01</p>
       <a href="#">Reviving Retro PCs</a>
       <p>What happens when old PCs <br>are given modern upgrades?</p>
     </div>
    </div>
    <div class="col">
     <img src="assets/images/image-top-laptops.jpg" alt="img-post">
     <div class="content_post">
       <p id="number">02</p>
       <a href="#">Top 10 Laptops of 2022</a>
       <p>Our best picks for various<br>needs and budgets.</p>
     </div>
    </div>
    <div class="col">
     <img src="assets/images/image-gaming-growth.jpg" alt="img-post">
     <div class="content_post">
       <p id="number">03</p>
       <a href="#">The Growth of Gaming</a>
       <p>How the pandemic has<br>sparked fresh opportunities.</p>
     </div>
    </div>
  </div>
</div>
<div class="attribution text-center">
    Challenge by <a href="https://www.frontendmentor.io?ref=challenge" target="_blank">Frontend Mentor</a>. 
    Coded by <a href="#">Josip Harci</a>.
</div>
</body>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
</html>