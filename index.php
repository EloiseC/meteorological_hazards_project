<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="contructeur de maisons" />
        <meta name="author" content="dupuy-mp" />
        <title>METEOROLOGICAL HAZARDS PROJECT</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="./assets/img/fav.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="assets/css/styles.css" rel="stylesheet" />
    </head>
    
    <body id="page-top">

        <!-- Navigation-->
        <?php include('includes/nav.php'); ?>

        <header class="masthead text-white text-center">
            <?php include('includes/header.php'); ?>
        </header>
        
        <content>

            <!-- Introduction Section-->
            <?php include('includes/content/introduction.php'); ?>

            <!-- Repartition Disaster Type Section-->
            <?php include('includes/content/repartition_disaster_type.php'); ?>

            <!-- Disaster and Death Section-->
            <?php include('includes/content/disaster_and_death.php'); ?>

            <!-- Achievements Section-->
            <?php include('includes/content/disaster_and_time.php'); ?>
            
        </content>
           
        <footer>
            <!-- Footer-->
            <?php include('includes/footer.php'); ?>
        </footer>
        
        <!-- Bootstrap core JS-->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="assets/js/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="assets/js/scripts.js"></script>

    </body>

</html>
