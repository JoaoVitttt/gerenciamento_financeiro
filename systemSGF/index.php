<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Title</title>

    <!-- FONT -->

    <!-- ICONS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Boxicons CSS -->
    <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

    <!-- CSS -->        
    <link rel='stylesheet' type='text/css' media='screen' href='./css/stylee.css'>


</head>

<body>
    <header>
        <?php include("includes/topo.php");?>
    </header>
    <section>
        <?php 
            include("./connection/conexao.php");
            switch(@$_REQUEST["view"]){
                case "novouser":
                    include("controller/manipuladados.php");
                break;
                case "login":
                    include("controller/manipuladados.php");
                break;
                case "logout":
                    include("views/logout.php");
                break;
                case "cadastro":
                    include("views/cadastro.php");
                break;
                case "principal":
                    include("views/conteudo.php");
                break;
                case "novoitem":
                    include("controller/manipuladados.php");
                break;
                case "listaritem":
                    include("views/listaritem.php");
                break;
                case "salvaritem":
                    include("controller/manipuladados.php");
                break;
                case "editaritem":
                    include("views/editItem.php");
                break;
                // case "pdf":
                //     include("views/PDF.php");
                // break;
                default:
                    include("views/login.php");
                    // print("<h1>Bem Vindos!</h1>");
            }
        ?>           
    </section>
    <footer>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>