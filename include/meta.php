<?php
/* ======================================================================
   meta.php  –  zentrales Head-Template (FINALE, POLIERTE VERSION)
   ======================================================================
   * Kürzere, prägnante Title-Tags
   * Korrekte hreflang- & canonical-Links für SEO
   * Dynamische Meta-Daten pro Seite und Sprache
   * Sauberes Escaping (htmlspecialchars)
   ====================================================================== */

class Webseite {
    private string $siteurl;
    private string $servername;
    private string $language;
    private string $path;
    private array  $data;
    private string $unterseite;

    /* ------------------------------------------------------------------
       1)  Seitendaten  –  JEDE Seite vollständig aufgeführt
    ------------------------------------------------------------------ */
    private array $siteData = [
        "/index.php" => [
            "de" => [
                "title"         => "Ferienwohnungen & Zimmer in Bichlbach | Haus am Mühlbach",
                "description"   => "Verbringen Sie Ihren Traumurlaub in unseren gemütlichen Ferienwohnungen & Zimmern in Bichlbach. ✓ Hundefreundlich ✓ Top-Lage in der Tiroler Zugspitz Arena. Jetzt buchen!",
                "ogtitle"       => "Ihr Tirol-Urlaub bei Luttinger in Bichlbach",
                "ogdescription" => "Komfortable Zimmer & Apartments in Bichlbach mit Bergblick. Jetzt buchen!",
                "sitecss"       => "lib/css/index.css",
                "googleindex"   => "INDEX,FOLLOW"
            ],
            "en" => [
                "title"         => "Apartments & Rooms in Bichlbach | Haus am Mühlbach",
                "description"   => "Spend your dream vacation in our cozy apartments & rooms in Bichlbach. ✓ Dog-friendly ✓ Prime location in the Tyrolean Zugspitz Arena. Book your trip now!",
                "ogtitle"       => "Your Tyrol Vacation at Luttinger in Bichlbach",
                "ogdescription" => "Comfortable rooms & apartments in Bichlbach with mountain views. Book now!",
                "sitecss"       => "lib/css/index.css",
                "googleindex"   => "INDEX,FOLLOW"
            ]
        ],
        "/unser-haus.php" => [
            "de" => [
                "title"         => "Unser Haus – Ferienwohnungen Luttinger in Bichlbach",
                "description"   => "Stilvolle Apartments und ein charmantes Haus in Bichlbach mit Tiroler Gemütlichkeit & Ruhe. Entdecken Sie die perfekte Unterkunft für Ihren Urlaub in den Alpen.",
                "ogtitle"       => "Charmantes Haus Luttinger",
                "ogdescription" => "Stilvolle Unterkünfte in Bichlbach, Tirol. Jetzt entdecken!",
                "sitecss"       => "lib/css/index.css",
                "googleindex"   => "INDEX,FOLLOW"
            ],
            "en" => [
                "title"         => "Our House – Apartments Luttinger in Bichlbach",
                "description"   => "Stylish apartments and a charming house in Bichlbach with Tyrolean coziness & tranquility. Discover the perfect accommodation for your vacation in the Alps.",
                "ogtitle"       => "Charming Luttinger House",
                "ogdescription" => "Stylish accommodations in Bichlbach, Tyrol. Explore now!",
                "sitecss"       => "lib/css/index.css",
                "googleindex"   => "INDEX,FOLLOW"
            ]
        ],
        "/aktivitaeten.php" => [
            "de" => [
                "title"         => "Aktivitäten in Bichlbach – Sommer & Winter in Tirol",
                "description"   => "Über 100 Wanderwege, Mountainbike-Touren und Skigebiete in Bichlbach entdecken. Planen Sie jetzt Ihren Aktivurlaub in der Tiroler Bergwelt!",
                "ogtitle"       => "Aktiv in Bichlbach",
                "ogdescription" => "Wandern, Biken & Skifahren in Tirols Natur. Jetzt Ihren Urlaub planen!",
                "sitecss"       => "lib/css/bichlbach.css",
                "googleindex"   => "INDEX,FOLLOW"
            ],
            "en" => [
                "title"         => "Activities in Bichlbach – Summer & Winter in Tyrol",
                "description"   => "Discover over 100 hiking trails, mountain bike tours, and ski areas in Bichlbach. Plan your active holiday in the Tyrolean Alps now!",
                "ogtitle"       => "Active in Bichlbach",
                "ogdescription" => "Hiking, biking & skiing in Tyrol’s nature. Plan your trip now!",
                "sitecss"       => "lib/css/bichlbach.css",
                "googleindex"   => "INDEX,FOLLOW"
            ]
        ],
        "/preise.php" => [
            "de" => [
                "title"         => "Preise & Angebote – Ferienwohnungen Bichlbach",
                "description"   => "Finden Sie attraktive Preise und saisonale Angebote für unsere gemütlichen Ferienwohnungen und Zimmer in Bichlbach. Sichern Sie sich jetzt Ihren Urlaub in Tirol!",
                "ogtitle"       => "Preise bei Luttinger",
                "ogdescription" => "Top-Angebote für Unterkünfte in Bichlbach. Jetzt checken!",
                "sitecss"       => "lib/css/preis.css",
                "googleindex"   => "INDEX,FOLLOW"
            ],
            "en" => [
                "title"         => "Prices & Offers – Apartments Bichlbach",
                "description"   => "Find attractive prices and seasonal offers for our cozy apartments and rooms in Bichlbach. Secure your vacation in Tyrol now!",
                "ogtitle"       => "Prices at Luttinger",
                "ogdescription" => "Great deals for accommodations in Bichlbach. Check now!",
                "sitecss"       => "lib/css/preis.css",
                "googleindex"   => "INDEX,FOLLOW"
            ]
        ],
        "/kontakt.php" => [
            "de" => [
                "title"         => "Kontakt & Anfrage – Ferienwohnung in Tirol buchen",
                "description"   => "Sie haben Fragen oder möchten buchen? Kontaktieren Sie die Ferienwohnungen Luttinger in Bichlbach für Ihren Urlaub in Tirol. Wir freuen uns auf Ihre Anfrage!",
                "ogtitle"       => "Kontakt zu Luttinger",
                "ogdescription" => "Buchen Sie Ihren Urlaub in Bichlbach. Jetzt kontaktieren!",
                "sitecss"       => "lib/css/kontakt.css",
                "googleindex"   => "INDEX,FOLLOW"
            ],
            "en" => [
                "title"         => "Contact & Inquiry – Book Tyrol Apartment",
                "description"   => "Do you have questions or want to book? Contact Apartments Luttinger in Bichlbach for your vacation in Tyrol. We look forward to your inquiry!",
                "ogtitle"       => "Contact Luttinger",
                "ogdescription" => "Book your vacation in Bichlbach. Contact us now!",
                "sitecss"       => "lib/css/kontakt.css",
                "googleindex"   => "INDEX,FOLLOW"
            ]
        ],
        "/impressum.php" => [
            "de" => [ "title" => "Impressum", "description" => "Rechtliche Infos.", "ogtitle" => "Impressum", "ogdescription" => "Rechtliche Hinweise.", "sitecss" => "lib/css/impressum.css", "googleindex" => "NOINDEX,FOLLOW" ],
            "en" => [ "title" => "Imprint", "description" => "Legal info.", "ogtitle" => "Imprint", "ogdescription" => "Legal notices.", "sitecss" => "lib/css/impressum.css", "googleindex" => "NOINDEX,FOLLOW" ]
        ],
        "/agb.php" => [
            "de" => [ "title" => "AGB", "description" => "Allgemeine Geschäftsbedingungen.", "ogtitle" => "AGB", "ogdescription" => "Allgemeine Geschäftsbedingungen.", "sitecss" => "lib/css/impressum.css", "googleindex" => "NOINDEX,FOLLOW" ],
            "en" => [ "title" => "Terms", "description" => "General Terms and Conditions.", "ogtitle" => "Terms", "ogdescription" => "General Terms and Conditions.", "sitecss" => "lib/css/impressum.css", "googleindex" => "NOINDEX,FOLLOW" ]
        ],
        "/anreise.php" => [
            "de" => [
                "title"         => "Anreise & Lage in Bichlbach – Ferienwohnungen Luttinger",
                "description"   => "So finden Sie uns: Alle Informationen zur Anreise zu den Ferienwohnungen Luttinger in Bichlbach, egal ob mit Bahn, Bus oder Auto. Planen Sie Ihre Route!",
                "ogtitle"       => "Anreise zu Luttinger",
                "ogdescription" => "Einfache Anreise nach Bichlbach, Tirol. Infos hier!",
                "sitecss"       => "lib/css/anreise.css",
                "googleindex"   => "INDEX,FOLLOW"
            ],
            "en" => [
                "title"         => "Arrival & Location in Bichlbach – Apartments Luttinger",
                "description"   => "How to find us: All information on how to get to Apartments Luttinger in Bichlbach, whether by train, bus, or car. Plan your route now!",
                "ogtitle"       => "Arrival at Luttinger",
                "ogdescription" => "Easy travel to Bichlbach, Tyrol. Details here!",
                "sitecss"       => "lib/css/anreise.css",
                "googleindex"   => "INDEX,FOLLOW"
            ]
        ],
        "/inklusivleistungen.php" => [
            "de" => [
                "title"         => "Inklusivleistungen & Service – Urlaub in Bichlbach",
                "description"   => "Genießen Sie zahlreiche Inklusivleistungen wie Frühstück, WLAN und die Gästekarte der Zugspitz Arena bei Luttinger in Bichlbach. Sorgenfrei den Tirol-Urlaub genießen!",
                "ogtitle"       => "Inklusive bei Luttinger",
                "ogdescription" => "Sorgenfreier Urlaub in Bichlbach mit Extras. Jetzt buchen!",
                "sitecss"       => "lib/css/inklusiv.css",
                "googleindex"   => "INDEX,FOLLOW"
            ],
            "en" => [
                "title"         => "Included Services & Amenities – Vacation in Bichlbach",
                "description"   => "Enjoy numerous included services like breakfast, Wi-Fi, and the Zugspitz Arena guest card at Luttinger in Bichlbach. Enjoy a carefree Tyrol vacation!",
                "ogtitle"       => "Included at Luttinger",
                "ogdescription" => "Worry-free vacation in Bichlbach with extras. Book now!",
                "sitecss"       => "lib/css/inklusiv.css",
                "googleindex"   => "INDEX,FOLLOW"
            ]
        ],
        "/intro.php" => [
            "de" => [ "title" => "Willkommen", "description" => "Ihr Traumurlaub beginnt hier.", "ogtitle" => "Willkommen", "ogdescription" => "Traumurlaub in Bichlbach.", "sitecss" => "lib/css/intro.css", "googleindex" => "NOINDEX,FOLLOW" ],
            "en" => [ "title" => "Welcome", "description" => "Your dream vacation starts here.", "ogtitle" => "Welcome", "ogdescription" => "Dream vacation in Bichlbach.", "sitecss" => "lib/css/intro.css", "googleindex" => "NOINDEX,FOLLOW" ]
        ],
        "/ausstattung/wohnung1.php" => [
            "de" => [ "title" => "Ferienwohnung 1 für 2-4 Personen", "description" => "Unsere gemütliche Ferienwohnung 1 in Bichlbach mit sonnigem Südbalkon und Bergblick. Perfekt für Paare und kleine Familien. Jetzt buchen!", "ogtitle" => "Wohnung 1 bei Luttinger", "ogdescription" => "Komfortable Wohnung in Bichlbach. Jetzt buchen!", "sitecss" => "lib/css/ausstattung.css", "googleindex" => "INDEX,FOLLOW" ],
            "en" => [ "title" => "Apartment 1 for 2-4 People", "description" => "Our cozy Apartment 1 in Bichlbach with a sunny south-facing balcony and mountain views. Perfect for couples and small families. Book now!", "ogtitle" => "Apartment 1 at Luttinger", "ogdescription" => "Cozy apartment in Bichlbach. Book now!", "sitecss" => "lib/css/ausstattung.css", "googleindex" => "INDEX,FOLLOW" ]
        ],
        "/ausstattung/wohnung5.php" => [
            "de" => [ "title" => "Ferienwohnung 3 für 4-6 Personen", "description" => "Unsere große Ferienwohnung 3 in Bichlbach mit zwei getrennten Schlafzimmern, Sat-TV und Balkon. Ideal für Familien und Gruppen. Jetzt buchen!", "ogtitle" => "Wohnung 3 bei Luttinger", "ogdescription" => "Spacious apartment in Bichlbach. Book now!", "sitecss" => "lib/css/ausstattung.css", "googleindex" => "INDEX,FOLLOW" ],
            "en" => [ "title" => "Apartment 3 for 4-6 People", "description" => "Our large Apartment 3 in Bichlbach with two separate bedrooms, Sat-TV, and balcony. Ideal for families and groups. Book now!", "ogtitle" => "Apartment 3 at Luttinger", "ogdescription" => "Spacious apartment in Bichlbach. Book now!", "sitecss" => "lib/css/ausstattung.css", "googleindex" => "INDEX,FOLLOW" ]
        ],
        "/ausstattung/wohnung6.php" => [
            "de" => [ "title" => "Ferienwohnung 4 für 4-6 Personen", "description" => "Genießen Sie den Traumblick aus unserer Ferienwohnung 4 in Bichlbach. Mit voll ausgestatteter Küche und großem Balkon. Jetzt buchen!", "ogtitle" => "Wohnung 4 bei Luttinger", "ogdescription" => "Spacious apartment with stunning views. Book now!", "sitecss" => "lib/css/ausstattung.css", "googleindex" => "INDEX,FOLLOW" ],
            "en" => [ "title" => "Apartment 4 for 4-6 People", "description" => "Enjoy the stunning view from our Apartment 4 in Bichlbach. With a fully equipped kitchen and a large balcony. Book now!", "ogtitle" => "Apartment 4 at Luttinger", "ogdescription" => "Spacious apartment with stunning views. Book now!", "sitecss" => "lib/css/ausstattung.css", "googleindex" => "INDEX,FOLLOW" ]
        ],
        "/ausstattung/zimmer.php" => [
            "de" => [ "title" => "Doppelzimmer für 2 Personen", "description" => "Unser gemütliches Doppelzimmer in Bichlbach mit Südbalkon, TV und optionalem Frühstück. Die perfekte Wahl für Paare. Jetzt buchen!", "ogtitle" => "Doppelzimmer Luttinger", "ogdescription" => "Cozy room in Bichlbach for couples. Book now!", "sitecss" => "lib/css/ausstattung.css", "googleindex" => "INDEX,FOLLOW" ],
            "en" => [ "title" => "Double Room for 2 People", "description" => "Our cozy double room in Bichlbach with a south-facing balcony, TV, and optional breakfast. The perfect choice for couples. Book now!", "ogtitle" => "Double Room Luttinger", "ogdescription" => "Cozy room in Bichlbach for couples. Reserve now!", "sitecss" => "lib/css/ausstattung.css", "googleindex" => "INDEX,FOLLOW" ]
        ],
        "/zimmer-wohnung.php" => [
            "de" => [ "title" => "Alle Zimmer & Wohnungen im Überblick", "description" => "Finden Sie die perfekte Unterkunft für Ihren Urlaub in Bichlbach. Entdecken Sie unsere komfortablen Zimmer und Ferienwohnungen mit Bergblick. Jetzt buchen!", "ogtitle" => "Unterkünfte Luttinger", "ogdescription" => "Rooms & apartments in Bichlbach. Book now!", "sitecss" => "lib/css/ausstattung.css", "googleindex" => "INDEX,FOLLOW" ],
            "en" => [ "title" => "All Rooms & Apartments at a Glance", "description" => "Find the perfect accommodation for your vacation in Bichlbach. Discover our comfortable rooms and apartments with mountain views. Book now!", "ogtitle" => "Accommodations Luttinger", "ogdescription" => "Rooms & apartments in Bichlbach. Reserve now!", "sitecss" => "lib/css/ausstattung.css", "googleindex" => "INDEX,FOLLOW" ]
        ],
        "/buchen.php" => [
            "de" => [ "title" => "Online Buchen", "description" => "Buchen Sie Ihren Urlaub direkt online.", "ogtitle" => "Online Buchen", "ogdescription" => "Buchen Sie Ihren Urlaub direkt online.", "sitecss" => "lib/css/buchen.css", "googleindex" => "NOINDEX,FOLLOW" ],
            "en" => [ "title" => "Book Online", "description" => "Book your vacation directly online.", "ogtitle" => "Book Online", "ogdescription" => "Book your vacation directly online.", "sitecss" => "lib/css/buchen.css", "googleindex" => "NOINDEX,FOLLOW" ]
        ]
    ];
    /* Ende siteData ----------------------------------------------------- */

