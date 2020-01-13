

//opens json file
var request = new XMLHttpRequest();
request.open("GET","male_female_comparision.json", false);
request.send(null);
var mydata = JSON.parse(request.responseText);


       //config for pie chart
		var config2 = {
			type: 'pie',
			data: {
				datasets: [{
					data:  [
                        mydata[0].Male,
						mydata[0].Female
                       
                     
                       
                        
                ],
					backgroundColor: [
						
					
                        window.chartColors.blue,
                        window.chartColors.red
						
					],
					label: ''
				}],
				labels: [
                        "Male",
                        "Female"
				]
			},
			options: {
				responsive: true,
				legend: {
					position: 'top',
				},
				title: {
					display: true,
					text: "Male/Female"
				}
			}
		};

		
		

		//opens json file
		var request = new XMLHttpRequest();
		request.open("GET","skilldata.json", false);
		request.send(null);
		var mydata1 = JSON.parse(request.responseText);
		function mycomparator(a,b) {
			return parseInt(a.Known, 10) - parseInt(b.Known, 10);
		  }
		  mydata1.sort(mycomparator)
		  mydata1.reverse();
		 other = 0;
		  for(var i= 5; i<=21;i++){
			other +=parseInt(mydata1[i].Known,10);
		  }
			   //config for pie chart
				var config1 = {
					
					type: 'pie',
					data: {
						datasets: [{
							data:  [
								mydata1[0].Known,
								mydata1[1].Known,
								mydata1[2].Known,
								mydata1[3].Known,
								mydata1[14].Known,
								other															
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
								mydata1[0].Name,
								mydata1[1].Name,
								mydata1[2].Name,
								mydata1[3].Name,
								mydata1[4].Name,
								"Other"							
						]
					},
					options: {
						responsive: true,
						legend: {
							position: 'top',
						},
						title: {
							display: true,
							text: "Skills used"
						}
					}
				};

				var request = new XMLHttpRequest();
				request.open("GET","UsersJoining.json", false);
				request.send(null);
				 var mydata3 = JSON.parse(request.responseText);
				var MONTHS = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
				var color = Chart.helpers.color;
				var barChartData = {
					
					labels:/* ['F1', 'F2', 'F3', 'F4', 'F8']*/MONTHS,
					datasets: [{
						
						label: 'Joins',
						backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
						borderColor: window.chartColors.blue,
						borderWidth: 1,
						data: [
							mydata3[0].Joins,
							mydata3[1].Joins,
							mydata3[2].Joins,
							mydata3[3].Joins,
							mydata3[4].Joins,
							mydata3[5].Joins,
							mydata3[6].Joins,
							mydata3[7].Joins,
							mydata3[8].Joins,
							mydata3[9].Joins,
							mydata3[10].Joins,
							mydata3[11].Joins
				
						
						]
					}]
				
				};
				
				var request = new XMLHttpRequest();
				request.open("GET","visits.json", false);
				request.send(null);
				var mydata4 = JSON.parse(request.responseText);
				var MONTHS = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
				var color = Chart.helpers.color;
				var barChartData1 = {
					labels:/* ['F1', 'F2', 'F3', 'F4', 'F8']*/MONTHS,
					datasets: [{
						
						label: 'Visits',
						backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
						borderColor: window.chartColors.blue,
						borderWidth: 1,
						data: [
							mydata4[0].Visits,
							mydata4[1].Visits,
							mydata4[2].Visits,
							mydata4[3].Visits,
							mydata4[4].Visits,
							mydata4[5].Visits,
							mydata4[6].Visits,
							mydata4[7].Visits,
							mydata4[8].Visits,
							mydata4[9].Visits,
							mydata4[10].Visits,
							mydata4[11].Visits
		
						
						]
					}]
		
				};
		
				
		


				var request = new XMLHttpRequest();
				request.open("GET","education_level.json", false);
				request.send(null);
				var mydataE = JSON.parse(request.responseText);
				var color = Chart.helpers.color;
				var barChartData2 = {
					labels: ['Academic Studies', 'High School', 'Elementary Schools', 'Selft Tought'],
					datasets: [{
						label: 'Male',
						backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
						borderColor: window.chartColors.blue,
						borderWidth: 1,
						data: [
							mydataE[0].ASM, mydataE[0].HSM, mydataE[0].ESM, mydataE[0].STM
						]
					}, {
						label: 'Female',
						backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
						borderColor: window.chartColors.red,
						borderWidth: 1,
						data: [
							mydataE[0].ASF,mydataE[0].HSF, mydataE[0].ESF, mydataE[0].STF
						]
					}]
		
				};


				var request = new XMLHttpRequest();
				request.open("GET","user_ages.json", false);
				request.send(null);
				var mydataA = JSON.parse(request.responseText);
				var color = Chart.helpers.color;
				var barChartData3 = {
					labels: ['Over 18',
						'Over 25',
						'Over 35',
						'Over 45',
						'Over 50'],
					datasets: [{
						label: 'Users',
						backgroundColor: color(window.chartColors.green).alpha(0.5).rgbString(),
						borderColor: window.chartColors.green,
						borderWidth: 1,
						data: [
							mydataA[0].count, mydataA[1].count, mydataA[2].count, mydataA[3].count,mydataA[4].count
						]
					}]
		
				};



				window.onload = function() {
					var ctx1 = document.getElementById('pie-chart-area').getContext('2d');
					var ctx2 = document.getElementById('male-female-chart-area-pie').getContext('2d');
					var ctx3 = document.getElementById('users-joining-bar').getContext('2d');
					var ctx4 = document.getElementById('visits').getContext('2d');
					var ctx5 = document.getElementById('education').getContext('2d');
					var ctx6 = document.getElementById('ages').getContext('2d');
					
					window.myPie = new Chart(ctx2, config2);
					window.myPie = new Chart(ctx1, config1);
					window.myBar = new Chart(ctx3, {
						type: 'line',
						data: barChartData,
						options: {
							responsive: true,
							legend: {
								position: 'top',
							},
							title: {
								display: true,
								text: 'Users Join by month 2019'
							}
						}
					});
					window.myBar = new Chart(ctx4, {
						type: 'line',
						data: barChartData1,
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
					
			window.myBar = new Chart(ctx5, {
				type: 'bar',
				data: barChartData2,
				options: {
					responsive: true,
					legend: {
						position: 'top',
					},
					title: {
						display: true,
						text: 'Education level'
					}
				}
			});
			window.myBar = new Chart(ctx6, {
				type: 'bar',
				data: barChartData3,
				options: {
					responsive: true,
					legend: {
						position: 'top',
					},
					title: {
						display: true,
						text: 'User ages'
					}
				}
			});
				};
		
				
			

	
	
		
		

