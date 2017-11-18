@extends('app')

@section('content')

Visualization: Pie Chart
Overview
A pie chart that is rendered within the browser using SVG or VML. Displays tooltips when hovering over slices.
Example


CODE IT YOURSELF ON JSFIDDLE
<html>
  <head>
    <script type="text/javascript" src="googlecharts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Produto', 'Quantindade'],
           @foreach($produtos as $prod)
          ['{{ $prod->type_nome }}',{{ $prod->type_qntd }}],
           @endforeach
        ]);

        var options = {
          title: 'Relatorio de Produtos e Quantidades'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }


    </script>


  </head>
  <body>

    <div id="piechart" style="width: 900px; height: 500px;"></div>

  </body>


</html>
@endsection
