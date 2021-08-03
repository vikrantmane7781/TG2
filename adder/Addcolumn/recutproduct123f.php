<?php
ini_set('display_errors', 0);
error_reporting(E_ERROR | E_WARNING | E_PARSE); 
require 'PHPMailer/PHPMailerAutoload.php'; 
$conn = mysqli_connect("localhost","root","","login");


   if(isset($_GET['fetcher'])){
	  
	   $c = trim($_GET['fetcher'],"**");
	   
	   $sql1= "SELECT * FROM `overall` WHERE `OrderID`='$c'";
	   $result4 = mysqli_query($conn,$sql1);
	   if(mysqli_num_rows($result4)>0)
        {
			while($row=mysqli_fetch_array($result4))
			{
				$aoid2=$row['AOrderID'];
			}
		}
		
		 $sql2= "SELECT * FROM `overall` WHERE `AOrderID`='$aoid2'";
	     $result45 = mysqli_query($conn,$sql2);
	   if(mysqli_num_rows($result45)>0)
        {
			while($row=mysqli_fetch_array($result45))
			{
				$aoid22[]=$row['OrderID'];
			}
		}
		
		
		
		
	    $sql3= "SELECT * FROM `recut` WHERE `OrderId`='$aoid2'";
	   $result44 = mysqli_query($conn,$sql3);
	   $k123=0;
	   if(mysqli_num_rows($result44)>0)
        {
			while($row123=mysqli_fetch_array($result44))
			{
				
					$k123=1;
				
			}
			if($k123==1){
				$myObj->error123 = "noerror1";
			}
			else
			{
				$myObj->error123 = "noerror1";
			}
				
		}else{
			$myObj->error123 = "noerror1";
		}
	       $myObj->error = "noerror";
	   
		
		$sql = "SELECT * FROM overall WHERE OrderId='$c'";
		
		$result3 = mysqli_query($conn,$sql);
		$str = "";
		if(mysqli_num_rows($result3)>0)
        {
			
               while($row=mysqli_fetch_array($result3))
               {
				   
				    $myObj->buyer =  $row['Buyer'];
				    $myObj->aoid =  $row['AOrderID'];
		            $myObj->gtype = $row['AGarmentType']; 
		            $myObj->g1type = $row['GarmentType']; 
		            $myObj->sart = $row['Cloth_Article']; 
		            $myObj->sart1 = $row['lining_article']; 
		            $myObj->rmrk = $row['Remarks']; 
		            $myObj->slen = $row['IssuedFabric']; 
		            $myObj->slen1 = $row['OthersIssued']; 
					 //$other =$row['Others'];
//$myObj->carticle = $row['Cloth_Article']; 
	           }
			   $myObj->error = "noerror";
		}
	else{
	   $myObj->error = "error";
   }
		
		$myJSON = json_encode($myObj);
        
		echo $myJSON;
		
			
}
if(isset($_GET['OrderId']))
{
	    $date = date('Y-m-d', time());
	    $orderno= $_GET['OrderId'];
	    $aorderno= $_GET['aoid'];
		$buyer1= $_GET['buyer'];
		$garment= $_GET['gtype'];
		$garment1= $_GET['g1type'];
		$reason= $_GET['reason'];
		$section= $_GET['section'];
		$article1= $_GET['sart'];
		$other1= $_GET['sart1'];
		$Remarks1= $_GET['rmrk'];
		$ShellLen= $_GET['slen'];
		$OtherLen= $_GET['slen1'];
		$unit1= $_GET['unit'];
		$unit2= $_GET['unit12'];
		
		
	 if ($unit1 == "Centimeter"){
		$ShellLen = $ShellLen/100;
		
	 }
	 elseif ($unit1 == "Meter") {
		$ShellLen = $ShellLen;
		
	 }
	 elseif ($unit1 == "Inches") {
		$ShellLen = $ShellLen/39.37;
		
	 } elseif ($unit1 == "Yards"){
		$ShellLen = $ShellLen/1.094;
	 }else
	 {
		 $ShellLen = $ShellLen;
	 } 
		
	 if ($unit2 == "Centimeter"){
		$OtherLen = round($OtherLen/100,2);
		
	 }
	 elseif ($unit2 == "Meter") {
		$OtherLen = round($OtherLen,2);
		
	 }
	 elseif ($unit2 == "Inches") {
		$OtherLen = round($OtherLen/39.37,2);
		
	 } elseif ($unit2 == "Yards"){
		$OtherLen = round($OtherLen/1.094,2);
	 }else
	 {
		 $OtherLen = $OtherLen;
	 } 	
		
		$query =  "INSERT INTO `recut`(`OrderId`,`AOrderID`,`Reason`, `Buyer`, `Section`, `GarmentType`, `Date`, `Shell`, `Others`, `type`, `IssuedFabric`, `OthersIssued`,`Remarks`) VALUES ('".$aorderno."','".$orderno."', '".$reason."', '".$buyer1."', '".$section."', '".$garment."', '".$date."', '".$article1."', '".$other1."', '".$garment1."', '".$ShellLen."', '".$OtherLen."', '".$Remarks1."')"; 
                 
			
				 if(mysqli_query($conn,$query))
				 {
					 echo "<center><h3 style='color:white;'>Data Submitted</h3></center>";	
					  		
$tohjbghjhj='jeetendra@silvercrest.in,raghu.durai@silvercrest.in,kriti.priya@silvercrest.in,pooja.singh@silvercrest.in,ganeshan@silvercrest.in,';
$cckjbakskjasj='dipti@silvercrest.in,vbaprojects@silvercrest.in,akshay@silvercrest.in,';


							$data =<<< abc
<html>
<head>
</head>
<body>
<br /><br />
<p> Recut details for barcode :'$orderno'</p>

<br /><br />
<table >
<tr style='background-color:#f3c9a1;color:black;font-size:13px;'>
<th >Barcode</th>
<th >OrderId</th><th>Buyer </th>
<th >Garment Type</th><th>Reason </th>
<th >Section</th><th>Remark </th>
<th >Shell</th>
<th >Lining</th>

</tr>
<tr style='background-color:#faf5e8;color:black;font-size:13px;'>
<td style='text-align:center;'>$orderno</td>
<td style='text-align:center;'>$aorderno</td>
<td style='text-align:center;'>$buyer1</td>
<td style='text-align:center;'>$garment</td>
<td style='text-align:center;'>$reason</td>
<td style='text-align:center;'>$section</td>
<td style='text-align:center;'>$Remarks1</td>
<td style='text-align:center;'>$article1 Leng:$ShellLen </td>
<td style='text-align:center;'>$other1 Leng:$OtherLen </td>
</tr>
</table>
<br /><br /> Thank you,
<br />
<h4>Click here to check : <small><a href="http://ppd.silvercrest.in/">SCPL Live Tracking System</a></small></h4>
</body>
</html>
abc;
	date_default_timezone_set('Asia/Calcutta');	
    $mail = new PHPMailer;
  
    $mail->SMTPDebug = 0;
    
    $mail->isSMTP();
    
    $mail->Host = 'smtp.zoho.com';
    
    $mail->SMTPAuth = true;
        
    $mail->Username = 'automail@silvercrest.in';
    $mail->Password = 'Scpl@1234';
    
    $mail->SMTPSecure = "ssl";
     
    $mail->Port = 465;
    $mail->From = 'automail@silvercrest.in';  
    $mail->FromName = 'VBAProjects';
    
    $a = explode(',',$tohjbghjhj);
	foreach ($a as $ad) {
    $mail->addAddress(trim($ad));
	}
	
	$c=explode(',',$cckjbakskjasj);
	foreach($c as $cdv ){
	$mail->AddCC(trim($cdv));
	}
	
    $mail->isHTML(true);
    $mail->Subject = 'New Recut Request '.$orderno.':'.$section;
    $mail->Body = $data;
    $mail->AltBody = " plain text ";
    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
    else {
          
    }
				  
					
				 } 
				  
				 
		
}
?>
