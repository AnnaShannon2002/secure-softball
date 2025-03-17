<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Championship Season</title>
    </head>
    <body>
        UNA Softball 2016 National Champions
        <?php
        // TODO Display the content of the games table here.
        // TODO: Use a HTML table to display each row and column in the table.
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "softball";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT id, opponent, site, result FROM games";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "id: " . $row["id"] . " | Opponent: " . $row["opponent"] . " | Site: " . $row["site"] . " | Result: " . $row["result"] . "<br><br>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </body>
</html>
