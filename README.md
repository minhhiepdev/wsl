<?php
// Sử dụng cURL để lấy địa chỉ IP công cộng
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://ipinfo.io/ip");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$ip = curl_exec($ch);
curl_close($ch);

echo 'Địa chỉ IP công cộng của bạn là: ' . trim($ip);
?>
