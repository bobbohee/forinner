<?php include("header.php"); ?>
  <div data-role="page" id="hospital_four" class="global_header">
  <?php include("role-header-pictogram.php"); ?>
    <div data-role="content" class="content">
    <input type="search" name="search-mini" id="search-mini" data-mini="true" autocomplete="off"/>
      <ul class="popup_lv" data-role="listview" data-inset="true">
        <li>
          <img src="img/hospital/emoji_number/clock.png">
          <div data-role="fieldcontain">
            <select name="select-choice-1" id="select-choice-1">
              <option value="time">hours ago</option>
              <option value="time">1 hour ago</option>
              <option value="time">2 hour ago</option>
              <option value="time">3 hour ago</option>
              <option value="time">4 hour ago</option>
              <option value="time">5 hour ago</option>
              <option value="time">6 hour ago</option>
              <option value="time">7 hour ago</option>
              <option value="time">8 hour ago</option>
              <option value="time">9 hour ago</option>
              <option value="time">10 hour ago</option>
              <option value="time">11 hour ago</option>
              <option value="time">12 hour ago</option>
              <option value="time">13 hour ago</option>
              <option value="time">14 hour ago</option>
              <option value="time">15 hour ago</option>
              <option value="time">16 hour ago</option>
              <option value="time">17 hour ago</option>
              <option value="time">18 hour ago</option>
              <option value="time">19 hour ago</option>
              <option value="time">20 hour ago</option>
              <option value="time">21 hour ago</option>
              <option value="time">22 hour ago</option>
              <option value="time">23 hour ago</option>
              <option value="time">24 hour ago</option>
            </select>
          </div>
        </li>
        <li>
          <img src="img/hospital/emoji_number/calendar.png">
            <div data-role="fieldcontain">
              <select name="select-choice-1" id="select-choice-1">
                <option value="day">days ago</option>
                <option value="day">1 day ago</option>
                <option value="day">2 day ago</option>
                <option value="day">3 day ago</option>
                <option value="day">4 day ago</option>
                <option value="day">5 day ago</option>
                <option value="day">6 day ago</option>
                <option value="day">7 day ago</option>
                <option value="day">10 day ago</option>
                <option value="day">14 day ago</option>
                <option value="day">21 day ago</option>
                <option value="day">28 day ago</option>
                <option value="day">30 day ago</option>
              </select>
            </div>
        </li>
        <li><a><img src="img/hospital/emoji_number/sad.png"><h3>간혈적으로</h3><h3>Occasionally</h3></a></li>
        <li><a><img src="img/hospital/emoji_number/crying.png"><h3>지속적으로</h3><h3>Continuously</h3></a></li>
        <div data-role="popup" id="popupBasic" data-position-to="window" data-overlay-theme="b">
          <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right"></a>
          <img class="msg_img" src="" width="180" height="180">
          <div class="popup_msg">
            <h4 class="msg_ko"></h4>
            <h4 class="msg_en"></h4>
          </div>
          <div class="popup_speak">
            <img src="img/icon/speaker.png" width="40" height="40">
          </div>
        </div> <!-- popup --> 
      </ul>
      <div class="hide"></div>
    </div> <!-- content -->
  </div> <!-- page -->
<?php include("footer.php"); ?>
