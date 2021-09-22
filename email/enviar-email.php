<?php

    $nome = $_POST['txNome'];
    $email = $_POST['txEmail'];
    $assunto = $_POST['txAssunto'];

    $assunto_codificado = sprintf('=?%s?%s?%s?=', 'UTF-8', 'Q', quoted_printable_decode($assunto));
    $conteudo = $_POST['txMsg'];

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require '../vendor/autoload.php';

    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Charset = 'UTF-8';
    $mail->SMTPAuth = true;

    $mail->Username = 'mecmec1421@gmail.com';
    $mail->Password = 'brabaodepegar777';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('mecmec1421@gmail.com', 'Carros');
    $mail->SingleTo = true;

    $mail->addAddress("$email");

    $mail->Subject = $assunto_codificado;
    $mail->Body = $conteudo;

    if(!$mail->Send()){
        echo "Erro ao enviar o email:" . $mail->ErrorInfo;
    }else{
        $url='../email.php';
        echo("<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>");
        exit();
    }


?>