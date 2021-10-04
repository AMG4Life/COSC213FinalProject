

<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location:home.php");
}
?>
<html>
    <head>
        <title>Table Data</title>
        <link rel="stylesheet" href="pageStyle.css">
        <style>
            #logout {
                float: right;
            }
        </style>
        <style>

            table {border: 5px;margin-left: auto;margin-right: auto;border-radius: 1px;
                   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-style: outset}
            tr {border: 1px solid black; padding: 2px;}
            #outospc {border: 1px solid black; padding: 2px;min-width: 200px}
            td {border: 1px solid black; padding: 2px;}
            font {font-weight: bold}
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
            <br>
            <h2>Table Query</h2>



            <?php
            $mysqli = mysqli_connect("localhost", "lukassch_AMG", "Samsungg123", "lukassch_coscDB");

            $query = "SELECT * FROM students";
            $result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));

            echo '
                    <table> 
                <tr> 
                    <td> <font face="Arial">ID</font> </td> 
                    <td id="outospc"> <font face="Arial">First Name</font> </td> 
                    <td id="outospc"> <font face="Arial">Last Name</font> </td> 
                </tr>';

            if ($result = $mysqli->query($query)) {
                while ($row = $result->fetch_assoc()) {
                    $field1name = $row["ID"];
                    $field2name = $row["fname"];
                    $field3name = $row["lname"];


                    echo '<tr> 
                                <td>' . $field1name . '</td> 
                                <td>' . $field2name . '</td> 
                                <td>' . $field3name . '</td> 
                            </tr>';
                }
                $result->free();
            }
            ?>

            <br>  <br>
            <h4>Students Table</h4>

            <?php
            $mysqli = mysqli_connect("localhost", "lukassch_AMG", "Samsungg123", "lukassch_coscDB");

            $query = "SELECT * FROM grades";
            $result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));

            echo '<table> 
                <tr> 
                    <td> <font face="Arial">ID</font> </td> 
                    <td id="outospc"> <font face="Arial">Mark</font> </td> 
                    <td id="outospc"> <font face="Arial">Student ID</font> </td> 
                </tr>';

            if ($result = $mysqli->query($query)) {
                while ($row = $result->fetch_assoc()) {
                    $field1name = $row["ID"];
                    $field2name = $row["mark"];
                    $field3name = $row["student_id"];


                    echo '<tr> 
                                <td>' . $field1name . '</td> 
                                <td>' . $field2name . '</td> 
                                <td>' . $field3name . '</td> 
                            </tr>';
                }
                $result->free();
            }
            ?>
            <br>  <br>
            <h4>Grades Table</h4>




            <?php
            $mysqli = mysqli_connect("localhost", "lukassch_AMG", "Samsungg123", "lukassch_coscDB");

            $query = "SELECT s.ID,fname, lname, mark
                            FROM grades g, students s
                            WHERE g.student_id = s.ID AND
                            mark > 3
                            ORDER BY s.ID;";
            $result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));

            print '<table> 
                <tr> 
                    <td> <font face="Arial">Student ID</font> </td> 
                    <td id="outospc"> <font face="Arial">First Name</font> </td> 
                    <td id="outospc"> <font face="Arial">Last Name</font> </td> 
                    <td id="outospc"> <font face="Arial">Grade</font> </td> 
                </tr>';

            if ($result = $mysqli->query($query)) {
                while ($row = $result->fetch_assoc()) {
                    $field1name = $row["ID"];
                    $field2name = $row["fname"];
                    $field3name = $row["lname"];
                    $field4name = $row["mark"];


                    echo '<tr> 
                                <td>' . $field1name . '</td> 
                                <td>' . $field2name . '</td> 
                                <td>' . $field3name . '</td> 
                                <td>' . $field4name . '</td> 
                            </tr>';
                }
                $result->free();
            }
            ?>
            <br>  <br>
            <h4>Joined Table displaying students who have a higher grade than 3</h4>







        </div>
    </body>
</html>







