<div class="row">
	<div class="col-md-4">
		<div class="inner">
			<h3>Add Item <i class="fa fa-info-circle pull-right"></i></h3>

			<?php
			$formAttr = '';
			echo form_open('items/add', $formAttr);
			?>
			<label>Item Name</label>
			<?php echo form_error('item_name'); ?>
			<div class="input-group">
				<span class="input-group-addon"></span>
				<input name="item_name" type="text" class="form-control" value="<?php echo set_value('item_name'); ?>" placeholder="Item Name">
			</div>
			<label>Item Description</label>
			<?php echo form_error('item_description'); ?>
			<div class="input-group">
				<span class="input-group-addon"></span>
				<textarea name="item_description" type="text" class="form-control" value="<?php echo set_value('item_description'); ?>" placeholder="Item Description"></textarea>
			</div>
			<label>Item Price</label>
			<?php echo form_error('item_unit_cost'); ?>
			<div class="input-group">
				<span class="input-group-addon"></span>
				<input name="item_unit_cost" type="number" class="form-control" value="<?php echo set_value('item_unit_cost'); ?>" placeholder="Item Price">
			</div>
			<button form-action="submit" class="btn btn-primary">
				Add
			</button>
			<?php echo form_close(); ?>
		</div>
	</div>
	<div class="col-md-8">
		<div class="inner">
			<h3>Current Stock<i class="fa fa-info-circle pull-right"></i></h3>
			<form>
			<?php echo $stock_table; ?>
			</form>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-4">
		<div class="inner">
			<h4>Stock In <i class="fa fa-info-circle pull-right"></i></h4>

			<?php
			$formAttr = '';
			echo form_open('items/stock_in', $formAttr);
			?>
			<label name="ItemSName">Item Name</label>
			<?php echo form_error('item_sname'); ?>
			<div class="input-group">
				<span class="input-group-addon"></span>
				<select name="item_sname" type="text" class="form-control" placeholder="Item Name">
					<?php echo $item_list; ?>
				</select>
			</div>
			<label name="ItemSQuantity">Item Quantity</label>
			<?php echo form_error('item_quantity'); ?>
			<div class="input-group">
				<span class="input-group-addon"></span>
				<input type="number" name="item_squantity" type="text" class="form-control" placeholder="Item Quantity">
			</div>
			<button form-action="submit" class="btn btn-primary">
				Add
			</button>
			<?php echo form_close(); ?>
		</div>
	</div>
	<div class="col-md-4">
		<div class="inner">
			<h4>...<i class="fa fa-info-circle pull-right"></i></h4>

		</div>
	</div>
	<div class="col-md-4">
		<div class="inner">
			<h4>...<i class="fa fa-info-circle pull-right"></i></h4>

		</div>
	</div>

</div>