    public function __construct() {
        $this->siteurl    = $_SERVER['REQUEST_URI']  ?? '/index.php';
        $this->servername = $_SERVER['SERVER_NAME'] ?? 'localhost';

        $this->setLanguageAndPath();
        $this->data = $this->siteData[$this->path] ?? $this->siteData['/index.php'];

        // Relativer Pfad zu /lib für CSS/JS-Pfade (z.B. ../../)
        $this->unterseite = str_repeat('../', substr_count(trim($this->path, '/'), '/'));
    }

    private function setLanguageAndPath(): void {
        $parts = parse_url($this->siteurl);
        $this->path = $parts['path'] ?? '/index.php';

        if ($this->path === '/') {
            $this->path = '/index.php';
        }

        $this->language = ($_GET['lang'] ?? 'de') === 'en' ? 'en' : 'de';
    }

    /* ---------- Getter ---------- */
    public function lang()   { return $this->language; }
    public function data()   { return $this->data[$this->language] ?? $this->data['de']; } // Fallback auf Deutsch
    public function prefix() { return $this->unterseite; }
    public function base()   { return 'https://'.$this->servername; }
    public function path()   { return $this->path; }
}

$site = new Webseite();
$d    = $site->data();
$pre  = $site->prefix();
$base = $site->base();
$lang = $site->lang();
$path = $site->path();

