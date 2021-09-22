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

<div class="text-form-email"> 
    <p class="text-email">Entre em contato conosco!</p>
</div>


<section class="container">
    <form method="POST" action="./email/enviar-email.php" class="form-contato">
        <div>
            <input placeholder="Nome" type="text" name="txNome" class="inp-email"/>
        </div>
        <div>
            <input placeholder="E-mail" type="email" name="txEmail" class="inp-email"/>
        </div>
        <div>
            <input placeholder="Assunto" type="text" name="txAssunto" class="inp-email"/>
        </div>
        <div>
            <textarea placeholder="Mensagem" name="txMsg" class="txtarea-email"></textarea>
        </div>
        <div>
            <input type="submit" value="Enviar" class="btn-email"/>
        </div>

    </form>


</section>


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