<?php $this->load->view('include/head') ?>
<body>           
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Hasil Ujian </h2>                           
                    </div>
                </div>              
                 <!-- /. ROW  -->
                <hr />                
                <p><a class="btn btn-success" href="<?php echo base_url();?>jawaban">Kembali</a></p>              
            <div class="row">
                <div class="col-md-12">                
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Hasil UJian No. <?php echo $kode; ?>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <?php $total=0; $no=0; foreach($nilai as $kon) { 
                                    $total += $kon['nilai'];
                                    $jawaban = strtolower($kon['jawaban']);
                                    $no++?>

                                    <p><?php echo $no.". ".$kon['soal'];?></p>                                    
                                    <?php if($kon['jawaban']== $kon['kunci']) { ?>
                                        <p><b>Jawaban : <?php echo $kon['jawaban']." (".$kon[$jawaban].") <span class='label label-primary'>Benar</span>";?></b></p>
                                    <?php } else { ?>
                                        <p><b>Jawaban : <?php echo $kon['jawaban']." (".$kon[$jawaban].") <span class='label label-danger'>Salah</span> Kunci : ".$kon['kunci']." (".$kon[$jawaban].")";?></b></p>
                                    <?php } ?>
                                    <hr>
                                <?php } ?>           

                                <?php echo "<h1>Nilai Anda $total</<h1>" ?>                     
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
            </div>
            </div>
			
<?php $this->load->view('include/footer') ?>
</body>
</html>