
<?php

// DBS Verbindung aufbauen
  require_once('./dbsConnect.php');
  mysqli_set_charset($con, "utf8");


// SQL Anweisung bauen
  $sql = "SELECT * ".				// alles auslesen
	 "FROM sb_tasks ".			// von Task-Tabelle 
	 "WHERE col < 5 ".			// von nicht als gel�scht markierten Tasks
	 "ORDER BY priority, title ASC;";	// ordne Tasks nach Priorit�t (a-z => hoch, mittel, niedrig)
						// dann nach Titel (a-z)

// SQL Anweisung ausf�hren
  $result = mysqli_query($con, $sql)
    or die('Fehler bei Datenbankabfrage.');


// Ergebnis in Array speichern
  $row = mysqli_fetch_all($result, MYSQLI_ASSOC);


// DBS Verbindung schlie�en
  mysqli_close($con);


// Ergebnis zur�cksenden
echo json_encode($row);

?>