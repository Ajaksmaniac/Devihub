var request = new XMLHttpRequest();
request.open("GET","UsersJoining.json", false);
request.send(null);
var mydata = JSON.parse(request.responseText);
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
            mydata[0].Joins,
            mydata[1].Joins,
            mydata[2].Joins,
            mydata[3].Joins,
            mydata[4].Joins,
            mydata[5].Joins,
            mydata[6].Joins,
            mydata[7].Joins,
            mydata[8].Joins,
            mydata[9].Joins,
            mydata[10].Joins,
            mydata[11].Joins

        
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
                text: 'Users Join by month 2019'
            }
        }
    });

};
