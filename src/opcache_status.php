<?php
$status = opcache_get_status(false);

if (!$status['opcache_enabled']) {
    echo "OpCache etkin değil!\n";
} else {
    echo "OpCache etkin!\n";

    if (isset($status['scripts'][__FILE__])) {
        echo "Bu dosya OpCache tarafından önbelleğe alındı.\n";
    } else {
        echo "Bu dosya OpCache tarafından önbelleğe alınmadı.\n";
    }
}
?>
