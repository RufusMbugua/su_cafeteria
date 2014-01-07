<script>
$(function () {
var dataSource = <?php echo $dataSource;?>;

$("#"+<?php echo $chartID?>).dxChart({
    dataSource: dataSource,
    commonSeriesSettings: {
        type: <?php echo $chartType?>
    },
    series: <?php echo $series;?>,
    argumentAxis:{
        grid:{
            visible: false
        }
    },
    tooltip:{
        enabled: true
    },
    //title: "Historic, Current and Future Population",
    legend: {
        verticalAlignment: "bottom",
        horizontalAlignment: "center"
    },
    commonPaneSettings: {
        border:{
            visible: true,
            right: false
        }       
    }
});
});
</script>
<div id="<?php echo $chartID?>" class="graph">
	
</div>