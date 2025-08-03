<?php
/**
 * sprache-index.php mit optimierten Texten für SEO (DE & EN komplett)
 */

// =======================
// SPRACHAUSWAHL
// =======================
$lang = 'de'; // Standard-Sprache Deutsch
if (isset($_GET['lang']) && $_GET['lang'] === 'en') {
    $lang = 'en';
}

// =======================
// INHALTE (de/en)
// =======================
$content = [

    // ===========================================================
    // Deutsch (de)
    // ===========================================================
    'de' => [
        // Allgemeine Intro-Texte
        'headline_main'   => 'Ferienwohnung und Zimmer in Bichlbach mitten in der Zugspitzarena!',
        'intro_p1'        => 'Herzlich willkommen in unseren gemütlichen <strong>Ferienwohnungen und Zimmern in Bichlbach</strong>! Unser Haus liegt <strong>mitten in der Zugspitzarena</strong> und ist das ideale, <strong>hundefreundliche</strong> Urlaubsziel für Liebhaber der Natur. Besonderheiten sind:',
        'intro_list_li1'  => '<strong>Sonniger Standort</strong>: Genießen Sie die Wintersonne und den Blick auf Roten Stein und Hahnenkammkette.',
        'intro_list_li2'  => '<strong>Freizeit und Komfort</strong>: Direkte Nähe zum Skilift Bichlbach-Berwang, Skischulsammelplatz, Loipen, Liegewiese mit Grill und Badesee.',
        'intro_list_li3'  => '<strong>Tierpark Bichlbach</strong>: Ein beliebtes Ausflugsziel für Familien.',
        'intro_list_li4'  => '<strong>Einkaufen & Service</strong>: Sportgeschäft, Supermarkt, Spezialitätenladen, Friseur und Tankstelle sind schnell erreichbar.',
        'intro_list_li5'  => '<strong>Voll ausgestattete Wohnungen</strong>: Balkon, SAT-TV, Radio, WLAN und viele weitere <a href="inklusivleistungen.php" title="Unsere Inklusivleistungen">Inklusivleistungen</a>.',
        'intro_list_li6'  => '<strong>Gratis Parken</strong> direkt am Haus.',
        'intro_list_li7'  => '<strong>Attraktionen der Zugspitz Arena</strong>: Mit der <a href="https://zugspitzarena.com/de/Unterkuenfte-Tickets/Gaestekarte" title="Informationen zur Gästekarte">Gästekarte</a> erreichen Sie bequem Badeseen, die Highline 179 und mehr.',
        'intro_p2'        => 'Unsere Lage und die hundefreundliche Ausstattung machen die Ferienwohnungen Luttinger zum perfekten Ort für Ihren Erholungs- oder Aktivurlaub in Tirol.',
        'intro_p3'        => 'Wir bieten <strong>3 Ferienwohnungen</strong> für <strong>2 bis 4 Personen</strong> sowie gemütliche <strong>Doppelzimmer</strong>. Erfahren Sie mehr über unsere <a href="zimmer-wohnung.php" title="Details zu unseren Zimmern und Wohnungen">Zimmer und Ferienwohnungen in Bichlbach</a>.',

        // Buttons (allgemein)
        'btn_anfragen'    => 'Jetzt anfragen',
        'btn_buchen'      => 'Jetzt Buchen',

        // Bestpreis-Garantie
        'bestprice_h2'    => 'Bestpreis-Garantie bei Direktbuchung',
        'bestprice_p1'    => 'Buchen Sie Ihren <strong>Traumurlaub</strong> in unserer <strong>Ferienwohnung in Bichlbach</strong> oder im Doppelzimmer direkt und profitieren Sie von:',
        'bestprice_ul'    => [
            '<strong>Bestpreis-Garantie</strong> – immer günstiger als über Buchungsportale',
            '<strong>Keine zusätzlichen Buchungsgebühren</strong>',
            'Persönliche Beratung und Tipps für Ihren <strong>Skiurlaub & Sommerurlaub in Tirol</strong>'
        ],
        'bestprice_note'  => 'Hinweis: Wir bieten <strong>Selbstverpflegung</strong> in unseren <strong>Ferienwohnungen</strong>; ein Frühstücksangebot steht nicht zur Verfügung.',
        'bestprice_btn1'  => 'Jetzt anfragen',
        'bestprice_btn2'  => 'Jetzt buchen',

        // Kacheln "Unsere Angebote"
        'offers_h2'       => 'Unsere Angebote für Ihren Urlaub',
        'offers_p'        => 'Entdecken Sie Ihre passende <strong>Unterkunft in der Tiroler Zugspitz Arena</strong> und erleben Sie erholsame oder aktive Ferientage im Herzen von Tirol.',
        'offers_kachel1_h3' => 'Zimmer & Wohnungen',
        'offers_kachel1_p'  => 'Geräumige Ferienwohnungen & gemütliche Doppelzimmer',
        'offers_kachel2_h3' => 'Preise & Angebote',
        'offers_kachel2_p'  => 'Übersicht unserer Saisonpreise & Pauschalen',
        'offers_kachel3_h3' => 'Aktivitäten',
        'offers_kachel3_p'  => 'Ski, Wandern, Biken: Freizeitspaß im Zugspitzgebiet',
        'offers_kachel4_h3' => 'Inklusivleistungen',
        'offers_kachel4_p'  => 'Gratis WLAN, Parkplatz und vieles mehr',

        // ALT-/TITLE-Bilder DE
        'alt_ski'         => 'Skifahren in der Tiroler Zugspitz Arena',
        'title_ski'       => 'Winterurlaub in Berwang/Bichlbach',
        'alt_langlauf'    => 'Langlaufen auf Loipen in Bichlbach',
        'title_langlauf'  => 'Langlaufen in der Zugspitz Arena',
        'alt_rodeln'      => 'Rodeln bei Tag und Nacht in Bichlbach',
        'title_rodeln'    => 'Rodelspaß für die ganze Familie',
        'alt_schneewandern' => 'Schneewandern in der Winterlandschaft',
        'title_schneewandern' => 'Romantische Winterwanderungen',
        'alt_wandern'     => 'Wandern in der Zugspitz Arena in Tirol',
        'title_wandern'   => 'Wandern und die Alpen entdecken',
        'alt_bike'        => 'Mountainbike-Touren in der Zugspitz Arena',
        'title_bike'      => 'Downhill oder gemütlich radeln',
        'alt_baden'       => 'Baden in klaren Bergseen in der Nähe von Bichlbach',
        'title_baden'     => 'Abkühlung in den Gebirgsseen',
        'alt_highline'    => 'Hängebrücke highline179 bei Reutte',
        'title_highline'  => 'Ausflug zur highline179 Ehrenberg',
        'alt_neuschw'     => 'Ausflug zum Schloss Neuschwanstein',
        'title_neuschw'   => 'Märchenschloss Neuschwanstein besuchen',
        'alt_zugbahn'     => 'Fahrt mit der Tiroler Zugspitzbahn',
        'title_zugbahn'   => 'Tiroler Zugspitzbahn auf die Zugspitze',
        'alt_pension'     => 'Apartments Luttinger mit Blick auf den Kohlberg',
        'title_pension'   => 'Unsere Ferienwohnungen und Zimmer in Bichlbach',

        // Slider-Texte: WINTER
        'slider_w1_h'     => '7 Skigebiete – 143 km Pisten',
        'slider_w1_p'     => 'Die Tiroler Zugspitz Arena umfasst 7 Skigebiete, abwechslungsreiche Pisten und atemberaubende Ausblicke.',
        'slider_w2_h'     => '110 km Langlaufloipen direkt ab Bichlbach',
        'slider_w2_p'     => 'Bichlbach ist ein zentraler Knotenpunkt des Loipennetzes in der Tiroler Zugspitz Arena.',
        'slider_w3_h'     => 'Rodeln bei Tag & Nacht',
        'slider_w3_p'     => 'Spaß für alle Altersgruppen, tagsüber oder abends. Gemütliche Hütten und perfekte Bahnen garantieren Rodelgaudi.',
        'slider_w4_h'     => 'Schneewandern von Gipfel zu Gipfel',
        'slider_w4_p'     => 'Über 60 km geräumte Winterwanderwege warten darauf, von Ihnen entdeckt zu werden.',

        // Slider-Texte: SOMMER
        'slider_s1_h'     => 'Wanderungen & gemütliche Spaziergänge',
        'slider_s1_p'     => 'Wasserfälle, Bergseen, botanische Schönheiten – entdecken Sie die Natur!',
        'slider_s2_h'     => 'Bike Arena Tirol',
        'slider_s2_p'     => 'Fantastische Mountainbike-Touren und Radwege in allen Höhenlagen.',
        'slider_s3_h'     => 'Badespaß in der Region',
        'slider_s3_p'     => 'Smaragdgrüne Bergseen und Freibäder sorgen für Abkühlung an heißen Tagen.',
        's4_h'     => 'Hängebrücke highline179',
        'slider_s4_p'     => 'Erleben Sie Nervenkitzel auf der zweitlängsten Fußgänger-Hängebrücke der Welt bei Reutte.',
        'slider_s5_h'     => 'Neuschwanstein & Königsschlösser',
        'slider_s5_p'     => 'Besuchen Sie die berühmten Königsschlösser von König Ludwig II. in unserer Nähe.',
        'slider_s6_h'     => 'Tiroler Zugspitzbahn',
        'slider_s6_p'     => 'Fahren Sie mit der Seilbahn auf 2.962 m und genießen Sie das einzigartige Panorama.',

        // Hunde willkommen
        'hund_alt'         => 'Wandern mit Hund und Familie in den Tiroler Alpen',
        'hund_title'       => 'Hunde sind bei uns willkommen',
        'hund_headline'    => 'Urlaub mit Hund: Ihre Ferienwohnung in Bichlbach',
        'hund_p1'          => "Ihr Hund gehört zur Familie – und darf im Urlaub natürlich nicht fehlen! In unseren Ferienwohnungen Luttinger sind Hunde nicht nur erlaubt, sie sind herzlich willkommen!\n\nStellen Sie sich vor: Endlose Spaziergänge durch die atemberaubende Landschaft der Zugspitzarena, Ihr treuer Freund an Ihrer Seite. Und nach einem aufregenden Tag kehren Sie zurück in die Gemütlichkeit unserer Ferienwohnungen, wo sich auch Ihr Vierbeiner pudelwohl fühlt.",
        'hund_h3_warum'    => 'Warum Ihr Hund die Ferienwohnungen Luttinger lieben wird',
        'hund_h3_lage'     => 'Traumhafte Lage für Gassigeher',
        'hund_p_lage'      => 'Direkt vor unserer Haustür beginnt ein Paradies für Hunde und ihre Menschen. Erkunden Sie gemeinsam malerische Wanderwege und genießen Sie die frische Bergluft.',
        'hund_h3_zuhause'  => 'Ein Zuhause fern von Zuhause',
        'hund_p_zuhause'   => 'Wir wissen, dass sich Ihr Hund bei uns wohlfühlen soll. Deshalb stellen wir kostenlos Hundedecken und Näpfe zur Verfügung. Aus Rücksicht auf Sauberkeit und Hygiene, sowie zum Schutz unserer Möbel, sind Couchen und Betten für Ihren Vierbeiner tabu.',
        'hund_h3_sicherheit' => 'Sicherheit für Ihr Tier',
        'hund_p_sicherheit'  => 'Wir bitten Sie, Ihren Hund in Ihrer mitgebrachten, geeigneten Hundebox unterzubringen, wenn Sie die Wohnung verlassen. Dies dient nicht nur dem Schutz Ihres Tieres, sondern auch dem Schutz unserer Einrichtung, falls Ihr Hund unter Trennungsangst leidet.',
        'hund_p_abschluss' => 'Wir freuen uns auf Sie und Ihren pelzigen Freund!',
    ],

    // ===========================================================
    // Englisch (en)
    // ===========================================================
    'en' => [
        // Intro
        'headline_main'   => 'Apartments & Rooms in Bichlbach in the Heart of the Zugspitz Arena!',
        'intro_p1'        => 'Welcome to our cozy <strong>apartments and rooms in Bichlbach</strong>! Our house is located right in the <strong>middle of the Zugspitz Arena</strong> and is the ideal, <strong>dog-friendly</strong> holiday destination for nature lovers. Highlights include:',
        'intro_list_li1'  => '<strong>Sunny location</strong>: Enjoy the winter sun and the view of Roter Stein and the Hahnenkamm mountain range.',
        'intro_list_li2'  => '<strong>Leisure and comfort</strong>: Close to the Bichlbach-Berwang ski lift, ski school meeting point, cross-country trails, sunbathing lawn with BBQ, and a swimming lake.',
        'intro_list_li3'  => '<strong>Bichlbach Animal Park</strong>: A popular destination for families.',
        'intro_list_li4'  => '<strong>Shopping & Services</strong>: A sports shop, supermarket, specialty store, hairdresser, and gas station are all quickly accessible.',
        'intro_list_li5'  => '<strong>Fully equipped apartments</strong>: Balcony, satellite TV, radio, Wi-Fi, and many other <a href="inklusivleistungen.php?lang=en" title="Our included services">included services</a>.',
        'intro_list_li6'  => '<strong>Free parking</strong> directly at the house.',
        'intro_list_li7'  => '<strong>Attractions of the Zugspitz Arena</strong>: With the <a href="https://zugspitzarena.com/en/Accommodation-Tickets/Guest-Card" title="Information about the guest card">guest card</a>, you can easily reach swimming lakes, the Highline 179, and more.',
        'intro_p2'        => 'Our location and dog-friendly facilities make Apartments Luttinger the perfect place for your relaxing or active holiday in Tyrol.',
        'intro_p3'        => 'We offer <strong>3 apartments</strong> for <strong>2 to 4 people</strong> as well as cozy <strong>double rooms</strong>. Find out more about our <a href="zimmer-wohnung.php?lang=en" title="Details about our rooms and apartments">rooms and apartments in Bichlbach</a>.',

        // Buttons
        'btn_anfragen'    => 'Inquire Now',
        'btn_buchen'      => 'Book Now',

        // Best Price Guarantee
        'bestprice_h2'    => 'Best Price Guarantee for Direct Bookings',
        'bestprice_p1'    => 'Book your <strong>dream vacation</strong> in our <strong>apartment in Bichlbach</strong> or a double room directly and benefit from:',
        'bestprice_ul'    => [
            '<strong>Best price guarantee</strong> – always cheaper than on booking portals',
            '<strong>No additional booking fees</strong>',
            'Personal advice and tips for your <strong>ski & summer holiday in Tyrol</strong>'
        ],
        'bestprice_note'  => 'Please note: We offer <strong>self-catering</strong> in our <strong>apartments</strong>; breakfast service is not available.',
        'bestprice_btn1'  => 'Inquire Now',
        'bestprice_btn2'  => 'Book Now',

        // "Our Offers" Tiles
        'offers_h2'       => 'Our Offers for Your Holiday',
        'offers_p'        => 'Discover your perfect <strong>accommodation in the Tyrolean Zugspitz Arena</strong> and enjoy a relaxing or active holiday in the heart of Tyrol.',
        'offers_kachel1_h3' => 'Rooms & Apartments',
        'offers_kachel1_p'  => 'Spacious apartments & cozy double rooms',
        'offers_kachel2_h3' => 'Prices & Offers',
        'offers_kachel2_p'  => 'Overview of our seasonal rates & packages',
        'offers_kachel3_h3' => 'Activities',
        'offers_kachel3_p'  => 'Skiing, hiking, biking: fun in the Zugspitz region',
        'offers_kachel4_h3' => 'Included Services',
        'offers_kachel4_p'  => 'Free Wi-Fi, parking, and much more',

        // ALT/TITLE Tags for Images EN
        'alt_ski'         => 'Skiing in the Tyrolean Zugspitz Arena',
        'title_ski'       => 'Winter holiday in Berwang/Bichlbach',
        'alt_langlauf'    => 'Cross-country skiing on trails in Bichlbach',
        'title_langlauf'  => 'Cross-country skiing in the Zugspitz Arena',
        'alt_rodeln'      => 'Tobogganing by day and night in Bichlbach',
        'title_rodeln'    => 'Tobogganing fun for the whole family',
        'alt_schneewandern' => 'Snowshoeing in the winter landscape',
        'title_schneewandern' => 'Romantic winter hikes',
        'alt_wandern'     => 'Hiking in the Zugspitz Arena in Tyrol',
        'title_wandern'   => 'Hiking and discovering the Alps',
        'alt_bike'        => 'Mountain bike tours in the Zugspitz Arena',
        'title_bike'      => 'Downhill or leisurely cycling',
        'alt_baden'       => 'Swimming in clear mountain lakes near Bichlbach',
        'title_baden'     => 'Cooling off in the mountain lakes',
        'alt_highline'    => 'Suspension bridge highline179 near Reutte',
        'title_highline'  => 'Trip to the highline179 Ehrenberg',
        'alt_neuschw'     => 'Trip to Neuschwanstein Castle',
        'title_neuschw'   => 'Visit the fairytale castle Neuschwanstein',
        'alt_zugbahn'     => 'Ride on the Tyrolean Zugspitzbahn',
        'title_zugbahn'   => 'Tyrolean cable car to the Zugspitze summit',
        'alt_pension'     => 'Apartments Luttinger with a view of the Kohlberg',
        'title_pension'   => 'Our apartments and rooms in Bichlbach',

        // Slider Texts: WINTER
        'slider_w1_h'     => '7 Ski Resorts – 143 km of Slopes',
        'slider_w1_p'     => 'The Tyrolean Zugspitz Arena features 7 ski resorts, diverse slopes, and breathtaking views.',
        'slider_w2_h'     => '110 km of Cross-Country Ski Trails from Bichlbach',
        'slider_w2_p'     => 'Bichlbach is a central hub in the cross-country skiing network of the Tyrolean Zugspitz Arena.',
        'slider_w3_h'     => 'Tobogganing Day & Night',
        'slider_w3_p'     => 'Fun for all ages, day or evening. Cozy huts and perfect tracks guarantee tobogganing fun.',
        'slider_w4_h'     => 'Snowshoeing from Peak to Peak',
        'slider_w4_p'     => 'Over 60 km of cleared winter hiking trails are waiting to be discovered by you.',

        // Slider Texts: SUMMER
        'slider_s1_h'     => 'Hiking & Leisurely Walks',
        'slider_s1_p'     => 'Waterfalls, mountain lakes, botanical beauties – discover nature!',
        'slider_s2_h'     => 'Bike Arena Tyrol',
        'slider_s2_p'     => 'Fantastic mountain bike tours and cycling paths at all altitudes.',
        'slider_s3_h'     => 'Swimming Fun in the Region',
        'slider_s3_p'     => 'Emerald green mountain lakes and outdoor pools provide a cool-down on hot days.',
        'slider_s4_h'     => 'Highline179 Suspension Bridge',
        'slider_s4_p'     => 'Experience the thrill on the second-longest pedestrian suspension bridge in the world near Reutte.',
        'slider_s5_h'     => 'Neuschwanstein & Royal Castles',
        'slider_s5_p'     => 'Visit the famous royal castles of King Ludwig II in our vicinity.',
        'slider_s6_h'     => 'Tyrolean Zugspitzbahn',
        'slider_s6_p'     => 'Take the cable car to 2,962 m and enjoy the unique panorama.',

        // Dogs Welcome
        'hund_alt'         => 'Hiking with a dog and family in the Tyrolean Alps',
        'hund_title'       => 'Dogs are welcome here',
        'hund_headline'    => 'Holiday with your Dog: Your Apartment in Bichlbach',
        'hund_p1'          => "Your dog is part of the family – and of course, shouldn't be left behind on vacation! At our apartments, dogs are not just tolerated, they are warmly welcomed!\n\nImagine: endless walks through the breathtaking landscape of the Zugspitz Arena, your loyal friend by your side. After an exciting day, you'll return to the comfort of our apartments, where your four-legged friend will feel right at home.",
        'hund_h3_warum'    => 'Why Your Dog Will Love Apartments Luttinger',
        'hund_h3_lage'     => 'A Dream Location for Dog Walkers',
        'hund_p_lage'      => 'A paradise for dogs and their humans begins right at our doorstep. Explore picturesque hiking trails together and enjoy the fresh mountain air.',
        'hund_h3_zuhause'  => 'A Home Away from Home',
        'hund_p_zuhause'   => 'We want your dog to feel comfortable with us. That\'s why we provide dog blankets and bowls free of charge. For reasons of cleanliness and hygiene, and to protect our furniture, couches and beds are off-limits for your pet.',
        'hund_h3_sicherheit' => 'Safety and Security for Your Pet',
        'hund_p_sicherheit'  => 'We kindly ask you to place your dog in a suitable crate you\'ve brought with you when you leave the apartment. This is not only for the protection of your pet but also to protect our furnishings in case your dog suffers from separation anxiety.',
        'hund_p_abschluss' => 'We look forward to welcoming you and your furry friend!',
    ],
];
?>