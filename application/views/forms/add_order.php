<?php
$formAttr = '';
echo form_open('items/add', $formAttr);
?>
<label name="ItemName">Item Name</label>
<?php echo form_error('item_name'); ?>
<div class="input-group">
	<span class="input-group-addon"></span>
	<select name="item_name" type="text" class="form-control" placeholder="Item Name">
		<?php echo $item_list; ?>
	</select>
</div>
<label name="ItemQuantity">Item Quantity</label>
<?php echo form_error('item_quantity'); ?>
<div class="input-group">
	<span class="input-group-addon"></span>
	<input type="number" name="item_quantity" type="text" class="form-control" placeholder="Item Quantity">
</div>
<button form-action="submit" class="btn btn-primary">
	Add
</button>
<?php echo form_close(); ?>