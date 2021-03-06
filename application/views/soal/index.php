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
           <!-- /. NAV TOP  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Halaman Soal</h2>   
                        <h5>Selamat Datang ... </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />

                <ul class="nav nav-pills" role="tablist">
            <div class="row">
                <div class="col-md-12">
                <p><a href="<?php echo base_url();?>soal/create" class='btn btn-success'><i class='fa fa-plus'></i> Tambah Soal</a></p>
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             SOAL
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Soal</th>
                                            <th>Kode Materi</th>
                                            <th>Jawaban A</th>
                                            <th>Jawaban B</th>
                                            <th>Jawaban C</th>
                                            <th>Jawaban D</th>
                                            <th>Jawaban E</th>
                                            <th>Kunci</th>
                                            <th>Stasus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no=0; foreach($soal as $kon) { $no++?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $kon['soal']; ?></td>
                                            <td><?php echo $kon['paket']; ?></td>
                                            <td><?php echo $kon['a']; ?></td>
                                            <td><?php echo $kon['b']; ?></td>
                                            <td><?php echo $kon['c']; ?></td>
                                            <td><?php echo $kon['d']; ?></td>
                                            <td><?php echo $kon['e']; ?></td>
                                            <td><?php echo $kon['kunci']; ?></td>
                                            <td><?php echo $kon['status']; ?></td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            
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
