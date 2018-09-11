<?php include("header.php"); ?>
  <div data-role="page" id="hospital_five" class="global_header">
  <?php include("role-header-pictogram.php"); ?>
    <div data-role="content" class="content">
    <input type="search" name="search-mini" id="search-mini" data-mini="true" autocomplete="off"/>
      <ul class="popup_lv" data-role="listview" data-inset="true">
        <li><a><img src="img/hospital/symptom/cold.png"><h3>콧물</h3><h3>Runny nose</h3></a></li>
        <li><a><img src="img/hospital/symptom/cough.png"><h3>기침</h3><h3>Cough</h3></a></li>
        <li><a><img src="img/hospital/symptom/breath.png"><h3>호흡곤란</h3><h3>Difficulty in breathing</h3></a></li>
        <li><a><img src="img/hospital/symptom/dizziness.png"><h3>현기증</h3><h3>Dizziness</h3></a></li>
        <li><a><img src="img/hospital/symptom/fever.png"><h3>발열</h3><h3>Fever</h3></a></li>
        <li><a><img src="img/hospital/symptom/headache.png"><h3>두통</h3><h3>Headache</h3></a></li>
        <li><a><img src="img/hospital/symptom/nausea.png"><h3>구토</h3><h3>Nausea</h3></a></li>
        <li><a><img src="img/hospital/symptom/neck.png"><h3>인후통</h3><h3>Sore throat</h3></a></li>
        <li><a><img src="img/hospital/symptom/allergy.png"><h3>알레르기</h3><h3>Allergy</h3></a></li>
        <li><a><img src="img/hospital/symptom/cramps.png"><h3>생리통</h3><h3>period pains</h3></a></li>
        <li><a><img src="img/hospital/symptom/bruise.png"><h3>타박상</h3><h3>Bruise</h3></a></li>
        <li><a><img src="img/hospital/symptom/sprain.png"><h3>염좌</h3><h3>Sprain</h3></a></li>
        <li><a><img src="img/hospital/symptom/diarrhea.png"><h3>설사</h3><h3>Diarrhea</h3></a></li>
        <li><a><img src="img/hospital/symptom/bloody.png"><h3>혈변</h3><h3>Bloody stool</h3></a></li>
        <li><a><img src="img/hospital/symptom/tooth.png"><h3>치통</h3><h3>Toothache</h3></a></li>
        <li><a><img src="img/hospital/symptom/indigestion.png"><h3>소화불량</h3><h3>Indigestion</h3></a></li>
        <li><a><img src="img/hospital/symptom/brash.png"><h3>속쓰림</h3><h3>Heartburn</h3></a></li>
        <li><a><img src="img/hospital/symptom/gastritis.png"><h3>위염</h3><h3>Gastritis</h3></a></li>
        <li><a><img src="img/hospital/symptom/heart.png"><h3>심장이 빨리 뜀</h3><h3>Fast heart rate</h3></a></li>
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
    </div> <!-- content -->
  </div> <!-- page -->
<?php include("footer.php"); ?>
