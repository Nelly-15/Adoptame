<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>App Pet shop| Registrate</title>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>
<script nomodule src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ionic/core/css/ionic.bundle.css" />
<style type="text/css">
	html{
		background-image: linear-gradient(120deg, #5dc1b9 20%, #c2e9fb 100%);
	}
	body {
		background-image: url(Images/images.jpg);
	}
	.navbar{
		background-color: black;
	}
	ion-icon{
		color: white;
	}
	.logo{
		height: 20px;
	}
	.pet{
		width: 90px;
		color: darkred;
	}
	ion-searchbar{
		width: 10px;
	}
	ion-card{
		width: 102px;
	}
	ion-button{
		border: groove golden 8px;
	}
	.top{
		height: 75px;
		width: 370px;
	}
	.Pets{
		height: 20px;
		width: 30px;
		border-radius: 10px;
		border: double turquoise;
	}
	.User{
		height: 100px;
		width: 80px;
		border-radius: 50%;
	}
	section{
		background-color: skyblue;
		border: groove skyblue 10px;
		box-shadow: midnightblue 20px;
		margin: 37px;
	}
	.log{
		color: blue;
	}
	h1{
		color: white;
	}
	ion-radio{
		background-color: white;
		border: solid skyblue;
		border-radius: 60%;
		height: 20px;
	}
	ion-item{
		border-radius: 50%;
		width: 135px;
	}
</style>
</head>
<nav class="navbar">
  <ion-icon name="arrow-back-outline"></ion-icon><a href=""><ion-icon name="home-outline" class="Pets"></ion-icon></a><center><img src="Images/Logo.jpg" class="logo">
  </nav>	
  	<section>	
  	<center><img src="Images/Puppy.jpg" class="User">
  		<h1>----------Registrate--------</h1>
  		<form>
  			<table>
  				<tr>
  					<ion-icon name="person-outline" class="log"></ion-icon><input type="text" name="txtUsuario" placeholder="Ingresa tu username">
  				</tr>
  				<tr><hr><br>
  					<ion-icon name="paw-outline" class="log"></ion-icon></ion-icon><input type="password" name="txtClave" placeholder="Ingresa tu clave"></td>
  				</tr><br><ion-radio value="custom"></ion-radio>Recordar</ion-label>
  				<br><br>
  				<ion-button expand="block">Ingresar</ion-button>

  			</table>
  		</form></center>
  		
  </section>

<body>

</body>
</html>