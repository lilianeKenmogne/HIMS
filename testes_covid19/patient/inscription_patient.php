<?php //include('securitePatient.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Inscription patient</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="css" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css">
</head>
<body>

<style>

    h2{
		margin:auto;
        text-align: cnter;
        color:#006600;
        font-size:xx-large;
        font-family:'Gill Sans', 'Gill Sans MT';
		margin-bottom:5px;
    }

	.header{
		margin-top:100px;
		padding:auto;
		display:center;
	}

	.input-group{
		padding:10px;
		padding-left:50px;
		padding-right:50px;
		margin-left:130px;
	}

	form{
		border: 2px solid black;
		border-radius:10px;
		padding:4px;
		margin-left:30%;
		margin-right:30%;
		margin-bottom:40%;
		background-color:#097;
	}

	button{
		display:center;
		background-color: lightblue;
	}

	a{
		text-decoration:none;
	}

	@media(min-width:360px) and (max-width:640px) {
		form{
			margin-left: 10px;
		}
		.input-group{
			margin-left:-25px;
		}
		button{
			margin-left:50px;
		}
	}


	@media(min-width:400px) and (max-width:600px) {
		form{
			margin-left: 90px;
		}
		.input-group{
			margin-left:-55px;
		}
		button{
			margin-left:50px;
		}
	}

	@media(min-width:540px) and (max-width:720px) {
		form{
			margin-left: 90px;
		}
		.input-group{
			margin-left:2px;
		}
		button{
			margin-left:50px;
		}
	}

	@media(min-width:600px) and (max-width:987px) {
		form{
			margin-left: 150px;
		}
		.input-group{
			margin-left:-7px;
		}
		button{
			margin-left:50px;
		}
	}

	@media(min-width:768px) and (max-width:1024px) {
		form{
			margin-left: 150px;
		}
		.input-group{
			margin-left:50px;
		}
		button{
			margin-left:50px;
		}
	}

	@media(min-width:1024px) and (max-width:1366px) {
		form{
			margin-left: 150px;
		}
		.input-group{
			margin-left:125px;
		}
		button{
			margin-left:50px;
		}
	}


   /* @media(min-width:1366px) and (max-width:2560px) {
		form{
			margin-left: 800px;
		}
		.input-group{
			margin-left:335px;
		}
		button{
			margin-left:50px;
		}
	} */
    
    </style>

	<div class="header">
		<h2 style=" text-align:center;">Inscription Patient</h2>
	</div>

	<form method="POST" action="treatment.php" enctype="multipart/form-data" class="sm-6-md-6" texte-align="center">

	<div class="input-group bg-light">
		<label for="nom_patient" class="form-control">Noms du patient:</label> <br>
		<input type="text" name="nom_patient" placeholder="Votre nom ici..." class="form-control" ><br>

	</div>


	<div class="input-group bg-light">
		<label for="prenom_patient" class="form-control">Prénom:</label> <br>
		<input type="text" name="prenom_patient" placeholder="Votre prenom ici..." class="form-control">


	</div>

	<div class="input-group bg-light">
		<label for="email" class="form-control">Email:</label> <br>
		<input type="email" name="email" placeholder="Votre mail ici..." class="form-control">

	</div>

	<div class="input-group bg-light">
		<label for="tel" class="form-control">Contact</label> <br>
		<input type="telephone" name="tel" placeholder="Votre contact ici..." class="form-control">


	</div>


	<div class="input-group bg-light">
		<label for="mot_de_passe_patient" class="form-control">Mot de passe</label> <br>
		<input type="password" name="mot_de_passe_patient" placeholder="Entrez un mot de passe valide slvp..." class="form-control">

	</div>
   

	<div class="input-group bg-light">
		<button type="submit" name="submit" class="btn btn-primary success mb-2">S'inscrire</button>
		<br>
	</div>

	<p  style=" text-align:center;">
		Deja inscrit? <a href="inscription_patient.php">Prendre rendez-vous </a>
	</p>
	
    



</form>

</body>
</html>