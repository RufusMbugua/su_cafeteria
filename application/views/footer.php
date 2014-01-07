
<script src='<?php echo base_url(); ?>assets/scripts/bootstrap/bootstrap.min.js' type="text/javascript"></script>
<script src='<?php echo base_url(); ?>assets/datatables/scripts/jquery.dataTables.min.js'></script>
<script src='<?php echo base_url(); ?>assets/scripts/modernizr.js'></script>

<!--script src='assets/scripts/jquery.onepage-scroll.js'></script-->
<script>
	$(document).ready(function() {
		$(".myLi").click(function() {
			$(".myLi").removeClass("active");
			id = $(this).attr("id");
			$("#" + id).addClass("active");
			//$(".main").moveTo(id);
		});
		$('.dataTable').dataTable({
		 "sDom": "<'row'<'span8'l><'span8'f>r>t<'row'<'span8'i><'span8'p>>"
	});
	$('.dataTables_filter label input').addClass('form-control');
$('.dataTables_filter').addClass('form-inline');

$("#popular").load("<?php echo base_url();?>items/popular");
$("#summary").load("<?php echo base_url();?>items/popular");
	}); 
</script>