<?php
$status = opcache_get_status();
print_r($status);

if ($status && isset($status['scripts'])) {
    foreach ($status['scripts'] as $file => $details) { ?>
        <div style="margin-bottom: 20px;">
            <p><strong>Dosya:</strong> <?php echo htmlspecialchars($file); ?></p>
            <p><strong>Boyut:</strong> <?php echo htmlspecialchars($details['memory_consumption']); ?> bayt</p>
            <p><strong>Son Kullanım:</strong> <?php echo htmlspecialchars(date("Y-m-d H:i:s", $details['last_used_timestamp'])); ?></p>
        </div>
    <?php } ?>
<?php } else {
    echo "<pre>OPcache durumu alınamadı veya önbellekte dosya yok.</pre>\n";
} ?>