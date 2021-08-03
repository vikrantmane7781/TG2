
<?php 
	include 'layout/header.php';  
	include 'layout/aside.php';  
	include 'functions/ui_function.php';  
	
	$link = mysqli_connect("localhost", "root", "", "livetracking");
	
	
	getHeader(" New User","user","fa-user");
?>
<!---CONTENTS GOES HERE-->
    <!DOCTYPE html>
<html>
      <script src="dist/js/sweetalert.min.js"></script>
         <!--<div class="content-wrapper" >-->
        <!-- Content Header (Page header) -->
        <!--<section class="content-header">
          <h1>
            New User
            <small><?php date_default_timezone_set("Asia/Calcutta");
					$date = date('Y-m-d', time());
					$time = date('H:i:s', time());
					
						$datetime =$date." ".$time;
					echo " Last Updated: $datetime"; ?>
			</small>
          </h1>
          <ol class="breadcrumb">
            <li id="bradcrumb0011"><a><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">New User</li>
          </ol>
        </section>-->

        <!-- Main content -->
        <section class="content">
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-12 connectedSortable">
			
                <!-- Input addon -->
					<form method="post" id="formData" action="new1.php" style="line-height:0.428571;">
				<div class="row">
				    
					<div class="col-xs-12" style="padding: 5px;">
						<div class="box panel-primary">
						<div class="box-header">
						  <h3 class="box-title"></h3>
						</div>
						<div class="box-body ">
						<div class="row">
						
						<div class="col-xs-3">
						
						      <div class="row">
								<div class="col-xs-12">
								<div class="form-group">
									   <label>Barcode</label>
										<input type="text" id="bcd" name="barcode" class="form-control" value="" placeholder="Enter Barcode" required>
									 </div>
								</div>
							</div>
							<br/>
							<div class="row">
								<div class="col-xs-12">
								<div class="form-group">
									   <label>Order Id</label>
										<input type="text" id="oi" name="OrderNo" class="form-control" value="" placeholder="Enter Order Id" required>
									 </div>
								</div>
							</div>
							<br>
							  <div class="row">
								<div class="col-xs-12">
								<div class="form-group">
									   <label>AOrder Id</label>
										<input type="text" id="aoi" name="AOrderNo" class="form-control" value="" placeholder="Enter AOrder Id" required>
									 </div>
								</div>
							</div>
							 
							
						</div>
						<div class="col-xs-3">
							<div class="row">
								<div class="col-xs-12">
									  <div class="form-group">
										   <label>Garment Type</label>
										  <select class="form-control" id="GarmentType001" name="GarmentType" value="" placeholder="Select" required>
											<option value="">Select</option>
											<option value="Jacket">Jacket</option>
											<option value="Trousers">Trousers</option>
											<option value="Waistcoat">Waistcoat</option>
											<option value="2-piece suit">2-piece suit</option>
											<option value="3-piece suit">3-piece suit</option>
											<option value="2-piece suit + extra trousers">2-piece suit + extra trousers</option>
											<option value="3-piece suit + extra trousers">3-piece suit + extra trousers</option>
											<option value="Jacket + waistcoat">Jacket + waistcoat</option>
											<option value="Trousers + Waistcoat">Trousers + Waistcoat</option>
										  </select>
										
										</div>
									</div>
								</div>
							  <br/>
								<div class="row">
								<div class="col-xs-12">
								<div class="form-group">
									    <label>Canvas</label> 
												<div class="col-md-12 col-sm-12 col-xs-12">
												  <input type="checkbox" id="check1" name="FullCanvasm" value="HalfMade_FullCanvas">
                                                   <label for="HalfMade_FullCanvas">Full Canvas</label>
												   <input type="checkbox" id="check" name="HalfCanvasm" value="Half_Canvas">
                                                    <label for="Half_Canvas">Half Canvas</label>
													<input type="checkbox" id="check2" name="Normalm" value="Normal">
                                                    <label for="Normal">Normal</label>
													<!--
													   
														  <p>Please select your age:</p>
														  <input type="radio" id="age1" name="age" value="30">
														  <label for="age1">0 - 30</label><br>
														  <input type="radio" id="age2" name="age" value="60">
														  <label for="age2">31 - 60</label><br>  
														  <input type="radio" id="age3" name="age" value="100">
														  <label for="age3">61 - 100</label><br><br>
														  <input type="submit" value="Submit">
													
													
													-->
												</div>
								</div>
								</div>
								</div>
								
						</div>
						<div class="col-xs-3">
							  <div class="row">
								<div class="col-xs-12">
								<div class="form-group">
									   <label>Cloth Article</label>
										<input type="text" id="ca" name="Cloth_Article" class="form-control" value="" placeholder="Enter Cloth Article" required>
									 </div>
								</div>
								</div>
								 <br/>
								  <div class="row">
								<div class="col-xs-12">
								<div class="form-group">
									   <label>Order Status</label>
										<input type="text" id="pn" name="Name" class="form-control" value="" placeholder="Enter Order Status" required>
									 </div>
								</div>
								</div>
							</div>
							
							<div class="col-xs-3">
							  <div class="row">
								<div class="col-xs-12">
								<div class="form-group">
									   <label>ClothBox No</label>
										<input type="text" id="cb" name="ClothBox_No" class="form-control" value="" placeholder="Enter ClothBox No" required>
								</div>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-xs-12">
								<div class="form-group">
									   <label>Lining</label>
										<input type="text" id="ln" name="lining_article" class="form-control" value="" placeholder="Enter Lining" required>
									 </div>
								</div>
							</div>
							
						</div>
						</div>
						<br>
						
						  </div>
						  <div class="box-footer">
								<div class="row">
								    <div class="col-xs-3"></div>
									<div class="col-xs-3">
										<button id="myButton"  name="submit5" style="width:100%;margin:3px;" type="submit" class="btn btn-primary btn-sm">Submit</button>
									</div>
									<div class="col-xs-3">
										<button style="width:100%;margin:3px;" type="reset" class="btn btn-danger btn-sm">Reset</button>
									</div>
									<div class="col-xs-3"></div>
								</div>
						  </div>
						</div><!-- /.box-body -->
					  </div><!-- /.box -->
					</div>
				</div>
			  </form>
				<?php 
				error_reporting(0);
				
				if($link === false){
				die("ERROR: Could not connect. " . mysqli_connect_error());
				}

				?>
				
				
			  <!---////////////////////////////////////////////////////////////////////////////////-->
			  
			  
			  <!-- Custom tabs (Charts with tabs)-->

			  
			  <!---////////////////////////////////////////////////////////////////////////////////-->
			  
			  
			  
            </section><!-- /.Left col -->
            
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      <!-- /.content-wrapper -->
	  <!--</div>-->

	</html>  
	    
 <?php 