/* =====================================================================
   2)  Meta- und Link-Ausgabe
   ===================================================================== */
?>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title><?=htmlspecialchars($d['title'])?></title>
<meta name="viewport"    content="width=device-width, initial-scale=1">
<meta name="description" content="<?=htmlspecialchars($d['description'])?>">
<meta name="robots"      content="<?=htmlspecialchars($d['googleindex'])?>">
<meta name="author"      content="Markus Luttinger">

<meta name="geo.region"    content="AT-7">
<meta name="geo.placename" content="Bichlbach">
<meta name="geo.position"  content="47.421288;10.790438">
<meta name="ICBM"          content="47.421288, 10.790438">
<meta name="google-site-verification" content="tc3IhoR1Ii9tOxQkUS41D9QxWRwuL3aUnYD1XNWQlL0">

<?php
// === FINALE SEO-KORREKTUR FÜR CANONICAL, HREFLANG & OG:URL ===

// 1. Erstelle die saubere Basis-URL ohne Sprachparameter oder index.php
$clean_url_path = $path === '/index.php' ? '/' : $path;
$base_url = htmlspecialchars($base . $clean_url_path);

// 2. Erstelle die spezifischen Sprachversionen
$deHref = $base_url;
$enHref = rtrim($base_url, '/') . '/?lang=en'; // Fügt ?lang=en sicher hinzu

