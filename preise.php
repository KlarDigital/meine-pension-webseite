<?php
include_once 'include/db/db_connect.php';

$query = "SELECT
			`id`, `typ`, `Saison`, `anzahl`, `preis`, `pluspers`, `pluskind` 
		FROM 
			`Preise` 
		ORDER BY 
			`id`";

if ( $result = $mysqli->query( $query ) ) {
  $preise = $result->fetch_all( MYSQLI_ASSOC );
}
$fewo_sommer_hs = $preise[ 0 ][ preis ];
$fewo_sommer_hspers = $preise[ 0 ][ pluspers ];
$fewo_sommer_hskind = $preise[ 0 ][ pluskind ];
$fewo_sommer_ns = $preise[ 1 ][ preis ];
$fewo_sommer_nspers = $preise[ 1 ][ pluspers ];
$fewo_sommer_nskind = $preise[ 1 ][ pluskind ];
$fewo_winter_hs = $preise[ 2 ][ preis ];
$fewo_winter_hspers = $preise[ 2 ][ pluspers ];
$fewo_winter_hskind = $preise[ 2 ][ pluskind ];
$fewo_winter_ns = $preise[ 3 ][ preis ];
$fewo_winter_nspers = $preise[ 3 ][ pluspers ];
$fewo_winter_nskind = $preise[ 3 ][ pluskind ];

$zimmer_sommer_hs = $preise[ 4 ][ preis ];
$zimmer_sommer_hspers = $preise[ 4 ][ pluspers ];
$zimmer_sommer_hskind = $preise[ 4 ][ pluskind ];
$zimmer_sommer_ns = $preise[ 5 ][ preis ];
$zimmer_sommer_nspers = $preise[ 5 ][ pluspers ];
$zimmer_sommer_nskind = $preise[ 5 ][ pluskind ];
$zimmer_winter_hs = $preise[ 6 ][ preis ];
$zimmer_winter_hspers = $preise[ 6 ][ pluspers ];
$zimmer_winter_hskind = $preise[ 6 ][ pluskind ];
$zimmer_winter_ns = $preise[ 7 ][ preis ];
$zimmer_winter_nspers = $preise[ 7 ][ pluspers ];
$zimmer_winter_nskind = $preise[ 7 ][ pluskind ];

?>
<!doctype html>
<html class="no-js" prefix="dc: http://purl.org/dc/elements/1.1/" lang="de">
<head>
<?php include ('include/meta.php');  ?>
</head>
<body>
<!--[if lt IE 8]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<header>
  <?php include ('include/head.php');  ?>
</header>
<div id="sliderglobal">
  <div id="sliderinhaltglobal"><img src="Bilder/banner-header/banner-preise.jpg" width="972" height="210" alt="Zugspitzarena Luttinger"></div>
</div>
<nav id="mainmenu" class="mainmenu" itemscope="" itemtype="http://schema.org/SiteNavigationElement">
  <?php include ('include/nav.php');  ?>
