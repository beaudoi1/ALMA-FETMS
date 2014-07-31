<?php
require_once(dirname(__FILE__) . '/../SiteConfig.php');
require_once($site_classes . '/class.generictable.php');
require_once($site_classes . '/class.fecomponent.php');
require_once($site_classes . '/class.frontend.php');
require_once($site_classes . '/class.cryostat.php');
require_once($site_classes . '/class.dataplotter.php');
require_once($site_classes . '/class.wca.php');
require_once($site_NT . '/noisetempcalc.php');
require_once($site_IF . '/IFCalc.php');
require_once($site_root . '/test/Library/plotter.php');
require_once($site_classes . '/class.spec_functions.php');

require_once($site_dbConnect);

class TestData_header extends GenericTable{
    var $TestDataType;
    var $TestDataTableName;
    var $DataStatus;
    var $FE_Config;
    var $FrontEnd;
    var $Component;
    var $fe_keyId;
    var $NoiseFloorHeader;
    var $TestDataHeader;
    var $fWindow_Low;
    var $fWindow_High;
    var $SelectDatasets;
    var $swversion;
    var $fc; //facility
    var $subheader; //Generic table object, for a record in a subheader table

    public function Initialize_TestData_header($in_keyId, $in_fc, $in_feconfig = '', $InitFEComps = -1) {
        $this->swversion = "1.0.8";
        // 1.0.8 minor fix to require(class.wca.php)
        // 1.0.7 MM fixes so that we can run with E_NOTIFY
        // version 1.0.6 Moved code from here which instantiates classes derived from this one!   (to testdata.php, pending verification.)
        // version 1.0.5 MM code formatting fixes, fix Display_RawTestData() for LO Lock test.

        $this->fc = $in_fc;
        parent::Initialize("TestData_header",$in_keyId,"keyId",$in_fc,'keyFacility');

        $q = "SELECT Description, TestData_TableName FROM TestData_Types
              WHERE keyId = " . $this->GetValue('fkTestData_Type') . ";";
        $r = @mysql_query($q,$this->dbconnection) ; //or die('Failed on query in class.testdata_header.php line ' . __LINE__);
        $this->TestDataType      = @mysql_result($r,0);
        $this->TestDataTableName = @mysql_result($r,0,1);

        $q = "SELECT Description FROM DataStatus
              WHERE keyId = " . $this->GetValue('fkDataStatus') . ";";
        $r = @mysql_query($q,$this->dbconnection) ; //or die('Failed on query in class.testdata_header.php line ' . __LINE__);
        $this->DataStatus        = @mysql_result($r,0);

        $this->Component = new FEComponent();

        if ($this->GetValue('fkFE_Components') != ''){
            $this->Component->Initialize_FEComponent($this->GetValue('fkFE_Components'), $this->GetValue('keyFacility'));
            $q = "SELECT Description FROM ComponentTypes WHERE keyId = " . $this->Component->GetValue('fkFE_ComponentType') . ";";
            $r = @mysql_query($q, $this->dbconnection) ; //or die('Failed on query in class.testdata_header.php line ' . __LINE__);
            $this->Component->ComponentType = @mysql_result($r,0);
        }

        if (($this->GetValue('fkFE_Config') != "") && ($this->GetValue('fkFE_Config') != "0")){
            $qfe = "SELECT fkFront_Ends from FE_Config
                    WHERE keyFEConfig = " . $this->GetValue('fkFE_Config') . ";";
            $rfe = @mysql_query($qfe,$this->dbconnection) ; //or die('Failed on query in class.testdata_header.php line ' . __LINE__);
            $feid = @mysql_result($rfe,0);
            $this->fe_keyId = $feid;
            $this->FrontEnd = new FrontEnd();
            $this->FrontEnd->Initialize_FrontEnd($feid, $this->GetValue('keyFacility'),$InitFEComps);

            $this->Component->Initialize("Front_Ends",$feid,"keyFrontEnds",$this->GetValue('keyFacility'),'keyFacility');
            $this->Component->ComponentType = "Front End";
        }
    }

    public function NewRecord_TestData_header($in_fc = ''){
        $this->keyId_name = 'keyId';
        if ($in_fc == ''){
            $in_fc = $fc;
        }
        parent::NewRecord('TestData_header','keyId',$in_fc,'keyFacility');
    }

    public function getTestDataTypeNum($test_type) {
    	$q = "SELECT keyId FROM TestData_Types WHERE TestData_TableName = '" . $test_type ."'";
    	$r = @mysql_query($q, $this->dbconnection);
    	$value = @mysql_fetch_array($r);
    	return $value[0];
    }
    
