<?php


use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
require 'phpSpreadsheet/autoload.php';

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'Designation');
$arr = ["Accountant", "Accountants Officer", "Administrative Officer", "Artist/calligrapher", "Assistant Director (Admin)", "Assistant Director (Finance)", "Assistant Documentation Officer", "Assistant Librarian", "Assistant Maintenance Engineer", "Assistant Programmer", "Assistant Publication Officer", "Assistant Statistical officer", "Asssistant Accountant", "Lecturer", "Assistant Professor", "Associate Professor", "Professor", "Book Sorter", "Cash Sarker", "Cataloguer", "Chief, DLP", "Chief, Statistics", "Cleaner", "Compiler", "Computer Operator", "Data Entry Operator", "Deputy Director (Admin)", "Deputy Director (Finance)", "Despatch rider", "Director", "Director General", "Documentation Assistant", "Documentation Officer", "Driver", "Electrician", "Head Assistant", "Lab Assistant", "Libraray Assistant", "Librarian", "Library Helper", "Liftman", "Mali", "Messanger", "Office assistant cum computer typist", "Office Sohayak", "Photocopy Operator", "Programmer", "Proof reader", "Publication Assistant", "Publication Officer", "Research Officer", "Security guard", "Senior Programmer", "Senior system analyst", "Specialist (Statistics)", "Specialist (Documentation)", "Specialist (Library)", "Specialist (Publication)", "Statistical Investigator", "Statistical officer", "Stenographer cum computer operator", "Store keeper", "Store Officer", "Steno Typist Cum Computer Operator", "System Analyst", "System manager", "Technician", "Upper Division Assistant (UDA)", "UDA cum Cashier", "UDA cum typist"];
for($i=0;$i<sizeof($arr);$i++){
    $sheet->setCellValue('A'.($i+1+1), $arr[$i]);

}
$writer = new Xlsx($spreadsheet);
$writer->save('hello world.xlsx');
exit;

?>