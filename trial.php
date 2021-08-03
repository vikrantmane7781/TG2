<?php
//include the file that loads the PhpSpreadsheet classes
require 'spreadsheet/vendor/autoload.php';

//include the classes needed to create and write .xlsx file
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

include 'dbcon.php';

$fileName="Output.xlsx";

//now you can use the Spreadsheet and Xlsx classes



$downSelect = "SELECT * FROM `dummy` WHERE `orderno`=(SELECT distinct orderno from frommeasure)";
	$qut=mysqli_query($measurements,$downSelect);
	while($row=mysqli_fetch_array($qut)){
		 $actualO=$row["Jkt_CHE"];	
		 $ider=$row['orderno'];
		 $mark=$row['Customer_Name'];
		 $marker='T'.$mark[0].'A';
		 $mark2='T'.$mark[0].'';
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
		if(strlen($gt_type)==1){
			$quantity=1;
		}elseif (strlen($gt_type)==2) {
			$quantity=2;
		}else {
			$quantity=3;
		}

//$fileName=$orderno.'-'.$mark;


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


/*

$downloadersJ_shell = array(
'# Shell',
'#Order created from CSV wizard',
'#',
'=:order',
'#order name',
'o:"'.$marker.'"',
'# marker name',
'5:"'.$marker.'"',
'# CHECKS',
'y:"'.$plaid.'"',
'#STRIPES',
'x:"'.$Stripe.'"',
'#width',
'w:"'.$wid.'"',
'#target utilization',
'f:"'.$offset.'"',
'#annotation table',
'a:IMP-US',
'#block buffer',
'b:"'.$solid_type2.'"',
'#laylimits table',
'l:"'.$solid_type.'"',
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
'z:"'.$mark2.'"', 
'#model size',
's:"'.$Jkt_CHE.'"',
'#quantity',
'q:"'.$quantity.'"',
'#fabric type',
'0:B',
'#model options',

) ;
  */

  $spreadsheet = new Spreadsheet();

//add some data in excel cells
$sheet = $spreadsheet->getActiveSheet(); 
$xyz="anksnknssa";
$abc=array('ds'.$xyz.'','dsd','dsds','ds','bjncnx','ninshan'.$xyz.'','ndjsnn','skjdks','dhushduhsu','viki'.$xyz.'','rohini'.$xyz.'','mane');



for($i=1;$i<=count($abc);$i++){
	$spreadsheet->setActiveSheetIndex(0)
	
	->setCellValue('A'.$i.'',$abc[$i]);
	
	}


//set style for A1,B1,C1 cells
$cell_st =[
	'font' =>['bold' => true],
	'alignment' =>['horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER],
	'borders'=>['bottom' =>['style'=> \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM]]
   ];
   //$spreadsheet->getActiveSheet()->getStyle('A1:Z1')->applyFromArray($cell_st);
   
   //set columns width
   $spreadsheet->getActiveSheet()->getColumnDimension('A')->setWidth(16);
   $spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth(18);
   
   $spreadsheet->getActiveSheet()->setTitle('Simple'); //set a title for Worksheet
   
   //make object of the Xlsx class to save the excel file
   
   $writer = new Xlsx($spreadsheet);
   header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
   header('Content-Disposition: attachment; filename="'. urlencode($fileName).'"');
   $writer->save('php://output');
?>