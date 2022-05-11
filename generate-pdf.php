<?php

    require('fpdf.php');
    $pdf = new FPDF();
    $pdf->AddPage();

    // Get all the required $_POST Data
    $name = $_POST['name'];
    $location = $_POST['location'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $college = $_POST['college'];
    $education = $_POST['education'];
    $field = $_POST['field'];
    $company = $_POST['company'];
    $position = $_POST['position'];
    $desc = $_POST['desc'];
    $skills = $_POST['skills'];

?>
