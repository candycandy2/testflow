<?php //NO.9  //http://phptester.net/
$h = 180;
$w =  58; 

if($h==""){  //如果$h的內容為空字串 
  $h = 1.72;  //身高（單位：公尺） 
} 

if($w==""){  //如果$w的內容為空字串 
  $w = 60;  //體重（單位：公斤） 
} 

$bmi = $w/($h*$h); 
echo "您的BMI:".$bmi."<br>狀況："; 

if($bmi>=30){ 
  echo "肥胖！"; 
}elseif($bmi>=25){ 
  echo "過重！"; 
}elseif($bmi>=18.5){ 
  echo "正常！"; 
}else{ 
  echo "過輕！"; 
} 
?> 
