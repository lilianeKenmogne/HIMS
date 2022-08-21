<?php require_once('../patient/inscription_patient.php') ?> 
<!DOCTYPE html>
<html>
<head>
	<title>Patient</title>
	<link rel="stylesheet"  href="style2.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
<!--	<link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css"> -->
</head>

<header>
	
<body>

<style>

	form{
		border: 2px solid black;
		border-radius:10px;
		padding:4px;
		margin-left:30%;
		margin-right:30%;
		margin-bottom:40%;
		background-color:#097;
	}

	h2{
		margin:auto;
        text-align: cnter;
        color:#006600;
        font-size:xx-large;
        font-family:'Gill Sans', 'Gill Sans MT';
		margin-top:70px;
		margin-bottom:10px;
    }
    
	.forIn{
		padding:10px;
		padding-left:50px;
		padding-right:50px;
		margin-left:130px;
		margin-top:2px;
	}

	.form1{
		padding:10px;
		padding-left:110px;
		padding-right:100px;
		margin-left:30px;
		margin-bottom:40%;
	}

	p{
		margin-left:100px;
	}

	button{
		margin-left:190px;
		background-color: lightblue;
	}
    
	
	@media(min-width:360px) and (max-width:640px) {

		form{
			margin-left:30px;
			margin-right:10px;
		}

		.form1{
			margin-left: -10px;
			margin-right:30px;
			margin-bottom:3px;
		}
		.forIn{
			margin-left:-50px;
			margin-bottom:3px;
		}
		button{
			margin-left:75px;
		}
	}


	@media(min-width:400px) and (max-width:600px) {

		form{
			margin-left:-30px;
			margin-right:10px;
		}

		.form1{
			margin-left: -10px;
			padding-right:20px;
		}
		.forIn{
			margin-left:-100px;
			padding-left:50px;
		}
		button{
			margin-left:50px;
		}
	}

	@media(min-width:540px) and (max-width:720px) {

		.col0-6{
			padding:5px;
		}

		.form1{
			margin-left: -90px;
		}
		.forIn{
			margin-left:2px;
		}
		button{
			margin-left:50px;
		}
	}

	@media(min-width:600px) and (max-width:987px) {
		.form1{
			margin-left: 0px;
		}
		.forIn{
			margin-left:-7px;
		}
		button{
			margin-left:50px;
		}
	}

	@media(min-width:768px) and (max-width:1024px) {
		.form1{
			margin-left: -45px;
		}
		.forIn{
			margin-left:50px;
		}
		button{
			margin-left:120px;
		}
	}

	@media(min-width:1024px) and (max-width:1366px) {
		.form1{
			margin-left: -50px;
		}
		.forIn{
			margin-left:50px;
		}
		button{
			margin-left:120px;
		}
	}


   /* @media(min-width:1366px) and (max-width:2560px) {
		.form1{
			margin-left: 800px;
		}
		.forIn{
			margin-left:335px;
		}
		button{
			margin-left:50px;
		}
	} */
    

</style>

	
			<div >
				<h2 style=" text-align:center;">Prendre Rendez-vous</h2>
			</div>
	

<form method="POST" action="treatmentRdv.php">
  
			<div class="col">
				<label class="forIn">Date du jour</label>   <br>
				<input type="Date" name="date_rdv" class="forIn">  <br>
			</div> 
	
			<div class="col-6">
					<p style=" text-align:center;"> <label for="heure_rdv" > Heures RDV: </label>  <br> <br>
         		<select name="heure_rdv"  placeholder="Heure du rendez-vous" required class="form1">
             		<option value="8:30" name="heure_rdv">8:30</option>
             		<option value="9:00" name="heure_rdv">9:00</option>
             		<option value="9:30" name="heure_rdv">9:30</option>
             		<option value="10:00" name="heure_rdv">10:00</option>
             		<option value="10:30" name="heure_rdv">10:30</option>
             		<option value="11:00" name="heure_rdv">11:00</option>
             		<option value="11:30" name="heure_rdv">11:30</option>
             		<option value="12:00" name="heure_rdv">12:00</option>
             		<option value="12:30" name="heure_rdv">12:30</option>
             		<option value="13:00" name="heure_rdv">13:00</option>
			 		<option value="13:30" name="heure_rdv">13:30</option>
			 		<option value="14:00" name="heure_rdv">14:00</option>
			 		<option value="14:30" name="heure_rdv">14:30</option>
			 		<option value="15:00" name="heure_rdv">15:00</option>
         		</select>
					 </p>
			</div>
		
	 		<div class="input-group">
				<button type="submit" name="Book" >Sauvegarder</button>
			</div>


</form>

</body>

</html>
