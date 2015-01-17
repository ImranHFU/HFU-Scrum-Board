
// Konfiguration der FancyBox
// Generiere FancyBox nachdem alle Inhalte geladen sind, Seite bereit ist
$(document).ready(function() {

	$(".fancybox").fancybox({

		type: 'iframe',				// setze Typ iframe um HTML-Seiten anzeigen zu k�nnen
		autoSize : false,			// deaktiviere automatische Gr��enanpassung
		width: 680,				// setze Breite fix auf 680px
		titlePosition: 'over',			// lege Titel-Position fest
		arrows: false,				// deaktiviere Weiter- und Zur�ck-Buttons, die normal
							// zur Navigation innerhalb Bildergalerien genutzt werden

		afterClose: function() {		// setze Fkt, die mit Schlie�en der Box ausgef�hrt wird	
			window.location.reload();	// Fkt: lade das (Haupt-)Fenster neu
		}					// Grund: �nderungen werden somit nach Schlie�en direkt
	});						// auf dem Board angezeigt ohne	manuelles Neuladen				
});