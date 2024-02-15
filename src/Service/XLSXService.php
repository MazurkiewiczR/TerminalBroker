<?php

use PhpOffice\PhpSpreadsheet\IOFactory;

class XLSXService
{
    public function updateExcel($param)
    {
        $inputFileName = __DIR__ . "/../../public/newsletter_members.xlsx";
        $spreadsheet = IOFactory::load($inputFileName);
        $sheet = $spreadsheet->getActiveSheet();
        $row = $sheet->getHighestRow() + 1;
        $sheet->setCellValue("A$row", $param);
        $sheet->setCellValue("B$row", date('d-m-Y H:i:s'));
        $writer = IOFactory::createWriter($spreadsheet, "Xlsx");
        $writer->save("newsletter_members.xlsx");
        header('Location:index.php');
        exit();
    }
}
