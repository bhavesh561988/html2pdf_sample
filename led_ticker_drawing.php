<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Digital Signage - LED Ticker - Digital Signage Solution - LED
Display Configuration</title>
  <meta name="description"
 content="Digital Signage | LED Ticker | Digital Signage Solution - Rise Display - LED Display Configuration">
  <meta name="keywords"
 content="digital signage, LED ticker, digital signage solution, digital signage software">
  <link rel="alternate" type="application/rss+xml" title="RSS"
 href="/site/rss_2.0/">
  <link rel="shortcut icon" href="/images/favicon.ico"
 type="image/x-icon">
  <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet"
 href="https://risedisplay.foxycart.com/files/foxybox.css"
 type="text/css" media="screen" charset="utf-8">
<!--<link rel="stylesheet" href="/includes/css/thickbox.css" type="text/css" />-->
  <link rel="stylesheet"
 href="http://dm5bmjogn9rof.cloudfront.net/includes/css/thickbox.css"
 type="text/css">
  <link rel="stylesheet"
 href="http://www.risedisplay.com/?css=includes/css_screen.v.1253149306"
 type="text/css">
  <link rel="stylesheet" type="text/css" href="print.css" media="print">
<!--[if IE]>
	    <link rel="stylesheet" href="http://www.risedisplay.com/?css=includes/css_screen_ie.v.1226629519" type="text/css" />
	<![endif]--><!--[if IE 6]>
	    <link rel="stylesheet" href="http://www.risedisplay.com/?css=includes/css_screen_ie6.v.1233370068" type="text/css" />
	<![endif]-->
  <style type="text/css">
		.print-button {height:30px; vertical-align:middle; background-color:#26395b; color:#FFF; font: 14px/30px Arial, Helvetica, sans-serif;  -moz-border-radius: .3em; -webkit-border-radius: .3em; padding:0; margin:0; width:80px;float:right; text-align:center}
		.form-header {height:30px; line-height:30px; vertical-align:middle; background-color:#26395b; color:#FFF; font: 13px Arial, Helvetica, sans-serif;  -moz-border-radius: .3em; -webkit-border-radius: .3em;}
		.spec-table {width:440px; font: 12px Arial, Helvetica, sans-serif;line-height:14px; border: #26395b solid 1px; -moz-border-radius: .3em; -webkit-border-radius: .3em;}
		.spec-table-sm {width:400px; font: 12px Arial, Helvetica, sans-serif;line-height:14px; border: #26395b solid 1px; -moz-border-radius: .3em; -webkit-border-radius: .3em;}
		.spec-table-header {height:30px; line-height:30px; vertical-align:middle; background-color:#26395b; color:#FFF; font: 13px Arial, Helvetica, sans-serif;}
		#nav- a { color: #598aa8 !important; }
		#specs-16 table td:first-child, #specs-24-rg table td:first-child, #specs-24-rgb table td:first-child {font-weight:600} 
		a.print-button-link {color:#FFF!important; text-decoration:none!important;}
		a:hover.print-button-link {text-decoration:underline!important;}
		#content .pdfheader a{text-decoration:none;}
		#content .pdfheader a:hover{text-decoration:underline;}
	</style>
  <script type="text/javascript"
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
  <script type="text/javascript">
		jQuery().ready(function() 
		    { 	 
			$('#specs-16, #specs-24-rg, #specs-24-rgb, #insert-config, #pdf').hide();
			$("#height").change(function() 
				{ 
					var input_value 
					
					$('#specs-16, #specs-24-rg, #specs-24-rgb, #pdf').hide();
					
					input_value = $("#height").val();  
					color_input_value = $("#color").val();  
					length_input_value = $("#length").val();  
					
			 		$(".insert-height").html(input_value);
					$('#insert-config').show();   
			 
					if (input_value === "16" && length_input_value != '' && color_input_value === "rg") 
						{
							$('#specs-16').show();
							$('#pdf').show();
						}
					else if (input_value === "16" && length_input_value != '' && color_input_value === "rgb") 
						{
							$("#height").val('');
							alert("Sorry! RGB displays only come in a pixel height of 24.");
						}
					else if  (input_value === "24" && color_input_value === "rg" && length_input_value != '')
						{ 
						$('#specs-24-rg').show();
						$('#pdf').show(); 
						}
					else if  (input_value === "24" && color_input_value === "rgb" && length_input_value != '')
						{ 
						$('#specs-24-rgb').show();
						$('#pdf').show();  
						}
					  
				    else if (input_value != '') 
						{	
							$("#height").val(''); 
							alert("Sorry! Please select a color and length first.");
						 }
				    if (input_value != '' && color_input_value != "" && length_input_value != '') 
						{	
							$("#specs").hide('');
						}
					else	
						{
							
							$("#specs").show('');
							$('#pdf').hide(); 
							
							if (input_value === "16" && length_input_value != '' && color_input_value === "rg")
							{
								$('#specs-16').hide();
								$('#pdf').hide();
								$("#specs").show('');
							}	
							else if  (input_value === "24" && color_input_value === "rg" && length_input_value != '')
							{ 
								$('#specs-24-rg').hide();
								$('#pdf').hide(); 
								$("#specs").show('');
							}
							else if  (input_value === "24" && color_input_value === "rgb" && length_input_value != '')
							{ 
								$('#specs-24-rgb').hide();
								$('#pdf').hide();  
								$("#specs").show('');
							}
							else if  (input_value === "" && color_input_value === "rgb" && color_input_value === "rg" && length_input_value != '')
							{ 
								$('#pdf').hide();  
								$("#specs").show('');
							}
						} 
					// HIDE CORD DROPS
					for(i=1;i<10;i++)
						{
							$("#pc-rg-16-"+i+"").hide();
						} 
					for(i=1;i<10;i++)
						{
							$("#pc-rg-24-"+i+"").hide();
						} 
					for(i=1;i<14;i++)
						{
							$("#pc-rgb-24-"+i+"").hide();
						} 
					// CORD DROPS
					if (input_value === "16" && color_input_value === "rg") 
					{
						  if (length_input_value >= 6 && length_input_value < 31) 
							  $('#pc-rg-16-1').show(); 
						  else if  (length_input_value >= 31 && length_input_value < 61)
							  $('#pc-rg-16-2').show();
						  else if  (length_input_value >= 61 && length_input_value < 91)
							  $('#pc-rg-16-3').show();
						  else if  (length_input_value >= 91 && length_input_value < 121)
							  $('#pc-rg-16-4').show();
						  else if  (length_input_value >= 121 && length_input_value < 151)
							  $('#pc-rg-16-5').show();
						  else if  (length_input_value >= 151 && length_input_value < 181)
							  $('#pc-rg-16-6').show();
						  else if  (length_input_value >= 181 && length_input_value < 211) 
							  $('#pc-rg-16-7').show();
						  else if  (length_input_value >= 211 && length_input_value < 241) 
							  $('#pc-rg-16-8').show();
						  else if  (length_input_value >= 241 && length_input_value < 251)
							  $('#pc-rg-16-9').show(); 
					}
					else if  (input_value === "24" && color_input_value === "rg") 
					{
						  if (length_input_value > 5 && length_input_value < 31) 
							  $('#pc-rg-24-1').show(); 
						  else if  (length_input_value > 30 && length_input_value < 61)
							  $('#pc-rg-24-2').show();
						  else if  (length_input_value > 60 && length_input_value < 91)
							  $('#pc-rg-24-3').show();
						  else if  (length_input_value > 90 && length_input_value < 121)
							  $('#pc-rg-24-4').show();
						  else if  (length_input_value > 120 && length_input_value < 151)
							  $('#pc-rg-24-5').show();
						  else if  (length_input_value > 150 && length_input_value < 181)
							  $('#pc-rg-24-6').show();
						  else if  (length_input_value > 180 && length_input_value < 211) 
							  $('#pc-rg-24-7').show();
						  else if  (length_input_value > 210 && length_input_value < 241) 
							  $('#pc-rg-24-8').show();
						  else if  (length_input_value > 240 && length_input_value < 251)
							  $('#pc-rg-24-9').show(); 
					}
					else if  (input_value === "24" && color_input_value === "rgb") 
					{
						  if (length_input_value > 5 && length_input_value < 21) 
							  $('#pc-rgb-24-1').show(); 
						  else if  (length_input_value > 20 && length_input_value < 41)
							  $('#pc-rgb-24-2').show();
						  else if  (length_input_value > 40 && length_input_value < 61)
							  $('#pc-rgb-24-3').show();
						  else if  (length_input_value > 60 && length_input_value < 81)
							  $('#pc-rgb-24-4').show();
						  else if  (length_input_value > 80 && length_input_value < 101)
							  $('#pc-rgb-24-5').show();
						  else if  (length_input_value > 100 && length_input_value < 121)
							  $('#pc-rgb-24-6').show();
						  else if  (length_input_value > 120 && length_input_value < 141) 
							  $('#pc-rgb-24-7').show();
						  else if  (length_input_value > 140 && length_input_value < 161) 
							  $('#pc-rgb-24-8').show();
						  else if  (length_input_value > 160 && length_input_value < 181)
							  $('#pc-rgb-24-9').show(); 
						  else if  (length_input_value > 180 && length_input_value < 201)
							  $('#pc-rgb-24-10').show(); 
						  else if  (length_input_value > 200 && length_input_value < 221)
							  $('#pc-rgb-24-11').show(); 
						  else if  (length_input_value > 220 && length_input_value < 241)
							  $('#pc-rgb-24-12').show(); 
						  else if  (length_input_value > 240 && length_input_value < 251)
							  $('#pc-rgb-24-13').show(); 
					}
				}); 
			
			$('#led-rg, #led-rgb').hide();
			$("#color").change(function() 
				{ 
					var input_value  
					// RESET HEIGHT
					$("#height").val('');
					$('#specs-16, #specs-24-rg, #specs-24-rgb').hide();
					$('#led-rg, #led-rgb').hide();
					
					input_value = $("#color").val();  
					
			 		$(".insert-color").html(input_value);
					
					if (input_value === "rg") 
						$('#led-rg').show();
					else if  (input_value === "rgb") 
						$('#led-rgb').show();  
					// HIDE CORD DROPS
					for(i=1;i<10;i++)
						{
							$("#pc-rg-16-"+i+"").hide();
						} 
					for(i=1;i<10;i++)
						{
							$("#pc-rg-24-"+i+"").hide();
						} 
					for(i=1;i<14;i++)
						{
							$("#pc-rgb-24-"+i+"").hide();
						} 
				}); 
			$("#length").change(function() 
				{ 
					var input_value  
					// RESET HEIGHT
					$("#height").val('');
					
					// HIDE CORD DROPS
					for(i=1;i<10;i++)
						{
							$("#pc-rg-16-"+i+"").hide();
						} 
					for(i=1;i<10;i++)
						{
							$("#pc-rg-24-"+i+"").hide();
						} 
					for(i=1;i<14;i++)
						{
							$("#pc-rgb-24-"+i+"").hide();
						} 
					
					input_value = $("#length").val();
					
			 		$(".insert-length").html(input_value);
			 		$(".insert-length").append("'");
					
					//16H
					var foobar = 40 * input_value; 
					$("#matrix-length-16").html(foobar);
					var foobar = Math.round(3.5 * input_value); 
					$("#weight-16").html(foobar); 
					var foobar = 24 * input_value; 
					$("#peak-power-16").html(foobar);
					var foobar = foobar / 120; 
					$("#avg-power-16").html(foobar);
					var foobar = Math.ceil(input_value / 30); 
					if (foobar < "1") { foobar = 1}
					$("#drops-16").html(foobar);  
					var foobar = Math.round(input_value / 8);
					if (foobar < "1") { foobar = 1} 
					$("#sections-16").html(foobar); 
					var foobar = 13 * input_value; 
					$("#dissipation-16").html(foobar);  
					//24H-RG
					var foobar = 40 * input_value; 
					$("#matrix-length-24rg").html(foobar);
					var foobar = Math.round(4.2 * input_value); 
					$("#weight-24rg").html(foobar); 
					var foobar = 36 * input_value; 
					$("#peak-power-24rg").html(foobar);
					var foobar = foobar / 120; 
					$("#avg-power-24rg").html(foobar);
					var foobar = Math.ceil(input_value / 20); 
					if (foobar < "1") { foobar = 1}
					$("#drops-24rg").html(foobar);  
					var foobar = Math.round(input_value / 8); 
					if (foobar < "1") { foobar = 1}
					$("#sections-24rg").html(foobar); 
					var foobar = 17 * input_value; 
					$("#dissipation-24rg").html(foobar);  
					//24H-RGB
					var foobar = 40 * input_value; 
					$("#matrix-length-24rgb").html(foobar);
					var foobar = Math.round(4.2 * input_value); 
					$("#weight-24rgb").html(foobar); 
					var foobar = 108 * input_value; 
					$("#peak-power-24rgb").html(foobar);
					var foobar = foobar / 120; 
					$("#avg-power-24rgb").html(foobar);
					var foobar = Math.ceil(input_value / 20); 
					if (foobar < "1") { foobar = 1}
					$("#drops-24rgb").html(foobar);  
					var foobar = Math.round(input_value / 8); 
					if (foobar < "1") { foobar = 1}
					$("#sections-24rgb").html(foobar); 
					var foobar = 22 * input_value; 
					$("#dissipation-24rgb").html(foobar);   
					 
				}); 
			}); 
	</script>
</head>
<body>
<div id="container">
<div id="masthead">
<div id="logo"><a href="/" title="Home"><img src="http://www.risedisplay.com/images/rise-logo.jpg"
 border="0" height="82" width="256"></a></div>
<div id="utility-nav-wrap">
<ul id="utility-nav">
  <li class="first"><a href="/about_us/" title="About Us">About Us</a></li>
  <li><a href="/contact/" title="Contact Sales">Contact Sales</a></li>
  <li><a href="/support/" title="Contact Support">Contact Support</a></li>
  <li><a href="http://www.displaywire.com/" title="Login"
 target="_blank">Login</a></li>
</ul>
<p>Complete Display Solutions</p>
</div>
</div>
<div id="primary-nav-wrap">
<ul id="primary-nav">
  <li class="first"><a href="/products/" title="Learn">Products</a></li>
  <li><a href="http://www.risedisplay.com/markets/" title="Buy">Markets</a></li>
  <li><a href="/examples/" title="Examples">Examples</a></li>
  <li class="on"><a href="/resource_center/" title="Resource Center">Resource
Center</a></li>
  <li class="last"><a href="/news/" title="News" >News</a></li>
</ul>
</div>
<div id="content" class="examples">
<div id="top-wrap">
<div>
<p><a href="/resource_center/technical_drawings/">Back to Technical
Drawings<br>
<br>
</a> </p>
</div>
<h2>LED Ticker Display Configuration</h2>
<div class="clear"></div>
<div style="clear: both; width: 100%;"><br>
<div style="float: left; width: 750px;">
<p>Select the LED Color, Ticker Length and Pixel Height below to see
the specifications for your ticker<br>
</p>
</div>
</div>
<div class="clear"></div>
<p> </p>
<!--COLOR DISPLAY -->
<div id="led-rg" style="display: none;"> <img src="http://www.risedisplay.com/images/RG.gif"
 height="36" width="816"> </div>
<div id="led-rgb" style="display: none;"> <img src="http://www.risedisplay.com/images/RGB.gif"
 height="36" width="816"> </div>
<br />
<!--DROP DISPLAY RG 16 -->
<div id="pc-rg-16-1" style="display: none;">Front View<br>
<img src="http://www.risedisplay.com/images/cord_drops/RG16-H1P-Cords-3-30ft.jpg" height="60"
 width="816"> </div>
<div id="pc-rg-16-2" style="display: none;">Front View<br>
<img src="http://www.risedisplay.com/images/cord_drops/RG16-H2P-Cords-31-60ft.jpg" height="60"
 width="816"> </div>
<div id="pc-rg-16-3" style="display: none;">Front View<br>
<img src="http://www.risedisplay.com/images/cord_drops/RG16-H3P-Cords-61-90ft.jpg" height="60"
 width="816"> </div>
<div id="pc-rg-16-4" style="display: none;">Front View<br>
<img src="http://www.risedisplay.com/images/cord_drops/RG16-H4P-Cords-91-120ft.jpg" height="60"
 width="816"> </div>
<div id="pc-rg-16-5" style="display: none;">Front View<br>
<img src="http://www.risedisplay.com/images/cord_drops/RG16-H5P-Cords-121-150ft.jpg" height="60"
 width="816"> </div>
<div id="pc-rg-16-6" style="display: none;">Front View<br>
<img src="http://www.risedisplay.com/images/cord_drops/RG16-H6P-Cords-151-180ft.jpg" height="60"
 width="816"> </div>
<div id="pc-rg-16-7" style="display: none;">Front View<br>
<img src="http://www.risedisplay.com/images/cord_drops/RG16-H7P-Cords-181-210ft.jpg" height="60"
 width="816"> </div>
<div id="pc-rg-16-8" style="display: none;">Front View<br>
<img src="http://www.risedisplay.com/images/cord_drops/RG16-H8P-Cords-211-240ft.jpg" height="60"
 width="816"> </div>
<div id="pc-rg-16-9" style="display: none;">Front View<br>
<img src="http://www.risedisplay.com/images/cord_drops/RG16-H9P-Cords-241-250ft.jpg" height="60"
 width="816"> </div>
<!--DROP DISPLAY RG 24 -->
<div id="pc-rg-24-1" style="display: none;">Front View<br>
<img src="http://www.risedisplay.com/images/cord_drops/RG24-H1P-Cords-3-30ft.jpg" height="60"
 width="816"> </div>
<div id="pc-rg-24-2" style="display: none;">Front View<br>
<img src="http://www.risedisplay.com/images/cord_drops/RG24-H2P-Cords-31-60ft.jpg" height="60"
 width="816"> </div>
<div id="pc-rg-24-3" style="display: none;">Front View<br>
<img src="http://www.risedisplay.com/images/cord_drops/RG24-H3P-Cords-61-90ft.jpg" height="60"
 width="816"> </div>
<div id="pc-rg-24-4" style="display: none;">Front View<br>
<img src="http://www.risedisplay.com/images/cord_drops/RG24-H4P-Cords-91-120ft.jpg" height="60"
 width="816"> </div>
<div id="pc-rg-24-5" style="display: none;">Front View<br>
<img src="http://www.risedisplay.com/images/cord_drops/RG24-H5P-Cords-121-150ft.jpg" height="60"
 width="816"> </div>
<div id="pc-rg-24-6" style="display: none;">Front View<br>
<img src="http://www.risedisplay.com/images/cord_drops/RG24-H6P-Cords-151-180ft.jpg" height="60"
 width="816"> </div>
<div id="pc-rg-24-7" style="display: none;">Front View<br>
<img src="http://www.risedisplay.com/images/cord_drops/RG24-H7P-Cords-181-210ft.jpg" height="60"
 width="816"> </div>
<div id="pc-rg-24-8" style="display: none;">Front View<br>
<img src="http://www.risedisplay.com/images/cord_drops/RG24-H8P-Cords-211-240ft.jpg" height="60"
 width="816"> </div>
<div id="pc-rg-24-9" style="display: none;">Front View<br>
<img src="http://www.risedisplay.com/images/cord_drops/RG24-H9P-Cords-241-250ft.jpg" height="60"
 width="816"> </div>
<!--DROP DISPLAY RGB 24 -->
<div id="pc-rgb-24-1" style="display: none;">Front View<br>
<img src="http://www.risedisplay.com/images/cord_drops/RGB24-H1P-Cords-3-20ft.jpg" height="60"
 width="816"> </div>
<div id="pc-rgb-24-2" style="display: none;">Front View<br>
<img src="http://www.risedisplay.com/images/cord_drops/RGB24-H2P-Cords-21-40ft.jpg" height="60"
 width="816"> </div>
<div id="pc-rgb-24-3" style="display: none;">Front View<br>
<img src="http://www.risedisplay.com/images/cord_drops/RGB24-H3P-Cords-41-60ft.jpg" height="60"
 width="816"> </div>
<div id="pc-rgb-24-4" style="display: none;">Front View<br>
<img src="http://www.risedisplay.com/images/cord_drops/RGB24-H4P-Cords-61-80ft.jpg" height="60"
 width="816"> </div>
<div id="pc-rgb-24-5" style="display: none;">Front View<br>
<img src="http://www.risedisplay.com/images/cord_drops/RGB24-H5P-Cords-81-100ft.jpg" height="60"
 width="816"> </div>
<div id="pc-rgb-24-6" style="display: none;">Front View<br>
<img src="http://www.risedisplay.com/images/cord_drops/RGB24-H6P-Cords-101-120ft.jpg" height="60"
 width="816"> </div>
<div id="pc-rgb-24-7" style="display: none;">Front View<br>
<img src="http://www.risedisplay.com/images/cord_drops/RGB24-H7P-Cords-121-140ft.jpg" height="60"
 width="816"> </div>
<div id="pc-rgb-24-8" style="display: none;">Front View<br>
<img src="http://www.risedisplay.com/images/cord_drops/RGB24-H8P-Cords-141-160ft.jpg" height="60"
 width="816"> </div>
<div id="pc-rgb-24-9" style="display: none;">Front View<br>
<img src="http://www.risedisplay.com/images/cord_drops/RGB24-H9P-Cords-161-180ft.jpg" height="60"
 width="816"> </div>
<div id="pc-rgb-24-10" style="display: none;">Front View<br>
<img src="http://www.risedisplay.com/images/cord_drops/RGB24-H10P-Cords-181-200ft.jpg" height="60"
 width="816"> </div>
<div id="pc-rgb-24-11" style="display: none;">Front View<br>
<img src="http://www.risedisplay.com/images/cord_drops/RGB24-H11P-Cords-201-220ft.jpg" height="60"
 width="816"> </div>
<div id="pc-rgb-24-12" style="display: none;">Front View<br>
<img src="http://www.risedisplay.com/images/cord_drops/RGB24-H12P-Cords-221-240ft.jpg" height="60"
 width="816"> </div>
<div id="pc-rgb-24-13" style="display: none;">Front View<br>
<img src="http://www.risedisplay.com/images/cord_drops/RGB24-H13P-Cords-241-250ft.jpg" height="60"
 width="816"> </div>
<form name="generatePdf" id="generatePdf" method="post" action="generate_pdf.php">
<input type="hidden" name="weightticker" value="" />
<input type="hidden" name="peakpowerticker" value="" />
<input type="hidden" name="avgpowerticker" value="" />
<input type="hidden" name="matrixlengthticker" value="" />
<input type="hidden" name="dropsticker" value="" />
<input type="hidden" name="dissipationticker" value="" />


<div id="insert-config" style="display: none;">
<h2>Rise
<div class="insert-length" style="display: inline;"></div>
<div class="insert-height" style="display: inline;"></div>
Pixel High
<div class="insert-color"
 style="display: inline; text-transform: uppercase;"></div>
LED</h2>
</div> 

<br>
  
  <table width="797" border="0">
  <tr>
    <td width="98">LED Color</td>
    <td width="124"><select name="color" id="color"
 style="width: 95px; font-family: Arial,Helvetica,sans-serif; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; font-size-adjust: none; font-stretch: normal; line-height: 15px;">
        <option value=""></option>
        <option value="rg">RG</option>
        <option value="rgb">RGB</option>
        </select></td>
    <td width="109"></td>
    <td width="448" colspan="3" rowspan="12">
	<div id="specs">
	<table width="489" cellpadding="0" cellspacing="0" class="spec-table">
  <col width="240"> <col width="200"> <tbody>
    <tr class="spec-table-header">
      <th scope="col" style="padding: 0pt 0pt 0pt 5px;" align="left">Ticker
Specifications<br>      </th>
      <th scope="col" style="padding: 0pt 0pt 0pt 5px;" align="left"><br>      </th>
    </tr>
    <tr>
      <td width="240">Weight<br>      </td>
      <td width="200">      </td>
    </tr>
    <tr>
      <td>Cabinet Dimensions (H x D)<br>      </td>
      <td>      </td>
    </tr>
    <tr>
      <td>Dimensions with Zee<br>
Mounting Bracket (H x D)<br>      </td>
      <td>      </td>
    </tr>
    <tr>
      <td>Power<br>      </td>
      <td>      </td>
    </tr>
    <tr>
      <td>Pixel Pitch<br>      </td>
      <td>      </td>
    </tr>
    <tr>
      <td>Matrix<br>      </td>
      <td>      </td>
    </tr>
	 <tr>
      <td>Color Depth:<br>      </td>
      <td>      </td>
    </tr>
    <tr>
      <td>Number of Power Drops<br>      </td>
      <td>      </td>
    </tr>
    <tr>
      <td>Network Traffic Max<br>      </td>
      <td>      </td>
    </tr>
    <tr>
      <td>Network Traffic Avg<br>      </td>
      <td>      </td>
    </tr>
    <tr>
      <td>Heat Dissipation<br>      </td>
      <td>      </td>
    </tr>
    
  </tbody>
</table>
	</div>
	<div id="pdfgenerate">

<div id="specs-16" style="display: none; width: 440px; float: left;">
<table class="spec-table" cellpadding="0" cellspacing="0">
  <col width="240"> <col width="200"> <tbody>
    <tr class="spec-table-header">
      <th scope="col" style="padding: 0pt 0pt 0pt 5px;" align="left">Ticker
Specifications<br>      </th>
      <th scope="col" style="padding: 0pt 0pt 0pt 5px;" align="left"><br>      </th>
    </tr>
    <tr>
      <td width="240">Weight<br>      </td>
      <td width="200">
      <div id="weight-16" style="display: inline;">3.5 lbs x ft.</div>
lbs<br>      </td>
    </tr>
    <tr>
      <td>Cabinet Dimensions (H x D)<br>      </td>
      <td>5.8" x 3"<br>      </td>
    </tr>
    <tr>
      <td>Dimensions with Zee<br>
Mounting Bracket (H x D)<br>      </td>
      <td>5.8" x 4.25"<br>      </td>
    </tr>
    <tr>
      <td>Power<br>      </td>
      <td>
      <div id="peak-power-16" style="display: inline;">24 watts x ft.</div>
watts max,
      <div id="avg-power-16" style="display: inline;">8 watts x ft.</div>
A @ 120VAC<br>      </td>
    </tr>
    <tr>
      <td>Pixel Pitch<br>      </td>
      <td>.3" (7.6 mm)<br>      </td>
    </tr>
    <tr>
      <td>Matrix:<br>      </td>
      <td>16 x
      <div id="matrix-length-16" style="display: inline;">40 x ft.</div>
      <br>      </td>
    </tr>
	<tr>
      <td>Color Depth<br>      </td>
      <td>1      </td>
    </tr>
    <tr>
      <td>Number of Power Drops<br>      </td>
      <td>
      <div id="drops-16">ft/30</div>
      <br>      </td>
    </tr>
    <tr>
      <td>Network Traffic Max<br>      </td>
      <td>30,000 bytes<br>      </td>
    </tr>
    <tr>
      <td>Network Traffic Avg<br>      </td>
      <td>1460 bytes<br>      </td>
    </tr>
    <tr>
      <td>Heat Dissipation<br>      </td>
      <td>
      <div id="dissipation-16" style="display: inline;">13 BTU/hr x ft</div>
BTU/hr<br>      </td>
    </tr>
    <!--<tr>
      <td colspan="2"> <br>
      <p><strong>Provided by Others (NOT the responsibility of Rise
Display)</strong></p>
      <span style="font-weight: 400 ! important;">
      <p>Confirm support structure can support the weight of the display</p>
      <p>Install high and low voltage per drawing</p>
      <p>If applicable, ensure displays, when installed confirm to any
building codes, city or state regulations</p>
      <p>If applicable, ensure displays, when installed confirm to the
American Disabilities Act (ADA)</p>
      <p>1.25" minimum distance required between top of display and
ceiling </p>
      </span> <br>
      </td>
    </tr>-->
  </tbody>
</table>
</div>
<div id="specs-24-rg" style="display: none; width: 440px; float: left;">
<table class="spec-table" cellpadding="0" cellspacing="0">
  <col width="240"> <col width="200"> <tbody>
    <tr class="spec-table-header">
      <th scope="col" style="padding: 0pt 0pt 0pt 5px;" align="left">Ticker
Specifications<br>      </th>
      <th scope="col" style="padding: 0pt 0pt 0pt 5px;" align="left"><br>      </th>
    </tr>
    <tr>
      <td width="240">Weight<br>      </td>
      <td width="200">
      <div id="weight-24rg" style="display: inline;">4.2 lbs x ft.</div>
lbs<br>      </td>
    </tr>
    <tr>
      <td>Cabinet Dimensions (H x D)<br>      </td>
      <td>8.2" x 3"<br>      </td>
    </tr>
    <tr>
      <td>Dimensions with Zee<br>
Mounting Bracket (H x D)<br>      </td>
      <td>8.2" x 4.25"<br>      </td>
    </tr>
    <tr>
      <td>Power<br>      </td>
      <td>
      <div id="peak-power-24rg" style="display: inline;">36 watts x ft.</div>
watts max,
      <div id="avg-power-24rg" style="display: inline;">12 watts x ft.</div>
A @ 120VAC<br>      </td>
    </tr>
    <tr>
      <td>Pixel Pitch<br>      </td>
      <td>.3" (7.6 mm)<br>      </td>
    </tr>
    <tr>
      <td>Matrix<br>      </td>
      <td>24 x
      <div id="matrix-length-24rg" style="display: inline;">40 x ft.</div>
      <br>      </td>
    </tr>
	<tr>
      <td>Color Depth<br>      </td>
      <td>1      </td>
    </tr>
    <tr>
      <td>Number of Power Drops<br>      </td>
      <td>
      <div id="drops-24rg">ft/20</div>
      <br>      </td>
    </tr>
    <tr>
      <td>Network Traffic Max<br>      </td>
      <td>30,000 bytes<br>      </td>
    </tr>
    <tr>
      <td>Network Traffic Avg<br>      </td>
      <td>1460 bytes<br>      </td>
    </tr>
    <tr>
      <td>Heat Dissipation<br>      </td>
      <td>
      <div id="dissipation-24rg" style="display: inline;">17 BTU/hr x ft</div>
BTU/hr<br>      </td>
    </tr>
    <!--<tr>
      <td colspan="2"> <br>
      <p><strong>Provided by Others (NOT the responsibility of Rise
Display)</strong></p>
      <span style="font-weight: 400 ! important;">
      <p>Confirm support structure can support the weight of the display</p>
      <p>Install high and low voltage per drawing</p>
      <p>If applicable, ensure displays, when installed confirm to any
building codes, city or state regulations</p>
      <p>If applicable, ensure displays, when installed confirm to the
American Disabilities Act (ADA)</p>
      <p>1.25" minimum distance required between top of display and
ceiling </p>
      </span> <br>
      </td>
    </tr>-->
  </tbody>
</table>
</div>
<div id="specs-24-rgb" style="display: none; width: 440px; float: left;">
<table class="spec-table" cellpadding="0" cellspacing="0">
  <col width="240"> <col width="200"> <tbody>
    <tr class="spec-table-header">
      <th scope="col" style="padding: 0pt 0pt 0pt 5px;" align="left">Ticker
Specifications<br>      </th>
      <th scope="col" style="padding: 0pt 0pt 0pt 5px;" align="left"><br>      </th>
    </tr>
    <tr>
      <td width="240">Weight<br>      </td>
      <td width="200">
      <div id="weight-24rgb" style="display: inline;">4.2 lbs x ft.</div>
lbs<br>      </td>
    </tr>
    <tr>
      <td>Cabinet Dimensions (H x D)<br>      </td>
      <td>8.2" x 3"<br>      </td>
    </tr>
    <tr>
      <td>Dimensions with Zee<br>
Mounting Bracket (H x D)<br>      </td>
      <td>8.2" x 4.25"<br>      </td>
    </tr>
    <tr>
      <td>Power<br>      </td>
      <td>
      <div id="peak-power-24rgb" style="display: inline;">108 watts x
ft.</div>
watts max,
      <div id="avg-power-24rgb" style="display: inline;">36 watts x ft.</div>
A @ 120VAC<br>      </td>
    </tr>
    <tr>
      <td>Pixel Pitch<br>      </td>
      <td>.3" (7.6 mm)<br>      </td>
    </tr>
    <tr>
      <td>Matrix<br>      </td>
      <td>24 x
      <div id="matrix-length-24rgb" style="display: inline;">40 x ft.</div>
      <br>      </td>
    </tr>
	<tr>
      <td>Color Depth<br>      </td>
      <td>8      </td>
    </tr>
    <tr>
      <td>Number of Power Drops<br>      </td>
      <td>
      <div id="drops-24rgb">ft/20</div>
      <br>      </td>
    </tr>
    <tr>
      <td>Network Traffic Max<br>      </td>
      <td>30,000 bytes<br>      </td>
    </tr>
    <tr>
      <td>Network Traffic Avg<br>      </td>
      <td>1460 bytes<br>      </td>
    </tr>
    <tr>
      <td>Heat Dissipation<br>      </td>
      <td>
      <div id="dissipation-24rgb" style="display: inline;">22 BTU/hr x
ft</div>
BTU/hr<br>      </td>
    </tr>
    <!--<tr>
      <td colspan="2"> <br>
      <p><strong>Provided by Others (NOT the responsibility of Rise
Display)</strong></p>
      <span style="font-weight: 400 ! important;">
      <p>Confirm support structure can support the weight of the display</p>
      <p>Install high and low voltage per drawing</p>
      <p>If applicable, ensure displays, when installed confirm to any
building codes, city or state regulations</p>
      <p>If applicable, ensure displays, when installed confirm to the
American Disabilities Act (ADA)</p>
      <p>1.25" minimum distance required between top of display and
ceiling </p>
      </span> <br>
      </td>
    </tr>-->
  </tbody>
</table>
</div>
</div>	</td>
    </tr>
  <tr>
    <td>Ticker Length</td>
    <td><select name="length" id="length"
 style="width: 95px; font-family: Arial,Helvetica,sans-serif; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; font-size-adjust: none; font-stretch: normal; line-height: 15px;">
        <option value=""></option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
        <option value="31">31</option>
        <option value="32">32</option>
        <option value="33">33</option>
        <option value="34">34</option>
        <option value="35">35</option>
        <option value="36">36</option>
        <option value="37">37</option>
        <option value="38">38</option>
        <option value="39">39</option>
        <option value="40">40</option>
        <option value="41">41</option>
        <option value="42">42</option>
        <option value="43">43</option>
        <option value="44">44</option>
        <option value="45">45</option>
        <option value="46">46</option>
        <option value="47">47</option>
        <option value="48">48</option>
        <option value="49">49</option>
        <option value="50">50</option>
        <option value="51">51</option>
        <option value="52">52</option>
        <option value="53">53</option>
        <option value="54">54</option>
        <option value="55">55</option>
        <option value="56">56</option>
        <option value="57">57</option>
        <option value="58">58</option>
        <option value="59">59</option>
        <option value="60">60</option>
        <option value="61">61</option>
        <option value="62">62</option>
        <option value="63">63</option>
        <option value="64">64</option>
        <option value="65">65</option>
        <option value="66">66</option>
        <option value="67">67</option>
        <option value="68">68</option>
        <option value="69">69</option>
        <option value="70">70</option>
        <option value="71">71</option>
        <option value="72">72</option>
        <option value="73">73</option>
        <option value="74">74</option>
        <option value="75">75</option>
        <option value="76">76</option>
        <option value="77">77</option>
        <option value="78">78</option>
        <option value="79">79</option>
        <option value="80">80</option>
        <option value="81">81</option>
        <option value="82">82</option>
        <option value="83">83</option>
        <option value="84">84</option>
        <option value="85">85</option>
        <option value="86">86</option>
        <option value="87">87</option>
        <option value="88">88</option>
        <option value="89">89</option>
        <option value="90">90</option>
        <option value="91">91</option>
        <option value="92">92</option>
        <option value="93">93</option>
        <option value="94">94</option>
        <option value="95">95</option>
        <option value="96">96</option>
        <option value="97">97</option>
        <option value="98">98</option>
        <option value="99">99</option>
        <option value="100">100</option>
        <option value="101">101</option>
        <option value="102">102</option>
        <option value="103">103</option>
        <option value="104">104</option>
        <option value="105">105</option>
        <option value="106">106</option>
        <option value="107">107</option>
        <option value="108">108</option>
        <option value="109">109</option>
        <option value="110">110</option>
        <option value="111">111</option>
        <option value="112">112</option>
        <option value="113">113</option>
        <option value="114">114</option>
        <option value="115">115</option>
        <option value="116">116</option>
        <option value="117">117</option>
        <option value="118">118</option>
        <option value="119">119</option>
        <option value="120">120</option>
        <option value="121">121</option>
        <option value="122">122</option>
        <option value="123">123</option>
        <option value="124">124</option>
        <option value="125">125</option>
        <option value="126">126</option>
        <option value="127">127</option>
        <option value="128">128</option>
        <option value="129">129</option>
        <option value="130">130</option>
        <option value="131">131</option>
        <option value="132">132</option>
        <option value="133">133</option>
        <option value="134">134</option>
        <option value="135">135</option>
        <option value="136">136</option>
        <option value="137">137</option>
        <option value="138">138</option>
        <option value="139">139</option>
        <option value="140">140</option>
        <option value="141">141</option>
        <option value="142">142</option>
        <option value="143">143</option>
        <option value="144">144</option>
        <option value="145">145</option>
        <option value="146">146</option>
        <option value="147">147</option>
        <option value="148">148</option>
        <option value="149">149</option>
        <option value="140">150</option>
        <option value="151">151</option>
        <option value="152">152</option>
        <option value="153">153</option>
        <option value="154">154</option>
        <option value="155">155</option>
        <option value="156">156</option>
        <option value="157">157</option>
        <option value="158">158</option>
        <option value="159">159</option>
        <option value="160">160</option>
        <option value="161">161</option>
        <option value="162">162</option>
        <option value="163">163</option>
        <option value="164">164</option>
        <option value="165">165</option>
        <option value="166">166</option>
        <option value="167">167</option>
        <option value="168">168</option>
        <option value="169">169</option>
        <option value="170">170</option>
        <option value="171">171</option>
        <option value="172">172</option>
        <option value="173">173</option>
        <option value="174">174</option>
        <option value="175">175</option>
        <option value="176">176</option>
        <option value="177">177</option>
        <option value="178">178</option>
        <option value="179">179</option>
        <option value="180">180</option>
        <option value="181">181</option>
        <option value="182">182</option>
        <option value="183">183</option>
        <option value="184">184</option>
        <option value="185">185</option>
        <option value="186">186</option>
        <option value="187">187</option>
        <option value="188">188</option>
        <option value="189">189</option>
        <option value="190">190</option>
        <option value="191">191</option>
        <option value="192">192</option>
        <option value="193">193</option>
        <option value="194">194</option>
        <option value="195">195</option>
        <option value="196">196</option>
        <option value="197">197</option>
        <option value="198">198</option>
        <option value="199">199</option>
        <option value="200">200</option>
        <option value="201">201</option>
        <option value="202">202</option>
        <option value="203">203</option>
        <option value="204">204</option>
        <option value="205">205</option>
        <option value="206">206</option>
        <option value="207">207</option>
        <option value="208">208</option>
        <option value="209">209</option>
        <option value="210">210</option>
        <option value="211">211</option>
        <option value="212">212</option>
        <option value="213">213</option>
        <option value="214">214</option>
        <option value="215">215</option>
        <option value="216">216</option>
        <option value="217">217</option>
        <option value="218">218</option>
        <option value="219">219</option>
        <option value="220">220</option>
        <option value="221">221</option>
        <option value="222">222</option>
        <option value="223">223</option>
        <option value="224">224</option>
        <option value="225">225</option>
        <option value="226">226</option>
        <option value="227">227</option>
        <option value="228">228</option>
        <option value="229">229</option>
        <option value="230">230</option>
        <option value="231">231</option>
        <option value="232">232</option>
        <option value="233">233</option>
        <option value="234">234</option>
        <option value="235">235</option>
        <option value="236">236</option>
        <option value="237">237</option>
        <option value="238">238</option>
        <option value="239">239</option>
        <option value="240">240</option>
        <option value="241">241</option>
        <option value="242">242</option>
        <option value="243">243</option>
        <option value="244">244</option>
        <option value="245">245</option>
        <option value="246">246</option>
        <option value="247">247</option>
        <option value="248">248</option>
        <option value="249">249</option>
        <option value="250">250</option>
        </select></td>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td>Pixel Height</td>
    <td><select name="height" id="height"
 style="width: 95px; font-family: Arial,Helvetica,sans-serif; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; font-size-adjust: none; font-stretch: normal; line-height: 15px;">
        <option value=""></option>
        <option value="16">16</option>
        <option value="24">24</option>
        </select></td>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td colspan="2" rowspan="8">
	<div class="pdfheader" id="pdf" style="display:none;">
	<a href="#" onclick='generatHtml()'><b>Generate Specification in PDF</b></a>
	<br /><br />
	To view PDF's you must have Adobe Reader installed. Click the 'Get Adobe Reader" link below if you do not already have this installed on your machine. Once the PDF is generated, you can save the file to your PC.
	<br /><br />
	<a href="http://www.adobe.com/products/reader/" target="_blank"><img src="http://www.risedisplay.com/images/get_adobe_reader.gif" height="33" width="112"></a>
	</div>
	</td>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    </tr>
</table>
  
  	
</form>
<br>
<br>
</div>
<br>
</div>
<script type="text/javascript">
function generatHtml(){
	//alert(document.getElementById('generatePdf').innerHTML);
	var color = document.getElementById('color').value;
	var height = document.getElementById('height').value;
	var length = document.getElementById('length').value;
	//alert(color);alert(height);alert(length);			
	if(color == 'rg' && height == '16')
	{
		var weight="weight-16";
		var peakpower="peak-power-16";
		var avgpower="avg-power-16";
		var matrixlength="matrix-length-16";
		var drops="drops-16";
		var dissipation="dissipation-16";						
	}
	else if(color == 'rg' && height == '24')
	{
		var weight="weight-24rg";
		var peakpower="peak-power-24rg";
		var avgpower="avg-power-24rg";
		var matrixlength="matrix-length-24rg";
		var drops="drops-24rg";						
		var dissipation="dissipation-24rg";								
	}
	else if(color == 'rgb' && height == '24')
	{
		var weight="weight-24rgb";
		var peakpower="peak-power-24rgb";
		var avgpower="avg-power-24rgb";
		var matrixlength="matrix-length-24rgb";
		var drops="drops-24rgb";		
		var dissipation="dissipation-24rgb";										
	}
	
	pdfweight = document.getElementById(weight).innerHTML;
	pdfpeakpower = document.getElementById(peakpower).innerHTML;
	pdfavgpower = document.getElementById(avgpower).innerHTML;
	pdfmatrixlength = document.getElementById(matrixlength).innerHTML;
	pdfdrops = document.getElementById(drops).innerHTML;
	pdfdissipation = document.getElementById(dissipation).innerHTML;
	
	document.generatePdf.weightticker.value = pdfweight;
	document.generatePdf.peakpowerticker.value = pdfpeakpower;
	document.generatePdf.avgpowerticker.value = pdfavgpower;
	document.generatePdf.matrixlengthticker.value = pdfmatrixlength;
	document.generatePdf.dropsticker.value = pdfdrops;
	document.generatePdf.dissipationticker.value = pdfdissipation; 
	document.generatePdf.submit();

}
</script>

<div id="footer">
<p> <a href="/terms_and_conditions/" title="Terms &amp; Conditions">Terms
&amp; Conditions</a> |  2009 Rise Display <a href="/"
 title="Digital Signage Solutions">Digital Signage Solutions</a> |
866.770.1150 </p>
</div>
</div>
<!--<script src="https://risedisplay.foxycart.com/files/foxycart_includes.js" type="text/javascript" charset="utf-8"></script> -->
<script type="text/javascript" src="/includes/js_examples"></script>
<script type="text/javascript">
    var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
    document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script src="http://www.google-analytics.com/ga.js"
 type="text/javascript"></script>
<script type="text/javascript">
    var pageTracker = _gat._getTracker("UA-82239-2");
    pageTracker._initData();
    pageTracker._trackPageview();
</script>
<script type="text/javascript">
//alert(document.getElementById('pdfgenerate').innerHTML);
</script>

</body>
</html>
