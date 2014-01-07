<div class="row">
	<div class="col-md-8">
		<div class="inner">
			<h3>Add Client<i class="fa fa-info-circle pull-right"></i></h3>
			<?php $this -> load -> view('forms/add_client'); ?>
		</div>
	</div>
	<div class="col-md-4">
		<div class="inner">
			<h3>Current Order<i class="fa fa-info-circle pull-right"></i></h3>

			<table table border="0" cellpadding="4" cellspacing="0" class="table-bordered table-striped table-hover" id="current_order">
				<thead>
					<th>Item Name</th><th>Item Quantity</th><th>Cost</th>
				</thead><tbody></tbody>
				<tfoot>
					<tr>
						<th colspan="2">Total</th><td id="cost_total">0</td>
					</tr>
				</tfoot>
			</table>

		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-4">
		<div class="inner">
			<h4>Add to Order<i class="fa fa-info-circle pull-right"></i></h4>
			<?php $this->load->view('forms/add_order')
			?>
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