<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Highcharts Example</title>

		<style type="text/css">

		</style>
	</head>
	<body>
<h1> inicio dos gr√ficos</h1>
  <?php

    include 'conexao.php';
    $resTotal = $con->query("SELECT * FROM aluno");
    $cnt = $resTotal->rowCount();

    $resProf1 = $con->query("SELECT * FROM aluno where professor='lobato'");
    $cntProf1 = $resProf1->rowCount();
    $totalProf1 = $cntProf1 * 100 /$cnt;

    $resProf2= $con->query("SELECT * FROM aluno where professor='willys'");
    $cntProf2= $resProf2->rowCount();
    $totalProf2 = $cntProf2 * 100 /$cnt;


    $resProf3= $con->query("SELECT * FROM aluno where professor='allan'");
    $cntProf3 = $resProf3->rowCount();
    $totalProf3 = $cntProf3 * 100 /$cnt;

    while($filaProf1 = $resProf1->fetch_array(MYSQLI_BOTH)){
      $prof1 = "{ name: '".$filaProf1['professor']."', y:".$totalProf1."},";
    }
    while($filaProf2 = $resProf2->fetch_array(MYSQLI_BOTH)){
      $prof2 = "{ name: '".$filaProf2['professor']."', y:".$totalProf2."},";
    }
    while($filaProf3 = $resProf3->fetch_array(MYSQLI_BOTH)){
      $prof3 = "{ name: '".$filaProf3['professor']."', y:".$totalProf3."},";
    }
   ?>
<script src="http://highcharts/code/highcharts.js"></script>
<script src="http://highcharts/code/modules/exporting.js"></script>

<div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>



		<script type="text/javascript">

Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Browser market shares January, 2015 to May, 2015'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            }
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [
          <?
            echo $prof1;
            echo $prof2;
            echo $prof3;
          ?>
        ]
    }]
});
		</script>
	</body>
</html>
