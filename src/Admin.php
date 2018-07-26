
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
<?php


include_once 'adminsidenav.php';

//address of the server where db is installed
$servername = "localhost";

//username to connect to the db
//the default value is root
$username = "root";

//password to connect to the db stack
$password = "";

//name of the db under which the table is created
$dbName = "bloodbank";

//establishing the connection to the db.
$conn = new mysqli($servername, $username, $password, $dbName);

//checking if there were any error during the last connection attempt
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//the SQL query to be executed
$query = "SELECT BloodGroup,Quantity FROM stock";

//storing the result of the executed query
$result = $conn->query($query);

$data=array();
foreach ($result as $row){
    $data[] = $row;
}
//Closing the connection to DB
$conn->close();



?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>Chart</title>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
</head>
<body>
<div class="main">
    <h1>Current blood stocks</h1>
<div id="myfirstchart" style="height: 400px;"></div>

<script type="text/javascript">
    new Morris.Bar({
        // ID of the element in which to draw the chart.
        element: 'myfirstchart',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: <?php echo json_encode($data); ?>,
        // The name of the data record attribute that contains x-values.
        xkey: 'BloodGroup',
        // A list of names of data record attributes that contain y-values.
        ykeys: ['Quantity'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['Quantity']
    });
</script>
</div>
</body>
</html>

</body>
</html>