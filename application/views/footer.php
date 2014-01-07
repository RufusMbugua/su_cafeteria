
<script src='<?php echo base_url(); ?>assets/scripts/bootstrap/bootstrap.min.js' type="text/javascript"></script>
<script src='<?php echo base_url(); ?>assets/datatables/scripts/jquery.dataTables.min.js'></script>
<script src='<?php echo base_url(); ?>assets/scripts/modernizr.js'></script>
<script src='<?php echo base_url(); ?>assets/scripts/globalize.min.js'></script>

<!--script src='assets/scripts/jquery.onepage-scroll.js'></script-->
<script>
	$(document).ready(function() {
		var count=0;
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

$("#add_order").click(function(){
	add_order();
});
$('body').on('click' , 'td.itemName', function() {

 remove_order();
});

function add_order(){
	item_name = $('#item_name').val();
	item_name=encodeURIComponent(item_name);
	//alert(item_name);
	item_quantity = $('#item_quantity').val();
	item_url="<?php echo base_url();?>items/get_cost/"+item_name+"/"+item_quantity;
	
	//alert(item_url);
	table = '#current_order tbody';
	add_row(table,item_name,item_quantity,item_url);	
}

function remove_order(){
	remove_row();
}

function add_row(table,item_name,item_quantity,item_url){
	count++;
	$(table).append('<tr><td class="itemName">'+item_name+'</td><td>'+item_quantity+'</td><td id="item_'+count+'">'+0+'</td></tr>')
	$('#item_'+count).load(item_url);
	$('#item_'+count).delay(2000).queue(function( nxt ) {
		newCost= parseInt($('#item_'+count).text());
		increase_total(newCost);
    	nxt();
	});
	
}
function remove_row(){

	$('#item_'+count).load(item_url);
	$('#item_'+count).delay(2000).queue(function( nxt ) {
		removedCost= parseInt($(this.parent()+":nth-child(3)").text());
		remove_total(removedCost);
		$(this).parent().remove();
    	nxt();
	});
	
}
function increase_total(newCost){
	currentCost=parseInt($("#cost_total").text());
	cost = currentCost+newCost;
	$("#cost_total").text(cost);
}
function reduce_total(removedCost){
	currentCost=parseInt($("#cost_total").text());
	cost = currentCost-removedCost;
	$("#cost_total").text(cost);
}

//Load Graphs
$("#statistical_summary").load("<?php echo base_url();?>clients/statistical_summary");
	}); 
</script>