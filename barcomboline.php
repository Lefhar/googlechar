<!DOCTYPE html>
<html lang="fr">
<head>php -
    <meta charset="UTF-8">
    <title>bar combiné avec courbe</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body>
<div id="chart_div" style="width: 900px; height: 500px;"></div>
<script>
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawVisualization);

    function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
            ['Month', 'Chiffre d\'affaire','', '12 mois précédent'],
            ['Janvier',  965000,  0,    900038],
            ['Février',  935000, 0,     1000120],
            ['Mars',  950070,     0, 1000167],
            ['Avril',  800390,     0, 1000110],
            ['Mai',  630060,     0, 600910]
        ]);

        var options = {
            title : 'Chiffre d\'affaire 12 derniers mois',
            vAxis: {title: 'CA'},
            seriesType: 'bars',
            series: {2: {type: 'line'}}
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(data, options);
    }
</script>
</body>
</html>