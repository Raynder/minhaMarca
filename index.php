<?php
    require_once("src/PHPMailer.php");
    require_once("src/SMTP.php");
    require_once("src/Exception.php");
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        
        <meta charset="utf-8">
        <title>Alpha MKT</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">

        <script src="js/script.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="conteiner-fluid text-center">
            <div class="row">
                <div class="conteudo">
                    <div class="parte1">
                        <div class="titulo">
                            <h1>Rafa Bot</h1>
                        </div>

                        <div class="info">
                            <div class="bot-icon">
                                <img src="img/bot.png" alt="">
                            </div>
                            <div class="bot-info">
                                <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado.</p>
                            </div>
                        </div>

                    </div>

                    
                </div>

            </div>
        </div>
        
    </body>

    <style>
        .parte > .titulo {
            font-size: 32pt;
            color: white;
            -webkit-text-stroke-color: #3364a1;
            -webkit-text-stroke-width: 2px;
        }
    </style>
</html>
<?php
    if(isset($_POST['nome']) && isset($_POST['msg'])){
        if(isset($_POST['email']) || isset($_POST['telefone'])){

            $clnome = $_POST['nome'];
            $cltelefone = $_POST['telefone'];
            $clemail = $_POST['email'];
            $clmsg = $_POST['msg'];
            
            $dados = "Nome: ".$clnome."<br>Telefone: ".$cltelefone."<br>Email: ".$clemail."<br>Mensagem: ".$clmsg."<br><br>Atenciosamente,<br>Alpha21marketing.ml";
            
            $corpomsg = "Prezados,<br><br>Uma nova solicitação de contato foi enviado para <b>Alpha MKT</b>!<br>Segue os dados do cliente.<br><br>".$dados;

            $email = 'jackson9business@gmail.com'; //SEU 
            $senha = '9b123321'; //SUA SENHA
            
            try {
                $mail = new PHPMailer();
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = $email;
                $mail->Password = $senha;
                $mail->Port = 587;
                $mail->setFrom($email, 'Alpha MKT');
                $mail->addAddress('alpha21marketing@gmail.com', 'Destinatario');
                $mail->isHTML(true);$mail->Subject = 'Contato Alpha MKT!';
                $mail->Body = $corpomsg;
                if ($mail->send()) {
        
                }
                else{
        
                }
            }
            catch (\Exception $e){echo "Erro ao encontrar pagina solicitada: {$mail->ErrorInfo}";
            }
        }
    }
    
?>