    public function RequestValues_TDH() {
        if ($this->GetValue('fkTestData_Type') == 7){
            //IF Spectrum, Get noisefloor key
            $qnf = "SELECT MIN(fkNoiseFloorHeader) FROM IFSpectrum_SubHeader
                    WHERE fkHeader = $this->keyId
                    AND keyFacility = ". $this->GetValue('keyFacility') ."
                    LIMIT 1;";
            $rnf = @mysql_query($qnf,$this->dbconnection) ; //or die('Failed on query in class.testdata_header.php line ' . __LINE__);
            $this->NoiseFloorHeader = @mysql_result($rnf,0);
        }

        if (isset($_REQUEST['fkDataStatus'])){
            $this->SetValue('fkDataStatus', $_REQUEST['fkDataStatus']);
            $this->Update();
        }

        if (isset($_REQUEST['nfheader'])){
            $this->NoiseFloorHeader = $_REQUEST['nfheader'];
            //Update noisefloor values with selected value
            $qifs = "SELECT keyId FROM IFSpectrum_SubHeader
                   WHERE fkHeader = $this->keyId
                   AND keyFacility = ".$this->GetValue('keyFacility').";";

            $rifs = @mysql_query($qifs,$this->dbconnection) ; //or die('Failed on query in class.testdata_header.php line ' . __LINE__);

            while ($rowifs = @mysql_fetch_array($rifs)){
                $ifsub = new GenericTable();
                $ifsub->Initialize('IFSpectrum_SubHeader',$rowifs[0],'keyId',$this->GetValue('keyFacility'),'keyFacility');
                $ifsub->SetValue('fkNoiseFloorHeader', $this->NoiseFloorHeader);
                $ifsub->Update();
                unset($ifsub);
            }
        }
        if (isset($_REQUEST['Notes'])){
            $this->SetValue('Notes',$_REQUEST['Notes']);
            parent::Update();
        }
    }

    public function Display_Data_Cryostat($datatype){
        //Array of TestData_header objects (TestData_header)
        //[1] = First Rate of Rise
        //[2] = Warmup
        //[3] = Cooldown
        //[4] = Final Rate of Rise
        //[5] = Rate of Rise after adding CCA

        $c = new Cryostat();
        $c->Initialize_Cryostat($this->GetValue('fkFE_Components'), $this->GetValue('keyFacility'));

        echo "<table>";

        if ($c->tdheaders[$datatype]->subheader->GetValue('pic_rateofrise') != ""){
            echo "<tr><td><img src='" . $c->tdheaders[$datatype]->subheader->GetValue('pic_rateofrise') . "'></td></tr>";
        }
        if ($c->tdheaders[$datatype]->subheader->GetValue('pic_pressure') != ""){
            echo "<tr><td><img src='" . $c->tdheaders[$datatype]->subheader->GetValue('pic_pressure') . "'></td></tr>";
        }
        if ($c->tdheaders[$datatype]->subheader->GetValue('pic_temperature') != ""){
            echo "<tr><td><img src='" . $c->tdheaders[$datatype]->subheader->GetValue('pic_temperature') . "'></td></tr>";
        }
        echo "</table>";
    }

    public function Display_DataForm(){
        echo "<div style='width:300px'>";
        echo '<form action="' . $_SERVER["PHP_SELF"] . '" method="post">';
        echo "<table id = 'table1'>";
        echo "<tr><th>Test Data Notes</th></tr>";
        echo "<tr><td><textarea rows='6' cols='55' name = 'Notes'>"
        .stripcslashes($this->GetValue('Notes')).
        "</textarea>";
        echo "<input type='hidden' name='fc' value='".$this->GetValue('keyFacility')."'>";
        echo "<input type='hidden' name='keyheader' value='$this->keyId'>";
        echo "<br><input type='submit' name = 'submitted' value='SAVE'></td></tr>";
        echo "</form></table></div>";
    }

    public function Display_DataSetNotes(){
        //Display information for all TestData_header records
        if ( $this->GetValue('DataSetGroup') !=0 ){

            echo "<br><br>
            <div style='width:900px'>
            <table id = 'table1' border = '1'>";

            echo "<tr class = 'alt'><th colspan='3'>".$this->TestDataType ." data sets for TestData_header.DataSetGroup ".$this->GetValue('DataSetGroup')."</th></tr>";
            echo "<tr>
                    <th width='60px'>Key</th>
                    <th width='140px'>Timestamp</th>
                    <th>Notes</th></tr>";

            $qkeys = "SELECT keyId FROM `TestData_header`
                LEFT JOIN `FE_Config` ON `FE_Config`.keyFEConfig = `TestData_header`.fkFE_Config
                WHERE `TestData_header`.Band = " . $this->GetValue('Band') .
                " AND `TestData_header`.DataSetGroup = " . $this->GetValue('DataSetGroup') .
                " AND `FE_Config`.fkFront_Ends = $this->fe_keyId
                AND `TestData_header`.`fkTestData_Type` = ". $this->GetValue('fkTestData_Type');

            $rkeys = @mysql_query($qkeys,$this->dbconnection);

            $i=0;
            while ($rowkeys = @mysql_fetch_array($rkeys)){
            //for ($i=0;$i<count($this->TDHkeys);$i++){

                if ($i % 2 == 0){
                    $trclass = "alt";
                }
                if ($i % 2 != 0){
                   $trclass = "";
                }
                $t = new TestData_header();
                $t->Initialize_TestData_header($rowkeys['keyId'], $this->GetValue('keyFacility'), 0);
                echo "<tr class = $trclass>";
                echo "<td>" . $t->keyId . "</td>";
                echo "<td>" . $t->GetValue('TS') . "</td>";
                echo "<td style='text-align:left !important;'>" . $t->GetValue('Notes') . "</td>";
                echo "</tr>";
                $i+=1;
            }

            echo "</table></div>";
        } else {
            $this->Display_DataForm();
        }
    }

    public function Display_ExportToCSV(){
        echo '<form name = "ExportCSVButton" action= "export_to_csv.php" method="get">';
        echo "<input type='hidden' name='keyheader' value='" . $this->keyId . "' />";
        echo "<br><input type='submit' name = 'exportcsv' value='EXPORT TO CSV'>";
        echo '</form></div>';
    }

