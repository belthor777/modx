<div id="pagespeed_timings"></div>
<div id="pagespeed_caching"></div>

<script type="text/javascript" src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization','version':'1','packages':['corechart']}]}"></script>
<script type="text/javascript">
google.load('visualization', '1', {packages: ['corechart']});
google.setOnLoadCallback(drawChart);

function drawChart() {
	// Timings
	var data1 = new google.visualization.DataTable();
	data1.addColumn('number', 'X');
	data1.addColumn('number', 'Queries Time');
	data1.addColumn('number', 'Parse Time');
	data1.addColumn('number', 'Total');
	data1.addRows([ [[+data]] ]);

	var options1 = {
		width: 1000,
		height: 563,
		hAxis: {
			title: [[+hAxis.title]],
			minValue: 0
		},
		vAxis: {
			title: [[+vAxis.title]],
			minValue: 0,
			viewWindow: {min:0}
		},
		series: {
			1: {curveType: 'function'}
		}
	};

	// Compare Caching technique
	var data2 = google.visualization.arrayToDataTable([
		["Element", "Density", { role: "style" } ],
		["Copper", 8.94, "#b87333"],
		["Silver", 10.49, "silver"],
		["Gold", 19.30, "gold"],
		["Platinum", 21.45, "color: #e5e4e2"]
	]);
	var view2 = new google.visualization.DataView(data2);
	view2.setColumns([0, 1, { calc: "stringify", sourceColumn: 1, type: "string", role: "annotation" }, 2]);

	var options2 = {
		title: "Density of Precious Metals, in g/cm^3",
		width: 600,
		height: 400,
		bar: {groupWidth: "95%"},
		legend: { position: "none" },
	};

	// Generate Charts
	var chart1 = new google.visualization.LineChart(document.getElementById('pagespeed_timings'));
	var chart2 = new google.visualization.ColumnChart(document.getElementById("pagespeed_caching"));

	// Draw Charts
	chart1.draw(data1, options1);
	chart2.draw(view2, options2);
}
</script>
