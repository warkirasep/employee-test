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
           <!-- /. NAV TOP  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Halaman Materi Soal</h2>   
                        <h5>Selamat Datang ... </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />

                <ul class="nav nav-pills" role="tablist">
                <div class="row">
                    <div class="col-md-6">
                  <!--   Kitchen Sink -->
                  <p>
                    <?php if($userdata['level'] == 'admin'):?>
                    <a href="<?php echo base_url();?>paket/create" class='btn btn-success'><i class='fa fa-plus'></i> Tambah Materi</a></p>
                    <?php endif; ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Paket Soal
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Materi</th>
                                            <th>Kategori</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no=0; foreach($paket as $pak) { $no++ ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $pak['id_paket']; ?></td>
                                            <td><?php echo $pak['paket']; ?></td>
                                            <td>
                                                <a class='btn btn-info btn-xs' title='lihat' href="<?php echo base_url();?>paket/lihat/<?php echo $pak['id_paket']; ?>"><span class="glyphicon glyphicon-eye-open"></span></a>
                                                <?php if($userdata['level'] == 'admin'):?>
                                                    <a class='btn btn-danger btn-xs' title='hapus' onclick="return confirm('Anda yakin ?')" href="<?php echo base_url();?>paket/delete/<?php echo $pak['id_paket']; ?>"><span class="glyphicon glyphicon-trash"></span></a>
                                                <?php endif; ?>
                                            </td>
                                        <tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                                
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
            </div>            
            </div>
            </div>
			
<?php $this->load->view('include/footer') ?>
</body>
</html>
