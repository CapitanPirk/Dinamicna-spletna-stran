<?php include('config/setup.php'); ?>

<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title> <?php echo $site_title; ?> ｜ <?php echo $page_title; ?> </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php include('config/css.php');
          





        ?>
        <?php include('config/js.php'); ?>

         <link rel="stylesheet" href="css/main.css">




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







    <div class="jumbotron">
     <div class="naslovnica">
      <div class="container">

              <h1>Pozna Antika</h1>
        <p> Stran posvečena zanemarjenem obdobju zgodovine, prehodu iz antike v srednji vek</p>

      </div>
      </div>
    </div>

    <div class="container">


      <!-- row of columns -->
            <div class="row">
        <div class="col-md-6">
          
          <h2>Bizantisko cesarstvo <a class="btn btn-primary btn-sm" href="clanki.php?page=1" role="button">Celoten članek &raquo;</a>  </h2>
          
          <p> <?php 
               /* $summary = mysqli_query($database, "SELECT summary FROM `clanki` WHERE id=1 ");*/
               /*$database = mysqli_connect("localhost", "jure", "geslo", "mydatabase");*/
               $database->set_charset("utf8");
               $sql = "SELECT summary FROM `clanki` WHERE id=1 ";
               $result = mysqli_query($database, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                        echo  $row["summary"];
                    }
                } else {
                    echo "0 results";
                }
                
                ?>  </p>
          <center>
          <img src="img/constantinople.jpg" max width= "80%" >
          <br>

          </center>
        </div>

        
        <div class="col-md-6">
          <h2>Sassanidsko cesarstvo <a class="btn btn-primary btn-sm" href="clanki.php?page=2" role="button">Celoten članek &raquo;</a>  </h2>
          <p>
          <p> <?php 
               /* $summary = mysqli_query($database, "SELECT summary FROM `clanki` WHERE id=1 ");*/
               /*$database = mysqli_connect("localhost", "jure", "geslo", "mydatabase");*/
               $database->set_charset("utf8");
               $sql = "SELECT summary FROM `clanki` WHERE id=2 ";
               $result = mysqli_query($database, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                        echo  $row["summary"];
                    }
                } else {
                    echo "0 results";
                }
                
                ?>  </p>
                              </p>
          <center>

           <img src="img/sassanid.jpg" max width= "80%" >
           <br>

          </center>

       </div>

      </div> <!--zapre "row"-->

      <div class="row">

        <div class="col-md-6">

          <h2>Posledice Justinianovih vojn <a class="btn btn-primary btn-sm" href="clanki.php?page=3" role="button">Celoten članek &raquo;</a>  </h2>
          <p> 
          <p> <?php 
               /* $summary = mysqli_query($database, "SELECT summary FROM `clanki` WHERE id=1 ");*/
               /*$database = mysqli_connect("localhost", "jure", "geslo", "mydatabase");*/
               $database->set_charset("utf8");
               $sql = "SELECT summary FROM `clanki` WHERE id=3 ";
               $result = mysqli_query($database, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                        echo  $row["summary"];
                    }
                } else {
                    echo "0 results";
                }
                
                ?>  </p>
          </p>
          <center>
           <img src="img/justinian.jpg" max width= "80%" >
           <br>

          </center>

        </div>

        <div class="col-md-6">
          <div>
          <h2>Gotsko Kraljestvo <a class="btn btn-primary btn-sm" href="clanki.php?page=4" role="button">Celoten članek &raquo;</a>  </h2>
          <p>
          <p> <?php 
               /* $summary = mysqli_query($database, "SELECT summary FROM `clanki` WHERE id=1 ");*/
               /*$database = mysqli_connect("localhost", "jure", "geslo", "mydatabase");*/
               $database->set_charset("utf8");
               $sql = "SELECT summary FROM `clanki` WHERE id=4 ";
               $result = mysqli_query($database, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                        echo  $row["summary"];
                    }
                } else {
                    echo "0 results";
                }
                
                ?>  </p>
            </p>
          <center>
           <img src="img/teodoric.jpg" max width= "80%" >
           <br>

          </center>
          </div>
        </div>
        </div>

      <div class="row">

        <div class="col-md-6">

          <h2>Velike selitve <a class="btn btn-primary btn-sm" href="clanki.php?page=5" role="button">Celoten članek &raquo;</a>  </h2>
          <p> 
          <p> <?php 
               /* $summary = mysqli_query($database, "SELECT summary FROM `clanki` WHERE id=1 ");*/
               /*$database = mysqli_connect("localhost", "jure", "geslo", "mydatabase");*/
               $database->set_charset("utf8");
               $sql = "SELECT summary FROM `clanki` WHERE id=5 ";
               $result = mysqli_query($database, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                        echo  $row["summary"];
                    }
                } else {
                    echo "0 results";
                }
                
                ?>  </p>
          </p>
          <center>
           <img src="img/selitve.jpg" max width= "80%" >
           <br>

          </center>



        </div>

      </div>



      <hr>

      <?php include("footer.php"); ?>
    </div> <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>
    </body>
</html>
