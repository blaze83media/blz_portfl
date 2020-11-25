  // Load GOOGLE barchart packages.
  google.charts.load('current', { 'packages': ['corechart'] });

  // Draw GOOGLE bar chart when Charts is loaded.
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {

      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Topping');
      data.addColumn('number', 'Slices');
      data.addRows([
          ['HTML', 3],
          ['CSS', 1],
          ['Javascript', 1],
          ['JQuery', 1],
          ['React', 1],
          ['Vuejs', 2],
          ['PHP', 3],
          ['Symfony', 3],
          ['Laravel', 2],
          ['Java', 1],
          ['Android Studio', 1],
          ['Python', 1],
      ]);



      var barchart_options = {
          title: 'Tech Stack Ability Level',
          width: 500,
          height: 300,
          legend: 'none'
      };
      var barchart = new google.visualization.BarChart(document.getElementById('barchart_div'));
      barchart.draw(data, barchart_options);
  }