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
		 $mark3='T'.$mark.'VEST';
		 $mark4='T'.$mark.'p';
		 $tptk='T'.$mark.'K';
         $tpeterB='T'.$mark.'B';
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
         $tpeterVest='T'.$mark.'VEST';
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


$downloadV_shell=array(
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
'm:',
'#alteration library',
't:HARI-VEST',
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

$downloadV_lining=array(
'#LINING',
'#Order created from CSV wizard',
'#',
' =:order',
'#order name',
'o:'.$tpeterB.'',
'# marker name',
'5:'.$tpeterB.'',
'# description',
'd:',
'#order number',
'4:'.$mark2.'',
'#width',
'w:'.$wid.'',
'#target utilization',
'u:0',
'#annotation table',
'a:IMP-US',
'#block buffer',
'b:'.$solid_type2.'',
'#laylimits table',
'l:LG-S95',
'#notch table',
'g:P-notch',
'#use order shrink/stretch',
'#order shrink x',
'xs:0',
'#order shrink y',
'ys:0',
'#',
'#order model',
'#',
'#model name',
'm:',
'#alteration library',
't:HARI-VEST',
'#sizecode',
'z:'.$tpeterVest.'',
'#model size',
's:',
'#quantity',
'q:'.$quantity.'',
'#fabric type',
'0:D',
'#model options'
);

$downloadV_sizecode=array(
'#',
'#SizeCode from CSV wizard',
'#',
' =:SizeCode',
'#SizeCode name',
's:TPeterVEST',
'#Actual Size',
'a:',
'#ordered Size',
'o:',
'r:1GRITH ',
'v:',
'r:2CHE',
'v:',
'r:3FLCB',
'v:',
'r:4BKL',
'v:',
'r:5PP',
'v:',
'r:6BACKWDTH',
'v:',
'r:7BP1',
'v:',
'r:8BP2',
'v:',
'r:9BP3',
'v:',
'r:10BP4',
'v:',
'r:11BP5',
'v:',
'r:12BP6',
'v:',
'r:13BP7',
'v:'
);