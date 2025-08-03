<?php
// Standard-Sprache: Deutsch
$lang = 'de';

// Wenn ?lang=en in der URL → Englisch
if (isset($_GET['lang']) && $_GET['lang'] === 'en') {
  $lang = 'en';
}

// Hier kommt *alles* rein, was du in anreise.php ausgibst.
$content = [

  // ===================
  // Deutsch (de)
  // ===================
  'de' => [
    // HTML <html lang="...">
    'html_lang' => 'de',

    // Bild im Slider oben
    'slider_alt'   => 'Apartment Luttinger Bichlbach',
    'slider_title' => 'Apartments Luttinger - Hausansicht',

    // Haupt-Überschrift
    'headline_h1' => 'Ihr Weg zu Ferienwohnungen Luttinger',

    // Adressblock
    'logo_alt'   => 'Haus am Mühlbach Bichlbach - Ferienwohnungen Luttinger LOGO',
    'logo_title' => 'Logo PENSION LUTTINGER',

    'address_line1' => 'am Mühlbach - Ferienwohnungen Luttinger',
    'address_line2' => 'Familie Luttinger',

    'adresse_strasse' => 'Wahl 109',
    'adresse_plz_ort' => '6621 Bichlbach',
    'adresse_land'    => 'Österreich - Tirol',

    'adresse_phone_label' => '+43 676 953 413 0',
    'adresse_phone_title' => 'Telefonnummer Ferienwohnungen Luttinger',
    'adresse_email_text'  => 'info@luttinger-bichlbach.at',

    // Iframe + Haupt-Text
    'iframe_src' => 'https://maps.google.at/maps?f=q&source=s_q&hl=de&geocode=&q=pension+luttinger+bichlbach&aq=&sll=47.197335,11.532175&sspn=1.270892,3.523865&ie=UTF8&hq=pension+luttinger&hnear=Bichlbach,+Reutte,+Tirol&t=m&ll=47.421337,10.790441&spn=0.005081,0.008583&z=16&output=embed',

    'p_main' => 'Die Ferienwohnungen Luttinger liegt in der Ferienregion Tiroler Zugspitz Arena in Bichlbach / Tirol. Sie erreichen uns bequem mit Auto, Bahn oder Flugzeug - mautfrei über Ulm/Kempten oder Garmisch-Partenkirchen.',

    // Verkehrsmittel
    'headline_h2_verkehr' => 'Verkehrsmittel in die Tiroler Zugspitz Arena',

    // Taxi
    'headline_h3_taxi' => 'Taxidienst in die Zugspitz Arena:',
    'taxi_strolz' => 'Taxi Strolz - Bichlbach<br>Tel. +43 / (0)5674 / 53 77',
    'shuttle_and_more' => 'Shuttle and More<br>Tel. +43 / (0)664 266 7 166',

    // Flugzeug
    'headline_h3_flugzeug' => 'Anreise mit dem Flugzeug:',
    'flug_innsbruck'       => 'Innsbruck - Entfernung: 1,0 Std.',
    'flug_muenchen'        => 'München - Entfernung: 1,5 Std.',

    // Bahn
    'headline_h3_bahn' => 'Anfahrt mit der Bahn:',
    'li_bahn_schweiz'  => 'Aus der Schweiz bis Bahnhof Imst, weiter mit Bus/Taxi nach Bichlbach',
    'li_bahn_italien'  => 'Aus Italien via Innsbruck/Garmisch-Partenkirchen zum Bahnhof Bichlbach',
    'li_bahn_de'       => 'Aus Deutschland über München-Garmisch oder Pfronten-Füssen nach Bichlbach',

    // Auto
    'headline_h3_auto'  => 'Anfahrt mit dem Auto:',
    'li_auto_muc'       => 'über München/Garmisch: ca. 1,5 Std. - Vignette: Nein',
    'li_auto_stutt'     => 'über Stuttgart/Kempten/Pfronten: ca. 3,0 Std. - Vignette: Nein',
    'li_auto_bozen'     => 'über Bozen/Meran/Innsbruck/Fernpaß: ca. 2,0 Std. - Vignette: Ja',
    'li_auto_zuerich'   => 'über Zürich/Arlberg/Fernpaß: ca. 3,0 Std. - Vignette: Ja',
  ],

  // ===================
  // Englisch (en)
  // ===================
  'en' => [
    'html_lang' => 'en',

    'slider_alt'   => 'Apartment Luttinger Bichlbach',
    'slider_title' => 'Apartments Luttinger - house view',

    'headline_h1' => 'Your way to Apartment Luttinger',

    'logo_alt'   => 'House am Mühlbach Bichlbach - Apartment Luttinger LOGO',
    'logo_title' => 'Logo PENSION LUTTINGER',

    'address_line1' => 'am Mühlbach - Apartment Luttinger',
    'address_line2' => 'Family Luttinger',

    'adresse_strasse' => 'Wahl 109',
    'adresse_plz_ort' => '6621 Bichlbach',
    'adresse_land'    => 'Austria - Tyrol',

    'adresse_phone_label' => '+43 676 953 413 0',
    'adresse_phone_title' => 'Phone number Apartment Luttinger',
    'adresse_email_text'  => 'info@luttinger-bichlbach.at',

    // same Iframe, just different lang param if you want
    'iframe_src' => 'https://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=pension+luttinger+bichlbach&ie=UTF8&hq=pension+luttinger&hnear=Bichlbach,+Reutte,+Tyrol&t=m&ll=47.421337,10.790441&spn=0.005081,0.008583&z=16&output=embed',

    'p_main' => 'Apartment Luttinger is located in the Tiroler Zugspitz Arena in Bichlbach/Tyrol. You can reach us easily by car, train, or plane – toll-free via Ulm/Kempten or Garmisch-Partenkirchen.',

    'headline_h2_verkehr' => 'Travel options in the Tiroler Zugspitz Arena',

    'headline_h3_taxi' => 'Taxi services to Zugspitz Arena:',
    'taxi_strolz' => 'Taxi Strolz - Bichlbach<br>Tel. +43 / (0)5674 / 53 77',
    'shuttle_and_more' => 'Shuttle and More<br>Tel. +43 / (0)664 266 7 166',

    'headline_h3_flugzeug' => 'Arriving by plane:',
    'flug_innsbruck'       => 'Innsbruck – distance approx. 1 hour',
    'flug_muenchen'        => 'Munich – distance approx. 1.5 hours',

    'headline_h3_bahn' => 'Arriving by train:',
    'li_bahn_schweiz'  => 'From Switzerland to Imst station, then bus/taxi to Bichlbach',
    'li_bahn_italien'  => 'From Italy via Innsbruck/Garmisch-Partenkirchen to Bichlbach station',
    'li_bahn_de'       => 'From Germany via Munich-Garmisch or Pfronten-Füssen directly to Bichlbach',

    'headline_h3_auto'  => 'Arriving by car:',
    'li_auto_muc'       => 'via Munich/Garmisch: about 1.5 hrs – No toll sticker required',
    'li_auto_stutt'     => 'via Stuttgart/Kempten/Pfronten: about 3 hrs – No toll sticker required',
    'li_auto_bozen'     => 'via Bozen/Meran/Innsbruck/Fernpass: about 2 hrs – Toll sticker: Yes',
    'li_auto_zuerich'   => 'via Zurich/Arlberg/Fernpass: about 3 hrs – Toll sticker: Yes',
  ],
];
