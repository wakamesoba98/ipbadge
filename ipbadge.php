<?php
header("Content-type: image/png");
$ipversion = strpos($_SERVER["REMOTE_ADDR"], ":") === false ? 4 : 6;
$img = imagecreatefrompng("ipv" . $ipversion . ".png");
imagepng($img);
imagedestroy($img);
?>
