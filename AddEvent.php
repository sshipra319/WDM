<!DOCTYPE html>

<html>

<head>
	<title>Add Event</title>
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
        <a href="AgentHome.html">Inicio</a>
        <a href="VolunteerList.html">Lista de Voluntarios</a>
        <a href="BusinessList.html">Lista de Fundaciones</a>
        <a href="AgentListEvent.html" id="active">Eventos</a>
        <a href="AgentProfile.html">Agente</a>        
      </li>
    </ul>
  </nav>
</header>

<main>
  <div class= "container-image ">
    <img src="imagenes\bannerregistro.jpg"/> 
    <h1 class="centre"> REGISTRO DE EVENTO </h1>
		<div class="below"><span style="color: #FFC300;">EVENTOS</span>&nbsp;&nbsp; REGISTRO </div>   
  </div>  
	
    <div class="AddEventContainer">
	<h3 style="font-family: Roboto; font-weight: 400; margin-top: -2px;">Registro de Evento</h3>
	<hr style="color: #f2f2f2;">
	<label id="IndiName"> Nombres</label> <br/>
	<input type="text"id="Indilname"name="firstname"placeholder="Nombre del Evento">  &nbsp; &nbsp; 

    <img src="imagenes\imagensubir.png" width="140px" height="140px" style="float: right; margin-right: 80px; margin-top: -10px;" />  <br/>
    <input type="submitIndiProfile" name="submit" value="Seleccionar Imagen">
 
	<br/>
<label id="IndiName">Responsable</label> <br/>
<input type="text"id="Indilname"name="lastname"placeholder="Nombre del Responsable"><br/><br/><br/><br/>

	<label id="IndiName"> Lugar</label>
<input type="text"id="Indicountry"name="country"placeholder="Direccion del lugar del Eventos">
	


	<label id="IndiName"> Fecha</label>
	<label style="color: #595959; font-size: 0.70em; font-family: Roboto; text-align: center; margin-left: 176px;"> Hora</label>  
	<label style="float: right; color: #595959; font-size: 0.70em; font-family: Roboto; margin-right: 122px;">Valor de Boleto</label><br/>
	<input type="text"id="IndiNumber"name="telefono"placeholder="00/00/00">  &nbsp; &nbsp;

	<input type="text"id="IndiNumber"name="usuario"placeholder="00:00">  &nbsp; &nbsp;


<input type="text"id="IndiNumber"name="contrasena"placeholder="$000.00"><br/><br/>


	<input type="submitGuardar" name="submit" value="Guardar">
	
</div>

</main>

<footer style="margin-top: -140px;">
    <div style="text-align: center;"><p><small>Copyright @2019 All rights reserved | This web is made with <i class="fa fa-heart-o"></i> by <span style="color: #FFC300">DiazApps</span></small></p></div>
    </div>	
    </footer>

</div>	
</body>
</html>