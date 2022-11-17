<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>App Pet shop|Hoki</title>
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
		height: 170px;
		width: 350px;
	}
	ion-card{
		width: 362px;
		text-align: center;
	}
	a{
		color: white;
	}
	.Cartoon{
		border-radius: 50%;
		width: 90px;
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
  <img src="Images/Cartoon.png" class="top" />
  <ion-card-header>
    <ion-card-title>Hoki</ion-card-title>
    <ion-card-subtitle>Edad:1año&nbsp;&nbsp;&nbsp;Sex:<ion-icon name="male-outline"></ion-icon></ion-card-subtitle>
  </ion-card-header>
<img src="Images/corgi.webp" class="Cartoon"><img src="Images/Pembroke.webp" class="Cartoon"><img src="Images/2.webp" class="Cartoon"><img src="Images/D.webp" class="Cartoon">
  <ion-card-content>
    es un perro pequeño y bajo pero robusto con una cara que recuerda a la del zorro. Su pelaje liso de longitud media es impermeable y puede presentarse en color rojo, arena, canela, negro y marrón, con o sin manchas blancas. Los perros adultos de esta raza miden entre 25 y 30 cm. Los machos pesan de 10 a 12 kilos y las hembras, de 9 a 11 kilos.<br><button onClick="alert('Perrito Adoptado')">Adoptar</button></a>
  </ion-card-content>
</ion-card>

</body>
</html>