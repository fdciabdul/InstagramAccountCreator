<?php
require('class.php');
@set_time_limit(0);
@clearstatcache();
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);
echo "Berapa Banyak Akun Yang Mau dibuat[?]:";
$count = trim(fgets(STDIN, 1024));
echo "Delaynya Mau Berapa Detik [?]:";
$sleep = trim(fgets(STDIN, 1024));
echo "[!] Tunggu gan. . .\n\n";
$i = new instaCreator();
$i->userCreate($count,$sleep);
