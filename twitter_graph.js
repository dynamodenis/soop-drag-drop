// Make the hieght of the facebook table and graph the same
const twitterTable = document.querySelector('.twitter__table');
const twitterGraph = document.querySelector('.twitter__graph');
const user = document.querySelector("#user_username");
const user_tweet = document.querySelector("#user_tweet");
const comp1_user = document.querySelector("#comp1_username");
const comp1_tweet = document.querySelector("#comp1_tweet");
const comp2_user = document.querySelector("#comp2_username");
const comp2_tweet = document.querySelector("#comp2_tweet");
const comp3_user = document.querySelector("#comp3_username");
const comp3_tweet = document.querySelector("#comp3_tweet");
const comp4_user = document.querySelector("#comp4_username");
const comp4_tweet = document.querySelector("#comp4_tweet");
const comp5_user = document.querySelector("#comp5_username");
const comp5_tweet = document.querySelector("#comp5_tweet");



twitterTable.style.height = twitterGraph.offsetHeight + 'px';

window.addEventListener("load" , function() {
	const observer = new ResizeObserver(entry => {
		twitterTable.style.height = twitterGraph.offsetHeight + 'px';
	});

	observer.observe(twitterGraph);
});



// Determine the height of the chart based on the hight of the box on the right
google.charts.load("current", { packages: ["corechart", "bar"] });
google.charts.setOnLoadCallback(drawAnnotations);

function drawAnnotations() {
	var data = google.visualization.arrayToDataTable([
		["Restaurants", "Tweets", { role: "style" }],
		[comp5_user.textContent, comp5_tweet.textContent, "fill-color: #b9b9b9;"], // RGB value
		[comp4_user.textContent, comp4_tweet.textContent, "fill-color: #b9b9b9;"], // English color name
		[comp3_user.textContent, comp3_tweet.textContent, "fill-color: #b9b9b9;"],
		[comp2_user.textContent, comp2_tweet.textContent, "fill-color: #b9b9b9;"],
		[comp1_user.textContent, comp1_tweet.textContent, "fill-color: #b9b9b9;"],
		["", , ""],
		[user.textContent, user_tweet.textContent, "fill-color: #1da1f2;"], // CSS-style declaration
	]);

	var view = new google.visualization.DataView(data);
	view.setColumns([
		0,
		1,
		{ calc: "stringify", sourceColumn: 1, type: "string", role: "annotation" },
		2,
	]);

	var options = {
		bars: "horizontal",
		width: "100%",
		height: 310,
		bar: { groupWidth: "40%" },
		legend: { position: 'top'}
	};

	var chart = new google.visualization.BarChart(
		document.getElementById("chart__twitter")
	);
	chart.draw(data, google.charts.Bar.convertOptions(options));
}
