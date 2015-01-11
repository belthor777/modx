<figure style="width:[[+width]]px;">
	<div id="graph[[+idx]]" style="width:[[+width]]px;height:[[+height]]px;"></div>
	<figcaption class="center"><span class="bold">Graph [[+idx]]:</span> [[+gtitle]] ([[+total_downloads]])</figcaption>
</figure>

<script type="text/javascript" src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization','version':'1','packages':['corechart']}]}"></script>
<script type="text/javascript">
google.load('visualization', '1', {packages: ['corechart']});
google.setOnLoadCallback(drawChart);

function drawChart() {

	// Compare Caching technique
	var data[[+idx]] = google.visualization.arrayToDataTable([
		["Element", "[[+htitle]] ", { role: "style" } ],
		[[+data]]
	]);
	var view[[+idx]] = new google.visualization.DataView(data[[+idx]]);
	view[[+idx]].setColumns([0, 1, { calc: "stringify", sourceColumn: 1, type: "string", role: "annotation" }, 2]);

	var options[[+idx]] = {
		title: "[[+title]]",
		width: [[+width]],
		height: [[+height]],
		bar: {groupWidth: "95%"},
		legend: { position: "none" },
	};

	// Generate and Draw Charts
	var chart[[+idx]] = new google.visualization.ColumnChart(document.getElementById("graph[[+idx]]"));
	chart[[+idx]].draw(view[[+idx]], options[[+idx]]);
}
</script>