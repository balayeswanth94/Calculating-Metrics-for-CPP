<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>A Metrics Tool</title>

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
                        <h2>METRICS TOOL</h2>
                        <h3>Balayeswanth B.</h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">

<?php
$totalval=$_POST["val1"]+$_POST["val2"]+$_POST["val3"]+$_POST["val4"]+$_POST["val5"]+$_POST["val6"]+$_POST["val7"]+$_POST["val8"]+$_POST["val9"]+$_POST["val10"]+$_POST["val11"]+$_POST["val12"]+$_POST["val13"]+$_POST["val14"];
$vaf=0.65+0.01*($totalval);

$ei=$_POST["ei"];
$eo=$_POST["eo"];
$eif=$_POST["eif"];
$lif=$_POST["lif"];
$eq=$_POST["eq"];

$eid=$_POST["eid"];
$eid=explode(" ",$eid,$ei);
//print_r($eid);
$eod=$_POST["eod"];
$eod=explode(" ",$eod,$eo);
$eifd=$_POST["eifd"];
$efid=explode(" ",$eifd,$eif);
$lifd=$_POST["lifd"];
$lifd=explode(" ",$lifd,$lif);
$eqd=$_POST["eqd"];
$eqd=explode(" ",$eqd,$eq);

$eit=$_POST["eit"];
$eit=explode(" ",$eit,$ei);
//print_r($eit);
$eot=$_POST["eot"];
$eot=explode(" ",$eot,$eo);
$eift=$_POST["eift"];
$eift=explode(" ",$eift,$eif);
$lift=$_POST["lift"];
$lift=explode(" ",$lift,$lif);
$eqt=$_POST["eqt"];
$eqt=explode(" ",$eqt,$eq);

$ei_sum=0;
$eo_sum=0;
$eif_sum=0;
$lif_sum=0;
$eq_sum=0;
for($i=0;$i<$ei;$i++)
{
    if($eit[$i]==1)
    {
        //echo "ok2";
        if(($eid[$i]>0)&&($eid[$i]<5))
        {
            $ei_sum+=3;
        }
        if(($eid[$i]>=5)&&($eid[$i]<=15))
        {
            $ei_sum+=3;
        }
        if(($eid[$i]>15))
        {
            $ei_sum+=4;
        }
    }
    if($eit[$i]==2)
    {
        //echo "ok21";
        if(($eid[$i]>0)&&($eid[$i]<5))
        {
            $ei_sum+=3;
        }
        if(($eid[$i]>=5)&&($eid[$i]<=15))
        {
            $ei_sum+=4;
        }
        if(($eid[$i]>15))
        {
            $ei_sum+=6;
        }
    }
    if($eit[$i]>2)
    {
        //echo "ok22";
        if(($eid[$i]>0)&&($eid[$i]<5))
        {
            $ei_sum+=4;
        }
        if(($eid[$i]>=5)&&($eid[$i]<=15))
        {
            $ei_sum+=6;
        }
        if(($eid[$i]>15))
        {
            $ei_sum+=6;
        }
    }
}

for($i=0;$i<$eo;$i++)
{
    if($eot[$i]==1)
    {
        if(($eod[$i]>0)&&($eod[$i]<=5))
        {
            $eo_sum+=4;
        }
        if(($eod[$i]>5)&&($eod[$i]<=19))
        {
            $eo_sum+=4;
        }
        if(($eod[$i]>19))
        {
            $eo_sum+=5;
        }
    }
    if(($eot[$i]>=2)&&($eot[$i])<=3)
    {
        if(($eod[$i]>0)&&($eod[$i]<=5))
        {
            $eo_sum+=4;
        }
        if(($eod[$i]>5)&&($eod[$i]<=19))
        {
            $eo_sum+=5;
        }
        if(($eod[$i]>19))
        {
            $eo_sum+=7;
        }
    }
    if($eot[$i]>3)
    {
        if(($eod[$i]>0)&&($eod[$i]<=5))
        {
            $eo_sum+=5;
        }
        if(($eod[$i]>5)&&($eod[$i]<=19))
        {
            $eo_sum+=7;
        }
        if(($eod[$i]>19))
        {
            $eo_sum+=7;
        }
    }
}

