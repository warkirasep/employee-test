<?php $this->load->view('include/head') ?>
<body>
  <div id="wrapper">    
  <!-- /. NAV TOP  --> 
  <!-- /. NAV SIDE  -->
  <div id="page-wrapper" >
    <div id="page-inner">
      <div class="row">
        <div class="col-md-12">
         <h2>Halaman Materi Soal</h2>                          
       </div>
     </div>
     <!-- /. ROW  -->
     <hr />
     <div class="row">
      <div class="col-md-12">
        <!-- Form Elements -->
        <div class="panel panel-default">
          
          <div class="panel-body">
            <div class="row">
              <div class="col-md-6">
                <form role="form" action="<?php echo base_url(); ?>jawaban/test" method="get">
                  <div class="form-group">
                    <label>Pilih Materi Soal</label>
                    <select name="materi_id" class="form-control">
                    	<?php foreach($materi as $row): ?>
                    		<option value="<?php echo $row->id_paket; ?>"><?php echo $row->paket; ?></option>
                    	<?php endforeach; ?>
                    </select>
                  </div>
                  <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Cari</button>
                  </div> 
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- End Form Elements -->
    </div>
  </div>
  <!-- /. ROW  -->
  <!-- /. ROW  -->
</div>
<!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<?php $this->load->view('include/footer') ?>

</body>
</html>
