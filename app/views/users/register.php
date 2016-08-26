<div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><strong>Don't Have Account? Sign Up Now!</strong></h3>
            <div style="float:right; font-size: 80%; position: relative; top:-10px">
                <a href="#">Forgot password?</a>
            </div>
        </div>
        <div class="panel-body">
            <?php echo form_open('users/register'); ?>
            <form role="form">
                
                <!-- ERROR HANDLING -->
                <?php if(validation_errors()) :  ?>
                <div class="alert alert-danger">
                    <a class="close" data-dismiss="alert" href=
                    "#">×</a><?php echo validation_errors(); ?>
                </div>
                <?php endif; ?>
                
                
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="form-group">
                            <?php 
                            $data   =   array(  'class'         =>  'form-control',
                                                'id'            =>  'first_name',
                                                'name'          =>  'first_name',
                                                'placeholder'   =>  'First Name',
                                                'tabindex'      =>  '1',
                                            );
                            ?>
                            <?php echo form_input($data); ?>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="form-group">
                            <?php 
                            $data   =   array(  'class'         =>  'form-control',
                                                'id'            =>  'middle_name',
                                                'name'          =>  'middle_name',
                                                'placeholder'   =>  'Middle Name',
                                                'tabindex'      =>  '1',
                                            );
                            ?>
                            <?php echo form_input($data); ?>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="form-group">
                            <?php 
                            $data   =   array(  'class'         =>  'form-control',
                                                    'id'            =>  'last_name',
                                                    'name'          =>  'last_name',
                                                    'placeholder'   =>  'Last Name',
                                                    'tabindex'      =>  '1',
                                                );
                            ?>
                            <?php echo form_input($data); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <?php 
                    $data   =   array(  'class'         =>  'form-control',
                                        'id'            =>  'display_name',
                                        'name'          =>  'display_name',
                                        'placeholder'   =>  'Display Name',
                                        'tabindex'      =>  '3',
                                    );
                    ?>
                    <?php echo form_input($data); ?>
                </div>
                <div class="form-group">
                    <?php 
                    $data   =   array(  'class'         =>  'form-control',
                                        'id'            =>  'email',
                                        'name'          =>  'email',
                                        'placeholder'   =>  'Email Address',
                                        'tabindex'      =>  '4',
                                    );
                    ?>
                    <?php echo form_input($data); ?>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            <?php 
                            $data   =   array(  'class'         =>  'form-control',
                                                'id'            =>  'password',
                                                'name'          =>  'password',
                                                'placeholder'   =>  'Password',
                                                'tabindex'      =>  '5',
                                            );
                            ?>
                            <?php echo form_password($data); ?>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            <?php 
                            $data   =   array(  'class'         =>  'form-control',
                                                'id'            =>  'password_confirmation',
                                                'name'          =>  'password_confirmation',
                                                'placeholder'   =>  'Confirm Password',
                                                'tabindex'      =>  '6',
                                            );
                            ?>
                            <?php echo form_password($data); ?>
                        </div>
                    </div>
                </div>
                
                
                <?php 
                $data   =   array(  'class'         =>  'btn btn-success',
                                    'name'          =>  'submit',
                                    'value'         =>  'Sign Up',
                                );
                ?>
                <?php echo form_submit($data); ?>
                
                
                <hr style="margin-top:10px;margin-bottom:10px;">
                <div class="form-group">
                    <div style="font-size:85%">
                        have an account! <a href="<?php echo base_url() ?>users/login" onclick=
                        "$('#loginbox').hide(); $('#signupbox').show()">Sign In
                        Here</a>
                    </div>
                </div>
                
            </form>
        </div>
    </div>
</div>