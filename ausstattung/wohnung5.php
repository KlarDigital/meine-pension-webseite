<?php
// 1) Sprachdatei laden
require_once('../include/sprache-fewo3.php');

// 2) Datenbankverbindung
try {
  require_once '../include/db/db_connect.php';
} catch (Exception $e) {
  die("Datenbankverbindung fehlgeschlagen: " . $e->getMessage());
}

// 3) Preise laden
$query = "SELECT `id`, `typ`, `Saison`, `anzahl`, `preis`, `pluspers`, `pluskind` FROM `Preise` ORDER BY `id`";
if ($result = $mysqli->query($query)) {
  $preise = $result->fetch_all(MYSQLI_ASSOC);
}

// 4) Hilfsfunktionen
function formatPrice($price) {
  return "€ " . number_format($price, 2, ',', '.');
}
$seasons = ['Sommer HS','Sommer NS','Winter HS','Winter NS'];

?>
<!DOCTYPE html>
<html class="no-js" prefix="dc: http://purl.org/dc/elements/1.1/" lang="<?php echo $lang; ?>">
<head>
  <title><?php echo $fewo3Texte[$lang]['head_title']; ?></title>
  <?php require('../include/meta.php'); ?>
</head>
<body>
<header>
  <?php require('../include/head.php'); ?>
</header>

<div id="sliderglobal">
  <div id="sliderinhaltglobal">
    <img
      src="../Bilder/wohnung5/ferw5zimmer.g.jpg"
      alt="<?php echo $fewo3Texte[$lang]['alt_sliderimage']; ?>"
    >
  </div>
</div>

<nav id="mainmenu" class="mainmenu" itemscope itemtype="https://schema.org/SiteNavigationElement">
  <?php require('../include/nav.php'); ?>
</nav>

