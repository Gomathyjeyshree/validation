<?php
session_start();
include 'config.php'; 

if (isset($_SESSION['SS_msg'])) {
    echo '<div id="S_msg" style="
            position: fixed; 
            top: 20px; 
            right: 20px; 
            background: green; 
            font-weight: normal; 
            color: white; 
            padding: 15px; 
            width: auto; 
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
            z-index: 1000;">
            ' . $_SESSION['SS_msg'] . '
          </div>';
    unset($_SESSION['SS_msg']);
}

if (isset($_POST['signin'])) {
    $name = trim($_POST['name']);
    $password = trim($_POST['password']);
    $errors = [];

    if (empty($name)) {
        $errors['name'] = "Name is required.";
    }
    if (empty($password)) {
        $errors['password'] = "Password is required.";
    }

    if (empty($errors)) {
        $query = "SELECT * FROM newrecord WHERE name = ? AND password = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ss", $name, $password); 
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();


            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $name;
            $_SESSION['SS_msg'] = "Login successful! Welcome, $name.";

            $_SESSION["SS_msg"] = "Successfully Registered";
            echo '<script> location.replace("userpage.php?name='.urlencode($name).'")</script>';
            exit();
        } else {
            $errors['name'] = "Invalid username or password.";
        }

        $stmt->close();
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in Techie</title>
    <link rel="stylesheet" href="./assets/bootstrap-5.3.3-dist/css/bootstrap.min.css">

    <link rel ="stylesheet" href ="style.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white text-center">
                        <h3 class="mb-0">Sign in Techie</h3>
                    </div>

                    <div class="card-body p-4">
                        <form action="" method="POST">
                            <div class="col-md-9 mb-3">
                                <label for="name" class="form-label"><b>Name *</b></label>
                                <input type="text" name="name" placeholder="Enter Name" class="form-control" 
                                    value="<?php echo isset($name) ? htmlspecialchars($name) : ''; ?>">
                                <span class="text-danger"><?php echo isset($errors['name']) ? $errors['name'] : ''; ?></span>
                            </div>

                            <div class="col-md-9 mb-3">
                                <label for="password" class="form-label"><b>Password *</b></label>
                                <input type="password" name="password" placeholder="Enter Password" class="form-control">
                                <span class="text-danger"><?php echo isset($errors['password']) ? $errors['password'] : ''; ?></span>
                            </div>

                            <div class="col-md-6 text-center">
                                <input type="submit" value="Sign in" name="signin" class="btn btn-info text-white w-100">
                            </div>
                        </form>

                        <div class="text-center mt-3">
                            <a href="add.php">Don't have an account? Register Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="script.js">

    </script>
    <script src="./assets/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</body>
</html>
