<!DOCTYPE html>

<html>

<head>
  <title>List of Events</title>
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
        <a href="HomeBusiness.html" id="active">Inicio</a>
        <a href="ProfileBusiness.html">Fundacion</a>        
      </li>
    </ul>
  </nav>
</header>

<main>
	<div id="list">
		<h1> Lista de Eventos</h1>
	</div> <br/><br/>

	<div class="eventIndi">
		<table id="eventable" style="border-collapse: collapse;">
			<tr>
				<th  style="padding: 18px;" colspan="2">DETALLES DEL EVENTOS</th>								
				<th>LUGAR</th>
				<th>FECHA</th>
				<th>HORA</th>
				<th>ASISTENCIA</th>
			</tr>

			<tr style="border-bottom: 1px solid #f2f2f2;">
				<td id="eventdata"><img src="imagenes\minibaner1.jpg" height="100px;" width="90px;" style="margin-top: 20px;">
				<td id="eventdata">Nombre del Evento y sus detalles</td>
				<td id="eventdata">Direccion del lugar</td>
				<td id="eventdata">14/01/2019</td>
				<td id="eventdata">8 AM</td>
				<td><a href="Confirm.html"><input type="submitConfirm" name="submit" value="Confirmar"></a></td>
			</tr>

			<tr style="border-bottom: 1px solid #f2f2f2;">
				<td id="eventdata"><img src="imagenes\minibaner2.jpg" height="100px;" width="90px;" style="margin-top: 20px;"> 
				<td id="eventdata">Nombre del Evento y sus detalles</td>
				<td id="eventdata">Direccion del lugar</td>
				<td id="eventdata">14/01/2019</td>
				<td id="eventdata">8 AM</td>
				<td><a href="Confirm.html"><input type="submitConfirm" name="submit" value="Confirmar"></a></td>
			</tr>

			<tr style="border-bottom: 1px solid #f2f2f2;">
			<td id="eventdata"><img src="imagenes\minibaner3.jpg" height="100px;" width="90px;" style="margin-top: 20px;">
				<td id="eventdata">Nombre del Evento y sus detalles</td>
				<td id="eventdata">Direccion del lugar</td>
				<td id="eventdata">14/01/2019</td>
				<td id="eventdata">8 AM</td>
				<td><a href="Confirm.html"><input type="submitConfirm" name="submit" value="Confirmar"></a></td>
			</tr>
		</table>
	</div>
</main>

<footer>
	<div id="bottom"><p style="text-align: center;"><small>Copyright @2019 All rights reserved | This web is made with <i class="fa fa-heart-o"></i> by <span style="color: #FFC300">DiazApps</span></small></p></div>
</footer>
<br/>


</div>
</body>
</html>