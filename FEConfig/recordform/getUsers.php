<?php
require_once(dirname(__FILE__) . '/../../SiteConfig.php');
require_once($site_dbConnect);

$q = "SELECT Initials, Name FROM Users ORDER BY Initials ASC;";
$r = @mysql_query($q,$db);

$jsonstring = '{"sucess":true,"records":[{"UserName":" ", "UserCode":" "}';
while ($row=@mysql_fetch_array($r)){
	$jsonstring .= ',{"UserName":"' . $row[1] . '", "UserCode":"' . $row[0] . '"}';
}
$jsonstring .= ']}';
echo $jsonstring;

?>