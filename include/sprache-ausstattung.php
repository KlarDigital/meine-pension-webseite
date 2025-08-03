<?php
// Standard-Sprache = Deutsch
$lang = 'de';

// Umschalten auf Englisch, wenn ?lang=en
if (isset($_GET['lang']) && $_GET['lang'] === 'en') {
  $lang = 'en';
}

$equipTexte = [

  // =========================
  // ======= DEUTSCH (de) ====
  // =========================
  'de' => [
    'head_title' => 'Bichlbach – Zimmer und Ferienwohnungen',
    'h1_title'   => 'Bichlbach - Zimmer und Ferienwohnungen',
    'h2_title'   => 'Mitten in der Tiroler Zugspitzarena',

    'p_intro_1'  => 'Planen Sie Ihren nächsten <strong>Winterurlaub</strong> oder <strong>Sommerferien</strong> in Bichlbach, Tiroler Zugspitzarena? Dann heißen wir Sie herzlich in unseren vier komfortablen Ferienwohnungen oder unserem Zimmer willkommen! Jede Wohnung bietet einen Wohnraum, Schlafzimmer, WC, Dusche und einen Balkon mit atemberaubendem Blick auf das Panorama der Tiroler Zugspitz Arena.',
    'p_intro_2'  => 'Unsere Küchen sind unter anderem mit <strong>Kaffeemaschine, Herd, Geschirrspüler, Toaster, Kühlschrank und Mikrowelle</strong> ausgestattet. <strong>Geschirr, Zubehör, Bettwäsche und Handtücher</strong> sind ebenfalls vorhanden. Zusätzlich bieten wir unseren Gästen einen Brötchenservice sowie frische <strong>Bettwäsche und Geschirrausstattung</strong>.',

    'link_more_info' => 'Weitere Informationen',
    'list_links' => [
      '<a href="preise.php">Preise</a>',
      '<a href="inklusivleistungen.php" title="Inklusiv-Leistungen">Inklusiv-Leistungen</a>',
      '<a href="buchen.php">Online Buchen</a>',
      '<a href="kontakt.php">Jetzt Anfragen</a>',
    ],

    // Boxen (Zimmer, Wohnungen)
    'room_label'    => 'Zimmer 2',
    'room_sub'      => 'für 2 Personen,<br>ca. 14&nbsp;m²',

    'ap1_label'     => 'Wohnung 1',
    'ap1_sub'       => 'für 3–4 Personen,<br>ca. 32&nbsp;m²',

    'ap3_label'     => 'Wohnung 3',
    'ap3_sub'       => 'für 3–4 Personen,<br>ca. 30&nbsp;m²',

    'ap4_label'     => 'Wohnung 4',
    'ap4_sub'       => 'für 3–4 Personen,<br>ca. 34&nbsp;m²',

    // Aufenthaltsraum
    'h2_lounge'     => 'Aufenthaltsraum',
    'lounge_info'   => 'Tiroler Kachelofen, SAT-TV',
    'lounge_img_alt'=> 'Aufenthaltsraum',

  ],

  // =========================
  // ======= ENGLISCH (en) ===
  // =========================
  'en' => [
    'head_title' => 'Bichlbach – Rooms and Apartments',
    'h1_title'   => 'Bichlbach – Rooms and Holiday Apartments',
    'h2_title'   => 'In the heart of the Tyrolean Zugspitz Arena',

    'p_intro_1'  => 'Planning your next <strong>winter holiday</strong> or <strong>summer vacation</strong> in Bichlbach, Tyrolean Zugspitz Arena? We warmly welcome you to our four comfortable holiday apartments or our room! Each apartment features a living area, bedroom, WC, shower, and a balcony with stunning views of the Tyrolean Zugspitz Arena panorama.',
    'p_intro_2'  => 'Our kitchens are equipped with a <strong>coffee maker, stove, dishwasher, toaster, refrigerator, and microwave</strong>. <strong>Dishes, utensils, bed linens, and towels</strong> are also provided. In addition, we offer a bread roll service as well as fresh <strong>bed linens and dishware</strong>.',

    'link_more_info' => 'Further Information',
    'list_links' => [
      '<a href="preise.php">Prices</a>',
      '<a href="inklusivleistungen.php" title="Included Services">Included Services</a>',
      '<a href="buchen.php">Book Online</a>',
      '<a href="kontakt.php">Request Now</a>',
    ],

    // Boxen (Zimmer, Wohnungen)
    'room_label'    => 'Room 2',
    'room_sub'      => 'for 2 people,<br>approx. 14&nbsp;m²',

    'ap1_label'     => 'Apartment 1',
    'ap1_sub'       => 'for 3–4 people,<br>approx. 32&nbsp;m²',

    'ap3_label'     => 'Apartment 3',
    'ap3_sub'       => 'for 3–4 people,<br>approx. 30&nbsp;m²',

    'ap4_label'     => 'Apartment 4',
    'ap4_sub'       => 'for 3–4 people,<br>approx. 34&nbsp;m²',

    // Aufenthaltsraum
    'h2_lounge'     => 'Common Room',
    'lounge_info'   => 'Tyrolean tiled stove, SAT-TV',
    'lounge_img_alt'=> 'Common room',
  ],
];
