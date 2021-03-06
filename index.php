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

        <script src="js/script.js" type="text/javascript"></script>
    </head>
    
    <style>
        .row{
            margin: 0;
        }
        .main{
            padding: 0;
            position: absolute;
        }
        body, html {
            width: 100%;
            height: 100%;
        }
        #fundo img {
            height: 100vh;
            width: 100%;
            left: 0;
            position: absolute;
        }

        #fundo {
            position: relative; /* posição fixa para que a possível rolagem da tela não revele espaços em branco */
            width: 100%;
            height: 100%;
        }

        .corpo{
            height: 100vh;
            position: relative;
        }

        .sobrepor{
            position: relative;
        }

        .campotxt{
            opacity: 0;
        }

        .bloco img{
            width: 78%;
        }

        .campoalter{
            position: absolute;
            top: 0;
            width: 100%;
            height: 100%;
        }

        img.apertoDeMao {
            width: 100%;
            position: absolute;
            left: 0;
            top: 200vh;
            transform: translateY(-50%);
        }
        footer.site-footer {
            width: 100%;
            top: 601vh;
            position: absolute;
        }
        footer.site-footer p{
            color: black;
            font-size: 14pt;
            margin: 0 0 0 5%;
            margin-top: 20px;
        }
        body{
            background-image: url("Pag 06/fundo.png")
        }
    </style>

    <body>
        <div class="conteiner-fluid text-center">
            <div class="row">
                 
                <div class="col-lg-12 main">
                    
                    <!-- PAGINA 1 -->

                    <div class="pag1 pag" id="pag1">

                        <div id="fundo">
                            <img src="Pag 01/fundo.png" alt="">
                        </div>
                        
                        <div class="corpo">

                            <div class="logo">
                                <img class="imglogo sobrepor" src="Pag 01/logo.png" alt="">
                            </div>

                            <div id="txts1">
                                
                                <div class="campotxt">
                                    <img src="Pag 01/boas_vindas.png" alt="" class="sobrepor">
                                </div>
                                
                                <section class="col-lg-6 col-sm-12 col-md-12 bloco">
        
                                    <div class="campotxt">
                                        <img src="Pag 01/txt1.png" alt="" class="txt1 sobrepor">
                                    </div>
                                    
                                    <div class="campotxt">
                                        <img src="Pag 01/txt2.png" alt="" class="txt2 sobrepor">
                                    </div>
        
                                </section>
        
                                <section class="col-lg-6 col-sm-12 col-md-12 bloco">
    
                                    <div class="campotxt">
                                        <img src="Pag 01/txt3.png" alt="" class="txt3 sobrepor">
                                    </div>
        
                                    <div class="campotxt">
                                        <img src="Pag 01/txt4.png" alt="" class="txt4 sobrepor">
                                    </div>
        
                                </section>

                            </div>
                            

                            <div class="campoalter">
                                <img src="Pag 01/seta.png" alt="" class="seta" id="seta">
                            </div>

                            <div class="campoalter">
                                <img src="Pag 01/triangulo.png" alt="" class="triangulo">
                            </div>

                        </div>
                
                    </div>

                    <!-- PAGINA 2 -->

                    <div class="pag2 pag" id="pag2">

                        <div id="fundo">
                            <img src="Pag 02/fundo.png" alt="">
                        </div>
                        
                        <div class="corpo">

                            <div class="campoicone campoalter">
                                <img src="Pag 02/circulo.png" alt="" class="circle">
                            </div>

                            <div id="txts2">
                                <section class="col-lg-6 col-sm-12 col-md-12 bloco">
        
                                    <div class="campotxt">
                                        <img src="Pag 02/txt1.png" alt="" class="txt1 sobrepor">
                                    </div>
                                    
                                    <div class="campotxt">
                                        <img src="Pag 02/txt2.png" alt="" class="txt2 sobrepor">
                                    </div>
        
                                </section>
        
                                <section class="col-lg-6 col-sm-12 col-md-12 bloco">
    
                                    <div class="campotxt">
                                        <img src="Pag 02/txt3.png" alt="" class="txt3 sobrepor">
                                    </div>
        
                                    <div class="campotxt">
                                        <img src="Pag 02/txt4.png" alt="" class="txt4 sobrepor">
                                    </div>
        
                                </section>

                            </div>

                        </div>
                
                    </div>

                    <!-- PAGINA 3 -->

                    <div class="pag3 pag" id="pag3">

                        <div id="fundo">
                            <img src="Pag 03/fundo.png" alt="">
                        </div>

                        <div class="campoapertodemao">
                            <img src="Pag 02/apertoDeMao.png" alt="" class="apertoDeMao">
                        </div>
                        
                        <div class="corpo">

                            <div id="txts3">
                                <section class="col-lg-6 col-sm-12 col-md-12 bloco">
        
                                    <div class="campotxt">
                                        <img src="Pag 03/txt1.png" alt="" class="txt1 sobrepor">
                                    </div>
                                    
                                    <div class="campotxt">
                                        <img src="Pag 03/txt2.png" alt="" class="txt2 sobrepor">
                                    </div>
        
                                </section>
        
                                <section class="col-lg-6 col-sm-12 col-md-12 bloco">
    
                                    <div class="campotxt">
                                        <img src="Pag 03/txt3.png" alt="" class="txt3 sobrepor">
                                    </div>
        
                                    <div class="campotxt">
                                        <img src="Pag 03/txt4.png" alt="" class="txt4 sobrepor">
                                    </div>
        
                                </section>
                                
                            </div>
                            
                            
                            <div class="campotxtfinal">
                                <img src="Pag 03/txt5.png" alt="" class="txt4 sobrepor">
                            </div>

                        </div>
                
                    </div>

                    <!-- PAGINA 4 -->

                    <div class="pag4 pag" id="pag4">

                        <div id="fundo">
                            <img src="Pag 04/fundo.png" alt="">
                        </div>
                        
                        
                        <div class="corpo">

                            <div id="txts4">

                                <div class="campoimg">
                                    <img src="Pag 04/txt1.png" alt="" class="txt1 sobrepor titulo">
                                </div>
                                
                                <section class="col-lg-4 col-sm-12 col-md-12 bloco">
        
                                    <div class="campoimg">
                                        <img src="Pag 04/txt2.png" alt="" class="txt2 sobrepor">
                                    </div>
        
                                </section>
                                
                                <section class="col-lg-4 col-sm-12 col-md-12 bloco">
        
                                    <div class="campoimg">
                                        <img src="Pag 04/txt3.png" alt="" class="txt3 sobrepor">
                                    </div>
        
                                </section>
                                
                                <section class="col-lg-4 col-sm-12 col-md-12 bloco">
        
                                    <div class="campoimg">
                                        <img src="Pag 04/txt4.png" alt="" class="txt4 sobrepor">
                                    </div>
        
                                </section>

                            </div>

                            <img src="Pag 04/cora1.png" alt="" class="cora1">
                            <img src="Pag 04/cora2.png" alt="" class="cora2">
                            <img src="Pag 04/cora2.png" alt="" class="cora3">
                            <img src="Pag 04/cora2.png" alt="" class="cora4">

                        </div>
                
                    </div>

                    <!-- PAGINA 5 -->

                    <div class="pag5 pag" id="pag5">

                        <div id="fundo">
                            <img src="Pag 05/fundo.png" alt="">
                        </div>
                        
                        
                        <div class="corpo">

                            <div id="txts5">

                                <div class="campoimg">
                                    <img src="Pag 05/txt1.png" alt="" class="txt1 sobrepor titulo">
                                </div>
                                
                            </div>


                            <div id="items-wrapper" class="slider">
                                <div id="items">
                                    <img class="item" src="slide/1.jpeg" alt="">
                                    <img class="item" src="slide/2.jpeg" alt="">
                                    <img class="item" src="slide/3.jpeg" alt="">
                                    <img class="item" src="slide/5.jpeg" alt="">
                                    <img class="item" src="slide/6.jpeg" alt="">
                                    <img class="item" src="slide/8.jpeg" alt="">
                                    <img class="item" src="slide/9.jpeg" alt="">
                                    <img class="item" src="slide/10.jpeg" alt="">
                                    <img class="item" src="slide/11.jpeg" alt="">
                                    <img class="item" src="slide/13.jpeg" alt="">
                                    <img class="item" src="slide/14.jpeg" alt="">
                                    <img class="item" src="slide/15.jpeg" alt="">
                                    <img class="item" src="slide/16.jpeg" alt="">
                                </div>
                            </div>
                            
                            <section class="col-lg-4 col-sm-12 col-md-12 bloco">
    
                                <div class="">
                                    <img src="Pag 05/txt2.png" alt="" class="txt2 sobrepor">
                                </div>
    
                            </section>
                            
                            <section class="col-lg-4 col-sm-12 col-md-12 bloco">
    
                                <div class="campoimg">
                                    <img src="Pag 05/txt3.png" alt="" class="txt3 sobrepor">
                                </div>
    
                            </section>
                            
                            <section class="col-lg-4 col-sm-12 col-md-12 bloco">
    
                                <div class="campoimg">
                                    <img src="Pag 05/seta.png" alt="" class="seta">
                                </div>
                            </section>
                            

                            <img src="Pag 04/cora1.png" alt="" class="cora1">
                            <img src="Pag 04/cora2.png" alt="" class="cora2">
                            <img src="Pag 04/cora2.png" alt="" class="cora3">

                        </div>
                
                    </div>

                    <!-- PAGINA 6 -->

                    <div class="pag6 pag" id="pag6">

                        <div id="fundo">
                            <img src="Pag 06/fundo.png" alt="">
                        </div>
                        <form action="" method="post">
                            <div class="corpo">
    
                                <div class="campoimg titulo">
                                    <img src="Pag 06/txt1.png" alt="" class="txt1 sobrepor titulo">
                                </div>
                                
                                <section class="col-lg-4 col-sm-12 col-md-12 bloco">
                                    <div class="preencher">
                                        <img src="Pag 06/txt2.png" alt="" class="txt2 sobrepor">
                                        <input type="text" name="nome" class="nome">
                                    </div>

                                    <div class="preencher">
                                        <img src="Pag 06/txt3.png" alt="" class="txt2 sobrepor">
                                        <input type="text" name="telefone" class="telefone">
                                    </div>
        
                                    <div class="preencher">
                                        <img src="Pag 06/txt4.png" alt="" class="txt2 sobrepor">
                                        <input type="text" name="email" class="email">
                                    </div>
        
                                </section>
                                
                                <section class="col-lg-4 col-sm-12 col-md-12 bloco">

                                    <div class="campoimg">
                                        <img src="Pag 06/txt5.png" alt="" class="txt3 sobrepor">
                                        <textarea name="msg" id="" cols="30" rows="10"></textarea>
                                    </div>
        
                                </section>

                                <input type="image" src="Pag 06/button.png">
                                
                                <div class="sub titulo">
                                    <img src="Pag 06/txt6.png" alt="" class="txt6 sobrepor">
                                </div>
                                
                                <div class="">
                                    <a href="wa.me/+5574998012868"><img src="Pag 06/txt7.png" alt="" class="txt7 sobrepor"></a>
                                </div>

                                <div class="">
                                    <img src="Pag 06/logo_fim.png" alt="" class="seta">
                                </div>
                                
                                <p style="position:absolute; left:0;margin-left: 5%;">©Copyright 2021 <a href="">Arkadian</a></p>
                                    <p style="position:absolute; right:0;margin-right: 5%;">Quer uma pagina como esta?<a href="">Saiba mais.</a></p>
    
                            </div>
                        </form>
                
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