<?php include("header.php"); ?>
  <div data-role="page" id="hospital_two" class="global_header">
  <?php include("role-header-pictogram.php"); ?>
    <div data-role="content" class="content">
      <ul class="popup_lv" data-role="listview" data-inset="true">
        <li><a><img src="img/hospital/emoji_number/emoji1.png"><h3>약한 통증</h3><h3>Slight pain</h3></a></li>
        <li><a><img src="img/hospital/emoji_number/emoji2.png"><h3>보통 통증</h3><h3>Moderater pain</h3></a></li>
        <li><a><img src="img/hospital/emoji_number/emoji3.png"><h3>심한 통증</h3><h3>Severe pain</h3></a></li>
        <li><a><img src="img/hospital/emoji_number/emoji4.png"><h3>아주 심한 통증</h3><h3>Very severe pain</h3></a></li>
        <li><a><img src="img/hospital/emoji_number/emoji5.png"><h3>최악의 통증</h3><h3>Excruciating pain</h3></a></li>
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