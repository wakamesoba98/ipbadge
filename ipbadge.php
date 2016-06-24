<?php
header("Content-type: image/png");
$ipversion = strpos($_SERVER["REMOTE_ADDR"], ":") === false ? 4 : 6;
echo file_get_contents(__DIR__ . "/ipv{$ipversion}.png");
