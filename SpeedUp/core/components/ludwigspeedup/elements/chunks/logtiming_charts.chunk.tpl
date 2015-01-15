<figure class="icaption_center" itemtype="http://schema.org/ImageObject" itemscope="" itemprop="image" style="width:600px">
	<div id="pagespeed_caching"></div>
	<script type="text/javascript" src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization','version':'1','packages':['corechart']}]}"></script>
	<script type="text/javascript">
	google.load('visualization', '1', {packages: ['corechart']});
	google.setOnLoadCallback(drawChart);
	
	function drawChart() {
	
		// Compare Caching technique
		var data2 = google.visualization.arrayToDataTable([
			["Element", "Time", { role: "style" } ],
			[[+data]]
		]);
		var view2 = new google.visualization.DataView(data2);
		view2.setColumns([0, 1, { calc: "stringify", sourceColumn: 1, type: "string", role: "annotation" }, 2]);

		var options2 = {
			title: "Cache Statistics",
			width: 600,
			height: 400,
			bar: {groupWidth: "95%"},
			legend: { position: "none" },
		};
	
		// Generate Charts
		var chart2 = new google.visualization.ColumnChart(document.getElementById("pagespeed_caching"));
	
		// Draw Charts
		chart2.draw(view2, options2);
	}
	</script>
	<figcaption class="center" itemprop="caption"><span class="bold">Graph 1:</span> LudwigSpeedUp Cache Statistics</figcaption>
</figure>