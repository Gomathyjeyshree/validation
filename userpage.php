
<?php
session_start();
include 'config.php';
$name =$_GET['name'];
?>
<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <link rel="stylesheet" href="./assets/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
   
</head>
<body>
    <div class="container">
        <div class="card col-md-6 p-4 text-center">
            <div class="card-header text-white bg-info">
                <h3 class="mb-4">Welcome to Techie Nutpam</h3>
            </div>
            <div class="card-body">
                <h4>Hi, <strong><?php echo $name; ?></strong> 👋</h4>
                <p class="lead">We're excited to have you here! Enjoy your time at Techie Nutpam.</p>
            </div>
        </div>
        
        <br>
        <input type="submit" value ="Show Users" id="show_user"class="btn btn-info text-white">
        <a href="logout.php" class="btn btn-danger mt-3">Logout</a>
        <br>
        <br>
    </div>

    <div class="card col-md-6 m-5 p-4 text-center" id="cardopen" style="display: none;">
            <div class="card-header text-white bg-info">
                <h3 class="mb-4">User Information</h3>
            </div>
            <div class="card-body">
                <section>
                    <table class="table">
                        <thead>
                            <tr>
                               <td class="scope"><b>Id</b></td>
                               <td class="scope"><b>Name</b></td>
                               <td class="scope"><b>Email</b></td>
                               <td class="scope"><b>Mobile Number</b></td>
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = "select * from newrecord";
                                $concheck = mysqli_query($conn, $sql);

                                while ($row = mysqli_fetch_array($concheck)) {

                                    $sno = $row['sno'];
                                    $name = $row['name'];
                                    $email = $row['email'];
                                    $mobile = $row['mobile'];

                                ?>
                                    <tr>
                                        <td><b><?php echo $sno ?></b></td>
                                        <td><?php echo $name ?></td>
                                        <td><?php echo $email ?></td>
                                        <td><?php echo $mobile ?></td>
                                       
                                    </tr>

                                <?php }

                                ?>

                            </tbody>

                    </table>
                    </section>
               
            </div>
        </div>
    <script src="script.js"></script>
    <script src="./assets/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
