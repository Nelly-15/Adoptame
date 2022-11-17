<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>App Pet shop|Home</title>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>
<script nomodule src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ionic/core/css/ionic.bundle.css" />
<style type="text/css">
	body {
		background-image: linear-gradient(120deg, #5dc1b9 20%, #c2e9fb 100%);
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
		width: 70px;
		height: 120px;
	}
	ion-button{
		border: groove golden 8px;
	}
	.top{
		height: 82px;
		width: 370px;
	}
	.Pets{
		height: 50px;
		width: 43px;
		border-radius: 10px;
		border: double turquoise;
	}
	ion-card{
		width: 400px;
		text-align: center;
	}
	.Person{
		background-color: darkgray;
		color: black;
		height: 20px;
		width: 25px;
	}
</style>
</head>
<body>
	<nav class="navbar">
  <a href="<?php echo base_url(); ?>Welcome"><ion-icon name="arrow-back-outline"></ion-icon></a><center><img src="Images/Logo.jpg" class="logo"></center>
</nav>
<img src="Images/Gato.gif" height="150" width="380">
<center><label><h1>Dejamos tu comentario aqui<img src="Images/descargar.gif" height="100"></h1></label></center>
<form>
	<h2>Comentarios</h2>
	<textarea cols="100" rows="8"></textarea><ion-icon name="mail-outline" class="Person"></ion-icon><input type="Email" name="" placeholder="Ingresa tu correo elctonico"><br>
	<ion-icon name="person-outline" class="Person"></ion-icon><label><input type="text" value="Ingresa un comentario">
		<a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="darkblue" class="bi bi-facebook" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
</svg></a><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="darkcyan" class="bi bi-twitter" viewBox="0 0 16 16">
  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
</svg></a>
<button onClick="alert('Formulario enviado')">Enviar</button>
</form>
<footer>
  <div class="navbar navbar-dark">
    <span class="text-muted"><a href="<?php echo base_url(); ?>Welcome"><ion-icon name="home-outline" class="Pets"></ion-icon></a>&nbps;<a href="<?php echo base_url(); ?>Cinicio"><ion-icon name="paw-outline" class="Pets"></ion-icon></a>&nbps;<a href="<?php echo base_url(); ?>Cgatitos"><ion-icon name="help-outline" class="Pets"></ion-icon></a>&nbps;<a href="<?php echo base_url(); ?>Ccomentarios"><ion-icon name="chatbubbles-outline" class="Pets"></ion-icon></a></span>
  </div>
</footer>
</body>
</html>