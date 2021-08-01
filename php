<?php
$fp = fopen("banner.txt", "r");//mở file ở chế độ đọc
 
while(! feof($fp)) {
    echo fgets($fp);
    usleep(200000);
}
 
fclose($fp);
?>
