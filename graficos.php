<!DOCTYPE html>
<html lang="pt-br">
  <head>

  <?php
          try {
            
          $conn = mysqli_connect("localhost","root","","bdcarro");
          $consulta = mysqli_query($conn,"SELECT COUNT(idCarro) as qtdCarro FROM tbcarro
           where marcaCarro
            like '%ferrari%'");
          $consulta1 = mysqli_query($conn,"SELECT COUNT(idCarro) as qtdCarro FROM tbcarro
            where marcaCarro
             like '%lamborghini%'");
          $consulta2 = mysqli_query($conn,"SELECT COUNT(idCarro) as qtdCarro FROM tbcarro
             where marcaCarro
              like '%nissan%'");
          $consulta3 = mysqli_query($conn,"SELECT COUNT(idCarro) as qtdCarro FROM tbcarro
              where marcaCarro
               like '%bugatti%'");
          $consulta4 = mysqli_query($conn,"SELECT COUNT(idCarro) as qtdCarro FROM tbcarro
               where marcaCarro
                like '%bmw%'");
          $consulta5 = mysqli_query($conn,"SELECT COUNT(idCarro) as qtdCarro FROM tbcarro
                where marcaCarro
                 like '%mercedes%'");

          $marcaCarro = mysqli_query($conn,"SELECT marcaCarro as marca FROM tbCarro where marcaCarro like'%ferrari%'");
          $marcaCarro1 = mysqli_query($conn,"SELECT marcaCarro as marca FROM tbCarro where marcaCarro like'%lamborghini%'");
          $marcaCarro2 = mysqli_query($conn,"SELECT marcaCarro as marca FROM tbCarro where marcaCarro like'%nissan%'");
          $marcaCarro3 = mysqli_query($conn,"SELECT marcaCarro as marca FROM tbCarro where marcaCarro like'%bugatti%'");
          $marcaCarro4 = mysqli_query($conn,"SELECT marcaCarro as marca FROM tbCarro where marcaCarro like'%bmw%'");
          $marcaCarro5 = mysqli_query($conn,"SELECT marcaCarro as marca FROM tbCarro where marcaCarro like'%mercedes%'");
          
         

          $idCarro = mysqli_fetch_assoc($consulta);
          $idCarro1 = mysqli_fetch_assoc($consulta1);
          $idCarro2 = mysqli_fetch_assoc($consulta2);
          $idCarro3 = mysqli_fetch_assoc($consulta3);
          $idCarro4 = mysqli_fetch_assoc($consulta4);
          $idCarro5 = mysqli_fetch_assoc($consulta5);

          $ferrari = mysqli_fetch_assoc($marcaCarro);
          $lamborghini = mysqli_fetch_assoc($marcaCarro1);
          $nissan = mysqli_fetch_assoc($marcaCarro2);
          $bugatti = mysqli_fetch_assoc($marcaCarro3);
          $bmw = mysqli_fetch_assoc($marcaCarro4);
          $mercedes = mysqli_fetch_assoc($marcaCarro5);

         
        }catch(PDOException $e) {
          
        }
          ?>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet"/>
    <title>Atividade PW</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {

      var data = google.visualization.arrayToDataTable([
        ['Marcas', 'Carros',],
        ['<?php echo $ferrari['marca']?>', <?php echo $idCarro['qtdCarro']?>],
        ['<?php echo $lamborghini['marca']?>', <?php echo $idCarro1['qtdCarro']?>],
        ['<?php echo $nissan['marca']?>', <?php echo $idCarro2['qtdCarro']?>],
        ['<?php echo $bugatti['marca']?>', <?php echo $idCarro3['qtdCarro']?>],
        ['<?php echo $bmw['marca']?>', <?php echo $idCarro4['qtdCarro']?>],
        ['<?php echo $mercedes['marca']?>', <?php echo $idCarro5['qtdCarro']?>]
        
      ]);

      var options = {
        title: 'Carros por Marcas',
        chartArea: {width: '50%'},
        hAxis: {
          title: 'Carros',
          minValue: 0
        },
        vAxis: {
          title: 'Marcas'
        }
      };

      var chart = new google.visualization.BarChart(document.getElementById('chart_div'));

      chart.draw(data, options);
    }
    </script>
  </head>
  
    
  <body>

    



    <header class="menu-top">
            <nav class="nav-top">
                <ul class="ul-nav-top"> 
                    <li><a href="index.php"><img src="./img/pagina-inicial.png"></a></li>
                    <li><a href="carros.php"> CRUD Carros </a></li>
                    <li><a href="mapa.php"> Mapa </a></li>
                    <li><a href="pdf.php"> PDF com Consulta </a></li>
                    <li><a href="graficos.php"> Gráficos </a></li>
                    <li><a href="email.php"> Contato </a></li>
                </ul>
            </nav>
</header>

<div id="chart_div" class="graph"></div>



    <section class="footer">

<div class="footer-bot">
    <p class="text-footer"> Desenvolvido por Paulo e Icaro. </p>
</div>

<nav class="nav-bot">
                <ul class="ul-nav-bot"> 
                    <li><a href="index.php"><img src="./img/pagina-inicial.png"></a></li>
                    <li><a href="carros.php"> CRUD Carros </a></li>
                    <li><a href="mapa.php"> Mapa </a></li>
                    <li><a href="pdf.php"> PDF com Consulta </a></li>
                    <li><a href="graficos.php"> Gráficos </a></li>
                    <li><a href="email.php"> Contato </a></li>
                </ul>
            </nav>




</section>
  </body>
</html>