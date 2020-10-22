<!DOCTYPE html>
<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">		
		<link rel="stylesheet" type="text/css" href="CSS/leanevent.css">
	    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	    <!-- <script type="text/javascript" src="javascript/leanevent.js"></script> -->
	    <title>Individual Register</title>
	    <style>
		.error{
			color: red;
			font-size: 12px;
		}
	</style>			
	</head>

	<body>

		<?php

		$servername = "localhost:3306";
		$username = "root";
		$password = "";
		$dbname = "shiprasa_wdm";

		$conn = mysqli_connect($servername, $username, $password, $dbname);

		if($conn == false)
		{
			echo "Not connected";
		}
		else
		{
			echo "connected";
		}

		$email = "";
		$password = "";
		$first_name = "";
		$last_name = "";
		$address = "";
		$city = "";
		$state = "";
		$postal_code = "";
		$emailErr = $passwordErr = $fnameErr = $lnameErr = $addressErr = $cityErr = $stateErr = $postalErr = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{
			if (empty($_POST["email"]))
			{
				$emailErr = "* Email is required";
				$flag = 0;
			}
			else
			{
				$email = input_test($_POST["email"]);
				$flag = 1;
				if(! filter_var($email, FILTER_VALIDATE_EMAIL))
				{
					$emailErr = "* Invalid email format";
					$flag = 0;
				}
			}
			if (empty($_POST["password"]))
			{
				$passwordErr = "* Password is required";
				$flag = 0;
			}
			else
			{
				$password = input_test($_POST["password"]);
				$flag = 1;
				$passlength = strlen($password);
				if($passlength < 8)
				{
					$passwordErr = "* Password must be atleast 8 characters long";
					$flag = 0;
				}
			}
			if(empty($_POST["firstname"]))
			{
				$fnameErr = "* First name is required";
				$flag = 0;

			}
			else
			{
				$first_name = input_test($_POST["firstname"]);
				$flag = 1;
			}
			if(empty($_POST["lastname"]))
			{
				$lnameErr = "* Last name is required";
				$flag = 0;

			}
			else
			{
				$last_name = input_test($_POST["lastname"]);
				$flag = 1;
			}
			if(empty($_POST["address"]))
			{
				$addressErr = "* Address is required";
				$flag = 0;

			}
			else
			{
				$address = input_test($_POST["address"]);
				$flag = 1;
			}
			if(empty($_POST["city"]))
			{
				$cityErr = "* City is required";
				$flag = 0;

			}
			else
			{
				$city = input_test($_POST["city"]);
				$flag = 1;
			}
			if(empty($_POST["state"]))
			{
				$stateErr = "* Select state";
				$flag = 0;

			}
			else
			{
				$state = input_test($_POST["state"]);
				$flag = 1;
			}
			if(empty($_POST["postalcode"]))
			{
				$postalErr = "* Postal code is required";
				$flag = 0;

			}
			else
			{
				$postal_code = input_test($_POST["postalcode"]);
				$flag = 1;
			}
		}

		function input_test($data)
		{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

		mysqli_close($conn);
		?>

		<header>
		<div class="registerIndi">
		<p style="font-family: Roboto; font-size: 0.70em; color: #595959; margin-left:16px;">Registro Individual </p> 
		<hr style="color: #FFFFFF;">

		<!-- <form name="IndividualForm" action="#" method="post" onsubmit="return ValidateIndividual()"> -->
		<form action="#" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">

		<label style="color: #595959; font-size: 0.70em; font-family: Roboto; margin-left:18px;"> Correo</label>  
	<label style="float: right; margin-right: 173px;color:#595959;font-size:0.70em;font-family:Roboto;margin-top:4px;">Contrasena</label><br/>
	<input type="email"id="icorreo"name="email"placeholder="Correo" style="width:210px;height:36px;color:#595959;font-size:0.70em;font-family:Roboto;margin-left:18px;">  &nbsp; &nbsp;
<input type="password"id="icontra"name="password"placeholder="Contrasena" style="width:210px;height:36px;color:#595959;font-size:0.70em;font-family:Roboto;"><br/>&nbsp; &nbsp;

 <span class="error"><?php echo $emailErr;?></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <span class="error"><?php echo $passwordErr;?></span> <br/>

<label style="color: #595959; font-size: 0.70em; font-family: Roboto; margin-left:18px;"> Nombre</label>  
	<label style="float: right; margin-right: 191px;color:#595959;font-size:0.70em;font-family:Roboto;margin-top:4px;">Apellido</label><br/>
	<input type="text"id="nombre"name="firstname"placeholder="Nombre" style="width:210px;height:36px;color:#595959;font-size:0.70em;font-family:Roboto;margin-left:18px;">  &nbsp; &nbsp;
<input type="text"id="apellido"name="lastname"placeholder="Apellido" style="width:210px;height:36px;color:#595959;font-size:0.70em;font-family:Roboto;"><br/>&nbsp; &nbsp;

 <span class="error"><?php echo $fnameErr;?></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <span class="error"><?php echo $lnameErr;?></span> <br/>

<label style="color: #595959; font-size: 0.70em; font-family: Roboto; margin-left:13px;"> Direccion</label><br/>
	<input type="text"id="direction"name="address"placeholder="Direccion" style="width:456px;height:36px;color:#595959;font-size:0.70em;font-family:Roboto;margin-left:13px;">&nbsp;&nbsp;&nbsp;

	<span class="error"><?php echo $addressErr;?></span> <br/>

	<label style="color: #595959; font-size: 0.70em; font-family: Roboto; margin-left:16px;"> Ciudad</label><br/>
	<input type="text"id="city"name="city"placeholder="Ciudad" style="width:456px;height:36px;color:#595959;font-size:0.70em;font-family:Roboto;margin-left:13px;">&nbsp;&nbsp;&nbsp;&nbsp;

	<span class="error"><?php echo $cityErr;?></span> <br/>

	<label style="color: #595959; font-size: 0.70em; font-family: Roboto; margin-left:18px;"> Estado</label>  
	<label style="float: right; margin-right: 90px; color: #595959; font-size: 0.70em; font-family: Roboto;">Codigo Postal</label><br/>

<select id="dropdwn" name="state">
	<option value="">--Select--</option>
	<option value="atlanta">Atlanta</option>
	<option value="california">California</option>
	<option value="denver">Denver</option>
	<option value="texas">Texas</option>
	<option value="virginia">Virginia</option>
</select>
  &nbsp; &nbsp;
<input type="text"id="ipostal"name="postalcode" style="width:140px;height:36px;color:#595959;font-size:0.70em;font-family:Roboto;"><br/>&nbsp; &nbsp;

  <span class="error"><?php echo $stateErr;?></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <span class="error"><?php echo $postalErr;?></span> <br/>

<input type="submit" name="registrarse" value="Registrarse" class="inregister">


<br/><br/>
<hr style="color: #FFFFFF;">
<input type="submit" name="cerrar" value="Cerrar" class="incerrar"><br/>
</div>
</form>
	</header>
		
	</body>
</html>

