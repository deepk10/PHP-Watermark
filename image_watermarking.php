<?php
$watermark = imagecreatefrompng('watermark.png');
$imageURL = imagecreatefrompng('11.png');
$watermarkX = imagesx($watermark);
$watermarkY = imagesy($watermark);
imagecopy($imageURL, $watermark, imagesx($imageURL)/5, imagesy($imageURL)/5, 0, 0, $watermarkX, $watermarkY);
header('Content-type: image/png');
imagepng($imageURL);
imagedestroy($imageURL);
?>