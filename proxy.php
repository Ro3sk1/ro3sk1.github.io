<?php
// URL of the HTTP m3u8 livestream
$m3u8Url = 'http://213.13.16.138/shls/LIVE%24Eleven_Sports_1_HD/index.m3u8?device=TVOS_Live&start=LIVE&end=END';

// Set the appropriate Content-Type header for m3u8
header('Content-Type: application/vnd.apple.mpegurl');

// Fetch and output the m3u8 playlist content
echo file_get_contents($m3u8Url);
?>