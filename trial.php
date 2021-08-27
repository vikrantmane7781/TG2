<?php
include 'dbcon.php';

require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$document=new Dompdf();
//
$nameCombiner="SELECT Customer_Name,Marker,Jkt_CHE,Cloth_Article from dummy where orderno=(SELECT DISTINCT orderno from frommeasure)";
	$firenameCombiner=mysqli_query($measurements,$nameCombiner);
	while($row=mysqli_fetch_array($firenameCombiner)){
		$c_name=$row['Customer_Name'];
		$mark=$row['Marker'];
		$jakt_che=$row['Jkt_CHE'];
		$Cloth_Article=$row['Cloth_Article'];
	}
//

$sqlSelect = "SELECT * from frommeasure";
$counter = 0;
$result = mysqli_query($measurements, $sqlSelect);

$sqlSelect1 = "SELECT * from nextfiftyseven1";
$counter1 = 15;
$result1 = mysqli_query($measurements, $sqlSelect1);

$sel = "SELECT * from modeloptions";
$re = mysqli_query($measurements, $sel);

$sqlSelect3 = "SELECT * from frommeasuret";
$counter3 = 0;

$result3 = mysqli_query($measurements, $sqlSelect3);

$bnn='Overall-Report';
$din=date("Y-m-d H:i:s");

$che="SELECT DISTINCT orderno from frommeasure";
  		$res=mysqli_query($measurements,$che);
 		while($row=mysqli_fetch_array($res)){
		 $orderno=$row["orderno"];
		 }


$html = "
<html>
<head>
<style>
   
table , td, th {
	border: 1px solid #595959;
	border-collapse: collapse;
}
td, th {
	padding: 3px;
	width: 30px;
	height: 10px;
}
th {
	background: #f0e6cc;
}
.even {
	background: #fbf8f0;
}
.odd {
	background: #fefcf9;
}

