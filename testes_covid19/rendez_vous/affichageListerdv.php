<?php // include '../../datalayer/bookserver.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Patient</title>
	<link rel="stylesheet"  href="style2.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>
<body>
	<h1 class="my">Mes<span class="mys">  Rendez-vous</span></h1>

	<table class="table2">
		<tr>
		<th>Id du Rendez-vous</th>
		<th>Date du Rendez-vous</th>
		<th>Heure du Rendez-vous</th>
		<th>Noms du Patient</th>
		<th>Contact du Patient</th>
		<th>E-mail du Patient</th>
		<th>Id du patient</th>
		</tr>
		<?php $sql3="SELECT  * FROM testes_covid19 , rendez_vous   WHERE id_rdv=('$id_Rdv') AND date_rdv=('$date_rdv')
		 AND heure_rdv=('$heure_rdv') AND nom_patient=('$nom_patient') 
		AND tel=('$tel') AND email=('$email') AND id_patient=('$id_patient')"  ;
		$result3=$mysqli->query($sql3);
		if(mysqli_num_rows($result3)>=1){
			while ($row3=$result3->fetch_assoc()) {

				echo "<tr><td>".$row3["id_rdv"]."</td><td>".$row3["date_rdv"]."</td><td>"
				.$row3["heure_rdv"]."</td><td>".$row3["id_patient"]."</td><td>";
			}


			echo "</table";
	


		}

		?>
		
	</table>


<!--	<table class="table3">
		<tr>
		<th>Doctor Name</th>
		<th>Address</th>
		<th>Contact Number</th>
		<th>Category</th>
		doctor.Doctorname , doctor.Address,doctor.ContactNumber,doctor.category
,doctor
AND docID= ('$userprofile')
.$row3["Doctorname"]."</td><td>".$row3["Address"]."</td><td>".$row3["ContactNumber"]."</td><td>".$row3["category"]

		</tr>
		<?php $sql4="SELECT doctor.Doctorname,doctor.Address,doctor.ContactNumber,doctor.category FROM doctor " ;
		$result4=$mysqli->query($sql4);
		if(mysqli_num_rows($result4)>1){
			while ($row4=$result4->fetch_assoc()) {

				echo "<tr><td>".$row4["Doctorname"]."</td><td>".$row4["Address"]."</td><td>".$row4["ContactNumber"]."</td><td>".$row4["category"]."</td></tr>";
			}
			echo "</table";


	


		}

		?>
		
	</table>


-->


</body>
</html>