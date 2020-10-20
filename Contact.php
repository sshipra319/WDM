<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="CSS/leanevent.css">
	<!-- <script type="text/javascript" src="javascript/leanevent.js"></script> -->
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="icon" href="imagenes/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>LEANEVENTO-CONTACT</title>
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

	$first_name = "";
	$last_name = "";
	$email = "";
	$topic = "";
	$message = "";
	$fnameErr = "";
	$lnameErr = "";
	$emailErr = "";
	$topicErr = "";
	$messageErr = "";	

	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
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
			$fnameErr = "* Last name is required";
			$flag = 0;

		}
		else
		{
			$last_name = input_test($_POST["lastname"]);
			$flag = 1;
		}
		if(empty($_POST["mail"]))
		{
			$fnameErr = "* E-mail is required";
			$flag = 0;

		}
		else
		{
			$email = input_test($_POST["mail"]);
			$flag = 1;
		}
		if(empty($_POST["topic"]))
		{
			$fnameErr = "* Topic is required";
			$flag = 0;

		}
		else
		{
			$topic = input_test($_POST["topic"]);
			$flag = 1;
		}
		if(empty($_POST["message"]))
		{
			$fnameErr = "* Message is required";
			$flag = 0;

		}
		else
		{
			$message = input_test($_POST["message"]);
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

	if($flag == 1)
	{
		$sql_user = "Insert into contact (first_name, last_name, email_Id, topic, message) values 
		('$first_name', '$last_name', '$email', '$topic', '$message')";
		
		if (mysqli_query($conn, $sql_user))
		{
			echo "saved";
		}
		else
		{
			echo "error" .mysqli_error($conn) ;
		}
		
	}
	mysqli_close($conn);
	?>

	
	<div id="wrapper">
<header>
  <nav>
    <img src="imagenes\logo-blanco.png" alt="Lean logo" class="hidden-xs" />
    <div id="logoName">
      <h3>LEANEVENTO</h3>
    </div>
    <ul>
      <li>
        <a href="Index.html">Inicio</a>
        <a href="AboutUs.html">Quienes Somos</a>
        <a href="Blog.html">Blog</a>
        <a href="SignUp.html">Registrate</a>
        <a href="Contact.html" id="active">Contacto</a>
        <a href="Login.html">Iniciar Sesion</a>
        <a href="BuyFromUs.html">Comprar Boletos</a>
      </li>
    </ul>
  </nav>
</header>

<main>
  <div class= "container-image ">
    <img src="imagenes\bannercontacto.jpg"/> 
    <h1 class="centre"> CONTACTO </h1>
		<div class="below"><span style="color: #FFC300;">INICIO</span> CONTACTO </div>   
  </div>
  
	<div>
		<p class="info"> <br/> <br/><br/><br/> Información del contacto </p>
		<ul class="details">
			<li> <i class="fas fa-map-marker-alt"></i> 198 West 21st street, <br/>Suite 721 New York NY 10016</li>
			<li> <i class="fas fa-phone"></i> +1235 2355 98 </li>
			<li> <i class="fa fa-paper-plane-o"></i> info@diazapps.com </li>
			<li> <i class="fas fa-globe"></i> diazapps.com </li>
		</ul>		
	</div>

	<div>
		<p class="symbol"> LEAN en las redes sociales </p>
		<ul class="social">
		<li> <img src="imagenes\facebook.png" height="26" width="32" /><br/> <span style="color: #FFC300; font-size: 0.70em;">LEAN Ayuda Humanitaria</span></li>
		<li> <img src="imagenes\twitter.png" height="26" width="32"/><br/> <span style="color: #FFC300; font-size: 0.70em;">@LeanEmergente</span></li>
		<li> <img src="imagenes\instagram.png" height="26" width="32"/><br/> <span style="color: #FFC300; font-size: 0.70em;">@LeanAyudaHumanitaria</span></li>
		<li> <img src="imagenes\correo.png" height="26" width="32"/><br/> <span style="color: #FFC300; font-size: 0.70em;">lean emergente@gmail.com</span></li>
		</ul>		
	</div>

<div class="Container">

	<!-- <form name="ContactForm" action="" onsubmit="return ValidateContact()" method="post">  -->
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		 

	<h3 style="font-family: Roboto; font-weight: 400;">Estar en contacto</h3>
	<div id="name">
	<label style="color: #595959; font-size: 0.70em; font-family: Roboto;"> Nombre</label>  
	<label style="float: right; margin-right: 255px; color: #595959; font-size: 0.70em; font-family: Roboto;">Apellido</label><br/>
	<input type="text"id="firstname"name="firstname"placeholder="Tu Nombre" style="width:296px;color:#595959;font-size:0.70em;font-family:Roboto;"> &nbsp; &nbsp;

	<input type="text"id="lname"name="lastname"placeholder="Tu Apellido" style="width:296px;color:#595959;font-size:0.70em;font-family:Roboto;"><br/>

	<span class="error"><?php echo $fnameErr;?></span> &nbsp; &nbsp;

	<span class="error"><?php echo $lnameErr;?></span> <br/></div>

    <div id="mail">
	<label style="color: #595959; font-size: 0.70em; font-family: Roboto;"> Correo</label>
<input type="text"id="country"name="mail"placeholder="Tu correo electronico" style="color:#595959;font-size:0.70em;font-family:Roboto;"> <br/>

<span class="error"><?php echo $emailErr;?></span> <br/></div>

	<div id="topic">
	<label style="color: #595959; font-size: 0.70em; font-family: Roboto;"> Tema</label>
<input type="text" id="tema" name="topic" placeholder="Su asunto de este mensaje" style="color: #595959; font-size: 0.70em;font-family: Roboto;"><br/>

<span class="error"><?php echo $topicErr;?></span> <br/></div>

	<div id="message">
	<label style="color: #595959; font-size: 0.70em; font-family: Roboto;"> Mensaje</label>
<textarea id="subject" name="message" placeholder="Di algo sobre nosotros" style="height: 120px; color: #595959; font-size: 0.70em; font-family: Roboto;"></textarea><br/>

<span class="error"><?php echo $messageErr;?></span> <br/></div>

	<input type="submit" id="submitmsg" name="submit" value="Enviar mensaje">

	</form>
	
</div>
</main>

<footer style="margin-top: -160px;">
<div class="social"><br/>
        <div id="fheading"><h4 style="font-weight:bold"><span>LEAN EN LAS REDES SOCIALES</span></h4></div>
        <div class="icons">
      <a href="#"> 
 <i class="fa fa-twitter" style="font-size:24px;color:#FFC300"></i> </a>
 <a href="#"> <i class="fa fa-facebook"  style="font-size:24px;color:#FFC300"></i></a> 
 <a href="#"> <i class="fa fa-instagram"style="font-size:24px;color:#FFC300"></i></a> 
    </div><br/><br/><br/>
    <div style="text-align: center;"><p><small>Copyright @2019 All rights reserved | This web is made with <i class="fa fa-heart-o"></i> by <span style="color: #FFC300">DiazApps</span></small></p></div>
    </div>	
    </footer>

</div>
</body>
</html>