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

            <div class="col-md-8">
            <h1> <?php echo $clanek['header']; ?> </h1>



            <p class="important"> <?php echo $clanek['body'] ?> </p>

            </div>
            <div class="col-md-4">
            <br>
                        <br>
                                    <br>
                                                <br>
                                                            <br>
            <img src= "<?php echo $clanek["pucture"]; ?>"" max width= "100%" >
            </div>



<!---------------------------------------------------------------- -->
   <div class="row">
   <div class="col-md-8">


<?php
                    $urli = $_SERVER['REQUEST_URI'];

?>



   <?php
    echo"<form action=". $urli ." method='post' role='form'>";
    ?>

            <div class="form-group">
                <label for="komentar">Komentarji</label>
                <textarea class="form-control" name="komentar" placeholder="komentar" rows="3" id="komentar"></textarea>

                <?php 




                            $comment = $_POST['komentar'];
                            
 

                 ?>-

                <br>
                <button type="submit" class="btn btn-default">Submit</button>
                <input type="hidden" name="submitted" value="1">
                <br>

                <?php 

                        if((empty($comment) == FALSE)){
                        
                         

                        $datum = date('Y/m/d H:i:s');
                        $avtor = ('anonymus');


                        $swag = "INSERT INTO komentarji (id_clanek, komentar, datum, avtor) VALUES ('$pageid', '$comment', '$datum', '$avtor' )";
                        $resolve = mysqli_query($database,$swag);

                    }

               ?>

            </div>
    </form>
    </div>
    </div>

    <!---------------------------------------------------------------- -->
    <div class="komentarji" >
    <div class="row">
    <div class="col-md-8">
    <?php

         $sql_komentarji = "SELECT * FROM `komentarji` WHERE id_clanek=$pageid ORDER BY id_komentar DESC" ;

         $result = mysqli_query($database, $sql_komentarji);



        if (mysqli_num_rows($result) > 0) {
            // output data of each row
      //      $komentar = mysqli_fetch_assoc($result);

        }
 

            while($row = $result->fetch_assoc()){
            $check = $row["id_clanek"];
            
    ?>


                <div class="feedbody">
                    <div class="comment">
                           <i> <?php 

                           echo $row["avtor"]; ?> <?php echo $row["datum"] 
                           ?> </i>
                           <br>

                    <h4><?php echo $row["komentar"]; ?></h4>
                   
                        
                           <hr />

                    </div>


                </div>


     <?php } ?>


 


    </div>
    </div>
    </div> 

    <!---------------------------------------------------------------- -->

</div>   


      <?php include("footer.php"); ?>
    </div> <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>

            </body>
</html>
