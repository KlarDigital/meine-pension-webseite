<?php
$domainname = $_SERVER['SERVER_NAME'];
$language = (strpos($_SERVER['REQUEST_URI'], '/en/') !== false) ? 'en' : 'de';
$current_page = basename($_SERVER['PHP_SELF']);
?>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" defer></script>

<!-- Hauptskript -->
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js" defer></script>
<script src="/lib/scripts/main.js" defer></script>

<!-- Slides Skript nur auf der Startseite -->
<?php if ($current_page == 'index.php') : ?>
  <script src="/lib/scripts/slides.jquery.js" defer></script>
<?php endif; ?>