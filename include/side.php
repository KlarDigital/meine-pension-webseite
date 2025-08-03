<div class="content-wrapper">
  <?php
  $verzeichnis = "https://" . $_SERVER['HTTP_HOST'] . "/";
  $siteurl = $_SERVER['PHP_SELF'];
  // Es wird davon ausgegangen, dass $lang bereits gesetzt ist (z.B. 'de' oder 'en')
  $isEnglish = ($lang == 'en');
  ?>
  <?php if ($isEnglish) { ?>
    <?php if ($siteurl != '/buchen.php') { ?>
      <!-- Englischer Bereich: Reviews, Online booking und Brochure -->
      <div class="content">
        <h4>Reviews</h4>
        <div id="booking">
          <script>
            (function() {
              var randomId = Math.floor(Math.random() * 100000);
              var targetElemId = 'bcom_rwidget_' + randomId;
              document.write('<div id="' + targetElemId + '"></div>');
              var script = document.createElement('script');
              script.type = 'text/javascript';
              script.async = true;
              script.src = 'https://www.booking.com/review_widget/at/pension-am-ma1-4hlbach.de.html?tmpl=review_widget/review_widget&wid=' + targetElemId + '&wtype=box_big&hotel_id=568592&widget_language=en';
              var node = document.getElementsByTagName('script')[0];
              node.parentNode.insertBefore(script, node);
            }());
          </script>
        </div>
        <div class="foot"></div>
      </div>

      <div class="content">
        <h4>Online booking</h4>
        <div class="b24bookingbox">
          <form method="GET" target="_blank" action="https://www.beds24.com/booking.php">
            <table>
              <tr>
                <td>Arrivals</td>
                <td>
                  <select id="fdate242889_date_propid16850" name="fdate_date">
                    <?php for ($i = 1; $i <= 31; $i++): ?>
                      <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php endfor; ?>
                  </select>
                </td>
                <td>
                  <select id="fdate242889_monthyear_propid16850" name="fdate_monthyear">
                    <!-- Fallback-Optionen – das eigentliche Befüllen übernimmt das JavaScript -->
                    <option value="2016-03">Mar 2016</option>
                    <option value="2016-04">Apr 2016</option>
                    <option value="2016-05">May 2016</option>
                    <option value="2016-06">Jun 2016</option>
                    <option value="2016-07">Jul 2016</option>
                    <option value="2016-08">Aug 2016</option>
                    <option value="2016-09">Sep 2016</option>
                    <option value="2016-10">Oct 2016</option>
                    <option value="2016-11">Nov 2016</option>
                    <option value="2016-12">Dec 2016</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>stay</td>
                <td>
                  <select name="numnight">
                    <?php for ($i = 1; $i <= 31; $i++): ?>
                      <option value="<?php echo $i; ?>" <?php if ($i == 3) echo 'selected'; ?>><?php echo $i; ?></option>
                    <?php endfor; ?>
                  </select>
                </td>
                <td>nights</td>
              </tr>
              <tr>
                <td>adult</td>
                <td>
                  <select name="numadult">
                    <?php for ($i = 1; $i <= 12; $i++): ?>
                      <option value="<?php echo $i; ?>" <?php if ($i == 2) echo 'selected'; ?>><?php echo $i; ?></option>
                    <?php endfor; ?>
                  </select>
                </td>
                <td></td>
              </tr>
              <tr>
                <td>children</td>
                <td>
                  <select name="numchild">
                    <?php for ($i = 0; $i <= 12; $i++): ?>
                      <option value="<?php echo $i; ?>" <?php if ($i == 0) echo 'selected'; ?>><?php echo $i; ?></option>
                    <?php endfor; ?>
                  </select>
                </td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td colspan="3">
                  <input type="submit" name="subcheck" class="btn fa-external-link" value="&#xf08e; Book now">
                </td>
              </tr>
            </table>
            <input type="hidden" name="propid" value="16850">
            <input type="hidden" name="subgetdates" value="1">
            <input type="hidden" name="type" value="0">
            <input type="hidden" name="page" value="showprice">
            <input type="hidden" name="referer" value="BookingBox">
          </form>
        </div>
        <script type="text/javascript">
          var dateNow = new Date();
          var dateFirst = new Date();
          dateFirst.setDate(dateFirst.getDate() + 14);
          var numMonths = 24;
          var selectMonth = dateFirst.getMonth() + dateFirst.getYear() * 12 - dateNow.getMonth() - dateNow.getYear() * 12;
          if (selectMonth < 0) { selectMonth = selectMonth + 12; }
          var selectDay = dateFirst.getDate();
          var theList = document.getElementById('fdate242889_monthyear_propid16850');
          var theDayList = document.getElementById('fdate242889_date_propid16850');
          var len = theList.length;
          var i;
          for (i = len; i >= 0; i--) { theList.options[i] = null; }
          var dateNow = new Date();
          var monthNow = dateNow.getMonth() + 1;
          var yearNow = dateNow.getFullYear();
          var monthName = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
          var thisYear = yearNow;
          var thisMonth = monthNow;
          for (i = 0; i < numMonths; i++) {
            if (thisMonth > 12) { thisMonth = 1; thisYear++; }
            var thisMonthLead = (thisMonth < 10) ? '0' + thisMonth : thisMonth;
            theList.options[i] = new Option(monthName[thisMonth - 1] + ' ' + thisYear, thisYear + '-' + thisMonthLead);
            if (i == selectMonth) { theList.options[i].selected = true; }
            thisMonth++;
          }
          theDayList.options[selectDay - 1].selected = true;
        </script>
        <div class="foot"></div>
      </div>
      <div class="content">
        <h4>Brochure</h4>
        <a href="<?php echo $verzeichnis; ?>download/adobe.php" title="Our Brochure">
          <img class="contentimg" src="<?php echo $verzeichnis; ?>Bilder/prospekt.jpg" alt="Brochure" width="160" height="100" title="Current Brochure">
        </a>
        <div class="foot"></div>
      </div>
    <?php } ?>
  <?php } else { ?>
    <!-- Deutscher Bereich -->
    <div class="content">
      <h4>Bewertungen</h4>
      <div id="booking">
        <script>
          (function(){
            var randomId = Math.floor(Math.random() * 100000);
            var targetElemId = 'bcom_rwidget_' + randomId;
            document.write('<div id="' + targetElemId + '"></div>');
            var script = document.createElement('script');
            script.type = 'text/javascript';
            script.async = true;
            script.src = 'https://www.booking.com/review_widget/at/pension-am-ma1-4hlbach.de.html?tmpl=review_widget/review_widget&wid=' + targetElemId + '&wtype=box_big&hotel_id=568592&widget_language=de';
            var node = document.getElementsByTagName('script')[0];
            node.parentNode.insertBefore(script, node);
          }());
        </script>
      </div>
      <div class="foot"></div>
    </div>
    <?php if ($siteurl != '/buchen.php') { ?>
      <div class="content">
        <h4>Online Buchen</h4>
        <div class="b24bookingbox">
          <form method="GET" target="_blank" action="https://www.beds24.com/booking.php">
            <table>
              <tr>
                <td>Ankunft</td>
                <td>
                  <select id="fdate242889_date_propid16850" name="fdate_date">
                    <?php for ($i = 1; $i <= 31; $i++): ?>
                      <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php endfor; ?>
                  </select>
                </td>
                <td>
                  <select id="fdate242889_monthyear_propid16850" name="fdate_monthyear">
                    <!-- Fallback-Optionen – die JS-Funktion füllt die Liste -->
                    <option value="2016-03">Mär 2016</option>
                    <option value="2016-04">Apr 2016</option>
                    <option value="2016-05">Mai 2016</option>
                    <option value="2016-06">Jun 2016</option>
                    <option value="2016-07">Jul 2016</option>
                    <option value="2016-08">Aug 2016</option>
                    <option value="2016-09">Sep 2016</option>
                    <option value="2016-10">Okt 2016</option>
                    <option value="2016-11">Nov 2016</option>
                    <option value="2016-12">Dez 2016</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>Aufenthalt</td>
                <td>
                  <select name="numnight">
                    <?php for ($i = 1; $i <= 31; $i++): ?>
                      <option value="<?php echo $i; ?>" <?php if ($i == 3) echo 'selected'; ?>><?php echo $i; ?></option>
                    <?php endfor; ?>
                  </select>
                </td>
                <td>Nächte</td>
              </tr>
              <tr>
                <td>Erwachsene</td>
                <td>
                  <select name="numadult">
                    <?php for ($i = 1; $i <= 12; $i++): ?>
                      <option value="<?php echo $i; ?>" <?php if ($i == 2) echo 'selected'; ?>><?php echo $i; ?></option>
                    <?php endfor; ?>
                  </select>
                </td>
                <td></td>
              </tr>
              <tr>
                <td>Kinder</td>
                <td>
                  <select name="numchild">
                    <?php for ($i = 0; $i <= 12; $i++): ?>
                      <option value="<?php echo $i; ?>" <?php if ($i == 0) echo 'selected'; ?>><?php echo $i; ?></option>
                    <?php endfor; ?>
                  </select>
                </td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td colspan="3">
                  <input type="submit" name="subcheck" class="btn fa-external-link" value="&#xf08e; Jetzt Buchen">
                </td>
              </tr>
            </table>
            <input type="hidden" name="propid" value="16850">
            <input type="hidden" name="subgetdates" value="1">
            <input type="hidden" name="type" value="0">
            <input type="hidden" name="page" value="showprice">
            <input type="hidden" name="referer" value="BookingBox">
          </form>
        </div>
        <script type="text/javascript">
          var dateNow = new Date();
          var dateFirst = new Date();
          dateFirst.setDate(dateFirst.getDate() + 14);
          var numMonths = 24;
          var selectMonth = dateFirst.getMonth() + dateFirst.getYear() * 12 - dateNow.getMonth() - dateNow.getYear() * 12;
          if (selectMonth < 0) { selectMonth = selectMonth + 12; }
          var selectDay = dateFirst.getDate();
          var theList = document.getElementById('fdate242889_monthyear_propid16850');
          var theDayList = document.getElementById('fdate242889_date_propid16850');
          var len = theList.length;
          var i;
          for (i = len; i >= 0; i--) { theList.options[i] = null; }
          var dateNow = new Date();
          var monthNow = dateNow.getMonth() + 1;
          var yearNow = dateNow.getFullYear();
          var monthName = ['Jan','Feb','Mär','Apr','Mai','Jun','Jul','Aug','Sep','Okt','Nov','Dez'];
          var thisYear = yearNow;
          var thisMonth = monthNow;
          for (i = 0; i < numMonths; i++) {
            if (thisMonth > 12) { thisMonth = 1; thisYear++; }
            var thisMonthLead = (thisMonth < 10) ? '0' + thisMonth : thisMonth;
            theList.options[i] = new Option(monthName[thisMonth - 1] + ' ' + thisYear, thisYear + '-' + thisMonthLead);
            if (i == selectMonth) { theList.options[i].selected = true; }
            thisMonth++;
          }
          theDayList.options[selectDay - 1].selected = true;
        </script>
        <div class="foot"></div>
      </div>
      <div class="content">
        <h4>Prospekt</h4>
        <a href="<?php echo $verzeichnis; ?>download/adobe.php" title="Unser Hausprospekt">
          <img class="contentimg" src="<?php echo $verzeichnis; ?>Bilder/prospekt.jpg" alt="Prospekt" width="160" height="100" title="Aktuelles Prospekt">
        </a>
        <div class="foot"></div>
      </div>
    <?php } ?>
  <?php } ?>
</div>
