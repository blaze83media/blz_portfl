//chart for tech stack on ABOUT page

var ctx = document.getElementById('myChart');
var myBarChart = new Chart(ctx, {
    type: 'horizontalBar',
    data: {
        labels: ['JQuery', 'React', 'Angular 8', 'Vuejs', 'PHP', 'Laravel', 'Symfony'],
        datasets: [{
            label: 'My Tech Stack',
            data: [95, 80, 70, 60, 95, 60, 90],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(74, 200, 240, 0.2)',
                'rgba(265, 151, 55, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(74, 200, 240, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            xAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});