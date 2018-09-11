<?php include("header.php"); ?>
  <div data-role="page" id="pharmacy" class="global_header">
  <?php include("role-header-pictogram.php"); ?>
    <div data-role="content" class="content">
    <input type="search" name="search-mini" id="search-mini" data-mini="true" autocomplete="off"/>
      <ul class="popup_lv" data-role="listview" data-inset="true">
        <li><a><img src="img/pharmacy/cold.png"><h3>감기약</h3><h3>Cold medicine</h3></a></li>
        <li><a><img src="img/pharmacy/thermometer.png"><h3>해열제</h3><h3>Fever reducer</h3></a></li>
        <li><a><img src="img/pharmacy/gum.png"><h3>잇몸약</h3><h3>Gum disease medicine</h3></a></li>
        <li><a><img src="img/pharmacy/pas.png"><h3>파스</h3><h3>Patch</h3></a></li>
        <li><a><img src="img/pharmacy/esophagus.png"><h3>소화제</h3><h3>Digestive medicine</h3></a></li>
        <li><a><img src="img/pharmacy/puke.png"><h3>멀미약</h3><h3>Motion sickness medicine</h3></a></li>
        <li><a><img src="img/pharmacy/poop.png"><h3>지사제</h3><h3>Anti diarrheal</h3></a></li>
        <li><a><img src="img/pharmacy/constipation.png"><h3>변비약</h3><h3>Constipation medicine</h3></a></li>
        <li><a><img src="img/pharmacy/foot.png"><h3>무좀약</h3><h3>Athlete's foot cream</h3></a></li>
        <li><a><img src="img/pharmacy/finger.png"><h3>상처연고</h3><h3>First aid antibiotic ointment</h3></a></li>
        <li><a><img src="img/pharmacy/bandage.png"><h3>밴드</h3><h3>Bandage</h3></a></li>
        <li><a><img src="img/pharmacy/vitamin-c.png"><h3>비타민</h3><h3>vitamin</h3></a></li>
        <li><a><img src="img/pharmacy/zzz.png"><h3>수면제</h3><h3>Sleep Aids</h3></a></li>
        <li><a><img src="img/pharmacy/eye-drops.png"><h3>안약</h3><h3>Eye drop</h3></a></li>
        <li><a><img src="img/pharmacy/eye.png"><h3>렌즈 세정제</h3><h3>Contact lens solution</h3></a></li>
        <li><a><img src="img/pharmacy/inhaler.png"><h3>물파스</h3><h3>Insect sting relief</h3></a></li>
        <li><a><img src="img/pharmacy/compress.png"><h3>생리대</h3><h3>Sanitary napkin</h3></a></li>
        <li><a><img src="img/pharmacy/tampon.png"><h3>탐폰</h3><h3>Tampon</h3></a></li>
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
