<html>

<body>
    <center>

        <?php
        require_once "Classes/PHPExcel.php";
        $path = "TD0403_p.csv";
        $reader = PHPExcel_IOFactory::createReaderForFile($path);
        $excel_Obj = $reader->load($path);
        //Get the last sheet in excel
        $worksheet = $excel_Obj->getActiveSheet();
        //Get the first sheet in excel
        $worksheet = $excel_Obj->getSheet('0');
        //echo $worksheet->getCell('E33')->getValue();
        $lastRow = $worksheet->getHighestRow();
        $colomncount = $worksheet->getHighestDataColumn();
        $colomncount_number = PHPExcel_Cell::columnIndexFromString($colomncount);
        //echo $lastRow . '     ';
        //echo $colomncount;
        echo "<table border='1'>";
        $cnt = 0;
        $art = [];
        for ($row = 2; $row <= 4; $row++) {
            //echo "<tr>";
            $cnt += 1;
            for ($col = 0; $col <= $colomncount_number; $col++) {
                //echo "<td>";
                $txt = $worksheet->getCell(PHPExcel_Cell::stringFromColumnIndex($col) . $row)->getValue();
                echo $txt;
            }
            //echo "</tr>";
        }

        echo "</table>";

        ///

        if (isset($_POST["import"])) {

            $fileName = $_FILES["file"]["tmp_name"];

            if ($_FILES["file"]["size"] > 0) {

                $file = fopen($fileName, "r");

                while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {

                    $userId = "";
                    if (isset($column[0])) {
                        $userId = mysqli_real_escape_string($conn, $column[0]);
                    }
                    $userName = "";
                    if (isset($column[1])) {
                        $userName = mysqli_real_escape_string($conn, $column[1]);
                    }
                    $password = "";
                    if (isset($column[2])) {
                        $password = mysqli_real_escape_string($conn, $column[2]);
                    }
                    $firstName = "";
                    if (isset($column[3])) {
                        $firstName = mysqli_real_escape_string($conn, $column[3]);
                    }
                    $lastName = "";
                    if (isset($column[4])) {
                        $lastName = mysqli_real_escape_string($conn, $column[4]);
                    }

                    $sqlInsert = "INSERT into users (userId,userName,password,firstName,lastName)
                   values (?,?,?,?,?)";
                    $paramType = "issss";
                    $paramArray = array(
                        $userId,
                        $userName,
                        $password,
                        $firstName,
                        $lastName
                    );
                    $insertId = $db->insert($sqlInsert, $paramType, $paramArray);

                    if (!empty($insertId)) {
                        $type = "success";
                        $message = "CSV Data Imported into the Database";
                    } else {
                        $type = "error";
                        $message = "Problem in Importing CSV Data";
                    }
                }
            }
        }



        ?>
    </center>
</body>

</html>