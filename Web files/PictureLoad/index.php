<?php
// Get your Steam API Key here : http://steamcommunity.com/dev/apikey

$SteamAPIKey = "STEAM API KEY HERE";

if (!isset($_GET["steamid"])) {
	die("It doesn't look like you are using the right url, this is how it should look : www.yourdomain.com/PictureLoad/index.php?steamid=%s");
}

$steamid64 = $_GET["steamid"];

$url = "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=" . $SteamAPIKey . "&steamids=" . $steamid64;
$json = file_get_contents($url);
$table2 = json_decode($json, true);
$table = $table2["response"]["players"][0];
?>

<!DOCTYPE html>
<html>
	<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<meta name="description" content="Just plain a plain loading screen!" />
	<title>Picture Load</title>
	<link href="style.css" rel="stylesheet" type="text/css" />
    <link href="bar.css" rel="stylesheet" type="text/css" />
	
    <script type="text/javascript" src="java/jquery.js"></script>
    <script type="text/javascript" src="java/cycle.js"></script>
    
    <script type="text/javascript">
	$(document).ready(function() {
		//Music Volume Modifier
		$('.audio').prop("volume", 0.5);
			
		$(window).resize(function(){
			  $('.core-wrapper').css({
			   position:'absolute',
			   left: ($(window).width() 
				 - $('.core-wrapper').outerWidth())/2,
			   top: ($(window).height() 
				 - $('.core-wrapper').outerHeight())/2
			  });	
		});
		$(window).resize();
		
		$('#background-scroll').cycle({ 
			fx: 'fade',
			pause: 0, 
			speed: 1800, //How long it takes to fade into the next image (milliseconds)
			timeout: 3500  //How long it looks at a single image (milliseconds)
		});
	});
    </script>
    

	</head>
	
	<body>
    
    <div id="background-scroll">
    	<div id="img1"></div><!-- BackGround 1 -->
        <div id="img2"></div><!-- BackGround 2 -->
        <div id="img3"></div><!-- BackGround 3 -->
        <div id="img4"></div><!-- BackGround 4 -->
        <div id="img5"></div><!-- BackGround 5 -->
        <div id="img6"></div><!-- BackGround 6 -->
		<div id="img7"></div><!-- BackGround 7 -->
		<div id="img8"></div><!-- BackGround 8 -->
		<div id="img9"></div><!-- BackGround 9 -->
		<div id="img0"></div><!-- BackGround 0 -->
   	</div>
    
    <div class="core-wrapper">
    	
        <img src="pic/logo.png" width="960" height="120" alt="Logo" />
        
        <div class="clear"></div>
        
        <div id="bar">
        	<div id="bar-width" style="width: 0%;"></div>
       	</div>
        
        <div id="percentage">
        	<p></p>
       	</div>
        
        <div id="download-item">
        	<p>Connecting...</p>
      	</div>
    
    </div>
    
		<!-- Add music here (The music must be a .ogg file, link to a converter = http://audio.online-convert.com/convert-to-ogg) -->
    <audio class="audio" autoplay autobuffer="autobuffer">
    	<source src="music/audio.ogg" type="audio/ogg"> <!-- Change the "src="audio.ogg" to your music directory in your web host example : src="music/asong.ogg"  -->
    </audio
    
    <script type="text/javascript" src="java/main.js"></script>

	</body>
</html>
