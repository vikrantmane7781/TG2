<?php
include 'downloadVariable.php';
include 'downloadVariablet.php';
include 'downloadVariableV.php';
//include the file that loads the PhpSpreadsheet classes
require 'spreadsheet/vendor/autoload.php';

//include the classes needed to create and write .xlsx file
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Writer\Csv;


//now you can use the Spreadsheet and Xlsx classes

$spreadsheet = new Spreadsheet();

//add some data in excel cells
$sheet = $spreadsheet->getActiveSheet(); 

if(isset($_POST['combiner'])){
  $gartment=$_POST['combiner'];
  $ider=$_POST['id'];
  $radio=$_POST['opt'];
 //-----------------------
 if($radio=='csv'){
$filename=$ider.'.csv';
 }else{
  $filename=$ider.'.xlsx';
 }

if($gartment=='C'){
$counter=0;
for($i=1;$i<=count($downloadersJ_shell);$i++){
$spreadsheet->setActiveSheetIndex(0)
->setCellValue('A'.$i.'',$downloadersJ_shell[$counter]);
$counter+=1;
}
$counter1=0;
for($i1=89;$i1<=89+count($downloadersJ_lining);$i1++){
  $spreadsheet->setActiveSheetIndex(0)
  ->setCellValue('A'.$i1.'',$downloadersJ_lining[$counter1]);
  $counter1+=1;
  }

$counter2=0;
for($i2=180;$i2<=180+count($downloadersJ_size_code);$i2++){
$spreadsheet->setActiveSheetIndex(0)
->setCellValue('A'.$i2.'',$downloadersJ_size_code[$counter2]);
$counter2+=1;
  }
$counter3=0;
for($i3=313;$i3<=313+count($downloadersJ_canvas);$i3++){
$spreadsheet->setActiveSheetIndex(0)
->setCellValue('A'.$i3.'',$downloadersJ_canvas[$counter3]);
$counter3+=1;
  }
}
elseif($gartment=='P') {
  $counter=0;
  for($i=1;$i<=count($downloadersT_shell);$i++){
  $spreadsheet->setActiveSheetIndex(0)
  ->setCellValue('A'.$i.'',$downloadersT_shell[$counter]);
  $counter+=1;
  }
  $counter1=0;
  for($i1=89;$i1<=89+count($downloadersT_pocket);$i1++){
    $spreadsheet->setActiveSheetIndex(0)
    ->setCellValue('A'.$i1.'',$downloadersT_pocket[$counter1]);
    $counter1+=1;
    }
  
  $counter2=0;
  for($i2=180;$i2<=180+count($downloadersT_lining);$i2++){
  $spreadsheet->setActiveSheetIndex(0)
  ->setCellValue('A'.$i2.'',$downloadersT_lining[$counter2]);
  $counter2+=1;
    }
  $counter3=0;
  for($i3=313;$i3<=313+count($downloadersT_sizecode);$i3++){
  $spreadsheet->setActiveSheetIndex(0)
  ->setCellValue('A'.$i3.'',$downloadersT_sizecode[$counter3]);
  $counter3+=1;
    }
}
elseif($gartment=='V'){
  $counter=0;
  for($i=1;$i<=count($downloadV_shell);$i++){
  $spreadsheet->setActiveSheetIndex(0)
  ->setCellValue('A'.$i.'',$downloadV_shell[$counter]);
  $counter+=1;
  }
  $counter1=0;
  for($i1=89;$i1<=89+count($downloadV_lining);$i1++){
    $spreadsheet->setActiveSheetIndex(0)
    ->setCellValue('A'.$i1.'',$downloadV_lining[$counter1]);
    $counter1+=1;
    }
  
  $counter2=0;
  for($i2=180;$i2<=180+count($downloadV_sizecode);$i2++){
  $spreadsheet->setActiveSheetIndex(0)
  ->setCellValue('A'.$i2.'',$downloadV_sizecode[$counter2]);
  $counter2+=1;
    }
}
elseif($gartment=='CP'||$gartment=='PC'){
  $counter=0;
for($i=1;$i<=count($downloadersJ_shell);$i++){
$spreadsheet->setActiveSheetIndex(0)
->setCellValue('A'.$i.'',$downloadersJ_shell[$counter]);
$counter+=1;
}
$counter1=0;
for($i1=89;$i1<=89+count($downloadersJ_lining);$i1++){
  $spreadsheet->setActiveSheetIndex(0)
  ->setCellValue('A'.$i1.'',$downloadersJ_lining[$counter1]);
  $counter1+=1;
  }

$counter2=0;
for($i2=180;$i2<=180+count($downloadersJ_size_code);$i2++){
$spreadsheet->setActiveSheetIndex(0)
->setCellValue('A'.$i2.'',$downloadersJ_size_code[$counter2]);
$counter2+=1;
  }
$counter3=0;
for($i3=313;$i3<=313+count($downloadersJ_canvas);$i3++){
$spreadsheet->setActiveSheetIndex(0)
->setCellValue('A'.$i3.'',$downloadersJ_canvas[$counter3]);
$counter3+=1;
  }
//------------------
  $counter4=0;
  for($i4=1;$i4<=count($downloadersT_shell);$i4++){
  $spreadsheet->setActiveSheetIndex(0)
  ->setCellValue('B'.$i4.'',$downloadersT_shell[$counter4]);
  $counter4+=1;
  }
  $counter5=0;
  for($i5=89;$i5<=89+count($downloadersT_pocket);$i5++){
    $spreadsheet->setActiveSheetIndex(0)
    ->setCellValue('B'.$i5.'',$downloadersT_pocket[$counter5]);
    $counter5+=1;
    }
  
  $counter6=0;
  for($i6=180;$i6<=180+count($downloadersT_lining);$i6++){
  $spreadsheet->setActiveSheetIndex(0)
  ->setCellValue('B'.$i6.'',$downloadersT_lining[$counter6]);
  $counter6+=1;
    }
  $counter7=0;
  for($i7=313;$i7<=313+count($downloadersT_sizecode);$i7++){
  $spreadsheet->setActiveSheetIndex(0)
  ->setCellValue('B'.$i7.'',$downloadersT_sizecode[$counter7]);
  $counter7+=1;
    }

}
elseif($gartment=='CV'||$gartment=='VC'){
  $counter=0;
  for($i=1;$i<=count($downloadersJ_shell);$i++){
  $spreadsheet->setActiveSheetIndex(0)
  ->setCellValue('A'.$i.'',$downloadersJ_shell[$counter]);
  $counter+=1;
  }
  $counter1=0;
  for($i1=89;$i1<=89+count($downloadersJ_lining);$i1++){
    $spreadsheet->setActiveSheetIndex(0)
    ->setCellValue('A'.$i1.'',$downloadersJ_lining[$counter1]);
    $counter1+=1;
    }
  
  $counter2=0;
  for($i2=180;$i2<=180+count($downloadersJ_size_code);$i2++){
  $spreadsheet->setActiveSheetIndex(0)
  ->setCellValue('A'.$i2.'',$downloadersJ_size_code[$counter2]);
  $counter2+=1;
    }
  $counter3=0;
  for($i3=313;$i3<=313+count($downloadersJ_canvas);$i3++){
  $spreadsheet->setActiveSheetIndex(0)
  ->setCellValue('A'.$i3.'',$downloadersJ_canvas[$counter3]);
  $counter3+=1;
    }
    //=====================
    $counter5=0;
    for($i5=1;$i5<=count($downloadV_shell);$i5++){
    $spreadsheet->setActiveSheetIndex(0)
    ->setCellValue('B'.$i5.'',$downloadV_shell[$counter5]);
    $counter5+=1;
    }
    $counter6=0;
    for($i6=89;$i6<=89+count($downloadV_lining);$i6++){
      $spreadsheet->setActiveSheetIndex(0)
      ->setCellValue('B'.$i6.'',$downloadV_lining[$counter6]);
      $counter6+=1;
      }
    
    $counter7=0;
    for($i7=180;$i7<=180+count($downloadV_sizecode);$i7++){
    $spreadsheet->setActiveSheetIndex(0)
    ->setCellValue('B'.$i7.'',$downloadV_sizecode[$counter7]);
    $counter7+=1;
 }
}
elseif($gartment=='PV' || $gartment=='VP'){
  $counter=0;
  for($i=1;$i<=count($downloadersT_shell);$i++){
  $spreadsheet->setActiveSheetIndex(0)
  ->setCellValue('A'.$i.'',$downloadersT_shell[$counter]);
  $counter+=1;
  }
  $counter1=0;
  for($i1=89;$i1<=89+count($downloadersT_pocket);$i1++){
    $spreadsheet->setActiveSheetIndex(0)
    ->setCellValue('A'.$i1.'',$downloadersT_pocket[$counter1]);
    $counter1+=1;
    }
  
  $counter2=0;
  for($i2=180;$i2<=180+count($downloadersT_lining);$i2++){
  $spreadsheet->setActiveSheetIndex(0)
  ->setCellValue('A'.$i2.'',$downloadersT_lining[$counter2]);
  $counter2+=1;
    }
  $counter3=0;
  for($i3=313;$i3<=313+count($downloadersT_sizecode);$i3++){
  $spreadsheet->setActiveSheetIndex(0)
  ->setCellValue('A'.$i3.'',$downloadersT_sizecode[$counter3]);
  $counter3+=1;
   }
//--------------------------------
$counter5=0;
for($i5=1;$i5<=count($downloadV_shell);$i5++){
$spreadsheet->setActiveSheetIndex(0)
->setCellValue('B'.$i5.'',$downloadV_shell[$counter5]);
$counter5+=1;
}
$counter6=0;
for($i6=89;$i6<=89+count($downloadV_lining);$i6++){
  $spreadsheet->setActiveSheetIndex(0)
  ->setCellValue('B'.$i6.'',$downloadV_lining[$counter6]);
  $counter6+=1;
  }

$counter7=0;
for($i7=180;$i7<=180+count($downloadV_sizecode);$i7++){
$spreadsheet->setActiveSheetIndex(0)
->setCellValue('B'.$i7.'',$downloadV_sizecode[$counter7]);
$counter7+=1;
}
   
}elseif($gartment=='CPV'||$gartment=='CVP'||$gartment=='VPC'|| $gartment=='VCP'||$gartment=='PCV'||$gartment=='PVC'){
//-------- C ---------------
$counter=0;
for($i=1;$i<=count($downloadersJ_shell);$i++){
$spreadsheet->setActiveSheetIndex(0)
->setCellValue('A'.$i.'',$downloadersJ_shell[$counter]);
$counter+=1;
}
$counter1=0;
for($i1=89;$i1<=89+count($downloadersJ_lining);$i1++){
  $spreadsheet->setActiveSheetIndex(0)
  ->setCellValue('A'.$i1.'',$downloadersJ_lining[$counter1]);
  $counter1+=1;
  }

$counter2=0;
for($i2=180;$i2<=180+count($downloadersJ_size_code);$i2++){
$spreadsheet->setActiveSheetIndex(0)
->setCellValue('A'.$i2.'',$downloadersJ_size_code[$counter2]);
$counter2+=1;
  }
$counter3=0;
for($i3=313;$i3<=313+count($downloadersJ_canvas);$i3++){
$spreadsheet->setActiveSheetIndex(0)
->setCellValue('A'.$i3.'',$downloadersJ_canvas[$counter3]);
$counter3+=1;
  }
//------- T -----------
  $counter4=0;
  for($i4=1;$i4<=count($downloadersT_shell);$i4++){
  $spreadsheet->setActiveSheetIndex(0)
  ->setCellValue('B'.$i4.'',$downloadersT_shell[$counter4]);
  $counter4+=1;
  }
  $counter5=0;
  for($i5=89;$i5<=89+count($downloadersT_pocket);$i5++){
    $spreadsheet->setActiveSheetIndex(0)
    ->setCellValue('B'.$i5.'',$downloadersT_pocket[$counter5]);
    $counter5+=1;
    }
  
  $counter6=0;
  for($i6=180;$i6<=180+count($downloadersT_lining);$i6++){
  $spreadsheet->setActiveSheetIndex(0)
  ->setCellValue('B'.$i6.'',$downloadersT_lining[$counter6]);
  $counter6+=1;
    }
  $counter7=0;
  for($i7=313;$i7<=313+count($downloadersT_sizecode);$i7++){
  $spreadsheet->setActiveSheetIndex(0)
  ->setCellValue('B'.$i7.'',$downloadersT_sizecode[$counter7]);
  $counter7+=1;
    }
//-------- V -------------

$counter15=0;
for($i15=1;$i15<=count($downloadV_shell);$i15++){
$spreadsheet->setActiveSheetIndex(0)
->setCellValue('C'.$i15.'',$downloadV_shell[$counter15]);
$counter15+=1;
}
$counter16=0;
for($i16=89;$i16<=89+count($downloadV_lining);$i16++){
  $spreadsheet->setActiveSheetIndex(0)
  ->setCellValue('C'.$i16.'',$downloadV_lining[$counter16]);
  $counter16+=1;
  }

$counter17=0;
for($i17=180;$i17<=180+count($downloadV_sizecode);$i17++){
$spreadsheet->setActiveSheetIndex(0)
->setCellValue('C'.$i17.'',$downloadV_sizecode[$counter17]);
$counter17+=1;
}
}

elseif($gartment=='CVPP' || $gartment=='CPVP' || $gartment=='PPCV' || $gartment=='VPPC' || $gartment=='PPVC' || $gartment=='PCVP' || $gartment=='VPCV' || $gartment=='CPPV' || $gartment=='VPCP' || $gartment=='PVCP'){
//-------- C ---------------
$counter=0;
for($i=1;$i<=count($downloadersJ_shell);$i++){
$spreadsheet->setActiveSheetIndex(0)
->setCellValue('A'.$i.'',$downloadersJ_shell[$counter]);
$counter+=1;
}
$counter1=0;
for($i1=89;$i1<=89+count($downloadersJ_lining);$i1++){
  $spreadsheet->setActiveSheetIndex(0)
  ->setCellValue('A'.$i1.'',$downloadersJ_lining[$counter1]);
  $counter1+=1;
  }

$counter2=0;
for($i2=180;$i2<=180+count($downloadersJ_size_code);$i2++){
$spreadsheet->setActiveSheetIndex(0)
->setCellValue('A'.$i2.'',$downloadersJ_size_code[$counter2]);
$counter2+=1;
  }
$counter3=0;
for($i3=313;$i3<=313+count($downloadersJ_canvas);$i3++){
$spreadsheet->setActiveSheetIndex(0)
->setCellValue('A'.$i3.'',$downloadersJ_canvas[$counter3]);
$counter3+=1;
  }
//------- T -----------
  $counter4=0;
  for($i4=1;$i4<=count($downloadersT_shell);$i4++){
  $spreadsheet->setActiveSheetIndex(0)
  ->setCellValue('B'.$i4.'',$downloadersT_shell[$counter4]);
  $counter4+=1;
  }
  $counter5=0;
  for($i5=89;$i5<=89+count($downloadersT_pocket);$i5++){
    $spreadsheet->setActiveSheetIndex(0)
    ->setCellValue('B'.$i5.'',$downloadersT_pocket[$counter5]);
    $counter5+=1;
    }
  
  $counter6=0;
  for($i6=180;$i6<=180+count($downloadersT_lining);$i6++){
  $spreadsheet->setActiveSheetIndex(0)
  ->setCellValue('B'.$i6.'',$downloadersT_lining[$counter6]);
  $counter6+=1;
    }
  $counter7=0;
  for($i7=313;$i7<=313+count($downloadersT_sizecode);$i7++){
  $spreadsheet->setActiveSheetIndex(0)
  ->setCellValue('B'.$i7.'',$downloadersT_sizecode[$counter7]);
  $counter7+=1;
    }
//-------- V -------------

$counter15=0;
for($i15=1;$i15<=count($downloadV_shell);$i15++){
$spreadsheet->setActiveSheetIndex(0)
->setCellValue('C'.$i15.'',$downloadV_shell[$counter15]);
$counter15+=1;
}
$counter16=0;
for($i16=89;$i16<=89+count($downloadV_lining);$i16++){
  $spreadsheet->setActiveSheetIndex(0)
  ->setCellValue('C'.$i16.'',$downloadV_lining[$counter16]);
  $counter16+=1;
  }

$counter17=0;
for($i17=180;$i17<=180+count($downloadV_sizecode);$i17++){
$spreadsheet->setActiveSheetIndex(0)
->setCellValue('C'.$i17.'',$downloadV_sizecode[$counter17]);
$counter17+=1;
}
}

//set style for A1,B1,C1 cells
$cell_st =[
 'font' =>['bold' => true],
 'alignment' =>['horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER],
 'borders'=>['bottom' =>['style'=> \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM]]
];
//$spreadsheet->getActiveSheet()->getStyle('A1:Z1')->applyFromArray($cell_st);

//set columns width
$spreadsheet->getActiveSheet()->getColumnDimension('A')->setWidth(40);
$spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth(40);
$spreadsheet->getActiveSheet()->getColumnDimension('C')->setWidth(40);
$spreadsheet->getActiveSheet()->getColumnDimension('D')->setWidth(40);
$spreadsheet->getActiveSheet()->setTitle('Report'); //set a title for Worksheet

//make object of the Xlsx class to save the excel file

$writer = new Xlsx($spreadsheet);
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename="'. urlencode($filename).'"');
$writer->save('php://output');

  
  }
  



?>