for($i=0;$i<$eq;$i++)
{
    if($eqt[$i]==1)
    {
        if(($eqd[$i]>0)&&($eqd[$i]<=5))
        {
            $eq_sum+=3;
        }
        if(($eqd[$i]>5)&&($eqd[$i]<=19))
        {
            $eq_sum+=3;
        }
        if(($eqd[$i]>19))
        {
            $eq_sum+=4;
        }
    }
    if(($eqt[$i]>=2)&&($eqt[$i])<=3)
    {
        if(($eqd[$i]>0)&&($eqd[$i]<=5))
        {
            $eq_sum+=3;
        }
        if(($eqd[$i]>5)&&($eqd[$i]<=19))
        {
            $eq_sum+=4;
        }
        if(($eqd[$i]>19))
        {
            $eq_sum+=6;
        }
    }
    if($eqt[$i]>3)
    {
        if(($eqd[$i]>0)&&($eqd[$i]<=5))
        {
            $eq_sum+=4;
        }
        if(($eqd[$i]>5)&&($eqd[$i]<=19))
        {
            $eq_sum+=6;
        }
        if(($eqd[$i]>19))
        {
            $eq_sum+=6;
        }
    }
}

for($i=0;$i<$lif;$i++)
{
    if($lift[$i]==1)
    {
        if(($lifd[$i]>0)&&($lifd[$i]<=19))
        {
            $lif_sum+=7;
        }
        if(($lifd[$i]>=20)&&($lifd[$i]<=50))
        {
            $lif_sum+=7;
        }
        if(($lifd[$i]>50))
        {
            $lif_sum+=10;
        }
    }
    if(($lift[$i]>=2)&&($lift[$i])<=5)
    {
        if(($lifd[$i]>0)&&($lifd[$i]<=19))
        {
            $lif_sum+=7;
        }
        if(($lifd[$i]>=20)&&($lifd[$i]<=50))
        {
            $lif_sum+=10;
        }
        if(($lifd[$i]>50))
        {
            $lif_sum+=15;
        }
    }
    if($lift[$i]>5)
    {
        if(($lifd[$i]>0)&&($lifd[$i]<=19))
        {
            $lif_sum+=10;
        }
        if(($lifd[$i]>=20)&&($lifd[$i]<=50))
        {
            $lif_sum+=15;
        }
        if(($lifd[$i]>50))
        {
            $lif_sum+=15;
        }
    }
}

for($i=0;$i<$eif;$i++)
{
    if($eift[$i]==1)
    {
        if(($eifd[$i]>0)&&($eifd[$i]<=19))
        {
            $eif_sum+=5;
        }
        if(($eifd[$i]>=20)&&($eifd[$i]<=50))
        {
            $eif_sum+=5;
        }
        if(($eifd[$i]>50))
        {
            $eif_sum+=7;
        }
    }
    if(($eift[$i]>=2)&&($eift[$i])<=5)
    {
        if(($eifd[$i]>0)&&($eifd[$i]<=19))
        {
            $eif_sum+=5;
        }
        if(($eifd[$i]>=20)&&($eifd[$i]<=50))
        {
            $eif_sum+=7;
        }
        if(($eifd[$i]>50))
        {
            $eif_sum+=10;
        }
    }
    if($eift[$i]>5)
    {
        if(($eifd[$i]>0)&&($eifd[$i]<=19))
        {
            $eif_sum+=7;
        }
        if(($eifd[$i]>=20)&&($eifd[$i]<=50))
        {
            $eif_sum+=10;
        }
        if(($eifd[$i]>50))
        {
            $eif_sum+=10;
        }
    }
}

$fp=$ei_sum+$eo_sum+$eif_sum+$lif_sum+$eq_sum;
$ans=$fp+$vaf;

echo "<h3>FP is <h3>";
echo $ans;


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

