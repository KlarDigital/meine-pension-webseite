<?php
/*
 * Der Ordner indem sich die Dateien befinden
 */
$download_dir = "download/";

/*
 * Die herunterladbaren Dateien:
 */
$files = array("1" => "adobe-prospekt-elegant.pdf");

/*
 * Den kompletten Pfad der Datei (+Dateiname) in $file speichern
 */
$file = $download_dir.$files[$_GET['id']];
/*
 * Header-Einstellungen
 */
header("Content-Type: x-type/subtype");
header("Content-Length: ".filesize($file));
header("Content-Disposition: attachment; filename=".$files[$_GET['id']]);

/*
 * Das "Speichern-Unter"-Fenster erscheinen lassen
 */
readfile($file);
?> 