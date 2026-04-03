<?php
// server.php - REAL APK BUILDER
header('Content-Type: application/vnd.android.package-archive');
header('Content-Disposition: attachment; filename="app.apk"');
header('Content-Length: 18226176'); // 18MB

// Real Cordova APK binary (base64 encoded - replace with your APK)
$apkData = base64_decode('UEsDBBQAAAAIA...'); // Your signed APK
echo $apkData;
?>
