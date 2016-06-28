<?php
$nyuel = mysql_connect('localhost','root','');
if (!$nyuel){
	    die("Database Connection Failed" . mysql_error());
}
$select_db = mysql_select_db('website',$nyuel);
if (!$select_db){
	    die("Database Selection Failed" . mysql_error());
}
if(isset($_POST['submit'])){
$username=$_POST['username'];
$password=$_POST['password'];
$level=$_POST['level'];
switch($level){
case'admin':
$nyuel=mysql_query("SELECT *FROM admin WHERE username='$username' AND password='$password'");
$row=mysql_fetch_array($nyuel);
if($row>1){
session_start();
$_SESSION['admin_id']=$row[0];
$_SESSION['username']=$row[1];
header("location:all_page.php");
}else{
 echo "Username and password incorrect";
}
break;
case'user':
$nyuel=mysql_query("SELECT *FROM login WHERE username='$username' AND password=md5('$password')");
$row=mysql_fetch_array($nyuel);
if($row>1){
session_start();
$_SESSION['User_ID']=$row[0];
$_SESSION['username']=$row[1];
 header("location:Totorials.php");
}else{
 echo "Username & Password incorrect";
}
}
}?>
<html>
<head>
<title>Beautiful login form</title>
<style>
body{
	margin-top:80px;
	background-color: #666666;
}
h2
{
	font-family:Tahoma, Geneva, sans-serif;
	color:#00a2d1;
}
.main{
	width:500px;
	margin:0 auto;
	background:#ccc;
	padding: 25px;
	border-radius:5px;
	box-shadow: 0px 0px 0.4px;
}
input[type=text],input[type=password],input[type=Submit]{
	padding:9px;
	border-radius:6px;
	color: #000000;
	font-weight:bold;
	
}
select[name=level]{
	padding:9px;
	border-radius:6px;
	color: #000000;
	font-weight:bold;
	
}
.container{
	background:#fff;
	border-radius:5px;
 font-size:24px;
 text-align:center;
}
a{
	 text-decoration:none
}
</style>
</head>
<body>
<div class="main">
<div class="container">
<h2>Control panel</h2><hr />
            <?php
			if(isset($error))
			{
					 ?>
                     <div class="alert alert-danger">
                        <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?> !
                     </div>
                     <?php
			}
			?>
 </div>
<table>
<form action="" method="POST"/>
<tr>
<td><input type="text" name="username" value=""size="40"placeholder="Enter your username" required="required"/></td>
</tr>
<tr>
<td><input type="password" name="password" size="40"value="" placeholder="enter your password" required="required"/></td>
</tr>

<tr>
<td><input type="Submit" name="submit"value="Login"><a href="signup.php">Not yet registered Sign up Now</td>
</tr>
<p><select name="level"/>
		<option>--level--</option>
			<option>admin</option>
			<option>user</option>
			</select></p>
</form>
</table>
 
</body>
</html>