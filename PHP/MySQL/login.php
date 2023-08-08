<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn Page</title>
    <!-- CSS BootStrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- favicons -->
    <link rel="icon" href="img/favicon.ico">

    <!-- Mio CSS -->
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        html,
        body {
            height: 100%;
        }

        body {
            display: flex;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
        }

        .form-signin .checkbox {
            font-weight: 400;
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>

</head>

<body>


    <body class="text-center">

        <main class="form-signin">
            <form method="post" action="lgoin_controllo.php" id="loginForm">
                <img class="mb-4" src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
                <h1 class="h3 mb-3 fw-normal">Loggati nel sito</h1>

                <div class="form-floating">
                    <input type="text" name="email" class="form-control" id="username" placeholder="Email">
                    <label for="username">Email</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="pwd" class="form-control" id="pwd" placeholder="Password">
                    <label for="pwd">Password</label>
                </div>

                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" name="ricordami" id="cookie" value="remember-me"> Ricordami
                    </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" id="btn" type="submit">Entra</button>
                <p class="mt-5 mb-3 text-muted">&copy; 2017–2023</p>
            </form>
            <?php if(isset($_GET["esito"]) && $_GET["esito"] == 1): ?>
                <div class="alert alert-danger" role="alert">
                    Username non trovata
                </div>
            <?php elseif(isset($_GET["esito"]) && $_GET["esito"] == 2): ?>
                <div class="alert alert-danger" role="alert">
                    Password Errata
                </div>
            <?php endif; ?>
        </main>


        <!-- JS BootStrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <script>
            const loginForm = document.querySelector("#loginForm")
            const username = document.querySelector("#username")
            const pwd = document.querySelector("#pwd")
            const cookie = document.querySelector("#cookie")
            const btn = document.querySelector("#btn")

            //let rx_pwd = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/
            let rx_nome = /^\D[^@#*.,-_]{2,20}$/ //Nome solo caratteri minimo 3 massimo 20


            function validaForm(){
                if(rx_nome.test(username.value) /*&& rx_pwd.test(pwd.value)*/){
                    return true
                }else{
                    alert("Controlla i campi")
                    //username.value = ""
                    pwd.value = ""
                    return false
                }
            }
        </script>
    </body>

</html>