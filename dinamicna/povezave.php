<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title> Pozna Antika </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php include('config/css.php'); ?>
        <?php include('config/js.php'); ?>




        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>


        <!--[if lt IE 9]>
            <script src="js/vendor/html5-3.6-respond-1.4.2.min.js"></script>
        <![endif]-->

      <!-- Javascript za meni... spreminja class, ko user klikne gor-->

        <script type="text/javascript">

          function responsiveAF() {
            var x = document.getElementById('menu');
            if (x.className === "menu") {
                x.className += " responsive";
            } else {
                x.className = "menu";
            }
        }
        </script>


    </head>
    <body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
      <ul class="menu" id="menu">
        <li><a href="index.php">Članki</a></li>
        <li><a href="Videi.php">Videji</a></li>
        <li><a href="literatura.php">Literatura</a></li>
        <li><a href="povezave.php">Povezave</a></li>
        <li class="icon">
           <a href="javascript:void(0);" onclick="responsiveAF()">&#9776;</a>
        </li>
      </ul>
      </div>
    </nav>





     <div class="container">

            <div class="row">

            <div class="col-md-12">
            <h1> Povezave </h1>
            <p class="important"> Povezave ki se vam bi lahko zdele zanimive </p>
            </div>
            </div>  

      <footer>
        <p>&copy; Jure Tič TM</p>
      </footer>
    </div> <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>
    </body>
</html>
