<?php
// Standard-Sprache
$lang = 'de';

// Auf Englisch schalten, wenn ?lang=en
if (isset($_GET['lang']) && $_GET['lang'] === 'en') {
  $lang = 'en';
}

// Boolean-Flag optional
$isEnglish = ($lang === 'en');

/**
 * Zentrales Array $impressumTexts:
 * Alle Texte für Impressum & Datenschutz.
 * Du kannst es beliebig erweitern.
 */
$impressumTexts = [

  // =====================================================
  // ===============  DEUTSCH  ============================
  // =====================================================
  'de' => [
    // -- PAGE HEADERS / BANNER
    'banner_img_alt'    => 'Zugspitzarena Luttinger',

    // -- IMPRESSUM-SEKTION
    'headline_impressum' => 'Impressum',
    'h2_medieninhaber'    => 'Medieninhaber, Herausgeber und Verleger:',
    'block_medieninhaber' => '<strong>am M&uuml;hlbach</strong><br><br>
            Markus Luttinger<br>
            Wahl 109<br>
            6621 Bichlbach<br>
            &Ouml;sterreich - Tirol <br>
            Telefon: +43(0)660 711 875 2<br>
            markus@luttinger-bichlbach.at<br><br>
            UID Nr. ATU73801549',

    'h2_bilderquellen'    => 'Quellenangaben für die verwendeten Bilder und Grafiken:',
    'block_bilderquellen' => '<strong>Markus Luttinger - Grafik/Fotos<br>
            zugspitzarena.com</strong> - Fotos',

    'h2_design'           => 'Design, Konzeption, Umsetzung',
    'block_design'        => 'Markus Luttinger - Wahl 109 - 6621 Bichlbach<br>
            markus@luttinger-bichlbach.at<br>
            <img width="50" height="44" alt="Markus Luttinger Logo" src="http://www.moos-tuifl.at/Bilder/extern/logo-neu.jpg">',

    'h2_haftung_links'    => 'Haftung für Links',
    'block_haftung_links' => 'Trotz sorgfältiger inhaltlicher Kontrolle übernehmen wir keine Haftung für die Inhalte externer Links. Für den Inhalt der verlinkten Seiten sind ausschließlich deren Betreiber verantwortlich.',

    // -- COOKIES / DATENSCHUTZ
    'headline_cookies'    => 'Datenschutz &amp; Cookies',
    'h2_datenschutz'      => 'Datenschutz',
    'p_datenschutz_1'     => 'Die Betreiber dieser Seiten nehmen den Schutz Ihrer persönlichen Daten sehr ernst. Wir behandeln Ihre personenbezogenen Daten vertraulich und entsprechend der gesetzlichen Datenschutzvorschriften sowie dieser Datenschutzerklärung.',
    'p_datenschutz_2'     => 'Die Nutzung unserer Webseite ist in der Regel ohne Angabe personenbezogener Daten möglich...',
    'p_datenschutz_3'     => 'Wir weisen darauf hin, dass die Datenübertragung im Internet (z.B. bei E-Mail Kommunikation) Sicherheitslücken aufweisen kann...',

    'h3_analytics'        => 'Datenschutzerklärung für die Nutzung von Google Analytics',
    'p_analytics_1'       => 'Diese Website nutzt Funktionen des Webanalysedienstes Google Analytics...',
    'p_analytics_2'       => 'Im Falle der Aktivierung der IP-Anonymisierung auf dieser Webseite wird Ihre IP-Adresse von Google...',
    'p_analytics_3'       => 'Sie können die Speicherung der Cookies durch eine entsprechende Einstellung Ihrer Browser-Software verhindern...',
    'h3_auskunft'         => 'Auskunft, Löschung, Sperrung',
    'p_auskunft'          => 'Sie haben jederzeit das Recht auf unentgeltliche Auskunft über Ihre gespeicherten personenbezogenen Daten...',
    'h3_serverlogs'       => 'Server-Log-Files',
    'p_serverlogs_1'      => 'Der Provider der Seiten erhebt und speichert automatisch Informationen in so genannten Server-Log Files...',
    'list_serverlogs'     => '<li>Browsertyp/ Browserversion</li>
            <li>verwendetes Betriebssystem</li>
            <li>Referrer URL</li>
            <li>Hostname des zugreifenden Rechners</li>
            <li>Uhrzeit der Serveranfrage</li>',
    'p_serverlogs_2'      => 'Diese Daten sind nicht bestimmten Personen zuordenbar...',
    'h3_cookies'          => 'Cookies',
    'p_cookies_1'         => 'Die Internetseiten verwenden teilweise so genannte Cookies. Cookies richten auf Ihrem Rechner keinen Schaden an...',
    'p_cookies_2'         => 'Sie können Ihren Browser so einstellen, dass Sie über das Setzen von Cookies informiert werden...',
    'h3_kontakt'          => 'Kontaktformular',
    'p_kontakt'           => 'Wenn Sie uns per Kontaktformular Anfragen zukommen lassen, werden Ihre Angaben aus dem Anfrageformular...',


  ],

  // =====================================================
  // ===============  ENGLISCH  ===========================
  // =====================================================
  'en' => [
    // -- PAGE HEADERS / BANNER
    'banner_img_alt'    => 'Zugspitz Arena Luttinger',

    // -- IMPRESSUM-SECTION
    'headline_impressum' => 'Legal Notice (Impressum)',
    'h2_medieninhaber'    => 'Media owner, publisher, and editor:',
    'block_medieninhaber' => '<strong>am M&uuml;hlbach</strong><br><br>
            Markus Luttinger<br>
            Wahl 109<br>
            6621 Bichlbach<br>
            Austria - Tyrol <br>
            Phone: +43(0)660 711 875 2<br>
            markus@luttinger-bichlbach.at<br><br>
            VAT No. ATU73801549',

    'h2_bilderquellen'    => 'Image and graphic sources:',
    'block_bilderquellen' => '<strong>Markus Luttinger – Graphics/Photos<br>
            zugspitzarena.com</strong> – Photos',

    'h2_design'           => 'Design, concept, implementation',
    'block_design'        => 'Markus Luttinger – Wahl 109 – 6621 Bichlbach<br>
            markus@luttinger-bichlbach.at<br>
            <img width="50" height="44" alt="Markus Luttinger Logo" src="http://www.moos-tuifl.at/Bilder/extern/logo-neu.jpg">',

    'h2_haftung_links'    => 'Liability for links',
    'block_haftung_links' => 'Despite careful content control, we assume no liability for the content of external links. The operators of the linked pages are solely responsible for their content.',

    // -- COOKIES / PRIVACY
    'headline_cookies'    => 'Privacy &amp; Cookies',
    'h2_datenschutz'      => 'Data protection',
    'p_datenschutz_1'     => 'The operators of these pages take the protection of your personal data very seriously. We treat your personal data confidentially...',
    'p_datenschutz_2'     => 'Our website can generally be used without providing personal data. Where personal data (e.g. name, address or email) is collected...',
    'p_datenschutz_3'     => 'We point out that data transmission on the Internet (e.g. e-mail communication) can have security gaps...',

    'h3_analytics'        => 'Data protection for the use of Google Analytics',
    'p_analytics_1'       => 'This website uses features of the web analysis service Google Analytics...',
    'p_analytics_2'       => 'In the event that IP anonymization is activated on this website, your IP address will be truncated by Google within the EU...',
    'p_analytics_3'       => 'You can prevent cookies from being stored by selecting the appropriate settings in your browser...',
    'h3_auskunft'         => 'Information, deletion, blocking',
    'p_auskunft'          => 'You have the right to free information at any time about your stored personal data, its origin and recipients...',
    'h3_serverlogs'       => 'Server log files',
    'p_serverlogs_1'      => 'The provider of these pages automatically collects and stores information in so-called server log files, which your browser automatically transmits to us. These are:',
    'list_serverlogs'     => '<li>Browser type/version</li>
            <li>Operating system used</li>
            <li>Referrer URL</li>
            <li>Host name of the accessing computer</li>
            <li>Time of the server request</li>',
    'p_serverlogs_2'      => 'These data cannot be assigned to specific individuals. No merging of this data with other data sources is carried out...',
    'h3_cookies'          => 'Cookies',
    'p_cookies_1'         => 'Some of the websites use so-called cookies. Cookies do not harm your computer or contain viruses. Cookies serve to make our offer more user-friendly...',
    'p_cookies_2'         => 'You can set your browser so that you are informed about the setting of cookies and only allow cookies in individual cases...',
    'h3_kontakt'          => 'Contact form',
    'p_kontakt'           => 'If you send us inquiries via the contact form, your details from the inquiry form, including the contact details you provided there, will be stored for processing the inquiry and in case of follow-up questions...',
  ],
];
