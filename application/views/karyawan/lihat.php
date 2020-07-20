<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php $this->load->view('include/head') ?>
</head>
<body>
<div id="wrapper">
    <?php $this->load->view('layouts/topbar'); ?>
     <!-- /#page-wrapper -->
 </div>
<body>
    <div id="wrapper">  
    <!-- /. NAV TOP  --> 
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                   <h2>Halaman Lihat Karyawan</h2>                          
               </div>
           </div>
           <!-- /. ROW  -->
           <hr />
           <p><a class="btn btn-success" href="<?php echo base_url();?>karyawan">Kembali</a></p>
           <div class="row">
            <div class="col-md-12">
                <!-- Form Elements -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Lihat Karyawan
                    </div>                    
                    <div class="panel-body">
                            <table class="table table-striped">
                                <tr><th width='30%'>NIP</th><td><?php echo $nip; ?></td></tr>                                
                                <tr><th width='30%'>Nama</th><td><?php echo $nama; ?></td></tr>                                
                                <tr><th width='30%'>Jenis Kelamin</th><td><?php echo $jk; ?></td></tr>                                                          
                            </table>

                   
                    <!-- /. ROW  -->
        <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
        <?php $this->load->view('include/footer') ?>

    </body>
    </html>