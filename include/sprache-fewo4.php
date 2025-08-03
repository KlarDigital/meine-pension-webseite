<?php
// Standard: Deutsch
$lang = 'de';

// Umschalten auf Englisch, wenn ?lang=en
if (isset($_GET['lang']) && $_GET['lang'] === 'en') {
  $lang = 'en';
}

$fewo4Texte = [

  // ============================
  // ===== DEUTSCH (de) ========
  // ============================
  'de' => [

    // Title / Kopfzeile
    'head_title' => 'Ferienwohnung "Apartment 4" – Ferienwohnungen Luttinger',

    // Überschriften
    'h1_main'    => 'Ferienwohnung "Apartment 4" in Ferienwohnungen Luttinger',
    'h2_sub'     => 'Apartment für 3 Personen – 34m²',

    // Slider/Hauptbild
    'alt_sliderimage' => 'Ferienwohnung Schlafzimmer',

    // Grundriss
    'alt_floorplan'    => 'Appartement 6',
    'caption_floorplan' => 'Grundriss – Ferienwohnung "4"',

    // Intro-Absatz
    'intro_text' => 'Die Ferienwohnung "4" in den Ferienwohnungen Luttinger verbindet hochwertige Ausstattung mit einem Ambiente, das zum Wohlfühlen einlädt. Ein besonderes Highlight ist der atemberaubende <strong>360-Grad-Blick</strong> auf die majestätischen Tiroler Berge, der sich Ihnen nicht nur aus der großzügigen <strong>Dachgaube</strong>, sondern auch vom <strong>Balkon</strong> aus bietet. Diese geschmackvoll eingerichtete Wohnung umfasst ein gemütliches <strong>Schlafzimmer</strong> sowie eine <strong>Küche</strong> mit Esstisch. Im einladenden Wohnbereich sorgen eine ausziehbare <strong>Doppelcouch, SAT-TV</strong> und <strong>WLAN</strong> für Komfort und Unterhaltung, während der <strong>Balkon</strong> zum Verweilen in der beeindruckenden <strong>Bergkulisse</strong> einlädt.',

    // Listenpunkte
    'list_bullets' => [
      'Für 2 bis max 4 Personen',
      '<strong>Bettwäsche</strong> inklusive',
      '<strong>Handtücher</strong> inklusive',
      '<strong>Küchenausstattung</strong> Geschirr, Kochtöpfe, Microwelle mit Grill, Toaster, Sandwitch Toster, Mixer, Stabmixer, Kaffeemaschine(Filtrer) und mehr',
      '<strong>Verpflegung:</strong>Selbstverpflegung',
      '<strong>Zimmerart:</strong> Appartement',
      '<strong>Lage:</strong> Süd/West-Seite, 2 Stock',
    ],

    'smoking_info' => 'Bitte beachten Sie: Alle Zimmer und Ferienwohnungen sind Nichtraucherzimmer. Für Raucher steht der Balkon zur Verfügung. Wir danken für Ihr Verständnis.',

    // Buttons
    'btn_inquire' => 'Anfrage senden',
    'btn_book'    => 'Buchen',
    'link_inclusive' => 'Inklusivleistungen',

    // 360° Panorama
    'pano_label'    => '360° Panorama der Ferienwohnung 4',
    'apt_size_info' => 'Ferienwohnung – Größe 34,2m²',

    // Tabellentexte
    'table_head_2p' => 'Für "2 Personen"',
    'table_head_3p' => 'Für "3 Personen"',
    'table_head_4p' => 'Für "4 Personen"',
    'price_note'    => '<strong>Preise exclusive Kurtaxe (€ 3,00 pro Person/Tag ab 15 Jahren) Endreinigung: € 40,00</strong><br>Achtung: Aktueller Preis bei Vereinbarung (E-Mail,..), Saisonsabhängig!',

    // Galerie 1
    'gallery_title_1' => 'Einblicke in unsere Ferienwohnung 4 – Hier können Sie sich rundum wohlfühlen',

    // Bilder + Unterschriften
    'img_living1_alt'      => 'Wohnzimmer Ferienwohnung Luttinger',
    'img_living1_caption'  => 'Wohnraum Ferienwohnung "4"',

    'img_living2_alt'      => 'Wohnzimmer Ferienwohnung Luttinger',
    'img_living2_caption'  => 'Wohnraum Ferienwohnung "4"',

    'img_bath_alt'         => 'DU/WC Ferienwohnung Luttinger',
    'img_bath_caption'     => 'DU/WC Ferienwohnung "4"',

    'img_bed1_alt'         => 'Schlafzimmer Ferienwohnung Luttinger',
    'img_bed1_caption'     => 'Schlafzimmer Ferienwohnung "4"',

    'img_bed2_alt'         => 'Schlafzimmer Ferienwohnung Luttinger',
    'img_bed2_caption'     => 'Schlafzimmer Ferienwohnung "4"',

    'img_kitchen1_alt'     => 'Küche Ferienwohnung Luttinger',
    'img_kitchen1_caption' => 'Küche Ferienwohnung "4"',

    'img_kitchen2_alt'     => 'Küche Ferienwohnung Luttinger',
    'img_kitchen2_caption' => 'Küche Ferienwohnung "4"',

    // Galerie 2
    'gallery_title_2' => 'Balkon mit Ausblick – Urlaubsregion Bichlbach',

    'img_balcony1_alt'     => 'Ferienwohnungen Luttinger Bichlbach Panorama Sommer',
    'img_balcony1_caption' => 'Ferienwohnung Luttinger- Balkon Sommer- "Bichlbach, Berwang"',

    'img_balcony2_alt'     => 'Ferienwohnungen Luttinger Bichlbach Panorama Sommer',
    'img_balcony2_caption' => 'Ferienwohnung Luttinger- Balkon Sommer- "Bichlbach, Berwang"',

    'img_winter1_alt'      => 'Ferienwohnungen Luttinger Bichlbach Panorma Winter',
    'img_winter1_caption'  => 'Ferienwohnung Luttinger - Balkon Winter "Bichlbach, Berwang"',

    'img_winter2_alt'      => 'Ferienwohnungen Luttinger Bichlbach Panorama Winter Mähberg',
    'img_winter2_caption'  => 'Ferienwohnung Luttinger - Balkon Winter "Bichlbach, Berwang"',
    'img_winter3_alt'      => 'Ferienwohnungen Luttinger Bichlbach Panorama Winter Mähberg',
    'img_winter3_caption'  => 'Ferienwohnung Luttinger - Balkon Winter "Bichlbach, Berwang"',
  ],

  // ============================
  // ===== ENGLISCH (en) ========
  // ============================
  'en' => [

    'head_title' => 'Holiday Apartment "4" – Apartement Luttinger',

    'h1_main'    => 'Holiday Apartment "4" at Apartement Luttinger',
    'h2_sub'     => 'Apartment for 3 people – 34m²',

    'alt_sliderimage' => 'Holiday apartment bedroom',

    'alt_floorplan'    => 'Apartment 6',
    'caption_floorplan' => 'Floor plan – Holiday apartment "4"',

    'intro_text' => 'Apartment "4" at Apartement Luttinger combines high-quality amenities with a cozy atmosphere. A special highlight is the breathtaking <strong>360-degree view</strong> of the majestic Tyrolean mountains, which you can enjoy not only from the spacious <strong>roof dormer</strong> but also from the <strong>balcony</strong>. This tastefully furnished apartment features a comfortable <strong>bedroom</strong> and a <strong>kitchen</strong> with a dining table. In the inviting living area, a pull-out <strong>double couch, satellite TV</strong>, and <strong>Wi-Fi</strong> provide comfort and entertainment, while the <strong>balcony</strong> invites you to linger amidst the impressive <strong>mountain scenery</strong>.',

    'list_bullets' => [
      'For 2 to max 4 people',
      '<strong>Bed linens</strong> included',
      '<strong>Towels</strong> included',
      '<strong>Kitchen facilities</strong> dishes, pots, microwave with grill, toaster, sandwich toaster, mixer, hand blender, filter coffee machine, and more',
      '<strong>Meals:</strong> Self-catering',
      '<strong>Room type:</strong> Apartment',
      '<strong>Location:</strong> south/west side, 2nd floor',
    ],

    'smoking_info' => 'Please note: All rooms and apartments are non-smoking. Smokers can use the balcony. Thank you for your understanding.',

    'btn_inquire' => 'Send Inquiry',
    'btn_book'    => 'Book Now',
    'link_inclusive' => 'Included Services',

    'pano_label'    => '360° Panorama of Apartment 4',
    'apt_size_info' => 'Holiday apartment – size 34.2m²',

    'table_head_2p' => 'For "2 people"',
    'table_head_3p' => 'For "3 people"',
    'table_head_4p' => 'For "4 people"',
    'price_note'    => '<strong>Prices exclude local tax (€ 3.00 per person/day from age 15) final cleaning: € 40.00</strong><br>Note: Current price depends on arrangement (email, etc.) and season!',

    'gallery_title_1' => 'A look into our Apartment 4 – Feel at home here',

    // Image alt/captions
    'img_living1_alt'      => 'Living room holiday apartment Luttinger',
    'img_living1_caption'  => 'Living area Apartment "4"',

    'img_living2_alt'      => 'Living room holiday apartment Luttinger',
    'img_living2_caption'  => 'Living area Apartment "4"',

    'img_bath_alt'         => 'Shower/WC holiday apartment Luttinger',
    'img_bath_caption'     => 'Shower/WC Apartment "4"',

    'img_bed1_alt'         => 'Bedroom holiday apartment Luttinger',
    'img_bed1_caption'     => 'Bedroom Apartment "4"',

    'img_bed2_alt'         => 'Bedroom holiday apartment Luttinger',
    'img_bed2_caption'     => 'Bedroom Apartment "4"',

    'img_kitchen1_alt'     => 'Kitchen holiday apartment Luttinger',
    'img_kitchen1_caption' => 'Kitchen Apartment "4"',

    'img_kitchen2_alt'     => 'Kitchen holiday apartment Luttinger',
    'img_kitchen2_caption' => 'Kitchen Apartment "4"',

    'gallery_title_2' => 'Balcony with a View – Bichlbach Holiday Region',

    'img_balcony1_alt'     => 'Apartment Luttinger Bichlbach summer panorama',
    'img_balcony1_caption' => 'Apartment Luttinger – Balcony summer "Bichlbach, Berwang"',

    'img_balcony2_alt'     => 'Apartment Luttinger Bichlbach summer panorama',
    'img_balcony2_caption' => 'Apartment Luttinger – Balcony summer "Bichlbach, Berwang"',

    'img_winter1_alt'      => 'Apartment Luttinger Bichlbach winter panorama',
    'img_winter1_caption'  => 'Apartment Luttinger – Balcony winter "Bichlbach, Berwang"',

    'img_winter2_alt'      => 'Apartment Luttinger Bichlbach winter panorama Mähberg',
    'img_winter2_caption'  => 'Apartment Luttinger – Balcony winter "Bichlbach, Berwang"',

    'img_winter3_alt'      => 'Apartment Luttinger Bichlbach winter panorama Mähberg',
    'img_winter3_caption'  => 'Apartment Luttinger – Balcony winter "Bichlbach, Berwang"',
  ],
];
