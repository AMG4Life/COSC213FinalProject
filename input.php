<!DOCTYPE html>
<html>

    <head>
        <title>Input Data</title>
        <link rel="stylesheet" href="pageStyle.css">
        <style>
            #logout {
                float: right;
            }
        </style>
    </head>
    <body>
        <div class="menu">
            <a href="index.html" >Home</a>
            <a href="examples.html">Examples</a>
            <a href="about.html">About</a>
            <a href="ajax.html">AJAX</a>
            <a href="DatabaseFormsAndReport.html">Database input</a>
            <div id="logout">
                <a href="home.php" >Log out</a>
            </div>
        </div>
        <br>
        <div class="content">

            <?php
// Create connection
            $conn = new mysqli("localhost", "lukassch_AMG", "Samsungg123", "lukassch_coscDB");

// Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }


            $sql = "INSERT INTO table1 (firstName,lastName,email) VALUES ('" . $_POST["firstName"] . "', '" . $_POST["lastName"] . "', '" . strtolower($_POST["email"]) . "')";




            if ($conn->query($sql) === TRUE) {
                echo "<b>New record created successfully </b><br>";
                printf("<b>Name: </b>%-15s ", $_POST["firstName"] . " " . $_POST["lastName"]);
                printf("<b>Email: </b>%-20s <br>", $_POST["email"]);
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
            ?>
            <br>
            <p></p><a href="print.php">Get all the data in the table</a></p>
    </div>
</body>
</html>

