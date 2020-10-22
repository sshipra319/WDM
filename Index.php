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
	<title>HOME</title>
</head>

<body>
  <?php
  
  $mail_to = "";
  $success = "";

  $mail_to = $_POST['email'];
  $mail_subject = "subscribe";
  $mail_header = "From: abcd@gmail.com";
  $email_body = "This is a confirmation email ";
  $success = mail($mail_to, $mail_subject, $mail_body, $mail_header);
  echo $mail_to;
  if($success)
  {
    echo "Success";
  }
  else
  {
    echo "Failure";
  }

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
        <a href="Index.html" id="active">Inicio</a>
        <a href="AboutUs.html">Quienes Somos</a>
        <a href="Blog.html">Blog</a>
        <a href="SignUp.html">Registrate</a>
        <a href="Contact.php">Contacto</a>
        <a href="Login.html">Iniciar Sesion</a>
        <a href="BuyFromUs.html">Comprar Boletos</a>
      </li>
    </ul>
  </nav>
</header>
<main>
  <div class= "container-image ">
    <img src="imagenes\bannerlean2.jpg"/> 
    <img src="imagenes\logo-blanco.png" style="width: 200px;height: 200px; align-content: left;position: absolute; top: 50px; left: 60%;" />
  </div>

  <div class="hacemos">
    <h2>¿QUÉ HACEMOS?</h2>
    <p>La asociación civil LEAN fue creada con el objetivo de ayudar, a través de acciones concretas, a nuestros conciudadanos en Venezuela ante la grave escasez de medicinas e insumos médicos en que se encuentra el país. Nuestra misión consiste en recolectar ayuda médico sanitaria en delegaciones en España y, a través de agentes de transporte, llevarlos a Venezuela para que otras asociaciones se encarguen de su distribución. De esta manera aportamos nuestro granito de arena ayudando a llevar asistencia humanitaria a Venezuela. Somos una asociación sin fines de lucro, dedicada a la defensa de los Derechos Humanos. </p>
  </div>

  <div id="container">
 <div class="text1">
   <h4><strong>478</strong><br>VOLUNTARIOS</h4>
 </div>
 <div class="text2">
   <h4>60.000 <br> PERSONAS BENEFICIADAS</h4>
 </div>
 <div class="text3">
   <h4>45<br> ALIADOS</h4>
 </div>
 <span class="stretch"></span>
</div>

<div id="quote">
  <img src="imagenes\bannerabout.jpg" alt="Lean logo" />
  <div class="quote1">"La injusticia, en cualquier parte,es una amenaza a la justicia en todas partes."</div>
  <div class="martin">Martin Luther King</div>
</div>
<div id="Aliados">
  <h2>ALIADOS</h2>
</div>

<div id="sponsors">
  <div class="logo1">
   <img src="imagenes\logo1.PNG" alt="Lean logo" />
 </div>
 <div class="logo2">
   <img src="imagenes\logo2.PNG" alt="Lean logo" /> </div>
 <div class="logo3">
   <img src="imagenes\logo3.PNG" alt="Lean logo" />
 </div>
 <div class="logo4">
   <img src="imagenes\logo4.PNG" alt="Lean logo" />
 </div>
 <span class="stretch"></span>
</div>

</main>

<footer style="top:200px">
 <div class="subscribe">

  <form action="#" method="post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >

      <form class="subscribe__item form" id="form" method="POST">
        <div class='register-text'><i class="fas fa-paper-plane"></i> Registrese para recibir un <br/> bolitin</div> 
        
        <input class="form__email" id="email" type="email" name="email" placeholder="Introduce tu correo electronico" ><a><input class="button_theme_dark" id="submit" type="submit" value="Suscribir"></a>
              
      </form>
    </div>
    <div class="social">
        <div id="fheading"><h4 style="font-weight:bold"><span>LEAN EN LAS REDES SOCIALES</span></h4></div>
        <div class="icons">
      <a href="#"> 
<i class="fab fa-twitter" style="font-size:24px;color:#FFC300"></i> </a>
 <a href="#"> <i class="fab fa-facebook"  style="font-size:24px;color:#FFC300"></i></a> 
 <a href="#"> <i class="fab fa-instagram"style="font-size:24px;color:#FFC300"></i></a> 
    </div>
    <div id="bottom"><p><small>Copyright @2019 All rights reserved | This web is made with <i class="far fa-heart"></i> by <span style="color: #FFC300">DiazApps</span></small></p></div>
    </div>

</div>
</footer>  

</div>
</body>
</html>