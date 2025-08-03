<?php
// Standard-Sprache Deutsch
$lang = 'de';

// Umschalten auf Englisch, wenn ?lang=en
if (isset($_GET['lang']) && $_GET['lang'] === 'en') {
  $lang = 'en';
}

$isEnglish = ($lang === 'en');

// Zentrales Array $introTexte:
$introTexte = [

  // ===================================
  // ============= DEUTSCH (de) ========
  // ===================================
  'de' => [

    // ----------- Banner / Headings -----------
    'slider_alt'        => 'Apartmentent Luttinger',
    'heading_welcome'   => 'Willkommen in den Ferienwohnungen Luttinger',
    'heading_toc'       => 'Inhaltsverzeichnis',

    // Accordion
    'acc1_title' => 'Information für den Aufenthalt in unserem Haus',
    'acc2_title' => 'Information für den Aufenthalt in Bichlbach und Umgebung',

    // ---------- TOC Labels -----------
    'toc_label_inf_haus'    => 'Information für den Aufenthalt in unserem Haus',
    'toc_label_wlan'        => 'Highspeed WLAN',
    'toc_label_checkin'     => 'An- und Abreise',
    'toc_label_hausordnung' => 'Hausordnung',
    'toc_label_schluessel'  => 'Schlüsseltresor und Ankunft',
    'toc_label_gaestekarte' => 'Gästekarte',
    'toc_label_muell'       => 'Mülltrennung und Recycling',
    'toc_label_dormakaba'   => 'Türe öffnen',
    'toc_label_raucher'     => 'Raucher',
    'toc_label_ski'         => 'Ski, Snowboard und weitere Sportgeräte',
    'toc_label_garten'      => 'Garten und Entspannung',

    'toc_label_inf_umgebung'   => 'Information für den Aufenthalt in Bichlbach und Umgebung',
    'toc_label_aktuelles'      => 'Aktuelles',
    'toc_label_veranstaltung'  => 'Veranstaltungskalender',
    'toc_label_bankomat'       => 'Bankomat',
    'toc_label_arzt'           => 'Arzt/Apotheke',
    'toc_label_restaurant'     => 'Restaurant',
    'toc_label_krankenhaus'    => 'Krankenhaus',
    'toc_label_supermarkt'     => 'Supermarkt',
    'toc_label_friseur'        => 'Friseur',
    'toc_label_fahrrad'        => 'Fahrradverleih und Sportgeschäft',
    'toc_label_tankstelle'     => 'Tankstelle',
    'toc_label_zug_bus'        => 'Zug und Bus',
    'toc_label_fahrplaene'     => 'Fahrpläne',
    'toc_label_skilifte'       => 'Skilifte',
    'toc_label_karte_bichlbach'=> 'Karte von Bichlbach',
    'toc_label_langlaufloipen' => 'Langlaufloipen',
    'toc_label_umgebung'       => 'In der Umgebung',
    'toc_label_notrufnummern'  => 'Notrufnummern',

    'toc_label_weather'  => 'Wettervorhersage',
    'toc_label_feedback' => 'Bewertungen und Feedback',

    // Meldung "Keine Dateien"
    'no_files_text' => 'Momentan keine aktuellen Dateien.',

    // ---------- WLAN -----------
    'wlan_title' => 'Highspeed WLAN',
    'wlan_text'  => '<li>Passwort: pensionluttinger</li>',

    // ---------- Checkin -----------
    'checkin_title'  => 'An- und Abreise',
    'checkin_text_1' => '<strong>Check IN:</strong> 15:00 Uhr',
    'checkin_text_2' => '<strong>Check OUT:</strong> 10:00 Uhr',
    // NEU
    'checkin_text_3' => 'Um den Check-in zu vereinfachen, können Sie diesen auch online ausfüllen. Nutzen Sie folgenden Link (siehe Button unten).',

    'checkin_note2'  => 'Bei Ihrer Ankunft finden Sie Ihren Schlüssel im Tresor mit der Aufschrift „Ihr Zimmer“. Bitte geben Sie den Code ein, um den Schlüssel zu entnehmen.',
    'checkin_online2'=> 'Online Check-in (Gästeplattform)',

    // ---------- Hausordnung -----------
    'hausordnung_title' => 'Hausordnung',
    'hausordnung_text'  => 'Liebe Gäste, um Ihren Aufenthalt so angenehm wie möglich zu gestalten, bitten wir Sie, folgende Regeln zu beachten',
    'hausordnung_btn'   => 'Hausordnung (Deutsch PDF)',

    // ----------- Schlüsseltresor -----------
    'schluessel_title'   => 'Schlüsseltresor und Ankunft',
    'tresor_text_1'      => 'Wir haben Ihnen zwei Tage vor Ihrer Ankunft eine E-Mail mit den Informationen zum Tresorcode gesendet ...',
    'tresor_text_2'      => 'Falls Sie den Code nicht erhalten haben oder Probleme auftreten, kontaktieren Sie uns bitte.',
    'tresor_figcaption'  => 'Schlüsseltresor für den Zugang zum Zimmer',

    // ----------- Gästekarte -----------
    'gaestekarte_title'  => 'Gästekarte',
    'gaestekarte_bullet' => 'Gäste-Meldeplattform – Wir senden Ihnen die Digitale Gästekarte',
    'gaestekarte_img_alt'=> 'Gästekarte der Zugspitzarena',

    // ----------- Müll -----------
    'muell_title' => 'Mülltrennung und Recycling',
    'muell_text'  => 'Wir bitten unsere Gäste, den Müll sorgfältig zu trennen. Der Müllraum befindet sich hinter dem Haus.',
    'muell_points'=> '<li>GLAS</li><li>Verpackung (Kunststoff, Styropor, Metall, Alu)</li><li>PAPIER</li><li>RESTMÜLL</li>',
    'muell_img_alt' => 'Mülltrennraum hinter dem Haus',

    // ----------- dormakaba -----------
    'dormakaba_title' => 'Türe öffnen mit Logic Smart',
    'dormakaba_text'  => 'Zum Öffnen oder Schließen halten Sie bitte den Schlüsselanhänger vor den Leser (grünes Licht).',

    // ----------- Raucher -----------
    'raucher_title' => 'Raucher',
    'raucher_text'  => 'Im gesamten Haus ist <strong>Rauchverbot</strong>! Rauchen nur auf dem Balkon.',

    // ----------- Ski -----------
    'ski_title'   => 'Ski, Snowboard und weitere Sportgeräte',
    'ski_text_1'  => 'Bitte in den Skistall hinter dem Haus, die Mitnahme ins Haus ist verboten!',
    'ski_text_2'  => '<strong>Der Schlüssel befindet sich auf Ihrem Zimmerschlüsselbund.</strong>',
    'ski_img_alt' => 'Skistall',

    // ----------- Garten -----------
    'garten_title'   => 'Garten und Entspannung',
    'garten_text_1'  => 'Unser Garten bietet verschiedene Bereiche zum Entspannen ...',
    'garten_fig1_alt'=> 'Hängematte im Garten',
    'garten_fig1_cap'=> 'Entspannen Sie in der Hängematte in unserem Garten.',
    'garten_text_2'  => 'Außerdem gibt es eine gemütliche Gartenbank ...',
    'garten_fig2_alt'=> 'Gartenbank im hinteren Teil des Gartens',
    'garten_fig2_cap'=> 'Gartenbank im hinteren Teil des Gartens.',
    'garten_text_3'  => 'Am Stadel finden Sie bequeme Liegestühle ...',
    'garten_fig3_alt'=> 'Gartenliegen am Stadel',
    'garten_fig3_cap'=> 'Gartenliegen am Stadel.',
    'garten_text_4'  => 'Am Teich sorgt die Beleuchtung bei Nacht für ein stimmungsvolles Ambiente.',
    'garten_fig4_alt'=> 'Beleuchteter Teich im Garten bei Nacht',
    'garten_fig4_cap'=> 'Beleuchteter Teich im Garten bei Nacht.',

    // ----------- Umgebung -----------
    'aktuelles_title'     => 'Aktuelles',
    'veranstaltung_title' => 'Veranstaltungskalender',

    'bankomat_title' => 'Bankomat',
    'bankomat_text'  => 'Die nächstgelegenen Bankautomaten befinden sich im Ortszentrum gegenüber der Kirche.',

    'arzt_title' => 'Arzt/Apotheke',
    'arzt_list' => '
      <li><strong><a href="https://www.docfinder.at/praktischer-arzt/6621-bichlbach/dr-walter-murr" target="_blank">Dr. Murr</a></strong></li>
    ',

    'restaurant_title' => 'Restaurant',
    'restaurant_list' => '
      <li><strong><a href="https://www.stuckwirt.at/" target="_blank">Stuck.Wirt</a></strong> – Bichlbach 450 m (Traditionelle und regionale Küche)</li>
      <li><strong><a href="https://www.gasthaus-traube.at/gasthaus-pizzeria/" target="_blank">Pizzeria San Marco</a></strong> – Bichlbach 400 m (Tischreservierung unter +43 5674 20083)</li>
      <li><strong><a href="https://www.mahbergstuberl.com/caf%C3%A9-bar-m%C3%A4hbergst%C3%BCberl" target="_blank">Cafe Mähbergstüberl</a></strong> – Bichlbach 650 m</li>
      <li><strong><a href="https://www.roterstein.at/" target="_blank">Gasthof Roter Stein</a></strong> – Kleinstockach 2,9 km (Kalbs-/Schweinshaxe vorbestellen, +43 5674 8235)</li>
      <li><strong><a href="https://www.dorfstueberl-laehn.at/" target="_blank">Dorfstüberl</a></strong> – Lähn (Reservierung unter +43 676 4254506)</li>
      <li><strong><a href="https://biervonmir.com/" target="_blank">Brauerei „Stadl-Bräu“</a></strong> – Rinnen 6,8 km</li>
      <li><strong><a href="https://www.rimmlstube.at/rimmlstube" target="_blank">Restaurant Rimmlstube</a></strong> – Rinnen 6,8 km (Reservierung unter +43 5674 20820)</li>
    ',

    'krankenhaus_title' => 'Krankenhaus',

    'supermarkt_title' => 'Supermarkt',
    'supermarkt_list' => '
      <li><strong><a href="https://www.mpreis.at/maerkte/id-8705/mpreis-bichlbach" target="_blank">MPREIS mit Baguette</a></strong> – Am Ortsrand, 7 Minuten zu Fuß</li>
      <li><strong><a href="https://www.google.com/maps/place/Ines+Dorfladen/@47.4203987,10.790501,362m/data=!3m1!1e3" target="_blank">Ines Dorfladen mit regionalen Produkten</a></strong> – Ortszentrum, 3 Minuten zu Fuß</li>
    ',

    'friseur_title' => 'Friseur',
    'friseur_html'  => '<strong><a href="https://www.kommheim.com/" target="_blank">Friseursalon „Komm Heim“</a></strong> – Bichlbach',

    'fahrradverleih_title' => 'Fahrradverleih und Sportgeschäft',
    'tankstelle_title'     => 'Tankstelle',

    'zugbus_title' => 'Zug und Bus',
    'zugbus_list' => '
      <li><strong>Bahnhof Bichlbach-Berwang</strong> – 5 Min.</li>
      <li><strong>Bus – Dorfzentrum, 5 Min. zu Fuß</strong></li>
      <li><a href="https://www.vvt.at" target="_blank">Online Fahrplan</a></li>
    ',

    'fahrplaene_title' => 'Fahrpläne',
    'skilifte_title'   => 'Skilifte',
    'karte_bichlbach_title' => 'Karte von Bichlbach',
    'langlaufloipen_title'  => 'Langlaufloipen',

    'ski_area_prices' => 'Skipasspreise ansehen',

    'langlaufloipen_list' => '
      <ul>
        <li><strong>Bründlloipe</strong>
          <ul>
            <li>2,5 km</li>
            <li>Schwierigkeitsgrad: leicht</li>
            <li>Führt von Lähn-Wengle nach Heiterwang</li>
          </ul>
        </li>
        <li><strong>Panoramaloipe</strong>
          <ul>
            <li>14,5 km</li>
            <li>mittel</li>
            <li>Führt von Lähn-Wengle nach Heiterwang</li>
          </ul>
        </li>
        <li><strong>Zunftwanderloipe</strong>
          <ul>
            <li>6 km</li>
            <li>leicht</li>
            <li>Führt von Bichlbach nach Lähn-Wengle</li>
          </ul>
        </li>
        <li><strong>Platteloipe</strong>
          <ul>
            <li>6 km</li>
            <li>leicht</li>
            <li>Führt von Bichlbach nach Heiterwang</li>
          </ul>
        </li>
        <li><strong>Hinterbichl - Nachtloipe</strong>
          <ul>
            <li>1 km</li>
            <li>Schwierigkeitsgrad: leicht</li>
            <li>Rundloipe</li>
            <li>Einstieg: Sonnenbichl Lift in Bichlbach</li>
          </ul>
        </li>
      </ul>
      <p>
        <a href="https://www.zugspitzarena.com/de/aktiv/langlaufen" target="_blank">
          Weitere Informationen
        </a>
      </p>
    ',

    'umgebung_title' => 'In der Umgebung',

    'notrufnummern_title' => 'Notrufnummern',
    'notruf_list' => '
      <li><a href="tel:122"><strong>122</strong> Feuerwehr</a></li>
      <li><a href="tel:133"><strong>133</strong> Polizei</a></li>
      <li><a href="tel:144"><strong>144</strong> Rettung</a></li>
      <li><a href="tel:140"><strong>140</strong> Bergrettung</a></li>
      <li><a href="tel:141"><strong>141</strong> Ärztlicher Bereitschaftsdienst</a></li>
      <li><a href="tel:112"><strong>112</strong> Europäische Notrufnummer</a></li>
    ',

    // Wetter
    'weather_title' => 'Wettervorhersage',
    'weather_error' => 'Wetterdaten konnten nicht abgerufen werden.',
    'weather_label_temp' => 'Temperatur:',
    'weather_label_cond' => 'Wetter:',
    // NEU: weitere Labels
    'weather_label_windspeed' => 'Windgeschwindigkeit:',
    'weather_label_humidity'  => 'Luftfeuchtigkeit:',
    'weather_label_tempmax'   => 'Maximale Temperatur:',
    'weather_label_tempmin'   => 'Minimale Temperatur:',

    // Feedback
    'feedback_title' => 'Bewertungen und Feedback',
    'feedback_text'  => 'Wir freuen uns über Ihre Bewertung! Lassen Sie uns wissen, wie Ihr Aufenthalt war:',
    'feedback_google' => 'Google Bewertungen',
    'feedback_facebook' => 'Facebook Bewertungen',
    'feedback_improve' => 'Schreiben Sie uns, wie wir uns verbessern können',
    'feedback_improve_text' => 'Wenn Sie Anregungen oder Wünsche haben, hinterlassen Sie uns hier Ihre Nachricht:',

    // Formular
    'form_error_title'    => 'Fehler',
    'form_success_title'  => 'Erfolg',
    'form_name_label'     => 'Ihr Name:',
    'form_email_label'    => 'Ihre E-Mail:',
    'form_message_label'  => 'Ihre Nachricht:',
    'form_privacy_label'  => 'Ich stimme der Verarbeitung meiner Daten gemäß der Datenschutzerklärung zu.',
    'form_privacy_link'   => 'Datenschutzerklärung',
    'form_submit_btn'     => 'Nachricht senden',
    'form_captcha_label'  => 'Bitte lösen Sie folgende Aufgabe:',
    'form_captcha_wrong'  => 'Falsche Antwort auf die CAPTCHA-Frage. Bitte versuchen Sie es erneut.',
    'form_website_field'  => 'Bitte lassen Sie das Feld "Website" leer.',
    'form_noprivacy'      => 'Bitte stimmen Sie der Verarbeitung Ihrer Daten zu.',
    'form_invalid_email'  => 'Ungültige E-Mail-Adresse.',
    'form_mail_failed'    => 'Entschuldigung, Ihre Nachricht konnte nicht gesendet werden. Bitte versuchen Sie es später erneut.',
    'form_mail_success'   => 'Vielen Dank für Ihr Feedback!',

    // Mail-Betreff und Body:
    'mail_subject'        => 'Neues Feedback von',
    'mail_body_name'      => 'Name:',
    'mail_body_email'     => 'E-Mail:',
    'mail_body_message'   => 'Nachricht:',
  ],

  // ===================================
  // ============= ENGLISCH (en) =======
  // ===================================
  'en' => [

    'slider_alt' => 'Apartment Luttinger',
    'heading_welcome' => 'Welcome to Apartment Luttinger',
    'heading_toc'     => 'Table of Contents',

    'acc1_title' => 'Information for your stay in our house',
    'acc2_title' => 'Information for your stay in Bichlbach and surroundings',

    'toc_label_inf_haus'    => 'Information for your stay in our house',
    'toc_label_wlan'        => 'Highspeed Wi-Fi',
    'toc_label_checkin'     => 'Arrival and Departure',
    'toc_label_hausordnung' => 'House Rules',
    'toc_label_schluessel'  => 'Key Safe and Arrival',
    'toc_label_gaestekarte' => 'Guest Card',
    'toc_label_muell'       => 'Waste Separation and Recycling',
    'toc_label_dormakaba'   => 'Door Opening',
    'toc_label_raucher'     => 'Smoking',
    'toc_label_ski'         => 'Ski, Snowboard, and Sports Equipment',
    'toc_label_garten'      => 'Garden and Relaxation',

    'toc_label_inf_umgebung'   => 'Information for your stay in Bichlbach and surroundings',
    'toc_label_aktuelles'      => 'News',
    'toc_label_veranstaltung'  => 'Event Calendar',
    'toc_label_bankomat'       => 'ATM',
    'toc_label_arzt'           => 'Doctor/Pharmacy',
    'toc_label_restaurant'     => 'Restaurant',
    'toc_label_krankenhaus'    => 'Hospital',
    'toc_label_supermarkt'     => 'Supermarket',
    'toc_label_friseur'        => 'Hairdresser',
    'toc_label_fahrrad'        => 'Bike Rental and Sports Shop',
    'toc_label_tankstelle'     => 'Gas Station',
    'toc_label_zug_bus'        => 'Train and Bus',
    'toc_label_fahrplaene'     => 'Timetables',
    'toc_label_skilifte'       => 'Ski Lifts',
    'toc_label_karte_bichlbach'=> 'Map of Bichlbach',
    'toc_label_langlaufloipen' => 'Cross-Country Trails',
    'toc_label_umgebung'       => 'Surroundings',
    'toc_label_notrufnummern'  => 'Emergency Numbers',

    'toc_label_weather'  => 'Weather Forecast',
    'toc_label_feedback' => 'Reviews and Feedback',

    'no_files_text' => 'No current files available.',

    // WLAN
    'wlan_title' => 'Highspeed Wi-Fi',
    'wlan_text'  => '<li>Password: pensionluttinger</li>',

    // Checkin
    'checkin_title'  => 'Arrival and Departure',
    'checkin_text_1' => '<strong>Check IN:</strong> 3:00 p.m.',
    'checkin_text_2' => '<strong>Check OUT:</strong> 10:00 a.m.',
    'checkin_text_3' => 'To simplify your check-in, you can also complete it online. Please use the link below.',

    'checkin_note2'  => 'Upon arrival, you will find your key in the safe labeled "Your Room". Please enter the code to retrieve your key.',
    'checkin_online2'=> 'Online Check-in (Guest Platform)',

    // House Rules
    'hausordnung_title' => 'House Rules',
    'hausordnung_text'  => 'Dear guests, to make your stay as pleasant as possible, please follow these rules',
    'hausordnung_btn'   => 'House Rules (English PDF)',

    // Key safe
    'schluessel_title'   => 'Key Safe and Arrival',
    'tresor_text_1'      => 'We emailed you the safe code two days before arrival...',
    'tresor_text_2'      => 'If you did not receive the code or have any problem, please contact us.',
    'tresor_figcaption'  => 'Key safe for room access',

    // Guest Card
    'gaestekarte_title'  => 'Guest Card',
    'gaestekarte_bullet' => 'Guest registration platform – We send you the digital guest card',
    'gaestekarte_img_alt'=> 'Zugspitz Arena guest card',

    // Waste
    'muell_title' => 'Waste Separation and Recycling',
    'muell_text'  => 'We kindly ask our guests to separate waste carefully. The waste room is behind the house.',
    'muell_points'=> '<li>GLASS</li><li>Packaging (plastic, styrofoam, metal, alu)</li><li>PAPER</li><li>RESIDUAL WASTE</li>',
    'muell_img_alt' => 'Waste separation room behind the house',

    // Door opening
    'dormakaba_title' => 'Door Opening with Logic Smart',
    'dormakaba_text'  => 'Please hold the key fob near the reader (green light) to lock/unlock.',

    // Smoking
    'raucher_title' => 'Smoking',
    'raucher_text'  => 'Smoking is strictly prohibited in the entire house (only on the balcony).',

    // Ski
    'ski_title'   => 'Ski, Snowboard, and Sports Equipment',
    'ski_text_1'  => 'Please store them in the ski room behind the house. Not allowed inside.',
    'ski_text_2'  => '<strong>The key is on your room keychain.</strong>',
    'ski_img_alt' => 'Ski storage',

    // Garden
    'garten_title'   => 'Garden and Relaxation',
    'garten_text_1'  => 'Our garden provides various spots to relax...',
    'garten_fig1_alt'=> 'Hammock in the garden',
    'garten_fig1_cap'=> 'Relax in the hammock in our garden.',
    'garten_text_2'  => 'There is also a cozy garden bench...',
    'garten_fig2_alt'=> 'Garden bench in the rear part of the garden',
    'garten_fig2_cap'=> 'Garden bench in the rear part.',
    'garten_text_3'  => 'At the barn, you find comfortable loungers...',
    'garten_fig3_alt'=> 'Sun loungers by the barn',
    'garten_fig3_cap'=> 'Sun loungers by the barn.',
    'garten_text_4'  => 'At night, the pond is illuminated for a special ambiance.',
    'garten_fig4_alt'=> 'Illuminated pond in the garden at night',
    'garten_fig4_cap'=> 'Illuminated pond in the garden at night.',

    // Surroundings
    'aktuelles_title'     => 'News',
    'veranstaltung_title' => 'Event Calendar',

    'bankomat_title' => 'ATM',
    'bankomat_text'  => 'The nearest ATMs are in the village center, opposite the church.',

    'arzt_title' => 'Doctor/Pharmacy',
    'arzt_list' => '
      <li><strong><a href="https://www.docfinder.at/praktischer-arzt/6621-bichlbach/dr-walter-murr" target="_blank">Dr. Murr</a></strong></li>
    ',

    'restaurant_title' => 'Restaurant',
    'restaurant_list' => '
      <li><strong><a href="https://www.stuckwirt.at/" target="_blank">Stuck.Wirt</a></strong> – Bichlbach 450 m (Traditional and local cuisine)</li>
      <li><strong><a href="https://www.gasthaus-traube.at/gasthaus-pizzeria/" target="_blank">Pizzeria San Marco</a></strong> – Bichlbach 400 m (Reserve at +43 5674 20083)</li>
      <li><strong><a href="https://www.mahbergstuberl.com/caf%C3%A9-bar-m%C3%A4hbergst%C3%BCberl" target="_blank">Cafe Mähbergstüberl</a></strong> – Bichlbach 650 m</li>
      <li><strong><a href="https://www.roterstein.at/" target="_blank">Gasthof Roter Stein</a></strong> – Kleinstockach 2.9 km (Pre-order veal/pork knuckle, +43 5674 8235)</li>
      <li><strong><a href="https://www.dorfstueberl-laehn.at/" target="_blank">Dorfstüberl</a></strong> – Lähn (Reservation at +43 676 4254506)</li>
      <li><strong><a href="https://biervonmir.com/" target="_blank">Brewery "Stadl-Bräu"</a></strong> – Rinnen 6.8 km</li>
      <li><strong><a href="https://www.rimmlstube.at/rimmlstube" target="_blank">Restaurant Rimmlstube</a></strong> – Rinnen 6.8 km (Reservation at +43 5674 20820)</li>
    ',

    'krankenhaus_title' => 'Hospital',

    'supermarkt_title' => 'Supermarket',
    'supermarkt_list' => '
      <li><strong><a href="https://www.mpreis.at/maerkte/id-8705/mpreis-bichlbach" target="_blank">MPREIS with Baguette</a></strong> – On the outskirts, 7 minutes on foot</li>
      <li><strong><a href="https://www.google.com/maps/place/Ines+Dorfladen/@47.4203987,10.790501,362m/data=!3m1!1e3" target="_blank">Ines Village Shop with regional products</a></strong> – Village center, 3 minutes on foot</li>
    ',

    'friseur_title' => 'Hairdresser',
    'friseur_html'  => '<strong><a href="https://www.kommheim.com/" target="_blank">"Komm Heim" Hair Salon</a></strong> – Bichlbach',

    'fahrradverleih_title' => 'Bike Rental and Sports Shop',
    'tankstelle_title'     => 'Gas Station',

    'zugbus_title' => 'Train and Bus',
    'zugbus_list' => '
      <li><strong>Bichlbach-Berwang Station</strong> – 5 min</li>
      <li><strong>Bus – Village center, 5 minutes on foot</strong></li>
      <li><a href="https://www.vvt.at" target="_blank">Online Timetable</a></li>
    ',

    'fahrplaene_title' => 'Timetables',
    'skilifte_title'   => 'Ski Lifts',
    'karte_bichlbach_title' => 'Map of Bichlbach',
    'langlaufloipen_title'  => 'Cross-Country Trails',

    'ski_area_prices' => 'View Ski Area Prices',

    'langlaufloipen_list' => '
      <ul>
        <li><strong>Bründlloipe</strong>
          <ul>
            <li>2.5 km</li>
            <li>Difficulty: easy</li>
            <li>From Lähn-Wengle to Heiterwang</li>
          </ul>
        </li>
        <li><strong>Panoramaloipe</strong>
          <ul>
            <li>14.5 km</li>
            <li>medium</li>
            <li>From Lähn-Wengle to Heiterwang</li>
          </ul>
        </li>
        <li><strong>Zunftwanderloipe</strong>
          <ul>
            <li>6 km</li>
            <li>easy</li>
            <li>From Bichlbach to Lähn-Wengle</li>
          </ul>
        </li>
        <li><strong>Platteloipe</strong>
          <ul>
            <li>6 km</li>
            <li>easy</li>
            <li>From Bichlbach to Heiterwang</li>
          </ul>
        </li>
        <li><strong>Hinterbichl - Nachtloipe</strong>
          <ul>
            <li>1 km</li>
            <li>Difficulty: easy</li>
            <li>Loop track</li>
            <li>Entry: Sonnenbichl Lift in Bichlbach</li>
          </ul>
        </li>
      </ul>
      <p>
        <a href="https://www.zugspitzarena.com/de/aktiv/langlaufen" target="_blank">
          More information
        </a>
      </p>
    ',

    'umgebung_title' => 'Surroundings',

    'notrufnummern_title' => 'Emergency Numbers',
    'notruf_list' => '
      <li><a href="tel:122"><strong>122</strong> Fire Department</a></li>
      <li><a href="tel:133"><strong>133</strong> Police</a></li>
      <li><a href="tel:144"><strong>144</strong> Ambulance</a></li>
      <li><a href="tel:140"><strong>140</strong> Mountain Rescue</a></li>
      <li><a href="tel:141"><strong>141</strong> On-call Doctor</a></li>
      <li><a href="tel:112"><strong>112</strong> European emergency</a></li>
    ',

    'weather_title' => 'Weather Forecast',
    'weather_error' => 'Weather data could not be retrieved.',
    'weather_label_temp' => 'Temperature:',
    'weather_label_cond' => 'Condition:',
    // NEU: weitere Keys für englische Wetterlabels
    'weather_label_windspeed' => 'Wind Speed:',
    'weather_label_humidity'  => 'Humidity:',
    'weather_label_tempmax'   => 'Maximum Temperature:',
    'weather_label_tempmin'   => 'Minimum Temperature:',

    'feedback_title' => 'Reviews and Feedback',
    'feedback_text'  => 'We appreciate your review! Let us know how your stay was:',
    'feedback_google' => 'Google Reviews',
    'feedback_facebook' => 'Facebook Reviews',
    'feedback_improve' => 'Tell us how we can improve',
    'feedback_improve_text' => 'If you have any suggestions or requests, leave your message here:',

    // Formular
    'form_error_title'    => 'Error',
    'form_success_title'  => 'Success',
    'form_name_label'     => 'Your Name:',
    'form_email_label'    => 'Your Email:',
    'form_message_label'  => 'Your Message:',
    'form_privacy_label'  => 'I agree to data processing according to the Privacy Policy.',
    'form_privacy_link'   => 'Privacy Policy',
    'form_submit_btn'     => 'Send Message',
    'form_captcha_label'  => 'Please solve the following task:',
    'form_captcha_wrong'  => 'Wrong answer to the CAPTCHA question.',
    'form_website_field'  => 'Please leave the "Website" field empty.',
    'form_noprivacy'      => 'Please accept data processing.',
    'form_invalid_email'  => 'Invalid email address.',
    'form_mail_failed'    => 'Sorry, your message could not be sent. Please try again later.',
    'form_mail_success'   => 'Thank you for your feedback!',

    // Mail-Betreff und Body:
    'mail_subject'      => 'New feedback from',
    'mail_body_name'    => 'Name:',
    'mail_body_email'   => 'Email:',
    'mail_body_message' => 'Message:',
  ],
];
