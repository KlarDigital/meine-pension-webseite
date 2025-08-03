<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="utf-8">
  <meta name="robots" content="noindex,follow">
  <title>Ferienwohnung 4 – 360° Ansichten</title>

  <!-- Panellum CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.css">

  <style>
  /* Statt <canvas> nutzen wir nun <div>-Container pro Panorama */
  #panoramaWohnraum,
  #panoramaZimmer,
  #panoramaKuche {
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

  /* Beispiel für größere Ansicht ab 680px Breite */
  @media screen and (min-width:680px) {
  #panoramaWohnraum,
  #panoramaZimmer,
  #panoramaKuche {
  min-width: 680px;
  width: 90%;
  margin: 0 3%;
  }
  }
  </style>
</head>
<body>
<h2>Wohnraum – Ferienwohnung "4"</h2>
<div id="panoramaWohnraum"></div>
<div class="steuerung">
  Mit gedrückter linker Maustaste kannst du das Bild bewegen und mit dem Mausrad hinein- oder hinauszoomen.
</div>

<h2>Zimmer – Ferienwohnung "4"</h2>
<div id="panoramaZimmer"></div>
<div class="steuerung">
  Mit gedrückter linker Maustaste kannst du das Bild bewegen und mit dem Mausrad hinein- oder hinauszoomen.
</div>

<h2>Küche – Ferienwohnung "4"</h2>
<div id="panoramaKuche"></div>
<div class="steuerung">
  Mit gedrückter linker Maustaste kannst du das Bild bewegen und mit dem Mausrad hinein- oder hinauszoomen.
</div>

<!-- Panellum JS -->
<script src="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.js"></script>

<script>
  // Wohnraum
  pannellum.viewer('panoramaWohnraum', {
    type: 'equirectangular',
    panorama: '../../Bilder/wohnung6/360grad_wohnung6.jpg', // Pfad zum Bild
    autoLoad: true
  });

  // Zimmer
  pannellum.viewer('panoramaZimmer', {
    type: 'equirectangular',
    panorama: '../../Bilder/wohnung6/2024-360-fewo4-zimmer.jpg',
    autoLoad: true
  });

  // Küche
  pannellum.viewer('panoramaKuche', {
    type: 'equirectangular',
    panorama: '../../Bilder/wohnung6/2024-360-fewo4-kueche.jpg',
    autoLoad: true
  });
</script>
</body>
</html>
