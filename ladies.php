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
        <li><a href="men.php">Men</a></li>
        <li class="active"><a href="ladies.php">Ladies</a></li>
        <li><a href="kids.php">Kids</a></li>
        <li><a href="familly.php">Familly</a></li>
      </ul>
    </div>
    
  </header>

<div class="gallery">
  <a target="_blank" href="l1.jpg">
    <img src="../images/l1.jpg"  width="400" height="400">
  </a>
  <div class="desc"> Long kitenge skirt<br> for special ceremonies<br/> 1000ksh</div>
</div>

<div class="gallery">
  <a target="_blank" href="l2.jpg">
    <img src="../images/l2.jpg" ="400" height="400">
  </a>
  <div class="desc"> Sexy and comfortable off_shoulders<br> kitenge dress<br> 800ksh </div>
</div>

<div class="gallery">
  <a target="_blank" href="l3.jpg">
    <img src="../images/l3.jpg"  width="400" height="400">
  </a>
  <div class="desc"> Official and special<br> Kitenge shirt and skirt <br> 1000ksh</div>
</div>

<div class="gallery">
  <a target="_blank" href="l4.jpg">
    <img src="../images/l4.jpg"  width="400" height="400">
  </a>
  <div class="desc">wonderful kitenge skirt<br> with a large..<br> 1500ksh</div>
</div>

</body>
</html>
