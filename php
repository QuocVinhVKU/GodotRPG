<?php
$fp = fopen("C:\Users\Admin\Desktop\Downloads\banner.txt", "r");//mở file ở chế độ đọc
 
while(! feof($fp)) {
    echo fgets($fp);
    usleep(200000);
}
 
fclose($fp);
?>
