<?php ?> 
<!DOCTYPE html>
<html>
<head>
	<title>Patient</title>
	<link rel="stylesheet"  href="style2.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	
<body>

	<div class="header">
	<h2>Prendre Rendez-vous</h2>
</div>

<form method="POST" action="traitement_rendez_vous.php">

		<div class="input-group">
			<label>Date du jour</label>
			<input type="Date" name="date_rdv">

		</div>

		<div class="input-group">
				<p> <label for="heure_rdv"> Heures de Rendez-vous: </label>
         	<select name="heure_rdv" id=" country" placeholder="Cameroon" required>
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
			<button type="submit" name="Book" class="btn">Sauvegarder</button>
		</div>



</form>

</body>

</html>
