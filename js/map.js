$(window).load(function () {

  var imageBlue = "https://www.google.com/intl/en_us/mapfiles/ms/micons/blue-dot.png";
  var imageRed = "https://www.google.com/intl/en_us/mapfiles/ms/micons/red-dot.png";
  var imagePurple = "https://www.google.com/intl/en_us/mapfiles/ms/micons/purple-dot.png";

  var imageSize = new daum.maps.Size(30, 30);
  var imageOption = { offset: new daum.maps.Point(15, 30) };

  // 클릭한 마커와 윈도우를 담을 변수
  var selectedMarker = null;
  var selectedIw = null;

  /* 지도 생성 */
  var mapContainer = document.getElementById('map');      // 지도를 표시할 div 
  var mapOption = {
    center: new daum.maps.LatLng(33.450701, 126.570667),  // 지도의 중심좌표
    level: 3                                              // 지도의 확대 레벨 
  };

  var map = new daum.maps.Map(mapContainer, mapOption);   // 지도를 생성합니다

  /* 강남구 약국 좌표 */
  var positions = [

    {
      title: '포인트약국',
      call: '547-3196',
      address: '서울 강남구 도산대로 116',
      latlng: new daum.maps.LatLng(37.516567, 127.021505)
    },
    {
      title: '소망온누리약국',
      call: '534-1287',
      address: '서울 강남구 학동로 315',
      latlng: new daum.maps.LatLng(37.516300, 127.037653)
    },
    {
      title: '메디팜미래약국',
      call: '547-4340',
      address: '서울 강남구 강남대로 506',
      latlng: new daum.maps.LatLng(37.511935, 127.021567)
    },
    {
      title: '미플러스약국',
      call: '517-2513',
      address: '서울 강남구 강남대로 598',
      latlng: new daum.maps.LatLng(37.519150, 127.028621)
    },
    {
      title: '파낙스약국',
      call: '518-8766',
      address: '서울 강남구 논현로 629',
      latlng: new daum.maps.LatLng(37.520922, 127.033211)
    },
    {
      title: '제일그랜드약국',
      call: '546-0093',
      address: '서울 강남구 강남대로 478',
      latlng: new daum.maps.LatLng(37.505093, 127.024656)
    },
    {
      title: '민생약국',
      call: '547-7903',
      address: '서울 강남구 언주로125길 6',
      latlng: new daum.maps.LatLng(37.513237, 127.034768)
    },
    {
      title: '서울메디약국',
      call: '501-5063',
      address: '서울 강남구 역삼로 406',
      latlng: new daum.maps.LatLng(37.500589, 127.051638)
    },
    {
      title: '동성약국',
      call: '566-3728',
      address: '서울 강남구 삼성로 212',
      latlng: new daum.maps.LatLng(37.497690, 127.064869)
    },
    {
      title: '온누리구인당약국',
      call: '552-5550',
      address: '서울 강남구 남부순환로 3022',
      latlng: new daum.maps.LatLng(37.494996, 127.066262)
    },

    // 10

    {
      title: '화일약국',
      call: '362-8631',
      address: '서울 강남구 선릉로 328',
      latlng: new daum.maps.LatLng(37.499020, 127.051897)
    },
    {
      title: '강남보선약국',
      call: '568-2310',
      address: '서울 강남구 도곡로 516',
      latlng: new daum.maps.LatLng(37.499213, 127.062952)
    },
    {
      title: '한티약국',
      call: '574-2575',
      address: '서울 강남구 선릉로 225',
      latlng: new daum.maps.LatLng(37.495359, 127.052712)
    },
    {
      title: '사랑플러스약국',
      call: '2058-2745',
      address: '서울 강남구 선릉로 225',
      latlng: new daum.maps.LatLng(37.495367, 127.052716)
    },
    {
      title: '연우약국',
      call: '557-8672',
      address: '서울 강남구 도곡로 242',
      latlng: new daum.maps.LatLng(37.493365, 127.045177)
    },
    {
      title: '강남조은약국',
      call: '571-9515',
      address: '서울 강남구 남부순환로 2633',
      latlng: new daum.maps.LatLng(37.485351, 127.037732)
    },
    {
      title: '참좋은약국',
      call: '508-1363',
      address: '서울 강남구 테헤란로87길 17',
      latlng: new daum.maps.LatLng(37.508800, 127.058380)
    },
    // { ?
    //   title: '삼성건강약국',
    //   latlng: new daum.maps.LatLng(37.500589, 127.051638)
    // },
    {
      title: '팜메이트선능수정약국',
      call: '558-8025',
      address: '서울 강남구 선릉로 510',
      latlng: new daum.maps.LatLng(37.505195, 127.048908)
    },
    {
      title: '강남우리온누리약국',
      call: '572-1452',
      address: '서울 강남구 테헤란로 403',
      latlng: new daum.maps.LatLng(37.505078, 127.049531)
    },

    // 20

    {
      title: '삼성일신약국',
      call: '538-1018',
      address: '서울 강남구 테헤란로 421',
      latlng: new daum.maps.LatLng(37.505979, 127.052513)
    },
    {
      title: '소망약국',
      call: '555-6806',
      address: '서울 강남구 테헤란로87길 13',
      latlng: new daum.maps.LatLng(37.508621, 127.058579)
    },
    {
      title: '옵티마대영약국',
      call: '514-7850',
      address: '서울 강남구 삼성로 642',
      latlng: new daum.maps.LatLng(37.509958, 127.065762)
    },
    {
      title: '수서약국',
      call: '459-2293',
      address: '서울 강남구 광평로56길 11',
      latlng: new daum.maps.LatLng(37.487288, 127.105169)
    },
    {
      title: '코스모스약국',
      call: '515-3555',
      address: '서울 강남구 강남대로 626',
      latlng: new daum.maps.LatLng(37.517706, 127.019505)
    },
    {
      title: '가나안약국',
      call: '549-8774',
      address: '서울 강남구 도산대로 113',
      latlng: new daum.maps.LatLng(37.516995, 127.020848)
    },
    {
      title: '태양약국',
      call: '3442-4492',
      address: '서울 강남구 압구정로 150',
      latlng: new daum.maps.LatLng(37.526780, 127.037687)
    },
    {
      title: '압구정미약국',
      call: '548-0085',
      address: '서울 강남구 논현로175길 25',
      latlng: new daum.maps.LatLng(37.525445, 127.026625)
    },
    {
      title: '압구정온누리약국',
      call: '514-0777',
      address: '서울 강남구 압구정로 164',
      latlng: new daum.maps.LatLng(37.526507, 127.027645)
    },
    {
      title: '압구정프라자온누리약국',
      call: '511-3801',
      address: '서울 강남구 논현로 857',
      latlng: new daum.maps.LatLng(37.525325, 127.028074)
    },

    // 30

    {
      title: '비원약국',
      call: '541-6939',
      address: '서울 강남구 논현로 824',
      latlng: new daum.maps.LatLng(37.521968, 127.028544)
    },
    {
      title: '메디팜압구정약국',
      call: '547-7585',
      address: '서울 강남구 논현로160길 13',
      latlng: new daum.maps.LatLng(37.522725, 127.029060)
    },
    {
      title: '하나약국',
      call: '543-6650',
      address: '서울 강남구 압구정로 224',
      latlng: new daum.maps.LatLng(37.528566, 127.032004)
    },
    {
      title: '예스약국',
      call: '3445-8214',
      address: '서울 강남구 언주로 865',
      latlng: new daum.maps.LatLng(37.527805, 127.033177)
    },
    {
      title: '압구정늘푸른약국',
      call: '516-8753',
      address: '서울 강남구 압구정로 306',
      latlng: new daum.maps.LatLng(37.528908, 127.034781)
    },
    {
      title: '압구정약국',
      call: '543-0701',
      address: '서울 강남구 선릉로 845',
      latlng: new daum.maps.LatLng(37.527471, 127.040304)
    },
    {
      title: '로데오약국',
      call: '540-4091',
      address: '서울 강남구 선릉로 823',
      latlng: new daum.maps.LatLng(37.525604, 127.039323)
    },
    {
      title: '봄약국',
      call: '543-2251',
      address: '서울 강남구 압구정로29길 72-1',
      latlng: new daum.maps.LatLng(37.532276, 127.028406)
    },
    {
      title: '일번지약국',
      call: '567-2501',
      address: '서울 강남구 강남대로84길 23',
      latlng: new daum.maps.LatLng(37.497058, 127.030458)
    },
    {
      title: '참좋은선약국',
      call: '3453-3501',
      address: '서울 강남구 논현로 507',
      latlng: new daum.maps.LatLng(37.501565, 127.036132)
    },

    // 40

    {
      title: '아톰약국',
      call: '562-6575',
      address: '서울 강남구 테헤란로 103',
      latlng: new daum.maps.LatLng(37.498528, 127.028351)
    },
    {
      title: '삼성하나약국',
      call: '569-4130',
      address: '서울 강남구 테헤란로 509',
      latlng: new daum.maps.LatLng(37.507767, 127.058202)
    },
    {
      title: '역삼다인약국',
      call: '3453-3589',
      address: '서울 강남구 논현로 521-3',
      latlng: new daum.maps.LatLng(37.498907, 127.032113)
    },
    {
      title: '온누리기쁜약국',
      call: '566-0027',
      address: '서울 강남구 봉은사로30길 17',
      latlng: new daum.maps.LatLng(37.506525, 127.035463)
    },
    {
      title: '다래약국',
      call: '567-9361',
      address: '서울 강남구 논현로 508',
      latlng: new daum.maps.LatLng(37.501848, 127.037097)
    },
    {
      title: '온누리해림약국',
      call: '2112-2911',
      address: '서울 강남구 테헤란로 152',
      latlng: new daum.maps.LatLng(37.500039, 127.036521)
    },
    {
      title: '신혜성약국',
      call: '558-6338',
      address: '서울 강남구 논현로 409',
      latlng: new daum.maps.LatLng(37.496542, 127.038660)
    },
    {
      title: '웰약국',
      call: '6440-5656',
      address: '서울 강남구 강남대로 432',
      latlng: new daum.maps.LatLng(37.501244, 127.026605)
    },
    {
      title: '더블유스토어강남씨티약국',
      call: '553-1608',
      address: '서울 강남구 강남대로 416',
      latlng: new daum.maps.LatLng(37.499785, 127.027144)
    },
    {
      title: '아름다운우리약국',
      call: '564-7582',
      address: '서울 강남구 논현로 327',
      latlng: new daum.maps.LatLng(37.494446, 127.039727)
    },

    // 50

    {
      title: '큰길약국',
      call: '553-1517',
      address: '서울 강남구 강남대로 370',
      latlng: new daum.maps.LatLng(37.495858, 127.029210)
    },
    {
      title: '목화약국',
      call: '2226-2268',
      address: '서울 강남구 양재대로55길 11',
      latlng: new daum.maps.LatLng(37.491537, 127.087665)
    },
    {
      title: '일원역약국',
      call: '02-451-8233',
      address: '서울 강남구 일원로 지하 121',
      latlng: new daum.maps.LatLng(37.483903, 127.084032)
    },
    {
      title: '열린약국',
      call: '3411-1007',
      address: '서울 강남구 일원로 95',
      latlng: new daum.maps.LatLng(37.485826, 127.083557)
    },
    {
      title: '새생명약국',
      call: '512-3389',
      address: '서울 강남구 도산대로 522',
      latlng: new daum.maps.LatLng(37.524190, 127.050066)
    },
    {
      title: '영지약국',
      call: '547-3443',
      address: '서울 강남구 도산대로92길 6',
      latlng: new daum.maps.LatLng(37.524045, 127.050263)
    },
    {
      title: '건영약국',
      call: '541-7378',
      address: '서울 강남구 선릉로 806',
      latlng: new daum.maps.LatLng(37.526612, 127.044298)
    }

  ]; // positions[]

  for (var i = 0; i < positions.length; i++) {

    // 마커를 생성하고 지도위에 표시
    addMarker(positions[i]);

  } // for()

  function addMarker(positions) {

    var redMarker = new daum.maps.MarkerImage(imageRed, imageSize, imageOption);
    var purpleMarker = new daum.maps.MarkerImage(imagePurple, imageSize, imageOption);

    /* 지도에 마커 생성 */
    var marker = new daum.maps.Marker({
      map: map,                       // 마커를 표시할 지도
      position: positions.latlng,     // 마커를 표시할 위치
      image: redMarker                // 마커 이미지 
    });

    var iwContent = '<div class="iwContent">' +
                      '<p class="iwContent_title">' + positions.title + '</p>' +
                      '<p class="iwContent_call">' + positions.call + '</p>' +
                      '<button class="btn btn-default">' + 
                        '<a href="tel:' + positions.call + '">전화</a>' + 
                      '</button>' +
                      '<button class="btn btn-primary">' + 
                        '<a href="https://m.map.daum.net/actions/routeView?endLoc=' + positions.address + '" target="_blank">길찾기</a>' + 
                      '</button>' +
                    '</div>';

    /* 마커에 표시할 인포윈도우를 생성 */
    var infowindow = new daum.maps.InfoWindow({
      content: iwContent,
      removable: true  // X 버튼 생성
    });

    /* 마커에 click 이벤트를 등록 */
    daum.maps.event.addListener(marker, 'click', function () {

      // 클릭된 마커가 없고, click 마커가 클릭된 마커가 아니면
      if (!selectedMarker || selectedMarker !== marker) {

        // 클릭된 마커 객체가 null이 아니면
        if (selectedMarker != null) {
          selectedMarker.setImage(redMarker);
          selectedIw.close();
        }

        // 현재 클릭된 마커의 이미지를 클릭 이미지로 변경
        marker.setImage(purpleMarker);
        infowindow.open(map, marker);

      }

      // 클릭된 마커를 현재 클릭된 마커 객체로 설정
      selectedMarker = marker;
      selectedIw = infowindow;

    }); // addListener(click)

  } // addMarker()

  /* 현재 위치 찾기 */
  $("#current_location").click(function () {

    // HTML5의 geolocation으로 사용할 수 있는지 확인
    if (navigator.geolocation) {

      // GeoLocation을 이용해서 접속 위치를 얻어옴
      navigator.geolocation.getCurrentPosition(function (position) {

        // 마커가 표시될 위치를 geolocation으로 얻어온 좌표로 생성
        var lat = position.coords.latitude;     // 위도
        var lon = position.coords.longitude;    // 경도
        var locPosition = new daum.maps.LatLng(lat, lon);

        var blueMarker = new daum.maps.MarkerImage(imageBlue, imageSize, imageOption);

        // 마커 표시
        displayMarker(locPosition, blueMarker);

      }); // getCurrentPosition()

    } else {
      alert("GeoLocation을 사용할 수 없습니다");
    } // if else

  }); // click()

  /* 지도에 마커 표시하는 함수 */
  function displayMarker(locPosition, blueMarker) {

    // 마커 생성
    var marker = new daum.maps.Marker({
      map: map,
      image: blueMarker,
      position: locPosition
    });

    // 지도 중심좌표를 접속위치로 변경
    map.setCenter(locPosition);

  } // displayMarker()    

}); // $(window).load