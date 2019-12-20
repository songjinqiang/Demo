<?php
$imgInfo = $_POST['imgData'];

$imgdata = substr($imgInfo, strpos($imgInfo, ",") + 1);
$decodedData = base64_decode($imgdata);
$fileName = date('YmdHis') . '.png';

if (!file_exists('/data')) {
    mkdir('/data', 0755);
}
file_put_contents('/data/' . $fileName, $decodedData);