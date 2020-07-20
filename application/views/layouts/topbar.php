<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <?php 
            $username = $this->session->userdata('username');
        
        ?>
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url(); ?>">Selamat Datang <?php echo $username;?></a>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right navbar-user">
                <li class="dropdown user-dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $username; ?><b class="caret"></b></a>
                     <ul class="dropdown-menu">
                         
                         <li class="divider"></li>
                         <li><a href="<?php echo base_url(); ?>login/logout" onclick="return confirm('Anda ingin keluar ?');"><i class="fa fa-power-off"></i> Keluar</a></li>
                     </ul>
                 </li>
            </ul>
        </div>
</nav>