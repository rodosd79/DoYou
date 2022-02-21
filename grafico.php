<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://google.com/jsapi"></script>
    <script type="text/javascript">
        //carrega módulo visualização
        google.load("visualization","1", {packages:['corechart']});
        //chamada da função
        google.setOnLoadCallback(drawChart);

        //função para montar o gráfico
        function drawChart(){
        //variável matriz
        var data =google.visualization.arrayToDataTable([
            ['Meses', 'Receitas', 'Despesas'],
            ['Janeiro', 1000, 800],
            ['Fevereiro', 1200, 600],
            ['Março', 900, 750],
            ['Abril', 2500, 1500]
        ]);
        //opções 
        var options ={title: 'Rendimento',
                    vAxis:{title:'Meses', titleTextStyle:{color:'red'}}
                    };
        //cria objeto pieChart e recebe por parâmetro a div onde será exibido
        var barras = new google.visualization.BarChart(document.getElementById('barras_div'));
        //criar o desenho
        barras.draw(data,options);
        }
       

    </script>


    <title>Document</title>
</head>
<body>
    <div id="barras_div" style="width: 900px; height:500px;"></div>
</body>
</html>