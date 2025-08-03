<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="utf-8">
  <meta name="robots" content="noindex,follow">
  <title>Zimmer – 360° Panorama</title>

  <!-- Panellum CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.css">

  <style>
  /* Statt Canvas verwenden wir nun einen <div>-Container */
  #panoramaZimmer {
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
  #panoramaZimmer {
  min-width: 680px;
  width: 90%;
  margin: 0 3%;
  }
  }
  </style>
</head>
<body>
<h2>Zimmer – 360°</h2>
<div id="panoramaZimmer"></div>
<div class="steuerung">
  Mit gedrückter linker Maustaste kannst du das Bild bewegen und mit dem Mausrad hinein- und hinauszoomen.
</div>

<!-- Panellum JS -->
<script src="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.js"></script>
<script>
  pannellum.viewer('panoramaZimmer', {
    type: 'equirectangular',
    panorama: '../../Bilder/zimmer/zimmer360pan.jpg', // Pfad zu deinem 360°-Bild
    autoLoad: true
  });
</script>
</body>
</html>
