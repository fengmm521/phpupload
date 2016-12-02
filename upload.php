<?php

function bytesToSize1024($bytes, $precision = 2) {
    $unit = array('B','KB','MB');
    return @round($bytes / pow(1024, ($i = floor(log($bytes, 1024)))), $precision).' '.$unit[$i];
}

$sFileName = $_FILES['image_file']['name'];
$sFileType = $_FILES['image_file']['type'];
$sFileSize = bytesToSize1024($_FILES['image_file']['size'], 1);
$sServerFileName = $_FILES['image_file']['tmp_name'];
$newpth = "upload/".$_FILES["image_file"]["name"];

if (file_exists("upload/".$_FILES["image_file"]["name"]))
{
    echo $_FILES["image_file"]["name"] . " already exists. ";
}
else
{
    move_uploaded_file($_FILES["image_file"]["tmp_name"],"upload/".$_FILES["image_file"]["name"]);
    echo "Stored in: " ."upload/". $_FILES["image_file"]["name"];
}


echo <<<EOF
<p>Your file: {$sFileName} has been successfully received.</p>
<p>Type: {$_FILES['image_file']['type']}</p>
<p>Size: {$sFileSize}</p>
<p>tmpname: {$sServerFileName}</p>
<p>newname: {$newpth}</p>
EOF;
