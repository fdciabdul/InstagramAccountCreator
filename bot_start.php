<?php
require('class.php');
@set_time_limit(0);
@clearstatcache();
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);
echo "How many accounts do you want to make[?]:";
$count = trim(fgets(STDIN, 1024));
echo "Create every second [?]:";
$sleep = trim(fgets(STDIN, 1024));
echo "[!] Please wait. . .\n\n";
$i = new instaCreator();
$i->userCreate($count,$sleep);