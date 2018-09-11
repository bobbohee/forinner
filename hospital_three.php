<?php include("header.php"); ?>
  <div data-role="page" id="hospital_three" class="global_header">
  <?php include("role-header-pictogram.php"); ?>
    <div data-role="content" class="content">
    <input type="search" name="search-mini" id="search-mini" data-mini="true" autocomplete="off"/>
      <ul class="popup_lv" data-role="listview" data-inset="true">
        <li><a><img src="img/hospital/symptom/sharp.png"><h3>예리하게 찌르는</h3><h3>Sharp pain</h3></a></li>
        <li><a><img src="img/hospital/symptom/throbing.png"><h3>욱신욱신</h3><h3>Throbing pain</h3></a></li>
        <li><a><img src="img/hospital/symptom/dull.png"><h3>묵직하게 아픈</h3><h3>Dull pain</h3></a></li>
        <li><a><img src="img/hospital/symptom/burning.png"><h3>화끈거리는</h3><h3>Burning pain</h3></a></li>
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