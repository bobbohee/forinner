/*  LISTVIEW POPUP  */
var popup_lv = $('.popup_lv > li');
var popupBasic  = $('.popup_lv > #popupBasic');

$(popup_lv).click(function() {
  
  // 클릭된 list
  var li_this = this;
  
  /* 클릭된 list에 속성 추가 */
  $(li_this).children('a').attr('href', '#popupBasic');
  $(li_this).children('a').attr('data-rel', 'popup');
  $(li_this).children('a').attr('data-transition', 'pop');
  
  /* 클릭된 list에서 img, h3 내용 변수에 담기 */
  // list 마다 class와 id를 주기보다는 children을 사용해 찾음
  var img = $(li_this).children('a').children('img');
  var msg = $(li_this).children('a').children('h3');
  var img_src = img.attr('src');
  var msg_ko = msg[0].innerText;
  var msg_en = msg[1].innerText;
  
  /* popup 창 내용 바꿔주기 */
  // innerText, innerHTML 이 사용이 안됨
  $(popupBasic).find('.msg_img').attr('src', img_src);
  $(popupBasic).find('.msg_ko').text(msg_ko);
  $(popupBasic).find('.msg_en').text(msg_en);
  
}); // $(popup_lv).click()
  

/*  SPEECH  */

function speak() {

  if (voice_msg !== '') {
    
    var voice_msg = $(popupBasic).find('.msg_ko').text();
    responsiveVoice.speak(voice_msg, "Korean Female");
    
  } // if()
  
} // speak()

// $(".popup_speak > img").click(function () {
//   speak();
// });
   
/* speaker 클릭 */

$(document).on("pagecreate", ".global_header", function(){
  $(".popup_speak").on("click", function () {
    speak();
  });
});