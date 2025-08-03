<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="utf-8">
  <meta name="robots" content="noindex,follow">
  <title>Ferienwohnung 1 – 360° Ansicht</title>

  <!-- Panellum CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.css">

  <style>
  /* Größere Höhe */
  #panoramaWohnraum,
  #panoramaZimmer,
  #panoramabad {
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
  #panoramabad {
  min-width: 680px;
  width: 90%;
  margin: 0 3%;
  }
  }
  </style>
</head>
<body>
<h2>Wohnraum – Ferienwohnung "1"</h2>
<div id="panoramaWohnraum"></div>
<div class="steuerung">
  Mit gedrückter linker Maustaste kannst du das Bild bewegen und mit dem Mausrad hinein- oder hinauszoomen.
</div>

<h2>Zimmer – Ferienwohnung "1"</h2>
<div id="panoramaZimmer"></div>
<div class="steuerung">
  Mit gedrückter linker Maustaste kannst du das Bild bewegen und mit dem Mausrad hinein- oder hinauszoomen.
</div>

<h2>Bad – Ferienwohnung "1"</h2>
<div id="panoramabad"></div>
<div class="steuerung">
  Mit gedrückter linker Maustaste kannst du das Bild bewegen und mit dem Mausrad hinein- oder hinauszoomen.
</div>
<!-- Panellum JS -->
<script src="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.js"></script>

<script>
  // Panorama 1
  pannellum.viewer('panoramaWohnraum', {
    type: 'equirectangular',
    panorama: '../../Bilder/wohnung1/2024-360-fewo1-wohnung.jpg',
    autoLoad: true
  });

  // Panorama 2
  pannellum.viewer('panoramaZimmer', {
    type: 'equirectangular',
    panorama: '../../Bilder/wohnung1/2024-360-fewo1-zimmer.jpg',
    autoLoad: true
  });
  // Panorama 3
  pannellum.viewer('panoramabad', {
    type: 'equirectangular',
    panorama: '../../Bilder/wohnung1/2024-360-fewo1-bad.jpg',
    autoLoad: true
  });
</script>
</body>
</html>
