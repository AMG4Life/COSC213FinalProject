

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
            <h2>Table Data</h2>
            <br>
            <br>
            <div style="text-align: center; font-size: 20px;">
                <?php
                $mysqli = mysqli_connect("localhost", "lukassch_AMG", "Samsungg123", "lukassch_coscDB");

                $query = "SELECT * FROM table1";
                $result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));

                echo '<table> 
                <tr> 
                    <td> <font face="Arial">ID</font> </td> 
                    <td id="outospc"> <font face="Arial">Name</font> </td> 
                    <td id="outospc"> <font face="Arial">Email</font> </td> 
                </tr>';

                if ($result = $mysqli->query($query)) {
                    while ($row = $result->fetch_assoc()) {
                        $field1name = $row["ID"];
                        $field2name = $row["firstName"];
                        $field2name .= ' ' . $row["lastName"];
                        $field3name = $row["email"];


                        echo '<tr> 
                                <td>' . $field1name . '</td> 
                                <td>' . $field2name . '</td> 
                                <td>' . $field3name . '</td> 
                            </tr>';
                    }
                    $result->free();
                }
                ?>
            </div>




        </pre> 
    </div>
</body>
</html>
