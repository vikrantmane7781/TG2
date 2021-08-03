<?php
// Database configuration
//$dbHost     = "localhost";
//$dbUsername = "root";
//$dbPassword = "";
//$dbName     = "measurements";

// Create database connection
//$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
//$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
//
//// Check connection
//if ($db->connect_error) {
//    die("Connection failed: " . $db->connect_error);
//}
//
//
//// Query to get columns from table
//$query = $db->query("SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = 'measurements' AND //TABLE_NAME = '4len'");
//
//
//$q = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = 'measurements' AND TABLE_NAME = //'4len'";
//$res = mysqli_query($conn, $q);
//while ($rot = mysqli_fetch_array($res)) {
//}
//
//
//while ($row = $query->fetch_assoc()) {
//    $result[] = $row;
//}
//
//// Array of all column names
//$columnArr = array_column($result, 'COLUMN_NAME');
//foreach ($columnArr as $col) {
//    //echo $col . "\n";
//}

$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "measurements";
$link = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
if (!$link) {
    die('Error: Could not connect: ');
}

$database = 'measurements';

mysqli_select_db($link, $database);

$query = 'select * from ah_34_a_plus';

$result = mysqli_query($link, $query);

if (!$result) {
    $message = 'ERROR:';
    return $message;
} else {
    $i = 0;
?>
    <html>

    <body>
        <table>
            <tr>
                <?php
                while ($i < mysqli_num_fields($result)) {
                    $meta = mysqli_fetch_field($result);
                    echo '<td>' . $meta->name . '</td>';
                    $i = $i + 1;
                }
                ?>

            </tr>
            <?php
            $i = 0;
            while ($row = mysqli_fetch_row($result)) {
            ?>
                <tr>
                    <?php
                    $count = count($row);
                    $y = 0;
                    while ($y < $count) {
                        $c_row = current($row);
                    ?>
                        <td><?php echo $c_row; ?></td>
                    <?php
                        next($row);
                        $y = $y + 1;
                    }
                    ?>

                </tr>
            <?php
                $i = $i + 1;
            } ?>
        </table>
    </body>

    </html>
<?php
    mysqli_free_result($result);
}

mysqli_close($link);
