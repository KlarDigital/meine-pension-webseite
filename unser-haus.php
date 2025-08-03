<?php
// Sprachdatei laden
require_once('include/sprache-unserhaus.php');
?>
<!doctype html>
<html class="no-js" prefix="dc: http://purl.org/dc/elements/1.1/" lang="<?php echo $lang; ?>">
<head>
  <title><?php echo $ourHouseTexte[$lang]['head_title']; ?></title>
  <?php include('include/meta.php'); ?>
</head>
<body>
<header>
  <?php include('include/head.php'); ?>
</header>

<div id="sliderglobal">
  <div id="sliderinhaltglobal">
    <img
      src="Bilder/unser-haus/20230709_pension_luttinger-sommer.jpg"
      alt="<?php echo $ourHouseTexte[$lang]['img_alt_main']; ?>"
    >
  </div>
</div>

<nav id="mainmenu" class="mainmenu" itemscope itemtype="http://schema.org/SiteNavigationElement">
  <?php include('include/nav.php'); ?>
</nav>

<main id="content">
  <div class="contentinhalt clearfix">
    <article>
      <section>

        <!-- Bild 1: Winter -->
        <figure>
          <a data-fancybox="galerie1"
             href="Bilder/unser-haus/h-wint2-gross.jpg"
             data-fancybox-caption="<?php echo $ourHouseTexte[$lang]['img_winter_cap']; ?>"
          >
            <img
              src="Bilder/unser-haus/h-wint2.jpg"
              alt="<?php echo $ourHouseTexte[$lang]['img_winter_alt']; ?>"
            >
          </a>
          <figcaption><?php echo $ourHouseTexte[$lang]['img_winter_cap']; ?></figcaption>
        </figure>

        <!-- Bild 2: Sommer -->
        <figure>
          <a data-fancybox="galerie1"
             href="Bilder/unser-haus/garten-teich-haus-gr.jpg"
             data-fancybox-caption="<?php echo $ourHouseTexte[$lang]['img_summer_cap']; ?>"
          >
            <img
              src="Bilder/unser-haus/garten-teich-haus.jpg"
              alt="<?php echo $ourHouseTexte[$lang]['img_summer_alt']; ?>"
            >
          </a>
          <figcaption><?php echo $ourHouseTexte[$lang]['img_summer_cap']; ?></figcaption>
        </figure>

        <!-- Haupt-Überschrift -->
        <h1><?php echo $ourHouseTexte[$lang]['heading_h1']; ?></h1>

        <p><?php echo $ourHouseTexte[$lang]['para_intro_1']; ?></p>
        <p><?php echo $ourHouseTexte[$lang]['para_intro_2']; ?></p>
        <p><?php echo $ourHouseTexte[$lang]['para_intro_3']; ?></p>

        <!-- Aufenthaltsraum Bilder -->
        <figure>
          <a data-fancybox="galerie1"
             href="Bilder/aufenthaltsraum/aufenthalt2.jpg"
             data-fancybox-caption="<?php echo $ourHouseTexte[$lang]['img_room1_cap']; ?>"
          >
            <img
              src="Bilder/aufenthaltsraum/aufenthalt2thumb.jpg"
              alt="<?php echo $ourHouseTexte[$lang]['img_room1_alt']; ?>"
            >
          </a>
          <figcaption><?php echo $ourHouseTexte[$lang]['img_room1_cap']; ?></figcaption>
        </figure>

        <figure>
          <a data-fancybox="galerie1"
             href="Bilder/aufenthaltsraum/aufenthalt.jpg"
             data-fancybox-caption="<?php echo $ourHouseTexte[$lang]['img_room2_cap']; ?>"
          >
            <img
              src="Bilder/aufenthaltsraum/aufenthaltthumb.jpg"
              alt="<?php echo $ourHouseTexte[$lang]['img_room2_alt']; ?>"
            >
          </a>
          <figcaption><?php echo $ourHouseTexte[$lang]['img_room2_cap']; ?></figcaption>
        </figure>

        <!-- NEU: Abschnitt über den Aufenthaltsraum -->
        <h2><?php echo $ourHouseTexte[$lang]['heading_common_room']; ?></h2>
        <p><?php echo $ourHouseTexte[$lang]['para_common_room']; ?></p>
        <figure>
          <a data-fancybox="galerie1"
             href="Bilder/unser-haus/sicht-haus.JPG"
             data-fancybox-caption="<?php echo $ourHouseTexte[$lang]['img_haus_sicht1_cap']; ?>"
          >
            <img
              src="Bilder/unser-haus/sicht-haus-thump.jpg"
              alt="<?php echo $ourHouseTexte[$lang]['img_haus_sicht1_alt']; ?>"
            >
          </a>
          <figcaption><?php echo $ourHouseTexte[$lang]['img_haus_sicht1_alt']; ?></figcaption>
        </figure>
        <figure>
          <a data-fancybox="galerie1"
             href="Bilder/unser-haus/grillecke.JPG"
             data-fancybox-caption="<?php echo $ourHouseTexte[$lang]['img_grillecke_cap']; ?>"
          >
            <img
              src="Bilder/unser-haus/grilleckeklein.jpg"
              alt="<?php echo $ourHouseTexte[$lang]['img_grillecke_alt']; ?>"
            >
          </a>
          <figcaption><?php echo $ourHouseTexte[$lang]['img_grillecke_alt']; ?></figcaption>
        </figure>
        <figure>
          <a data-fancybox="galerie1"
             href="Bilder/unser-haus/sicht-haus2.jpg"
             data-fancybox-caption="<?php echo $ourHouseTexte[$lang]['img_haus_sicht2_cap']; ?>"
          >
            <img
              src="Bilder/unser-haus/sicht-haus2-klein.jpg"
              alt="<?php echo $ourHouseTexte[$lang]['img_haus_sicht2_alt']; ?>"
            >
          </a>
          <figcaption><?php echo $ourHouseTexte[$lang]['img_haus_sicht2_alt']; ?></figcaption>
        </figure>
        <figure>
          <a data-fancybox="galerie1"
             href="Bilder/unser-haus/sicht-haus3.jpg"
             data-fancybox-caption="<?php echo $ourHouseTexte[$lang]['img_haus_sicht3_cap']; ?>"
          >
            <img
              src="Bilder/unser-haus/sicht-haus3-klein.jpg"
              alt="<?php echo $ourHouseTexte[$lang]['img_haus_sicht3_alt']; ?>"
            >
          </a>
          <figcaption><?php echo $ourHouseTexte[$lang]['img_haus_sicht3_alt']; ?></figcaption>
        </figure>
        <!-- Zweite Überschrift -->
        <h2><?php echo $ourHouseTexte[$lang]['heading_h2']; ?></h2>

        <p><strong><?php echo $ourHouseTexte[$lang]['text_one_room']; ?></strong></p>
        <p><strong><?php echo $ourHouseTexte[$lang]['text_four_apts']; ?></strong></p>

        <!-- Liste 1 -->
        <ul>
          <?php foreach ($ourHouseTexte[$lang]['list_equipment_1'] as $item): ?>
            <li><?php echo $item; ?></li>
          <?php endforeach; ?>
        </ul>

        <!-- Liste 2 -->
        <ul>
          <?php foreach ($ourHouseTexte[$lang]['list_equipment_2'] as $item): ?>
            <li><?php echo $item; ?></li>
          <?php endforeach; ?>
        </ul>

        <!-- Liste 3 -->
        <ul>
          <?php foreach ($ourHouseTexte[$lang]['list_equipment_3'] as $item): ?>
            <li><?php echo $item; ?></li>
          <?php endforeach; ?>
        </ul>

      </section>
    </article>
    <aside>
      <?php include('include/side.php'); ?>
    </aside>
  </div>
</main>

<footer>
  <?php include('include/footer.php'); ?>
</footer>

<?php include('include/javainclude.php'); ?>
</body>
</html>