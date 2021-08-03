<?php
include 'layout/header.php';
include 'layout/aside.php';
include 'functions/ui_function.php';


include('dbcon.php');


date_default_timezone_set("Asia/Calcutta");
$date = date('Y-m-d', time());
$time = date('H:i:s', time());
$datetime = $date . " " . $time;

getHeader(" ", $datetime, "fa-book");


date_default_timezone_set("Asia/Calcutta");
    $date = date('Y-m-d', time());
    $time = date('H:i:s', time());
	$datetime =$date." ".$time;
    error_reporting(0);

	function fetcher($orderno,$Jkt_CHE,$Jkt_PLUSAH3,$Jkt_ERECT,$Jkt_FULLCHES,$Jkt_HEADF,$Jkt_LOWCLR,$Jkt_PLUSAH2,$btn,$Jkt_VENT,$Jkt_GIR,$Jkt_SEAT,$Jkt_LEN,$measurements){

              

		if($Jkt_CHE!=0){
		$in="SELECT `$Jkt_CHE` as col FROM `size_chart`";
		$res=mysqli_query($measurements,$in);
		while($row=mysqli_fetch_array($res)){
			 $che=$row['col'];
			 
			   $inserter="insert into `frommeasure` (`che`,`orderno`,`btn1/3`)values('$che','$orderno','$btn')";
			   mysqli_query($measurements,$inserter); 
		  

		 }
		}
		//if($Jkt_PLUSAH3!=0){
		$in2="insert into `frommeasure` (`16plus3`)SELECT `$Jkt_PLUSAH3` FROM `size_chart` ";
		mysqli_query($measurements,$in2);
	   // }
		//if($Jkt_ERECT!=0){
		$in3="insert into `frommeasure` (`17erect`)SELECT `$Jkt_ERECT` FROM `size_chart` ";
		mysqli_query($measurements,$in3);
		//}
		//if($Jkt_FULLCHES!=0){
		$in4="insert into `frommeasure` (`18fullches`)SELECT `$Jkt_FULLCHES` FROM `size_chart` ";
		mysqli_query($measurements,$in4);
		//}
	   // if($Jkt_HEADF!=0){
		$in5="insert into `frommeasure` (`19headf`)SELECT `$Jkt_HEADF` FROM `size_chart` ";
		mysqli_query($measurements,$in5);
		//}
		//if($Jkt_LOWCLR!=0){
		$in6="insert into `frommeasure` (`20lowclr`)SELECT `$Jkt_LOWCLR` FROM `size_chart` ";
		mysqli_query($measurements,$in6);
	   // }
		//if($Jkt_PLUSAH2!=0){
		$in7="insert into `frommeasure` (`21push2`)SELECT `$Jkt_PLUSAH2` FROM `size_chart` ";
		mysqli_query($measurements,$in7);
	   // }
	   // if($Jkt_PLUSAH2!=0){
		$in7="insert into `frommeasure` (`21push2`)SELECT `$Jkt_PLUSAH2` FROM `size_chart` ";
		mysqli_query($measurements,$in7);

		$in8="insert into `frommeasure` (`Jkt_VENT`)SELECT `$Jkt_VENT` FROM `size_chart` ";
		mysqli_query($measurements,$in8);

		$in9="insert into `frommeasure` (`Jkt_GIR`)SELECT `$Jkt_GIR` FROM `size_chart` ";
		mysqli_query($measurements,$in9);

		$in10="insert into `frommeasure` (`Jkt_SEAT`)SELECT `$Jkt_SEAT` FROM `size_chart` ";
		mysqli_query($measurements,$in10);

		$in11="insert into `frommeasure` (`Jkt_LEN`)SELECT `$Jkt_LEN` FROM `size_chart` ";
		mysqli_query($measurements,$in11);

		//}
		$sect="SELECT id,(`che`+`16plus3`+`17erect`+`18fullches`+`19headf`+`20lowclr`+`21push2`+`btn1/3`+`15vent`+`open_waist_1/2_girth`+`seat`+`4len`) as total FROM `frommeasure`";
		$fire=mysqli_query($measurements,$sect);
		while($roy=mysqli_fetch_array($fire)){
			 $total=$roy['total'];
			 $id=$roy['id'];
		
		  $in8="update `frommeasure` set sum='$total' where id='$id'";
		  mysqli_query($measurements,$in8);
		}
			   
   }

	
	if(isset($_POST['submiter'])){
		$order=$_POST["OrderNo"];
		$che="select * from dummy where orderno='$order'";
  		$res=mysqli_query($measurements,$che);
 		while($row=mysqli_fetch_array($res)){
		 $orderno=abs($row["orderno"]);
		 $cust_name=$row["Customer_Name"];
		 $model=$row["Jkt_FITMODEL"];
		 $cloth_article=$row["Cloth_Article"];
		 $cloth=$row["Cloth"];
		 $fabric_width=$row["Fabric_Width"];
		 $plaid=$row["Plaid"];
		 $marker=$row["Marker"];
		 //
		 $Jkt_CHE=abs($row["Jkt_CHE"]);
		 $Jkt_PLUSAH3=abs($row["Jkt_PLUSAH3"]);
		 $Jkt_ERECT=abs($row["Jkt_ERECT"]);
		 $Jkt_FULLCHES=abs($row["Jkt_FULLCHES"]);
		 $Jkt_HEADF=abs($row["Jkt_HEADF"]);
		 $Jkt_LOWCLR=abs($row["Jkt_LOWCLR"]);
		 $Jkt_PLUSAH2=abs($row["Jkt_PLUSAH2"]);
		 $Jkt_BTN1=abs($row["Jkt_BTN1"]);
		 $Jkt_BTN3=abs($row["Jkt_BTN3"]);
		 $Jkt_VENT=abs($row['Jkt_VENT']);
		 $Jkt_GIR=abs($row['Jkt_GIR']);
		 $Jkt_SEAT=abs($row['Jkt_SEAT']);
		 $Jkt_LEN=abs($row['Jkt_LEN']);

		if($Jkt_BTN1!=0){
		$btn=-2.5;
		}elseif ($Jkt_BTN3!=0) {
		$btn=-3;
		}else{
			$btn=0;
		}  
     
  }
  fetcher($orderno,$Jkt_CHE,$Jkt_PLUSAH3,$Jkt_ERECT,$Jkt_FULLCHES,$Jkt_HEADF,$Jkt_LOWCLR,$Jkt_PLUSAH2,$btn,$Jkt_VENT,$Jkt_GIR,$Jkt_SEAT,$Jkt_LEN,$measurements);
	}

