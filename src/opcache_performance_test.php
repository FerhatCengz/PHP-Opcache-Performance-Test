<?php
$start_time = microtime(true);
$data = [];
for ($i = 0; $i < 1000000; $i++) {
    $data[] = hash('sha256', $i);
}
$end_time = microtime(true);
echo "Hash Çalışma süresi: " . ($end_time - $start_time) . " saniye\n";
