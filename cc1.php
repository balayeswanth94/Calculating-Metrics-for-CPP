<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>A Metrics Tool CC</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="index.html">Start</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#about">About</a>
                    </li>
                    <!--<li>
                        <a href="#services">Services</a>
                    </li>
                    <li>
                        <a href="#contact">Contact</a>
                    </li>-->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Header -->
    <a name="about"></a>
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h2>METRICS TOOL - CYCLOMATIC COMPLEXITY</h2>
                        <h3>Balayeswanth B.</h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">                            
                        
<?php
$target_path = "b.cpp";
//$target_path = $target_path.basename( $_FILES['MI']['name']); 
move_uploaded_file($_FILES['prg1']['tmp_name'], $target_path) or die ("There was an error uploading the file, please try again!<br>");
//if(move_uploaded_file($_FILES['MI']['tmp_name'], $target_path)) {
//   echo "The file ".  basename( $_FILES['MI']['name']). 
//    " has been uploaded<br>";
//} else{
//    echo "There was an error uploading the file, please try again!<br>";
//}
$handle = fopen($target_path, 'r') or die('Cannot open file:  '.$my_file);
//$handle=file_get_contents($target_path);
$loc=0;
$forc=0;
$wc=0;
$ifc=0;
$elsec=0;
$swc=0;
while ($userinfo = fgets($handle)) {
$loc++;
$forc+=substr_count($userinfo,"for");
$wc+=substr_count($userinfo,"while");
$ifc+=substr_count($userinfo,"if");
$elsec+=substr_count($userinfo,"else if");
$swc+=substr_count($userinfo,"switch");
}
//$hv=$_POST["halstead"];

$cc=$forc+$wc+$ifc-$elsec+$swc+1;
echo "Cyclomatic Complxity is";
echo $cc;
?>
</ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->



</body>
</html>