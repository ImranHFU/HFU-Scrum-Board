
<?php

// Variablen zuweisen
  $startdate = $_POST['inSprintStart'];
  $enddate = $_POST['inSprintEnd'];


// DBS Verbindung aufbauen
  require_once('./dbsConnect.php');


// SQL Anweisung bauen
  $sql = "INSERT INTO sb_sprints (startdate, enddate) " .	// SQL-INSERT von neuem Sprint
    "VALUES ('$startdate', '$enddate');";			// f�ge Start- und End-Datum ein


// SQL Anweisung ausf�hren
  $ergebnis = mysqli_query($con, $sql)
    or die('Fehler bei Datenbankabfrage.');


// DBS Verbindung schlie�en
  mysqli_close($con);

?>



<!DOCTYPE html>

<html>
	
<head>

	<title>Sprint erstellt</title>

	<!-- Einbinden der Stylesheets -->
	<link rel="stylesheet" type="text/css" href="../template/template.css">

</head>

<body>

	<div id="textarea">

	<h2>Sprint erstellt</h2>

	<!-- Ausgabe -->
	Der neue Sprint wurde erfolgreich erstellt.<br /><br />

	<!-- Zur�ck-Button -->
	<input type="button" value="Zur�ck zum Board" onclick="window.parent.location.reload()">
	
	</div>

</body>

</html>
