
<?php

// ID aus URL in Variable speichern
  $taskId = $_GET['id'];


// DBS Verbindung aufbauen
  require_once('./dbs/dbsConnect.php');


// SQL Anweisung bauen
  $sql = "SELECT * ".		// alles auslesen
	 "FROM sb_tasks ".	// von Task-Tabelle
	 "WHERE ID=$taskId;";	// von gew�hltem Task


// SQL Anweisung ausf�hren
  $result = mysqli_query($con, $sql)
    or die('Fehler bei Datenbankabfrage.');


// Ergebnis in Array speichern
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);


// DBS Verbindung schlie�en
  mysqli_close($con);

?>