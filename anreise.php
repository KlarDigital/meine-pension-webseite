<?php include('include/sprache-anreise.php'); ?>
<!doctype html>
<html class="no-js" prefix="dc: http://purl.org/dc/elements/1.1/" lang="<?php echo $content[$lang]['html_lang']; ?>">
<head>
  <?php include ('include/meta.php'); ?>
</head>
<body>
<header>
  <?php include ('include/head.php'); ?>
</header>

<div id="sliderglobal">
  <div id="sliderinhaltglobal">
    <!-- Beispiel: Haus-Bild dynamisch -->
    <img
      src="Bilder/unser-haus/sicht-haus2.jpg"
      alt="<?php echo $content[$lang]['slider_alt']; ?>"
      title="<?php echo $content[$lang]['slider_title']; ?>"
    >
  </div>
</div>

<nav id="mainmenu" class="mainmenu" itemscope itemtype="http://schema.org/SiteNavigationElement">
  <?php include ('include/nav.php'); ?>
</nav>

<main id="content">
  <div class="contentinhalt clearfix">
    <article id="leftblock">
      <!-- H1 Überschrift -->
      <h1><?php echo $content[$lang]['headline_h1']; ?></h1>

      <!-- Adressblock -->
      <address>
        <img
          src="Bilder/logo-print.jpg"
          alt="<?php echo $content[$lang]['logo_alt']; ?>"
          width="490"
          height="200"
          title="<?php echo $content[$lang]['logo_title']; ?>"
        >
        <ul itemscope itemtype="http://schema.org/Organization">
          <li class="bold" itemprop="name">
            <i class="fa fa-home"></i>
            <?php echo $content[$lang]['address_line1']; ?>
          </li>
          <li><?php echo $content[$lang]['address_line2']; ?></li>
          <li>
            <ul itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
              <li itemprop="streetAddress"><?php echo $content[$lang]['adresse_strasse']; ?></li>
              <li>
                <i class="fa fa-map-marker"></i>
                <span itemprop="postalCode"><?php echo $content[$lang]['adresse_plz_ort']; ?></span>
              </li>
              <li><?php echo $content[$lang]['adresse_land']; ?></li>
              <li class="telefon">
                <i class="fa fa-phone"></i>
                <span itemprop="telephone">
                  <a
                    href="tel:+436769534130"
                    title="<?php echo $content[$lang]['adresse_phone_title']; ?>"
                  >
                    <?php echo $content[$lang]['adresse_phone_label']; ?>
                  </a>
                </span>
              </li>
              <li class="email">
                <i class="fa fa-envelope-o"></i>
                <!-- E-Mail via JavaScript -->
                <a
                  href="javascript:linkTo_UnCryptMailto('nbjmup;jogpAqfotjpo.mvuujohfs/bu');"
                  title="E-Mail Pension Luttinger"
                >
                  <?php echo $content[$lang]['adresse_email_text']; ?>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </address>

      <!-- Google Maps Iframe -->
      <iframe
        id="google"
        src="<?php echo $content[$lang]['iframe_src']; ?>"
      >
      </iframe>

      <!-- Haupt-Text -->
      <p><?php echo $content[$lang]['p_main']; ?></p>

      <h2><?php echo $content[$lang]['headline_h2_verkehr']; ?></h2>

      <div class="blockcenter">
        <h3><?php echo $content[$lang]['headline_h3_taxi']; ?></h3>
        <ul>
          <li><?php echo $content[$lang]['taxi_strolz']; ?></li>
          <li><?php echo $content[$lang]['shuttle_and_more']; ?></li>
        </ul>
      </div>

      <div class="blockcenter">
        <h3><?php echo $content[$lang]['headline_h3_flugzeug']; ?></h3>
        <ul>
          <li><?php echo $content[$lang]['flug_innsbruck']; ?></li>
          <li><?php echo $content[$lang]['flug_muenchen']; ?></li>
        </ul>

        <h3><?php echo $content[$lang]['headline_h3_bahn']; ?></h3>
        <ul>
          <li><?php echo $content[$lang]['li_bahn_schweiz']; ?></li>
          <li><?php echo $content[$lang]['li_bahn_italien']; ?></li>
          <li><?php echo $content[$lang]['li_bahn_de']; ?></li>
        </ul>

        <h3><?php echo $content[$lang]['headline_h3_auto']; ?></h3>
        <ul>
          <li><?php echo $content[$lang]['li_auto_muc']; ?></li>
          <li><?php echo $content[$lang]['li_auto_stutt']; ?></li>
          <li><?php echo $content[$lang]['li_auto_bozen']; ?></li>
          <li><?php echo $content[$lang]['li_auto_zuerich']; ?></li>
        </ul>
      </div>
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
