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

        <script src="js/script.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="conteiner-fluid text-center">
            <div class="row">

            </div>
        </div>
        
    </body>
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