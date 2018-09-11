<?php include("header.php"); ?>
  <div data-role="page" id="location" class="global_header">
  <?php include("role-header-pictogram.php"); ?>
    <div data-role="content" class="content">
    <input type="search" name="search-mini" id="search-mini" data-mini="true" autocomplete="off"/>
      <ul class="popup_lv" data-role="listview" data-inset="true">
        <li><a><img src="img/location/airport.png"><h3>공항은 어디 있나요?</h3><h3>Where is the airport?</h3></a></li>
        <li><a><img src="img/location/transfer.png"><h3>비행기 환승하는 곳은 어디 있나요?</h3><h3>Where can I transfer my plane?</h3></a></li>
        <li><a><img src="img/location/luggage.png"><h3>수화물 찾는 곳은 어디 있나요?</h3><h3>Where is the baggage claim area?</h3></a></li>
        <li><a><img src="img/location/office.png"><h3>매표소는 어디 있나요?</h3><h3>Where is the ticket office?</h3></a></li>
        <li><a><img src="img/location/bus.png"><h3>버스 정류장은 어디 있나요?</h3><h3>Where is the bus stop?</h3></a></li>
        <li><a><img src="img/location/taxi.png"><h3>택시 타는 곳은 어디 있나요?</h3><h3>Where is the taxi stand?</h3></a></li>
        <li><a><img src="img/location/subway.png"><h3>지하철역은 어디 있나요?</h3><h3>Where is the subway station?</h3></a></li>
        <li><a><img src="img/location/train.png"><h3>기차역은 어디 있나요?</h3><h3>Where is the train station?</h3></a></li>
        <li><a><img src="img/location/transport.png"><h3>열차 환승하는 곳은 어디 있나요?</h3><h3>Where is the train transfer?</h3></a></li>
        <li><a><img src="img/location/gas.png"><h3>주유소는 어디 있나요?</h3><h3>Where is the gas station?</h3></a></li>
        <li><a><img src="img/location/information.png"><h3>관광안내소는 어디 있나요?</h3><h3>Where is the tourist information office?</h3></a></li>
        <li><a><img src="img/location/policeman.png"><h3>경찰서는 어디 있나요?</h3><h3>Where is the police station?</h3></a></li>
        <li><a><img src="img/location/pharmacy.png"><h3>약국은 어디 있나요?</h3><h3>Where is the pharmacy?</h3></a></li>
        <li><a><img src="img/location/hospital.png"><h3>병원은 어디 있나요?</h3><h3>Where is the hospital?</h3></a></li>
        <li><a><img src="img/location/hotel.png"><h3>호텔은 어디 있나요?</h3><h3>Where is the hotel?</h3></a></li>
        <li><a><img src="img/location/food.png"><h3>식당은 어디인가요?</h3><h3>Where is the restaurant?</h3></a></li>
        <li><a><img src="img/location/bathroom.png"><h3>화장실은 어디 있나요?</h3><h3>Where is the restroom?</h3></a></li>
        <li><a><img src="img/location/basket.png"><h3>슈퍼마켓은 어디 있나요?</h3><h3>Where is the supermarket?</h3></a></li>
        <li><a><img src="img/location/bag.png"><h3>쇼핑몰은 어디 있나요?</h3><h3>Where is the shopping mall?</h3></a></li>
        <li><a><img src="img/location/change.png"><h3>환전하는 곳은 어디 있나요?</h3><h3>Where can I exchange money?</h3></a></li>
        <li><a><img src="img/location/atm.png"><h3>현금지급기는 어디 있나요?</h3><h3>Where is the ATM?</h3></a></li>
        <li><a><img src="img/location/baby.png"><h3>미아보호소는 어디 있나요?</h3><h3>Where is the lost child shelter?</h3></a></li>
        <li><a><img src="img/location/stroller.png"><h3>유모차 대여하는 곳은 어디 있나요?</h3><h3>Where can I rent a stroller?</h3></a></li>
        <li><a><img src="img/location/bottle.png"><h3>수유실은 어디 있나요?</h3><h3>Where is the nursing room?</h3></a></li>
        <li><a><img src="img/location/elevator.png"><h3>엘레베이터는 어디 있나요?</h3><h3>Where is the elevator?</h3></a></li>
        <li><a><img src="img/location/escalator.png"><h3>에스컬레이터는 어디있나요?</h3><h3>Where is the escalator?</h3></a></li>
        <li><a><img src="img/location/handicapped.png"><h3>휠체어 대여하는 곳은 어디 있나요?</h3><h3>Where can I rent a wheelchair?</h3></a></li>
        <li><a><img src="img/location/locker.png"><h3>물품 보관소는 어디 있나요?</h3><h3>Where is the lockers?</h3></a></li>
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
