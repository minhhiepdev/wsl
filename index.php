<?php
// Sử dụng dịch vụ icanhazip.com để lấy địa chỉ IP công cộng
$ip = file_get_contents('https://icanhazip.com');
echo 'Địa chỉ IP công cộng của bạn là: ' . trim($ip);
?>
