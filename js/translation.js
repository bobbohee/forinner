$(function () {

  var recognition = new webkitSpeechRecognition();
  var isRecognizing = false;  // 음성 여부
  var ignoreOnend = false;    // 무시
  var finalTranscript = '';   // 음성을 텍스트로
  var $btnMic = $('#btn-mic');

  // 인식에 대해 연속 결과를 반환할지 또는 단일 결과만 반환할지 여부를 제어 
  // 단일 (false) 기본값
  recognition.continuous = true;
  // 중간 결과를 반환할지 여부를 조정 (true) 
  recognition.interimResults = true;

  // 마이크를 시작하고 음성이 들리면 시작
  isRecognizing = true;
  recognition.onstart = function () {
    $btnMic.attr('class', 'on ui-btn ui-mini');
  };

  recognition.onend = function () {
    isRecognizing = false;
    if (ignoreOnend) {
      return false;
    }
    $btnMic.attr('class', 'off ui-btn ui-mini');
    if (!finalTranscript) {
      return false;
    }
  };

  // 음성 결과를 반환하면 시작
  recognition.onresult = function (event) {
    var interimTranscript = '';   // 중간의 음성 변환 텍스트
    if (typeof (event.results) == 'undefined') {
      recognition.onend = null;
      recognition.stop();
      return;
    }
    for (var i = event.resultIndex; i < event.results.length; ++i) {
      if (event.results[i].isFinal) {   // 완성된 음성
        finalTranscript += event.results[i][0].transcript;
        console.log("onresult event.results -> " + event.results[i]);
      } else {                          // 중간의 음성
        interimTranscript += event.results[i][0].transcript;
      }
    }
    finalTranscript = capitalize(finalTranscript);
    var eng = linebreak(finalTranscript)
    $(".voice_eng").text(eng);
  };

  var one_line = /\n/g;
  var two_line = /\n\n/g;
  var first_char = /\S/;

  function linebreak(s) {   // ?
    return s.replace(two_line, '<p></p>').replace(one_line, '<br>');
  }
  function capitalize(s) {  // 첫글자를 대문자로 바꾸기
    return s.replace(first_char, function (m) {
      return m.toUpperCase();
    });
  }
  function start(event) {
    if (isRecognizing) {  // 음성이 끊어지면
      recognition.stop();
      return;
    }
    finalTranscript = '';
    $(".voice_eng").text('');
    $(".speak_kor").text('');
    recognition.lang = 'en-US';
    recognition.start();
    ignoreOnend = false;
  }
  function textToSpeech(text) {
    speechSynthesis.speak(new SpeechSynthesisUtterance(text));
  }
  $btnMic.click(start);
  $('#btn-tts').click(function () {
    textToSpeech($('.speak_kor').val());
  });
});
