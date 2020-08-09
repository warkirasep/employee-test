<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <?php $this->load->view('include/head') ?>
    <script src="<?php echo base_url('assets/js/tinymce.min.js'); ?>" referrerpolicy="origin"></script>
    <script>tinymce.init({
      selector:'textarea'
    });</script>
  </head>
<body>
  <div id="wrapper">
    <?php $this->load->view('layouts/topbar'); ?>
    <!-- /#page-wrapper -->
  </div>
  <div id="wrapper">
    <!-- /. NAV TOP  -->
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
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
              <div class="panel-heading">
                Tambah Materi
              </div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-6">
                    <form role="form" action="<?php echo base_url(); ?>paket/insert" method="post">
                      <div class="form-group">
                        <label>Paket</label>
                        <input class="form-control" name="paket" required />
                      </div>

                      <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea name="deskripsi" id="" cols="30" rows="30" class="form-control"></textarea>
                      </div>
                      <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a class="btn btn-default" href="<?php echo base_url(); ?>paket">Batal</a>
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