<?php  //php code for getting data from form
include "db_conn.php"; //including database connection file for operation performing

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    if ($name != "" && $phone != "" && $email != "") { //error handling or validation

        if (strlen($phone) != 10) {
            echo '<script>alert("Invalid Phone Number");</script>';
        } else {
            $sql = "INSERT INTO `contact_list`(`name`, `phone`, `email`) VALUES ('$name','$phone','$email')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                header("Location: index.php?msg=New Contact Saved Successfully");
            } else {
                echo "Failed " . mysqli_error($conn);
            }
        }
    } else {
        echo '<script>alert("Please Fill All the Fields");</script>';
    }
}
?>

<!-- html code for webpage layout for Adding contact -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title> Contacts </title>
</head>

<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color:#00ff5573">
        Contacts List
    </nav>

    <div class="container">

        <div class="text-center mb-4">
            <h3>Add New Contact</h3>
            <p class="text-muted text-center">Enter The Details Below</p>
        </div>

        <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="mb-3">
                <label for="name" class="form-label">Name :</label>
                <input type="text" class="form-control" name="name" placeholder="Name" id="name">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email :</label>
                <input type="email" class="form-control" name="email" placeholder="Email" id="email">
            </div>

            <div class="mb-3">
                <label class="form-label" for="phone">Phone No. :</label>
                <input type="number" class="form-control" name="phone" minlength="10" maxlength="10"
                    placeholder="Phone No." id="phone">
            </div>

            <button type="submit" class="btn btn-success" name="submit">Save</button>
            <a href="index.php" class="btn btn-danger">Cancel</a>
        </form>
    </div>


    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>