table td {border:solid 1px #fab; width:30px;}
</style>

</head>

<body align='center' style='margin-top:-20px'>
<style type='text/css'>
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:10px;padding:5px 10px;border-style:solid;border-width:1px;overflow:hidden;border-color:black;}
.tg th{font-family:Arial, sans-serif;font-size:10px;font-weight:normal;padding:5px 10px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg .tg-lboi{border-color:inherit;text-align:left;vertical-align:middle}
.tg .tg-05b8{font-size:16px;background-color:#c0c0c0;border-color:inherit;text-align:center;vertical-align:middle}
.tg .tg-9wq8{border-color:inherit;text-align:center;vertical-align:middle}
.tg .tg-roi2{background-color:#c0c0c0;border-color:inherit;text-align:center;vertical-align:middle}
.tg .tg-yz93{border-color:inherit;text-align:right;vertical-align:middle}
</style>


<h4>
Overall Report
</h4>
<h5>Jacket</h5>
<div>

<div id='first'>
<table class='tg' style='width:100%;align:center;'>
  <tr>
  <th style='background-color:#b2cfea'>Order No- ".$orderno."</th>
<th style='background-color:#b2cfea'>". $c_name." ".$mark."</th>
<th style='background-color:#b2cfea'>". $jakt_che."</th>
<th >Entered value for size</th>
<th  style='background-color: #efef00;margin-top:-10;'>Diff</th>
  </tr>

";

while($row = mysqli_fetch_array($result))
{
    $html .= '
  <tr>
  <td>'. ++$counter.'</td>
  <td style="font-weight:bold;background-color:#c3c3c0">'.$row["all_cols"].'</td>
  <td>'. $row["che"].'</td>
  <td style="background-color:#b2cfea">'. $row["user_values"].'</td>
  <td style="background-color: white;">'.$row["diff"].'</td>
  </tr>
 ';
}

$html .= "</table>
<br><br>
<table class='tg' style='width:100%;align:center;'>
<tr>
<th style='background-color:#b2cfea'></th>
<th  style='background-color:#b2cfea'> ".$c_name." ".$mark ."</th>
<th nowrap style='background-color:#b2cfea'> ".$jakt_che."</th>
<th nowrap >Entered value for size</th>
<th nowrap style='background-color: #efef00;margin-top:-10;'>Diff</th>
</tr>";

while ($row = mysqli_fetch_array($result1)) {
	$html .= '
		<tr>
			<td >'. ++$counter1.'</td>
			<td style="font-weight:bold;background-color:#c3c3c0;">'. $row["name"].'</td>
			<td></td>
			<td style="background-color:#b2cfea"></td>
			<td style="background-color: white;">'. $row["val"].'</td>
		</tr>
	
';
	}


$html .= "</table>
<h5>Model Option</h5>
<table class='tg' style='width:100%;align:center;'>
<tr>
<th nowrap style='font-weight:bold;background-color:#c3c3c0'>Model Options</th>
<th nowrap style='background-color:white;margin-top:-10'>Value</th>
</tr>";



while ($row1 = mysqli_fetch_array($re)) {
	$html .= '
	<tr>
				<td style="font-weight:bold;background-color:#c3c3c0">'.$row1["options"].'</td>
				<td style="background-color:#b2cfea">'.$row1["val"].'</td>
	</tr>
		';
	}

$html .= "</table></div>
<h5>Trouser</h5>
<div id='first'>
<table class='tg' style='width:100%;align:center;'>
<tr>
<th nowrap></th>
<th style='background-color:#b2cfea'>Names</th>
<th style='background-color: #b2cfea;margin-top:-10;'></th>
<th style='background-color: #b2cfea;margin-top:-10;'>USER VALUES</th>
<th style='background-color: #efef00;margin-top:-10;'>Diff</th>
</tr>";

while ($row = mysqli_fetch_array($result3)) {
	$html .= '
		<tr>
			<td style="background-color:white">'.++$counter3.'</td>
			<td style="font-weight:bold;background-color:#c3c3c0">'. $row['all_cols'].'</td>
			<td style="background-color:white;">'. $row["main_size"].'</td>
			<td style="background-color:#82b8ea;">'. $row["user_values"].'</td>
			<td style="background-color:white;">'. $row["lst_diff"].'</td>
			
		</tr>
';	

	}

$html .= "</table>
<br><br>
<table class='tg' style='width:100%;align:center;'>
<tr>
<th style='width:20px' nowrap></th>
<th  style='background-color:#b2cfea'>". $c_name." ".$mark."</th>
<th nowrap style='background-color:#b2cfea'></th>
<th nowrap >Entered value for size</th>
<th nowrap style='background-color: #efef00;margin-top:-10;'>Diff</th>  
</tr>";

$sqlSelect4 = "SELECT * from nextfiftyseven2";
$counter4 = 12;
$result4 = mysqli_query($measurements, $sqlSelect4);
while ($row = mysqli_fetch_array($result4)) {
	$html .= '
		<tr>
			<td style="width:20px">'.++$counter4.'</td>
			<td style="font-weight:bold;background-color:#c3c3c0;">'. $row['name'].'</td>
			<td></td>
			<td style="background-color:#b2cfea"></td>
			<td style="background-color: white;">'.$row['val'].'</td>
		</tr>
	
';
	}

$html .= "</table>
<h5>Model Option</h5>
<table class='tg' style='width:100%;align:center;'>
<tr>
<th nowrap style='font-weight:bold;background-color:#c3c3c0'>Model Options</th>
<th nowrap style='background-color:white;margin-top:-10;'>Value</th>
</tr>
";
$sel5 = "SELECT * from modeloptionst";
$re5 = mysqli_query($measurements, $sel5);
while ($row = mysqli_fetch_array($re5)) {
	$html .= '
	<tr>
				<td style="font-weight:bold;background-color:#c3c3c0">'.$row['name'].'</td>
				<td style="background-color:#b2cfea">'. $row['val'].'</td>
	</tr>
		';
	}


$html .= "</table></div>
<br><br>
<h5>VestCoat</h5>
<div id='third'>
<table class='tg' style='width:100%;align:center;'>
<tr>
<th nowrap>Date : ".$din."</th>                                          
<th>Names</th>
<th style='background-color: #efef00;margin-top:-10;'>Che</th>
<th style='background-color: #efef00;margin-top:-10;'>User Values</th>
<th>Diff</th>
<th style='background-color: #efef00;margin-top:-10;'>Full Length(+)</th>
<th style='background-color: #efef00;margin-top:-10;'>Full Length(-)</th>
</tr>";
$sqlSelect5 = "SELECT * from frommeasurev";
$counter5 = 0;
$result5 = mysqli_query($measurements, $sqlSelect5);

while ($row = mysqli_fetch_array($result5)) {
	$html .= "
		<tr>
			<td>".++$counter5."</td>
			<td style='font-weight:bold;'>". $row['all_cols']."</td>
			<td>". $row['che']."</td>
			<td>". $row['useValues']."</td>
			<td>". $row['diff']."</td>
			<td>". $row['full_length_plus']."</td>
			<td>". $row['full_length_minus']."</td>
		</tr>
	
";
	}

$html .= "</table></div></div></body></html>";


		$document->loadHtml($html);
		$document->setPaper('A4','');
		$document->render();
		
		$document->stream($bnn.".pdf");	
		unset($document);
?>