    public function Display_RawTestData(){
        $fkHeader = $this->keyId;
        $qgetdata = "SELECT * FROM $this->TestDataTableName WHERE
        fkHeader = $fkHeader AND fkFacility = ".$this->GetValue('keyFacility').";";

        switch($this->Component->GetValue('fkFE_ComponentType')){
            case 6:
                //Cryostat
                $q = "SELECT keyId FROM TEST_Cryostat_data_SubHeader
                      WHERE fkHeader = $this->keyId;";
                $r = @mysql_query($q,$this->dbconnection) ; //or die('Failed on query in class.testdata_header.php line ' . __LINE__);
                $fkHeader = @mysql_result($r,0,0);
                $qgetdata = "SELECT * FROM $this->TestDataTableName WHERE
                fkSubHeader = $fkHeader AND fkFacility = ".$this->GetValue('keyFacility').";";
                break;
        }

        switch($this->GetValue('fkTestData_Type')){
            case 57:
                //LO Lock test
                $qgetdata = "SELECT DT.*
                            FROM TEST_LOLockTest as DT, TEST_LOLockTest_SubHeader as SH, TestData_header as TDH
                            WHERE DT.fkHeader = SH.keyId AND DT.fkFacility = SH.keyFacility
                            AND SH.fkHeader = TDH.keyId AND SH.keyFacility = TDH.keyFacility"
                          . " AND TDH.Band = " . $this->GetValue('Band')
                          . " AND TDH.DataSetGroup = " . $this->GetValue('DataSetGroup')
                          . " AND TDH.fkFE_Config = " . $this->GetValue('fkFE_Config')
                          . " AND DT.IsIncluded = 1
                            ORDER BY DT.LOFreq ASC;";

                $this->TestDataTableName = 'TEST_LOLockTest';
                break;

            case 58:
                //Noise Temperature
                $q = "SELECT keyId FROM Noise_Temp_SubHeader
                      WHERE fkHeader = $this->keyId
                      AND keyFacility = " . $this->GetValue('keyFacility');
                $r = @mysql_query($q,$this->dbconnection);
                $subid = @mysql_result($r,0,0);
                $qgetdata = "SELECT * FROM Noise_Temp WHERE
                fkSub_Header = $subid AND keyFacility = ".$this->GetValue('keyFacility').";";
                $this->TestDataTableName = 'Noise_Temp';
                break;
            case 59:
                //fine LO Sweep
                $q = "SELECT keyId FROM TEST_FineLOSweep_SubHeader
                      WHERE fkHeader = $this->keyId
                      AND keyFacility = " . $this->GetValue('keyFacility');
                $r = @mysql_query($q,$this->dbconnection);
                $subid = @mysql_result($r,0,0);
                $qgetdata = "SELECT * FROM TEST_FineLOSweep WHERE
                fkSubHeader = $subid AND fkFacility = ".$this->GetValue('keyFacility').";";
                $this->TestDataTableName = 'TEST_FineLOSweep';
                break;
        }

        $q = "SHOW COLUMNS FROM $this->TestDataTableName;";
        $r = @mysql_query($q,$this->dbconnection) ; //or die('Failed on query in class.testdata_header.php line ' . __LINE__);

        echo        "<table id = 'table1'>";

        while ($row = @mysql_fetch_array($r)){
            echo "
                <th>$row[0]</th>";
        }


        $r = @mysql_query ($qgetdata, $this->dbconnection) ; //or die('Failed on query in class.testdata_header.php line ' . __LINE__);
        while($row = mysql_fetch_array($r)){
            echo "<tr>";
            for ($i=0;$i<count($row)/2;$i++){
                echo "<td>$row[$i]</td>";
            }
            echo"</tr>";
}

        echo "</table>";

        //echo "</div>";
    }

