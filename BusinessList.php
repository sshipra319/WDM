<!DOCTYPE html>

<html>

<head>
  <title>Agent List of Foundations</title>
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
        <a href="BusinessList.html" id="active">Lista de Fundaciones</a>
        <a href="AgentListEvent.html">Eventos</a>
        <a href="AgentProfile.html">Agente</a>       
      </li>
    </ul>
  </nav>
</header>

<main>
	<div id="list">
		<h1> Lista de Fundaciones</h1>
	</div> <br/><br/>

	<div>
		<table style="border-collapse: collapse;">
			<tr>
				<th  style="padding: 18px;" colspan="2">NOMBRE DE LA FUNDACION</th>								
				<th>EVENTO</th>
				<th>RESPONSABLE</th>
				<th>COMISION</th>
				<th>CONFIRMAR</th>
			</tr>

			<tr style="border-bottom: 1px solid #f2f2f2;">
				<td id="eventdata"><img src="imagenes\nologo.png" height="100px;" width="100px;" style="margin-top: 20px;">
				<td id="eventdata" style="padding-right: 240px;">Nombre de la Fundacion</td>
				<td id="eventdata">Nombre del Evento </td>
				<td id="eventdata">Nombre del<br/>Responsable</td>
	<td><input type="text" placeholder="1" style="color: #595959; font-family: Roboto; width: 60px; height: 36px; text-align: center;"></td>
				<td><a href="Confirm.html"><input type="submitConfirm" name="submit" value="Asignar"></a></td>
			</tr>

			<tr style="border-bottom: 1px solid #f2f2f2;">
				<td id="eventdata" ><img src="imagenes\nologo.png" height="100px;" width="100px;" style="margin-top: 20px;"> 
				<td id="eventdata" style="padding-right: 240px;">Nombre de la Fundacion</td>
				<td id="eventdata">Nombre del Evento </td>
				<td id="eventdata">Nombre del<br/>Responsable</td>
	<td><input type="text" placeholder="1" style="color: #595959; font-family: Roboto; width: 60px; height: 36px; text-align: center;"></td>
				<td><a href="Confirm.html"><input type="submitConfirm" name="submit" value="Asignar"></a></td>
			</tr>

			<tr style="border-bottom: 1px solid #f2f2f2;">
			<td id="eventdata"><img src="imagenes\nologo.png" height="100px;" width="100px;" style="margin-top: 20px;">
				<td id="eventdata" style="padding-right: 240px;">Nombre de la Fundacion</td>
				<td id="eventdata">Nombre del Evento </td>
				<td id="eventdata">Nombre del<br/>Responsable</td>
	<td><input type="text" placeholder="1" style="color: #595959; font-family: Roboto; width: 60px; height: 36px; text-align: center;"></td>
				<td><a href="Confirm.html"><input type="submitConfirm" name="submit" value="Asignar"></a></td>
			</tr>
		</table>
	</div>

<div id="pages">
      <div class="pgn"><<</div>
      <div class="pgn" style="background-color: #FFC300">1</div>
      <div class="pgn">2</div>
      <div class="pgn">3</div>
      <div class="pgn">4</div>
      <div class="pgn">>></div>
    </div>

</main>

<footer>
	<div id="bottom"><p style="text-align: center;"><small>Copyright @2019 All rights reserved | This web is made with <i class="fa fa-heart-o"></i> by <span style="color: #FFC300">DiazApps</span></small></p></div>
</footer>
<br/>


</div>
</body>
</html>