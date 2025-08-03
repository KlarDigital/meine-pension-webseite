<?php 
    $verzeichnis = "https://".$_SERVER['HTTP_HOST'] ."/";
    $path = dirname($_SERVER["PHP_SELF"]);
    $isEnglish = ("/en" == $path) || ("/en/ausstattung" == $path) || ("/en/bichlbach" == $path);
?>

<section>
  <div class="twocol">
    <div class="lefcol">
      <h3><?php echo $isEnglish ? "Contact" : "Kontakt"; ?></h3>
		<address>
      <ul>
        <li><i class="fa fa-home fa-2x"></i> <strong>Pension &quot;Haus am Mühlbach&quot;</strong></li>
        <li>Markus Luttinger</li>
        <li>6621 Bichlbach</li>
        <li>Tirol - Österreich</li>
        <li class="line"><i class="fa fa-phone fa-2x"></i> <a href="tel:+436607118752"><strong>+43 (0) 660 711 875 2</strong></a></li>
        <li class="line"><i class="fa fa-envelope-o fa-2x"></i> <a href="javascript:linkTo_UnCryptMailto('nbjmup;jogpAqfotjpo.mvuujohfs/bu');"><strong>info<span class="invisible">nixdu</span>@luttinger-bichlbach.at</strong></a></li>
      </ul>
      </address>    
	  </div>
    <div class="rightcol">
      <h3><?php echo $isEnglish ? "Links &amp; info:" : "Links &amp; Infos:"; ?></h3>
      <ul>
        <li><a href="<?php echo $verzeichnis . ($isEnglish ? "en/" : ""); ?>impressum.php" title="<?php echo $isEnglish ? "legal notice" : "Impressum"; ?>"><?php echo $isEnglish ? "Legal notice" : "Impressum"; ?></a></li>
        <li><a href="<?php echo $verzeichnis . ($isEnglish ? "en/" : ""); ?>impressum.php#cookies" title="<?php echo $isEnglish ? "legal notice" : "Impressum"; ?>"><?php echo $isEnglish ? "Privacy &amp; Cookies" : "Datenschutz &amp; Cookies"; ?></a></li>
        <li><i class="fa fa-map-marker fa-2x"></i> <a href="<?php echo $verzeichnis . ($isEnglish ? "en/" : ""); ?>anreise.php" title="<?php echo $isEnglish ? "Location of Pension Haus am Mühlbach" : "Lage der Pension Haus am Mühlbach"; ?>"><?php echo $isEnglish ? "Location &amp; arrival" : "Lage &amp; Anreise"; ?></a></li>
        <li><a href="http://www.wetter.at/wetter/oesterreich/tirol/bichlbach" title="<?php echo $isEnglish ? "Weather forecast Zugspitz - Arena" : "Wettervorschau Zugspitz - Arena"; ?>"><?php echo $isEnglish ? "Weather - Bichlbach" : "Wetter - Bichlbach"; ?></a></li>
        <li><i class="fa fa-info fa-2x"></i> <a href="https://www.tirol.gv.at/verkehr/strassenbau-und-strassenerhaltung/webcams/webcams-bezirk-reutte/b-179-fernpassstrasse/" title="<?php echo $isEnglish ? "Webcam B 179 Fernpassstraße" : "Verkehrslage B179"; ?>"><?php echo $isEnglish ? "Traffic conditions B179" : "Verkehrslage B179"; ?></a></li>
        <li><i class="fa fa-copyright"></i> 2023 by ML-Design</li>
      </ul>
    </div>
  </div>
  <div class="twocol">
    <div class="lefcol">
      <h3><?php echo $isEnglish ? "Follow us:" : "Folge uns:"; ?></h3>
      <ul>
        <li><i class="fa fa-facebook-official fa-2x"></i> <a href="https://www.facebook.com/pension.luttinger" title="Haus am Mühlbach">Facebook</a></li>
        <li><i class="fa fa-instagram fa-2x"></i> <a href="https://www.instagram.com/am_muehlbach.Pension_Luttinger" title="Haus am Mühlbach">Instagram</a></li>
        <li class="line"><a href="http://www.tirol.at/" title="<?php echo $isEnglish ? "Experience Tirol" : "Erlebnis Tirol"; ?>"><i class="tirol"></i><?php echo $isEnglish ? "Tirol Heart of the Alps" : "Tirol Herz der Alpen"; ?></a></li>
        <li><a href="http://www.zugspitzarena.com/de" title="Bichlbach-Berwang"><i class="zugarena"></i>Zugspitzarena</a></li>
      </ul>
    </div>
    <div class="rightcol">
      <h3><?php echo $isEnglish ? "Find us on:" : "Finde uns auf:"; ?></h3>
      <ul>
        <li><a href="https://www.airbnb.at/users/show/440481164" title="Zoover" rel="nofollow">Airbnb</a></li>
        <li><a href="https://www.holidaycheck.at/hi/pension-am-muehlbach/71e8dafc-af70-3e15-951c-a6fe82092850" title="Haus am Mühlbach" rel="nofollow">holidaycheck</a></li>
        <li><a href="https://www.booking.com/hotel/at/pension-am-ma1-4hlbach.de.html" title="Booking - Haus am Mühlbach" rel="nofollow">Booking</a></li>
        <li><a href="https://zugspitzarena.com/de/Unterkuenfte-Tickets/Suchen-Buchen/unterkuenfte/ZGS/f7e40e40-04e2-41bc-a7ab-05ab6ada8245/haus-am-muehlbach">Feratel</a></li>
      </ul>
    </div>
  </div>
</section>
