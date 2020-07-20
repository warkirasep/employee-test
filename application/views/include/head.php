<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Halaman Admin</title>


<link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" />

<link href="<?php echo base_url();?>assets/css/font-awesome.css" rel="stylesheet" />
    
<link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet" />
<link href="<?php echo base_url();?>assets/css/chosen.css" rel="stylesheet"/>
<link href="<?php echo base_url();?>assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
<style type="text/css">
    .chzn-container-single .chzn-search input{
        width: 100%;
    }
</style>


<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

<script src="<?php echo base_url();?>assets/js/jquery.js"></script>

<script src="<?php echo base_url();?>assets/js/custom.js"></script>
<script src="<?php echo base_url();?>assets/js/chosen.jquery.js"></script>

<script type="text/javascript">
    $(function(){
        $('.chzn-select').chosen();
        $('.chzn-select-deselect').chosen({allow_single_deselect:true});
    });

</script>