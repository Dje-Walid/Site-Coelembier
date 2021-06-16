<?php

require './vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

function adhesion(){
    require("./Vue/v_adhesion.php");
}

function pdfDL(){

    //$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load("05featuredemo.xlsx");

    // Creates New Spreadsheet 
    $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load("./Vue/excel/APHB.xlsx");
    
    // Retrieve the current active worksheet 
    $sheet = $spreadsheet->getActiveSheet();

    extract($_POST);

    $_SESSION['pdf']['nom'] = $nom;
    
    //Nom
    $sheet->setCellValueByColumnAndRow(2,17,$nom);

    //Prenom
    $sheet->setCellValueByColumnAndRow(2,18,$prenom);

    //Date de Naissance
    $sheet->setCellValueByColumnAndRow(3,19,$dateNaissance);

    //Adresse
    $sheet->setCellValueByColumnAndRow(2,20,$adresse);

    //Telephone
    $sheet->setCellValueByColumnAndRow(3,22,$telephone);

    //mail
    $sheet->setCellValueByColumnAndRow(6,22,$mail);

    $writer = new Xlsx($spreadsheet);

    $writer->save("./Vue/excel/APHB_" . $nom . ".xlsx");

    forcerTelechargement("APHB_" . $nom . ".xlsx", "./Vue/excel/APHB_" . $nom . ".xlsx", 10000);
}


function forcerTelechargement($nom, $situation, $poids)
{
  header('Content-Type: application/octet-stream');
  header('Content-Length: '. $poids);
  header('Content-disposition: attachment; filename='. $nom);
  header('Pragma: no-cache');
  header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
  header('Expires: 0');
  readfile($situation);
  exit();
}
