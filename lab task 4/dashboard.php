<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dashboard</title>
</head>
<body>
<fieldset>	
<?php
session_start();
include "header.php";
?>
</fieldset>
<table>
	<td>
		<fieldset style="height: 320px;width: 300px;font-size:130%">
			<h3>Account</h3>
			<hr>
			<ul>
				<li><a href="dashboard.php">Dashboard</a></li>
				<li><a href="profile.php">View Profile</a></li>
				<li><a href="editProfile.php">Edit Profile</a></li>
				<li><a href="changeProfilePic.php">Change Profile Picture</a></li>
				<li><a href="changePass.php">Change Password</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</fieldset>
	</td>
	<td>
	<fieldset style="height: 300px;width: 945px;font-size:250%;font-style:bold;">
		<?php echo "Welcome ".$_SESSION['uname'];?>
	</fieldset>
	</td>
</table>
<fieldset>
	<?php include "footer.php";?>
</fieldset>
</body>
</html>