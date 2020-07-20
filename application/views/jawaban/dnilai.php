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
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">admin</a> 
            </div>
            <div style="color: white;
            padding: 15px 50px 5px 50px;
            float: right;
            font-size: 16px;">
            <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> 
        </div>
    </nav>   
<body>           
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Hasil Tes </h2>                           
                    </div>
                </div>              
                 <!-- /. ROW  -->
                <hr />                
                <p><a class="btn btn-success" href="<?php echo base_url();?>jawaban/nilai">Kembali</a></p>              
            <div class="row">
                <div class="col-md-12">                
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <p class="text-danger"><?php echo $paket->paket; ?></p>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Soal</th>
                                            <th>Jawaban</th>
                                            <th>Hasil</th>
                                            <th>Nilai</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $no = 1;
                                            $benar = 0; 
                                        ?>
                                        <?php foreach($nilai as $row): ?>
                                            <tr>
                                                <td><?php echo $no;?></td>
                                                <td>
                                                    <?php echo $row->soal;?>
                                                    <br>
                                                    <?php echo 'A. '.$row->a; ?>
                                                    <br>
                                                    <?php echo 'B. '.$row->b; ?>
                                                    <br>
                                                    <?php echo 'C. '.$row->c; ?>
                                                    <br>
                                                    <?php echo 'D. '.$row->d; ?>
                                                    <br>
                                                    <?php echo 'E. '.$row->e; ?>
                                                </td>
                                                <td><?php echo $row->jawaban; ?></td>
                                                <td>
                                                    <?php if($row->jawaban == $row->kunci):?>
                                                        <?php 
                                                            $benar += 20;    
                                                        ?>
                                                        <strong>Benar</strong>
                                                    <?php else: ?>
                                                        <strong>Salah</strong>
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <?php if($row->jawaban == $row->kunci):?>
                                                        <strong>20</strong>
                                                    <?php else: ?>
                                                        <strong>0</strong>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>

                                            <?php $no++; ?>
                                        <?php endforeach; ?>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td rowspan="4"><strong>Total Nilai</strong></td>
                                            <td><strong><?php echo $benar; ?></strong></td>
                                        </tr>
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