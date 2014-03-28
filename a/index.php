<!DOCTYPE html>     
<html xmlns="http://www.w3.org/1999/xhtml">     
  <head>

    <meta charset="UTF-8"/>     
    <title>make-a-goose</title>

<link href="http://fonts.googleapis.com/css?family=Ubuntu:300,500" rel="stylesheet" type="text/css">

<style>
body {background:#fefefe;color:#111;font-family:Ubuntu,Helvetica,Helvetica Neue,Arial,sans-serif;}
#secret {color:#efefef;}
#secret:hover {color:#ddd;}
#char svg {position:absolute;top:0;left:0;display:none;z-index:10;}
#opt {
	left:600px;
	position:absolute;
	top:50px;
	-moz-user-select: none;
	-khtml-user-select: none;
	user-select: none;

}
#opt svg {margin:3px;}
.colorSelector div {width:40px;height:20px;float:left;}
#saveme {background:transparent;color:#111;border:none;font-size:22px;padding:0;}
#saveme:hover {color:#333;}
#saveme:active {color:#999}
</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script type="text/javascript" src="js/colorpicker.js"></script>
<link rel="stylesheet" href="css/colorpicker.css" type="text/css" />


<script type="text/javascript">
$(document).ready(function() {
	
	$('[id$="c"]').css('z-index','2');
	$('[id$="a"]').css('z-index','3');
	$('#body_c').css('z-index','-10');
	$('[id*="eyes"]').css('z-index','1');
	$('#legs_boxer_4c').css('z-index','5');
	$('#body,#body_c').show();
	$('[id*="1"]').show();
	
		
	var s = 0;
	var p = 0;
	var h = 0;
	var m = 0;
	var i = 0;

	$("#icon_shirt").click(function() {
		var b = s + 2;
		$('[id*="shirt_"]').hide();
		$('[id*="shirt_"][id*="' + b + '"]').show();

		if (s < 5) {
			s++;
		} else {
			s = -1;
		};

		return false
	});
	
	$("#icon_legs").click(function() {
		var b = p + 2;
		$('[id*="legs_"]').hide();
		$('[id*="legs_"][id*="' + b + '"]').show();
		$('[id*="boxer"]').hide();
			
		if (p < 2) {
			p++;
		} else {
			p = -1;
		};

		return false
	});

	$("#icon_hair").click(function() {
		var b = h + 2;
		$('[id*="hair_"]').hide();
		$('[id*="hair_"][id*="' + b + '"]').show();

		if (h < 5) {
			h++;
		} else {
			h = -1;
		};

		return false
	});

	$("#icon_mouth").click(function() {
		var b = m + 2;
		$('[id*="mouth_"]').hide();
		$('[id*="mouth_"][id*="' + b + '"]').show();

		if (m < 1) {
			m++;
		} else {
			m = -1;
		};

		return false
	});

	$("#icon_eye").click(function() {
		var b = i + 2;
		$('[id*="eyes_"]').hide();
		$('[id*="eyes_"][id*="' + b + '"]').show();
	
		if (i < 1) {
			i++;
		} else {
			i = -1;
		};

		return false
	});



$('#csS').ColorPicker({
	color: '#808080',
	onShow: function (colpkr) {
		$(colpkr).slideDown(500);
		return false;
	},
	onHide: function (colpkr) {
		$(colpkr).slideUp(500);
		return false;
	},
	onChange: function (hsb, hex, rgb) {
		$('#csS  path').attr('fill', '#' + hex);
		$('[id*="shirt_"][id$="c"] path').attr('fill', '#' + hex);
	}
});

$('#csP').ColorPicker({
	color: '#1a1a1a',
	onShow: function (colpkr) {
		$(colpkr).slideDown(500);
		return false;
	},
	onHide: function (colpkr) {
		$(colpkr).slideUp(500);
		return false;
	},
	onChange: function (hsb, hex, rgb) {
		$('#csP path').attr('fill', '#' + hex);
		$('[id*="legs_"][id$="c"] path').attr('fill', '#' + hex);
		$('#legs_boxer_4c path').attr('fill', '#C1272D');
	}
});

$('#csH').ColorPicker({
	color: '#4d4d4d',
	onShow: function (colpkr) {
		$(colpkr).slideDown(500);
		return false;
	},
	onHide: function (colpkr) {
		$(colpkr).slideUp(500);
		return false;
	},
	onChange: function (hsb, hex, rgb) {
		$('#csH path').attr('fill', '#' + hex);
		$('[id*="hair_"][id$="c"] path').attr('fill', '#' + hex);
	}
});

$('#csK').ColorPicker({
	color: '#cccccc',
	onShow: function (colpkr) {
		$(colpkr).slideDown(500);
		return false;
	},
	onHide: function (colpkr) {
		$(colpkr).slideUp(500);
		return false;
	},
	onChange: function (hsb, hex, rgb) {
		$('#csK  path').attr('fill', '#' + hex);
		$('#body_c path').attr('fill', '#' + hex);
	}
});

	$('a#save').click(function(){
		//$('#char').html2canvas();
		alert("saving is borked, please use prnt-scrn if you are on windows or cmd-shift-4 if you are using mac osx.");
		return false
	});

	$('a#secret').click(function(){
		$('[id*="legs_"]').hide();
		$('#legs_4,#legs_4c,#legs_boxer_4c').show();
		p = -1;	
		return false
	});
	
	



$('#theform').submit(function() {

	var saveDataCol = '';
	var saveDataAlp = '';
	var saveDataLin = '';
	
	$('#char svg[id$="c"]:visible').each(function() {	
		var st = new XMLSerializer();
		var blla = st.serializeToString(this);
	//	blla = blla.replace('svg>','g>');
	//	blla = blla.replace('<svg','<g');
		saveDataCol += blla;		
	});


	$('#char svg[id$="a"]:visible').each(function() {	
		var st3 = new XMLSerializer();
		var blla3 = st3.serializeToString(this);
	//	blla3 = blla3.replace('svg>','g>');
	//	blla3 = blla3.replace('<svg','<g');
		saveDataAlp += blla3;		
	});


	$('#char svg:visible').not('[id$="c"]').each(function() {	
		var st2 = new XMLSerializer();
		var blla2 = st2.serializeToString(this);
	//	blla2 = blla2.replace('svg>','g>');
	//	blla2 = blla2.replace('<svg','<g');
		saveDataLin += blla2;		
	});
	
	$('#hidvalcol').val(saveDataCol);
	$('#hidvalalp').val(saveDataAlp);
	$('#hidvallin').val(saveDataLin);

//	return true
	
});

	
	
	
	
	

});

