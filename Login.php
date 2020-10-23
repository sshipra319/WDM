<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="CSS/leanevent.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="icon" href="imagenes/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>LEANEVENTO-LogIn</title>
</head>
<body>
	
<div id="wrapper">
<header id="header">
  <nav id="nav-bar">
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
        <a href="Contact.html">Contacto</a>
        <a href="Login.html" id="active">Iniciar Sesion</a>
        <a href="BuyFromUs.html">Comprar Boletos</a></li>

      </li>
    </ul>
  </nav>
</header>

<main>
  <div class= "container-image ">
    <img src="imagenes\bannerlogin.jpg"/> 
    <div class="centre"> <h1>INICIAR SESIÓN</h1> </div>
		<div class="below"><span style="color: #FFC300;">INICIO</span> INICIAR SESIÓN </div>   
  </div>

  <div class="LogIn">
	<h3 style="font-family: Roboto; font-weight: 400;">Iniciar sesión</h3>
	<label style="color: #595959; font-size: 0.70em; font-family: Roboto;"> Nombre de Usuario</label>  
	<label style="float: right; margin-right: 256px; color: #595959; font-size: 0.70em; font-family: Roboto;">Contraseña</label><br/>
	<input type="text"id="fname"name="firstname"placeholder="Nombre de Usuario o Correo"style="width:280px;height:36px;color:#595959;font-size:0.70em;font-family:Roboto;">  &nbsp; &nbsp;
<input type="text"id="lastname"name="lastname"placeholder="Contraseña"style="width:280px;height:36px;color:#595959;font-size:0.70em;font-family:Roboto;"><br/>

 <a href="Recover.html" style="color: #FFC300;"> 
  <p style="color: #FFC300; font-size: 0.80em; font-family: Roboto; text-align: center; text-decoration: none;"> Olvido su contraseña?</p>
</a>
  <br/>

	<input type="submitEntra" name="submit" value="Entra" style="margin-left: 270px;">
	
</div>
  </main>

  <footer style="margin-top: -160px;">
<div class="social">
        <div id="fheading"><h4 font-weight:bold"><span>LEAN EN LAS REDES SOCIALES</span></h4></div>
        <div class="icons">
      <a href="#"> 
 <i class="fa fa-twitter" style="font-size:24px;color:#FFC300"></i> </a>
 <a href="#"> <i class="fa fa-facebook"  style="font-size:24px;color:#FFC300"></i></a> 
 <a href="#"> <i class="fa fa-instagram"style="font-size:24px;color:#FFC300"></i></a> 
    </div><br/><br/><br/>
    <div id="bottom" style="text-align: center;"><p><small>Copyright @2019 All rights reserved | This web is made with <i class="fa fa-heart-o"></i> by <span style="color: #FFC300">DiazApps</span></small></p></div>
    </div>	
    </footer>

</body>
</html>
