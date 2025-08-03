<?php
/************************************************************
 * footer.php – dynamische Links (DE/EN) & portable Domain *
 ************************************************************/

/* Sprache sicherstellen (kommt i. d. R. aus meta.php) */
if (!isset($lang)) {
    $lang = (isset($_GET['lang']) && $_GET['lang'] === 'en') ? 'en' : 'de';
}
$isEnglish = ($lang === 'en');
$langParam = '?lang=' . $lang;

/* Basis-URL (https oder http, Hostname automatisch) */
$scheme   = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://';
$baseUrl  = $scheme . $_SERVER['HTTP_HOST'] . '/';

/* Kurze Übersetzungshilfen */
$t = [
    'cookies'      => $isEnglish ? 'This website uses cookies to improve your experience.' : 'Diese Website verwendet Cookies, um Ihre Erfahrung zu verbessern.',
    'accept'       => $isEnglish ? 'Accept'     : 'Akzeptieren',
    'decline'      => $isEnglish ? 'Decline'    : 'Ablehnen',
    'contact'      => $isEnglish ? 'Contact'    : 'Kontakt',
    'linksInfos'   => $isEnglish ? 'Links & info:' : 'Links & Infos:',
    'imprint'      => $isEnglish ? 'Legal notice'  : 'Impressum',
    'privacy'      => $isEnglish ? 'Privacy'       : 'Datenschutz',
    'location'     => $isEnglish ? 'Location & Arrival' : 'Lage & Anreise',
    'weather'      => $isEnglish ? 'Weather – Bichlbach' : 'Wetter - Bichlbach',
    'traffic'      => $isEnglish ? 'Traffic B179'  : 'Verkehrslage B179',
    'followUs'     => $isEnglish ? 'Follow us:'    : 'Folge uns:',
    'findUs'       => $isEnglish ? 'Find us on:'   : 'Finde uns auf:',
];

// === KORREKTUR: E-Mail-Adresse für Spam-Schutz zerlegen ===
$emailUser = "info";
$emailDomain = "luttinger-bichlbach.at";
?>
<section>
    <div id="cookie-consent" class="cookie-consent">
        <p>
            <?= $t['cookies']; ?>
            <a href="<?= $baseUrl; ?>impressum.php<?= $langParam; ?>#privacy"><?= $t['privacy']; ?></a>
        </p>
        <button id="accept-cookies"><?= $t['accept']; ?></button>
        <button id="decline-cookies"><?= $t['decline']; ?></button>
    </div>

    <div class="twocol">
        <div class="lefcol">
            <h3><?= $t['contact']; ?></h3>
            <address>
                <ul>
                    <li><i class="fa fa-home fa-2x"></i> <strong>Ferienwohnungen &bdquo;am&nbsp;Mühlbach&ldquo;</strong></li>
                    <li>Markus Luttinger</li>
                    <li>6621&nbsp;Bichlbach</li>
                    <li>Tirol&nbsp;&ndash; Österreich</li>
                    <li class="line">
                        <i class="fa fa-phone fa-2x"></i>
                        <a href="tel:+436769534130"><strong>+43&nbsp;676&nbsp;953&nbsp;413&nbsp;0</strong></a>
                    </li>
                    <li class="line">
                        <i class="fa fa-envelope-o fa-2x"></i>
                        <a href="mailto:<?= $emailUser . '@' . $emailDomain; ?>">
                            <strong><?= $emailUser . '@' . $emailDomain; ?></strong>
                        </a>
                    </li>
                </ul>
            </address>
        </div>

        <div class="rightcol">
            <h3><?= $t['linksInfos']; ?></h3>
            <ul>
                <li>
                    <a href="<?= $baseUrl; ?>impressum.php<?= $langParam; ?>" title="<?= $t['imprint']; ?>">
                        <?= $t['imprint']; ?>
                    </a>
                </li>
                <li>
                    <a href="<?= $baseUrl; ?>impressum.php<?= $langParam; ?>#privacy" title="<?= $t['privacy']; ?>">
                        <?= $t['privacy']; ?>
                    </a>
                </li>
                <li>
                    <i class="fa fa-map-marker fa-2x"></i>
                    <a href="<?= $baseUrl; ?>anreise.php<?= $langParam; ?>" title="<?= $t['location']; ?>">
                        <?= $t['location']; ?>
                    </a>
                </li>
                <li>
                    <a href="http://www.wetter.at/wetter/oesterreich/tirol/bichlbach" title="<?= $t['weather']; ?>" target="_blank" rel="noopener">
                        <?= $t['weather']; ?>
                    </a>
                </li>
                <li>
                    <i class="fa fa-info fa-2x"></i>
                    <a href="https://www.tirol.gv.at/verkehr/strassenbau-und-strassenerhaltung/webcams/webcams-bezirk-reutte/b-179-fernpassstrasse/"
                       title="<?= $t['traffic']; ?>" target="_blank" rel="noopener">
                        <?= $t['traffic']; ?>
                    </a>
                </li>
                <li><i class="fa fa-copyright"></i> 2023&nbsp;by&nbsp;ML-Design</li>
            </ul>
        </div>
    </div>

    <div class="twocol">
        <div class="lefcol">
            <h3><?= $t['followUs']; ?></h3>
            <ul>
                <li>
                    <i class="fa fa-facebook-official fa-2x"></i>
                    <a href="https://www.facebook.com/luttinger.bichlbach" target="_blank" rel="noopener">
                        Facebook
                    </a>
                </li>
                <li>
                    <i class="fa fa-instagram fa-2x"></i>
                    <a href="https://www.instagram.com/am_muehlbach_luttinger" target="_blank" rel="noopener">
                        Instagram
                    </a>
                </li>
                <li class="line">
                    <a href="http://www.tirol.at/" target="_blank" rel="noopener" title="Erlebnis Tirol">
                        <i class="tirol"></i> Tirol Herz der Alpen
                    </a>
                </li>
                <li>
                    <a href="http://www.zugspitzarena.com/de" target="_blank" rel="noopener" title="Bichlbach-Berwang">
                        <i class="zugarena"></i> Zugspitzarena
                    </a>
                </li>
            </ul>
        </div>

        <div class="rightcol">
            <h3><?= $t['findUs']; ?></h3>
            <ul>
                <li><a href="https://www.airbnb.at/users/show/440481164" target="_blank" rel="nofollow noopener">Airbnb</a></li>
                <li><a href="https://www.holidaycheck.at/hi/pension-am-muehlbach/71e8dafc-af70-3e15-951c-a6fe82092850" target="_blank" rel="nofollow noopener">HolidayCheck</a></li>
                <li><a href="https://www.booking.com/hotel/at/pension-am-ma1-4hlbach.de.html" target="_blank" rel="nofollow noopener">Booking</a></li>
                <li><a href="https://zugspitzarena.com/de/Unterkuenfte-Tickets/Suchen-Buchen/unterkuenfte/ZGS/f7e40e40-04e2-41bc-a7ab-05ab6ada8245/haus-am-muehlbach" target="_blank" rel="nofollow noopener">Feratel</a></li>
            </ul>
        </div>
    </div>
</section>