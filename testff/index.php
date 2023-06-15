
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- ICONS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

    <!-- Boxicons CSS -->
    <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

    <!-- CSS -->
    <link rel='stylesheet' type='text/css' media='screen' href='stylle.css'>
</head>

<body>
<div class="grid-container">
    <header class="header">
        <?php include("include/menutopo.php");?>
    </header>
    <aside id="sidebar">
        <?php include("include/menuprincipal.php");?>
    </aside>
    <main class="main-container">
        <?php include("include/conteudo.php");?>
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.41.0/apexcharts.min.js"></script>
    <script src='script.js'></script>
</div>

</body>

</html>
