<?php //include '../../datalayer/bookserver.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Patient</title>
	<link rel="stylesheet"  href="style2.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<body>

    <form method="post" action="cancel.php">

	    <?php //include ('../../datalayer/errors.php') ;?>

	        <div class="input-group">
		        <label>Id du Rendez-vous</label>
		        <input type="text" name="id_rdv2" >

	        </div>

	        <div class="input-group">
		        <button type="submit" name="cancel" class="btn">Annulation du rdv</button>
	        </div>

	</form>

</body>
</html>

