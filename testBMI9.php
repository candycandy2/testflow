<?php //NO.9  //http://phptester.net/
$h = 180;
$w =  58; 

if($h==""){  //�p�G$h�����e���Ŧr�� 
  $h = 1.72;  //�����]���G���ء^ 
} 

if($w==""){  //�p�G$w�����e���Ŧr�� 
  $w = 60;  //�魫�]���G����^ 
} 

$bmi = $w/($h*$h); 
echo "�z��BMI:".$bmi."<br>���p�G"; 

if($bmi>=30){ 
  echo "�έD�I"; 
}elseif($bmi>=25){ 
  echo "�L���I"; 
}elseif($bmi>=18.5){ 
  echo "���`�I"; 
}else{ 
  echo "�L���I"; 
} 
?> 
