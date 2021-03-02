<?php
session_start();
 ob_start();


require_once './../../tcpdf/tcpdf.php';
require_once './../../pdoconn/qlicoon.php';
 



$searchincomexpense = searchincomexpense();
//$searchpayements = searchpayements();
$getInstitutionDetail = org_details();




 $getSchool_name = $getInstitutionDetail["org_name"];
$getSchoolMotor = $getInstitutionDetail["slogan"];
$getPostalAddress = $getInstitutionDetail["address_s"];
$getTelephoneNumbers = $getInstitutionDetail["contact_1"] . " " . $getInstitutionDetail["contact_2"];



 

  
class MYPDF extends TCPDF {

    //Page header
    public function Header() {
        
    }

    // Page footer
    public function Footer() {
        // Position at 15 mm from bottom
        $this->SetY(-8);
        // Set font
        $this->SetFont('helvetica', '', 8);
        // Page number
//        date_default_timezone_set("Africa/Accra");
//        $this->Cell(0, 10, date("d/m/Y h:i:sa") . " " . 'Page ' . $this->getAliasNumPage() . '/' . $this->getAliasNbPages(), 0, false, 'R', 0, '', 0, false, 'T', 'M');

        $horizontalLine = "<hr />";
        $company = "<strong><em>LinuChurch</em></strong>";

        $this->writeHTML($horizontalLine, true, 0, true, 0);
        $this->writeHTML($company, true, 0, true, 0, 'R');
    }

}

$pdf = new MYPDF("", PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

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

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__) . "/lang/eng.php")) {
    require_once(dirname(__FILE__) . "/lang/eng.php");
    $pdf->setLanguageArray($l);
}

// set font
$pdf->SetFont('times', '', 11);

// add a page
$pdf->AddPage();
$pdf->setJPEGQuality(75);

 

$heading = "<span>THE ROMAN CATHOLIC CHURCH OF GHANA</span>"
        . "<h1>" . $getSchool_name . "</h1>"
        . "<span>" . $getPostalAddress . "</span><br />"
        . "<span>" . $getTelephoneNumbers . "</span>";

$pdf->Image($church_logo, 5, 7, 34, 37, '', '', '', true, 150, '', false, false, 0, false, false, false);


$pdf->Image($church_logo, 5, 7, 34, 37, '', '', '', true, 150, '', false, false, 0, false, false, false);

$tbl_head_heading = '<table cellspacing = "0" cellpadding = "5">';
$tbl_foot_heading = '</table>';
$tbl_heading = '';

$tbl_heading .= '
<tbody>
      <tr>
         <td style="text-align: center; background-color: #666; color: #fff;" colspan="4">' . $heading . '</td>
      </tr>
</tbody>';

$pdf->writeHTML($tbl_head_heading . $tbl_heading . $tbl_foot_heading, true, false, true, false, '');

$pageTitle = "<strong>" . htmlentities( " " . "INCOME STATEMENT FROM " . strtoupper(SESSION['datefrom'])) . "</strong>";
$pdf->writeHTML($pageTitle, true, 0, true, 0, 'C');

$headingSpace = "<div></div>";
$pdf->writeHTML($headingSpace, true, 0, true, 0);

$tbl_head_title = '<table cellspacing = "0" cellpadding = "2" border = "1">';
$tbl_foot_title = '</table>';
$tbl_title = '';

$tbl_title .= '
<tbody>
      <tr style="background-color: #666; color: #fff;">
         <td style="text-align: left; width: 20%;"><strong>#</strong></td>
         <td style="text-align: left; width: 40%;"><strong>Description</strong></td>
         <td style="text-align: left; width: 40%;"><strong>Amount(GHC)</strong></td>
         
          
</tr>
</tbody>';

$pdf->writeHTML($tbl_head_title . $tbl_title . $tbl_foot_title, FALSE, false, true, false, '');

  $i = 1;

//$getMembers = $member ->get_members_by_groups_debotr_creditor($_SESSION['debtor_creditors_dropdown']);
while ($row = mysqli_fetch_array($searchincomexpense)) {
  
               // = $ac ->get_occupant_name($row['property_occupant']);   
  
    $tbl_head_prduct = '<table cellspacing = "0" cellpadding = "2" border = "1">';
    $tbl_foot_prduct = '</table>';
    $tbl_body_prduct = '';
    $tbl_body_prduct .= '
    <tbody>
        <tr>
            <td style="text-align: left; width: 20%;">' . $i++ . '</td>
            
           <td style="width: 40%; text-align: left;">' . htmlentities($row["acc_name"]) . '</td>
 
            <td style="width: 40%; text-align: left;">' . htmlentities($row["acc_amt"]) . '</td>
          

</tr>
    </tbody>';

    $pdf->writeHTML($tbl_head_prduct . $tbl_body_prduct . $tbl_foot_prduct, FALSE, false, true, false, '');
}

// while ($row2 = mysqli_fetch_array($searchpayements)) {   
  
//     $tbl_head_prduct = '<table cellspacing = "0" cellpadding = "2" border = "1">';
//     $tbl_foot_prduct = '</table>';
//     $tbl_body_prduct = '';
//     $tbl_body_prduct .= '
//     <tbody>
//         <tr>
//             <td style="text-align: left; width: 20%;">' . $i++ . '</td>
            
//            <td style="width: 40%; text-align: left;">' . htmlentities($row2["payment_date"]) . '</td>
 
//             <td style="width: 40%;text-align: left;">' . htmlentities($row2["amount"]) . '</td>
            

// </tr>
//     </tbody>';

//     $pdf->writeHTML($tbl_head_prduct . $tbl_body_prduct . $tbl_foot_prduct, FALSE, false, true, false, '');
// }


$headingSpace = "<div></div>";
$pdf->writeHTML($headingSpace, true, 0, true, 0);
$headingSpace = "<div></div>";
$pdf->writeHTML($headingSpace, true, 0, true, 0);

$tbl_head_title = '<table cellspacing = "0" cellpadding = "2" border = "1">';
$tbl_foot_title = '</table>';
$tbl_title = '';

$tbl_title .= '
<tbody>
      <tr style="background-color: #666; color: #fff;">
         
         <td style="text-align: center; "><strong>Details</strong></td>
           <td style="text-align: center; "><strong>Figures</strong></td> 
        
       
        
           
      
  
   
</tr>
</tbody>';

$pdf->writeHTML($tbl_head_title . $tbl_title . $tbl_foot_title, FALSE, false, true, false, '');

     

    $tbl_head_prduct = '<table cellspacing = "0" cellpadding = "2" border = "1">';
    $tbl_foot_prduct = '</table>';
    $tbl_body_prduct = '';
    $tbl_body_prduct .= '
    <tbody>
       
     
   <tr>
<td style="text-align: left;"><strong>TOTAL AMOUNT</strong></td>           <td>'. htmlentities("GHC"." ".number_format( 9, 2, ".", ",")) . '</td>
  </tr>
  <tr>
<td style="text-align:left;"><strong>REPORT PRINTED ON</strong></td>          <td >' . htmlentities(strtoupper(date("F j, Y"))) . '</td>
    </tr>
     
 
  
    </tbody>';

    $pdf->writeHTML($tbl_head_prduct . $tbl_body_prduct . $tbl_foot_prduct, FALSE, false, true, false, '');




$pdf->lastPage();

ob_end_clean();

$pdf->Output();





