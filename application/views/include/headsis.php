<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman User</title>

    <link href="<?php echo base_url();?>/assets/img/the-athletes-foot.jpg" rel="shortcut icon"/>
	
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" />
     
    <link href="<?php echo base_url();?>assets/css/font-awesome.css" rel="stylesheet" />
       
    <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/css/chosen.css" rel="stylesheet"/>
    <style type="text/css">
        .chzn-container-single .chzn-search input{
            width: 100%;
        }
    </style>

<!-- BOOTSTRAP SCRIPTS -->
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="<?php echo base_url();?>assets/js/jquery.js"></script>
<!-- CUSTOM SCRIPTS -->
<script src="<?php echo base_url();?>assets/js/custom.js"></script>
<script src="<?php echo base_url();?>assets/js/chosen.jquery.js"></script>

<script type="text/javascript">
        $(function(){
            $('.chzn-select').chosen();
            $('.chzn-select-deselect').chosen({allow_single_deselect:true});
        });

    </script>
    
</head>
<div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">            
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url(); ?>siswa">Halaman User</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">

                <ul class="nav navbar-nav navbar-right navbar-user">
                    <li class="dropdown user-dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo strtoupper($this->session->userdata('username')); ?><b class="caret"></b></a>
                     <ul class="dropdown-menu">
                         <li class="divider"></li>
                         <li><a href="<?php echo base_url(); ?>login/logout" onclick="return confirm('Anda ingin keluar ?');"><i class="fa fa-power-off"></i> Keluar</a></li>
                     </ul>
                 </li>
             </ul>
         </div>
     </nav>
     <!-- /#page-wrapper -->
 </div>