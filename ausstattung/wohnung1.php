<?php
// 1) SPRACHDATEI LADEN
require_once('../include/sprache-fewo1.php');

// 2) DB - Preise laden
include_once '../include/db/db_connect.php';

$query = "SELECT `id`, `typ`, `Saison`, `anzahl`, `preis`, `pluspers`, `pluskind` FROM `Preise` ORDER BY `id`";
if ($result = $mysqli->query($query)) {
  $preise = $result->fetch_all(MYSQLI_ASSOC);
}

/**
 * Preisformatierung
 */
function formatPrice($price) {
  return "€ " . number_format($price, 2, ',', '.');
}

// Definierte Seasons
$seasons = [ 'Sommer HS', 'Sommer NS', 'Winter HS', 'Winter NS' ];
?>
<!doctype html>
<html class="no-js" prefix="dc: http://purl.org/dc/elements/1.1/" lang="<?php echo $lang; ?>">
<head>
  <title><?php echo $zimmerTexte[$lang]['head_title']; ?></title>
  <?php include ('../include/meta.php'); ?>
</head>
<body onload="init_pano('canvas')">
<header>
  <?php include ('../include/head.php'); ?>
</header>

<div id="sliderglobal">
  <div id="sliderinhaltglobal">
    <!-- ALT-Text aus Sprachdatei -->
    <img
      src="../Bilder/wohnung1/ferw1wonraum1.g.jpg"
      alt="<?php echo $zimmerTexte[$lang]['slider_img_alt']; ?>"
    >
  </div>
</div>

<nav id="mainmenu" class="mainmenu" itemscope itemtype="http://schema.org/SiteNavigationElement">
  <?php include ('../include/nav.php'); ?>
</nav>

