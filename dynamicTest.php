<?php
include 'layout/header.php';
include 'layout/aside.php';
include 'functions/ui_function.php';


include('dbcon.php');


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
        background: url("load.gif") no-repeat center rgba(255, 255, 255)
    }
</style>

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
<section class="content">
    <div id="load" class="row"></div>
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
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="tabs">Select Measurement Table</label>
                                <select id="tabs" name="tables_name" style="margin-left:30px">
                                    <option value="" selected disabled>Select Table</option>
                                    <?php

                                    $quant = "SELECT table_name FROM information_schema.tables
                                    WHERE table_schema = 'measurements'";
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
                        <hr>
                        <div class="first_row row">
                            <div class="col-sm-6" id="ah_34_a_plus_div">
                                <div id="inner_ah_34_a_plus_div">
                                    <table id="ah_34_a_plus" class="table table-bordered table-striped" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-export-options='{"fileName": "<?php echo "NEW_STOCK_TABLE-";
                                                                                                                                                                                                                                                                                                                                                                                                                                            echo date("d-m-Y"); ?>"}' data-click-to-select="true" data-toolbar="#toolbar">
                                        <p class="Ah_34_A_Plus" style="font-weight:bold;font-size:15px;margin-left:40px;margin-bottom:1px;margin-top:10px">Ah_34_A_Plus</p>
                                        <thead>
                                            <tr>
                                                <?php
                                                $sqlSelect = "SELECT * FROM `ah_34_a_plus`";
                                                $result = mysqli_query($measurements, $sqlSelect);
                                                $i = 0;
                                                while ($i < mysqli_num_fields($result)) {
                                                    $meta = mysqli_fetch_field($result);
                                                    $i = $i + 1; ?>

                                                    <th><?php echo $meta->name; ?></th>

                                                <?php
                                                }
                                                ?>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $i = 0;
                                            while ($row = mysqli_fetch_row($result)) {
                                            ?>
                                                <tr>
                                                    <?php
                                                    $count = count($row);
                                                    $y = 0;
                                                    while ($y < $count) {
                                                        $c_row = current($row); ?>

                                                        <td><?php echo $c_row; ?></td>

                                                    <?php
                                                        next($row);
                                                        $y = $y + 1;
                                                    } ?>
                                                </tr>
                                            <?php
                                                $i = $i + 1;
                                            }
                                            ?>

                                        </tbody>

                                    </table>
                                </div>
                            </div>

                        </div>




                        <!-- seventh row-->




                    </div><!-- /.box -->
                </div>
            </div><!-- /.nav-tabs-custom -->


            <!---////////////////////////////////////////////////////////////////////////////////-->

        </section><!-- /.Left col -->

    </div><!-- /.row (main row) -->

</section><!-- /.content -->
<!-- /.content-wrapper -->

<!-- Right side column. Contains the navbar and content of the page -->
<script>
    var loadTime = window.performance.timing.domContentLoadedEventEnd - window.performance.timing.navigationStart;
    var timer;

    document.onreadystatechange = function() {
        var state = document.readyState
        if (state == 'interactive') {
            document.getElementById('contents').style.visibility = "hidden";

        } else if (state == 'complete') {
            setTimeout(function() {
                document.getElementById('interactive');
                document.getElementById('load').style.visibility = "hidden";
                document.getElementById('contents').style.visibility = "visible";
            }, 1000);

        }
    }
    $(document).ready(function() {
        $('#add_button').click(function() {
            $('#user_form')[0].reset();
            $('.modal-title').text("Add New Column");
            $('#action').val("Add");
            $('#operation').val("Add");
            $('#user_uploaded_image').html('');
        });

        $(document).on('submit', '#user_form', function(event) {
            event.preventDefault();
            var first_column = $('#first_column').val();
            var table_name = $('#table_name').val();
            var tpd = $('#tpd').val();
            var len = $('#lenv').val();
            if (first_column != '' && table_name != '') {

                $.ajax({
                    url: "insert.php",
                    method: 'POST',
                    data: {
                        table: table_name,
                        first: first_column,
                        tpd: tpd,
                        len: len
                    },

                    success: function(data) {
                        alert(data)
                        $('#user_form')[0].reset();
                        $('#userModal').modal('hide');
                        dataTable.ajax.reload();
                    }
                });
            }
        })
    });
    var ah_34_a_plus = $('#inner_ah_34_a_plus_div');

    $('#tabs').change(function() {

        //var g = $(this).options[$(this).selectedIndex].text;
        var ls = $("#tabs option:selected").text();
        if (ls == 'ah_34_a_plus') {
            $("#zero_inner").empty();

            $('#zero_inner').append(ah_34_a_plus);
        }

    })
</script>

<?php include 'layout/footer.php'; ?>