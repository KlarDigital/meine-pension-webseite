<?php
include_once '../include/db/db_connect.php';

$query = "SELECT
			`id`, `typ`, `Saison`, `anzahl`, `preis`, `pluspers`, `pluskind` 
		FROM 
			`Preise` 
		ORDER BY 
			`id`";
			
if($result = $mysqli->query($query)) { 
	$preise = $result->fetch_all(MYSQLI_ASSOC);
}
$fewo_sommer_hs = $preise[0][preis];
$fewo_sommer_hspers = $preise[0][pluspers];
$fewo_sommer_hskind = $preise[0][pluskind];
$fewo_sommer_ns = $preise[1][preis];
$fewo_sommer_nspers = $preise[1][pluspers];
$fewo_sommer_nskind = $preise[1][pluskind];
$fewo_winter_hs = $preise[2][preis];
$fewo_winter_hspers = $preise[2][pluspers];
$fewo_winter_hskind = $preise[2][pluskind];
$fewo_winter_ns = $preise[3][preis];
$fewo_winter_nspers = $preise[3][pluspers];
$fewo_winter_nskind = $preise[3][pluskind];

$zimmer_sommer_hs = $preise[4][preis];
$zimmer_sommer_hspers = $preise[4][pluspers];
$zimmer_sommer_hskind = $preise[4][pluskind];
$zimmer_sommer_ns = $preise[5][preis];
$zimmer_sommer_nspers = $preise[5][pluspers];
$zimmer_sommer_nskind = $preise[5][pluskind];
$zimmer_winter_hs = $preise[6][preis];
$zimmer_winter_hspers = $preise[6][pluspers];
$zimmer_winter_hskind = $preise[6][pluskind];
$zimmer_winter_ns = $preise[7][preis];
$zimmer_winter_nspers = $preise[7][pluspers];
$zimmer_winter_nskind = $preise[7][pluskind];

?>
<!doctype html>
<html class="no-js" prefix="dc: http://purl.org/dc/elements/1.1/" lang="de">
<head>
<?php include ('../include/meta.php');  ?>
</head>
<body>
<!--[if lt IE 8]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<header>
  <?php include ('../include/head.php');  ?>
</header>
<div id="sliderglobal">
  <div id="sliderinhaltglobal"><img src="../Bilder/banner-header/banner-won6.jpg" width="972" height="210" alt="Zugspitzarena Luttinger"></div>
</div>
<nav id="mainmenu" class="mainmenu" itemscope="" itemtype="http://schema.org/SiteNavigationElement">
  <?php include ('../include/nav.php');  ?>