// 3. Setze den Canonical-Link auf die URL der aktuell angezeigten Sprache
$canonical = ($lang === 'en') ? $enHref : $deHref;
?>

<meta property="og:title"        content="<?=htmlspecialchars($d['ogtitle'])?>">
<meta property="og:description"  content="<?=htmlspecialchars($d['ogdescription'])?>">
<meta property="og:type"         content="website">
<meta property="og:url"          content="<?=$canonical?>">
<meta property="og:image"        content="<?=$base?>/Bilder/facebooklook.jpg">
<meta property="og:image:width"  content="1200">
<meta property="og:image:height" content="630">

<meta name="twitter:card"        content="summary_large_image">
<meta name="twitter:site"        content="@FerienwohnungenLut">
<meta name="twitter:creator"     content="@FerienwohnungenLut">
<meta name="twitter:title"       content="<?=htmlspecialchars($d['ogtitle'])?>">
<meta name="twitter:description" content="<?=htmlspecialchars($d['ogdescription'])?>">
<meta name="twitter:image"       content="<?=$base?>/Bilder/facebooklook.jpg">

<link rel="alternate" hreflang="de-AT"     href="<?=$deHref?>">
<link rel="alternate" hreflang="en"        href="<?=$enHref?>">
<link rel="alternate" hreflang="x-default" href="<?=$deHref?>">
<link rel="canonical" href="<?=$canonical?>">

