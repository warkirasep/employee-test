<!DOCTYPE html>
<html >
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Admin</title>
  
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" />
     
    <link href="<?php echo base_url();?>assets/css/font-awesome.css" rel="stylesheet" />
    
       
    <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/css/chosen.css" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="assets/css/jquery.countdown.css" />
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/img/favicon.gif" type="image/x-icon">
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


<script src="<?php echo base_url(); ?>asset/js/jquery-1.10.2.min.js"></script>
<script src="<?php echo base_url(); ?>asset/js/mundur.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.countdown.min.js"></script>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>manatap/css/ui-lightness/jquery-ui-1.8.2.custom.css" />  
	</head>
 
    
</head>
<!--/ waktu mundur -->
<div id="wrapper">
      <div class="panel panel-primary">
            
            
      </div>
</div>
      

    
    <div id="wrapper"></div>
        <div id="page-inner">           
           <div class="row">
            <div class="col-md-12">                              
                <div class="panel panel-primary">
                    <div class="panel-heading">
                     <center><h3>Sistem T A F</h3></center>
                    </div>
                    <div class="panel-body">
                        <div id="morris-bar-chart"></div>
                        <div class="row">
                            <div class="col-md-12">
                               
                               
                        <div class="panel-body" style="height: 800px; overflow: auto;">
                             <form role="form" action="<?php echo base_url(); ?>jawaban/jawab" method="post" onsubmit="return confirm('Anda Yakin ?')">
                                <input type="hidden" name="id_paket" value="<?php echo $id_paket; ?>">
                                <?php
                                    $radio_button = 0;
                                    $no = 1;
                                ?>
                                <?php foreach($soal as $soal): ?>
                                    <div class="form-group">
                                        <b><?php echo $no; ?>. </b><label>
                                        <?php echo $soal['soal']; ?></label>
                                        <input type='hidden' name='soal[]' value='<?php echo $soal['id_soal']; ?>'/>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="jawaban[<?php echo $radio_button ?>]" value="A" required/><b>A. </b> <?php echo $soal['a']; ?>
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="jawaban[<?php echo $radio_button ?>]" value="B" required/><b>B. </b><?php echo $soal['b']; ?>
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="jawaban[<?php echo $radio_button ?>]" value="C" required/><b>C. </b><?php echo $soal['c']; ?>
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="jawaban[<?php echo $radio_button ?>]" value="D" required/><b>D. </b><?php echo $soal['d']; ?>
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="jawaban[<?php echo $radio_button ?>]" value="E" required/><b>E. </b><?php echo $soal['e']; ?>
                                            </label>
					                   </div>
				    </div>
                                <?php
                                    $no++;
                                    $radio_button++;
                                ?>
                                <?php endforeach; ?>                               
                                 <button type="submit" class="btn btn-primary">Selesai</button> 
                                </form>
                                <br />
                        </div>

                    </div>


    <script type="text/javascript">
			$(function(){
				$("#demoForm").formwizard({ 
				 	formPluginEnabled: true,
				 	validationEnabled: true,
				 	focusFirstInput : true,
				 	formOptions :{
						success: function(data){$("#status").fadeTo(500,1,function(){ $(this).html("You are now registered!").fadeTo(5000, 0); })},
						beforeSubmit: function(data){$("#data").html("data sent to the server: " + $.param(data));},
						dataType: 'json',
						resetForm: true
				 	},
				 	inAnimation : {height: 'show'},
			        outAnimation: {height: 'hide'},
					inDuration : 700,
					outDuration: 700,
					easing: 'easeOutBounce'	//see e.g. http://gsgd.co.uk/sandbox/jquery/easing/ for information on easing
				 }
				);
  		});
		  </script>
		  
<script type="text/javascript" src="assets/js/jquery.plugin.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.countdown.min.js"></script>
<!-- /. WRAPPER  -->
<?php $this->load->view('include/footer') ?>

</body>
</html>