</script>
  </head>
  <body>
<div id="char">  
<?
$svgarray = array();
if ($svghandle = opendir('svg')) {
    while (false !== ($svgfile = readdir($svghandle))) {
        if ($svgfile != "." && $svgfile != "..") {
        	$svgwhole = file_get_contents('svg/' . $svgfile);
        	$svgfilenm = str_replace('.svg', '', $svgfile);
        	$svgstring = str_replace('<?xml version="1.0" encoding="utf-8"?>
<!-- Generator: Adobe Illustrator 15.0.2, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">', '', $svgwhole);
			$svgstring = str_replace('Layer_1', $svgfilenm, $svgstring);
            //echo $svgstring;
            $svgarray[] = $svgstring;

        }
    }
    closedir($svghandle);
}
sort($svgarray); 

foreach ($svgarray as $svgval) {
   echo $svgval;
}

?>
</div>

<div id="opt">


<!--skin-->
<svg version="1.1" id="csK" class="colorSelector" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="75px" height="75px" viewBox="0 0 75 75" enable-background="new 0 0 75 75" xml:space="preserve">
<path fill="#E6E6E6" d="M70.905,14.738C66.759,5.232,53.357,1.625,44.267,0.521c-7.494-0.91-16.453-0.833-23.979,1.891
	c-2.564,0.68-4.996,1.561-7.082,2.454C4.929,8.413,2.337,15.884,1.144,24.28c-1.406,9.896-1.601,19.873-0.102,29.762
	c1.276,8.426,4.973,14.163,12.789,17.393c8.535,3.527,18.912,3.72,27.984,3.506c8.47-0.2,18.17-0.9,24.95-6.595
	c6.717-5.643,7.59-17.908,8.074-25.948C75.395,33.191,74.612,23.242,70.905,14.738z"/>
</svg><br>
<!--hair-->
<svg version="1.1" id="icon_hair" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="75px" height="75px" viewBox="0 0 75 75" enable-background="new 0 0 75 75" xml:space="preserve">
<path d="M70.904,14.739C66.759,5.232,53.356,1.625,44.267,0.521c-7.494-0.909-16.453-0.834-23.979,1.891
	c-2.564,0.679-4.996,1.561-7.082,2.455C4.929,8.412,2.336,15.884,1.143,24.28c-1.406,9.896-1.601,19.871-0.102,29.762
	c1.276,8.427,4.973,14.164,12.789,17.394c8.535,3.526,18.912,3.719,27.985,3.505c8.469-0.199,18.169-0.899,24.949-6.595
	c6.717-5.643,7.59-17.909,8.074-25.947C75.394,33.191,74.612,23.242,70.904,14.739z"/>
<path fill="#FFFFFF" d="M52.513,14.371c-4.48-2.643-10.626-3.425-16.503-2.784c-3.524-0.589-8.081,0.808-10.629,2.062
	c-5.238,2.577-9.916,5.775-11.904,11.508c-2.918,8.417-2.223,18.506,1.324,26.352c0.787,1.883,3.64,6.875,5.23,7.782
	c2.371,1.35,5.108,0.643,5.125-2.156c0.003-0.497-0.095-0.959-0.25-1.398c-0.018-0.052-0.019-0.103-0.04-0.155
	c-4.425-10.56,6.737-13.964,13.512-18.577c2.079-1.415,3.708-3.076,5.006-4.944c0.03,0.394,0.057,0.79,0.074,1.186
	c0.12,2.803-1.01,4.771-0.307,7.576c0.172,0.682,1.013,1.264,1.705,0.983c4.597-1.862,7.109-5.687,8.132-10.199
	c4.787,7.972,2.251,16.456-1.196,25.138c-0.555,1.398,1.145,3.611,2.407,3.254c8.091-2.287,9.754-13.328,10.393-20.61
	C65.498,29.04,61.58,19.719,52.513,14.371z"/>
</svg>
<svg version="1.1" id="csH" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="75px" height="75px" viewBox="0 0 75 75" enable-background="new 0 0 75 75" xml:space="preserve">
<path fill="#4d4d4d" d="M70.905,14.738C66.759,5.232,53.357,1.625,44.267,0.521c-7.494-0.91-16.453-0.833-23.979,1.891
	c-2.564,0.68-4.996,1.561-7.082,2.454C4.929,8.413,2.337,15.884,1.144,24.28c-1.406,9.896-1.601,19.873-0.102,29.762
	c1.276,8.426,4.973,14.163,12.789,17.393c8.535,3.527,18.912,3.72,27.984,3.506c8.47-0.2,18.17-0.9,24.95-6.595
	c6.717-5.643,7.59-17.908,8.074-25.948C75.395,33.191,74.612,23.242,70.905,14.738z"/>
</svg><br>
<!--eyes/mouth-->
<svg version="1.1" id="icon_eye" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="75px" height="75px" viewBox="0 0 75 75" enable-background="new 0 0 75 75" xml:space="preserve">
<path d="M70.905,14.739C66.759,5.232,53.357,1.625,44.267,0.521c-7.495-0.909-16.453-0.834-23.979,1.891
	c-2.564,0.679-4.996,1.561-7.082,2.455C4.929,8.412,2.336,15.884,1.143,24.28c-1.406,9.895-1.601,19.871-0.102,29.762
	c1.276,8.427,4.973,14.164,12.789,17.394c8.535,3.526,18.912,3.719,27.986,3.505c8.469-0.199,18.169-0.899,24.948-6.595
	c6.717-5.643,7.589-17.909,8.075-25.947C75.394,33.19,74.612,23.242,70.905,14.739z"/>
<path fill="#FFFFFF" d="M67.433,34.619c-0.079-0.856-1.008-1.763-1.82-1.116c-0.617,0.492-0.842,1.08-1.321,1.695
	c-0.439,0.563-1.046,0.972-1.597,1.396c-0.74,0.57-1.637,0.882-2.456,1.305c-2.114-2.967-4.245-5.869-6.684-8.285
	c2.058-0.718,3.82-2.216,4.264-4.61c0.217-1.177-1.062-2.099-1.926-1.198c-1.675,1.744-3.094,3.057-5.375,3.213
	c-2.721-1.962-5.858-3.29-9.718-3.538c-0.734-0.047-1.46-0.042-2.185-0.007c0.133-0.389,0.272-0.774,0.377-1.187
	c0.377-1.467,1.618-2.502,1.649-4.017c0.016-0.741-0.634-1.526-1.364-1.457c-1.944,0.188-2.791,2.33-3.305,4.127
	c-0.294,1.025-0.269,1.961-0.046,2.863c-3.53,0.654-6.907,2.188-10.033,4.296c-0.259-0.56-0.495-1.133-0.748-1.652
	c-0.555-1.135-0.439-2.465-0.827-3.652c-0.535-1.638-2.485-1.563-3.045,0c-0.653,1.823,0.11,3.856,0.979,5.458
	c0.366,0.676,0.805,1.174,1.305,1.56c-2.046,1.62-3.968,3.453-5.727,5.401c-0.936-0.613-1.963-0.693-2.977-1.279
	c-1.002-0.579-1.313-1.91-1.807-2.914c-0.836-1.699-3.196-0.834-3.244,0.937c-0.059,2.252,1.19,4.161,2.866,5.396
	c0.73,0.538,1.63,0.891,2.534,0.996c-1.158,1.485-2.233,2.997-3.19,4.494c-0.121,0.19-0.153,0.395-0.139,0.593
	c-0.199,0.33-0.242,0.755,0.032,1.184c5.568,8.695,14.067,13.174,23.838,13.911c10.371,0.78,19.658-4.478,28.421-9.65
	c1.558-0.919,1.577-2.575,0.874-3.797c-0.055-0.458-0.223-0.921-0.554-1.35c-0.999-1.291-1.96-2.625-2.914-3.964
	c0.873-0.168,1.741-0.478,2.444-0.766C65.504,38.401,67.607,36.494,67.433,34.619z M37.22,54.331
	c-8.965,0.316-16.488-4.491-22.938-10.649c8.481-6.458,15.153-14.47,26.517-14.756c8.577-0.215,14.085,9.877,18.991,16.587
	C53.584,51.215,45.344,54.042,37.22,54.331z"/>
<path fill="#FFFFFF" d="M37.676,36.096c-3.229,0-5.923,2.874-5.923,6.319c0,3.446,2.694,6.321,5.923,6.321
	c3.228,0,5.922-2.875,5.922-6.321C43.599,38.97,40.904,36.096,37.676,36.096z"/>
</svg>
<svg version="1.1" id="icon_mouth" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="75px" height="75px" viewBox="0 0 75 75" enable-background="new 0 0 75 75" xml:space="preserve">
<path d="M70.904,14.739C66.759,5.232,53.356,1.625,44.267,0.521c-7.494-0.909-16.453-0.834-23.979,1.891
	c-2.564,0.679-4.996,1.561-7.082,2.455C4.929,8.412,2.336,15.884,1.143,24.28c-1.406,9.895-1.601,19.871-0.102,29.762
	c1.276,8.427,4.973,14.164,12.789,17.394c8.535,3.526,18.912,3.719,27.985,3.505c8.469-0.199,18.169-0.899,24.949-6.595
	c6.717-5.643,7.59-17.909,8.074-25.947C75.394,33.19,74.612,23.242,70.904,14.739z"/>
<path fill="#FFFFFF" d="M66.315,37.709c-0.098-1.642-0.213-3.279-0.326-4.917c-0.577-2.102-1.187-4.195-1.784-6.233
	c-0.997-3.414-3.658-7.281-7.784-8.601c-7.26-2.325-11.369,4.89-14.289,9.114c-1.002,1.449-2.075,2.772-3.514,3.946
	c-1.899,1.548-4.25-2.601-5.137-3.705c-2.712-3.376-5.232-6.217-9.931-7.553c-4.585-1.304-7.688,2.392-9.523,5.19
	c-0.901,1.374-1.83,2.779-2.732,4.207c-0.539,2.035-0.944,4.059-1.18,6.083c-0.104,1.74-0.117,3.484-0.097,5.231
	c0.387-0.017,0.771-0.033,1.144-0.051c6.848-0.341,13.699-0.646,20.561-0.679c11.373-0.058,23.121-0.262,34.646,0.142
	C66.374,39.165,66.359,38.438,66.315,37.709z"/>
<path fill="#FFFFFF" d="M36.497,44.082c-8.713-0.081-17.59,0.766-26.316,0.364c1.242,4.518,3.148,8.807,7.498,11.079
	c2.41,1.081,5.05,1.872,7.756,2.436c3.714,0.646,7.536,0.737,11.313,0.687c12.542-0.166,26.044-1.443,29.948-13.988
	C56.627,44.548,46.564,44.177,36.497,44.082z"/>
</svg><br>
<!--shirt-->
<svg version="1.1" id="icon_shirt" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="75px" height="75px" viewBox="0 0 75 75" enable-background="new 0 0 75 75" xml:space="preserve">
<path d="M70.905,14.738C66.759,5.232,53.357,1.625,44.267,0.521c-7.495-0.909-16.453-0.833-23.979,1.892
	c-2.564,0.68-4.996,1.561-7.082,2.454C4.929,8.413,2.336,15.884,1.143,24.28c-1.406,9.896-1.601,19.871-0.102,29.762
	c1.276,8.427,4.973,14.163,12.789,17.394c8.535,3.526,18.912,3.719,27.986,3.505c8.469-0.199,18.169-0.899,24.948-6.595
	c6.717-5.643,7.589-17.909,8.075-25.948C75.394,33.191,74.612,23.242,70.905,14.738z"/>
<path fill="#FFFFFF" d="M56.791,16.798c-0.034-0.02-0.065-0.048-0.101-0.067c-0.012-0.042-0.024-0.084-0.037-0.126
	c-0.17-0.243-0.34-0.483-0.508-0.725c-0.069-0.038-0.142-0.07-0.216-0.086c-0.184-0.039-0.364-0.08-0.546-0.12
	c-2.672-1.797-6.709-1.993-9.842-2.4c-0.232,4.236-3.294,9.602-7.815,9.12c-3.912-0.417-6.726-4.603-6.516-8.45
	c-2.357-0.344-4.886-0.194-7.254-0.16c-1.327,0.02-3.143-0.191-3.917,0.829c-0.496,0.057-0.842,0.346-1.001,0.737
	c-0.277,0.228-0.563,0.554-0.924,1.059c-1.048,1.466-2.09,2.938-3.114,4.423c-1.328,1.595-3.221,3.511-4.346,5.468
	c-0.459,0.384-0.871,0.791-1.255,1.274c-0.063,0.079-0.095,0.163-0.13,0.247c-0.21,0.23-0.424,0.456-0.629,0.69
	c-0.131,0.149-0.2,0.311-0.241,0.474c1.174,0.639,2.277,1.483,3.367,2.188c2.251,1.456,4.532,2.885,7.038,3.842
	c0.338,0.129,0.6,0.319,0.808,0.542c1.273-0.772,2.357-1.951,3.326-3.263c-1.81,9.42-2.906,18.912-2.677,28.557
	c0.015,0.625,0.471,1.013,1.054,1.069c3.817,0.367,7.623,0.672,11.421,0.827c0.619,0.045,1.24,0.068,1.863,0.065
	c7.396,0.203,14.764-0.218,22.123-1.921c0.731-0.169,1.249-1.066,1.004-1.796c-2.752-8.247-2.373-17.956-2.654-26.82
	c0.79,0.831,1.697,1.654,2.635,2.091c0.15,0.197,0.308,0.387,0.454,0.588l0.031-0.024c0.001,0.002,0.004,0.003,0.006,0.005
	c1.289-1.428,2.62-2.81,3.916-4.234c1.165-1.28,1.901-2.762,2.807-4.146C61.931,23.692,59.243,20.277,56.791,16.798z"/>
</svg>
<svg version="1.1" id="csS" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="75px" height="75px" viewBox="0 0 75 75" enable-background="new 0 0 75 75" xml:space="preserve">
<path fill="#808080" d="M70.905,14.738C66.759,5.232,53.357,1.625,44.267,0.521c-7.494-0.91-16.453-0.833-23.979,1.891
	c-2.564,0.68-4.996,1.561-7.082,2.454C4.929,8.413,2.337,15.884,1.144,24.28c-1.406,9.896-1.601,19.873-0.102,29.762
	c1.276,8.426,4.973,14.163,12.789,17.393c8.535,3.527,18.912,3.72,27.984,3.506c8.47-0.2,18.17-0.9,24.95-6.595
	c6.717-5.643,7.59-17.908,8.074-25.948C75.395,33.191,74.612,23.242,70.905,14.738z"/>
</svg><br>
<!--pants-->
<svg version="1.1" id="icon_legs" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="75px" height="75px" viewBox="0 0 75 75" enable-background="new 0 0 75 75" xml:space="preserve">
<path d="M70.904,14.738C66.759,5.232,53.356,1.625,44.267,0.521c-7.494-0.909-16.453-0.833-23.979,1.892
	c-2.564,0.68-4.996,1.561-7.082,2.454C4.929,8.413,2.336,15.884,1.143,24.28c-1.406,9.896-1.601,19.872-0.102,29.762
	c1.276,8.427,4.973,14.164,12.789,17.394c8.535,3.526,18.912,3.719,27.985,3.505c8.469-0.199,18.169-0.899,24.949-6.595
	c6.717-5.643,7.59-17.908,8.074-25.947C75.394,33.191,74.612,23.242,70.904,14.738z"/>
<path fill="#FFFFFF" d="M47.679,40.919c-0.227,5.75-0.417,12.12-1.62,17.883c3.21-0.034,6.831-0.002,9.702,1.124
	c1.351-7.758,1.502-15.373,1.454-23.403c-0.039-6.437,0.51-13.127-0.021-19.629c-0.271-0.823-0.595-1.607-0.989-2.331
	c-6.539,1.578-13.382,1.666-20.098,1.835c-5.832,0.146-11.496,0.22-17.207-0.152c0.79,15.053-0.562,30.752,3.702,45.322
	c0.655-0.283,1.291-0.513,1.822-0.688c2.463-0.816,5.133-1.647,7.782-1.855c-2.1-6.107-1.391-13.131-2.202-19.407
	c-0.446-3.45-1.017-6.846-1.177-10.323c-0.039-0.853,0.302-1.511,0.862-2.029c0.734-0.393,1.466-0.787,2.2-1.176
	c1.976-0.646,4.402-0.818,5.669-1.064C47.651,23.062,47.942,34.261,47.679,40.919z"/>
</svg>
<svg version="1.1" id="csP" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="75px" height="75px" viewBox="0 0 75 75" enable-background="new 0 0 75 75" xml:space="preserve">
<path fill="#1A1A1A" d="M70.905,14.738C66.759,5.232,53.357,1.625,44.267,0.521c-7.494-0.91-16.453-0.833-23.979,1.891
	c-2.564,0.68-4.996,1.561-7.082,2.454C4.929,8.413,2.337,15.884,1.144,24.28c-1.406,9.896-1.601,19.873-0.102,29.762
	c1.276,8.426,4.973,14.163,12.789,17.393c8.535,3.527,18.912,3.72,27.984,3.506c8.47-0.2,18.17-0.9,24.95-6.595
	c6.717-5.643,7.59-17.908,8.074-25.948C75.395,33.191,74.612,23.242,70.905,14.738z"/>
</svg><br>

<br><br>


	
	
	
		
	
	<form action="save.php" method="POST" id="theform">
		<input type="hidden" name="saveDataCol" id="hidvalcol" value="">
		<input type="hidden" name="saveDataAlp" id="hidvalalp" value="">
		<input type="hidden" name="saveDataLin" id="hidvallin" value="">

		<input type="submit" id="saveme" value="save (wonky)">
		
	</form>
		
		<br>	
	<a href="#" id="secret" title="shh I'm a secret">???</a>

</div>
  </body>
</html>