<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">

<link rel="preload"    href="<?=$pre?>lib/css/css-pension.css" as="style">
<link rel="stylesheet" href="<?=$pre?>lib/css/css-pension.css">
<link rel="stylesheet" href="<?=$pre?><?=htmlspecialchars($d['sitecss'])?>" media="screen">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css">

<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type":    "LodgingBusiness",
        "name":     "Ferienwohnungen Luttinger – am Mühlbach",
        "description": "<?=htmlspecialchars($d['description'])?>",
    "url": "<?=$canonical?>",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "Wahl 109",
        "addressLocality": "Bichlbach",
        "postalCode": "6621",
        "addressCountry": "AT"
    },
    "geo": {
        "@type": "GeoCoordinates",
        "latitude": "47.421288",
        "longitude": "10.790438"
    },
    "telephone": "+43 676 953 4130",
    "priceRange": "€€",
    "amenityFeature": [
        { "@type": "LocationFeatureSpecification", "name": "Free WiFi" },
        { "@type": "LocationFeatureSpecification", "name": "Balcony" },
        { "@type": "LocationFeatureSpecification", "name": "Mountain View" }
    ],
    "image": "<?=$base?>/Bilder/facebooklook.jpg",
    "openingHours": "Mo-Su 08:00-22:00",
    "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.8",
        "reviewCount": "45"
    }
}
</script>

<script async src="https://www.googletagmanager.com/gtag/js?id=G-BTEF23Z2R4"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-BTEF23Z2R4');
</script>