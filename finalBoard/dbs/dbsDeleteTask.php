
<?php

// Variablen zuweisen
  $taskId = $_POST['inTaskId'];
  $title = $_POST['inTitle'];
  $col = $_POST['inCol'];


if($col == '1'){

  // DBS Verbindung aufbauen
    require_once('./dbsConnect.php');


  // SQL Anweisung formen
    $sql = "UPDATE sb_tasks ".	// SQL-UPDATE von Task-Tabelle
      "SET col='5' ".		// col-Spalte wird auf 5 gesetzt, als gel�scht markieren
      "WHERE ID=$taskId;";	// bei gew�hltem Task


  // SQL Anweisung ausf�hren
    $result = mysqli_query($con, $sql)
      or die('Fehler bei Datenbankabfrage.');


  // DBS Verbindung schlie�en
    mysqli_close($con);

}

?>



<!DOCTYPE html>

<html>
	
<head>

	<title>Aufgabe l�schen</title>

	<!-- Einbinden der Stylesheets -->
	<link rel="stylesheet" type="text/css" href="../template/template.css">

</head>

<body>

	<div id="textarea">

	<h2>Aufgabe l�schen</h2>

	<?php

	// Ausgabe, wenn gel�scht wurde
	if($col == '1'){
		echo "Die Aufgabe <b><font color='#ba0000'>$title</font color></b> wurde erfolgreich in den Papierkorb verschoben.";
	}

	// Ausgabe, wenn nicht gel�scht wurde
	else{
		echo "Die Aufgabe <b><font color='#ba0000'>$title</font color></b> kann nicht gel�scht werden.<br />";
		echo "Es d�rfen nur Aufgaben aus der Spalte <b><font color='#ba0000'>Ausstehend</font color></b> gel�scht werden.<br /><br />";
	}

	?>

	<!-- Zur�ck-Button -->
	<input type="button" value="Zur�ck zum Board" onclick="window.parent.location.reload()">

	</div>

</body>

</html>