?>


<script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
<script src="plugins/data-table/bootstrap-table.js"></script>
<script src="plugins/data-table/tableExport.js"></script>
<script src="plugins/data-table/data-table-active.js"></script>
<script src="plugins/data-table/bootstrap-table-editable.js"></script>
<script src="plugins/data-table/bootstrap-editable.js"></script>
<script src="plugins/data-table/bootstrap-table-resizable.js"></script>
<script src="plugins/data-table/bootstrap-table-export.js"></script>

<style>
    .bootstrap-table {
        padding: 14px;
    }



    select#tabs {
        padding: 5px 8px;
        margin-bottom: 0px;
        margin-top: 10px;

    }

    .pull-right.pagination,
    .pull-left.pagination-detail,
    button.btn.btn-default.dropdown-toggle {
        font-size: 8px;
    }

    .table-bordered {
        border: 1px solid #f4f4f4;
        font-size: 11px;
        font-weight: bold;
    }

    button.btn.btn-default {
        height: 33px;
    }

    label {
        margin-left: 34px;
    }

    th {
        background-color: #e0e0e0;
    }

    .fixed-table-body {
        width: 100%;
        overflow: scroll;
    }

    .pull-right {
        margin-bottom: 12px;
        margin-top: 0px;
    }

    td {
        white-space: nowrap;
    }

    .fixed-table-body {

        height: 315px;
    }

    #load {
        width: 100%;
        height: 100%;
        position: fixed;
        z-index: 8000;
       
    }
