<?php
include 'layout/header.php';
include 'layout/aside.php';
include 'functions/ui_function.php';


include('C:/xampp/htdocs/dbcon.php');


date_default_timezone_set("Asia/Calcutta");
$date = date('Y-m-d', time());
$time = date('H:i:s', time());
$datetime = $date . " " . $time;

getHeader("Default Measurements", $datetime, "fa-book");
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
        padding: 15px;
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

    .tab-content.no-padding {

        width: 100%;
    }

    .fistRow {
        display: flex;
        flex-direction: row;

    }

    th {
        background-color: #e0e0e0;
    }

    div#overall_table_data_table {
        font-size: 12px;

        box-shadow: 4px 1px 8px #9e9eab;
        margin-left: 30px;
    }

    .table-bordered {
        border: 1px solid #f4f4f4;
        font-size: 11px;
        font-weight: bold;
    }

    .table_names {
        font-weight: bold;
        font-size: 12px;

    }

    .fixed-table-body {

        height: 330px;
    }

    .box {

        border-top: none;

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
                    <div class="fistRow">
                        <div class="box" id="overall_table_data_table">

                            <p class="table_names">Ah_34_A_Plus</p>
                            <table id="ah_34_a_plus" class="table table-bordered table-striped" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-export-options='{"fileName": "<?php echo "NEW_STOCK_TABLE-";
                                                                                                                                                                                                                                                                                                                                                                                                                                    echo date("d-m-Y"); ?>"}' data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
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
                        <div class="box" id="overall_table_data_table">
                            <!--          OVERALL CONTENT COMES HERE   DONT DELETE   -->
                            <p class="table_names">Low From</p>
                            <table id="ah_34_a_plus" class="table table-bordered table-striped" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-export-options='{"fileName": "<?php echo "NEW_STOCK_TABLE-";
                                                                                                                                                                                                                                                                                                                                                                                                                                    echo date("d-m-Y"); ?>"}' data-click-to-select="true" data-toolbar="#toolbar">
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
                        </div><!-- /.box -->

                    </div>
                    <hr>
                    <div class="second_row">
                        <div></div>
                        <p class="size_chart" style="font-weight:bold;font-size:15px;margin-left:40px;margin-bottom:1px;margin-top:10px">Size Chart</p>
                        <table id="ah_34_a_plus" class="table table-bordered table-striped" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-export-options='{"fileName": "<?php echo "NEW_STOCK_TABLE-";
                                                                                                                                                                                                                                                                                                                                                                                                                                echo date("d-m-Y"); ?>"}' data-click-to-select="true" data-toolbar="#toolbar">
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
                        <div></div>
                    </div>

                    <hr>
                    <div class="third_row">
                        <div></div>
                        <p class="seat" style="font-weight:bold;font-size:15px;margin-left:40px;margin-bottom:1px;margin-top:10px">Seat</p>
                        <table id="ah_34_a_plus" class="table table-bordered table-striped" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-export-options='{"fileName": "<?php echo "NEW_STOCK_TABLE-";
                                                                                                                                                                                                                                                                                                                                                                                                                                echo date("d-m-Y"); ?>"}' data-click-to-select="true" data-toolbar="#toolbar">
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
                        <div></div>
                    </div>
                    <hr>
                    <div class="forth_row">
                        <div></div>
                        <p class="raise_bk_plus_minus" style="font-weight:bold;font-size:15px;margin-left:40px;margin-bottom:1px;margin-top:10px">Raise Bk (+)(-)</p>
                        <table id="raise_bk_plus_minus" class="table table-bordered table-striped" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-export-options='{"fileName": "<?php echo "NEW_STOCK_TABLE-";
                                                                                                                                                                                                                                                                                                                                                                                                                                        echo date("d-m-Y"); ?>"}' data-click-to-select="true" data-toolbar="#toolbar">
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
                        </table>
                        <div></div>
                    </div>
                </div>
            </div><!-- /.nav-tabs-custom -->


            <!---////////////////////////////////////////////////////////////////////////////////-->

        </section><!-- /.Left col -->

    </div><!-- /.row (main row) -->

</section><!-- /.content -->
<!-- /.content-wrapper -->

<!-- Right side column. Contains the navbar and content of the page -->


<?php include 'layout/footer.php'; ?>