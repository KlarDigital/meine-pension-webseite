<html>
<head>
<script>
   window.onload = function() {
	  Viewer = new PanoradoJS(document.getElementById("ViewerCanvas"));
	  licenseKey = "6160176968748814";
	  Viewer.image = { src: '../../Bilder/wohnung9/few9_wohnraum_pan360.jpg', projection: 'spherical' };
	  Viewer = new PanoradoJS(document.getElementById("ViewerZimmer"));
	  licenseKey = "6160176968748814";
	  Viewer.image = { src: '../../Bilder/wohnung9/few9_zimmer_pan360.jpg', projection: 'spherical' };
   }
</script> 
<script src="../../lib/scripts/360pan/jquery.parallax.js"></script> 
<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<style type="text/css">
canvas { max-width: 100%; width:auto; height: 300px; cursor: move; border-radius: 20px; }
h2 { font-family: "Lucida Handwriting"; font-size: 0.813em; text-align: center; }
.steuerung { font-size: 0.658em; padding: 5px; text-align: center; margin-bottom: 15px; background-color: #EAF3E9; }
@media screen and (min-width:680px) {
canvas { min-width: 680px; width: 90%; height: 300px; cursor: move; border-radius: 20px; margin: 0 3%; }
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="robots" content="noindex,follow">
</head>
<body>
<h2>Wohnraum - Ferienwohnung &quot;9&quot;</h2>
<canvas id="ViewerCanvas">
  <p>Your browser does not support the HTML5 canvas element.</p>
</canvas>
<div class="steuerung">Mit Hilfe der gedrückten linken Maustaste können Sie sich auf dem Bild bewegen und mit dem Steuerungsrad der Maus hinein- und hinauszoomen.</div>
<h2>Zimmer - Ferienwohnung &quot;9&quot;</h2>
<canvas id="ViewerZimmer">
  <p>Your browser does not support the HTML5 canvas element.</p>
</canvas>
<div class="steuerung">Mit Hilfe der gedrückten linken Maustaste können Sie sich auf dem Bild bewegen und mit dem Steuerungsrad der Maus hinein- und hinauszoomen.</div>
</body>
</html>
