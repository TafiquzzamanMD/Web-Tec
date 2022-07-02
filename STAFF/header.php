<!DOCTYPE html>
<html>
	<head>
		<style>
			
	a1{
		float:  top left ;
		font-size :300%;
		font-weight:bold;
		color: rgb(255,0,0);

}
a2{
	float: top center;
	font-size:150%;
}
a3{
		float: top left;
		font-size :150%;
		font-weight:bold;
}
</style>
</head>
<body>
	<style>
		p{
			float: right;
			font-size:100%;
		}	
		p1{
		
			font-size:80%;
			font-style: italic;
			color:rgb(80,00,80);
		}
		
		</style>
		<a1>Fire Manegement</a1>
		<a2>    </a2>
		<a3>System</a3>
<?php
$session_start= "session_start.php";
$home = "home.php";
$login = "login.php";
$registration = "registration.php";
$logout = "logout.php";
$self = "";


if($_SESSION['flag']='0')

{
	
	echo "<a href ='$home'>Home</a> <a> </a>|<a href ='$login'>Login</a> <a> </a>|<a href ='$registration'>Registration</a>";
}

else{echo "<a href ='$login'>Login</a> <a> </a>|<a href ='$registration'>Registration</a>";}
?>

</body>
</html>