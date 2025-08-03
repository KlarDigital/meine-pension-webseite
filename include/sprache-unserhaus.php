<?php
// Standard: Deutsch
$lang = 'de';

// Umschalten auf Englisch, wenn ?lang=en
if (isset($_GET['lang']) && $_GET['lang'] === 'en') {
  $lang = 'en';
}

// Unser Spracharray
$ourHouseTexte = [

  // ========== DEUTSCH (de) ==========
  'de' => [
    // HTML <title> oder <h1> / <h2> Überschriften
    'head_title'   => 'Unser Haus - Ferienwohnungen Luttinger',
    'heading_h1'   => 'Urlaub in unseren Ferienwohnungen und Zimmern!',
    'heading_h2'   => 'Ferienwohnungen Luttinger bietet Ihnen:',

    // NEU: Überschrift für den Aufenthaltsraum
    'heading_common_room' => 'Unser Aufenthaltsraum – Ein Ort zum Wohlfühlen und Genießen',

    // Banner/Images
    'img_alt_main'    => 'Ferienwohnung Luttinger Bichlbach',
    'img_winter_alt'  => 'Ferienwohnungen Luttinger Winter',
    'img_winter_cap'  => 'Urlaub im Winter',
    'img_summer_alt'  => 'Ferienwohnungen Luttinger Sommer',
    'img_summer_cap'  => 'Urlaub im Sommer',

    'img_room1_alt'   => 'Aufenthaltsraum Haus am Mühlbach',
    'img_room1_cap'   => 'Aufenthaltsraum mit Kachelofen',
    'img_room2_alt'   => 'Aufenthaltsraum Ferienwohnungen Luttinger',
    'img_room2_cap'   => 'Aufenthaltsraum',

    // Texte / Absätze (überarbeitet)
    'para_intro_1' => 'Willkommen in der Pension Luttinger, Ihrem gemütlichen Rückzugsort in der Tiroler Zugspitz Arena! Unser Haus verbindet traditionellen Tiroler Charme mit modernem Komfort und liegt zentral und dennoch ruhig in Bichlbach. Vom Garten mit Liegewiese und Grillplatz genießen Sie einen atemberaubenden Blick auf die Zugspitze, während der Skilift und die Langlaufloipe nur wenige Schritte entfernt sind.',
    'para_intro_2' => 'Ob Wintersport direkt vor der Tür oder Sommerwanderungen in die Tiroler Bergwelt – unser Haus ist das ganze Jahr über Ihr idealer Ausgangspunkt. Wir, die Familie Luttinger, führen die Pension mit Herz und freuen uns, Ihnen und Ihren vierbeinigen Begleitern einen erholsamen Aufenthalt zu bieten.',
    'para_intro_3' => 'Kostenlose Parkplätze und schnelles WLAN im gesamten Haus runden unser Angebot ab. Lassen Sie sich von der Tiroler Bergwelt inspirieren – wir freuen uns auf Sie!',

    // NEU: Abschnitt über den Aufenthaltsraum
    'para_common_room' => 'Unser Aufenthaltsraum lädt zum Verweilen ein – hier können Sie sich entspannen, ein Buch lesen oder mit anderen Gästen ins Gespräch kommen. Derzeit bietet der Raum gemütliche Sitzgelegenheiten, einen Fernseher mit internationalen Sendern und einen Kachelofen für behagliche Wärme. Bald wird es noch besser: Wir planen eine kleine Theke für gemütliche Abende, einen größeren Fernseher für gemeinsame Film- oder Sportabende, eine Dartscheibe für ein bisschen Spaß und eine erweiterte Auswahl an Spielen für Jung und Alt. Freuen Sie sich auf noch mehr Komfort und Unterhaltung bei Ihrem nächsten Besuch!',

    // Zimmer/Ferienwohnung
    'text_one_room' => '1 <a href="zimmer-wohnung.php">Zimmer</a> mit DU/WC (2-3 Pers.)',
    'text_four_apts'=> '4 <a href="zimmer-wohnung.php">Ferienwohnungen</a> – Apartments (2-4 Pers.)',

    // Ausstattungs-Liste 1
    'list_equipment_1' => [
      'TV-SAT, mit internationaler Senderauswahl',
      'Radio',
      'Bettwäsche, Handtücher und Geschirrtücher',
      'Waschmaschine, Wäschetrockner auf Anfrage',
      'Geschirrspüler in der Fewo 1',
      'Liegewiese mit Grillmöglichkeit',
      'Parkplätze vorhanden',
      'Unser Haus befindet sich gegenüber vom Arzt/Apotheke',
      'Alle <strong><a href="zimmer-wohnung.php">Zimmer und Ferienwohnungen</a> mit Balkon</strong>',
      'Hunde erlaubt!'
    ],

    // Ausstattungs-Liste 2
    'list_equipment_2' => [
      '<strong>Top Lage</strong>, zentral, sonnig, ruhig, Nähe Lift, Loipen und Wanderwegen.',
      'Zentraler Ausgangspunkt zu allen Sehenswürdigkeiten.',
    ],

    // Ausstattungs-Liste 3
    'list_equipment_3' => [
      '<strong>Sommerbus & Wanderbus</strong> innerhalb der Tiroler Zugspitz Arena (Gästekarte)',
      '<strong><a href="https://zugspitzarena.com/verkehrsmittel">Gästebus Bayern-Tirol </a></strong> von Ehrwald nach Garmisch-P.',
      '<strong>Gratis Skirundbusse:</strong> Ehrwald – Lermoos – Biberwier – Berwang – Bichlbach – Heiterwang'
    ],

    // weitere Bilder
    'img_haus_sicht1_alt' => 'Bichlbach – Berwang, Panorama',
    'img_haus_sicht1_cap' => 'Bichlbach – Berwang, Panorama',
    'img_grillecke_alt'   => 'Grillecke Ferienwohnungen Luttinger',
    'img_grillecke_cap'   => 'Grillecke Ferienwohnungen Luttinger',
    'img_haus_sicht2_alt' => 'Bichlbach Panorama',
    'img_haus_sicht2_cap' => 'Bichlbach Panorama',
    'img_haus_sicht3_alt' => 'Bichlbach abendrot',
    'img_haus_sicht3_cap' => 'Bichlbach abendrot',
  ],

  // ========== ENGLISCH (en) ==========
  'en' => [
    // HTML <title> oder <h1> / <h2> Überschriften
    'head_title'   => 'Our House - Apartment Luttinger',
    'heading_h1'   => 'Holiday in our apartments and rooms!',
    'heading_h2'   => 'Apartment Luttinger offers you:',

    // NEU: Überschrift für den Aufenthaltsraum
    'heading_common_room' => 'Our Common Room – A Place to Relax and Enjoy',

    // Banner/Images
    'img_alt_main'    => 'Holiday Apartment Luttinger Bichlbach',
    'img_winter_alt'  => 'Apartment Luttinger in winter',
    'img_winter_cap'  => 'Winter holiday',
    'img_summer_alt'  => 'Apartment Luttinger in summer',
    'img_summer_cap'  => 'Summer holiday',

    'img_room1_alt'   => 'Common room Haus am Mühlbach',
    'img_room1_cap'   => 'Common room with tiled stove',
    'img_room2_alt'   => 'Common room Apartment Luttinger',
    'img_room2_cap'   => 'Common room',

    // Texte / Absätze (überarbeitet)
    'para_intro_1' => 'Welcome to Pension Luttinger, your cozy retreat in the Tyrolean Zugspitz Arena! Our house combines traditional Tyrolean charm with modern comfort and is located centrally yet quietly in Bichlbach. From the garden with sunbathing lawn and barbecue area, you can enjoy a breathtaking view of the Zugspitze, while the ski lift and cross-country ski trail are just a few steps away.',
    'para_intro_2' => 'Whether it\'s winter sports right outside the door or summer hikes in the Tyrolean mountains – our house is your ideal starting point all year round. We, the Luttinger family, run the pension with heart and look forward to offering you and your four-legged companions a relaxing stay.',
    'para_intro_3' => 'Free parking and fast Wi-Fi throughout the house complete our offer. Let yourself be inspired by the Tyrolean mountains – we look forward to welcoming you!',

    // NEU: Abschnitt über den Aufenthaltsraum
    'para_common_room' => 'Our common room invites you to relax – here you can unwind, read a book, or chat with other guests. Currently, the room offers cozy seating, a TV with international channels, and a tiled stove for cozy warmth. Soon, it will be even better: We’re planning a small bar for cozy evenings, a larger TV for shared movie or sports nights, a dartboard for some fun, and an expanded selection of games for young and old. Look forward to even more comfort and entertainment on your next visit!',

    // Zimmer/Ferienwohnung
    'text_one_room' => '1 <a href="zimmer-wohnung.php">room</a> with shower/WC (2–3 pers.)',
    'text_four_apts'=> '4 <a href="zimmer-wohnung.php">apartments</a> (2–4 pers.)',

    // Ausstattungs-Liste 1
    'list_equipment_1' => [
      'Satellite TV with international channels',
      'Radio',
      'Bed linen, towels, and dish towels',
      'Washing machine and dryer on request',
      'Dishwasher in Apartment 1',
      'Sunbathing lawn with barbecue facilities',
      'Parking available',
      'Our house is located opposite the doctor/pharmacy',
      'All <strong><a href="zimmer-wohnung.php">rooms and apartments</a> with balcony</strong>',
      'Dogs allowed!'
    ],

    // Ausstattungs-Liste 2
    'list_equipment_2' => [
      '<strong>Top location</strong>, central, sunny, quiet, near lift, cross-country trails, and hiking paths.',
      'Central starting point to all sights.'
    ],

    // Ausstattungs-Liste 3
    'list_equipment_3' => [
      '<strong>Summer bus & hiking bus</strong> within the Tyrolean Zugspitz Arena (guest card)',
      '<strong><a href="https://zugspitzarena.com/verkehrsmittel">Bavaria-Tyrol guest bus</a></strong> from Ehrwald to Garmisch-Partenkirchen',
      '<strong>Free ski shuttle:</strong> Ehrwald – Lermoos – Biberwier – Berwang – Bichlbach – Heiterwang'
    ],

    // weitere Bilder
    'img_haus_sicht1_alt' => 'Bichlbach – Berwang, panorama',
    'img_haus_sicht1_cap' => 'Bichlbach – Berwang, panorama',
    'img_grillecke_alt'   => 'BBQ area Apartment Luttinger',
    'img_grillecke_cap'   => 'BBQ area Apartment Luttinger',
    'img_haus_sicht2_alt' => 'Bichlbach panorama',
    'img_haus_sicht2_cap' => 'Bichlbach panorama',
    'img_haus_sicht3_alt' => 'Bichlbach sunset glow',
    'img_haus_sicht3_cap' => 'Bichlbach sunset glow',
  ],
];