error_reporting(0);
$link = mysqli_connect("localhost", "root", "", "livetracking");

if($link === false){
	die("ERROR: Could not connect. " . mysqli_connect_error());
}
	
if(isset($_POST['submit5'])) {
	
	$OrderNo =  $_POST['OrderNo'];
	$barcode =  $_POST['barcode'];
	$AOrderNo =  $_POST['AOrderNo'];
	$GarmentType =  $_POST['GarmentType'];
	//echo "$GarmentType";
	
	$Cloth_Article =  $_POST['Cloth_Article'];
	$lining_article =  $_POST['lining_article'];
	$ClothBox_No =  $_POST['ClothBox_No'];
	$Half_Canvas = $_POST['HalfCanvasm'];
   $HalfMade_FullCanvas = $_POST['FullCanvasm'];
   $Normal = $_POST['Normalm'];
	$Name =  $_POST['Name'];
	
	
	
	$query1="SELECT * FROM ` garmenttype` WHERE GarmentType='$GarmentType'";
			$result=mysqli_query($link,$query1);
            if(mysqli_num_rows($result)>0)
            {
				while ($row=mysqli_fetch_array($result))
				{
					$gtyp=$row['GarmentType'];
					$jkt=$row['JKT'];
					$trs=$row['TRS'];
					$vest=$row['VEST'];
					
					
				}
			}

	
					
	
	if($Half_Canvas == 'Half_Canvas')
	{
		
		$hfm = 'Half_Canvas';
		
	}
		else if($HalfMade_FullCanvas == 'HalfMade_FullCanvas')
		{

		$hfm1 = 'HalfMade_FullCanvas';

		}
		else if($Normal == 'Normal')
		{

		$hfm = 'Normal';
         $hfmdd = 'Normal';
		}
	$query100198="SELECT * FROM `orderdetails` WHERE AOrderID='$OrderNo'";
			$result1007=mysqli_query($link,$query100198);
			
            if(mysqli_num_rows($result1007)>0)
            {
				echo"OrderId Already Existed,Data Not Inserted";
			}
       else{	
	 if($GarmentType == 'Jacket')
	{
		     $oid=$OrderNo."-1";
			 
			//$query =  "INSERT INTO `orderdetails` (`Date`,`EntryDT`, `OrderID`, `AOrderID`, `GarmentType`, `JKT`, `TRS`, `WST` ) 
			//VALUES (now(), now(), '".$oid."','".$OrderNo."','".$GarmentType."', '1', '0', '0')";
	         
		 $query =  "INSERT INTO `orderdetails` (`Date`,`EntryDT`,`Barcode`, `OrderID`, `AOrderID`, `GarmentType`, `JKT`, `TRS`, `WST`,  `Cloth_Article`,  `Lining_Article`,  `ClothBox_No`, `Half_Canvas`, `HalfMade_FullCanvas`, `Type`, `Orderstatus`, `Buyer`) 
			VALUES (now(), now(), '".$barcode."', '".$oid."','".$AOrderNo."','".$gtyp."', '1', '0', '0', '".$Cloth_Article."',  '".$lining_article."',  '".$ClothBox_No."', '".$hfm."',  '".$hfm1."', 'Jacket', '".$Name."', '".$unn."')";
	         
	
	}
else if($GarmentType == 'Trousers')
	{
		   $oid=$OrderNo."-2";
		   
			$query =  "INSERT INTO `orderdetails` (`Date`,`EntryDT`,`Barcode`, `OrderID`, `AOrderID`, `GarmentType`, `JKT`, `TRS`, `WST`,  `Cloth_Article`,  `Lining_Article`,  `ClothBox_No`, `Half_Canvas`, `HalfMade_FullCanvas`, `Type`, `Orderstatus`, `Buyer`)
			VALUES (now(), now(), '".$barcode."', '".$oid."','".$AOrderNo."','".$gtyp."', '0', '1', '0', '".$Cloth_Article."',  '".$lining_article."',  '".$ClothBox_No."', '".$hfm."', '".$hfm1."', 'Trouser', '".$Name."', '".$unn."')";
	       
	}
else if($GarmentType == 'Waistcoat')
	{
		   $oid=$OrderNo."-3";
		   
			$query =  "INSERT INTO `orderdetails` (`Date`,`EntryDT`,`Barcode`, `OrderID`, `AOrderID`, `GarmentType`, `JKT`, `TRS`, `WST`,  `Cloth_Article`,  `Lining_Article`,  `ClothBox_No`, `Half_Canvas`, `HalfMade_FullCanvas`, `Type`, `Orderstatus`, `Buyer`) 
			VALUES (now(), now(),'".$barcode."', '".$oid."','".$AOrderNo."', '".$gtyp."', '0', '0', '1', '".$Cloth_Article."',  '".$lining_article."',  '".$ClothBox_No."', '".$hfm."',  '".$hfm1."', 'Waistcoat',  '".$Name."', '".$unn."')";
	       
	}
	else if($GarmentType == '2-piece suit')
	{
		   $oid=$OrderNo."-1";
		   $oid1=$OrderNo."-2";
		   //echo " $oid";
		   $query30 =  "INSERT INTO `orderdetails` (`Date`,`EntryDT`,`Barcode`, `OrderID`, `AOrderID`, `GarmentType`, `JKT`, `TRS`, `WST`,  `Cloth_Article`,  `Lining_Article`,  `ClothBox_No`, `Half_Canvas`, `HalfMade_FullCanvas`, `Type`, `Orderstatus`, `Buyer`) 
			VALUES (now(), now(),'".$barcode."', '".$oid."','".$AOrderNo."', '".$gtyp."', '1', '0', '0', '".$Cloth_Article."',  '".$lining_article."',  '".$ClothBox_No."', '".$hfm."',  '".$hfm1."', 'Jacket',  '".$Name."', '".$unn."')";
		
		   mysqli_query($link,$query30);
		   
		   
		   /////
			//$query100 =  "INSERT INTO `orderdetails` (`Date`,`EntryDT`, `OrderNo`,`GarmentType`, `JKT`, `TRS`, `WST`,  `Cloth_Article`,  `lining article`,  `ClothBox_No`, `Half_Canvas`,`HalfMade_FullCanvas`,  `type`, `orderstatus`, `Name`) 
			//VALUES (now(), now(), '".$oid."','".$gtyp."', '1', '0', '0', '".$Cloth_Article."',  '".$lining_article."',  '".$ClothBox_No."', '".$hfm."' '".$hfm1."', 'Jacket',  '".$Name."', '".$unn."')";
		   //echo "$oid";
		   mysqli_query($link,$query100);
			
			$oid1=$OrderNo."-2";
			
			$query =  "INSERT INTO `orderdetails` (`Date`,`EntryDT`,`Barcode`, `OrderID`, `AOrderID`, `GarmentType`, `JKT`, `TRS`, `WST`,  `Cloth_Article`,  `Lining_Article`,  `ClothBox_No`, `Half_Canvas`, `HalfMade_FullCanvas`, `Type`, `Orderstatus`, `Buyer`) 
			VALUES (now(), now(),'".$barcode."', '".$oid1."','".$AOrderNo."', '".$gtyp."', '0', '1', '0', '".$Cloth_Article."',  '".$lining_article."',  '".$ClothBox_No."', '".$hfm."', '".$hfm1."', 'Trouser',  '".$Name."', '".$unn."')";
			  //echo "$oid1";
			
	}
	else if($GarmentType == '3-piece suit')
	{
		   $oid=$OrderNo."-1";
		   $oid2=$OrderNo."-2";
		   $oid3=$OrderNo."-3";
	
			$query3 =  "INSERT INTO `orderdetails` (`Date`,`EntryDT`,`Barcode`, `OrderID`, `AOrderID`, `GarmentType`, `JKT`, `TRS`, `WST`,  `Cloth_Article`,  `Lining_Article`,  `ClothBox_No`, `Half_Canvas`, `HalfMade_FullCanvas`, `Type`, `Orderstatus`, `Buyer`) 
			VALUES (now(), now(),'".$barcode."', '".$oid."','".$AOrderNo."', '".$gtyp."', '1', '0', '0', '".$Cloth_Article."',  '".$lining_article."',  '".$ClothBox_No."', '".$hfm."',  '".$hfm1."', 'Jacket',  '".$Name."', '".$unn."')";
		
		   mysqli_query($link,$query3);
			
			
			$oid2=$OrderNo."-2";
			$query4 =  "INSERT INTO `orderdetails` (`Date`,`EntryDT`,`Barcode`, `OrderID`, `AOrderID`, `GarmentType`, `JKT`, `TRS`, `WST`,  `Cloth_Article`,  `Lining_Article`,  `ClothBox_No`, `Half_Canvas`, `HalfMade_FullCanvas`, `Type`, `Orderstatus`, `Buyer`) 
			VALUES (now(), now(),'".$barcode."', '".$oid2."','".$AOrderNo."', '".$gtyp."', '0', '1', '0', '".$Cloth_Article."',  '".$lining_article."',  '".$ClothBox_No."', '".$hfm."',  '".$hfm1."', 'Trouser',  '".$Name."', '".$unn."')";
			
			   mysqli_query($link,$query4); 
			
			$oid3=$OrderNo."-3";
			$query =  "INSERT INTO `orderdetails` (`Date`,`EntryDT`,`Barcode`, `OrderID`, `AOrderID`, `GarmentType`, `JKT`, `TRS`, `WST`,  `Cloth_Article`,  `Lining_Article`,  `ClothBox_No`, `Half_Canvas`, `HalfMade_FullCanvas`, `Type`, `Orderstatus`, `Buyer`) 
			VALUES (now(), now(),'".$barcode."','".$oid3."','".$AOrderNo."', '".$gtyp."', '0', '0', '1', '".$Cloth_Article."',  '".$lining_article."',  '".$ClothBox_No."', '".$hfm."', '".$hfm1."', 'Waistcoat',  '".$Name."', '".$unn."')";
		
			
	}
	else if($GarmentType == '2-piece suit + extra trousers')
	{
		   $oid5=$OrderNo."-1";
		   $oid6=$OrderNo."-2";
		   $oid7=$OrderNo."-4";
	
			$query6 =  "INSERT INTO `orderdetails` (`Date`,`EntryDT`,`Barcode`, `OrderID`, `AOrderID`, `GarmentType`, `JKT`, `TRS`, `WST`,  `Cloth_Article`,  `Lining_Article`,  `ClothBox_No`, `Half_Canvas`, `HalfMade_FullCanvas`, `Type`, `Orderstatus`, `Buyer`) 
			VALUES (now(), now(),'".$barcode."', '".$oid5."','".$AOrderNo."', '".$gtyp."', '1', '0', '0', '".$Cloth_Article."',  '".$lining_article."',  '".$ClothBox_No."', '".$hfm."',  '".$hfm1."', 'Jacket',  '".$Name."', '".$unn."')";
		
		   mysqli_query($link,$query6);
			
			
			 $oid6=$OrderNo."-2";
			$query7 =  "INSERT INTO `orderdetails` (`Date`,`EntryDT`, `Barcode`,`OrderID`, `AOrderID`, `GarmentType`, `JKT`, `TRS`, `WST`,  `Cloth_Article`,  `Lining_Article`,  `ClothBox_No`, `Half_Canvas`, `HalfMade_FullCanvas`, `Type`, `Orderstatus`, `Buyer`) 
			VALUES (now(), now(),'".$barcode."', '".$oid6."','".$AOrderNo."', '".$gtyp."', '0', '2', '0', '".$Cloth_Article."',  '".$lining_article."',  '".$ClothBox_No."', '".$hfm."',  '".$hfm1."', 'Trouser',  '".$Name."', '".$unn."')";
			
			   mysqli_query($link,$query7); 
			  $oid7=$OrderNo."-4";
			  
		
			$query =  "INSERT INTO `orderdetails` (`Date`,`EntryDT`, `Barcode`,`OrderID`, `AOrderID`, `GarmentType`, `JKT`, `TRS`, `WST`,  `Cloth_Article`,  `Lining_Article`,  `ClothBox_No`, `Half_Canvas`, `HalfMade_FullCanvas`, `Type`, `Orderstatus`, `Buyer`) 
			VALUES (now(), now(),'".$barcode."','".$oid7."','".$AOrderNo."', '".$gtyp."', '0', '2', '0', '".$Cloth_Article."',  '".$lining_article."',  '".$ClothBox_No."', '".$hfm."',  '".$hfm1."', 'Trouser',  '".$Name."', '".$unn."')";
		
			
	}
	else if($GarmentType == '3-piece suit + extra trousers')
	{
		   $oid8=$OrderNo."-1";
		   $oid9=$OrderNo."-2";
		   $oid10=$OrderNo."-3";
		   $oid11=$OrderNo."-4";
	
			$query38 =  "INSERT INTO `orderdetails` (`Date`,`EntryDT`, `Barcode`, `OrderID`, `AOrderID`, `GarmentType`, `JKT`, `TRS`, `WST`,  `Cloth_Article`,  `Lining_Article`,  `ClothBox_No`, `Half_Canvas`, `HalfMade_FullCanvas`, `Type`, `Orderstatus`, `Buyer`) 
			VALUES (now(), now(),'".$barcode."', '".$oid8."','".$AOrderNo."','".$gtyp."', '1', '0', '0', '".$Cloth_Article."',  '".$lining_article."',  '".$ClothBox_No."', '".$hfm."',  '".$hfm1."', 'Jacket',  '".$Name."', '".$unn."')";
		
		   mysqli_query($link,$query38);
			
			
			$oid9=$OrderNo."-2";
			$query9 =  "INSERT INTO `orderdetails` (`Date`,`EntryDT`, `Barcode`, `OrderID`, `AOrderID`, `GarmentType`, `JKT`, `TRS`, `WST`,  `Cloth_Article`,  `Lining_Article`,  `ClothBox_No`, `Half_Canvas`, `HalfMade_FullCanvas`, `Type`, `Orderstatus`, `Buyer`) 
			VALUES (now(), now(),'".$barcode."', '".$oid9."','".$AOrderNo."','".$gtyp."', '0', '1', '0', '".$Cloth_Article."',  '".$lining_article."',  '".$ClothBox_No."', '".$hfm."',  '".$hfm1."', 'Trouser',  '".$Name."', '".$unn."')";
			
			   mysqli_query($link,$query9); 
			
			 $oid10=$OrderNo."-3";
			$query10 =  "INSERT INTO `orderdetails` (`Date`,`EntryDT`, `Barcode`, `OrderID`, `AOrderID`, `GarmentType`, `JKT`, `TRS`, `WST`,  `Cloth_Article`,  `Lining_Article`,  `ClothBox_No`, `Half_Canvas`, `HalfMade_FullCanvas`, `Type`, `Orderstatus`, `Buyer`) 
			VALUES (now(), now(),'".$barcode."', '".$oid10."','".$AOrderNo."','".$gtyp."', '0', '0', '1', '".$Cloth_Article."',  '".$lining_article."',  '".$ClothBox_No."', '".$hfm."',  '".$hfm1."', 'Waistcoat',  '".$Name."', '".$unn."')";
		
			 mysqli_query($link,$query10); 
			
			 $oid11=$OrderNo."-4";
			$query =  "INSERT INTO `orderdetails` (`Date`,`EntryDT`, `Barcode`, `OrderID`, `AOrderID`, `GarmentType`, `JKT`, `TRS`, `WST`,  `Cloth_Article`,  `Lining_Article`,  `ClothBox_No`, `Half_Canvas`, `HalfMade_FullCanvas`, `Type`, `Orderstatus`, `Buyer`) 
			VALUES (now(), now(),'".$barcode."', '".$oid11."','".$AOrderNo."','".$gtyp."', '0', '2', '0', '".$Cloth_Article."',  '".$lining_article."',  '".$ClothBox_No."', '".$hfm."',  '".$hfm1."', 'ExtraTrouser',  '".$Name."', '".$unn."')";
	}

	else if($GarmentType == 'Jacket + waistcoat')
	{
		   $oid12=$OrderNo."-1";
		   $oid13=$OrderNo."-3";
		 
	
			$query11 =  "INSERT INTO `orderdetails` (`Date`,`EntryDT`, `Barcode`, `OrderID`, `AOrderID`, `GarmentType`, `JKT`, `TRS`, `WST`,  `Cloth_Article`,  `Lining_Article`,  `ClothBox_No`, `Half_Canvas`, `HalfMade_FullCanvas`, `Type`, `Orderstatus`, `Buyer`) 
			VALUES (now(), now(),'".$barcode."', '".$oid12."','".$AOrderNo."','".$gtyp."', '1', '0', '0', '".$Cloth_Article."',  '".$lining_article."',  '".$ClothBox_No."', '".$hfm."', '".$hfm1."', 'Jacket',  '".$Name."', '".$unn."')";
		
		   mysqli_query($link,$query11);
			
			
			
			  $oid13=$OrderNo."-3";
			$query =  "INSERT INTO `orderdetails` (`Date`,`EntryDT`, `Barcode`, `OrderID`, `AOrderID`, `GarmentType`, `JKT`, `TRS`, `WST`,  `Cloth_Article`,  `Lining_Article`,  `ClothBox_No`, `Half_Canvas`, `HalfMade_FullCanvas`, `Type`, `Orderstatus`, `Buyer`) 
			VALUES (now(), now(),'".$barcode."', '".$oid13."','".$AOrderNo."','".$gtyp."', '0', '0', '1', '".$Cloth_Article."',  '".$lining_article."',  '".$ClothBox_No."', '".$hfm."',  '".$hfm1."', 'waistcoat',  '".$Name."', '".$unn."')";
		
			
	}
	
   		  else if($GarmentType == 'Trousers + Waistcoat')
	{
		   $oid121=$OrderNo."-2";
		   $oid131=$OrderNo."-3";
		 
	
			$query110 =  "INSERT INTO `orderdetails` (`Date`,`EntryDT`, `Barcode`, `OrderID`) 
			VALUES (now(), now(),'".$barcode."', '".$oid121."')";
		     
		   mysqli_query($link,$query110);
			
			
			
			  $oid131=$OrderNo."-3";
			$query =  "INSERT INTO `orderdetails` (`Date`,`EntryDT`, `Barcode`, `OrderID`) 
			VALUES (now(), now(),'".$barcode."', '".$oid131."')";
		
			//mysqli_query($link,$query);
			mysqli_query($link,$query);
	}

	mysqli_query($link,$query);
	///////////////////////////////////////
	  
	            	$query1001223="SELECT * FROM `overall` WHERE OrderID='$OrderNo'";
			$result100123=mysqli_query($link,$query1001223);
            if(mysqli_num_rows($result100123)>0)
            {
				echo"<script>alert('OrderId Already Existed,Data Not Inserted');</script>";
			}
       else{
	
	      	 if($GarmentType == 'Jacket')
	{
		     $oid=$OrderNo."-1";
			 
			$query =  "INSERT INTO `overall` (`OrderID`) 
			VALUES ('".$oid."')";
	         
	
	}
else if($GarmentType == 'Trousers')
	{
		   $oid=$OrderNo."-2";
		   
			$query =  "INSERT INTO `overall` (`OrderID`)
			VALUES ('".$oid."')";
	       
	}
else if($GarmentType == 'Waistcoat')
	{
		   $oid=$OrderNo."-3";
		   
			$query =  "INSERT INTO `overall` (`OrderID`) 
			VALUES ('".$oid."')";
	       
	}
	else if($GarmentType == '2-piece suit')
	{
		   $oid=$OrderNo."-1";
		   $oid1=$OrderNo."-2";
		   //echo " $oid";
		   $query3012 =  "INSERT INTO `overall` (`OrderID`) 
			VALUES ('".$oid."')";
		
		   mysqli_query($link,$query3012);
		   
		   
		   /////
			//$query100 =  "INSERT INTO `orderdetails` (`Date`,`EntryDT`, `OrderNo`,`GarmentType`, `JKT`, `TRS`, `WST`,  `Cloth_Article`,  `lining article`,  `ClothBox_No`, `Half_Canvas`,`HalfMade_FullCanvas`,  `type`, `orderstatus`, `Name`) 
			//VALUES (now(), now(), '".$oid."','".$gtyp."', '1', '0', '0', '".$Cloth_Article."',  '".$lining_article."',  '".$ClothBox_No."', '".$hfm."' '".$hfm1."', 'Jacket',  '".$Name."', '".$unn."')";
		   //echo "$oid";
		   //mysqli_query($link,$query100);
			
			$oid1=$OrderNo."-2";
			
			$query =  "INSERT INTO `overall` (`OrderID`) 
			VALUES ('".$oid1."')";
			  //echo "$oid1";
			
	}
	else if($GarmentType == '3-piece suit')
	{
		   $oid=$OrderNo."-1";
		   $oid2=$OrderNo."-2";
		   $oid3=$OrderNo."-3";
	
			$query321 =  "INSERT INTO `overall` (`OrderID`) 
			VALUES ('".$oid."')";
		
		   mysqli_query($link,$query321);
			
			
			$oid2=$OrderNo."-2";
			$query421 =  "INSERT INTO `overall` (`OrderID`) 
			VALUES ('".$oid2."')";
			
			   mysqli_query($link,$query421); 
			
			$oid3=$OrderNo."-3";
			$query =  "INSERT INTO `overall` (`OrderID`) 
			VALUES ('".$oid3."')";
		
			
	}
	else if($GarmentType == '2-piece suit + extra trousers')
	{
		   $oid5=$OrderNo."-1";
		   $oid6=$OrderNo."-2";
		   $oid7=$OrderNo."-4";
	
			$query621 =  "INSERT INTO `overall` (`OrderID`) 
			VALUES ('".$oid5."')";
		
		   mysqli_query($link,$query621);
			
			
			 $oid6=$OrderNo."-2";
			$query721 =  "INSERT INTO `overall` (`OrderID`) 
			VALUES ('".$oid6."')";
			
			   mysqli_query($link,$query721); 
			  $oid7=$OrderNo."-4";
			  
		
			$query =  "INSERT INTO `overall` (`OrderID`) 
			VALUES ('".$oid7."')";
		
			
	}
	else if($GarmentType == '3-piece suit + extra trousers')
	{
		   $oid8=$OrderNo."-1";
		   $oid9=$OrderNo."-2";
		   $oid10=$OrderNo."-3";
		   $oid11=$OrderNo."-4";
	
			$query3821 =  "INSERT INTO `overall` (`OrderID`) 
			VALUES ('".$oid8."')";
		
		   mysqli_query($link,$query3821);
			
			
			$oid9=$OrderNo."-2";
			$query921 =  "INSERT INTO `overall` (`OrderID`) 
			VALUES ('".$oid9."')";
			
			   mysqli_query($link,$query921); 
			
			 $oid10=$OrderNo."-3";
			$query1021 =  "INSERT INTO `overall` (`OrderID`) 
			VALUES ('".$oid10."')";
		
			 mysqli_query($link,$query1021); 
			
			 $oid11=$OrderNo."-4";
			$query =  "INSERT INTO `overall` (`OrderID`) 
			VALUES ('".$oid11."')";
	}
	
	else if($GarmentType == 'Jacket + waistcoat')
	{
		   $oid12=$OrderNo."-1";
		   $oid13=$OrderNo."-3";
		 
	
			$query1121 =  "INSERT INTO `overall` (`OrderID`) 
			VALUES ('".$oid12."')";
		
		   mysqli_query($link,$query1121);
			
			
			
			  $oid13=$OrderNo."-3";
			$query =  "INSERT INTO `overall` (`OrderID`) 
			VALUES ('".$oid13."')";
		
			
	}
	else if($GarmentType == 'Trousers + Waistcoat')
	{
		   $oid14=$OrderNo."-2";
		   $oid15=$OrderNo."-3";
		 
	
			$query1321 =  "INSERT INTO `overall` (`OrderID`) 
			VALUES ('".$oid14."')";
		
		   mysqli_query($link,$query1321);
			
			
			
			   $oid15=$OrderNo."-3";
			$query =  "INSERT INTO `overall` (`OrderID`) 
			VALUES ('".$oid15."')";
		mysqli_query($link,$query);
			
	}
	
	///////////////////////////////////////
	if(mysqli_query($link,$query)){
				
			?>
			<script>
          swal("Data  Inserted...", {
                      icon: "success",
                    });
                  </script>
			
			<?php
			
			 //  echo "<center><h3>Data Submitted</h3></center>";	
	}
				else
				{
					?>
					<script>
					 swal("Data Not Inserted...", {
                      icon: "error",
                    });
					 </script>
					<?php
				//echo "<center><h3>data not inserted</h3></center>".mysqli_error($link);
				}

			
}//overall else	
}//not exist else
}//1st if	
				
	
	
?>	


<!----------   --------------->
						    
        <!-- /page content -->

        <!-- footer content -->
       
        <!-- /footer content -->
		 <script src="dist/js/jquery.min.js"></script>	
  	  <script>
/* $('.flat').on('change', function() {
		    $('.flat').not(this).prop('checked', false);  
		});
*/
$("#check").change(function() {
			var ischecked= $(this).is(':checked');
			if(ischecked){
			 $("#check1").prop( "checked", false );
			 $("#check2").prop( "checked", false );
		    }	
		});

$("#check1").change(function() {
			var ischecked= $(this).is(':checked');
			if(ischecked){
			 $("#check").prop( "checked", false );
			 $("#check2").prop( "checked", false );
		    }	
		});
	$("#check2").change(function() {
			var ischecked= $(this).is(':checked');
			if(ischecked){
			 $("#check1").prop( "checked", false );
			 $("#check").prop( "checked", false );
		    }	
		});

</script>	   



 
