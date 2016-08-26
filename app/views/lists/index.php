


<?php echo heading('List Element', 1) ?>
<p>These are your current lists</p>



<?php foreach ($lists as $list) :  ?>

<div class="panel panel-default">
    
    <div class="panel-heading">
        <a href="<?php  echo base_url(); ?>lists/show/<?php  echo $list->id ?>"><?php   echo $list->list_name;  ?></a>
    </div>
    
    
    <div class="panel-body">
        <?php   echo $list->list_body;  ?>
    </div>
</div>


<?php   endforeach;   ?>



<p><a href="<?php  echo base_url() ?>lists/add">Create a New List.</a></p>