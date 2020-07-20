<?php $this->load->view('include/head') ?>
<body>
    <div id="wrapper">  
    <!-- /. NAV TOP  --> 
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                   <h2>Halaman Lihat Materi</h2>                          
               </div>
           </div>
           <!-- /. ROW  -->
           <hr />
           <p><a class="btn btn-success" href="<?php echo base_url();?>paket">Kembali</a></p>
           <div class="row">
            <div class="col-md-12">
                <!-- Form Elements -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Lihat Materi
                    </div>                    
                    <div class="panel-body">
                            <table class="table table-striped">
                                <tr><th width='30%'>Kode Materi</th><td><?php echo $id_paket; ?></td></tr>                        
                                <tr><th width='30%'>Nama Materi</th><td><?php echo $paket; ?></td></tr>             
                                <tr><th width='30%'>Deskripsi</th><td><?php echo $deskripsi; ?></td></tr>             
                            </table>

                   
                    <!-- /. ROW  -->
        <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
        <?php $this->load->view('include/footer') ?>

    </body>
    </html>