    public function DrawPlot(){
        //Determine which type of plot to draw...
        switch ($this->GetValue('fkTestData_Type')) {
        case "43":
            $plt->Plot_CCA_AmplitudeStability();
            break;

        case "29":
            $plt->Plot_WorkmanshipAmplitude();
            break;
        case "30":
            $plt->Plot_WorkmanshipPhase();
            break;
        case "31":
            $plt->Plot_Repeatability();
            break;
        case "33":
            $plt->Plot_CCA_PhaseDrift();
            break;
        case "36":
            $plt->Plot_CCA_InBandPower();
            break;
        case "37":
            $plt->Plot_CCA_TotalPower();
            break;
        case "34":
            $plt->Plot_CCA_GainCompression();
            break;
        case "41":
            $plt->Plot_CCA_IFSpectrum();
            break;
        case "35":
            $plt->Plot_CCA_PolAccuracy();
            break;
        case "39":
            $plt->Plot_CCA_IVCurve();
            break;
        case "7":
            //IFSpectrum
//            $ifspec = new IFSpectrum();
//            $ifspec->Initialize_IFSpectrum($this->keyId,$this->GetValue('keyFacility'));
//            $ifspec->GeneratePlots();
            break;
        case "56":
            $plt->Plot_PolAngles();
            break;
        case "57":
            $plt->Plot_LOLockTest();
            break;


        case "44":
            //AM Noise
            $this->Plot_WCA(45);
            break;
        case "45":
            //Amplitude Stability
            $this->Plot_WCA(45);
            break;
        case "46":
            //Output Power
            $this->Plot_WCA(46);
            break;
        case "47":
            //Phase Jitter
            $this->Plot_WCA(47);
            break;
        case "48":
            //Phase Noise
            $this->Plot_WCA(48);
            break;

        case "58":
            //FEIC Noise Temperature
            require(site_get_config_main());
        	$db = site_getDbConnection();
            $band = $this->GetValue('Band');
            $dsg = $this->GetValue('DataSetGroup');
            $fc = $this->GetValue('keyFacility');
            
            // Gets keyIds
            $q = "SELECT keyId FROM Noise_Temp_SubHeader
            WHERE fkHeader = $this->keyId AND keyFacility = $fc
            order by keyId ASC;" ;
            $r = @mysql_query($q, $db);
            $keyId = @mysql_result($r, 0, 0);
            
            // Gets FE serial number
            $q ="SELECT FE_Components.SN FROM FE_Components, FE_ConfigLink, FE_Config 
		        WHERE FE_ConfigLink.fkFE_Config = " . $this->GetValue('fkFE_Config'). " 
		        AND FE_Components.fkFE_ComponentType = 20 
		        AND FE_ConfigLink.fkFE_Components = FE_Components.keyId 
		        AND FE_Components.Band = " . $this->GetValue('Band') . " 
		        AND FE_Components.keyFacility =" . $this->GetValue('keyFacility') ." 
		        AND FE_ConfigLink.fkFE_ConfigFacility = FE_Config.keyFacility 
		        ORDER BY Band ASC;"; 
            $r = @mysql_query($q, $db);
            $sn = @mysql_result($r, 0, 0);
            
            $ns = new Specifications();
            $specs = $ns->getSpecs('FEIC_NoiseTemperature', $band);
            $ymax = $specs['NT20'] * 1.1; // upper y limit for plots
            
            $NT = new NTCalc();
            $NT->setParams($band, $dsg, $keyId, $fc, $sn);
            $NT->getCCAkeys(); // Gets CCA Keys from database, must be called before getIRData()
            $NT->getData(); // Gets noise temperature data
            $NT->getIRData(); // Gets image rejection data, requires getCCAkeys() to be called prior.
            $NT->calcNoiseTemp(); // Calculates corrected noise temperature for each Y factor
            $NT->getCCANTData(); // Gets cartridge manufacturer data.
            $plt = new plotter();
            $plt->setParams($NT->data, 'NoiseTempLibrary', $band);
            
            $labels = array();
            $temp = "TestData_header.keyId: $this->keyId, Version: $plt->version";
            $labels[] = $temp;
            $temp = $this->GetValue('TS') . ", FE Configuration " . $this->GetValue('fkFE_Config') . ", TcoldEff=" . $specs['CLTemp'] . " K";
            $labels[] = $temp;
            $sbmax = 2;
            if ($band == 9 || $band == 10) {
            	$sbmax = 1;
            }
            // Creates noise temp vs. LO freq plots for polarizations 0 and 1 and sidebands 1 and 2 for each polarization (4 plots)
            for ($pol=0; $pol<=1; $pol++) {
            	for ($sb=1; $sb<=$sbmax; $sb++) {
            		if ($sb == 1) {
            			$sideband = 'USB';
            			$xvar = 'RF_usb';
            		}
            		if ($sb == 2) {
            			$xvar = 'RF_lsb';
            			$sideband = 'LSB';
            		}
            		$yvar = "$pol$sb";
            			
            		$plt->plotSize(900, 600); // Plot size 900 pixels x 600 pixels
            		$saveas = "Band$band Pol$pol Sb$sb RF"; // Plot file name
            		$plt->plotOutput($saveas);
            		$plt->plotTitle('Receiver Noise Temperature Tssb corrected'); // Plot title
            		$plt->plotLabels(array('x' => 'RF (GHz)', 'y' => 'Tssb Corrected (K)', 'y2' => 'Difference from Spec (%)')); // Axis labels
            		$plt->plotYAxis(array('ymin' => 0, 'ymax' => $ymax, 'y2min' => 0, 'y2max' => 120)); // Y axis limits
            		$plt->checkIFLim('CenterIF'); // Deletes data that aren't in IF limits from specifications.
            		$plt->createTempFile($xvar, "Tssb_corr$yvar", 0); // Creates temp file for LO sideband vs corrected temperature
            		$plt->createTempFile($xvar, "Trx$yvar", 1); // Creates temp file for LO sideband vs cartridge data
            		$plt->createTempFile($xvar, "diff$yvar", 2); // Creates temp file for percent difference.
            		$plt->plotBMargin(6);
            		$att = array(); // Line attributes
            		$att[] = "lines lt 1 lw 3 title 'FEIC Meas Pol$pol $sideband'";
            		$att[] = "lines lt 3 title 'Car Group Meas Pol$pol $sideband'";
            		$att[] = "points lt -1 axes x1y2 title 'Diff relative to Spec'";
            		$plt->plotAddLabel($labels, array(array(0.01, 0.01), array(0.01, 0.04)));
            		$plt->plotData($att, count($att));
            		$plt->setPlotter($plt->genPlotCode());
            		system("$GNUPLOT $plt->plotter");
            	}
            }
            
            $plt->resetPlotter();
            
            $plt->setParams($NT->data, 'NoiseTempLibrary', $band);
            $plt->plotSize(900, 600);
            $saveas = "Band$band IF";
			$plt->plotOutput($saveas);
			$plt->plotTitle('Receiver Noise Temperature Tssb Corrected');
			$plt->plotLabels(array('x' => 'IF (GHz)', 'y' => 'Tssb (K)'));
			$plt->plotYAxis(array('ymin' => 0, 'ymax' => $ymax));
			$plt->plotKey('outside'); // sets legend outside of plot window
			$plt->plotBMargin(6);
			$plt->createTempFile('CenterIF', 'Tssb_corr01', 0); // Creates temp file for IF frequency vs corrected temp for pol 0 sb 1
			$plt->createTempFile('CenterIF', 'Tssb_corr02', 1); // Creates temp file for IF frequency vs corrected temp for pol 0 sb 2
			$plt->createTempFile('CenterIF', 'Tssb_corr11', 2); // Creates temp file for IF frequency vs corrected temp for pol 1 sb 1
			$plt->createTempFile('CenterIF', 'Tssb_corr12', 3); // Creates temp file for IF frequency vs corrected temp for pol 1 sb 2
			$new_specs = new Specifications();
			$specs = $new_specs->getSpecs('FEIC_NoiseTemperature', $band);
			// Creates temp file to plot 100% and 80 % RF specifications 
			$plt->createSpecsFile('CenterIF', array('NT20', 'NT80'), array("lines lt -1 lw 3 title '" . $specs['NT20'] . " K (100%)'", "lines lt 0 lw 1 title '" . $specs['NT80'] . " K (80%)'"), TRUE);
			$att = array();
			$att[] = "lines lt 1 lw 1 title 'Pol0sb1'";
			$att[] = "lines lt 2 lw 1 title 'Pol0sb2'";
			$att[] = "lines lt 3 lw 1 title 'Pol1sb1'";
			$att[] = "lines lt 4 lw 1 title 'Pol1sb2'";
			$plt->plotAddLabel($labels, array(array(0.01, 0.01), array(0.01, 0.04)));
			$plt->plotData($att, count($att));
			$plt->setPlotter($plt->genPlotCode());
			system("$GNUPLOT $plt->plotter");
			
			// Creates average RF vs. corrected temp (Excludes band 3)
			if ($band != 3) {
				$plt->resetPlotter();
				$plt->plotSize(900, 600);
				$saveas = "Band$band Avg RF";
				$plt->plotOutput($saveas);
				$plt->plotTitle('Receiver Noise Temperature Tssb Corrected');
				$plt->plotLabels(array('x' => 'LO (GHz)', 'y' => 'Average Tssb (K)'));
				$plt->plotYAxis(array('ymin' => 0, 'ymax' => $ymax));
				$plt->plotKey('outside');
				$plt->plotBMargin(6);
				$plt->checkIFLim('CenterIF');
				$plt->createTempFile('FreqLO', 'Tssb_corr01', 0, TRUE); // Creates temp file for LO vs. corrected temp for pol 0 sb 1. Averages over corrected temp
				$plt->createTempFile('FreqLO', 'Tssb_corr02', 1, TRUE); // for pol 0 sb 2
				$plt->createTempFile('FreqLO', 'Tssb_corr11', 2, TRUE); // for pol 1 sb 1
				$plt->createTempFile('FreqLO', 'Tssb_corr12', 3, TRUE); // for pol 1 sb 2
				$new_specs = new Specifications();
				$specs = $new_specs->getSpecs('FEIC_NoiseTemperature', $band);
				$plt->createSpecsFile('FreqLO', array('NT80'), array("lines lt -1 lw 3 title ' " . $specs['NT80'] . " K (80%)"));
				$att = array();
				$att[] = "linespoints lt 1 lw 1 title 'Pol0sb1'";
				$att[] = "linespoints lt 2 lw 1 title 'Pol0sb2'";
				$att[] = "linespoints lt 3 lw 1 title 'Pol1sb1'";
				$att[] = "linespoints lt 4 lw 1 title 'Pol1sb2'";
				$plt->plotAddLabel($labels, array(array(0.01, 0.01), array(0.01, 0.04)));
				$plt->plotData($att, count($att));
				$plt->setPlotter($plt->genPlotCode());
				system("$GNUPLOT $plt->plotter");
			}
        	
            break;

        case "59":
            //Fine LO Sweep
            $finelosweep = new FineLOSweep();
            $finelosweep->Initialize_FineLOSweep($this->keyId,$this->GetValue('keyFacility'));
            $finelosweep->DrawPlot();
            unset($finelosweep);
            break;

        case "38":
            //CCA Image Rejection (Sideband Ratio)
            $ccair = new cca_image_rejection();
            $ccair->Initialize_cca_image_rejection($this->keyId,$this->GetValue('keyFacility'));
            $ccair->DrawPlot();
            unset($ccair);
            break;
        }
    }

