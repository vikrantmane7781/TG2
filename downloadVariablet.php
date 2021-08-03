<?php
include 'dbcon.php';

$downSelect = "SELECT * FROM `dummy` WHERE `orderno`=(SELECT distinct orderno from frommeasure)";
	$qut=mysqli_query($measurements,$downSelect);
	while($row=mysqli_fetch_array($qut)){
		$actualO=$row["Jkt_CHE"];
		$ider=$row['orderno'];
		$mark=$row['Customer_Name'];
		 $marker='T'.$mark.'A';
		 $mark2='T'.$mark.'';
		 $mark3='T'.$mark.'TRS';
		 $mark4='T'.$mark.'p';
		 $tptk='T'.$mark.'K';
		 $plaid=$row['Plaid'];
		 $Stripe=$row['Stripe'];
		 $width=$row['Fabric_Width'];
		 $wid=$width-0.25;
		 $offset=$row['Offset'];
		 $Jkt_CHE=$row['Jkt_CHE'];
		 $gt_type=$row['Cloth_Article'];
		 $orderno=$row['orderno'];
		 $S95_SHELL_SOLID=$row['S95-SHELL_SOLID'];
		 $S95_SHELL_STP=$row['S95-SHELL_STP'];
		 $S95_SHELL_PLAID=$row['S95-SHELL_PLAID'];
		 $BUFFER_SOLID_S95=$row['BUFFER_SOLID-S95'];
		 $BUFFER_STP_S95=$row['BUFFER_STP-S95'];
		 $BUFFER_PLAID_S95=$row['BUFFER_PLAID-S95'];
		}
	
		if($S95_SHELL_SOLID==1){
			$solid_type=$S95_SHELL_SOLID;
		}elseif ($S95_SHELL_STP==1) {
			$solid_type=$S95_SHELL_STP;
		}else {
			$solid_type=$S95_SHELL_PLAID;
		}
		
		if ($BUFFER_SOLID_S95==1) {
			$solid_type2=$BUFFER_SOLID_S95;
		}elseif ($BUFFER_STP_S95==1) {
			$solid_type2=$BUFFER_STP_S95;
		}else{
			$solid_type2=$BUFFER_PLAID_S95;
		}

		if(strlen($gt_type)==1){
			$quantity=1;
		}elseif (strlen($gt_type)==2) {
			$quantity=2;
		}else {
			$quantity=3;
		}
//1che
$select1="SELECT diff as chediff from frommeasure where all_cols='1CHE'";
$que=mysqli_query($measurements,$select1);
$row=mysqli_fetch_array($que);
$che=$row['chediff'];



$downloadersT_shell = array(
'# Shell',
'#Order created from CSV wizard',
'#',
' =:order',
'#order name',
'o:'.$marker.'',
'# marker name',
'5:'.$marker.'',
'# CHECKS',
'y:'.$plaid.'',
'#STRIPES',
'x:'.$Stripe.'',
'#width',
'w:'.$wid.'',
'#target utilization',
'u:0',
'#annotation table',
'a:IMP-US',
'#block buffer',
'b:'.$solid_type2.'',
'#laylimits table',
'l:'.$solid_type.'',
'#notch table',
'g:P-notch',
'#use order shrink/stretch',
'#order shrink x',
'xs:-0.25',
'#order shrink y',
'ys:-0.25',
'#',
'#order model',
'#',
'#model name',
'm:TG-US-FF-TRS-1DART',
'#alteration library',
't:HARI-11-FF-TRS',
'#sizecode',
'z:'.$mark3.'',
'#model size',
's:',
'#quantity',
'q:'.$quantity.'',
'#fabric type',
'0:B',
'#model options'
);


