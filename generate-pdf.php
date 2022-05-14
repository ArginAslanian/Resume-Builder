<?php

    require('fpdf.php');
    $pdf = new FPDF();
    $pdf->AddPage();

    // Get all the required $_POST Data
    $name = validate_input($_POST['name']);
    $location = validate_input($_POST['location']);
    $phone = validate_input($_POST['phone']);
    $email = validate_input($_POST['email']);
    $college = validate_input($_POST['college']);
    $education = validate_input($_POST['education']);
    $field = validate_input($_POST['field']);
    $company = validate_input($_POST['company']);
    $position = validate_input($_POST['position']);
    $desc = validate_input($_POST['desc']);
    $skills = validate_input($_POST['skills']);

    // Input Validation function
    function validate_input($input) {
        $input = trim($input); // Remove white space, tabs, newline, etc..
        $input = stripslashes($input); // Remove backlashes from user input data
        $input = htmlspecialchars($input); // Remove html characters inputted
        return $input;
    }

    // Set title to $name + Resume
    $pdf->SetTitle($name . ' Resume');

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
