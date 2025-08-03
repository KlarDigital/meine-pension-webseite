<?php
// Sprachdatei laden
require_once('include/sprache-aktivitaeten.php');
?>
<!doctype html>
<html class="no-js" prefix="dc: http://purl.org/dc/elements/1.1/" lang="<?php echo $aktivTexte[$lang]['html_lang']; ?>">
<head>
  <?php include('include/meta.php'); ?>
</head>
<body>
<header>
  <?php include('include/head.php'); ?>
</header>

<div id="sliderglobal">
  <div id="sliderinhaltglobal">
    <img
      src="Bilder/banner-header/banner-sommer.webp"
      width="1200"
      height="800"
      alt="<?php echo $aktivTexte[$lang]['banner_img_alt']; ?>"
    >
  </div>
</div>

<nav id="mainmenu" class="mainmenu" itemscope itemtype="https://schema.org/SiteNavigationElement">
  <?php include('include/nav.php'); ?>
</nav>

<main id="content">
  <div class="contentinhalt clearfix">
    <article id="leftblock">

      <!-- Hauptüberschrift -->
      <h1><?php echo $aktivTexte[$lang]['main_h1']; ?></h1>

      <!-- Intro-Bereich -->
      <section class="intro-text">
        <h2><?php echo $aktivTexte[$lang]['intro_h2']; ?></h2>
        <p>
          <?php echo $aktivTexte[$lang]['intro_text']; ?>
          <br><br>
          Die Tiroler Zugspitz Arena begeistert Gäste mit ihrem weitläufigen Panorama und ihrer Vielzahl an Freizeitmöglichkeiten –
          ob Sommer oder Winter, hier findet jeder seine Lieblingsaktivität!
        </p>
        <img
          class="teaserbild"
          src="Bilder/zugspitzarena/sommer/zugspitze-panorama-sommer.jpg"
          width="790"
          height="220"
          alt="<?php echo $aktivTexte[$lang]['intro_teaser_img_alt']; ?>"
        >
      </section>

      <!-- Sommer-Vorschau Kacheln -->
      <h2><?php echo $aktivTexte[$lang]['heading_sommer']; ?></h2>
      <ul class="vorschaubox">
        <li>
          <a href="#schwimmen">
            <img
              src="Bilder/zugspitzarena/sommer/thump-links/schwimmen-lermoos-panorama.jpg"
              width="230"
              height="154"
              alt="<?php echo $aktivTexte[$lang]['sommer_tiles']['schwimmen_alt']; ?>"
            >
            <h2><?php echo $aktivTexte[$lang]['sommer_tiles']['schwimmen_title']; ?></h2>
          </a>
        </li>
        <li>
          <a href="#wandern">
            <img
              src="Bilder/zugspitzarena/sommer/thump-links/wandern-bichlbach-berwang.jpg"
              width="230"
              height="150"
              alt="<?php echo $aktivTexte[$lang]['sommer_tiles']['wandern_alt']; ?>"
            >
            <h2><?php echo $aktivTexte[$lang]['sommer_tiles']['wandern_title']; ?></h2>
          </a>
        </li>
        <li>
          <a href="#golf">
            <img
              src="Bilder/zugspitzarena/sommer/thump-links/golf-zuzgspitze.jpg"
              width="230"
              height="154"
              alt="<?php echo $aktivTexte[$lang]['sommer_tiles']['golf_alt']; ?>"
            >
            <h2><?php echo $aktivTexte[$lang]['sommer_tiles']['golf_title']; ?></h2>
          </a>
        </li>
        <li>
          <a href="#schiff">
            <img
              src="Bilder/zugspitzarena/sommer/thump-links/heiterwangersee-schiff.jpg"
              width="230"
              height="154"
              alt="<?php echo $aktivTexte[$lang]['sommer_tiles']['schiff_alt']; ?>"
            >
            <h2><?php echo $aktivTexte[$lang]['sommer_tiles']['schiff_title']; ?></h2>
          </a>
        </li>
        <li>
          <a href="#canyoning">
            <img
              src="Bilder/zugspitzarena/sommer/thump-links/cayoning-mit-der-alpinschule-lermoos.jpg"
              width="230"
              height="154"
              alt="<?php echo $aktivTexte[$lang]['sommer_tiles']['canyoning_alt']; ?>"
            >
            <h2><?php echo $aktivTexte[$lang]['sommer_tiles']['canyoning_title']; ?></h2>
          </a>
        </li>
        <li>
          <a href="#familienurlaub">
            <img
              src="Bilder/zugspitzarena/sommer/thump-links/familienurlaub-zugspitze-ehrwald.jpg"
              width="230"
              height="150"
              alt="<?php echo $aktivTexte[$lang]['sommer_tiles']['familie_alt']; ?>"
            >
            <h2><?php echo $aktivTexte[$lang]['sommer_tiles']['familie_title']; ?></h2>
          </a>
        </li>
        <li>
          <a href="#ausflugsziele">
            <img
              src="Bilder/zugspitzarena/sommer/thump-links/schloss-neuschwanstein.jpg"
              width="230"
              height="144"
              alt="<?php echo $aktivTexte[$lang]['sommer_tiles']['ausflug_alt']; ?>"
            >
            <h2><?php echo $aktivTexte[$lang]['sommer_tiles']['ausflug_title']; ?></h2>
          </a>
        </li>
        <li>
          <a href="#biken">
            <img
              src="Bilder/zugspitzarena/sommer/thump-links/bike-zugspitze-tirol.jpg"
              width="230"
              height="154"
              alt="<?php echo $aktivTexte[$lang]['sommer_tiles']['bike_alt']; ?>"
            >
            <h2><?php echo $aktivTexte[$lang]['sommer_tiles']['bike_title']; ?></h2>
          </a>
        </li>
      </ul>

      <!-- Winter-Vorschau Kacheln -->
      <h2><?php echo $aktivTexte[$lang]['heading_winter']; ?></h2>
      <ul class="vorschaubox">
        <li>
          <a href="#skifahren">
            <img
              src="Bilder/zugspitzarena/winter/thump-links/ehrwalder-alm-skipause.jpg"
              width="230"
              height="153"
              alt="<?php echo $aktivTexte[$lang]['winter_tiles']['ski_alt']; ?>"
            >
            <h2><?php echo $aktivTexte[$lang]['winter_tiles']['ski_title']; ?></h2>
          </a>
        </li>
        <li>
          <a href="#langlaufen">
            <img
              src="Bilder/zugspitzarena/winter/thump-links/langlaufen-zugspitzarena.jpg"
              width="230"
              height="153"
              alt="<?php echo $aktivTexte[$lang]['winter_tiles']['langlauf_alt']; ?>"
            >
            <h2><?php echo $aktivTexte[$lang]['winter_tiles']['langlauf_title']; ?></h2>
          </a>
        </li>
        <li>
          <a href="#skischule">
            <img
              src="Bilder/zugspitzarena/winter/thump-links/grubigstein-skischule-kinder.jpg"
              width="230"
              height="153"
              alt="<?php echo $aktivTexte[$lang]['winter_tiles']['skischule_alt']; ?>"
            >
            <h2><?php echo $aktivTexte[$lang]['winter_tiles']['skischule_title']; ?></h2>
          </a>
        </li>
        <li>
          <a href="#rodeln">
            <img
              src="Bilder/zugspitzarena/winter/thump-links/familie-schlittenfahren-zugspitzarena.jpg"
              width="230"
              height="153"
              alt="<?php echo $aktivTexte[$lang]['winter_tiles']['rodeln_alt']; ?>"
            >
            <h2><?php echo $aktivTexte[$lang]['winter_tiles']['rodeln_title']; ?></h2>
          </a>
        </li>
        <li>
          <a href="#winterfamilie">
            <img
              src="Bilder/zugspitzarena/winter/thump-links/nachtwandern-berwang-zugspitzarena.jpg"
              width="230"
              height="153"
              alt="<?php echo $aktivTexte[$lang]['winter_tiles']['winterfamilie_alt']; ?>"
            >
            <h2><?php echo $aktivTexte[$lang]['winter_tiles']['winterfamilie_title']; ?></h2>
          </a>
        </li>
      </ul>

      <!-- Impression-Überschrift -->
      <h2><?php echo $aktivTexte[$lang]['heading_impression']; ?></h2>

      <!-- Erste Media-Liste -->
      <ul class="media">
        <?php foreach ($aktivTexte[$lang]['media_items'] as $item): ?>
          <li>
            <h3><?php echo $item['title']; ?></h3>
            <iframe
              width="560"
              height="315"
              src="<?php echo $item['youtube']; ?>"
              allowfullscreen
            ></iframe>
          </li>
        <?php endforeach; ?>
      </ul>

      <!-- Zweite Media-Liste -->
      <ul class="media">
        <?php foreach ($aktivTexte[$lang]['media_items2'] as $item): ?>
          <li>
            <h3><?php echo $item['title']; ?></h3>
            <iframe
              width="560"
              height="315"
              src="<?php echo $item['youtube']; ?>"
              allowfullscreen
            ></iframe>
          </li>
        <?php endforeach; ?>
      </ul>

      <!-- Accordion -->
      <div class="accordion">

        <!-- 1) Familienurlaub -->
        <div class="accordion-item">
          <div class="accordion-header">
            <button class="accordion-button" type="button">
              <i class="fa fa-map-signs me-2"></i>
              <span><?php echo $aktivTexte[$lang]['acc_familien_title']; ?></span>
            </button>
          </div>
          <div class="accordion-content">
            <div class="accordion-body">
              <a id="familienurlaub"></a>
              <h2><?php echo $aktivTexte[$lang]['acc_familien_h2']; ?></h2>

              <section>
                <h3><?php echo $aktivTexte[$lang]['acc_familien_sect1_h3']; ?></h3>
                <p><?php echo $aktivTexte[$lang]['acc_familien_sect1_text']; ?></p>
                <img
                  src="Bilder/zugspitzarena/sommer/sonnenaufgangsfahrt-zugspitzbahn.jpeg"
                  width="280"
                  height="187"
                  alt="<?php echo $aktivTexte[$lang]['acc_familien_sect1_img_alt']; ?>"
                >
              </section>

              <section>
                <h3><?php echo $aktivTexte[$lang]['acc_familien_sect2_h3']; ?></h3>
                <p><?php echo $aktivTexte[$lang]['acc_familien_sect2_text']; ?></p>
                <ul>
                  <?php foreach ($aktivTexte[$lang]['acc_familien_sect2_list'] as $bullet): ?>
                    <li><?php echo $bullet; ?></li>
                  <?php endforeach; ?>
                </ul>
                <h4><?php echo $aktivTexte[$lang]['acc_familien_sect2_opening']; ?></h4>
                <p>
                  <a href="http://www.streichelzoo.com" target="_blank">www.streichelzoo.com</a>
                </p>
              </section>

              <section>
                <h3><?php echo $aktivTexte[$lang]['acc_familien_sect3_h3']; ?></h3>
                <ul>
                  <?php foreach ($aktivTexte[$lang]['acc_familien_sect3_list'] as $item): ?>
                    <li><?php echo $item; ?></li>
                  <?php endforeach; ?>
                </ul>
                <img
                  src="Bilder/zugspitzarena/sommer/kletterwald-bichlbach.jpg"
                  width="280"
                  height="187"
                  alt="<?php echo $aktivTexte[$lang]['acc_familien_sect3_img1_alt']; ?>"
                >
                <img
                  src="Bilder/zugspitzarena/sommer/raftinganlage-badeteich-bichlbach.jpg"
                  width="280"
                  height="187"
                  alt="<?php echo $aktivTexte[$lang]['acc_familien_sect3_img2_alt']; ?>"
                >
              </section>

              <section>
                <h3><?php echo $aktivTexte[$lang]['acc_familien_sect4_h3']; ?></h3>
                <p><?php echo $aktivTexte[$lang]['acc_familien_sect4_text']; ?></p>
                <p><a href="http://www.highline179.com" target="_blank">www.highline179.com</a></p>
              </section>

              <section>
                <h3><?php echo $aktivTexte[$lang]['acc_familien_sect5_h3']; ?></h3>
                <p><?php echo $aktivTexte[$lang]['acc_familien_sect5_text']; ?></p>
              </section>
            </div>
          </div>
        </div>

        <!-- 2) Ausflugsziele -->
        <div class="accordion-item">
          <div class="accordion-header">
            <button class="accordion-button" type="button">
              <i class="fa fa-map-signs me-2"></i>
              <span><?php echo $aktivTexte[$lang]['acc_ausflug_title']; ?></span>
            </button>
          </div>
          <div class="accordion-content">
            <div class="accordion-body">
              <a id="ausflugsziele"></a>
              <h2><?php echo $aktivTexte[$lang]['acc_ausflug_h2']; ?></h2>

              <section>
                <h3><?php echo $aktivTexte[$lang]['acc_ausflug_ehrenberg_h3']; ?></h3>
                <p>
                  <a href="<?php echo $aktivTexte[$lang]['acc_ausflug_ehrenberg_link']; ?>" target="_blank">
                    <?php echo $aktivTexte[$lang]['acc_ausflug_ehrenberg_link']; ?>
                  </a>
                </p>
              </section>

              <section>
                <h3><?php echo $aktivTexte[$lang]['acc_ausflug_linderhof_h3']; ?></h3>
                <p><a href="http://www.linderhof.de" target="_blank">www.linderhof.de</a></p>
              </section>

              <section>
                <h3><?php echo $aktivTexte[$lang]['acc_ausflug_neuschwanstein_h3']; ?></h3>
                <p><a href="http://www.neuschwanstein.de" target="_blank">www.neuschwanstein.de</a></p>
              </section>

              <section>
                <h3><?php echo $aktivTexte[$lang]['acc_ausflug_hohenschwangau_h3']; ?></h3>
                <p><a href="http://www.hohenschwangau.de" target="_blank">www.hohenschwangau.de</a></p>
              </section>

              <section>
                <h3><?php echo $aktivTexte[$lang]['acc_ausflug_ettal_h3']; ?></h3>
                <p><a href="http://www.abtei.kloster-ettal.de" target="_blank">www.abtei.kloster-ettal.de</a></p>
              </section>

              <section>
                <h3><?php echo $aktivTexte[$lang]['acc_ausflug_swarovski_h3']; ?></h3>
                <p><a href="http://www.kristallwelten.swarovski.com" target="_blank">www.kristallwelten.swarovski.com</a></p>
              </section>

              <section>
                <h3><?php echo $aktivTexte[$lang]['acc_ausflug_silber_h3']; ?></h3>
                <p><a href="http://www.silberbergwerk.at" target="_blank">www.silberbergwerk.at</a></p>
              </section>

              <section>
                <h3><?php echo $aktivTexte[$lang]['acc_ausflug_oetzi_h3']; ?></h3>
                <p><a href="http://www.oetzi-dorf.at" target="_blank">www.oetzi-dorf.at</a></p>
              </section>

            </div>
          </div>
        </div>

        <!-- 3) Golf -->
        <div class="accordion-item">
          <div class="accordion-header">
            <button class="accordion-button" type="button">
              <i class="fa fa-futbol-o me-2"></i>
              <span><?php echo $aktivTexte[$lang]['acc_golf_title']; ?></span>
            </button>
          </div>
          <div class="accordion-content">
            <div class="accordion-body">
              <a id="golf"></a>
              <h2><?php echo $aktivTexte[$lang]['acc_golf_h2']; ?></h2>

              <section>
                <h3><?php echo $aktivTexte[$lang]['acc_golf_sect1_h3']; ?></h3>
                <p><?php echo $aktivTexte[$lang]['acc_golf_sect1_text']; ?></p>
                <img
                  src="Bilder/zugspitzarena/sommer/golf-zugspitzarena-abschlag.jpg"
                  width="280"
                  height="187"
                  alt="<?php echo $aktivTexte[$lang]['acc_golf_img1_alt']; ?>"
                >
                <img
                  src="Bilder/zugspitzarena/sommer/golf-zugspitzarena-abschlag-loch-3.jpg"
                  width="280"
                  height="187"
                  alt="<?php echo $aktivTexte[$lang]['acc_golf_img2_alt']; ?>"
                >
              </section>
            </div>
          </div>
        </div>

        <!-- 4) Biken -->
        <div class="accordion-item">
          <div class="accordion-header">
            <button class="accordion-button" type="button">
              <i class="fa fa-bicycle me-2"></i>
              <span><?php echo $aktivTexte[$lang]['acc_bike_title']; ?></span>
            </button>
          </div>
          <div class="accordion-content">
            <div class="accordion-body">
              <a id="biken"></a>
              <h2><?php echo $aktivTexte[$lang]['acc_bike_h2']; ?></h2>

              <section>
                <h3><?php echo $aktivTexte[$lang]['acc_bike_sect1_h3']; ?></h3>
                <p><?php echo $aktivTexte[$lang]['acc_bike_sect1_text']; ?></p>
                <img
                  src="Bilder/zugspitzarena/sommer/bike-berg-zugspitzarena-blindsee.jpg"
                  width="280"
                  height="187"
                  alt="<?php echo $aktivTexte[$lang]['placeholder_bike_alt']; ?>"
                >
              </section>

              <section>
                <h2><?php echo $aktivTexte[$lang]['acc_bike_sect2_h2']; ?></h2>
                <p><?php echo $aktivTexte[$lang]['acc_bike_sect2_text']; ?></p>
                <img
                  src="Bilder/zugspitzarena/sommer/bike-rast-am-see.jpg"
                  width="280"
                  height="187"
                  alt="<?php echo $aktivTexte[$lang]['acc_bike_img3_alt']; ?>"
                >
                <img
                  src="Bilder/zugspitzarena/sommer/bike-berg-zugspitzarena.jpg"
                  width="280"
                  height="187"
                  alt="<?php echo $aktivTexte[$lang]['acc_bike_img4_alt']; ?>"
                >
              </section>
            </div>
          </div>
        </div>

        <!-- 5) Schwimmen -->
        <div class="accordion-item">
          <div class="accordion-header">
            <button class="accordion-button" type="button">
              <i class="fa fa-tint me-2"></i>
              <span><?php echo $aktivTexte[$lang]['acc_schwimmen_title']; ?></span>
            </button>
          </div>
          <div class="accordion-content">
            <div class="accordion-body">
              <a id="schwimmen"></a>
              <h2><?php echo $aktivTexte[$lang]['acc_schwimmen_h2']; ?></h2>

              <section>
                <h3><?php echo $aktivTexte[$lang]['acc_schwimmen_sect1_h3']; ?></h3>
                <p><?php echo $aktivTexte[$lang]['acc_schwimmen_sect1_text']; ?></p>
                <img
                  src="Bilder/zugspitzarena/sommer/heiterwanger_see.jpg"
                  width="280"
                  height="187"
                  alt="<?php echo $aktivTexte[$lang]['placeholder_schwimmen_alt']; ?>"
                >
              </section>

              <section>
                <h3><?php echo $aktivTexte[$lang]['acc_schwimmen_sect2_h3']; ?></h3>
                <p><?php echo $aktivTexte[$lang]['acc_schwimmen_sect2_text']; ?></p>
              </section>

              <section>
                <h3><?php echo $aktivTexte[$lang]['acc_schwimmen_sect3_h3']; ?></h3>
                <p><?php echo $aktivTexte[$lang]['acc_schwimmen_sect3_text']; ?></p>
              </section>

              <section id="schiff">
                <h3><?php echo $aktivTexte[$lang]['acc_schwimmen_sect4_h3']; ?></h3>
                <p><?php echo $aktivTexte[$lang]['acc_schwimmen_sect4_text']; ?></p>
              </section>

              <section id="canyoning">
                <h3><?php echo $aktivTexte[$lang]['acc_schwimmen_sect5_h3']; ?></h3>
                <p><?php echo $aktivTexte[$lang]['acc_schwimmen_sect5_text']; ?></p>
              </section>
            </div>
          </div>
        </div>

        <!-- 6) Wandern -->
        <div class="accordion-item">
          <div class="accordion-header">
            <button class="accordion-button" type="button">
              <i class="fa fa-users me-2"></i>
              <span><?php echo $aktivTexte[$lang]['acc_wandern_title']; ?></span>
            </button>
          </div>
          <div class="accordion-content">
            <div class="accordion-body">
              <a id="wandern"></a>
              <h2><?php echo $aktivTexte[$lang]['acc_wandern_h2']; ?></h2>

              <section>
                <h3><?php echo $aktivTexte[$lang]['acc_wandern_sect1_h3']; ?></h3>
                <p><?php echo $aktivTexte[$lang]['acc_wandern_sect1_text']; ?></p>
                <img
                  src="Bilder/zugspitzarena/sommer/wandern-zugspitzarena.jpg"
                  width="280"
                  height="187"
                  alt="<?php echo $aktivTexte[$lang]['placeholder_wandern_alt']; ?>"
                >
              </section>

              <section>
                <h3><?php echo $aktivTexte[$lang]['acc_wandern_sect2_h3']; ?></h3>
                <p><?php echo $aktivTexte[$lang]['acc_wandern_sect2_text']; ?></p>
                <img
                  src="Bilder/zugspitzarena/sommer/wandern-zugspitzarena3.jpg"
                  width="280"
                  height="187"
                  alt="<?php echo $aktivTexte[$lang]['acc_wandern_img5_alt']; ?>"
                >
              </section>
            </div>
          </div>
        </div>

        <!-- 7) Winteraktivitäten -->
        <div class="accordion-item">
          <div class="accordion-header">
            <button class="accordion-button" type="button">
              <i class="fa fa-snowflake-o me-2"></i>
              <span><?php echo $aktivTexte[$lang]['acc_winterfamilie_title']; ?></span>
            </button>
          </div>
          <div class="accordion-content">
            <div class="accordion-body">
              <a id="winterfamilie"></a>
              <h2><?php echo $aktivTexte[$lang]['acc_winterfamilie_h2']; ?></h2>

              <section>
                <h3><?php echo $aktivTexte[$lang]['acc_winterfamilie_sect1_h3']; ?></h3>
                <p><?php echo $aktivTexte[$lang]['acc_winterfamilie_sect1_text']; ?></p>
              </section>

              <section>
                <h3><?php echo $aktivTexte[$lang]['acc_winterfamilie_sect2_h3']; ?></h3>
                <p><?php echo $aktivTexte[$lang]['acc_winterfamilie_sect2_text']; ?></p>
              </section>

              <section>
                <h3><?php echo $aktivTexte[$lang]['acc_winterfamilie_sect3_h3']; ?></h3>
                <p><?php echo $aktivTexte[$lang]['acc_winterfamilie_sect3_text']; ?></p>
              </section>

              <section>
                <h3><?php echo $aktivTexte[$lang]['acc_winterfamilie_sect4_h3']; ?></h3>
                <p><?php echo $aktivTexte[$lang]['acc_winterfamilie_sect4_text']; ?></p>
              </section>

              <section>
                <h3><?php echo $aktivTexte[$lang]['acc_winterfamilie_sect5_h3']; ?></h3>
                <p><?php echo $aktivTexte[$lang]['acc_winterfamilie_sect5_text']; ?></p>
              </section>

              <section>
                <h3><?php echo $aktivTexte[$lang]['acc_winterfamilie_sect6_h3']; ?></h3>
              </section>
            </div>
          </div>
        </div>

        <!-- 8) Langlaufen -->
        <div class="accordion-item">
          <div class="accordion-header">
            <button class="accordion-button" type="button">
              <i class="fa fa-snowflake-o me-2"></i>
              <span><?php echo $aktivTexte[$lang]['acc_langlaufen_title']; ?></span>
            </button>
          </div>
          <div class="accordion-content">
            <div class="accordion-body">
              <a id="langlaufen"></a>
              <h2><?php echo $aktivTexte[$lang]['acc_langlaufen_h2']; ?></h2>
              <section>
                <h3><?php echo $aktivTexte[$lang]['acc_langlaufen_sect1_h3']; ?></h3>
                <p><?php echo $aktivTexte[$lang]['acc_langlaufen_sect1_text']; ?></p>

                <img
                  src="Bilder/zugspitzarena/winter/langlaufen-tiroler-zugspitzarena.jpg"
                  width="280"
                  height="181"
                  alt="<?php echo $aktivTexte[$lang]['placeholder_langlaufen_alt']; ?>"
                >
              </section>
            </div>
          </div>
        </div>

        <!-- 9) Rodeln -->
        <div class="accordion-item">
          <div class="accordion-header">
            <button class="accordion-button" type="button">
              <i class="fa fa-truck me-2"></i>
              <span><?php echo $aktivTexte[$lang]['acc_rodeln_title']; ?></span>
            </button>
          </div>
          <div class="accordion-content">
            <div class="accordion-body">
              <a id="rodeln"></a>
              <h2><?php echo $aktivTexte[$lang]['acc_rodeln_h2']; ?></h2>
              <section>
                <h3><?php echo $aktivTexte[$lang]['acc_rodeln_sect1_h3']; ?></h3>
                <p><?php echo $aktivTexte[$lang]['acc_rodeln_sect1_text']; ?></p>
              </section>

              <section>
                <h3><?php echo $aktivTexte[$lang]['acc_rodeln_sect2_h3']; ?></h3>
                <p><?php echo $aktivTexte[$lang]['acc_rodeln_sect2_text']; ?></p>
              </section>

              <section>
                <h3><?php echo $aktivTexte[$lang]['acc_rodeln_sect3_h3']; ?></h3>
                <p><?php echo $aktivTexte[$lang]['acc_rodeln_sect3_text']; ?></p>

                <img
                  src="Bilder/zugspitzarena/winter/rodeln-ins-tal-zugspitzarena.jpg"
                  width="280"
                  height="187"
                  alt="<?php echo $aktivTexte[$lang]['placeholder_rodeln_alt']; ?>"
                >
              </section>
            </div>
          </div>
        </div>

        <!-- 10) Skifahren -->
        <div class="accordion-item">
          <div class="accordion-header">
            <button class="accordion-button" type="button">
              <i class="fa fa-snowflake-o me-2"></i>
              <span><?php echo $aktivTexte[$lang]['acc_skifahren_title']; ?></span>
            </button>
          </div>
          <div class="accordion-content">
            <div class="accordion-body">
              <a id="skifahren"></a>
              <h2><?php echo $aktivTexte[$lang]['acc_skifahren_h2']; ?></h2>

              <section>
                <h3><?php echo $aktivTexte[$lang]['acc_skifahren_sect1_h3']; ?></h3>
                <p><?php echo $aktivTexte[$lang]['acc_skifahren_sect1_text']; ?></p>
              </section>

              <section id="skischule">
                <h2><?php echo $aktivTexte[$lang]['acc_skifahren_sect2_h2']; ?></h2>
                <p><?php echo $aktivTexte[$lang]['acc_skifahren_sect2_text']; ?></p>
                <ul>
                  <?php foreach ($aktivTexte[$lang]['acc_skifahren_sect2_list'] as $line): ?>
                    <li><?php echo $line; ?></li>
                  <?php endforeach; ?>
                </ul>
              </section>

              <section id="liftanlagen">
                <h3><?php echo $aktivTexte[$lang]['acc_skifahren_sect3_h3']; ?></h3>
                <p><?php echo $aktivTexte[$lang]['acc_skifahren_sect3_text']; ?></p>
                <p>
                  <a class="various" href="https://winter.intermaps.com/zugspitz_arena" target="_blank">
                    &gt;&gt; interaktive Skimap
                  </a>
                </p>

                <img
                  src="Bilder/zugspitzarena/winter/skifahren.jpg"
                  width="280"
                  height="215"
                  alt="<?php echo $aktivTexte[$lang]['placeholder_skifahren_alt']; ?>"
                >
              </section>
            </div>
          </div>
        </div>

        <!-- 11) Z-Ticket -->
        <div class="accordion-item">
          <div class="accordion-header">
            <button class="accordion-button" type="button">
              <i class="fa fa-ticket me-2"></i>
              <span><?php echo $aktivTexte[$lang]['acc_zticket_title']; ?></span>
            </button>
          </div>
          <div class="accordion-content">
            <div class="accordion-body">
              <a id="zticket"></a>
              <h2><?php echo $aktivTexte[$lang]['acc_zticket_h2']; ?></h2>
              <p><?php echo $aktivTexte[$lang]['acc_zticket_text']; ?></p>
              <img
                src="Bilder/zugspitzarena/sommer/heiterwangersee.jpg"
                width="280"
                height="187"
                alt="<?php echo $aktivTexte[$lang]['placeholder_zticket_alt']; ?>"
              >
            </div>
          </div>
        </div>

        <!-- 12) Klettersteige -->
        <div class="accordion-item">
          <div class="accordion-header">
            <button class="accordion-button" type="button">
              <i class="fa fa-anchor me-2"></i>
              <span><?php echo $aktivTexte[$lang]['acc_klettersteige_title']; ?></span>
            </button>
          </div>
          <div class="accordion-content">
            <div class="accordion-body">
              <a id="klettersteige"></a>
              <h2><?php echo $aktivTexte[$lang]['acc_klettersteige_h2']; ?></h2>
              <p><?php echo $aktivTexte[$lang]['acc_klettersteige_text']; ?></p>
              <img
                src="Bilder/zugspitzarena/sommer/klettern-am-wasserfall.jpg"
                width="280"
                height="187"
                alt="<?php echo $aktivTexte[$lang]['placeholder_klettersteig_alt']; ?>"
              >
            </div>
          </div>
        </div>

        <!-- 13) Events -->
        <div class="accordion-item">
          <div class="accordion-header">
            <button class="accordion-button" type="button">
              <i class="fa fa-calendar me-2"></i>
              <span><?php echo $aktivTexte[$lang]['acc_events_title']; ?></span>
            </button>
          </div>
          <div class="accordion-content">
            <div class="accordion-body">
              <a id="events"></a>
              <h2><?php echo $aktivTexte[$lang]['acc_events_h2']; ?></h2>
              <p><?php echo $aktivTexte[$lang]['acc_events_text']; ?></p>
              <ul>
                <?php foreach ($aktivTexte[$lang]['acc_events_list'] as $eventItem): ?>
                  <li><?php echo $eventItem; ?></li>
                <?php endforeach; ?>
              </ul>
              <img
                src="Bilder/zugspitzarena/sommer/almabtrieb_lermoos.jpg"
                width="280"
                height="187"
                alt="<?php echo $aktivTexte[$lang]['placeholder_events_alt']; ?>"
              >
            </div>
          </div>
        </div>

        <!-- 14) Paragliding -->
        <div class="accordion-item">
          <div class="accordion-header">
            <button class="accordion-button" type="button">
              <i class="fa fa-plane me-2"></i>
              <span><?php echo $aktivTexte[$lang]['acc_paragliding_title']; ?></span>
            </button>
          </div>
          <div class="accordion-content">
            <div class="accordion-body">
              <a id="paragliding"></a>
              <h2><?php echo $aktivTexte[$lang]['acc_paragliding_h2']; ?></h2>
              <p><?php echo $aktivTexte[$lang]['acc_paragliding_text']; ?></p>
              <img
                src="Bilder/zugspitzarena/sommer/ParaglidingLermoos.webp"
                width="280"
                height="187"
                alt="<?php echo $aktivTexte[$lang]['placeholder_paragliding_alt']; ?>"
              >
            </div>
          </div>
        </div>

      </div> <!-- Ende Accordion -->
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

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const accordionButtons = document.querySelectorAll(".accordion-button");

    accordionButtons.forEach((button) => {
      button.addEventListener("click", function () {
        const content = this.closest(".accordion-item").querySelector(".accordion-content");

        // Alle anderen Accordion-Inhalte schließen
        accordionButtons.forEach((otherButton) => {
          if (otherButton !== button) {
            const otherContent = otherButton.closest(".accordion-item").querySelector(".accordion-content");
            otherContent.style.maxHeight = "0";
            otherContent.classList.remove("active");
          }
        });

        // Aktuellen Accordion-Inhalt toggeln
        if (content.style.maxHeight === "0px" || content.style.maxHeight === "") {
          content.style.maxHeight = content.scrollHeight + "px";
          content.classList.add("active");
        } else {
          content.style.maxHeight = "0";
          content.classList.remove("active");
        }
      });
    });
  });
</script>
</body>
</html>
