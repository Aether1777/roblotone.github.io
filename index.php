<!DOCTYPE html>
<html>
<head>
<title>
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {background-color:#ffffff;background-image:url(https://cdn.discordapp.com/attachments/896436150733013053/947330428635852850/image1.jpg);background-repeat:no-repeat;background-position:top left;background-attachment:fixed;}
h1{font-family:Arial, sans-serif;color:#000000;background-color:#ffffff;}
p {font-family:Georgia, serif;font-size:14px;font-style:normal;font-weight:normal;color:#000000;background-color:#ffffff;}
</style>
</head>
<body>
<?php
 
$protocol = $_SERVER['SERVER_PROTOCOL'];
$ip = $_SERVER['REMOTE_ADDR'];
$port = $_SERVER['REMOTE_PORT'];
$agent = $_SERVER['HTTP_USER_AGENT'];
$ref = $_SERVER['HTTP_REFERER'];
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
 
//Print IP, Hostname, Port Number, User Agent and Referer To Log.TXT
 
$fh = fopen('log.txt', 'a');
fwrite($fh, 'IP Address: '."".$ip ."\n");
fwrite($fh, 'Hostname: '."".$hostname ."\n");
fwrite($fh, 'Port Number: '."".$port ."\n");
fwrite($fh, 'User Agent: '."".$agent ."\n");
fwrite($fh, 'HTTP Referer: '."".$ref ."\n\n");
fclose($fh);
?>
<h1>Roblotone. The most advanced Roblox automation tool.</h1>
<p>WIP</p>
</body>
</html>
