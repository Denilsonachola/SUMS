<?php
	include('conn.php');
?>
<!DOCTYPE html>
<html>
<head>
  
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

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;

}

.gallery{
  display: inline-block;
  margin-top: 200px;
}

div.desc {
    padding: 15px;
    text-align: center;
    margin-top: 100px;
    font-size: 30px;
}
</style>
</head>
<body>
	<?php
		include('header.php');
	?>
	<p></p>
  <header>
    <center><h1 style =" font-size: 60px;"> Fashion and Design</h1></center>
    <div>
      <ul class="main_nav">
        <li><a href="fashion.php">fashion</a></li>
        <li class="active"><a href="men.php">Men</a></li>
        <li><a href="ladies.php">Ladies</a></li>
        <li><a href="kids.php">Kids</a></li>
        <li><a href="familly.php">Familly</a></li>
      </ul>
    </div>
    
  </header>

<div class="gallery">
  <a target="_blank" href="m1.jpg">
    <img src="../images/m1.jpg"  width="400" height="400">
  </a>
  <div class="desc"> Kitenge trouser and Shirt <br> 
                            1000 ksh<br></div>
</div>

<div class="gallery">
  <a target="_blank" href="m2.jpg">
    <img src="../images/m2.jpg"  width="400" height="400">
  </a>
  <div class="desc"> Simple Kitenge Shirt <br>
                           500ksh</div>
</div>

<div class="gallery">
  <a target="_blank" href="m3.jpg">
    <img src="../images/m3.jpg"  width="400" height="400">
  </a>
  <div class="desc"> Special design kitenge shirt<br>
                              800ksh<br></div>
</div>

<div class="gallery">
  <a target="_blank" href="m4.jpg">
    <img src="../images/m4.jpg"  width="400" height="400">
  </a>
  <div class="desc"> Casual kitenge shirt<br>
                           400ksh<br> </div>

</div>
</body>
</center>
</html>
