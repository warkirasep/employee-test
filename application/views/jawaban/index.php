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

        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Halaman Nilai</h2>   
                        <h5>Selamat Datang ... </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                
            <div class="row">
                <div class="col-md-12">   
                    <p><a href="<?php echo base_url();?>jawaban/cetak" class='btn btn-danger' target='_blank'><i class='fa fa-print'></i> Cetak</a></p>             
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            NILAI KARYAWAN
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>                                            
                                            <th>Tanggal Tes</th>
                                            <th>Karyawan</th>
                                            <th>Paket</th>   
                                            <th>Aksi</th>                                                                                     
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no=0; foreach($nilai as $row) { $no++?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo date('d-m-Y', strtotime($row->tgl_tes)); ?></td>
                                            <td><?php echo $row->nama; ?></td>
                                            <td><?php echo $row->paket; ?></td>                                                                                                                    
                                            <td>
                                                <a class='btn btn-info btn-xs' title='ubah' href="<?php echo base_url().'jawaban/dnilai/'.$row->id_jawaban; ?>">
                                                    <span class="glyphicon glyphicon-edit"></span>
                                                </a>
                                                <a class='btn btn-danger btn-xs' title='hapus' onclick="return confirm('hapus?')" href="<?php echo base_url().'jawaban/dnilai/'.$row->id_jawaban; ?>"><span class="glyphicon glyphicon-trash"></span></a>
                                            </td>
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