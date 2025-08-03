<?php
// Standard-Sprache: Deutsch
$lang = 'de';

// Umschalten auf Englisch, falls ?lang=en
if (isset($_GET['lang']) && $_GET['lang'] === 'en') {
  $lang = 'en';
}

// Optionales Flag
$isEnglish = ($lang === 'en');

// Zentrales Array mit allen Text-Keys
$aktivTexte = [

  // ====================================
  // ============== DEUTSCH =============
  // ====================================
  'de' => [
    'html_lang'      => 'de',
    'banner_img_alt' => 'Zugspitzarena Sommer Loisach',

    // ---------------------------
    // Hauptüberschriften / Intro
    // ---------------------------
    'main_h1'        => 'Bichlbach – Zentrum der Zugspitzarena',
    'intro_h2'       => 'Willkommen in Bichlbach – Tirol',
    'intro_text'     => '... auf 1.070m Höhe, inmitten der Urlaubsregion Zugspitz ARENA. Das idyllische Dorf liegt eingebettet in Wiesen und Wälder, beschützt von den Gipfeln der Lechtaler Alpen und der mächtigen Zugspitze.',
    'intro_teaser_img_alt' => 'Zugspitze Tirol Sommer',

    'heading_sommer' => 'Sommer in Bichlbach',
    'heading_winter' => 'Winter in Bichlbach',

    // ---------------------------------
    // SOMMER-KACHELN
    // ---------------------------------
    'sommer_tiles' => [
      'schwimmen_alt'   => 'Panoramabad Ehrwald',
      'schwimmen_title' => 'Schwimmen',

      'wandern_alt'     => 'Wandern Bichlbach Berwang',
      'wandern_title'   => 'Wandern',

      'golf_alt'        => 'Golf Zugspitzarena',
      'golf_title'      => 'Golf',

      'schiff_alt'      => 'Schifffahrt Heiterwanger- u. Plansee',
      'schiff_title'    => 'Schifffahrt',

      'canyoning_alt'   => 'Canyoning',
      'canyoning_title' => 'Canyoning',

      'familie_alt'     => 'Familienurlaub',
      'familie_title'   => 'Familienurlaub',

      'ausflug_alt'     => 'Schloss Neuschwanstein',
      'ausflug_title'   => 'Ausflugsziele',

      'bike_alt'        => 'Biken Fahrradfahren in der Zugspitzarena',
      'bike_title'      => 'Biken',
    ],

    // ---------------------------------
    // WINTER-KACHELN
    // ---------------------------------
    'winter_tiles' => [
      'ski_alt'           => 'Ski & Board',
      'ski_title'         => 'Ski &amp; Board',

      'langlauf_alt'      => 'Langlaufen Zugspitze',
      'langlauf_title'    => 'Langlaufen',

      'skischule_alt'     => 'Skischule Kinder',
      'skischule_title'   => 'Skischule',

      'rodeln_alt'        => 'Familie Schlittenfahren Zugspitzarena',
      'rodeln_title'      => 'Rodeln',

      'winterfamilie_alt' => 'Nachtwandern Berwang Zugspitzarena',
      'winterfamilie_title' => 'Familien Winterspaß',
    ],

    'heading_impression' => 'Impression aus der Zugspitzarena',

    // ---------------------------
    // MEDIA-BEREICHE (YouTube)
    // ---------------------------
    'media_items' => [
      [
        'title'   => 'Familienurlaub - Ruhe aus der Natur - Tirol',
        'youtube' => 'https://www.youtube.com/embed/JVCLdsj-YxU',
      ],
      [
        'title'   => 'Wanderurlaub - Tirol erkunden',
        'youtube' => 'https://www.youtube.com/embed/xTKXgbc1J8k',
      ],
      [
        'title'   => 'Mountainbike - Urlaub - Erlebnis Tirol',
        'youtube' => 'https://www.youtube.com/embed/PJ9-u-5DI1s',
      ],
      [
        'title'   => 'Sommer - Tirol Urlaub - Wärme der Natur',
        'youtube' => 'https://www.youtube.com/embed/B3VN62VJEWM',
      ],
    ],
    'media_items2' => [
      [
        'title'   => 'Skiurlaub Zugspitz Arena Bayern-Tirol',
        'youtube' => 'https://www.youtube.com/embed/bai0_t9NPZM',
      ],
      [
        'title'   => 'Tiroler Zugspitz Arena Imagespot',
        'youtube' => 'https://www.youtube.com/embed/ziTvuBmnlOE',
      ],
    ],

    // ===========================================
    // 1) Familienurlaub
    // ===========================================
    'acc_familien_title' => 'Familienurlaub',
    'acc_familien_h2'    => 'Familienurlaub',

    'acc_familien_sect1_h3' => 'Zugspitze mit den besten Aussichten',
    'acc_familien_sect1_text'=>
      'Erleben Sie atemberaubende Panoramen auf dem höchsten Berg Deutschlands (2.962 Meter). '
      . 'Eine Fahrt mit der Tiroler Zugspitzbahn darf im Familienurlaub nicht fehlen – dank einfacher Gondelauffahrten '
      . 'haben auch die Kleinsten ihren Spaß. Oben erwartet Sie eine grandiose Aussicht auf die umliegenden Berge und Täler. '
      . 'Für Kinder gibt es in der Region zudem zahlreiche Spielplätze und spannende Themenwege, die spielerisch Wissen über Natur und Umwelt vermitteln. '
      . 'Tipp: Besuchen Sie zum Beispiel „Moosle’s Forscherpfad“ in Lermoos oder nutzen Sie die täglichen Kinderprogramme in den Sommerferien.',
    'acc_familien_sect1_img_alt' => 'Zugspitze Ehrwald',

    'acc_familien_sect2_h3' => 'Tier- und Spielpark, Streichelzoo',
    'acc_familien_sect2_text' =>
      'Streicheltiere wie Kaninchen, Ziegen, Pony, Esel sowie Alpakas und Kängurus machen den Park in Bichlbach zu einem echten Erlebnis. '
      . 'Perfekt für Kinder, die Natur und Tiere hautnah entdecken möchten.',
    'acc_familien_sect2_list'=> [
      'Riesenröhrenrutsche',
      'Größtes Schaukelpferd der Welt (2000 im Guinnessbuch)',
      'Wackelbrücke + offene Rutsche',
      'Kletterpyramide',
      'Märchenwelt',
      'Krippenland'
    ],
    'acc_familien_sect2_opening' => 'Ende April bis Anfang November (je nach Witterung), täglich 10.00 - 18.00 Uhr',

    'acc_familien_sect3_h3' => 'Sport und Freizeitpark Bichlbach',
    'acc_familien_sect3_list'=> [
      'Badesee und Beachvolleyball',
      'Minigolf',
      'Tennis',
      'Kinder-Rafting',
      'Spielplatz',
      'Beachvolleyballplatz',
      'Kleinfeldsportplatz',
      'Kletterwald'
    ],
    'acc_familien_sect3_img1_alt' => 'Kletterwald Bichlbach',
    'acc_familien_sect3_img2_alt' => 'Kinder-Rafting Bichlbach Badesee',

    'acc_familien_sect4_h3' => 'Highline 179',
    'acc_familien_sect4_text' =>
      'Die spektakuläre Fußgängerbrücke „Highline 179“ ist mit ihrer Länge die höchstgelegene Hängebrücke ihrer Art in der Region. '
      . 'Mutige Familien können hier einen luftigen Ausblick genießen.',
    'acc_familien_sect4_img_alt' => 'highline179-brücke',

    'acc_familien_sect5_h3' => 'Tirols längste Sommerrodelbahn',
    'acc_familien_sect5_text'=>
      'Mit 1.300 Metern, 40 Kurven und einer Tunneldurchfahrt ist die Sommerrodelbahn ein Riesenspaß für Groß und Klein. '
      . 'Hier wird Abwechslung im Sommerurlaub garantiert. Ein zusätzliches Highlight: '
      . 'Nach der rasanten Abfahrt kann man oft in einer kleinen Hütte einkehren und sich stärken.',

    // ===========================================
    // 2) Ausflugsziele
    // ===========================================
    'acc_ausflug_title' => 'Ausflugsziele',
    'acc_ausflug_h2'    => 'Ausflugsziele',

    'acc_ausflug_ehrenberg_h3' => 'Ruine Ehrenberg Reutte',
    'acc_ausflug_ehrenberg_link'=> 'http://www.ehrenberg.at',

    'acc_ausflug_linderhof_h3'  => 'Schloss Linderhof',
    'acc_ausflug_linderhof_alt' => 'Schloss Linderhof - Hauptgebäude',

    'acc_ausflug_neuschwanstein_h3'  => 'Schloss Neuschwanstein',
    'acc_ausflug_neuschwanstein_alt' => 'Ausflugsziele Tirol - Bayern - Neuschwanstein',

    'acc_ausflug_hohenschwangau_h3'  => 'Schloss Hohenschwangau',
    'acc_ausflug_hohenschwangau_alt' => 'Schloss Hohenschwangau',

    'acc_ausflug_ettal_h3'       => 'Kloster Ettal',
    'acc_ausflug_swarovski_h3'   => 'Swarovski Kristallwelten - Wattens',
    'acc_ausflug_swarovski_alt'  => 'Swarovski Kristallwelten - Wattens',
    'acc_ausflug_silber_h3'      => 'Silberbergwerk Schwaz',
    'acc_ausflug_oetzi_h3'       => 'Ötzi Dorf – Umhausen',

    // ===========================================
    // 3) Golf
    // ===========================================
    'acc_golf_title'    => 'Golf spielen in der Zugspitzarena',
    'acc_golf_h2'       => 'Golf spielen in der Zugspitzarena',

    'acc_golf_sect1_h3' => 'Reinstes Zugspitz-Gefühl',
    'acc_golf_sect1_text' =>
      'Erleben Sie Golf auf rund 1.000 m Seehöhe mit grandiosem Blick auf das Zugspitzmassiv. '
      . 'Neben dem 9-Loch-Golfplatz in Ehrwald gibt es auch in Mieming eine 18-Loch-Anlage. '
      . 'Für Einsteiger und Profis stehen Golflehrer zur Verfügung. '
      . 'Nach einer entspannten Runde lohnt sich eine Einkehr im Clubhaus, wo man lokale Spezialitäten mit Bergblick genießt.',
    'acc_golf_img1_alt' => 'Golf Abschlag Zugspitze',
    'acc_golf_img2_alt' => 'Golf Abschlag Teich Tirol',

    // ===========================================
    // 4) Biken
    // ===========================================
    'acc_bike_title' => 'Radfahren & Mountainbiken',
    'acc_bike_h2'    => 'Radfahren &amp; Mountainbiken',

    'acc_bike_sect1_h3' => 'Biker-Paradies für die ganze Familie',
    'acc_bike_sect1_text'=>
      'Die Tiroler Zugspitz Arena ist für Radfahrer perfekt erschlossen: '
      . 'Familien lieben die sanften Strecken entlang von Seen und Wiesen. '
      . 'E-Bike-Verleiher und zahlreiche Ladestationen machen es möglich, auch größere Distanzen entspannt zu meistern. '
      . 'Geführte Radtouren stehen ebenso zur Verfügung, um versteckte Panorama-Plätze zu entdecken.',
    'acc_bike_img1_alt' => 'mountainbiker Zugspitzarena Waldtrail',
    'acc_bike_img2_alt' => 'Mountainbike Rast am See',

    'acc_bike_sect2_h2' => 'Mit voller Kraft zu den Tiroler Berggipfeln',
    'acc_bike_sect2_text'=>
      'Ambitionierte Mountainbiker finden in der Zugspitz Arena Steilrampen und Singletrails wie den Blindsee-Trail oder den Forest-Thunder-Trail. '
      . 'Geführte Touren und Bike-Guides helfen, das Maximum aus den alpinen Routen herauszuholen. '
      . 'Die Trails werden regelmäßig gepflegt und bieten so beste Bedingungen für anspruchsvolle Biker.',
    'acc_bike_img3_alt' => 'Mountainbike Grubigstein Blindseetrail',
    'acc_bike_img4_alt' => 'Mountainbike Rast Zugspitzarena',

    // ===========================================
    // 5) Schwimmen
    // ===========================================
    'acc_schwimmen_title' => 'Schwimmen in der Tiroler Zugspitzarena',
    'acc_schwimmen_h2'    => 'Schwimmen in der Tiroler Zugspitzarena',

    'acc_schwimmen_sect1_h3' => 'Erholsame Bergseen der Tiroler Alpen',
    'acc_schwimmen_sect1_text'=>
      'Heiterwanger See und Plansee bieten mit ihrem kristallklaren Wasser beste Bedingungen für Bade- und Wassersportfans. '
      . 'Dank der idyllischen Lage inmitten der Bergwelt kommt hier echtes Urlaubsfeeling auf.',
    'acc_schwimmen_img1_alt' => 'Schwimmen Zugsitzarena Bikeausflug',
    'acc_schwimmen_img2_alt' => 'Wandern auf prächtigen Almwiesen',

    'acc_schwimmen_sect2_h3'  => 'Freischwimmbad &amp; Naturbadeteich',
    'acc_schwimmen_sect2_text'=>
      'Wer lieber ins beheizte Freibad oder in einen Naturbadeteich springen möchte, ist in Bichlbach oder Lermoos richtig. '
      . 'Großzügige Liegewiesen, Rutschen und Kinderbereiche sorgen für Spaß und Erholung.',
    'acc_schwimmen_img3_alt'  => 'Sport- u. Freizeitpark Bichlbach Kinder',
    'acc_schwimmen_img4_alt'  => 'Panoramabad Lermoos Kinder',

    'acc_schwimmen_sect3_h3'  => 'Hallenbad',
    'acc_schwimmen_sect3_text'=>
      'Sollte das Wetter einmal nicht mitspielen, lohnt sich ein Besuch im Hallenbad Ehrwald oder im Familienbad in der Region. '
      . 'Sauna- und Wellnessbereiche bieten zudem Entspannung für Körper und Geist.',
    'acc_schwimmen_img5_alt'  => 'Familienbad Zugspitz Arena',

    'acc_schwimmen_sect4_h3'  => 'Schifffahrt auf dem Heiterwangersee',
    'acc_schwimmen_sect4_text'=>
      'Eine Fahrt mit dem Ausflugsschiff ist eine entspannte Alternative zum Schwimmen. '
      . 'Die Rundfahrt führt über den Heiterwanger See zum Plansee und eröffnet traumhafte Ausblicke auf die umliegende Bergwelt.',
    'acc_schwimmen_img6_alt'  => 'Schifffahrt auf dem Heiterwangersee',

    'acc_schwimmen_sect5_h3'  => 'Canyoning',
    'acc_schwimmen_sect5_text'=>
      'Für Abenteuerlustige bietet die Region spannende Canyoning-Touren durch Schluchten und Gumpen. '
      . 'Erfahrene Guides und moderne Ausrüstung machen das Erlebnis sicher und unvergesslich.',
    'acc_schwimmen_img7_alt'  => 'Canyoning mit der Alpinschule Lermoos',

    // ===========================================
    // 6) Wandern
    // ===========================================
    'acc_wandern_title' => 'Bergsteigen, Klettern & Wandern',
    'acc_wandern_h2'    => 'Bergsteigen, Klettern & Wandern',

    'acc_wandern_sect1_h3' => 'Heilende Luft der Berge',
    'acc_wandern_sect1_text'=>
      'Die Tiroler Zugspitz Arena zählt zu den beliebtesten Wanderregionen in Österreich. '
      . 'Von gemütlichen Almspaziergängen bis hin zu anspruchsvollen Gipfeltouren ist alles möglich. '
      . 'Ein besonderes Erlebnis sind geführte Sonnenaufgangstouren, bei denen man das Bergpanorama in magischem Licht genießt.',
    'acc_wandern_img1_alt'  => 'Wanderurlaub Tiroler Zugspitz Arena',
    'acc_wandern_img2_alt'  => 'Wandern auf prächtigen Almwiesen',

    'acc_wandern_sect2_h3'   => 'Eins mit der Natur',
    'acc_wandern_sect2_text' =>
      'Durch Wiesen, Wälder und an Bergseen vorbei – hier warten unberührte Naturlandschaften darauf, entdeckt zu werden. '
      . 'Klettersteige und gesicherte Kletterrouten bieten Nervenkitzel für alle, die hoch hinaus wollen. '
      . 'Geführte Touren machen das Berg-Erlebnis noch intensiver.',
    'acc_wandern_img3_alt'   => 'Hochalm Heiterwang',
    'acc_wandern_img4_alt'   => 'Wandern mit Kindern, Erkundung der Natur',
    'acc_wandern_img5_alt'   => 'Wandern am Seebensee',
    'acc_wandern_img6_alt'   => 'Tiroler Zugspitzbahn - Bergbahn',

    // ===========================================
    // 7) Winteraktivitäten
    // ===========================================
    'acc_winterfamilie_title' => 'Winteraktivitäten',
    'acc_winterfamilie_h2'    => 'Wunderwelt – Winter in der Tiroler Zugspitzarena',

    'acc_winterfamilie_sect1_h3' => 'Winterwandern',
    'acc_winterfamilie_sect1_text'=>
      'Nutzen Sie den kostenlosen Skibus, um auch im Winter bequem die Startpunkte für Winterwanderungen zu erreichen. '
      . 'Rund 60 km geräumte Winterwanderwege laden dazu ein, '
      . 'das verschneite Bergpanorama in aller Ruhe zu genießen. '
      . 'Auch der Gratis-Wanderbus erleichtert die Erkundung der Region.',
    'acc_winterfamilie_img1_alt'  => 'Tiroler Zugspitz-Arena Winterwandern',

    'acc_winterfamilie_sect2_h3' => 'Fackel- & Schneeschuhwanderungen',
    'acc_winterfamilie_sect2_text'=>
      'Abenteuerlich wird es mit Fackelwanderungen am Abend oder geführten Schneeschuhwanderungen '
      . 'durch unberührte Tiefschneelandschaften. Hier spüren Sie die Stille der Natur hautnah.',
    'acc_winterfamilie_img2_alt'  => 'Schneeschuwandern Berwang',
    'acc_winterfamilie_img3_alt'  => 'Fackel Berwang wandern',

    'acc_winterfamilie_sect3_h3' => 'Pferdeschlittenfahrt',
    'acc_winterfamilie_sect3_text'=>
      'Eine romantische Kutschfahrt durch die winterliche Bergwelt gehört zu den Highlights für Groß und Klein. '
      . 'Eingehüllt in warme Decken lassen Sie die Schneelandschaft an sich vorbeiziehen.',
    'acc_winterfamilie_img4_alt'  => 'Pferdeschlittenfahrten Berwang',

    'acc_winterfamilie_sect4_h3' => 'Eislaufen, Eisstockschießen, Eishockey',
    'acc_winterfamilie_sect4_text'=>
      'In Bichlbach, Berwang und anderen Orten gibt es gepflegte Eisflächen zum Eislaufen, Eisstockschießen oder Eishockey. '
      . 'Schlittschuhe können meist direkt vor Ort ausgeliehen werden.',
    'acc_winterfamilie_img5_alt'  => 'Tiroler Zugpsitz-Arena Eislaufen',

    'acc_winterfamilie_sect5_h3' => 'Herzlich Willkommen auf der Zugspitze!',
    'acc_winterfamilie_sect5_text'=>
      'Schon der Blick von der Zugspitze über das tief verschneite Bergland ist einzigartig. '
      . 'Mit der Bahn geht es bequem hinauf; oben erwartet Sie bei klarer Sicht ein 360°-Panorama. '
      . 'Besonders eindrucksvoll sind zudem die Bergfeuer zur Sonnwende.',
    'acc_winterfamilie_img6_alt'  => 'Zugspitze Zugspitzbahn',

    'acc_winterfamilie_sect6_h3' => 'Weitere Ausflugsziele lohnen sich auch im Winter',

    // ===========================================
    // 8) Langlaufen
    // ===========================================
    'acc_langlaufen_title' => 'Langlaufen in der Tiroler Zugspitzarena',
    'acc_langlaufen_h2'    => 'Langlaufen in der Tiroler Zugspitzarena',

    'acc_langlaufen_sect1_h3' => 'Ein Dorado für Langläufer',
    'acc_langlaufen_sect1_text'=>
      'Mit über 110 km perfekt präparierten Loipen ist die Tiroler Zugspitz Arena ein wahres Paradies für Langläufer. '
      . 'Höhenloipen wie auf der Ehrwalder Alm garantieren schneesichere Bedingungen '
      . 'und bieten atemberaubende Aussichten auf das Zugspitzmassiv. '
      . 'Perfekt für alle, die Natur und Sport verbinden möchten.',
    'acc_langlaufen_img1_alt'  => 'Langlaufen Tiroler Zugspitzarena',
    'acc_langlaufen_img2_alt'  => 'Langlaufen Ehrwalder Alm',

    // ===========================================
    // 9) Rodeln
    // ===========================================
    'acc_rodeln_title' => 'Rodelspaß am Tag und in der Nacht',
    'acc_rodeln_h2'    => 'Rodelspass am Tag und in der Nacht in der Tiroler Zugspitzarena',

    'acc_rodeln_sect1_h3' => 'Nachtrodeln Ehrwalder Alm',
    'acc_rodeln_sect1_text'=>
      'Zweimal pro Woche gehört die beleuchtete Talabfahrt der Ehrwalder Alm ganz den Rodlern – '
      . 'ein Highlight für alle, die abends nochmal Action suchen.',
    'acc_rodeln_img1_alt'  => 'Rodelbahn Zugspitz Arena',
    'acc_rodeln_img2_alt'  => 'Rodeln Zugspitz Arena',

    'acc_rodeln_sect2_h3' => 'Rodeln & Nachtrodeln Berwang',
    'acc_rodeln_sect2_text'=>
      'In Berwang können Sie ebenfalls tagsüber oder abends die Rodelbahn unsicher machen. '
      . 'Das Jägerhaus bietet sich als gemütliche Einkehr an.',

    'acc_rodeln_sect3_h3' => 'Rodeln in Bichlbach',
    'acc_rodeln_sect3_text'=>
      'Am ehemaligen Mähberglift in Bichlbach gibt es einen kleinen Rodelhang – ideal für Familien und Anfänger. '
      . 'An manchen Abenden wird auch Nachtrodeln angeboten. '
      . 'Eine Fackelwanderung vor dem Start kann das Erlebnis noch stimmungsvoller machen.',
    'acc_rodeln_img3_alt' => 'Fackelwanderung Berwang - Rodeln',

    // ===========================================
    // 10) Skifahren
    // ===========================================
    'acc_skifahren_title' => 'Skifahren und Snowboarden',
    'acc_skifahren_h2'    => 'Skifahren und Snowboarden',

    'acc_skifahren_sect1_h3' => 'Skifahren Winter - Aktiv - Region',
    'acc_skifahren_sect1_text'=>
      'Mit insgesamt 7 Skigebieten und rund 140 Pistenkilometern hat die Tiroler Zugspitz Arena '
      . 'für jeden Geschmack das Richtige. Anfänger üben in flachen Arealen, '
      . 'während Könner steile Abfahrten auf Grubigstein oder Ehrwalder Alm genießen. '
      . 'Modernste Liftanlagen sorgen für raschen Transport in die Höhe. '
      . 'Zudem gibt es Snowparks für Freestyler, und der Gratis-Skibus erleichtert die Anreise.',
    'acc_skifahren_img1_alt'  => 'Grubigstein Tiroler Zugspitz Arena',
    'acc_skifahren_img2_alt'  => 'Grubigstein Tiroler Zugspitz Arena',

    'acc_skifahren_sect2_h2'  => 'Gut betreut in der Ski- und Snowboardschule',
    'acc_skifahren_sect2_text'=>
      'In der Skischule Nagele (oder einer der anderen Skischulen der Region) '
      . 'lernen Erwachsene und Kinder ab vier Jahren die ersten Schwünge. '
      . 'Spezielle Kursangebote machen den Einstieg leicht, '
      . 'und Fortgeschrittene können an ihrer Technik feilen.',
    'acc_skifahren_sect2_list' => [
      'Gruppenkurse – Grundfertigkeiten',
      'Spezialprogramm für Anfänger',
      'Individualkurse – Fahrtechnik verbessern'
    ],

    'acc_skifahren_sect3_h3'  => 'Alle Liftanlagen der Region auf einen Blick',
    'acc_skifahren_sect3_text'=>
      'Mit dem interaktiven Pistenplan behalten Sie den Überblick über alle Lifte und Abfahrten '
      . 'in der Tiroler Zugspitz Arena. So planen Sie Ihren perfekten Skitag schon vorab.',
    'acc_skifahren_img4_alt'  => 'Grubigstein Tiroler Zugspitz Arena',

    // ===========================================
    // 11) Z-Ticket
    // ===========================================
    'acc_zticket_title' => 'Z-Ticket – Die Vorteilskarte der Zugspitz Arena',
    'acc_zticket_h2'    => 'Z-Ticket in der Tiroler Zugspitz Arena',
    'acc_zticket_text'  =>
      'Das Z-Ticket ist Ihr Schlüssel zu zahlreichen Attraktionen und Bergbahnen in der Tiroler Zugspitz Arena. '
      . 'Mit dieser Karte nutzen Sie viele Sommerbergbahnen und Freizeiteinrichtungen unbegrenzt oder stark vergünstigt. '
      . 'Auch Bäder, Seen und weitere Highlights sind enthalten, z.B. Freibäder in Ehrwald und Lermoos. '
      . 'Familien profitieren von besonderen Tarifen und Kinderermäßigungen.',

    // ===========================================
    // 12) Klettersteige
    // ===========================================
    'acc_klettersteige_title' => 'Klettersteige & Alpines Klettern',
    'acc_klettersteige_h2'    => 'Klettersteige in der Tiroler Zugspitz Arena',
    'acc_klettersteige_text'  =>
      'Die Region rund um die Zugspitze bietet eine Vielzahl an Klettersteigen und alpinen Routen – perfekt für alle, '
      . 'die hoch hinaus möchten. Ob leichte Einsteigertouren oder anspruchsvolle Via Ferrata mit luftigen Passagen: '
      . 'Hier kommen Abenteuerlustige auf ihre Kosten. '
      . 'Mit richtiger Ausrüstung (Klettergurt, Klettersteigset, Helm) und ggf. einem Guide sind Sicherheit und Spaß garantiert.',

    // ===========================================
    // 13) Events
    // ===========================================
    'acc_events_title' => 'Events & Traditionen',
    'acc_events_h2'    => 'Veranstaltungen in der Tiroler Zugspitz Arena',
    'acc_events_text'  =>
      'Von traditionellen Almabtrieben im Herbst über stimmungsvolle Bergfeuer zur Sonnwende '
      . 'bis hin zum Winter-Opening auf den Pisten: In der Tiroler Zugspitz Arena ist das ganze Jahr über etwas geboten. '
      . 'Musikfeste, Bauernmärkte und Sport-Events laden Gäste und Einheimische zum Feiern ein. '
      . 'Aktuelle Termine finden Sie im Eventkalender oder bei der Gästeinformation. '
      . 'Auch in der Adventzeit können Weihnachts- und Christkindlmärkte in den nahegelegenen Orten '
      . '(z.B. Garmisch-Partenkirchen) besucht werden.',
    'acc_events_list' => [
      'Almabtrieb mit festlichem Umzug',
      'Herz-Jesu-Bergfeuer zur Sonnwende',
      'Winter- und Ski-Openings',
      'Bauern- und Handwerksmärkte',
      'Adventmärkte & Weihnachtskonzerte'
    ],

    // ===========================================
    // 14) Paragliding
    // ===========================================
    'acc_paragliding_title' => 'Paragliding & Tandemflüge',
    'acc_paragliding_h2'    => 'Paragliding in der Tiroler Zugspitz Arena',
    'acc_paragliding_text'  =>
      'Wer das imposante Bergpanorama aus der Vogelperspektive erleben möchte, sollte einen Tandem-Paraglidingflug in Erwägung ziehen. '
      . 'Mit erfahrenen Piloten heben Sie sicher ab und gleiten lautlos über die traumhafte Landschaft. '
      . 'Bei geeigneter Thermik sind unvergleichliche Ausblicke garantiert – ein echtes Highlight für Mutige und Genießer gleichermaßen.',

    // ===========================================
    // PLATZHALTER-KEYS FÜR BILDER (z.B. Biken, Wandern etc.)
    // ===========================================
    'placeholder_bike_alt'         => 'Biken Platzhalter',
    'placeholder_wandern_alt'      => 'Wandern Platzhalter',
    'placeholder_schwimmen_alt'    => 'Schwimmen Platzhalter',
    'placeholder_langlaufen_alt'   => 'Langlaufen Platzhalter',
    'placeholder_rodeln_alt'       => 'Rodeln Platzhalter',
    'placeholder_skifahren_alt'    => 'Skifahren Platzhalter',
    'placeholder_zticket_alt'      => 'Z-Ticket Platzhalter',
    'placeholder_klettersteig_alt' => 'Klettersteig Platzhalter',
    'placeholder_events_alt'       => 'Events Platzhalter',
    'placeholder_paragliding_alt'  => 'Paragliding Platzhalter',
  ],


  // ====================================
  // =============== ENGLISCH ===========
  // ====================================
  'en' => [
    'html_lang'      => 'en',
    'banner_img_alt' => 'Zugspitz Arena summer Loisach',

    // ---------------------------
    // Headlines / Intro
    // ---------------------------
    'main_h1'        => 'Bichlbach – Center of the Zugspitz Arena',
    'intro_h2'       => 'Welcome to Bichlbach – Tyrol',
    'intro_text'     => '... at 1,070m altitude, in the Zugspitz ARENA holiday region, nestled among meadows and forests, protected by the peaks of the Lechtal Alps and the mighty Zugspitze.',
    'intro_teaser_img_alt' => 'Zugspitze Tyrol summer',

    'heading_sommer' => 'Summer in Bichlbach',
    'heading_winter' => 'Winter in Bichlbach',

    // Summer tiles
    'sommer_tiles' => [
      'schwimmen_alt'   => 'Panorama Pool Ehrwald',
      'schwimmen_title' => 'Swimming',

      'wandern_alt'     => 'Hiking Bichlbach Berwang',
      'wandern_title'   => 'Hiking',

      'golf_alt'        => 'Golf Zugspitz Arena',
      'golf_title'      => 'Golf',

      'schiff_alt'      => 'Boat Trip Heiterwanger & Plansee',
      'schiff_title'    => 'Boat trip',

      'canyoning_alt'   => 'Canyoning',
      'canyoning_title' => 'Canyoning',

      'familie_alt'     => 'Family holiday',
      'familie_title'   => 'Family holiday',

      'ausflug_alt'     => 'Neuschwanstein Castle',
      'ausflug_title'   => 'Excursions',

      'bike_alt'        => 'Biking in the Zugspitz Arena',
      'bike_title'      => 'Biking',
    ],

    // Winter tiles
    'winter_tiles' => [
      'ski_alt'           => 'Ski & Board',
      'ski_title'         => 'Ski &amp; Board',

      'langlauf_alt'      => 'Cross-country skiing Zugspitze',
      'langlauf_title'    => 'Cross-country skiing',

      'skischule_alt'     => 'Ski school children',
      'skischule_title'   => 'Ski school',

      'rodeln_alt'        => 'Family sledding Zugspitz Arena',
      'rodeln_title'      => 'Tobogganing',

      'winterfamilie_alt' => 'Night hiking Berwang Zugspitz Arena',
      'winterfamilie_title' => 'Family winter fun',
    ],

    'heading_impression' => 'Impressions from the Zugspitz Arena',

    // Media (YouTube)
    'media_items' => [
      [
        'title'   => 'Family vacation - tranquility of nature - Tyrol',
        'youtube' => 'https://www.youtube.com/embed/JVCLdsj-YxU',
      ],
      [
        'title'   => 'Hiking vacation - explore Tyrol',
        'youtube' => 'https://www.youtube.com/embed/xTKXgbc1J8k',
      ],
      [
        'title'   => 'Mountain biking - Tyrol experience holiday',
        'youtube' => 'https://www.youtube.com/embed/PJ9-u-5DI1s',
      ],
      [
        'title'   => 'Summer - Tyrol holiday - warmth of nature',
        'youtube' => 'https://www.youtube.com/embed/B3VN62VJEWM',
      ],
    ],
    'media_items2' => [
      [
        'title'   => 'Ski vacation Zugspitz Arena Bavaria-Tyrol',
        'youtube' => 'https://www.youtube.com/embed/bai0_t9NPZM',
      ],
      [
        'title'   => 'Tyrolean Zugspitz Arena imagespot',
        'youtube' => 'https://www.youtube.com/embed/ziTvuBmnlOE',
      ],
    ],

    // ===========================================
    // 1) Family holiday
    // ===========================================
    'acc_familien_title' => 'Family holiday',
    'acc_familien_h2'    => 'Family holiday',

    'acc_familien_sect1_h3' => 'Zugspitze with the best views',
    'acc_familien_sect1_text' =>
      'Experience breathtaking panoramas on Germany’s highest mountain (2,962m). '
      . 'A ride on the Tiroler Zugspitzbahn is a must-do, offering amazing views for the whole family. '
      . 'Even young kids can enjoy the easy gondola ride. At the summit, you’ll marvel at the peaks and valleys around you. '
      . 'Numerous playgrounds and themed trails in the region provide fun, educational adventures. '
      . 'Tip: Check out “Moosle’s Forscherpfad” in Lermoos or the daily children’s programs in summer.',
    'acc_familien_sect1_img_alt' => 'Zugspitze Ehrwald',

    // (sect2, sect3, sect4, sect5)...

    // ===========================================
    // 2) Excursions
    // ===========================================
    'acc_ausflug_title' => 'Excursions',
    'acc_ausflug_h2'    => 'Excursions',

    'acc_ausflug_ehrenberg_h3' => 'Ehrenberg Castle Ruins Reutte',
    'acc_ausflug_ehrenberg_link'=> 'http://www.ehrenberg.at',

    'acc_ausflug_linderhof_h3'  => 'Linderhof Palace',
    'acc_ausflug_linderhof_alt' => 'Linderhof Palace - main building',

    'acc_ausflug_neuschwanstein_h3'  => 'Neuschwanstein Castle',
    'acc_ausflug_neuschwanstein_alt' => 'Excursions Tyrol - Bavaria - Neuschwanstein',

    'acc_ausflug_hohenschwangau_h3'  => 'Hohenschwangau Castle',
    'acc_ausflug_hohenschwangau_alt' => 'Hohenschwangau Castle',

    'acc_ausflug_ettal_h3'       => 'Ettal Abbey',
    'acc_ausflug_swarovski_h3'   => 'Swarovski Crystal Worlds - Wattens',
    'acc_ausflug_swarovski_alt'  => 'Swarovski Crystal Worlds - Wattens',
    'acc_ausflug_silber_h3'      => 'Silver Mine Schwaz',
    'acc_ausflug_oetzi_h3'       => 'Ötzi Village – Umhausen',

    // ===========================================
    // 3) Golf
    // ===========================================
    'acc_golf_title' => 'Golf in the Zugspitz Arena',
    'acc_golf_h2'    => 'Golf in the Zugspitz Arena',

    'acc_golf_sect1_h3' => 'Pure Zugspitz feeling...',
    'acc_golf_sect1_text' =>
      'Playing golf at around 1,000m altitude provides amazing views of the Zugspitze. '
      . 'The 9-hole course in Ehrwald and the 18-hole course in Mieming cater to both beginners and pros. '
      . 'After your round, relax in the clubhouse and enjoy local delicacies.',
    'acc_golf_img1_alt' => 'Golf tee Zugspitze',
    'acc_golf_img2_alt' => 'Golf tee pond Tyrol',

    // ===========================================
    // 4) Biking
    // ===========================================
    'acc_bike_title' => 'Cycling & Mountain Biking',
    'acc_bike_h2'    => 'Cycling & Mountain Biking',

    'acc_bike_sect1_h3' => 'Biking paradise for the whole family',
    'acc_bike_sect1_text'=>
      'The Tyrolean Zugspitz Arena is ideal for leisurely bike tours along lakes and meadows. '
      . 'E-bike rentals and charging stations make longer distances a breeze. '
      . 'Guided bike tours are also available to uncover hidden panorama spots.',
    'acc_bike_img1_alt' => 'mountainbiker Zugspitz Arena forest trail',
    'acc_bike_img2_alt' => 'Mountainbike break at the lake',

    'acc_bike_sect2_h2' => 'Full power up Tyrolean mountain peaks',
    'acc_bike_sect2_text'=>
      'Ambitious mountain bikers can tackle steep climbs and singletrack routes like the Blindsee Trail or Forest Thunder. '
      . 'Guided tours and local bike guides help you make the most of the Alpine terrain. '
      . 'Trails are well-maintained to ensure top conditions for avid riders.',
    'acc_bike_img3_alt' => 'Mountainbike Grubigstein Blindsee trail',
    'acc_bike_img4_alt' => 'Mountainbike rest Zugspitz Arena',

    // ===========================================
    // 5) Swimming
    // ===========================================
    'acc_schwimmen_title' => 'Swimming in the Tyrolean Zugspitz Arena',
    'acc_schwimmen_h2'    => 'Swimming in the Tyrolean Zugspitz Arena',

    // sect1, sect2, etc. ...

    // ===========================================
    // 6) Wandern (Mountaineering, Climbing & Hiking)
    // ===========================================
    'acc_wandern_title' => 'Mountaineering, Climbing & Hiking',
    'acc_wandern_h2'    => 'Mountaineering, Climbing & Hiking',

    // sect1, sect2, alt keys ...

    // ===========================================
    // 7) Winter activities
    // ===========================================
    'acc_winterfamilie_title' => 'Winter activities',
    'acc_winterfamilie_h2'    => 'Wonderland – Winter in the Tyrolean Zugspitz Arena',

    // sect1 ... sect6

    // ===========================================
    // 8) Cross-country Skiing
    // ===========================================
    'acc_langlaufen_title' => 'Cross-country skiing in the Tyrolean Zugspitz Arena',
    'acc_langlaufen_h2'    => 'Cross-country skiing in the Tyrolean Zugspitz Arena',

    // sect1, alt keys ...

    // ===========================================
    // 9) Tobogganing
    // ===========================================
    'acc_rodeln_title' => 'Toboggan fun by day and night',
    'acc_rodeln_h2'    => 'Toboggan fun by day and night in the Tyrolean Zugspitz Arena',

    // sect1, sect2, sect3, alt keys ...

    // ===========================================
    // 10) Skiing
    // ===========================================
    'acc_skifahren_title' => 'Skiing and Snowboarding',
    'acc_skifahren_h2'    => 'Skiing and Snowboarding',

    'acc_skifahren_sect1_h3' => 'Skiing winter – active region',
    'acc_skifahren_sect1_text'=>
      'With 7 ski areas and around 140 km of slopes, the Tyrolean Zugspitz Arena caters to all levels. '
      . 'Beginners practice on gentle terrain while pros tackle steeper runs at Grubigstein or Ehrwalder Alm. '
      . 'Modern lifts ensure a quick ascent. Snowparks are available for freestylers, and the free ski bus helps you get around easily.',
    'acc_skifahren_img1_alt'  => 'Grubigstein Tyrolean Zugspitz Arena',
    'acc_skifahren_img2_alt'  => 'Grubigstein Tyrolean Zugspitz Arena',

    'acc_skifahren_sect2_h2'  => 'Well looked after in the ski and snowboard school',
    'acc_skifahren_sect2_text'=>
      'At Skischule Nagele (or other schools), adults and children (from 4 years) learn basic techniques. '
      . 'Special beginner programs and lessons for advanced skiers are offered.',
    'acc_skifahren_sect2_list' => [
      'Group courses – basic skills',
      'Special program for beginners',
      'Individual lessons – improve technique'
    ],
    'acc_skifahren_sect3_h3'  => 'All lifts in the region at a glance',
    'acc_skifahren_sect3_text'=>
      'Use the interactive piste map to find all lifts and runs in the Tyrolean Zugspitz Arena. '
      . 'Plan your perfect ski day in advance!',
    'acc_skifahren_img4_alt'  => 'Grubigstein Tyrolean Zugspitz Arena',

    // ===========================================
    // 11) Z-Ticket
    // ===========================================
    'acc_zticket_title' => 'Z-Ticket – The Advantage Card of the Zugspitz Arena',
    'acc_zticket_h2'    => 'Z-Ticket in the Tyrolean Zugspitz Arena',
    'acc_zticket_text'  =>
      'The Z-Ticket is your key to numerous attractions and cable cars in the Tyrolean Zugspitz Arena. '
      . 'Enjoy unlimited or heavily discounted use of summer cable cars and leisure facilities. '
      . 'Lakes, pools, and other highlights are also included. Families benefit from special rates and child discounts.',

    // ===========================================
    // 12) Klettersteige
    // ===========================================
    'acc_klettersteige_title' => 'Via Ferratas & Alpine Climbing',
    'acc_klettersteige_h2'    => 'Klettersteige in the Tyrolean Zugspitz Arena',
    'acc_klettersteige_text'  =>
      'The Zugspitze region offers a variety of via ferratas and alpine routes, perfect for those aiming high. '
      . 'Whether easy routes or challenging, airy climbs, you’ll find adventure. '
      . 'Proper gear (harness, ferrata set, helmet) and a guide ensure safety.',

    // ===========================================
    // 13) Events
    // ===========================================
    'acc_events_title' => 'Events & Traditions',
    'acc_events_h2'    => 'Events in the Tyrolean Zugspitz Arena',
    'acc_events_text'  =>
      'From traditional cattle drives (Almabtrieb) in autumn and spectacular solstice mountain fires '
      . 'to winter ski openings, there’s always something happening year-round. '
      . 'Music festivals, farmers’ markets, and sports events invite guests and locals to celebrate together. '
      . 'During Advent, you can visit Christmas markets in nearby towns (e.g. Garmisch-Partenkirchen) for a festive atmosphere.',
    'acc_events_list' => [
      'Festive Almabtrieb parade',
      'Herz-Jesu mountain fires during the solstice',
      'Winter and ski openings',
      'Farmers’ and craft markets',
      'Advent markets & Christmas concerts'
    ],

    // ===========================================
    // 14) Paragliding
    // ===========================================
    'acc_paragliding_title' => 'Paragliding & Tandem Flights',
    'acc_paragliding_h2'    => 'Paragliding in the Tyrolean Zugspitz Arena',
    'acc_paragliding_text'  =>
      'For a true bird’s-eye view of the Alpine scenery, consider a tandem paragliding flight. '
      . 'Launch with an experienced pilot and glide silently above the breathtaking landscape. '
      . 'Favorable thermals let you enjoy incomparable views—an unforgettable adventure for thrill-seekers and sightseers alike.',

    // ===========================================
    // PLATZHALTER-KEYS FÜR BILDER
    // ===========================================
    'placeholder_bike_alt'         => 'Biking placeholder',
    'placeholder_wandern_alt'      => 'Hiking placeholder',
    'placeholder_schwimmen_alt'    => 'Swimming placeholder',
    'placeholder_langlaufen_alt'   => 'Cross-country placeholder',
    'placeholder_rodeln_alt'       => 'Tobogganing placeholder',
    'placeholder_skifahren_alt'    => 'Skiing placeholder',
    'placeholder_zticket_alt'      => 'Z-Ticket placeholder',
    'placeholder_klettersteig_alt' => 'Via ferrata placeholder',
    'placeholder_events_alt'       => 'Events placeholder',
    'placeholder_paragliding_alt'  => 'Paragliding placeholder',
  ],
];
