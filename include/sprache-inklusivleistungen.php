<?php
// Standard-Sprache Deutsch
$lang = 'de';

// Umschalten auf Englisch, wenn ?lang=en
if (isset($_GET['lang']) && $_GET['lang'] === 'en') {
  $lang = 'en';
}

// Optionales Flag
$isEnglish = ($lang === 'en');

/**
 * Zentrales Array $inklTexte:
 * Hier stehen alle Texte, Überschriften, Listen **und** auch
 * bisherige "Kleinbegriffe" wie „Gratisleistungen“/„Ermäßigungen“/
 * „Schwimmbäder“, damit im HTML **kein** Rest Deutsch verbleibt.
 */
$inklTexte = [

  // ===============================
  // ====== DEUTSCH (de) ===========
  // ===============================
  'de' => [

    // ALT-Attribut fürs Bannerbild
    'slider_img_alt' => 'Zugspitzarena Luttinger',

    // Hauptüberschrift, Einleitung
    'page_h1'     => 'Zimmer und Ferienwohnungen - am Mühlbach Inklusivleistungen',
    'teaser_text' => 'Gratis W-LAN (Wi-Fi) Internetzugang.<br>
                          Gratis Parkplätze, Gratis Handtücher &amp; Badetücher, Toilettenpapier und vieles mehr...',

    // Oberüberschriften
    'headline_vorteile' => 'Alle Vorteile auf einen Blick',
    'headline_inklusiv' => 'Inklusivleistungen in der Tiroler Zugspitz Arena',

    // Labels für Abschnitte, die vormals hart codiert waren
    'label_schwimmbaeder'    => 'Schwimmbäder',
    'label_tennis'           => 'Tennis',
    'label_kultur'           => 'Kultur',
    'label_winter'           => 'Mehr Winter',
    'label_sommerwinter'     => 'Sommer &amp; Winter',
    'label_mehrsommer'       => 'Mehr Sommer',
    'label_gratisleistungen' => 'Gratisleistungen',
    'label_ermaessigungen'   => 'Ermäßigungen',

    // Garmisch / Grainau - dieselben Labels für "Gratisleistungen" & "Ermäßigungen"
    'garmisch_label_gratis' => 'Gratisleistungen',
    'garmisch_label_erm'    => 'Ermäßigungen',

    'grainau_label_gratis'  => 'Gratisleistungen',
    'grainau_label_erm'     => 'Ermäßigungen',

    // ----------------------------------------------------------
    // Inhalt: Box 1 (Verkehrsmittel, geführte Wanderungen usw.)
    // ----------------------------------------------------------
    'box1_block1' => '<strong><a href="https://www.zugspitzarena.com/de/Info-Service/Verkehrsmittel">Verkehrsmittel</a></strong> laut Fahrplan<br>
                          (Ticket = Gästekarte der Tiroler Zugspitz Arena + gültiger Lichtbildausweis)',
    'box1_list1'  => '<li>Sommerbus &amp; Wanderbus innerhalb der Tiroler Zugspitz Arena</li>
                          <li>Winterbus innerhalb der Tiroler Zugspitz Arena</li>
                          <li>Gratisbenützung nur für Gäste der Tiroler Zugspitz Arena!</li>',

    'box1_block2' => '<strong><a href="https://www.zugspitzarena.com/de/Info-Service/Verkehrsmittel">Gästebus Bayern-Tirol</a></strong> von Ehrwald nach Garmisch-Partenkirchen',
    'box1_list2'  => '<li>Für alle Urlaubsgäste der Tiroler Zugspitz Arena, Grainau und Garmisch-Partenkirchen</li>',

    'box1_block3' => '<strong>Geführte Wanderungen im Winter</strong> laut Kalender',
    'box1_list3'  => '<li>Schneeschuh- &amp; Winterwanderungen</li>
                          <li>Fackel- &amp; Laternenwanderungen</li>
                          <li>2-Seenwanderung</li>',

    'box1_block4' => 'Geführte Wanderungen im Sommer laut Kalender',
    'box1_list4'  => '<li>Ehrwald</li>
                          <li>Lermoos</li>
                          <li>Berwang</li>
                          <li>Silberleithe Biberwier</li>
                          <li>Orchideenwanderung</li>
                          <li>Kräuter- und Familienwanderungen</li>
                          <li>E-Bike Einführungstour</li>',

    'box1_block5' => 'Kinderprogramm laut Kalender',
    'box1_list5'  => '<li><a href="https://www.zugspitzarena.com/de/Sommer-Erlebnis/Familien-Sommer/Kinderbetreuung">Kinderspielefest</a> in Ehrwald &amp; Lermoos</li>',

    // ----------------------------------------------------------
    // Inhalt: Box 2 (Benützung Themenwege, Kultur & Musik etc.)
    // ----------------------------------------------------------
    'box2_block1' => '<a href="https://www.zugspitzarena.com/de/Sommer-Erlebnis/Familien-Sommer/Erlebniswege">Benützung Themenwege</a>',
    'box2_list1'  => '<li>Wassererlebnisweg Ehrwald</li>
                          <li>Moorlehrpfad Heiterwang</li>
                          <li>Moosles Forscherpfad</li>
                          <li>Naturerlebnisweg Mitteregg/Berwang</li>',

    'box2_block2' => '<strong>Kultur &amp; Musik</strong> laut Kalender',
    'box2_list2'  => '<li>Museum Lermoos</li>
                          <li>Heimatmuseum Berwang</li>
                          <li>Kellereiführung Ehrwald</li>
                          <li>Platzkonzerte, Tiroler Abende</li>',

    'box2_block3' => '<strong>Mehr Winter</strong>',
    'box2_list3'  => '<li>Skishow Lermoos</li>
                          <li>Skishow Berwang</li>
                          <li>Loipen</li>
                          <li>Winterwanderwege</li>
                          <li>Modellverein Zugspitze</li>',

    'box2_block4' => '<strong>Infomaterial</strong>',
    'box2_list4'  => '<li>Prospekte und Hüttenpass</li>',

    // ----------------------------------------------------------
    // Ermäßigungen
    // ----------------------------------------------------------
    'headline_ermaess' => 'Ermäßigungen in der Tiroler Zugspitz Arena',

    // Schwimmbad, Tennis, Kultur usw.
    'schwimmbad_list' => '<li>Familienbad Ehrwald: 18 %</li>
                              <li>Bärenbad Berwang: 20 %</li>
                              <li>Hallenbad Edelweiss Lermoos: 20 %</li>',

    'tennis_list'     => '<li>Tennishalle Ehrwald: 8 %</li>
                              <li>Tennisplatz Ehrwald: 10 %</li>',

    'kultur_list'     => '<li>Zunftmuseum Bichlbach: 25 %</li>
                              <li>Bühne Berwang: 1 € Ermäßigung</li>',

    'winter2_list'    => '<li>Kunsteisbahn Ehrwald: Kind 28 %, Erw. 20 %</li>',

    'summerwinter_list' => '<li>Kletterhalle Ehrwald: 15 %</li>
                                <li>Swarovski Kristallwelten: 10 %</li>',

    'summer_list' => '<li>Tiroler Zugspitz Golf: 10 %</li>
                          <li>Kletterwald Bichlbach: 2 €</li>
                          <li>Flying Fox Bichlbach: 3 €</li>',

    // Garmisch
    'headline_garmisch' => 'Kostenlose Vorteile und Ermäßigungen Garmisch-Partenkirchen',

    'garmisch_list1' => '<li>Geführte Erlebniswanderungen</li>
                             <li>Konzerte, Musik im Park</li>
                             <li>Freier Eintritt in die Spielbank (1x)</li>',

    'garmisch_list2' => '<li>Partnachklamm: 1 €</li>
                             <li>Olympia-Skisprungschanze: 2 €</li>',

    'garmisch_list3' => '<li>Boulderhalle GaPa: 2 €</li>
                             <li>Wildkaffee Rösterei: 2 €</li>',

    // Grainau
    'headline_grainau' => 'Kostenlose Vorteile und Ermäßigungen im Zugspitzdorf Grainau',

    'grainau_list1'   => '<li>Ortsführung</li>
                              <li>Kurpark-Kneipp</li>
                              <li>Konzerte Musikkapelle Grainau</li>',

    'grainau_list2'   => '<li>Geführte Berg-, Fackel-, Kräuterwanderungen</li>
                              <li>Eisstockschießen</li>
                              <li>15 % Zugspitzbad</li>',

    // Außerhalb der Region
    'headline_region' => 'Ermäßigte Leistungen außerhalb der Region',

    'region_list1' => '<li>Burgenwelt Ehrenberg: 1 €</li>
                           <li>Swarovski Kristallwelten: 10 %</li>',

    'region_list2' => '<li>Freilichtmuseum Glentleiten: 0,50 €</li>
                           <li>Alpentherme Ehrenberg: 1 €</li>',

    // AGB
    'headline_agb' => 'Allgemeine Geschäftsbedingungen:',
    'agb_text'     => 'Die Gästekarte ist nicht übertragbar und nur mit gültigem Lichtbildausweis gültig. Keine Barablöse...',
  ],

  // ===============================
  // ======= ENGLISCH (en) ========
  // ===============================
  'en' => [
    'slider_img_alt' => 'Zugspitz Arena Luttinger',
    'page_h1'        => 'Rooms and Apartments – Am Mühlbach Inclusive Services',
    'teaser_text'    => 'Free Wi-Fi. Free parking, free towels, toilet paper, and more...',

    'headline_vorteile' => 'All benefits at a glance',
    'headline_inklusiv' => 'Inclusive services in the Tiroler Zugspitz Arena',

    // ehem. deutsche Begriffe
    'label_schwimmbaeder'    => 'Swimming pools',
    'label_tennis'           => 'Tennis',
    'label_kultur'           => 'Culture',
    'label_winter'           => 'More winter',
    'label_sommerwinter'     => 'Summer & winter',
    'label_mehrsommer'       => 'More summer',
    'label_gratisleistungen' => 'Free services',
    'label_ermaessigungen'   => 'Discounts',

    'garmisch_label_gratis' => 'Free services',
    'garmisch_label_erm'    => 'Discounts',

    'grainau_label_gratis'  => 'Free services',
    'grainau_label_erm'     => 'Discounts',

    // Box1
    'box1_block1' => '<strong><a href="https://www.zugspitzarena.com/de/Info-Service/Verkehrsmittel">Public transport</a></strong> according to schedule<br>(Ticket = guest card + valid photo ID)',
    'box1_list1'  => '<li>Summer & hiking bus in the Zugspitz Arena</li>
                          <li>Winter ski bus in the Zugspitz Arena</li>
                          <li>Free use only for TZA guests!</li>',

    'box1_block2' => '<strong><a href="https://www.zugspitzarena.com/de/Info-Service/Verkehrsmittel">Guest bus Bavaria-Tyrol</a></strong> from Ehrwald to Garmisch',
    'box1_list2'  => '<li>For all holiday guests of the Tiroler Zugspitz Arena, Grainau, Garmisch</li>',

    'box1_block3' => '<strong>Guided winter hikes</strong> (schedule)',
    'box1_list3'  => '<li>Snowshoe & winter hikes</li><li>Torch & lantern walks</li><li>2-lake hike</li>',

    'box1_block4' => 'Guided summer hikes (schedule)',
    'box1_list4'  => '<li>Ehrwald</li><li>Lermoos</li><li>Berwang</li><li>Mining trail Biberwier</li>',

    'box1_block5' => 'Kids program (schedule)',
    'box1_list5'  => '<li><a href="https://...">Kids festival</a> in Ehrwald & Lermoos</li>',

    // Box2
    'box2_block1' => '<a href="https://www.zugspitzarena.com/de/Sommer-Erlebnis/Familien-Sommer/Erlebniswege">Theme trails</a>',
    'box2_list1'  => '<li>Water adventure trail</li><li>Heiterwang moor</li><li>Moosle explorer path</li>',

    'box2_block2' => '<strong>Culture & music</strong> (schedule)',
    'box2_list2'  => '<li>Museum Lermoos</li><li>Berwang local museum</li>',

    'box2_block3' => '<strong>More winter</strong>',
    'box2_list3'  => '<li>Skishow Lermoos</li><li>Skishow Berwang</li><li>Loipen</li>',

    'box2_block4' => '<strong>Information material</strong>',
    'box2_list4'  => '<li>Brochures and hut passes</li>',

    // Discounts
    'headline_ermaess' => 'Discounts in the Tiroler Zugspitz Arena',

    'schwimmbad_list' => '<li>Family pool Ehrwald: 18 %</li><li>Bärenbad Berwang: 20 %</li>',
    'tennis_list'     => '<li>Tennis hall Ehrwald: 8 %</li><li>Tennis court Ehrwald: 10 %</li>',
    'kultur_list'     => '<li>Guild Museum Bichlbach: 25 %</li><li>Stage Berwang: €1 discount</li>',
    'winter2_list'    => '<li>Ehrwald ice rink: child 28 %, adult 20 %</li>',
    'summerwinter_list' => '<li>Climbing hall Ehrwald: 15 %</li><li>Swarovski Crystal Worlds: 10 %</li>',
    'summer_list' => '<li>Tiroler Zugspitz Golf: 10 %</li><li>Climbing forest Bichlbach: €2</li>',

    // Garmisch
    'headline_garmisch' => 'Free benefits & discounts in Garmisch-Partenkirchen',
    'garmisch_list1'    => '<li>Guided experience hikes</li><li>Concerts, "Musik im Park"</li>',
    'garmisch_list2'    => '<li>Partnach Gorge: €1</li><li>Olympic ski jump: €2</li>',
    'garmisch_list3'    => '<li>Boulder hall GaPa: €2</li><li>Wildkaffee roastery: €2</li>',

    // Grainau
    'headline_grainau' => 'Free benefits & discounts in Zugspitz village Grainau',
    'grainau_list1'    => '<li>Village tour</li><li>Kneipp facility, cross-country tracks</li>',
    'grainau_list2'    => '<li>Guided mountain, torch, herb walks</li><li>Curling</li>',

    // Region
    'headline_region' => 'Discounted services outside the region',
    'region_list1'    => '<li>Burgenwelt Ehrenberg: €1</li><li>Swarovski Crystal Worlds: 10 %</li>',
    'region_list2'    => '<li>Open-air museum Glentleiten: €0.50</li><li>Alpentherme Ehrenberg: €1</li>',

    // AGB
    'headline_agb' => 'General Terms & Conditions:',
    'agb_text'     => 'The guest card is non-transferable and only valid with a photo ID. No cash redemption...'
  ],
];
