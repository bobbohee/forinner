<?php include("header.php"); ?>
  <div data-role="page" id="speak" class="global_header">
  <?php include("role-header-pictogram.php"); ?>
    <div data-role="content" class="content">
    <input type="search" name="search-mini" id="search-mini" data-mini="true" autocomplete="off"/>
      <ul class="popup_lv" data-role="listview" data-inset="true">
        <!-- 자주 하는 말 -->
        <li><a><img src="img/speak/people.png"><h3>외국에서 온 관광객입니다.</h3><h3>I am a tourist from abroad.</h3></a></li>
        <li><a><img src="img/speak/korea.png"><h3>한국어를 못합니다.</h3><h3>I can't speak korean well.</h3></a></li>
        <li><a><img src="img/speak/phone.png"><h3>전화기를 사용하고 싶습니다.</h3><h3>I'd like to use the phone.</h3></a></li>
        <li><a><img src="img/speak/pray.png"><h3>부탁 좀 할까 하는데요.</h3><h3>I wonder if you can help me.</h3></a></li>
        <li><a><img src="img/speak/this.png"><h3>여기로 어떻게 가나요?</h3><h3>How  can I get here?</h3></a></li>
        <li><a><img src="img/speak/timer.png"><h3>얼마나 걸리나요?</h3><h3>How long does it take?</h3></a></li>
        <!-- 식당에서 -->
        <li><a><img src="img/speak/menu.png"><h3>메뉴를 보고 싶습니다.</h3><h3>I'd like to see the menu.</h3></a></li>
        <li><a><img src="img/speak/money.png"><h3>얼마인가요?</h3><h3>How much is it?</h3></a></li>
        <li><a><img src="img/speak/broom.png"><h3>이것 좀 치워 주세요.</h3><h3>Please move this out of the way.</h3></a></li>
        <!-- 가게에서 -->
        <li><a><img src="img/speak/sale.png"><h3>좀 더 싸게 주실 수 있나요?</h3><h3>Can you give me a little cheaper?</h3></a></li>
        <li><a><img src="img/speak/writing.png"><h3>이것 좀 써 봐도 될까요?</h3><h3>May I try it?</h3></a></li>
        <li><a><img src="img/speak/shirt.png"><h3>입어봐도 되나요?</h3><h3>Can I try on?</h3></a></li>
        <li><a><img src="img/speak/tap.png"><h3>이걸로 살게요.</h3><h3>I'll take this.</h3></a></li>
        <!-- 관광지에서 -->
        <li><a><img src="img/speak/ticket.png"><h3>입장료가 얼마인가요?</h3><h3>How much is the admission?</h3></a></li>
        <li><a><img src="img/speak/door.png"><h3>입구가 어디인가요?</h3><h3>Where is the entrance?</h3></a></li>
        <li><a><img src="img/speak/ferris.png"><h3>가볼 만한 곳이 어디인가요?</h3><h3>What do you think are the best places to see?</h3></a></li>
        <!-- 위급상황 -->
        <li><a><img src="img/speak/police.png"><h3>경찰서에 신고해주세요.</h3><h3>Please turn on the air conditioner.</h3></a></li>
        <li><a><img src="img/speak/ambulance.png"><h3>구급차를 불러주세요.</h3><h3>Please turn on the air conditioner.</h3></a></li>
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