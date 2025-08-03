<?php
// Standard-Sprache = Deutsch
$lang = 'de';

// Umschalten auf Englisch, wenn ?lang=en
if (isset($_GET['lang']) && $_GET['lang'] === 'en') {
  $lang = 'en';
}

$zimmerTexte = [

  // ==============================
  // =========== DEUTSCH ==========
  // ==============================
  'de' => [

    // Kopfzeile / Title
    'head_title' => 'Charmantes Doppelzimmer in Bichlbach – Ferienwohnungen Luttinger',

    // Überschriften (h1/h2)
    'h1_main' => 'Charmantes Doppelzimmer in Bichlbach - Ferienwohnungen Luttinger',
    'h2_sub'  => 'Komfortables Zimmer für Zwei - 14m² mit Panoramablick',

    // Slider/Hauptbild
    'alt_sliderimage' => 'Gemütliches Doppelzimmer in Ferienwohnungen Luttinger, Bichlbach',

    // Grundriss
    'alt_floorplan'    => 'Grundriss des gemütlichen Doppelzimmers in Ferienwohnungen Luttinger',
    'caption_floorplan' => 'Grundriss - Zimmer "2"',
    'title_floorplan'   => 'Zimmer 2',

    // Einleitender Absatz
    'intro_text' => 'Entdecken Sie unser liebevoll eingerichtetes Doppelzimmer in der idyllischen Zugspitzarena von Bichlbach. Ideal für Paare, die in einer Nichtraucherumgebung entspannen möchten. Genießen Sie den Blick vom Südost-Balkon.',

    // Listenpunkte
    'list_bullets' => [
      '<strong>Optimale Belegung: 2 Personen</strong>',
      '<strong>Inklusive Bettwäsche und Handtücher</strong>',
      '<strong>Ohne Verpflegung</strong>',
      '<strong>Zimmerkategorie: Doppelzimmer</strong>',
      '<strong>Lage: Südost-Ausrichtung, 1. Stock</strong>',
    ],

    // Buttons / Links
    'btn_inquire'  => 'Jetzt anfragen',
    'btn_book'     => 'Jetzt Buchen',
    'link_inclusive' => 'Inklusivleistungen',

    // 360° Panorama
    'pano_label' => '360° Panoramas',
    'room_size'  => 'Zimmergröße: 14m²',

    // Tabellen‐Überschriften
    'table_col_perperson' => 'pro Person',
    'table_row_sommer_hs' => 'Sommer HS',
    'table_row_sommer_ns' => 'Sommer NS',
    'table_row_winter_hs' => 'Winter HS',
    'table_row_winter_ns' => 'Winter NS',

    // Preis‐Hinweis
    'price_note' => '<strong>Preise exklusive Kurtaxe (€ 3,00 pro Tag und Person ab 15 Jahren)</strong><br>Hinweis: Der aktuelle Preis wird bei der Vereinbarung (per E-Mail, etc.) festgelegt und ist saisonabhängig.',

    // Galerie 1
    'gallery_title_1' => 'Einblicke in unser gemütliches Zimmer',

    // Bilder + Unterschriften
    'img_room1_alt'     => 'Komfortables Doppelzimmer mit TV in Ferienwohnungen Luttinger',
    'img_room1_caption' => 'Ausstattung Zimmer "2"',

    'img_room2_alt'     => 'Gemütliches Bett im Doppelzimmer der Ferienwohnungen Luttinger',
    'img_room2_caption' => 'Ferienwohnungen Luttinger - Zimmer "2"',

    // Galerie 2: Balkon
    'gallery_title_2' => 'Balkon mit Ausblick - Urlaubsregion Bichlbach im Zimmer Luttinger',

    'img_balcony1_alt'     => 'Zimmer Luttinger Bichlbach Sommer Berge Ausblick',
    'img_balcony1_caption' => 'Zimmer Luttinger - Berge',

    'img_balcony2_alt'     => 'Zimmer Luttinger Bichlbach Sommer Berge Ausblick',
    'img_balcony2_caption' => 'Zimmer Luttinger - Kohlberg',
  ],

  // ==============================
  // =========== ENGLISCH =========
  // ==============================
  'en' => [

    'head_title' => 'Charming Double Room in Bichlbach – Apartment Luttinger',

    'h1_main' => 'Charming Double Room in Bichlbach - Apartment Luttinger',
    'h2_sub'  => 'Comfortable Room for Two - 14m² with Panoramic View',

    'alt_sliderimage' => 'Cosy double room in Apartment Luttinger, Bichlbach',

    'alt_floorplan'    => 'Floor plan of the cosy double room at Apartment Luttinger',
    'caption_floorplan' => 'Floor plan - Room "2"',
    'title_floorplan'   => 'Room 2',

    'intro_text' => 'Discover our lovingly furnished double room in the idyllic Zugspitz Arena of Bichlbach. Ideal for couples seeking a non-smoking environment to relax. Enjoy the view from the southeast-facing balcony.',

    'list_bullets' => [
      '<strong>Optimal occupancy: 2 people</strong>',
      '<strong>Bed linens and towels included</strong>',
      '<strong>No catering</strong>',
      '<strong>Room category: Double room</strong>',
      '<strong>Location: southeast-facing, 1st floor</strong>',
    ],

    'btn_inquire'     => 'Send Inquiry',
    'btn_book'        => 'Book Now',
    'link_inclusive'  => 'Included Services',

    'pano_label'      => '360° Panoramas',
    'room_size'       => 'Room size: 14m²',

    'table_col_perperson' => 'per person',
    'table_row_sommer_hs' => 'Summer HS',
    'table_row_sommer_ns' => 'Summer NS',
    'table_row_winter_hs' => 'Winter HS',
    'table_row_winter_ns' => 'Winter NS',

    'price_note' => '<strong>Prices exclude local tax (€ 3.00 per day and person from age 15)</strong><br>Note: The current price is determined upon arrangement (via email, etc.) and depends on the season.',

    'gallery_title_1' => 'A glimpse into our cozy room',

    'img_room1_alt'     => 'Comfortable double room with TV at Apartment Luttinger',
    'img_room1_caption' => 'Room "2" amenities',

    'img_room2_alt'     => 'Cozy bed in the double room at Apartment Luttinger',
    'img_room2_caption' => 'Apartment Luttinger - Room "2"',

    'gallery_title_2' => 'Balcony with a View - Bichlbach Holiday Region in Room Luttinger',

    'img_balcony1_alt'     => 'Room Luttinger Bichlbach summer mountain view',
    'img_balcony1_caption' => 'Room Luttinger - Mountains',

    'img_balcony2_alt'     => 'Room Luttinger Bichlbach summer mountain view',
    'img_balcony2_caption' => 'Room Luttinger - Kohlberg',
  ],
];
