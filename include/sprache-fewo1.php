<?php
// Standard-Sprache = Deutsch
$lang = 'de';

// Umschalten auf Englisch, wenn ?lang=en
if (isset($_GET['lang']) && $_GET['lang'] === 'en') {
  $lang = 'en';
}

// Array mit allen Textbausteinen
$zimmerTexte = [

  // =========================
  // ======= DEUTSCH (de) ====
  // =========================
  'de' => [

    // Kopfzeile / Titel
    'head_title'  => 'Ferienwohnung-Apartment 1',

    // Überschriften
    'h1_main'     => 'Ferienwohnung-Apartment 1',
    'h2_sub'      => 'Apartment für 3 Personen – 32m²',

    // ALT-Texte, Titel, Beschriftungen
    'slider_img_alt'  => 'Ferienwohnung Wohnraum',  // Hauptbild im Slider
    'plan_img_alt'    => 'Ferienwohnung 1 Plan Ferienwohnungen Luttinger',
    'plan_caption'    => 'Grundriss – Ferienwohnung „1“',
    'apartment_size'  => 'Ferienwohnung – Größe 31,8m²',

    // Intro-Text
    'intro_text_1' => 'Das gemütliche Apartment in zentraler Lage in Bichlbach mit einem wunderfollen Bergblick in die Tiroler Bergwelt. Es ist für Familien mit 1-2 Kindern, besteht aus einem Doppelzimmer, separatem Wohnzimmer mit ausziehbarer Couch und Küchenecke, Kühlschrank, Dusche/WC, SAT-TV, WLAN und Südbalkon.',

    // Liste
    'list_points' => [
      'Für 2 bis 3 Personen',
      '<strong>Küchenausstattung</strong> „Geschirrspülmaschine, Mikrowelle, Backofen, Mixer und hochwertiges modernes Geschirr, Gefrierfach, Grill, Toaster“',
      '<strong>Badezimmer mit Komfortdusche/WC und Föhn</strong>',
      '<strong>eigener großer Balkon</strong>',
      '<strong>Toilettenpapier, Bettwäsche, Handtücher, Badetücher, Geschirrtücher, Spülmaschinentabs, Spülmittel, Handseife</strong>',
      '<strong>Lage:</strong> Süd/West-Seite, 1. Stock',
      '<strong>Parkplätze</strong> beim Haus vorhanden'
    ],

    'smoking_info' => 'Alle Zimmer und Ferienwohnungen sind NICHTRAUCHERZIMMER! Gerne können Sie zum Rauchen den Balkon benutzen. Wir bitten um Verständnis.',

    // Buttons / Links
    'btn_inquire' => 'Jetzt anfragen',
    'btn_book'    => 'Jetzt Buchen',
    'link_inclusive' => 'Inklusivleistungen',

    // 360° Panorama
    'pano_label' => '360° Panoramas',

    // Tabellenüberschriften (Preistabelle)
    'table_head_2p' => 'Für "2 Personen"',
    'table_head_3p' => 'Für "3 Personen"',
    'table_head_4p' => 'Für "4 Personen"',

    // Preis-Hinweis
    'price_note' => '<strong>Preise exklusive Kurtaxe (€ 3,00 pro Person/Tag ab 15 Jahren) Endreinigung: € 40,00</strong><br>
                     Achtung: Aktueller Preis unter „<a href="../buchen.php">Buchen</a>“, Saisonsabhängig!',

    // Galerie-Titel
    'gallery_title_1' => 'EINBLICKE IN UNSERE Ferienwohnung 1 – HIER KÖNNEN SIE SICH RUNDUM WOHLFÜHLEN ...',
    'gallery_title_2' => 'Balkon mit Ausblick – Urlaubsregion Bichlbach',

    // Fancybox-Bildunterschriften etc.
    'fb_caption_room_kitchen'     => 'Wohnraum – Küche Ferienwohnung "1"',
    'fb_caption_room_living'      => 'Wohnraum Ferienwohnung "1"',
    'fb_caption_room_bed'         => 'Schlafzimmer Ferienwohnung "1"',
    'fb_caption_bath'             => 'Schlafzimmer – Bad WC – Ferienwohnung "1"',
    'fb_caption_bath_shower'      => 'Schlafzimmer – Bad Dusche – Ferienwohnung "1"',
    'fb_caption_balcony_mountain' => 'Ferienwohnungen Luttinger – "Mähberg"',
    'fb_caption_balcony_almkopf'  => 'Ferienwohnungen Luttinger – "Almkopf"',
    'fb_caption_balcony_winter1'  => 'Ferienwohnungen Luttinger – Winter',
    'fb_caption_balcony_winter2'  => 'Ferienwohnungen Luttinger – Winter Panorama',
  ],

  // =========================
  // ======= ENGLISCH (en) ===
  // =========================
  'en' => [

    'head_title'  => 'Holiday Apartment 1',

    'h1_main'     => 'Holiday Apartment 1',
    'h2_sub'      => 'Apartment for 3 people – 32m²',

    // ALT etc.
    'slider_img_alt'  => 'Holiday apartment living area',
    'plan_img_alt'    => 'Apartment 1 plan – Apartment Luttinger',
    'plan_caption'    => 'Floor plan – Apartment "1"',
    'apartment_size'  => 'Apartment – size 31.8m²',

    'intro_text_1' => 'A cozy apartment in a central location in Bichlbach with a wonderful mountain view of the Tyrolean mountains. Ideal for families with 1-2 children, it features a double bedroom, a separate living room with a pull-out couch and kitchenette, a refrigerator, shower/WC, satellite TV, Wi-Fi, and a south-facing balcony.',

    'list_points' => [
      'For 2 to 3 people',
      '<strong>Kitchen facilities</strong>: “dishwasher, microwave, oven, blender, high-quality modern dishes, freezer, grill, toaster”',
      '<strong>Bathroom with comfort shower/WC and hairdryer</strong>',
      '<strong>Private large balcony</strong>',
      '<strong>Toilet paper, bed linens, towels, bath towels, dish towels, dishwasher tabs, dish soap, hand soap</strong>',
      '<strong>Location:</strong> south/west side, 1st floor',
      '<strong>Parking</strong> available at the house'
    ],

    'smoking_info' => 'All rooms and apartments are NON-SMOKING. You may use the balcony for smoking. Thank you for your understanding.',

    'btn_inquire' => 'Send Inquiry',
    'btn_book'    => 'Book Now',
    'link_inclusive' => 'Included Services',

    'pano_label' => '360° Panoramas',

    'table_head_2p' => 'For "2 people"',
    'table_head_3p' => 'For "3 people"',
    'table_head_4p' => 'For "4 people"',

    'price_note' => '<strong>Prices exclude local tax (€ 3.00 per person/day from age 15) final cleaning: € 40.00</strong><br>
                     Note: The current price under “<a href="../buchen.php">Book</a>” depends on the season!',

    'gallery_title_1' => 'A LOOK INTO OUR Holiday Apartment 1 – MAKE YOURSELF AT HOME ...',
    'gallery_title_2' => 'Balcony with a View – Bichlbach Holiday Region',

    'fb_caption_room_kitchen'     => 'Living area – kitchen Apartment "1"',
    'fb_caption_room_living'      => 'Living area Apartment "1"',
    'fb_caption_room_bed'         => 'Bedroom Apartment "1"',
    'fb_caption_bath'             => 'Bedroom – WC bathroom – Apartment "1"',
    'fb_caption_bath_shower'      => 'Bedroom – Shower bathroom – Apartment "1"',
    'fb_caption_balcony_mountain' => 'Apartment Luttinger – "Mähberg"',
    'fb_caption_balcony_almkopf'  => 'Apartment Luttinger – "Almkopf"',
    'fb_caption_balcony_winter1'  => 'Apartment Luttinger – Winter',
    'fb_caption_balcony_winter2'  => 'Apartment Luttinger – Winter panorama',
  ],
];
