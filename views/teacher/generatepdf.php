<?php
//============================================================+
// File name   : example_001.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 001 for TCPDF class
//               Default Header and Footer
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Default Header and Footer
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
require_once('../../public/libraries/tcpdf/config/tcpdf_config.php');
require_once('../../public/libraries/tcpdf/tcpdf.php');
// extend TCPF with custom functions
class MYPDF extends TCPDF {

    // Load table data from file
    public function LoadData() {
      $userid=$_GET['user'];
        $this->connection = mysqli_connect('localhost','root','isurika','vidarsha') or die("DB connection failed");
        $sql = "select c.batch,SUM(f.amount)*95/100 as totalAmount from fees f,class c,teacher t where f.class_id=c.id and c.teacher_reg_no=t.reg_no and t.user_id=$userid GROUP BY c.batch";
        $result = mysqli_query($this->connection,$sql);
        $data=mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $data;
    }

    // Colored table
    public function ColoredTable($header,$data) {
        // Colors, line width and bold font
        $this->SetFillColor(25, 103, 25);
        $this->SetTextColor(255);
        $this->SetDrawColor(15, 62, 15);
        $this->SetLineWidth(0.3);
        $this->SetFont('', 'B');
        // Header
        $w = array(50,50);
        $num_headers = count($header);
        for($i = 0; $i < $num_headers; ++$i) {
            $this->Cell($w[$i], 7, $header[$i], 1, 0, 'C', 1);
        }
        $this->Ln();
        // Color and font restoration
        $this->SetFillColor(224, 235, 255);
        $this->SetTextColor(0);
        $this->SetFont('');
        // Data
        $fill = 0;
        $count=0;
        foreach($data as $row) {
            $this->Cell($w[0], 6, $row['batch'], 'LR', 0, 'L', $fill);
            $this->Cell($w[1], 6, number_format($row['totalAmount']), 'LR', 0, 'R', $fill);
            $this->Ln();
            $fill=!$fill;
            $count+=$row['totalAmount'];
        }
        $this->Cell($w[0], 6, 'Total', 'LR', 0, 'L', $fill);
            $this->Cell($w[1], 6, number_format($count), 'LR', 0, 'R', $fill);
            $this->Ln();
            $fill=!$fill;
        $this->Cell(array_sum($w), 0, '', 'T');
    }
}

// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Vidarsha Educational Institute');
$pdf->SetTitle('Monthly Salary Report');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('helvetica', '', 12);

// add a page
$pdf->AddPage();

$html = '<div style="text-align:center">
<h2>Monthly Salary Report</h2>
<h4>Salary amount : '.$_GET['sal'].'</h4>
</div>';
$pdf->writeHTML($html, true, false, true, false, '');

// column titles
$header = array('Batch','Amount');

// data loading
$data = $pdf->LoadData();

// print colored table
$pdf->ColoredTable($header, $data);

// ---------------------------------------------------------

// close and output PDF document
$pdf->Output('Salary Report.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
?>