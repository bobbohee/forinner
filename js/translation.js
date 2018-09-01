$(function () {

  if (typeof webkitSpeechRecognition != 'function') {
    alert('크롬에서만 동작 합니다.');
    return false;
  }

  var recognition = new webkitSpeechRecognition();
  var isRecognizing = false;
  var ignoreOnend = false;
  var finalTranscript = '';
  var $btnMic = $('#btn-mic');
  recognition.continuous = true;
  recognition.interimResults = true;

  recognition.onstart = function () {
    console.log('onstart', arguments);
    isRecognizing = true;

    $btnMic.attr('class', 'on ui-btn ui-mini');
  };

  recognition.onend = function () {
    console.log('onend', arguments);
    isRecognizing = false;

    if (ignoreOnend) {
      return false;
    }

    // DO end process
    $btnMic.attr('class', 'off ui-btn ui-mini');
    if (!finalTranscript) {
      console.log('empty finalTranscript');
      return false;
    }

    if (window.getSelection) {
      window.getSelection().removeAllRanges();
      var range = document.createRange();
      range.selectNode(document.getElementById('eng'));
      window.getSelection().addRange(range);
    }

  };

  recognition.onresult = function (event) {
    console.log('onresult', event);

    if (typeof (event.results) == 'undefined') {
      recognition.onend = null;
      recognition.stop();
      return;
    }

    for (var i = event.resultIndex; i < event.results.length; ++i) {
      if (event.results[i].isFinal) {
        finalTranscript += event.results[i][0].transcript;
      }
    }

    finalTranscript = capitalize(finalTranscript);
    $("#eng").val(linebreak(finalTranscript));

    console.log('finalTranscript', finalTranscript);
  };

  recognition.onerror = function (event) {
    console.log('onerror', event);

    if (event.error == 'no-speech') {
      ignoreOnend = true;
    } else if (event.error == 'audio-capture') {
      ignoreOnend = true;
    } else if (event.error == 'not-allowed') {
      ignoreOnend = true;
    }

    $btnMic.attr('class', 'off ui-btn ui-mini');
  };

  var two_line = /\n\n/g;
  var one_line = /\n/g;
  var first_char = /\S/;

  function linebreak(s) {
    return s.replace(two_line, '<p></p>').replace(one_line, '<br>');
  }

  function capitalize(s) {
    return s.replace(first_char, function (m) {
      return m.toUpperCase();
    });
  }

  /*
   * textToSpeech
   * 지원: 크롬, 사파리, 오페라, 엣지
   */
  function textToSpeech(text) {
    console.log('textToSpeech', arguments);

    responsiveVoice.speak(text, "Korean Female");
  }

  $btnMic.click(function () {
    alert("음성 인식을 시작합니다\nStart speech recognition");

    if (isRecognizing) {
      recognition.stop();
      return;
    }

    finalTranscript = '';
    $(".voice_eng").text('');
    $(".speak_kor").text('');
    recognition.lang = 'en-US';
    recognition.start();
    ignoreOnend = false;
  });
  $('#btn-tts').click(function () {
    textToSpeech($('#kor').val() || '전 음성 인식된 글자를 읽습니다.');
  });
});
