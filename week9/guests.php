<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>

<?php
$servername = "localhost";
$username = "webprogss211";
$password = "webprogss211";
$dbname = "webprogss211";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM kvdizon_myguests";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table class='table'>
            <thead>
                <tr>
                <th>ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Comments</th>
                    <th>Email</th>
                    <th>Website</th>
                    <th>Registration Date</th>
                    </tr>
                    </thead>";
                    // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tbody>
                    <tr>
                        <td>".$row["id"]."</td>
                        <td>".$row["name"]."</td>
                        <td>".$row["gender"]."</td>
                        <td>".$row["comments"]."</td>
                        <td>".$row["email"]."</td>
                        <td>".$row["website"]."</td>
                        <td>".$row["reg_date"]."</td>
                        </tr>
                        </tbody>";
                    }
        echo "</table>";
        } else {
            echo "0 results";
        }

$conn->close();
?>

</body>
</html>