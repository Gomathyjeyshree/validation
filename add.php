<?php
include 'config.php';


if (isset($_POST['submit'])) {
    $errors = array();

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $mobile = trim($_POST['mobile']);


    if (empty($name)) 
    {
          $errors['name'] = "Name is required";

    }
    elseif (!preg_match('/^[a-zA-Z\s]+$/', $name))  {
        $errors['name'] = "Invalid name format";
    }

    if (empty($email))
     {
        $errors['email'] = "Email is required";
    }  elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
           $errors['email'] = "Invalid email format";
    }

    if (empty($password)) {
        $errors['password'] = "please enter password";
    }

    if (empty($mobile)) {
        $errors['mobile'] = "Mobile number is required";
    }     elseif (!preg_match('/^[0-9]{10}$/', $mobile)) {
        $errors['mobile'] = "Invalid mobile number. Must be 10 digits";
    }

    if (empty($errors)) {
        $sql = "INSERT INTO newrecord (name, email, password, mobile) VALUES ('$name', '$email', '$password', '$mobile')";
        $concheck = mysqli_query($conn, $sql);
        if ($concheck) {
            session_start();
            $_SESSION["SS_msg"] = "Successfully Registered";
            echo '<script> location.replace("index.php")</script>';
        } else {
            echo "Failed to update: " . $conn->error;
        }
    }
}

?>


<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registeration</title>
    <link rel="stylesheet" href="./assets/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel ="stylesheet" href ="style.css">
</head>

<body>
    
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="card-header bg-primary text-white text-center">
                        <h3>Signup Techie</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" name="name" placeholder="Enter Name" class="form-control"
                                        value="<?php echo isset($name) ? $name : ''; ?>">
                                    <span class="text-danger"><?php echo isset($errors['name']) ? $errors['name'] : ''; ?></span>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" placeholder="Enter Email" class="form-control"
                                        value="<?php echo isset($email) ? $email : ''; ?>">
                                    <span class="text-danger"><?php echo isset($errors['email']) ? $errors['email'] : ''; ?></span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password" placeholder="Enter Password" class="form-control">
                                    <span class="text-danger"><?php echo isset($errors['password']) ? $errors['password'] : ''; ?></span>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="mobile" class="form-label">Mobile Number</label>
                                    <input type="text" name="mobile" maxlength="10" placeholder="Enter Mobile Number"
                                        class="form-control" value="<?php echo isset($mobile) ? $mobile : ''; ?>">
                                    <span class="text-danger"><?php echo isset($errors['mobile']) ? $errors['mobile'] : ''; ?></span>
                                </div>
                            </div>


                            <div class="text-center">
                                <input type="submit" value="Register" name="submit" class="btn btn-success">
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./assets/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/bootstrap-5.3.3-dist/js/jquery.min.js"></script>
</body>

</html>

