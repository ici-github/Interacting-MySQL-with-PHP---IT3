<?php
    include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
        }

        table {
            margin: 0 auto;
        }
        td {
            padding: 5px;
        }
        
        .button {
            width: 100%;
            padding: 5px;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
        $sql = "SELECT * FROM students";
        $query = mysqli_query($connection, $sql);
        $num_of_students = mysqli_num_rows($query);

        function displayAllStudents() {
            GLOBAL $connection;

            $sql = "SELECT * FROM students ORDER BY lastname ASC";
            $query = mysqli_query($connection, $sql);

            while($result = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>" . $result['lrn'] . "</td>";
                echo "<td>" . $result['lastname'] . ', ' . $result['firstname'] . "</td>";
                echo "</tr>";
            }
        }
    ?>
    <h2>Number of students in database are: <?php echo $num_of_students; ?></h2>
    
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <td>LRN</td>
            <td>Student Complete Name</td>
        </tr>
        <?php displayAllStudents(); ?>
    </table>
 </body>
</html>