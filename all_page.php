<?php
	session_start();
	require("connection/connect.php");
	$tag="";
	if (isset($_GET['tag']))
	$tag=$_GET['tag'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title> My Responsive website</title>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css" type="text/css"/>
<meta name="viewpoint" content="width=devic-width, intial-scale=1.0"/>
 <style>
 
 nav ul ul {
	display: none;
}
nav ul li:hover > ul {
		display: block;
	}
nav ul {
	background:  #666666; 
	background: linear-gradient(top,  #666666 0%, #666666 100%);  
	background: -moz-linear-gradient(top, #666666 0%, #666666 100%); 
	background: -webkit-linear-gradient(top, #666666 0%,#666666 100%); 
	box-shadow: 0px 0px 9px rgba(0,0,0,0.15);
	padding: 0px 10px;
	border-radius: 5px;  
	list-style: none;
	position: relative;
	display: inline-table;
	margin-top:0px;
	margin-bottom:1px;
}
	nav ul:after {
		content: ""; 
		clear: both; 
		display: block;
	}

nav ul:after {
		content: ""; 
		clear: both; 
		display: block;
		 
	}
nav ul li {
	float: left;
}
	nav ul li:hover {
		background: #333333;
		background: linear-gradient(top,#333333 0%, #333 40%);
		background: -moz-linear-gradient(top,#333333 0%, #333 40%);
		background: -webkit-linear-gradient(top,#333333 0%,#333 40%);
	}
		nav ul li:hover a {
			color: cadetblue;
			font-weight:bold;
		}
	
	nav ul li a {
		display: block; 
		padding:10px 40px;
		color:white; 
		text-decoration: none;
	}
nav ul ul {
	background: #5f6975; 
	border-radius: 5px; 
	padding: 0;
	position: absolute; 
	top: 100%;
}
	nav ul ul li {
		float: none; 
		border-top: 1px groove;
		border-bottom: 1px solid #ccc;
		position: relative;
	}
		nav ul ul li a {
			padding: 10px 30px;
			color: #fff;
		}	
			nav ul ul li a:hover {
				background:#fff;
			}
nav ul ul ul {
	position: absolute; 
	left: 100%; top:0;
}
</style>
</head>
<body class="body"> 
<div id="header">
<img src="img/portfolio.jpg" alt="header" id ="logo"/>
</div>
<header class="mainHeader">
<nav>
	<ul>
		<li><a href="?tag=Home" title="Home(Shift+Ctrl+H)">Home</a></li>
		<li><a href="all_page.php?tag=Comment">Comment</a></li>
		<li><a href="all_page.php?tag=Totorials">Totorials</a>
			<ul>
				<li><a href="#">Php</a></li>
				<li><a href="#">java</a></li>
				<li><a href="#">Linux</a></li>
				<li><a href="#">Web Design</a>
					<ul>
						<li><a href="#">HTML</a></li>
						<li><a href="#">CSS</a></li>
					</ul>
				</li>
			</ul>
		</li>
		<li><a href="#">Articles</a>
			<ul>
				<li><a href="#">web design</a></li>
				<li><a href="#">User Experience</a></li>
			</ul>
		</li>
		<li><a href="#">Inspiration</a></li>
		<li><a href="all_page.php?tag=about">about me</a></li>
		<li><a href="all_page.php?tag=signup">Sign Up</a></li>
</nav>

</ul>
 </header>
 
 <div class="tab"/>
  
 
 </div>
<?php
   						if($tag=="Home" or $tag=="")
							include("Home.php");
                        elseif($tag=="signup")
                            include("signup.php");
                        elseif($tag=="about")
                            include("about.php");
                        elseif($tag=="Comment")
                            include("Comment.php");
							elseif($tag=="Totorials")
							include("Totorials.php");
							?>
</body>
</html>