</nav>
<main id="content">
  <div class="contentinhalt clearfix">
    <article id="leftblock">
      <h1>Preise für unsere Zimmer und Ferienwohnungen</h1>
      <section>
        <h2><i class="fa fa-money fa-1x"></i>Preisinformation</h2>
        <p>Die Preise verstehen sich pro Appartement/Nacht exklusive Ortstaxe.</p>
        <p>Für Kurzaufenthalte bis 3 Tage wird ein Zuschlag von 10% verrechnet.</p>
        <p>Ortstaxe: ganzjährig €3,00 pro Pers und Nacht. Kinder und Jugendliche unter 15 Jahren sind von der Ortstaxe befreit.</p>
        <p>Endreinigung: €45</p>
        <p>Sie verfügen im gesamten Haus über kostenloses W-Lan.</p>
        <p>Gerne sind wir Ihnen bei besonderen Wünschen oder Tischreservierungen usw. behilflich.</p>
      </section>
      <section>
        <h2><i class="fa fa-bed fa-1x"></i>Buchung - Stornierung</h2>
        <article>
          <h3>Stornobedingungen</h3>
          <ul>
            <li>bis 1 Monat vor dem Ankunftstag 40 % vom gesamten Arrangementpreis</li>
            <li>bis 1 Woche vor dem Ankunftstag 70 % vom gesamten Arrangementpreis</li>
            <li>in der letzten Woche vor dem Ankunftstag 90 % vom gesamten Arrangementpreis</li>
          </ul>
          <p>Anzahlung: 40% nach Abschluss der Buchung.</p>
          <p>Dies gilt für den Fall des Rücktrittes durch den Gast = abweichende Vereinbarungen zu den AGBH 2006 Punkt 5.5 und 5.6</p>
          <p>Das Widerrufsrecht nach §18 Abs. 1 Z. 10 FAGG kommt nicht zur Anwendung. Mit Ausnahme der Stornobedingungen siehe oben (Punkt 5.5 und 5.6) gelten die Allgemeinen Geschäftsbedingungen für die Hotellerie.</p>
          <p>Buchungsänderungen sowie Stornierungen werden nur in schriftlicher Form entgegengenommen.</p>
          <p>Damit für Sie keine Unkosten entstehen, empfehlen wir Ihnen den Abschluss einer Reiserücktrittskostenversicherung.</p>
        </article>
      </section>
      <section>
        <h2>Zimmer mit Dusche/WC</h2>
        <table>
          <tr>
            <td>&nbsp;</td>
            <td><strong>Pro Person</strong></td>
            <td>&nbsp;</td>
            <td><strong>Pro Person</strong></td>
          </tr>
          <tr>
            <td><strong>Sommer HS</strong></td>
            <td>€ <?php echo number_format($zimmer_sommer_hs, 2, ',','.'); ?></td>
            <td><strong>Sommer NS</strong></td>
            <td>€ <?php echo number_format($zimmer_sommer_ns, 2, ',','.'); ?></td>
          </tr>
          <tr>
            <td><strong>Winter HS</strong></td>
            <td>€ <?php echo number_format($zimmer_winter_hs, 2, ',','.'); ?></td>
            <td><strong>Winter NS</strong></td>
            <td>€ <?php echo number_format($zimmer_winter_ns, 2, ',','.'); ?></td>
          </tr>
        </table>
        <p><strong>Preise exclusive Kurtaxe (€ 3,00 pro Tag und Person ab 15 Jahren)</strong> <br>
          Achtung: Aktueller Preis bei Vereinbarung (E-Mail,..), Saisonsabhängig!</p>
      </section>
      <section>
        <h2>Appartements - Ferienwohnungen</h2>
        <table>
          <tr>
            <td>&nbsp;</td>
            <td><strong>Für &quot;2 Personen&quot;</strong></td>
            <td><strong>Für &quot;3 Personen&quot;</strong></td>
            <td><strong>Für &quot;4 Personen&quot;</strong></td>
          </tr>
          <tr>
            <td><strong>Sommer HS</strong></td>
            <td>€ <?php echo number_format($fewo_sommer_hs, 2, ',','.'); ?></td>
            <td>€ <?php echo number_format($fewo_sommer_hs + $fewo_sommer_hspers, 2, ',','.'); ?></td>
            <td>€ <?php echo number_format($fewo_sommer_hs + ($fewo_sommer_hspers * 2), 2, ',','.'); ?></td>
          </tr>
          <tr>
            <td><strong>Sommer NS</strong></td>
            <td>€ <?php echo number_format($fewo_sommer_ns, 2, ',','.'); ?></td>
            <td>€ <?php echo number_format($fewo_sommer_ns + $fewo_sommer_nspers, 2, ',','.'); ?></td>
            <td>€ <?php echo number_format($fewo_sommer_ns + ($fewo_sommer_nspers * 2), 2, ',','.'); ?></td>
          </tr>
          <tr>
            <td><strong>Winter HS</strong></td>
            <td>€ <?php echo number_format($fewo_winter_hs, 2, ',','.'); ?></td>
            <td>€ <?php echo number_format($fewo_winter_hs + $fewo_winter_hspers, 2, ',','.'); ?></td>
            <td>€ <?php echo number_format($fewo_winter_hs + ($fewo_winter_hspers * 2), 2, ',','.'); ?></td>
          </tr>
          <tr>
            <td><strong>Winter NS</strong></td>
            <td>€ <?php echo number_format($fewo_winter_ns, 2, ',','.'); ?></td>
            <td>€ <?php echo number_format($fewo_winter_ns + $fewo_winter_nspers, 2, ',','.'); ?></td>
            <td>€ <?php echo number_format($fewo_winter_ns + ($fewo_winter_nspers * 2), 2, ',','.'); ?></td>
          </tr>
        </table>
        <p><strong>Preise exclusive Kurtaxe (€ 3,00 pro Person/Tag ab 15 Jahren) Endreinigung: € 40,00 </strong> <br>
          Achtung: Aktueller Preis bei Vereinbarung (E-Mail,..), Saisonsabhängig!</p>
      </section>
      <section>
        <h3>Saisonen</h3>
        <strong> Sommer HS: </strong>16.06.xxxx bis 28.10.xxxx<br>
        <strong> Sommer NS: </strong>01.05.xxxx bis 15.06.xxxx und 29.10.xxxx bis 19.12.xxxx<br>
        <strong>Winter HS:</strong> 20.12.xxxx bis 07.01.xxxx und 04.02.xxxx bis 10.03.xxxx<br>
        <strong>Winter NS:</strong> 08.01.xxxx bis 03.02.xxxx und 11.03.xxxx bis 28.04.xxxx<br>
      </section>
      <section>
        <h3>Mindestaufenthaltsdauer:</h3>
        <p>KW 52 und 1 (Weihnachten/Neujahr) - 5 Übernachtungen<br>
          Mindestaufenthalt an den Wochenenden - 2 Nächte</p>
      </section>
      <section>
        <h3>Service &amp; Ermäßigungen</h3>
        <strong>Kinderermäßigung:</strong> Je nach Alter, auf Anfrage<br>
        <strong>Brötchenservice:</strong> Bitte Bestellung am Vortag, an Sonn- und Feiertagen werden wir leider nicht beliefert. </section>
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