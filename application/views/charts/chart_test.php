<script>
$(function () {
	var dataSource = [
    {region: "Asia", val: 4119626293},
    {region: "Africa", val: 1012956064},
    {region: "Northern America", val: 344124520},
    {region: "Latin America and the Caribbean", val: 590946440},
    {region: "Europe", val: 727082222}
];

$("#chartContainer").dxPieChart({
    dataSource: dataSource,
   
	tooltip: {
		enabled: true,
		format:"millions",
		percentPrecision: 2,
		customizeText: function() { 
			return this.valueText + " - " + this.percentText;
		}
	},
	legend: {
		horizontalAlignment: "right",
		verticalAlignment: "top",
		margin: 0
	},
	series: [{
		type: "doughnut",
		argumentField: "region",
		label: {
			visible: true,
			format: "millions",
			connector: {
				visible: true
			}
		}
	}]
});
});
</script>
<div id="chartContainer" style="height:90%"></div>
