







<ul class="nav nav-pills">
  <li role="presentation"><a href="<?php echo base_url() ?>lists/add">Add Tast</a></li>
  <li role="presentation"><a href="<?php echo base_url() ?>lists/edit">Edit Task</a></li>
  <li role="presentation"><a href="<?php echo base_url() ?>lists/delete">Delete Task</a></li>
</ul>


<div class="well well-lg">
    <h2><?php echo $lists->list_name; ?></h2>
    
    <h6><?php echo date("n-j-Y", strtotime($lists->currentdate)); ?></h6>
    <p><?php echo $lists->list_body; ?></p>
</div>