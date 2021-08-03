<?php 
	include 'layout/header.php';  

	include 'functions/ui_function.php';  
	
	
	include('dbcon.php');
	
	error_reporting(0);
	date_default_timezone_set("Asia/Calcutta");
    $date = date('Y-m-d', time());
    $time = date('H:i:s', time());
	$datetime =$date." ".$time;
	getHeader(" ", $datetime, "fa-book");
	function fetcher($orderno,$vst_che,$vst_girth,$vst_flcb,$vst_bkl,$vst_pp,$vst_backwidth,$vst_bp1,$vst_bp2,$vst_bp3,$vst_bp4,$vst_bp5,$vst_bp6,$vst_bp7,$measurements){

		//insert into frommeasureT
		$delter="TRUNCATE TABLE `frommeasurev`";
		mysqli_query($measurements,$delter);

		$in="insert into `frommeasurev` (`all_cols`)SELECT `Front_Length_Plus` FROM `front_length_plus` ";
		mysqli_query($measurements,$in);


		$selin1="SELECT `id`,`$vst_che` as che FROM `measurement_chart` ";
		$fire1=mysqli_query($measurements,$selin1);
		while($row=mysqli_fetch_array($fire1)){
			 $oneche=$row['che'];
			 $id=$row['id'];
			 $upin1="update `frommeasurev` set che='$oneche' where id='$id'";
		 	 mysqli_query($measurements,$upin1);
		}


		$up="update `frommeasurev` set useValues='$vst_girth' where all_cols='1GRITH'";
		mysqli_query($measurements,$up);
		
		$up1="update `frommeasurev` set useValues='$vst_che' where all_cols='2CHE'";
		mysqli_query($measurements,$up1);

		$up2="update `frommeasurev` set useValues='$vst_flcb' where all_cols='3FLCB'";
		mysqli_query($measurements,$up2);
		
		$up3="update `frommeasurev` set useValues='$vst_bkl' where all_cols='4BKL'";
		mysqli_query($measurements,$up3);

		$up4="update `frommeasurev` set useValues='$vst_pp' where all_cols='5PP'";
		mysqli_query($measurements,$up4);

		$up5="update `frommeasurev` set useValues='$vst_backwidth' where all_cols='6BACKWDTH'";
		mysqli_query($measurements,$up5);

		$up6="update `frommeasurev` set useValues='$vst_bp1' where all_cols='7BP1 (474 / VS2 /VS4'";
		mysqli_query($measurements,$up6);
 
		$up7="update `frommeasurev` set useValues='$vst_bp2' where all_cols='8BP2 (VS-5)'";
		mysqli_query($measurements,$up7);

		$up8="update `frommeasurev` set useValues='$vst_bp3' where all_cols='9BP3 (VS-14)'";
		mysqli_query($measurements,$up8);

		$up9="update `frommeasurev` set useValues='$vst_bp4' where all_cols='10BP4 (VL9-VL22'";
		mysqli_query($measurements,$up9);

		$up10="update `frommeasurev` set useValues='$vst_bp5' where all_cols='11BP5 (VL-1 / VL-10)'";
		mysqli_query($measurements,$up10);

		$up11="update `frommeasurev` set useValues='$vst_bp6' where all_cols='12BP6 (VL-8)'";
		mysqli_query($measurements,$up11);

		$up12="update `frommeasurev` set useValues='$vst_bp7' where all_cols='13BP7 (VL-25)'";
		mysqli_query($measurements,$up12);

		$differ="SELECT `id`,(`useValues`-`che`) as df from frommeasurev";
		$fit=mysqli_query($measurements,$differ);
		while($rt=mysqli_fetch_array($fit)){
			$diff=$rt['df'];
			$id=$rt['id'];
			$uper="update `frommeasurev` set diff='$diff' where id='$id'";
			mysqli_query($measurements,$uper);
		}

		$lst="select diff from `frommeasurev` where all_cols='3FLCB'";
		$rect=mysqli_query($measurements,$lst);
		while($rot=mysqli_fetch_array($rect)){
			$fbls=$row['diff'];
		}
	
		$both="select `id`,`$fbls` as fbls from `front_length_plus`";	
		$rect=mysqli_query($measurements,$both);
		while($rot=mysqli_fetch_array($rect)){
			$fbls=$rot['fbls'];
			$id=$rot['id'];
			$uper1="update `frommeasurev` set full_length_plus='$fbls' where id='$id'";
			mysqli_query($measurements,$uper1);
		}
		$both1="select `id`,`$fbls` as fbl from `front_length_minus`";	
		$rect1=mysqli_query($measurements,$both1);
		while($rot=mysqli_fetch_array($rect1)){
			$fbls1=$rot['fbl'];
			$id1=$rot['id'];
			$uper11="update `frommeasurev` set full_length_minus='$fbls1' where id='$id1'";
			mysqli_query($measurements,$uper11);
		}
   }

	
	if(isset($_POST["vestcoat"])){

		$che="select distinct orderno from frommeasure limit 1";
		$re=mysqli_query($measurements,$che);
		 while($row=mysqli_fetch_array($re)){
		 $ordertrs=$row['orderno'];
		}
	
		
		
		$che="select * from dummy where orderno='$ordertrs'";
		  $res=mysqli_query($measurements,$che);
		 while($row=mysqli_fetch_array($res)){
			$orderno=$row["orderno"];
			$cust_name=$row["Customer_Name"];
			$model=$row["Jkt_FITMODEL"];
			$cloth_article=$row["Cloth_Article"];
			$cloth=$row["Cloth"];
			$fabric_width=$row["Fabric_Width"];
			$plaid=$row["Plaid"];
			$marker=$row["Marker"];
			$vst_girth=$row['Vst_GIRTH'];
			$vst_che=$row['Vst_CHE'];
			$vst_flcb=$row['Vst_FLCB'];
			$vst_bkl=$row['Vst_BKL'];
			$vst_pp=$row['Vst_PP'];
			$vst_backwidth=$row['Vst_BACKWDTH'];
			$vst_bp1=$row['Vst_Break_Point-474/VS2/VS4/VS6'];
			$vst_bp2=$row['Vst_Break_Point-VS-5'];
			$vst_bp3=$row['Vst_Break_Point-VS-I4'];
			$vst_bp4=$row['Vst_Break_Point-VL9-VL22'];
			$vst_bp5=$row['Vst_Break_Point-VL-1/VL-10'];
			$vst_bp6=$row['Vst_Break_Point-VL-8'];
			$vst_bp7=$row['Vst_Break_Point-VL-25'];

		 //
		 
		}
		
		fetcher($orderno,$vst_che,$vst_girth,$vst_flcb,$vst_bkl,$vst_pp,$vst_backwidth,$vst_bp1,$vst_bp2,$vst_bp3,$vst_bp4,$vst_bp5,$vst_bp6,$vst_bp7,$measurements);
		}

