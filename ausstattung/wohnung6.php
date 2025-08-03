<?php
// 1) Sprachdatei laden
require_once('../include/sprache-fewo4.php');

// 2) DB-Verbindung und Preise laden
include_once '../include/db/db_connect.php';
$query = "SELECT `id`, `typ`, `Saison`, `anzahl`, `preis`, `pluspers`, `pluskind` FROM `Preise` ORDER BY `id`";
if ($result = $mysqli->query($query)) {
  $preise = $result->fetch_all(MYSQLI_ASSOC);
}

function formatPrice($price) {
  return "€ " . number_format($price, 2, ',', '.');
}
$seasons = [ 'Sommer HS', 'Sommer NS', 'Winter HS', 'Winter NS' ];
?>
<!doctype html>
<html class="no-js" prefix="dc: http://purl.org/dc/elements/1.1/" lang="<?php echo $lang; ?>">
<head>
  <title><?php echo $fewo4Texte[$lang]['head_title']; ?></title>
  <?php include ('../include/meta.php'); ?>
</head>
<body>
<header>
  <?php include ('../include/head.php'); ?>
</header>

<div id="sliderglobal">
  <div id="sliderinhaltglobal">
    <img
      src="../Bilder/wohnung6/ferienwohnung4_schlafzimmer.jpg"
      alt="<?php echo $fewo4Texte[$lang]['alt_sliderimage']; ?>"
    >
  </div>
</div>

<nav id="mainmenu" class="mainmenu" itemscope itemtype="https://schema.org/SiteNavigationElement">
  <?php include ('../include/nav.php'); ?>
</nav>

