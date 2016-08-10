<!DOCTYPE html>
<html lang="en">

<head>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>A Metrics Tool FP</title>

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

table{
                text-align: center;
}
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
                        <h2>METRICS TOOL - Functional Point</h2>
                        <h3>Balayeswanth B.</h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                        <form action="fp1.php" method="post" enctype="multipart/form-data">
                        <div ng-app=""> 
                        <table>
                        <tr><th><h3>-</h3><th><h3>Values</h3><th>Data<th>Transcation
                                <tr><td><h3>External Input</h3><td><input type="text" ng-model="EI" class="btn btn-default btn-lg" name="ei" placeholder="0-5"required>
                                <td><input type="text" class="btn btn-default btn-lg" name="eid">
                                                                <td><input type="text" class="btn btn-default btn-lg" name="eit">

                                                                

                                <tr><td><h3>External Output</h3><td><input type="text" ng-model="EO" class="btn btn-default btn-lg" name="eo" placeholder="0-5"required>
                                <td><input type="text" class="btn btn-default btn-lg" name="eod">
                                                                <td><input type="text" class="btn btn-default btn-lg" name="eot">
                                                                

                                <tr><td><h3>Logical Internal Files</h3><td><input type="text" ng-model="LIF" class="btn btn-default btn-lg" name="lif" placeholder="0-5"required>
                                <td><input type="text" class="btn btn-default btn-lg" name="lifd">
                                                                        <td><input type="text" class="btn btn-default btn-lg" name="lift">
                                                                        

                                <tr><td><h3>External Qurries</h3><td><input type="text" ng-model="EQ" class="btn btn-default btn-lg" name="eq" placeholder="0-5"required>
                                <td><input type="text" class="btn btn-default btn-lg" name="eqd">
                                                                        <td><input type="text" class="btn btn-default btn-lg" name="eqt">
                                                                        
                                <tr><td><h3>External Interface Files</h3><td><input type="text" ng-model="EIF" class="btn btn-default btn-lg" name="eif" placeholder="0-5"required>
                                <td><input type="text" class="btn btn-default btn-lg" name="eifd">
                                                                        <td><input type="text" class="btn btn-default btn-lg" name="eift">
                                                                        

                                </table>
                                <br><br>
                                
 
<table>
<tr><td><h4>Data communications :<td> <input type="text" ng-model="val1" class="btn btn-default btn-lg" name="val1" placeholder="0-5" required><br> 
<td><h4>Distributed Functions:<td><input type="text" ng-model="val2" class="btn btn-default btn-lg" name="val2" placeholder="0-5" required><br>
<tr><td><h4>Performance:<td><input type="text" ng-model="val3"class="btn btn-default btn-lg" name="val3" placeholder="0-5"required><br>
<td><h4>Heavily used configuration:<td><input type="text" ng-model="val4"class="btn btn-default btn-lg" name="val4" placeholder="0-5"required><br>
<tr><td><h4>Transaction rate:<td><input type="text" ng-model="val5"class="btn btn-default btn-lg" name="val5" placeholder="0-5"required><br>
<td><h4>Online Data Entry:<td><input type="text" ng-model="val6"class="btn btn-default btn-lg" name="val6" placeholder="0-5"required><br>
<tr><td><h4>End-user Efficiency:<td><input type="text" ng-model="val7"class="btn btn-default btn-lg" name="val7" placeholder="0-5"required><br>
<td><h4>On-line update:<td><input type="text" ng-model="val8"class="btn btn-default btn-lg" name="val14" placeholder="0-5"required><br>
<tr><td><h4>Complex Processing:<td><input type="text" ng-model="val9"class="btn btn-default btn-lg" name="val8" placeholder="0-5"required><br>
<td><h4>Reusability:<td><input type="text" ng-model="val10"class="btn btn-default btn-lg" name="val9" placeholder="0-5"required><br>
<tr><td><h4>Installation ease:<td><input type="text" ng-model="val11"class="btn btn-default btn-lg" name="val10" placeholder="0-5"required><br>
<td><h4>Operational Ease:<td><input type="text" ng-model="val12"class="btn btn-default btn-lg" name="val11" placeholder="0-5"required><br>
<tr><td><h4>Multiple sites:<td><input type="text" ng-model="val13"class="btn btn-default btn-lg" name="val12" placeholder="0-5"required><br>
<td><h4>Facilitation of Change:<td><input type="text" ng-model="val14"class="btn btn-default btn-lg" name="val13" placeholder="0-5"required><br>

<tr><td><h4>Total GSC:<td><h4>
{{+val1 + +val2 + +val3 + +val4 + +val5 + +val6 + +val7 + +val8 + +val9 + +val10 + +val11  + +val12 + +val13 + +val14}}</h4>
<td><h3>VAF</h3><td><h3>{{0.65+0.01*(+val1 + +val2 + +val3 + +val4 + +val5 + +val6 + +val7 + +val8 + +val9 + +val10 + +val11  + +val12 + +val13 + +val14)}}</h3>
<tr><td><h4>FP VALUE:<td><h4>
{{(+EI)*4+(+EO)*5+(+EIF)*7+(+LIF)*10+(+EQ)*4+0.65+0.01*(+val1 + +val2 + +val3 + +val4 + +val5 + +val6 + +val7 + +val8 + +val9 + +val10 + +val11  + +val12 + +val13 + +val14)}}
</table>

</div>

                                <br>
                                <br> *Values for EIF 3 CAN BE GIVEN AS "3 4 5"<br><br>    
                                                                        <input type="submit"class="btn btn-default btn-lg">
                                
                                </form>
                               
                            
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

<!--<tr><td><h3>External Input</h3><td><input type="text" class="btn btn-default btn-lg" name="ei">
                                                                <td><input type="text" class="btn btn-default btn-lg" name="eid">
                                                                <td><input type="text" class="btn btn-default btn-lg" name="eim">

                                <tr><td><h3>External Output</h3><td><input type="text" class="btn btn-default btn-lg" name="eo">
                                                                <td><input type="text" class="btn btn-default btn-lg" name="eod">
                                                                <td><input type="text" class="btn btn-default btn-lg" name="eom">

                                <tr><td><h3>Logical Internal Files</h3><td><input type="text" class="btn btn-default btn-lg" name="lif">
                                                                        <td><input type="text" class="btn btn-default btn-lg" name="lifd">
                                                                        <td><input type="text" class="btn btn-default btn-lg" name="lifm">

                                <tr><td><h3>External Qurries</h3><td><input type="text" class="btn btn-default btn-lg" name="eq">
                                                                        <td><input type="text" class="btn btn-default btn-lg" name="eqd">
                                                                        <td><input type="text" class="btn btn-default btn-lg" name="eqm">

                                <tr><td><h3>External Interface Files</h3><td><input type="text" class="btn btn-default btn-lg" name="eif">
                                                                        <td><input type="text" class="btn btn-default btn-lg" name="eifd">
                                                                        <td><input type="text" class="btn btn-default btn-lg" name="eifm">

                                                                    <br> *Values for EIF 3 CAN BE GIVEN AS "3 4 5"<br><br>    
                                                                        <input type="submit"class="btn btn-default btn-lg">
-->