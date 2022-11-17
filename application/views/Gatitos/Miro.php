<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>App Pet shop|Miro</title>
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
  <a href="<?php echo base_url(); ?>Cgatitos"><ion-icon name="arrow-back-outline"></ion-icon></a><a href=""><ion-icon name="paw-outline"></ion-icon></a><center><img src="Images/Logo.jpg" class="logo"></center>
</nav>
</head>
<body>
	<ion-card>
  <img src="Images/miro.jpg" class="top" />
  <ion-card-header>
    <ion-card-title>Miro</ion-card-title>
    <ion-card-subtitle>Edad:2años&nbsp;&nbsp;&nbsp;Sex:<ion-icon name="male-outline"></ion-icon></ion-card-subtitle>
  </ion-card-header>
<img src="Images/OG.webp" class="Cartoon"><img src="Images/Wirehair.webp" class="Cartoon" ><img src="Images/American.webp" class="Cartoon"><img src="Images/des.jpg" class="Cartoon">
  <ion-card-content>
     Como su propio nombre indica, lo más característico de esta raza es su pelaje. El gato americano de pelo duro es grande y tiene un pelaje duro, elástico y áspero; cada pelo, de tamaño corto o mediano, es fino y encrespado o rizado. Los bigotes suelen ser rizados. El alcance completo del «rizado» no se manifiesta hasta que el gato es adulto. Puede que haya gatitos con un pelaje muy rizado que luego cambien a un pelo ondulado al crecer, y viceversa. Pueden presentar todo tipo de colores, dibujos y manchas.<br><button onClick="alert('Gatito Adoptado')">Adoptar</button></a>
  </ion-card-content>
</ion-card>

</body>
</html>