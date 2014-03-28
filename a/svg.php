<?
if ($svghandle = opendir('svg')) {
    while (false !== ($svgfile = readdir($svghandle))) {
        if ($svgfile != "." && $svgfile != "..") {
        	$svgwhole = file_get_contents('svg/' . $svgfile);
        	$svgfilenm = str_replace('.svg', '', $svgfile);
        	$svgstring = str_replace('<?xml version="1.0" encoding="utf-8"?>
<!-- Generator: Adobe Illustrator 15.0.2, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
', '', $svgwhole);
			$svgstring = str_replace('Layer_1', $svgfilenm, $svgstring);
            echo $svgstring;

        }
    }
    closedir($svghandle);
}


?>

