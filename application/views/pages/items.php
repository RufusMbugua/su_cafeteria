<div class="row">
	<div class="col-md-4">
		<div class="inner">
			<h3>Add Item <i class="fa fa-info-circle pull-right"></i></h3>
			<?php $this -> load -> view('forms/add_item'); ?>
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
			<?php $this -> load -> view('forms/stock_in'); ?>
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