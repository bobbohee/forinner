<?php include("header.php"); ?>
  <div data-role="page" id="airport" class="global_header">
  <?php include("role-header-pictogram.php"); ?>
    <div data-role="content" class="content">
    <input type="search" name="search-mini" id="search-mini" data-mini="true" autocomplete="off"/>
      <ul class="popup_lv" data-role="listview" data-inset="true">
        <!-- 공항에서 -->
        <li><a><img src="img/airport/exchange.png"><h3>환전해 주시겠어요?</h3><h3>I'd like to exchange this</h3></a></li>
        <li><a><img src="img/airport/window.png"><h3>창가 쪽 자리를 원합니다.</h3><h3>I would like to have a window seat.</h3></a></li>
        <li><a><img src="img/airport/weight-scale.png"><h3>무게한도가 얼마인가요?</h3><h3>What's the weight limit?</h3></a></li>
        <li><a><img src="img/airport/weight-money.png"><h3>무게 초과는 얼마를 지불해야 하나요?</h3><h3>How much do I have to pay for overweight.</h3></a></li>
        <li><a><img src="img/airport/question.png"><h3>이 것을 기내로 가지고 들어가도 되나요?</h3><h3>Can I take in on the plane?</h3></a></li>
        <li><a><img src="img/airport/clock.png"><h3>탑승시간은 언제인가요?</h3><h3>When does boarding time?</h3></a></li>
        <li><a><img src="img/airport/check.png"><h3>탑승 수속은 언제 하나요?</h3><h3>When should I check  in?</h3></a></li>
        <li><a><img src="img/airport/passport.png"><h3>여권을 분실했어요.</h3><h3>I've lost my passport.</h3></a></li>
        <li><a><img src="img/airport/scan.png"><h3>5번 게이트로 가는 길 좀 가르쳐 주실래요?</h3><h3>Could you direct me to gate five?</h3></a></li>
        <li><a><img src="img/airport/bus.png"><h3>공항버스는 어디에서 타나요?</h3><h3>Where do I get the airport bus?</h3></a></li>
        <li><a><img src="img/airport/chair.png"><h3>의자를 뒤로 젖혀도 되나요?</h3><h3>Do you mind if I lean back?</h3></a></li>
        <li><a><img src="img/airport/water.png"><h3>물 한잔 주시겠어요?</h3><h3>May I have a glass of water, please?</h3></a></li>
        <li><a><img src="img/airport/meal.png"><h3>식사는 언제 나오나요?</h3><h3>What time do you serve the meal?</h3></a></li>
        <li><a><img src="img/airport/luggage.png"><h3>제 짐을 찾을 수가 없어요.</h3><h3>I can't find my baggage.</h3></a></li>
        <li><a><img src="img/airport/map.png"><h3>시내지도 좀 얻을 수 있을까요?</h3><h3>May I have a city map?</h3></a></li>
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