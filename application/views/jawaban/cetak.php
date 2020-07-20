<?php	
	$this->fpdf->FPDF('P','cm','A4');
	$this->fpdf->AliasNbPages();
	$this->fpdf->AddPage();

	$this->fpdf->Image('assets/img/th.png',18,0.7,2);

	$this->fpdf->SetFont('courier','B',11);
	$this->fpdf->Cell(1,1,'THE ATHLETES FOOT' );	
	
	$this->fpdf->SetFont('courier','',9);
	$this->fpdf->Ln(0.5);	
	$this->fpdf->Cell(1,1,'Metrolpolitan Mall Bekasi');
	
	$this->fpdf->Ln(0.5);	
	$this->fpdf->Cell(1,1,'(021) 8848 556');

	$this->fpdf->SetFont('courier','B',10);
	$this->fpdf->Ln(0.5);
	$this->fpdf->Cell(0,1,'DATA NILAI KARYAWAN',0,0,'C');	
	
	$this->fpdf->SetFont('courier','B',9);
	$this->fpdf->Ln(1);
	$this->fpdf->Cell(1.5,0.5,'NO','BT',0,'C');		
	$this->fpdf->Cell(3,0.5,'TANGGAL TES','BT',0,'L');		
	$this->fpdf->Cell(8.5,0.5,'KARYAWAN','BT',0,'L');
	$this->fpdf->Cell(2,0.5,'BENAR','BT',0,'L');
	$this->fpdf->Cell(2,0.5,'SALAH','BT',0,'L');
	$this->fpdf->Cell(2,0.5,'NILAI','BT',0,'L');

 	$this->fpdf->SetFont('courier','',9);
	$no=1;
	foreach($nilai as $kon) {		
		$this->fpdf->Ln(0.5);
		$no++;
	}

	$this->fpdf->Output();
?>