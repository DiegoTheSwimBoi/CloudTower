<?php
require_once $_SERVER["DOCUMENT_ROOT"]. '/Code/Classes/PHPExcel.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/Code/Classes/PHPExcel/Writer/Excel2007.php';
 

include $_SERVER["DOCUMENT_ROOT"]. "/bootstrap.php";

if(isset($_POST['submit'])){

    $xls = new PHPExcel();




    $id=$_POST['id'];

    $tableObj=$dataTable->findTable($id);



   $column = $_POST['column'];

   $row = $_POST['row'];


    $xls->getProperties()->setTitle($tableObj->name);
    $xls->getProperties()->setCreator($user->email);
    
    $xls->setActiveSheetIndex(0);
    $sheet = $xls->getActiveSheet();
    $sheet->setTitle($tableObj->name."_".$user->email);

    $rowCount=$dataTable->getContent($id);
    $rowByOne =[];

    
    $border = array(
        'borders'=>array(
            'allborders' => array(
                'style' => PHPExcel_Style_Border::BORDER_THIN,
                'color' => array('rgb' => '000000')
            ),
        )
    );

    $bg = array(
        'fill' => array(
            'type' => PHPExcel_Style_Fill::FILL_SOLID,
            'color' => array('rgb' => 'D3D3D3')
        )
    );
    


    foreach ($rowCount as $r) {
        $rowByOne[]=$r->rowByOne;
    }

    
   $CoNtent=[];


    foreach ($rowCount as $k) {
        $CoNtent[]=$dataTable->getContentByIDs($id,$k->rowByOne);
    }



    //var_dump($CoNtent[1][3]->content);

    //var_dump(count($column)+1);

    //var_dump(count($CoNtent)+2);




   $arr=["A","B","C","D","E","F","G","H", "I", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "V", "X", "Y", "Z"];


   for ($i=1; $i<count($column)+1; $i++) { 
        $sheet->setCellValueExplicit($arr[$i-1]."1",$column[$i-1], PHPExcel_Cell_DataType::TYPE_STRING);
        $sheet->getStyle($arr[$i-1]."1")->applyFromArray($bg);
    }

    $last = count($CoNtent)+1;

    $designLast=$arr[count($column)-1].$last;


    //var_dump($designLast);

    $sheet->getStyle("A1:".$designLast)->applyFromArray($border);



   for ($i=2; $i<count($CoNtent)+2; $i++) { 

    for ($j=0; $j<count($column); $j++) { 

        $index=$arr[$j]."$i";
        
        //$CoNtent[$i-2][$j]->content;

        $sheet->setCellValueExplicit($index,$CoNtent[$i-2][$j]->content, PHPExcel_Cell_DataType::TYPE_STRING);
        $sheet->getColumnDimension($arr[$j])->setWidth(20);
        $sheet->getStyle($index)->getAlignment()->setWrapText(true);
    }
        
   }

 header("Expires: Mon, 1 Apr 1974 05:00:00 GMT");
 header("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
 header("Cache-Control: no-cache, must-revalidate");
 header("Pragma: no-cache");
 header("Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
 header("Content-Disposition: attachment; filename=$tableObj->name.xlsx");
 
 $objWriter = new PHPExcel_Writer_Excel2007($xls);
 $objWriter->save('php://output'); 
 exit();	  
}