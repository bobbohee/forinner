$(document).ready(function () {
    $("#search-mini").keyup(function () {
      // 사용자가 입력한 문자열 값을 읽어내 변수 k의 저장한다.
      // $(this).val()는 텍스트 필드의 속성값을 읽어낸다.
      $(".content > ul > li > a").hide();
     
      var k = $(this).val();
      var kup = k.toUpperCase();
      var klo = k.toLowerCase();

      var t = $(".content > ul > li > a > h3:last-child").text();
      var tup = t.toUpperCase();
      var tlo = t.toLowerCase();
      
      var temp = $(".content > ul > li > a > h3:contains('" + k + "')");

      $(temp).parent().show();
    });
 });