<?php include("header.php"); ?>
  <div data-role="page" id="hospital_one" class="global_header">
  <?php include("role-header-pictogram.php"); ?>
    <div data-role="content" class="content">
    <input type="search" name="search-mini" id="search-mini" data-mini="true" autocomplete="off"/>
      <ul class="popup_lv" data-role="listview" data-inset="true">
        <li><a><img src="img/hospital/symptom/head.png"><h3>머리</h3><h3>Head</h3></a></li>
        <li><a><img src="img/hospital/symptom/eye.png"><h3>눈</h3><h3>Eye</h3></a></li>
        <li><a><img src="img/hospital/symptom/nose.png"><h3>코</h3><h3>Nose</h3></a></li>
        <li><a><img src="img/hospital/symptom/mouth.png"><h3>입</h3><h3>Mouth</h3></a></li>
        <li><a><img src="img/hospital/symptom/ear.png"><h3>귀</h3><h3>Ear</h3></a></li>
        <li><a><img src="img/hospital/symptom/necks.png"><h3>목</h3><h3>Neck</h3></a></li>
        <li><a><img src="img/hospital/symptom/shoulder.png"><h3>어깨</h3><h3>Shoulder</h3></a></li>
        <li><a><img src="img/hospital/symptom/waist.png"><h3>허리</h3><h3>Waist</h3></a></li>
        <li><a><img src="img/hospital/symptom/solar plexus.png"><h3>명치</h3><h3>Solar plexus</h3></a></li>
        <li><a><img src="img/hospital/symptom/stomach.png"><h3>배</h3><h3>Stomach</h3></a></li>
        <li><a><img src="img/hospital/symptom/arm.png"><h3>팔</h3><h3>Arm</h3></a></li>
        <li><a><img src="img/hospital/symptom/elbow.png"><h3>팔꿈치</h3><h3>Elbow</h3></a></li>
        <li><a><img src="img/hospital/symptom/wrist.png"><h3>손목</h3><h3>Wrist</h3></a></li>
        <li><a><img src="img/hospital/symptom/hand.png"><h3>손</h3><h3>Hand</h3></a></li>
        <li><a><img src="img/hospital/symptom/lag.png"><h3>다리</h3><h3>Lag</h3></a></li>
        <li><a><img src="img/hospital/symptom/thigh.png"><h3>허벅지</h3><h3>Thigh</h3></a></li>
        <li><a><img src="img/hospital/symptom/knee.png"><h3>무릎</h3><h3>Knee</h3></a></li>
        <li><a><img src="img/hospital/symptom/shin.png"><h3>종아리</h3><h3>Shin</h3></a></li>
        <li><a><img src="img/hospital/symptom/ankle.png"><h3>발목</h3><h3>Ankle</h3></a></li>
        <li><a><img src="img/hospital/symptom/foot.png"><h3>발</h3><h3>Foot</h3></a></li>
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
        </div>
      </ul>
    </div> <!-- content -->
  </div> <!-- page -->
<?php include("footer.php"); ?>
