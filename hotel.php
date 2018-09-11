<?php include("header.php"); ?>
  <div data-role="page" id="hotel" class="global_header">
  <?php include("role-header-pictogram.php"); ?>
    <div data-role="content" class="content">
    <input type="search" name="search-mini" id="search-mini" data-mini="true" autocomplete="off"/>
      <ul class="popup_lv" data-role="listview" data-inset="true">
        <li><a><img src="img/hotel/air.png"><h3>에어컨 틀어주세요.</h3><h3>Please turn on the air conditioner.</h3></a></li>
        <li><a><img src="img/hotel/heater.png"><h3>히터 틀어주세요.</h3><h3>Please turn on the heater.</h3></a></li>
        <li><a><img src="img/hotel/ice.png"><h3>온도를 높여주세요.</h3><h3>Please raise the temperature.</h3></a></li>
        <li><a><img src="img/hotel/hot.png"><h3>온도를 낮춰주세요.</h3><h3>Please lower the temperature.</h3></a></li>
        <li><a><img src="img/hotel/toilet.png"><h3>변기가 막혔습니다.</h3><h3>My toilet is clogged.</h3></a></li>
        <li><a><img src="img/hotel/towel.png"><h3>수건이 어디있나요?</h3><h3>Where is the towel?</h3></a></li>
        <li><a><img src="img/hotel/paper.png"><h3>휴지가 없습니다.</h3><h3>There is no toilet paper.</h3></a></li>
        <li><a><img src="img/hotel/tap.png"><h3>뜨거운 물이 나오지 않습니다.</h3><h3>There's no hot water.</h3></a></li>
        <li><a><img src="img/hotel/shower.png"><h3>샤워기에서 물이 안 나옵니다.</h3><h3>There's no water coming out of the shower.</h3></a></li>
        <li><a><img src="img/hotel/dryer.png"><h3>드라이기는 어디있나요?</h3><h3>Where is the hair dryer?</h3></a></li>
        <li><a><img src="img/hotel/kettle.png"><h3>전기 주전자가 필요합니다.</h3><h3>There's no water coming out of the shower.</h3></a></li>
        <li><a><img src="img/hotel/tv.png"><h3>TV가 켜지지 않습니다.</h3><h3>The TV won't turn on.</h3></a></li>
        <li><a><img src="img/hotel/wifi.png"><h3>방에 와이파이가 되나요?</h3><h3>Is there WIFI in the room?</h3></a></li>
        <li><a><img src="img/hotel/crib.png"><h3>아기 침대가 있나요?</h3><h3>Do you have a crib?</h3></a></li>
        <li><a><img src="img/hotel/key.png"><h3>방 열쇠를 잃어버렸습니다.</h3><h3>I lost my room key.</h3></a></li>
        <li><a><img src="img/hotel/washer.png"><h3>세탁실이 어디있나요?</h3><h3>Where is the laundry room?</h3></a></li>
        <li><a><img src="img/hotel/suitcase.png"><h3>수하물 보관소는 어디있나요?</h3><h3>I lost my room key?</h3></a></li>
        <li><a><img src="img/hotel/cigarette.png"><h3>흡연실이 어디있나요?</h3><h3>Where is the smoking room?</h3></a></li>
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