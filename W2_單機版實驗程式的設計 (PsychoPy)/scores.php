<?php 
$file = file_get_contents('data.txt');
$ans = explode("\r\n", $file);

$rate = 0 ;
$RTrate = 0;
for($i = 1;$i<4;$i++){
    $res = $_GET["t".$i."_response"];
        if($res == $ans[$i-1]){
            $rate = $rate + (100/3);
        }
    $RT = $_GET["t".$i."_rt"];
    $RTrate = $RTrate + ($RT/3);    
}
echo "正確率為：".$rate.'%<br>'."反應時間平均為：".$RTrate.'ms';
?>
