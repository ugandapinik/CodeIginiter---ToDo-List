<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>



<?php echo doctype('html5') ?>
<html lang="en">
<head>
    
    <?php
    
        $meta = array(
            array('name'  => 'charset', 'content' => 'utf-8'),
            array('name'  => 'viewport', 'content' =>  'width=device-width, initial-scale=1'),
            
        );
        
        echo meta($meta);
    ?>
    
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $title ?></title>
    <!-- Bootstrap -->
    <?php echo link_tag('resources/css/bootstrap.css'); ?>
    <?php echo link_tag('resources/css/style.css'); ?>
    
</head>
<body>
    
    <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url(); ?>">Brand</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              
            <ul class="nav navbar-nav navbar-right">
                <!-- home -->
                <li class="active"><a href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a></li>
              
  <?php if($this->session->userdata('logged_in')) :  ?>
                <!-- Logout  -->
                <li><a href="<?php echo base_url(); ?>lists">List</a></li>
                <li><a href="<?php echo base_url(); ?>users/logout">Login Out</a></li>

                <?php else :  ?>
                <!-- Register -->
                <li><a href="<?php echo base_url(); ?>users/register">Register</a></li>
                <!-- Login -->
                <li><a href="<?php echo base_url(); ?>users/login">Login</a></li>
                <?php endif; ?>
                
                
              
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <!-- Main Content -->
            <div class="main_content">
                
                <?php $this->load->view($main_content); ?>
                
            </div>
            <!--/. Main Content -->
        </div>
    </div>
</div>

    
    
    
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <?php echo script_tag('resources/js/bootstrap.min.js'); ?>
  </body>
</html>