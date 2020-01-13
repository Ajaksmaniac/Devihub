        var request = new XMLHttpRequest();
        request.open("GET","visits.json", false);
        request.send(null);
        var mydata = JSON.parse(request.responseText);
		var MONTHS = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
		var color = Chart.helpers.color;
		var barChartData = {
			labels:/* ['F1', 'F2', 'F3', 'F4', 'F8']*/MONTHS,
			datasets: [{
				
				label: 'Visits',
				backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
				borderColor: window.chartColors.blue,
				borderWidth: 1,
				data: [
                    mydata[0].Visits,
                    mydata[1].Visits,
                    mydata[2].Visits,
                    mydata[3].Visits,
                    mydata[4].Visits,
                    mydata[5].Visits,
                    mydata[6].Visits,
                    mydata[7].Visits,
                    mydata[8].Visits,
                    mydata[9].Visits,
                    mydata[10].Visits,
                    mydata[11].Visits

                
				]
			}]

		};

		window.onload = function() {
			var ctx = document.getElementById('canvas').getContext('2d');
			window.myBar = new Chart(ctx, {
				type: 'line',
				data: barChartData,
				options: {
					responsive: true,
					legend: {
						position: 'top',
					},
					title: {
						display: true,
						text: 'Visits per month'
					}
				}
			});

		};
