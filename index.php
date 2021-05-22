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
        <link rel="stylesheet" href="css/pag1.css">
        <link rel="stylesheet" href="css/pag2.css">
        <link rel="stylesheet" href="css/pag3.css">
        <link rel="stylesheet" href="css/pag4.css">
        <link rel="stylesheet" href="css/pag5.css">
        <link rel="stylesheet" href="css/pag6.css">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,500&display=swap" rel="stylesheet">

        <script src="js/script.js" type="text/javascript"></script>
    </head>
    
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-md-12 text-center" style="padding: 0;">
                    
                    <div id="pag1" class="pag1">
                    
                        <div id="fundo" class="fundo">
                            <img src="Pag 01/fundo.png" alt="">
                        </div>
            
                        <div class="conteudo">
                        
                            <div class="icone center">
                                <img src="Pag 01/logo.png" class="logo alinhado" alt="logo principal">
                            </div>

                            <div class="boasVindas">
                                <h1 class="alinhado">BEM-VINDO!</h1>
                            </div>

                            <section class="bloco col-lg-6 col-md-12 col-sm-6 col-6">

                                <div class="alinhado">

                                    <div class="text">
                                        <h1>Somos a agência Alpha Marketing</h1>
                                    </div>
        
                                    <div class="text">
                                        <p>O Marketing Digital está sempre evoluindo,
                                             cada dia que passa novas estrategias estão sendo criadas ou testadas
                                             , nos da Alpha estamos sempre acompanhando esta evolução por você.
                                        </p>
                                    </div>

                                </div>
                            
                            </section>

                            

                            <section class="bloco col-lg-6 col-md-12 col-sm-6 col-6">

                                <div class="alinhado">

                                    <div class="text">
                                        <h2>NOSSO TRABALHO NÃO SE RESUME</h2>
                                        <h1 class="h2menor">APÉNAS NO MARKETING</h1>
                                    </div>
    
        
                                    <div class="text">
                                        <p>O design também é algo que precisa ser cuidadosamente bem feito,
                                             e nós estamos sempre buscando aperfeiçoar nossos metodos
                                              para que seu resultado se torne cada vez melhor.
                                        </p>
                                    </div>

                                </div>
                            
                            </section>

                            <div class="icone center">
                                <img src="Pag 01/seta.png" class="seta" alt="Seta apontando para baixo">
                            </div>

                            <div class="triangulo">
                                <img src="Pag 01/triangulo.png" alt="">
                            </div>
                        
                        </div>
                    
                    </div>

                    <div id="pag2" class="pag2">

                        <div class="conteudo">

                            <div class="circulo">
                                <img src="Pag 02/circulo.png" alt="">
                            </div>
                        
                        </div>
                    </div>



                </div>
            </div>
        </div>
        


    </body>




    <script>
        lista = []
        pags = document.querySelectorAll('div.pag')
        lista = toArray(pags)
    </script>
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