$downloadersT_pocket = array(
'# Pocketing',	
'#Order created from CSV wizard	',
'#',	
' =:order',	
'#order name',	
'o:'.$mark4.'',	
'# marker name',	
'5:'.$mark4.'',	
'# CHECKS',	
'y:'.$plaid.'',	
'#STRIPES',	
'x:'.$Stripe.'',	
'#width	',
'w:27',	
'#target utilization',	
'u:0',	
'#annotation table',	
'a:IMP-US',	
'#block buffer',	
'b:'.$solid_type2.'',
'#laylimits table',	
'l:'.$solid_type.'',
'#notch table',	
'g:P-notch',	
'#use order shrink/stretch',	
'#order shrink x',	
'xs:-0.25',	
'#order shrink y',	
'ys:-0.25',	
'#',	
'#order model',	
'#',	
'#model name',	
'm:TG-US-FF-TRS-1DART',	
'#alteration library',	
't:HARI-11-FF-TRS',	
'#sizecode',	
'z:'.$mark3.'',	
'#model size',	
's:',	
'#quantity',	
'q:'.$quantity.'',	
'#fabric type',	
'0:D',	
'#model options'	

);



$downloadersT_lining =array(
'# Knee Lining',
'#Order created from CSV wizard',
'#',
' =:order',
'#order name',
'o:'.$tptk.'',
'# marker name',
'5:'.$tptk.'',
'# CHECKS',
'y:'.$plaid.'',
'#STRIPES',
'x:'.$Stripe.'',
'#width',
'w:27',
'#target utilization',
'u:0',
'#annotation table',
'a:IMP-US',
'#block buffer',
'b:'.$solid_type2.'',
'#laylimits table',
'l:'.$solid_type.'',
'#notch table',
'g:P-notch',
'#use order shrink/stretch',
'#order shrink x',
'xs:-0.25',
'#order shrink y',
'ys:-0.25',
'#',
'#order model',
'#',
'#model name',
'm:TG-US-FF-TRS-1DART',
'#alteration library',
't:HARI-11-FF-TRS',
'#sizecode',
'z:'.$mark3.'',
'#model size',
's:',
'#quantity',
'q:'.$quantity.'',
'#fabric type',
'0:C',
'#model options'
);

$downloadersT_sizecode=array(
'#',
'#SizeCode from CSV wizard',
'#',
' =:SizeCode',
'#SizeCode name',
's: '.$mark3.'',
'#Actual Size',
'a:',
'#ordered Size',
'o:',
'r:1WAIST',
'v:0',
'r:2SEAT',
'v:0',
'r:3THIGH',
'v:0',
'r:4KNEE',
'v:0',
'r:5BTM',
'v:0',
'r:6INSEAM',
'v:0',
'r:7OTSEAM',
'v:0',
'r:8TRURISE',
'v:0',
'r:9FRTRISE',
'v:0',
'r:10BKRISE',
'v:0',
'r:11URISE',
'v:0',
'r:12DPSEAT',
'v:0',
'r:13HIPFWD',
'v:0',
'r:14LWFRT',
'v:TKT PKT RT BW Slv Lin',
'r:15PLCROT',
'v:0',
'r:16RISEBK',
'v:0',
'r:17DEP1PLE',
'v:',
'r:18DEP2PLE',
'v:',
'r:19BPKTD',
'v:',
'r:20CUFF',
'v:0',
'r:21SLTHM',
'v:',
'r:22SQEXT',
'v:',
'r:23TRNPLT',
'v:',
'r:24WBHT',
'v:',
'r:25MINUSPEG',
'v:0',
'r:26FRTPKTD',
'v:',
'r:27FRTRISMS',
'v:',
'r:28BKRISPL',
'v:',
'r:29FRTRISPL',
'v:',
'r:30BKRISMS',
'v:',
'r:31ZIPPER',
'v:',
'r:32EXTENT',
'v:',
'r:33TNLLOOP',
'v:',
'r:34FPKTOPEN',
'v:',
'r:35FRTDART',
'v:0',
'r:36DEPTURN1',
'v:',
'r:37DEPTURN2',
'v:',
'r:3818PKT',
'v:0'
);

?>