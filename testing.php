<?php

$url = "https://qrlympptmmfafwvdhhkt.supabase.co/rest/v1/log_ucapan";

$key = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InFybHltcHB0bW1mYWZ3dmRoaGt0Iiwicm9sZSI6ImFub24iLCJpYXQiOjE3NzgyOTI4MzUsImV4cCI6MjA5Mzg2ODgzNX0.9e5I4xjqw5C-SUKUXCDypdNnlxkSLTV33uS_8t_QPpQ";

$headers = [
    "apikey: $key",
    "Authorization: Bearer $key",
    "Content-Type: application/json"
];

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$response = curl_exec($ch);

curl_close($ch);

echo $response;

?>