<main id="content">
  <div class="contentinhalt clearfix">
    <article id="leftblock">

      <!-- Hauptüberschrift & Sub-Überschrift -->
      <h1><?php echo $zimmerTexte[$lang]['h1_main']; ?></h1>
      <section class="beschreibung">
        <h2><?php echo $zimmerTexte[$lang]['h2_sub']; ?></h2>

        <!-- Grundriss-Bild -->
        <div class="plan">
          <a
            data-fancybox="galerie1"
            href="../Bilder/wohnung1/wohnung1-grundriss-g.jpg"
            data-fancybox-caption="<?php echo $zimmerTexte[$lang]['plan_caption']; ?>"
          >
            <img
              src="../Bilder/wohnung1/wohnung1-grundriss.jpg"
              alt="<?php echo $zimmerTexte[$lang]['plan_img_alt']; ?>"
              width="235"
              height="242"
              title="Ferienwohnung 1"
            >
          </a>
          <!-- Beschriftung Grundriss -->
          <?php echo $zimmerTexte[$lang]['plan_caption']; ?>
        </div>

        <!-- Intro-Text -->
        <p><?php echo $zimmerTexte[$lang]['intro_text_1']; ?></p>

        <!-- Liste der Punkte -->
        <ul>
          <?php foreach ($zimmerTexte[$lang]['list_points'] as $point): ?>
            <li><?php echo $point; ?></li>
          <?php endforeach; ?>
        </ul>

        <!-- Raucher-Info -->
        <p><?php echo $zimmerTexte[$lang]['smoking_info']; ?></p>

        <!-- Buttons (Anfragen, Buchen) -->
        <p>
          <a href="../kontakt.php" title="Kontaktieren Sie uns" class="button">
            <i class="fa fa-envelope"></i> <?php echo $zimmerTexte[$lang]['btn_inquire']; ?>
          </a>
          <a href="../buchen.php" title="Jetzt Buchen" class="button">
            <i class="fa fa-sign-in"></i> <?php echo $zimmerTexte[$lang]['btn_book']; ?>
          </a>
        </p>
        <p>
          <a href="../inklusivleistungen.php" title="Unsere Leistungen">
            <?php echo $zimmerTexte[$lang]['link_inclusive']; ?>
          </a>
        </p>

        <!-- 360° Panorama-Link + Größenangabe -->
        <div class="dateninfo">
          <a
            data-fancybox="galerie1"
            data-type="iframe"
            href="panoramas/pan1.php"
            data-fancybox-caption="<?php echo $zimmerTexte[$lang]['pano_label']; ?>"
          >
            <i class="fa fa-repeat"></i> <?php echo $zimmerTexte[$lang]['pano_label']; ?>
          </a>
          <span class="qmroom">
            <i class="fa fa-bed"></i>
            <?php echo $zimmerTexte[$lang]['apartment_size']; ?>
          </span>
        </div>

        <!-- Preistabelle -->
        <table>
          <tr>
            <td>&nbsp;</td>
            <td><strong><?php echo $zimmerTexte[$lang]['table_head_2p']; ?></strong></td>
            <td><strong><?php echo $zimmerTexte[$lang]['table_head_3p']; ?></strong></td>
            <td><strong><?php echo $zimmerTexte[$lang]['table_head_4p']; ?></strong></td>
          </tr>
          <?php
          // 4 Seasons = 4 Zeilen
          foreach ($seasons as $index => $season) {
            echo "<tr>";
            echo "<td><strong>{$season}</strong></td>";
            for ($persons = 2; $persons <= 4; $persons++) {
              $basePrice = $preise[$index]['preis'];
              $plusPers  = $preise[$index]['pluspers'];
              $price     = $basePrice + $plusPers * ($persons - 2);
              echo "<td>" . formatPrice($price) . "</td>";
            }
            echo "</tr>";
          }
          ?>
        </table>

        <!-- Hinweis zum Preis -->
        <p><?php echo $zimmerTexte[$lang]['price_note']; ?></p>
      </section>

      <!-- GALLERY: EINBLICKE -->
      <section class="imagewallcenter">
        <h2><?php echo $zimmerTexte[$lang]['gallery_title_1']; ?></h2>

        <figure>
          <a
            data-fancybox="galerie1"
            href="../Bilder/wohnung1/ferw1wonraum2.g.jpg"
            data-fancybox-caption="<?php echo $zimmerTexte[$lang]['fb_caption_room_kitchen']; ?>"
          >
            <img
              src="../Bilder/wohnung1/ferw1wonraum2.JPG"
              alt="Wohnzimmer Ferienwohnung Pension Luttinger"
              width="267"
              height="200"
            >
          </a>
          <figcaption><?php echo $zimmerTexte[$lang]['fb_caption_room_kitchen']; ?></figcaption>
        </figure>

        <figure>
          <a
            data-fancybox="galerie1"
            href="../Bilder/wohnung1/ferw1wonraum1.g.jpg"
            data-fancybox-caption="<?php echo $zimmerTexte[$lang]['fb_caption_room_living']; ?>"
          >
            <img
              src="../Bilder/wohnung1/ferw1wonraum1.JPG"
              alt="Wohnzimmer Ferienwohnung Pension Luttinger"
              width="267"
              height="200"
            >
          </a>
          <figcaption><?php echo $zimmerTexte[$lang]['fb_caption_room_living']; ?></figcaption>
        </figure>

        <figure>
          <a
            data-fancybox="galerie1"
            href="../Bilder/wohnung1/ferw1zimmer1.g.jpg"
            data-fancybox-caption="<?php echo $zimmerTexte[$lang]['fb_caption_room_bed']; ?>"
          >
            <img
              src="../Bilder/wohnung1/ferw1zimmer1.jpg"
              alt="Schlafzimmer Ferienwohnung Pension Luttinger"
              width="267"
              height="200"
            >
          </a>
          <figcaption><?php echo $zimmerTexte[$lang]['fb_caption_room_bed']; ?></figcaption>
        </figure>

        <figure>
          <a
            data-fancybox="galerie1"
            href="../Bilder/wohnung1/ferw1wonraum3.g.jpg"
            data-fancybox-caption="<?php echo $zimmerTexte[$lang]['fb_caption_room_kitchen']; ?>"
          >
            <img
              src="../Bilder/wohnung1/ferw1wonraum3.JPG"
              alt="Küche Ferienwohnung Pension Luttinger"
              width="398"
              height="298"
            >
          </a>
          <figcaption><?php echo $zimmerTexte[$lang]['fb_caption_room_kitchen']; ?></figcaption>
        </figure>

        <figure>
          <a
            data-fancybox="galerie1"
            href="../Bilder/wohnung1/ferienwohnung1-bad1-g.jpg"
            data-fancybox-caption="<?php echo $zimmerTexte[$lang]['fb_caption_bath']; ?>"
          >
            <img
              src="../Bilder/wohnung1/ferienwohnung1-bad1.jpg"
              alt="Bad WC Ferienwohnung Pension Luttinger"
              width="200"
              height="267"
            >
          </a>
          <figcaption><?php echo $zimmerTexte[$lang]['fb_caption_bath']; ?></figcaption>
        </figure>

        <figure>
          <a
            data-fancybox="galerie1"
            href="../Bilder/wohnung1/ferienwohnung1-bad2-g.jpg"
            data-fancybox-caption="<?php echo $zimmerTexte[$lang]['fb_caption_bath_shower']; ?>"
          >
            <img
              src="../Bilder/wohnung1/ferienwohnung1-bad2.jpg"
              alt="Bad Ferienwohnung Pension Luttinger"
              width="200"
              height="267"
            >
          </a>
          <figcaption><?php echo $zimmerTexte[$lang]['fb_caption_bath_shower']; ?></figcaption>
        </figure>
      </section>

      <!-- Balkon mit Ausblick -->
      <section class="imagewallcenter">
        <h2><?php echo $zimmerTexte[$lang]['gallery_title_2']; ?></h2>

        <figure>
          <a
            data-fancybox="galerie1"
            href="../Bilder/wohnung1/sommer.berge.g.jpg"
            data-fancybox-caption="<?php echo $zimmerTexte[$lang]['fb_caption_balcony_mountain']; ?>"
          >
            <img
              src="../Bilder/wohnung1/sommer.berge.jpg"
              width="267"
              height="200"
              alt="Ferienwohnung Pension Luttinger Bichlbach Sommer"
            >
          </a>
          <figcaption><?php echo $zimmerTexte[$lang]['fb_caption_balcony_mountain']; ?></figcaption>
        </figure>

        <figure>
          <a
            data-fancybox="galerie1"
            href="../Bilder/wohnung1/wohnung1-sommer-balkon-g.jpg"
            data-fancybox-caption="<?php echo $zimmerTexte[$lang]['fb_caption_balcony_almkopf']; ?>"
          >
            <img
              src="../Bilder/wohnung1/wohnung1-sommer-balkon.jpg"
              width="550"
              height="413"
              alt="Ferienwohnung Pension Luttinger Bichlbach Sommer Balkon"
            >
          </a>
          <figcaption><?php echo $zimmerTexte[$lang]['fb_caption_balcony_almkopf']; ?></figcaption>
        </figure>

        <figure>
          <a
            data-fancybox="galerie1"
            href="../Bilder/wohnung1/winter.berge.g.jpg"
            data-fancybox-caption="<?php echo $zimmerTexte[$lang]['fb_caption_balcony_winter1']; ?>"
          >
            <img
              src="../Bilder/wohnung1/winter.berge.jpg"
              width="267"
              height="200"
              alt="Ferienwohnung Pension Luttinger Bichlbach Winter"
            >
          </a>
          <figcaption><?php echo $zimmerTexte[$lang]['fb_caption_balcony_winter1']; ?></figcaption>
        </figure>

        <figure>
          <a
            data-fancybox="galerie1"
            href="../Bilder/wohnung1/winter.berge2.g.jpg"
            data-fancybox-caption="<?php echo $zimmerTexte[$lang]['fb_caption_balcony_winter2']; ?>"
          >
            <img
              src="../Bilder/wohnung1/winter.berge2.jpg"
              alt="Ferienwohnung Pension Luttinger Bichlbach Winter Mähberg"
              width="267"
              height="200"
            >
          </a>
          <figcaption><?php echo $zimmerTexte[$lang]['fb_caption_balcony_winter2']; ?></figcaption>
        </figure>
      </section>
    </article>

    <aside>
      <?php include ('../include/side.php'); ?>
    </aside>
  </div>
</main>

<footer>
  <?php include ('../include/footer.php'); ?>
</footer>

<?php include ('../include/javainclude.php'); ?>
</body>
</html>
