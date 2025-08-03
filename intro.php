<?php
/***** 1) SPRACHDATEI LADEN *****/
require_once('include/sprache-intro.php');  // Pfad ggf. anpassen

/***** 2) FORMULAR-VERARBEITUNG *****/
$error = "";
$successMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Wir können $lang und $introTexte direkt nutzen
  $captchaAnswer = $_POST['captcha_answer'] ?? '';
  $captchaInput  = $_POST['captcha'] ?? '';

  if ($captchaInput != $captchaAnswer) {
    $error = $introTexte[$lang]['form_captcha_wrong'];
  } else {
    if (!empty($_POST['website'])) {
      $error = $introTexte[$lang]['form_website_field'];
    } else {
      if (!isset($_POST['privacy'])) {
        $error = $introTexte[$lang]['form_noprivacy'];
      } else {
        $name    = htmlspecialchars(trim($_POST['name'] ?? ''));
        $email   = htmlspecialchars(trim($_POST['email'] ?? ''));
        $message = htmlspecialchars(trim($_POST['message'] ?? ''));

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $error = $introTexte[$lang]['form_invalid_email'];
        }
        if (preg_match("/[\r\n]/", $email)) {
          $error = $introTexte[$lang]['form_invalid_email'];
        }

        if (empty($error)) {
          $to      = "info@luttinger-bichlbach.at";

          // Betreff aus dem Spracharray
          $subject = $introTexte[$lang]['mail_subject']." ".$name;

          // Body-Text aus dem Spracharray
          $body =
            $introTexte[$lang]['mail_body_name']." $name\n".
            $introTexte[$lang]['mail_body_email']." $email\n".
            $introTexte[$lang]['mail_body_message']."\n$message";

          $headers = "From: info@luttinger-bichlbach.at\r\n";
          $headers .= "Reply-To: $email\r\n";

          if (mail($to, $subject, $body, $headers)) {
            $successMessage = $introTexte[$lang]['form_mail_success'];
          } else {
            $error = $introTexte[$lang]['form_mail_failed'];
          }
        }
      }
    }
  }
}

/***** 3) FILELISTER-KLASSE *****/
class FileLister {
  private $ordnerPfad;

  public function __construct($ordnerPfad) {
    $this->ordnerPfad = $ordnerPfad;
  }

  public function anzeigen() {
    global $introTexte, $lang;

    $dateien = scandir($this->ordnerPfad);
    $dateien = array_diff($dateien, ['.', '..']);

    if (empty($dateien)) {
      echo "<p>".$introTexte[$lang]['no_files_text']."</p>";
    } else {
      echo "<ul>";
      foreach ($dateien as $datei) {
        $dateipfad = $this->ordnerPfad . '/' . $datei;
        if (is_file($dateipfad)) {
          $endung = strtolower(pathinfo($datei, PATHINFO_EXTENSION));
          $symbol = $this->getSymbol($endung);
          echo "<li><a href='$dateipfad' target='_blank'><i class='$symbol'></i> $datei</a></li>";
        }
      }
      echo "</ul>";
    }
  }

  private function getSymbol($endung) {
    switch ($endung) {
      case 'pdf':
        return 'fa fa-file-pdf-o';
      case 'jpg':
      case 'jpeg':
      case 'png':
      case 'gif':
        return 'fa fa-file-image-o';
      case 'doc':
      case 'docx':
        return 'fa fa-file-word';
      case 'xls':
      case 'xlsx':
        return 'fa fa-file-excel';
      case 'ppt':
      case 'pptx':
        return 'fa fa-file-powerpoint';
      case 'zip':
      case 'rar':
        return 'fa fa-file-archive';
      default:
        return 'fa fa-file';
    }
  }
}

?>
<!doctype html>
<html class="no-js" prefix="dc: http://purl.org/dc/elements/1.1/" lang="<?php echo $lang; ?>">
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
      src="Bilder/unser-haus/h-wint2-gross.jpg"
      alt="<?php echo $introTexte[$lang]['slider_alt']; ?>"
    >
  </div>
</div>

<nav id="mainmenu" class="mainmenu" itemscope itemtype="http://schema.org/SiteNavigationElement">
  <?php include('include/nav.php'); ?>
</nav>

