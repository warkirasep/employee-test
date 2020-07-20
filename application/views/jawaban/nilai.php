<?php $this->load->view('include/headsis') ?>
<body>           
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Nilai</h2>                           
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                
            <div class="row">
                <div class="col-md-12">                
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            NILAI <b><?php echo $user->nama; ?></b>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" >
                                    <thead>
                                        <tr>
                                            <th>No</th>                                            
                                            <th>Tanggal Tes</th>                                            
                                            <th>Materi</th>
                                            <th>Aksi</th>                                                                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $no =1;    
                                        ?>
                                        <?php foreach($nilai as $row): ?>
                                            <tr>
                                                <td><?php  echo $no; ?></td>
                                                <td><?php  echo date('d-m-Y', strtotime($row->tgl_tes)); ?></td>
                                                <td><?php echo $row->paket; ?></td>
                                                <td>
                                                    <a href="<?php echo base_url().'jawaban/dnilai/'.$row->id_jawaban; ?>" class="btn btn-info btn-xs">
                                                        <span class="glyphicon glyphicon-eye-open"></span>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php
                                            $no++;
                                        ?>
                                        <?php endforeach; ?>
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