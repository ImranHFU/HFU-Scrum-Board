
<?php

// Variablen zuweisen
  $taskId = $_POST['inTaskId'];
  $title = $_POST['inTitle'];
  $description = $_POST['inDescription'];
  $type = $_POST['inType'];
  $priority = $_POST['inPriority'];
  $editor = $_POST['inEditor'];
  $worktime = $_POST['inWorktime'];


// DBS Verbindung aufbauen
  require_once('./dbsConnect.php');


// SQL Anweisung formen
  $sql = "UPDATE sb_tasks ".														// SQL-UPDATE von Task-Tabelle
    "SET title='$title', description='$description', type='$type', priority='$priority', editor='$editor', worktime='$worktime' ".	// aktualisiere alle Eingabe m�glichen Task-Werte auf die (teils) aktualisierten Werte
    "WHERE ID=$taskId;";														// von bearbeitetem Task


// SQL Anweisung ausf�hren
  $result = mysqli_query($con, $sql)
    or die('Fehler bei Datenbankabfrage.');


// DBS Verbindung schlie�en
  mysqli_close($con);

?>



<!DOCTYPE html>

<html>
	
<head>

	<title>Aufgabe erstellt</title>

	<!-- Einbinden der Stylesheets -->
	<link rel="stylesheet" type="text/css" href="../template/template.css">

</head>

<body>

	<div id="textarea">

	<h2>Aufgabe bearbeitet</h2>

	<!-- Ausgabe -->
	Die �nderungen an der Aufgabe <b><font color="#ba0000"><?php echo $title; ?></font color></b> wurden erfolgreich erfasst.<br /><br />
	
	<!-- Zur�ck-Button -->
	<input type="button" value="Zur�ck zum Board" onclick="window.parent.location.reload()">
	
	</div>

</body>

</html>
