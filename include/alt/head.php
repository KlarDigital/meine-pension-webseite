<?php $path = dirname($_SERVER["PHP_SELF"]);
$ordner = ''; // Initialize $ordner to an empty string

if ("/gbook" == $path or "/ausstattung" == $path or "/en/ausstattung" == $path or "/bichlbach" == $path or "/en/bichlbach" == $path) { 
    $unterseite = '0'; 
    $ordner = substr($path, strrpos($path, "/") + 1) . "/"; 
} 

$deutsch = "/" . $ordner . basename($_SERVER['PHP_SELF']);
$englisch = (isset($_en['SERVER_NAME']) ? $_en['SERVER_NAME'] : '') . "/en/" . $ordner . basename($_SERVER['PHP_SELF']);

if ( "/en" == $path or "/en/ausstattung" == $path ) { 
?>
<div id="head-inhalt">
  <ul class="language">
    <li><a rel="alternate" class="lang_de" href="<?php echo $deutsch; ?>" title="Deutsch">DE</a></li>
    <li><a rel="alternate" class="lang_en" href="<?php echo $englisch; ?>" title="Englisch">EN</a></li>
  </ul>
  <div id="head-logo"> <img class="print-logo" src="<?php if ("0" == $unterseite) {echo "../"; } ?>../Bilder/logo-print.jpg" alt="Pension Luttinger" title="Pension Luttinger"><a href="<?php if ("0" == $unterseite) {echo "../"; } ?>index.php" title="Am Mühlbach - Luttinger Holiday Apartments">
    <h1>Am Mühlbach - Luttinger Holiday Apartments</h1>
    </a> </div>
  <address itemscope itemtype="http://schema.org/LocalBusiness" id="head-inhalt-anschrift">
  <ul>
    <li class="title"><span itemprop="name">Apartment Luttinger</span> - <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"><span itemprop="streetAddress">Wahl 109</span> - <span itemprop="postalCode">6621</span> <span itemprop="addressLocality">Bichlbach</span></span></li>
    <li itemprop="telephone"><a href="tel:+436606017890"><i class="fa fa-phone"></i> +43 (0) 676 953 413 0</a></li>
    <li><a href="javascript:linkTo_UnCryptMailto('nbjmup;jogpAqfotjpo.mvuujohfs/bu');"><i class="fa fa-envelope-o"></i> info<span class="invisible">nixdu</span>@luttinger-bichlbach.at</a></li>
  </ul>
  </address>
  <nav class="secondmenu menuright" itemscope="" itemtype="http://schema.org/SiteNavigationElement" id="menuright">
    <ul class="menu">
      <li class="booking request"><a href="<?php if ("0" == $unterseite) {echo "../"; } ?>kontakt.php#anfrage">Enquiry</a></li>
      <li class="booking"><a href="https://beds24.com/booking.php?propid=16850&referer=BookingLink">Book now</a></li>
    </ul>
  </nav>
</div>
<?php } else { ?>
<div id="head-inhalt">
  <ul class="language">
    <li><a rel="alternate" class="lang_de" href="<?php echo $deutsch; ?>" title="Deutsch">DE</a></li>
    <li><a rel="alternate" class="lang_en" href="<?php echo $englisch; ?>" title="Englisch">EN</a></li>
  </ul>
  <div id="head-logo"> <img class="print-logo" src="<?php if ("0" == $unterseite) {echo "../"; } ?>Bilder/logo-print.jpg" alt="Pension Luttinger" title="Pension Luttinger"><a href="<?php if ("0" == $unterseite) {echo "../"; } ?>index.php" title="am Mühlbach - Ferienwohnungen Luttinger">
    <h1>am Mühlbach - Ferienwohnungen Luttinger</h1>
    </a> </div>
  <address itemscope itemtype="http://schema.org/LocalBusiness" id="head-inhalt-anschrift">
  <ul>
    <li class="title"><span itemprop="name">Ferienwohnungen Luttinger</span> - <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"><span itemprop="streetAddress">Wahl 109</span> - <span itemprop="postalCode">6621</span> <span itemprop="addressLocality">Bichlbach</span></span></li>
    <li itemprop="telephone"><a href="tel:+436606017890"><i class="fa fa-phone"></i> +43 (0) 676 953 413 0</a></li>
    <li><a href="javascript:linkTo_UnCryptMailto('nbjmup;jogpAqfotjpo.mvuujohfs/bu');"><i class="fa fa-envelope-o"></i> info<span class="invisible">nixdu</span>@luttinger-bichlbach.at</a></li>
  </ul>
  </address>
  <nav class="secondmenu menuright" itemscope="" itemtype="http://schema.org/SiteNavigationElement" id="menuright">
    <ul class="menu">
      <li class="booking request"><a href="<?php if ("0" == $unterseite) {echo "../"; } ?>kontakt.php#anfrage">Anfragen</a></li>
      <li class="booking"><a href="https://beds24.com/booking.php?propid=16850&referer=BookingLink">Buchen</a></li>
    </ul>
  </nav>
</div>
<?php } ?>