</nav>
<main id="content">
  <div class="contentinhalt clearfix">
    <article id="leftblock">
      <h1>Ferienwohnung - Apartment 9</h1>
      <section class="beschreibung">
        <h2>Apartment für 4 Personen - 44m2</h2>
        <div class="plan"><a class="fancybox" data-fancybox-group="group1" href="../Bilder/wohnung9/wohnung9-grundriss-g.jpg"><img src="../Bilder/wohnung9/wohnung9-grundriss.jpg" width="225" height="226" alt="Appartement 9"></a>Grundriss - Ferienwohnung "9"</div>
        <p>Die Großzügigkeit der Ferienwohnung &quot;9&quot; liegt im 2 Stock, der Ausblick in beide Richtungen ins Bergpanorama Tiroler Zugspitzarena wird Sie begeistern. Schlafzimmer mit Kleiderschrank, Küchenecke mit Esstisch, im Wohnbereich mit ausziehbarer Doppelcouch, SAT-TV und Balkon</p>
        <ul>
          <li>Für 2 bis 4 Personen</li>
          <li><strong>Bettwäsche</strong></li>
          <li><strong>Handtücher</strong></li>
          <li><strong>Küchenausstattung</strong> &quot;Geschirr, Kochtöpfe,..&quot;</li>
          <li><strong>Verpflegung:</strong> ohne</li>
          <li><strong>Zimmerart:</strong> Appartement</li>
          <li><strong>Lage:</strong> Nord/Ost-Seite, 2 Stock</li>
        </ul>
        <p>Alle Zimmer und Ferienwohnungen sind NICHTRAUCHERZIMMER!
          Gerne können Sie zum Rauchen den Balkon benutzen. Wir bitten um Verständnis.</p>
        <p><a href="../kontakt.php" title="Kontaktieren Sie uns" class="button"><i class="fa fa-envelope"></i> Jetzt anfragen</a> <a href="../buchen.php" title="Jetzt Buchen" class="button"><i class="fa fa-sign-in"></i> Jetzt Buchen</a></p>
        <p><a href="../inklusivleistungen.php" title="Unsere Leistungen">Inklusivleistungen</a></p>
        <div class="dateninfo"><a class="youtube" data-fancybox-type="iframe" href="panoramas/pan9.php"><i class="fa fa-repeat"></i> 360° Panoramas</a> <span class="qmroom"><i class="fa fa-bed"></i> Ferienwohnung - Größe 43,8m²</span></div>
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
      <section class="imagewallcenter">
        <h2>Bilder der Ferienwohnung</h2>
        <figure><a class="fancybox" data-fancybox-group="group1" href="../Bilder/wohnung9/ferw9gang.g.jpg"><img src="../Bilder/wohnung9/ferw9gang.JPG" width="200" height="267" alt="Gardarobe Pension Luttinger"></a>
          <figcaption>Gardarobe Ferienwohnung &quot;9&quot;</figcaption>
        </figure>
        <figure><a class="fancybox" data-fancybox-group="group1" href="../Bilder/wohnung9/ferw9wohn1.g.jpg"><img src="../Bilder/wohnung9/ferw9wohn1.JPG" alt="Wohnzimmer Ferienwohnung Pension Luttinger" width="200" height="267"></a>
          <figcaption>Wohnraum Ferienwohnung &quot;9&quot;</figcaption>
        </figure>
        <figure><a class="fancybox" data-fancybox-group="group1" href="../Bilder/wohnung9/ferw9wohn2.g.jpg"><img src="../Bilder/wohnung9/ferw9wohn2.JPG" alt="Wohnzimmer Ferienwohnung Pension Luttinger" width="267" height="200"></a>
          <figcaption>Wohnraum Ferienwohnung &quot;9&quot;</figcaption>
        </figure>
        <figure><a class="fancybox" data-fancybox-group="group1" href="../Bilder/wohnung9/ferw9zimmer.g.jpg"><img src="../Bilder/wohnung9/ferw9zimmer.jpg" alt="SchlafzimmerFerienwohnung Pension luttinger" width="221" height="200"></a>
          <figcaption>Schlafzimmer Ferienwohnung &quot;9&quot;</figcaption>
        </figure>
        <figure><a class="fancybox" data-fancybox-group="group1" href="../Bilder/wohnung9/ferw9bad.g.jpg"><img src="../Bilder/wohnung9/ferw9bad.jpg" alt="Bad Ferienwohnung Pension Luttinger" width="150" height="200"></a>
          <figcaption>Du/WC Ferienwohnung &quot;9&quot;</figcaption>
        </figure>
      </section>
      <section class="imagewallcenter">
        <h2>Ausblick - Urlaubsregion Bichlbach</h2>
        <figure><a class="fancybox" data-fancybox-group="group1" href="../Bilder/wohnung9/panorama.sommer.g.jpg"><img src="../Bilder/wohnung9/panorama.sommer.jpg" alt="Ferienwohnung Pension Luttinger Bichlbach Sommer - Kohlberg" width="267" height="200"/></a>
          <figcaption>Pension Luttinger - Sommer Panorama</figcaption>
        </figure>
        <figure><a class="fancybox" data-fancybox-group="group1" href="../Bilder/wohnung9/panorama.sommer2.g.jpg"><img src="../Bilder/wohnung9/panorama.sommer2.jpg" alt="Ferienwohnung Pension Luttinger Bichlbach Berwang" width="267" height="200"/></a>
          <figcaption>Sommer - Bichlbach, Berwang Panorama</figcaption>
        </figure>
        <figure><a class="fancybox" data-fancybox-group="group1" href="../Bilder/wohnung9/panorama.sommer3.g.jpg"><img src="../Bilder/wohnung9/panorama.sommer3.jpg" alt="Ferienwohnung Pension Luttinger Bichlbach Sommer Mähberg" width="267" height="200"/></a>
          <figcaption>Sommer - Bichlbach, Berwang Panorama</figcaption>
        </figure>
      </section>
    </article>
    <aside>
      <?php include ('../include/side.php'); ?>
    </aside>
  </div>
</main>
<footer>
  <?php include ('../include/footer.php'); ?>
</footer>
<?php include ('../include/javainclude.php'); ?>
</body>
</html>