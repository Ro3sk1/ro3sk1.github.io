<?php
$videoUrl = 'http://213.13.16.138/shls/LIVE%24Eleven_Sports_1_HD/index.m3u8?device=TVOS_Live&start=LIVE&end=END';

// Set the appropriate Content-Type header for video
header('Content-Type: video/mp4');

// Fetch and output the video content
echo file_get_contents($videoUrl);
?>