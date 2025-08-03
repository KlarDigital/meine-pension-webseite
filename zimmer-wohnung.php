<?php
// 1) Sprachdatei laden
require_once('include/sprache-ausstattung.php');
?>
<!doctype html>
<html lang="<?php echo $lang; ?>">
<head>
  <title><?php echo $equipTexte[$lang]['head_title']; ?></title>
  <?php include('include/meta.php'); ?>
</head>
<body>
<header>
  <?php include('include/head.php'); ?>
</header>

<div id="sliderglobal">
  <div id="sliderinhaltglobal">
    <img
      src="Bilder/wohnung1/ferw1zimmer1.g.jpg"
      alt="Apartment Luttinger"
    >
  </div>
</div>

<nav id="mainmenu" class="mainmenu" itemscope itemtype="http://schema.org/SiteNavigationElement">
  <?php include('include/nav.php'); ?>
</nav>

<main id="content">
  <div class="contentinhalt clearfix">
    <article id="leftblock">

      <!-- H1-Titel -->
      <h1><?php echo $equipTexte[$lang]['h1_title']; ?></h1>

      <section>
        <!-- H2-Titel -->
        <h2><?php echo $equipTexte[$lang]['h2_title']; ?></h2>

        <p><?php echo $equipTexte[$lang]['p_intro_1']; ?></p>
        <p><?php echo $equipTexte[$lang]['p_intro_2']; ?></p>

        <!-- (Optional) Unterüberschrift oder 'Mehr Infos'? -->
        <h3><?php echo $equipTexte[$lang]['link_more_info']; ?></h3>
        <ul>
          <?php
          foreach ($equipTexte[$lang]['list_links'] as $linkItem) {
            echo "<li>$linkItem</li>";
          }
          ?>
        </ul>
      </section>

      <!-- Grid mit 4 Boxen -->
      <div class="room">
        <!-- Box 1: Zimmer 2 -->
        <div class="box">
          <a href="ausstattung/zimmer.php">
            <img
              src="Bilder/zimmer/zimmer-box.jpg"
              width="620" height="350"
              alt="Zimmer"
            >
            <div class="overlay box">
              <h4><?php echo $equipTexte[$lang]['room_label']; ?></h4>
              <h5><?php echo $equipTexte[$lang]['room_sub']; ?></h5>
              <div class="innerBorder"></div>
            </div>
          </a>
        </div>

        <!-- Box 2: Wohnung 1 -->
        <div class="box">
          <a href="ausstattung/wohnung1.php">
            <img
              src="Bilder/wohnung1/wohnung1-box.jpg"
              width="620" height="350"
              alt="Wohnung 1"
            >
            <div class="overlay box">
              <h4><?php echo $equipTexte[$lang]['ap1_label']; ?></h4>
              <h5><?php echo $equipTexte[$lang]['ap1_sub']; ?></h5>
              <div class="innerBorder"></div>
            </div>
          </a>
        </div>

        <!-- Box 3: Wohnung 3 -->
        <div class="box">
          <a href="ausstattung/wohnung5.php">
            <img
              src="Bilder/wohnung5/wohnung3-box.jpg"
              width="620" height="350"
              alt="Wohnung 3"
            >
            <div class="overlay box">
              <h4><?php echo $equipTexte[$lang]['ap3_label']; ?></h4>
              <h5><?php echo $equipTexte[$lang]['ap3_sub']; ?></h5>
              <div class="innerBorder"></div>
            </div>
          </a>
        </div>

        <!-- Box 4: Wohnung 4 -->
        <div class="box">
          <a href="ausstattung/wohnung6.php">
            <img
              src="Bilder/wohnung6/ferienwohnung4_schlafzimmer_thumb.jpg"
              width="550" height="413"
              alt="Wohnung 4"
            >
            <div class="overlay box">
              <h4><?php echo $equipTexte[$lang]['ap4_label']; ?></h4>
              <h5><?php echo $equipTexte[$lang]['ap4_sub']; ?></h5>
              <div class="innerBorder"></div>
            </div>
          </a>
        </div>
      </div>

      <!-- Aufenthaltsraum -->
      <section>
        <h2><?php echo $equipTexte[$lang]['h2_lounge']; ?></h2>
        <p><?php echo $equipTexte[$lang]['lounge_info']; ?></p>
        <a href="unser-haus.php">
          <img
            src="Bilder/aufenthaltsraum/aufenthalt2thumb.jpg"
            alt="<?php echo $equipTexte[$lang]['lounge_img_alt']; ?>"
            width="290" height="200"
            title="<?php echo $equipTexte[$lang]['lounge_img_alt']; ?>"
          >
        </a>
        <a href="unser-haus.php">
          <img
            src="Bilder/aufenthaltsraum/aufenthaltthumb.jpg"
            alt="<?php echo $equipTexte[$lang]['lounge_img_alt']; ?>"
            width="290" height="200"
            title="<?php echo $equipTexte[$lang]['lounge_img_alt']; ?>"
          >
        </a>
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
