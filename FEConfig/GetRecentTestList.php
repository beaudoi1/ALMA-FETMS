<?php
// called from dbGridRecentTestList.js
require_once(dirname(__FILE__) . '/../SiteConfig.php');
require_once($site_dbConnect);

$TestStatus = $_REQUEST['type'];
if ($TestStatus == 'All'){
    $TestStatus = "%";
}

$q = "SELECT keyId, keyFacility, Band, TS, fkTestData_Type, fkFE_Config, Notes
    FROM TestData_header
    WHERE fkFE_Config <> ''
    and fkDataStatus LIKE '$TestStatus'
    ORDER BY TS DESC LIMIT 200;";
$r = @mysql_query($q,$db);

$outstring = "[";
$rowcount = 0;

while ($row= @mysql_fetch_array($r)){
    $keyId = $row[0];
    $keyFacility = $row[1];
    $Band = $row[2];
    $TS = $row[3];
    $Notes = $row[6];

    //Get Test Data type
    $qfd = "SELECT Description FROM TestData_Types
            WHERE keyId = ".$row[4].";";

    $rfd = @mysql_query($qfd,$db);
    $TestType = @mysql_result($rfd,0,0);

    //Get FE SN
    $qfe = "SELECT Front_Ends.SN
            FROM Front_Ends,FE_Config
            WHERE FE_Config.fkFront_Ends = Front_Ends.keyFrontEnds
            AND FE_Config.keyFEConfig = ".$row['fkFE_Config'].";";
    $rfe = @mysql_query($qfe,$db);
    $fesn = @mysql_result($rfe,0,0);

    if ($rowcount == 0 ){
        $outstring .= "{'SN':'$fesn',";
    }
    if ($rowcount > 0 ){
        $outstring .= ",{'SN':'$fesn',";
    }

    $outstring .= "'Band':'$Band',";
    $outstring .= "'TS':'$TS',";
    $outstring .= "'keyId':'$keyId',";
    $outstring .= "'TestType':'$TestType',";
    $outstring .= "'Notes':'". @mysql_real_escape_string($Notes)."',";
    //$outstring .= "'Notes':'test',";
    $outstring .= "'keyFacility':'$keyFacility'}";

    $rowcount += 1;
}
$outstring .= "]";
echo $outstring;

?>