<main id="content">
  <div class="contentinhalt clearfix">
    <article id="leftblock">

      <!-- H1 -->
      <h1><?php echo $fewo3Texte[$lang]['h1_main']; ?></h1>

      <section class="beschreibung">
        <!-- H2 -->
        <h2><?php echo $fewo3Texte[$lang]['h2_sub']; ?></h2>

        <!-- Grundriss -->
        <div class="plan">
          <a
            data-fancybox="galerie1"
            href="../Bilder/wohnung5/wohnung4-grundriss-g.jpg"
            data-fancybox-caption="<?php echo $fewo3Texte[$lang]['caption_floorplan']; ?>"
          >
            <img
              src="../Bilder/wohnung5/wohnung4-grundriss.jpg"
              alt="<?php echo $fewo3Texte[$lang]['alt_floorplan']; ?>"
              width="550"
              height="367"
            >
          </a>
          <?php echo $fewo3Texte[$lang]['caption_floorplan']; ?>
        </div>

        <!-- Einleitender Absatz -->
        <p><?php echo $fewo3Texte[$lang]['intro_paragraph']; ?></p>

        <!-- Liste -->
        <ul>
          <?php foreach($fewo3Texte[$lang]['list_bullets'] as $bullet): ?>
            <li><?php echo $bullet; ?></li>
          <?php endforeach; ?>
        </ul>

        <!-- Hinweis zu Rauchen -->
        <p><?php echo $fewo3Texte[$lang]['smoke_paragraph']; ?></p>

        <!-- Buttons (Kontakt / Buchen) -->
        <p>
          <a
            href="../kontakt.php"
            title="<?php echo $fewo3Texte[$lang]['btn_inquire'].' – Apartment 3'; ?>"
            class="button"
          >
            <i class="fa fa-envelope"></i> <?php echo $fewo3Texte[$lang]['btn_inquire']; ?>
          </a>
          <a
            href="../buchen.php"
            title="<?php echo $fewo3Texte[$lang]['btn_book'].' – Apartment 3'; ?>"
            class="button"
          >
            <i class="fa fa-sign-in"></i> <?php echo $fewo3Texte[$lang]['btn_book']; ?>
          </a>
        </p>

        <p>
          <a
            href="../inklusivleistungen.php"
            title="<?php echo $fewo3Texte[$lang]['inklusivleistungen_link']; ?>"
          >
            <?php echo $fewo3Texte[$lang]['inklusivleistungen_link']; ?>
          </a>
        </p>

        <!-- 360° Panorama-Info -->
        <div class="dateninfo">
          <a
            data-fancybox="galerie1"
            data-type="iframe"
            href="panoramas/pan5.php"
            data-fancybox-caption="<?php echo $fewo3Texte[$lang]['pano_label']; ?>"
          >
            <i class="fa fa-repeat"></i> <?php echo $fewo3Texte[$lang]['pano_label']; ?>
          </a>
          <span class="qmroom">
            <i class="fa fa-bed"></i>
            <?php echo $fewo3Texte[$lang]['apt_size_info']; ?>
          </span>
        </div>

        <!-- Preistabelle -->
        <table>
          <tr>
            <td>&nbsp;</td>
            <td><strong><?php echo $fewo3Texte[$lang]['table_head_2p']; ?></strong></td>
            <td><strong><?php echo $fewo3Texte[$lang]['table_head_3p']; ?></strong></td>
            <td><strong><?php echo $fewo3Texte[$lang]['table_head_4p']; ?></strong></td>
          </tr>
          <?php
          // Loop Seasons
          foreach ($seasons as $index => $season) {
            echo "<tr>";
            echo "<td><strong>{$season}</strong></td>";
            // Personen 2-4
            for ($persons = 2; $persons <= 4; $persons++) {
              // Grundpreis + (pluspers * (persons-2))
              $base   = $preise[$index]['preis'];
              $pplus  = $preise[$index]['pluspers'];
              $price  = $base + $pplus * ($persons - 2);
              echo "<td>".formatPrice($price)."</td>";
            }
            echo "</tr>";
          }
          ?>
        </table>

        <p><?php echo $fewo3Texte[$lang]['price_footer']; ?></p>
      </section>

      <!-- GALLERY: Einblicke in unsere Ferienwohnung 3 -->
      <section class="imagewallcenter">
        <h2><?php echo $fewo3Texte[$lang]['gallery_section_title_1']; ?></h2>

        <figure>
          <a
            data-fancybox="galerie1"
            href="../Bilder/wohnung5/ferw5zimmer.g.jpg"
            data-fancybox-caption="<?php echo $fewo3Texte[$lang]['img_bedroom_caption']; ?>"
          >
            <img
              src="../Bilder/wohnung5/ferw5zimmer.JPG"
              alt="<?php echo $fewo3Texte[$lang]['img_bedroom_alt']; ?>"
              width="550"
              height="412"
            >
          </a>
          <figcaption><?php echo $fewo3Texte[$lang]['img_bedroom_caption']; ?></figcaption>
        </figure>

        <figure>
          <a
            data-fancybox="galerie1"
            href="../Bilder/wohnung5/ferw5kueche.g.jpg"
            data-fancybox-caption="<?php echo $fewo3Texte[$lang]['img_kitchen_caption']; ?>"
          >
            <img
              src="../Bilder/wohnung5/ferw5kueche.JPG"
              alt="<?php echo $fewo3Texte[$lang]['img_kitchen_alt']; ?>"
              width="498"
              height="550"
            >
          </a>
          <figcaption><?php echo $fewo3Texte[$lang]['img_kitchen_caption']; ?></figcaption>
        </figure>

        <figure>
          <a
            data-fancybox="galerie1"
            href="../Bilder/wohnung5/ferw5duwc.big.jpg"
            data-fancybox-caption="<?php echo $fewo3Texte[$lang]['img_bath_caption']; ?>"
          >
            <img
              src="../Bilder/wohnung5/ferw5duwc.jpg"
              width="413"
              height="550"
              alt="<?php echo $fewo3Texte[$lang]['img_bath_alt']; ?>"
            >
          </a>
          <figcaption><?php echo $fewo3Texte[$lang]['img_bath_caption']; ?></figcaption>
        </figure>

        <figure>
          <a
            data-fancybox="galerie1"
            href="../Bilder/wohnung5/ferw5wohnraum2.big.jpg"
            data-fancybox-caption="<?php echo $fewo3Texte[$lang]['img_living1_caption']; ?>"
          >
            <img
              src="../Bilder/wohnung5/ferw5wohnraum2.jpg"
              alt="<?php echo $fewo3Texte[$lang]['img_living1_alt']; ?>"
              width="550"
              height="413"
            >
          </a>
          <figcaption><?php echo $fewo3Texte[$lang]['img_living1_caption']; ?></figcaption>
        </figure>

        <figure>
          <a
            data-fancybox="galerie1"
            href="../Bilder/wohnung5/ferw5wohnraum3.big.jpg"
            data-fancybox-caption="<?php echo $fewo3Texte[$lang]['img_living2_caption']; ?>"
          >
            <img
              src="../Bilder/wohnung5/ferw5wohnraum3.jpg"
              alt="<?php echo $fewo3Texte[$lang]['img_living2_alt']; ?>"
              width="550"
              height="412"
            >
          </a>
          <figcaption><?php echo $fewo3Texte[$lang]['img_living2_caption']; ?></figcaption>
        </figure>

        <figure>
          <a
            data-fancybox="galerie1"
            href="../Bilder/wohnung5/ferw5wohnraum.g.jpg"
            data-fancybox-caption="<?php echo $fewo3Texte[$lang]['img_living3_caption']; ?>"
          >
            <img
              src="../Bilder/wohnung5/ferw5wohnraum.jpg"
              alt="<?php echo $fewo3Texte[$lang]['img_living3_alt']; ?>"
              width="550"
              height="411"
            >
          </a>
          <figcaption><?php echo $fewo3Texte[$lang]['img_living3_caption']; ?></figcaption>
        </figure>
      </section>

      <!-- GALLERY: Balkon mit Ausblick -->
      <section class="imagewallcenter">
        <h2><?php echo $fewo3Texte[$lang]['gallery_section_title_2']; ?></h2>

        <figure>
          <a
            data-fancybox="galerie1"
            href="../Bilder/wohnung5/sommer.berge.g.jpg"
            data-fancybox-caption="<?php echo $fewo3Texte[$lang]['img_summer1_caption']; ?>"
          >
            <img
              src="../Bilder/wohnung5/sommer.berge.jpg"
              width="550"
              height="412"
              alt="<?php echo $fewo3Texte[$lang]['img_summer1_alt']; ?>"
            >
          </a>
          <figcaption><?php echo $fewo3Texte[$lang]['img_summer1_caption']; ?></figcaption>
        </figure>

        <figure>
          <a
            data-fancybox="galerie1"
            href="../Bilder/wohnung5/sommer.berge2.g.jpg"
            data-fancybox-caption="<?php echo $fewo3Texte[$lang]['img_summer2_caption']; ?>"
          >
            <img
              src="../Bilder/wohnung5/sommer.berge2.jpg"
              width="250"
              height="188"
              alt="<?php echo $fewo3Texte[$lang]['img_summer2_alt']; ?>"
            >
          </a>
          <figcaption><?php echo $fewo3Texte[$lang]['img_summer2_caption']; ?></figcaption>
        </figure>

        <figure>
          <a
            data-fancybox="galerie1"
            href="../Bilder/wohnung1/winter.berge2.g.jpg"
            data-fancybox-caption="<?php echo $fewo3Texte[$lang]['img_winter1_caption']; ?>"
          >
            <img
              src="../Bilder/wohnung1/winter.berge2.jpg"
              alt="<?php echo $fewo3Texte[$lang]['img_winter1_alt']; ?>"
              width="550"
              height="412"
            >
          </a>
          <figcaption><?php echo $fewo3Texte[$lang]['img_winter1_caption']; ?></figcaption>
        </figure>
      </section>
    </article>

    <aside>
      <?php include('../include/side.php'); ?>
    </aside>
  </div>
</main>

<footer>
  <?php include('../include/footer.php'); ?>
</footer>

<?php include('../include/javainclude.php'); ?>
</body>
</html>
