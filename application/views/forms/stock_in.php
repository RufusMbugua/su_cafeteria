<?php
$formAttr = '';
echo form_open('items/stock_in', $formAttr);
?>
<label name="ItemSName">Item Name</label>
<?php echo form_error('item_sname'); ?>
<div class="input-group">
	<span class="input-group-addon"></span>
	<select name="item_sname" type="text" class="form-control" placeholder="Item Name">
		<?php echo $this -> item_list; ?>
	</select>
</div>
<label name="ItemSQuantity">Item Quantity</label>
<?php echo form_error('item_quantity'); ?>
<div class="input-group">
	<span class="input-group-addon"><i class="fa fa-sort-numeric-asc"></i></span>
	<input type="number" name="item_squantity" type="text" class="form-control" placeholder="Item Quantity">
</div>
<button form-action="submit" class="btn btn-primary">
	Add
</button>
<?php echo form_close(); ?>