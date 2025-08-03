<?php include ('include/sprache-inklusivleistungen.php'); ?>
<!doctype html>
<html class="no-js" prefix="dc: http://purl.org/dc/elements/1.1/" lang="<?php echo $lang; ?>">
<head>
  <?php include ('include/meta.php'); ?>
</head>
<body>
<header>
  <?php include ('include/head.php'); ?>
</header>

<div id="sliderglobal">
  <div id="sliderinhaltglobal">
    <img
      src="Bilder/banner-header/banner-inklusiv.webp"
      width="1200"
      height="800"
      alt="<?php echo $inklTexte[$lang]['slider_img_alt']; ?>"
    >
  </div>
</div>

<nav id="mainmenu" class="mainmenu" itemscope itemtype="http://schema.org/SiteNavigationElement">
  <?php include ('include/nav.php'); ?>
</nav>

<main id="content">
  <div class="contentinhalt clearfix">
    <article id="leftblock">

      <!-- Hauptüberschrift -->
      <h1><?php echo $inklTexte[$lang]['page_h1']; ?></h1>

      <!-- Einleitender Text -->
      <section>
        <p><?php echo $inklTexte[$lang]['teaser_text']; ?></p>
      </section>

      <section>
        <div>
          <div>
            <div>
              <div>
                <div>
                  <!-- Überschrift -->
                  <h3><?php echo $inklTexte[$lang]['headline_vorteile']; ?></h3>
                </div>
                <h2 id="toc-entry-target-1" tabindex="-1">
                  <?php echo $inklTexte[$lang]['headline_inklusiv']; ?>
                </h2>
              </div>
            </div>
          </div>

          <!-- Box 1 (Verkehrsmittel, geführte Wanderungen) -->
          <div>
            <div>
              <div class="box">
                <div>
                  <p><?php echo $inklTexte[$lang]['box1_block1']; ?></p>
                  <ul><?php echo $inklTexte[$lang]['box1_list1']; ?></ul>

                  <p><?php echo $inklTexte[$lang]['box1_block2']; ?></p>
                  <ul><?php echo $inklTexte[$lang]['box1_list2']; ?></ul>

                  <p><?php echo $inklTexte[$lang]['box1_block3']; ?></p>
                  <ul><?php echo $inklTexte[$lang]['box1_list3']; ?></ul>

                  <p><?php echo $inklTexte[$lang]['box1_block4']; ?></p>
                  <ul><?php echo $inklTexte[$lang]['box1_list4']; ?></ul>

                  <p><?php echo $inklTexte[$lang]['box1_block5']; ?></p>
                  <ul><?php echo $inklTexte[$lang]['box1_list5']; ?></ul>
                </div>
              </div>

              <div class="box">
                <div>
                  <p><?php echo $inklTexte[$lang]['box2_block1']; ?></p>
                  <ul><?php echo $inklTexte[$lang]['box2_list1']; ?></ul>

                  <p><?php echo $inklTexte[$lang]['box2_block2']; ?></p>
                  <ul><?php echo $inklTexte[$lang]['box2_list2']; ?></ul>

                  <p><?php echo $inklTexte[$lang]['box2_block3']; ?></p>
                  <ul><?php echo $inklTexte[$lang]['box2_list3']; ?></ul>

                  <p><?php echo $inklTexte[$lang]['box2_block4']; ?></p>
                  <ul><?php echo $inklTexte[$lang]['box2_list4']; ?></ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Ermäßigungen -->
        <div class="box">
          <div>
            <div>
              <div>
                <h2 id="toc-entry-target-2" tabindex="-1">
                  <?php echo $inklTexte[$lang]['headline_ermaess']; ?>
                </h2>
              </div>
            </div>
          </div>

          <div>
            <div>
              <div>
                <div>
                  <!-- Beispiel: alt. -> <p><strong><?php echo $inklTexte[$lang]['label_schwimmbaeder']; ?></strong></p> -->
                  <p><strong><?php echo $inklTexte[$lang]['label_schwimmbaeder']; ?></strong></p>
                  <ul><?php echo $inklTexte[$lang]['schwimmbad_list']; ?></ul>

                  <p><strong><?php echo $inklTexte[$lang]['label_tennis']; ?></strong></p>
                  <ul><?php echo $inklTexte[$lang]['tennis_list']; ?></ul>

                  <p><strong><?php echo $inklTexte[$lang]['label_kultur']; ?></strong></p>
                  <ul><?php echo $inklTexte[$lang]['kultur_list']; ?></ul>

                  <p><?php echo $inklTexte[$lang]['label_winter']; ?></p>
                  <ul><?php echo $inklTexte[$lang]['winter2_list']; ?></ul>
                </div>
              </div>

              <div>
                <div>
                  <p><?php echo $inklTexte[$lang]['label_sommerwinter']; ?></p>
                  <ul><?php echo $inklTexte[$lang]['summerwinter_list']; ?></ul>

                  <p><?php echo $inklTexte[$lang]['label_mehrsommer']; ?></p>
                  <ul><?php echo $inklTexte[$lang]['summer_list']; ?></ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Garmisch-Partenkirchen -->
        <div>
          <div>
            <div>
              <div>
                <h2 id="toc-entry-target-3" tabindex="-1">
                  <?php echo $inklTexte[$lang]['headline_garmisch']; ?>
                </h2>
              </div>
            </div>
          </div>

          <div>
            <div>
              <div>
                <div>
                  <p><strong><?php echo $inklTexte[$lang]['garmisch_label_gratis']; ?></strong></p>
                  <ul><?php echo $inklTexte[$lang]['garmisch_list1']; ?></ul>

                  <p><strong><?php echo $inklTexte[$lang]['garmisch_label_erm']; ?></strong></p>
                  <ul><?php echo $inklTexte[$lang]['garmisch_list2']; ?></ul>
                </div>
              </div>
              <div>
                <div>
                  <ul><?php echo $inklTexte[$lang]['garmisch_list3']; ?></ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Grainau -->
        <div>
          <div>
            <div>
              <div>
                <h2 id="toc-entry-target-4" tabindex="-1">
                  <?php echo $inklTexte[$lang]['headline_grainau']; ?>
                </h2>
              </div>
            </div>
          </div>

          <div>
            <div>
              <div>
                <div>
                  <p><strong><?php echo $inklTexte[$lang]['grainau_label_gratis']; ?></strong></p>
                  <ul><?php echo $inklTexte[$lang]['grainau_list1']; ?></ul>
                </div>
              </div>
              <div>
                <div>
                  <p><strong><?php echo $inklTexte[$lang]['grainau_label_erm']; ?></strong></p>
                  <ul><?php echo $inklTexte[$lang]['grainau_list2']; ?></ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Außerhalb der Region -->
        <div>
          <div>
            <div>
              <div>
                <h2 id="toc-entry-target-5" tabindex="-1">
                  <?php echo $inklTexte[$lang]['headline_region']; ?>
                </h2>
              </div>
            </div>
          </div>

          <div>
            <div>
              <div>
                <div>
                  <ul><?php echo $inklTexte[$lang]['region_list1']; ?></ul>
                </div>
              </div>
              <div>
                <div>
                  <ul><?php echo $inklTexte[$lang]['region_list2']; ?></ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- AGB -->
        <div>
          <div>
            <div>
              <div>
                <div>
                  <h3><?php echo $inklTexte[$lang]['headline_agb']; ?></h3>
                </div>
                <div>
                  <div>
                    <p><?php echo $inklTexte[$lang]['agb_text']; ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br>
      </section>
    </article>

    <aside>
      <?php include ('include/side.php'); ?>
    </aside>
  </div>
</main>

<footer>
  <?php include ('include/footer.php'); ?>
</footer>

<?php include ('include/javainclude.php'); ?>
</body>
</html>
