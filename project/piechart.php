<?php
include("db.php");
$q1 = "select * from voter_list where vote=1";
$temp1 = mysqli_query($con, $q1);
$n1 = mysqli_num_rows($temp1);
$q2 = "select * from voter_list where vote=2";
$temp2 = mysqli_query($con, $q2);
$n2 = mysqli_num_rows($temp2);
$q3 = "select * from voter_list where vote=3";
$temp3 = mysqli_query($con, $q3);
$n3 = mysqli_num_rows($temp3);
$q4 = "select * from voter_list where vote=4";
$temp4 = mysqli_query($con, $q4);
$n4 = mysqli_num_rows($temp4);
$q5 = "select * from voter_list";
$temp5 = mysqli_query($con, $q5);
$n5 = mysqli_num_rows($temp5);
?>

<!DOCTYPE html>
<html>

<head>
    <title>register portal</title>
    <link rel="icon" href="img/logo/logo vote now.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/registerportal.css">
    <link rel="stylesheet" href="css/result.css">
    <!-- chart script -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
        google.charts.load('current', {'packages': ['corechart']});
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-sm  bg-dark sticky-md-top">
        <div class="container-fluid justify-content-center">

            <ul class="navbar-nav">
                <li class="nav-item itemsofnav">
                    <img src="img/logo/flower white removed.png" alt="logo" width="60">
                </li>
                <li class="nav-item itemsofnav">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item itemsofnav">
                    <a class="nav-link" href="index.php#Service">News</a>
                </li>
                <li class="nav-item itemsofnav">
                    <a class="nav-link" href="index.php#Service">Services</a>
                </li>
                <li class="nav-item itemsofnav">
                    <a class="nav-link" href="index.php#About Us">About Us</a>
                </li>
                <li class="nav-item itemsofnav">
                    <a class="nav-link" href="conTactus.php">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="sec">
    <div class="r_sec">
        <h1>Fish =<?php echo $n1; ?></h1>
        <h1>Glass = <?php echo $n2; ?></h1>
        <h1>Bulb = <?php echo $n3; ?></h1>
        <h1>NOTA = <?php echo $n4; ?></h1>
        <h1>Total = <?php echo $n5; ?></h1>
    </div>
    <div class="chart_div" id="chart_div"></div>
    </div>
    <script>
        // Callback that draws the pie chart
        google.charts.setOnLoadCallback(draw_my_chart);

        function draw_my_chart(){
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'candidate');
            data.addColumn('number', 'No');
            data.addRows([['Fish', 3],
                        ['Bulb', 1],
                        ['Glass', 2],
                        ['NOTA', 1]
                        ]);
                        // above row adds the JavaScript two dimensional array data into required chart format
            var options = {title:'Result:Pie Chart',is3D:'true',legend:'left',backgroundColor: 'transparent',width:800,height:600,};
            // Instantiate and draw the chart
             var chart = new google.visualization.PieChart(document.getElementById('chart_div'));//in which div the char will be displayed
            chart.draw(data, options);
}
    </script>
    <div class="bottom">
        .
    </div>
</body>

</html>