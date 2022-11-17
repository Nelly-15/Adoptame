<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>¡Adota una mascota!</title>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>
<script nomodule src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ionic/core/css/ionic.bundle.css" />
<style type="text/css">
	body {
		background-image: url('Images/Clip.jpg');
	}
	.navbar{
		background-color: black;
	}
	.logo{
		height: 20px;
	}
	ion-button{
		border: groove golden 8px;
	}
	.top{
		height: 90px;
		width: 350px;
	}
	ion-card{
		width: 360px;
		text-align: center;
	}
	a{
		color: white;
	}
	.Cartoon{
		border-radius: 50%;
		width: 80px;
	}
	form{
		padding: 40px;
		margin-top: 50px;
		border: double pink 8px;
		background-color: blueviolet;
		border-radius: 40%;
	}
	</style>
</head>
<nav class="navbar">
  <a href=""><ion-icon name="arrow-back-outline"></ion-icon></a><a href=""><ion-icon name="paw-outline"></ion-icon></a><center><img src="Images/Logo.jpg" class="logo"></center>
</nav>
<body>
	<form action="<?php echo base_url(); ?>CMascotas/guardar" method="post">
		<table>
			<tr>
				<td><label>Nombre:</label></td>
				<td><input type="text" name="txtNombre"></td>
			</tr>
			<tr>
				<td><label>Raza:</label></td>
				<td><input type="txt" name="txtRaza"></td>
			</tr>
			<tr>
				<td><label>Tamaño:</label></td>
				<td><input type="int" name="intTamaño"></td>
			</tr>
			<tr>
				<td><label>Color:</label></td>
				<td><input type="txt" name="txtColor"></td>
			</tr>
			<tr>
				<td><label>Edad:</label></td>
				<td><input type="int" name="intEdad"></td>
			</tr>
			<tr>
				<td><label>Hora:</label></td>
				<td><input type="time" name="timeHora"></td>
			</tr>
			<tr>
				<td><label>Fecha:</label></td>
				<td><input type="date" name="dateFecha"></td>
			</tr>
			<tr>
				<td colspan="2"><label>adoptante</label></td>
			</tr>
			<tr>
				<td><label>Id:</label></td>
				<td><input type="int" name="intId"></td>
			</tr>
			<tr>
				<td><input type="submit" value="Guardar"></td>
			</tr>
		</table>
	</form>

</body>
</html>