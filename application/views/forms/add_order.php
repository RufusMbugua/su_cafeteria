<form>
	<label name="ItemName">Item Name</label>
	<?php echo form_error('item_name'); ?>
	<div class="input-group">
		<span class="input-group-addon"></span>
		<select id="item_name" name="item_name" type="text" class="form-control" placeholder="Item Name">
			<?php echo $this -> item_list; ?>
		</select>
	</div>
	<label name="ItemQuantity">Item Quantity</label>
	<?php echo form_error('item_quantity'); ?>
	<div class="input-group">
		<span class="input-group-addon"></span>
		<input id="item_quantity" type="number" name="item_quantity" class="form-control" placeholder="Item Quantity">
	</div>
	<a id="add_order" class="btn btn-primary">
		Add
	</a>
</form>