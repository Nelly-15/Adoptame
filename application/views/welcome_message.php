<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>App Pet shop| Bienvenidos</title>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-image: url('https://www.segurmaniazurekin.eus/a/2020/11/segurmania_mascotas_destacada.jpg');
		margin: 50px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: black;
		background-color: lightpink;
		font-weight: normal;
		text-decoration: none;
		font-family: forte;
	}
	h1 {
		color: blueviolet;
		border: solid black 20px;
		background-color: white;
		font-size: 50px;
		text-align: center;
		font-weight: normal;
		margin:90px;
		padding: 10px;
	}
	.Bienvenida{
		border-radius: 50%;
		height: 840px;
		width: 600px;
		margin: 200px;
	}
	</style>
</head>
<body>

<div id="container">
	<center><img src="Images/Logo.jpg" class="Bienvenida"></center>
	<a href="<?php echo base_url(); ?>Cinicio"><h1>Pets shop</h1></a>
</body>
</html>
