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
</style>
</head>
<body>
	<nav class="navbar">
  <a href="<?php echo base_url(); ?>Cinicio"><ion-icon name="arrow-back-outline"></ion-icon></a><center><img src="Images/Logo.jpg" class="logo"></center>
</nav>
<ion-searchbar><ion-icon name="paw-outline" class="pet"></ion-icon></ion-searchbar>
<center><a href="<?php echo base_url(); ?>Cinicio"><ion-button color="warning">Perritos</ion-button></a>
<a href="<?php echo base_url(); ?>Cgatitos"><ion-button color="warning">Gatitos</ion-button></a></center>
        <a href="<?php echo base_url(); ?>Ctashi"><ion-card><input type="radio">
</svg><img src="Images/gatito.webp" class="top">
    <ion-card-title>tashi</a>
      	<a href="<?php echo base_url(); ?>CMiro"><ion-card >
        <input type="radio">
</svg><img src="Images/miro.jpg" class="top">
    <ion-card-title>Miro</a>
  <a href="<?php echo base_url(); ?>CPerseo"><ion-card>
        <input type="radio">
</svg><img src="Images/persa.webp" class="top">
    <ion-card-title>Perseo</a>
</ion-card>
        <footer>
  <div class="navbar navbar-dark">
    <span class="text-muted"><a href="<?php echo base_url(); ?>Welcome"><ion-icon name="home-outline" class="Pets"></ion-icon></a>&nbps;<a href="<?php echo base_url(); ?>Cinicio"><ion-icon name="paw-outline" class="Pets"></ion-icon></a>&nbps;<a href="<?php echo base_url(); ?>Cgatitos"><ion-icon name="help-outline" class="Pets"></ion-icon></a>&nbps;<a href="<?php echo base_url(); ?>Ccomentarios"><ion-icon name="chatbubbles-outline" class="Pets"></ion-icon></a></span>
  </div>
</footer>
  </body>
</html>