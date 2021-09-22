<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet"/>
    <title>Atividade PW</title>
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
    <div id="mapa" style="height:500px; width:100%;"> </div>

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
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyB3E1mhpbDP7SMn_wLYsgUxS3zZhJI3ZB8&amp;sensor=false"></script>
<script>
    var map;

    function initialize() {
        var coordenadas = {lat: -23.553051, lng: -46.399970};

        var mapa= new google.maps.Map(document.getElementById('mapa'),{
            zoom:12,
            center: coordenadas,
            mapTypeId:'roadmap'
        });
        var marker = new google.maps.Marker({
            position: coordenadas,
            map: mapa,
        });
    }
    initialize();

</script>


</html>