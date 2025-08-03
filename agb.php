<?php
require_once('include/sprache-agb.php');
?>
<!doctype html>
<html class="no-js" prefix="dc: http://purl.org/dc/elements/1.1/" lang="de">
<head>
  <?php include ('include/meta.php');  ?>
</head>
<body>
<header>
  <?php include ('include/head.php');  ?>
</header>
<div id="sliderglobal">
  <div id="sliderinhaltglobal">
    <img
      src="Bilder/banner-header/banner-kontakt.webp"
      width="1200"
      height="800"
      alt="<?php echo $kontaktTexte[$lang]['alt_banner_contact']; ?>"
    >
  </div>
</div>
<nav id="mainmenu" class="mainmenu" itemscope="" itemtype="http://schema.org/SiteNavigationElement">
  <?php include ('include/nav.php');  ?>
</nav>
<main id="content">
  <div class="contentinhalt clearfix">
    <article id="leftblock">
      <section id="impressum">
        <h1><?php echo $agbTexte[$lang]['h1_agb']; ?></h1>
        <div class="blockcenter">
          <p><?php echo nl2br($agbTexte[$lang]['agb_full_text']); ?></p>
        </div>
        <div class="blockcenter">
          <h2><?php echo $agbTexte[$lang]['sources_title']; ?></h2>
          <p class="block"><?php echo $agbTexte[$lang]['sources_text']; ?></p>
        </div>
        <div class="blockcenter">
          <h2><?php echo $agbTexte[$lang]['design_title']; ?></h2>
          <p class="block"><?php echo $agbTexte[$lang]['design_text']; ?></p>
        </div>
        <div class="blockcenter">
          <h2><?php echo $agbTexte[$lang]['links_title']; ?></h2>
          <p class="block"><?php echo $agbTexte[$lang]['links_text']; ?></p>
        </div>
        <section id="cookies">
          <div class="blockcenter">
            <h1><?php echo $agbTexte[$lang]['h1_datenschutz']; ?></h1>
            <h2><?php echo $agbTexte[$lang]['h2_datenschutz']; ?></h2>
            <p><?php echo nl2br($agbTexte[$lang]['datenschutz_text']); ?></p>
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