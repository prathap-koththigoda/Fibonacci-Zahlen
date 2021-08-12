<?php
	//Fibonacci-Reihe: 0,1,1,2,3,5,8,13,21,34,55 ...
			
	$startZahl = $_POST["startzahl"];
	$letzteZahl = $_POST["letztezahl"];
	$ersteZahl = $letzteZahl;
	$vorhergehendeZahl = 0;
	$aktuelleZahl = 1;
	$naechsteZahl= 0;
	$anzahlIteration = 0;
	
	while ($vorhergehendeZahl <= $letzteZahl)	// Anzahl Interationen, Schlaufe zählt zurück
	{										// bis 0 erreicht ist	
		if ($anzahlIteration == 0)
		{
			if ($startZahl == 0)
			{
			//echo "$vorhergehendeZahl 1<br/>";
			//echo "$aktuelleZahl 1<br/>";
			}			
		}	

		$naechsteZahl = $vorhergehendeZahl + $aktuelleZahl;
		/*Danach wird die vohergehende Zahl und die
		aktuelle Zahl addiert -> das gibt die naechste
		Zahl*/			

		if ($vorhergehendeZahl >= $startZahl)
		{
		echo "$vorhergehendeZahl<br/>";
		}
		// Gibt nur Zahlen aus, die Grösser als die startzahl sind
		
		$vorhergehendeZahl = $aktuelleZahl;
		// die aktuelle Zahl wird der vohergehenden übergeben
		
		$aktuelleZahl = $naechsteZahl;
		//die aktuelle Zahl wird von der naechsten übernommen 
		
		$anzahlIteration = $anzahlIteration + 1;
		// ist nur für startZahl 0 relevant
	}
									
	