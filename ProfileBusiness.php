<!DOCTYPE html>

<html>

<head>
	<title>Business Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="CSS/leanevent.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="icon" href="imagenes/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <a href="HomeBusiness.html">Inicio</a>
        <a href="ProfileBusiness.html"id="active">Fundacion</a>        
      </li>
    </ul>
  </nav>
</header>

<main>
  <div class= "container-image ">
    <img src="imagenes\bannercontacto.jpg"/> 
    <h1 class="centre"> PERFIL </h1>
		<div class="below"><span style="color: #FFC300;">INICIO</span>&nbsp;&nbsp; PERFIL </div>   
  </div>
  
	<div class="IndiProfile">
		<h3 class="infoIndi">Tu Información del Perfil</h3>
		<table id="tblProfile">
			
			<tr id="rowProfile">
				<td id="colProfile"> <i class="fas fa-book"></i>&nbsp; Nombres y Apellidos del Inscrito</td>
				<td id="colProfile"><i class="fas fa-map-marker-alt"></i>&nbsp; 198 West 21st street,<br/> Suite 721 New York NY 10016</td>
				<td id="colProfile" rowspan="3"><img src="imagenes\nologo.png" width="140px" height="140px" /></td>
			</tr>

			<tr id="rowProfile">
				<td id="colProfile"> <i class="fas fa-book"></i>&nbsp; Nombre de la Fundacion</td>
				<td id="colProfile"> <i class="fas fa-phone"></i>&nbsp; + 1235 2355 98</td>
				<td id="colProfile"></td>
			</tr>

			<tr id="rowProfile">
				<td id="colProfile"> <i class="fas fa-user"></i> &nbsp; Nombre del usuario</td>
				<td id="colProfile"> <i class="fa fa-paper-plane-o"></i>&nbsp; nombredecorreo@gmail.com</td>
				<td id="colProfile"></td>
			</tr>

		</table>		
	</div>

    <div class="IndividualContainer">
	<h3 style="font-family: Roboto; font-weight: 400; margin-top: -2px;">Estar en contacto</h3>
	<hr style="color: #f2f2f2;">
	<label id="IndiName"> Nombres y Apellido</label> <br/>
	<input type="text"id="Indilname"name="firstname"placeholder="Tu Nombre">  &nbsp; &nbsp; 

    <img src="imagenes\nologo.png" width="140px" height="140px" style="float: right; margin-right: 80px; margin-top: -10px;" />  <br/>
    <input type="submitIndiProfile" name="submit" value="Seleccionar Logo">
 
	<br/>
<label id="IndiName">Nombre de  la Fundacion</label> <br/>
<input type="text"id="Indilname"name="lastname"placeholder="Tu Apellido"><br/><br/><br/><br/>

	<label id="IndiName"> Correo</label>
<input type="text"id="Indicountry"name="country"placeholder="Tu correo electronico">
	


	<label id="IndiName"> Telefono</label>
	<label style="color: #595959; font-size: 0.70em; font-family: Roboto; text-align: center; margin-left: 162px;"> Usuario</label>  
	<label style="float: right; color: #595959; font-size: 0.70em; font-family: Roboto; margin-right: 138px;">Contrasena</label><br/>
	<input type="text"id="IndiNumber"name="telefono"placeholder="Telefono">  &nbsp; &nbsp;

	<input type="text"id="IndiNumber"name="usuario"placeholder="Nombre de Usuario">  &nbsp; &nbsp;


<input type="text"id="IndiNumber"name="contrasena"placeholder="Contrasena"><br/>


<input type="submitNota" name="submit" value="Nota:"> <br/>

<p style="color: #595959; font-size: 0.70em; font-family: Roboto; float: left; margin-top: 4px;">Solo puede cambiar los datos (Telefono, Contrasena y Logo)</p>




	<input type="submitGuardar" name="submit" value="Guardar Cambios">
	
</div>

</main>

<footer style="margin-top: -140px;">
    <div style="text-align: center;"><p><small>Copyright @2019 All rights reserved | This web is made with <i class="fa fa-heart-o"></i> by <span style="color: #FFC300">DiazApps</span></small></p></div>
    </div>	
    </footer>

</div>	
</body>
</html>