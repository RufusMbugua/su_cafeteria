<?php
$formAttr = '';
echo form_open('items/add', $formAttr);
?>
<label>Item Name</label>
<?php echo form_error('item_name'); ?>
<div class="input-group">
	<span class="input-group-addon"><i class="fa"></i></span>
	<input name="item_name" type="text" class="form-control" value="<?php echo set_value('item_name'); ?>" placeholder="Item Name">
</div>
<label>Item Description</label>
<?php echo form_error('item_description'); ?>
<div class="input-group">
	<span class="input-group-addon"><i class="fa"></i></span>
	<textarea name="item_description" type="text" class="form-control" value="<?php echo set_value('item_description'); ?>" placeholder="Item Description"></textarea>
</div>
<label>Item Price</label>
<?php echo form_error('item_unit_cost'); ?>
<div class="input-group">
	<span class="input-group-addon"><i class="fa fa-money"></i></span>
	<input name="item_unit_cost" type="number" class="form-control" value="<?php echo set_value('item_unit_cost'); ?>" placeholder="Item Price">
</div>
<button form-action="submit" class="btn btn-primary">
	Add
</button>
<?php echo form_close(); ?>