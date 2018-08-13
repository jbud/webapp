<?php 
// uses get arguments to generate webapp. Created by Joe Jackson 08/2018
?>
<html>
<head>
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
<meta name="apple-mobile-web-app-title" content="<?php echo $_GET["app-name"]?>" />
<meta name="viewport" content = "width = device-width, initial-scale = 1.0, minimum-scale = 1, maximum-scale = 1, user-scalable = no" />
	<title><?php echo $_GET["app-name"]?></title>
<script>
function OpenLink(){
        sleep(<?php echo $_GET["delay"];?>);
        window.location.href = "<?php echo $_GET["app-href"]?>";
    }
</script>
<link rel="apple-touch-icon" href="<?php echo $_GET["app-img"]?>" />
<link rel="apple-touch-startup-image" href="<?php echo $_GET["app-img"]?>">

</head>
<body onload="OpenLink()" style="background-color:<?php echo $_GET["app-color"]?>; background-image:url('<?php echo $_GET["app-img"]?>'); background-repeat:no-repeat; background-position: center;"></body>
</html>
