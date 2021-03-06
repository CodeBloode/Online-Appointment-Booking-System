<?php
require "../../pdf/generatepdf/fpdf.php";
 class SessionsReport extends FPDF{

     function Header()
     {
         $this->Image('../../images/logo.jpg',10,6,20);
         $this->SetFont('Times','B',15);
         $this->cell(276,10,'EGERTON UNIVERSITY DEAN OF STUDENT',0,0,'C');
         $this->Ln();
         $this->cell(276,10,'REPORT FOR STUDENTS WHO WERE COUNSELLED',0,0,'C');
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
        $this->Cell(20,10,'No.',1,0,'C');
        $this->Cell(45,10,'Registration Number',1,0,'C');
        $this->Cell(60,10,'Student Names.',1,0,'C');
        $this->Cell(40,10,'Counsellor Booked.',1,0,'C');
        $this->Cell(40,10,'Date',1,0,'C');
        $this->Cell(35,10,'Start Time',1,0,'C');
        $this->Cell(35,10,'End Time',1,0,'C');
        $this->Ln();

    }


    function getRecords($from,$to)
    {
        //$myConnection = new SessionsReport();
        $query="select * from appointments.sessions where date BETWEEN ? AND ?";
        $records =$this->dbConnection()->prepare($query);
        $records->execute([$from,$to]);

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
                $regno=$row['regNo'];
                $stdnt = $row['studentNm'];
                $cnsl = $row['counsNo'];
                $dt = $row['date'];
                $s_tm = $row['startTime'];
                $e_tm = $row['endTime'];

                $this->Cell(20,10,$number,1,0,'L');
                $this->Cell(45,10,$regno,1,0,'L');
                $this->Cell(60,10,$stdnt,1,0,'L');
                $this->Cell(40,10,$cnsl,1,0,'L');
                $this->Cell(40,10,$dt,1,0,'L');
                $this->Cell(35,10,$s_tm,1,0,'L');
                $this->Cell(35,10,$e_tm,1,0,'L');
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

     $myReport = new SessionsReport();
     $myReport->AliasNbPages();
     $myReport->AddPage('L', 'A4', 0);
     $myReport->headerTable();
     $myReport->getRecords($from,$to);
     $myReport->Output();

 }