    public function Plot_WCA($datatype){
        $wca = new WCA();
        $wca->Initialize_WCA($this->GetValue('fkFE_Components'),$this->GetValue('keyFacility'));

        switch($datatype){
            case 44:
                $wca->Plot_AMNoise();
                break;
            case 45:
                $wca->Plot_AmplitudeStability();
                break;
            case 46:
                $wca->Plot_OutputPower();
                break;
            case 47:
                $wca->Plot_AMNoise();
                break;
            case 48:
                $wca->Plot_PhaseJitter();
                break;
            case 49:
                $wca->Plot_PhaseNoise();
                break;


        }

        unset($wca);
    }


    public function Display_PhaseStabilitySubHeader(){
        $sh = new GenericTable();
        $sh->Initialize('TEST_PhaseStability_SubHeader',$this->keyId,'fkHeader',$this->GetValue('keyFacility'),'fkFacility');
    }

    public function Display_Data_PolAngles(){
        $pa = new GenericTable();
        $pa->Initialize("SourceRotationAngles",$this->GetValue('Band'),"band");

        $nom_0_m90 = $pa->GetValue('pol0_copol') - 90;
        $nom_0_p90 = $pa->GetValue('pol0_copol') + 90;
        $nom_1_m90 = $pa->GetValue('pol1_copol') - 90;
        $nom_1_p90 = $pa->GetValue('pol1_copol') + 90;

        $pol0_min1 = 999;
        $pol0_min2 = 999;
        $pol1_min1 = 999;
        $pol1_min2 = 999;
        $min0_1_found = 0;
        $min0_2_found = 0;
        $min1_1_found = 0;
        $min1_2_found = 0;
        $angle_min0_1 = 0;
        $angle_min0_2 = 0;
        $angle_min1_1 = 0;
        $angle_min1_2 = 0;

        //Pol 0, first minimum
        $qpa = "SELECT MIN(amp_pol0)
                FROM TEST_PolAngles
                WHERE fkFacility = ".$this->GetValue('keyFacility')."
                AND
                fkHeader = $this->keyId
                and angle < ($nom_0_m90 + 10)
                and angle > ($nom_0_m90 - 10);";
        $rpa = @mysql_query($qpa,$this->dbconnection) ; //or die('Failed on query in class.testdata_header.php line ' . __LINE__);

        $pol0_min1 = @mysql_result($rpa,0);

        $qpa = "SELECT angle
                FROM TEST_PolAngles
                WHERE fkHeader = $this->keyId
                and fkFacility = ".$this->GetValue('keyFacility')."
                and ROUND(amp_pol0,5) = " . round($pol0_min1, 5) . "
                and angle < ($nom_0_m90 + 10)
                and angle > ($nom_0_m90 - 10);";
        $rpa = @mysql_query($qpa,$this->dbconnection) ; //or die('Failed on query in class.testdata_header.php line ' . __LINE__);

        $angle_min0_1 = @mysql_result($rpa,0);

        //Pol 0, 2nd minimum
        $qpa = "SELECT MIN(amp_pol0)
                FROM TEST_PolAngles
                WHERE fkHeader = $this->keyId
                AND fkFacility = ".$this->GetValue('keyFacility')."
                and angle < ($nom_0_p90 + 10)
                and angle > ($nom_0_p90 - 10);";
        $rpa = @mysql_query($qpa,$this->dbconnection) ; //or die('Failed on query in class.testdata_header.php line ' . __LINE__);

        $pol0_min2 = @mysql_result($rpa,0);

        $qpa = "SELECT angle
                FROM TEST_PolAngles
                WHERE fkHeader = $this->keyId
                AND fkFacility = ".$this->GetValue('keyFacility')."
                and ROUND(amp_pol0,5) = " . round($pol0_min2, 5) . "
                and angle < ($nom_0_p90 + 10)
                and angle > ($nom_0_p90 - 10);";
        $rpa = @mysql_query($qpa,$this->dbconnection) ; //or die('Failed on query in class.testdata_header.php line ' . __LINE__);

        $angle_min0_2 = @mysql_result($rpa,0);


        //Pol 1, first minimum
        $qpa = "SELECT MIN(amp_pol1)
                FROM TEST_PolAngles
                WHERE fkHeader = $this->keyId
                AND fkFacility = ".$this->GetValue('keyFacility')."
                and angle < ($nom_1_m90 + 10)
                and angle > ($nom_1_m90 - 10);";
        $rpa = @mysql_query($qpa,$this->dbconnection) ; //or die('Failed on query in class.testdata_header.php line ' . __LINE__);

        $pol1_min1 = @mysql_result($rpa,0);

        $qpa = "SELECT angle
                FROM TEST_PolAngles
                WHERE fkHeader = $this->keyId
                AND fkFacility = ".$this->GetValue('keyFacility')."
                and ROUND(amp_pol1,5) = " . round($pol1_min1, 5) . "
                and angle < ($nom_1_m90 + 10)
                and angle > ($nom_1_m90 - 10);";
        $rpa = @mysql_query($qpa,$this->dbconnection) ; //or die('Failed on query in class.testdata_header.php line ' . __LINE__);

        $angle_min1_1 = @mysql_result($rpa,0);

        //Pol 1, 2nd minimum
        $qpa = "SELECT MIN(amp_pol1)
                FROM TEST_PolAngles
                WHERE fkHeader = $this->keyId
                AND fkFacility = ".$this->GetValue('keyFacility')."
                and angle < ($nom_1_p90 + 10)
                and angle > ($nom_1_p90 - 10);";
        $rpa = @mysql_query($qpa,$this->dbconnection) ; //or die('Failed on query in class.testdata_header.php line ' . __LINE__);

        $pol1_min2 = @mysql_result($rpa,0);

        $qpa = "SELECT angle
                FROM TEST_PolAngles
                WHERE fkHeader = $this->keyId
                AND fkFacility = ".$this->GetValue('keyFacility')."
                and ROUND(amp_pol1,5) = " . round($pol1_min2, 5) . "
                and angle < ($nom_1_p90 + 10)
                and angle > ($nom_1_p90 - 10);";
        $rpa = @mysql_query($qpa,$this->dbconnection) ; //or die('Failed on query in class.testdata_header.php line ' . __LINE__);

        $angle_min1_2 = @mysql_result($rpa,0);

        echo "<div style = 'width:500px'><table id = 'table1'>";

        echo "<th colspan = 5>Band " . $this->GetValue('Band') . " Pol Angles At Minima</th>";
        echo "<tr><th>Pol</th>";
        echo "<th>Nominal Angle</th>";
        echo "<th>Actual Angle</th>";
        echo "<th>Actual - Nominal</th>";
        echo "</tr>";

        if (abs($nom_0_m90) < 181){
            $diff = round($angle_min0_1 - $nom_0_m90,2);
            if($angle_min0_1 != ''){
            echo "<tr><td><b>0</td><td><b>$nom_0_m90</b></td>";
            echo "<td><b>$angle_min0_1</b></td>";

            if (abs($diff) > 2){
                echo "<td bgcolor = '#ffccff'><b><font color='#ff0000'>$diff<font></b></td>";
            }
            else{
                echo "<td><b>$diff</b></td>";
            }
            echo "</tr>";
            }
        }

        if (abs($nom_1_m90) < 181){
            $diff1 = round($angle_min1_1 - $nom_1_m90,2);
            if ($angle_min1_1 != ''){
                echo "<tr><td><b>1</td><td><b>$nom_1_m90</b></td>";
                echo "<td><b>$angle_min1_1</b></td>";

                if (abs($diff1 - $diff) > 2){
                    echo "<td bgcolor = '#ffccff'><b><font color='#ff0000'>$diff1<font></b></td>";
                }
                else{
                    echo "<td><b>$diff1</b></td>";
                }
                echo "</tr>";
            }
        }

        if (abs($nom_0_p90) < 181){
            $diff0 = round($angle_min0_2 - $nom_0_p90 ,2);
            if ($angle_min0_2 != ''){
            echo "<tr><td><b>0</td><td><b>$nom_0_p90</b></td>";
            echo "<td><b>$angle_min0_2</b></td>";

            if (abs($diff0) > 2){
                echo "<td bgcolor = '#ffccff'><b><font color='#ff0000'>$diff0<font></b></td>";
            }
            else{
                echo "<td><b>$diff0</b></td>";
            }
            echo "</tr>";
            }
        }
        if (abs($nom_1_p90) < 181){
            $diff1 = round($angle_min1_2 - $nom_1_p90,2);
            if ($angle_min1_2 != ''){
                echo "<tr><td><b>1</td><td><b>$nom_1_p90</b></td>";
                echo "<td><b>$angle_min1_2</b></td>";

                if (abs($diff1 - $diff0) > 2){
                    echo "<td bgcolor = '#ffccff'><b><font color='#ff0000'>$diff1<font></b></td>";
                }
                else{
                    echo "<td><b>$diff1</b></td>";
                }
                echo "</tr>";
            }
        }

        echo "</table></div><br>";

    }

