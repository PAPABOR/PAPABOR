<?php 
/* ############################################################ *\
 Curl Generator By @iptv_id Hargai Jasa Founder!!
/* ############################################################ */
$target = curl_init(); 
curl_setopt($target, CURLOPT_URL, 'http://kelinci-lab.my.id/live/papabor1/papabor1/sctv.m3u8'); 
curl_setopt($target, CURLOPT_RETURNTRANSFER, 1);  
curl_setopt($target, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.102 Safari/537.36 OPR/90.0.4480.100'); 
curl_setopt($target, CURLOPT_HTTPHEADER, array('Accept-Language: en-us,en;q=0.7,de-de;q=0.3','Accept: text/xml,application/xml,application/xhtml+xml,text/html;q=0.9,text/plain;q=0.8,image/png,*/*;q=0.5')); 
$hasil = curl_exec($target); 
curl_close($target); 
echo $hasil; 
/* ############################################################ *\
 Supported By UnderGround IPTV Team
/* ############################################################ */
?>