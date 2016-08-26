<div class="wrap">
    
    
    <p class="form-title">Sign In</p>
    
    <?php
        $attributes = array(
            'class' =>  'login'
        );
    ?>
    
    
    <?php echo form_open('users/login', $attributes); ?>
    
    <!-- ERROR HANDLING -->
    <?php if(validation_errors()) :  ?>
        <div class="alert alert-danger">
        <a class="close" data-dismiss="alert" href=
        "#">×</a><?php echo validation_errors(); ?>
        </div>
    <?php endif; ?>
    
    <?php   //ENTER USERNAME
    $data   =   array(  'name'          =>  'username',
                        'placeholder'   =>  'Enter Username',);
    
    ?>
    <?php echo form_input($data); ?>
    
    
    
    <?php   //ENTER PASSWORD
    $data   =   array(  'name'          =>  'password',
                        'placeholder'   =>  'Enter Password',);
    
    ?>
    <?php echo form_password($data); ?>
    
    
     
    <?php   //SUBMIT
    $data   =   array(  'name'          =>  'submit',
                        'placeholder'   =>  'Enter Password',
                        'value'         =>  'Sign In',
                        'class'         =>  'btn btn-success btn-sm',);
    ?>
    <?php echo form_submit($data); ?>
    
    <?php echo form_close(); ?>
    
</div>