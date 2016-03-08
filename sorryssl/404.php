<!--
<!doctype php>
<?php
function curPageURL() {
 $pageURL = 'https';
 //if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}
?>
<html>
<head>
<meta charset="utf-8">
<title>YayPonies - Sorry !</title>
<style type="text/css">
.absolute {
	position: static;
}
body {
	background-color: #141010;
	font-size: 24px;
	color: #FFFFFF;
}

a{ color: #ff409f; font-weight: bold; }
a:hover{ color: #ff0080; text-decoration: underline; }
a.current{ color: gray !important; cursor: default; text-decoration: none; }
</style>
</head>

<body><center>
  <div>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p><img src="/sorry.png" width="640" height="352" alt=""/></p>
    <p style="font-size: 18px">The page you requested wasn't found on the Twilight library (Maybe because it burned)<br>
      If you think you're seeing that message by error please 
       <a href="mailto:contact@yayponies.eu?subject=[ERR404] - Page <?php echo curPageURL();?> is not found!">Contact us via mail</a>
      <br>
      Please keep the subject as definied in the mailto !</p>
    <p style="font-size: 16px; color: #ABABAB;">You tried to access <br/> 
	<a href="<?php echo curPageURL();?>"><?php echo curPageURL();?></a></p>
    <p style="font-size: 12px; color: #706E6E;"><a href="http://floppychiptunes.deviantart.com/art/MLP-G1-Derpy-362852961">MLP G1: Derpy! by FloppyChiptunes</a></p>
    <p style="font-size: 12px; color: #706E6E;">&nbsp;</p>
  </div>
</center>
</body>
</html>
-->
I haven't SSI-ified this just yet. Please come back later.