<?php
require_once(dirname(__FILE__) . '/../SiteConfig.php');
require_once($site_dbConnect);

$NumArgs = strlen($_REQUEST['query']);
$SearchVal = '%';

if (isset($_REQUEST['query'])){
	$SearchVal = $_REQUEST['query'];
}
if ($NumArgs > 0){
		$q = "SELECT Description, keyId FROM ComponentTypes
		WHERE Description LIKE '$SearchVal%'
		ORDER BY Description ASC;";
}
else{
		$q = "SELECT Description, keyId FROM ComponentTypes
		ORDER BY Description ASC;";
}
$r = @mysql_query($q,$db);

if ($NumArgs == 0){
	$jsonstring = '{"sucess":true,"records":[{"stateName":"Front End", "stateCode":"100"}';
	while ($row=@mysql_fetch_array($r)){
		$jsonstring .= ',{"stateName":"' . $row[0] . '", "stateCode":"' . $row[1] . '"}';
	}
	$jsonstring .= ']}';
}

if ($NumArgs >= 1){
	$cnt = 0;
	$jsonstring = '{"sucess":true,"records":[';
	while ($row=@mysql_fetch_array($r)){
		if ($cnt == 0){
			$jsonstring .= '{"stateName":"' . $row[0] . '", "stateCode":"' . $row[1] . '"}';
		}
		if ($cnt > 0){
			$jsonstring .= ',{"stateName":"' . $row[0] . '", "stateCode":"' . $row[1] . '"}';
		}
		$cnt += 1;
	}
	$jsonstring .= ']}';
}

echo $jsonstring;
?>