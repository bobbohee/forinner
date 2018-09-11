$(document).ready(function () {
  $("#search-mini").keyup(function () {
    // 사용자가 입력한 문자열 값을 읽어내 변수 k의 저장한다.
    // $(this).val()는 텍스트 필드의 속성값을 읽어낸다.
    $(".content > ul > li > a").hide();

    var k = $(this).val();
    var kup = k.toUpperCase();
    var klo = k.toLowerCase();

    $(".content > ul > li > a").filter(function () {
      $(this).toggle( $(this).text().indexOf(k) > -1 );
      $(this).toggle( $(this).text().toUpperCase().indexOf(kup) > -1 );
      $(this).toggle( $(this).text().toLowerCase().indexOf(klo) > -1 );
    });

  });
});