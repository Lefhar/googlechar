<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Jauge</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

</head>
<body>
<div id="test"></div>
<script>
    google.load('visualization', '1', {packages:['gauge']});
    google.setOnLoadCallback(drawChart);
    function drawChart () {
        var data = google.visualization.arrayToDataTable([
            ['Label', 'Value'],
            ['Objectif', 75]
        ]);

        var options = {
            width: 580,
            height: 320,
            min: 0,
            max: 100,
            redFrom: 0,
            redTo: 90,
            yellowFrom:90,
            yellowTo: 95,
            greenFrom: 95,
            greenTo: 100,
            minorTicks:0
        };

        var chart = new google.visualization.Gauge(document.getElementById('test'));
        chart.draw(data, options);

        function resizeHandler () {
            chart.draw(data, options);
        }
        if (window.addEventListener) {
            window.addEventListener('resize', resizeHandler, false);
        }
        else if (window.attachEvent) {
            window.attachEvent('onresize', resizeHandler);
        }
    }
</script>
</body>
</html>