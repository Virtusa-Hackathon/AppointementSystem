<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
.carousel-indicators>li {
    height: 8px;
    width: 8px;
    border-radius:12px;
  }
  .carousel-content {
  position: absolute;
  bottom: 10%;
  left: 5%;
  z-index: 20;
  color: white;
  text-shadow: 0 1px 2px rgba(0,0,0,.6);
}
</style>
</head>
<body>
<ul>
  <li><a  class="active"href="index.php">HOME</a></li>
  <li><a href="doctorinfo.php">BOOK APPOINTMENT</a></li>
  <li><a href="about.php">ABOUTUS</a></li>
  <li><a href="contactus.php">CONTACTUS</a></li>
  <li><a href="signin.php">USERLOGIN</a></li>
</ul>
	<div class="container">
  <h2>Doctor Appointment</h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
	  <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="doctornew3.png" style="width:100%;">
		<div class="carousel-content">
        <p style="color:black; font-size:30px">Appointment on your fingertips</p>
      </div>
      </div>

      <div class="item">
        <img src="doctornew2.jpg"  style="width:100%;">
		<div class="carousel-content">
        <p style="color:black; font-size:30px">Think of it,we make it happen</p>
      </div>
    </div>
      <div class="item">
        <img src="doctornew4.png"  style="width:100%;">
		<div class="carousel-content">
        <p style="color:black; font-size:30px">Don't waste your time,just book here</p>
      </div></div>
	  <div class="item">
        <img src="doctornew1.jpg" style="width:100%;">
		<div class="carousel-content">
        <p style="color:black; font-size:30px">We aim for your health and happiness</p>
      </div>
    </div></div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
	<div class="content">
		<article>
			<h1 class="text-justify">Worrying about your health in your busy life???
			</h1>
			<p class="text-justify" style="font-size:20px">Just spend 2 minutes from your busy schedule.Don't be so busy so that you don't have time 
			to care about your health.Our app makes it happen with a rich UI,high response time,scalable and flexible design</p>
		</article>
	</div><br>
 	<?php include('footer.php'); ?>
</div>
	<script src="js/jquery-1.9.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>