</style>


        <!-- Main content -->
        <section class="content">
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-12">
			
                <!-- Input addon -->
					
				<div class="row">
				    
					<div class="col-xs-7" style="padding: 15px;">
					
					<form method="POST" action="LastForm.php"  id="formData"  style="line-height:0.428571;border-radius: 16%;">
				
						<div class="box panel-primary" style="background-color: #e6e9ea;font-size:12px;padding: 2px 5px;">
						<div class="box-header" style=" background:linear-gradient(90deg,rgb(72 70 70 / 0%) 0%, rgb(0 0 0 / 20%) 25%, rgb(0 0 0 / 20%) 75%, rgb(112 235 255 / 0%) 100%);">
						  <h3 class="box-title" style="font-weight:600">Form</h3>
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
										<a><button href="LastForm.php" id="myButton"  name="submiter" style="margin:3px;box-shadow: 2px 2px 0px 0px black;width: 100%;font-weight: bold;" type="submit" class="btn btn-primary btn-sm" style="background-color: #dadada;">Process</button></a>
								
										
									</div>
									<div class="col-xs-3">
									<button style="margin:3px;box-shadow: 2px 2px 0px 0px black;width: 100%;font-weight: bold;" type="reset" class="btn btn-info btn-sm" >Download</button>
									</div>
								</div>
						</div>
						<br>
						
						  </div>
						  
						</div><!-- /.box-body -->
					  </div><!-- /.box -->
					  </form>
					  <div class="col-xs-4" style="padding: 15px;">
						<h3>All tags and Names</h3>
					</div>
					</div>
					
					
				</div>	

            </section><!-- /.Left col -->
            <section class="col-lg-12">
			<div class="col-xs-7" style="padding: 15px;">
			<table id="Measurements" class="table table-bordered table-striped" data-toggle="table"  data-click-to-select="true" data-toolbar="#toolbar">
                                        <p class="Measurements" style="font-weight:bold;font-size:13px;margin-bottom:1px;margin-top:10px">Measurements</p>
                                        <thead>
                                            <tr>
												<th nowrap><?php date_default_timezone_set('Asia/Kolkata');
													echo "Date:" .date("m-d");?></th>
                                                <th>S.No</th>
                                                <th>CHE</th>
                                            <th style="background-color: #efef00;margin-top:-10;">16PLUSAH3</th>
                                            <th style="background-color: #efef00;margin-top:-10;">17ERECT</th>
                                            <th style="background-color: #efef00;margin-top:-10;">18FULLCHES</th>
                                            <th style="background-color: #efef00;margin-top:-10;">19HEADF</th>
                                            <th style="background-color: #efef00;margin-top:-10;">20LOWCLR</th>
                                            <th style="background-color: #efef00;margin-top:-10;">21PUSHAH2</th>
											<th style="background-color: #efef00;margin-top:-10;">BTN1/3</th>
											<th style="background-color: #efef00;margin-top:-10;">1/2BACK</th>
											<th style="background-color: #efef00;margin-top:-10;">OPEN WAIST(1/2)</th>
											<th style="background-color: #efef00;margin-top:-10;">SEAT</th>
											<th style="background-color: #efef00;margin-top:-10;">4LEN</th>
											<th style="background-color: #efef00;margin-top:-10;">15VENT</th>
											<th style="background-color: #efef00;margin-top:-10;">Diff</th>
                                            </tr>

                                        </thead>
                                        <tbody>
                                            <?php
                                            if (!$measurements) {
                                                die('Failed to connect to MySQL: ' . mysqli_connect_error());
                                            }

                                            $sqlSelect = "SELECT * FROM `ah_34_a_plus`";
                                            $counter = 0;

                                            $result = mysqli_query($measurements, $sqlSelect);

                                            if (mysqli_num_rows($result) > 0) {
                                            ?>

                                                <?php

                                                while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo ++$counter; ?></td>

                                                        <td><?php echo $row['AH_3/4_A+']; ?></td>
                                                        <td><?php echo $row['3/4']; ?></td>
                                                        <td><?php echo $row['1']; ?></td>
                                                        <td><?php echo $row['2']; ?></td>
                                                        <td><?php echo $row['1*3/4']; ?></td>
                                                        <td><?php echo $row['1*1/4']; ?></td>
                                                        <td><?php echo $row['1*1/2']; ?></td>
                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
			</div>
			</section>
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
<!-- /.content-wrapper -->

<!-- Right side column. Contains the navbar and content of the page -->
<script>
    

</script>

<?php include 'layout/footer.php'; ?>


<table  class="table table-bordered table-striped" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" 
			style="border-top:1px solid black;">
			
			<legend class="open" style="background:linear-gradient(90deg,rgb(72 70 70 / 0%) 0%, rgb(0 0 0 / 20%) 25%, rgb(0 0 0 / 20%) 75%, rgb(112 235 255 / 0%) 100%);">Figuration Table<img src="dist/img/52.png" style="width:30px;margin-left:90%;margin-top:-25px;"/> </legend>
                                       
                                        <thead>
                                            <tr>
											<th nowrap style="background-color: #efef00;margin-top:-10;">16PLUSAH3</th>
											<th nowrapstyle="background-color: #efef00;margin-top:-10;">17ERECT</th> 
											<th nowrap style="background-color: #efef00;margin-top:-10;">18FULLCHES</th>
											<th nowrap style="background-color: #efef00;margin-top:-10;">19HEADF</th>
											<th nowrap style="background-color: #efef00;margin-top:-10;">20LOWCLR</th>
											<th nowrap style="background-color: #efef00;margin-top:-10;">21PLUSAH2</th>
											<th nowrap style="background-color: #efef00;margin-top:-10;">22MINUSCLR</th>
											<th nowrap style="background-color: #efef00;margin-top:-10;">23SLOPE</th>
											<th nowrap style="background-color: #efef00;margin-top:-10;">24BTN1</th>
											<th nowrap style="background-color: #efef00;margin-top:-10;">25BTN3</th>
											<th nowrap style="background-color: #efef00;margin-top:-10;">26ROPESLV</th>
											<th nowrap style="background-color: #efef00;margin-top:-10;">27SLANTPKT</th>
											<th nowrap style="background-color: #efef00;margin-top:-10;">28ADDLIFT</th>
											<th nowrap style="background-color: #efef00;margin-top:-10;">29NOOBW</th>
											<th nowrap style="background-color: #efef00;margin-top:-10;">30NODART</th>
											<th nowrap style="background-color: #efef00;margin-top:-10;">31FRTEDGE</th>
											<th nowrap style="background-color: #efef00;margin-top:-10;">32LEAFCLR</th>
											<th nowrap style="background-color: #efef00;margin-top:-10;">33LEFTDN</th>
											<th nowrap style="background-color: #efef00;margin-top:-10;">34RIGTDN</th>
											<th nowrap style="background-color: #efef00;margin-top:-10;">35FULCANV</th>
											<th nowrap style="background-color: #efef00;margin-top:-10;">36HALFCANV</th>
											<th nowrap style="background-color: #efef00;margin-top:-10;">37PATCHPKT</th>
											<th nowrap style="background-color: #efef00;margin-top:-10;">38SLVVENT</th>
											<th nowrap style="background-color: #efef00;margin-top:-10;">39SLVBACK</th>
											<th nowrap style="background-color: #efef00;margin-top:-10;">40SLVFW</th>
											<th nowrap style="background-color: #efef00;margin-top:-10;">41LONDONF</th>
											<th nowrap style="background-color: #efef00;margin-top:-10;">42PORTLYF</th>
											<th nowrap style="background-color: #efef00;margin-top:-10;">43DB</th>
											<th nowrap style="background-color: #efef00;margin-top:-10;">44TKTPKT</th>
											<th nowrap style="background-color: #efef00;margin-top:-10;">45CBPLUS</th>
											<th nowrap style="background-color: #efef00;margin-top:-10;">46SHGIRTHF</th>
											<th nowrap style="background-color: #efef00;margin-top:-10;">47SHGIRTBK</th>
											<th nowrap style="background-color: #efef00;margin-top:-10;">48PLTPPK</th>
											<th nowrap style="background-color: #efef00;margin-top:-10;">49OPENDART</th>
											<th nowrap style="background-color: #efef00;margin-top:-10;">50PORTYGRI</th>
											<th nowrap style="background-color: #efef00;margin-top:-10;">51ATHLETIC</th>
											<th nowrap style="background-color: #efef00;margin-top:-10;">52STBTM</th>
											<th nowrap style="background-color: #efef00;margin-top:-10;">54WIDER-FR</th>
											<th nowrap style="background-color: #efef00;margin-top:-10;">55FLATCHEST</th>
											<th nowrap style="background-color: #efef00;margin-top:-10;">56HN</th>
											<th nowrap style="background-color: #efef00;margin-top:-10;">57OPENBK</th>
											<th nowrap style="background-color: #efef00;margin-top:-10;">58PLSLVS</th>

                                            </tr>

                                        </thead>
                                        
                                    </table>