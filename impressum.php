<?php include ('include/sprache-impressum.php'); ?>
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
      src="Bilder/banner-header/banner-kontakt.webp"
      width="1200"
      height="800"
    >
  </div>
</div>
<nav id="mainmenu" class="mainmenu" itemscope itemtype="http://schema.org/SiteNavigationElement">
  <?php include ('include/nav.php'); ?>
</nav>

<main id="content">
  <div class="contentinhalt clearfix">
    <article id="leftblock">

      <!-- Impressum-Bereich -->
      <section id="impressum">
        <h1><?php echo $impressumTexts[$lang]['headline_impressum']; ?></h1>

        <div class="blockcenter">
          <h2><?php echo $impressumTexts[$lang]['h2_medieninhaber']; ?></h2>
          <p class="block">
            <?php echo $impressumTexts[$lang]['block_medieninhaber']; ?>
          </p>
        </div>

        <div class="blockcenter">
          <h2><?php echo $impressumTexts[$lang]['h2_bilderquellen']; ?></h2>
          <p class="block">
            <?php echo $impressumTexts[$lang]['block_bilderquellen']; ?>
          </p>
        </div>

        <div class="blockcenter">
          <h2><?php echo $impressumTexts[$lang]['h2_design']; ?></h2>
          <p class="block">
            <?php echo $impressumTexts[$lang]['block_design']; ?>
          </p>
        </div>

        <div class="blockcenter">
          <h2><?php echo $impressumTexts[$lang]['h2_haftung_links']; ?></h2>
          <p class="block">
            <?php echo $impressumTexts[$lang]['block_haftung_links']; ?>
          </p>
        </div>
      </section>

      <!-- Cookies / Datenschutz-Bereich -->
      <section id="cookies">
        <div class="blockcenter">
          <h1><?php echo $impressumTexts[$lang]['headline_cookies']; ?></h1>

          <h2><?php echo $impressumTexts[$lang]['h2_datenschutz']; ?></h2>
          <p><?php echo $impressumTexts[$lang]['p_datenschutz_1']; ?></p>
          <p><?php echo $impressumTexts[$lang]['p_datenschutz_2']; ?></p>
          <p><?php echo $impressumTexts[$lang]['p_datenschutz_3']; ?></p>

          <h3><?php echo $impressumTexts[$lang]['h3_analytics']; ?></h3>
          <p><?php echo $impressumTexts[$lang]['p_analytics_1']; ?></p>
          <p><?php echo $impressumTexts[$lang]['p_analytics_2']; ?></p>
          <p><?php echo $impressumTexts[$lang]['p_analytics_3']; ?></p>

          <h3><?php echo $impressumTexts[$lang]['h3_auskunft']; ?></h3>
          <p><?php echo $impressumTexts[$lang]['p_auskunft']; ?></p>

          <h3><?php echo $impressumTexts[$lang]['h3_serverlogs']; ?></h3>
          <p><?php echo $impressumTexts[$lang]['p_serverlogs_1']; ?></p>
          <ul>
            <?php echo $impressumTexts[$lang]['list_serverlogs']; ?>
          </ul>
          <p><?php echo $impressumTexts[$lang]['p_serverlogs_2']; ?></p>

          <h3><?php echo $impressumTexts[$lang]['h3_cookies']; ?></h3>
          <p><?php echo $impressumTexts[$lang]['p_cookies_1']; ?></p>
          <p><?php echo $impressumTexts[$lang]['p_cookies_2']; ?></p>

          <h3><?php echo $impressumTexts[$lang]['h3_kontakt']; ?></h3>
          <p><?php echo $impressumTexts[$lang]['p_kontakt']; ?></p>
        </div>
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
