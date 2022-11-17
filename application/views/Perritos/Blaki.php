<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>App Pet shop|Blaki</title>
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
	.logo{
		height: 20px;
	}
	ion-button{
		border: groove golden 8px;
	}
	.top{
		height: 100px;
		width: 350px;
	}
	ion-card{
		width: 362px;
		text-align: center;
	}
	a{
		color: white;
	}
	.Husky{
		border-radius: 50%;
		width: 80px;
	}
	.Adoptar{
		cursor: pointer;
		position: relative;
	}
	button{
		color: black;
		background-color: darkcyan;
		border-radius: 40%;
		height: 50px;
		border:double pink 8px;
	}
</style>
</head>
<body>
	<nav class="navbar">
  <a href="<?php echo base_url(); ?>Cinicio"><ion-icon name="arrow-back-outline"></ion-icon></a><a href=""><ion-icon name="paw-outline"></ion-icon></a><center><img src="Images/Logo.jpg" class="logo"></center>
</nav>
</head>
<body>
	<ion-card>
  <img src="Images/blaki.png" class="top" />
  <ion-card-header>
    <ion-card-title>Blaki</ion-card-title>
    <ion-card-subtitle>Edad:2años&nbsp;&nbsp;&nbsp;Sex:<ion-icon name="male-outline"></ion-icon></ion-card-subtitle>
  </ion-card-header>
<img src="Images/esquimal.webp" class="Husky"><img src="Images/husky.webp" class="Husky"><img src="Images/malamute.webp" class="Husky"><img src="Images/pomsky.webp" class="Husky">
  <ion-card-content>
    Es un perro de tamaño mediano cuyas proporciones insinúan un equilibrio perfecto entre potencia, velocidad y resistencia. Con su pelaje de doble manto y longitud media, sus orejas erguidas y su cola tipo cepillo, esta raza puede presentar colores y manchas muy diversas, incluyendo el blanco, con algunos ejemplares de colorido notable. Los machos adultos miden entre 53 y 60 cm y las hembras, entre 51 y 56 cm. Los machos pesan de 20 a 27 kg y las hembras, de 16 a 23 kg.<br>
    <button onClick="alert('Perrito Adoptado')">Adoptar</button>
  </ion-card-content>
</ion-card>
</body>
</html>