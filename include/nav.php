<?php
/********************************************************************
 *  nav.php – kleine Fehler­behebung, keine Funktions­änderungen   *
 ********************************************************************/

/* 1) Sprache sicher ermitteln
 * ---------------------------------------------------------------
 *  – nutzt $lang, falls bereits über include() gesetzt
 *  – fällt sonst auf $language (Meta-Klasse) zurück
 *  – letzt­möglicher Fallback: URL-Parameter / Standard „de“      */
$lang = $lang
  ?? ($language ?? ((isset($_GET['lang']) && $_GET['lang'] === 'en') ? 'en' : 'de'));

/* 2) Grund­legende Hilfs­variablen */
$verzeichnis = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off'
    ? 'https://' : 'http://')
  . $_SERVER['HTTP_HOST'] . '/';

$langParam   = '?lang=' . $lang;
$isEnglish   = ($lang === 'en');

/* 3) Text-Tabellen   */
$menuItems = [
  'index.php'              => ['de' => 'Home',                     'en' => 'Home'],
  'unser-haus.php'         => ['de' => 'Unser Haus',               'en' => 'Our House'],
  'inklusivleistungen.php' => ['de' => 'Inklusivleistungen',       'en' => 'Services Included'],
  'zimmer-wohnung.php'     => ['de' => 'Zimmer &amp; Ferienwohnungen','en' => 'Apartments'],
  'anreise.php'            => ['de' => 'Lage &amp; Anreise',       'en' => 'Location &amp; Arrival'],
  'aktivitaeten.php'       => ['de' => 'Aktivitäten',              'en' => 'Activities'],
  'kontakt.php'            => ['de' => 'Kontakt',                  'en' => 'Contact']
];

$anfragenText = $isEnglish ? 'Request'  : 'Anfragen';
$buchenText   = $isEnglish ? 'Book now' : 'Buchen';
?>

<!-- ======================= HTML bleibt wie gehabt ======================= -->
<div class="menu-overlay">
  <div class="close-icon">✕</div>
  <div class="menu-overlay-inner">
    <ul class="menu-list">
      <?php foreach ($menuItems as $page => $labels): ?>
        <li>
          <a href="<?= $verzeichnis . $page . $langParam; ?>">
            <?= $labels[$lang]; ?>
          </a>
        </li>
      <?php endforeach; ?>

      <li>
        <a href="<?= $verzeichnis; ?>kontakt.php#anfrage<?= $langParam; ?>"
           class="overlay-anfragen-button">
          <?= $anfragenText; ?>
        </a>
      </li>

      <li>
        <a href="https://beds24.com/booking.php?propid=16850&referer=BookingLink"
           class="buchen-button" target="_blank" rel="noopener noreferrer">
          <?= $buchenText; ?> <span class="external-icon"></span>
        </a>
      </li>

      <li class="language">
        <a href="<?= $verzeichnis; ?>index.php?lang=de">DE</a> |
        <a href="<?= $verzeichnis; ?>index.php?lang=en">EN</a>
      </li>
    </ul>

    <div class="menu-info">
      <img src="<?= $verzeichnis; ?>Bilder/logo-am-muehlbach_bichlbach_tirol.png"
           alt="Pension Luttinger" class="menu-info-logo">

      <p>
        <strong>Apartment Luttinger</strong><br>
        Wahl 109<br>
        6621 Bichlbach<br>
        +43 676 953 413 0<br>
        <a href="mailto:info@luttinger-bichlbach.at">info@luttinger-bichlbach.at</a>
      </p>

      <div class="social-links">
        <a href="https://www.facebook.com/pension.luttinger/"
           class="social-icon" target="_blank" rel="noopener noreferrer">
          <i class="fa fa-facebook-official"></i>
        </a>
        <a href="https://www.instagram.com/am_muehlbach.Pension_Luttinger/"
           class="social-icon" target="_blank" rel="noopener noreferrer">
          <i class="fa fa-instagram"></i>
        </a>
      </div>
    </div>
  </div>
</div>
