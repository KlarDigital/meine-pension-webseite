<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="utf-8">
  <meta name="robots" content="noindex,follow">
  <title>Wohnraum & Zimmer - Ferienwohnung "3"</title>

  <!-- Panellum CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.css">

  <style>
  #panoramaWohnraum,
  #panoramaZimmer,
  #panoramabad,
  #panoramakueche {
  width: 100%;
  height: 650px; /* anpassen, z.B. 400px oder 50vh */
  max-width: 1200px;
  border-radius: 20px;
  }

  h2 {
  font-family: "Lucida Handwriting";
  font-size: 0.813em;
  text-align: center;
  }

  .steuerung {
  font-size: 0.658em;
  padding: 5px;
  text-align: center;
  margin-bottom: 15px;
  background-color: #EAF3E9;
  }

  @media screen and (min-width:680px) {
  #panoramaWohnraum,
  #panoramaZimmer,
  #panoramabad,
  #panoramakueche {
  min-width: 680px;
  width: 90%;
  margin: 0 3%;
  }
  }
  </style>
</head>
<body>
<h2>Wohnraum - Ferienwohnung "3"</h2>
<div id="panoramaWohnraum"></div>
<div class="steuerung">
  Mit Hilfe der gedrückten linken Maustaste kannst du das Bild bewegen und mit dem Steuerungsrad der Maus hinein- und hinauszoomen.
</div>

<h2>Zimmer - Ferienwohnung "3"</h2>
<div id="panoramaZimmer"></div>
<div class="steuerung">
  Mit Hilfe der gedrückten linken Maustaste kannst du das Bild bewegen und mit dem Steuerungsrad der Maus hinein- und hinauszoomen.
</div>

<h2>Bad - Ferienwohnung "3"</h2>
<div id="panoramabad"></div>
<div class="steuerung">
  Mit Hilfe der gedrückten linken Maustaste kannst du das Bild bewegen und mit dem Steuerungsrad der Maus hinein- und hinauszoomen.
</div>

<h2>Küche - Ferienwohnung "3"</h2>
<div id="panoramakueche"></div>
<div class="steuerung">
  Mit Hilfe der gedrückten linken Maustaste kannst du das Bild bewegen und mit dem Steuerungsrad der Maus hinein- und hinauszoomen.
</div>
<!-- Panellum JS -->
<script src="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.js"></script>

<script>
  // Erstelle Panorama-Viewer für den Wohnraum
  pannellum.viewer('panoramaWohnraum', {
    type: 'equirectangular',
    panorama: '../../Bilder/wohnung5/2024-360-fewo3-wohnung.jpg', // Pfad zu deinem 360°-Bild
    autoLoad: true
  });

  // Erstelle Panorama-Viewer für das Zimmer
  pannellum.viewer('panoramaZimmer', {
    type: 'equirectangular',
    panorama: '../../Bilder/wohnung5/2024-360-fewo3-zimmer.jpg', // Pfad zum 2. 360°-Bild
    autoLoad: true
  });

  // Erstelle Panorama-Viewer für das bad
  pannellum.viewer('panoramabad', {
    type: 'equirectangular',
    panorama: '../../Bilder/wohnung5/2024-360-fewo3-bad.jpg', // Pfad zum 2. 360°-Bild
    autoLoad: true
  });

  // Erstelle Panorama-Viewer für das Kuche
  pannellum.viewer('panoramakueche', {
    type: 'equirectangular',
    panorama: '../../Bilder/wohnung5/2024-360-fewo3-kueche.jpg', // Pfad zum 2. 360°-Bild
    autoLoad: true
  });
</script>
</body>
</html>
