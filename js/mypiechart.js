window.onload = function() {

var chart = new CanvasJS.Chart("chartContainer", {
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	exportEnabled: true,
	animationEnabled: true,
	title: {
		text: ""
	},
	data: [{
		type: "pie",
		startAngle: 25,
		toolTipContent: "<b>{label}</b>: {y}%",
		showInLegend: false,
		legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabel: "{label} - {y}%",
		dataPoints: [
			{ y: 20, label: "Analysis" },
			{ y: 20, label: "Design" },
			{ y: 30, label: "Construction/Coding" },
			{ y: 15, label: "Testing" },
			{ y: 15, label: "Maintenance" }
			
		]
	}]
});
chart.render();

}