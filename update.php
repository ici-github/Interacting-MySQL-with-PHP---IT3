<?php
    include("database.php");

    $get_lrn = $_GET['lrn'];

    $sql = "SELECT * FROM students WHERE lrn = $get_lrn";
    $query = mysqli_query($connection, $sql);
    $student = mysqli_fetch_array($query);
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
    </style>
</head>
<body>
    <form method="post">
        <table border="1" cellpadding="5" cellspacing="0">
            <tr>
                <td>LRN</td>
                <td><input type="number" name="lrn" required value="<?php echo $student['lrn']; ?>" placeholder="Please enter LRN"></td>
            </tr>
            <tr>
                <td>Lastname</td>
                <td><input type="text" name="lastname" required value="<?php echo $student['lastname']; ?>" placeholder="Please enter Lastname"></td>
            </tr>
            <tr>
                <td>Firstname</td>
                <td><input type="text" name="firstname" required value="<?php echo $student['firstname']; ?>" placeholder="Please enter Firstname"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Update Student" class="button" name="update_student">
                </td>
            </tr>
        </table>
    </form>
    <?php
        // create isset() function to check if the button is clicked, when it is click, the result condition is TRUE
        if(isset($_POST['update_student'])) {

            //create simplified varibles from the $_POST[] variables to avoid mess in code.
            $lrn = trim($_POST['lrn']);
            $lastname = trim($_POST['lastname']);
            $firstname = trim($_POST{'firstname'});

            $sql = "UPDATE students SET lrn = '$lrn', lastname = '$lastname', firstname = '$firstname' WHERE lrn = $get_lrn";

            $result = mysqli_query($connection, $sql);

            if($result == TRUE) {
                echo "<script> alert('Student has been successfully updated to the database'); window.location='select.php';</script>";
            } else {
                echo "<script> alert('Failed to update Student'); </script>";
            }
        }



        // $sql = "INSERT INTO students (lrn, lastname, firstname) VALUES (928475873897, 'Sumalinog', 'Matthew');";
        // $result = mysqli_query($connection, $sql);

        // if($result == TRUE) {
        //     echo "<script> alert('Student has been successfully inserted to the database'); </script>";
        // } else {
        //     echo "<script> alert('Failed to insert Student'); </script>";
        // }

    ?>
</body>
</html>