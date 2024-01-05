<!DOCTYPE html>
<html>
	<head>
		
		<meta charset="utf-8">
		<title>响应式旅游网站-已登录用户</title>
		
		<!--导入外部CSS样式-->
		<link rel="stylesheet" href="style.css">
		
		
	</head>
	<body id="x" onscroll="SetH(this)">
		
		
		<script type="text/javascript" src="script.js"/></script>
		
		<!--上浮按钮-->
		<div class="ac" ><a href="#home"><img src="icons/back.png" width="30" height="30"></a></div>
		
		<!--隐藏的导航栏,点击菜单图标显示-->
		<input id="sn" class="sn" type="checkbox"/>
		<nav class="navbar" id="an">
			<a href="#home">home</a>
			<a href="#book">book</a>
			
			<a href="#services">services</a>
			
			<a href="#review">review</a>
			<a href="#contact">contact</a>
		</nav>
		
		
		
		
		<!--网站头部开始-->
		<header>
			
			<!--菜单按钮-->
			<label for="sn"><div id="menu-bar" style="border: 0 solid #000000;">
				<img src="icons/menu.png" width="30" height="30" id="menu"
								onmouseover="this.src='icons/menuhover.png'"
								onmouseout="this.src='icons/menu.png'">
			</div></label>
			
			<a href="#" class="logo"><span>T</span>ravel</a>
			
			<nav class="navbar">
				<a href="#home">home</a>
				<a href="#book">book</a>
				
				<a href="#services">services</a>
				
				<a href="#review">review</a>
				<a href="#contact">contact</a>
			</nav>
			
			
			<!--图标-->
			<div class="icons">
				<img src="icons/logined.png" width="30" height="30" style="cursor: pointer;">
				
				<label for="ss" style="cursor: pointer;"><img src="icons/search.png" width="30" height="30"
									onmouseover="this.src='icons/searchhover.png'"
									onmouseout="this.src='icons/search.png'"></label>
			</div>
			
			
			
			
			<!--搜索表单-->
			<input id="ss" class="ss" type="checkbox"/>
			<form action="index-in-searched.php" class="search-bar-container" id="sc" method="get">
				<input type="search" id="search-bar" placeholder="search here..." name="keyword">
				<input type="image" src="icons/search.png" width="30" height="30"
						style="margin-bottom: -1rem; padding-left: 1rem;" 
						onmouseover="this.src='icons/searchhover.png'"
						onmouseout="this.src='icons/search.png'">
			</form>
			
		
			
		</header>
		<!--网站头部结束-->
		
		
		
		
		
		
		
		
		
		
		
		<!--主页面开始-->
		<section class="home" id="home">
			<div class="content">
				<h3>准备好出发了吗?</h3>
				<?php session_start();?>
				<p><?=$_SESSION['username'] ?></p>
				<a href="#book" class="btn">探索更多</a>
			</div>
			
			
			<div class="video-container">
				<video src="images/vid-4.mp4" id="video-slider" loop autoplay muted></video>
			</div>
		</section>
		<!--主页面结束-->
		
		
		
		
		
		
		<!--预订部分开始-->
		<section class="book" id="book">
			
			<h1 class="heading">
				<span>b</span>
				<span>o</span>
				<span>o</span>
				<span>k</span>
				<span class="space"></span>
				<span>n</span>
				<span>o</span>
				<span>w</span>
			</h1>
			
			<div class="row">
				<div class="image">
					<img src="images/book-img.svg" alt="">
				</div>
				
				<form action="">
					<div class="inputbox">
						<h3>目的地</h3>
						<input type="text" placeholder="place name">
					</div>
					<div class="inputbox">
						<h3>出行人数</h3>
						<input type="number" placeholder="number of guests">
					</div>
					<div class="inputbox">
						<h3>到达时间</h3>
						<input type="date">
					</div>
					<div class="inputbox">
						<h3>离开时间</h3>
						<input type="date">
					</div>
					<input type="submit" class="btn" value="立刻预订">
				</form>
			</div>
			
		</section>
		<!--预订部分结束-->
		
		
		
		
		
		
		
		
		
		
		
		
		<!--服务区域开始-->
		<section class="services" id="services">
			
			<h1 class="heading">
				<span>s</span>
				<span>e</span>
				<span>r</span>
				<span>v</span>
				<span>i</span>
				<span>c</span>
				<span>e</span>
				<span>s</span>
			</h1>
			
			<div class="box-container">
				
				<div class="box">
					<div><img src="icons/hotel.png" alt="" width="50" height="50"></div>
					<h3>affordable hotels</h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Veritatis,nam!</p>
				</div>
				
				<div class="box">
					<div><img src="icons/food.png" alt="" width="50" height="50"></div>
					<h3>food and drinks</h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Veritatis,nam!</p>
				</div>
				
				<div class="box">
					<div><img src="icons/guide.png" alt="" width="50" height="50"></div>
					<h3>safty guide</h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Veritatis,nam!</p>
				</div>
				
				<div class="box">
					<div><img src="icons/world.png" alt="" width="50" height="50"></div>
					<h3>around the world</h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Veritatis,nam!</p>
				</div>
				
				<div class="box">
					<div><img src="icons/plane.png" alt="" width="50" height="50"></div>
					<h3>fastest travel</h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Veritatis,nam!</p>
				</div>
				
				<div class="box">
					<div><img src="icons/adventure.png" alt="" width="50" height="50"></div>
					<h3>adventures</h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Veritatis,nam!</p>
				</div>
			</div>
		</section>
		<!--服务区域结束-->
		
		
		
		
		
		
		
		
		
		
		<!--回顾部分开始-->
		
		<section class="review" id="review">
			
			<h1 class="heading">
				<span>r</span>
				<span>e</span>
				<span>v</span>
				<span>i</span>
				<span>e</span>
				<span>w</span>
			</h1>
			
			<iframe src="showiframe.php" frameborder="0" width="100%" height="700"></iframe>
				
				
				
	
			
		</section>
		<!--回顾部分结束-->
		
		
		
		
		
		
		<!--联系部分开始-->
		<section class="contact" id="contact">
			<h1 class="heading">
				<span>c</span>
				<span>o</span>
				<span>n</span>
				<span>t</span>
				<span>a</span>
				<span>c</span>
				<span>t</span>
			</h1>
			
			<div class="row">
				<div class="image">
					<img src="images/contact-img.svg" alt="">
				</div>
				
				<form action="addcom.php" method="post">
					<div class="inputbox">
						<input type="text" placeholder="name" name="author">
						<input type="email" placeholder="email" name="email">
					</div>
					
					<div class="inputbox">
						<input type="number" placeholder="number" name="number">
						<input type="text" placeholder="profile" name="title">
					</div>
					
					<textarea rows="10" cols="30" placeholder="" name="content"></textarea>
					
					<input type="submit" class="btn" value="发表留言">
				</form>
			</div>
		</section>
		<!--联系部分结束-->
		
		
		
		
		
		
		
		
		<!--相关品牌部分开始-->
		<section class="brand">
			
				<div class="box-container">
					<div class="box"><img src="images/1.jpg" alt=""></div>
					<div class="box"><img src="images/2.jpg" alt=""></div>
					<div class="box"><img src="images/3.jpg" alt=""></div>
					<div class="box"><img src="images/4.jpg" alt=""></div>
					<div class="box"><img src="images/5.jpg" alt=""></div>
					<div class="box"><img src="images/6.jpg" alt=""></div>
				</div>
			
		</section>
		<!--相关品牌部分结束-->
		
		
		
		
		
		
		<!--尾部开始-->
		<section class="footer">
			
			<div class="box-container">
				
				<div class="box">
					<h3>about us</h3>
					<p>Lorem ipsum dolor sit amet consectetur
					adipisicing elit.Veritatis,nam!</p>
				</div>
				
				<div class="box">
					<h3>branch locations</h3>
					<a href="">china</a>
					<a href="">US</a>
					<a href="">japan</a>
					<a href="">france</a>
				</div>
				
				<div class="box">
					<h3>quick links</h3>
					<a href="#home">home</a>
					<a href="#book">book</a>
					
					<a href="#services">services</a>
				
					<a href="#review">review</a>
					<a href="#contact">contact</a>
				</div>
				
				<div class="box">
					<h3>follow us</h3>
					<a href="#">facebook</a>
					<a href="#">instagram</a>
					<a href="#">twitter</a>
					<a href="#">linkedin</a>
				</div>
			</div>
			
			<h1 class="credit">created by <span>mr.web designer</span>| all rights reserved!</h1>
			
		</section>
		<!--尾部结束-->
		
		
	
	</body>
</html>