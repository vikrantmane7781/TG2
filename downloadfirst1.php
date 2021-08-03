<?php
if(isset($_POST['firstDown'])){
    
    $firstDown=$_POST['firstDown'];
    $secondDown=$_POST['secondDown'];
    $thirdDown=$_POST['thirdDown'];
    $combiner=$firstDown." ".$secondDown." ".$thirdDown;
    $id=$_POST['id'];
    $radio=$_POST['opt'];
  if($radio=='text'){
    $file = $id.".txt";
    $txt = fopen($file, "w") or die("Unable to open file!");
    fwrite($txt, $combiner);
    fclose($txt);

    header('Content-Description: File Transfer');
    header('Content-Disposition: attachment; filename='.basename($file));
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    header("Content-Type: text/plain");
    readfile($file);
  }
  elseif($radio=='csv'){
    header("Content-type: text/csv");
    header("Content-Disposition: attachment; filename=".$id.".csv");
    header("Pragma: no-cache");
    header("Expires: 0");
    
    echo '"'.$firstDown.'"'."\t".'"'.$secondDown.'"'."\t".'"'.$thirdDown.'"';
    die;
  }
  elseif($radio=='xlsx'){
    header("Content-type: text/xls");
    header("Content-Disposition: attachment; filename=".$id.".xls");
    header("Pragma: no-cache");
    header("Expires: 0");
    
    echo '"'.$firstDown.'"'."\t".'"'.$secondDown.'"'."\t".'"'.$thirdDown.'"';
    die;
  }
  else{

  }

  }
  



?>