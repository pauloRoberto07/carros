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


    <section>


        <div class="msg" style="display: none;">
            <p class="msgajax"></p>
        </div>
    </section>

<div class="text-form-email"> 
    <p class="text-email">CRUD</p>
</div>



    <section class="container">
        <form method="POST" class="form-crud">
             <input type="hidden" name="txPegaid" id="txPegaid" value="<?php echo @$_GET['idCarro'];?>"/>

            <input type="text" class="inp-crud" placeholder="Nome do Carro" name="nomeCarro" id="nomeCarro" value="<?php echo @$_GET['nomeCarro'];?>"/>

            <input type="text" class="inp-crud" placeholder="Cor do Carro" name="corCarro" id="corCarro" value="<?php echo @$_GET['corCarro'];?>"/>

            <input type="text" class="inp-crud" placeholder="Marca do Carro" name="marcaCarro" id="marcaCarro" value="<?php echo @$_GET['marcaCarro'];?>"/>

            <input type="text" class="inp-crud" placeholder="Velocidade Maxima do Carro" name="velMaxCarro" id="velMaxCarro" value="<?php echo @$_GET['velMaxCarro'];?>"/>
            

            <input type="submit" class="salvar" value="Salvar" id="salvar"/>

            <input type="reset" value="Limpar" id="bt-cancelar" class="bt-cancelar"/>
        </form>
    </section>


    <section>
        

            
                     <table class='table'>
                    <thead>
                      <tr>
                        <th scope='col'>ID:</th>
                        <th scope='col'>Nome do carro:</th>
                        <th scope='col'>Cor do carro:</th>
                        <th scope='col'>Marca do carro:</th>
                        <th scope='col'>Vel. Max. do Carro:</th>
                        <th scope='col thh'>Alterar</th>
                        <th scope='col'>Excluir</th>
                      </tr>
                    </thead>
                    <?php

                    include("./Classes/conexao.php");
                    try{
                        
                        $stmt = $pdo -> prepare("select * from tbCarro");
        
                        $stmt ->execute();
        
                        while($row = $stmt->fetch(PDO::FETCH_BOTH)){ ?>
                    <tbody>
                    
                      <tr>
                        <th scope='row'><?php echo $row['idCarro']?></th>
                        <td><?php echo $row['nomeCarro']?></td>
                        <td><?php echo $row['corCarro']?></td>
                        <td><?php echo $row['marcaCarro']?></td>
                        <td><?php echo $row['velMaxCarro']. ' Km/H'?></td>
                        <td><?php echo "<a class='alterar' href='?idCarro={$row['idCarro']}&nomeCarro={$row['nomeCarro']}&corCarro={$row['corCarro']}&marcaCarro={$row['marcaCarro']}&velMaxCarro={$row['velMaxCarro']}'>";
                        echo "Alterar ";
                    echo "</a>";?></td>
                        <td><?php echo "<a class='excluir' href='javascript:void(0)' class='excluir' id='$row[idCarro]' >";
                        echo "Excluir";
                    echo "</a>";?></td>
                    
                      </tr>
                      <?php }?>
                    </tbody>
                  </table>
                  
                  
                    



                  
                  
            <?php
            }catch(PDOException $e){
                echo "Erro: " . $e->getMessage();   }
                ?>
                
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

<script src="./js/jquery-3.6.0.min.js"></script>


<script src="rotinas-ajax.js"></script>
        

</script>