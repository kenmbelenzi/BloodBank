<!--<script type="text/javascript" src="https://static.fusioncharts.com/code/latest/fusioncharts.js"></script>-->
<!---->
<?php
//include 'fusioncharts.php';
//
//
////address of the server where db is installed
//$servername = "localhost";
////username to connect to the db
////the default value is root
//$username = "root";
////password to connect to the db
////this is the value you would have specified during installation of WAMP stack
//$password = "";
////name of the db under which the table is created
//$dbName = "bloodbank";
////establishing the connection to the db.
//$conn = new mysqli($servername, $username, $password, $dbName);
////checking if there were any error during the last connection attempt
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}
////the SQL query to be executed
//$query = "SELECT * FROM top_odi_wicket_takers";
////storing the result of the executed q
//$result = $conn->query($query);
////initialize the array to store the processed data
//$jsonArray = array();
////check if there is any data returned by the SQL Query
//if ($result->num_rows > 0) {
//    //Converting the results into an associative array
//    while($row = $result->fetch_assoc()) {
//        $jsonArrayItem = array();
//        $jsonArrayItem['label'] = $row['BloodGroup'];
//        $jsonArrayItem['value'] = $row['PintsDonated'];
//        //append the above created object into the main array.
//        array_push($jsonArray, $jsonArrayItem);
//    }
//}
////Closing the connection to DB
//$conn->close();
////set the response content type as JSON
//header('Content-type: application/json');
////output the return value of json encode using the echo function.
//echo json_encode($jsonArray);
//?>
<!---->
<!---->
<!---->
<!---->
<html>

<head>
    <script type="text/javascript" src="https://static.fusioncharts.com/code/latest/fusioncharts.js"></script>
    <title>My first chart using FusionCharts Suite XT</title>
    <script type="text/javascript" src="fusioncharts/js/fusioncharts.js"></script>
    <script type="text/javascript" src="fusioncharts/js/themes/fusioncharts.theme.fint.js"></script>
    <script type="text/javascript">
        FusionCharts.ready(function() {
            var revenueChart = new FusionCharts({
                "type": "column2d",
                "renderAt": "chartContainer",
                "width": "500",
                "height": "300",
                "dataFormat": "json",
                "dataSource": {
                    "chart": {
                        "caption": "Monthly revenue for last year",
                        "subCaption": "Harry's SuperMart",
                        "xAxisName": "Month",
                        "yAxisName": "Revenues (In USD)",
                        "theme": "fint"
                    },
                    "data": [{
                        "label": "Jan",
                        "value": "420000"
                    },
                        {
                            "label": "Feb",
                            "value": "810000"
                        },
                        {
                            "label": "Mar",
                            "value": "720000"
                        },
                        {
                            "label": "Apr",
                            "value": "550000"
                        },
                        {
                            "label": "May",
                            "value": "910000"
                        },
                        {
                            "label": "Jun",
                            "value": "510000"
                        },
                        {
                            "label": "Jul",
                            "value": "680000"
                        },
                        {
                            "label": "Aug",
                            "value": "620000"
                        },
                        {
                            "label": "Sep",
                            "value": "610000"
                        },
                        {
                            "label": "Oct",
                            "value": "490000"
                        },
                        {
                            "label": "Nov",
                            "value": "900000"
                        },
                        {
                            "label": "Dec",
                            "value": "730000"
                        }
                    ]
                }

            });
            revenueChart.render();
        })
    </script>
</head>

<body>
<div id="chartContainer">FusionCharts XT will load here!</div>
</body>

</html>