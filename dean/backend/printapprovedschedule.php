<?php

require "../../pdf/generatepdf/fpdf.php";
 class ScheduleReport extends FPDF{

     function Header()
     {
         $this->Image('../../images/logo.jpg',10,6,20);
         $this->SetFont('Times','B',15);
         $this->cell(276,10,'EGERTON UNIVERSITY DEAN OF STUDENT',0,0,'C');
         $this->Ln();
         $this->cell(276,10,'LIST OF COUNSELLORS WHO WILL NOT BE IN SPECIFIC DATES',0,0,'C');
         $this->Ln();
     }

     function Footer()
     {
         $this->SetY(-20);
         $this->SetFont('Times','I',10);
         $this->Cell(0,10,'Transforming Lives Through Quality Education',0,0,'C');
         $this->Ln();
         $this->Cell(0,10,'Page'.$this->PageNo().'/{nb}',0,0,'C');

     }

     function headerTable()
     {
         $this->SetFont('Times','B',12);
         $this->Cell(10,10,'No.',1,0,'C');
         $this->Cell(30,10,'Counsellor No',1,0,'C');
         $this->Cell(60,10,'Counsellor Name.',1,0,'C');
         $this->Cell(30,10,'Date Away',1,0,'C');
         $this->Cell(30,10,'Time away',1,0,'C');
         $this->Cell(30,10,'Available Date',1,0,'C');
         $this->Cell(30,10,'Available Time',1,0,'C');
         $this->Cell(60,10,'Reason',1,0,'C');
         $this->Ln();

     }


     function getRecords($from,$to)
     {

         $approval= "Yes";
         //$myConnection = new SessionsReport();
         $query="select * from appointments.schedule where awayDate BETWEEN ? AND ? AND approval= ?";
         $records =$this->dbConnection()->prepare($query);
         $records->execute([$from,$to,$approval]);

         if($records->rowCount()<1)
         {
             $this->SetFont('Times','B',15);
             $this->cell(276,10,'No Records Found For the Selected Period Between '.$from.' And '.$to,0,0,'C');
         }
         else
         {
             $number=1;
             $this->SetFont('Times','',10);
             while($row = $records->fetch(PDO::FETCH_ASSOC))
             {
                 $awaydate=$row['awayDate'];
                 $awaytm = $row['awayTime'];
                 $timeavalbl = $row['nextTimeAvailable'];
                 $dateavalbl = $row['nextAvailableDate'];
                 $counsNo = $row['counsNo'];
                 $counsName = $row['counsName'];
                 $reason = $row['reason'];

                 $this->Cell(10,10,$number,1,0,'L');
                 $this->Cell(30,10,$counsNo,1,0,'L');
                 $this->Cell(60,10,$counsName,1,0,'L');
                 $this->Cell(30,10,$awaydate,1,0,'L');
                 $this->Cell(30,10,$awaytm,1,0,'L');
                 $this->Cell(30,10,$dateavalbl,1,0,'L');
                 $this->Cell(30,10,$timeavalbl,1,0,'L');
                 $this->Cell(60,10,$reason,1,0,'L');
                 $this->Ln();
                 $number++;

             }

             $this->SetFont('Times','',15);
             $this->cell(276,10,'Records For The Selected Period Between '.$from.' And '.$to,0,0,'C');
         }

     }


 }

 if(isset($_GET['print'])) {

     $from=$_GET['from'];
     $to=$_GET['to'];

     $myReport = new ScheduleReport();
     $myReport->AliasNbPages();
     $myReport->AddPage('L', 'A4', 0);
     $myReport->headerTable();
     $myReport->getRecords($from,$to);
     $myReport->Output();

 }