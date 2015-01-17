<!DOCTYPE html>

<html>
	
<head>

	<title>Aufgabe l�schen</title>

	<!-- Einbinden der Stylesheets -->
	<link rel="stylesheet" type="text/css" href="./template/template.css">

</head>

<body>

	<div id="content">

	<h2>Aufgabe l�schen</h2>

	<!-- Script ermittelt welcher Task ausgew�hlt wurde und holt entsprechende Daten aus der Datenbank -->
	<?php include("./dbs/dbsGetTaskForEdit.php"); ?>

	<!-- Formular zum L�schen eines Tasks -->
	<form id="myForm" name="myForm" method="POST" action="./dbs/dbsDeleteTask.php">
		
		Wollen sie die Aufgabe <b><font color="#ba0000"><?php echo $row['title']; ?></font color></b> wirklich in den Papierkorb verschieben?<br /><br />

		<!-- Unsichtbares Feld, speichert die Task-ID und gibt sie bei einem L�sch-Versuch wieder mit an das Script, damit dieses wei� welcher Task gel�scht werden soll -->
		<input type="hidden" id="inTaskId" name="inTaskId" value="<?php echo $taskId; ?>">

		<!-- Unsichtbares Feld, speichert die den Aufgabentitel und gibt diesen bei der Antwort vom Server aus um den User sinnvoll zu informieren -->
		<input type="hidden" id="inTitle" name="inTitle" value="<?php echo $row['title']; ?>">

		<!-- Unsichtbares Feld, speichert in welcher Spalte sich der Task befindet und gibt sie bei einem L�sch-Versuch wieder mit an das Script, damit dieses wei� ob der Task gel�scht werden darf -->
		<input type="hidden" id="inCol" name="inCol" value="<?php echo $row['col']; ?>">

		<!-- Submit-Button, Daten werden an dbsDeleteTask.php gesendet -->
		<input type="submit" value="L�schen">

		<!-- Cancel-Button, L�schen wird abgebrochen, FancyBox wird geschlossen -->
		<input type="button" value="Abbrechen" onclick="window.parent.location.reload()">

	</form>

	</div>

</body>

</html>