<?php
error_reporting(0);
include 'dbcon.php';

$downSelect = "SELECT * FROM `dummy` WHERE `orderno`=(SELECT distinct orderno from frommeasure)";
	$qut=mysqli_query($measurements,$downSelect);
	while($row=mysqli_fetch_array($qut)){
		 $actualO=$row["Jkt_CHE"];	
		 $ider=$row['orderno'];
		 $mark=$row['Customer_Name'];
		 $marker='T'.$mark.'A';
		 $mark2='T'.$mark.'';
		 $mark3='T'.$mark.'RM';
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
		
		$markb='T'.$mark['0'].'B';
		//-------------------------------
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
		//-------------------------------
		if($gt_type=='CVPP' || $gt_type=='CPVP' || $gt_type=='PPCV' || $gt_type=='VPPC' || $gt_type=='PPVC' || $gt_type=='PCVP' || $gt_type=='VPCV' || $gt_type=='CPPV' || $gt_type=='VPCP' || $gt_type=='PVCP'){
			$quantity=2;
		}
		else{
			$quantity=1;
		}

$fileName22=$orderno.'-'.$mark;


//1che
$select1="SELECT diff as chediff from frommeasure where all_cols='1CHE'";
$que=mysqli_query($measurements,$select1);
$row=mysqli_fetch_array($que);
$che=$row['chediff'];
//gir
$sele2="SELECT diff as girdiff from frommeasure where all_cols='2GIR'";
$que2=mysqli_query($measurements,$sele2);
$row=mysqli_fetch_array($que2);
$gtx=$row['girdiff'];
//seat
$select3="SELECT diff as seatdiff from frommeasure where all_cols='3SEAT'";
$que3=mysqli_query($measurements,$select3);
$row=mysqli_fetch_array($que3);
$seat=$row['seatdiff'];
//4len
$select4="SELECT diff as lendiff from frommeasure where all_cols='4LEN'";
$que4=mysqli_query($measurements,$select4);
$row=mysqli_fetch_array($que4);
$len=$row['lendiff'];
//5FRTLEN
$select5="SELECT diff as frtlendiff from frommeasure where all_cols='5FRTLEN'";
$que5=mysqli_query($measurements,$select5);
$row=mysqli_fetch_array($que5);
$frtlen=$row['frtlendiff'];
//6pp
$select6="SELECT diff as ppdiff from frommeasure where all_cols='6PP'";
$que6=mysqli_query($measurements,$select6);
$row=mysqli_fetch_array($que6);
$pp=$row['ppdiff'];
//7backwdth
$select7="SELECT diff as backwdthdiff from frommeasure where all_cols='7BACKWDTH'";
$que7=mysqli_query($measurements,$select7);
$row=mysqli_fetch_array($que7);
$backwdthdiff=$row['backwdthdiff'];
//8slvout
$select8="SELECT diff as slvoutdiff from frommeasure where all_cols='8SLVOUT'";
$que8=mysqli_query($measurements,$select8);
$row=mysqli_fetch_array($que8);
$slvoutdiff=$row['slvoutdiff'];
//9bicep
$select9="SELECT diff as bicepdiff from frommeasure where all_cols='9BICEP'";
$que9=mysqli_query($measurements,$select9);
$row=mysqli_fetch_array($que9);
$bicepdiff=$row['bicepdiff'];
//lapk
$select10="SELECT diff as lapkdiff from frommeasure where all_cols='10LAPK'";
$que10=mysqli_query($measurements,$select10);
$row=mysqli_fetch_array($que10);
$lapkdiff=$row['lapkdiff'];
//lapp
$select11="SELECT diff as lappdiff from frommeasure where all_cols='11LAPP'";
$que11=mysqli_query($measurements,$select11);
$row=mysqli_fetch_array($que11);
$lappdiff=$row['lappdiff'];
//btn
$select12="SELECT diff as btndiff from frommeasure where all_cols='12BTN'";
$que12=mysqli_query($measurements,$select12);
$row=mysqli_fetch_array($que12);
$btndiff=$row['btndiff'];
//wrist
$select13="SELECT diff as wristdiff from frommeasure where all_cols='13WRIST'";
$que13=mysqli_query($measurements,$select13);
$row=mysqli_fetch_array($que13);
$wristdiff=$row['wristdiff'];
//ahdepth
$select14="SELECT diff as ahdepthdiff from frommeasure where all_cols='14AHDEPTH'";
$que14=mysqli_query($measurements,$select14);
$row=mysqli_fetch_array($que14);
$ahdepthdiff=$row['ahdepthdiff'];
//vent
$select15="SELECT diff as ventdiff from frommeasure where all_cols='15VENT'";
$que15=mysqli_query($measurements,$select15);
$row=mysqli_fetch_array($que15);
$ventdiff=$row['ventdiff'];


$downloadersJ_shell = array(
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
'f:'.$offset.'',
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
'm:Need to check',
'#alteration library',
't:HARI-JKT',
'#sizecode',
'z:'.$mark2.'', 
'#model size',
's:'.$Jkt_CHE.'',
'#quantity',
'q:'.$quantity.'',
'#fabric type',
'0:B',
'#model options'
);


$downloadersJ_lining=array(
'#LINING',
'#Order created from CSV wizard',
'#',
' =:order',
'#order name',
'o:'.$markb.'',
'# marker name',
'5:'.$markb.'',
'# description',
'd:',
'#order number',
'4:'.$mark2.'',
'#width',
'w:'.$wid.'',
'#target utilization',
'u:'.$offset.'',
'#annotation table',
'a:IMP-US',
'#block buffer',
'b:BUFFER LG -S95',
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
't:HARI-JKT',
'#sizecode',
'z:'.$mark2.'',
'#model size',
's:'.$Jkt_CHE.'',
'#quantity',
'q:1',
'#fabric type',
'0:D',
'#model options'
);

$downloadersJ_size_code=array(
'#SizeCode from CSV wizard', 
'#', 
' =:SizeCode ',
'#SizeCode name', 
'',
'#Actual Size', 
'a:'.$actualO.'', 
'#ordered Size', 
'o:'.$actualO.'', 
'r:1CHE',
'v:'.$che.'',
'r:2GIR',
'v:'.$gtx.'',
'r:3SEAT',
'v:'.$seat.'',
'r:4LEN',
'v:'.$len.'',
'r:5FRTLEN',
'v:'.$frtlen.'',
'r:6PP',
'v:'.$pp.'',
'r:7BCKWDTH',
'v:'.$backwdthdiff.'',
'r:8SLVOUT',
'v:'.$slvoutdiff.'',
'r:9BICEP',
'v:'.$bicepdiff.'',
'r:10LAPK',
'v:'.$lapkdiff.'',
'r:11LAPP',
'v:'.$lappdiff.'',
'r:12BTN',
'v:'.$btndiff.'',
'r:13WRIST',
'v:'.$wristdiff.'',
'r:14AHDEPTH',
'v:'.$ahdepthdiff.'',
'r:15VENT',
'v:'.$ventdiff.'',
'r:16PLUSAH3',
'v:0',
'r:17ERECT ',
'v:0',
'r:18FULLCHES',
'v: 3/4',
'r:19HEADF',
'v:0',
'r:20LOWCLR',
'v:0',
'r:21PLUSAH2',
'v: 1/2',
'r:22MINUSCLR',
'v:0',
'r:23SLOPE',
'v:0',
'r:24BTN1',
'v:',
'r:25BTN3',
'v:',
'r:26ROPESLV',
'v:0',
'r:27SLANTPKT',
'v:0',
'r:28ADDLIFT',
'v:0',
'r:29NOOBW',
'v:0',
'r:30NODART',
'v:0',
'r:31FRTEDGE',
'v:0',
'r:32LEAFCLR',
'v:0',
'r:33LEFTDN',
'v:0',
'r:34RIGTDN',
'v:0',
'r:35FULCANV',
'v:0',
'r:36HALFCANV',
'v:0',
'r:37PATCHPKT',
'v:0',
'r:38SLVVENT',
'v:0',
'r:39SLVBACK',
'v:0',
'r:40SLVFW',
'v:0',
'r:41LONDONF',
'v:0',
'r:42PORTLYF',
'v:0',
'r:43DB',
'v:0',
'r:44TKTPKT',
'v:0',
'r:45CBPLUS',
'v:0',
'r:46SHGIRTHF',
'v: 1/2',
'r:47SHGIRTBK',
'v:0',
'r:48PLTPPK',
'v:0',
'r:49OPENDART',
'v:0',
'r:50PORTYGRI',
'v:0',
'r:51ATHLETIC',
'v:0',
'r:52STBTM',
'v:0',
'r:54WIDER-FR',
'v:0',
'r:55FLATCHEST',
'v:0',
'r:56HN',
'v:0.000',
'r:57OPENBK',
'v:0');


$downloadersJ_canvas=array(
'#Canvas',
'#Order created from CSV wizard',
'#',
' =:order',
'#order name',
'o:'.$mark3.'',
'# marker name',
'5:'.$mark3.'',
'# description',
'd:',
'#order number',
'4:'.$mark2.'',
'#width',
'w:'.$width.'',
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
't:HARI-JKT',
'#sizecode',
'z:TPeterJKT',
'#model size',
's:47',
'#quantity',
'q:1',
'#fabric type',
'0:GHS',
'#model options',

);


?>