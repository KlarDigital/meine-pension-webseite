<?php include('include/sprache-index.php'); ?>
<!doctype html>
<html class="no-js" lang="<?php echo $lang; ?>">
<head>
    <?php include ('include/meta.php'); ?>
</head>

<body>
<header>
    <?php include ('include/head.php'); ?>
</header>

<div id="slider">
    <div id="sliderinhalt">
        <div id="slides">
            <?php
            $m = date('m');
            $endemonat   = 3;
            $anfangmonat = 11;
            if ($m <= $endemonat || $m >= $anfangmonat) {
                ?>
                <div class="slide"><img src="Bilder/panorama/skifahren.jpg" alt="<?php echo htmlspecialchars($content[$lang]['alt_ski']); ?>" title="<?php echo htmlspecialchars($content[$lang]['title_ski']); ?>" width="960" height="381"><div class="caption"><span><strong><?php echo $content[$lang]['slider_w1_h']; ?></strong></span><p><?php echo $content[$lang]['slider_w1_p']; ?></p></div></div>
                <div class="slide"><img src="Bilder/panorama/langlauf.jpg" alt="<?php echo htmlspecialchars($content[$lang]['alt_langlauf']); ?>" title="<?php echo htmlspecialchars($content[$lang]['title_langlauf']); ?>" width="960" height="381"><div class="caption"><span><strong><?php echo $content[$lang]['slider_w2_h']; ?></strong></span><p><?php echo $content[$lang]['slider_w2_p']; ?></p></div></div>
                <div class="slide"><img src="Bilder/panorama/rodeln.jpg" alt="<?php echo htmlspecialchars($content[$lang]['alt_rodeln']); ?>" title="<?php echo htmlspecialchars($content[$lang]['title_rodeln']); ?>" width="960" height="381"><div class="caption"><span><strong><?php echo $content[$lang]['slider_w3_h']; ?></strong></span><p><?php echo $content[$lang]['slider_w3_p']; ?></p></div></div>
                <div class="slide"><img src="Bilder/panorama/schneewandern.jpg" alt="<?php echo htmlspecialchars($content[$lang]['alt_schneewandern']); ?>" title="<?php echo htmlspecialchars($content[$lang]['title_schneewandern']); ?>" width="960" height="381"><div class="caption"><span><strong><?php echo $content[$lang]['slider_w4_h']; ?></strong></span><p><?php echo $content[$lang]['slider_w4_p']; ?></p></div></div>
            <?php } else { ?>
                <div class="slide"><img src="Bilder/panorama/wandern.jpg" alt="<?php echo htmlspecialchars($content[$lang]['alt_wandern']); ?>" title="<?php echo htmlspecialchars($content[$lang]['title_wandern']); ?>" width="960" height="381"><div class="caption"><span><strong><?php echo $content[$lang]['slider_s1_h']; ?></strong></span><p><?php echo $content[$lang]['slider_s1_p']; ?></p></div></div>
                <div class="slide"><img src="Bilder/panorama/bike.jpg" alt="<?php echo htmlspecialchars($content[$lang]['alt_bike']); ?>" title="<?php echo htmlspecialchars($content[$lang]['title_bike']); ?>" width="960" height="381"><div class="caption"><span><strong><?php echo $content[$lang]['slider_s2_h']; ?></strong></span><p><?php echo $content[$lang]['slider_s2_p']; ?></p></div></div>
                <div class="slide"><img src="Bilder/panorama/baden.jpg" alt="<?php echo htmlspecialchars($content[$lang]['alt_baden']); ?>" title="<?php echo htmlspecialchars($content[$lang]['title_baden']); ?>" width="960" height="381"><div class="caption"><span><strong><?php echo $content[$lang]['slider_s3_h']; ?></strong></span><p><?php echo $content[$lang]['slider_s3_p']; ?></p></div></div>
                <div class="slide"><img src="Bilder/panorama/highline179-ehrenberg.jpg" alt="<?php echo htmlspecialchars($content[$lang]['alt_highline']); ?>" title="<?php echo htmlspecialchars($content[$lang]['title_highline']); ?>" width="960" height="381"><div class="caption"><span><strong><?php echo $content[$lang]['slider_s4_h']; ?></strong></span><p><?php echo $content[$lang]['slider_s4_p']; ?></p></div></div>
                <div class="slide"><img src="Bilder/panorama/neuschwanstein.jpg" alt="<?php echo htmlspecialchars($content[$lang]['alt_neuschw']); ?>" title="<?php echo htmlspecialchars($content[$lang]['title_neuschw']); ?>" width="960" height="381"><div class="caption"><span><strong><?php echo $content[$lang]['slider_s5_h']; ?></strong></span><p><?php echo $content[$lang]['slider_s5_p']; ?></p></div></div>
                <div class="slide"><img src="Bilder/panorama/sonnenaufgangsfahrt-zugspitzbahn.jpg" alt="<?php echo htmlspecialchars($content[$lang]['alt_zugbahn']); ?>" title="<?php echo htmlspecialchars($content[$lang]['title_zugbahn']); ?>" width="960" height="381"><div class="caption"><span><strong><?php echo $content[$lang]['slider_s6_h']; ?></strong></span><p><?php echo $content[$lang]['slider_s6_p']; ?></p></div></div>
            <?php } ?>
        </div>
    </div>