    public function UpdateIFPAIStatus($IFChannel = '%'){
        $qifs = "SELECT keyId FROM IFSpectrum_SubHeader
                   WHERE fkHeader = $this->keyId
                   AND IFChannel LIKE '$IFChannel'
                   AND keyFacility = ".$this->GetValue('keyFacility')."
                   ORDER BY Band ASC, FreqLO ASC, IFChannel ASC, IFGain ASC;";
        $rifs = @mysql_query($qifs,$this->dbconnection) ; //or die('Failed on query in class.testdata_header.php line ' . __LINE__);

        while ($rowifs = @mysql_fetch_array($rifs)){
            $ifsub = new GenericTable();
            $ifsub->Initialize('IFSpectrum_SubHeader',$rowifs[0],'keyId',$this->GetValue('keyFacility'),'keyFacility');

                $option_name = "pai_option_" . $ifsub->GetValue('keyId');

                if (isset($_REQUEST[$option_name])){
                    $ispai = 1;
                }
                if (!isset($_REQUEST[$option_name])){
                    $ispai = 0;
                }
                $ifsub->SetValue('IsPAI', $ispai);
                $ifsub->Update();

            unset($ifsub);
        }

        $localtime = localtime();
        echo "<b>Status changes saved.</b><br>";

        $this->SelectDatasets = 1;
    }
    /*
    public function UpdateLOLockIsIncludedStatus(){
        echo "Update lo lock data status...<br>";
        $qds = "SELECT keyId FROM TEST_LOLockTest_SubHeader
                       WHERE fkHeader = $this->keyId
                       AND fkFacility = ".$this->GetValue('keyFacility')."
                       ORDER BY TS ASC;";
        $rds = @mysql_query($qds, $this->dbconnection) ; //or die('Failed on query in class.testdata_header.php line ' . __LINE__);
        while ($rowds = @mysql_fetch_array($rds)){
            $id_subheader = $rowds[0];
            $qdata = "SELECT keyId, IsIncluded FROM TEST_LOLockTest
                   WHERE fkHeader = $id_subheader
                   AND fkFacility = ".$this->GetValue('keyFacility')."
                   ORDER BY LOFreq ASC;";


            $rdata = @mysql_query($qdata,$this->dbconnection) ; //or die('Failed on query in class.testdata_header.php line ' . __LINE__);
            while ($rowdata = @mysql_fetch_array($rdata)){
            $ifsub = new GenericTable();
                $ifsub->Initialize('TEST_LOLockTest',$rowdata[0],'keyId',$this->GetValue('keyFacility'),'fkFacility');



                    $option_name = "isincluded_option_" . $ifsub->GetValue('keyId');

                    if (isset($_REQUEST[$option_name])){
                        $isincluded = 1;
                    }
                    if (!isset($_REQUEST[$option_name])){
                        $isincluded = 0;
                    }
                    $ifsub->SetValue('IsIncluded', $isincluded);
                    $ifsub->Update();
                    //echo "Setting value: $option_name = " . $isincluded . "<br>";


                unset($ifsub);

            }
        }

            while ($rowifs = @mysql_fetch_array($rifs)){

            }
            //echo '<meta http-equiv="Refresh" content="1;url=testdata.php?sd=1&keyheader='.$this->keyId.'">';
            $localtime = localtime();
            echo "<b>Status changes saved.</b><br>";

            $this->SelectDatasets = 1;
    }*/

