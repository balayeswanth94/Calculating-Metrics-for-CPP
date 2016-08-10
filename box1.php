<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>A Metrics Tool Box plot</title>

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
                        <h2>METRICS TOOL - BOX PLOT</h2>
                        <h3>Balayeswanth B.</h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">

<?php
$n=intval($_POST["n"]);
$values=$_POST["values"];
//echo $values;
$value=explode(" ",$values);
//print_r($value);
sort($value);
$size=count($value);

foreach ($value as $key) {

    echo $key;
    echo " ";
}
echo "<br>";
function median1($n)
{
	if($n%2!=0)
	{
		$ipo[0]=intval($n/2+1);
		$ipo[1]=$ipo[0];
	}
	else
	{
		$ipo[0]=intval($n/2);
		$ipo[1]=intval($n/2 +1);
	}
	return $ipo;
}
$po=median1($size);
//print_r($po);

$med=($value[$po[0]-1]+$value[$po[1]-1])/2.0;
$x=$po[1];
//echo $po[0]-1;
$po=median1($po[0]-1);
$lq=($value[$po[0]-1]+$value[$po[1]-1])/2.0;
$uq=($value[$x+$po[0]-1]+$value[$x+$po[1]-1])/2.0;
$bl=$uq-$lq;
$lt=$lq-1.5*$bl;
$ut=$uq+1.5*($bl);
echo $x+$po[1]-1;

echo "Lower Quartile : ";
echo $lq;
echo "<br>";
echo "Upper Quartile : ";
echo $uq;
echo "<br>";
echo "Box Length : ";
echo $bl;
echo "<br>";
echo "Lower Tail : ";
echo $lt;
echo "<br>";
echo "Upper Tail : ";
echo $ut;
echo "<br>";
for($i=0;$i<$n;$i++)
{
	if(($value[$i]>$ut)||($value[$i]<$lt))
	{	
		echo "Outlier : ";
		echo $value[$i];
		echo "<br>";
	}

}
/*	lq=(a[po1-1]+a[po2-1])/2.0;
	uq=(a[x+po1-1]+a[x+po2-1])/2.0;
	bl=uq-lq;
	lt=(float)lq-1.5*(bl);
	ut=(float)uq+1.5*(bl); */
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

