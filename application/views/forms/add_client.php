<?php
$formAttr = '';
echo form_open('clients/add', $formAttr);
?>
<div class="col-lg-6">
	<label>First Name</label>
	<?php echo form_error('client_fname'); ?>
	<div class="input-group">
		<span class="input-group-addon"><i class="fa fa-user"></i></span>
		<input  name="client_fname" type="text" value="<?php echo set_value('client_fname'); ?>" class="form-control" placeholder="First Name">
	</div>
	<label>Email</label>
	<?php echo form_error('client_email'); ?>
	<div class="input-group">
		<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
		<input  name="client_email" type="text" value="<?php echo set_value('client_email'); ?>"  class="form-control" placeholder="Email">
	</div>
	<label>Address</label>
	<?php echo form_error('client_address'); ?>
	<div class="input-group">
		<span class="input-group-addon"><i class="fa fa-home"></i></span>
		<input  name="client_address" type="text" value="<?php echo set_value('client_address'); ?>" class="form-control" placeholder="Adress">
	</div>
	<button form-action="submit" class="btn btn-primary">
		Add
	</button>
</div>
<div class="col-lg-6">
	<label>Last Name</label>
	<?php echo form_error('client_lname'); ?>
	<div class="input-group">
		<span class="input-group-addon"><i class="fa fa-user"></i></span>
		<input  name="client_lname" type="text" value="<?php echo set_value('client_lname'); ?>" class="form-control" placeholder="Last Name">
	</div>
	<label>Phone Number</label>
	<?php echo form_error('client_phone'); ?>
	<div class="input-group">
		<span class="input-group-addon"><i class="fa fa-phone"></i></span>
		<input  name="client_phone" type="text" value="<?php echo set_value('client_phone'); ?>" class="form-control" placeholder="Phone Number">
	</div>
</div>

<?php echo form_close(); ?>