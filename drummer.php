<?php
$strName1 = "John Driscoll";
$strName1 = substr($strName1, 0, strpos($strName1, ' '));
echo $strName1;
?>