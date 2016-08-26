

<?php 
if($this->session->flashdata('register')) : ?>

    <p class="alert alert-dismissable alert-success">
        <?php echo $this->session->flashdata('register'); ?>
    </p>
    
    
<?php elseif($this->session->flashdata('login_succesful')) :  ?>
    
    <p class="alert alert-dismissable alert-success">
        <?php echo $this->session->flashdata('login_succesful'); ?>
    </p>
    
    
<?php elseif($this->session->flashdata('noaccess')) :  ?>
    
    <p class="alert alert-dismissable alert-warning">
        <?php echo $this->session->flashdata('noaccess'); ?>
    </p>
    
    
    
<?php elseif($this->session->flashdata('logout')) :  ?>
    
    <p class="alert alert-dismissable alert-success">
        <?php echo $this->session->flashdata('logout', 'You have to logout.'); ?>
    </p>

<?php endif; ?>

    <h1>Welcome to TODO App</h1>

    <p>
        Assertively build top-line results through customized leadership skills. Completely underwhelm multifunctional vortals whereas exceptional manufactured products. Competently seize interdependent processes without.
    </p>