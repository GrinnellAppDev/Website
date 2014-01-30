<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.png">

    <title>Grinnell AppDev!</title><!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.css" rel="stylesheet" type="text/css"><!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet" type="text/css"><!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>
    <!-- Animate.css / danedan -->
    <link rel="stylesheet" href="dist/css/animate.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div id="wrap">
        <!-- Fixed navbar -->

        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="memberNav">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="sr-only">Toggle navigation</span></button> 
                        <a class="navbar-brand" href="index.php"><img style="max-width:100px; margin: 0px; padding: 0px; margin-top: -10px; margin-left: -25px; margin-right:10px;" src="logoSmall.png"> Grinnell AppDev</a>
                    </div>

                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav <?php echo $activeClass?>">
                            <li><a href="about.php">About</a></li>

                            <li><a href="members.php">Members</a></li>

                            <li><a href="portfolio.php">Portfolio</a></li>

                            <li><a href="apply.php">Apply</a></li>

                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
</body>
</html>