<main id="content">
  <section class="contentinhalt clearfix">
    <article id="leftblock">

      <!-- Haupt-Überschrift -->
      <h1><?php echo $introTexte[$lang]['heading_welcome']; ?></h1>

      <!-- Inhaltsverzeichnis -->
      <div class="toc">
        <h2><?php echo $introTexte[$lang]['heading_toc']; ?></h2>
        <ul>
          <li>
            <a href="#haus-informationen" class="toc-link" data-accordion="accordion1">
              <?php echo $introTexte[$lang]['toc_label_inf_haus']; ?>
            </a>
            <ul>
              <li><a href="#wlan" data-accordion="accordion1" class="toc-link"><?php echo $introTexte[$lang]['toc_label_wlan']; ?></a></li>
              <li><a href="#checkin" data-accordion="accordion1" class="toc-link"><?php echo $introTexte[$lang]['toc_label_checkin']; ?></a></li>
              <li><a href="#hausordnung" data-accordion="accordion1" class="toc-link"><?php echo $introTexte[$lang]['toc_label_hausordnung']; ?></a></li>
              <li><a href="#schluesseltresor" data-accordion="accordion1" class="toc-link"><?php echo $introTexte[$lang]['toc_label_schluessel']; ?></a></li>
              <li><a href="#gaestekarte" data-accordion="accordion1" class="toc-link"><?php echo $introTexte[$lang]['toc_label_gaestekarte']; ?></a></li>
              <li><a href="#muelltrennung" data-accordion="accordion1" class="toc-link"><?php echo $introTexte[$lang]['toc_label_muell']; ?></a></li>
              <li><a href="#dormakaba" data-accordion="accordion1" class="toc-link"><?php echo $introTexte[$lang]['toc_label_dormakaba']; ?></a></li>
              <li><a href="#raucher" data-accordion="accordion1" class="toc-link"><?php echo $introTexte[$lang]['toc_label_raucher']; ?></a></li>
              <li><a href="#ski" data-accordion="accordion1" class="toc-link"><?php echo $introTexte[$lang]['toc_label_ski']; ?></a></li>
              <li><a href="#garten" data-accordion="accordion1" class="toc-link"><?php echo $introTexte[$lang]['toc_label_garten']; ?></a></li>
            </ul>
          </li>
          <li>
            <a href="#umgebung-informationen" data-accordion="accordion2" class="toc-link">
              <?php echo $introTexte[$lang]['toc_label_inf_umgebung']; ?>
            </a>
            <ul>
              <li><a href="#aktuelles" data-accordion="accordion2" class="toc-link"><?php echo $introTexte[$lang]['toc_label_aktuelles']; ?></a></li>
              <li><a href="#veranstaltungskalender-umgebung" data-accordion="accordion2" class="toc-link"><?php echo $introTexte[$lang]['toc_label_veranstaltung']; ?></a></li>
              <li><a href="#bankomat" data-accordion="accordion2" class="toc-link"><?php echo $introTexte[$lang]['toc_label_bankomat']; ?></a></li>
              <li><a href="#arzt" data-accordion="accordion2" class="toc-link"><?php echo $introTexte[$lang]['toc_label_arzt']; ?></a></li>
              <li><a href="#restaurant" data-accordion="accordion2" class="toc-link"><?php echo $introTexte[$lang]['toc_label_restaurant']; ?></a></li>
              <li><a href="#krankenhaus" data-accordion="accordion2" class="toc-link"><?php echo $introTexte[$lang]['toc_label_krankenhaus']; ?></a></li>
              <li><a href="#supermarkt" data-accordion="accordion2" class="toc-link"><?php echo $introTexte[$lang]['toc_label_supermarkt']; ?></a></li>
              <li><a href="#friseur" data-accordion="accordion2" class="toc-link"><?php echo $introTexte[$lang]['toc_label_friseur']; ?></a></li>
              <li><a href="#fahrradverleih" data-accordion="accordion2" class="toc-link"><?php echo $introTexte[$lang]['toc_label_fahrrad']; ?></a></li>
              <li><a href="#tankstelle" data-accordion="accordion2" class="toc-link"><?php echo $introTexte[$lang]['toc_label_tankstelle']; ?></a></li>
              <li><a href="#zug-und-bus" data-accordion="accordion2" class="toc-link"><?php echo $introTexte[$lang]['toc_label_zug_bus']; ?></a></li>
              <li><a href="#fahrplaene" data-accordion="accordion2" class="toc-link"><?php echo $introTexte[$lang]['toc_label_fahrplaene']; ?></a></li>
              <li><a href="#skilifte" data-accordion="accordion2" class="toc-link"><?php echo $introTexte[$lang]['toc_label_skilifte']; ?></a></li>
              <li><a href="#karte-bichlbach" data-accordion="accordion2" class="toc-link"><?php echo $introTexte[$lang]['toc_label_karte_bichlbach']; ?></a></li>
              <li><a href="#langlaufloipen" data-accordion="accordion2" class="toc-link"><?php echo $introTexte[$lang]['toc_label_langlaufloipen']; ?></a></li>
              <li><a href="#umgebung" data-accordion="accordion2" class="toc-link"><?php echo $introTexte[$lang]['toc_label_umgebung']; ?></a></li>
              <li><a href="#notrufnummern" data-accordion="accordion2" class="toc-link"><?php echo $introTexte[$lang]['toc_label_notrufnummern']; ?></a></li>
            </ul>
          </li>
          <li><a href="#wettervorhersage"><?php echo $introTexte[$lang]['toc_label_weather']; ?></a></li>
          <li><a href="#feedback"><?php echo $introTexte[$lang]['toc_label_feedback']; ?></a></li>
        </ul>
      </div>

      <!-- Accordion 1: Haus -->
      <section>
        <button class="accordion" id="accordion1">
          <?php echo $introTexte[$lang]['acc1_title']; ?>
        </button>
        <div class="panel" id="haus-informationen">
          <div class="box">

            <!-- WLAN -->
            <div class="info-box" id="wlan">
              <h3><i class="fa fa-wifi icon"></i>
                <?php echo $introTexte[$lang]['wlan_title']; ?>
              </h3>
              <ul><?php echo $introTexte[$lang]['wlan_text']; ?></ul>
            </div>

            <!-- Check-In -->
            <div class="info-box" id="checkin">
              <h3><i class="fa fa-clock icon"></i>
                <?php echo $introTexte[$lang]['checkin_title']; ?>
              </h3>
              <ul>
                <li><?php echo $introTexte[$lang]['checkin_text_1']; ?></li>
                <li><?php echo $introTexte[$lang]['checkin_text_2']; ?></li>
                <!-- Neu: zusätzlicher Text -->
                <li><?php echo $introTexte[$lang]['checkin_text_3']; ?></li>
              </ul>
              <p><?php echo $introTexte[$lang]['checkin_note2']; ?></p>
              <a href="https://portal.deskline.net/all/checkin/reception/ZGS/05841d07-1388-47e4-b140-96db73537567?dbOv=MT4&amp;userId=5025a351-f794-4c42-821c-9eea99927a03"
                 target="_blank" class="btn btn-primary">
                <?php echo $introTexte[$lang]['checkin_online2']; ?>
              </a>
            </div>

            <!-- Hausordnung -->
            <div class="info-box" id="hausordnung">
              <h3><i class="fa fa-file-text icon"></i>
                <?php echo $introTexte[$lang]['hausordnung_title']; ?>
              </h3>
              <p><?php echo $introTexte[$lang]['hausordnung_text']; ?></p>
              <a href="<?php echo ($lang === 'en')
                ? 'download/Hausordnung_en.pdf'
                : 'download/Hausordnung_de.pdf'; ?>"
                 target="_blank"
                 class="btn btn-primary"
              >
                <?php echo $introTexte[$lang]['hausordnung_btn']; ?>
              </a>
            </div>

            <!-- Schlüsseltresor -->
            <div class="info-box" id="schluesseltresor">
              <h3><i class="fa fa-key icon"></i>
                <?php echo $introTexte[$lang]['schluessel_title']; ?>
              </h3>
              <p><?php echo $introTexte[$lang]['tresor_text_1']; ?></p>
              <figure>
                <img src="Bilder/unser-haus/schluesseltressor.jpg"
                     alt="<?php echo $introTexte[$lang]['tresor_figcaption']; ?>"
                     style="max-width: 100%;">
                <figcaption><?php echo $introTexte[$lang]['tresor_figcaption']; ?></figcaption>
              </figure>
              <p><?php echo $introTexte[$lang]['tresor_text_2']; ?></p>
            </div>

            <!-- Gästekarte -->
            <div class="info-box" id="gaestekarte">
              <h3><i class="fa fa-id-card icon"></i>
                <?php echo $introTexte[$lang]['gaestekarte_title']; ?>
              </h3>
              <ul>
                <li><?php echo $introTexte[$lang]['gaestekarte_bullet']; ?></li>
              </ul>
              <p>
                <img src="Bilder/zugspitzarena/gaestekarte.jpg" width="355" height="196"
                     alt="<?php echo $introTexte[$lang]['gaestekarte_img_alt']; ?>"/>
              </p>
            </div>

            <!-- Müll -->
            <div class="info-box" id="muelltrennung">
              <h3><i class="fa fa-recycle icon"></i>
                <?php echo $introTexte[$lang]['muell_title']; ?>
              </h3>
              <p><?php echo $introTexte[$lang]['muell_text']; ?></p>
              <ul><?php echo $introTexte[$lang]['muell_points']; ?></ul>
              <figure>
                <img src="Bilder/unser-haus/muellraum-hinten.jpg"
                     alt="<?php echo $introTexte[$lang]['muell_img_alt']; ?>"
                     style="max-width: 100%;">
                <figcaption><?php echo $introTexte[$lang]['muell_img_alt']; ?></figcaption>
              </figure>
            </div>

            <!-- dormakaba -->
            <div class="info-box" id="dormakaba">
              <h3><i class="fa fa-key icon"></i>
                <?php echo $introTexte[$lang]['dormakaba_title']; ?>
              </h3>
              <p><?php echo $introTexte[$lang]['dormakaba_text']; ?></p>
            </div>

            <!-- Raucher -->
            <div class="info-box" id="raucher">
              <h3><i class="fa fa-ban icon"></i>
                <?php echo $introTexte[$lang]['raucher_title']; ?>
              </h3>
              <p><?php echo $introTexte[$lang]['raucher_text']; ?></p>
            </div>

            <!-- Ski -->
            <div class="info-box" id="ski">
              <h3><i class="fa fa-skiing icon"></i>
                <?php echo $introTexte[$lang]['ski_title']; ?>
              </h3>
              <p><?php echo $introTexte[$lang]['ski_text_1']; ?></p>
              <p><?php echo $introTexte[$lang]['ski_text_2']; ?></p>
              <p><img src="Bilder/unser-haus/skistall-pension-luttinger.jpg"
                      width="314"
                      height="196"
                      alt="<?php echo $introTexte[$lang]['ski_img_alt']; ?>"></p>
            </div>

            <!-- Garten -->
            <div class="info-box" id="garten">
              <h3><i class="fa fa-tree icon"></i>
                <?php echo $introTexte[$lang]['garten_title']; ?>
              </h3>
              <p><?php echo $introTexte[$lang]['garten_text_1']; ?></p>
              <figure>
                <img src="Bilder/unser-haus/garten-haengematte.jpg"
                     alt="<?php echo $introTexte[$lang]['garten_fig1_alt']; ?>"
                     style="max-width: 100%;">
                <figcaption><?php echo $introTexte[$lang]['garten_fig1_cap']; ?></figcaption>
              </figure>
              <p><?php echo $introTexte[$lang]['garten_text_2']; ?></p>
              <figure>
                <img src="Bilder/unser-haus/garten-bank-hinten.jpg"
                     alt="<?php echo $introTexte[$lang]['garten_fig2_alt']; ?>"
                     style="max-width: 100%;">
                <figcaption><?php echo $introTexte[$lang]['garten_fig2_cap']; ?></figcaption>
              </figure>
              <p><?php echo $introTexte[$lang]['garten_text_3']; ?></p>
              <figure>
                <img src="Bilder/unser-haus/garten-liegestuehle.jpg"
                     alt="<?php echo $introTexte[$lang]['garten_fig3_alt']; ?>"
                     style="max-width: 100%;">
                <figcaption><?php echo $introTexte[$lang]['garten_fig3_cap']; ?></figcaption>
              </figure>
              <p><?php echo $introTexte[$lang]['garten_text_4']; ?></p>
              <figure>
                <img src="Bilder/unser-haus/gartenteich-nacht.jpg"
                     alt="<?php echo $introTexte[$lang]['garten_fig4_alt']; ?>"
                     style="max-width: 100%;">
                <figcaption><?php echo $introTexte[$lang]['garten_fig4_cap']; ?></figcaption>
              </figure>
            </div>

          </div>
        </div>
      </section>

      <!-- Accordion 2: Umgebung -->
      <section>
        <button class="accordion" id="accordion2">
          <?php echo $introTexte[$lang]['acc2_title']; ?>
        </button>
        <div class="panel" id="umgebung-informationen">
          <div class="box">

            <!-- Aktuelles (News) -->
            <div class="info-box" id="aktuelles">
              <h3><i class="fa fa-calendar icon"></i>
                <?php echo $introTexte[$lang]['aktuelles_title']; ?>
              </h3>
              <?php
              // Beispiel: listet Dateien aus "news" auf
              $ordnerPfad = 'news';
              if (is_dir($ordnerPfad)) {
                $fileLister = new FileLister($ordnerPfad);
                $fileLister->anzeigen();
              } else {
                echo "<p>".$introTexte[$lang]['no_files_text']."</p>";
              }
              ?>
            </div>

            <!-- Veranstaltungskalender -->
            <div class="info-box" id="veranstaltungskalender-umgebung">
              <h3><i class="fa fa-newspaper icon"></i>
                <?php echo $introTexte[$lang]['veranstaltung_title']; ?>
              </h3>
              <p>
                <a href="https://zugspitzarena.com/de/News-Events/Veranstaltungskalender/veranstaltungen" target="_blank">
                  <?php echo $introTexte[$lang]['veranstaltung_title']; ?>
                </a>
              </p>
            </div>

            <!-- Bankomat -->
            <div class="info-box" id="bankomat">
              <h3><i class="fa fa-money-bill-wave icon"></i>
                <?php echo $introTexte[$lang]['bankomat_title']; ?>
              </h3>
              <p><?php echo $introTexte[$lang]['bankomat_text']; ?></p>
            </div>

            <!-- Arzt -->
            <div class="info-box" id="arzt">
              <h3><i class="fa fa-ambulance icon"></i>
                <?php echo $introTexte[$lang]['arzt_title']; ?>
              </h3>
              <ul>
                <?php echo $introTexte[$lang]['arzt_list']; ?>
              </ul>
            </div>

            <!-- Restaurant -->
            <div class="info-box" id="restaurant">
              <h3><i class="fa fa-utensils icon"></i>
                <?php echo $introTexte[$lang]['restaurant_title']; ?>
              </h3>
              <ul>
                <?php echo $introTexte[$lang]['restaurant_list']; ?>
              </ul>
            </div>

            <!-- Krankenhaus -->
            <div class="info-box" id="krankenhaus">
              <h3><i class="fa fa-hospital icon"></i>
                <?php echo $introTexte[$lang]['krankenhaus_title']; ?>
              </h3>
              <p>
                <strong>
                  <a href="https://www.kh-reutte.at/" target="_blank">Krankenhaus Reutte-Ehenbichl</a>
                </strong>
              </p>
            </div>

            <!-- Supermarkt -->
            <div class="info-box" id="supermarkt">
              <h3><i class="fa fa-shopping-cart icon"></i>
                <?php echo $introTexte[$lang]['supermarkt_title']; ?>
              </h3>
              <ul>
                <?php echo $introTexte[$lang]['supermarkt_list']; ?>
              </ul>
            </div>

            <!-- Friseur -->
            <div class="info-box" id="friseur">
              <h3><i class="fa fa-cut icon"></i>
                <?php echo $introTexte[$lang]['friseur_title']; ?>
              </h3>
              <p><?php echo $introTexte[$lang]['friseur_html']; ?></p>
            </div>

            <!-- Fahrradverleih -->
            <div class="info-box" id="fahrradverleih">
              <h3><i class="fa fa-bicycle icon"></i>
                <?php echo $introTexte[$lang]['fahrradverleih_title']; ?>
              </h3>
              <p><strong><a href="https://www.sport-nagele.at/" target="_blank">Sport Nagele</a></strong> – 3 Min. zu Fuß</p>
            </div>

            <!-- Tankstelle -->
            <div class="info-box" id="tankstelle">
              <h3><i class="fa fa-gas-pump icon"></i>
                <?php echo $introTexte[$lang]['tankstelle_title']; ?>
              </h3>
              <p>
                <strong>
                  <a href="https://www.google.com/maps/place/OIL!+Tankstelle+Bichlbach" target="_blank">
                    OIL! Tankstelle
                  </a>
                </strong> – Am Ortsrand
              </p>
            </div>

            <!-- Zug & Bus -->
            <div class="info-box" id="zug-und-bus">
              <h3><i class="fa fa-train icon"></i>
                <?php echo $introTexte[$lang]['zugbus_title']; ?>
              </h3>
              <ul>
                <?php echo $introTexte[$lang]['zugbus_list']; ?>
              </ul>
            </div>

            <!-- Fahrpläne -->
            <div class="info-box" id="fahrplaene">
              <h3><i class="fa fa-train icon"></i>
                <?php echo $introTexte[$lang]['fahrplaene_title']; ?>
              </h3>
              <?php
              // Beispiel: listet Dateien aus "fahrplaene" auf
              $ordnerPfadFahrplaene = 'fahrplaene';
              if (is_dir($ordnerPfadFahrplaene)) {
                $fahrplaeneLister = new FileLister($ordnerPfadFahrplaene);
                $fahrplaeneLister->anzeigen();
              } else {
                echo "<p>".$introTexte[$lang]['no_files_text']."</p>";
              }
              ?>
            </div>

            <!-- Skilifte -->
            <div class="info-box" id="skilifte">
              <h3><i class="fa fa-skiing icon"></i>
                <?php echo $introTexte[$lang]['skilifte_title']; ?>
              </h3>
              <ul>
                <li><strong>Sonnenbichl Lift</strong> – 10 Min. zu Fuß</li>
                <li><strong>Almkopfbahn</strong> – 5 Min. mit dem Auto</li>
                <li><a href="https://www.berwang.tirol/" target="_blank">Skigebiete Info</a></li>
              </ul>
              <!-- Zusätzlicher Link zu Skipass-Preisen -->
              <p>
                <a href="https://zugspitzarena.com/de/Abenteuer%20TZA/Winter-Erlebnis/Skigebiete/Skipasspreise" target="_blank">
                  <?php echo $introTexte[$lang]['ski_area_prices']; ?>
                </a>
              </p>
            </div>

            <!-- Karte Bichlbach -->
            <div class="info-box" id="karte-bichlbach">
              <h3><i class="fa fa-map icon"></i>
                <?php echo $introTexte[$lang]['karte_bichlbach_title']; ?>
              </h3>
              <p>
                <a href="https://www.google.com/maps/place/Bichlbach,+Österreich" target="_blank">
                  Google Maps - Bichlbach
                </a>
              </p>
            </div>

            <!-- Langlaufloipen -->
            <div class="info-box" id="langlaufloipen">
              <h3><i class="fa fa-skiing-nordic icon"></i>
                <?php echo $introTexte[$lang]['langlaufloipen_title']; ?>
              </h3>
              <?php echo $introTexte[$lang]['langlaufloipen_list']; ?>
            </div>

            <!-- Umgebung -->
            <div class="info-box" id="umgebung">
              <h3><i class="fa fa-map-signs icon"></i>
                <?php echo $introTexte[$lang]['umgebung_title']; ?>
              </h3>
              <ul>
                <li><a href="https://www.zugspitzarena.com/de/aktiv/ausflugsziele/tiere-natur" target="_blank">Spielplatz und Tierpark</a></li>
                <li><a href="https://www.alpentherme-ehrenberg.at/" target="_blank">Alpentherme Ehrenberg</a> (12 km)</li>
                <li><a href="https://www.highline179.tirol/" target="_blank">Highline 179</a> (8 km)</li>
                <li><a href="https://www.neuschwanstein.de/" target="_blank">Schloss Neuschwanstein</a> (30 km)</li>
                <li><a href="https://zugspitze.de/" target="_blank">Zugspitze</a> (14 km)</li>
                <li>Bergseen (Seebensee, Eibsee, Heiterwanger See, Plansee)</li>
                <li><a href="https://www.gapa.de/" target="_blank">Garmisch-Partenkirchen</a> (30 km)</li>
                <li><a href="https://www.fuessen.de/" target="_blank">Füssen</a> (25 km)</li>
                <li>Freibäder (Lermoos, Bärenbad Berwang)</li>
                <li>Seilbahnen</li>
                <li>Golfplatz <a href="https://www.tiroler-zugspitzgolf.at/" target="_blank">Tiroler Zugspitz Arena</a></li>
                <li>Bootsfahrten auf <a href="https://www.heiterwangersee.at/" target="_blank">Heiterwanger See</a>, <a href="https://www.plansee.at/" target="_blank">Plansee</a></li>
                <li><a href="https://www.innsbruck.info/" target="_blank">Innsbruck</a> (80 km)</li>
                <li><a href="https://www.bichlbach-tirol.at/erleben/kletterwald-bichlbach/" target="_blank">Kletterwald Bichlbach</a>, Flying Fox, Disc Golf Park, Mountain Carts</li>
              </ul>
            </div>

            <!-- Notrufnummern -->
            <div class="info-box" id="notrufnummern">
              <h3><i class="fa fa-phone-alt icon"></i>
                <?php echo $introTexte[$lang]['notrufnummern_title']; ?>
              </h3>
              <ul><?php echo $introTexte[$lang]['notruf_list']; ?></ul>
            </div>

          </div>
        </div>
      </section>

      <!-- Wetter -->
      <div class="weather-widget" id="wettervorhersage">
        <h3><i class="fa fa-cloud-sun icon"></i>
          <?php echo $introTexte[$lang]['weather_title']; ?>
        </h3>
        <div id="weather">
          <?php
          // OpenWeatherMap-Abfrage
          $apiKey = "c6526ef812be90a4ce980c0b046065a7";  // Dein API Key
          $cityId = "2781790"; // Bichlbach / Zugspitz Arena
          // Wichtig: &lang=$lang damit wir die Beschreibung in DE oder EN bekommen
          $apiUrl = "http://api.openweathermap.org/data/2.5/weather?id=$cityId&lang=$lang&units=metric&appid=$apiKey";

          $ch = curl_init();
          curl_setopt($ch, CURLOPT_URL, $apiUrl);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          $weatherData = curl_exec($ch);
          curl_close($ch);

          if ($weatherData) {
            $weatherArray = json_decode($weatherData, true);

            // Wetterdaten
            $temp        = $weatherArray['main']['temp']        ?? '';
            $description = ucfirst($weatherArray['weather'][0]['description'] ?? '');
            $icon        = $weatherArray['weather'][0]['icon']  ?? '';
            $windSpeed   = $weatherArray['wind']['speed']       ?? '';
            $humidity    = $weatherArray['main']['humidity']    ?? '';
            $tempMax     = $weatherArray['main']['temp_max']    ?? '';
            $tempMin     = $weatherArray['main']['temp_min']    ?? '';

            // Ausgabe
            // Temperatur + Icon
            echo "<p><img src='http://openweathermap.org/img/wn/".$icon.".png' alt='".$description."'> ";
            echo $introTexte[$lang]['weather_label_temp']." ".$temp."°C</p>";

            // Wetter-Beschreibung
            echo "<p>".$introTexte[$lang]['weather_label_cond']." ".$description."</p>";

            // Windgeschwindigkeit
            echo "<p>".$introTexte[$lang]['weather_label_windspeed']." ".$windSpeed." m/s</p>";

            // Luftfeuchtigkeit
            echo "<p>".$introTexte[$lang]['weather_label_humidity']." ".$humidity."%</p>";

            // Max/Min Temperatur
            echo "<p>".$introTexte[$lang]['weather_label_tempmax']." ".$tempMax."°C</p>";
            echo "<p>".$introTexte[$lang]['weather_label_tempmin']." ".$tempMin."°C</p>";

          } else {
            echo "<p>".$introTexte[$lang]['weather_error']."</p>";
          }
          ?>
        </div>
      </div>

      <!-- Feedback -->
      <div class="feedback-section" id="feedback">
        <h3><i class="fa fa-comments icon"></i>
          <?php echo $introTexte[$lang]['feedback_title']; ?>
        </h3>
        <p><?php echo $introTexte[$lang]['feedback_text']; ?></p>
        <ul>
          <li>
            <a href="https://www.google.com/maps/place/Pension+Luttinger/reviews"
               target="_blank" rel="noopener noreferrer">
              <i class="fa fa-google icon"></i>
              <?php echo $introTexte[$lang]['feedback_google']; ?>
            </a>
          </li>
          <li>
            <a href="https://www.facebook.com/PensionLuttinger/reviews"
               target="_blank" rel="noopener noreferrer">
              <i class="fa fa-facebook icon"></i>
              <?php echo $introTexte[$lang]['feedback_facebook']; ?>
            </a>
          </li>
        </ul>

        <h4><i class="fa fa-envelope icon"></i>
          <?php echo $introTexte[$lang]['feedback_improve']; ?>
        </h4>
        <p><?php echo $introTexte[$lang]['feedback_improve_text']; ?></p>

        <?php if (!empty($error)): ?>
          <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>

        <?php if (!empty($successMessage)): ?>
          <p class="success"><?php echo $successMessage; ?></p>
        <?php endif; ?>

        <form action="" method="post">
          <label for="name"><?php echo $introTexte[$lang]['form_name_label']; ?></label><br>
          <input type="text" id="name" name="name" required><br><br>

          <label for="email"><?php echo $introTexte[$lang]['form_email_label']; ?></label><br>
          <input type="email" id="email" name="email" required><br><br>

          <label for="message"><?php echo $introTexte[$lang]['form_message_label']; ?></label><br>
          <textarea id="message" name="message" rows="5" required></textarea><br><br>

          <!-- Honeypot -->
          <input type="text" name="website" style="display:none;">

          <!-- Datenschutzerklärung Checkbox -->
          <label>
            <input type="checkbox" name="privacy" required>
            <?php echo $introTexte[$lang]['form_privacy_label']; ?>
            <a href="datenschutzerklaerung.php" target="_blank">
              <?php echo $introTexte[$lang]['form_privacy_link']; ?>
            </a>
          </label><br><br>

          <?php
          $num1 = rand(1,9);
          $num2 = rand(1,9);
          ?>
          <label for="captcha">
            <?php echo $introTexte[$lang]['form_captcha_label']." $num1 + $num2 = ?"; ?>
          </label><br>
          <input type="text" id="captcha" name="captcha" required>
          <input type="hidden" name="captcha_answer" value="<?php echo $num1 + $num2; ?>"><br><br>

          <button type="submit" class="btn btn-primary">
            <?php echo $introTexte[$lang]['form_submit_btn']; ?>
          </button>
        </form>
      </div>

    </article>
    <aside>
      <?php include('include/side.php'); ?>
    </aside>
  </section>
