

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/main.js" defer></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/imagens/Favicon.ico" type="image/x-icon">
    <title>R3-Login</title>

</head>
    <body>
        <div class="container">

            <div class="form-col" >
                
                <div class="btn-box">
                    <button type="submit" class="btn btn-1" id="entrar">Entrar</button>
                    <button type="submit" class="btn btn-2" id = "registrar" >Registar</button>
                </div>


                    <form class="form-box login-form" action="?rota=autenticar" method="post">
               
                                <div class="logo-r3">
                                    <img src="/imagens/R3-LOGO.png" alt="" srcset="">
                                </div>
                                <div class="form-title">
                                <span>Entrar</span>
                                </div>

                        <div class="form-input">

                            <div class="input-box">
                                <input value="" type="email" name="email" id="email" class="inputs input-field"  placeholder="email" required>
                                <img class="icon"  alt="user" src="/imagens/user.png" >
                            </div>
                            

                            <div class="input-box">
                                <input value="" type="password" name="senha" id="senha" class="inputs input-field"  placeholder="senha" required>
                                <img class="icon"  alt="user" src="/imagens/password.png" >   
                            </div>
                            <div class="forgot-password">
                                <a href="#">Esqueceu a senha ?</a>
                            </div>

                            <div class="input-box">
                                    <button class="inputs submit-btn" >
                                        <span>Entrar</span>
                                        <img class="icon"  alt="user" src="/imagens/arrow.png" >   
                                    </button>
                            </div>
                        </div>
                        <div class="social-login">

                            <div class="social-login-box">
                                <img id="logo-facebook" class="social-login-icon"  alt="user" src="/imagens/facebook.png" >
                            </div>
                            <div class="social-login-box">
                                <img id="logo-google" class="social-login-icon"  alt="user" src="/imagens/google.png" >
                            </div>
                            <div class="social-login-box">
                                <img id="logo-twitter" class="social-login-icon"  alt="user" src="/imagens/twitter.png" >
                            </div>

                        </div>

                    </form>

                    <!-- registrar -->

                    <form class="form-box register-form" action="?rota=registrar" method="post" >
                        <div class="logo-r3">
                            <img src="/imagens/R3-LOGO.png" alt="" srcset="">
                        </div>
                        <div class="form-title">
                        <span>Registrar</span>
                        </div>

                <div class="form-input">
                    <div class="input-box">
                        <input value="" type="email" name="email" id="email" class="inputs input-field"  placeholder="email" required>
                        <img class="icon"  alt="user" src="/imagens/email.png" >
                    </div>
                    

                    <div class="input-box">
                        <input value="" type="text" name="nome" id="user" class="inputs input-field"  placeholder="nome" required>
                        <img class="icon"  alt="user" src="/imagens/user.png" >
                    </div>
                    

                    <div class="input-box">
                        <input value="" type="password" name="senha" id="senha" class="inputs input-field"  placeholder="senha" required>
                        <img class="icon"  alt="user" src="/imagens/password.png" >   
                    </div>
                    <div class="remember-me">
                        <input type="checkbox" name="remember-me-check" id="">
                        <label for="remember-me-check">Lembrar senha</label>
                    </div>
                 
                    <div class="input-box">
                            <button type="submit" class="inputs submit-btn" >
                                <span>Registrar</span>
                                <img class="icon"  alt="user" src="/imagens/arrow.png" >   
                            </button>
                    </div>
                   
                </div>
                
                <div class="social-login">

                    <div class="social-login-box">
                        <img id="logo-facebook" class="social-login-icon"  alt="user" src="/imagens/facebook.png" >
                    </div>
                    <div class="social-login-box">
                        <img id="logo-google" class="social-login-icon"  alt="user" src="/imagens/google.png" >
                    </div>
                    <div class="social-login-box">
                        <img id="logo-twitter" class="social-login-icon"  alt="user" src="/imagens/twitter.png" >
                    </div>
                 
                </div>

                </form>

                </div> 
            </div>
        </div> 
    </body>
</html>