<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMO - Doces e Bolos</title>

    <!-- BOOTSTRAP CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- CSS Local -->
    <link rel="stylesheet" href="css/style.css">

    <!-- JQuery, JS, Popper -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

</head>
<body>
    
    <header>
        <?php

            include_once 'condb.php';

            include_once 'navbar.php';
        ?>
    </header>

    <main>
        <?php

            include 'signup-modal.php';
            include 'signin-modal.php';
        ?>

    <!-- Seção Inicial // Viewport define a altura -->
    <div id="inicio" class="viewport inicio">

        <!-- Texto de Chamada -->

        <div class="chamada">
            <h1>S.M.O. Confeitaria</h1>
            <p>Proporcionando à você, o lado doce da vida.</p>
        </div>
    </div>

     <!-- Seção de Promoções // Viewport define a altura -->
     <div id="ofertas" class="viewport ofertas">
        <div class="container justify-content-around">
        

            <!-- Titulo da Seção -->
            <h1>Ofertas da Semana</h1>            

            <?php

                include 'cardProd.php';

            ?>

        </div>
    </div>

    </main>
</body>
</html>