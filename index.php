<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="resource/css/style.css">
</head>
<body>
	<h1>SAMPLE</h1>
	
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="form-data" >
<fieldset>Account Login</fieldset>
<table>
	<tr>
		<th>
	    <label>Username</label>
	</th>
	<td>
	   <input type="text" name="username"></br></br></td>
	</tr>
  <tr>
    	<th><label>Password:</label></th>
       <td> <input type="password" name="password"></br></br></td>
   </tr>
  <tr>
    	<td><button class="btn1" name="login">LOGIN</button></td>
    	<td><button id="btn2" name="sign up">SIGN UP</button></td>
    </tr>
</table>
</form>

<?php
$dbc=mysqli_connect('localhost','root','','accountLogin') or die('Connection error');
$username=$_POST['username'];
$password=$_POST['password'];
$query="insert into form(username,password)values('$username',SHA1('$password'));";
$result=mysqli_query($dbc,$query) or die('Unsuccessful');
mysqli_close($dbc);
?>
</body>
</html>
