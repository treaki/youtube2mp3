<?php
$ytid=escapeshellcmd($_GET['ytid']);
header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename=\"Youtube_$ytid.mp3\"");#maybe add the youtube title...
passthru("youtube-dl -o - '$ytid' | ffmpeg -i - -f mp3 - -codec:a libmp3lame -b:a 320k");
exit();
?>