    public function DisplayDataSetSelector_Form($IFChannel = '%'){
        echo "<form name='paiform' action='" . $_SERVER['PHP_SELF'] . "' method='POST'>";
        //echo "<div style='border-radius:10px;background-color:#ff0000;width:700px;height:60px;'>Select datasets to be included in plots and tables.<br><br>
        //      Check the 'PAI' box for each measurement to be included.</div><br>";

        echo "<div style = 'width:550px'>";
        echo "<table id = 'table8'>";
                echo "<tr class='alt' ><th colspan = '6'>IF SPECTRUM MEASUREMENTS &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
                echo "<input name = 'submit_pai' type='submit' value='SAVE' /></th></tr>";


                echo "<th>Band</th>
                      <th>LO</th>
                      <th>IF Channel</th>
                      <th>IF Gain</th>
                      <th>Date</th>
                      <th>Status</th>";
            $rowcount = 0;

            $qifs = "SELECT keyId, IFChannel FROM IFSpectrum_SubHeader
                       WHERE fkHeader = $this->keyId
                       AND IFChannel LIKE '$IFChannel'
                       AND keyFacility = ".$this->GetValue('keyFacility')."
                       ORDER BY TS ASC;";

            $rifs = @mysql_query($qifs,$this->dbconnection) ; //or die('Failed on query in class.testdata_header.php line ' . __LINE__);

            while ($rowifs = @mysql_fetch_array($rifs)){
                $ifsub = new GenericTable();
                $ifsub->Initialize('IFSpectrum_SubHeader',$rowifs[0],'keyId',$this->GetValue('keyFacility'),'keyFacility');


                $qcheck = "SELECT * FROM IFSpectrum WHERE fkSubHeader = " . $ifsub->GetValue('keyId') . ";";
                    if ($rowcount % 2 == 0){
                        $tdstyle = " ";
                    }
                    if ($rowcount % 2 != 0){
                        $tdstyle = "class = 'alt'";
                    }
                    if ($ifsub->GetValue('IsPAI') != '1'){
                        $tdstyle = "class = 'alt3'";
                    }
                    echo "<tr $tdstyle>";
                    echo "<td>" . $ifsub->GetValue('Band') . "</td>";
                    echo "<td>" . $ifsub->GetValue('FreqLO') . "</td>";
                    echo "<td>" . $ifsub->GetValue('IFChannel') . "</td>";
                    echo "<td>" . $ifsub->GetValue('IFGain') . "</td>";
                    $csvurl = "../testdata/export_to_csv.php?keyheader=$this->keyId&ifsub=$ifsub->keyId&fc=" . $this->GetValue('keyFacility');

                    echo "<td><a href='$csvurl'>" . $ifsub->GetValue('TS') . "</a></td>";

                    $option_name = "pai_option_" . $ifsub->GetValue('keyId');

                    if ($ifsub->GetValue('IsPAI') == '1'){
                        echo "<td $tdstyle ><input type='checkbox' name='$option_name' value='1' checked> PAI<br></td></tr>";
                    }
                    else{
                        echo "<td $tdstyle ><input type='checkbox' name='$option_name' value='0'> PAI<br></td></tr>";
                    }

                    $rowcount += 1;

                unset($ifsub);
            }
            echo "</table></div>";
            echo "<input type='hidden' name = 'ifchannel' value='$IFChannel'>";
            echo "</form>";
    }



