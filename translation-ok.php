<?php

  $kor = "";
  $eng = "";

  if ( isset($_GET['eng']) ) {
    $eng = htmlentities($_GET['eng']);
    
    $client_id = "O1vYnFFT2Lk4RbLz9bwH";
    $client_secret = "XTHDwaJUZB";
    
    $encText = urlencode($eng);
    $postvars = "source=en&target=ko&text=".$encText;
    
    $url = "https://openapi.naver.com/v1/language/translate";
    $is_post = true;
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, $is_post);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postvars);
    
    $headers = array();
    $headers[] = "X-Naver-Client-Id: ".$client_id;
    $headers[] = "X-Naver-Client-Secret: ".$client_secret;
    
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    
    $response = curl_exec ($ch);
    $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    
    curl_close ($ch);
    
    if($status_code == 200) {
      $object = json_decode($response);
      $kor = $object->message->result->translatedText;
    }
  
  }

  echo $kor;

?>