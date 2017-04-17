<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title> Pozna Antika </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/main.css">

        <?php include('config/css.php'); ?>
        <?php include('config/js.php'); ?>
        <?php include('config/setup.php');




        ?>




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
      <?php include('meni.php'); ?>





     <div class="container">

            <div class="row">

            <div class="col-md-12">
            <h1> <?php echo $page['header']; ?> </h1>



            <p class="important"> <?php echo $page['body'] ?> </p>
            </div>
            </div>        



      <?php include("footer.php"); ?>
    </div> <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>
    </body>
</html>
