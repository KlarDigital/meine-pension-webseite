<?php
// 1) Sprachdatei laden
require_once('../include/sprache-zimmer.php');

// 2) DB-Verbindung und Preise laden
include_once '../include/db/db_connect.php';
$query = "SELECT `id`, `typ`, `Saison`, `anzahl`, `preis`, `pluspers`, `pluskind` FROM `Preise` ORDER BY `id`";
if ($result = $mysqli->query($query)) {
  $preise = $result->fetch_all(MYSQLI_ASSOC);
}

function formatPrice($price) {
  return "€ " . number_format($price, 2, ',', '.');
}

// 4 Season-Bezeichnungen
$seasons = [ 'zimmer_winter_hs', 'zimmer_winter_ns', 'zimmer_sommer_hs', 'zimmer_sommer_ns' ];
?>
<!doctype html>
<html prefix="dc: http://purl.org/dc/elements/1.1/" lang="<?php echo $lang; ?>">
<head>
  <title><?php echo $zimmerTexte[$lang]['head_title']; ?></title>
  <?php include ('../include/meta.php'); ?>
</head>
<body>
<header>
  <?php include ('../include/head.php'); ?>
</header>

<div id="sliderglobal">
  <div id="sliderinhaltglobal">
    <img
      src="../Bilder/zimmer/zimmer1.g.jpg"
      alt="<?php echo $zimmerTexte[$lang]['alt_sliderimage']; ?>"
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
      <h1><?php echo $zimmerTexte[$lang]['h1_main']; ?></h1>

      <section class="beschreibung">
        <!-- H2 -->
        <h2><?php echo $zimmerTexte[$lang]['h2_sub']; ?></h2>

        <!-- Grundriss -->
        <div class="plan">
          <a
            data-fancybox="galerie1"
            href="../Bilder/zimmer/zimmer3-grundriss-g.jpg"
            data-fancybox-caption="<?php echo $zimmerTexte[$lang]['caption_floorplan']; ?>"
          >
            <img
              src="../Bilder/zimmer/zimmer3-grundriss.jpg"
              alt="<?php echo $zimmerTexte[$lang]['alt_floorplan']; ?>"
              title="<?php echo $zimmerTexte[$lang]['title_floorplan']; ?>"
              style="width:100%; height:auto;"
            >
          </a>
          <?php echo $zimmerTexte[$lang]['caption_floorplan']; ?>
        </div>

        <!-- Einleitender Absatz -->
        <p><?php echo $zimmerTexte[$lang]['intro_text']; ?></p>

        <!-- Liste -->
        <ul>
          <?php foreach ($zimmerTexte[$lang]['list_bullets'] as $bullet): ?>
            <li><?php echo $bullet; ?></li>
          <?php endforeach; ?>
        </ul>

        <!-- Buttons -->
        <p>
          <a href="../kontakt.php" title="Kontaktieren Sie uns" class="button">
            <i class="fa fa-envelope"></i> <?php echo $zimmerTexte[$lang]['btn_inquire']; ?>
          </a>
          <a href="../buchen.php" title="Jetzt Doppelzimmer in Pension Luttinger buchen" class="button">
            <i class="fa fa-sign-in"></i> <?php echo $zimmerTexte[$lang]['btn_book']; ?>
          </a>
        </p>
        <p>
          <a href="../inklusivleistungen.php" title="Unsere Leistungen">
            <?php echo $zimmerTexte[$lang]['link_inclusive']; ?>
          </a>
        </p>

        <!-- 360° Panorama -->
        <div class="dateninfo">
          <a
            data-fancybox="galerie1"
            data-type="iframe"
            href="panoramas/panzimmer.php"
            data-fancybox-caption="<?php echo $zimmerTexte[$lang]['pano_label']; ?>"
          >
            <i class="fa fa-repeat"></i> <?php echo $zimmerTexte[$lang]['pano_label']; ?>
          </a>
          <span class="qmroom">
            <i class="fa fa-bed"></i> <?php echo $zimmerTexte[$lang]['room_size']; ?>
          </span>
        </div>

        <!-- Tabelle für Preise -->
        <table>
          <tr>
            <td>&nbsp;</td>
            <td><strong><?php echo $zimmerTexte[$lang]['table_col_perperson']; ?></strong></td>
            <td>&nbsp;</td>
            <td><strong><?php echo $zimmerTexte[$lang]['table_col_perperson']; ?></strong></td>
          </tr>
          <tr>
            <td><strong><?php echo $zimmerTexte[$lang]['table_row_sommer_hs']; ?></strong></td>
            <td><?php echo formatPrice($preise[0]['preis']); ?></td>
            <td><strong><?php echo $zimmerTexte[$lang]['table_row_sommer_ns']; ?></strong></td>
            <td><?php echo formatPrice($preise[1]['preis']); ?></td>
          </tr>
          <tr>
            <td><strong><?php echo $zimmerTexte[$lang]['table_row_winter_hs']; ?></strong></td>
            <td><?php echo formatPrice($preise[2]['preis']); ?></td>
            <td><strong><?php echo $zimmerTexte[$lang]['table_row_winter_ns']; ?></strong></td>
            <td><?php echo formatPrice($preise[3]['preis']); ?></td>
          </tr>
        </table>
        <p><?php echo $zimmerTexte[$lang]['price_note']; ?></p>
      </section>

      <!-- IMAGE GALLERY: Einblicke in unser gemütliches Zimmer -->
      <section class="imagewallcenter">
        <h2><?php echo $zimmerTexte[$lang]['gallery_title_1']; ?></h2>

        <figure>
          <a
            data-fancybox="galerie1"
            href="../Bilder/zimmer/zimmer1.g.jpg"
            data-fancybox-caption="<?php echo $zimmerTexte[$lang]['img_room1_caption']; ?>"
          >
            <img
              src="../Bilder/zimmer/zimmer1.JPG"
              alt="<?php echo $zimmerTexte[$lang]['img_room1_alt']; ?>"
              width="267"
              height="200"
              title="Zimmer Sat/TV"
            >
          </a>
          <figcaption><?php echo $zimmerTexte[$lang]['img_room1_caption']; ?></figcaption>
        </figure>

        <figure>
          <a
            data-fancybox="galerie1"
            href="../Bilder/zimmer/zimmer2.g.jpg"
            data-fancybox-caption="<?php echo $zimmerTexte[$lang]['img_room2_caption']; ?>"
          >
            <img
              src="../Bilder/zimmer/zimmer2.JPG"
              alt="<?php echo $zimmerTexte[$lang]['img_room2_alt']; ?>"
              width="267"
              height="200"
              title="Zimmer Schlafraum"
            >
          </a>
          <figcaption><?php echo $zimmerTexte[$lang]['img_room2_caption']; ?></figcaption>
        </figure>
      </section>

      <!-- BALCONY SECTION -->
      <section class="imagewallcenter">
        <h2><?php echo $zimmerTexte[$lang]['gallery_title_2']; ?></h2>

        <figure>
          <a
            data-fancybox="galerie1"
            href="../../Bilder/zimmer/zimmer-ausblick-g.jpg"
            data-fancybox-caption="<?php echo $zimmerTexte[$lang]['img_balcony1_caption']; ?>"
          >
            <img
              src="../../Bilder/zimmer/zimmer-ausblick.jpg"
              width="267"
              height="200"
              alt="<?php echo $zimmerTexte[$lang]['img_balcony1_alt']; ?>"
            >
          </a>
          <figcaption><?php echo $zimmerTexte[$lang]['img_balcony1_caption']; ?></figcaption>
        </figure>

        <figure>
          <a
            data-fancybox="galerie1"
            href="../../Bilder/zimmer/zimmer-ausblick-kohlberg-g.jpg"
            data-fancybox-caption="<?php echo $zimmerTexte[$lang]['img_balcony2_caption']; ?>"
          >
            <img
              src="../../Bilder/zimmer/zimmer-ausblick-kohlberg.jpg"
              width="250"
              height="188"
              alt="<?php echo $zimmerTexte[$lang]['img_balcony2_alt']; ?>"
            >
          </a>
          <figcaption><?php echo $zimmerTexte[$lang]['img_balcony2_caption']; ?></figcaption>
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
