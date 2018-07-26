<?php
require_once '../database/Db.php';

try {
$from=2018/02/02;
$to =2020/02/02;
    $sql = 'SELECT DonationId,BloodGroup,PintsDonated
               FROM donation WHERE year(DonationDate) BETWEEN 2012 AND 2020
              ORDER BY DonationId';

    $q = $db->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {

}
?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP MySQL Query Data Demo</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<div id="container">
    <h1>Employees</h1>
    <table class="table table-bordered table-condensed">
        <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Job Title</th>
        </tr>
        </thead>
        <tbody>
        <?php while ($row = $q->fetch()): ?>
            <tr>
                <td><?php echo htmlspecialchars($row['DonationId']) ?></td>
                <td><?php echo htmlspecialchars($row['BloodGroup']); ?></td>
                <td><?php echo htmlspecialchars($row['PintsDonated']); ?></td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</body>
</div>
</html>
