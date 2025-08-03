<?php
session_start();

// 1) Sprachdatei laden (alle Texte sind in $kontaktTexte[$lang]):
require_once('include/sprache-kontakt.php');

$formSent = false;

/**
 * CSRF-Token anlegen
 */
if (!isset($_SESSION['token'])) {
  $_SESSION['token'] = bin2hex(random_bytes(32));
}

/**
 * Hilfsfunktionen
 */
function secure_input($data) {
  return htmlspecialchars(stripslashes(trim($data)), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

function validate_email($email) {
  return (bool) filter_var($email, FILTER_VALIDATE_EMAIL);
}

function validate_recaptcha($secret, $response) {
  $url = 'https://www.google.com/recaptcha/api/siteverify';
  $data = [
    'secret'   => $secret,
    'response' => $response
  ];
  $options = [
    'http' => [
      'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
      'method'  => 'POST',
      'content' => http_build_query($data),
      'timeout' => 10
    ]
  ];
  $context        = stream_context_create($options);
  $verifyResponse = @file_get_contents($url, false, $context);

  if ($verifyResponse === false) {
    return false;
  }
  $responseData = json_decode($verifyResponse);
  return (isset($responseData->success) && $responseData->success);
}

/**
 * E-Mail an Admin in passender Sprache
 */
function generate_email(
  $kontaktTexte, $lang,
  $anrede, $nachname, $vorname, $email,
  $anreise, $abreise, $erwachsene, $kinder, $zimmer, $wohnung, $message, $IP
) {
  $subject = $kontaktTexte[$lang]['mail_subject_admin'];

  // HTML-Mail an Admin
  $html = "
    <html>
    <head>
      <style>
        body { font-family: Arial, sans-serif; }
        h1 { color: #333; }
        .header { background-color: #f8f8f8; padding: 10px; }
        .footer { background-color: #f8f8f8; padding: 10px; font-size: 0.8em; }
        p { margin-bottom: 0.8em; }
      </style>
    </head>
    <body>
      <div class='header'>
        <h1>$subject</h1>
      </div>
      <p><strong>Anrede:</strong> $anrede</p>
      <p><strong>Name:</strong> $vorname $nachname</p>
      <p><strong>E-Mail:</strong> $email</p>
      <p><strong>Anreise:</strong> $anreise<br>
         <strong>Abreise:</strong> $abreise<br>
         <strong>Erwachsene:</strong> $erwachsene<br>
         <strong>Kinder:</strong> $kinder<br>
         <strong>Zimmer:</strong> $zimmer<br>
         <strong>Wohnung:</strong> $wohnung</p>
      <p><strong>Nachricht:</strong><br>$message</p>
      <p>Gesendet von IP: $IP</p>
      <div class='footer'>
        <p>AM M&uuml;hlbach<br>
        Markus Luttinger<br>
        Wahl 109<br>
        A - 6621 Bichlbach<br>
        Tel. +43 676 953 413 0<br>
        info@luttinger-bichlbach.at<br>
        www.luttinger-bichlbach.at</p>
      </div>
    </body>
    </html>
  ";

  return $html;
}

/**
 * Bestätigungsmail an Gast
 */
function sendConfirmationEmail($post, $kontaktTexte, $lang) {
  $anrede     = secure_input($post['anrede']);
  $nachname   = secure_input($post['nachname']);
  $vorname    = secure_input($post['vorname']);
  $absender   = secure_input($post['email']);
  $anreise    = secure_input($post['anreise']);
  $abreise    = secure_input($post['abreise']);
  $erwachsene = secure_input($post['erwachsene']);
  $kinder     = secure_input($post['kinder']);
  $zimmer     = secure_input($post['zimmer']);
  $wohnung    = secure_input($post['wohnung']);
  $nachricht  = secure_input($post['message']);

  // Platzhalter in Intro ersetzen:
  $intro = str_replace(
    ['%ANREDE%', '%VORNAME%', '%NACHNAME%'],
    [$anrede, $vorname, $nachname],
    $kontaktTexte[$lang]['mail_user_body_intro']
  );

  // Weitere Labels in passender Sprache
  $labelData   = $kontaktTexte[$lang]['mail_user_body_data'];
  $dashedLine  = $kontaktTexte[$lang]['mail_user_body_hr'];
  $userOutro   = $kontaktTexte[$lang]['mail_user_body_outro'];
  $bodyText    = $kontaktTexte[$lang]['mail_user_body_text'];

  $bestHtml = "
    <html><body>
      <p>$intro</p>
      <p>$bodyText</p>
      <p>$dashedLine</p>
      <p><strong>$labelData:</strong><br>
         <strong>Anreise:</strong> $anreise<br>
         <strong>Abreise:</strong> $abreise<br>
         <strong>Erwachsene:</strong> $erwachsene<br>
         <strong>Kinder:</strong> $kinder<br>
         <strong>Zimmer:</strong> $zimmer<br>
         <strong>Wohnung:</strong> $wohnung<br><br>
         <strong>Nachricht:</strong><br>$nachricht
      </p>
      <p>$dashedLine</p>
      <p>$userOutro</p>
    </body></html>";

  $bestHtml = mb_convert_encoding($bestHtml, 'UTF-8');

  $headers  = "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/html; charset=UTF-8\r\n";
  $headers .= "From: Pension Luttinger <info@luttinger-bichlbach.at>\r\n";
  $headers .= "Reply-To: info@luttinger-bichlbach.at\r\n";

  $subjectGuest = $kontaktTexte[$lang]['mail_subject_user'];

  mail($absender, $subjectGuest, $bestHtml, $headers);
}

/**
 * Formular-Verarbeitung
 */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $secret = '6Lc9_ZUUAAAAACTWdhPH4l4ukd6vqEbSVKmDUVOp'; // dein reCAPTCHA-Secret

  // reCAPTCHA
  if (!isset($_POST['g-recaptcha-response']) || empty($_POST['g-recaptcha-response'])) {
    echo '<div id="warnung"><p><i class="fa fa-exclamation-triangle"></i> '.$kontaktTexte[$lang]['error_recaptcha_missing'].'</p></div>';
    http_response_code(400);
  }
  elseif (!validate_recaptcha($secret, $_POST['g-recaptcha-response'])) {
    echo '<div id="warnung"><p><i class="fa fa-exclamation-triangle"></i> '.$kontaktTexte[$lang]['error_recaptcha_failed'].'</p></div>';
    http_response_code(400);
  }
  else {
    // Zeitstempel (Min. 5 Sek.)
    if (isset($_POST['timestamp']) && time() - (int)$_POST['timestamp'] < 5) {
      echo '<div id="warnung"><p><i class="fa fa-exclamation-triangle"></i> '.$kontaktTexte[$lang]['error_spam_schnell'].'</p></div>';
      http_response_code(400);
    }
    else {
      // Honeypot
      if (!empty($_POST['website'])) {
        echo '<div id="warnung"><p><i class="fa fa-exclamation-triangle"></i> '.$kontaktTexte[$lang]['error_spam_honeypot'].'</p></div>';
        http_response_code(400);
      }
      else {
        // CSRF-Token
        if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['token']) {
          echo '<div id="warnung"><p><i class="fa fa-exclamation-triangle"></i> '.$kontaktTexte[$lang]['error_csrf'].'</p></div>';
          http_response_code(400);
        }
        else {
          // Eingaben normalisieren
          $anrede     = secure_input($_POST['anrede'] ?? '');
          $nachname   = secure_input($_POST['nachname'] ?? '');
          $vorname    = secure_input($_POST['vorname'] ?? '');
          $mail       = secure_input($_POST['email']    ?? '');
          $anreise    = secure_input($_POST['anreise']  ?? '');
          $abreise    = secure_input($_POST['abreise']  ?? '');
          $erwachsene = secure_input($_POST['erwachsene'] ?? '');
          $kinder     = secure_input($_POST['kinder']     ?? '');
          $zimmer     = secure_input($_POST['zimmer']     ?? '');
          $wohnung    = secure_input($_POST['wohnung']    ?? '');
          $message    = secure_input($_POST['message']    ?? '');
          $IP         = $_SERVER['REMOTE_ADDR'] ?? 'Unbekannte IP';

          $errors = [];
          if (!validate_email($mail)) {
            $errors[] = $kontaktTexte[$lang]['error_invalid_email'];
          }
          if (empty($nachname) || empty($vorname)) {
            $errors[] = $kontaktTexte[$lang]['error_names_empty'];
          }

          if (!empty($errors)) {
            echo '<div id="warnung"><ul>';
            foreach ($errors as $err) {
              echo '<li><i class="fa fa-exclamation-triangle"></i> '.htmlspecialchars($err).'</li>';
            }
            echo '</ul></div>';
            http_response_code(400);
          }
          else {
            // E-Mail an Admin
            $mailContent = generate_email(
              $kontaktTexte, $lang,
              $anrede, $nachname, $vorname, $mail,
              $anreise, $abreise, $erwachsene, $kinder, $zimmer, $wohnung, $message, $IP
            );
            $subjectAdmin = $kontaktTexte[$lang]['mail_subject_admin'];

            $headers  = "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/html; charset=UTF-8\r\n";
            $headers .= "From: info@luttinger-bichlbach.at\r\n";
            $headers .= "Reply-To: $mail\r\n";

            mail("info@luttinger-bichlbach.at", $subjectAdmin, $mailContent, $headers);

            // Bestätigung an Gast
            sendConfirmationEmail($_POST, $kontaktTexte, $lang);

            $formSent = true;
          }
        }
      }
    }
  }
}
?>
<!doctype html>
<html lang="<?php echo $lang; ?>">
<head>
  <?php include ('include/meta.php'); ?>
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/theme.css">
  <script src="https://www.google.com/recaptcha/api.js"></script>
</head>
<body>
<header>
  <?php include('include/head.php'); ?>
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
<nav id="mainmenu" class="mainmenu" itemscope itemtype="http://schema.org/SiteNavigationElement">
  <?php include('include/nav.php'); ?>
</nav>

<main id="content">
  <div class="contentinhalt clearfix">
    <article id="leftblock">
      <h1><?php echo $kontaktTexte[$lang]['heading_h1']; ?></h1>
      <div id="kontakt">
        <h2 id="anfrage"><?php echo $kontaktTexte[$lang]['heading_h2']; ?></h2>

        <?php if ($formSent): ?>
          <div id="ok">
            <p>
              <i class="fa fa-info-circle"></i>
              <strong><?php echo $kontaktTexte[$lang]['thank_you']; ?></strong><br>
              <?php echo $kontaktTexte[$lang]['thank_you_message']; ?>
            </p>
          </div>
        <?php else: ?>
          <!-- Wichtig: action mit ?lang=... beibehalten, damit nach dem Absenden en/de bleibt -->
          <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'].'?lang='.$lang); ?>" method="post">

            <!-- CSRF-Token -->
            <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['token']; ?>">

            <fieldset>
              <legend><?php echo $kontaktTexte[$lang]['legend_personal_data']; ?></legend>

              <label for="anrede"><?php echo $kontaktTexte[$lang]['label_salutation']; ?></label>
              <div class="label-input">
                <select name="anrede" id="anrede">
                  <option value="<?php echo $kontaktTexte[$lang]['option_salutation_mr']; ?>">
                    <?php echo $kontaktTexte[$lang]['option_salutation_mr']; ?>
                  </option>
                  <option value="<?php echo $kontaktTexte[$lang]['option_salutation_mrs']; ?>">
                    <?php echo $kontaktTexte[$lang]['option_salutation_mrs']; ?>
                  </option>
                </select>
              </div>

              <label for="nachname"><?php echo $kontaktTexte[$lang]['label_last_name']; ?></label>
              <div class="label-input">
                <input type="text" name="nachname" id="nachname" required>
              </div>

              <label for="vorname"><?php echo $kontaktTexte[$lang]['label_first_name']; ?></label>
              <div class="label-input">
                <input type="text" name="vorname" id="vorname" required>
              </div>

              <label for="email"><?php echo $kontaktTexte[$lang]['label_email']; ?></label>
              <div class="label-input">
                <input type="email" name="email" id="email" required>
              </div>
            </fieldset>

            <fieldset>
              <legend><?php echo $kontaktTexte[$lang]['legend_request_data']; ?></legend>

              <label for="datumanzeige1"><?php echo $kontaktTexte[$lang]['label_arrival_date']; ?></label>
              <div class="label-input-mittesmall">
                <input type="date" name="anreise" id="datumanzeige1">
                <div class="error" id="anreiseError"></div>
              </div>

              <label for="datumanzeige2"><?php echo $kontaktTexte[$lang]['label_departure_date']; ?></label>
              <div class="label-input-mittesmall">
                <input type="date" name="abreise" id="datumanzeige2">
                <div class="error" id="abreiseError"></div>
              </div>

              <label for="erwachsene"><?php echo $kontaktTexte[$lang]['label_adults']; ?></label>
              <div class="label-input-mittesmall">
                <select name="erwachsene" id="erwachsene">
                  <?php for($i=1; $i<=9; $i++): ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                  <?php endfor; ?>
                </select>
              </div>

              <label for="kinder"><?php echo $kontaktTexte[$lang]['label_children']; ?></label>
              <div class="label-input-mittesmall">
                <select name="kinder" id="kinder">
                  <?php for($i=0; $i<=9; $i++): ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                  <?php endfor; ?>
                </select>
              </div>

              <label for="zimmer"><?php echo $kontaktTexte[$lang]['label_rooms']; ?></label>
              <div class="label-input-mittesmall">
                <select name="zimmer" id="zimmer">
                  <?php for($i=0; $i<=9; $i++): ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                  <?php endfor; ?>
                </select>
              </div>

              <label for="wohnung"><?php echo $kontaktTexte[$lang]['label_apartments']; ?></label>
              <div class="label-input-mittesmall">
                <select name="wohnung" id="wohnung">
                  <?php for($i=0; $i<=9; $i++): ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                  <?php endfor; ?>
                </select>
              </div>
            </fieldset>

            <fieldset>
              <legend><?php echo $kontaktTexte[$lang]['legend_comments']; ?></legend>
              <label for="message"><?php echo $kontaktTexte[$lang]['label_textarea']; ?></label>
              <textarea name="message" id="message" rows="7" cols="5"></textarea>
            </fieldset>

            <!-- Honeypot -->
            <input type="text" name="website" style="display:none;">

            <!-- Zeitstempel -->
            <input type="hidden" name="timestamp" value="<?= time(); ?>">

            <fieldset>
              <div class="g-recaptcha" data-sitekey="6Lc9_ZUUAAAAAIO7z8xt3e3C_7PqvyafeOo60_wl"></div>
            </fieldset>

            <input type="submit" name="submit" class="submit" value="<?php echo $kontaktTexte[$lang]['btn_send']; ?>">
            <input type="reset"  name="reset"  class="reset"  value="<?php echo $kontaktTexte[$lang]['btn_reset']; ?>">
          </form>
        <?php endif; ?>

        <address class="blockcenter">
          <img src="Bilder/logo-print.jpg" alt="Haus am Mühlbach Bichlbach - Pension Luttinger LOGO"
               width="490" height="200" title="Logo PENSION LUTTINGER">
          <ul itemscope itemtype="http://schema.org/Organization">
            <li class="bold" itemprop="name">am Mühlbach - Pension Luttinger</li>
            <li>Markus Luttinger</li>
            <li>
              <ul itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                <li itemprop="streetAddress">Wahl 109</li>
                <li><i class="fa fa-map-marker"></i>
                  <span itemprop="postalCode">6621</span> <span itemprop="addressLocality">Bichlbach</span></li>
                <li>Österreich - Tirol</li>
                <li class="telefon">
                  <span itemprop="telephone">
                    <a href="tel:+4366769534130"><i class="fa fa-phone"></i> +43 676 953 413 0</a>
                  </span>
                </li>
                <li class="email">
                  <a href="javascript:linkTo_UnCryptMailto('nbjmup;jogpAqfotjpo.mvuujohfs/bu');">
                    <i class="fa fa-envelope-o"></i> info<span class="invisible">nixdu</span>@luttinger-bichlbach.at
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </address>
      </div>
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
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<!-- Datepicker-Initialisierung + JS-Fehler in beiden Sprachen -->
<script>
  // Lokalisierte Fehlermeldungen aus PHP
  var dateErrorInvalid = "<?php echo $kontaktTexte[$lang]['error_date_invalid']; ?>";
  var dateErrorRange   = "<?php echo $kontaktTexte[$lang]['error_date_range']; ?>";

  $(function() {
    $("#datumanzeige1").datepicker({
      dateFormat: "yy-mm-dd",
      minDate: 0,
      maxDate: "+1Y"
    });

    $("#datumanzeige2").datepicker({
      dateFormat: "yy-mm-dd",
      minDate: 0,
      maxDate: "+1Y"
    });
  });

  function checkDates() {
    var anreiseInput = document.getElementById("datumanzeige1");
    var abreiseInput = document.getElementById("datumanzeige2");
    var anreiseDate = new Date(anreiseInput.value);
    var abreiseDate = new Date(abreiseInput.value);
    var anreiseError = document.getElementById("anreiseError");
    var abreiseError = document.getElementById("abreiseError");

    // Leeren
    anreiseError.textContent = "";
    abreiseError.textContent = "";
    anreiseError.classList.remove("active");
    abreiseError.classList.remove("active");
    anreiseInput.classList.remove("inputsmall-error");
    abreiseInput.classList.remove("inputsmall-error");

    // Prüfen
    if (isNaN(anreiseDate) || isNaN(abreiseDate)) {
      anreiseError.textContent = dateErrorInvalid;
      anreiseError.classList.add("active");
      anreiseInput.classList.add("inputsmall-error");
      return false;
    }

    if (abreiseDate <= anreiseDate) {
      abreiseError.textContent = dateErrorRange;
      abreiseError.classList.add("active");
      abreiseInput.classList.add("inputsmall-error");
      return false;
    }
    return true;
  }

  document.querySelector("form")?.addEventListener("submit", function(event) {
    if (!checkDates()) {
      event.preventDefault();
    }
  });
</script>
</body>
</html>