<main id="content">
  <div class="contentinhalt clearfix">
    <article id="leftblock">

      <!-- H1 -->
      <h1><?php echo $fewo4Texte[$lang]['h1_main']; ?></h1>

      <section class="beschreibung">

        <!-- H2 -->
        <h2><?php echo $fewo4Texte[$lang]['h2_sub']; ?></h2>

        <!-- Grundriss -->
        <div class="plan">
          <a
            data-fancybox="galerie1"
            href="../Bilder/wohnung6/wohnung6-grundriss-g.jpg"
            data-fancybox-caption="<?php echo $fewo4Texte[$lang]['caption_floorplan']; ?>"
          >
            <img
              src="../Bilder/wohnung6/wohnung6-grundriss-g.jpg"
              width="590"
              height="300"
              alt="<?php echo $fewo4Texte[$lang]['alt_floorplan']; ?>"
            >
          </a>
          <?php echo $fewo4Texte[$lang]['caption_floorplan']; ?>
        </div>

        <!-- Intro-Text -->
        <p><?php echo $fewo4Texte[$lang]['intro_text']; ?></p>

        <!-- Liste -->
        <ul>
          <?php foreach ($fewo4Texte[$lang]['list_bullets'] as $bullet): ?>
            <li><?php echo $bullet; ?></li>
          <?php endforeach; ?>
        </ul>

        <p><?php echo $fewo4Texte[$lang]['smoking_info']; ?></p>

        <!-- Buttons -->
        <p>
          <a href="../kontakt.php" title="Kontaktieren Sie uns" class="button">
            <i class="fa fa-envelope"></i> <?php echo $fewo4Texte[$lang]['btn_inquire']; ?>
          </a>
          <a href="../buchen.php" title="Jetzt Buchen" class="button">
            <i class="fa fa-sign-in"></i> <?php echo $fewo4Texte[$lang]['btn_book']; ?>
          </a>
        </p>
        <p>
          <a href="../inklusivleistungen.php" title="Unsere Leistungen">
            <?php echo $fewo4Texte[$lang]['link_inclusive']; ?>
          </a>
        </p>

        <!-- Panorama -->
        <div class="dateninfo">
          <a
            data-fancybox="galerie1"
            data-type="iframe"
            href="panoramas/pan6.php"
            data-fancybox-caption="<?php echo $fewo4Texte[$lang]['pano_label']; ?>"
          >
            <i class="fa fa-repeat"></i> <?php echo $fewo4Texte[$lang]['pano_label']; ?>
          </a>
          <span class="qmroom">
            <i class="fa fa-bed"></i>
            <?php echo $fewo4Texte[$lang]['apt_size_info']; ?>
          </span>
        </div>

        <!-- Preistabelle -->
        <table>
          <tr>
            <td>&nbsp;</td>
            <td><strong><?php echo $fewo4Texte[$lang]['table_head_2p']; ?></strong></td>
            <td><strong><?php echo $fewo4Texte[$lang]['table_head_3p']; ?></strong></td>
            <td><strong><?php echo $fewo4Texte[$lang]['table_head_4p']; ?></strong></td>
          </tr>
          <?php
          foreach ($seasons as $index => $season) {
            echo "<tr>";
            echo "<td><strong>{$season}</strong></td>";
            for ($persons = 2; $persons <= 4; $persons++) {
              $price = $preise[$index]['preis'] + ($preise[$index]['pluspers'] * ($persons - 2));
              echo "<td>" . formatPrice($price) . "</td>";
            }
            echo "</tr>";
          }
          ?>
        </table>
        <p><?php echo $fewo4Texte[$lang]['price_note']; ?></p>
      </section>

      <!-- Galerie 1 -->
      <section class="imagewallcenter">
        <h2><?php echo $fewo4Texte[$lang]['gallery_title_1']; ?></h2>

        <figure>
          <a
            data-fancybox="galerie1"
            href="../Bilder/wohnung6/ferienwohnung4-wohnzimmer.jpg"
            data-fancybox-caption="<?php echo $fewo4Texte[$lang]['img_living1_caption']; ?>"
          >
            <img
              src="../Bilder/wohnung6/ferienwohnung4-wohnzimmer_thumb.JPG"
              alt="<?php echo $fewo4Texte[$lang]['img_living1_alt']; ?>"
              width="550"
              height="412"
            >
          </a>
          <figcaption><?php echo $fewo4Texte[$lang]['img_living1_caption']; ?></figcaption>
        </figure>

        <figure>
          <a
            data-fancybox="galerie1"
            href="../Bilder/wohnung6/ferienwohnung4-wohnzimmer2.jpg"
            data-fancybox-caption="<?php echo $fewo4Texte[$lang]['img_living2_caption']; ?>"
          >
            <img
              src="../Bilder/wohnung6/ferienwohnung4-wohnzimmer2_thumb.JPG"
              alt="<?php echo $fewo4Texte[$lang]['img_living2_alt']; ?>"
              width="550"
              height="412"
            >
          </a>
          <figcaption><?php echo $fewo4Texte[$lang]['img_living2_caption']; ?></figcaption>
        </figure>

        <figure>
          <a
            data-fancybox="galerie1"
            href="../Bilder/wohnung6/ferienwohnung4-dusche_wc.jpg"
            data-fancybox-caption="<?php echo $fewo4Texte[$lang]['img_bath_caption']; ?>"
          >
            <img
              src="../Bilder/wohnung6/ferienwohnung4-dusche_wc_thumb.JPG"
              alt="<?php echo $fewo4Texte[$lang]['img_bath_alt']; ?>"
              width="413"
              height="550"
            >
          </a>
          <figcaption><?php echo $fewo4Texte[$lang]['img_bath_caption']; ?></figcaption>
        </figure>

        <figure>
          <a
            data-fancybox="galerie1"
            href="../Bilder/wohnung6/ferienwohnung4_schlafzimmer.jpg"
            data-fancybox-caption="<?php echo $fewo4Texte[$lang]['img_bed1_caption']; ?>"
          >
            <img
              src="../Bilder/wohnung6/ferienwohnung4_schlafzimmer_thumb.jpg"
              alt="<?php echo $fewo4Texte[$lang]['img_bed1_alt']; ?>"
              width="550"
              height="413"
            >
          </a>
          <figcaption><?php echo $fewo4Texte[$lang]['img_bed1_caption']; ?></figcaption>
        </figure>

        <figure>
          <a
            data-fancybox="galerie1"
            href="../Bilder/wohnung6/ferienwohnung4_schlafzimmer2.jpg"
            data-fancybox-caption="<?php echo $fewo4Texte[$lang]['img_bed2_caption']; ?>"
          >
            <img
              src="../Bilder/wohnung6/ferienwohnung4_schlafzimmer2_thumb.jpg"
              width="550"
              height="413"
              alt="<?php echo $fewo4Texte[$lang]['img_bed2_alt']; ?>"
            >
          </a>
          <figcaption><?php echo $fewo4Texte[$lang]['img_bed2_caption']; ?></figcaption>
        </figure>

        <figure>
          <a
            data-fancybox="galerie1"
            href="../Bilder/wohnung6/ferienwohnung4-kueche2.jpg"
            data-fancybox-caption="<?php echo $fewo4Texte[$lang]['img_kitchen1_caption']; ?>"
          >
            <img
              src="../Bilder/wohnung6/ferienwohnung4-kueche2_thumb.JPG"
              width="550"
              height="413"
              alt="<?php echo $fewo4Texte[$lang]['img_kitchen1_alt']; ?>"
            >
          </a>
          <figcaption><?php echo $fewo4Texte[$lang]['img_kitchen1_caption']; ?></figcaption>
        </figure>

        <figure>
          <a
            data-fancybox="galerie1"
            href="../Bilder/wohnung6/ferienwohnung4-kueche.jpg"
            data-fancybox-caption="<?php echo $fewo4Texte[$lang]['img_kitchen2_caption']; ?>"
          >
            <img
              src="../Bilder/wohnung6/ferienwohnung4-kueche_thumb.jpg"
              width="412"
              height="550"
              alt="<?php echo $fewo4Texte[$lang]['img_kitchen2_alt']; ?>"
            >
          </a>
          <figcaption><?php echo $fewo4Texte[$lang]['img_kitchen2_caption']; ?></figcaption>
        </figure>
      </section>

      <!-- Balkon mit Ausblick -->
      <section class="imagewallcenter">
        <h2><?php echo $fewo4Texte[$lang]['gallery_title_2']; ?></h2>

        <figure>
          <a
            data-fancybox="galerie1"
            href="../Bilder/wohnung6/ferienwohnung4-balkon-bichlbach-sommer.jpg"
            data-fancybox-caption="<?php echo $fewo4Texte[$lang]['img_balcony1_caption']; ?>"
          >
            <img
              src="../Bilder/wohnung6/ferienwohnung4-balkon-bichlbach-sommer_thumb.jpg"
              width="550"
              height="413"
              alt="<?php echo $fewo4Texte[$lang]['img_balcony1_alt']; ?>"
            >
          </a>
          <figcaption><?php echo $fewo4Texte[$lang]['img_balcony1_caption']; ?></figcaption>
        </figure>

        <figure>
          <a
            data-fancybox="galerie1"
            href="../Bilder/wohnung6/ferienwohnung4-balkon2-bichlbach-sommer.jpg"
            data-fancybox-caption="<?php echo $fewo4Texte[$lang]['img_balcony2_caption']; ?>"
          >
            <img
              src="../Bilder/wohnung6/ferienwohnung4-balkon2-bichlbach-sommer_thumb.jpg"
              width="550"
              height="413"
              alt="<?php echo $fewo4Texte[$lang]['img_balcony2_alt']; ?>"
            >
          </a>
          <figcaption><?php echo $fewo4Texte[$lang]['img_balcony2_caption']; ?></figcaption>
        </figure>

        <figure>
          <a
            data-fancybox="galerie1"
            href="../Bilder/wohnung1/winter.berge.g.jpg"
            data-fancybox-caption="<?php echo $fewo4Texte[$lang]['img_winter1_caption']; ?>"
          >
            <img
              src="../Bilder/wohnung1/winter.berge.jpg"
              width="550"
              height="412"
              alt="<?php echo $fewo4Texte[$lang]['img_winter1_alt']; ?>"
            >
          </a>
          <figcaption><?php echo $fewo4Texte[$lang]['img_winter1_caption']; ?></figcaption>
        </figure>

        <figure>
          <a
            data-fancybox="galerie1"
            href="../Bilder/wohnung6/ferienwohnung4-balkon-bichlbach-winter.jpg"
            data-fancybox-caption="<?php echo $fewo4Texte[$lang]['img_winter2_caption']; ?>"
          >
            <img
              src="../Bilder/wohnung6/ferienwohnung4-balkon-bichlbach-winter_thumb.jpg"
              alt="<?php echo $fewo4Texte[$lang]['img_winter2_alt']; ?>"
            >
          </a>
          <figcaption><?php echo $fewo4Texte[$lang]['img_winter2_caption']; ?></figcaption>
        </figure>

        <figure>
          <a
            data-fancybox="galerie1"
            href="../Bilder/wohnung6/ferienwohnung4-aussicht-bichlbach-winter.jpg"
            data-fancybox-caption="<?php echo $fewo4Texte[$lang]['img_winter3_caption']; ?>"
          >
            <img
              src="../Bilder/wohnung6/ferienwohnung4-aussicht-bichlbach-winter_thumb.jpg"
              alt="<?php echo $fewo4Texte[$lang]['img_winter3_alt']; ?>"
            >
          </a>
          <figcaption><?php echo $fewo4Texte[$lang]['img_winter3_caption']; ?></figcaption>
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
