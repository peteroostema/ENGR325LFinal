<?php
$file = "buttonStatus.txt";
$handle = fopen($file,'w+');
if (isset($_POST['on']))
{
$time_val = $_POST['time'];
$onstring = "ON ";
$writestring = $onstring . $time_val . " 1";
fwrite($handle,$writestring);
fclose($handle);
print "
<html>
<body>
<title>DIY Hacking</title>
<style type=text/css>
h1{
	padding-left: 300px;
}
h2{
	position: absolute;
	top: 100px;
	left: 450px;
}
</style>
<h1>DIY Hacking - Internet of Things Implementation</h2>
<h2>The Device has been Turned ON </h2>
</body>
</html>
";
}
else if(isset($_POST['off']))
{
$time_val = $_POST['time'];
$offstring = "OFF ";
$writestring = $onstring . $time_val . " 1";
fwrite($handle,$writestring);
fclose($handle);
print "
<html>
<body>
<title>DIY Hacking</title>
<style type=text/css>
h1{
	padding-left: 300px;
}
h2{
	position: absolute;
	top: 100px;
	left: 450px;
}
</style>
<h1>DIY Hacking - Internet of Things Implementation</h2>
<h2>The Device has been Turned OFF </h2>
</body>
</html>
";
}


?>
