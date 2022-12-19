<?php

    include 'config.php';

    error_reporting(0);

    session_start();

    if(isset($_SESSION['username'])){
        header("Location : login.php");
    }

    if (isset($_POST['submit'])){
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $cpassword=$_POST['cpassword'];

        if($password==$cpassword){
            
            $sql = "SELECT * FROM register WHERE email='$email'";
            $result = mysqli_query($conn, $sql);

            if(!$result->num_rows>0){
                $sql = "INSERT INTO register (username, email, password) VALUES ('$username', '$email', '$password')";
                $result = mysqli_query($conn, $sql);

                if($result){
                    echo "<script>alert('User Registration Complete!')</script>";
                    $username = "";
                    $email = "";
                    $_POST['password']="";
                    $_POST['cpassword']="";
                }
                else{
                    echo "<script>alert('Something Went Wrong')</script>";
                }

            }else{
                echo "<script>alert('Username Already Exists')</script>";
            }

        }
        else{
            echo "<script>alert('Passwords dont Match')</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    
<div class="container mt-3">
    <h1>Register here! </h1>
    
    <form action="" method="post">
    <div class="form-group">
        <label>Enter Your Name</label>
        <input type="text" name="username" class="form-control" id="username" value="<?php echo $username; ?>" required>
    </div>

    <div class="form-group">
        <label>Enter Your Email</label>
        <input type="email" name="email" class="form-control" id="email" value="<?php echo $email; ?>" required> 
    </div>

    <div class="form-group">
        <label>Enter Your Password</label>
        <input type="password" name="password" class="form-control" id="password" value="<?php echo $_POST['password'];?>" required>
    </div>

    <div class="form-group">
        <label>Confirm Password</label>
        <input type="password" name="cpassword" class="form-control" id="cpassword" value = "<?php echo $_POST['cpassword'];?>" required> 
    </div>
    
    <div>
      <button name="submit"  id="btn" class="btn btn-primary">Register</button>
    </div>
</form>
    <p class ="registertext">Already Have An Account?<a href="login.php"> Click Here</a></p> 
</div>

</body>
</html>