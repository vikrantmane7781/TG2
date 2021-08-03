<?php 
	include 'layout/header.php';  
	include 'layout/aside.php';  
	include 'functions/ui_function.php';  
	

include('C:/xampp/htdocs/dbcon.php');


	date_default_timezone_set("Asia/Calcutta");
    $date = date('Y-m-d', time());
    $time = date('H:i:s', time());
	$datetime =$date." ".$time;
	
	getHeader("4len",$datetime,"fa-book");
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
}
	</style>
	   
        <!-- Main content -->
        <section class="content">
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-12">
              
			  <!---////////////////////////////////////////////////////////////////////////////////-->
			  
			  
			  <!-- Custom tabs (Charts with tabs)-->
              <div class="nav-tabs-custom">
                <!-- Tabs within a box -->
                
                <div class="tab-content no-padding">
				  <div class="box" id="overall_table_data_table">
					<!--          OVERALL CONTENT COMES HERE   DONT DELETE   -->
					
					             <table id="user_data" class="table table-bordered table-striped" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-export-options='{"fileName": "<?php echo "NEW_STOCK_TABLE-";echo date("d-m-Y"); ?>"}' data-click-to-select="true" data-toolbar="#toolbar">
						<thead>
							 <tr>
                       <th>S.No</th>
                          <th>Front_Length_Plus</th>
						  <th>1/8</th>
						  <th>2/8</th>
						  <th>3/8</th>
						  <th>4/8</th>
						  <th>5/8</th>
						  <th>6/8</th>
						  <th>7/8</th>
						  <th>1</th>
						  <th>1*1/8</th>
						  <th>1*2/8</th>
						  <th>1*3/8</th>
						  <th>1*4/8</th>
						  <th>1*5/8</th>
						  <th>1*6/8</th>
						  <th>1*7/8</th>
						   <th>2</th>
						   <th>2*1/8</th>
						   <th>2*2/8</th>
						   <th>2*3/8</th>
						   <th>2*4/8</th>
						   <th>2*5/8</th>
						   <th>2*6/8</th>
						   <th>2*7/8</th>
						   <th>3</th>
						   <th>3*1/8</th>
						   <th>3*2/8</th>
						   <th>3*3/8</th>
						   <th>3*4/8</th>
						   <th>3*5/8</th>
						   <th>3*6/8</th>
						   <th>3*7/8</th>
						   <th>4</th>
						   <th>4*1/8</th>
						   <th>4*2/8</th>
						   <th>4*3/8</th>
						   <th>4*4/8</th>
						   <th>4*5/8</th>
						   <th>4*6/8</th>
						   <th>4*7/8</th>
						   <th>5</th>
						  
                        </tr>
							
						</thead>
						<tbody>
							<?php	
										if(!$measurements)
	{
		die ('Failed to connect to MySQL: ' . mysqli_connect_error());
	}
	
				 $sqlSelect = "SELECT * FROM `front_length(+)`";								
				  $counter=0;		
			
			$result = mysqli_query($measurements, $sqlSelect);
            
            if (mysqli_num_rows($result) > 0) {
                ?>                           
									
				<?php
                
                while ($row = mysqli_fetch_array($result)) {
                    ?>					
                <tr>
				<td><?php echo ++$counter; ?></td>
                    
                    <td><?php  echo $row['Front_Length_Plus']; ?></td>
					 <td><?php  echo $row['1/8']; ?></td>
					 <td><?php  echo $row['2/8']; ?></td>
					 <td><?php  echo $row['3/8']; ?></td>
					 <td><?php  echo $row['4/8']; ?></td>
					 <td><?php  echo $row['5/8']; ?></td>
					 <td><?php  echo $row['6/8']; ?></td>
					 <td><?php  echo $row['7/8']; ?></td>
					 <td><?php  echo $row['1']; ?></td>
					 <td><?php  echo $row['1*1/8']; ?></td>
					 <td><?php  echo $row['1*2/8']; ?></td>
					 <td><?php  echo $row['1*3/8']; ?></td>
					 <td><?php  echo $row['1*4/8']; ?></td>
					 <td><?php  echo $row['1*5/8']; ?></td>
					 <td><?php  echo $row['1*6/8']; ?></td>
					 <td><?php  echo $row['1*7/8']; ?></td>
					 <td><?php  echo $row['2']; ?></td>
					 <td><?php  echo $row['2*1/8']; ?></td>
					 <td><?php  echo $row['2*2/8']; ?></td>
					 <td><?php  echo $row['2*3/8']; ?></td>
					 <td><?php  echo $row['2*4/8']; ?></td>
					 <td><?php  echo $row['2*5/8']; ?></td>
					 <td><?php  echo $row['2*6/8']; ?></td>
					 <td><?php  echo $row['2*7/8']; ?></td>
					 <td><?php  echo $row['3']; ?></td>
					 <td><?php  echo $row['3*1/8']; ?></td>
					 <td><?php  echo $row['3*2/8']; ?></td>
					 <td><?php  echo $row['3*3/8']; ?></td>
					 <td><?php  echo $row['3*4/8']; ?></td>
					 <td><?php  echo $row['3*5/8']; ?></td>
					 <td><?php  echo $row['3*6/8']; ?></td>
					 <td><?php  echo $row['3*7/8']; ?></td>
					 <td><?php  echo $row['4']; ?></td>
					 <td><?php  echo $row['4*1/8']; ?></td>
					 <td><?php  echo $row['4*2/8']; ?></td>
					 <td><?php  echo $row['4*3/8']; ?></td>
					 <td><?php  echo $row['4*4/8']; ?></td>
					 <td><?php  echo $row['4*5/8']; ?></td>
					 <td><?php  echo $row['4*6/8']; ?></td>
					 <td><?php  echo $row['4*7/8']; ?></td>
					 <td><?php  echo $row['5']; ?></td>
					</tr>
                    <?php
                }
                ?>
				 <?php } ?>
                        </tbody>
					  </table>
				  </div><!-- /.box -->
                </div>
              </div><!-- /.nav-tabs-custom -->
			  
			  
			  <!---////////////////////////////////////////////////////////////////////////////////-->
			 
            </section><!-- /.Left col -->
            
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      <!-- /.content-wrapper -->
	 
<!-- Right side column. Contains the navbar and content of the page -->

					  
<?php include 'layout/footer.php'; ?>
 
	