</div>

<nav id="mainmenu" class="mainmenu">
    <?php include('include/nav.php'); ?>
</nav>

<main id="content">
    <div class="contentinhalt">
        <article>
            <section>
                <h1><?php echo $content[$lang]['headline_main']; ?></h1>
                <figure>
                    <a href="zimmer-wohnung.php" title="<?php echo htmlspecialchars($content[$lang]['title_pension']); ?>">
                        <?php /* KORREKTUR: loading="lazy" hinzugefügt */ ?>
                        <img loading="lazy" src="Bilder/pension-luttinger-bichlbach-kohlberg.jpg" alt="<?php echo htmlspecialchars($content[$lang]['alt_pension']); ?>" title="<?php echo htmlspecialchars($content[$lang]['title_pension']); ?>" width="280" height="206">
                    </a>
                    <figcaption><?php echo $content[$lang]['figc_pension']; ?></figcaption>
                </figure>
                <p><?php echo $content[$lang]['intro_p1']; ?></p>
                <ul>
                    <li><?php echo $content[$lang]['intro_list_li1']; ?></li>
                    <li><?php echo $content[$lang]['intro_list_li2']; ?></li>
                    <li><?php echo $content[$lang]['intro_list_li3']; ?></li>
                    <li><?php echo $content[$lang]['intro_list_li4']; ?></li>
                    <li><?php echo $content[$lang]['intro_list_li5']; ?></li>
                    <li><?php echo $content[$lang]['intro_list_li6']; ?></li>
                    <li><?php echo $content[$lang]['intro_list_li7']; ?></li>
                </ul>
                <p><?php echo $content[$lang]['intro_p2']; ?></p>
                <p><?php echo $content[$lang]['intro_p3']; ?></p>
                <div class="buttoncontainer">
                    <a class="button" href="kontakt.php#anfrage" title="<?php echo htmlspecialchars($content[$lang]['btn_anfragen']); ?>"><?php echo $content[$lang]['btn_anfragen']; ?></a>
                    <a class="button" href="buchen.php" title="<?php echo htmlspecialchars($content[$lang]['btn_buchen']); ?>"><?php echo $content[$lang]['btn_buchen']; ?></a>
                </div>
            </section>

            <section class="angebote-kacheln">
                <h2><?php echo $content[$lang]['offers_h2']; ?></h2>
                <p><?php echo $content[$lang]['offers_p']; ?></p>
                <div class="kachel-container">
                    <a class="kachel" href="zimmer-wohnung.php" title="<?php echo htmlspecialchars($content[$lang]['offers_kachel1_h3']); ?>">
                        <figure class="kachel-inhalt">
                            <?php /* KORREKTUR: loading="lazy" hinzugefügt */ ?>
                            <img loading="lazy" src="Bilder/wohnung1/ferw1wonraum3.JPG" alt="<?php echo htmlspecialchars($content[$lang]['offers_kachel1_h3']); ?>" width="280" height="180">
                            <figcaption><h3><?php echo $content[$lang]['offers_kachel1_h3']; ?></h3><p><?php echo $content[$lang]['offers_kachel1_p']; ?></p></figcaption>
                        </figure>
                    </a>
                    <a class="kachel" href="https://beds24.com/booking.php?propid=16850&referer=BookingLink" title="<?php echo htmlspecialchars($content[$lang]['offers_kachel2_h3']); ?>" target="_blank" rel="noopener">
                        <figure class="kachel-inhalt">
                            <?php /* KORREKTUR: loading="lazy" hinzugefügt */ ?>
                            <img loading="lazy" src="<?php echo ($m <= $endemonat || $m >= $anfangmonat) ? 'Bilder/unser-haus/pension-luttinger-bichlbach-winter-thump.jpg' : 'Bilder/unser-haus/20230709_pension_luttinger-sommer.jpg'; ?>" alt="<?php echo htmlspecialchars($content[$lang]['offers_kachel2_h3']); ?>" width="280" height="180">
                            <figcaption><h3><?php echo $content[$lang]['offers_kachel2_h3']; ?></h3><p><?php echo $content[$lang]['offers_kachel2_p']; ?></p></figcaption>
                        </figure>
                    </a>
                    <a class="kachel" href="aktivitaeten.php" title="<?php echo htmlspecialchars($content[$lang]['offers_kachel3_h3']); ?>">
                        <figure class="kachel-inhalt">
                            <?php /* KORREKTUR: loading="lazy" hinzugefügt */ ?>
                            <img loading="lazy" src="<?php echo ($m <= $endemonat || $m >= $anfangmonat) ? 'Bilder/zugspitzarena/winter/skifahren2-thump.jpg' : 'Bilder/zugspitzarena/sommer/wandern-zugspitzarena.jpg'; ?>" alt="<?php echo htmlspecialchars($content[$lang]['offers_kachel3_h3']); ?>" width="280" height="180">
                            <figcaption><h3><?php echo $content[$lang]['offers_kachel3_h3']; ?></h3><p><?php echo $content[$lang]['offers_kachel3_p']; ?></p></figcaption>
                        </figure>
                    </a>
                    <a class="kachel" href="inklusivleistungen.php" title="<?php echo htmlspecialchars($content[$lang]['offers_kachel4_h3']); ?>">
                        <figure class="kachel-inhalt">
                            <?php /* KORREKTUR: loading="lazy" hinzugefügt */ ?>
                            <img loading="lazy" src="Bilder/unser-haus/garten-teich-haus.jpg" alt="<?php echo htmlspecialchars($content[$lang]['offers_kachel4_h3']); ?>" width="280" height="180">
                            <figcaption><h3><?php echo $content[$lang]['offers_kachel4_h3']; ?></h3><p><?php echo $content[$lang]['offers_kachel4_p']; ?></p></figcaption>
                        </figure>
                    </a>
                </div>
            </section>

            <section class="direktbuchung-hinweis">
                <h2><?php echo $content[$lang]['bestprice_h2']; ?></h2>
                <figure>
                    <?php /* KORREKTUR: loading="lazy" hinzugefügt */ ?>
                    <img loading="lazy" src="Bilder/wohnung6/ferienwohnung4_schlafzimmer_thumb.jpg" alt="<?php echo htmlspecialchars($content[$lang]['bestprice_h2']); ?>" width="300" height="200">
                </figure>
                <p><?php echo $content[$lang]['bestprice_p1']; ?></p>
                <ul>
                    <li><?php echo $content[$lang]['bestprice_ul'][0]; ?></li>
                    <li><?php echo $content[$lang]['bestprice_ul'][1]; ?></li>
                    <li><?php echo $content[$lang]['bestprice_ul'][2]; ?></li>
                </ul>
                <p><?php echo $content[$lang]['bestprice_note']; ?></p>
                <div class="buttoncontainer">
                    <a class="button" href="kontakt.php#anfrage" title="<?php echo htmlspecialchars($content[$lang]['bestprice_btn1']); ?>"><?php echo $content[$lang]['bestprice_btn1']; ?></a>
                    <a class="button" href="buchen.php" title="<?php echo htmlspecialchars($content[$lang]['bestprice_btn2']); ?>"><?php echo $content[$lang]['bestprice_btn2']; ?></a>
                </div>
            </section>

            <section>
                <h2><?php echo $content[$lang]['hund_headline']; ?></h2>
                <figure>
                    <?php /* KORREKTUR: loading="lazy" hinzugefügt */ ?>
                    <img loading="lazy" src="Bilder/wandern-hund-familie.jpg" alt="<?php echo htmlspecialchars($content[$lang]['hund_alt']); ?>" title="<?php echo htmlspecialchars($content[$lang]['hund_title']); ?>" width="400" height="267">
                </figure>
                <p><?php echo nl2br($content[$lang]['hund_p1']); ?></p>
                <h3><?php echo $content[$lang]['hund_h3_warum']; ?></h3>
                <h4><?php echo $content[$lang]['hund_h3_lage']; ?></h4>
                <p><?php echo $content[$lang]['hund_p_lage']; ?></p>
                <h4><?php echo $content[$lang]['hund_h3_zuhause']; ?></h4>
                <p><?php echo $content[$lang]['hund_p_zuhause']; ?></p>
                <h4><?php echo $content[$lang]['hund_h3_sicherheit']; ?></h4>
                <p><?php echo $content[$lang]['hund_p_sicherheit']; ?></p>
                <p><strong><?php echo $content[$lang]['hund_p_abschluss']; ?></strong></p>
            </section>

            <section class="trustindex-widget">
                <script defer async src='https://cdn.trustindex.io/loader.js?557a01645f99690b881635a29b2'></script>
            </section>

        </article>
        <aside>
            <?php include('include/side.php'); ?>
        </aside>
    </div>
</main>

<footer>
    <?php include('include/footer.php'); ?>
</footer>

<?php include('include/javainclude.php'); ?>
</body>
</html>