</main>

<footer>
  <?php include('include/footer.php'); ?>
</footer>

<?php include('include/javainclude.php'); ?>

<script>
  // Accordion
  var acc = document.getElementsByClassName('accordion');
  for (var i = 0; i < acc.length; i++) {
    acc[i].addEventListener('click', function() {
      this.classList.toggle('active');
      var panel = this.nextElementSibling;
      if (panel.style.display === 'block') {
        panel.style.display = 'none';
      } else {
        panel.style.display = 'block';
      }
    });
  }

  // TOC-Links
  function openAccordionAndScroll(accordionId, targetId) {
    var accordionBtn = document.getElementById(accordionId);
    var panel = accordionBtn.nextElementSibling;
    if (panel.style.display !== 'block') {
      accordionBtn.classList.add('active');
      panel.style.display = 'block';
    }
    var targetElement = document.getElementById(targetId);
    if (targetElement) {
      targetElement.scrollIntoView({ behavior: 'smooth' });
    }
  }

  var tocLinks = document.getElementsByClassName('toc-link');
  for (var j = 0; j < tocLinks.length; j++) {
    tocLinks[j].addEventListener('click', function(e) {
      e.preventDefault();
      var targetId = this.getAttribute('href').substring(1);
      var accordionId = this.getAttribute('data-accordion');
      if (accordionId) {
        openAccordionAndScroll(accordionId, targetId);
      } else {
        var t = document.getElementById(targetId);
        if (t) {
          t.scrollIntoView({ behavior: 'smooth' });
        }
      }
    });
  }
</script>
</body>
</html>
