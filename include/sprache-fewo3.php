<?php
// Standard: Deutsch
$lang = 'de';

// Umschalten auf Englisch, wenn ?lang=en
if (isset($_GET['lang']) && $_GET['lang'] === 'en') {
  $lang = 'en';
}

$fewo3Texte = [

  // ============================
  // ====== DEUTSCH (de) ========
  // ============================
  'de' => [

    // Title / Überschriften
    'head_title' => 'Ferienwohnung "Apartment 3" – Ferienwohnungen Luttinger',
    'h1_main'    => 'Ferienwohnung "Apartment 3" in Ferienwohnungen Luttinger',
    'h2_sub'     => 'Apartment für 3 Personen – 30m² in Bichlbach',

    // Slider/Hauptbild
    'alt_sliderimage' => 'Ferienwohnung Schlafzimmer',

    // Grundriss
    'alt_floorplan'   => 'Grundriss der Ferienwohnung 3 in Ferienwohnungen Luttinger',
    'caption_floorplan'=> 'Grundriss – Ferienwohnung "3"',

    // Einleitender Absatz
    'intro_paragraph' => 'Genießen Sie den atemberaubenden Blick auf die Tiroler Bergwelt direkt aus Ihrem Fenster. Die Ferienwohnung "3" in den Ferienwohnungen Luttinger in Bichlbach bietet gemütlichen Komfort mit einem Schlafzimmer, einem Kleiderschrank, einer voll ausgestatteten Küche und weiteren Annehmlichkeiten.',

    // Listenpunkte
    'list_bullets' => [
      'Für 2 bis 4 Personen geeignet',
      '<strong>Verpflegung:</strong> Selbstverpflegung',
      '<strong>Bettwäsche</strong> inklusive',
      '<strong>Handtücher</strong> inklusive',
      '<strong>Küchenausstattung:</strong> Geschirr, Kochtöpfe und mehr',
      '<strong>Zimmerart:</strong> Appartement',
      '<strong>Lage:</strong> Nord/Ost-Seite, 1. Stock',
    ],

    // Raucher-Hinweis
    'smoke_paragraph' => 'Bitte beachten Sie: Alle Zimmer und Ferienwohnungen sind Nichtraucherzimmer. Für Raucher steht der Balkon zur Verfügung. Wir danken für Ihr Verständnis.',

    // Buttons
    'btn_inquire'   => 'Anfrage senden',
    'btn_book'      => 'Buchen',
    'inklusivleistungen_link' => 'Inklusivleistungen ansehen',

    // Panorama
    'pano_label'    => '360° Panorama der Ferienwohnung 3',
    'apt_size_info' => 'Ferienwohnung – Größe 29,7m²',

    // Tabelle
    'table_head_2p' => 'Für "2 Personen"',
    'table_head_3p' => 'Für "3 Personen"',
    'table_head_4p' => 'Für "4 Personen"',
    'price_footer'  => '<strong>Preise exclusive Kurtaxe (€ 3,00 pro Person/Tag ab 15 Jahren) Endreinigung: € 45,00</strong><br>Achtung: Aktueller Preis bei Vereinbarung (E-Mail,..), Saisonsabhängig!',

    // Galerie Teil 1
    'gallery_section_title_1' => 'Einblicke in unsere Ferienwohnung 3 – Hier können Sie sich rundum wohlfühlen',

    'img_bedroom_alt'      => 'Schlafzimmer Ferienwohnung Ferienwohnungen Luttinger',
    'img_bedroom_caption'  => 'Schlafzimmer Ferienwohnung 3',

    'img_kitchen_alt'      => 'Küche Ferienwohnung Luttinger',
    'img_kitchen_caption'  => 'Küche Ferienwohnung 3',

    'img_bath_alt'         => 'DU/WC Ferienwohnung Luttinger',
    'img_bath_caption'     => 'Dusche/WC Ferienwohnung 3',

    'img_living1_alt'      => 'Wohnzimmer Ferienwohnung Luttinger',
    'img_living1_caption'  => 'Wohnraum Ferienwohnung 3',

    'img_living2_alt'      => 'Wohnzimmer Ferienwohnung Luttinger',
    'img_living2_caption'  => 'Wohnraum Ferienwohnung 3',

    'img_living3_alt'      => 'Wohnzimmer Ferienwohnung Luttinger',
    'img_living3_caption'  => 'Wohnraum Ferienwohnung 3',

    // Galerie Teil 2
    'gallery_section_title_2' => 'Balkon mit Ausblick – Urlaubsregion Bichlbach in der Ferienwohnungen Luttinger',

    'img_summer1_alt'      => 'Ferienwohnungen Luttinger Bichlbach Sommer Berge',
    'img_summer1_caption'  => 'Ferienwohnungen Luttinger – Kohlberg',

    'img_summer2_alt'      => 'Ferienwohnungen Luttinger Bichlbach Berge Kohlberg',
    'img_summer2_caption'  => 'Ferienwohnungen Luttinger – Balkon',

    'img_winter1_alt'      => 'Ferienwohnungen Luttinger Bichlbach Winter Mähberg',
    'img_winter1_caption'  => 'Ferienwohnungen Luttinger – Winter Panorama',
  ],

  // ============================
  // ====== ENGLISCH (en) =======
  // ============================
  'en' => [

    // Title / headings
    'head_title' => 'Holiday Apartment "3" – Apartment Luttinger',
    'h1_main'    => 'Holiday Apartment "3" at Apartment Luttinger',
    'h2_sub'     => 'Apartment for 3 people – 30m² in Bichlbach',

    // Slider
    'alt_sliderimage' => 'Holiday apartment bedroom',

    // Floorplan
    'alt_floorplan'    => 'Floor plan of holiday apartment 3 at Apartment Luttinger',
    'caption_floorplan'=> 'Floor plan – Apartment "3"',

    // Intro paragraph
    'intro_paragraph' => 'Enjoy the breathtaking view of the Tyrolean mountains right from your window. Apartment "3" at Apartment Luttinger in Bichlbach offers cozy comfort with one bedroom, a wardrobe, a fully equipped kitchen, and more amenities.',

    // List bullets
    'list_bullets' => [
      'Suitable for 2 to 4 people',
      '<strong>Meals:</strong> Self-catering',
      '<strong>Bed linens</strong> included',
      '<strong>Towels</strong> included',
      '<strong>Kitchen equipment:</strong> dishes, pots, etc.',
      '<strong>Room type:</strong> Apartment',
      '<strong>Location:</strong> north/east side, 1st floor',
    ],

    // Smoking note
    'smoke_paragraph' => 'Please note: All rooms and apartments are non-smoking. Smokers can use the balcony. Thank you for your understanding.',

    // Buttons
    'btn_inquire'   => 'Send Inquiry',
    'btn_book'      => 'Book Now',
    'inklusivleistungen_link' => 'View Included Services',

    // Panorama
    'pano_label'    => '360° Panorama of Apartment 3',
    'apt_size_info' => 'Holiday apartment – size 29.7m²',

    // Table headings
    'table_head_2p' => 'For "2 people"',
    'table_head_3p' => 'For "3 people"',
    'table_head_4p' => 'For "4 people"',
    'price_footer'  => '<strong>Prices exclude tourist tax (€ 3.00 per person/day from age 15) final cleaning: € 45.00</strong><br>Note: The current price is subject to arrangement (email, etc.) and depends on the season!',

    // Gallery section 1
    'gallery_section_title_1' => 'A look into our Apartment 3 – feel right at home',

    'img_bedroom_alt'      => 'Bedroom holiday apartment Apartment Luttinger',
    'img_bedroom_caption'  => 'Bedroom Apartment 3',

    'img_kitchen_alt'      => 'Kitchen holiday apartment Apartment Luttinger',
    'img_kitchen_caption'  => 'Kitchen Apartment 3',

    'img_bath_alt'         => 'Bathroom / WC holiday apartment Apartment Luttinger',
    'img_bath_caption'     => 'Shower/WC Apartment 3',

    'img_living1_alt'      => 'Living room holiday apartment Apartment Luttinger',
    'img_living1_caption'  => 'Living area Apartment 3',

    'img_living2_alt'      => 'Living room holiday apartment Apartment Luttinger',
    'img_living2_caption'  => 'Living area Apartment 3',

    'img_living3_alt'      => 'Living room holiday apartment Apartment Luttinger',
    'img_living3_caption'  => 'Living area Apartment 3',

    // Gallery section 2
    'gallery_section_title_2' => 'Balcony with a View – Bichlbach Holiday Region at Apartment Luttinger',

    'img_summer1_alt'     => 'Apartment Luttinger Bichlbach summer mountains',
    'img_summer1_caption' => 'Apartment Luttinger – Kohlberg',

    'img_summer2_alt'     => 'Apartment Luttinger Bichlbach mountains Kohlberg',
    'img_summer2_caption' => 'Apartment Luttinger – Balcony',

    'img_winter1_alt'     => 'Apartment Luttinger Bichlbach winter Mähberg',
    'img_winter1_caption' => 'Apartment Luttinger – Winter panorama',
  ],
];
