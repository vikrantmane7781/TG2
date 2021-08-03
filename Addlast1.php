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
tr{
    border-top: 1px solid black;
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
        <div id="userModal" class="modal fade">
    <div class="modal-dialog">
        <form method="POST" id="user_form" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Column</h4>
                </div>
                <div class="modal-body">
                    <label>Enter Table Name</label>
                    <input type="text" name="table_name" id="table_name" class="form-control" />
                    <br />
                    <label>Enter Column Name</label>
                    <input type="text" name="first_column" id="first_column" class="form-control" />
                    <br />

                    <label>Select Datatype</label>
                    <select class="form-control" id="tpd" name="tpd">
                        <option value="VARCHAR">VARCHAR</option>
                        <option value="INT">INT</option>
                        <option value="TIMESTAMP">TIMESTAMP</option>
                        <option value="TIME">TIME</option>
                        <option value="DATE">DATE</option>
                    </select>
                    <br />

                    <label>Enter Value</label>
                    <input type="text" name="lenv" id="lenv" class="form-control" />
                    <br />

                </div>
                <div class="modal-footer">
                    <input type="hidden" name="user_id" id="user_id" />
                    <input type="hidden" name="operation" id="operation" />
                    <input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </form>
    </div>
</div>
        <!-- Main content -->
        <section class="content" >
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-12">
			
            <div class="row">
            <div class="col-sm-6">
                            <div class="col-sm-6">
                                <label for="tabs">Select Measurement Table</label>
                                <select id="tabs" name="tables_name" style="margin-left:30px">
                                    <option value="" selected disabled>Select Table</option>
                                    <?php

                                    $quant = "SELECT table_name FROM information_schema.tables
                                    WHERE table_schema = 'measure'";
                                    $query = mysqli_query($measurements, $quant);
                                    while ($row = mysqli_fetch_array($query)) { ?>
                                        <option value="<?php $row['table_name']; ?>"><?php echo $row['table_name'] ?></option>
                                    <?php }

                                    ?>

                                </select>
                            </div>
                            <div class="col-sm-6">
                                <button type="button" id="add_button" data-toggle="modal" data-target="#userModal" class="btn btn-info btn-sm" style="margin-top:15px;">Add New Coloumn</button>
                            </div>
                        </div>
                        <div class="zero row" id="zero">
                            <div class="col-sm-12" id="zero_inner">

                            </div>

                        </div>
			</div>
            <div class="first_row row">
                            <div class="col-sm-6" id="ah_34_a_plus_div" >
                                <div id="inner_ah_34_a_plus_div" style="background-color:white">
                                    <table id="ah_34_a_plus" class="table table-bordered table-striped" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true"  data-click-to-select="true" data-toolbar="#toolbar">
                                        <p class="Ah_34_A_Plus" style="font-weight:bold;font-size:15px;margin-left:40px;margin-bottom:1px;margin-top:10px">Ah_34_A_Plus</p>
                                        <thead>
                                            <tr >
                                                <th>S.No</th>
                                                <th>AH_3/4_A+</th>
                                                <th>3/4</th>
                                                <th>1</th>
                                                <th>2</th>
                                                <th>1*3/4</th>
                                                <th>1*1/4</th>
                                                <th>1*1/2</th>
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
                            </div>
                            <div class="col-sm-6" id="size_c_div">
                                <div id="inner_size_c_div" style="background-color:white">
                                    <table id="size_chart" class="table table-bordered table-striped" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-export-options='{"fileName": "<?php echo "NEW_STOCK_TABLE-";echo date("d-m-Y"); ?>"}' data-click-to-select="true" data-toolbar="#toolbar">
                                        <p class="size_chart" style="font-weight:bold;font-size:15px;margin-left:40px;margin-bottom:1px;margin-top:10px">Size Chart</p>
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Size</th>
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
                                                <th>51</th>
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


                                            if (!$measurements) {
                                                die('Failed to connect to MySQL: ' . mysqli_connect_error());
                                            }




                                            $sqlSelect = "SELECT * FROM `size_chart`";
                                            $counter = 0;

                                            $result = mysqli_query($measurements, $sqlSelect);

                                            if (mysqli_num_rows($result) > 0) {
                                            ?>

                                                <?php

                                                while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo ++$counter; ?></td>
                                                        <td><?php echo $row['size']; ?></td>
                                                        <td><?php echo $row['34']; ?></td>
                                                        <td><?php echo $row['35']; ?></td>
                                                        <td><?php echo $row['36']; ?></td>
                                                        <td><?php echo $row['37']; ?></td>
                                                        <td><?php echo $row['38']; ?></td>
                                                        <td><?php echo $row['39']; ?></td>
                                                        <td><?php echo $row['40']; ?></td>
                                                        <td><?php echo $row['41']; ?></td>
                                                        <td><?php echo $row['42']; ?></td>
                                                        <td><?php echo $row['43']; ?></td>
                                                        <td><?php echo $row['44']; ?></td>
                                                        <td><?php echo $row['45']; ?></td>
                                                        <td><?php echo $row['46']; ?></td>
                                                        <td><?php echo $row['47']; ?></td>
                                                        <td><?php echo $row['48']; ?></td>
                                                        <td><?php echo $row['49']; ?></td>
                                                        <td><?php echo $row['50']; ?></td>
                                                        <td><?php echo $row['51']; ?></td>
                                                        <td><?php echo $row['52']; ?></td>
                                                        <td><?php echo $row['53']; ?></td>
                                                        <td><?php echo $row['54']; ?></td>
                                                        <td><?php echo $row['55']; ?></td>
                                                        <td><?php echo $row['56']; ?></td>
                                                        <td><?php echo $row['57']; ?></td>
                                                        <td><?php echo $row['58']; ?></td>
                                                        <td><?php echo $row['59']; ?></td>
                                                        <td><?php echo $row['60']; ?></td>


                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="second_row row">
                            <div class="col-sm-6" id="seater_div">
                                <div id="inner_seater_div">
                                    <table id="seat" class="table table-bordered table-striped" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-export-options='{"fileName": "<?php echo "NEW_STOCK_TABLE-";
                                                                                                                                                                                                                                                                                                                                                                                                                                    echo date("d-m-Y"); ?>"}' data-click-to-select="true" data-toolbar="#toolbar">
                                        <p class="seat" style="font-weight:bold;font-size:15px;margin-left:40px;margin-bottom:1px;margin-top:10px">Seat</p>
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>SEAT</th>
                                                <th>2</th>
                                                <th>-2</th>
                                                <th>2*1/8</th>
                                                <th>-2*1/8</th>
                                                <th>2*1/4</th>
                                                <th>-2*1/4</th>
                                                <th>2*3/8</th>
                                                <th>-2*3/8</th>
                                                <th>2*1/2</th>
                                                <th>-2*1/2</th>
                                                <th>2*5/8</th>
                                                <th>-2*5/8</th>
                                                <th>2*3/4</th>
                                                <th>-2*3/4</th>
                                                <th>2*7/8</th>
                                                <th>-2*7/8</th>
                                                <th>3</th>
                                                <th>-3</th>
                                                <th>3*1/8</th>
                                                <th>-3*1/8</th>
                                                <th>3*1/4</th>
                                                <th>-3*1/4</th>
                                                <th>3*3/8</th>
                                                <th>-3*3/8</th>
                                                <th>3*1/2</th>
                                                <th>-3*1/2</th>
                                                <th>3*5/8</th>
                                                <th>-3*5/8</th>
                                                <th>3*3/4</th>
                                                <th>-3*3/4</th>
                                                <th>3*7/8</th>
                                                <th>-3*7/8</th>
                                                <th>4</th>
                                                <th>-4</th>
                                                <th>4*1/8</th>
                                                <th>-4*1/8</th>
                                                <th>4*1/4</th>
                                                <th>-4*1/4</th>
                                                <th>4*3/8</th>
                                                <th>-4*3/8</th>
                                                <th>4*1/2</th>
                                                <th>-4*1/2</th>
                                                <th>4*5/8</th>
                                                <th>-4*5/8</th>
                                                <th>4*3/4</th>
                                                <th>-4*3/4</th>
                                                <th>4*7/8</th>
                                                <th>-4*7/8</th>
                                                <th>5</th>
                                                <th>-5</th>


                                            </tr>

                                        </thead>
                                        <tbody>
                                            <?php


                                            if (!$measurements) {
                                                die('Failed to connect to MySQL: ' . mysqli_connect_error());
                                            }




                                            $sqlSelect = "SELECT * FROM `seat`";
                                            $counter = 0;

                                            $result = mysqli_query($measurements, $sqlSelect);

                                            if (mysqli_num_rows($result) > 0) {
                                            ?>

                                                <?php

                                                while ($row = mysqli_fetch_array($result)) {
                                                ?>

                                                    <tr>
                                                        <td><?php echo ++$counter; ?></td>
                                                        <td><?php echo $row['SEAT']; ?></td>
                                                        <td><?php echo $row['2']; ?></td>
                                                        <td><?php echo $row['-2']; ?></td>
                                                        <td><?php echo $row['2*1/8']; ?></td>
                                                        <td><?php echo $row['-2*1/8']; ?></td>
                                                        <td><?php echo $row['2*1/4']; ?></td>
                                                        <td><?php echo $row['-2*1/4']; ?></td>
                                                        <td><?php echo $row['2*3/8']; ?></td>
                                                        <td><?php echo $row['-2*3/8']; ?></td>
                                                        <td><?php echo $row['2*1/2']; ?></td>
                                                        <td><?php echo $row['-2*1/2']; ?></td>
                                                        <td><?php echo $row['2*5/8']; ?></td>
                                                        <td><?php echo $row['-2*5/8']; ?></td>
                                                        <td><?php echo $row['2*3/4']; ?></td>
                                                        <td><?php echo $row['-2*3/4']; ?></td>
                                                        <td><?php echo $row['2*7/8']; ?></td>
                                                        <td><?php echo $row['-2*7/8']; ?></td>
                                                        <td><?php echo $row['3']; ?></td>
                                                        <td><?php echo $row['-3']; ?></td>
                                                        <td><?php echo $row['3*1/8']; ?></td>
                                                        <td><?php echo $row['-3*1/8']; ?></td>
                                                        <td><?php echo $row['3*1/4']; ?></td>
                                                        <td><?php echo $row['-3*1/4']; ?></td>
                                                        <td><?php echo $row['3*3/8']; ?></td>
                                                        <td><?php echo $row['-3*3/8']; ?></td>
                                                        <td><?php echo $row['3*1/2']; ?></td>
                                                        <td><?php echo $row['-3*1/2']; ?></td>
                                                        <td><?php echo $row['3*5/8']; ?></td>
                                                        <td><?php echo $row['-3*5/8']; ?></td>
                                                        <td><?php echo $row['3*3/4']; ?></td>
                                                        <td><?php echo $row['-3*3/4']; ?></td>
                                                        <td><?php echo $row['3*7/8']; ?></td>
                                                        <td><?php echo $row['-3*7/8']; ?></td>
                                                        <td><?php echo $row['4']; ?></td>
                                                        <td><?php echo $row['-4']; ?></td>
                                                        <td><?php echo $row['4*1/8']; ?></td>
                                                        <td><?php echo $row['-4*1/8']; ?></td>
                                                        <td><?php echo $row['4*1/4']; ?></td>
                                                        <td><?php echo $row['-4*1/4']; ?></td>
                                                        <td><?php echo $row['4*3/8']; ?></td>
                                                        <td><?php echo $row['-4*3/8']; ?></td>
                                                        <td><?php echo $row['4*1/2']; ?></td>
                                                        <td><?php echo $row['-4*1/2']; ?></td>
                                                        <td><?php echo $row['4*5/8']; ?></td>
                                                        <td><?php echo $row['-4*5/8']; ?></td>
                                                        <td><?php echo $row['4*3/4']; ?></td>
                                                        <td><?php echo $row['-4*3/4']; ?></td>
                                                        <td><?php echo $row['4*7/8']; ?></td>
                                                        <td><?php echo $row['-4*7/8']; ?></td>
                                                        <td><?php echo $row['5']; ?></td>
                                                        <td><?php echo $row['-5']; ?></td>



                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-sm-6" id="raisebk_plus_minus_div">
                                <div id="inner_raisebk_plus_minus_div">
                                    <table id="raise_bk_plus_minus" class="table table-bordered table-striped" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-export-options='{"fileName": "<?php echo "NEW_STOCK_TABLE-";
                                                                                                                                                                                                                                                                                                                                                                                                                                                    echo date("d-m-Y"); ?>"}' data-click-to-select="true" data-toolbar="#toolbar">

                                        <p class="raise_bk_plus_minus" style="font-weight:bold;font-size:15px;margin-left:40px;margin-bottom:1px;margin-top:10px">Raise Bk (+)(-)</p>
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Rais_BK_plus_minus</th>
                                                <th>1/4</th>
                                                <th>3/8</th>
                                                <th>1/2</th>
                                                <th>5/8</th>
                                                <th>3/4</th>
                                                <th>7/8</th>
                                                <th>1</th>
                                                <th>1*1/8</th>
                                                <th>1*1/4</th>
                                                <th>1*3/8</th>
                                                <th>1*1/2</th>
                                                <th>-1/4</th>
                                                <th>-3/8</th>
                                                <th>-1/2</th>
                                                <th>-5/8</th>
                                                <th>-3/4</th>
                                                <th>-7/8</th>
                                                <th>-1</th>
                                                <th>-1*1/8</th>
                                                <th>-1*1/4</th>
                                                <th>-1*3/8</th>
                                                <th>-1*1/2</th>

                                            </tr>

                                        </thead>
                                        <tbody>
                                            <?php


                                            if (!$measurements) {
                                                die('Failed to connect to MySQL: ' . mysqli_connect_error());
                                            }




                                            $sqlSelect = "SELECT * FROM `raise_bk_plus_minus`";
                                            $counter = 0;

                                            $result = mysqli_query($measurements, $sqlSelect);

                                            if (mysqli_num_rows($result) > 0) {
                                            ?>

                                                <?php

                                                while ($row = mysqli_fetch_array($result)) {
                                                ?>

                                                    <tr>
                                                        <td><?php echo ++$counter; ?></td>
                                                        <td><?php echo $row['Rais_BK_plus_minus']; ?></td>
                                                        <td><?php echo $row['1/4']; ?></td>
                                                        <td><?php echo $row['3/8']; ?></td>
                                                        <td><?php echo $row['1/2']; ?></td>
                                                        <td><?php echo $row['5/8']; ?></td>
                                                        <td><?php echo $row['3/4']; ?></td>
                                                        <td><?php echo $row['7/8']; ?></td>
                                                        <td><?php echo $row['1']; ?></td>
                                                        <td><?php echo $row['1*1/8']; ?></td>
                                                        <td><?php echo $row['1*1/4']; ?></td>
                                                        <td><?php echo $row['1*3/8']; ?></td>
                                                        <td><?php echo $row['1*1/2']; ?></td>
                                                        <td><?php echo $row['-1/4']; ?></td>
                                                        <td><?php echo $row['-3/8']; ?></td>
                                                        <td><?php echo $row['-1/2']; ?></td>
                                                        <td><?php echo $row['-5/8']; ?></td>
                                                        <td><?php echo $row['-3/4']; ?></td>
                                                        <td><?php echo $row['-7/8']; ?></td>
                                                        <td><?php echo $row['-1']; ?></td>
                                                        <td><?php echo $row['-1*1/8']; ?></td>
                                                        <td><?php echo $row['-1*1/4']; ?></td>
                                                        <td><?php echo $row['-1*3/8']; ?></td>
                                                        <td><?php echo $row['-1*1/2']; ?></td>





                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Third -->
                        <div class="third_row row">
                            <div class="col-sm-6" id="PAH12_div">
                                <div id="inner_PAH12_div">
                                    <table id="P+AH+12" class="table table-bordered table-striped" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-export-options='{"fileName": "<?php echo "NEW_STOCK_TABLE-";
                                                                                                                                                                                                                                                                                                                                                                                                                                        echo date("d-m-Y"); ?>"}' data-click-to-select="true" data-toolbar="#toolbar">

                                        <p class="P+AH+12" style="font-weight:bold;font-size:15px;margin-left:40px;margin-bottom:1px;margin-top:10px">P+AH+12</p>
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>p(+)AH_(+)12</th>
                                                <th>1/4</th>
                                                <th>1/2</th>
                                                <th>1</th>


                                            </tr>

                                        </thead>
                                        <tbody>
                                            <?php


                                            if (!$measurements) {
                                                die('Failed to connect to MySQL: ' . mysqli_connect_error());
                                            }




                                            $sqlSelect = "SELECT * FROM `p_plus_ah_plus_12`";
                                            $counter = 0;

                                            $result = mysqli_query($measurements, $sqlSelect);

                                            if (mysqli_num_rows($result) > 0) {
                                            ?>

                                                <?php

                                                while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo ++$counter; ?></td>
                                                        <td><?php echo $row['p_plus_ah_plus_12']; ?></td>
                                                        <td><?php echo $row['1/4']; ?></td>
                                                        <td><?php echo $row['1/2']; ?></td>
                                                        <td><?php echo $row['1']; ?></td>



                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-sm-6" id="lowclr_plus_div">
                                <div id="inner_lowclr_plus_div">
                                    <table id="low_clr_plus" class="table table-bordered table-striped" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-export-options='{"fileName": "<?php echo "NEW_STOCK_TABLE-";
                                                                                                                                                                                                                                                                                                                                                                                                                                            echo date("d-m-Y"); ?>"}' data-click-to-select="true" data-toolbar="#toolbar">

                                        <p class="low_clr_plus" style="font-weight:bold;font-size:15px;margin-left:40px;margin-bottom:1px;margin-top:10px">LowClr(+)</p>
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>low_clr_plus</th>
                                                <th>1/4</th>
                                                <th>3/8</th>
                                                <th>1/2</th>
                                                <th>5/8</th>
                                                <th>3/4</th>
                                                <th>7/8</th>
                                                <th>1</th>
                                            </tr>

                                        </thead>
                                        <tbody>
                                            <?php


                                            if (!$measurements) {
                                                die('Failed to connect to MySQL: ' . mysqli_connect_error());
                                            }




                                            $sqlSelect = "SELECT * FROM `low_clr_plus`";
                                            $counter = 0;

                                            $result = mysqli_query($measurements, $sqlSelect);

                                            if (mysqli_num_rows($result) > 0) {
                                            ?>

                                                <?php

                                                while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo ++$counter; ?></td>
                                                        <td><?php echo $row['low_clr_plus']; ?></td>
                                                        <td><?php echo $row['1/4']; ?></td>
                                                        <td><?php echo $row['3/8']; ?></td>
                                                        <td><?php echo $row['1/2']; ?></td>
                                                        <td><?php echo $row['5/8']; ?></td>
                                                        <td><?php echo $row['3/4']; ?></td>
                                                        <td><?php echo $row['7/8']; ?></td>
                                                        <td><?php echo $row['1']; ?></td>


                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                        <!-- Forth row -->
                        <div class="forth_row row">
                            <div class="col-sm-6" id="portlyfit_div">
                                <div id="inner_portlyfit_div">
                                    <table id="portly_fit" class="table table-bordered table-striped" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-export-options='{"fileName": "<?php echo "NEW_STOCK_TABLE-";
                                                                                                                                                                                                                                                                                                                                                                                                                                            echo date("d-m-Y"); ?>"}' data-click-to-select="true" data-toolbar="#toolbar">

                                        <p class="portly_fit" style="font-weight:bold;font-size:15px;margin-left:40px;margin-bottom:1px;margin-top:10px">Portly Fit</p>
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Size</th>
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
                                                <th>51</th>
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


                                            if (!$measurements) {
                                                die('Failed to connect to MySQL: ' . mysqli_connect_error());
                                            }




                                            $sqlSelect = "SELECT * FROM `portly_fit`";
                                            $counter = 0;

                                            $result = mysqli_query($measurements, $sqlSelect);

                                            if (mysqli_num_rows($result) > 0) {
                                            ?>

                                                <?php

                                                while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo ++$counter; ?></td>
                                                        <td><?php echo $row['size']; ?></td>
                                                        <td><?php echo $row['34']; ?></td>
                                                        <td><?php echo $row['35']; ?></td>
                                                        <td><?php echo $row['36']; ?></td>
                                                        <td><?php echo $row['37']; ?></td>
                                                        <td><?php echo $row['38']; ?></td>
                                                        <td><?php echo $row['39']; ?></td>
                                                        <td><?php echo $row['40']; ?></td>
                                                        <td><?php echo $row['41']; ?></td>
                                                        <td><?php echo $row['42']; ?></td>
                                                        <td><?php echo $row['43']; ?></td>
                                                        <td><?php echo $row['44']; ?></td>
                                                        <td><?php echo $row['45']; ?></td>
                                                        <td><?php echo $row['46']; ?></td>
                                                        <td><?php echo $row['47']; ?></td>
                                                        <td><?php echo $row['48']; ?></td>
                                                        <td><?php echo $row['49']; ?></td>
                                                        <td><?php echo $row['50']; ?></td>
                                                        <td><?php echo $row['51']; ?></td>
                                                        <td><?php echo $row['52']; ?></td>
                                                        <td><?php echo $row['53']; ?></td>
                                                        <td><?php echo $row['54']; ?></td>
                                                        <td><?php echo $row['55']; ?></td>
                                                        <td><?php echo $row['56']; ?></td>
                                                        <td><?php echo $row['57']; ?></td>
                                                        <td><?php echo $row['58']; ?></td>
                                                        <td><?php echo $row['59']; ?></td>
                                                        <td><?php echo $row['60']; ?></td>


                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-sm-6" id="plucrot_plus_div">
                                <div id="inner_plucrot_plus_div">
                                    <table id="plu_crot_plus" class="table table-bordered table-striped" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-export-options='{"fileName": "<?php echo "NEW_STOCK_TABLE-";
                                                                                                                                                                                                                                                                                                                                                                                                                                                echo date("d-m-Y"); ?>"}' data-click-to-select="true" data-toolbar="#toolbar">

                                        <p class="plu_crot_plus" style="font-weight:bold;font-size:15px;margin-left:40px;margin-bottom:1px;margin-top:10px">Plu Crot(+)</p>
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Plucrot_plus</th>
                                                <th>1/4</th>
                                                <th>3/8</th>
                                                <th>1/2</th>
                                                <th>5/8</th>
                                                <th>3/4</th>
                                                <th>7/8</th>
                                                <th>1</th>
                                                <th>1*1/8</th>
                                                <th>1*1/4</th>
                                                <th>1*3/8</th>
                                                <th>1*1/2</th>
                                                <th>-1/4</th>
                                                <th>-3/8</th>
                                                <th>-1/2</th>
                                                <th>-5/8</th>
                                                <th>-3/4</th>
                                                <th>-7/8</th>
                                                <th>-1</th>
                                                <th>-1*1/8</th>
                                                <th>-1*1/4</th>
                                                <th>-1*3/8</th>
                                                <th>-1*1/2</th>

                                            </tr>

                                        </thead>
                                        <tbody>
                                            <?php


                                            if (!$measurements) {
                                                die('Failed to connect to MySQL: ' . mysqli_connect_error());
                                            }




                                            $sqlSelect = "SELECT * FROM `plu_crot_plus`";
                                            $counter = 0;

                                            $result = mysqli_query($measurements, $sqlSelect);

                                            if (mysqli_num_rows($result) > 0) {
                                            ?>

                                                <?php

                                                while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo ++$counter; ?></td>
                                                        <td><?php echo $row['Plucrot_plus']; ?></td>

                                                        <td><?php echo $row['1/4']; ?></td>
                                                        <td><?php echo $row['3/8']; ?></td>
                                                        <td><?php echo $row['1/2']; ?></td>
                                                        <td><?php echo $row['5/8']; ?></td>
                                                        <td><?php echo $row['3/4']; ?></td>
                                                        <td><?php echo $row['7/8']; ?></td>
                                                        <td><?php echo $row['1']; ?></td>
                                                        <td><?php echo $row['1*1/8']; ?></td>
                                                        <td><?php echo $row['1*1/4']; ?></td>
                                                        <td><?php echo $row['1*3/8']; ?></td>
                                                        <td><?php echo $row['1*1/2']; ?></td>
                                                        <td><?php echo $row['-1/4']; ?></td>
                                                        <td><?php echo $row['-3/8']; ?></td>
                                                        <td><?php echo $row['-1/2']; ?></td>
                                                        <td><?php echo $row['-5/8']; ?></td>
                                                        <td><?php echo $row['-3/4']; ?></td>
                                                        <td><?php echo $row['-7/8']; ?></td>
                                                        <td><?php echo $row['-1']; ?></td>
                                                        <td><?php echo $row['-1*1/8']; ?></td>
                                                        <td><?php echo $row['-1*1/4']; ?></td>
                                                        <td><?php echo $row['-1*3/8']; ?></td>
                                                        <td><?php echo $row['-1*1/2']; ?></td>

                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!--fifth row--->
                        <div class="fifth_row row">
                            <div class="col-sm-6" id="mtm_us_trsr_div">
                                <div id="inner_mtm_us_trsr_div">
                                    <table id="mtm_us_trs(r)" class="table table-bordered table-striped" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-export-options='{"fileName": "<?php echo "NEW_STOCK_TABLE-";
                                                                                                                                                                                                                                                                                                                                                                                                                                                echo date("d-m-Y"); ?>"}' data-click-to-select="true" data-toolbar="#toolbar">

                                        <p class="mtm_us_trs(r)" style="font-weight:bold;font-size:15px;margin-left:40px;margin-bottom:1px;margin-top:10px">MTM_US_TRS(R)</p>
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Measurement_points</th>
                                                <th>28M</th>
                                                <th>29M</th>
                                                <th>30M</th>
                                                <th>31M</th>
                                                <th>32M</th>
                                                <th>33M</th>
                                                <th>34M</th>
                                                <th>35M</th>
                                                <th>36M</th>
                                                <th>37M</th>
                                                <th>38M</th>
                                                <th>39M</th>
                                                <th>40M</th>
                                                <th>41M</th>
                                                <th>42M</th>
                                                <th>43M</th>
                                                <th>44M</th>
                                                <th>45M</th>
                                                <th>46M</th>
                                                <th>47M</th>
                                                <th>48M</th>
                                                <th>49M</th>
                                                <th>50M</th>
                                                <th>51M</th>
                                                <th>52M</th>
                                                <th>53M</th>
                                                <th>54M</th>
                                                <th>55M</th>
                                                <th>56M</th>
                                                <th>57M</th>
                                                <th>58M</th>
                                                <th>59M</th>
                                                <th>60M</th>
                                                <th>61M</th>
                                                <th>62M</th>
                                                <th>63M</th>
                                                <th>64M</th>
                                                <th>28S</th>
                                                <th>29S</th>
                                                <th>30S</th>
                                                <th>31S</th>
                                                <th>32S</th>
                                                <th>33S</th>
                                                <th>34S</th>
                                                <th>35S</th>
                                                <th>36S</th>
                                                <th>37S</th>
                                                <th>38S</th>
                                                <th>39S</th>
                                                <th>40S</th>
                                                <th>41S</th>
                                                <th>42S</th>
                                                <th>43S</th>
                                                <th>44S</th>
                                                <th>45S</th>
                                                <th>46S</th>
                                                <th>47S</th>
                                                <th>48S</th>
                                                <th>49S</th>
                                                <th>50S</th>
                                                <th>51S</th>
                                                <th>52S</th>
                                                <th>53S</th>
                                                <th>54S</th>
                                                <th>55S</th>
                                                <th>56S</th>
                                                <th>57S</th>
                                                <th>58S</th>
                                                <th>59S</th>
                                                <th>60S</th>
                                                <th>61S</th>
                                                <th>62S</th>
                                                <th>63S</th>
                                                <th>64S</th>
                                                <th>28F</th>
                                                <th>29F</th>
                                                <th>30F</th>
                                                <th>31F</th>
                                                <th>32F</th>
                                                <th>33F</th>
                                                <th>34F</th>
                                                <th>35F</th>
                                                <th>36F</th>
                                                <th>37F</th>
                                                <th>38F</th>
                                                <th>39F</th>
                                                <th>40F</th>
                                                <th>41F</th>
                                                <th>42F</th>
                                                <th>43F</th>
                                                <th>44F</th>
                                                <th>45F</th>
                                                <th>46F</th>
                                                <th>47F</th>
                                                <th>48F</th>
                                                <th>49F</th>
                                                <th>50F</th>
                                                <th>51F</th>
                                                <th>52F</th>
                                                <th>53F</th>
                                                <th>54F</th>
                                                <th>55F</th>
                                                <th>56F</th>
                                                <th>57F</th>
                                                <th>58F</th>
                                                <th>59F</th>
                                                <th>60F</th>
                                                <th>61F</th>
                                                <th>62F</th>
                                                <th>63F</th>
                                                <th>64F</th>
                                                <th>24T</th>
                                                <th>25T</th>
                                                <th>26T</th>
                                                <th>27T</th>
                                                <th>28T</th>
                                                <th>29T</th>
                                                <th>30T</th>
                                                <th>31T</th>
                                                <th>32T</th>
                                                <th>33T</th>
                                                <th>34T</th>
                                                <th>35T</th>
                                                <th>36T</th>
                                                <th>37T</th>
                                                <th>38T</th>
                                                <th>39T</th>
                                                <th>40T</th>
                                                <th>41T</th>
                                                <th>42T</th>
                                                <th>43T</th>
                                                <th>44T</th>
                                                <th>45T</th>
                                                <th>46T</th>
                                                <th>47T</th>
                                                <th>48T</th>
                                                <th>49T</th>
                                                <th>50T</th>
                                                <th>51T</th>
                                                <th>52T</th>
                                                <th>53T</th>
                                                <th>54T</th>
                                                <th>55T</th>
                                                <th>56T</th>
                                                <th>57T</th>
                                                <th>58T</th>
                                                <th>59T</th>
                                                <th>60T</th>
                                            </tr>

                                        </thead>
                                        <tbody>
                                            <?php


                                            if (!$measurements) {
                                                die('Failed to connect to MySQL: ' . mysqli_connect_error());
                                            }




                                            $sqlSelect = "SELECT * FROM `mtm_us_trs(r)`";
                                            $counter = 0;

                                            $result = mysqli_query($measurements, $sqlSelect);

                                            if (mysqli_num_rows($result) > 0) {
                                            ?>

                                                <?php

                                                while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo ++$counter; ?></td>
                                                        <td><?php echo $row['Measurement_points']; ?></td>
                                                        <td><?php echo $row['28M']; ?></td>
                                                        <td><?php echo $row['29M']; ?></td>
                                                        <td><?php echo $row['30M']; ?></td>
                                                        <td><?php echo $row['31M']; ?></td>
                                                        <td><?php echo $row['32M']; ?></td>
                                                        <td><?php echo $row['33M']; ?></td>
                                                        <td><?php echo $row['34M']; ?></td>
                                                        <td><?php echo $row['35M']; ?></td>
                                                        <td><?php echo $row['36M']; ?></td>
                                                        <td><?php echo $row['37M']; ?></td>
                                                        <td><?php echo $row['38M']; ?></td>
                                                        <td><?php echo $row['39M']; ?></td>
                                                        <td><?php echo $row['40M']; ?></td>
                                                        <td><?php echo $row['41M']; ?></td>
                                                        <td><?php echo $row['42M']; ?></td>
                                                        <td><?php echo $row['43M']; ?></td>
                                                        <td><?php echo $row['44M']; ?></td>
                                                        <td><?php echo $row['45M']; ?></td>
                                                        <td><?php echo $row['46M']; ?></td>
                                                        <td><?php echo $row['47M']; ?></td>
                                                        <td><?php echo $row['48M']; ?></td>
                                                        <td><?php echo $row['49M']; ?></td>
                                                        <td><?php echo $row['50M']; ?></td>
                                                        <td><?php echo $row['51M']; ?></td>
                                                        <td><?php echo $row['52M']; ?></td>
                                                        <td><?php echo $row['53M']; ?></td>
                                                        <td><?php echo $row['54M']; ?></td>
                                                        <td><?php echo $row['55M']; ?></td>
                                                        <td><?php echo $row['56M']; ?></td>
                                                        <td><?php echo $row['57M']; ?></td>
                                                        <td><?php echo $row['58M']; ?></td>
                                                        <td><?php echo $row['59M']; ?></td>
                                                        <td><?php echo $row['60M']; ?></td>
                                                        <td><?php echo $row['61M']; ?></td>
                                                        <td><?php echo $row['62M']; ?></td>
                                                        <td><?php echo $row['63M']; ?></td>
                                                        <td><?php echo $row['64M']; ?></td>
                                                        <td><?php echo $row['28S']; ?></td>
                                                        <td><?php echo $row['29S']; ?></td>
                                                        <td><?php echo $row['30S']; ?></td>
                                                        <td><?php echo $row['31S']; ?></td>
                                                        <td><?php echo $row['32S']; ?></td>
                                                        <td><?php echo $row['33S']; ?></td>
                                                        <td><?php echo $row['34S']; ?></td>
                                                        <td><?php echo $row['35S']; ?></td>
                                                        <td><?php echo $row['36S']; ?></td>
                                                        <td><?php echo $row['37S']; ?></td>
                                                        <td><?php echo $row['38S']; ?></td>
                                                        <td><?php echo $row['39S']; ?></td>
                                                        <td><?php echo $row['40S']; ?></td>
                                                        <td><?php echo $row['41S']; ?></td>
                                                        <td><?php echo $row['42S']; ?></td>
                                                        <td><?php echo $row['43S']; ?></td>
                                                        <td><?php echo $row['44S']; ?></td>
                                                        <td><?php echo $row['45S']; ?></td>
                                                        <td><?php echo $row['46S']; ?></td>
                                                        <td><?php echo $row['47S']; ?></td>
                                                        <td><?php echo $row['48S']; ?></td>
                                                        <td><?php echo $row['49S']; ?></td>
                                                        <td><?php echo $row['50S']; ?></td>
                                                        <td><?php echo $row['51S']; ?></td>
                                                        <td><?php echo $row['52S']; ?></td>
                                                        <td><?php echo $row['53S']; ?></td>
                                                        <td><?php echo $row['54S']; ?></td>
                                                        <td><?php echo $row['55S']; ?></td>
                                                        <td><?php echo $row['56S']; ?></td>
                                                        <td><?php echo $row['57S']; ?></td>
                                                        <td><?php echo $row['58S']; ?></td>
                                                        <td><?php echo $row['59S']; ?></td>
                                                        <td><?php echo $row['60S']; ?></td>
                                                        <td><?php echo $row['61S']; ?></td>
                                                        <td><?php echo $row['62S']; ?></td>
                                                        <td><?php echo $row['63S']; ?></td>
                                                        <td><?php echo $row['64S']; ?></td>
                                                        <td><?php echo $row['28F']; ?></td>
                                                        <td><?php echo $row['29F']; ?></td>
                                                        <td><?php echo $row['30F']; ?></td>
                                                        <td><?php echo $row['31F']; ?></td>
                                                        <td><?php echo $row['32F']; ?></td>
                                                        <td><?php echo $row['33F']; ?></td>
                                                        <td><?php echo $row['34F']; ?></td>
                                                        <td><?php echo $row['35F']; ?></td>
                                                        <td><?php echo $row['36F']; ?></td>
                                                        <td><?php echo $row['37F']; ?></td>
                                                        <td><?php echo $row['38F']; ?></td>
                                                        <td><?php echo $row['39F']; ?></td>
                                                        <td><?php echo $row['40F']; ?></td>
                                                        <td><?php echo $row['41F']; ?></td>
                                                        <td><?php echo $row['42F']; ?></td>
                                                        <td><?php echo $row['43F']; ?></td>
                                                        <td><?php echo $row['44F']; ?></td>
                                                        <td><?php echo $row['45F']; ?></td>
                                                        <td><?php echo $row['46F']; ?></td>
                                                        <td><?php echo $row['47F']; ?></td>
                                                        <td><?php echo $row['48F']; ?></td>
                                                        <td><?php echo $row['49F']; ?></td>
                                                        <td><?php echo $row['50F']; ?></td>
                                                        <td><?php echo $row['51F']; ?></td>
                                                        <td><?php echo $row['52F']; ?></td>
                                                        <td><?php echo $row['53F']; ?></td>
                                                        <td><?php echo $row['54F']; ?></td>
                                                        <td><?php echo $row['55F']; ?></td>
                                                        <td><?php echo $row['56F']; ?></td>
                                                        <td><?php echo $row['57F']; ?></td>
                                                        <td><?php echo $row['58F']; ?></td>
                                                        <td><?php echo $row['59F']; ?></td>
                                                        <td><?php echo $row['60F']; ?></td>
                                                        <td><?php echo $row['61F']; ?></td>
                                                        <td><?php echo $row['62F']; ?></td>
                                                        <td><?php echo $row['63F']; ?></td>
                                                        <td><?php echo $row['64F']; ?></td>
                                                        <td><?php echo $row['24T']; ?></td>
                                                        <td><?php echo $row['25T']; ?></td>
                                                        <td><?php echo $row['26T']; ?></td>
                                                        <td><?php echo $row['27T']; ?></td>
                                                        <td><?php echo $row['28T']; ?></td>
                                                        <td><?php echo $row['29T']; ?></td>
                                                        <td><?php echo $row['30T']; ?></td>
                                                        <td><?php echo $row['31T']; ?></td>
                                                        <td><?php echo $row['32T']; ?></td>
                                                        <td><?php echo $row['33T']; ?></td>
                                                        <td><?php echo $row['34T']; ?></td>
                                                        <td><?php echo $row['35T']; ?></td>
                                                        <td><?php echo $row['36T']; ?></td>
                                                        <td><?php echo $row['37T']; ?></td>
                                                        <td><?php echo $row['38T']; ?></td>
                                                        <td><?php echo $row['39T']; ?></td>
                                                        <td><?php echo $row['40T']; ?></td>
                                                        <td><?php echo $row['41T']; ?></td>
                                                        <td><?php echo $row['42T']; ?></td>
                                                        <td><?php echo $row['43T']; ?></td>
                                                        <td><?php echo $row['44T']; ?></td>
                                                        <td><?php echo $row['45T']; ?></td>
                                                        <td><?php echo $row['46T']; ?></td>
                                                        <td><?php echo $row['47T']; ?></td>
                                                        <td><?php echo $row['48T']; ?></td>
                                                        <td><?php echo $row['49T']; ?></td>
                                                        <td><?php echo $row['50T']; ?></td>
                                                        <td><?php echo $row['51T']; ?></td>
                                                        <td><?php echo $row['52T']; ?></td>
                                                        <td><?php echo $row['53T']; ?></td>
                                                        <td><?php echo $row['54T']; ?></td>
                                                        <td><?php echo $row['55T']; ?></td>
                                                        <td><?php echo $row['56T']; ?></td>
                                                        <td><?php echo $row['57T']; ?></td>
                                                        <td><?php echo $row['58T']; ?></td>
                                                        <td><?php echo $row['59T']; ?></td>
                                                        <td><?php echo $row['60T']; ?></td>



                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-sm-6" id="mtm_us_trsl_div">
                                <div id="inner_mtm_us_trsl_div">
                                    <table id="mtm_us_trs(l)" class="table table-bordered table-striped" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-export-options='{"fileName": "<?php echo "NEW_STOCK_TABLE-";
                                                                                                                                                                                                                                                                                                                                                                                                                                                echo date("d-m-Y"); ?>"}' data-click-to-select="true" data-toolbar="#toolbar">

                                        <p class="mtm_us_trs(l)" style="font-weight:bold;font-size:15px;margin-left:40px;margin-bottom:1px;margin-top:10px">MTM_US_TRS(L)</p>

                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Measurement_points</th>
                                                <th>28M</th>
                                                <th>29M</th>
                                                <th>30M</th>
                                                <th>31M</th>
                                                <th>32M</th>
                                                <th>33M</th>
                                                <th>34M</th>
                                                <th>35M</th>
                                                <th>36M</th>
                                                <th>37M</th>
                                                <th>38M</th>
                                                <th>39M</th>
                                                <th>40M</th>
                                                <th>41M</th>
                                                <th>42M</th>
                                                <th>43M</th>
                                                <th>44M</th>
                                                <th>45M</th>
                                                <th>46M</th>
                                                <th>47M</th>
                                                <th>48M</th>
                                                <th>49M</th>
                                                <th>50M</th>
                                                <th>51M</th>
                                                <th>52M</th>
                                                <th>53M</th>
                                                <th>54M</th>
                                                <th>55M</th>
                                                <th>56M</th>
                                                <th>57M</th>
                                                <th>58M</th>
                                                <th>59M</th>
                                                <th>60M</th>
                                                <th>61M</th>
                                                <th>62M</th>
                                                <th>63M</th>
                                                <th>64M</th>
                                                <th>28S</th>
                                                <th>29S</th>
                                                <th>30S</th>
                                                <th>31S</th>
                                                <th>32S</th>
                                                <th>33S</th>
                                                <th>34S</th>
                                                <th>35S</th>
                                                <th>36S</th>
                                                <th>37S</th>
                                                <th>38S</th>
                                                <th>39S</th>
                                                <th>40S</th>
                                                <th>41S</th>
                                                <th>42S</th>
                                                <th>43S</th>
                                                <th>44S</th>
                                                <th>45S</th>
                                                <th>46S</th>
                                                <th>47S</th>
                                                <th>48S</th>
                                                <th>49S</th>
                                                <th>50S</th>
                                                <th>51S</th>
                                                <th>52S</th>
                                                <th>53S</th>
                                                <th>54S</th>
                                                <th>55S</th>
                                                <th>56S</th>
                                                <th>57S</th>
                                                <th>58S</th>
                                                <th>59S</th>
                                                <th>60S</th>
                                                <th>61S</th>
                                                <th>62S</th>
                                                <th>63S</th>
                                                <th>64S</th>
                                                <th>28F</th>
                                                <th>29F</th>
                                                <th>30F</th>
                                                <th>31F</th>
                                                <th>32F</th>
                                                <th>33F</th>
                                                <th>34F</th>
                                                <th>35F</th>
                                                <th>36F</th>
                                                <th>37F</th>
                                                <th>38F</th>
                                                <th>39F</th>
                                                <th>40F</th>
                                                <th>41F</th>
                                                <th>42F</th>
                                                <th>43F</th>
                                                <th>44F</th>
                                                <th>45F</th>
                                                <th>46F</th>
                                                <th>47F</th>
                                                <th>48F</th>
                                                <th>49F</th>
                                                <th>50F</th>
                                                <th>51F</th>
                                                <th>52F</th>
                                                <th>53F</th>
                                                <th>54F</th>
                                                <th>55F</th>
                                                <th>56F</th>
                                                <th>57F</th>
                                                <th>58F</th>
                                                <th>59F</th>
                                                <th>60F</th>
                                                <th>61F</th>
                                                <th>62F</th>
                                                <th>63F</th>
                                                <th>64F</th>
                                                <th>24T</th>
                                                <th>25T</th>
                                                <th>26T</th>
                                                <th>27T</th>
                                                <th>28T</th>
                                                <th>29T</th>
                                                <th>30T</th>
                                                <th>31T</th>
                                                <th>32T</th>
                                                <th>33T</th>
                                                <th>34T</th>
                                                <th>35T</th>
                                                <th>36T</th>
                                                <th>37T</th>
                                                <th>38T</th>
                                                <th>39T</th>
                                                <th>40T</th>
                                                <th>41T</th>
                                                <th>42T</th>
                                                <th>43T</th>
                                                <th>44T</th>
                                                <th>45T</th>
                                                <th>46T</th>
                                                <th>47T</th>
                                                <th>48T</th>
                                                <th>49T</th>
                                                <th>50T</th>
                                                <th>51T</th>
                                                <th>52T</th>
                                                <th>53T</th>
                                                <th>54T</th>
                                                <th>55T</th>
                                                <th>56T</th>
                                                <th>57T</th>
                                                <th>58T</th>
                                                <th>59T</th>
                                                <th>60T</th>
                                            </tr>

                                        </thead>
                                        <tbody>
                                            <?php


                                            if (!$measurements) {
                                                die('Failed to connect to MySQL: ' . mysqli_connect_error());
                                            }




                                            $sqlSelect = "SELECT * FROM `mtm_us_trs(l)`";
                                            $counter = 0;

                                            $result = mysqli_query($measurements, $sqlSelect);

                                            if (mysqli_num_rows($result) > 0) {
                                            ?>

                                                <?php

                                                while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo ++$counter; ?></td>
                                                        <td><?php echo $row['Measurement_points']; ?></td>
                                                        <td><?php echo $row['28M']; ?></td>
                                                        <td><?php echo $row['29M']; ?></td>
                                                        <td><?php echo $row['30M']; ?></td>
                                                        <td><?php echo $row['31M']; ?></td>
                                                        <td><?php echo $row['32M']; ?></td>
                                                        <td><?php echo $row['33M']; ?></td>
                                                        <td><?php echo $row['34M']; ?></td>
                                                        <td><?php echo $row['35M']; ?></td>
                                                        <td><?php echo $row['36M']; ?></td>
                                                        <td><?php echo $row['37M']; ?></td>
                                                        <td><?php echo $row['38M']; ?></td>
                                                        <td><?php echo $row['39M']; ?></td>
                                                        <td><?php echo $row['40M']; ?></td>
                                                        <td><?php echo $row['41M']; ?></td>
                                                        <td><?php echo $row['42M']; ?></td>
                                                        <td><?php echo $row['43M']; ?></td>
                                                        <td><?php echo $row['44M']; ?></td>
                                                        <td><?php echo $row['45M']; ?></td>
                                                        <td><?php echo $row['46M']; ?></td>
                                                        <td><?php echo $row['47M']; ?></td>
                                                        <td><?php echo $row['48M']; ?></td>
                                                        <td><?php echo $row['49M']; ?></td>
                                                        <td><?php echo $row['50M']; ?></td>
                                                        <td><?php echo $row['51M']; ?></td>
                                                        <td><?php echo $row['52M']; ?></td>
                                                        <td><?php echo $row['53M']; ?></td>
                                                        <td><?php echo $row['54M']; ?></td>
                                                        <td><?php echo $row['55M']; ?></td>
                                                        <td><?php echo $row['56M']; ?></td>
                                                        <td><?php echo $row['57M']; ?></td>
                                                        <td><?php echo $row['58M']; ?></td>
                                                        <td><?php echo $row['59M']; ?></td>
                                                        <td><?php echo $row['60M']; ?></td>
                                                        <td><?php echo $row['61M']; ?></td>
                                                        <td><?php echo $row['62M']; ?></td>
                                                        <td><?php echo $row['63M']; ?></td>
                                                        <td><?php echo $row['64M']; ?></td>
                                                        <td><?php echo $row['28S']; ?></td>
                                                        <td><?php echo $row['29S']; ?></td>
                                                        <td><?php echo $row['30S']; ?></td>
                                                        <td><?php echo $row['31S']; ?></td>
                                                        <td><?php echo $row['32S']; ?></td>
                                                        <td><?php echo $row['33S']; ?></td>
                                                        <td><?php echo $row['34S']; ?></td>
                                                        <td><?php echo $row['35S']; ?></td>
                                                        <td><?php echo $row['36S']; ?></td>
                                                        <td><?php echo $row['37S']; ?></td>
                                                        <td><?php echo $row['38S']; ?></td>
                                                        <td><?php echo $row['39S']; ?></td>
                                                        <td><?php echo $row['40S']; ?></td>
                                                        <td><?php echo $row['41S']; ?></td>
                                                        <td><?php echo $row['42S']; ?></td>
                                                        <td><?php echo $row['43S']; ?></td>
                                                        <td><?php echo $row['44S']; ?></td>
                                                        <td><?php echo $row['45S']; ?></td>
                                                        <td><?php echo $row['46S']; ?></td>
                                                        <td><?php echo $row['47S']; ?></td>
                                                        <td><?php echo $row['48S']; ?></td>
                                                        <td><?php echo $row['49S']; ?></td>
                                                        <td><?php echo $row['50S']; ?></td>
                                                        <td><?php echo $row['51S']; ?></td>
                                                        <td><?php echo $row['52S']; ?></td>
                                                        <td><?php echo $row['53S']; ?></td>
                                                        <td><?php echo $row['54S']; ?></td>
                                                        <td><?php echo $row['55S']; ?></td>
                                                        <td><?php echo $row['56S']; ?></td>
                                                        <td><?php echo $row['57S']; ?></td>
                                                        <td><?php echo $row['58S']; ?></td>
                                                        <td><?php echo $row['59S']; ?></td>
                                                        <td><?php echo $row['60S']; ?></td>
                                                        <td><?php echo $row['61S']; ?></td>
                                                        <td><?php echo $row['62S']; ?></td>
                                                        <td><?php echo $row['63S']; ?></td>
                                                        <td><?php echo $row['64S']; ?></td>
                                                        <td><?php echo $row['28F']; ?></td>
                                                        <td><?php echo $row['29F']; ?></td>
                                                        <td><?php echo $row['30F']; ?></td>
                                                        <td><?php echo $row['31F']; ?></td>
                                                        <td><?php echo $row['32F']; ?></td>
                                                        <td><?php echo $row['33F']; ?></td>
                                                        <td><?php echo $row['34F']; ?></td>
                                                        <td><?php echo $row['35F']; ?></td>
                                                        <td><?php echo $row['36F']; ?></td>
                                                        <td><?php echo $row['37F']; ?></td>
                                                        <td><?php echo $row['38F']; ?></td>
                                                        <td><?php echo $row['39F']; ?></td>
                                                        <td><?php echo $row['40F']; ?></td>
                                                        <td><?php echo $row['41F']; ?></td>
                                                        <td><?php echo $row['42F']; ?></td>
                                                        <td><?php echo $row['43F']; ?></td>
                                                        <td><?php echo $row['44F']; ?></td>
                                                        <td><?php echo $row['45F']; ?></td>
                                                        <td><?php echo $row['46F']; ?></td>
                                                        <td><?php echo $row['47F']; ?></td>
                                                        <td><?php echo $row['48F']; ?></td>
                                                        <td><?php echo $row['49F']; ?></td>
                                                        <td><?php echo $row['50F']; ?></td>
                                                        <td><?php echo $row['51F']; ?></td>
                                                        <td><?php echo $row['52F']; ?></td>
                                                        <td><?php echo $row['53F']; ?></td>
                                                        <td><?php echo $row['54F']; ?></td>
                                                        <td><?php echo $row['55F']; ?></td>
                                                        <td><?php echo $row['56F']; ?></td>
                                                        <td><?php echo $row['57F']; ?></td>
                                                        <td><?php echo $row['58F']; ?></td>
                                                        <td><?php echo $row['59F']; ?></td>
                                                        <td><?php echo $row['60F']; ?></td>
                                                        <td><?php echo $row['61F']; ?></td>
                                                        <td><?php echo $row['62F']; ?></td>
                                                        <td><?php echo $row['63F']; ?></td>
                                                        <td><?php echo $row['64F']; ?></td>
                                                        <td><?php echo $row['24T']; ?></td>
                                                        <td><?php echo $row['25T']; ?></td>
                                                        <td><?php echo $row['26T']; ?></td>
                                                        <td><?php echo $row['27T']; ?></td>
                                                        <td><?php echo $row['28T']; ?></td>
                                                        <td><?php echo $row['29T']; ?></td>
                                                        <td><?php echo $row['30T']; ?></td>
                                                        <td><?php echo $row['31T']; ?></td>
                                                        <td><?php echo $row['32T']; ?></td>
                                                        <td><?php echo $row['33T']; ?></td>
                                                        <td><?php echo $row['34T']; ?></td>
                                                        <td><?php echo $row['35T']; ?></td>
                                                        <td><?php echo $row['36T']; ?></td>
                                                        <td><?php echo $row['37T']; ?></td>
                                                        <td><?php echo $row['38T']; ?></td>
                                                        <td><?php echo $row['39T']; ?></td>
                                                        <td><?php echo $row['40T']; ?></td>
                                                        <td><?php echo $row['41T']; ?></td>
                                                        <td><?php echo $row['42T']; ?></td>
                                                        <td><?php echo $row['43T']; ?></td>
                                                        <td><?php echo $row['44T']; ?></td>
                                                        <td><?php echo $row['45T']; ?></td>
                                                        <td><?php echo $row['46T']; ?></td>
                                                        <td><?php echo $row['47T']; ?></td>
                                                        <td><?php echo $row['48T']; ?></td>
                                                        <td><?php echo $row['49T']; ?></td>
                                                        <td><?php echo $row['50T']; ?></td>
                                                        <td><?php echo $row['51T']; ?></td>
                                                        <td><?php echo $row['52T']; ?></td>
                                                        <td><?php echo $row['53T']; ?></td>
                                                        <td><?php echo $row['54T']; ?></td>
                                                        <td><?php echo $row['55T']; ?></td>
                                                        <td><?php echo $row['56T']; ?></td>
                                                        <td><?php echo $row['57T']; ?></td>
                                                        <td><?php echo $row['58T']; ?></td>
                                                        <td><?php echo $row['59T']; ?></td>
                                                        <td><?php echo $row['60T']; ?></td>



                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!---  sixth row   ---->
                        <div class="sixth_row row">
                            <div class="col-sm-7" id="measurement_chart_div">
                                <div id="inner_measurement_chart_div">
                                    <table id="measurement_chart" class="table table-bordered table-striped" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-export-options='{"fileName": "<?php echo "NEW_STOCK_TABLE-";
                                                                                                                                                                                                                                                                                                                                                                                                                                                    echo date("d-m-Y"); ?>"}' data-click-to-select="true" data-toolbar="#toolbar">

                                        <p class="measurement_chart" style="font-weight:bold;font-size:15px;margin-left:40px;margin-bottom:1px;margin-top:10px">Measurement Chart</p>

                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Description</th>
                                                <th>PA</th>
                                                <th>Grade</th>
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
                                                <th>51</th>
                                                <th>53</th>
                                                <th>54</th>
                                                <th>55</th>
                                                <th>56</th>
                                                <th>57</th>
                                                <th>58</th>
                                                <th>59</th>
                                                <th>60</th>
                                                <th>Total Plus</th>
                                                <th>Total Minus</th>

                                            </tr>

                                        </thead>
                                        <tbody>
                                            <?php


                                            if (!$measurements) {
                                                die('Failed to connect to MySQL: ' . mysqli_connect_error());
                                            }




                                            $sqlSelect = "SELECT * FROM `measurement_chart`";
                                            $counter = 0;

                                            $result = mysqli_query($measurements, $sqlSelect);

                                            if (mysqli_num_rows($result) > 0) {
                                            ?>

                                                <?php

                                                while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo ++$counter; ?></td>
                                                        <td><?php echo $row['description']; ?></td>
                                                        <td><?php echo $row['pa']; ?></td>
                                                        <td><?php echo $row['grade']; ?></td>
                                                        <td><?php echo $row['35']; ?></td>
                                                        <td><?php echo $row['36']; ?></td>
                                                        <td><?php echo $row['37']; ?></td>
                                                        <td><?php echo $row['38']; ?></td>
                                                        <td><?php echo $row['39']; ?></td>
                                                        <td><?php echo $row['40']; ?></td>
                                                        <td><?php echo $row['41']; ?></td>
                                                        <td><?php echo $row['42']; ?></td>
                                                        <td><?php echo $row['43']; ?></td>
                                                        <td><?php echo $row['44']; ?></td>
                                                        <td><?php echo $row['45']; ?></td>
                                                        <td><?php echo $row['46']; ?></td>
                                                        <td><?php echo $row['47']; ?></td>
                                                        <td><?php echo $row['48']; ?></td>
                                                        <td><?php echo $row['49']; ?></td>
                                                        <td><?php echo $row['50']; ?></td>
                                                        <td><?php echo $row['51']; ?></td>
                                                        <td><?php echo $row['52']; ?></td>
                                                        <td><?php echo $row['53']; ?></td>
                                                        <td><?php echo $row['54']; ?></td>
                                                        <td><?php echo $row['55']; ?></td>
                                                        <td><?php echo $row['56']; ?></td>
                                                        <td><?php echo $row['57']; ?></td>
                                                        <td><?php echo $row['58']; ?></td>
                                                        <td><?php echo $row['59']; ?></td>
                                                        <td><?php echo $row['60']; ?></td>
                                                        <td><?php echo $row['tol_plus']; ?></td>
                                                        <td><?php echo $row['tol_minus']; ?></td>


                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-sm-5" id="low_fron_div">
                                <div id="inner_low_fron_div">
                                    <table id="low_fron" class="table table-bordered table-striped" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-export-options='{"fileName": "<?php echo "NEW_STOCK_TABLE-";
                                                                                                                                                                                                                                                                                                                                                                                                                                        echo date("d-m-Y"); ?>"}' data-click-to-select="true" data-toolbar="#toolbar">

                                        <p class="low_fron" style="font-weight:bold;font-size:15px;margin-left:40px;margin-bottom:1px;margin-top:10px">Low Fron</p>

                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Low Fron</th>
                                                <th>1/4</th>
                                                <th>3/8</th>
                                                <th>1/2</th>
                                                <th>5/8</th>
                                                <th>3/4</th>
                                                <th>7/8</th>
                                                <th>1</th>
                                                <th>1*1/8</th>
                                                <th>1*1/4</th>
                                                <th>1*3/8</th>
                                                <th>1*1/2</th>
                                            </tr>

                                        </thead>
                                        <tbody>
                                            <?php


                                            if (!$measurements) {
                                                die('Failed to connect to MySQL: ' . mysqli_connect_error());
                                            }




                                            $sqlSelect = "SELECT * FROM `low_fron`";
                                            $counter = 0;

                                            $result = mysqli_query($measurements, $sqlSelect);

                                            if (mysqli_num_rows($result) > 0) {
                                            ?>

                                                <?php

                                                while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo ++$counter; ?></td>
                                                        <td><?php echo $row['low_fron']; ?></td>
                                                        <td><?php echo $row['1/4']; ?></td>
                                                        <td><?php echo $row['3/8']; ?></td>
                                                        <td><?php echo $row['1/2']; ?></td>
                                                        <td><?php echo $row['5/8']; ?></td>
                                                        <td><?php echo $row['3/4']; ?></td>
                                                        <td><?php echo $row['7/8']; ?></td>
                                                        <td><?php echo $row['1']; ?></td>
                                                        <td><?php echo $row['1*1/8']; ?></td>
                                                        <td><?php echo $row['1*1/4']; ?></td>
                                                        <td><?php echo $row['1*3/8']; ?></td>
                                                        <td><?php echo $row['1*1/2']; ?></td>



                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>


                        </div>


                        <!-- seventh row-->

                        <div class="seventh_row row">
                            <div class="col-sm-6" id="jkt_london_fit_r_div">
                                <div id="inner_jkt_london_fit_r_div">
                                    <table id="jkt_london_fit_r" class="table table-bordered table-striped" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-export-options='{"fileName": "<?php echo "NEW_STOCK_TABLE-";
                                                                                                                                                                                                                                                                                                                                                                                                                                                echo date("d-m-Y"); ?>"}' data-click-to-select="true" data-toolbar="#toolbar">

                                        <p class="jkt_london_fit_r" style="font-weight:bold;font-size:15px;margin-left:40px;margin-bottom:1px;margin-top:10px">JKT_LANDON_FIT(R)</p>
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Size</th>
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
                                                <th>51</th>
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


                                            if (!$measurements) {
                                                die('Failed to connect to MySQL: ' . mysqli_connect_error());
                                            }




                                            $sqlSelect = "SELECT * FROM `jkt_london_fit_r`";
                                            $counter = 0;

                                            $result = mysqli_query($measurements, $sqlSelect);

                                            if (mysqli_num_rows($result) > 0) {
                                            ?>

                                                <?php

                                                while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo ++$counter; ?></td>
                                                        <td><?php echo $row['size']; ?></td>
                                                        <td><?php echo $row['34']; ?></td>
                                                        <td><?php echo $row['35']; ?></td>
                                                        <td><?php echo $row['36']; ?></td>
                                                        <td><?php echo $row['37']; ?></td>
                                                        <td><?php echo $row['38']; ?></td>
                                                        <td><?php echo $row['39']; ?></td>
                                                        <td><?php echo $row['40']; ?></td>
                                                        <td><?php echo $row['41']; ?></td>
                                                        <td><?php echo $row['42']; ?></td>
                                                        <td><?php echo $row['43']; ?></td>
                                                        <td><?php echo $row['44']; ?></td>
                                                        <td><?php echo $row['45']; ?></td>
                                                        <td><?php echo $row['46']; ?></td>
                                                        <td><?php echo $row['47']; ?></td>
                                                        <td><?php echo $row['48']; ?></td>
                                                        <td><?php echo $row['49']; ?></td>
                                                        <td><?php echo $row['50']; ?></td>
                                                        <td><?php echo $row['51']; ?></td>
                                                        <td><?php echo $row['52']; ?></td>
                                                        <td><?php echo $row['53']; ?></td>
                                                        <td><?php echo $row['54']; ?></td>
                                                        <td><?php echo $row['55']; ?></td>
                                                        <td><?php echo $row['56']; ?></td>
                                                        <td><?php echo $row['57']; ?></td>
                                                        <td><?php echo $row['58']; ?></td>
                                                        <td><?php echo $row['59']; ?></td>
                                                        <td><?php echo $row['60']; ?></td>


                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-sm-6" id="hip_forw_plus_div">
                                <div id="inner_hip_forw_plus_div">
                                    <table id="hip_forw_plus" class="table table-bordered table-striped" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-export-options='{"fileName": "<?php echo "NEW_STOCK_TABLE-";
                                                                                                                                                                                                                                                                                                                                                                                                                                                echo date("d-m-Y"); ?>"}' data-click-to-select="true" data-toolbar="#toolbar">

                                        <p class="hip_forw_plus" style="font-weight:bold;font-size:15px;margin-left:40px;margin-bottom:1px;margin-top:10px">Hip Forw Plus</p>
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Hip forw plus</th>
                                                <th>1/4</th>
                                                <th>1/2</th>
                                                <th>3/4</th>
                                                <th>1</th>


                                            </tr>

                                        </thead>
                                        <tbody>
                                            <?php


                                            if (!$measurements) {
                                                die('Failed to connect to MySQL: ' . mysqli_connect_error());
                                            }




                                            $sqlSelect = "SELECT * FROM `hip_forw_plus`";
                                            $counter = 0;

                                            $result = mysqli_query($measurements, $sqlSelect);

                                            if (mysqli_num_rows($result) > 0) {
                                            ?>

                                                <?php

                                                while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo ++$counter; ?></td>
                                                        <td><?php echo $row['hip_forw_plus']; ?></td>
                                                        <td><?php echo $row['1/4']; ?></td>
                                                        <td><?php echo $row['1/2']; ?></td>
                                                        <td><?php echo $row['3/4']; ?></td>
                                                        <td><?php echo $row['1']; ?></td>



                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="eighth_row row">
                            <div class="col-sm-6" id="head_for_plus_div">
                                <div id="inner_head_for_plus_div">
                                    <table id="head_for_plus" class="table table-bordered table-striped" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-export-options='{"fileName": "<?php echo "NEW_STOCK_TABLE-";
                                                                                                                                                                                                                                                                                                                                                                                                                                                echo date("d-m-Y"); ?>"}' data-click-to-select="true" data-toolbar="#toolbar">

                                        <p class="head_for_plus" style="font-weight:bold;font-size:15px;margin-left:40px;margin-bottom:1px;margin-top:10px">Head Forw Plus</p>
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Hip forw plus</th>
                                                <th>1/4</th>
                                                <th>1/2</th>
                                                <th>3/4</th>
                                                <th>1</th>


                                            </tr>

                                        </thead>
                                        <tbody>
                                            <?php


                                            if (!$measurements) {
                                                die('Failed to connect to MySQL: ' . mysqli_connect_error());
                                            }




                                            $sqlSelect = "SELECT * FROM `head_for_plus`";
                                            $counter = 0;

                                            $result = mysqli_query($measurements, $sqlSelect);

                                            if (mysqli_num_rows($result) > 0) {
                                            ?>

                                                <?php

                                                while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo ++$counter; ?></td>
                                                        <td><?php echo $row['head_for_plus']; ?></td>
                                                        <td><?php echo $row['1/4']; ?></td>
                                                        <td><?php echo $row['1/2']; ?></td>
                                                        <td><?php echo $row['3/4']; ?></td>
                                                        <td><?php echo $row['1']; ?></td>



                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-sm-6" id="full_chest_div">
                                <div id="inner_full_chest_div">
                                    <table id="full_chest" class="table table-bordered table-striped" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-export-options='{"fileName": "<?php echo "NEW_STOCK_TABLE-";
                                                                                                                                                                                                                                                                                                                                                                                                                                            echo date("d-m-Y"); ?>"}' data-click-to-select="true" data-toolbar="#toolbar">

                                        <p class="full_chest" style="font-weight:bold;font-size:15px;margin-left:40px;margin-bottom:1px;margin-top:10px">Full Chest</p>

                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Full Chest</th>
                                                <th>1/2</th>
                                                <th>3/4</th>
                                                <th>1</th>

                                            </tr>

                                        </thead>
                                        <tbody>
                                            <?php


                                            if (!$measurements) {
                                                die('Failed to connect to MySQL: ' . mysqli_connect_error());
                                            }




                                            $sqlSelect = "SELECT * FROM `full_chest`";
                                            $counter = 0;

                                            $result = mysqli_query($measurements, $sqlSelect);

                                            if (mysqli_num_rows($result) > 0) {
                                            ?>

                                                <?php

                                                while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo ++$counter; ?></td>
                                                        <td><?php echo $row['Full_Chest']; ?></td>
                                                        <td><?php echo $row['1/2']; ?></td>
                                                        <td><?php echo $row['3/4']; ?></td>
                                                        <td><?php echo $row['1']; ?></td>

                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="ningth_row row">
                            <div class="col-sm-6" id="half_grith_div">
                                <div id="inner_half_grith_div">
                                    <table id="half_grith" class="table table-bordered table-striped" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-export-options='{"fileName": "<?php echo "NEW_STOCK_TABLE-";
                                                                                                                                                                                                                                                                                                                                                                                                                                            echo date("d-m-Y"); ?>"}' data-click-to-select="true" data-toolbar="#toolbar">

                                        <p class="half_grith" style="font-weight:bold;font-size:15px;margin-left:40px;margin-bottom:1px;margin-top:10px">Half Grith</p>
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Half_Grith</th>
                                                <th>1/2</th>
                                                <th>5/8</th>
                                                <th>3/4</th>
                                                <th>7/8</th>
                                                <th>1</th>
                                                <th>1*1/8</th>
                                                <th>1*1/4</th>
                                                <th>1*3/8</th>
                                                <th>1*1/2</th>
                                                <th>1*5/8</th>
                                                <th>1*3/4</th>
                                                <th>1*7/8</th>
                                                <th>2</th>
                                                <th>2*1/8</th>
                                                <th>2*1/4</th>
                                                <th>2*3/8</th>
                                                <th>2*1/2</th>
                                                <th>2*5/8</th>
                                                <th>2*3/4</th>
                                                <th>2*7/8</th>
                                                <th>3</th>
                                                <th>3*1/8</th>
                                                <th>3*1/4</th>
                                                <th>3*3/8</th>
                                                <th>3*1/2</th>
                                                <th>3*5/8</th>
                                                <th>3*3/4</th>
                                                <th>3*7/8</th>
                                                <th>4</th>
                                                <th>4*1/8</th>
                                                <th>4*1/4</th>
                                                <th>4*3/8</th>
                                                <th>4*1/2</th>
                                                <th>-1/2</th>
                                                <th>-5/8</th>
                                                <th>-3/4</th>
                                                <th>-7/8</th>
                                                <th>-1</th>
                                                <th>-1*1/8</th>
                                                <th>-1*1/4</th>
                                                <th>-1*3/8</th>
                                                <th>-1*1/2</th>
                                                <th>-1*5/8</th>
                                                <th>-1*3/4</th>
                                                <th>-1*7/8</th>
                                                <th>-2</th>
                                                <th>-2*1/8</th>
                                                <th>-2*1/4</th>
                                                <th>-2*3/8</th>
                                                <th>-2*1/2</th>
                                                <th>-2*5/8</th>
                                                <th>-2*3/4</th>
                                                <th>-2*7/8</th>
                                                <th>-3</th>
                                                <th>-3*1/8</th>
                                                <th>-3*1/4</th>
                                                <th>-3*3/8</th>
                                                <th>-3*1/2</th>
                                                <th>-3*5/8</th>
                                                <th>-3*3/4</th>
                                                <th>-3*7/8</th>
                                                <th>-4</th>
                                                <th>-4*1/8</th>
                                                <th>-4*1/4</th>
                                                <th>-4.375</th>
                                            </tr>

                                        </thead>
                                        <tbody>
                                            <?php


                                            if (!$measurements) {
                                                die('Failed to connect to MySQL: ' . mysqli_connect_error());
                                            }




                                            $sqlSelect = "SELECT * FROM `half_grith`";
                                            $counter = 0;

                                            $result = mysqli_query($measurements, $sqlSelect);

                                            if (mysqli_num_rows($result) > 0) {
                                            ?>

                                                <?php

                                                while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo ++$counter; ?></td>
                                                        <td><?php echo $row['Half_Grith']; ?></td>
                                                        <td><?php echo $row['1/2']; ?></td>
                                                        <td><?php echo $row['5/8']; ?></td>
                                                        <td><?php echo $row['3/4']; ?></td>
                                                        <td><?php echo $row['7/8']; ?></td>
                                                        <td><?php echo $row['1']; ?></td>
                                                        <td><?php echo $row['1*1/8']; ?></td>
                                                        <td><?php echo $row['1*1/4']; ?></td>
                                                        <td><?php echo $row['1*3/8']; ?></td>
                                                        <td><?php echo $row['1*1/2']; ?></td>
                                                        <td><?php echo $row['1*5/8']; ?></td>
                                                        <td><?php echo $row['1*3/4']; ?></td>
                                                        <td><?php echo $row['1*7/8']; ?></td>
                                                        <td><?php echo $row['2']; ?></td>
                                                        <td><?php echo $row['2*1/8']; ?></td>
                                                        <td><?php echo $row['2*1/4']; ?></td>
                                                        <td><?php echo $row['2*3/8']; ?></td>
                                                        <td><?php echo $row['2*1/2']; ?></td>
                                                        <td><?php echo $row['2*5/8']; ?></td>
                                                        <td><?php echo $row['2*3/4']; ?></td>
                                                        <td><?php echo $row['2*7/8']; ?></td>
                                                        <td><?php echo $row['3']; ?></td>
                                                        <td><?php echo $row['3*1/8']; ?></td>
                                                        <td><?php echo $row['3*1/4']; ?></td>
                                                        <td><?php echo $row['3*3/8']; ?></td>
                                                        <td><?php echo $row['3*1/2']; ?></td>
                                                        <td><?php echo $row['3*5/8']; ?></td>
                                                        <td><?php echo $row['3*3/4']; ?></td>
                                                        <td><?php echo $row['3*7/8']; ?></td>
                                                        <td><?php echo $row['4']; ?></td>
                                                        <td><?php echo $row['4*1/8']; ?></td>
                                                        <td><?php echo $row['4*1/4']; ?></td>
                                                        <td><?php echo $row['4*3/8']; ?></td>
                                                        <td><?php echo $row['4*1/2']; ?></td>
                                                        <td><?php echo $row['-1/2']; ?></td>
                                                        <td><?php echo $row['-5/8']; ?></td>
                                                        <td><?php echo $row['-3/4']; ?></td>
                                                        <td><?php echo $row['-7/8']; ?></td>
                                                        <td><?php echo $row['-1']; ?></td>
                                                        <td><?php echo $row['-1*1/8']; ?></td>
                                                        <td><?php echo $row['-1*1/4']; ?></td>
                                                        <td><?php echo $row['-1*3/8']; ?></td>
                                                        <td><?php echo $row['-1*1/2']; ?></td>
                                                        <td><?php echo $row['-1*5/8']; ?></td>
                                                        <td><?php echo $row['-1*3/4']; ?></td>
                                                        <td><?php echo $row['-1*7/8']; ?></td>
                                                        <td><?php echo $row['-2']; ?></td>
                                                        <td><?php echo $row['-2*1/8']; ?></td>
                                                        <td><?php echo $row['-2*1/4']; ?></td>
                                                        <td><?php echo $row['-2*3/8']; ?></td>
                                                        <td><?php echo $row['-2*1/2']; ?></td>
                                                        <td><?php echo $row['-2*5/8']; ?></td>
                                                        <td><?php echo $row['-2*3/4']; ?></td>
                                                        <td><?php echo $row['-2*7/8']; ?></td>
                                                        <td><?php echo $row['-3']; ?></td>
                                                        <td><?php echo $row['-3*1/8']; ?></td>
                                                        <td><?php echo $row['-3*1/4']; ?></td>
                                                        <td><?php echo $row['-3*3/8']; ?></td>
                                                        <td><?php echo $row['-3*1/2']; ?></td>
                                                        <td><?php echo $row['-3*5/8']; ?></td>
                                                        <td><?php echo $row['-3*3/4']; ?></td>
                                                        <td><?php echo $row['-3*7/8']; ?></td>
                                                        <td><?php echo $row['-4']; ?></td>
                                                        <td><?php echo $row['-4*1/8']; ?></td>
                                                        <td><?php echo $row['-4*1/4']; ?></td>
                                                        <td><?php echo $row['-4.375']; ?></td>
                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-sm-6" id="front_length_m_div">
                                <div id="inner_front_length_m_div">
                                    <table id="front_length(-)" class="table table-bordered table-striped" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-export-options='{"fileName": "<?php echo "NEW_STOCK_TABLE-";
                                                                                                                                                                                                                                                                                                                                                                                                                                                echo date("d-m-Y"); ?>"}' data-click-to-select="true" data-toolbar="#toolbar">

                                        <p class="front_length(-)" style="font-weight:bold;font-size:15px;margin-left:40px;margin-bottom:1px;margin-top:10px">Front Length(-)</p>
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Front Length Minus</th>
                                                <th>-1/8</th>
                                                <th>-2/8</th>
                                                <th>-3/8</th>
                                                <th>-4/8</th>
                                                <th>-5/8</th>
                                                <th>-6/8</th>
                                                <th>-7/8</th>
                                                <th>-1</th>
                                                <th>-1*1/8</th>
                                                <th>-1*2/8</th>
                                                <th>-1*3/8</th>
                                                <th>-1*4/8</th>
                                                <th>-1*5/8</th>
                                                <th>-1*6/8</th>
                                                <th>-1*7/8</th>
                                                <th>-2</th>
                                                <th>-2*1/8</th>
                                                <th>-2*2/8</th>
                                                <th>-2*3/8</th>
                                                <th>-2*4/8</th>
                                                <th>-2*5/8</th>
                                                <th>-2*6/8</th>
                                                <th>-2*7/8</th>
                                                <th>-3</th>
                                                <th>-3*1/8</th>
                                                <th>-3*2/8</th>
                                                <th>-3*3/8</th>
                                                <th>-3*4/8</th>
                                                <th>-3*5/8</th>
                                                <th>-3*6/8</th>
                                                <th>-3*7/8</th>
                                                <th>-4</th>
                                                <th>-4*1/8</th>
                                                <th>-4*2/8</th>
                                                <th>-4*3/8</th>
                                                <th>-4*4/8</th>
                                                <th>-4*5/8</th>
                                                <th>-4*6/8</th>
                                                <th>-4*7/8</th>
                                                <th>-5 </th>
                                            </tr>

                                        </thead>
                                        <tbody>
                                            <?php


                                            if (!$measurements) {
                                                die('Failed to connect to MySQL: ' . mysqli_connect_error());
                                            }




                                            $sqlSelect = "SELECT * FROM `front_length(-)`";
                                            $counter = 0;

                                            $result = mysqli_query($measurements, $sqlSelect);

                                            if (mysqli_num_rows($result) > 0) {
                                            ?>

                                                <?php

                                                while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo ++$counter; ?></td>

                                                        <td><?php echo $row['Front_Length_Minus']; ?></td>
                                                        <td><?php echo $row['-1/8']; ?></td>
                                                        <td><?php echo $row['-2/8']; ?></td>
                                                        <td><?php echo $row['-3/8']; ?></td>
                                                        <td><?php echo $row['-4/8']; ?></td>
                                                        <td><?php echo $row['-5/8']; ?></td>
                                                        <td><?php echo $row['-6/8']; ?></td>
                                                        <td><?php echo $row['-7/8']; ?></td>
                                                        <td><?php echo $row['-1']; ?></td>
                                                        <td><?php echo $row['-1*1/8']; ?></td>
                                                        <td><?php echo $row['-1*2/8']; ?></td>
                                                        <td><?php echo $row['-1*3/8']; ?></td>
                                                        <td><?php echo $row['-1*4/8']; ?></td>
                                                        <td><?php echo $row['-1*5/8']; ?></td>
                                                        <td><?php echo $row['-1*6/8']; ?></td>
                                                        <td><?php echo $row['-1*7/8']; ?></td>
                                                        <td><?php echo $row['-2']; ?></td>
                                                        <td><?php echo $row['-2*1/8']; ?></td>
                                                        <td><?php echo $row['-2*2/8']; ?></td>
                                                        <td><?php echo $row['-2*3/8']; ?></td>
                                                        <td><?php echo $row['-2*4/8']; ?></td>
                                                        <td><?php echo $row['-2*5/8']; ?></td>
                                                        <td><?php echo $row['-2*6/8']; ?></td>
                                                        <td><?php echo $row['-2*7/8']; ?></td>
                                                        <td><?php echo $row['-3']; ?></td>
                                                        <td><?php echo $row['-3*1/8']; ?></td>
                                                        <td><?php echo $row['-3*2/8']; ?></td>
                                                        <td><?php echo $row['-3*3/8']; ?></td>
                                                        <td><?php echo $row['-3*4/8']; ?></td>
                                                        <td><?php echo $row['-3*5/8']; ?></td>
                                                        <td><?php echo $row['-3*6/8']; ?></td>
                                                        <td><?php echo $row['-3*7/8']; ?></td>
                                                        <td><?php echo $row['-4']; ?></td>
                                                        <td><?php echo $row['-4*1/8']; ?></td>
                                                        <td><?php echo $row['-4*2/8']; ?></td>
                                                        <td><?php echo $row['-4*3/8']; ?></td>
                                                        <td><?php echo $row['-4*4/8']; ?></td>
                                                        <td><?php echo $row['-4*5/8']; ?></td>
                                                        <td><?php echo $row['-4*6/8']; ?></td>
                                                        <td><?php echo $row['-4*7/8']; ?></td>
                                                        <td><?php echo $row['-5']; ?></td>
                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tenth_row row">
                            <div class="col-sm-6" id="front_length_p_div">
                                <div id="inner_front_length_p_div">
                                    <table id="front_length(+)" class="table table-bordered table-striped" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-export-options='{"fileName": "<?php echo "NEW_STOCK_TABLE-";echo date("d-m-Y"); ?>"}' data-click-to-select="true" data-toolbar="#toolbar">

                                        <p class="front_length(+)" style="font-weight:bold;font-size:15px;margin-left:40px;margin-bottom:1px;margin-top:10px">Front Length(+)</p>
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th nowrap>Front Length Plus</th>
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
                                                <th>5 </th>
                                            </tr>

                                        </thead>
                                        <tbody>
                                            <?php


                                            if (!$measurements) {
                                                die('Failed to connect to MySQL: ' . mysqli_connect_error());
                                            }




                                            $sqlSelect = "SELECT * FROM `front_length(+)`";
                                            $counter = 0;

                                            $result = mysqli_query($measurements, $sqlSelect);

                                            if (mysqli_num_rows($result) > 0) {
                                            ?>

                                                <?php

                                                while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo ++$counter; ?></td>

                                                        <td><?php echo $row['Front_Length_Plus']; ?></td>
                                                        <td><?php echo $row['1/8']; ?></td>
                                                        <td><?php echo $row['2/8']; ?></td>
                                                        <td><?php echo $row['3/8']; ?></td>
                                                        <td><?php echo $row['4/8']; ?></td>
                                                        <td><?php echo $row['5/8']; ?></td>
                                                        <td><?php echo $row['6/8']; ?></td>
                                                        <td><?php echo $row['7/8']; ?></td>
                                                        <td><?php echo $row['1']; ?></td>
                                                        <td><?php echo $row['1*1/8']; ?></td>
                                                        <td><?php echo $row['1*2/8']; ?></td>
                                                        <td><?php echo $row['1*3/8']; ?></td>
                                                        <td><?php echo $row['1*4/8']; ?></td>
                                                        <td><?php echo $row['1*5/8']; ?></td>
                                                        <td><?php echo $row['1*6/8']; ?></td>
                                                        <td><?php echo $row['1*7/8']; ?></td>
                                                        <td><?php echo $row['2']; ?></td>
                                                        <td><?php echo $row['2*1/8']; ?></td>
                                                        <td><?php echo $row['2*2/8']; ?></td>
                                                        <td><?php echo $row['2*3/8']; ?></td>
                                                        <td><?php echo $row['2*4/8']; ?></td>
                                                        <td><?php echo $row['2*5/8']; ?></td>
                                                        <td><?php echo $row['2*6/8']; ?></td>
                                                        <td><?php echo $row['2*7/8']; ?></td>
                                                        <td><?php echo $row['3']; ?></td>
                                                        <td><?php echo $row['3*1/8']; ?></td>
                                                        <td><?php echo $row['3*2/8']; ?></td>
                                                        <td><?php echo $row['3*3/8']; ?></td>
                                                        <td><?php echo $row['3*4/8']; ?></td>
                                                        <td><?php echo $row['3*5/8']; ?></td>
                                                        <td><?php echo $row['3*6/8']; ?></td>
                                                        <td><?php echo $row['3*7/8']; ?></td>
                                                        <td><?php echo $row['4']; ?></td>
                                                        <td><?php echo $row['4*1/8']; ?></td>
                                                        <td><?php echo $row['4*2/8']; ?></td>
                                                        <td><?php echo $row['4*3/8']; ?></td>
                                                        <td><?php echo $row['4*4/8']; ?></td>
                                                        <td><?php echo $row['4*5/8']; ?></td>
                                                        <td><?php echo $row['4*6/8']; ?></td>
                                                        <td><?php echo $row['4*7/8']; ?></td>
                                                        <td><?php echo $row['5']; ?></td>
                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-sm-6" id="erect_plus_div">
                                <div id="inner_erect_plus_div">
                                    <table id="erect_plus" class="table table-bordered table-striped" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-export-options='{"fileName": "<?php echo "NEW_STOCK_TABLE-";echo date("d-m-Y"); ?>"}' data-click-to-select="true" data-toolbar="#toolbar">

                                        <p class="erect_plus" style="font-weight:bold;font-size:15px;margin-left:40px;margin-bottom:1px;margin-top:10px">Erect Plus</p>
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Erect plus</th>
                                                <th> 1/2</th>
                                                <th> 3/4</th>
                                                <th> 1</th>

                                            </tr>

                                        </thead>
                                        <tbody>
                                            <?php


                                            if (!$measurements) {
                                                die('Failed to connect to MySQL: ' . mysqli_connect_error());
                                            }




                                            $sqlSelect = "SELECT * FROM `erect_plus`";
                                            $counter = 0;

                                            $result = mysqli_query($measurements, $sqlSelect);

                                            if (mysqli_num_rows($result) > 0) {
                                            ?>

                                                <?php

                                                while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo ++$counter; ?></td>
                                                        <td><?php echo $row['Erect_plus']; ?></td>
                                                        <td><?php echo $row['1/2']; ?></td>
                                                        <td><?php echo $row['3/4']; ?></td>
                                                        <td><?php echo $row['1']; ?></td>

                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="eleventh_row row">
                            <div class="col-sm-6" id="Deep_seat_m_div">
                                <div id="inner_Deep_seat_m_div">


                                    <table id="Deep_seat(-)" class="table table-bordered table-striped" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-export-options='{"fileName": "<?php echo "NEW_STOCK_TABLE-";echo date("d-m-Y"); ?>"}' data-click-to-select="true" data-toolbar="#toolbar">

                                        <p class="Deep_seat(-)" style="font-weight:bold;font-size:15px;margin-left:40px;margin-bottom:1px;margin-top:10px">Deep_seat(-)</p>

                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Deep seat(-)</th>
                                                <th> 1/2</th>
                                                <th> 3/4</th>
                                                <th> 1/4</th>

                                            </tr>

                                        </thead>
                                        <tbody>
                                            <?php


                                            if (!$measurements) {
                                                die('Failed to connect to MySQL: ' . mysqli_connect_error());
                                            }




                                            $sqlSelect = "SELECT * FROM `deep_seat(-)`";
                                            $counter = 0;

                                            $result = mysqli_query($measurements, $sqlSelect);

                                            if (mysqli_num_rows($result) > 0) {
                                            ?>

                                                <?php

                                                while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo ++$counter; ?></td>
                                                        <td><?php echo $row['Deep_seat(-)']; ?></td>
                                                        <td><?php echo $row['1/2']; ?></td>
                                                        <td><?php echo $row['3/4']; ?></td>
                                                        <td><?php echo $row['1/4']; ?></td>

                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-sm-6" id="athletic_fit_div">
                                <div id="inner_athletic_fit_div">
                                    <table id="athletic_fit" class="table table-bordered table-striped" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-export-options='{"fileName": "<?php echo "NEW_STOCK_TABLE-";echo date("d-m-Y"); ?>"}' data-click-to-select="true" data-toolbar="#toolbar">

                                        <p class="athletic_fit" style="font-weight:bold;font-size:15px;margin-left:40px;margin-bottom:1px;margin-top:10px">Athletic Fit</p>
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Size</th>
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
                                                <th>51</th>
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


                                            if (!$measurements) {
                                                die('Failed to connect to MySQL: ' . mysqli_connect_error());
                                            }




                                            $sqlSelect = "SELECT * FROM `athletic_fit`";
                                            $counter = 0;

                                            $result = mysqli_query($measurements, $sqlSelect);

                                            if (mysqli_num_rows($result) > 0) {
                                            ?>

                                                <?php

                                                while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo ++$counter; ?></td>
                                                        <td><?php echo $row['_SIZE']; ?></td>
                                                        <td><?php echo $row['34']; ?></td>
                                                        <td><?php echo $row['35']; ?></td>
                                                        <td><?php echo $row['36']; ?></td>
                                                        <td><?php echo $row['37']; ?></td>
                                                        <td><?php echo $row['38']; ?></td>
                                                        <td><?php echo $row['39']; ?></td>
                                                        <td><?php echo $row['40']; ?></td>
                                                        <td><?php echo $row['41']; ?></td>
                                                        <td><?php echo $row['42']; ?></td>
                                                        <td><?php echo $row['43']; ?></td>
                                                        <td><?php echo $row['44']; ?></td>
                                                        <td><?php echo $row['45']; ?></td>
                                                        <td><?php echo $row['46']; ?></td>
                                                        <td><?php echo $row['47']; ?></td>
                                                        <td><?php echo $row['48']; ?></td>
                                                        <td><?php echo $row['49']; ?></td>
                                                        <td><?php echo $row['50']; ?></td>
                                                        <td><?php echo $row['51']; ?></td>
                                                        <td><?php echo $row['52']; ?></td>
                                                        <td><?php echo $row['53']; ?></td>
                                                        <td><?php echo $row['54']; ?></td>
                                                        <td><?php echo $row['55']; ?></td>
                                                        <td><?php echo $row['56']; ?></td>
                                                        <td><?php echo $row['57']; ?></td>
                                                        <td><?php echo $row['58']; ?></td>
                                                        <td><?php echo $row['59']; ?></td>
                                                        <td><?php echo $row['60']; ?></td>


                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="twel_row">
                            <div class="col-sm-6" id="15vent_div">
                                <div id="inner_15vent_div">
                                    <table id="15vent" class="table table-bordered table-striped" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">

                                        <p class="15vent" style="font-weight:bold;font-size:15px;margin-left:40px;margin-bottom:1px;margin-top:10px">15vent</p>
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>15VENT</th>
                                                <th>1/8</th>
                                                <th>1/4</th>
                                                <th>3/8</th>
                                                <th>1/2</th>
                                                <th>5/8</th>
                                                <th>3/4</th>
                                                <th>7/8</th>
                                                <th>1</th>
                                                <th>1*1/8</th>
                                                <th>1*1/4</th>
                                                <th>1*3/8</th>
                                                <th>1*1/2</th>
                                                <th>1*5/8</th>
                                                <th>1*3/4</th>
                                                <th>1*7/8</th>
                                                <th>2</th>
                                                <th>2*1/8</th>
                                                <th>2*1/4</th>
                                                <th>2*3/8</th>
                                                <th>2*1/2</th>
                                                <th>2*5/8</th>
                                                <th>2*3/4</th>
                                                <th>2*7/8</th>
                                                <th>3</th>
                                                <th>3*1/8</th>
                                                <th>3*1/4</th>
                                                <th>3*3/8</th>
                                                <th>3*1/2</th>
                                                <th>3*5/8</th>
                                                <th>3*3/4</th>
                                                <th>3*7/8</th>
                                                <th>4</th>
                                                <th>-1/8</th>
                                                <th>-1/4</th>
                                                <th>-3/8</th>
                                                <th>-1/2</th>
                                                <th>-5/8</th>
                                                <th>-3/4</th>
                                                <th>-7/8</th>
                                                <th>-1</th>
                                                <th>-1*1/8</th>
                                                <th>-1*1/4</th>
                                                <th>-1*3/8</th>
                                                <th>-1*1/2</th>
                                                <th>-1*5/8</th>
                                                <th>-1*3/4</th>
                                                <th>-1*7/8</th>
                                                <th>-2</th>
                                                <th>-2*1/8</th>
                                                <th>-2*1/4</th>
                                                <th>-2*3/8</th>
                                                <th>-2*1/2</th>
                                                <th>-2*5/8</th>
                                                <th>-2*3/4</th>
                                                <th>-2*7/8</th>
                                                <th>-3</th>
                                                <th>-3*1/8</th>
                                                <th>-3*1/4</th>
                                                <th>-3*3/8</th>
                                                <th>-3*1/2</th>
                                                <th>-3*5/8</th>
                                                <th>-3*3/4</th>
                                                <th>-3*7/8</th>
                                                <th>-4</th>

                                            </tr>

                                        </thead>
                                        <tbody>
                                            <?php


                                            if (!$measurements) {
                                                die('Failed to connect to MySQL: ' . mysqli_connect_error());
                                            }




                                            $sqlSelect = "SELECT distinct *  FROM `15vent`";
                                            $counter = 0;

                                            $result = mysqli_query($measurements, $sqlSelect);

                                            if (mysqli_num_rows($result) > 0) {
                                            ?>

                                                <?php

                                                while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo ++$counter; ?></td>

                                                        <td><?php echo $row['15VENT']; ?></td>
                                                        <td><?php echo $row['1/8']; ?></td>
                                                        <td><?php echo $row['1/4']; ?></td>
                                                        <td><?php echo $row['3/8']; ?></td>
                                                        <td><?php echo $row['1/2']; ?></td>
                                                        <td><?php echo $row['5/8']; ?></td>
                                                        <td><?php echo $row['3/4']; ?></td>
                                                        <td><?php echo $row['7/8']; ?></td>
                                                        <td><?php echo $row['1']; ?></td>
                                                        <td><?php echo $row['1*1/8']; ?></td>
                                                        <td><?php echo $row['1*1/4']; ?></td>
                                                        <td><?php echo $row['1*3/8']; ?></td>
                                                        <td><?php echo $row['1*1/2']; ?></td>
                                                        <td><?php echo $row['1*5/8']; ?></td>
                                                        <td><?php echo $row['1*3/4']; ?></td>
                                                        <td><?php echo $row['1*7/8']; ?></td>
                                                        <td><?php echo $row['2']; ?></td>
                                                        <td><?php echo $row['2*1/8']; ?></td>
                                                        <td><?php echo $row['2*1/4']; ?></td>
                                                        <td><?php echo $row['2*3/8']; ?></td>
                                                        <td><?php echo $row['2*1/2']; ?></td>
                                                        <td><?php echo $row['2*5/8']; ?></td>
                                                        <td><?php echo $row['2*3/4']; ?></td>
                                                        <td><?php echo $row['2*7/8']; ?></td>
                                                        <td><?php echo $row['3']; ?></td>
                                                        <td><?php echo $row['3*1/8']; ?></td>
                                                        <td><?php echo $row['3*1/4']; ?></td>
                                                        <td><?php echo $row['3*3/8']; ?></td>
                                                        <td><?php echo $row['3*1/2']; ?></td>
                                                        <td><?php echo $row['3*5/8']; ?></td>
                                                        <td><?php echo $row['3*3/4']; ?></td>
                                                        <td><?php echo $row['3*7/8']; ?></td>
                                                        <td><?php echo $row['4']; ?></td>
                                                        <td><?php echo $row['-1/2']; ?></td>
                                                        <td><?php echo $row['-5/8']; ?></td>
                                                        <td><?php echo $row['-3/4']; ?></td>
                                                        <td><?php echo $row['-7/8']; ?></td>
                                                        <td><?php echo $row['-1']; ?></td>
                                                        <td><?php echo $row['-1*1/8']; ?></td>
                                                        <td><?php echo $row['-1*1/4']; ?></td>
                                                        <td><?php echo $row['-1*3/8']; ?></td>
                                                        <td><?php echo $row['-1*1/2']; ?></td>
                                                        <td><?php echo $row['-1*5/8']; ?></td>
                                                        <td><?php echo $row['-1*3/4']; ?></td>
                                                        <td><?php echo $row['-1*7/8']; ?></td>
                                                        <td><?php echo $row['-2']; ?></td>
                                                        <td><?php echo $row['-2*1/8']; ?></td>
                                                        <td><?php echo $row['-2*1/4']; ?></td>
                                                        <td><?php echo $row['-2*3/8']; ?></td>
                                                        <td><?php echo $row['-2*1/2']; ?></td>
                                                        <td><?php echo $row['-2*5/8']; ?></td>
                                                        <td><?php echo $row['-2*3/4']; ?></td>
                                                        <td><?php echo $row['-2*7/8']; ?></td>
                                                        <td><?php echo $row['-3']; ?></td>
                                                        <td><?php echo $row['-3*1/8']; ?></td>
                                                        <td><?php echo $row['-3*1/4']; ?></td>
                                                        <td><?php echo $row['-3*3/8']; ?></td>
                                                        <td><?php echo $row['-3*1/2']; ?></td>
                                                        <td><?php echo $row['-3*5/8']; ?></td>
                                                        <td><?php echo $row['-3*3/4']; ?></td>
                                                        <td><?php echo $row['-3*7/8']; ?></td>
                                                        <td><?php echo $row['-4']; ?></td>
                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-sm-6" id="back12_div">
                                <div id="inner_back12_div">
                                    <table id="12back" class="table table-bordered table-striped" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <p class="12back" style="font-weight:bold;font-size:15px;margin-left:40px;margin-bottom:1px;margin-top:10px">12Back</p>
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>12BACK</th>
                                                <th>1/2</th>
                                                <th>-1/2</th>
                                                <th>5/8</th>
                                                <th>-5/8</th>
                                                <th>3/4</th>
                                                <th>-3/4</th>
                                                <th>7/8</th>
                                                <th>-7/8</th>
                                                <th>1</th>
                                                <th>-1</th>
                                                <th>1*1/8</th>
                                                <th>-1*1/8</th>
                                                <th>1*1/4</th>
                                                <th>-1*1/4</th>
                                                <th>1*3/8</th>
                                                <th>-1*3/8</th>
                                                <th>1*1/2</th>
                                                <th>-1*1/2</th>
                                                <th>1*5/8</th>
                                                <th>-1*5/8</th>
                                                <th>1*3/4</th>
                                                <th>-1*3/4</th>
                                                <th>1*7/8</th>
                                                <th>-1*7/8</th>
                                                <th>2</th>
                                                <th>-2</th>
                                                <th>2*1/8</th>
                                                <th>-2*1/8</th>
                                                <th>2*1/4</th>
                                                <th>-2*1/4</th>
                                                <th>2*3/8</th>
                                                <th>-2*3/8</th>
                                                <th>2*1/2</th>
                                                <th>-2*1/2</th>
                                                <th>2*5/8</th>
                                                <th>-2*5/8</th>
                                                <th>2*3/4</th>
                                                <th>-2*3/4</th>
                                                <th>2*7/8</th>
                                                <th>-2*7/8</th>
                                                <th>3</th>
                                                <th>-3</th>
                                                <th>3*1/8</th>
                                                <th>-3*1/8</th>
                                                <th>3*1/4</th>
                                                <th>-3*1/4</th>
                                                <th>3*3/8</th>
                                                <th>-3*3/8</th>
                                                <th>3*1/2</th>
                                                <th>-3*1/2</th>
                                                <th>3*5/8</th>
                                                <th>-3*5/8</th>
                                                <th>3*3/4</th>
                                                <th>-3*3/4</th>
                                                <th>3*7/8</th>
                                                <th>-3*7/8</th>
                                                <th>4</th>
                                                <th>-4</th>

                                            </tr>

                                        </thead>
                                        <tbody>
                                            <?php


                                            if (!$measurements) {
                                                die('Failed to connect to MySQL: ' . mysqli_connect_error());
                                            }




                                            $sqlSelect = "SELECT * FROM `12BACK`";
                                            $counter = 0;

                                            $result = mysqli_query($measurements, $sqlSelect);

                                            if (mysqli_num_rows($result) > 0) {
                                            ?>

                                                <?php

                                                while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo ++$counter; ?></td>

                                                        <td><?php echo $row['12BACK']; ?></td>
                                                        <td><?php echo $row['1/2']; ?></td>
                                                        <td><?php echo $row['-1/2']; ?></td>
                                                        <td><?php echo $row['5/8']; ?></td>
                                                        <td><?php echo $row['-5/8']; ?></td>
                                                        <td><?php echo $row['3/4']; ?></td>
                                                        <td><?php echo $row['-3/4']; ?></td>
                                                        <td><?php echo $row['7/8']; ?></td>
                                                        <td><?php echo $row['-7/8']; ?></td>
                                                        <td><?php echo $row['1']; ?></td>
                                                        <td><?php echo $row['-1']; ?></td>
                                                        <td><?php echo $row['1*1/8']; ?></td>
                                                        <td><?php echo $row['-1*1/8']; ?></td>
                                                        <td><?php echo $row['1*1/4']; ?></td>
                                                        <td><?php echo $row['-1*1/4']; ?></td>
                                                        <td><?php echo $row['1*3/8']; ?></td>
                                                        <td><?php echo $row['-1*3/8']; ?></td>
                                                        <td><?php echo $row['1*1/2']; ?></td>
                                                        <td><?php echo $row['-1*1/2']; ?></td>
                                                        <td><?php echo $row['1*5/8']; ?></td>
                                                        <td><?php echo $row['-1*5/8']; ?></td>
                                                        <td><?php echo $row['1*3/4']; ?></td>
                                                        <td><?php echo $row['-1*3/4']; ?></td>
                                                        <td><?php echo $row['1*7/8']; ?></td>
                                                        <td><?php echo $row['-1*7/8']; ?></td>
                                                        <td><?php echo $row['2']; ?></td>
                                                        <td><?php echo $row['-2']; ?></td>
                                                        <td><?php echo $row['2*1/8']; ?></td>
                                                        <td><?php echo $row['-2*1/8']; ?></td>
                                                        <td><?php echo $row['2*1/4']; ?></td>
                                                        <td><?php echo $row['-2*1/4']; ?></td>
                                                        <td><?php echo $row['2*3/8']; ?></td>
                                                        <td><?php echo $row['-2*3/8']; ?></td>
                                                        <td><?php echo $row['2*1/2']; ?></td>
                                                        <td><?php echo $row['-2*1/2']; ?></td>
                                                        <td><?php echo $row['2*5/8']; ?></td>
                                                        <td><?php echo $row['-2*5/8']; ?></td>
                                                        <td><?php echo $row['2*3/4']; ?></td>
                                                        <td><?php echo $row['-2*3/4']; ?></td>
                                                        <td><?php echo $row['2*7/8']; ?></td>
                                                        <td><?php echo $row['-2*7/8']; ?></td>
                                                        <td><?php echo $row['3']; ?></td>
                                                        <td><?php echo $row['-3']; ?></td>
                                                        <td><?php echo $row['3*1/8']; ?></td>
                                                        <td><?php echo $row['-3*1/8']; ?></td>
                                                        <td><?php echo $row['3*1/4']; ?></td>
                                                        <td><?php echo $row['-3*1/4']; ?></td>
                                                        <td><?php echo $row['3*3/8']; ?></td>
                                                        <td><?php echo $row['-3*3/8']; ?></td>
                                                        <td><?php echo $row['3*1/2']; ?></td>
                                                        <td><?php echo $row['-3*1/2']; ?></td>
                                                        <td><?php echo $row['3*5/8']; ?></td>
                                                        <td><?php echo $row['-3*5/8']; ?></td>
                                                        <td><?php echo $row['3*3/4']; ?></td>
                                                        <td><?php echo $row['-3*3/4']; ?></td>
                                                        <td><?php echo $row['3*7/8']; ?></td>
                                                        <td><?php echo $row['-3*7/8']; ?></td>
                                                        <td><?php echo $row['4']; ?></td>
                                                        <td><?php echo $row['-4']; ?></td>


                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="last_row row">
                            <div id="col-sm-12" id="4lenDiv">
                                <div id="inner_4lenDiv">
                                    <table id="4len" class="table table-bordered table-striped" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <p class="4len" style="font-weight:bold;font-size:15px;margin-left:40px;margin-bottom:1px;margin-top:10px">4 Len</p>
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>4LEN</th>
                                                <th>1/8</th>
                                                <th>1/4</th>
                                                <th>3/8</th>
                                                <th>1/2</th>
                                                <th>5/8</th>
                                                <th>3/4</th>
                                                <th>7/8</th>
                                                <th>1</th>
                                                <th>1*1/8</th>
                                                <th>1*1/4</th>
                                                <th>1*3/8</th>
                                                <th>1*1/2</th>
                                                <th>1*5/8</th>
                                                <th>1*3/4</th>
                                                <th>1*7/8</th>
                                                <th>2</th>
                                                <th>2*1/8</th>
                                                <th>2*1/4</th>
                                                <th>2*3/8</th>
                                                <th>2*1/2</th>
                                                <th>2*5/8</th>
                                                <th>2*3/4</th>
                                                <th>2*7/8</th>
                                                <th>3</th>
                                                <th>3*1/8</th>
                                                <th>3*1/4</th>
                                                <th>3*3/8</th>
                                                <th>3*1/2</th>
                                                <th>3*5/8</th>
                                                <th>3*3/4</th>
                                                <th>3*7/8</th>
                                                <th>4</th>
                                                <th>-1/8</th>
                                                <th>-1/4</th>
                                                <th>-3/8</th>
                                                <th>-1/2</th>
                                                <th>-5/8</th>
                                                <th>-3/4</th>
                                                <th>-7/8</th>
                                                <th>-1</th>
                                                <th>-1*1/8</th>
                                                <th>-1*1/4</th>
                                                <th>-1*3/8</th>
                                                <th>-1*1/2</th>
                                                <th>-1*5/8</th>
                                                <th>-1*3/4</th>
                                                <th>-1*7/8</th>
                                                <th>-2</th>
                                                <th>-2*1/8</th>
                                                <th>-2*1/4</th>
                                                <th>-2*3/8</th>
                                                <th>-2*1/2</th>
                                                <th>-2*5/8</th>
                                                <th>-2*3/4</th>
                                                <th>-2*7/8</th>
                                                <th>-3</th>
                                                <th>-3*1/8</th>
                                                <th>-3*1/4</th>
                                                <th>-3*3/8</th>
                                                <th>-3*1/2</th>
                                                <th>-3*5/8</th>
                                                <th>-3*3/4</th>
                                                <th>-3*7/8</th>
                                                <th>-4</th>

                                            </tr>

                                        </thead>
                                        <tbody>
                                            <?php


                                            if (!$measurements) {
                                                die('Failed to connect to MySQL: ' . mysqli_connect_error());
                                            }




                                            $sqlSelect = "SELECT * FROM `4len`";
                                            $counter = 0;

                                            $result = mysqli_query($measurements, $sqlSelect);

                                            if (mysqli_num_rows($result) > 0) {
                                            ?>

                                                <?php

                                                while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo ++$counter; ?></td>

                                                        <td><?php echo $row['4LEN']; ?></td>
                                                        <td><?php echo $row['1/8']; ?></td>
                                                        <td><?php echo $row['1/4']; ?></td>
                                                        <td><?php echo $row['3/8']; ?></td>
                                                        <td><?php echo $row['1/2']; ?></td>
                                                        <td><?php echo $row['5/8']; ?></td>
                                                        <td><?php echo $row['3/4']; ?></td>
                                                        <td><?php echo $row['7/8']; ?></td>
                                                        <td><?php echo $row['1']; ?></td>
                                                        <td><?php echo $row['1*1/8']; ?></td>

                                                        <td><?php echo $row['1*1/4']; ?></td>
                                                        <td><?php echo $row['1*3/8']; ?></td>
                                                        <td><?php echo $row['1*1/2']; ?></td>
                                                        <td><?php echo $row['1*5/8']; ?></td>
                                                        <td><?php echo $row['1*3/4']; ?></td>
                                                        <td><?php echo $row['1*7/8']; ?></td>
                                                        <td><?php echo $row['2']; ?></td>
                                                        <td><?php echo $row['2*1/8']; ?></td>
                                                        <td><?php echo $row['2*1/4']; ?></td>
                                                        <td><?php echo $row['2*3/8']; ?></td>
                                                        <td><?php echo $row['2*1/2']; ?></td>
                                                        <td><?php echo $row['2*5/8']; ?></td>
                                                        <td><?php echo $row['2*3/4']; ?></td>
                                                        <td><?php echo $row['2*7/8']; ?></td>
                                                        <td><?php echo $row['3']; ?></td>
                                                        <td><?php echo $row['3*1/8']; ?></td>
                                                        <td><?php echo $row['3*1/4']; ?></td>
                                                        <td><?php echo $row['3*3/8']; ?></td>
                                                        <td><?php echo $row['3*1/2']; ?></td>
                                                        <td><?php echo $row['3*5/8']; ?></td>
                                                        <td><?php echo $row['3*3/4']; ?></td>
                                                        <td><?php echo $row['3*7/8']; ?></td>
                                                        <td><?php echo $row['4']; ?></td>
                                                        <td><?php echo $row['-1/8']; ?></td>
                                                        <td><?php echo $row['-1/4']; ?></td>
                                                        <td><?php echo $row['-3/8']; ?></td>
                                                        <td><?php echo $row['-1/2']; ?></td>
                                                        <td><?php echo $row['-5/8']; ?></td>
                                                        <td><?php echo $row['-3/4']; ?></td>
                                                        <td><?php echo $row['-7/8']; ?></td>
                                                        <td><?php echo $row['-1']; ?></td>
                                                        <td><?php echo $row['-1*1/8']; ?></td>
                                                        <td><?php echo $row['-1*1/4']; ?></td>
                                                        <td><?php echo $row['-1*3/8']; ?></td>
                                                        <td><?php echo $row['-1*1/2']; ?></td>
                                                        <td><?php echo $row['-1*5/8']; ?></td>
                                                        <td><?php echo $row['-1*3/4']; ?></td>
                                                        <td><?php echo $row['-1*7/8']; ?></td>
                                                        <td><?php echo $row['-2']; ?></td>
                                                        <td><?php echo $row['-2*1/8']; ?></td>
                                                        <td><?php echo $row['-2*1/4']; ?></td>
                                                        <td><?php echo $row['-2*3/8']; ?></td>
                                                        <td><?php echo $row['-2*1/2']; ?></td>
                                                        <td><?php echo $row['-2*5/8']; ?></td>
                                                        <td><?php echo $row['-2*3/4']; ?></td>
                                                        <td><?php echo $row['-2*7/8']; ?></td>
                                                        <td><?php echo $row['-3']; ?></td>
                                                        <td><?php echo $row['-3*1/8']; ?></td>
                                                        <td><?php echo $row['-3*1/4']; ?></td>
                                                        <td><?php echo $row['-3*3/8']; ?></td>
                                                        <td><?php echo $row['-3*1/2']; ?></td>
                                                        <td><?php echo $row['-3*5/8']; ?></td>
                                                        <td><?php echo $row['-3*3/4']; ?></td>
                                                        <td><?php echo $row['-3*7/8']; ?></td>
                                                        <td><?php echo $row['-4']; ?></td>

                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
            </section><!-- /.Left col -->
        </div>
    </section>
           
		<br>
		<br>
      <!-- /.content-wrapper -->
	  <!--</div>-->
	  
	    


  
<?php include 'layout/footer.php'; ?>