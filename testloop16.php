<?php 
$a=1; 
while($a<=10){ 
  echo $a."<br>"; 
  $a++;  //$a=$a+1;
} 

$b=0; 
do{ 
  $b++; 
  echo $b."<br>"; 
}while($b<10);



for($c=1;$c<=10;$c++){ 
  echo $c."<br>";
	}


$c=1;   
for($c=1;$c<=10;$c++){  // 8 didn't show
  if($c==8) continue; 
  //program will jump to line 22 to continue
  echo "$c<br>"; 
} 



while($a<9){  //¥~¼h°j°é 
  $a++; 
  $b=0; 
  while($b<9){  //¤º¼h°j°é 
    $b++; 
    echo $a."x".$b."=".$a*$b."<br>"; 
  } 
}  
