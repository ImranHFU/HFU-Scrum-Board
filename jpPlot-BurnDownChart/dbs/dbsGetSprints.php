
<?php

// DBS Verbindung aufbauen
  require_once('./dbsConnect.php');


// SQL Anweisung bauen
  $sql = "SELECT * ".
	 "FROM sb_sprints2;";


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