?>

	
	<style>  
		
		.bootstrap-table{
			padding : 15px;
		}
		.fixed-table-body{
			width: 100%;
			overflow: scroll;
		}
		.pull-right {
			margin-bottom: 12px;
			margin-top: 0px;
		}
		td {
    white-space: nowrap;
	font-size: 11px;
}

th{
	font-size: 10px;
}
.table-bordered>thead>tr>th, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>tbody>tr>td, .table-bordered>tfoot>tr>td {
    border: 1px solid #000000;
}

.glyphicon {
    
    line-height: 2;
}
input{
	max-width: 150px;
	
}
.skin-blue .wrapper, .skin-blue .main-sidebar, .skin-blue .left-side {
    background: #ffffff;
}
table {
    border: 1px solid black;
	 margin-top: 5px;
    padding: 4px 8px;
}


	</style>
	   

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
        <section class="content" >
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-12">
			
                <!-- Input addon -->
					
				<div class="row">
				    
					<div class="col-xs-7 tabler" style="padding: 15px;">
					
					<form method="POST" action="MainForm1.php"  id="formData"  style="line-height:0.428571;border-radius: 16%;">
				
						<div class="box panel-primary" style="background-color: #e6e9ea;font-size:12px;padding: 2px 5px;">
						<div class="box-header" style=" background:linear-gradient(90deg,rgb(72 70 70 / 0%) 0%, rgb(0 0 0 / 20%) 25%, rgb(0 0 0 / 20%) 75%, rgb(112 235 255 / 0%) 100%);">
						  <h3 class="box-title" style="font-weight:600">VestCoat Form</h3>
						  <img src="dist/img/52.png" style="width:30px;margin-left:90%;margin-top:-25px;"/>
						</div>
						<div class="box-body ">
						<div class="row">
						
						<div class="col-xs-3">
							<div class="row">
								<div class="col-xs-12">
								<div class="form-group">
									   <label>Order No</label>
										<input type="text" id="oi" name="OrderNo" class="form-control" value="" placeholder=" Order No" style="box-shadow: 2px 2px 0px 0px #afafaf;" required>
									 </div>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-xs-12">
								<div class="form-group">
									   <label>Fit Model</label>
										<input type="text" id="faw" name="faw" class="form-control" value="<?php echo $model; ?>" placeholder="Fit Model" style="box-shadow: 2px 2px 0px 0px #afafaf;" >
									 </div>
								</div>
							</div>
						</div>
						<div class="col-xs-3">
							<div class="row">
								<div class="col-xs-12">
									  <div class="form-group">
										   <label>Marker</label>
										<input type="text" id="coname" name="coname" class="form-control" value="<?php echo $marker; ?>" placeholder="Marker" style="box-shadow: 2px 2px 0px 0px #afafaf;" >
										
										</div>
									</div>
								</div>
							  <br/>
								<div class="row">
								<div class="col-xs-12">
								<div class="form-group">
									 <label>Cutomer Name</label> 
									<input type="text" id="blf" name="blf" class="form-control" value="<?php echo $cust_name; ?>" placeholder=" Cutomer Name" style="box-shadow: 2px 2px 0px 0px #afafaf;" >
			
								</div>
								</div>
								</div>
						</div>
						<div class="col-xs-3">
							  <div class="row">
								<div class="col-xs-12">
								<div class="form-group">
									   <label>Cloth Article </label>
										<input type="text" id="mdn" name="mdn" class="form-control" value="<?php echo $cloth_article;?>" placeholder="Cloth Article" style="box-shadow: 2px 2px 0px 0px #afafaf;" >
									 </div>
								</div>
								</div>
								 <br/>
								  <div class="row">
								<div class="col-xs-12">
								<div class="form-group">
									   <label>Cloth</label>
										<input type="text" id="lat" name="lat" class="form-control" value="<?php echo $cloth; ?>" placeholder="Cloth" style="box-shadow: 2px 2px 0px 0px #afafaf;" >
									 </div>
								</div>
								</div>
							</div>
							
							<div class="col-xs-3">
							  <div class="row">
								<div class="col-xs-12">
								<div class="form-group">
									   <label>Fabric Width</label>
										<input type="text" id="gat" name="gat" class="form-control" value="<?php echo $fabric_width; ?>" placeholder="Fabric Width" style="box-shadow: 2px 2px 0px 0px #afafaf;" >
								</div>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-xs-12">
									  <div class="form-group">
										   <label>Plaid</label>
										<input type="text" id="coname" name="coname" class="form-control" value="<?php echo $plaid; ?>" placeholder="Plaid" style="box-shadow: 2px 2px 0px 0px #afafaf;" >
										
										</div>
									</div>
								</div>
						</div>
						<div class="row">
								    <div class="col-xs-3"></div>
									<div class="col-xs-3">
										<a><button href="MainForm1.php" id="myButton"  name="submiter" style="margin:3px;box-shadow: 2px 2px 0px 0px black;width: 100%;font-weight: bold;" type="submit" class="btn btn-primary btn-sm" style="background-color: #dadada;">Process</button></a>
								
										
									</div>
									<div class="col-xs-3">
									
									</div>
								</div>
						</div>
						<br>
						
						  </div>
						  
						</div><!-- /.box-body -->
					  </div><!-- /.box -->
					  </form>
					  
				</div>	

            </section><!-- /.Left col -->
            <section class="col-lg-12">
					<div class="row" style="align-item:center">
					<div class="col-xs-3" style="display:flex;flex-direction:row;float:center">
					<form method="POST" action="MainForm1.php"  id="formData">
						<a><button href="MainForm1.php" id=""  name="" style="margin:3px;box-shadow: 2px 2px 0px 0px black;width: 100%;font-weight: bold;" type="" class="btn btn-info" >✔️ Jacket</button></a>
					</form>			
										
					&nbsp;&nbsp;
					<form method="POST" action="MainForm.php"  id="formData2">
						<button href="MainForm.php" id="vestcoat"  name="vestcoat" style="margin:3px;box-shadow: 2px 2px 0px 0px black;width: 100%;font-weight: bold;" type="submit" class="btn btn-info" >✔️ Trouser</button>
						</form>
						</div>
						<form action="#" method="POST">
						   
							<label class="radio-inline">
							<input type="radio" name="opt" value="text">Text
							</label>
							<label class="radio-inline">
							<input type="radio" name="opt" value="csv">CSV
							</label>
							<label class="radio-inline">
							<input type="radio" name="opt" value="xlsx">XLSX
							</label>
							
							<label class="radio-inline">
							<button class="btn btn-primary" type="submit" id="downloader">Click to download
							</label>
							
					</div>
			<div class="col-xs-9" style="padding: 15px 13px;overflow-x:scroll;margin-top: 5px;
										padding: 4px 8px;border:1px solid black;max-height:700px;overflowy::scroll">

			<table  class="table table-bordered table-striped" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" 
			style="border-top:1px solid black;">
			
			<legend class="open" style="background:linear-gradient(90deg,rgb(72 70 70 / 0%) 0%, rgb(0 0 0 / 20%) 25%, rgb(0 0 0 / 20%) 75%, rgb(112 235 255 / 0%) 100%);">Diff. Table <img src="dist/img/52.png" style="width:30px;margin-left:90%;margin-top:-25px;"/></legend>
					
                                        <thead>
                                            <tr>
												<th nowrap><?php date_default_timezone_set('Asia/Kolkata');
													echo "Date:" .date("m-d");?></th>
                                               
												<th>Names</th>
                                              <th style="background-color: #efef00;margin-top:-10;">Che</th>
											  
											  <th style="background-color: #efef00;margin-top:-10;">User Values</th>
											  <th>Diff</th>
                                            <th style="background-color: #efef00;margin-top:-10;">Full Length(+)</th>
                                            <th style="background-color: #efef00;margin-top:-10;">Full Length(-)</th>
                                            
                                            </tr>

                                        </thead>
                                        <tbody>
                                            <?php
                                            if (!$measurements) {
                                                die('Failed to connect to MySQL: ' . mysqli_connect_error());
                                            }

                                            $sqlSelect = "SELECT * from frommeasurev";
                                            $counter = 0;

                                            $result = mysqli_query($measurements, $sqlSelect);

                                            if (mysqli_num_rows($result) > 0) {
                                            ?>

                                                <?php
												
                                                while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo ++$counter; ?></td>
														<td style="font-weight:bold;"><?php echo $row['all_cols']; ?></td>
														<td><?php echo $row['che']; ?></td>
														<td><?php echo $row['useValues']; ?></td>
														<td><?php echo $row['diff']; ?></td>
                                                        <td><?php echo $row['full_length_plus']; ?></td>
														<td><?php echo $row['full_length_minus']; ?></td>
                                                    </tr>
                                                
                                            <?php
												}
										} ?>
                                        </tbody>
                                    </table>

								
			</div>
				<div class="col-xs-3" style="padding: 15px 13px;overflow-x:scroll;margin-top: 5px;
										padding: 4px 8px;max-height:700px;overflowy::scroll">
				<table  class="table table-bordered table-striped" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" 
			style="border-top:1px solid black;">
			                <legend class="open" style="background:linear-gradient(90deg,rgb(72 70 70 / 0%) 0%, rgb(0 0 0 / 20%) 25%, rgb(0 0 0 / 20%) 75%, rgb(112 235 255 / 0%) 100%);"> Model Option<img src="dist/img/52.png" style="width:30px;margin-left:90%;margin-top:-25px;"/></legend>
                                       
                                    <thead>
                                    <tr>
									<th nowrap style="font-weight:bold;background-color:#c3c3c0">Model Options</th>
									<th nowrap style="background-color: #fhfhfh;margin-top:-10;">Value</th>
									</tr>
									</thead>
										
			</table>
			</div>

			</section>
			<br>
			<br>
			  
			
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
		<br>
		<br>
      <!-- /.content-wrapper -->
	  <!--</div>-->
	  
	    


  
<?php include 'layout/footer.php'; ?>