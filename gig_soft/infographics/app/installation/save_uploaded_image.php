<?php
if (isset ( $GLOBALS ["HTTP_RAW_POST_DATA"] )) {
$file = $GLOBALS ["HTTP_RAW_POST_DATA"];

$uniqueStamp = uniqid();
$filename = $uniqueStamp.".png";
$filename = "uploaded_image/".$filename;
$fp = fopen ( $filename, 'wb' );
fwrite ( $fp, $file );
fclose ( $fp );
echo "imagepath=".$filename;
}
