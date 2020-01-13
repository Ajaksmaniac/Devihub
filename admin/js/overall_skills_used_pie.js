var mydata ;

//opens json file
var request = new XMLHttpRequest();
request.open("GET","skilldata.json", false);
request.send(null);
var mydata = JSON.parse(request.responseText);
function mycomparator(a,b) {
	return parseInt(a.Known, 10) - parseInt(b.Known, 10);
  }
  mydata.sort(mycomparator)
  mydata.reverse();
var other = 0;
  for(var i= 5; i<=21;i++){
	other +=parseInt(mydata[i].Known,10);
  }
       //config for pie chart
		var config1 = {
			type: 'pie',
			data: {
				datasets: [{
					data:  [
                        mydata[0].Known,
						mydata[1].Known,
                        mydata[2].Known,
                        mydata[3].Known,
						mydata[4].Known,
						other
                        /*mydata[5].Known,
                        mydata[6].Known,
                        mydata[7].Known,
                        mydata[7].Known,
                        mydata[8].Known,
                        mydata[9].Known,
                        mydata[10].Known,
                        mydata[11].Known,
                        mydata[12].Known,
                        mydata[13].Known,
                        mydata[14].Known,
                        mydata[15].Known,
                        mydata[16].Known,
                        mydata[18].Known,
                        mydata[19].Known,
                        mydata[20].Known,
                        mydata[21].Known*/
                     
                       
                        
                ],
					backgroundColor: [
						
					
                        window.chartColors.blue,
                        window.chartColors.red,
						window.chartColors.orange,
						window.chartColors.yellow,
						window.chartColors.green,
                        window.chartColors.gray,
                       
						
					],
					label: ''
				}],
				labels: [
                        mydata[0].Name,
						mydata[1].Name,
                        mydata[2].Name,
                        mydata[3].Name,
						mydata[4].Name,
						"Other"
                        /*mydata[5].Name,
                        mydata[6].Name,
                        mydata[7].Name,
                        mydata[7].Name,
                        mydata[8].Name,
                        mydata[9].Name,
                        mydata[10].Name,
                        mydata[11].Name,
                        mydata[12].Name,
                        mydata[13].Name,
                        mydata[14].Name,
                        mydata[15].Name,
                        mydata[16].Name,
                        mydata[18].Name,
                        mydata[19].Name,
                        mydata[20].Name,
                        mydata[21].Name*/
				]
			},
			options: {
				responsive: true
			}
		};

		window.onload = function() {
			var ctx1 = document.getElementById('pie-chart-area').getContext('2d');
			window.myPie = new Chart(ctx1, config1);
		};

		/*document.getElementById('randomizeData').addEventListener('click', function() {
			config1.data.datasets.forEach(function(dataset) {
				dataset.data = dataset.data.map(function() {
					return randomScalingFactor();
				});
			});

			window.myPie.update();
		});*/

		var colorNames = Object.keys(window.chartColors);
		/*document.getElementById('addDataset').addEventListener('click', function() {
			var newDataset = {
				backgroundColor: [],
				data: [],
				label: 'New dataset ' + conconfig1fig.data.datasets.length,
			};

			for (var index = 0; index < config1.data.labels.length; ++index) {
				newDataset.data.push(randomScalingFactor());

				var colorName = colorNames[index % colorNames.length];
				var newColor = window.chartColors[colorName];
				newDataset.backgroundColor.push(newColor);
			}

			config1.data.datasets.push(newDataset);
			window.myPie.update();
		});*/

		/*document.getElementById('removeDataset').addEventListener('click', function() {
			config1.data.datasets.splice(0, 1);
			window.myPie.update();
		});*/