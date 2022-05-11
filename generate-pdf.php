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

    // Output on PDF file

    // BOLD
    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(40, 10, $name);
    $pdf->Ln();

    // REGULAR
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(0, 10, 'Location: ' . $location);
    $pdf->Ln();

    // REGULAR
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(0, 10, 'Phone Number: ' . $phone);
    $pdf->Ln();

    // REGULAR
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(0, 10, 'Email Address: ' . $email);
    $pdf->Ln();

    // BOLD
    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(40, 10, 'Education');
    $pdf->Ln();

    // REGULAR
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(0, 10, 'College: ' . $college);
    $pdf->Ln();

    // REGULAR
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(0, 10, 'Degree: ' . $education);
    $pdf->Ln();

    // Regular
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(0, 10, 'Field of Study: ' . $field);
    $pdf->Ln();

    // BOLD
    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(40, 10, 'Work Experience');
    $pdf->Ln();

    // REGULAR
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(0, 10, 'Company: ' . $company);
    $pdf->Ln();

    // REGULAR
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(0, 10, 'Position: ' . $position);
    $pdf->Ln();

    // REGULAR
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(0, 10, 'Description: ' . $desc);
    $pdf->Ln();

    // BOLD
    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(40, 10, 'Skills');
    $pdf->Ln();

    // REGULAR
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(0, 10, 'Skills: ' . $skills);
    $pdf->Ln();

    $pdf->Output();

?>
