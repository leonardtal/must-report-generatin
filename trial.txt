<?php
$tcpdf_include_dirs = array(realpath('tcpdf.php'), '/usr/share/php/tcpdf/tcpdf.php', '/usr/share/tcpdf/tcpdf.php', '/usr/share/php-tcpdf/tcpdf.php', '/var/www/tcpdf/tcpdf.php', '/var/www/html/tcpdf/tcpdf.php', '/usr/local/apache2/htdocs/tcpdf/tcpdf.php');
foreach ($tcpdf_include_dirs as $tcpdf_include_path) {
    if (@file_exists($tcpdf_include_path)) {
        require_once($tcpdf_include_path);
        break;
    }
}
// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
// set document information
$pdf->SetCreator(PDF_CREATOR);
// set font
$pdf->SetFont('times', 'BI', 20);
//$empcode='913919';
include "../common.php";// for db conectivity
$tablename="rentsum";
$sql = "Select empcode,ticket_no,ctgcode,empname,allot_dt,to_char(qtrno) qtrno,type,seccode,wt,lf,'0' arr 
,CONSERV con,met_chg,'0' eu from $tablename where MONTH='1' AND YEAR='2013' and type not in ('4','5','0') order by qtrno ";
$sqldata =oci_parse($conn,$sql);
oci_execute($sqldata);
//echo $sql;
// add a page
$pdf->AddPage();
    // set some text to print
    while($result=oci_fetch_array($sqldata,OCI_BOTH))
    {
    if(isset($result['EMPCODE'])) {
    $empcode=$result['EMPCODE'];
    } else {
    $empcode = 'NOT DEFINED';
    }
    //echo $empcode."\r\n";
    $pdf->Write(0, $empcode, '', 0, 'C', true, 0, false, false, 0);
    }
     $pdf->Output('example_002.pdf', 'D');  