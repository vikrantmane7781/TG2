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
                          <th>_SIZE</th>
						  <th>34</th>
						  <th>35</th>
						  <th>36</th>
						  <th>37</th>
						  <th>38</th>
						  <th>39</th>
						  <th>40</th>
						  <th>41</th>
						  <th>42</th>
						  <th>43</th>
						  <th>44</th>
						  <th>45</th>
						  <th>46</th>
						  <th>47</th>
						  <th>48</th>
						  <th>49</th>
						  <th>50</th>
						  <th>51</th>
						  <th>52</th>
						  <th>53</th>
						  <th>54</th>
						  <th>55</th>
						  <th>56</th>
						  <th>57</th>
						  <th>58</th>
						  <th>59</th>
						  <th>60</th>
						  
                        </tr>
							
						</thead>
						<tbody>
							<?php	
										if(!$measurements)
	{
		die ('Failed to connect to MySQL: ' . mysqli_connect_error());
	}
	
				 $sqlSelect = "SELECT * FROM `athletic_fit`";								
				  $counter=0;		
			
			$result = mysqli_query($measurements, $sqlSelect);
            
            if (mysqli_num_rows($result) > 0) {
                ?>                           
									
				<?php
                
                while ($row = mysqli_fetch_array($result)) {
                    ?>					
                <tr>
				<td><?php echo ++$counter; ?></td>
                    
                    <td><?php  echo $row['_SIZE']; ?></td>
					 <td><?php  echo $row['34']; ?></td>
					 <td><?php  echo $row['35']; ?></td>
					 <td><?php  echo $row['36']; ?></td>
					 <td><?php  echo $row['37']; ?></td>
					 <td><?php  echo $row['38']; ?></td>
					 <td><?php  echo $row['39']; ?></td>
					 <td><?php  echo $row['40']; ?></td>
					 <td><?php  echo $row['41']; ?></td>
					 <td><?php  echo $row['42']; ?></td>
					 <td><?php  echo $row['43']; ?></td>
					 <td><?php  echo $row['44']; ?></td>
					 <td><?php  echo $row['45']; ?></td>
					 <td><?php  echo $row['46']; ?></td>
					<td><?php  echo $row['47']; ?></td>
					<td><?php  echo $row['48']; ?></td>
					<td><?php  echo $row['49']; ?></td>
					<td><?php  echo $row['50']; ?></td>
					<td><?php  echo $row['51']; ?></td>
					<td><?php  echo $row['52']; ?></td>
					<td><?php  echo $row['53']; ?></td>
					<td><?php  echo $row['54']; ?></td>
					<td><?php  echo $row['55']; ?></td>
					<td><?php  echo $row['56']; ?></td>
					<td><?php  echo $row['57']; ?></td>
					<td><?php  echo $row['58']; ?></td>
					<td><?php  echo $row['59']; ?></td>
					<td><?php  echo $row['60']; ?></td>
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
 
	