﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url();?>assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
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
                     <h2>Admin</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-xs-6">           
                        <div class="panel panel-primary text-center no-boder bg-color-red">
                            <div class="panel-body">
                                <i class="fa fa-book fa-5x"></i>
                            </div>
                            <div class="panel-footer back-footer-red">
                                <a style="color:white" href="<?php echo base_url();?>paket">MATERI</a>
                            </div>
                        </div>
                    </div>
                <div class="col-md-3 col-sm-4 col-xs-6">           
                        <div class="panel panel-primary text-center no-boder bg-color-blue">
                            <div class="panel-body">
                                <i class="fa fa-book fa-5x"></i>
                            </div>
                            <div class="panel-footer back-footer-blue">
                                <a style="color:white" href="<?php echo base_url();?>soal">SOAL</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-6">           
                        <div class="panel panel-primary text-center no-boder bg-color-green">
                            <div class="panel-body">
                                <i class="fa fa-users fa-5x"></i>
                            </div>
                            <div class="panel-footer back-footer-green">
                                <a style="color:white" href="<?php echo base_url();?>karyawan">KARYAWAN</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-6">           
                        <div class="panel panel-primary text-center no-boder bg-color-blue">
                            <div class="panel-body">
                                <i class="fa fa-user fa-5x"></i>
                            </div>
                            <div class="panel-footer back-footer-blue">
                                <a style="color:white" href="<?php echo base_url();?>user">USER PENGGUNA</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-6">           
                        <div class="panel panel-primary text-center no-boder bg-color-brown">
                            <div class="panel-body">
                                <i class="fa fa-file-text-o fa-5x"></i>
                            </div>
                            <div class="panel-footer back-footer-brown">
                                <a style="color:white" href="<?php echo base_url();?>jawaban">LIHAT NILAI</a>
                            </div>
                        </div>
                    </div>
			</div>
            </div>
            </div>
                
    
    <script src="<?php echo base_url();?>assets/js/jquery-1.10.2.js"></script>
      
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
   
    
   
</body>
</html>
