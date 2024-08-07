<?php //php code for handling updation getting from form
include "db_conn.php";
$id = $_GET['id'];

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    if ($name != "" && $phone != "" && $email != "") {//form validation or error handling
        if (strlen($phone) != 10) {
            echo '<script>alert("Invalid Phone Number");</script>';
        } else {
            $sql = "UPDATE `contact_list` SET `name`='$name',`phone`='$phone',`email`='$email' WHERE id=$id";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                header("Location: index.php?msg=Contact Updated Successfully");
            } else {
                echo "Failed " . mysqli_error($conn);
            }
        }
    }
}
?>

<!-- html code for updation page -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title> Contacts </title>
</head>

<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color:#00ff5573">
        Contacts List
    </nav>

    <div class="container">

        <div class="text-center mb-4">
            <h3>Edit Contact</h3>
            <p class="text-muted">Click Update After Changing Information Below</p>
        </div>

        <?php
        $sql = "SELECT * from `contact_list` where id=$id LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>

        <form action="" method="post" style="width:50vw; min-width:300px;">

            <div class="mb-3">
                <label for="name" class="form-label">Name :</label>
                <input type="text" class="form-control" name="name" value="<?= $row['name'] ?>" id="name">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email :</label>
                <input type="email" class="form-control" name="email" value="<?= $row['email'] ?>" id="email">
            </div>

            <div class="mb-3">
                <label class="form-label" for="phone">Phone No. :</label>
                <input type="number" class="form-control" name="phone" value="<?= $row['phone'] ?>" id="phone">
            </div>

            <button type="submit" class="btn btn-success" name="submit">Update</button>
            <a href="index.php" class="btn btn-danger">Cancel</a>
        </form>
    </div>


    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>