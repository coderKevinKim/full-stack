<?php
  $content = "Hello World!";
  $fileName = "helloWorld.txt";
  //파일 열기의 옵션으로 r 입력
  $fp = fopen('./myFiles/'.$fileName,'r');
  $fw = fwrite($fp, $content);
  //파일 쓰기 성공 여부 확인
  if($fw == false){
    echo '파일 쓰기에 실패했습니다. ';
  }else{
    echo '파일 쓰기 완료';
  }
  fclose($fp);
?>
