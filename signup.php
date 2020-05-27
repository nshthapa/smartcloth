<?php require_once('inc/top.php'); 
// if (!isset($_SESSION['username'])) {
//     header('location: login.php');
// }
// else if (isset($_SESSION['username']) && $_SESSION['role'] == 'author') {
//     header('location: index.php');
// }


//$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_TABLE);

/*$conn = mysqli_connect("localhost","root","","estore");
if ($conn) {
	echo "DB connected";
}
else{
	echo "DB not connected";
}*/
 ?>

  </head>
  <body>
    <div id="wrapper">
<?php require_once('inc/header.php'); ?>

        <div class="container-fluid body-section">
            <div class="row">
                <div class="col-md-8" >
                    <h1><i class="fa fa-user-plus"></i>Add New Customer </h1><hr>
                    <ol class="breadcrumb">                   
                      <li class="active"><i class="fa fa-user-plus"></i> Add New Customer</li>
                    </ol>
                    <?php 
                    if (isset($_POST['submit'])) {
                        $date = time();
                        $first_name = mysqli_real_escape_string($conn, $_POST['first-name']);
                        $last_name = mysqli_real_escape_string($conn, $_POST['last-name']);
                        $username = mysqli_real_escape_string($conn, strtolower($_POST['username']));
                        $username_trim = preg_replace('/\s+/','',$username);
                        $email = mysqli_real_escape_string($conn, strtolower($_POST['email']));
                        $password = mysqli_real_escape_string($conn, $_POST['password']);                   
                        $image = $_FILES['image']['name'];
                        $image_tmp = $_FILES['image']['tmp_name'];

                        $check_query = "SELECT * FROM customers WHERE username = '$username' or email ='$email'";
                        $check_run = mysqli_query($conn, $check_query);

                        $salt_query = "SELECT * FROM customers ORDER BY id DESC LIMIT 1";
                        $salt_run = mysqli_query($conn, $salt_query);
                        $salt_row = mysqli_fetch_array($salt_run);
                        $salt = $salt_row['salt'];

                        $password = crypt($password, $salt);

                        if (empty($first_name) or empty($last_name) or empty($username) or empty($email) or empty($password) or empty($image)) {
                                $error = "All (*) Fields Are Required";
                        }
                        else if ($username != $username_trim) {
                            $error = "Don't Use Spaces In Username";
                        }
                        else if (mysqli_num_rows($check_run) > 0) {
                            $error = "User Name or Email Already Exist";
                        }
                        else{
                            $insert_query = "INSERT INTO `customers` (`id`, `date`, `first_name`, `last_name`, `username`, `email`, `image`, `password`) VALUES (NULL, '$date', '$first_name', '$last_name', '$username', '$email', '$image', '$password' )";
                            if (mysqli_query($conn, $insert_query)) {
                                $msg = "User Has Been Added";
                                move_uploaded_file($image_tmp, "images/$image");
                                $image_check = "SELECT * FROM customers ORDER BY id DESC LIMIT 1";
                                $image_run = mysqli_query($conn, $image_check);
                                $image_row = mysqli_fetch_array($image_run);
                                $check_image = $image_row['image'];
                                $first_name = "";
                                $last_name = "";
                                $email = "";
                                $username = "";
                            }
                            else{
                                $msg = "User Has Not Been Added";
                            }
                        }
                    }
                     ?>
                    <div class="row">
                        <div class="col-md-8">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                <label for="first-name">First Name:*</label>
                                <?php 
                                if (isset($error)) {
                                    echo "<span class='pull-right' style='color:red;'>$error</span>";
                                }
                                else if (isset($msg)) {
                                    echo "<span class='pull-right' style='color:green;'>$msg</span>";
                                }
                                 ?>
                                <input type="text" id="first-name" name="first-name" class="form-control" value="<?php if (isset($first_name)) { echo $first_name;}?>" placeholder="First Name">
                                </div>

                                <div class="form-group">
                                <label for="last-name">Last Name:*</label>
                                <input type="text" id="last-name" name="last-name" class="form-control" value="<?php if (isset($last_name)) { echo $last_name;}?>" placeholder="Last Name">
                                </div>

                                <div class="form-group">
                                <label for="username">User Name:*</label>
                                <input type="text" id="username" name="username" class="form-control" value="<?php if (isset($username)) { echo $username;}?>" placeholder="Username">
                                </div>

                                <div class="form-group">
                                <label for="email">Email:*</label>
                                <input type="email" id="email" name="email" class="form-control" value="<?php if (isset($email)) { echo $email;}?>" placeholder="Email">
                                </div>

                                <div class="form-group">
                                <label for="password">Password:*</label>
                                <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                                </div>

                           

                                <div class="form-group">
                                <label for="image">Profile Picture:*</label>
                                <input type="file" id="image" name="image">
                                </div>

                                <input type="submit" value="Add User" name="submit" class="btn btn-primary">
                            </form>
                        </div>
                        <div class="col-md-4">
                            <?php 
                            if (isset($check_image)) {
                                echo "<img src= 'images/$check_image' width='100%'>";
                            }
                             ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

     <?php require_once('inc/footer.php'); ?>