
<html>
<head>
<link rel="stylesheet" type="text/css" href="signpg.css">
</head>
<body>
<div id="nav">
	REGISTER
<form name="reg" action="" method="post">
<table>
	
	<tr><td>First name: </td>
<td><input type="text" name="F_name" placeholder="First name"></td>
	</tr>
	<tr><td>Last name: </td>		
<td><input type="text" name="L_name" placeholder="Last name"></td>
	</tr>
	<tr><td>e-mail: </td>
<td><input type="email" name="email" placeholder="Email"></td>
	</tr>
	<tr> <td>Contact no.: </td>
<td><input type="text" name="tp" placeholder="Contact number"></td>
    </tr>
	<tr><td>Address: </td>
<td><input type="text" name="add" placeholder="Address" style="height:50px;"></td>
	</tr>
	
	<tr>
		<td>Gender:</td>
	<td><input type="radio" name="gender" value="Male">Male</td></tr>
	<tr><td></td><td><input type="radio" name="gender" value="Female">female</td></tr>
	<tr><td></td>
		<td><input type="submit" name="subm" value="Sign Up" ></td>
	</tr>
</table>

	

</div>
</form>
<?php
if(isset($_POST["subm"]))
{
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"registration");
	$count=0;
	
		mysqli_query($link,"INSERT INTO users VALUES('$_POST[F_name]','$_POST[L_name]','$_POST[tp]','$_POST[email]','$_POST[add]','$_POST[gender]')");
			?>
			<script type="text/javascript">
			alert("Registation success");
               // window.location="../html/homepage.php";
			</script>
			<?php
			
		}
	

?>
</body>
</html>