<?php

//	svg contents
$saveDataLin = stripslashes($_POST["saveDataLin"]);
$saveDataAlp = stripslashes($_POST["saveDataAlp"]);
$saveDataCol = stripslashes($_POST["saveDataCol"]);
$svgData = '<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="600px" height="600px" viewBox="0 0 600 600" enable-background="new 0 0 600 600" xml:space="preserve">' . $saveDataCol . $saveDataAlp . $saveDataLin . '</svg>';

//	create temp files
$tmpName = md5(rand());
chmod("save/tmp/", 0777);
$tmpSvg = 'save/tmp/' . $tmpName . '.svg';
$tmpPng = 'save/tmp/' . $tmpName . '.png';
file_put_contents($tmpSvg, $svgData);


//	convert
$output = '/usr/local/bin/convert -background none ' . $tmpSvg . ' ' . $tmpPng;
system($output);

//	stream
header('Content-type: image/png');
header('Content-Disposition: attachment; filename="mongoose.png"');
echo file_get_contents($tmpPng);

//	delete
unlink($tmpSvg);
unlink($tmpPng);


?>