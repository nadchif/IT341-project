<?php
//============================================================+
// File name   : example_048.php
// Begin       : 2009-03-20
// Last Update : 2010-08-08
//
// Description : Example 048 for TCPDF class
//               HTML tables and table headers
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
 * @abstract TCPDF - Example: HTML tables and table headers
 * @author Nicola Asuni
 * @since 2009-03-20
 */

// require_once('reports/config/lang/eng.php');
// require_once('reports/tcpdf.php');
require_once("includes/initialize.php");

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  

$pdf->SetPrintHeader(false); $pdf->SetPrintFooter(false); 

// set default monospaced font 
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED); 

//set margins 
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT); 

//set auto page breaks 
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM); 

//set image scale factor 
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);  

//set some language-dependent strings 
$pdf->setLanguageArray($l);  

// --------------------------------------------------------- 
$pdf->SetFont('times', 'BI', 20);

// add a page 
$pdf->AddPage(); 
$txt = <<<EOD
    St. Francis Xavier Parish
EOD;
// print a block of text using Write()
$pdf->Write($h=0, $txt, $link='', $fill=0, $align='C', $ln=true, $stretch=0, $firstline=false, $firstblock=false, $maxh=0);

// set font 
$pdf->SetFont('times', 'B', 15);

$txt = <<<EOD
	    DIOCESE OF KABANKALAN
EOD;
$pdf->Write($h=0, $txt, $link='', $fill=0, $align='C', $ln=true, $stretch=0, $firstline=false, $firstblock=false, $maxh=0);

$pdf->SetFont('times', 'B', 12);

$txt = <<<EOD
Kabankalan City,Negros Occidental
EOD;
// print a block of text using Write()
$pdf->Write($h=0, $txt, $link='', $fill=0, $align='C', $ln=true, $stretch=0, $firstline=false, $firstblock=false, $maxh=0);

$pdf->SetFont('courier', 'B', 18);

$txt = <<<EOD
        
		
	CERTIFICATE OF BAPTISM
EOD;
// print a block of text using Write()
$pdf->Write($h=0, $txt, $link='', $fill=0, $align='C', $ln=true, $stretch=0, $firstline=false, $firstblock=false, $maxh=0);
$pdf->SetFont('times', 'B', 10);

$txt = <<<EOD

This is to certify that
EOD;
// print a block of text using Write()
$pdf->Write($h=0, $txt, $link='', $fill=0, $align='C', $ln=true, $stretch=0, $firstline=false, $firstblock=false, $maxh=0);
$pdf->SetFont('FreeSerif', 'B', 10);
$id = $_GET['id'];
$mydb->setQuery("SELECT * from bapt_pers_spon where b_id=".$id);
$res = $mydb->loadSingleResult();

$pdf->SetFont('times', 'BI', 10);
// create some HTML content 
$pdf->SetFont('times', 'U', 12);

$txt = <<<EOD

$res->fName $res->mName $res->lName $res->sName
EOD;
// print a block of text using Write()
$pdf->Write($h=0, $txt, $link='', $fill=0, $align='C', $ln=true, $stretch=0, $firstline=false, $firstblock=false, $maxh=0);
 
 $pdf->SetFont('FreeSerif', 'B', 10);   
$htmlcontent =  
"<html> 
<body>
<br> 	
   <table>
	<tr>
   <td>child of :</td><td>" .$res->father ."</td><td></td><td></td><td></td>
	</tr>
	<tr>
    <td>and : </td><td>" .$res->Mother ."</td><td></td>		
	</tr>
	<tr>
	<td>born in : </td> <td>".$res->birth_place ."</td><td></td>
	</tr>
	<tr>
	<td>on : </td> <td>".$res->birth_date ."</td><td></td>
	</tr>
	</table>
</body> 
</html>"; 

// output the HTML content 
$pdf->writeHTML($htmlcontent, true, 0, true, 0,$align='L'); 
$pdf->SetFont('times', 'I', 12);

$txt = <<<EOD
		WAS SOLEMLY BAPTIZED ACCORDING TO THE 
		RITES OF THE ROMAN CATHOLIC CHURCH.	
EOD;
// print a block of text using Write()
$pdf->Write($h=0, $txt, $link='', $fill=0, $align='C', $ln=true, $stretch=0, $firstline=false, $firstblock=false, $maxh=0);
 $pdf->SetFont('FreeSerif', 'B', 10);   
$htmlcontent =  
"<html> 
<body> 	
<table>
	<tr>
		<td>on : </td> <td>".$res->cur_date ."</td><td></td>
	</tr>
	<tr>	
		<td>by : </td> <td>".$res->minister ."</td><td></td>
	</tr>
	<tr>	
		<td>the sponsors being : </td> <td>".$res->sponsName1 ."</td><td></td>
	</tr>
	<tr>	
		<td>    </td> <td>".$res->sponsName2 ."</td><td></td>
	</tr>	
	<tr>	
		<td>    </td> <td>".$res->s_others ."<br/>"."</td><td></td>
	</tr>		
			
</table>	
</body> 
</html>"; 

// output the HTML content 
$pdf->writeHTML($htmlcontent, true, 0, true, 0,$align='L');
 $pdf->SetFont('FreeSerif', 'B', 10);   
$htmlcontent =  
"<html> 
<body> 	
	
	as appears in the Baptismal Register No.______Book  no.</b>    ".$res->bkNum ."  <b>Page no. </b>    ".$res->bkPage ."
		 <b>Line no.</b>".$res->bkLine ." Date ".date("Y-m-d")."<br>
</body> 
</html>"; 

// output the HTML content 
$pdf->writeHTML($htmlcontent, true, 0, true, 0,$align='L');
$pdf->SetFont('times', 'I', 12);
	  	 	

$txt = <<<EOD
				

												 ______________________
												 Parish Priest/Parochial
EOD;
// print a block of text using Write()
$pdf->Write($h=0, $txt, $link='', $fill=0, $align='R', $ln=true, $stretch=0, $firstline=false, $firstblock=false, $maxh=0);

// test some inline CSS 

//$pdf->writeHTML($inlinecss, true, 0, true, 0); 

// reset pointer to the last page 
$pdf->lastPage(); 

//Close and output PDF document 
$pdf->Output('example_006.pdf', 'I'); 

//============================================================+ 
// END OF FILE                                                  
//============================================================+ 
?>