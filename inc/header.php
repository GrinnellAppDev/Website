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
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
    <link rel="stylesheet" href="dist/source/jquery.fancybox.css" type="text/css" media="screen" />
    <script type="text/javascript" src="dist/source/jquery.fancybox.pack.js"></script>
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

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>

<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="../fancyBox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox -->
<link rel="stylesheet" href="../fancyBox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="../fancyBox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

<!-- Optionally add helpers - button, thumbnail and/or media -->
<link rel="stylesheet" href="../fancyBox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
<script type="text/javascript" src="../fancyBox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="../fancyBox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

<link rel="stylesheet" href="../fancyBox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
<script type="text/javascript" src="../fancyBox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
    
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47534324-1', 'grinnellappdev.com');
  ga('send', 'pageview');

</script>

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
                        <a class="navbar-brand" href="index.php"><img style="max-width:35px; margin: 0px; padding: 0px; margin-top: -10px; margin-left: -25px; margin-right:10px;" src="img/AppDevLogoLight.png"> Grinnell AppDev</a>
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

