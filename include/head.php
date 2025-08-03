<?php
// -------- Basis-URL dynamisch bestimmen --------
$scheme   = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://';
$baseUrl  = $scheme . $_SERVER['HTTP_HOST'] . '/';

// -------- Sprachumschaltung via URL-Parameter (SAUBERE VERSION) --------
// KORREKTUR: Stellt sicher, dass 'index.php' aus der URL entfernt wird
$currentScript = str_replace('/index.php', '/', $_SERVER['PHP_SELF']);
$currentQuery  = $_SERVER['QUERY_STRING'];
parse_str($currentQuery, $queryParams);
unset($queryParams['lang']); // Entfernt einen bestehenden 'lang'-Parameter
$baseQuery = http_build_query($queryParams);
$baseUrlRel = $currentScript . ($baseQuery ? '?' . $baseQuery : '');

// Deutsche URL ist die saubere Basis-URL
$deutschLink = $baseUrlRel;

// Englische URL fügt ?lang=en hinzu
$englischLink = rtrim($baseUrlRel, '/') . '/?' . ($baseQuery ? $baseQuery . '&' : '') . 'lang=en';
// Bereinigt doppelte Slashes oder Fragezeichen
$englischLink = str_replace('//?', '/?', $englischLink);

// $lang kommt aus meta.php
$anfragenText = ($lang === 'en') ? 'Request'   : 'Anfragen';
$buchenText   = ($lang === 'en') ? 'Book now'  : 'Buchen';

// Kontakt-Link inkl. Sprache/Anker
$kontaktLink = ($lang === 'en')
    ? 'kontakt.php?lang=en#request'
    : 'kontakt.php?lang=de#anfrage';
?>
<div id="head-inhalt">
    <div class="head-left">
        <ul class="language">
            <li class="lang_de"><a rel="alternate" hreflang="de" href="<?php echo htmlspecialchars($deutschLink); ?>">DE</a></li>
            <li><a rel="alternate" hreflang="en" href="<?php echo htmlspecialchars($englischLink); ?>">EN</a></li>
        </ul>
    </div>

    <div class="head-center">
        <div id="head-logo">
            <a href="<?php echo $baseUrl; ?>">
                <img src="<?php echo $baseUrl; ?>Bilder/logo-am-muehlbach_bichlbach_tirol.png" alt="Ferienwohnungen Luttinger">
            </a>
        </div>
        <div class="head-subtitle">Bichlbach&nbsp;|&nbsp;Tirol</div>
    </div>

    <div class="head-right">
        <nav class="secondmenu menuright" id="menuright">
            <ul class="menu">
                <li class="booking request"><a href="<?php echo $kontaktLink; ?>"><?php echo $anfragenText; ?></a></li>
                <li class="booking">
                    <a href="https://beds24.com/booking.php?propid=16850&amp;referer=BookingLink" target="_blank" rel="noopener noreferrer">
                        <?php echo $buchenText; ?>
                    </a>
                </li>
                <li class="mobile-menu-icon"><div class="menu-icon"><i class="fa fa-bars" aria-hidden="true"></i></div></li>
            </ul>
        </nav>
    </div>
</div>