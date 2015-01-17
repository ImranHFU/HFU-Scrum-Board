
// Sprintlist
// Sprintmenu dynamisch generieren und am linken Boardrand anzeigen
function displaySprintlist(){

	// AJAX-Get an an dbsGetSprints.php
	// ermittelt alle Sprint-Eintr�ge aus der Datenbank
	$.ajax({
		type: "GET",
		url: "./dbs/dbsGetSprints.php",
		success: function(result) {

			// myResult ist 2-Dimensionales Array, wie Tabelle
			// enth�lt Abfrage-Ergebnis
			var myResult = JSON.parse(result);

			// erzeuge neue Liste
			var myUl = document.createElement("ul");

			// setze Attribute der neuen Liste
			myUl.setAttribute("id", "sprintlist");

			// schreibe Listen-Element f�r jeden Sprint in die Liste
			// verlinke Listen-Elemente
			// h�nge Sprint-ID als Parameter an die URL, damit f�r die Fkt ersichtlich welcher Sprint geladen werden muss
			// zeige Sprintstart und Sprintende im Link-Titel an (Anzeige bei Mouseover)
			for(var i = 1; i <= myResult.length; i++){

				// pr�fe ob Sprint ausgew�hltem Sprint entspricht
				// wenn ja, erzeuge Listen-Element mit speziellen CSS-Eigenschaften (h�her, dunkelgr�ner Hintergrund)
				if(i == document.getElementById('inSprint').value){
					myUl.innerHTML += '<li><a title="Sprint '+i+': '+myResult[i-1]['startdate'].split("-").reverse().join(".")+' bis '+myResult[i-1]['enddate'].split("-").reverse().join(".")+'" style="height: 100px; line-height: 100px; vertical-align: middle; background: #008854" href="./index.php?id='+i+'">S'+i+'</a></li>';
				}
				// wenn nein, erzeuge Standard-Listen-Element
				else{
					myUl.innerHTML += '<li><a title="Sprint '+i+': '+myResult[i-1]['startdate'].split("-").reverse().join(".")+' bis '+myResult[i-1]['enddate'].split("-").reverse().join(".")+'" href="./index.php?id='+i+'">S'+i+'</a></li>';
				}
			}

			// lege neue Sprintliste in entsprechendes Div am linken Boardrand
			sprintlist.appendChild(myUl);
		}
	});
}