    public function Display_TestDataStatusSelector(){
        echo '
            <p><div style="width:500px;height:80px; align = "left"></p>
            <!-- The data encoding type, enctype, MUST be specified as below -->
            <form enctype="multipart/form-data" action="' . $_SERVER['PHP_SELF'] . '" method="POST">';

            $qdt = "SELECT keyId, Description FROM DataStatus
                ORDER BY keyId ASC;";
            $rdt = @mysql_query($qdt,$this->dbconnection) ; //or die('Failed on query in class.testdata_header.php line ' . __LINE__);

            echo "Test Data Status <select name = 'fkDataStatus' onChange = submit()>";
            //echo "Noise Floor Profile: <select name = 'nfheader'>";
            //echo "<option value = '0' selected = 'selected'>None</option>";
            while ($row = @mysql_fetch_array($rdt)){
                $dt_id = $row[0];
                $dt_desc = $row[1];
                if ($dt_id == $this->GetValue('fkDataStatus')){
                    echo "<option value = $dt_id selected = 'selected'>$dt_desc</option>";
                }
                if ($dt_id != $this->GetValue('fkDataStatus')){
                     echo "<option value = $dt_id>$dt_desc</option>";
                 }
             }

            echo "</select>";
            echo "<input type = 'hidden' name = 'keyheader' value = $this->TestDataHeader>";
            echo '</form>
                </div>';

    }
}
?>