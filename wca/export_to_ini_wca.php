<?php

require_once(dirname(__FILE__) . '/../SiteConfig.php');
require_once($site_classes . '/class.wca.php');

$fc = isset($_REQUEST['fc']) ? $_REQUEST['fc'] : '';
$id = isset($_REQUEST['keyId']) ? $_REQUEST['keyId'] : '';
$type = isset($_REQUEST['type']) ? $_REQUEST['type'] : 'fec';
// type is expected to be 'fec' or 'wca'

$wca = new WCA();
$wca->Initialize_WCA($id,$fc);

$band = $wca->GetValue('Band');
$fname = ($type=='wca') ? "WCA$band.ini" : "FrontEndControlDLL.ini";
$sn   = ltrim($wca->GetValue('SN'),'0');
$esn  = $wca->GetValue('ESN1');
$description = "Description=Band $band SN$sn";
if ($esn == $wca->keyId) {
    $esn = '';
}

header("Content-type: application/x-msdownload");
header("Content-Disposition: attachment; filename=$fname");
header("Pragma: no-cache");
header("Expires: 0");

if ($type == 'fec') {

    echo "[~WCA$band-$sn]\r\n";
    echo "$description\r\n";
    echo "Band=$band\r\n";
    echo "SN=$sn\r\n";
    echo "ESN=$esn\r\n";
    echo "FLOYIG=" . $wca->_WCAs->GetValue('FloYIG') . "\r\n";
    echo "FHIYIG=" . $wca->_WCAs->GetValue('FhiYIG') . "\r\n";

    //Get lowest LO
    //TODO: move into specs class
    $lowlo = "0.000";
    switch ($band){
        case 3:
            $lowlo = "92.00";
            break;
        case 4:
            $lowlo = "133.00";
            break;
        case 5:
            $lowlo = "171.00";
            break;
        case 6:
            $lowlo = "221.00";
            break;
        case 7:
            $lowlo = "283.00";
            break;
        case 8:
            $lowlo = "393.00";
            break;
        case 9:
            $lowlo = "614.00";
            break;
        case 10:
            $lowlo = "795.00";
            break;
    }

    echo "LOParams=1\r\n";
    $mstring = "LOParam01=$lowlo";
    $mstring .= ",1.00,1.00,";

    $mstring .= number_format(floatval($wca->_WCAs->GetValue('VG0')),2) . ",";
    $mstring .= number_format(floatval($wca->_WCAs->GetValue('VG1')),2) . "\r\n";
    echo $mstring;
    echo "\r\n\r\n\r\n";

} else if ($type=='wca') {

    // define loop bandwidth.
    // TODO: move into specs class.
    $loopBW = 9;
    switch ($band){
        case 3:
            $loopBW = 1;  // band 3  1 -> 15MHz/V (Band 3,6,7,10)
            break;
        case 4:
            $loopBW = 0;  // band 4  0 -> 7.5MHz/V (Band 4,5,8,9)
            break;
        case 5:
            $loopBW = 1;
            break;
        case 6:
            $loopBW = 1;
            break;
        case 7:
            $loopBW = 1;
            break;
        case 8:
            $loopBW = 0;
            break;
        case 9:
            $loopBW = 0;
            break;
        case 10:
            $loopBW = 1;
            break;
    }



echo <<<EOS
;
; WCA configuration file
;
; Make sure to end every line containing data with a LF or CR/LF
;

[INFO]
; Electronic Serial Number (ESN)
ESN=$esn
; WCA Serial Number
SN="$sn"

[PLL]
; PLL loop bandwidth select (0 - 7.5MHz/V, 1 - 15 MHz/V, 9 - not defined)
LOOP_BW=$loopBW

[SCALING]
; PLL lock voltage
PLL_LOCK=19.09090909
; PLL correction voltage
PLL_CORR=19.09090909
; Power supply voltage
SUPPLY_V=20.0
; Multiplier bias current
MULT_C=100.0
; YIG heater current scale
PLL_YIG_C_SCALE=400.0
; YIG heater current offset
PLL_YIG_C_OFFSET=150.0

[PA_LIMITS]
EOS;

    echo "\r\n";

    $powerLimit = $wca->maxSafePowerForBand($band);

    if ($powerLimit == 0)
        echo "ENTRIES=0\r\n";
    else {
        $table = $wca->Compute_MaxSafePowerLevels(TRUE);
        echo "ENTRIES=" . count($table) . "\r\n";

        $entry = 0;
        foreach ($table as $row) {
            $entry++;
            echo "ENTRY_$entry=" . $row['YTO'] . ", " . number_format($row['VD0'], 2, '.', '') . ", " .
                                                        number_format($row['VD1'], 2, '.', '') . "\r\n";
        }
    }
    echo "\r\n";
}

?>
